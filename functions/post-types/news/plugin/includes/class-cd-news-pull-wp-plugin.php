<?php
/**
 * The file that defines the core plugin class
 *
 * A class definition that includes attributes and functions used across both the
 * public-facing side of the site and the admin area.
 *
 * @link       https://github.com/CU-CommunityApps
 * @since      1.0.0
 *
 * @package    Cd_News_Pull_Wp_Plugin
 * @subpackage Cd_News_Pull_Wp_Plugin/includes
 */

/**
 * The core plugin class.
 *
 * This is used to define internationalization, admin-specific hooks, and
 * public-facing site hooks.
 *
 * Also maintains the unique identifier of this plugin as well as the current
 * version of the plugin.
 *
 * @since      1.0.0
 * @package    Cd_News_Pull_Wp_Plugin
 * @subpackage Cd_News_Pull_Wp_Plugin/includes
 * @author     psw58 <psw58@cornell.edu>
 */
class Cd_News_Pull_Wp_Plugin {

	/**
	 * The loader that's responsible for maintaining and registering all hooks that power
	 * the plugin.
	 *
	 * @since    1.0.0
	 * @access   protected
	 * @var      Cd_News_Pull_Wp_Plugin_Loader    $loader    Maintains and registers all hooks for the plugin.
	 */
	protected $loader;

	/**
	 * The unique identifier of this plugin.
	 *
	 * @since    1.0.0
	 * @access   protected
	 * @var      string    $plugin_name    The string used to uniquely identify this plugin.
	 */
	protected $plugin_name;

	/**
	 * The current version of the plugin.
	 *
	 * @since    1.0.0
	 * @access   protected
	 * @var      string    $version    The current version of the plugin.
	 */
	protected $version;

	/**
	 * Define the core functionality of the plugin.
	 *
	 * Set the plugin name and the plugin version that can be used throughout the plugin.
	 * Load the dependencies, define the locale, and set the hooks for the admin area and
	 * the public-facing side of the site.
	 *
	 * @since    1.0.0
	 */
	public function __construct() {
		if ( defined( 'CD_NEWS_PULL_WP_PLUGIN_VERSION' ) ) {
			$this->version = CD_NEWS_PULL_WP_PLUGIN_VERSION;
		} else {
			$this->version = '1.0.0';
		}
		$this->plugin_name = 'cd-news-pull-wp-plugin';
		$this->load_dependencies();
		$this->set_locale();
		$this->define_admin_hooks();
		$this->define_processor_hooks();
	}

	/**
	 * Load the required dependencies for this plugin.
	 *
	 * Include the following files that make up the plugin:
	 *
	 * - Cd_News_Pull_Wp_Plugin_Loader. Orchestrates the hooks of the plugin.
	 * - Cd_News_Pull_Wp_Plugin_i18n. Defines internationalization functionality.
	 * - Cd_News_Pull_Wp_Plugin_Admin. Defines all hooks for the admin area.
	 * - Cd_News_Pull_Wp_Plugin_Public. Defines all hooks for the public side of the site.
	 *
	 * Create an instance of the loader which will be used to register the hooks
	 * with WordPress.
	 *
	 * @since    1.0.0
	 * @access   private
	 */
	private function load_dependencies() {

		/**
		 * The class responsible for orchestrating the actions and filters of the
		 * core plugin.
		 */
		require_once 'class-cd-news-pull-wp-plugin-loader.php';

		/**
		 * The class responsible for defining internationalization functionality
		 * of the plugin.
		 */
		require_once 'class-cd-news-pull-wp-plugin-i18n.php';

		/**
		 * The class responsible for defining all actions that occur in the admin area.
		 */
		require_once get_theme_file_path('/functions/post-types/news/plugin/admin/class-cd-news-pull-wp-plugin-admin.php');

		/**
		 * The class responsible for loading the CU news.
		 */
		require_once get_theme_file_path('/functions/post-types/news/plugin/utils/class-cd-news-pull-wp-plugin-utils-processor.php');

		$this->loader = new Cd_News_Pull_Wp_Plugin_Loader();

	}

	/**
	 * Define the locale for this plugin for internationalization.
	 *
	 * Uses the Cd_News_Pull_Wp_Plugin_i18n class in order to set the domain and to register the hook
	 * with WordPress.
	 *
	 * @since    1.0.0
	 * @access   private
	 */
	private function set_locale() {

		$plugin_i18n = new Cd_News_Pull_Wp_Plugin_i18n();

		$this->loader->add_action( 'plugins_loaded', $plugin_i18n, 'load_plugin_textdomain' );

	}

	/**
	 * Register all of the hooks related to the admin area functionality
	 * of the plugin.
	 *
	 * @since    1.0.0
	 * @access   private
	 */
	private function define_admin_hooks() {

		$plugin_admin = new Cd_News_Pull_Wp_Plugin_Admin( $this->get_plugin_name(), $this->get_version() );

		$this->loader->add_action( 'admin_enqueue_scripts', $plugin_admin, 'enqueue_styles' );
		$this->loader->add_action( 'admin_enqueue_scripts', $plugin_admin, 'enqueue_scripts' );
		// Displays plugin in admin menu.
		$this->loader->add_action( 'admin_menu', $plugin_admin, 'add_plugin_admin_menu', 9 );
		// Database settings used by plugin.
		$this->loader->add_action( 'admin_init', $plugin_admin, 'register_and_build_fields' );

	}

	/**
	 * Register all of the hooks related to the processor
	 * of the plugin.
	 *
	 * @since    1.0.0
	 * @access   private
	 */
	private function define_processor_hooks() {

		$plugin_admin = new Cd_News_Pull_Wp_Plugin_Utils_Processor( $this->get_plugin_name(), $this->get_version() );
		// Uncomment the next line to test pull without cron.
		// $this->loader->add_action( 'wp_loaded', $plugin_admin, 'cd_news_pull_get_cron_timer' );
		// The magic.
		$this->loader->add_action( 'cd_news_pull_cron_hook', $plugin_admin, 'cd_news_pull_get_cron_timer' );
		// @todo move this into loader add filter.
		/**
		 * Sets a cron timer.
		 *
		 * @param array $schedules The cron scheduler.
		 * @return array
		 */
		function cd_news_pull_cron_interval( $schedules ) {
			$timer_interval = get_option( 'cd_news_pull_timer' );
			$schedules['cd_news_pull_timer_interval'] = [
				'interval' => $timer_interval,
				'display'  => "Every $timer_interval seconds",
			];
			return $schedules;
		}
		add_filter( 'cron_schedules', 'cd_news_pull_cron_interval' );

		if ( ! wp_next_scheduled( 'cd_news_pull_cron_hook' ) ) {
			wp_schedule_event( time(), 'cd_news_pull_timer_interval', 'cd_news_pull_cron_hook' );
		}
	}

	/**
	 * Run the loader to execute all of the hooks with WordPress.
	 *
	 * @since    1.0.0
	 */
	public function run() {
		$this->loader->run();
	}

	/**
	 * The name of the plugin used to uniquely identify it within the context of
	 * WordPress and to define internationalization functionality.
	 *
	 * @since     1.0.0
	 * @return    string    The name of the plugin.
	 */
	public function get_plugin_name() {
		return $this->plugin_name;
	}

	/**
	 * The reference to the class that orchestrates the hooks with the plugin.
	 *
	 * @since     1.0.0
	 * @return    Cd_News_Pull_Wp_Plugin_Loader    Orchestrates the hooks of the plugin.
	 */
	public function get_loader() {
		return $this->loader;
	}

	/**
	 * Retrieve the version number of the plugin.
	 *
	 * @since     1.0.0
	 * @return    string    The version number of the plugin.
	 */
	public function get_version() {
		return $this->version;
	}
}

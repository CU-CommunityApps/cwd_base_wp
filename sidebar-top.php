<?php 

$layout = get_layout();

// Top sidebar
if( ( is_active_sidebar('widget-area-3') || is_active_sidebar('widget-area-1') ) && $layout != 'no_sidebar' ) { ?>

	<div id="sidebar-top" class="secondary">
		<?php if (function_exists('cwd_base_breadcrumbs')) cwd_base_breadcrumbs(); ?>
		<?php dynamic_sidebar('widget-area-3'); ?>
		<?php dynamic_sidebar('widget-area-1'); ?>
	</div>

<?php }
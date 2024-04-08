<?php // Courses archive listings ?>

<div id="post-<?php the_ID(); ?>" <?php post_class('card flex-4'); ?>>

	<div class="group-image">

		<a href="<?php echo the_permalink(); ?>">

			<?php cwd_base_get_image(); ?>

			<div class="overlay">
				<h2 class="h3">
					<span class="deco">
						<?php the_title(); ?>
					</span>
				<?php if(get_field('additional_text')) {
					echo ' - <span>' . get_field("additional_text") . '</span>';
				} ?>

				</h2>
			</div>

		</a>

	</div>

	<div class="group-fields">

		<?php 
			
			$archive_options = get_field('archive_options', 'options');
			$excerpt_length = $archive_options['courses']['excerpt_length_courses'];
			$show_date = $archive_options['courses']['show_date_courses'];
				
		?>

		<?php if($show_date) { cwd_base_get_the_date(); } ?>

		<p class="summary">
			<?php echo custom_excerpt($excerpt_length); // Characters ?>
		</p>
			
		<?php cwd_base_get_tag_options(); ?>

	</div>

</div>
<?php

if( function_exists('acf_add_local_field_group') ) :

// Accordions Block
acf_add_local_field_group( array(
	'key' => 'group_6421a792dbe22',
	'title' => 'Accordions Block',
	'fields' => array(
		array(
			'key' => 'field_6421a79348324',
			'label' => 'Accordions',
			'name' => 'accordions',
			'aria-label' => '',
			'type' => 'repeater',
			'instructions' => '',
			'required' => 1,
			'conditional_logic' => 0,
			'wrapper' => array(
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'acfe_repeater_stylised_button' => 1,
			'layout' => 'row',
			'pagination' => 0,
			'min' => 0,
			'max' => 0,
			'collapsed' => '',
			'button_label' => 'Add Accordion',
			'rows_per_page' => 20,
			'sub_fields' => array(
				array(
					'key' => 'field_6421a7f048325',
					'label' => 'Title',
					'name' => 'clickable_title',
					'aria-label' => '',
					'type' => 'text',
					'instructions' => 'The title of the accordion, which is always visible.',
					'required' => 1,
					'conditional_logic' => 0,
					'wrapper' => array(
						'width' => '',
						'class' => '',
						'id' => '',
					),
					'default_value' => '',
					'maxlength' => '',
					'placeholder' => '',
					'prepend' => '',
					'append' => '',
					'parent_repeater' => 'field_6421a79348324',
				),
				array(
					'key' => 'field_65fc560277c16',
					'label' => 'Heading Level',
					'name' => 'heading_level',
					'aria-label' => '',
					'type' => 'select',
					'instructions' => 'The heading level of the clickable title.',
					'required' => 0,
					'conditional_logic' => 0,
					'wrapper' => array(
						'width' => '',
						'class' => '',
						'id' => '',
					),
					'choices' => array(
						'h2' => 'H2',
						'h3' => 'H3',
						'h4' => 'H4',
						'h5' => 'H5',
						'h6' => 'H6',
					),
					'default_value' => 'h2',
					'return_format' => 'value',
					'multiple' => 0,
					'allow_null' => 0,
					'ui' => 1,
					'ajax' => 0,
					'placeholder' => '',
					'allow_custom' => 0,
					'search_placeholder' => '',
					'parent_repeater' => 'field_6421a79348324',
				),
				array(
					'key' => 'field_6421a80448326',
					'label' => 'Content',
					'name' => 'hidden_content',
					'aria-label' => '',
					'type' => 'wysiwyg',
					'instructions' => 'The main content of the accordion, which is hidden until the title is clicked.',
					'required' => 1,
					'conditional_logic' => 0,
					'wrapper' => array(
						'width' => '',
						'class' => '',
						'id' => '',
					),
					'default_value' => '',
					'tabs' => 'all',
					'toolbar' => 'full',
					'media_upload' => 1,
					'delay' => 0,
					'parent_repeater' => 'field_6421a79348324',
				),
				array(
					'key' => 'field_644181333f694',
					'label' => 'Nested?',
					'name' => 'add_a_nested_accordion',
					'aria-label' => '',
					'type' => 'true_false',
					'instructions' => 'You may place as many accordions as you like inside of another accordion and then once more inside one of those accordions (three levels deep).',
					'required' => 0,
					'conditional_logic' => 0,
					'wrapper' => array(
						'width' => '',
						'class' => '',
						'id' => '',
					),
					'message' => 'Add a nested accordion?',
					'default_value' => 0,
					'ui' => 0,
					'ui_on_text' => '',
					'ui_off_text' => '',
					'parent_repeater' => 'field_6421a79348324',
				),
				array(
					'key' => 'field_644180773f692',
					'label' => 'Nested Accordion',
					'name' => 'nested_accordion',
					'aria-label' => '',
					'type' => 'repeater',
					'instructions' => '',
					'required' => 0,
					'conditional_logic' => array(
						array(
							array(
								'field' => 'field_644181333f694',
								'operator' => '==',
								'value' => '1',
							),
						),
					),
					'wrapper' => array(
						'width' => '',
						'class' => '',
						'id' => '',
					),
					'acfe_repeater_stylised_button' => 0,
					'layout' => 'row',
					'pagination' => 0,
					'min' => 0,
					'max' => 2,
					'collapsed' => '',
					'button_label' => 'Add Row',
					'rows_per_page' => 20,
					'parent_repeater' => 'field_6421a79348324',
					'sub_fields' => array(
						array(
							'key' => 'field_644180cd3f693',
							'label' => 'Title',
							'name' => 'clickable_title',
							'aria-label' => '',
							'type' => 'text',
							'instructions' => '',
							'required' => 0,
							'conditional_logic' => 0,
							'wrapper' => array(
								'width' => '',
								'class' => '',
								'id' => '',
							),
							'default_value' => '',
							'maxlength' => '',
							'placeholder' => '',
							'prepend' => '',
							'append' => '',
							'parent_repeater' => 'field_644180773f692',
						),
						array(
							'key' => 'field_65fc570977c17',
							'label' => 'Heading Level',
							'name' => 'heading_level',
							'aria-label' => '',
							'type' => 'select',
							'instructions' => 'The heading level of the clickable title.',
							'required' => 0,
							'conditional_logic' => 0,
							'wrapper' => array(
								'width' => '',
								'class' => '',
								'id' => '',
							),
							'choices' => array(
								'h2' => 'H2',
								'h3' => 'H3',
								'h4' => 'H4',
								'h5' => 'H5',
								'h6' => 'H6',
							),
							'default_value' => 'h2',
							'return_format' => 'value',
							'multiple' => 0,
							'allow_custom' => 0,
							'search_placeholder' => '',
							'allow_null' => 0,
							'ui' => 1,
							'ajax' => 0,
							'placeholder' => '',
							'parent_repeater' => 'field_644180773f692',
						),
						array(
							'key' => 'field_6441832d3f695',
							'label' => 'Content',
							'name' => 'hidden_content',
							'aria-label' => '',
							'type' => 'wysiwyg',
							'instructions' => '',
							'required' => 0,
							'conditional_logic' => 0,
							'wrapper' => array(
								'width' => '',
								'class' => '',
								'id' => '',
							),
							'default_value' => '',
							'tabs' => 'all',
							'toolbar' => 'full',
							'media_upload' => 1,
							'delay' => 0,
							'parent_repeater' => 'field_644180773f692',
						),
						array(
							'key' => 'field_64419402dc5c6',
							'label' => 'Nested?',
							'name' => 'add_a_nested_accordion_again',
							'aria-label' => '',
							'type' => 'true_false',
							'instructions' => 'You may place as many accordions as you like inside of another accordion and then once more inside one of those accordions (three levels deep).',
							'required' => 0,
							'conditional_logic' => array(
								array(
									array(
										'field' => 'field_644181333f694',
										'operator' => '==',
										'value' => '1',
									),
								),
							),
							'wrapper' => array(
								'width' => '',
								'class' => '',
								'id' => '',
							),
							'message' => 'Add a nested accordion?',
							'default_value' => 0,
							'ui' => 0,
							'ui_on_text' => '',
							'ui_off_text' => '',
							'parent_repeater' => 'field_644180773f692',
						),
						array(
							'key' => 'field_644194efdc5c7',
							'label' => 'Nested Accordion',
							'name' => 'nested_accordion_again',
							'aria-label' => '',
							'type' => 'repeater',
							'instructions' => '',
							'required' => 0,
							'conditional_logic' => array(
								array(
									array(
										'field' => 'field_64419402dc5c6',
										'operator' => '==',
										'value' => '1',
									),
								),
							),
							'wrapper' => array(
								'width' => '',
								'class' => '',
								'id' => '',
							),
							'acfe_repeater_stylised_button' => 0,
							'layout' => 'row',
							'min' => 0,
							'max' => 0,
							'collapsed' => '',
							'button_label' => 'Add Row',
							'rows_per_page' => 20,
							'parent_repeater' => 'field_644180773f692',
							'sub_fields' => array(
								array(
									'key' => 'field_644196c1d9f8b',
									'label' => 'Title',
									'name' => 'clickable_title',
									'aria-label' => '',
									'type' => 'text',
									'instructions' => '',
									'required' => 0,
									'conditional_logic' => 0,
									'wrapper' => array(
										'width' => '',
										'class' => '',
										'id' => '',
									),
									'default_value' => '',
									'maxlength' => '',
									'placeholder' => '',
									'prepend' => '',
									'append' => '',
									'parent_repeater' => 'field_644194efdc5c7',
								),
								array(
									'key' => 'field_65fc573f77c18',
									'label' => 'Heading Level',
									'name' => 'heading_level',
									'aria-label' => '',
									'type' => 'select',
									'instructions' => 'The heading level of the clickable title.',
									'required' => 0,
									'conditional_logic' => 0,
									'wrapper' => array(
										'width' => '',
										'class' => '',
										'id' => '',
									),
									'choices' => array(
										'h2' => 'H2',
										'h3' => 'H3',
										'h4' => 'H4',
										'h5' => 'H5',
										'h6' => 'H6',
									),
									'default_value' => 'h2',
									'return_format' => 'value',
									'multiple' => 0,
									'allow_custom' => 0,
									'search_placeholder' => '',
									'allow_null' => 0,
									'ui' => 1,
									'ajax' => 0,
									'placeholder' => '',
									'parent_repeater' => 'field_644194efdc5c7',
								),
								array(
									'key' => 'field_6441972ad9f8c',
									'label' => 'Content',
									'name' => 'hidden_content',
									'aria-label' => '',
									'type' => 'wysiwyg',
									'instructions' => '',
									'required' => 0,
									'conditional_logic' => 0,
									'wrapper' => array(
										'width' => '',
										'class' => '',
										'id' => '',
									),
									'default_value' => '',
									'tabs' => 'all',
									'toolbar' => 'full',
									'media_upload' => 1,
									'delay' => 0,
									'parent_repeater' => 'field_644194efdc5c7',
								),
							),
						),
					),
				),
			),
		),
	),
	'location' => array(
		array(
			array(
				'param' => 'block',
				'operator' => '==',
				'value' => 'cwd/accordions',
			),
		),
	),
	'menu_order' => 0,
	'position' => 'normal',
	'style' => 'seamless',
	'label_placement' => 'left',
	'instruction_placement' => 'above_field',
	'hide_on_screen' => '',
	'active' => true,
	'description' => '',
	'show_in_rest' => 0,
	'acfe_display_title' => '',
	'acfe_autosync' => '',
	'acfe_form' => 0,
	'acfe_meta' => '',
	'acfe_note' => '',
) );

// Flexible Cards Block
acf_add_local_field_group(array(
	'key' => 'group_641a11c22eff4',
	'title' => 'Flexible Cards Block',
	'fields' => array(
		array(
			'key' => 'field_641a1375c62dd',
			'label' => 'Layout',
			'name' => 'flex_cards_layout',
			'aria-label' => '',
			'type' => 'button_group',
			'instructions' => 'Should the cards be full-width, or in a grid of two or three across?',
			'required' => 1,
			'conditional_logic' => 0,
			'wrapper' => array(
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'choices' => array(
				'full-width' => 'Stack',
				'flex-6' => 'Grid of Two',
				'flex-4' => 'Grid of Three',
				'flex-3' => 'Grid of Four'
			),
			'default_value' => 'stack',
			'return_format' => 'value',
			'allow_null' => 0,
			'layout' => 'horizontal',
		),
		array(
			'key' => 'field_641b290803cd0',
			'label' => 'Note:',
			'name' => '',
			'aria-label' => '',
			'type' => 'message',
			'instructions' => '',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array(
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'message' => 'For grid layouts, try to keep elements and content length consistent across all cards in the grid (e.g. all cards should contain both images and text, instead of some having both and some having only one).',
			'new_lines' => 'wpautop',
			'esc_html' => 0,
		),
		array(
			'key' => 'field_641a11c2cccc7',
			'label' => 'Cards',
			'name' => 'flex_cards',
			'aria-label' => '',
			'type' => 'repeater',
			'instructions' => '',
			'required' => 1,
			'conditional_logic' => 0,
			'wrapper' => array(
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'acfe_repeater_stylised_button' => 1,
			'layout' => 'block',
			'pagination' => 0,
			'min' => 1,
			'max' => 0,
			'collapsed' => 'field_641a11ddcccc8',
			'button_label' => 'Add Card',
			'rows_per_page' => 20,
			'sub_fields' => array(
				array(
					'key' => 'field_641a11ddcccc8',
					'label' => 'Image',
					'name' => 'flex_card_image',
					'aria-label' => '',
					'type' => 'image',
					'instructions' => '',
					'required' => 0,
					'conditional_logic' => 0,
					'wrapper' => array(
						'width' => '',
						'class' => '',
						'id' => '',
					),
					'uploader' => '',
					'return_format' => 'array',
					'acfe_thumbnail' => 0,
					'min_width' => '',
					'min_height' => '',
					'min_size' => '',
					'max_width' => '',
					'max_height' => '',
					'max_size' => '',
					'mime_types' => '',
					'preview_size' => 'medium',
					'library' => 'all',
					'parent_repeater' => 'field_641a11c2cccc7',
				),
				array(
					'key' => 'field_641a1202cccc9',
					'label' => 'Text',
					'name' => 'flex_card_text',
					'aria-label' => '',
					'type' => 'wysiwyg',
					'instructions' => '',
					'required' => 0,
					'conditional_logic' => 0,
					'wrapper' => array(
						'width' => '',
						'class' => '',
						'id' => '',
					),
					'default_value' => '',
					'tabs' => 'all',
					'toolbar' => 'full',
					'media_upload' => 0,
					'delay' => 0,
					'parent_repeater' => 'field_641a11c2cccc7',
				),
			),
		),
	),
	'location' => array(
		array(
			array(
				'param' => 'block',
				'operator' => '==',
				'value' => 'cwd/flex-cards',
			),
		),
	),
	'menu_order' => 0,
	'position' => 'normal',
	'style' => 'default',
	'label_placement' => 'left',
	'instruction_placement' => 'above_field',
	'hide_on_screen' => '',
	'active' => true,
	'description' => '',
	'show_in_rest' => 0,
	'acfe_display_title' => '',
	'acfe_autosync' => '',
	'acfe_form' => 0,
	'acfe_meta' => '',
	'acfe_note' => '',
));

// WYSIWYG Text Block
acf_add_local_field_group(array(
	'key' => 'group_6419ca3322823',
	'title' => 'WYSIWYG Block',
	'fields' => array(
		array(
			'key' => 'field_6419ca381960f',
			'label' => 'Text',
			'name' => 'wysiwyg_text',
			'aria-label' => '',
			'type' => 'wysiwyg',
			'instructions' => '',
			'required' => 1,
			'conditional_logic' => 0,
			'wrapper' => array(
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'default_value' => '',
			'tabs' => 'all',
			'toolbar' => 'full',
			'media_upload' => 1,
			'delay' => 0,
		),
	),
	'location' => array(
		array(
			array(
				'param' => 'block',
				'operator' => '==',
				'value' => 'cwd/wysiwyg',
			),
		),
	),
	'menu_order' => 0,
	'position' => 'normal',
	'style' => 'default',
	'label_placement' => 'left',
	'instruction_placement' => 'above_field',
	'hide_on_screen' => '',
	'active' => true,
	'description' => '',
	'show_in_rest' => 0,
	'acfe_display_title' => '',
	'acfe_autosync' => '',
	'acfe_form' => 0,
	'acfe_meta' => '',
	'acfe_note' => '',
));

// Card slider block
acf_add_local_field_group( array(
	'key' => 'group_65c3eda38f000',
	'title' => 'Card Slider',
	'fields' => array(
		array(
			'key' => 'field_65c3eda44c30e',
			'label' => 'Card Slider',
			'name' => 'card_slider',
			'aria-label' => '',
			'type' => 'repeater',
			'instructions' => '',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array(
				'width' => '50',
				'class' => '',
				'id' => '',
			),
			'layout' => 'block',
			'pagination' => 0,
			'min' => 0,
			'max' => 0,
			'collapsed' => '',
			'button_label' => 'Add Card',
			'rows_per_page' => 20,
			'acfe_repeater_stylised_button' => 0,
			'sub_fields' => array(
				array(
					'key' => 'field_65c3ee2e4c30f',
					'label' => 'Image',
					'name' => 'image_id',
					'aria-label' => '',
					'type' => 'image',
					'instructions' => '',
					'required' => 0,
					'conditional_logic' => 0,
					'wrapper' => array(
						'width' => '',
						'class' => '',
						'id' => '',
					),
					'return_format' => 'id',
					'library' => 'all',
					'min_width' => '',
					'min_height' => '',
					'min_size' => '',
					'max_width' => '',
					'max_height' => '',
					'max_size' => '',
					'mime_types' => '',
					'preview_size' => 'medium',
					'parent_repeater' => 'field_65c3eda44c30e',
					'uploader' => '',
					'acfe_thumbnail' => 0,
				),
				array(
					'key' => 'field_65c3ee974c310',
					'label' => 'Title heading level',
					'name' => 'title_heading_level',
					'aria-label' => '',
					'type' => 'select',
					'instructions' => '',
					'required' => 0,
					'conditional_logic' => 0,
					'wrapper' => array(
						'width' => '',
						'class' => '',
						'id' => '',
					),
					'choices' => array(
						'h2' => 'H2',
						'h3' => 'H3',
						'h4' => 'H4',
					),
					'default_value' => false,
					'return_format' => 'value',
					'multiple' => 0,
					'allow_null' => 1,
					'ui' => 1,
					'ajax' => 0,
					'placeholder' => '',
					'parent_repeater' => 'field_65c3eda44c30e',
					'allow_custom' => 0,
					'search_placeholder' => '',
				),
				array(
					'key' => 'field_65c4faf5905f7',
					'label' => 'Title',
					'name' => 'title',
					'aria-label' => '',
					'type' => 'text',
					'instructions' => '',
					'required' => 0,
					'conditional_logic' => 0,
					'wrapper' => array(
						'width' => '',
						'class' => '',
						'id' => '',
					),
					'default_value' => '',
					'maxlength' => '',
					'placeholder' => '',
					'prepend' => '',
					'append' => '',
					'parent_repeater' => 'field_65c3eda44c30e',
				),
				array(
					'key' => 'field_65c4d50462e92',
					'label' => 'Link the title?',
					'name' => 'link_the_title',
					'aria-label' => '',
					'type' => 'true_false',
					'instructions' => '',
					'required' => 0,
					'conditional_logic' => 0,
					'wrapper' => array(
						'width' => '',
						'class' => '',
						'id' => '',
					),
					'message' => '',
					'default_value' => 0,
					'ui' => 0,
					'ui_on_text' => '',
					'ui_off_text' => '',
					'parent_repeater' => 'field_65c3eda44c30e',
				),
				array(
					'key' => 'field_65c4d57762e94',
					'label' => 'Title link URL',
					'name' => 'title_link_url',
					'aria-label' => '',
					'type' => 'text',
					'instructions' => '',
					'required' => 0,
					'conditional_logic' => array(
						array(
							array(
								'field' => 'field_65c4d50462e92',
								'operator' => '==',
								'value' => '1',
							),
						),
					),
					'wrapper' => array(
						'width' => '',
						'class' => '',
						'id' => '',
					),
					'default_value' => '',
					'maxlength' => '',
					'placeholder' => '',
					'prepend' => '',
					'append' => '',
					'parent_repeater' => 'field_65c3eda44c30e',
				),
				array(
					'key' => 'field_65c3eefa4c311',
					'label' => 'Body',
					'name' => 'body',
					'aria-label' => '',
					'type' => 'wysiwyg',
					'instructions' => '',
					'required' => 0,
					'conditional_logic' => 0,
					'wrapper' => array(
						'width' => '',
						'class' => '',
						'id' => '',
					),
					'default_value' => '',
					'tabs' => 'all',
					'toolbar' => 'full',
					'media_upload' => 0,
					'delay' => 0,
					'parent_repeater' => 'field_65c3eda44c30e',
				),
				array(
					'key' => 'field_65c3f0434c312',
					'label' => 'Links',
					'name' => 'links',
					'aria-label' => '',
					'type' => 'repeater',
					'instructions' => 'These are optional and will add colored link buttons below the text area.',
					'required' => 0,
					'conditional_logic' => 0,
					'wrapper' => array(
						'width' => '',
						'class' => '',
						'id' => '',
					),
					'layout' => 'block',
					'min' => 0,
					'max' => 0,
					'collapsed' => '',
					'button_label' => 'Add Row',
					'rows_per_page' => 20,
					'parent_repeater' => 'field_65c3eda44c30e',
					'acfe_repeater_stylised_button' => 0,
					'sub_fields' => array(
						array(
							'key' => 'field_65c3f05b4c313',
							'label' => 'Link Text',
							'name' => 'link_text',
							'aria-label' => '',
							'type' => 'text',
							'instructions' => '',
							'required' => 0,
							'conditional_logic' => 0,
							'wrapper' => array(
								'width' => '',
								'class' => '',
								'id' => '',
							),
							'default_value' => '',
							'maxlength' => '',
							'placeholder' => '',
							'prepend' => '',
							'append' => '',
							'parent_repeater' => 'field_65c3f0434c312',
						),
						array(
							'key' => 'field_65c3f07c4c314',
							'label' => 'Link Url',
							'name' => 'link_url',
							'aria-label' => '',
							'type' => 'text',
							'instructions' => '',
							'required' => 0,
							'conditional_logic' => 0,
							'wrapper' => array(
								'width' => '',
								'class' => '',
								'id' => '',
							),
							'default_value' => '',
							'maxlength' => '',
							'placeholder' => '',
							'prepend' => '',
							'append' => '',
							'parent_repeater' => 'field_65c3f0434c312',
						),
						array(
							'key' => 'field_65c3f0b34c315',
							'label' => 'Link Color',
							'name' => 'link_color',
							'aria-label' => '',
							'type' => 'select',
							'instructions' => 'This defines the background color of the link buttons (default is gray).',
							'required' => 0,
							'conditional_logic' => 0,
							'wrapper' => array(
								'width' => '',
								'class' => '',
								'id' => '',
							),
							'choices' => array(
								'accent-red' => 'Red',
								'accent-blue' => 'Blue',
							),
							'default_value' => false,
							'return_format' => 'value',
							'multiple' => 0,
							'allow_custom' => 0,
							'placeholder' => '',
							'search_placeholder' => '',
							'allow_null' => 1,
							'ui' => 1,
							'ajax' => 0,
							'parent_repeater' => 'field_65c3f0434c312',
						),
					),
				),
			),
		),
	),
	'location' => array(
		array(
			array(
				'param' => 'block',
				'operator' => '==',
				'value' => 'cwd/card-slider',
			),
		),
	),
	'menu_order' => 0,
	'position' => 'acf_after_title',
	'style' => 'seamless',
	'label_placement' => 'top',
	'instruction_placement' => 'label',
	'hide_on_screen' => '',
	'active' => true,
	'description' => '',
	'show_in_rest' => 0,
) );

endif;

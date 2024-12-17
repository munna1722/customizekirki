<?php

//theme panel
// new \Kirki\Panel(
// 	'theme_panel_id',
// 	[
// 		'priority'    => 10,
// 		'title'       => esc_html__( 'Header Banner', 'CustomizeKirki' ),
// 		'description' => esc_html__( 'My Panel Description.', 'CustomizeKirki' ),
// 	]
// );


// // theme section
// new \Kirki\Section(
// 	'theme_section_id_text',
// 	[
// 		'title'       => esc_html__( 'Header Text ', 'CustomizeKirki' ),
// 		'description' => esc_html__( 'My Section Description.', 'CustomizeKirki' ),
// 		'panel'       => 'theme_panel_id',
// 		'priority'    => 160,
// 	]
// );

// new \Kirki\Section(
// 	'theme_section_id_description',
// 	[
// 		'title'       => esc_html__( 'Header Description', 'CustomizeKirki' ),
// 		'description' => esc_html__( 'My Section Description.', 'CustomizeKirki' ),
// 		'panel'       => 'theme_panel_id',
// 		'priority'    => 160,
// 	]
// );


// new \Kirki\Section(
// 	'theme_section_id_image',
// 	[
// 		'title'       => esc_html__( 'Image  Section', 'customizekirki' ),
// 		'description' => esc_html__( 'My Section Description.', 'customizekirki' ),
// 		'panel'       => 'theme_panel_id',
// 		'priority'    => 160,
// 	]
// );


// //theme control
// new \Kirki\Field\Text(
// 	[
// 		'settings' => 'text_setting',
// 		'label'    => esc_html__( 'Text Control', 'CustomizeKirki' ),
// 		'section'  => 'theme_section_id_text',
// 		'default'  => esc_html__( 'This is a default value', 'CustomizeKirki' ),
// 		'priority' => 10,
// 	]
// );

// new \Kirki\Field\Textarea(
// 	[
// 		'settings'    => 'textarea_setting',
// 		'label'       => esc_html__( 'Textarea Control', 'customizekirki' ),
// 		'section'     => 'theme_section_id_description',
// 		'default'     => esc_html__( 'This is a default value', 'customizekirki' ),
// 	]
// );



// new \Kirki\Field\Image(
// 	[
// 		'settings'    => 'image_setting_url',
// 		'label'       => esc_html__( 'Image Control (URL)', 'customizekirki' ),
// 		'description' => esc_html__( 'The saved value will be the URL.', 'customizekirki' ),
// 		'section'     => 'theme_section_id_image',
// 	]
// );


// new \Kirki\Field\Color(
// 	[
// 		'settings'    => 'color_setting_rgba',
// 		'label'       => __( 'Color Control (rgba)', 'kirki' ),
// 		'description' => esc_html__( 'Advanced color control with alpha channel.', 'kirki' ),
// 		'section'     => 'theme_panel_id',
// 		'default'     => '#0008DC',
// 		'choices'     => [
// 			'alpha' => true,
// 		],
// 	]
// );


new \Kirki\Panel(
	'panel_id',
	[
		'priority'    => 10,
		'title'       => esc_html__( 'color', 'kirki' ),
		'description' => esc_html__( 'My Panel Description.', 'kirki' ),
	]
);



//section
new \Kirki\Section(
	'heading_id',
	[
		'title'       => esc_html__( 'Heading Color', 'kirki' ),
		'description' => esc_html__( 'My Section Description.', 'kirki' ),
		'panel'       => 'panel_id',
		'priority'    => 160,
	]
);

new \Kirki\Section(
	'description_id',
	[
		'title' => esc_html__( 'Description Color', 'kirki' ),
        'label' => __( 'Description Color', 'kirki' ),

		'description' => esc_html__( 'My Section Description.', 'kirki' ),
		'panel'       => 'panel_id',
		'priority'    => 160,
	]
);


//control

new \Kirki\Field\Color(
	[
		'settings'    => 'color_setting_rgba',
		'label'       => __( 'Heading Color', 'kirki' ),
		'description' => esc_html__( 'Advanced color control with alpha channel.', 'kirki' ),
		'section'     => 'heading_id',
		'default'     => '#0008DC',
		'choices'     => [
			'alpha' => true,
		],
	]
);

new \Kirki\Field\Color(
	[
		'settings'    => 'description',
		'label'       => __( 'Discription Color', 'kirki' ),
		'description' => esc_html__( 'Advanced color control with alpha channel.', 'kirki' ),
		'section'     => 'description_id',
		'default'     => '#0008DC',
		'choices'     => [
			'alpha' => true,
		],
	]
);
?>
<?php

//theme panel
new \Kirki\Panel(
	'theme_panel_id',
	[
		'priority'    => 10,
		'title'       => esc_html__( 'Header Banner', 'CustomizeKirki' ),
		'description' => esc_html__( 'My Panel Description.', 'CustomizeKirki' ),
	]
);


// theme section
new \Kirki\Section(
	'theme_section_id_text',
	[
		'title'       => esc_html__( 'Header Text ', 'CustomizeKirki' ),
		'description' => esc_html__( 'My Section Description.', 'CustomizeKirki' ),
		'panel'       => 'theme_panel_id',
		'priority'    => 160,
	]
);

new \Kirki\Section(
	'theme_section_id_description',
	[
		'title'       => esc_html__( 'Header Description', 'CustomizeKirki' ),
		'description' => esc_html__( 'My Section Description.', 'CustomizeKirki' ),
		'panel'       => 'theme_panel_id',
		'priority'    => 160,
	]
);


new \Kirki\Section(
	'theme_section_id_image',
	[
		'title'       => esc_html__( 'Image  Section', 'customizekirki' ),
		'description' => esc_html__( 'My Section Description.', 'customizekirki' ),
		'panel'       => 'theme_panel_id',
		'priority'    => 160,
	]
);


//theme control
new \Kirki\Field\Text(
	[
		'settings' => 'text_setting',
		'label'    => esc_html__( 'Text Control', 'CustomizeKirki' ),
		'section'  => 'theme_section_id_text',
		'default'  => esc_html__( 'This is a default value', 'CustomizeKirki' ),
		'priority' => 10,
	]
);

new \Kirki\Field\Textarea(
	[
		'settings'    => 'textarea_setting',
		'label'       => esc_html__( 'Textarea Control', 'customizekirki' ),
		'section'     => 'theme_section_id_description',
		'default'     => esc_html__( 'This is a default value', 'customizekirki' ),
	]
);



new \Kirki\Field\Image(
	[
		'settings'    => 'image_setting_url',
		'label'       => esc_html__( 'Image Control (URL)', 'customizekirki' ),
		'description' => esc_html__( 'The saved value will be the URL.', 'customizekirki' ),
		'section'     => 'theme_section_id_image',
	]
);

?>
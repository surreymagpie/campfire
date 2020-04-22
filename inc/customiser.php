<?php 

/*
===============================
Customiser Theme Settings
===============================
*/

function campfire_customize_register( $wp_customize ) {

	$wp_customize->add_section( 'campfire_theme_section', array(
		'title' => __( 'Campfire Options', 'campfire'),
		'priority' => 150,
	));
	
	$wp_customize->add_setting( 'region', array(
		'type' => 'theme_mod',
		'capability' => 'edit_theme_options',
		'default' => 'england',
	));

	$wp_customize->add_setting( 'logo_display', array(
		'type' => 'theme_mod',
		'capability' => 'edit_theme_options',
	));

	$wp_customize->add_setting( 'facebook', array(
		'type' => 'theme_mod',
		'capability' => 'edit_theme_options',
		'sanitize_callback' => 'sanitize_text_field',
	));
	
	$wp_customize->add_setting( 'twitter', array(
		'type' => 'theme_mod',
		'capability' => 'edit_theme_options',
		'sanitize_callback' => 'sanitize_text_field',
	));
	
	$wp_customize->add_setting( 'instagram', array(
		'type' => 'theme_mod',
		'capability' => 'edit_theme_options',
		'sanitize_callback' => 'sanitize_text_field',
	));

	$wp_customize->add_control(
		new WP_Customize_Control(
			$wp_customize,
			'region',
			array(
				'label'			=> __( 'Scout Region', 'campfire' ),
				'section'		=> 'campfire_theme_section',
				'settings'		=> 'region',
				'type'			=> 'select',
				'choices'		=> array(
					'england'	=> __( 'England', 'campfire' ),
					'n_ireland' => __( 'Northern Ireland', 'campfire' ),
					'scotland'	=> __( 'Scotland', 'campfire'),
					'wales'		=> __( 'Wales', 'campfire' ),
				)
			)
		)
	);

	$wp_customize->add_control(
		new WP_Customize_Control(
			$wp_customize,
			'logo_display',
			array(
				'label'			=> __( 'Use Default Logo', 'campfire' ),
				'section'		=> 'campfire_theme_section',
				'settings'		=> 'logo_display',
				'type'			=> 'checkbox',
				'description'	=> __('NB: A custom logo uploaded in the site identity tab will take priority.', 'campfire'),
			)
		)
	);

	$wp_customize->add_control(
		new WP_Customize_Control(
			$wp_customize,
			'facebook',
			array(
				'label'			=> __( 'Facebook', 'campfire' ),
				'section'		=> 'campfire_theme_section',
				'settings'		=> 'facebook',
				'type'			=> 'text',
				'description'	=> __('Enter the ID of your Facebook page (ie the part that follows https://www.facebook.com/)', 'campfire'),
				'input_attrs'	=> array(
					'placeholder' => 'https://www.facebook.com/...'
				)
			)
		)
	);
	$wp_customize->add_control(
		new WP_Customize_Control(
			$wp_customize,
			'instagram',
			array(
				'label'			=> __( 'Instagram URL', 'campfire' ),
				'section'		=> 'campfire_theme_section',
				'settings'		=> 'instagram',
				'type'			=> 'text',
				'description'	=> __('Enter the ID of your Instagram page', 'campfire'),
				'input_attrs'	=> array(
					'placeholder' => 'https://www.instagram.com/...'
				)
			)
		)
	);
	$wp_customize->add_control(
		new WP_Customize_Control(
			$wp_customize,
			'twitter',
			array(
				'label'			=> __( 'Twitter URL', 'campfire' ),
				'section'		=> 'campfire_theme_section',
				'settings'		=> 'twitter',
				'type'			=> 'text',
				'description'	=> __('Enter the ID to your Twitter page (without the @ character)', 'campfire'),
				'input_attrs'	=> array(
					'placeholder' => 'https://twitter.com/...'
				)
			)
		)
	);
}
add_action( 'customize_register', 'campfire_customize_register' );

function campfire_head()
{
	switch (get_theme_mod('region')) {
		case 'england':
			$primary_colour = '#7413dc';
			break;
		case 'n_ireland':
			$primary_colour = '#23a950';
			break;
		case 'scotland':
			$primary_colour = '#006ddf';
			break;
		case 'wales':
			$primary_colour = '#e22e12';
			break;
		default:
			$primary_colour = '#7413dc';
			break;
	}
	?>
		<style>
			:root { --colour-primary: <?php echo $primary_colour; ?>; }
		</style>
	<?php
}
add_action( 'wp_head', 'campfire_head' );

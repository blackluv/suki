<?php
/**
 * Customizer settings: Header > Menu(s)
 *
 * @package Suki
 **/

// Prevent direct access.
if ( ! defined( 'ABSPATH' ) ) exit;

$section = 'suki_section_header_menu';

/**
 * ====================================================
 * Menu 1
 * ====================================================
 */

// Heading: Menu
$wp_customize->add_control( new Suki_Customize_Control_Heading( $wp_customize, 'heading_header_menu_1', array(
	'section'     => $section,
	'settings'    => array(),
	/* translators: %d: number of Menu element. */
	'label'       => sprintf( esc_html__( 'Menu %d', 'suki' ), 1 ),
	/* translators: %d: number of Menu element. */
	'description' => '<a href="' . esc_url( add_query_arg( 'autofocus[control]', 'nav_menu_locations[header-menu-1]' ) ) . '" class="suki-customize-goto-control button button-default">' . sprintf( esc_html__( 'Edit Header Menu %d', 'suki' ), 1 ) . '</a>',
	'priority'    => 10,
) ) );

/**
 * ====================================================
 * Mobile Menu
 * ====================================================
 */

// Heading: Mobile Header Menu
$wp_customize->add_control( new Suki_Customize_Control_Heading( $wp_customize, 'heading_mobile_header_menu', array(
	'section'     => $section,
	'settings'    => array(),
	'label'       => esc_html__( 'Mobile Header Menu', 'suki' ),
	'description' => '<a href="' . esc_url( add_query_arg( 'autofocus[control]', 'nav_menu_locations[header-mobile-menu]' ) ) . '" class="suki-customize-goto-control button button-default">' . esc_html__( 'Edit Mobile Header Menu', 'suki' ) . '</a>',
	'priority'    => 20,
) ) );

/**
 * ====================================================
 * Suki Pro Teaser
 * ====================================================
 */

if ( suki_show_pro_teaser() ) {
	$wp_customize->add_control( new Suki_Customize_Control_Pro( $wp_customize, 'pro_teaser_header_menu_2', array(
		'section'     => $section,
		'settings'    => array(),
		'label'       => esc_html_x( 'Menu 2', 'Suki Pro teaser', 'suki' ),
		'url'         => 'https://sukiwp.com/pro/modules/header/',
		'priority'    => 90,
	) ) );

	$wp_customize->add_control( new Suki_Customize_Control_Pro( $wp_customize, 'pro_teaser_header_menu_3', array(
		'section'     => $section,
		'settings'    => array(),
		'label'       => esc_html_x( 'Menu 3', 'Suki Pro teaser', 'suki' ),
		'url'         => 'https://sukiwp.com/pro/modules/header/',
		'priority'    => 90,
	) ) );

	$wp_customize->add_control( new Suki_Customize_Control_Pro( $wp_customize, 'pro_teaser_header_vertical_menu', array(
		'section'     => $section,
		'settings'    => array(),
		'label'       => esc_html_x( 'Vertical Menu', 'Suki Pro teaser', 'suki' ),
		'url'         => 'https://sukiwp.com/pro/modules/header/',
		'priority'    => 90,
	) ) );
}
<?php
/**
 * Customizer custom section: Pro
 *
 * @package Suki
 */

// Prevent direct access.
if ( ! defined( 'ABSPATH' ) ) exit;

if ( class_exists( 'WP_Customize_Section' ) && ! class_exists( 'Suki_Customize_Section_Pro' ) ) :
/**
 * Custom section class for spacer.
 */
class Suki_Customize_Section_Pro extends WP_Customize_Section {
	/**
	 * @var string
	 */
	public $type = 'suki-section-pro';

	/**
	 * @var string
	 */
	public $url = '#';

	public function json() {
		$json = parent::json();
		$json['url'] = $this->url;

		return $json;
	}

	public function render_template() {
		?>
		<li id="accordion-section-{{ data.id }}" class="accordion-section control-section control-section-{{ data.type }}">
			<a href="{{ data.url }}" target="_blank" rel="noopener">
				<h3 class="accordion-section-title">
					{{ data.title }}
					<span class="suki-pro-link">Pro</span>
				</h3>
			</a>
		</li>
		<?php
	}
}

// Register section type.
$wp_customize->register_section_type( 'Suki_Customize_Section_Pro' );
endif;
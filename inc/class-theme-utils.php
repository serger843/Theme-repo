<?php

class Theme_Utils extends Theme_Core {

	public function __construct() {
		
		// define user greeting action function
		add_action('user-greeting', function(){
			echo 'Serge';
		});

	}

	public function get_text() {
		// COMPLETE THIS FUNCTION TO RETURN THE TEXT 'This is Kapp Theme' inside Theme_Core class

		

		// Call the text returning function
		return $this->text();
	}

	/**
	 * ------------------------------------------------------------------
	 * Get current theme version
	 * ------------------------------------------------------------------
	 *
	 * @return string
	 */
	public function get_theme_version() {
		return esc_html__( 'Version ', 'kapp-theme-text' ) . wp_get_theme()->Version;
	}

	/**
	 * ------------------------------------------------------------------
	 * Class instance
	 * ------------------------------------------------------------------
	 *
	 * @return Theme_Utils
	 */
	public static function instance() {
		return new self();
	}

	/**
	 * ------------------------------------------------------------------
	 * Greeting message
	 * ------------------------------------------------------------------
	 *
	 * @return void
	 */
	public function greeting() {
		#--------------------------------------------------------------#
		return $this->get_text(); // This line should not be changed
	}

	/**
	 * ------------------------------------------------------------------
	 * Returns the text used inside the footer
	 * ------------------------------------------------------------------
	 *
	 * @return void
	 */
	public function footer_text() {
		#--------------------------------------------------------------#
		add_filter( 'text-message', function(){
			echo 'This is Kapp Theme ' . $this->get_theme_version();
		});
		return $this->get_text(); // This line should not be changed
	}
}

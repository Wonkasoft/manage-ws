<?php

/**
 * The public-facing functionality of the plugin.
 *
 * @link       https://wonkasoft.com
 * @since      1.0.0
 *
 * @package    Manage_Ws
 * @subpackage Manage_Ws/public
 */

/**
 * The public-facing functionality of the plugin.
 *
 * Defines the plugin name, version, and two examples hooks for how to
 * enqueue the public-facing stylesheet and JavaScript.
 *
 * @package    Manage_Ws
 * @subpackage Manage_Ws/public
 * @author     Wonkasoft <support@wonkasoft.com>
 */
class Manage_Ws_Public {

	/**
	 * The ID of this plugin.
	 *
	 * @since    1.0.0
	 * @access   private
	 * @var      string    $plugin_name    The ID of this plugin.
	 */
	private $plugin_name;

	/**
	 * The version of this plugin.
	 *
	 * @since    1.0.0
	 * @access   private
	 * @var      string    $version    The current version of this plugin.
	 */
	private $version;

	/**
	 * Initialize the class and set its properties.
	 *
	 * @since    1.0.0
	 * @param      string $plugin_name       The name of the plugin.
	 * @param      string $version    The version of this plugin.
	 */
	public function __construct( $plugin_name, $version ) {

		$this->plugin_name = $plugin_name;
		$this->version = $version;

	}

	/**
	 * Register the stylesheets for the public-facing side of the site.
	 *
	 * @since    1.0.0
	 */
	public function enqueue_styles() {

		/**
		 * This function is provided for demonstration purposes only.
		 *
		 * An instance of this class should be passed to the run() function
		 * defined in Manage_Ws_Loader as all of the hooks are defined
		 * in that particular class.
		 *
		 * The Manage_Ws_Loader will then create the relationship
		 * between the defined hooks and the functions defined in this
		 * class.
		 */

		wp_enqueue_style( $this->plugin_name, plugin_dir_url( __FILE__ ) . 'css/manage-ws-public.css', array(), $this->version, 'all' );

	}

	/**
	 * Register the JavaScript for the public-facing side of the site.
	 *
	 * @since    1.0.0
	 */
	public function enqueue_scripts() {

		/**
		 * This function is provided for demonstration purposes only.
		 *
		 * An instance of this class should be passed to the run() function
		 * defined in Manage_Ws_Loader as all of the hooks are defined
		 * in that particular class.
		 *
		 * The Manage_Ws_Loader will then create the relationship
		 * between the defined hooks and the functions defined in this
		 * class.
		 */

		wp_enqueue_script( $this->plugin_name, plugin_dir_url( __FILE__ ) . 'js/manage-ws-public.js', array( 'jquery' ), $this->version, false );

	}

	public function customize_login_page() {
		wp_enqueue_style( 'custom-login', plugin_dir_url( __FILE__ ) . 'css/manage-ws-public.css' );
	}

	public function customize_login_page_header() {
		return 'Managed by Wonkasoft LLC';
	}

	public function customize_login_page_message() {
		return "<h4 align='center'>Your Trusted Digital Support<br /> Managed by Wonkasoft, LLC</h4>";
	}

	public function customize_login_page_footer_message() {
		echo "<p align='center'>Welcome to our Customer's Corner! As your trusted digital support,</p>";
		echo "<p align='center'>we are committed to providing you with a seamless online experience,</p>";
		echo "<p align='center'>ensuring smooth navigation and prompt assistance whenever you need it.</p>";
		echo "<p align='center'>For any issues contact Wonkasoft <a href='mailto:support@wonkasoft.com'>Support</a></p>";
	}

	public function customize_login_page_header_link() {
		return 'https://wonkasoft.com';
	}
}

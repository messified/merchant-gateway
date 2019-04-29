<?php

/**
 * The public-facing functionality of the plugin.
 *
 * @link       https://jessereese.com
 * @since      1.0.0
 *
 * @package    Merchant_Gateway
 * @subpackage Merchant_Gateway/public
 */

/**
 * The public-facing functionality of the plugin.
 *
 * Defines the plugin name, version, and two examples hooks for how to
 * enqueue the public-facing stylesheet and JavaScript.
 *
 * @package    Merchant_Gateway
 * @subpackage Merchant_Gateway/public
 * @author     Jesse Reese <jesse.c.reese@gmail.com>
 */
class Merchant_Gateway_Public {

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
	 * @param      string    $plugin_name       The name of the plugin.
	 * @param      string    $version    The version of this plugin.
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
		 * defined in Merchant_Gateway_Loader as all of the hooks are defined
		 * in that particular class.
		 *
		 * The Merchant_Gateway_Loader will then create the relationship
		 * between the defined hooks and the functions defined in this
		 * class.
		 */

		wp_enqueue_style( $this->plugin_name, plugin_dir_url( __FILE__ ) . 'css/merchant-gateway-public.css', array(), $this->version, 'all' );
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
		 * defined in Merchant_Gateway_Loader as all of the hooks are defined
		 * in that particular class.
		 *
		 * The Merchant_Gateway_Loader will then create the relationship
		 * between the defined hooks and the functions defined in this
		 * class.
		 */
		wp_enqueue_script( $this->plugin_name, '//cdnjs.cloudflare.com/ajax/libs/card/2.4.0/jquery.card.js', array('jquery'), '2.4.0', true);
		wp_enqueue_script( $this->plugin_name, plugin_dir_url( __FILE__ ) . 'public/js/merchant-gateway-public.js', array( 'jquery' ), $this->version, true);

	}

}

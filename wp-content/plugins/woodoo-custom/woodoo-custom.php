<?php 
/**
*	Plugin Name: Woodoo Custom Plugin
* 	Plugin URI:  https://wordpress.org/
 * Description: This is a custom plugin for integerate woocoomerce product .
 * Version:     1.0.0
 * Author:      WordPress Contributors
 * Text Domain: woodoo-custom
 * Domain Path: /languages
 * Requires at least: 5.0
 * Tested up to: 5.9
 * Requires PHP: 5.0.0
*/

if( ! defined( 'ABSPATH' ) ) exit; //Exit if accessed directly

class WoodooCustom{
	function __construct(){
		add_action('admin_menu', array($this, 'adminPage'));
		// add_action('admin_init', array($this, 'get_order'));
		add_action( 'rest_api_init', array($this,'rest_api_func_one'));
	}

	public function adminPage() {
		add_options_page(
			'Woodoo Integrate Settings',
			__('Woodoo Integrate', 'woodoo-custom'),
			'manage_options',
			'woodoo_custom_plugin_page',
			array($this, 'woodoo_custom_plugin')
		);
	}

	public function woodoo_custom_plugin() {
	?>
		<div class="wrap">
			<h1>Woodoo Integrate Settings</h1>
			<div class="woocom-get-data">
				<button class="btn btn-primary order"><a href="<?php echo home_url('/wp-json/woodoo-custom/v1/myapi/orders');?>">Get Order Data</a></button>
				<button class="btn btn-primary order"><a href="<?php echo home_url('/wp-json/woodoo-custom/v1/myapi/products');?>">Get Product</a></button>
			</div>
			<form action="options.php" method="POST">
				<?php
				// settings_fields('woodoo-custom');		// register_setting group name

				// do_settings_sections('woodoo_custom_plugin_page');		//page name
				// submit_button('Get Order', 'primary get_order', 'submit', true); 
				?>
			</form>
		</div>
		<?php
	}


	// public function get_order() {

	// }

	public function rest_api_func_one()
    {
        register_rest_route('woodoo-custom/v1', '/myapi/orders', array(
            'methods' => 'GET',
            'callback' => array(
                $this,
                'my_awesome_func_create'
            ),
        ));

        register_rest_route('woodoo-custom/v1', '/myapi/products', array(
            'methods' => 'GET',
            'callback' => array(
                $this,
                'my_awesome_func_create1'
            ),
        ));
    }

    public function my_awesome_func_create()
    {
        global $wpdb;
        $apiUrl = 'https://tienda.velosport.mx/wp-json/wc/v3/orders';
        $response = wp_remote_get($apiUrl, array(
		  'headers' => array(
		    'Authorization' => 'Basic ' . base64_encode( 'ck_f41f987da3335a09d574a0bebe6d96b23018824d:cs_f5766c6055301565ae3af39d8e9c4a0699a67d7a' )
		  )
		));

        $responseBody = wp_remote_retrieve_body($response);
        $result = json_decode($responseBody);
        print_r($result);
        die();
    }

    public function my_awesome_func_create1()
    {
        global $wpdb;
        $apiUrl = 'https://tienda.velosport.mx/wp-json/wc/v3/products';
        $response = wp_remote_get($apiUrl, array(
		  'headers' => array(
		    'Authorization' => 'Basic ' . base64_encode( 'ck_f41f987da3335a09d574a0bebe6d96b23018824d:cs_f5766c6055301565ae3af39d8e9c4a0699a67d7a' )
		  )
		));

        $responseBody = wp_remote_retrieve_body($response);
        $result = json_decode($responseBody);
        print_r($result);
        die();
    }
}

$WoodooCustom = new WoodooCustom();
?>
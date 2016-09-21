<?php 
/*
Plugin Name: Extra Plugin
Plugin URI:  http://URI_Of_Page_Describing_Plugin_and_Updates
Description: This describes my plugin in a short sentence
Version:     1.5
Author:      John Smith
Author URI:  http://URI_Of_The_Plugin_Author
License:     GPL2
License URI: https://www.gnu.org/licenses/gpl-2.0.html
Domain Path: /languages
Text Domain: extra-plugin
*/

/** Step 2 (from text above). */
add_action( 'admin_menu', 'marks_plugin_menu' );

/** Step 1. */
function marks_plugin_menu() {
	add_options_page( 'Marks Closed Sign', 'Marks Closed Dates', 'manage_options', 'marks_closed_options', 'marks_plugin_options' );
}

/** Step 3. */
function marks_plugin_options() {
	if ( !current_user_can( 'manage_options' ) )  {
		wp_die( __( 'You do not have sufficient permissions to access this page.' ) );
	}
	?>
	<h1>Marks Open Sign</h1>
	<form action="">
		<input type="text" name="closed-message">

		<input type="submit" name="">
	</form>
	<?php
}
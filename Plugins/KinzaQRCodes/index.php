<?php
/*
Plugin Name: Kinza QR-Codes
Plugin URI: http://www.osclass.org/
Description: Add QR-Codes of the items etc
Version: 1.0
Author: Computerbar
Author URI: http://www.osclass.org/
Short Name: kinzaqrcodes
*/



function kinzaqrcodes_show_item_url() {

  echo '<img src="http://chart.googleapis.com/chart?cht=qr&chs=120x120&choe=UTF-8&chld=L|0&chl='.osc_item_url().'" />';
   }
       
	
	
	
	
	function kinzaqrcodes_admin_menu() {
   	 echo '<h3><a href="#">Kinza QR-Codes</a></h3>
    	<ul>
    		
      	  <li><a href="'.osc_admin_render_plugin_url("kinzaqrcodes/help.php").'?section=types">&raquo; ' . __('F.A.Q. / Help', 'kinzaqrcodes') . '</a></li>
    	</ul>';
	}
	
	
	
	
	function kinzaqrcodes_help() {
        osc_admin_render_plugin(osc_plugin_path(dirname(__FILE__)) . '/help.php') ;
   }

   
// This is needed in order to be able to activate the plugin
osc_register_plugin(osc_plugin_path(__FILE__), '');

// This is a hack to show a Uninstall link at plugins table (you could also use some other hook to show a custom option panel)
osc_add_hook(osc_plugin_path(__FILE__)."_uninstall", '');

// Admin menu
osc_add_hook('admin_menu', 'kinzaqrcodes_admin_menu');
// This is a hack to show a Configure link at plugins table (you could also use some other hook to show a custom option panel)
osc_add_hook(osc_plugin_path(__FILE__)."_configure", 'kinzaqrcodes_help');



?>

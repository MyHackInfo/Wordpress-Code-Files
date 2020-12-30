<?php

add_shortcode( 'woocommerce_registration_form1', 'custom_registration_form' );

function custom_registration_form(){
	
ob_start();
?>
	<h2> test function.php file</h2>
<?php
     
   return ob_get_clean();
}
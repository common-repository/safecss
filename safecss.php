<?php
/*
Plugin Name: WordPress.com Custom CSS
Plugin URI: http://automattic.com/
Description: Allows CSS editing with strict filtering for malicious code
Author: Automattic
Version: 1.5
Author URI: http://automattic.com/
*/

function safecss_use_jetpack_instead() {
	?>
	<div class="notice">
		<p><?php printf( __( 'The <kbd>safecss</kbd> plugin has been deprecated, please <a href="%1$s">upgrade to Jetpack instead</a>.', 'safecss' ), esc_url( wp_nonce_url( admin_url( 'update.php?action=install-plugin&plugin=jetpack' ), 'install-plugin_jetpack' ) ) ); ?></p>
	</div>
	<?php
}
add_action( 'admin_notices', 'safecss_use_jetpack_instead' );


<?php
/**
 * Template part for displaying the footer info
 *
 * @package wp_rig
 */

namespace WP_Rig\WP_Rig;

?>

<div class="site-info">
	<span class="copyright">© <?php echo date('Y'); ?> Faction Media Group</span>
	<!-- <a href="<?php echo esc_url( __( 'https://wordpress.org/', 'wp-rig' ) ); ?>">
		<?php
		/* translators: %s: CMS name, i.e. WordPress. */
		printf( esc_html__( 'Proudly powered by %s', 'wp-rig' ), 'WordPress' );
		?>
	</a> -->
	<!-- <span class="sep"> | </span> -->
	<?php

	if ( function_exists( 'the_privacy_policy_link' ) ) {
		the_privacy_policy_link( '<span class="sep"> | </span>' );
	}
	?>
</div><!-- .site-info -->

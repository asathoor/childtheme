<?php
/**
 * fil: functions.php
 * formål: Tilføjer styles og ekstra muligheder til dit tema
 * tema: TT5 Child
 */

/** Stylesheets: fra parent og childthemet */
add_action( 'wp_enqueue_scripts', 'petj_tt5Child_enqueue_styles' );

function petj_tt5Child_enqueue_styles() {

    /** Parent CSS (loades først) */
    wp_enqueue_style( 
		'tt5-parent-style', 
		get_parent_theme_file_uri( 'style.css' )
	);

    /** Child CSS (loades sidst, hvorfor mon?) */
	wp_enqueue_style( 
		'tt5-child-style', 
		get_stylesheet_uri()
	);
}

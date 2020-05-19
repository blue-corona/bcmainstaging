<?php 
function CS_bluecorona2015_widgets_init() {

	register_widget( 'Bluecorona_2015_Ephemera_Widget' );

	register_sidebar( array(
		'name' => __( 'Services Block', 'bluecorona2015' ),
		'id' => 'custom_sidebar-1',
		'description' => __( 'An optional widget area for your site footer', 'bluecorona2015' ),
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget' => "</aside>",
		'before_title' => '<h3 class="widget-title">',
		'after_title' => '</h3>',
	) );
	register_sidebar( array(
		'name' => __( 'Office Address', 'bluecorona2015' ),
		'id' => 'custom_sidebar-2',
		'description' => __( 'An optional widget area for your site footer', 'bluecorona2015' ),
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget' => "</aside>",
		'before_title' => '<h3 class="widget-title">',
		'after_title' => '</h3>',
	) );
	register_sidebar( array(
		'name' => __( 'Archive Block', 'bluecorona2015' ),
		'id' => 'custom_sidebar-3',
		'description' => __( 'An optional widget area for your site footer', 'bluecorona2015' ),
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget' => "</aside>",
		'before_title' => '<h3 class="widget-title">',
		'after_title' => '</h3>',
	) );
	register_sidebar( array(
		'name' => __( 'Page Form', 'bluecorona2015' ),
		'id' => 'custom_sidebar-4',
		'description' => __( 'An optional widget area for your site footer', 'bluecorona2015' ),
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget' => "</aside>",
		'before_title' => '<h3 class="widget-title">',
		'after_title' => '</h3>',
	) );
	
	register_sidebar( array(
		'name' => __( 'Case Studies Form', 'bluecorona2015' ),
		'id' => 'custom_sidebar-5',
		'description' => __( 'An optional widget area for your site footer', 'bluecorona2015' ),
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget' => "</aside>",
		'before_title' => '<h3 class="widget-title">',
		'after_title' => '</h3>',
	) );
	
	
}
add_action( 'widgets_init', 'CS_bluecorona2015_widgets_init' );

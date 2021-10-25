<?php

/**
 * Enqueue scripts and styles.
 */
function shaban_scripts() {
	wp_enqueue_style( 'shaban-style', get_stylesheet_uri(), NULL, microtime());
	
		wp_enqueue_style( 'shaban-contnt-sidebar', get_template_directory_uri() . '/layouts/content-sidebar.css' );
		
			wp_enqueue_style( 'shaban-google-fonts', 'https://fonts.googleapis.com/css?family=Lato:400,100,700,900,900italic,400italic|PT+Serif+Caption');
	
	wp_enqueue_style( 'shaban-fontawsome', 'https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css');


wp_enqueue_script( 'shaban-superfish', get_template_directory_uri() . '/js/superfish.min.js', array('jquery'), '20140328', true );

wp_enqueue_script( 'shaban-superfish-settings', get_template_directory_uri() . '/js/superfish-settings.js', array('shaban-superfish'), '20140328', true );

	wp_enqueue_script( 'shaban-navigation', get_template_directory_uri() . '/js/navigation.js', array(), '20120206', true );

	wp_enqueue_script( 'shaban-skip-link-focus-fix', get_template_directory_uri() . '/js/skip-link-focus-fix.js', array(), '20130115', true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {˚¥
		wp_enqueue_script( 'comment-reply');
	}
}
add_action( 'wp_enqueue_scripts', 'shaban_scripts' );
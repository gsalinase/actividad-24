<?php 

	//Estilos CSS
	function singolo_styles() {

		//Registrar estilos
		wp_register_style( 'normalize', get_template_directory_uri(). '/css/normalize.css', array(), '7.0.0' );
		wp_enqueue_style( 'style', get_stylesheet_uri(), array('normalize') );
		wp_register_style( 'fontawesome', get_template_directory_uri(). '/css/font-awesome.min.css', array('normalize'), '4.7.0' );
		wp_register_style( 'main', get_template_directory_uri(). '/css/main.css', array('normalize'), null );
		wp_register_style( 'nivo_slider', get_template_directory_uri(). '/css/nivo-slider.css', array(), '3.2' );
		wp_register_style( 'nivo_theme', get_template_directory_uri(). '/css/nivotheme.css', array(), '1.3' );
		wp_register_style( 'pretty_photo', get_template_directory_uri(). '/css/prettyPhoto.css', array(), null);


		//Llamar estilos
		wp_enqueue_style( 'normalize' );
		wp_enqueue_style( 'style' );
		wp_enqueue_style( 'fontawesome' );
		wp_enqueue_style( 'main' );
		wp_enqueue_style( 'nivo_slider' );
		wp_enqueue_style( 'nivo_theme' );
		wp_enqueue_style( 'pretty_photo' );

	}

	//Registrar JS
	wp_register_script( 'script', get_template_directory_uri().'/js/script.js', array(), '1.0', true );
	wp_register_script( 'custom', get_template_directory_uri().'/js/script.js', array(), '1.0', true );
	wp_register_script( 'easing', get_template_directory_uri().'/js/jquery.easing.1.3.js', array('Jquery'), '1.3', true );
	wp_register_script( 'nivo_slider', get_template_directory_uri().'/js/script.js', array('Jquery'), '3.2', true );
	wp_register_script( 'pretty_photo', get_template_directory_uri().'/js/script.js', array('Jquery'), '3.1', true );

	//Llamar scripts
	wp_enqueue_scripts('Jquery');
	wp_enqueue_scripts('script');
	wp_enqueue_scripts('custom');
	wp_enqueue_scripts('easing');
	wp_enqueue_scripts('nivo_slider');
	wp_enqueue_scripts('pretty_photo');

	add_action( 'wp_enqueue_scripts', 'singolo_styles' );

	//Creación de menú
	function singolo_menu() {

		register_nav_menus( array(
			'header-menu' =>__('Header Menú', 'singolo'),
		) );


	}	

	add_action( 'init', 'singolo_menu' );

?>
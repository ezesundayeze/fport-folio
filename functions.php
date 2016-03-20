<?php
			function my_scripts_styles() {
			wp_register_script('easing', get_template_directory_uri() . '/js/bootstrap.js',  '2014-12-030', true );
			wp_register_script('easing', get_template_directory_uri() . '/js/bootstrap.min.js',  '2014-12-030', true );
			wp_register_script('easing', get_template_directory_uri() . '/js/jquery.js',  '2014-12-030', true );
			wp_enqueue_script('easing');
		}

		add_action( 'wp_enqueue_scripts', 'my_scripts_styles' );
		?>
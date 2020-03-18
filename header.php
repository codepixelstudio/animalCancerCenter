<?php ?>

<!doctype html>

	<html class="no-js" <?php language_attributes(); ?> >

		<head>

			<meta charset="<?php bloginfo( 'charset' ); ?>" />

			<meta http-equiv="X-UA-Compatible" content="IE=edge">

			<meta name="viewport" content="width=device-width, initial-scale=1.0" />

			<meta name="apple-mobile-web-app-capable" content="yes"/>

			<meta name="apple-mobile-web-app-status-bar-style" content="black-translucent"/>

	        <meta name="apple-mobile-web-app-title" content="enterprise"/>

			<link rel="apple-touch-icon" href="<?php echo get_template_directory_uri(); ?>/dist/assets/img/icons/iOS.png"/>

			<link rel="shortcut icon" type="image/x-icon" href="<?php echo get_template_directory_uri(); ?>/favicon.ico" />

			<link rel="stylesheet" type="text/css" href="//wpcc.io/lib/1.0.2/cookieconsent.min.css"/>

			<!-- <script src="//wpcc.io/lib/1.0.2/cookieconsent.min.js"></script> -->

			<!-- <script>

				window.addEventListener( "load", function(){

					window.wpcc.init({

						"colors":{
							"popup":{
								"background":"#0d3825",
								"text":"#ffffff",
								"border":"#e1b7a0"
							},
							"button":{
								"background":"#97ca3d",
								"text":"#ffffff"
							}
						},
						"position":"bottom-right",
						"transparency":"5",
						"content":{
							"message":"We serve cookies to analyze traffic and customize content on this site.",
							"button":"Dismiss",
							"href":"https://www.csuanimalcancercenter.org/privacy-statement",
							"link":"Privacy Policy"
						},
						"padding":"large",
						"margin":"large",
						"fontsize":"small"

					})

				});

			</script> -->

			<?php wp_head(); ?>

		</head>

		<?php

			$site_type = get_field( 'site_type', 'options' );

		?>

		<body <?php body_class(); ?> data-site-type="<?php echo $site_type; ?>">

			<a href="#content" class="skip-link screen-reader-text"><?php esc_html_e( 'Skip to content', 'cvmbsPress' ); ?></a>

			<?php get_template_part( 'elements/layout/layout.header' ); ?>

			<div id="content">

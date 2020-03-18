<?php

    // register menus
	register_nav_menus(

		array(

			'facc-menu'       => __( 'FACC Main Menu', 'cvmbs' )

		)

	);

    // site menu
	function facc_site_menu( $menu_class, $menu_type ) {

	    wp_nav_menu( array(

	        'container' 	  => false,
	        'container_class' => '',
	        'menu' 			  => '',
			'menu_class' 	  => $menu_class,
            'items_wrap' 	  => '<ul id="%1$s" class="%2$s"' . $menu_type . '>%3$s</ul>',
	        'theme_location'  => 'facc-menu',
	        'before'		  => '',
	        'after' 		  => '',
	        'link_before' 	  => '',
	        'link_after' 	  => '',
	        'depth' 		  => 5,
	        'fallback_cb'	  => false,
	        'walker' 		  => new Off_Canvas_Menu_Walker(),

	    ));

	}

?>

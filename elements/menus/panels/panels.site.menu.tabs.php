<?php

    // location class
    $menu_class = 'menu vertical accordion-menu';

    // data type
    $menu_type = 'data-accordion-menu';

?>

<!-- wrapper -->
<div class="tabs-content" data-tabs-content="site-menu-toolbar">

    <!-- panel.main -->
    <div id="menu-panel-main" class="tabs-panel menu-panel is-active">

        <!-- panel.header -->
        <header id="menu-panel-main-header" class="panel-header">

            navigation menu

        </header>
        <!-- END panel.header -->

        <!-- menu -->
        <nav id="menu-panel-main-menu" class="panel-content menu" role="navigation">

            <?php facc_site_menu( $menu_class, $menu_type ); ?>

        </nav>
        <!-- END menu -->

    </div>
    <!-- END panel.main -->


</div>
<!-- END wrapper -->


<!-- template block -->
<div class="template-block icon-box-block">

    <div class="template-block__inner">

	<?php

        // heading options
        $heading_option   = get_sub_field( 'heading_option' );
        $heading_content  = get_sub_field( 'heading' );
        $icon_box_content = get_sub_field( 'icon_box_content' );

        if ( $heading_option ) : ?>

            <<?php echo $heading_content[ 'html_tag' ]; ?> class="description-title">

                <?php echo $heading_content[ 'title' ]; ?>

            </<?php echo $heading_content[ 'html_tag' ]; ?>>

        <?php endif; ?>

        <!-- icon boxes -->
        <div class="icon_box_content">

        <?php foreach ( $icon_box_content as $icon_box ) : ?>

            <!-- block -->
            <div class="icon_box_block">

                <!-- image -->
                <img class="icon_box_image" src="<?php echo $icon_box[ 'icon' ]; ?>" alt="<?php echo $icon_box[ 'title' ]; ?>">

                <!-- title -->
                <span class="icon_box_title">

                    <?php echo $icon_box[ 'title' ]; ?>

                </span>
                <!-- END title -->

                <!-- text -->
                <p class="icon_box_text">

                    <?php echo $icon_box[ 'text' ]; ?>

                </p>
                <!-- END text -->

                <?php if ( $icon_box[ 'link' ] ) : ?>

                <!-- link -->
                <a href="<?php echo $icon_box[ 'link' ][ 'url' ]; ?>">

                    <?php echo $icon_box[ 'link' ][ 'title' ]; ?>

                </a>
                <!-- END link -->

                <?php endif; ?>

            </div>
            <!-- END block -->

        <?php endforeach; ?>

        </div>
        <!-- END icon boxes -->

	</div>
    <!--. template-block__inner -->

</div>
<!--. template-block -->

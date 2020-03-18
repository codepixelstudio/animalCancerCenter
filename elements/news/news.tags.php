<?php

    // setup tag cloud
    $tags = get_tags( array( 'get' => 'all' ));

    // tag cloud iteration
    foreach ( $tags as $tag ) {

        $tag_link = get_tag_link( $tag->term_id );

        $tag_list .= '<a href="' . $tag_link . '" class="taxonomy_item">' . $tag->name . '</a>';

    }

    // output tags
    echo $tag_list;

?>

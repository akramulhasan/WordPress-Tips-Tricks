<?php 

// Get Featured image url
$page_id = get_queried_object_id();
if ( has_post_thumbnail( $page_id ) ) :
    $image_array = wp_get_attachment_image_src( get_post_thumbnail_id( $page_id ), 'full' );
    $image = $image_array[0];
else :
    $image = get_template_directory_uri().'/assets/images/slider/page-banner.jpg';
endif;
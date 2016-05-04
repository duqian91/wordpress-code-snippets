<?php

add_shortcode( 'LINK-SHORTCODE', 'add_link_short_code' );
function add_link_short_code( $atts ){
    $atts = shortcode_atts( 
      array(
        'text' => 'my profile',
      ), 
      $atts,
    );

    // check if user is logged in, else empty
    if( !is_user_logged_in() )
        return '';

    // showcase an example with get_current_user_id()
    $link = home_url( '/customlink/' . bp_core_get_username( get_current_user_id() ) . '/customlink/' );
    return "<a href='". esc_attr( $link ) ."'>" . $atts['text'] . "</a>";
}

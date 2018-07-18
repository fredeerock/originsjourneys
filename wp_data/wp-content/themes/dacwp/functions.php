<?php

show_admin_bar( false );
add_theme_support( 'post-thumbnails' ); 

function console_log( $data ){
    echo '<script>';
    echo 'console.log('. json_encode( $data ) .')';
    echo '</script>';
  }

?>
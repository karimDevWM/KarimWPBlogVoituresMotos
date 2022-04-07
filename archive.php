<?php 
    if( is_post_type_archive( 'portfolio' ) ) { 
        echo '<h1>work</h1>';
    }
    else
    {
        echo '<h1>not work</h1>';
    }
?>
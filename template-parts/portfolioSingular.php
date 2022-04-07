<?php 
    if( is_singular( 'portfolio' ) ) {
        echo '<h1>singular</h1>';
    }
    else
    {
        echo '<h1>not singular</h1>';
    }

?>
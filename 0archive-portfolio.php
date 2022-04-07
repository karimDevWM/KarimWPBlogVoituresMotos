<footer><?php 
    if( is_post_type_archive( 'portfolio' ) ) {
        echo '<h1>post type portfolio</h1>';
    }
    else
    {
        echo '<h1>not post type portfolio</h1>';
    }
?></footer>
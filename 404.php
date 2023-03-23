<?php get_header(); 
?>

<div class="error-404">
    <h1><?php _e( 'Oops! That page can&rsquo;t be found.', 'textdomain' ); ?></h1>
    <p><?php _e( 'It looks like nothing was found at this location. Maybe try a search?', 'textdomain' ); ?></p>
    <?php get_search_form(); ?>
</div>

<?php

 get_footer();
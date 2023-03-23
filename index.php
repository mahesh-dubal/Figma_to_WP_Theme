<?php get_header(); ?>

<?php
    // Start the loop
    if ( have_posts() ) :
        while ( have_posts() ) :
            the_post();
 
            // Display post content
            the_title();
            the_content();
 
        endwhile;
    else :
        // If no content, display a message
        echo 'Sorry, no posts were found.';
    endif;
?>


<?php get_footer(); ?>


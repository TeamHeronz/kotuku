<?php
/**
 * Template Name: Forms
 *
 * The custom template for Apply and Enrol. Custom widths for forms.
 *
 *
 * @package Kotuku
 */
 if ( is_page( 'Classroom' ) ) :
     get_header( 'classroom' );
   else:
     get_header();
   endif;
 ?>

 <?php
 while (have_posts()) : the_post();
   the_content();
 endwhile;
 ?>
  
 <?php
 get_footer();

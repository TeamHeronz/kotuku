<?php
/**
 * Template Name: Classroom
 *
 * The custom template for the Classroom containing an interactive whiteboard,
 * embeded personal appear.in, information about the tutor. Custom header.
 *
 *
 * @package Kotuku
 */

  get_header('classroom');
?>

  <?php
  while (have_posts()) : the_post();
    the_content();
  endwhile;
  ?>

  

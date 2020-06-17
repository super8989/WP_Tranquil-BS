<?php 

/*
* The template for displaying single posts
*/

?>

<?php get_header(); ?>


<?php 
  if ( have_posts() ) {
    while ( have_posts() ) {
      the_post();
      the_content();
    }
  } else {
?>
    <p><?php _e('Sorry, no pages matched your criteria'); ?></p>

<?php      
  }
?>




<!-- FOOTER SECTION -->
<?php get_footer(); ?>
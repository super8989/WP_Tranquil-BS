<?php 
/*
* The template for displaying all blog posts
*/
?>


<?php get_header(); ?>

  <!-- BLOG SECTION -->
  <main class="container-fluid py-5">
    <div class="row">
      <div class="col-sm-8">
        
        <?php
          if (have_posts()) {
              while (have_posts()) {
                  the_post(); ?>
              <div>
  
                <h2><?php the_title(); ?></h2>
                
                <p><?php echo get_the_date('F j, Y'); ?> by <a href=""><?php the_author(); ?></a></p>
                <div class='pb-2'>
                  <i class="fas fa-tags"></i>
                  <p class='d-inline'><?php the_tags('Tagged: ', ' ~ '); ?></p>
                </div>
                <p><?php the_content(); ?></p>
                
              </div>
              
        <?php
              }
          } else {
              ?>
              <p><?php _e('Sorry, no posts matched your criteria') ?></p>
        <?php
          }
        ?>


        <nav>
          <ul class="nav">
            <li><?php next_posts_link(); ?></li> &nbsp;
            <li><?php previous_posts_link(); ?></li>
          </ul>
        </nav>
      </div>

      <aside class="col-sm-4">
        <?php get_sidebar(); ?>
      </aside>

    </div><!-- row -->
  </main><!-- container-->



<!-- FOOTER SECTION -->
<?php get_footer(); ?>
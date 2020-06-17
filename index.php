<?php 

/*
* The main template file
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
                the_post(); 
        ?>

              <div>
                <a href="<?php the_permalink(); ?>">
                  <h2><?php the_title(); ?></h2>
                </a>
                <p><?php echo get_the_date('F j, Y'); ?> by <a href=""><?php the_author(); ?></a></p>
                <div class='pb-2'>
                  <i class="fas fa-tags"></i>
                  <p class='d-inline'><?php the_tags('Tagged: ', ' ~ '); ?></p>
                </div>
                <p><?php the_excerpt(); ?></p>
                <div class='mb-3'>
                  <a href="<?php the_permalink(); ?>">
                    <?php _e('Read more...') ?>
                  </a>

                </div>
              </div>
              
         
        <?php
              }
            } else {
        ?>
              <p><?php _e('Sorry, no posts matched your criteria') ?></p>
        <?php
          }
        ?>

        </div><!-- row -->
      </main><!-- container-->


   <nav>
    <ul class="nav">
      <li><?php next_posts_link(); ?></li> &nbsp;
      <li><?php previous_posts_link(); ?></li>
    </ul>
  </nav>
</div>



<!-- FOOTER SECTION -->
<?php get_footer(); ?>
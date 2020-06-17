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
                <h2><?php the_title(); ?></h2>
                <p><?php echo get_the_date('F j, Y'); ?> by <a href=""><?php the_author(); ?></a></p>
                <div class='pb-2'>
                  <i class="fas fa-tags"></i>
                  <p class='d-inline'><?php the_tags('Tagged: ', ' ~ '); ?></p>
                </div>
                <p><?php the_excerpt(); ?></p>
              </div>

        <?php
              }
            } else {
          }
        ?>


        <nav>
          <ul class="nav">
            <li>Next Page</li> &nbsp;
            <li>Previous Page</li>
          </ul>
        </nav>
      </div>

      <aside class="col-sm-4">
        <div class="py-3">
          <h4 class="font-italic">About</h4>
          <p class="mb-0">
            Welcome to the official Tranquil Spa blog. Here you will find all the latest news and what's going on at the spa.
            <hr>
          </p>
        </div>
        <div class="py-3">
          <h4 class='font-italic'>Archives</h4>
          <ol class="list-unstyled mb-0">
            <li><a href="">April 2020</a></li>
            <li><a href="">May 2020</a></li>
            <li><a href="">June 2020</a></li>
          </ol>
        </div>
        <div class="py-3">
          <h4 class="font-italic">Categories</h4>
          <ol class="list-unstyled mb-0">
            <li><a href="">News</a></li>
            <li><a href="">Offers</a></li>
          </ol>
        </div>
        <div class="py-3">
          <h4 class="font-italic">Follow Us</h4>
          <i class="fab fa-facebook-square fa-2x"></i>
          <i class="fab fa-twitter-square fa-2x"></i>
          <i class="fab fa-instagram fa-2x"></i>
          <i class="fab fa-pinterest-square fa-2x"></i>
        </div>
      </aside>
    </div><!-- row -->
  </main><!-- container-->



<!-- FOOTER SECTION -->
<?php get_footer(); ?>
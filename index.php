<?php 

/*
* The main template file
*/

?>

<?php get_header(); ?>


  
  <!-- Welcome -->
  <div class="container-fluid text-center py-5">
    <div class="row">
      <div class="col-md-6 offset-md-3">
        <h3>Welcome to Tranquil Spa</h3>
        <img src="images/divider-purple.png" alt="divider" class='w-25'>
      </div>
    </div>

    <div class="row mt-4 d-flex justify-content-around">
      <div class="col-sm-3">
        <img src="images/makeup.jpg" alt="Makeup image" class='card-img-top rounded-circle'>
        <div class="card-body">
          <p class='card-text'>Hair &amp; Makeup</p>
        </div>
      </div>
      <div class="col-sm-3">
        <img src="images/candles.jpg" alt="Candles image" class='card-img-top rounded-circle'>
        <div class="card-body">
          <p class='card-text'>Spa Facilities</p>
        </div>
      </div>
      <div class="col-sm-3">
        <img src="images/retreat.jpg" alt="Retreat image" class='card-img-top rounded-circle'>
        <div class="card-body">
          <p class='card-text'>Take a Tour</p>
        </div>
      </div>
    </div>
  </div>


  <!-- LATEST OFFERS -->
  <div class="container-fluid text-center bg-dark py-5">
    <div class="row">
      <div class="col-md-6 offset-md-3">
        <h3 class="text-light">Latest Spa Offers</h3>
        <img src="images/divider-silver.png" alt="Divider" class='pb-4 w-25'>
      </div>
    </div>

    <div class="row">
      <div class="col-sm-4">
        <div class="card h-100">
          <h4 class="card-header py-5">Family Swim <span class="font-weight-bold">$60</span></h4>
          <div class="card-body">
            <blockquote class='blockquote mb-0'>
              <p>Our most popular swim package. Great value for families or groups up to 12 people</p>
            </blockquote>
          </div>
          <ul class="list-group">
            <li class="list-group-item font-italic">Up to 12 people</li>
            <li class="list-group-item font-italic">Private sessions</li>
            <li class="list-group-item font-italic">Swim lessons also available</li>
          </ul>
        </div>
      </div>

      <div class="col-sm-4">
        <div class="card h-100">
          <h4 class="card-header py-5">For the bride <span class="font-weight-bold">$40</span></h4>
          <div class="card-body">
            <blockquote class='blockquote mb-0'>
              <p>Our wedding packages are perfect for your big day. We can cater both large or small groups</p>
            </blockquote>
          </div>
          <ul class="list-group">
            <li class="list-group-item font-italic">Hair &amp; Makeup</li>
            <li class="list-group-item font-italic">Groups of any size</li>
            <li class="list-group-item font-italic">Champagnes &amp; cocktails available</li>
          </ul>
        </div>
      </div>

      <div class="col-sm-4">
        <div class="card h-100">
          <h4 class="card-header py-5">Weekend Pass <span class="font-weight-bold">$60</span></h4>
          <div class="card-body">
            <blockquote class='blockquote mb-0'>
              <p>Take full advantage of all facilities with our unlimited weekend pass</p>
            </blockquote>
          </div>
          <ul class="list-group">
            <li class="list-group-item font-italic">Pool &amp; Sauna</li>
            <li class="list-group-item font-italic">Full use of our gym</li>
            <li class="list-group-item font-italic">Inclues 2 treatments per person</li>
          </ul>
        </div>
      </div>
    </div><!--row-->
  </div><!--container-->

  <!-- ABOUT US -->
  <div class="container-fluid py-5 text-center bg-light">
    <div class="row">
      <div class="col-sm-6 offset-sm-3">
        <h3>About Us</h3>
        <img src="images/divider-purple.png" alt="Divider" class='w-25'>
      </div>
    </div>
    <div class="row mt-2">
      <div class="col">
        <p class="text-center">Lorem ipsum dolor sit amet consectetur adipisicing elit. Necessitatibus hic iure aliquid corrupti voluptatum, totam assumenda vero itaque. Modi inventore excepturi provident deleniti sed maxime rem, voluptate vitae cupiditate odio vero quo totam omnis possimus iusto velit dolorum a nihil! Lorem ipsum dolor sit amet, consectetur adipisicing elit. Exercitationem eveniet quae velit aspernatur tempore quam labore sapiente sed dolore sit ipsa, eius repellendus commodi vero fugit? Itaque nisi laudantium aspernatur deserunt quae, dolorem harum rem, fuga, nobis aut dicta consequatur? Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
      </div>
    </div>
  </div>


  <!-- PRICE LIST SECTION -->
  <div class="container-fluid py-5 bg-dark">
    <div class="row">
      <div class="col-md-6 offset-md-3 text-center">
        <h3 class='text-light'>Price List</h3>
        <img src="images/divider-silver.png" alt="Divider" class='pb-4 w-25'>
      </div>
    </div>
    <div class="row my-4">
      <div class="col-sm-8">
        <img src="images/massage.jpg" alt="Massage image">
      </div>
      <div class="col-sm-4">
        <h4 class="title text-center">Massages</h4>
        <ul class="list-group list-group-flush text-light">
          <li class="list-group-item">Massage 1 <em>-$10</em></li>
          <li class="list-group-item">Massage 2 <em>-$10</em></li>
          <li class="list-group-item">Massage 3 <em>-$10</em></li>
          <li class="list-group-item">Massage 4 <em>-$10</em></li>
          <li class="list-group-item">Massage 5 <em>-$10</em></li>
      </div>
    </div>

    <div class="row my-4">
      <div class="col-sm-4">
        <h4 class="title text-center">Facials</h4>
        <ul class="list-group list-group-flush text-light">
          <li class="list-group-item">Facial 1 <em>-$10</em></li>
          <li class="list-group-item">Facial 2 <em>-$10</em></li>
          <li class="list-group-item">Facial 3 <em>-$10</em></li>
          <li class="list-group-item">Facial 4 <em>-$10</em></li>
          <li class="list-group-item">Facial 5 <em>-$10</em></li>
      </div>
      <div class="col-sm-8">
        <img src="images/facial.jpg" alt="Facial image">
      </div>
    </div>

    <div class="row my-4">
      <div class="col-sm-8">
        <img src="images/cosmetics.jpg" alt="Cosmetics image">
      </div>
      <div class="col-sm-4">
        <h4 class="title text-center">Hair &amp; Makeup</h4>
        <ul class="list-group list-group-flush text-light">
          <li class="list-group-item">Hair 1 <em>-$10</em></li>
          <li class="list-group-item">Hair 2 <em>-$10</em></li>
          <li class="list-group-item">Hair 3 <em>-$10</em></li>
          <li class="list-group-item">Hair 4 <em>-$10</em></li>
          <li class="list-group-item">Hair 5 <em>-$10</em></li>
      </div>
    </div>
  </div><!-- container -->



  <!-- FOOTER SECTION -->
  <?php get_footer(); ?>
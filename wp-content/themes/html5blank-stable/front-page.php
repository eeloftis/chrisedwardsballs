<?php get_header(); ?>


<main role="main">


<section>

<div class="border">

  <div class="slider" id="here">

    <!-- category="2" for prod -->
 <?php echo do_shortcode('[slick-slider category="2" design="design-1"]'); ?>
  </div>


  <a class="preorder-button" href="">Pre-order Now</a>

  <div class="row clear">
    <div class="boxes"><h2>Upcoming Events</h2>

        <div class="event">Carnegie Hall, New York, NY<br>
          12.11.16</div>

          <div class="event">XXX000, Boston, MA<br>
            00.00.00</div>

            <div class="event">XXX000, San Fransisco, CA<br>
                00.00.00</div>

    </div>
    <div class="boxes"><h2>Latest Press</h2>

        <div class="press">Vanity Fair Article</div>
        <div class="press">GQ Article</div>
        <div class="press">The New York Times, 10.11.16</div>

    </div>
  </div>

</div>

</section>


</main>

<?php get_footer(); ?>

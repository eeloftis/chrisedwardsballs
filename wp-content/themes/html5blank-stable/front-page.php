<?php get_header(); ?>


<main role="main">


<section>

<div class="border">

  <div class="slider" id="here">

    <!-- category="2" for prod -->
 <?php echo do_shortcode('[cycloneslider id="front-page"]'); ?>
  </div>


  <a class="preorder-button" href="http://www.chrisedwardsballs.com/pre-order-balls-now/">Pre-order Now</a>

  <div class="row clear">
    <div class="boxes"><h2>Upcoming Events</h2>


  <?php

    $event_post = 'event';

    $args=array(
      'post_type' => $event_post,
      "front-page" => front-page,
      'post_status' => 'publish'
    );

    $my_query = null;
    $my_query = new WP_Query($args);

    if( $my_query->have_posts() ) {
      while ($my_query->have_posts()) : $my_query->the_post(); ?>
      <div class="event"><a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>"><?php the_title(); ?></a></div>
        <?php
      endwhile;
    }

    wp_reset_query();

  ?>


    </div>



      <div class="boxes"><h2>RECENT PRESS</h2>


    <?php

      $press_post = 'press';

      $args=array(
        'post_type' => $press_post,
        "front-page" => front-page,
        'post_status' => 'publish'
      );

      $press_query = null;
      $press_query = new WP_Query($args);

      if( $press_query->have_posts() ) {
        while ($press_query->have_posts()) : $press_query->the_post(); ?>
        <div class="press"><?php the_content(); ?></div>
          <?php
        endwhile;
      }

      wp_reset_query();

    ?>



    </div>
  </div>

</div>

</section>


</main>

<?php get_footer(); ?>

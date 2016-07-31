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



<?php


$args = array(
    'post_type' => 'event',
    'tax_query' => array(
        array(
            'taxonomy' => 'front-page',

        )
    )
);
$query = new WP_Query( $args );


//for a given post type, return all
$event_post = 'event';


    $args=array(
      'post_type' => $event_post,
      "front-page" => front-page,
      'post_status' => 'publish'
    );

    $my_query = null;
    $my_query = new WP_Query($args);
  wp_reset_query();
    if( $my_query->have_posts() ) {
      while ($my_query->have_posts()) : $my_query->the_post(); ?>
        <div class="event"><a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>"><?php the_title(); ?></a></div>
        <?php
      endwhile;
    }
      wp_reset_query();
?>


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

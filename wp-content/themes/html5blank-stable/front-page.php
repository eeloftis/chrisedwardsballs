<?php get_header(); ?>


<main role="main">


<section>

<div class="border">

  <div class="slider" id="here">

    <!-- category="2" for prod -->
 <?php echo do_shortcode('[slick-slider category="2" design="design-1"  autoplay_interval="7000"]'); ?>
  </div>


  <a class="preorder-button" href="http://www.emilyloftis.com/chrisedwardsballs/pre-order-now/">Pre-order Now</a>

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
    <div class="boxes"><h2>E-NEWSLETTER</h2>

      <!-- Begin MailChimp Signup Form -->
<link href="//cdn-images.mailchimp.com/embedcode/classic-10_7.css" rel="stylesheet" type="text/css">
<style type="text/css">
#mc_embed_signup{background:#F4F4F4; clear:left; font:14px 'PT Sans', sans-serif; color: #524B48;
 font-family: 'pt sans', sans-serif;}

#mc_embed_signup h2 {
color: #000;

font-size: 22px;
 }

#mc-embedded-subscribe {

  background-color: #060E9F !important;
  color: #fff;

  font-size: 24px;
  text-transform: uppercase;
  font-weight: bold !important;
  border-radius: 2px;
  box-shadow: 0 4px 2px -2px rgba(0,0,0,0.2);
  font-family: 'PT Sans', sans-serif;
  border-radius: 2px;


}

#mc-embedded-subscribe:hover {
  text-decoration: underline;
}
/* Add your own MailChimp form style overrides in your site stylesheet or in this style block.
   We recommend moving this block and the preceding CSS link to the HEAD of your HTML file. */
</style>
<div id="mc_embed_signup">
<form action="//chrisedwardsballs.us13.list-manage.com/subscribe/post?u=53a8b15f8bd074b8d14977b4e&amp;id=26f25db47e" method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" class="validate" target="_blank" novalidate>
  <div id="mc_embed_signup_scroll">

<div class="indicates-required"><span class="asterisk">*</span> indicates required</div>
<div class="mc-field-group">
<label for="mce-EMAIL">Email Address  <span class="asterisk">*</span>
</label>
<input type="email" value="" name="EMAIL" class="required email" id="mce-EMAIL">
</div>
<div class="mc-field-group">
<label for="mce-FNAME">First Name </label>
<input type="text" value="" name="FNAME" class="" id="mce-FNAME">
</div>
<div class="mc-field-group">
<label for="mce-LNAME">Last Name </label>
<input type="text" value="" name="LNAME" class="" id="mce-LNAME">
</div>
<div id="mce-responses" class="clear">
  <div class="response" id="mce-error-response" style="display:none"></div>
  <div class="response" id="mce-success-response" style="display:none"></div>
</div>      <!--   real people should not fill this in and expect good things - do not remove this or risk form bot signups-->
<div style="position: absolute; left: -5000px;" aria-hidden="true"><input type="text" name="b_53a8b15f8bd074b8d14977b4e_26f25db47e" tabindex="-1" value=""></div>
  <div class="clear"><input type="submit" value="Subscribe" name="subscribe" id="mc-embedded-subscribe" class="button"></div>
  </div>
</form>
</div>

<!--End mc_embed_signup-->


    </div>
  </div>

</div>

</section>


</main>

<?php get_footer(); ?>

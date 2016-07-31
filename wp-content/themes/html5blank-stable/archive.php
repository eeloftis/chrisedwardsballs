<?php get_header(); ?>

	<main role="main">
		<!-- section -->
		<section>

			  <div class="border">

					    <div class="content-block">

			<h1><?php _e( 'Events', 'html5blank' ); ?></h1>



			<?php get_template_part('loop'); ?>

			<?php get_template_part('pagination'); ?>
		</div>

		</div>

		</section>
		<!-- /section -->
	</main>



<?php get_footer(); ?>

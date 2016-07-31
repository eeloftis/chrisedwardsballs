<?php get_header(); ?>

	<main role="main">
		<!-- section -->
		<section>

			<h1><?php _e( 'Events', 'html5blank' ); ?></h1>

			    <div class="border">

			<?php get_template_part('loop'); ?>

			<?php get_template_part('pagination'); ?>

		</div>

		</section>
		<!-- /section -->
	</main>



<?php get_footer(); ?>

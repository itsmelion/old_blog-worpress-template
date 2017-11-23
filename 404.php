<?php get_header(); ?>

	<main class="flex-grow" role="main" aria-label="Content">
		<!-- section -->
		<section class="contain">

			<!-- article -->
			<article id="post-404">

				<h1><?php _e( 'Page not found', 'html5blank' ); ?></h1>
				<h2>
					<a class="button" href="<?php echo home_url(); ?>"><?php _e( 'Return home?', 'html5blank' ); ?></h2>
				</h2>

			</article>
			<!-- /article -->

		</section>
		<!-- /section -->
	</main>

<?php get_sidebar(); ?>

<?php get_footer(); ?>

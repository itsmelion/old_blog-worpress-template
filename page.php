<?php get_header(); ?>

	<main role="main" aria-label="Content">
		<!-- section -->
		<section>

			<h1><?php the_title(); ?></h1>

		<?php if (have_posts()): while (have_posts()) : the_post(); ?>

			<!-- article -->
			<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

				<?php the_content(); ?>

				<?php comments_template( '', true ); // Remove if you don't want comments ?>

				<br class="clear">

				<?php edit_post_link(); ?>

			</article>
			<!-- /article -->

		<?php endwhile; ?>

		<?php	else : get_template_part( 'loop', 'empty' ); endif; ?>

		</section>
		<!-- /section -->
	</main>

<?php get_sidebar(); ?>
<!-- <aside class="post-aside">
		<?php	wp_link_pages(
			array(
				'before'           => '<div class="linked-page-nav"><p>' . sprintf( __( '<em>%s</em> is separated in multiple parts:', 'sense' ), get_the_title() ) . '<br />',
				'after'            => '</p></div>',
				'next_or_number'   => 'number',
				'separator'        => ' ',
				'pagelink'         => __( '&raquo; Part %', 'sense' ),
			)
		); ?>
	</aside> -->

<?php get_footer(); ?>
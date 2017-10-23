<?php get_header(); ?>

<div class="layout-row-nowrap">
	<main class="flex-grow" role="main" aria-label="Content">

		<h1><?php echo sprintf( __( '%s Search Results for ', 'html5blank' ), $wp_query->found_posts ); echo get_search_query(); ?></h1>
		<div class="contain">
				<?php get_template_part('loop'); ?>
		</div>


	</main>

	<?php get_sidebar(); ?>

</div>

<?php get_footer(); ?>

<?php get_header(); ?>

<div class="layout-row-nowrap">
	<main class="flex-grow" role="main" aria-label="Content">
		
		<div class="contain">
				<h1 style="margin: 3rem 0; padding-left: 3rem;"><?php _e( 'Latest Posts', 'html5blank' ); ?></h1>
				<section class="layout-column-nowrap-start blog-default">
				<?php get_template_part('loop'); ?>
				</section>
			</div>

	</main>

	<?php get_sidebar(); ?>
</div>

<?php get_footer(); ?>
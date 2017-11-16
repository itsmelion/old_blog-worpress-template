
<?php get_header(); ?>

<div class="layout-row-nowrap">

	<main class="flex-grow" role="main" aria-label="Content">
		
		<div class="contain">
			<h1 style="margin: 3rem 0; padding-left: 2rem;"><?php _e( 'Latest Posts', 'html5blank' ); ?></h1>
			<section class="layout-column-nowrap-start blog-default">
			<?php get_template_part('loop'); ?>
			</section>
		</div>

	</main>

	<!-- sidebar -->
	<aside class="flex-none layout-column-nowrap widget-area sidebar" role="complementary">

		<?php if(!function_exists('dynamic_sidebar') || !dynamic_sidebar('widget-area-2')): ?>
		<div class="sidebar-widget">
		</div>
		<?php endif; ?>

	</aside>
	<!-- /sidebar -->
</div>

<?php get_footer(); ?>
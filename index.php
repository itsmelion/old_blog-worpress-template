
<?php get_header();

$desktop = get_field('background_image_desktop');
$mobile = get_field('background_image_mobile');

if(!$mobile):
  $mobile = get_field('background_image_desktop');
endif;
?>

<style>
/*
## CUSTOM BACKGROUND
.this-header{
  background: url("<?php echo $desktop['sizes']['large']; ?>");
}
@media screen and (max-width: 58em){
  .this-header{
    background: url("<?php echo $mobile['sizes']['large']; ?>");
  }
} */

.this-header{
  background: url("<?php echo get_bloginfo('template_url') ?>/build/images/blog-wide.jpg");
}
@media screen and (max-width: 58em){
  .this-header{
    background: url("<?php echo get_bloginfo('template_url') ?>/build/images/blog-mobile.jpg");
  }
}
</style>

<header id="blog-header" class="layout-column-center flex default this-header" role="banner">
    <div class="flex layout-row-nowrap-center">
		<h1><?php _e( 'Latest Posts', 'html5blank' ); ?></h1>
    </div>
</header>

<div class="layout-row-nowrap">

	<main class="flex-grow" role="main" aria-label="Content">
		
		<div class="contain">
			<h2 style="margin: 3rem 0; padding-left: 2rem;"><?php _e( 'Latest Posts', 'html5blank' ); ?></h2>
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
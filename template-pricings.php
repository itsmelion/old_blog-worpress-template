<?php /* Template Name: Internal + Pricings */ 

get_header();
$desktop = get_field('background_image_desktop');
$mobile = get_field('background_image_mobile');

if(!$mobile):
  $mobile = get_field('background_image_desktop');
endif;
?>

<style>
.this-header{
  background: url("<?php echo $desktop['sizes']['large']; ?>");
}
@media screen and (max-width: 58em){
  .this-header{
    background: url("<?php echo $mobile['sizes']['large']; ?>");
  }
}
</style>

<header id="front-page" class="layout-column-center flex this-header" role="banner">
    <div class="flex layout-row-nowrap-center">
		  <h1><?php the_field('hero') ?></h1>
    </div>
    <div class="flex ctas">
			<?php if(get_field("prime-cta-url")):
				echo '<a class="button" style="background-color: ' . get_field("prime-cta-color") . '" href="' . get_field("prime-cta-url") . '">' . get_field("prime-cta-text") . '</a>';
			endif; ?>
			<?php if(get_field("alt-cta-url")):
				echo '<a class="button" style="background-color: ' . get_field("alt-cta-color") . '" href="' . get_field("alt-cta-url") . '">' . get_field("alt-cta-text") . '</a>';
			endif; ?>
    </div>

</header>

<main role="main" aria-label="Content">

<?php include 'src/components/sections.php'; ?>

<?php get_template_part('loop', 'pricing-coaching'); ?>

<?php include 'src/components/faq.php'; ?>

<?php include 'src/components/sections-pricings.php'; ?>

</main>

<?php get_footer(); ?>
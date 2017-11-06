<?php /* Template Name: Form */ 

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

<?php get_template_part('loop', 'destinations'); ?>

<?php get_template_part('loop', 'pricing-abroad'); ?>

<section class="layout-row-nowrap" id="formSection">
  <div class="layout-column-center"><?php the_content() ?></div>
  <ol class="layout-column-nowrap form-list">

    <?php
      if( have_rows('form_fields') ):
        while ( have_rows('form_fields') ) : the_row();
          $img = get_sub_field('item-img');
    ?>
          <li class="layout-row-start-forcenowrap icon-item">
            <img class="flex-initial" src="<?php echo $img; ?>" />
            <div>
              <h3><?php the_sub_field('item_title'); ?></h3>
              <h4><?php the_sub_field('item_subtitle'); ?></h4>
              <p><?php the_sub_field('item_paragraph'); ?></p>
            </div>
          </li>
    <?php
        endwhile;
      endif;
    ?>

  </ol>
</section>

<?php include 'src/components/faq.php'; ?>

<?php include 'src/components/flex-internal.php'; ?>

</main>

<?php get_footer(); ?>
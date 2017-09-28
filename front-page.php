<?php get_header();

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
</style>

<header id="front-page" class="layout-column-center flex this-header" role="banner">
    <div class="layout-row-nowrap-center">
      <img width="120pt" height="auto" src="<?php echo get_template_directory_uri().'/build/images/triangle.svg' ?>">
		  <h1><?php the_field('hero') ?></h1>
    </div>
    <div class="ctas">
      <a class="button" style="background-color: <?php the_field('prime-cta-color') ?>;" href="<?php the_field('prime-cta-url') ?>"><?php the_field('prime-cta-text') ?></a>
      <a class="button" style="background-color: <?php the_field('alt-cta-color') ?>;" href="<?php the_field('alt-cta-url') ?>"><?php the_field('alt-cta-text') ?></a>
    </div>

</header>

<?php get_template_part('loop'); ?>

<?php

// check if the flexible content field has rows of data
if( have_rows('sections') ):

 	// loop through the rows of data
    while ( have_rows('sections') ) : the_row();

		    // check current row layout
        if( get_row_layout() == 'Article | Image' ): ?>

          <section class="layout-row-nowrap-<?php echo get_sub_field('reverse') ? 'reverse' : ''; ?> dual" style="color:<?php echo get_sub_field('font_color_override');  ?>">
            <article class="flex layout-column">
              <h1><?php the_sub_field('title'); ?></h1>
              <p><?php the_sub_field('paragraph'); ?></p>
              <a href="<?php the_sub_field('call_to_action-URL'); ?>"><?php the_sub_field('call_to_action-text'); ?></a>
            </article>
            <?php $image = get_sub_field('img'); ?>
            <div class="dual-img-container"><img class="flex" src="<?php echo $image['url']; ?>" alt="<?php $image['alt']; ?>" /></div>
          </section>
        
        <?php endif;

        if( get_row_layout() == 'items' ): ?>
          
          <section class="layout-column text-center icon-section" style="background: <?php get_sub_field('background_color') ? ''.the_sub_field('background_color') : ''.the_sub_field('background_image') ?>; color:<?php echo get_sub_field('font_color_override');  ?>">

          <?php if (get_sub_field('section_title')) : ?>
            <h1><?php the_sub_field('section_title') ?></h1>
          <?php endif;?>

          <div class="layout-row">
          <?php if( have_rows('repeater') ):
            while ( have_rows('repeater') ) : the_row(); ?>
              <article class="layout-column-center text-center icon-item">
                <img src="<?php $img = get_sub_field('icon'); echo $img['url'] ?>" />
                <h3><?php the_sub_field('info_title') ?></h3>
                <h4><?php the_sub_field('info_description') ?></h4>
                <p><?php the_sub_field('paragraph') ?></p>
              </article>
            <?php endwhile; endif;?>
          </div>
          <?php if(get_field('cta-text')): ?>
          <a href="<?php the_field('cta-url') ?>"><?php the_field('cta-text') ?></a>
         <?php endif; ?>
        </section>
      <?php endif;

    endwhile;

else : endif; ?>

  <?php get_template_part('loop', 'tips'); ?>

<section class="layout-column text-center icon-section" style="background: <?php get_field('testimonial_background_color') ? ''.the_field('testimonial_background_color') : ''.the_field('testimonial_background_image') ?>; color:<?php the_field('testimonial_font_color_override');  ?>">

  <?php if (get_field('testimonial_section_title')) : ?>
    <h2><?php the_field('testimonial_section_title'); ?></h2>
  <?php endif;?>

  <div class="layout-row">
  <?php if( have_rows('testimonial') ): while ( have_rows('testimonial') ) : the_row(); ?>
        
        <article class="layout-column-center text-left icon-item">
          <div class="layout-row-forcenowrap-center">
            <img src="<?php $img = get_sub_field('icon'); echo $img['url'] ?>" />
            <div class="info">
              <h3><?php the_sub_field('info_title') ?></h3>
              <h4><?php the_sub_field('info_sub') ?></h4>
            </div>
          </div>
          <p><?php the_sub_field('paragraph') ?></p>
        </article>
            
      <?php endwhile; else : endif; ?>
  </div>
</section>

<?php  if( have_rows('news') ): ?>
<section class="layout-column text-center pe-news">

  <h5>What media are saying about us:</h5>

  <ul class="layout-row">
  <?php while ( have_rows('news') ) : the_row(); ?>
    <?php $img = get_sub_field('icon'); ?>
    <li><a href="<?php the_sub_field('url'); ?>" title="<?php $img['title']; ?>">
      <img src="<?php echo $img['url'] ?>" />
    </a></li>          
      <?php endwhile; ?>
  </ul>
</section>
<?php  else : endif; ?>

<?php get_footer(); ?>
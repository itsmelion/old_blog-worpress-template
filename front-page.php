<?php get_header(); ?>

<?php $frontHero = get_field('galeria-home_wide', 'option'); ?>

<header id="front-page" class="layout-column-center flex-grow" role="banner">
    <!-- <?php foreach( $frontHero as $image ): ?>
      <div class="home-swipe" style="background-image: url('<?php echo $image['sizes']['large']; ?>')"></div>
		<?php endforeach; ?> -->
    <div class="layout-row-nowrap-center">
      <img width="120pt" height="auto" src="<?php echo get_template_directory_uri().'/build/images/triangle.svg' ?>">
		  <h1>Behold,<br>The amazing Scaffold</h1>
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

          <section class="layout-row-nowrap-<?php echo get_sub_field('reverse') ? 'reverse' : '';  ?> dual">
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
          
          <section class="layout-column text-center icon-section" style="background: <?php get_sub_field('background_color') ? ''.the_sub_field('background_color') : ''.the_sub_field('background_image') ?>">

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
<?php get_footer(); ?>
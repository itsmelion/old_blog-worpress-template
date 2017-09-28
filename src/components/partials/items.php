<?php if( get_row_layout() == 'items' ): ?>
<section class="layout-column text-center icon-section" style="background: <?php get_sub_field('background_color') ? ''.the_sub_field('background_color') : ''.the_sub_field('background_image') ?>; color:<?php echo get_sub_field('font_color_override');  ?>">

  <?php if (get_sub_field('section_title')) : ?>
    <h2><?php the_sub_field('section_title') ?></h2>
  <?php endif;?>

  <div class="layout-row">
  <?php if( have_rows('repeater') ):
    while ( have_rows('repeater') ) : the_row(); $img = get_sub_field('icon');  ?>

      <?php if( get_sub_field('chose_layout') == 'labeled' ): ?>
        <!-- LABELED -->
        <article class="layout-column text-center icon-item">
          <img src="<?php echo $img['url'] ?>" />
          <h3><?php the_sub_field('info_title') ?></h3>
          <h4><?php the_sub_field('info_description') ?></h4>
          <p><?php the_sub_field('paragraph') ?></p>
        </article>
      <?php endif; ?>
      <?php if( get_sub_field('chose_layout') == 'centered' ): ?>
        <!-- CENTRALIZED -->
        <article class="layout-column text-center icon-item">
          <img src="<?php echo $img['url'] ?>" />
          <h3><?php the_sub_field('info_title') ?></h3>
          <h4><?php the_sub_field('info_description') ?></h4>
          <p><?php the_sub_field('paragraph') ?></p>
        </article>
      <?php endif; ?>

      <?php if( get_sub_field('chose_layout') == 'svg' ): ?>
        <!-- SVG -->
        <article class="layout-column text-center icon-item">
          <img src="<?php echo $img['url'] ?>" />
          <h3><?php the_sub_field('info_title') ?></h3>
          <h4><?php the_sub_field('info_description') ?></h4>
          <p><?php the_sub_field('paragraph') ?></p>
        </article>
      <?php endif; ?>
    
      <?php if( get_sub_field('chose_layout') == 'big' ): ?>
        <!-- B-I-G -->
        <article class="layout-column text-center icon-item">
          <img src="<?php echo $img['url'] ?>" />
          <h3><?php the_sub_field('info_title') ?></h3>
          <h4><?php the_sub_field('info_description') ?></h4>
          <p><?php the_sub_field('paragraph') ?></p>
        </article>
      <?php endif; ?>

    <?php endwhile; endif; ?>
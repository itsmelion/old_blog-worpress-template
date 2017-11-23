<?php if( have_rows('sections-pricings') ):

    while ( have_rows('sections-pricings') ) : the_row();

			if( get_row_layout() == 'Article | Image' ): ?>

				<section
          class="layout-row-nowrap-<?php echo get_sub_field('reverse') ? 'reverse' : ''; ?> dual"
          style="color:<?php echo get_sub_field('font_color_override');  ?>"
        >
					<article class="flex layout-column">
						<h2><?php the_sub_field('title'); ?></h2>
						<p><?php the_sub_field('paragraph'); ?></p>
						<a class="button" href="<?php the_sub_field('call_to_action-URL'); ?>"><?php the_sub_field('call_to_action-text'); ?></a>
					</article>
					<?php $image = get_sub_field('img'); ?>
					<div class="dual-img-container" style="background-image: url('<?php echo $image['url']; ?>');"></div>
				</section>
			
			<?php endif; ?>
			
      <?php if( get_row_layout() == 'items' ): ?>
			<?php
				$item_img = get_sub_field('background_img')['sizes']['large'] ;
				$item_bg_color = get_sub_field('background_color');
        $background_type = get_sub_field('section_background_type');
        $font_color = 'color: '.get_sub_field('font_color_override').';';
        if($background_type == 'image'):
          $sectionBG = 'background: url('. $item_img . ') no-repeat center;';
        else:
          $sectionBG = 'background: '. $item_bg_color .';';
        endif;
			?>
        <section
          class="layout-column text-center icon-section"
          style="<?php echo $sectionBG; ?> <?php echo $font_color; ?>"
        >
          <?php if (get_sub_field('section_title')) : ?>
            <h2><?php the_sub_field('section_title') ?></h2>
          <?php endif;?>

          <div class="contain layout-row-around-stretch">
          <?php if( have_rows('repeater') ):
              while ( have_rows('repeater') ) : the_row(); $img = get_sub_field('icon');  ?>

              <?php if( get_sub_field('chose_layout') == 'labeled' ): ?>
                <!-- LABELED -->
                <article class="layout-column text-center icon-item labeled">
                <div class="layout-row-nowrap-center">
                  <img src="<?php echo $img['url'] ?>" />
                  <div class="info">
                  <h3><?php the_sub_field('info_title') ?></h3>
                  <h4><?php the_sub_field('info_sub') ?></h4>
                  </div>
                </div>
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
                  <h1 class="text-bold"><?php the_sub_field('big_header') ?></h1>
                  <p><?php the_sub_field('paragraph') ?></p>
                </article>
              <?php endif; ?>

            <?php endwhile; endif; ?>

          </div>

          <?php if(get_sub_field('cta-url')): ?>
            <div class="layout-row-center">
            <a class="button" href="<?php the_sub_field('cta-url') ?>"><?php the_sub_field('cta-text') ?></a>
            </div>
          <?php endif; ?>
              
        </section>
        
      <?php endif; ?> <!-- End Items -->
      <!-- End FlexContent -->
			<?php endwhile; 
else : endif; ?>
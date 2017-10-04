<?php if( have_rows('flex-internal') ):

    while ( have_rows('flex-internal') ) : the_row();

			if( get_row_layout() == 'Article | Image' ): ?>

				<section
          class="layout-row-nowrap-<?php echo get_sub_field('reverse') ? 'reverse' : ''; ?> dual"
          style="color:<?php echo get_sub_field('font_color_override');  ?>"
        >
					<article class="flex layout-column">
						<h2><?php the_sub_field('title'); ?></h2>
						<p><?php the_sub_field('paragraph'); ?></p>
						<a href="<?php the_sub_field('call_to_action-URL'); ?>"><?php the_sub_field('call_to_action-text'); ?></a>
					</article>
					<?php $image = get_sub_field('img'); ?>
					<div class="dual-img-container"><img class="flex" src="<?php echo $image['url']; ?>" alt="<?php $image['alt']; ?>" /></div>
				</section>
			
			<?php endif; ?>
			
      <?php if( get_row_layout() == 'items' ): ?>
			<?php
				$item_img = get_sub_field('background_img')['sizes']['large'] ;
				$item_bg_color = get_sub_field('background_color');
        $background_type = get_sub_field('section_background_type');
        if($background_type == 'image'):
          $sectionBG = 'background: url('. $item_img . ') no-repeat center;';
        else:
          $sectionBG = 'background: '. $item_bg_color .';';
        endif;
			?>
        <section
          class="layout-column text-center icon-section"
          style="<?php echo $sectionBG; ?>"
        >
          <?php if (get_sub_field('section_title')) : ?>
            <h2><?php the_sub_field('section_title') ?></h2>
          <?php endif;?>

          <div class="layout-row-center">
          <?php if( have_rows('repeater') ):
              while ( have_rows('repeater') ) : the_row(); $img = get_sub_field('icon');  ?>

              <?php if( get_sub_field('chose_layout') == 'labeled' ): ?>
              <!-- LABELED -->
              <article class="layout-column-start icon-item labeled">
              <div class="layout-row-forcenowrap-center">
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
              <article class="layout-column-center text-center icon-item">
                <img src="<?php echo $img['url'] ?>" />
                <h3><?php the_sub_field('info_title') ?></h3>
                <h4><?php the_sub_field('info_description') ?></h4>
                <p><?php the_sub_field('paragraph') ?></p>
              </article>
              <?php endif; ?>

              <?php if( get_sub_field('chose_layout') == 'big' ): ?>
              <!-- B-I-G -->
              <article class="layout-column-center text-center icon-item">
                <h1><?php the_sub_field('big_header') ?></h1>
                <p><?php the_sub_field('paragraph') ?></p>
              </article>
              <?php endif; ?>

            <?php endwhile; endif; ?>

          </div>

              <?php if(get_field('cta-text')): ?>
                <a href="<?php the_field('cta-url') ?>"><?php the_field('cta-text') ?></a>
              <?php endif; ?>
              
        </section>
        
      <?php endif; ?> <!-- End Items -->
      <!-- End FlexContent -->
			<?php endwhile; 
else : endif; ?>
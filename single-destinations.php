<?php get_header() ?>

<section class="layout-row-nowrap destinations-header" >
  <article class="flex layout-column">
    <h1><?php the_title() ?></h1>
    <p><?php the_field('paragraph'); ?></p>
  </article>
  <?php $image = get_field('region-image'); ?>
  <div class="dual-img-container" style="background-image: url('<?php echo $image; ?>');"></div>
  
</section>

<?php get_template_part('loop', 'tips'); ?>

<section class="layout-row-center destinations-cta background parallax" data-img-width="1200" data-img-height="698" data-diff="300">
<form action="//planetexpat.org/join" rel="bookmark">
<button class="layout-row-forcenowrap-center">
  <img src="<?php echo get_bloginfo('template_url') ?>/build/images/marker.svg"/>
    <span>apply NOW for a job in <?php the_title() ?></span>
  </button>
</form>
</section>

<section class="layout-column-center other-destinations">

<h2>Other Destinations</h2>

<div class="layout-row-center">

<?php $other_destinations = get_field('other_destinations');
	if( $other_destinations ): ?>
			<?php foreach( $other_destinations as $post): ?>
					<?php setup_postdata($post);?>
          <article id="post-<?php the_ID(); ?>" <?php post_class('layout-column-nowrap-center'); ?> >

            <?php if ( has_post_thumbnail()) : ?>
              <a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>">
                <?php the_post_thumbnail(); // Declare pixel size you need inside the array ?>
              </a>
            <?php endif; ?>

            <h3><?php the_title(); ?></h3>
 	
            <span><?php the_content(); ?></span>
	          <?php edit_post_link(); ?>
 	        </article>
    
			<?php endforeach; ?>
			<?php wp_reset_postdata();?>
	<?php endif; ?>

</div>


</section>

<?php get_footer(); ?>
<?php get_header() ?>

<section class="layout-row-nowrap destinations-header" >
  <article class="flex layout-column">
    <h1><?php the_title() ?></h1>
    <p><?php the_field('paragraph'); ?></p>
  </article>
  <?php $image = get_sub_field('img'); ?>
  <div class="dual-img-container"><img class="flex" src="<?php echo $image['url']; ?>" alt="<?php $image['alt']; ?>" /></div>
</section>

<?php get_template_part('loop', 'tips'); ?>

<section class="destinations-cta background parallax" data-img-width="1200" data-img-height="698" data-diff="200">
<form action="//planetexpat.org/join" rel="bookmark">
  <button>
    <img src="<?php echo get_bloginfo('template_url') ?>/build/images/compass.svg"
    apply for a job in <?php the_title() ?>
  </button>
</form>
</section>

<section>
<?php $other_destinations = get_field('other_destinations');
	if( $other_destinations ): ?>
			<?php foreach( $other_destinations as $post): ?>
					<?php setup_postdata($post);?>
          <article id="post-<?php the_ID(); ?>" <?php post_class('layout-column-nowrap'); ?> >

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


</section>

<?php get_footer(); ?>
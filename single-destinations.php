<?php get_header() ?>

<section class="layout-row-nowrap destinations-header" >
  <article class="flex layout-column">
    <h1><?php the_title() ?></h1>
    <p><?php the_field('paragraph'); ?></p>
  </article>
  <?php $image = get_field('region-image'); ?>
  <div class="dual-img-container" style="background-image: url('<?php echo $image; ?>');"></div>
  
</section>

<?php include 'src/components/destinations-content.php'; ?>

<section id="posts5" class="layout-row-between">
  <h2>Carrer tips</h2>
<?php $the_query = new WP_Query( 'posts_per_page=3' );while ($the_query -> have_posts()) : $the_query -> the_post(); $img_url = get_the_post_thumbnail_url(get_the_ID(),'thumbnail'); ?>
<article class="posts-home layout-row-forcenowrap">
    <span class="thumb" style="background-image: url('<?php echo $img_url; ?>');"></span>
    <div class="caption">
      <h3><?php the_title(); ?></h3>
      <?php html5wp_excerpt('html5wp_index'); ?>
    </div>
</article>
<?php endwhile;
wp_reset_postdata();
?>
</section>

<!-- get_template_part('loop', 'tips'); -->

<section class="layout-row-center destinations-cta background parallax" data-img-width="1200" data-img-height="698" data-diff="200">
<form action="//planetexpat.org/join" rel="bookmark">
<button class="layout-row-forcenowrap-center">
  <img src="<?php echo get_bloginfo('template_url') ?>/build/images/marker.svg"/>
    <span>apply NOW for a job in <?php the_title() ?></span>
  </button>
</form>
</section>

<?php $other_destinations = get_field('other_destinations');
	if( $other_destinations ): ?>
<section class="layout-column-center other-destinations">

  <h2>Other Destinations</h2>

  <div class="layout-row-center">

    <?php foreach( $other_destinations as $post): setup_postdata($post); ?>
    
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

  </div>
</section>
<?php endif; ?>

<?php get_footer(); ?>
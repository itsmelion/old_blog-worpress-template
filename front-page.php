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
      <a class="button" style="background-color: <?php the_field('prime-cta-color') ?>;" href="<?php the_field('prime-cta-url') ?>"><?php the_field('prime-cta-text') ?></a>
      <a class="button" style="background-color: <?php the_field('alt-cta-color') ?>;" href="<?php the_field('alt-cta-url') ?>"><?php the_field('alt-cta-text') ?></a>
    </div>

</header>

<?php include 'src/components/sections.php'; ?>

<section id="posts5" class="layout-row-between">
  <h2>Tips</h2>
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

<section class="layout-column text-center icon-section" style="background: <?php get_field('testimonial_background_color') ? ''.the_field('testimonial_background_color') : ''.the_field('testimonial_background_image') ?>; color:<?php the_field('testimonial_font_color_override');  ?>">

  <?php if (get_field('testimonial_section_title')) : ?>
    <h2><?php the_field('testimonial_section_title'); ?></h2>
  <?php endif;?>

  <div class="layout-row-around">
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

  <ul>
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
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

	<?php if( have_rows('sections') ):

    while ( have_rows('sections') ) : the_row();

        if( get_row_layout() == 'Article | Image' ): ?>

          <section class="layout-row-nowrap-<?php echo get_sub_field('reverse') ? 'reverse' : ''; ?> dual" style="color:<?php echo get_sub_field('font_color_override');  ?>">
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


    </div>
    <?php if(get_field('cta-text')): ?>
    <a href="<?php the_field('cta-url') ?>"><?php the_field('cta-text') ?></a>
    <?php endif; ?>
	</section>
	
<?php endif;
    endwhile;
else : endif; ?>


<!-- TODO: CREATE POST OVERVIEW -> Destinations (inside it we have related taxonomy JOBS!) -->
<?php get_template_part('loop'); ?>


</main>

<?php get_footer(); ?>
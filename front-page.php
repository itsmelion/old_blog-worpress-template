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

<?php get_footer(); ?>
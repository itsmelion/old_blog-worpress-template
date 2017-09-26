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

          <section class="layout-row <?php the_sub_field('reverse') ?>">
            <article>
              <h1><?php the_sub_field('title') ?></h1>
              <p><?php the_sub_field('paragraph') ?></p>
              <a href="<?php the_sub_field('call_to_action-URL') ?>"><?php the_sub_field('call_to_action-text') ?></a>
            </article>
            <div><img src="<?php the_sub_field('image') ?>" /></div>
          </section>
        
        <?php endif;

        if( get_row_layout() == 'items' ):
          
          // check if the nested repeater field has rows of data
          if( have_rows('repeater') ):

            echo '<ul>';

            // loop through the rows of data
            while ( have_rows('repeater') ) : the_row();

              echo '<li>' . get_sub_field('info_title') . '</li>';

            endwhile;

            echo '</ul>';

          endif;

        endif;

    endwhile;

else : // no layouts found

endif;

?>

<?php get_footer(); ?>
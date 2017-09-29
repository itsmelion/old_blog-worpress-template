<section class="text-center layout-column flex destinations-section">
  <h2>Pricings</h2>

<div>

<?php $my_query = new WP_Query( array( 'post_type' => 'pricing', 'ignore_sticky_posts' => 1 ) );
  if ( $my_query->have_posts() ) : while ( $my_query->have_posts() ) : $my_query->the_post(); ?>

 <article id="post-<?php the_ID(); ?>" <?php post_class('layout-column-nowrap-center'); ?> >
  <p>
    paragraph paragraph paragraph paragraph
    paragraph paragraph paragraph paragraph
  </p>
  <h1><?php the_title(); ?></h1>

  <ol>
    <li>asdasdasd</li>
    <li>asdasdasd</li>
    <li>asdasdasd</li>
    <li>asdasdasd</li>
  </ol>
 	
	<?php edit_post_link(); ?>
 	</article>

 <?php endwhile; else : ?>

 	<p><?php esc_html_e( 'Oh, No plans available at the moment. :/' ); ?></p>

 <?php endif; wp_reset_postdata(); ?>
</div>
</section>

<?php if( have_rows('content-destinations') ): ?>
<section class="layout-row-around-stretch destinations-articles contain" >
<?php while ( have_rows('content-destinations') ) : the_row(); $img = get_sub_field('icon');  ?>
      
      <article class="layout-column text-center icon-item">
        <img src="<?php echo $img['url'] ?>" />
        <h3><?php the_sub_field('info_title') ?></h3>
        <h4><?php the_sub_field('info_description') ?></h4>
        <p><?php the_sub_field('paragraph') ?></p>
      </article>

<?php endwhile; ?>
</section>
<?php endif; ?>

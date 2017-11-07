<?php if( have_rows('faq') ): ?>
<section class="layout-column faq">

  <h2><?php the_field('faq_title'); ?></h2>
  <?php while ( have_rows('faq') ) : the_row(); ?>
  <li class="item-collapsable">
    <span class="collapses">
      <?php the_sub_field('question'); ?>
      <i class="arrow"></i>
    </span>
    <div class="collapse-content">
      <?php the_sub_field('content'); ?>
    </div>
  </li>
  <?php endwhile; ?>
</section>
<?php endif; ?>
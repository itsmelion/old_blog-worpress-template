<?php $images = get_field('galeria');

if( $images ): ?>
  <?php foreach( $images as $image ): ?>
    <article class="swipe-card" style="background-image: url('<?php echo $image['sizes']['medium']; ?>')">
          <img src="<?php echo $image['sizes']['medium']; ?>"
            data-original-src="<?php echo $image['url']; ?>"
            data-original-src-width="<?php echo $image['width']; ?>"
            data-original-src-height="<?php echo $image['height']; ?>"
            alt="<?php echo $image['alt']; ?>">
    </article>
    <?php endforeach; ?>
<?php endif; ?>
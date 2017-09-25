<?php if(get_field('apple-card')): ?>
	<div class="row">
		<div class="col-md-12">
			<section class="d-flex flex-wrap flex-row align-items-stretch align-content-stretch justify-content-around" style="width: 100%">
			<?php while(has_sub_field('apple-card')): ?>
			<article class="apple-card" style="background-image: url('<?php the_sub_field('img'); ?>')">
					<a href="<?php the_sub_field('url'); ?>" title="play">
					<img class="play-btn" src="<?php echo get_bloginfo('template_url') ?>/images/play.svg" alt="play" />
					</a>
				<div class="legenda">
					<img src="<?php echo get_bloginfo('template_url') ?>/images/icons/arrow.svg" alt="Swipe up"/>
					<h3><?php the_sub_field('title'); ?></h3>
					<p><?php the_sub_field('caption'); ?></p>
				</div>
			</article>
			<?php endwhile; ?>
		</section>
		</div>
	</div>
<?php endif; ?>
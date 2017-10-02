<footer class="layout-column" role="contentinfo">

	<div class="layout-row-between-nowrap">

		<?php while( have_rows('footer_list', 'option') ): the_row(); ?>
			<ul class="footer-links">
				<li><?php echo the_sub_field('list_title');?></li>
				<?php while( have_rows('list_items', 'option') ): the_row(); ?>
					<li><a href="<?php echo the_sub_field('url');?>"><?php echo the_sub_field('text');?></a></li>
				<?php endwhile; ?>
			</ul>
		<?php endwhile; ?>

		<ul class="footer-links text-right">
			<li>SOCIAL</li>
			<li class="social">
				<a href="#" title="Map">
					<img src="<?php echo get_bloginfo('template_url') ?>/build/images/icon-map.svg" alt="Mapa"/>
				</a>
				<a href="#" title="Facebook">
					<img src="<?php echo get_bloginfo('template_url') ?>/build/images/icon-facebook.svg" alt="Facebook"/>
				</a>
				<a href="#" title="Instagram">
					<img src="<?php echo get_bloginfo('template_url') ?>/build/images/icon-instagram.svg" alt="Instagram"/>
				</a>
				<a href="#" title="YouTube">
					<img src="<?php echo get_bloginfo('template_url') ?>/build/images/icon-play.svg" alt="YouTube"/>
				</a>
			</li>
		</ul>
		
	</div>

	<div>
		<!-- copyright -->
		<p class="copyright">
					&copy; <?php echo date('Y'); ?> Copyright <?php bloginfo('name'); ?>. <?php _e('Powered by', 'html5blank'); ?>
					<a href="//intuite.ch">Intuitech</a> &amp; <a href="//alia-cloud.appspot.com">Christhopher Lion</a>.
				</p>
				<!-- /copyright -->
	</div>

 </footer>

<?php wp_footer(); ?>

<!-- analytics -->
<script>
(function(f,i,r,e,s,h,l){i['GoogleAnalyticsObject']=s;f[s]=f[s]||function(){
(f[s].q=f[s].q||[]).push(arguments)},f[s].l=1*new Date();h=i.createElement(r),
l=i.getElementsByTagName(r)[0];h.async=1;h.src=e;l.parentNode.insertBefore(h,l)
})(window,document,'script','//www.google-analytics.com/analytics.js','ga');
ga('create', 'UA-XXXXXXXX-XX', 'yourdomain.com');
ga('send', 'pageview');
</script>

</body>
</html>
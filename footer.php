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

		<ul class="footer-links social">
			<li>SOCIAL</li>
			<li>
				<a href="//www.facebook.com/PlanetExpat/" title="Facebook">
					<img src="<?php echo get_bloginfo('template_url') ?>/build/images/social-facebook.svg" alt="Facebook"/>
				</a>
				<a href="//twitter.com/PlanetExpat" title="Twitter: @PlanetExpat">
					<img src="<?php echo get_bloginfo('template_url') ?>/build/images/social-twitter.svg" alt="@PlanetExpat"/>
				</a>
				<a href="//www.linkedin.com/company/2949016/" title="LinkedIn">
					<img src="<?php echo get_bloginfo('template_url') ?>/build/images/social-linkedin.svg" alt="LinkedIn"/>
				</a>
			</li>
		</ul>
		
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
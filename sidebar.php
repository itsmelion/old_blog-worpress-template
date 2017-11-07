<!-- sidebar -->
<aside class="flex-none layout-column sidebar" class="layout-column-nowrap widget-area" role="complementary">

	<?php // get_template_part('searchform'); ?>

	<?php if(!function_exists('dynamic_sidebar') || !dynamic_sidebar('widget-area-1')): ?>
	<div class="sidebar-widget">
	</div>
	<?php endif; ?>

	<?php if(!function_exists('dynamic_sidebar') || !dynamic_sidebar('widget-area-2')): ?>
	<div class="sidebar-widget">
	</div>
	<?php endif; ?>

</aside>
<!-- /sidebar -->
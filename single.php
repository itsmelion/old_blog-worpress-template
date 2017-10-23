<?php get_header();

if ( has_post_thumbnail() ) : ?>
	<style>
	.this-header{
		background: url("<?php the_post_thumbnail_url(); ?>");
	}
	</style>
<?php endif; ?>



<header class="layout-column-center flex default this-header" role="banner">
    <div class="flex layout-row-nowrap-center">
		  <h1><?php the_title(); ?></h1>
    </div>

</header>


<div class="layout-row-nowrap">
<main class="flex-grow blog-post-single" role="main" aria-label="Content">
	<!-- section -->
	<section class="contain">

	<?php if (have_posts()): while (have_posts()) : the_post(); ?>

		<!-- article -->
		<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
		
		<div><?php the_content(); // Dynamic Content ?></div>
		
		<div>
			<?php the_tags( __( 'Tags: ', 'html5blank' ), ', ', '<br>'); // Separated by commas with a line break at the end ?>
			
			<p><?php _e( 'Categorised in: ', 'html5blank' ); the_category(', '); // Separated by commas ?></p>
			
			<span class="comments"><?php if (comments_open( get_the_ID() ) ) comments_popup_link( __( 'Leave your thoughts', 'html5blank' ), __( '1 Comment', 'html5blank' ), __( '% Comments', 'html5blank' )); ?></span>
				<?php if (comments_open( get_the_ID() ) ) comments_template(); ?>
		</div>

		</article>
		<!-- /article -->

	<?php endwhile; ?>

	<?php else: ?>

		<!-- article -->
		<article>

			<h1><?php _e( 'Sorry, nothing to display.', 'html5blank' ); ?></h1>

		</article>
		<!-- /article -->

	<?php endif; ?>

	</section>
	<!-- /section -->
	</main>

<?php get_sidebar(); ?>
			</div>
<?php get_footer(); ?>




<div class="layout-row-nowrap">
	<main class="flex-grow" role="main" aria-label="Content">

		<?php include 'src/components/sections.php'; ?>

		<div class="contain">
		</div>


	</main>

	<?php get_sidebar(); ?>
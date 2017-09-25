<?php /* Template Name: Atletas */ ?>

<?php get_header(); ?>

<?php
$cover = get_field('cover');
$cover2 = get_field('cover_2');
$sessoes = get_field('sessoes');
?>
<?php if( $cover ): ?>
<style>
  .page-template-page-atletas, .page-template-page-atletas-php header{
    background-image: url('<?php echo $cover['url']; ?>')
  }
  @media screen and (max-width: 48.9em){
    .page-template-page-atletas, .page-template-page-atletas-php header{
      background-image: url('<?php echo $cover['sizes']['medium']; ?>')
    }
  }
</style>
<header></header>
<?php endif;?>

<section class="tecnologia-h1" style="padding: 0 0 0 0">
  <h1><?php the_title() ?></h1>
</section>

<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?> 
   <?php the_content(); ?>
<?php endwhile; else: ?>
   <?php _e( 'Sorry, no pages matched your criteria.', 'textdomain' ); ?>
<?php endif; ?>

<?php if( have_rows('sessoes') ):
  while ( have_rows('sessoes') ) : the_row();
   $foto = get_sub_field('foto_menor');
?>
 <section>
  <div>
    <img src="<?php echo $foto['url']; ?>" />
  </div>
  <article>
    <?php the_sub_field('texto'); ?>
  </article>
 </section>

<?php endwhile; endif;?>


<?php if( $cover2 ): ?>
<style>
.page-template-page-atletas, .page-template-page-atletas-php .cover2{
  background-image: url('<?php echo $cover2['url']; ?>');
  min-height: 70vh;
}
@media screen and (max-width: 48.9em){
  .page-template-page-atletas, .page-template-page-atletas-php header{
    background-image: url('<?php echo $cover2['sizes']['medium']; ?>')
  }
}
</style>
<section class="cover2"></section>
<?php endif;?>


<div>
  <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?> 
  <?php the_content(); ?>
  <?php endwhile; else: ?>
  <?php _e( 'Sorry, no pages matched your criteria.', 'textdomain' ); ?>
  <?php endif; ?>
</div>
<?php get_footer();?>
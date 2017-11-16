<?php /* Template Name: AllPricings */ 
get_header(); ?>


<main role="main" aria-label="Content">

<?php get_template_part('loop', 'pricing'); ?>

</main>

<section id="pricings-all-footer" class="layout-column">
<h2>Know more about our services</h2>

<div class="layout-row contain">
<?php
    $row = get_field('nav-cta', 'option');
    foreach ($row as $key => $value) {
?>
    
    <li class="flex-none show-lg hide-sm">
        <a class="button scroll-cta" href="<?php echo $value['url'] ;?>" >
            <?php echo $value['text'] ;?>
        </a>
    </li>

<?php } ?>
</div>
</section>
<?php get_footer(); ?>
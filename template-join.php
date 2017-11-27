<?php /* Template Name: Join */ 
get_header();
?>

<main role="main" aria-label="Content">

<!-- <section class="contain" style="margin-top: 6rem">
    <h2>Join our Excellence Program</h2>
    <img src="<?php echo get_bloginfo('template_url') ?>/build/images/process.png" />
</section> -->

<section class="contain layout-column-center" style="margin-top: 4rem">
    <h2 style="margin: 0 0 4rem -120px; font-weight: bold">APPLY NOW</h2>
    <!-- sandbox="allow-scripts allow-popups allow-same-origin allow-top-navigation allow-pointer-lock allow-forms" -->
    <iframe src="//crm.planetexpat.org/apply" height="650" frameborder="0" class="job-board">
        <p>Your Browser is not cool. It Doesn't support iFrames</p>
    </iframe>
</section>

</main>

<?php get_footer(); ?>
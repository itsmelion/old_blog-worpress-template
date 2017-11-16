<?php /* Template Name: AllPricings */ 
get_header(); ?>


<main role="main" aria-label="Content">

    <section class="text-center layout-column flex pricings-section">
        <h2>Work Abroad Pricing</h2>

        <div class="layout-row prices-container">
        <?php $my_query = new WP_Query( array( 'post_type' => 'pricing', 'category_name'  => 'work-abroad' ) );
        if ( $my_query->have_posts() ) : while ( $my_query->have_posts() ) : $my_query->the_post(); ?>

        <?php if(empty(get_field('highlighted'))):
            $highlight = 'normal';
        else:
            $highlight = 'highlight';
        endif;
        ?>
        <article id="post-<?php the_ID(); ?>" <?php post_class('layout-column-nowrap-center price ' . $highlight ); ?> >
            <p>
            <?php the_field('pre-text'); ?>
            </p>
            <h1><?php the_title(); ?></h1>

        <h1 class="value"><?php the_field('value'); ?></h1>

            <ol>
            <?php if( have_rows('benefits') ): while ( have_rows('benefits') ) : the_row(); ?>
                <li><?php the_sub_field('benefit'); ?></li>
            <?php endwhile; endif; ?>
            </ol>
            <a href="<?php the_field('call_to_action_url'); ?>" class="button">
            <?php the_field('call_to_action_text'); ?>
            </a>
            </article>

        <?php endwhile; else : ?>

            <p><?php esc_html_e( 'Oh, No plans available at the moment. :/' ); ?></p>

            <?php endif; wp_reset_postdata(); ?>
        </div>
    </section>


    <section class="text-center layout-column flex pricings-section">
        <h2>Carrer Coaching Pricing</h2>

        <div class="layout-row prices-container">
        <?php $my_query = new WP_Query( array( 'post_type' => 'pricing', 'category_name'  => 'coaching' ) );
        if ( $my_query->have_posts() ) : while ( $my_query->have_posts() ) : $my_query->the_post(); ?>

        <?php if(empty(get_field('highlighted'))):
            $highlight = 'normal';
        else:
            $highlight = 'highlight';
        endif;
        ?>
        <article id="post-<?php the_ID(); ?>" <?php post_class('layout-column-nowrap-center price ' . $highlight ); ?> >
            <p>
            <?php the_field('pre-text'); ?>
            </p>
            <h1><?php the_title(); ?></h1>

        <h1 class="value"><?php the_field('value'); ?></h1>

            <ol>
            <?php if( have_rows('benefits') ): while ( have_rows('benefits') ) : the_row(); ?>
                <li><?php the_sub_field('benefit'); ?></li>
            <?php endwhile; endif; ?>
            </ol>
            <a href="<?php the_field('call_to_action_url'); ?>" class="button">
            <?php the_field('call_to_action_text'); ?>
            </a>
            </article>

        <?php endwhile; else : ?>

            <p><?php esc_html_e( 'Oh, No plans available at the moment. :/' ); ?></p>

            <?php endif; wp_reset_postdata(); ?>
        </div>
     </section>

     
        <?php $my_query = new WP_Query( array( 'post_type' => 'pricing', 'category_name'  => 'packages' ) );
        if ( $my_query->have_posts() ) : while ( $my_query->have_posts() ) : $my_query->the_post(); ?>
        <section class="text-center layout-column flex pricings-section">
        <h2>Combos</h2>

        <div class="layout-row prices-container">
        <?php if(empty(get_field('highlighted'))):
            $highlight = 'normal';
        else:
            $highlight = 'highlight';
        endif;
        ?>
        <article id="post-<?php the_ID(); ?>" <?php post_class('layout-column-nowrap-center price ' . $highlight ); ?> >
            <p>
            <?php the_field('pre-text'); ?>
            </p>
            <h1><?php the_title(); ?></h1>

        <h1 class="value"><?php the_field('value'); ?></h1>

            <ol>
            <?php if( have_rows('benefits') ): while ( have_rows('benefits') ) : the_row(); ?>
                <li><?php the_sub_field('benefit'); ?></li>
            <?php endwhile; endif; ?>
            </ol>
            <a href="<?php the_field('call_to_action_url'); ?>" class="button">
            <?php the_field('call_to_action_text'); ?>
            </a>
            </article>
                </div>
        </section>
        <?php endwhile; else : ?>
        <?php endif; wp_reset_postdata(); ?>

    <?php // get_template_part('loop', 'pricing'); ?>

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
<?php get_header(); ?>

<main>
    <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
        <?php the_post_thumbnail('large' , array(
                'class' => 'responsive-img mb2'
        )); ?>
        <p class="caption"><?php the_post_thumbnail_caption(); ?></p>
        <h1><?php the_title(); ?></h1>
        <h4>Written by <?php the_author();?> </h4>
        <?php the_content(); ?>

    <?php endwhile; else : ?>
        <p><?php esc_html_e( 'Sorry, no posts matched your criteria.' ); ?></p>
    <?php endif; ?>
</main>

<?php get_footer(); ?>

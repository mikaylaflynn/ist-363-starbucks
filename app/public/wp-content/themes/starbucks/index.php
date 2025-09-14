<?php get_header(); ?>

<main>
    <h2>Locations</h2>
    <?php 
$args = array(
    'post_type' => 'locations'
); //args array end

// the query
$the_query = new WP_Query( $args ); ?>
 
<?php if ( $the_query->have_posts() ) : ?>
 
    <!-- pagination here -->
 
    <!-- the loop -->
    <?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
    <article>
        <h3><?php the_title(); ?></h3>
        <h4><?php the_field('street_address'); ?></h4>
        <h4><?php the_field('city'); ?></h4>
        <h4><?php the_field('state'); ?></h4>
        <h4><?php the_field('zip_code'); ?></h4>
        <?php the_excerpt(); ?>
    </article>
    <?php endwhile; ?>
    <!-- end of the loop -->
 
    <!-- pagination here -->
 
    <?php wp_reset_postdata(); ?>
 
<?php else : ?>
    <p><?php _e( 'Sorry, no posts matched your criteria.' ); ?></p>
<?php endif; ?>
</main>

<?php get_footer(); ?>

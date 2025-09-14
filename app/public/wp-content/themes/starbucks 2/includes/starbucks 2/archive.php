<?php get_header(); ?>

<h1>Apples</h1>

<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
	<h2><?php the_title(); ?></h2>

<?php endwhile; else : ?>
	<p><?php esc_html_e( 'Sorry, no posts matched your criteria.' ); ?></p>
<?php endif; ?>

<?php get_footer(); ?>

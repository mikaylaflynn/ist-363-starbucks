<?php get_header(); ?>

<h1>Employees</h1>

<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

	<?php include 'partials/employees/item.php'; ?>
	
<?php endwhile; else : ?>
	<p><?php esc_html_e( 'Sorry, no posts matched your criteria.' ); ?></p>
<?php endif; ?>

<?php get_footer(); ?>

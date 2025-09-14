<section>
    <h2>Posts</h2>
<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
    <?php include 'item.php'; ?>
<?php endwhile; else : ?>
		<p><?php esc_html_e( 'Sorry, no posts matched your criteria.' ); ?></p>
	<?php endif; ?>
</section>
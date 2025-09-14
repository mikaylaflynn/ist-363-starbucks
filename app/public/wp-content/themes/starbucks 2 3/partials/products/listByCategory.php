<?php
$categories = get_terms('menu');
?>

<?php foreach($categories as $category) { ?>
    <section>
        <h2><?php print $category->name; ?></h2>
<?php
$args = array(
    'post_type' => 'products',
    'tax_query' => array(
		array(
			'taxonomy' => 'menu',
			'field'    => 'slug',
			'terms'    => $category->slug,
		),
	),
);
        // the query
 $the_query = new WP_Query( $args ); ?>

        <?php if ( $the_query->have_posts() ) : ?>

	    <!-- pagination here -->
		<div class="grid">
	    <!-- the loop -->
	        <?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
		        <?php include 'item.php'; ?>
	        <?php endwhile; ?>
	    <!-- end of the loop -->
		</div>
	    <!-- pagination here -->

	        <?php wp_reset_postdata(); ?>

        <?php else : ?>
	        <p><?php _e( 'Sorry, no posts matched your criteria.' ); ?></p>
        <?php endif; ?>




    </section>
<?php } /* end of foreach loop */?>
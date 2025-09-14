<article>
	<h3>
		<a href="<?php the_permalink(); ?>">
			<?php the_title(); ?>
		</a>
	</h3>
	<p><?php the_field('street_address'); ?><br />
	<?php the_field('city'); ?>, <?php the_field('state'); ?> <?php the_field('zip_code'); ?></p>
	<?php the_excerpt(); ?>
</article>

<?php
/* Template name: Menu */
?>
<?php get_header(); ?>
<main>
    <div class="container">
        <?php 
        include 'partials/components/showcase.php';
        include 'partials/products/listByCategory.php'; 
        ?>
    </div><!-- /.container -->
</main>
<?php get_footer(); ?>
<?php
/* sass --version */
/* sass --watch style.scss:style.css */
?>
<?php
/* Template name: CSS Test */
?>
<?php get_header(); ?>

<div class="container">
    <h1>CSS Flex versus Grid</h1>
    <section>
        <h2>Flex articles</h2>
        <div class="test-flex">
            <article class="item">
                <h3>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</h3>
            </article>
            <article class="item">
                <h3>Pellentesque semper, tortor et imperdiet pellentesque, enim purus maximus orci, at ornare sapien risus et nisi.</h3>
            </article>
            <article class="item">
                <h3>Duis blandit, nulla id pretium aliquet, velit enim placerat enim, sagittis convallis urna nulla non lacus. Curabitur placerat in ex at pellentesque.</h3>
            </article>
            <article class="item">
                <h3>Cras viverra vulputate diam.</h3>
            </article>
            <article class="item">
                <h3>Phasellus at dolor velit.</h3>
            </article>
        </div><!-- /test flex -->
    </section>
    <section class="winner">
        <h2>Grid articles</h2>
        <div class="test-grid">
            <article class="item">
                <h3>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</h3>
            </article>
            <article class="item">
                <h3>Pellentesque semper, tortor et imperdiet pellentesque, enim purus maximus orci, at ornare sapien risus et nisi.</h3>
            </article>
            <article class="item">
                <h3>Duis blandit, nulla id pretium aliquet, velit enim placerat enim, sagittis convallis urna nulla non lacus. Curabitur placerat in ex at pellentesque.</h3>
            </article>
            <article class="item">
                <h3>Cras viverra vulputate diam.</h3>
            </article>
            <article class="item">
                <h3>Phasellus at dolor velit.</h3>
            </article>
        </div><!-- /test flex -->
    </section>
    <section>
        <h2>Flex: Navigation</h2>
        <nav class="nav-test">
            <ul class="nav-test-flex">
                <li>
                    <a href="">Home</a>
                </li>
                <li>
                    <a href="">Products</a>
                </li>
                <li>
                    <a href="">Services</a>
                </li>
                <li>
                    <a href="">Mission Statement</a>
                </li>
                <li>
                    <a href="">Contact Us</a>
                </li>
            </ul>
        </nav>
    </section>
    <section>
        <h2>Grid: Navigation</h2>
        <nav class="nav-test">
            <ul class="nav-test-grid">
                <li>
                    <a href="">Home</a>
                </li>
                <li>
                    <a href="">Products</a>
                </li>
                <li>
                    <a href="">Services</a>
                </li>
                <li>
                    <a href="">Mission Statement</a>
                </li>
                <li>
                    <a href="">Contact Us</a>
                </li>
            </ul>
        </nav>
    </section>
    <section>
        <h2>Flex: Cards</h2>
        <div class="test-cards-flex">
            <article class="test-card">
                <img src="<?php bloginfo('template_directory'); ?>/img/showcase.jpeg" alt="Two coffee mugs" class="responsive-img">
                <h3>Title goes here</h3>
                <p>The article excerpt goes here</p>
                <p><a href="">Read more</a></p>
            </article>
            <article class="test-card">
                <img src="<?php bloginfo('template_directory'); ?>/img/showcase.jpeg" alt="Two coffee mugs" class="responsive-img">
                <h3>Title goes here</h3>
                <p>The article excerpt goes here</p>
                <p><a href="">Read more</a></p>
            </article>
            <article class="test-card">
                <img src="<?php bloginfo('template_directory'); ?>/img/showcase.jpeg" alt="Two coffee mugs" class="responsive-img">
                <h3>Title goes here</h3>
                <p>The article excerpt goes here</p>
                <p><a href="">Read more</a></p>
            </article>
            <article class="test-card">
                <img src="<?php bloginfo('template_directory'); ?>/img/showcase.jpeg" alt="Two coffee mugs" class="responsive-img">
                <h3>Title goes here</h3>
                <p>The article excerpt goes here</p>
                <p><a href="">Read more</a></p>
            </article>
            <article class="test-card">
                <img src="<?php bloginfo('template_directory'); ?>/img/showcase.jpeg" alt="Two coffee mugs" class="responsive-img">
                <h3>Title goes here</h3>
                <p>The article excerpt goes here</p>
                <p><a href="">Read more</a></p>
            </article>
            <article class="test-card">
                <img src="<?php bloginfo('template_directory'); ?>/img/showcase.jpeg" alt="Two coffee mugs" class="responsive-img">
                <h3>Title goes here</h3>
                <p>The article excerpt goes here</p>
                <p><a href="">Read more</a></p>
            </article>
        </div><!-- /.test-cards-flex -->
    </section>
    <section>
        <h2>Grid: Cards</h2>
        <div class="test-cards-grid">
            <article class="test-card">
                <img src="<?php bloginfo('template_directory'); ?>/img/showcase.jpeg" alt="Two coffee mugs" class="responsive-img">
                <h3>Title goes here</h3>
                <p>The article excerpt goes here</p>
                <p><a href="">Read more</a></p>
            </article>
            <article class="test-card">
                <img src="<?php bloginfo('template_directory'); ?>/img/showcase.jpeg" alt="Two coffee mugs" class="responsive-img">
                <h3>Title goes here</h3>
                <p>The article excerpt goes here</p>
                <p><a href="">Read more</a></p>
            </article>
            <article class="test-card">
                <img src="<?php bloginfo('template_directory'); ?>/img/showcase.jpeg" alt="Two coffee mugs" class="responsive-img">
                <h3>Title goes here</h3>
                <p>The article excerpt goes here</p>
                <p><a href="">Read more</a></p>
            </article>
            <article class="test-card">
                <img src="<?php bloginfo('template_directory'); ?>/img/showcase.jpeg" alt="Two coffee mugs" class="responsive-img">
                <h3>Title goes here</h3>
                <p>The article excerpt goes here</p>
                <p><a href="">Read more</a></p>
            </article>
            <article class="test-card">
                <img src="<?php bloginfo('template_directory'); ?>/img/showcase.jpeg" alt="Two coffee mugs" class="responsive-img">
                <h3>Title goes here</h3>
                <p>The article excerpt goes here</p>
                <p><a href="">Read more</a></p>
            </article>
            <article class="test-card">
                <img src="<?php bloginfo('template_directory'); ?>/img/showcase.jpeg" alt="Two coffee mugs" class="responsive-img">
                <h3>Title goes here</h3>
                <p>The article excerpt goes here</p>
                <p><a href="">Read more</a></p>
            </article>
        </div><!-- /.test-cards-flex -->
    </section>
    <section>
        <h2>Flex: Background images</h2>
        <div class="test-bgimages-flex">
            <article class="item" style="background-image: url(<?php bloginfo('template_directory'); ?>/img/showcase.jpeg)">
                <div class="item-content">
                    <h3>Title goes here</h3>
                    <p>The article excerpt goes here</p>
                    <p><a href="">Read more</a></p>
                </div>
            </article>
            <article class="item" style="background-image: url(<?php bloginfo('template_directory'); ?>/img/showcase.jpeg)">
                <div class="item-content">
                    <h3>Title goes here</h3>
                    <p>The article excerpt goes here</p>
                    <p><a href="">Read more</a></p>
                </div>
            </article>
            <article class="item" style="background-image: url(<?php bloginfo('template_directory'); ?>/img/showcase.jpeg)">
                <div class="item-content">
                    <h3>Title goes here</h3>
                    <p>The article excerpt goes here</p>
                    <p><a href="">Read more</a></p>
                </div>
            </article>
            <article class="item" style="background-image: url(<?php bloginfo('template_directory'); ?>/img/showcase.jpeg)">
                <div class="item-content">
                    <h3>Title goes here</h3>
                    <p>The article excerpt goes here</p>
                    <p><a href="">Read more</a></p>
                </div>
            </article>
            <article class="item" style="background-image: url(<?php bloginfo('template_directory'); ?>/img/showcase.jpeg)">
                <div class="item-content">
                    <h3>Title goes here</h3>
                    <p>The article excerpt goes here</p>
                    <p><a href="">Read more</a></p>
                </div>
            </article>
            <article class="item" style="background-image: url(<?php bloginfo('template_directory'); ?>/img/showcase.jpeg)">
                <div class="item-content">
                    <h3>Title goes here</h3>
                    <p>The article excerpt goes here</p>
                    <p><a href="">Read more</a></p>
                </div>
            </article>
        </div><!-- /.test-bgimages-flex -->
    </section>
    <section>
        <h2>Flex: Background images</h2>
        <div class="test-bgimages-grid">
            <article class="item" style="background-image: url(<?php bloginfo('template_directory'); ?>/img/showcase.jpeg)">
                <div class="item-content">
                    <h3>Title goes here</h3>
                    <p>The article excerpt goes here</p>
                    <p><a href="">Read more</a></p>
                </div>
            </article>
            <article class="item" style="background-image: url(<?php bloginfo('template_directory'); ?>/img/showcase.jpeg)">
                <div class="item-content">
                    <h3>Title goes here</h3>
                    <p>The article excerpt goes here</p>
                    <p><a href="">Read more</a></p>
                </div>
            </article>
            <article class="item" style="background-image: url(<?php bloginfo('template_directory'); ?>/img/showcase.jpeg)">
                <div class="item-content">
                    <h3>Title goes here</h3>
                    <p>The article excerpt goes here</p>
                    <p><a href="">Read more</a></p>
                </div>
            </article>
            <article class="item" style="background-image: url(<?php bloginfo('template_directory'); ?>/img/showcase.jpeg)">
                <div class="item-content">
                    <h3>Title goes here</h3>
                    <p>The article excerpt goes here</p>
                    <p><a href="">Read more</a></p>
                </div>
            </article>
            <article class="item" style="background-image: url(<?php bloginfo('template_directory'); ?>/img/showcase.jpeg)">
                <div class="item-content">
                    <h3>Title goes here</h3>
                    <p>The article excerpt goes here</p>
                    <p><a href="">Read more</a></p>
                </div>
            </article>
            <article class="item" style="background-image: url(<?php bloginfo('template_directory'); ?>/img/showcase.jpeg)">
                <div class="item-content">
                    <h3>Title goes here</h3>
                    <p>The article excerpt goes here</p>
                    <p><a href="">Read more</a></p>
                </div>
            </article>
        </div><!-- /.test-bgimages-flex -->
    </section>
</div><!-- /.container -->

<?php get_footer(); ?>
<?php get_header(); ?>
    <div id="container">
        <?php if (have_posts()): while (have_posts()): the_post(); ?>
        <div class="main-heading">
            <h1>
                <?php
                $post_id = get_the_id();
                if($post_id != 62)
                    the_title();
                ?>
            </h1>
        </div>
        <section>

                <?php the_content(); ?>

        </section>
        <?php endwhile; endif; ?>
    </div><!-- #container-->
<?php get_footer(); ?>
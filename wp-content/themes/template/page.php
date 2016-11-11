<?php get_header(); ?>
    <div id="container">
        <?php if (have_posts()): while (have_posts()): the_post(); ?>
            <div class="main-heading">
                <h1>
                    <?php
                    $post_id = get_the_id();
                    if ($post_id != 62) {
                        the_title();
                    }
                    ?>
                </h1>
            </div>
            <section>

                <?php the_content(); ?>

            </section>
        <?php endwhile; endif; ?>
    </div><!-- #container-->

    <div class="social-widgets">
        <script type="text/javascript" src="//vk.com/js/api/openapi.js?136"></script>

        <!-- VK Widget -->
        <div id="vk_groups"></div>
        <script type="text/javascript">
            VK.Widgets.Group("vk_groups", {mode: 3, width: "220"}, 20629724);
        </script>
    </div>

<?php get_footer(); ?>
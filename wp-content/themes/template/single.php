<?php get_header(); ?>
<div id="container">
    <div class="breadcrumb" style="margin-bottom: 24px">
        <?php
        if (function_exists('bcn_display')) {
            bcn_display();
        }
        ?>
    </div>
    <div class="st-dateblock">
        <span class="st-date"><?php the_time('j') ?></span>
        <p class="st-month">
            <?php the_time('F') ?>
        </p>
    </div>
    <div id="st-advice">
        <h2><?php the_title(); ?></h2>
        <p>
            <?php if (have_posts()): while (have_posts()): the_post(); ?>
                <?php the_content(); ?>
            <?php endwhile; endif; ?>
        </p>
    </div>
    <div class="clr"></div>
</div><!-- #container-->
<?php get_footer(); ?>
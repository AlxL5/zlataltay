<?php get_header(); ?>
<div id="container">
    <?php
    while (have_posts()) : the_post(); ?>
        <article class="st-article">
            <div class="st-dateblock">
                <span class="st-date"><?php the_time('j') ?></span>
                <p class="st-month">
                    <?php the_time('F') ?>
                </p>
            </div>
            <div class="st-articletext">
                <h2><?php the_title(); ?></h2>
                <a class="more_info" href="<?php the_permalink() ?>" rel="bookmark" title="<?php printf(__('Permanent Link to %s', 'kubrick'), the_title_attribute('echo=0')); ?>">Подробнее</a>
            </div>
            <div class="st-articletext">
                <?php //edit_post_link('Редактирование'); ?>
                <?php //comments_popup_link('No Comments &#187;', '1 Comment &#187;', '% Comments &#187;', '', 'Comments Closed'); ?>
            </div>
        </article>
    <?php endwhile; ?>
</div><!-- #container-->
<?php get_footer(); ?>

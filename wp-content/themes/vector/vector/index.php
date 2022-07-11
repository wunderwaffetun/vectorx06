<?php get_header();

if (have_posts()): while (have_posts()): the_post(); ?>
    <?php the_content(); ?>
<?php endwhile; else: ?>
    <p>Записей не найдено.</p>
<?php endif;

get_footer(); ?>
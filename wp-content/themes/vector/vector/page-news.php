<?php get_header(); ?>
    <style>

    </style>
<?php
$categories = get_categories([
    'taxonomy'     => 'category',
    'type'         => 'post',
    'child_of'     => 6,
    'parent'       => '',
    'orderby'      => 'name',
    'order'        => 'ASC',
    'hide_empty'   => 0,
    'hierarchical' => 1,
    'exclude'      => '',
    'include'      => '',
    'number'       => 0,
    'pad_counts'   => false,
]);
?>
    <div class="text-page">
        <div class="top-text">
            <h1 class="h1"><?php the_title(); ?></h1>
        </div>
        <div class="block-name">
            Актуальные новости и события компании
        </div>
        <div class="news-block-actual">

            <?php the_content(); ?>

        </div>
        <div class="news-block">
            <div class="news-block-head">
                <div class="news-title">Новости</div>
                <div class="news-theme news-nav">
                    <ul>
                        <li data-id="0" class="active">Все</li>
                        <?php foreach( $categories as $cat ): ?>
                            <li data-id="<?php echo $cat->cat_ID;?>"><?php echo $cat->name;?></li>
                        <?php endforeach; ?>
                    </ul>
                </div>
            </div>
            <div class="news-items" data-id="0">
                <?php $catquery = new WP_Query( 'cat=6&posts_per_page=3&orderby=date&order=DESC' ); ?>
                <?php while($catquery->have_posts()) : $catquery->the_post(); ?>
                    <div class="news-item" style='background: url("<?php echo wp_get_attachment_image_url( get_post_meta($post->ID,'background', true), 'full' );?>") no-repeat center; background-size: cover;'>
                        <div class="news-item-header">
                            <?php the_title(); ?>
                            <div class="news-item-descr"><?php the_excerpt(); ?></div>
                        </div>
                        <div class="news-item-date"><?php the_time('j F Y H:i');; ?></div>
                        <div class="news-item-more"><a href="<?php the_permalink(); ?>">Подробнее <span></span></a></div>
                    </div>
                <?php endwhile; ?>
                <?php wp_reset_postdata(); ?>
            </div>
            <?php foreach( $categories as $cat ): ?>
            <div class="news-items" data-id="<?php echo $cat->cat_ID;  ?>" style="display: none;">
                <?php $catquery = new WP_Query( 'cat=' . $cat->cat_ID . '&posts_per_page=3&orderby=date&order=DESC' ); ?>
                <?php while($catquery->have_posts()) : $catquery->the_post(); ?>
                    <div class="news-item" style='background: url("<?php echo wp_get_attachment_image_url( get_post_meta($post->ID,'background', true), 'full' );?>") no-repeat center; background-size: cover;'>
                        <div class="news-item-header">
                            <?php the_title(); ?>
                            <div class="news-item-descr"><?php the_excerpt(); ?></div>
                        </div>
                        <div class="news-item-date"><?php the_time('j F Y H:i');; ?></div>
                        <div class="news-item-more"><a href="<?php the_permalink(); ?>">Подробнее <span></span></a></div>
                    </div>
                <?php endwhile; ?>
                <?php wp_reset_postdata(); ?>
            </div>
            <?php endforeach; ?>
        </div>
    </div>
    <div class="bottom-page-form2">
        <p>Готовы ответить на любые вопросы, помочь разобраться и принять правильное решение</p>
        <div id="sender-form2-success" class="form-success" style="display: none;">
            <div class="form-success-inner">
                <p>Ваша заявка принята</p>
                <p class="fs-18px">Спасибо! Свяжемся с вами в ближайшее время.</p>
            </div>
        </div>
        <form id="sender-form2">
            <p class="answer-form-success" style="display: none">Успешно отправлено</p>
            <p class="answer-form-error" style="display: none">Ошибка отправки</p>
            <input type="text" id="form-name2" placeholder="Имя">
            <input type="tel" id="form-phone2" required minlength="7" placeholder="Телефон" title="+7 (xxx) xxx xxxx" pattern="\+7 \([0-9]{3}\) [0-9]{3} [0-9]{4}">
            <button class="button" type="submit">Получить консультацию</button>
            <p class="privacy-policy">
                Нажимая на кнопку "Получить консультацию", вы даете согласие на обработку персональных данных в соответствии с <a href="/privacy-policy/" >Политикой конфиденциальности</a>
            </p>
        </form>
        <video class="video"  autoplay="" muted="" playsinline >
            <source src="<?= bloginfo('template_directory'); ?>/video/9.mp4" type="video/mp4" />
            <img src="<?= bloginfo('template_directory'); ?>/img/bottom-page-form.png" class="image">
            <img src="<?= bloginfo('template_directory'); ?>/img/arrow9.svg" class="block-arrow">
        </video>
    </div>

<?php get_footer(); ?>
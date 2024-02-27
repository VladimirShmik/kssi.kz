<?php
/**
 * Template Name: Категории новостей
 */
?>
<?php get_header(); ?>
    <main class="main">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <!--breadcrumbs-->
                    <?php if (function_exists('rank_math_the_breadcrumbs')) rank_math_the_breadcrumbs(); ?>
                    <!--content-section-->
                    <div class="content-wrapper">
                        <h1 class="content-wrapper__title">Реализованные объекты</h1>
                        <div class="content-grid content-grid--objects">
                            <?php $args = array(
                                'posts_per_page' => -1,
                                'category_name' => 'realized-objects'
                            );
                            $query = new WP_Query($args);
                            if ($query->have_posts()) {
                                while ($query->have_posts()) {
                                    $query->the_post(); ?>
                                    <a href="<?php the_permalink(); ?>" class="content-item">
                                        <div class="img-wrapper"><?php the_post_thumbnail(); ?></div>
                                        <div class="content-block">
                                            <p class="content-item__title"><?php the_title(); ?></p>
                                        </div>
                                    </a>
                                <?php }
                                wp_reset_postdata();
                            } else
                                echo 'Записей нет.'; ?>
                        </div>
                    </div>
                </div>
            </div>
    </main>
<?php get_footer(); ?>
<?php
/**
 * Template Name: Шаблон проектов
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
           
                        <h2 class="content-wrapper__title"><?php the_title(''); ?></h2>
                        <div class="content-grid">
                            <a href="<?php echo bloginfo('url'); ?>/category/new-objects/" class="building-wrapper__link--object">Новые проекты</a>
                            <a href="<?php echo bloginfo('url'); ?>/category/realized-objects/" class="building-wrapper__link--object">Реализованные проекты</a>
                        </div>
                </div>
            </div>
        </div>
</main>
<?php get_footer(); ?>

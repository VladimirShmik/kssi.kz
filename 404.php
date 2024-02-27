<?php
/**Template for 404*/
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
                            <div class="col-md">
                                <h1 class="content-wrapper__title">Страница не найдена. Ошибка 404</h1>
                            </div>
                            <div class="col-md">
                                <h3 class="mb-3">Вы могли здесь оказаться по нескольким причинам</h3>
                                <p>1. Скорее всего URL был вписан с ошибкой</p>
                                <p>2. Страница, которую вы ищите, была перенесена или переименована</p>
                                <p>3. Такой страницы больше не существует</p>
                                <p>Начните навигацию с</p> <a href="<?php bloginfo('url'); ?>/">главной страницы</a>
                            </div>
                        </div>

                </div>
            </div>
        </div>
</main>
<?php get_footer(); ?>


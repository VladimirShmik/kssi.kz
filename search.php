<?php
/**
 * Template Name: search template
 */
?>
<?php get_header(); ?>
<main class="main">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <!--breadcrumbs-->
                <?php if (function_exists('rank_math_the_breadcrumbs')) rank_math_the_breadcrumbs(); ?>
                <div class="simple-block">
                    <!--content-section-->
                    <div class="content-wrapper">
                        <h2 class="content-wrapper__title"><?php the_title(''); ?></h2>
                        <div class="content-grid">
                            <?php $s = get_search_query();
                            $args = array('s' => $s);
                            // The Query
                            $the_query = new WP_Query($args);
                            if ($the_query->have_posts()) {
                                _e("<h2 style='font-weight:bold;color:#000'>Результаты поиска по запросу: " . get_query_var('s') . "</h2>");
                                while ($the_query->have_posts()) {
                                    $the_query->the_post();
                                    ?>
                                    <li>
                                        <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                                    </li>
                                    <?php
                                }
                            } else {
                                ?>
                                    <p>Извините, но ничего не соответствует вашим критериям поиска. Пожалуйста,
                                        попытайтесь снова с другими ключевыми словами.</p>
                            <?php } ?>
                        </div>
                    </div>
                </div>
            </div>
</main>
<?php get_footer(); ?>

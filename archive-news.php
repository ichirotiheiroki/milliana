<?php
/*
Template Name: Страница новостей
*/

get_header(); ?>


<?php get_template_part('template-parts/section-breadcrumb'); ?>


    <div class="latest-news mt-150 mb-150">
        <div class="container">
            <div class="row">
                <?php
                $args = array(
                    'post_type' => 'news',
                    'posts_per_page' => -1,
                );

                $query = new WP_Query($args);

                if ($query->have_posts()) :
                    while ($query->have_posts()) : $query->the_post();


                        get_template_part('template-parts/item-news');


                    endwhile;
                else :
                    // Если нет постов, выводим сообщение
                    echo 'Нет постов для отображения.';
                endif;
                ?>
            </div>
            <div class="row">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12 text-center">
                            <div class="pagination-wrap">
                                <ul>
                                    <li><a href="#">Prev</a></li>
                                    <li><a href="#">1</a></li>
                                    <li><a class="active" href="#">2</a></li>
                                    <li><a href="#">3</a></li>
                                    <li><a href="#">Next</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php get_footer(); ?>
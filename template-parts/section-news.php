
<div class="latest-news pt-150 pb-150">
    <div class="container">

        <div class="row">
            <div class="col-lg-8 offset-lg-2 text-center">
                <div class="section-title">
                    <h3><span class="orange-text">Our</span> News</h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquid, fuga quas itaque eveniet beatae optio.</p>
                </div>
            </div>
        </div>

        <div class="row">

            <?php

            $my_posts = get_posts( array(
                'numberposts' => 3,
                'orderby' => 'date',
                'order' => 'DESC',
                'include' => array(),
                'exclude' => array(),
                'meta_key' => '',
                'meta_value' =>'',
                'post_type' => 'news',
                'suppress_filters' => true,
            ) );

            foreach( $my_posts as $post ){
            setup_postdata( $post );
            ?>

                <?php get_template_part('template-parts/item-news'); ?>

                <?php
            }
            wp_reset_postdata(); // сброс
            ?>


        </div>
        <div class="row">
            <div class="col-lg-12 text-center">
                <a href="/news" class="boxed-btn">More News</a>
            </div>
        </div>
    </div>
</div>


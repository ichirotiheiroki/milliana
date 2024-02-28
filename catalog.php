<?php
/*
Template Name: Карточка
*/
?>


<?php get_header(); ?>

<style type="text/css">
	img, svg {
		-webkit-user-select: none;
		-moz-user-select: none;
		user-select: none;
		pointer-events: none;
	}


</style>
<script type="text/javascript">
	document.getElementsByTagName('img').ondragstart = function() { return false; };
</script>


    <!-- Products Start -->
    <div class="container-fluid about py-5">
        <div class="container">
            <div class="tab-class text-center">
                <ul
                        class="nav nav-pills d-inline-flex justify-content-center bg-dark text-uppercase rounded-pill overflow-hidden border-inner mb-5">
                    <li class="nav-item">
                        <a class="nav-link text-white active" data-bs-toggle="pill" href="http://localhost/levelz/catalog/#tab-1">Any</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-white" data-bs-toggle="pill" href="http://localhost/levelz/catalog/#tab-2">Europe</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-white" data-bs-toggle="pill" href="http://localhost/levelz/catalog/#tab-3">Asia</a>
                    </li>
                </ul>
                <div class="tab-content">
                    <div id="tab-1" class="tab-pane fade show p-0 active">
                        <div class="row g-3">

                            <?php

                            // по умолчанию будем отсюда топать
                            $my_posts = get_posts( array(
                                'numberposts' => -1,
                                'category_name' => 'house_post',
                                'orderby' => 'date',
                                'order' => 'DESC',
                                'include' => array(),
                                'exclude' => array(),
                                'meta_key' => '',
                                'meta_value' =>'',
                                'post_type' => 'post',
                                'suppress_filters' => true, // в жопу работу фильтров изменения SQL запроса
                            ) );

                            foreach( $my_posts as $post ){
                                setup_postdata( $post );
                                ?>
                                <div class="col-lg-3 col-md-6">
                                    <div class="single-post">

                                            <div class="post-img-container owl-carousel  cat-elem-carousel <?php the_field('post_class')?>">
                                                <?php if (get_field('main_post_image')) : ?><img data-src="<?php the_field('main_post_image')?>" class="img-fluid post-img owl-lazy" alt=""><?php endif; ?>
                                                <?php if (get_field('post_image_1')) : ?><img data-src="<?php the_field('post_image_1')?>" class="img-fluid post-img owl-lazy" alt=""><?php endif; ?>
                                                <?php if (get_field('post_image_2')) : ?><img data-src="<?php the_field('post_image_2')?>" class="img-fluid post-img owl-lazy" alt=""><?php endif; ?>
                                                <?php if (get_field('post_image_3')) : ?><img data-src="<?php the_field('post_image_3')?>" class="img-fluid post-img owl-lazy" alt=""><?php endif; ?>
                                                <?php if (get_field('post_image_4')) : ?><img data-src="<?php the_field('post_image_4')?>" class="img-fluid post-img owl-lazy" alt=""><?php endif; ?>
                                                <?php if (get_field('post_image_5')) : ?><img data-src="<?php the_field('post_image_5')?>" class="img-fluid post-img owl-lazy" alt=""><?php endif; ?>
                                                <?php if (get_field('post_image_6')) : ?><img data-src="<?php the_field('post_image_6')?>" class="img-fluid post-img owl-lazy" alt=""><?php endif; ?>
                                                <?php if (get_field('post_image_7')) : ?><img data-src="<?php the_field('post_image_7')?>" class="img-fluid post-img owl-lazy" alt=""><?php endif; ?>
                                                <?php if (get_field('post_image_8')) : ?><img data-src="<?php the_field('post_image_8')?>" class="img-fluid post-img owl-lazy" alt=""><?php endif; ?>
                                                <?php if (get_field('post_image_9')) : ?><img data-src="<?php the_field('post_image_9')?>" class="img-fluid post-img owl-lazy" alt=""><?php endif; ?>
                                            </div>

                                        <a href="<?php echo get_permalink(); ?>"><div class="post-text">


                                            <h6 class="post-name"><?php the_field('post_header')?></h6>
                                            <div class="post-description">
                                                <p class="description text-gray"><?php the_field('post_short_description')?></p>
                                            </div>
                                            <p class="price"> <?php the_field('post_price')?> &#36;</p>
                                        </div></a>
                                    </div>
                                </div>
                                <script type="text/javascript">
                                    (function ($) {
                                    $(".<?php the_field('post_class')?>").owlCarousel({
                                            autoplay: false,
                                            smartSpeed: 1500,
                                            nav:true,
                                            lazyLoad:true,
                                            margin: 2,
											merge:true,
                                            dots: true,
                                            loop: true,
                                            items: 1,
                                            center: true,
                                            navText: ["<",">"]
                                        });
                                    })(jQuery);
                                </script>
                                <?php



                            }

                            wp_reset_postdata(); // сброс

                            ?>
                        </div>
                    </div>
                    <div id="tab-2" class="tab-pane fade show p-0">
                        <div class="row g-3">

                        </div>
                    </div>
                    <div id="tab-3" class="tab-pane fade show p-0">
                        <div class="row g-3">

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Products End -->




<?php get_footer(); ?>
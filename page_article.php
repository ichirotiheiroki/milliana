<?php
/*
Template Name: Пост
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

<style>
    .video-bg{
        width: 100%;
        aspect-ratio: 16/4;
        object-fit: cover;
    }
</style>

    <!-- breadcrumb-section -->
    <div class="" style="position: relative;display: flex;justify-content: center;align-items: center;">
        <video  loop="" muted="" autoplay="" playsinline="" class="video-bg">
            <source src="<?php echo get_template_directory_uri(); ?>/assets/img/istockphoto.mp4">
        </video>
        <div class="container" style="position: absolute">
            <div class="row">
                <div class="col-lg-8 offset-lg-2 text-center">
                    <div class="breadcrumb-text">
                        <p>See more Details of</p>
                        <h1><?php the_field('product_name')?></h1>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- end breadcrumb section -->

    <!-- single product -->
    <div class="single-product mt-150 mb-150">
        <div class="container">
            <div class="row">
                <div class="col-md-7">
                    <div class="single-product-img">
                        <img src="<?php the_field('product_img_full')?>" alt="">
                        <div style="display: flex; padding-top: 30px; justify-content: end">

                        </div>
                    </div>
                </div>
                <div class="col-md-5">
                    <div class="single-product-content">
                        <h3><?php the_field('product_name')?></h3>

                        <div class="row">
                            <div class="col-6">
                                <p><strong>Categories: </strong><?php
                                    $categories = get_the_category();
                                    if (!empty($categories)) {
                                        $category = $categories[0];
                                        echo  esc_html($category->name);
                                    }
                                    ?></p>
                                <p class="single-product-pricing">
                                    <span>Value: <?php the_field('product_value')?>L</span><?php the_field('price')?>&#8380;</p>
                                </div>
                            <div class="col-6">
                                <div class="single-product-form">
                                    <form action="index.html">
                                        <input type="number" placeholder="1" min="1" value="1">
                                    </form>
                                    <a href="cart.html" class="cart-btn"><i class="fas fa-shopping-cart"></i> Add to Cart</a>

                                </div>
                            </div>
                        </div>
                        <p><?php the_field('product_description')?></p>

                        <h4>Share:</h4>
                        <ul class="product-share">
                            <li><a href="https://m.facebook.com/people/millianaexperience2013/100063733608497/" target="_blank"><i class="fab fa-facebook-f"></i></a></li>
                            <li><a href="https://api.whatsapp.com/send?phone=+9940556299116&text=Здравствуйте! Хочу заказать сироп:" ><i class="fab fa-whatsapp"></i></a></li>
                            <li><a href="https://www.instagram.com/milliana.experience2013/" target="_blank"><i class="fab fa-instagram"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- end single product -->





    <!-- more products -->
    <div class="more-products mb-150">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 offset-lg-2 text-center">
                    <div class="section-title">
                        <h3><span class="orange-text">Related</span> Products</h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquid, fuga quas itaque eveniet beatae optio.</p>
                    </div>
                </div>
            </div>
            <div class="row xxx owl-carousel">
                <?php

                $my_posts = get_posts( array(
                    'numberposts' => 7,
                    'orderby' => 'date',
                    'order' => 'DESC',
                    'include' => array(),
                    'exclude' => array(),
                    'meta_key' => '',
                    'meta_value' =>'',
                    'post_type' => 'post',
                    'suppress_filters' => true,
                ) );

                foreach( $my_posts as $post ){
                    setup_postdata( $post );
                    ?>
                    <div class="col-lg-12 col-md-12 text-center">
                        <a href="<?php echo get_permalink(); ?>">
                            <div class="single-product-item">
                                <div class="product-image">
                                    <img src="<?php the_field('product_img_full')?>" alt="">
                                </div>
                                <h3><?php the_field('product_name')?></h3>
                                <p class="product-price"><span>Per <?php the_field('product_value')?>L</span> <?php the_field('price')?>&#8380; </p>
                                <a href="javascript:void(0)" class="cart-btn"><i class="fas fa-shopping-cart"></i> Add to Cart</a>
                            </div>
                        </a>
                    </div>
                    <?php
                }
                wp_reset_postdata(); // сброс
                ?>
                <div class="col-lg-12 col-md-12 text-center">
                    <a href="http://milliana/catalog/">
                    <div class="single-product-item">
                        <div style="height: 330.28px;display: flex;justify-content: center;flex-direction: column;align-items: center;">

                            <svg version="1.1" baseProfile="tiny" style="width: 50px;" id="Слой_1"
                                 xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 512 512"
                                 overflow="visible" xml:space="preserve">
                                                    <path d="M392.3,238.4 M392.4,273.6 M120,256 M303.7,185.3 M256,0C114.6,0,0,114.6,0,256s114.6,256,256,256s256-114.6,256-256
                                                    	S397.4,0,256,0z M256,474c-120.4,0-218.3-98.1-218-218.6C38.3,135.9,136,38.3,255.5,38C375.9,37.7,474,135.6,474,256
                                                    	C474,376.2,376.2,474,256,474z M382.8,267.8l14.5-14.5l-14.5-14.5l-92.3-92.3L276.1,132l-29,29l14.5,14.5l57.3,57.3H132.6h-20.5v41
                                                    	h20.5h186.3l-57.3,57.3l-14.4,14.5l29,29l14.5-14.5L382.8,267.8L382.8,267.8z"/>
                                                    </svg>
                            <p style="font-size: 18px;font-weight: 500;color: black;margin-top: 20px; margin-bottom: 0;">Перейти в каталог</p>

                        </div>
                    </div>
                    </a>
                </div>
            </div>
        </div>
    </div>
    <!-- end more products -->

<?php get_footer(); ?>
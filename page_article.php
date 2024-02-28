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
                        <p>See more Details</p>
                        <h1>Single Product</h1>
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
                            <li><a href=""><i class="fab fa-facebook-f"></i></a></li>
                            <li><a href=""><i class="fab fa-twitter"></i></a></li>
                            <li><a href=""><i class="fab fa-google-plus-g"></i></a></li>
                            <li><a href=""><i class="fab fa-linkedin"></i></a></li>
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
            <div class="row">
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
                    <div class="col-lg-3 col-md-4 text-center">
                        <div class="single-product-item">
                            <div class="product-image">
                                <a href="single-product.html"><img src="<?php the_field('product_img_full')?>" alt=""></a>
                            </div>
                            <h3>Strawberry</h3>
                            <p class="product-price"><span>Per <?php the_field('product_value')?>L</span> <?php the_field('price')?>&#8380; </p>
                            <a href="cart.html" class="cart-btn"><i class="fas fa-shopping-cart"></i> Add to Cart</a>
                        </div>
                    </div>
                    <?php
                }
                wp_reset_postdata(); // сброс
                ?>
            </div>
        </div>
    </div>
    <!-- end more products -->

<?php get_footer(); ?>
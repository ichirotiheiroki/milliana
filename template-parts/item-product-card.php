<div class="col-lg-12 col-md-12 text-center">
    <a href="<?php echo get_permalink(); ?>">
        <div class="single-product-item">
            <div class="product-image">
                <img src="<?php the_field('product_img_full')?>" alt="">
            </div>
            <h3 class="px-3 text-truncate"><?php the_field('product_name')?></h3>
            <p class="product-price"><span>Per <?php the_field('product_value')?>L</span> <?php the_field('price')?>&#8380; </p>
            <a href="javascript:void(0)" class="cart-btn"><i class="fas fa-shopping-cart"></i> Add to Cart</a>
        </div>
    </a>
</div>


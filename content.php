


<div class="post-frame">
    <div class="single-post">

        <div class="post-img-container owl-carousel  cat-elem-carousel <?php the_field('post_class')?>">
            <?php if (get_field('main_post_image')) : ?><img data-src="<?php the_field('main_post_image')?>" class="img-fluid post-img owl-lazy" alt="img"><?php endif; ?>
            <?php if (get_field('post_image_1')) : ?><img data-src="<?php the_field('post_image_1')?>" class="img-fluid post-img owl-lazy" alt="img"><?php endif; ?>
            <?php if (get_field('post_image_2')) : ?><img data-src="<?php the_field('post_image_2')?>" class="img-fluid post-img owl-lazy" alt="img"><?php endif; ?>
            <?php if (get_field('post_image_3')) : ?><img data-src="<?php the_field('post_image_3')?>" class="img-fluid post-img owl-lazy" alt="img"><?php endif; ?>
            <?php if (get_field('post_image_4')) : ?><img data-src="<?php the_field('post_image_4')?>" class="img-fluid post-img owl-lazy" alt="img"><?php endif; ?>
            <?php if (get_field('post_image_5')) : ?><img data-src="<?php the_field('post_image_5')?>" class="img-fluid post-img owl-lazy" alt="img"><?php endif; ?>
            <?php if (get_field('post_image_6')) : ?><img data-src="<?php the_field('post_image_6')?>" class="img-fluid post-img owl-lazy" alt="img"><?php endif; ?>
            <?php if (get_field('post_image_7')) : ?><img data-src="<?php the_field('post_image_7')?>" class="img-fluid post-img owl-lazy" alt="img"><?php endif; ?>
            <?php if (get_field('post_image_8')) : ?><img data-src="<?php the_field('post_image_8')?>" class="img-fluid post-img owl-lazy" alt="img"><?php endif; ?>
            <?php if (get_field('post_image_9')) : ?><img data-src="<?php the_field('post_image_9')?>" class="img-fluid post-img owl-lazy" alt="img"><?php endif; ?>
        </div>

        <a href="<?php echo get_permalink(); ?>">
            <div class="post-text">


                <h6 class="post-name"><?php the_field('post_header')?></h6>
				<p class="post-description"> <?php the_field('post_short_description')?></p>
				<div style="display: flex;"><p>от  &#36;</p><p class="price unformatted"> <?php the_field('post_price')?></p></div>

            </div>
        </a>
    </div>
</div>
<script type="text/javascript">
    (function ($) {
        $(".<?php the_field('post_class')?>").owlCarousel({
            autoplay: false,
            animateOut: 'fadeOut',
            smartSpeed: 1500,
            nav:true,
            lazyLoad:true,
            margin: 1,
			mergeFit: true,
			stagePadding: 0,
			merge:true,
            dots: true,
            loop: true,
            items: 1,
            center: true,
            navText: ["",""]
        });
    })(jQuery);
</script>
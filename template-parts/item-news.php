<div class="col-lg-4 col-md-6">
    <div class="single-latest-news">
        <a href="<?php echo get_permalink(); ?>">
            <div class="latest-news-bg news-bg-1" style="background-image: url('<?php the_field('image')?>')">
            </div>
        </a>
        <div class="news-text-box">
            <h3><a href=""><?php the_field('title')?></a></h3>
<!--            <p class="blog-meta">-->
<!--                <span class="author"><i class="fas fa-user"></i> Admin</span>-->
<!--                <span class="date"><i class="fas fa-calendar"></i> 27 December, 2019</span>-->
<!--            </p>-->
            <p class="excerpt"><?php the_field('short_text')?></p>
            <a href="<?php echo get_permalink(); ?>" class="read-more-btn">read more <i class="fas fa-angle-right"></i></a>
        </div>
    </div>
</div>


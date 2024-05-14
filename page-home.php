<?php
/*
Template Name: Главная страница
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


<?php get_template_part('template-parts/section-banner-slider'); ?>
<?php get_template_part('template-parts/section-products-slider'); ?>
<?php get_template_part('template-parts/section-deal'); ?>
<?php get_template_part('template-parts/section-advertisement'); ?>
<?php get_template_part('template-parts/section-shop-banner'); ?>
<?php get_template_part('template-parts/section-news'); ?>











    <!-- logo carousel -->
    <div class="logo-carousel-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="logo-carousel-inner">
                        <div class="single-logo-item">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/company-logos/1.png" alt="">
                        </div>
                        <div class="single-logo-item">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/company-logos/2.png" alt="">
                        </div>
                        <div class="single-logo-item">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/company-logos/3.png" alt="">
                        </div>
                        <div class="single-logo-item">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/company-logos/4.png" alt="">
                        </div>
                        <div class="single-logo-item">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/company-logos/5.png" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- end logo carousel -->


<?php get_footer(); ?>
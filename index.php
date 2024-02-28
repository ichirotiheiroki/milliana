<?php

/*
Template Name: Index
*/


get_header(); ?>








    <!-- breadcrumb-section -->
    <div class="breadcrumb-section breadcrumb-bg">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 offset-lg-2 text-center">
                    <div class="breadcrumb-text">
                        <p>Fresh and Organic</p>
                        <h1>Shop</h1>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- end breadcrumb section -->

    <!-- products -->
    <div class="product-section mt-150 mb-150">
        <div class="container">

            <div class="row">
                <div class="col-md-12">
                    <div class="product-filters">
                        <ul>
                            <li class="active" data-filter="*">All</li>
                            <li data-filter=".strawberry">Strawberry</li>
                            <li data-filter=".berry">Berry</li>
                            <li data-filter=".lemon">Lemon</li>
                        </ul>
                    </div>
                </div>
            </div>

            <div class="row product-lists">
                <div class="col-lg-3 col-md-4 text-center strawberry">
                    <div class="single-product-item">
                        <div class="product-image">
                            <a href="single-product.html"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/products/product-img-1.jpg" alt=""></a>
                        </div>
                        <h3>Strawberry</h3>
                        <p class="product-price"><span>Per Kg</span> 85$ </p>
                        <a href="cart.html" class="cart-btn"><i class="fas fa-shopping-cart"></i> Add to Cart</a>
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 text-center berry">
                    <div class="single-product-item">
                        <div class="product-image">
                            <a href="single-product.html"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/products/product-img-2.jpg" alt=""></a>
                        </div>
                        <h3>Berry</h3>
                        <p class="product-price"><span>Per Kg</span> 70$ </p>
                        <a href="cart.html" class="cart-btn"><i class="fas fa-shopping-cart"></i> Add to Cart</a>
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 text-center lemon">
                    <div class="single-product-item">
                        <div class="product-image">
                            <a href="single-product.html"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/products/product-img-3.jpg" alt=""></a>
                        </div>
                        <h3>Lemon</h3>
                        <p class="product-price"><span>Per Kg</span> 35$ </p>
                        <a href="cart.html" class="cart-btn"><i class="fas fa-shopping-cart"></i> Add to Cart</a>
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 text-center">
                    <div class="single-product-item">
                        <div class="product-image">
                            <a href="single-product.html"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/products/product-img-4.jpg" alt=""></a>
                        </div>
                        <h3>Avocado</h3>
                        <p class="product-price"><span>Per Kg</span> 50$ </p>
                        <a href="cart.html" class="cart-btn"><i class="fas fa-shopping-cart"></i> Add to Cart</a>
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 text-center">
                    <div class="single-product-item">
                        <div class="product-image">
                            <a href="single-product.html"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/products/product-img-5.jpg" alt=""></a>
                        </div>
                        <h3>Green Apple</h3>
                        <p class="product-price"><span>Per Kg</span> 45$ </p>
                        <a href="cart.html" class="cart-btn"><i class="fas fa-shopping-cart"></i> Add to Cart</a>
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 text-center strawberry">
                    <div class="single-product-item">
                        <div class="product-image">
                            <a href="single-product.html"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/products/product-img-6.jpg" alt=""></a>
                        </div>
                        <h3>Strawberry</h3>
                        <p class="product-price"><span>Per Kg</span> 80$ </p>
                        <a href="cart.html" class="cart-btn"><i class="fas fa-shopping-cart"></i> Add to Cart</a>
                    </div>
                </div>
            </div>

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
    <!-- end products -->

























<div class="modal fade" id="filterModal" tabindex="-1" aria-labelledby="filterModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header" style="flex-direction: row-reverse;">
                <h1 class="modal-title fs-5" id="filterModalLabel">Фильтрация</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <?php echo do_shortcode('[searchandfilter id="404"]'); ?>
            </div>
        </div>
    </div>
</div>









<!-- Products Start -->
<div class="container-fluid catalog-fluid">
    <div class="container">



<div class="s_wrapper catalog-wrapper">
    <button id="modalButton" type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#filterModal">
        Фильтры
    </button>
    <?php echo do_shortcode('[searchandfilter id="421"]'); ?>
</div>






		<div class="s_wrapper catalog-wrapper-grid" id="main">
		<div class="s_wrapper catalog-wrapper-grid results" id="results">
			</div>
			<?php
				if ( have_posts() ) :

					while ( have_posts() ) :
						the_post();


						get_template_part( 'content');

					endwhile;


				endif;
				?>
		
				

<!-- 			<div class="s_wrapper pag_container">
<?php the_posts_pagination(); ?>
				
		</div> -->
		</div>

		
    </div>
</div>

<script>
    function priceFormat() {
        let pf = document.querySelectorAll(".unformatted");
        for (let i = 0; i < pf.length; i++) {
            let pfnum = Number(pf[i].innerHTML)
                .toLocaleString('en');
            pf[i].innerHTML = pfnum;
			pf[i].classList.remove('unformatted');
        }
		
    }
	
	priceFormat();
	
	const targetNode = document.getElementById("main");
	const observerOptions = {
	  childList: true
	};
	const observer = new MutationObserver(function(mutationsList) {
	  for (let mutation of mutationsList) {
		if (mutation.type === 'childList') {
		  priceFormat();
		}
	  }
	});

	observer.observe(targetNode, observerOptions);
    
    function pfMin(){
		let formatMin = document.querySelector(".sf-range-min");
		formatMin.innerHTML= Number(formatMin.innerHTML).toLocaleString('en');
	}
	function pfMax(){
		let formatMax = document.querySelector(".sf-range-max");
		formatMax.innerHTML= Number(formatMax.innerHTML).toLocaleString('en');
	}
	setTimeout(() => {
		pfMin();
		pfMax();
	}, 2000);
	

	
</script>


<?php get_footer(); ?>
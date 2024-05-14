<?php

/*
Template Name: Index
*/


get_header(); ?>


<?php get_template_part('template-parts/section-breadcrumb'); ?>



    <div class="modal fade" id="filterModal" tabindex="-1" aria-labelledby="filterModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header" style="flex-direction: row-reverse;">
                    <h1 class="modal-title fs-5" id="filterModalLabel">Фильтрация</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <?php echo do_shortcode('[searchandfilter id="53"]'); ?>
                </div>
            </div>
        </div>
    </div>


    <!-- Products Start -->
    <div class="container-fluid catalog-fluid">
        <div class="container">


            <div class="s_wrapper catalog-wrapper">
                <button id="modalButton" type="button" class="btn btn-primary" data-bs-toggle="modal"
                        data-bs-target="#filterModal">
                    Фильтры
                </button>
                <?php echo do_shortcode('[searchandfilter id="421"]'); ?>
            </div>


            <div class="s_wrapper catalog-wrapper-grid" id="main">
                <div class="s_wrapper catalog-wrapper-grid results" id="results">
                </div>
                <div class="product-section mt-150 mb-150">
                        <div class="row product-lists">
                            <?php
                            if (have_posts()) :

                                while (have_posts()) :
                                    the_post();


                                    get_template_part('content');

                                endwhile;


                            endif;
                            ?>
                        </div>
                </div>


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
        const observer = new MutationObserver(function (mutationsList) {
            for (let mutation of mutationsList) {
                if (mutation.type === 'childList') {
                    priceFormat();
                }
            }
        });

        observer.observe(targetNode, observerOptions);

        function pfMin() {
            let formatMin = document.querySelector(".sf-range-min");
            formatMin.innerHTML = Number(formatMin.innerHTML).toLocaleString('en');
        }

        function pfMax() {
            let formatMax = document.querySelector(".sf-range-max");
            formatMax.innerHTML = Number(formatMax.innerHTML).toLocaleString('en');
        }

        setTimeout(() => {
            pfMin();
            pfMax();
        }, 2000);












        let show = document.querySelector('.sf-field-reset');

        if (show){
            show.innerHTML = show.innerHTML + '<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">Показать</button>';
        }

        let minmax = document.querySelectorAll('.sf-meta-range-slider span');
        for (i=0; i<minmax.length; i++){ minmax[i].remove();}
        let minmaxRe = document.querySelector('.sf-meta-range-slider');
        let htmlconst = '<div class="price-slider-label-container">\n' +
            '    <div class="min-max-container">\n' +
            '        <p class="min-max-label">min-price</p>\n' +
            '        <div class="min-max-price">\n' +
            '            <span>$ </span>\n' +
            '            <span class="sf-range-min sf-text-number">10000</span>\n' +
            '        </div>\n' +
            '    </div>\n' +
            '<span className="sf-range-values-seperator"> - </span>\n' +
            '    <div class="min-max-container">\n' +
            '        <p class="min-max-label">max-price</p>\n' +
            '        <div class="min-max-price">\n' +
            '            <span>$ </span>\n' +
            '            <span class="sf-range-max sf-text-number">660000</span>\n' +
            '        </div>\n' +
            '    </div>\n' +
            '</div>';

        if (minmaxRe) {
            minmaxRe.innerHTML = minmaxRe.innerHTML + htmlconst;
        }

    </script>


<?php get_footer(); ?>
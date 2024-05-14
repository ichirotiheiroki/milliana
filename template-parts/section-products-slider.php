
<div class="product-section mt-150 mb-150">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 offset-lg-2 text-center">
                <a href="/catalog">
                    <div class="section-title">
                        <h3><span class="orange-text">Our</span> Products</h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquid, fuga quas itaque
                            eveniet beatae optio.</p>
                    </div>
                </a>
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

                get_template_part('template-parts/item-product-card');

            }
            wp_reset_postdata(); // сброс
            ?>
            <div class="col-lg-12 col-md-12 text-center">
                <a href="/catalog">
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


        <div class="row my-5">
            <div class="col-lg-12 text-center">
                <a href="/catalog" class="boxed-btn">Catalog</a>
            </div>
        </div>
    </div>
</div>


<?php
/*
Template Name: Подвал
*/
?>

<div class="wh-api">
    <div class="wh-fixed">
        <a href="https://api.whatsapp.com/send?phone=+9940556299116&amp;text=Здравствуйте! Хочу заказать сироп:" target="_blank">
            <button class="wh-ap-btn"></button>
        </a>
    </div>
</div>

<button class="cart-btn_mini" data-popup="popup-order">
    <span class="cart-btn__counter js-cart-total-count-items">0</span>
    <svg class="cart-btn__icon" viewBox="0 -31 512.00026 512" xmlns="http://www.w3.org/2000/svg">
        <path d="m164.960938 300.003906h.023437c.019531 0 .039063-.003906.058594-.003906h271.957031c6.695312 0 12.582031-4.441406 14.421875-10.878906l60-210c1.292969-4.527344.386719-9.394532-2.445313-13.152344-2.835937-3.757812-7.269531-5.96875-11.976562-5.96875h-366.632812l-10.722657-48.253906c-1.527343-6.863282-7.613281-11.746094-14.644531-11.746094h-90c-8.285156 0-15 6.714844-15 15s6.714844 15 15 15h77.96875c1.898438 8.550781 51.3125 230.917969 54.15625 243.710938-15.941406 6.929687-27.125 22.824218-27.125 41.289062 0 24.8125 20.1875 45 45 45h272c8.285156 0 15-6.714844 15-15s-6.714844-15-15-15h-272c-8.269531 0-15-6.730469-15-15 0-8.257812 6.707031-14.976562 14.960938-14.996094zm312.152343-210.003906-51.429687 180h-248.652344l-40-180zm0 0"></path>
        <path d="m150 405c0 24.8125 20.1875 45 45 45s45-20.1875 45-45-20.1875-45-45-45-45 20.1875-45 45zm45-15c8.269531 0 15 6.730469 15 15s-6.730469 15-15 15-15-6.730469-15-15 6.730469-15 15-15zm0 0"></path>
        <path d="m362 405c0 24.8125 20.1875 45 45 45s45-20.1875 45-45-20.1875-45-45-45-45 20.1875-45 45zm45-15c8.269531 0 15 6.730469 15 15s-6.730469 15-15 15-15-6.730469-15-15 6.730469-15 15-15zm0 0"></path>
    </svg>
</button>

<!-- footer -->
<div class="footer-area">
    <div class="container">
        <div class="row">
            <div class="col-lg-3 col-md-6">
                <div class="footer-box about-widget">
                    <h2 class="widget-title">About us</h2>
                    <p>Ut enim ad minim veniam perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae.</p>
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <div class="footer-box get-in-touch">
                    <h2 class="widget-title">Get in Touch</h2>
                    <ul>
                        <li>34/8, East Hukupara, Gifirtok, Sadan.</li>
                        <li><a class=" " href="mailto:info@milliana.az">info@milliana.az</a></li>
                        <li><a class=" " href="tel:+994556299116">+994 (055) 629-91-16</a></li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <div class="footer-box pages">
                    <h2 class="widget-title">Pages</h2>
                    <?php
                    wp_nav_menu( [
                        'theme_location'  => 'menu_main_header',
                        'menu'            => 'Menu 1',
                        'container'       => 'div',
                        'container_class' => 'navbar-collapse sub-menu-bar',
                        'container_id'    => 'navbarSupportedContent',
                        'menu_class'      => 'navbar-nav me-auto',
                        'menu_id'         => 'navFooter',
                    ] );
                    ?>
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <div class="footer-box subscribe">
                    <h2 class="widget-title">Subscribe</h2>
                    <p>Subscribe to our mailing list to get the latest updates.</p>
                    <form action="index.html">
                        <input type="email" placeholder="Email">
                        <button type="submit"><i class="fas fa-paper-plane"></i></button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- end footer -->

<!-- copyright -->
<div class="copyright">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 col-md-12">
                <p>Copyrights &copy; 2024 - <a href="javascript:void(0)">Milliana</a>,  All Rights Reserved.<br>
                    Developed By - <a href="https://www.instagram.com/ichirotiheiroki/">Ziya M.</a>
                </p>
            </div>
            <div class="col-lg-6 text-right col-md-12">
                <div class="social-icons">
                    <ul>
                        <li><a href="https://m.facebook.com/people/millianaexperience2013/100063733608497/" target="_blank"><i class="fab fa-facebook-f"></i></a></li>
                        <li><a href="https://api.whatsapp.com/send?phone=+9940556299116&text=Здравствуйте! Хочу заказать сироп:" ><i class="fab fa-whatsapp"></i></a></li>
                        <li><a href="https://www.instagram.com/milliana.experience2013/" target="_blank"><i class="fab fa-instagram"></i></a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- end copyright -->

<script>
    document.addEventListener('DOMContentLoaded',()=>{
        const navList = document.querySelector('#nav>ul');
        navList.innerHTML += `<li><a class="phone__item header-page__phone" href="tel:+994556299116">+994 (055) 629-91-16</a></li>`;
    })
</script>

<!-- jquery -->
<!--<script src="--><?php //echo get_template_directory_uri(); ?><!--/assets/js/jquery-1.11.3.min.js"></script>-->
<!-- bootstrap -->
<script src="<?php echo get_template_directory_uri(); ?>/assets/bootstrap/js/bootstrap.min.js"></script>
<!-- count down -->
<script src="<?php echo get_template_directory_uri(); ?>/assets/js/jquery.countdown.js"></script>
<!-- isotope -->
<script src="<?php echo get_template_directory_uri(); ?>/assets/js/jquery.isotope-3.0.6.min.js"></script>
<!-- waypoints -->
<script src="<?php echo get_template_directory_uri(); ?>/assets/js/waypoints.js"></script>
<!-- owl carousel -->
<script src="<?php echo get_template_directory_uri(); ?>/assets/js/owl.carousel.min.js"></script>
<!-- magnific popup -->
<script src="<?php echo get_template_directory_uri(); ?>/assets/js/jquery.magnific-popup.min.js"></script>
<!-- mean menu -->
<script src="<?php echo get_template_directory_uri(); ?>/assets/js/jquery.meanmenu.min.js"></script>
<!-- sticker js -->
<script src="<?php echo get_template_directory_uri(); ?>/assets/js/sticker.js"></script>
<!-- main js -->
<script src="<?php echo get_template_directory_uri(); ?>/assets/js/main.js"></script>


<?php wp_footer(); ?>


</body>

</html>
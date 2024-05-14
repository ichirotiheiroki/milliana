<div class="homepage-slider">

    <?php
    $slides = get_field('banner');
    if ($slides) {
        foreach ($slides as $slide) { ?>
            <div class="single-homepage-slider homepage-bg-1"
                 style="background-image: url('<?php echo $slide['image'] ?>')">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12 col-lg-7 align-self-center  text-center">
                            <div class="hero-text">
                                <div class="hero-text-tablecell">
                                    <p class="subtitle"><?php echo $slide['title'] ?></p>
                                    <h1><?php echo $slide['text'] ?></h1>
                                    <div class="hero-btns">
                                        <a href="<?php echo $slide['link'] ?>"
                                           class="boxed-btn"><?php echo $slide['btn_text'] ?></a>
                                        <a href="contact.html" class="bordered-btn">Contact Us</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <?php
        }
    }
    ?>

</div>
<?php
/*
Template Name: Новость
*/

get_header(); ?>

<?php get_template_part('template-parts/section-breadcrumb'); ?>

<div class="mt-150 mb-150">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 mx-auto">
                <div class="single-article-section">
                    <div class="single-article-text">
                        <div class="single-artcile-bg"
                             style="background-image: url('<?php the_field('image') ?>')"></div>
                        <p class="blog-meta">
                            <span class="author"><i class="fas fa-user"></i> <?php the_author(); ?></span>
                            <span class="date"><i class="fas fa-calendar"></i> <?php the_date(); ?></span>
                        </p>
                        <h2><?php the_field('title') ?></h2>

                        <?php the_field('text') ?>

                    </div>
                </div>

                <div class="comment-template my-5">
                    <h4>Leave a comment</h4>
                    <p>If you have a comment dont feel hesitate to send us your opinion.</p>
                    <form action="index.html">
                        <p>
                            <input type="text" placeholder="Your Name">
                            <input type="email" placeholder="Your Email">
                        </p>
                        <p><textarea name="comment" id="comment" cols="30" rows="10"
                                     placeholder="Your Message"></textarea></p>
                        <p><input type="submit" value="Submit"></p>
                    </form>
                </div>
            </div>
        </div>
    </div>


    <?php get_footer(); ?>


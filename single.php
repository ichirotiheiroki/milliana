<?php
//Template Name: Обьявление

//Template Post Type: post, pages
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


<div class="wrap">
	<div id="primary" class="content-area">
		<main id="main" class="site-main">

			<?php
			// Start the Loop.
			while ( have_posts() ) :
				the_post();

				get_template_part( 'page_article');
			endwhile; // End the loop.
			?>

		</main><!-- #main -->
	</div><!-- #primary -->
</div><!-- .wrap -->

<?php
get_footer();
?>
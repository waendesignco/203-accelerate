<?php
/**
 * The template for displaying single about page
 *
 * This is the template that displays the page by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site will use a
 * different template.
 *
 * @package WordPress
 * @subpackage Accelerate Marketing
 * @since Accelerate Marketing 2.0
 */
$size = "medium";
get_header(); ?>

<div id="primary" class="site-content-sidebar">
		<div class="main-content" role="main">

		<?php while ( have_posts() ) : the_post();
      $image = get_field('image');  ?>

		<article class="about">
      <aside>
				<h3><?php the_title(); ?></h3>
			  <h6><?php the_content(); ?></h6>
      </aside>

			<div class="service-images">
				<?php if($image) {
				   echo wp_get_attachment_image( $image, $size );
				} ?>
			</div>

    </article>
		<?php endwhile; // end of the loop. ?>
		</div><!-- .main-content -->

 </div><!-- #primary -->

 <nav id="navigation" class="container">
 	  <div class="center">
			<h5>Interested in working with us?</h5>
	    <a class="button" href="<?php echo site_url('/contact/') ?>">Contact Us</a>
    </div>
 </nav>

<?php get_footer(); ?>

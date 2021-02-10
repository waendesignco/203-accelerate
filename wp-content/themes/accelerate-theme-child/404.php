<?php
/**
 * The template for displaying 404 page
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
get_header(); ?>

<section id="primary" class="no-page hero-content">
		<div class="no-page-content">
      <h1>Oops!</h1>
      <h2>Feeling lost?<br>No worries, let's get back to where we started.</h2>
				<a class="button" href="<?php echo site_url('/front-page/') ?>">Back to homepage</a>
		</div><!-- .main-content -->
</section><!-- #primary -->

<?php get_footer(); ?>

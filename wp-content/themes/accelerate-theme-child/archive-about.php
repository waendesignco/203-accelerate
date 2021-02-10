<?php
/**
 * The template for displaying the about page
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site will use a
 * different template.
 *
 *Accelerate Child Theme
 *
 * @package WordPress
 * @subpackage Accelerate Marketing
 * @since Accelerate Marketing 2.0
 */

get_header(); ?>
<section class="home-page">
   <div id="about-content">
     <h2>Accelerate is a strategy and marketing agency located in the heart of NYC. Our goal is to build businesses by making our clients visible and making their customers smile.</h2>
   </div>
</section><!-- #primary -->

<section class="our-services">
	<div class="services-content">
		<h4>Our services</h4><br>
		<h6>We take pride in our clients and the content we create for them.<br>Here’s a brief overview of our offered services.</h6>
	</div>

	<div class="our-services">
	  <?php query_posts('posts_per_page=4&post_type=about'); ?>
		 <?php while ( have_posts() ) : the_post();
			$image = get_field("image");
			$size = "medium";
		 ?>
  </div>

  <div>
		 <article id="individual-service">
        <figure class="about-image">
         <?php if($image){
         echo wp_get_attachment_image($image,$size); }?>
        </figure>
		  	<aside class="about-sidebar">
				  <h1><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h1>
				  <h6><?php the_content(); ?></h6>
			  </aside>
         <?php endwhile; //end of the loop ?>
    </article>

  	<?php wp_reset_query(); //resets the altered query back to the original ?>
  </div>

  <div>
    <span class="line"></span>
  </div>

  <div class="interested">
		<div id="interested">
      <h4>Interested in working with us?</h4>
	  </div>
		<div id="interested-button">
		  <a class="button" href="<?php echo site_url('/contact/') ?>">Contact Us</a>
	  </div>
</section>

<?php get_footer(); ?>

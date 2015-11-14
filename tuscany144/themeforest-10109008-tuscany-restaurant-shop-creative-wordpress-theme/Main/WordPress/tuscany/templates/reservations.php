<?php
/*
Template Name: 09 Reservations
*/

get_header(); global $tuscany_opt; ?>

<?php if ( have_posts() ) : while ( have_posts() ) : the_post();
	$reservation_form      = get_post_meta($post->ID, '_cmb_reservation-shortcode', true);
?>

	<div class="about-us-wrapper" data-stellar-background-ratio="0.5">
	    <div class="container">
	        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
	            <div class="animation-about-food contact-animation-food">
	                <img src="<?php echo get_template_directory_uri(); ?>/img/about-burger.png" height="174" width="262" alt="Burger">
	                <img src="<?php echo get_template_directory_uri(); ?>/img/about-sandwich.png" height="177" width="209" alt="Sandwich">
	                <img src="<?php echo get_template_directory_uri(); ?>/img/a1.png" alt="Food Img">
	                <img src="<?php echo get_template_directory_uri(); ?>/img/a2.png" alt="Food Img">
	                <img src="<?php echo get_template_directory_uri(); ?>/img/a3.png" alt="Food Img">
	                <img src="<?php echo get_template_directory_uri(); ?>/img/a4.png" alt="Food Img">
	                <img src="<?php echo get_template_directory_uri(); ?>/img/a5.png" alt="Food Img">
	                <img src="<?php echo get_template_directory_uri(); ?>/img/a6.png" alt="Food Img">
	            </div>
	            <div class="our-description-text our-contact-form element-animate" data-animation="bounceInUp">
	                <div class="tus-scroll">
	                    <h2><?php the_title(); ?></h2>
	                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 text-center">
	                        <?php the_content(); ?>
	                    </div>
	                   	<?php if (class_exists('WPCF7_ContactForm')): ?>
	                   	    <?php echo do_shortcode($reservation_form); ?>
	                   	<?php endif ?>
	                </div>
	            </div>
	        </div>
	    </div>
	</div>

<?php endwhile; endif; ?>

<?php get_template_part('inc/blocks/team-members'); ?>

<?php get_template_part('inc/blocks/blackboard'); ?>

<?php get_template_part('inc/blocks/history'); ?>

<?php get_template_part('inc/blocks/testimonials-slider'); ?>

<?php get_template_part('inc/blocks/gallery-slider'); ?>


<?php get_footer(); ?>
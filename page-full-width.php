<?php 
/* Template Name: Full Width */
get_header(); ?>

<?php while ( have_posts() ) : the_post(); ?>

	<?php get_template_part('content', 'page'); ?>

<?php endwhile; ?>

<?php get_footer(); ?>

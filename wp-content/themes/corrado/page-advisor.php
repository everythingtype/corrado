<?php /* Template Name: Advisor (Single) */  ?>

<?php get_header(); ?>

<?php if (have_posts()) : ?>

	<?php while (have_posts()) : the_post(); ?>

		<?php get_template_part('parts/layout-advisor'); ?>

	<?php endwhile; ?>

<?php endif; ?>

<?php get_footer(); ?>

<?php /* Template Name: Advisor */  ?>

<?php get_header(); ?>

<?php if (have_posts()) : ?>

	<?php while (have_posts()) : the_post(); ?>

		<?php echo get_template_part('parts/contents-advisor'); ?>

	<?php endwhile; ?>

<?php endif; ?>

<?php get_footer(); ?>
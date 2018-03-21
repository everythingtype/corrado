<?php /* Template Name: Why work with us? */  ?>

<?php get_header(); ?>

<?php if (have_posts()) : ?>

	<?php while (have_posts()) : the_post(); ?>

		<h1><?php the_title(); ?></h1>

		<?php echo get_template_part('parts/contents-whywork'); ?>

	<?php endwhile; ?>

<?php endif; ?>

<?php get_footer(); ?>
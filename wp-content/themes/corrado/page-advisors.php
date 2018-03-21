<?php /* Template Name: Advisor */  ?>

<?php get_header(); ?>

<?php if (have_posts()) : ?>

	<?php while (have_posts()) : the_post(); ?>

		<h1><?php the_title(); ?></h1>

		<?php

		$thisid = $post->ID;

		$args = array(
			'post_type' => 'page',
			'post_parent' => $thisid,
		);

		$the_query = new WP_Query($args); ?>
		<?php if ( $the_query->have_posts() ) : ?>

			<?php while( $the_query->have_posts() ): $the_query->the_post(); ?>

				<?php $name = get_field('name'); ?>
				<?php if ( $name && $name != '' ) : ?>
					<h2><?php echo $name; ?></h2>
				<?php endif; ?>

				<?php $title = get_field('title'); ?>
				<?php if ( $title && $title != '' ) : ?>
					<?php echo wpautop($title); ?>
				<?php endif; ?>

				<?php $photo = get_field('photo'); ?>
				<?php if ( $photo && $photo != '' ) : ?>
					<?php echo spellerberg_get_image($photo) ?>
				<?php endif; ?>

			<?php endwhile; ?>

			<?php while( $the_query->have_posts() ): $the_query->the_post(); ?>
				<?php echo get_template_part('parts/contents-advisor'); ?>
			<?php endwhile; ?>

		<?php endif; ?>
		<?php wp_reset_postdata(); ?>


	<?php endwhile; ?>

<?php endif; ?>

<?php get_footer(); ?>
<?php /* Template Name: Case Studies */  ?>

<?php get_header(); ?>

<?php if (have_posts()) : ?>
	<?php while (have_posts()) : the_post(); ?>

		<div class="casestudies">

			<h1><?php the_title(); ?></h1>

			<?php

				$thisid = $post->ID;

				$args = array(
					'post_type' => 'page',
					'post_parent' => $thisid,
				);

				$the_query = new WP_Query($args);

			?>

			<?php if ( $the_query->have_posts() ) : ?>

				<?php while( $the_query->have_posts() ): $the_query->the_post(); ?>

					<h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>

				<?php endwhile; ?>

				<?php wp_reset_postdata(); ?>

			<?php endif; ?>


		</div>

	<?php endwhile; ?>

<?php endif; ?>

<?php get_footer(); ?>

<?php /* Template Name: Advisors */  ?>

<?php get_header(); ?>

<?php if (have_posts()) : ?>
	<?php while (have_posts()) : the_post(); ?>

		<div class="advisors">

			<h1><?php the_title(); ?></h1>

			<div class="advisorgrid">

			<?php

				$thisid = $post->ID;

				$args = array(
					'post_type' => 'page',
					'post_parent' => $thisid,
					'order' => 'ASC',
					'orderby' => 'menu_order',
				);

				$the_query = new WP_Query($args);

			?>

			<?php if ( $the_query->have_posts() ) : ?>

				<?php while( $the_query->have_posts() ): $the_query->the_post(); ?>

					<div class="advisor"><a href="<?php the_permalink(); ?>" class="ajaxlink" data-postid="<?php echo $post->ID; ?>">

						<div class="portrait">
							<div class="ratio"></div>
							<div class="inner">
								<?php $photo = get_field('photo'); ?>
								<?php if ( $photo && $photo != '' ) : ?>
								  <?php echo spellerberg_get_image($photo); ?>
								<?php endif; ?>
							</div>
						</div>

						<?php $name = get_field('name'); ?>
						<?php if ( $name && $name != '' ) : ?>
							<h2><?php echo $name; ?></h2>
						<?php endif; ?>

						<?php $title = get_field('title'); ?>
						<?php if ( $title && $title != '' ) : ?>
						  <?php echo wpautop($title); ?>
						<?php endif; ?>

					</a></div>

				<?php endwhile; ?>

				<?php wp_reset_postdata(); ?>

			<?php endif; ?>

			</div>

		</div>

	<?php endwhile; ?>

<?php endif; ?>

<?php get_footer(); ?>

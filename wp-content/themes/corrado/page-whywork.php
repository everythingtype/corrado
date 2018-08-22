<?php /* Template Name: Why work with us? */  ?>

<?php get_header(); ?>

<?php if (have_posts()) : ?>

	<?php while (have_posts()) : the_post(); ?>

		<div class="whywork">

			<h1><?php the_title(); ?></h1>

			<figure class="svgimage whyworksvg"><?php echo get_template_part('images/svg/whywork.svg'); ?></figure>

			<?php if( have_rows('blocks') ): ?>

				<?php $i = 0; ?>

				<?php while ( have_rows('blocks') ) : the_row(); ?>

					<?php if( get_row_layout() == 'reason_block' ): ?>

						<div class="reason">

							<?php $i++ ?>
							<div class="counter"><?php echo $i; ?></div>

							<?php $headline = get_sub_field('headline'); ?>
							<?php if ( $headline && $headline != '' ) : ?>
								<h3><?php echo $headline; ?></h3>
							<?php endif; ?>

							<?php $paragraph = get_sub_field('paragraph'); ?>
							<?php if ( $paragraph && $paragraph != '' ) : ?>
								<?php echo wpautop($paragraph); ?>
							<?php endif; ?>

						</div>

					<?php endif; ?>

				<?php endwhile; ?>

			<?php endif; ?>

		</div>

		<?php echo get_template_part('parts/contactinclude'); ?>

	<?php endwhile; ?>

<?php endif; ?>

<?php get_footer(); ?>

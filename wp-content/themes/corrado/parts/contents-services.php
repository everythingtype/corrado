<?php if( have_rows('blocks') ): ?>

	<?php while ( have_rows('blocks') ) : the_row(); ?>

		<?php if( get_row_layout() == 'reason_block' ): ?>

			<?php $headline = get_sub_field('headline'); ?>
			<?php if ( $headline && $headline != '' ) : ?>
				<h3><?php echo $headline; ?></h3>
			<?php endif; ?>

			<?php $paragraph = get_sub_field('paragraph'); ?>
			<?php if ( $paragraph && $paragraph != '' ) : ?>
				<?php echo wpautop($paragraph); ?>
			<?php endif; ?>

		<?php endif; ?>

	<?php endwhile; ?>

<?php endif; ?>
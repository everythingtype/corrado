<?php /* Template Name: Contact Us */  ?>

<?php get_header(); ?>

<?php if (have_posts()) : ?>
	<?php while (have_posts()) : the_post(); ?>

		<div class="contactus">
			<div class="contactuspadding">

				<h1><?php the_title(); ?></h1>

				<?php if( have_rows('links') ): ?>
					<div class="links">
						<?php while ( have_rows('links') ) : the_row(); ?>
							<div class="link">

								<?php $heading = get_sub_field('heading'); ?>
								<?php if ( $heading && $heading != '' ) : ?>
									<h2><?php echo $heading; ?></h2>
								<?php endif; ?>

								<?php
									$link = get_sub_field('link', false, false);
									$label = get_sub_field('label');
								?>
								<?php if ( $link && $link != '' ) : ?>
									<p><a href="<?php echo get_the_permalink($link); ?>"><?php echo $label; ?></a></p>
								<?php endif; ?>

							</div>
						<?php endwhile; ?>
					</div>
				<?php endif; ?>

				<?php if( have_rows('locations') ): ?>

					<?php while ( have_rows('locations') ) : the_row(); ?>

						<div class="location">

							<?php $office_title = get_sub_field('office_title'); ?>

							<div class="address">

								<?php if ( $office_title && $office_title != '' ) : ?>
									<h2><?php echo $office_title; ?></h2>
								<?php endif; ?>

								<?php $address = get_sub_field('address'); ?>
								<?php if ( $address && $address != '' ) : ?>
									<?php echo wpautop($address); ?>
								<?php endif; ?>

							</div>

							<div class="map">
								<div class="ratio"></div>
								<?php $map = get_sub_field('map'); ?>
								<?php if ( $map == 'newyork' ) : ?>
									<div id="nymap" class="inner"></div>
								<?php elseif ( $map == 'newjersey' ) : ?>
									<div id="njmap" class="inner"></div>
								<?php endif; ?>
							</div>

						</div>

					<?php endwhile; ?>

				<?php endif; ?>

			</div>
		</div>

	<?php endwhile; ?>

<?php endif; ?>

<?php get_footer(); ?>

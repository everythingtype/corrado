<?php /* Template Name: Our Services */  ?>

<?php get_header(); ?>

<?php if (have_posts()) : ?>

	<?php while (have_posts()) : the_post(); ?>

		<div class="ourservices">

			<h1><?php the_title(); ?></h1>

			<div class="introimage">
				<figure class="svgimage services"><?php echo get_template_part('images/svg/services.svg'); ?></figure>
			</div>


			<?php $intro = get_field('intro'); ?>
			<?php if ( $intro && $intro != '' ) : ?>
				<div class="serviceintro"><?php echo wpautop($intro); ?></div>
			<?php endif; ?>

			<?php if( have_rows('services') ): ?>

				<?php while ( have_rows('services') ) : the_row(); ?>

					<div class="service">

						<?php $service_title = get_sub_field('service_title'); ?>
						<?php if ( $service_title && $service_title != '' ) : ?>
							<h2><?php echo $service_title; ?></h2>
						<?php endif; ?>

						<?php $service_subtitle = get_sub_field('service_subtitle'); ?>
						<?php if ( $service_subtitle && $service_subtitle != '' ) : ?>
							<?php echo wpautop($service_subtitle); ?>
						<?php endif; ?>

						<div class="fold"><div class="foldinner">

							<?php $service_image = get_sub_field('service_image'); ?>
							<?php if ( $service_image == 'wealth' ) : ?>
								<div class="services-wealth"><figure class="svgimage"><?php echo get_template_part('images/svg/services-wealth.svg'); ?></figure></div>
							<?php elseif ( $service_image == 'tax' ) : ?>
								<div class="services-tax"><figure class="svgimage"><?php echo get_template_part('images/svg/services-tax.svg'); ?></figure></div>
							<?php elseif ( $service_image == 'retirement' ) : ?>
								<div class="services-retirement"><figure class="svgimage"><?php echo get_template_part('images/svg/services-retirement.svg'); ?></figure></div>
							<?php elseif ( $service_image == 'family' ) : ?>
								<div class="services-family"><figure class="svgimage"><?php echo get_template_part('images/svg/services-family.svg'); ?></figure></div>
							<?php elseif ( $service_image == 'insurance' ) : ?>
								<div class="services-insurance"><figure class="svgimage"><?php echo get_template_part('images/svg/services-insurance.svg'); ?></figure></div>
							<?php elseif ( $service_image == 'business' ) : ?>
								<div class="services-business"><figure class="svgimage"><?php echo get_template_part('images/svg/services-business.svg'); ?></figure></div>
							<?php endif; ?>

							<?php $service_description = get_sub_field('service_description'); ?>
							<?php if ( $service_description && $service_description != '' ) : ?>
								<?php echo wpautop($service_description); ?>
							<?php endif; ?>

							<?php $case_studies = get_sub_field('case_studies'); ?>
							<?php if ( $case_studies ) : ?>

								<h3>Case studies</h3>

								<ul>
									<?php foreach( $case_studies as $post): setup_postdata($post); ?>
										<li><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></li>
									<?php endforeach; ?>
								</ul>

								<?php wp_reset_postdata(); ?>

							<?php endif; ?>

						</div></div>

						<button>
							<span class="expand"><?php echo get_template_part('images/expand'); ?></span>
							<span class="close"><?php echo get_template_part('images/close'); ?></span>
							<span class="screen-reader-text">Toggle</span>
						</button>

					</div>


				<?php endwhile; ?>


			<?php endif; ?>

		</div>

	<?php endwhile; ?>

<?php endif; ?>

<?php get_footer(); ?>

<?php /* Template Name: Client Forms */  ?>

<?php get_header(); ?>

<?php if (have_posts()) : ?>

	<?php while (have_posts()) : the_post(); ?>


		<div class="clientforms">

			<h1><?php the_title(); ?></h1>

			<?php if( have_rows('forms') ): ?>

				<?php while ( have_rows('forms') ) : the_row(); ?>

					<?php $form_download = get_sub_field('form_download'); ?>

					<?php if ( $form_download && $form_download != '' ) : ?>

						<div class="form">

							<div class="fileicon"><a href="<?php echo $form_download; ?>"><?php echo get_template_part('images/pdf'); ?></a></div>

							<?php $form_title = get_sub_field('form_title'); ?>
							<?php if ( $form_title && $form_title != '' ) : ?>
								<h2><?php echo $form_title; ?></h2>
							<?php endif; ?>

							<?php $form_description = get_sub_field('form_description'); ?>
							<?php if ( $form_description && $form_description != '' ) : ?>
								<?php echo wpautop($form_description); ?>
							<?php endif; ?>

							<p class="button"><a href="<?php echo $form_download; ?>" download>Download</a></p>

						</div>

					<?php endif; ?>

				<?php endwhile; ?>

			<?php endif; ?>

		</div>

	<?php endwhile; ?>

<?php endif; ?>

<?php get_footer(); ?>

<?php /* Template Name: Homepage Template */  ?>

<?php get_header(); ?>

<?php if (have_posts()) : ?>

	<?php while (have_posts()) : the_post(); ?>

		<div class="homepage">

			<h1>We are the <br />Corrado Financial Group</h1>

			<div class="homeintro">

				<figure class="svgimage home01 fillimage"><?php echo get_template_part('images/svg/home01.svg'); ?></figure>

				<p>We help our clients plan and chart their financial futures&mdash;so that they can live more fully in the present.</p>

				<div class="homegrey">

					<p>We began as an accounting firm. In the two decades since, we&rsquo;ve come to understand that many of our clients need more than someone to file their tax returns&mdash;they need advisors who understand the full scope of their financial lives.</p>

					<figure class="svgimage home02"><?php echo get_template_part('images/svg/home02.svg'); ?></figure>

					<p>They need guidance on their investment portfolio, help with planning for retirement, direction on writing their wills, their prenups, their insurances.</p>

					<figure class="svgimage home03"><?php echo get_template_part('images/svg/home03.svg'); ?></figure>

					<p>Our relationships-first approach to financial planning gives our clients the freedom to realize their brightest futures.</p>

					<figure class="svgimage home04"><?php echo get_template_part('images/svg/home04.svg'); ?></figure>

					<div class="bodybutton"><a href="/why-work-with-us/">Why Work With Us</a></div>

				</div>

			</div>

			<?php echo get_template_part('parts/contactinclude'); ?>

		</div>

<?php endwhile; ?>

<?php endif; ?>

<?php get_footer(); ?>

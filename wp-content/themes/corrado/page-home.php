<?php /* Template Name: Homepage Template */  ?>

<?php get_header(); ?>

<?php if (have_posts()) : ?>

	<?php while (have_posts()) : the_post(); ?>

		<div class="homepage">

			<h1>We are the <br />Corrado Financial Group.</h1>

			<div class="homeintro">

				<div class="tempimage"></div>

				<p>We help our clients plan and chart
				their financial futures—so they can live
				more fully in the present.</p>

				<div class="homegrey">

					<p>We began as an accounting firm.
					In the two decades since, we’ve come
					to understand that many of our clients
					needed more than someone to file
					their tax returns—they needed advisors
					who understand the full scope of their
					financial lives.</p>

					<div class="tempimage homeimage"></div>

					<p>They needed guidance on their investment
					portfolio, help with planning for
					retirement, direction on writing their
					wills, their pre-nups, their insurances.</p>

					<div class="tempimage homeimage"></div>

					<p>We’ve found that our relationships-first
					approach to financial planning gives
					our clients the freedom to realize their
					best selves. We help our clients plan
					for their financial future—so that they
					can live more fully in the present.</p>

					<div class="tempimage homeimage last"></div>

					<div class="bodybutton"><a href="/why-work-with-us/">Why Work With Us</a></div>

				</div>

			</div>

			<?php echo get_template_part('parts/contactinclude'); ?>

		</div>

<?php endwhile; ?>

<?php endif; ?>

<?php get_footer(); ?>

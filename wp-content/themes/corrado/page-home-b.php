<?php /* Template Name: Homepage B */  ?>

<?php get_header(); ?>

<?php if (have_posts()) : ?>

	<?php while (have_posts()) : the_post(); ?>

		<div class="homepage">

			<h1><span class="kern125">W</span>e are the <br />Corrado Financial Group</h1>

			<div class="homeintro">

				<figure class="svgimage homeb01 fillimage"><?php echo get_template_part('images/svg/home-b-01.svg'); ?></figure>

				<p>We help our clients plan and chart their financial futures&mdash;so that they can live more fully in the present.</p>

				<div class="homegrey">

					<div class="homegrid">
						<div class="cell cell01">
							<figure><?php echo get_template_part('images/svg/homegrid-g.svg'); ?></figure>
						</div>
						<div class="cell cell02">
							<figure><?php echo get_template_part('images/svg/homegrid-f.svg'); ?></figure>
						</div>

						<div class="cell cell03">
							<figure><?php echo get_template_part('images/svg/homegrid-e.svg'); ?></figure>
							<p>We began as an accounting firm. In the two decades since, we&rsquo;ve come to understand that many of our clients need more than someone to file their tax returns&mdash;they need advisors who understand the full scope of their financial lives.</p>
						</div>

						<div class="cell cell04">
							<figure><?php echo get_template_part('images/svg/homegrid-d.svg'); ?></figure>
						</div>

						<div class="cell cell05">
							<figure><?php echo get_template_part('images/svg/homegrid-c.svg'); ?></figure>
							<p>They need guidance on their investment portfolio, help with planning for retirement, direction on writing their wills, their prenups, their insurances.</p>
						</div>

						<div class="cell cell06">
							<figure><?php echo get_template_part('images/svg/homegrid-b.svg'); ?></figure>
						</div>

						<div class="cell cell07">
							<figure><?php echo get_template_part('images/svg/homegrid-a.svg'); ?></figure>
						</div>

						<div class="cell08">
							<p>Our relationships-first approach to financial planning gives our clients the freedom to realize their brightest futures.</p>
							<div class="bodybutton"><a href="/why-work-with-us/">Why Work With Us</a></div>
						</div>


				</div>

			</div>

			<?php echo get_template_part('parts/contactinclude'); ?>

		</div>

<?php endwhile; ?>

<?php endif; ?>

<?php get_footer(); ?>

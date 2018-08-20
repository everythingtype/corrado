</div>
</div>
</div><!-- pagebody, pagebodywrap, scrollingcontent -->

<div class="sitefooter">

	<?php echo get_template_part('parts/tips'); ?>

	<div class="footerwrap">
	<footer>

			<div class="column logocolumn">
				<?php echo get_template_part('images/corrado-monogram'); ?>
			</div>

			<div class="column addresscolumn">

				<h3>NY Office</h3>

				<address>25 W. 43rd Street #920<br />
				New York, NY 10036<br />
				<abbr title="Telephone">T</abbr>  <a href="tel:1-212-730-5444">212 730 5444</a><br />
				<abbr title="Fax">F</abbr>  <a href="tel:1-212-730-5450">212 730 5450</a></address>

			</div>

			<div class="column addresscolumn">

				<h3>NJ Office</h3>

				<address>48 S. Franklin Turnpike #300<br />
				Ramsey, NJ 07446<br />
				<abbr title="Telephone">T</abbr>  <a href="tel:1-201-661-6600">201 661 6600</a><br />
				<abbr title="Fax">F</abbr>  <a href="tel:1-201-661-6601">201 661 6601</a></address>

			</div>

			<div class="column copyrightcolumn">

				<p>&copy; <?php echo current_time( 'Y' ); ?> Corrado Financial Group.<br />
				All Rights Reserved.<br />
				<a class="underlined" href="/privacy-policy/">Privacy Policy</a> &nbsp; <a class="underlined" href="/disclosure/">Disclosure</p>

				<p><a href="http://etc-nyc.com" target="_blank">Site by ETC</a></p>

			</div>

	</footer>
	</div>

</div>


<?php get_template_part('parts/topnav'); ?>
<?php get_template_part('parts/lightbox'); ?>

<div class="blackbackground"></div>

<?php wp_footer(); ?>

</body>
</html>

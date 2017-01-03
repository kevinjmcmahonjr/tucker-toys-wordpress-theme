</main>
<footer class="site-footer">
	<section class="lead-capture">
    	<h3>Sign Up For E-mails</h3>
    	<p>Get all the latest on new toys and special offers from Tucker Toys!</p>
        <form>
        	<input type="email">
        	<input type="submit">
        </form>
    </section>
    <section class="footer-products">
    	<h3>Our Brands</h3>
        <?php
			$main_menu_parameters = array(
				'theme_location'	=> 'Footer Brands',
				'menu'				=> '',
				'container'			=> '',
				'container-class'	=> '',
				'container-id'		=> '',
				'menu-class'		=> '',
				'menu-id'			=> '',
				'echo'				=> false,
				'fallback_cb'		=> '',
				'before'			=> '',
				'after'				=> '',
				'before'			=> '',
				'link_before'		=> '',
				'link_after'		=> '',
				'items_wrap'		=> '<ul>%3$s</ul>',
				'depth'				=> 0,
				'walker'			=> ''
			);
			echo wp_nav_menu( $main_menu_parameters );
		?>
    </section>
    <section class="footer-navigation">
		<h3>Information</h3>
        <?php
			$main_menu_parameters = array(
				'theme_location'	=> 'Footer Information',
				'menu'				=> '',
				'container'			=> '',
				'container-class'	=> '',
				'container-id'		=> '',
				'menu-class'		=> '',
				'menu-id'			=> '',
				'echo'				=> false,
				'fallback_cb'		=> '',
				'before'			=> '',
				'after'				=> '',
				'before'			=> '',
				'link_before'		=> '',
				'link_after'		=> '',
				'items_wrap'		=> '<ul>%3$s</ul>',
				'depth'				=> 0,
				'walker'			=> ''
			);
			echo wp_nav_menu( $main_menu_parameters );
		?>
    </section>
    <section class="contact">
    	<h3>Contact Us</h3>
    	<p>Tucker International LLC<br>
		E-mail: <a href="mailto:info@tuckertoys.com">info@tuckertoys.com</a>
    </section>
</footer>
	<?php echo dslc_hf_get_footer(); ?>

	<?php wp_footer(); ?>

</body>
</html>
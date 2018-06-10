			<footer class="footer" role="contentinfo" itemscope itemtype="http://schema.org/WPFooter">

				<div id="inner__footer" class="wrap cf">
					<div class="col-xs-12 col-md-7 col-1">
						<nav role="navigation">
							<?php wp_nav_menu(array(
	    					'container' => 'div',                           // enter '' to remove nav container (just make sure .footer-links in _base.scss isn't wrapping)
	    					'container_class' => 'footer-links cf',         // class of container (should you choose to use it)
	    					'menu' => __( 'Footer Links', 'startertheme' ),   // nav name
	    					'menu_class' => 'nav footer-nav cf',            // adding custom nav class
	    					'theme_location' => 'footer-links',             // where it's located in the theme
	    					'before' => '',                                 // before the menu
	    					'after' => '',                                  // after the menu
	    					'link_before' => '',                            // before each link
	    					'link_after' => '',                             // after each link
	    					'depth' => 0,                                   // limit the depth of the nav
	    					'fallback_cb' => 'starter_footer_links_fallback'  // fallback function
							)); ?>
						</nav>
					</div>
					<div class="col-xs-12 col-md-4 col-2">
						<div class="social">
							<a href="#" class="social social__icon--container"><i class="fab fa-twitter"></i></a>
							<a href="#" class="social social__icon--container"><i class="fab fa-twitter"></i></a>
							<a href="#" class="social social__icon--container"><i class="fab fa-twitter"></i></a>
							<a href="#" class="social social__icon--container"><i class="fab fa-twitter"></i></a>
						</div>
					</div>
					<div class="contact--info col-xs-12">
						<div>
							<p>Business Name</p>
							<p>Business Address</p>
							<p><span>Business Phone#</span><span>Business Email</span></p>
						</div>
						<p class="source-org copyright">&copy; <?php echo date('Y'); ?> <?php bloginfo( 'name' ); ?>.</p>
					</div>

				</div>

			</footer>

		</div>

		<?php // all js scripts are loaded in library/starter.php ?>
		<?php wp_footer(); ?>

		<script defer src="https://use.fontawesome.com/releases/v5.0.4/js/all.js"></script>

	</body>

</html> <!-- end of site. what a ride! -->

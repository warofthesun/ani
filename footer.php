			<footer class="footer" role="contentinfo" itemscope itemtype="http://schema.org/WPFooter">

				<div id="inner__footer" class="">
					<div class="col-xs-12">
						<nav role="navigation">
							<?php wp_nav_menu(array(
	    					'container' => 'div',                           // enter '' to remove nav container (just make sure .footer-links in _base.scss isn't wrapping)
	    					'container_class' => 'footer-links ',         // class of container (should you choose to use it)
	    					'menu' => __( 'Footer Links', 'startertheme' ),   // nav name
	    					'menu_class' => 'nav footer-nav ',            // adding custom nav class
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
					<?php $custom_query = new WP_Query('pagename=footer');
					while($custom_query->have_posts()) : $custom_query->the_post(); ?>
					<div class="col-xs-12 col-md-8" style="margin:0 auto;text-align:center;"><?php the_field('disclaimer'); ?></div>
					<div class="contact--info col-xs-12 col-md-8">
						<?php the_field('address'); ?>
						<p class="source-org copyright">&copy; <?php echo date('Y'); ?> <?php bloginfo( 'name' ); ?>.</p>
					</div>
					<div class="col-xs-12 col-md-4 social">
						<?php

							// check if the repeater field has rows of data
							if( have_rows('social_platforms') ):

							 	// loop through the rows of data
							    while ( have_rows('social_platforms') ) : the_row();

							        // display a sub field value

											 ?>
											<a href="<?php the_sub_field('site_link'); ?>" class="social social__icon--container"><i class="fab fa-<?php the_sub_field('site_name'); ?>"></i></a>

											<?php  endwhile;

							else :

							    // no rows found

							endif;

							?>




					</div>
				</div>
				<?php endwhile; ?>
				<?php wp_reset_postdata(); // reset the query ?>
			</footer>

		</div>

		<?php // all js scripts are loaded in library/starter.php ?>
		<?php wp_footer(); ?>

		<script defer src="https://use.fontawesome.com/releases/v5.0.4/js/all.js"></script>

	</body>

</html> <!-- end of site. what a ride! -->

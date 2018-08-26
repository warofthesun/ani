				<div id="sidebar1" class="sidebar col-xs-12 col-sm-4 col-lg-3 " role="complementary">

					<?php if ( is_active_sidebar( 'community' ) ) : ?>

						<?php dynamic_sidebar( 'community' ); ?>

					<?php else : ?>

						<?php
							/*
							 * This content shows up if there are no widgets defined in the backend.
							*/
						?>

						<div class="no-widgets">
							<p><?php _e( 'This is the Community widget ready area. Add some and they will appear here.', 'startertheme' );  ?></p>
						</div>

					<?php endif; ?>

				</div>

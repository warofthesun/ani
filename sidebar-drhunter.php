				<div id="sidebar1" class="sidebar col-xs-12 col-sm-4 col-lg-3 " role="complementary">

					<?php if ( is_active_sidebar( 'drhunter' ) ) : ?>

						<?php dynamic_sidebar( 'drhunter' ); ?>

					<?php else : ?>

						<?php
							/*
							 * This content shows up if there are no widgets defined in the backend.
							*/
						?>

						<div class="no-widgets">
							<p><?php _e( 'This is a widget ready area. Add some and they will appear here.', 'startertheme' );  ?></p>
						</div>

					<?php endif; ?>

				</div>

<!--front page-->
<?php get_header(); ?>
			<section class="hero">
				<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
					<?php
							$attachment_id = get_field('hero_image');
							$size = "full"; // (thumbnail, medium, large, full or custom size)
							$image = wp_get_attachment_image_src( $attachment_id, $size );
							// url = $image[0];
							// width = $image[1];
							// height = $image[2];
						?>
				<div class="hero__image hero__image--full" style="background-image:url('<?php echo $image[0]; ?>')">
					<div class="hero__content hero__content--left wrap">
					<p><?php the_field('hero_title'); ?></p>
					</div>
				</div>
				<div class="hero__content">
					<div class="content-boxes wrap">
						<div class="col-xs-12 col-sm-3">
							<a href="#" class="content-boxes__header">
								<p>
									<?php the_field('box_one_title'); ?>
								</p>
							</a>
							<div class="content-boxes__content"><?php the_field('box_one_content'); ?></div>
						</div>
						<div class="col-xs-12 col-sm-3">
							<a href="#" class="content-boxes__header">
								<p>
									<?php the_field('box_two_title'); ?>
								</p>
							</a>
							<div class="content-boxes__content"><?php the_field('box_two_content'); ?></div>
						</div>
						<div class="col-xs-12 col-sm-3">
							<a href="#" class="content-boxes__header">
								<p>
									<?php the_field('box_three_title'); ?>
								</p>
							</a>
							<div class="content-boxes__content"><?php the_field('box_three_content'); ?></div>
						</div>
						<div class="col-xs-12 col-sm-3">
							<a href="#" class="content-boxes__header">
								<p>
									<?php the_field('box_four_title'); ?>
								</p>
							</a>
							<div class="content-boxes__content"><?php the_field('box_four_content'); ?></div>
						</div>
					</div>
				</div>
			</section>
			<section class="content--secondary">
				<div class="content-boxes wrap row">
					<div class="col-xs-12 col-sm-4">
						<div class="content-boxes__header">
							<p><?php the_field('secondary_box_one_title'); ?></p>
							<a href="#">See All</a>
						</div>
						<div class="content-boxes__content"><?php the_field('secondary_box_one_content'); ?></div>
					</div>
					<div class="col-xs-12 col-sm-4">
						<div class="content-boxes__header">
							<p><?php the_field('secondary_box_two_title'); ?></p>
							<a href="#">See All</a>
						</div>
						<div class="content-boxes__content"><?php the_field('secondary_box_two_content'); ?></div>
					</div>
					<div class="col-xs-12 col-sm-4">
						<div class="content-boxes__header">
							<p><?php the_field('secondary_box_three_title'); ?></p>
							<a href="#">See All</a>
						</div>
						<div class="content-boxes__content"><?php the_field('secondary_box_three_content'); ?></div>
					</div>
				</div>
			</section>
			<section class="content__full-width content__full-width--lt-blue content__full-width--centered">
				<div class="wrap">
					<h1><?php the_field('about_title'); ?></h2>
					<?php the_field('about_content'); ?>
				</div>
			</section>

			<section class="content staff wrap row">
				<h1 class="col-xs-12">Our Staff</h1>
				<?php $custom_query = new WP_Query('pagename=our-staff');
				while($custom_query->have_posts()) : $custom_query->the_post(); ?>

				<?php
				// check if the repeater field has rows of data
				if( have_rows('staff') ):
					$i=0;
					// loop through the rows of data
						while ( have_rows('staff') ) : the_row(); ?>

						<?php
							 $attachment_id = get_sub_field('photo');
							 $size = "staff-image"; // (thumbnail, medium, large, full or custom size)
							 $image = wp_get_attachment_image_src( $attachment_id, $size );
							 // url = $image[0];
							 // width = $image[1];
							 // height = $image[2];
						 ?>
						 <?php //UNCOMMENT TO LIMIT NUMBER SHOWN ON HOMEPAGE if ( $i > 2 ) { break; } ?>
								<div class="col-xs-12 col-sm-4" style="background-image:url('<?php echo $image[0]; ?>')">
									<div>
										<div class="staff__name"><span class="highlight highlight--wrapping"><?php the_sub_field('first_name'); ?></br><?php the_sub_field('last_name'); ?></span></div>
										<div class="staff__role"><span class="highlight highlight--wrapping"><?php the_sub_field('role'); ?></span></div>
										<div class="staff__qualifications"><span class="highlight highlight--wrapping"><?php the_sub_field('qualifications'); ?></span></div>
									</div>
								</div>
							<?php $i++; ?>
						<?php endwhile;
				else :
						// no rows found
				endif;endwhile;
				?>

			<?php wp_reset_postdata(); // reset the query ?>
				<!--a href="/our-staff" class="col-xs-12" style="text-align:right;">See All</a-->
			</section>
			<section class="content content__full-width content__full-width--centered">
				<div class="wrap recent-news">
					<h1>Recent News</h2>
					<div class="flex-direction flex-direction--row">
					<div class="col-xs-12 col-sm-2 col-md-3">
						<div class="recent-news__category">Category</div>
						<img src="https://picsum.photos/300" />
						<div class="recent-news__title">Post Title</div>
						<div class="recent-news__date">Oct. 15</div>
						<p>Bitly blyve oovoo zynga whrrl, hojoki plugg grockit wikia…</p>
					</div>
					<div class="col-xs-12 col-sm-2 col-md-3">
						<div class="recent-news__category">Category</div>
						<img src="https://picsum.photos/400" />
						<div class="recent-news__title">Post Title</div>
						<div class="recent-news__date">Oct. 15</div>
						<p>Bitly blyve oovoo zynga whrrl, hojoki plugg grockit wikia…</p>
					</div>
					<div class="col-xs-12 col-sm-2 col-md-3">
						<div class="recent-news__category">Category</div>
						<img src="https://picsum.photos/350" />
						<div class="recent-news__title">Post Title</div>
						<div class="recent-news__date">Oct. 15</div>
						<p>Bitly blyve oovoo zynga whrrl, hojoki plugg grockit wikia…</p>
					</div>
					<div class="col-xs-12 col-sm-2 col-md-3">
						<div class="recent-news__category">Category</div>
						<img src="https://picsum.photos/450" />
						<div class="recent-news__title">Post Title</div>
						<div class="recent-news__date">Oct. 15</div>
						<p>Bitly blyve oovoo zynga whrrl, hojoki plugg grockit wikia…</p>
					</div>
					</div>
				</div>
			</section>
			<section class="content content__full-width content__full-width--dk-blue collapse--bottom">
				<div class="contact wrap">
					<h1 class="col-xs-12 ">Contact Us</h1>
					<div class="flex-direction flex-direction--row">

							<p class="col-xs-12 col-md-5 collapse--top">
								Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras quis ipsum suscipit, dignissim libero id, varius ligula. Integer sem nunc, tristique eu cursus at, posuere at enim. Pellentesque tristique molestie condimentum. Nam venenatis tincidunt enim eget semper. Nulla non ante vitae felis molestie sodales. Mauris quis risus sed neque scelerisque aliquam et ac metus. Duis egestas ligula eu odio interdum tempus. Maecenas varius mauris libero, sed lacinia magna maximus nec.
							</p>

						<div class="col-xs-12 col-md-7" style="margin-top:-1em;">

								<?php the_content(); ?>
							<?php endwhile; endif; ?>
						</div>
					</div>
				</div>
			</section>



<?php get_footer(); ?>

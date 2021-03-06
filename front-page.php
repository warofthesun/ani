<!--front page-->
<?php get_header('front'); ?>
			<section class="hero row reveal">
				<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
					<?php
							$attachment_id = get_field('hero_image');
							$size = "full"; // (thumbnail, medium, large, full or custom size)
							$image = wp_get_attachment_image_src( $attachment_id, $size );
							// url = $image[0];
							// width = $image[1];
							// height = $image[2];
						?>
				<div class="hero__image hero__image--full" style="background-image:url('<?php echo $image[0]; ?>');"></div>
					<div class="hero__content hero__content--left wrap">
					<p><?php the_field('hero_title'); ?></p>
					</div>

				<div class="hero__content">
					<div class="content-boxes wrap">
						<div class="col-xs-12 col-sm-3">
							<a href="<?php the_field('box_one_link'); ?>" class="content-boxes__header">
								<p>
									<?php the_field('box_one_title'); ?>
								</p>
							</a>
							<div class="content-boxes__content"><?php the_field('box_one_content'); ?></div>
						</div>
						<div class="col-xs-12 col-sm-3">
							<a href="<?php the_field('box_two_link'); ?>" class="content-boxes__header">
								<p>
									<?php the_field('box_two_title'); ?>
								</p>
							</a>
							<div class="content-boxes__content"><?php the_field('box_two_content'); ?></div>
						</div>
						<div class="col-xs-12 col-sm-3">
							<a href="<?php the_field('box_three_link'); ?>" class="content-boxes__header">
								<p>
									<?php the_field('box_three_title'); ?>
								</p>
							</a>
							<div class="content-boxes__content"><?php the_field('box_three_content'); ?></div>
						</div>
						<div class="col-xs-12 col-sm-3">
							<a href="<?php the_field('box_four_link'); ?>" class="content-boxes__header">
								<p>
									<?php the_field('box_four_title'); ?>
								</p>
							</a>
							<div class="content-boxes__content"><?php the_field('box_four_content'); ?></div>
						</div>
					</div>
				</div>
			</section>
			<section class="content--secondary reveal">
				<div class="content-boxes wrap row">
					<div class="col-xs-12 col-sm-4">
						<div class="content-boxes__header">
							<p><?php the_field('secondary_box_one_title'); ?></p>
							<a href="<?php the_field('secondary_box_one_link'); ?>"><?php the_field('secondary_box_one_link_text'); ?></a>
						</div>
						<div class="content-boxes__content"><?php the_field('secondary_box_one_content'); ?></div>
					</div>
					<div class="col-xs-12 col-sm-4">
						<div class="content-boxes__header">
							<p><?php the_field('secondary_box_two_title'); ?></p>
							<a href="<?php the_field('secondary_box_two_link'); ?>"><?php the_field('secondary_box_two_link_text'); ?></a>
						</div>
						<div class="content-boxes__content"><?php the_field('secondary_box_two_content'); ?></div>
					</div>
					<div class="col-xs-12 col-sm-4">
						<div class="content-boxes__header">
							<p><?php the_field('secondary_box_three_title'); ?></p>
							<a href="<?php the_field('secondary_box_three_link'); ?>"><?php the_field('secondary_box_three_link_text'); ?></a>
						</div>
						<div class="content-boxes__content"><?php the_field('secondary_box_three_content'); ?></div>
					</div>
				</div>
			</section>
			<section class="content__full-width content__full-width--lt-blue content__full-width--centered reveal">
				<a name="about"></a>
				<div class="wrap">
					<h1><?php the_field('about_title'); ?></h2>
					<?php the_field('about_content'); ?>
				</div>
			</section>

			<?php include 'partials/clinic-staff.php'; ?>
				<!--a href="/clinic-staff" class="col-xs-12 see-all">See All</a-->

			<?php wp_reset_postdata(); // reset the query ?>
			</section>
			<section class="content content__full-width content__full-width--centered reveal">
				<div class="wrap recent-news">
					<h1>Latest News</h2>
					<div class="flex-direction flex-direction--row">
						<?php $query = new WP_Query( array(
						    'posts_per_page' => 4,
						    'no_found_rows'  => true,
						    'tag'            => 'Featured'
						) );

						if ( $query->have_posts() ) : while ( $query->have_posts() ) : $query->the_post(); ?>
						<div class="col-xs-12 col-sm-2 col-md-3">
							<div class="recent-news__category"><?php $category = get_the_category(); echo '<a class="category" href="'.get_category_link($category[0]->term_id ).'">'.$category[0]->cat_name.'</a>'; ?></div>
							<a href="<?php the_permalink(); ?>"><?php the_post_thumbnail('square'); ?></a>
							<div class="recent-news__title"><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></div>
							<!--div class="recent-news__date"><?php //the_date(); ?></div-->
							<p>
								<?php
								$content = get_the_excerpt();
								echo wp_trim_words( $content , '10' );
								?>
							</p>
						</div>
					<?php	endwhile; endif;?>
					<a href="/recent-news" class="col-xs-12 see-all">See All</a>
					<?php wp_reset_postdata(); // reset the query ?>
					<a name="contact"></a>
					</div>
				</div>
			</section>
			<section class="content content__full-width content__full-width--dk-blue collapse--bottom reveal">
				<div class="contact wrap">
					<h1 class="col-xs-12 ">Contact Us</h1>
					<div class="flex-direction flex-direction--row">

							<div class="col-xs-12 col-md-5 collapse--top">
								<?php the_field('contact_text'); ?>
							</div>

						<div class="col-xs-12 col-md-7" style="margin-top:-1em;">

								<?php the_field('contact_form'); ?>
							<?php endwhile; endif; ?>
						</div>
					</div>
				</div>
			</section>



<?php get_footer(); ?>

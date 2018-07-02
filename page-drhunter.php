<!--front page-->
<?php get_header('front'); ?>
			<section class="hero row">
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
					<div class="hero__content hero__content--left hero__content--medium wrap">
					<p class="highlight highlight--wrapping"><?php the_field('hero_title'); ?></p>
					</div>

				<div class="hero__content hero__content--single">
					<div class="content-boxes wrap">
						<div class="col-xs-12">
							<div class="content-boxes__content"><?php the_field('bio'); ?></div>
						</div>
					</div>
				</div>
			</section>
			<?php if(get_field('include_events')) : ?>
			<section class="content--secondary">
				<div class="content-boxes wrap row">
					<div class="col-xs-12" style="border-radius:0px;">
						<div class="content-boxes__header">
							<p><?php the_field('secondary_box_one_title'); ?></p>
							<?php if(get_field('secondary_box_one_link')) : ?>
								<a href="<?php the_field('secondary_box_one_link'); ?>"><?php the_field('secondary_box_one_link_text'); ?></a>
							<?php endif; ?>
						</div>
						<div class="content-boxes__content content-boxes__content--white"><?php the_field('secondary_box_one_content'); ?></div>
					</div>
				</div>
			</section>
		<?php endif; ?>
			<section class="content__full-width content__full-width--lt-blue content__full-width--centered">
				<div class="wrap">
					<h1><?php the_field('about_title'); ?></h2>
					<?php the_field('about_content'); ?>
				</div>
			</section>

			<section class="content content__full-width content__full-width--centered">
				<div class="wrap recent-news">
					<h1>Latest News</h2>
					<div class="flex-direction flex-direction--row">
						<?php $query = new WP_Query( array(
						    'posts_per_page' => 4,
						    'no_found_rows'  => true,
						    'category_name'            => 'drhunter'
						) );

						if ( $query->have_posts() ) : while ( $query->have_posts() ) : $query->the_post(); ?>
						<div class="col-xs-12 col-sm-2 col-md-3">
							<a href="<?php the_permalink(); ?>"><?php the_post_thumbnail('square'); ?></a>
							<div class="recent-news__title"><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></div>
							<p>
								<?php
								$content = get_the_excerpt();
								echo wp_trim_words( $content , '10' );
								?>
							</p>
						</div>
					<?php	endwhile; endif;?>
					<a href="/drhunter/blog" class="col-xs-12 see-all">See All</a>
					<?php wp_reset_postdata(); // reset the query ?>
					<a name="contact"></a>
					</div>
				</div>
			</section>
			<section class="content content__full-width content__full-width--dk-blue collapse--bottom">
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

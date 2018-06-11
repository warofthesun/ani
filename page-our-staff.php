<!--page-our-staff-->
<?php get_header(); ?>

			<div id="content">
				<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
					<header class="article article__header wrap">


						<h1 class="page-title <?php echo sanitize_title_with_dashes(get_the_title()); ?>" itemprop="headline"><?php the_title(); ?></h1>

					</header>
				<div id="inner__content">

					<section class="content staff wrap row">
						<?php
						// check if the repeater field has rows of data
						if( have_rows('staff') ):
						 	// loop through the rows of data
						    while ( have_rows('staff') ) : the_row(); ?>
								<?php
									 $attachment_id = get_sub_field('photo');
									 $size = "full"; // (thumbnail, medium, large, full or custom size)
									 $image = wp_get_attachment_image_src( $attachment_id, $size );
									 // url = $image[0];
									 // width = $image[1];
									 // height = $image[2];
								 ?>
										<div class="col-xs-12 col-sm-4" style="background-image:url('<?php echo $image[0]; ?>')">
											<div>
												<div class="staff__name"><?php the_sub_field('name'); ?></div>
												<div class="staff__role"><?php the_sub_field('role'); ?></div>
												<div class="staff__qualifications"><?php the_sub_field('qualifications'); ?></div>
											</div>
										</div>

						    <?php endwhile;
						else :
						    // no rows found
						endif;
						?>

					</section>

				</div>

				<?php endwhile; endif; ?>

			</div>

<?php get_footer(); ?>

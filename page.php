<!--page-->
<?php get_header(); ?>

			<div id="content" class="row">
				<div class="wrap row">
				<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
					<?php if( get_field('number_of_columns') == 'two' ): ?>
					<div id="inner__content" class="row col-xs-12 col-md-6">
						<?php else : ?>
					<div id="inner__content" class="wrap row">
						<?php endif; ?>
					<?php if ( is_page('clinic-staff') ) { ?>
					 <main id="main" class="col-xs-12 " role="main" itemscope itemprop="mainContentOfPage" itemtype="http://schema.org/Blog">
					<? } else { ?>
					 <main id="main" class="col-xs-12 col-sm-10" role="main" itemscope itemprop="mainContentOfPage" itemtype="http://schema.org/Blog">
					<?php } ?>


							<article id="post-<?php the_ID(); ?>" <?php post_class( '' ); ?> role="article" itemscope itemtype="http://schema.org/BlogPosting">


								<section class="entry__content " itemprop="articleBody">

									<?php if ( is_page('clinic-staff') ) { ?>
										<?php include 'partials/clinic-staff.php'; }
										elseif ( is_page('info') ) {
										include 'partials/info.php';
										} else {
									 the_content();
									}
									?>

								</section> <?php // end article section ?>

							</article>

						</main>

				</div>
				<?php if( get_field('number_of_columns') == 'two' ): ?>
				<div id="inner__content--right" class="col-xs-12 col-md-6">
					<?php the_field('column_two_content'); ?>
				</div>
				<?php endif; ?>
				</div>
				<?php if ( get_field( 'include_bottom_section_tf' ) ): include 'partials/bottom-section.php'; ?>
				<?php else: endif; ?>

				<?php endwhile; endif; ?>

			</div>

<?php get_footer(); ?>

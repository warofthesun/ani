<!--page-->
<?php get_header(); ?>

			<div id="content">
				<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
					<header class="article article__header wrap">


						<h1 class="page-title <?php echo sanitize_title_with_dashes(get_the_title()); ?>" itemprop="headline"><?php the_title(); ?></h1>

					</header>
				<div id="inner__content" class="wrap cf row">

						<main id="main" class="col-xs-12 cf" role="main" itemscope itemprop="mainContentOfPage" itemtype="http://schema.org/Blog">



							<article id="post-<?php the_ID(); ?>" <?php post_class( 'cf' ); ?> role="article" itemscope itemtype="http://schema.org/BlogPosting">



								<section class="entry__content cf" itemprop="articleBody">

									<?php the_content(); ?>

								</section> <?php // end article section ?>



								<?php comments_template(); ?>

							</article>


						</main>

				</div>
				<?php if ( get_field( 'include_bottom_section_tf' ) ): ?>
				<section class="content__full-width content__full-width--lt-blue content__full-width--centered <?php echo sanitize_title_with_dashes(get_the_title()); ?>">
					<div class="wrap">
						<h1><?php the_field('lower_section_title'); ?></h1>
						<?php if( get_field('which_page_is_this_for') == 'making_an_appointment' ): ?>
						<ul class="row">
							<?php if( have_rows('document_library') ): while ( have_rows('document_library') ) : the_row(); ?>
							<li class="col-xs-12 col-sm-6">
								<a href="<?php the_sub_field('link_to_form'); ?>">
									<h4><?php the_sub_field('title_of_form'); ?></h4>
									<p>
										<?php the_sub_field('brief_description'); ?>
									</p>
								</a>
							</li>
						<?php endwhile; endif; ?>
						</ul>
					<?php elseif( get_field('which_page_is_this_for') == 'directions' ): ?>
						<?php the_field('maps'); ?>
					<?php else: endif; ?>
					</div>
				</section>
			<?php else: ?>
			<?php endif; ?>

				<?php endwhile; endif; ?>

			</div>

<?php get_footer(); ?>

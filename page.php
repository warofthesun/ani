<!--page-->
<?php get_header(); ?>

			<div id="content">
				<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
					<header class="article article__header wrap">


						<h1 class="page-title <?php echo sanitize_title_with_dashes(get_the_title()); ?>" itemprop="headline"><?php the_title(); ?></h1>

					</header>
				<div id="inner__content" class="wrap cf row">

						<main id="main" class="col-xs-12 col-sm-10 cf" role="main" itemscope itemprop="mainContentOfPage" itemtype="http://schema.org/Blog" style="margin:0 auto;">



							<article id="post-<?php the_ID(); ?>" <?php post_class( 'cf' ); ?> role="article" itemscope itemtype="http://schema.org/BlogPosting">


								<section class="entry__content cf" itemprop="articleBody">

									<?php the_content(); ?>

								</section> <?php // end article section ?>

							</article>

						</main>

				</div>
				<?php if ( get_field( 'include_bottom_section_tf' ) ): ?>
				<section class="content__full-width content__full-width--lt-blue content__full-width--centered <?php echo sanitize_title_with_dashes(get_the_title()); ?>">
					<div class="wrap">
						<h1><?php the_field('lower_section_title'); ?></h1>
						<?php if( get_field('which_page_is_this_for') == 'making_an_appointment' ): ?>
						  <?php if( get_field('columns') == 'one' ): ?>
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
						  <?php elseif( get_field('columns') == 'two' ): ?>
						    <div class="row">
						      <div class="col-xs-12 col-sm-6">
						        <h2><?php the_field('column_one_header'); ?></h2>
										<ul class="row">
								      <?php if( have_rows('document_library') ): while ( have_rows('document_library') ) : the_row(); ?>
								      <li class="col-xs-12">
								        <a href="<?php the_sub_field('link_to_form'); ?>">
								          <h4><?php the_sub_field('title_of_form'); ?></h4>
								          <p>
								            <?php the_sub_field('brief_description'); ?>
								          </p>
								        </a>
								      </li>
								    <?php endwhile; endif; ?>
								    </ul>
						      </div>
						      <div class="col-xs-12 col-sm-6">
						        <h2><?php the_field('column_two_header'); ?></h2>
										<ul class="row">
								      <?php if( have_rows('document_library_column_two') ): while ( have_rows('document_library_column_two') ) : the_row(); ?>
								      <li class="col-xs-12">
								        <a href="<?php the_sub_field('link_to_form'); ?>">
								          <h4><?php the_sub_field('title_of_form'); ?></h4>
								          <p>
								            <?php the_sub_field('brief_description'); ?>
								          </p>
								        </a>
								      </li>
								    <?php endwhile; endif; ?>
								    </ul>
						      </div>
						    </div>
						  <?php endif; ?>
						<?php elseif( get_field('which_page_is_this_for') == 'other' ): ?>
							<?php if( get_field('columns') == 'one' ): ?>
						  <?php the_field('content'); ?>
						<?php elseif( get_field('columns') == 'two' ): ?>
							<div class="row">
								<div class="col-xs-12 col-sm-6"><h2><?php the_field('column_one_header'); ?></h2><?php the_field('content'); ?></div>
								<div class="col-xs-12 col-sm-6"><h2><?php the_field('column_two_header'); ?></h2><?php the_field('content_right'); ?></div>
							</div>
						<?php endif; ?>
						<?php else: endif; ?>

					</div>
				</section>
			<?php else: ?>
			<?php endif; ?>

				<?php endwhile; endif; ?>

			</div>

<?php get_footer(); ?>

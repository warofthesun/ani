<!--page-community-engagement-->
<?php get_header(); ?>

			<div id="content">
				<div class="wrap row">
				<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

					<div id="inner__content" class="wrap row">


					 <main id="main" class="col-xs-12 col-sm-10" role="main" itemscope itemprop="mainContentOfPage" itemtype="http://schema.org/Blog">



							<article id="post-<?php the_ID(); ?>" <?php post_class( '' ); ?> role="article" itemscope itemtype="http://schema.org/BlogPosting">


								<section class="entry__content " itemprop="articleBody">

									<?php the_content(); ?>

									<?php
									if( have_rows('community_engagement') ): while ( have_rows('community_engagement') ) : the_row();

										// check if the repeater field has rows of data
											if( get_row_layout() == 'faqs' ): ?>
											<?php if( have_rows('faq_repeater') ): while ( have_rows('faq_repeater') ) : the_row(); ?>
										     <div id="faq_container">

													<div class="faq">

														<div class="faq_question">
															<span class="question"><?php the_sub_field('question') ?></span>
															<span class="accordion-button-icon fa fa-plus"></span>
														</div>
															<div class="faq_answer_container">
																<div class="faq_answer"><span> <?php the_sub_field('answer') ?></span></div>
															</div>

													</div>

												     </div>
														 <?php  endwhile; endif; endif; ?>

											 <?php if( get_row_layout() == 'section_header_flex' ): ?>
												 <h2><?php the_sub_field('section_header'); ?></h2>
											 <?php endif; ?>

											    <?php  endwhile; endif;  ?>

								</section> <?php // end article section ?>

							</article>

						</main>

				</div>

				</div>


				<?php endwhile; endif; ?>

			</div>

<?php get_footer(); ?>

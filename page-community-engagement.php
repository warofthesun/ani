<!--page-community-engagement-->
<?php get_header(); ?>

			<div id="content">
				<div class="wrap row">
				<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

					<div id="inner__content" class="wrap row">

					 <main id="main" class="col-xs-12" role="main" itemscope itemprop="mainContentOfPage" itemtype="http://schema.org/Blog">

							<article id="post-<?php the_ID(); ?>" <?php post_class( '' ); ?> role="article" itemscope itemtype="http://schema.org/BlogPosting">
								<section class="content">
									<div class="wrap recent-news">
										<a name="<?php $page_link = sanitize_title_for_query( get_field('section_header') ); echo esc_attr( $page_link ); ?>"></a>
										<h2><?php the_field('section_header'); ?></h2>
										<div>
											<?php the_field('content_area'); ?>
										</div>
										<div class="flex-direction flex-direction--row">
											<?php $query = new WP_Query( array(
											    'posts_per_page' => 4,
											    'no_found_rows'  => true,
											    'category_name'  => 'community-engagement'
											) );

											if ( $query->have_posts() ) : while ( $query->have_posts() ) : $query->the_post(); ?>
											<div class="col-xs-12 col-sm-6">
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
										<a href="/community-engagement/blog" class="col-xs-12 see-all">See All</a>
										<?php wp_reset_postdata(); // reset the query ?>
										</div>
									</div>
								</section>

								<section class="entry__content " itemprop="articleBody">



									<?php
									if( have_rows('community_engagement') ): while ( have_rows('community_engagement') ) : the_row();

										// check if the repeater field has rows of data
											if( get_row_layout() == 'faqs' ): ?>
											<section>
											<a name="<?php $page_link = sanitize_title_for_query( get_sub_field('section_header') ); echo esc_attr( $page_link ); ?>"></a>
											<h2><?php the_sub_field('section_header'); ?></h2>
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
														 </section>
														 <?php  endwhile; endif; endif; ?>

														 <?php // check if the repeater field has rows of data
				 											if( get_row_layout() == 'medications' ): ?>
				 											<section>
						 											<a name="<?php $page_link = sanitize_title_for_query( get_sub_field('section_header') ); echo esc_attr( $page_link ); ?>"></a>
						 											<h2><?php the_sub_field('section_header'); ?></h2>
																	<div class="row medications">
							 											<?php if( have_rows('medications_repeater') ): while ( have_rows('medications_repeater') ) : the_row(); ?>
																			<div class="col-xs-4 col-sm-3">
					 										     			<h3><?php the_sub_field('medication') ?></h3><?php the_sub_field('details') ?>
																			</div>
																		<?php endwhile; endif; ?>
																 	</div>
 														 	</section>
				 														 <?php endif; ?>

											 <?php if( get_row_layout() == 'section_header_flex' ): ?>
												 <section>
													 <a name="<?php $page_link = sanitize_title_for_query( get_sub_field('section_header') ); echo esc_attr( $page_link ); ?>"></a>
								           <h2><?php the_sub_field('section_header'); ?></h2>
												 </section>
											 <?php endif; ?>

											 <?php if( get_row_layout() == 'content_area_flex' ): ?>
												 <section>
												 <a name="<?php $page_link = sanitize_title_for_query( get_sub_field('section_header') ); echo esc_attr( $page_link ); ?>"></a>
							           <h2><?php the_sub_field('section_header'); ?></h2>
												 <?php the_sub_field('content_area'); ?>
												 </section>
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

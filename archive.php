<!--archive-->
<?php get_header(); ?>

			<div id="content">

				<div id="inner-content" class="wrap row">

						<main id="main" class="col-xs-12 col-sm-8 col-lg-9 " role="main" itemscope itemprop="mainContentOfPage" itemtype="http://schema.org/Blog">

							<?php
							//the_archive_title( '<h1 class="page-title">', '</h1>' );
							the_archive_description( '<div class="taxonomy-description">', '</div>' );
							?>


							<ul class="row articles__secondary">
								<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
									<li class="col-xs-12 col-md-6">
										<article id="post-<?php the_ID(); ?>" <?php post_class( ' single-post' ); ?> role="article">

											<header class="post post__header">

												<p class="category">
													<?php //use the id number of Featured category to remove the word "Featured" from title ?>
													<?php exclude_post_categories("8"); ?>
												</p>

												<?php the_post_thumbnail('featured-half'); ?>

												<h1 class="h2 entry-title"><a href="<?php the_permalink() ?>" rel="bookmark" title="<?php the_title_attribute(); ?>"><?php the_title(); ?></a></h1>
												<p class="byline entry-meta vcard">
													<?php printf( '<p class="byline entry-meta vcard">' . __( '', 'startertheme' ).' %1$s', '<time class="updated entry-time" datetime="' . get_the_time('Y-m-d') . '" itemprop="datePublished">' . get_the_time(get_option('date_format')) . '</time></p>'); ?>
												</p>

											</header>

											<section class="entry-content">
												<?php
												$content = get_the_excerpt();
												echo wp_trim_words( $content , '10' );
												?>
												<a href="<?php the_permalink() ?>" class="read-more">Read more &raquo;</a>
											</section>

										</article>
									</li>
								<?php endwhile; ?>
							</ul>



									<?php starter_page_navi(); ?>

							<?php else : ?>

									<article id="post-not-found" class="hentry ">
										<header class="article-header">
											<h1><?php _e( 'Oops, Post Not Found!', 'startertheme' ); ?></h1>
										</header>
										<section class="entry-content">
											<p><?php _e( 'Uh Oh. Something is missing. Try double checking things.', 'startertheme' ); ?></p>
										</section>
										<footer class="article-footer">
												<p><?php _e( 'This is the error message in the archive.php template.', 'startertheme' ); ?></p>
										</footer>
									</article>

							<?php endif; ?>

						</main>

					<?php get_sidebar(); ?>

				</div>

			</div>

<?php get_footer(); ?>

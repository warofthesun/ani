<!--single-->
<?php get_header(); ?>

			<div id="content">

				<div id="inner-content" class="wrap cf row">

					<main id="main" class="col-xs-12 col-sm-8 col-lg-9 cf" role="main" itemscope itemprop="mainContentOfPage" itemtype="http://schema.org/Blog">

						<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

							<article id="post-<?php the_ID(); ?>" <?php post_class('cf'); ?> role="article" itemscope itemprop="blogPost" itemtype="http://schema.org/BlogPosting">

								<header class="post post__header">
									<div class="row">
										<h1 class="h2 entry-title col-xs-12 col-md-8"><a href="<?php the_permalink() ?>" rel="bookmark" title="<?php the_title_attribute(); ?>"><?php the_title(); ?></a></h1>
										<div class="col-xs-12 col-md-4 article-info">
											<?php printf( '<p class="byline entry-meta vcard">' . __( '', 'startertheme' ).' %1$s', '<time class="updated entry-time" datetime="' . get_the_time('Y-m-d') . '" itemprop="datePublished">' . get_the_time(get_option('date_format')) . '</time></p>'); ?>
											<?php printf( '<p class="category">' . __('', 'startertheme' ) . '%1$s</p>' , get_the_category_list(', ') ); ?>
										</div>
									</div>
									<?php the_post_thumbnail('featured-image'); ?>
								</header>

                <section class="entry-content cf" itemprop="articleBody">
                  <?php the_content();   ?>
                </section> <?php // end article section ?>



                <footer class="article-footer">

                  <?php //printf( __( 'filed under', 'startertheme' ).': %1$s', get_the_category_list(', ') ); ?>

                  <?php //the_tags( '<p class="tags"><span class="tags-title">' . __( 'Tags:', 'startertheme' ) . '</span> ', ', ', '</p>' ); ?>

                </footer> <?php // end article footer ?>

                <?php //comments_template(); ?>

              </article> <?php // end article ?>

						<?php endwhile; ?>

						<?php else : ?>

							<article id="post-not-found" class="hentry cf">
									<header class="article-header">
										<h1><?php _e( 'Post Not Found.', 'startertheme' ); ?></h1>
									</header>
									<section class="entry-content">
										<p><?php _e( 'Uh Oh. Something is missing. Try double checking things.', 'startertheme' ); ?></p>
									</section>
									<footer class="article-footer">
											<p><?php _e( '', 'startertheme' ); ?></p>
									</footer>
							</article>

						<?php endif; ?>

					</main>

					<?php get_sidebar(); ?>

				</div>

			</div>

<?php get_footer(); ?>

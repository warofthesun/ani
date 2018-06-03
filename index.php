<!--index-->
<?php get_header(); ?>

			<div id="content">
				<header class="article article__header wrap">

						<?php if ( is_front_page() && is_home() ) {
							  // Default homepage
							} elseif ( is_front_page() ) {
							  // static homepage
							} elseif ( is_home() ) { ?>
							<?php	$page_title = get_the_title( get_option('page_for_posts', true) ); ?>
							<h1 class="page-title blog-page" itemprop="headline"><?php echo $page_title; ?></h1>
						<?php	} else { ?>
							  <h1 class="page-title <?php echo sanitize_title_with_dashes(get_the_title()); ?>" itemprop="headline"><?php echo $page_title; ?></h1>
								<?php
							}
						?>

				</header>
				<div id="inner-content" class="wrap cf row">

						<main id="main" class="col-xs-12 col-sm-8 col-lg-9 cf" role="main" itemscope itemprop="mainContentOfPage" itemtype="http://schema.org/Blog">
							<?php $the_query = new WP_Query( 'showposts=1&offset=1' ); ?>
						<?php while ($the_query -> have_posts()) : $the_query -> the_post(); ?>
							<article id="post-<?php the_ID(); ?>" <?php post_class( 'cf single-post' ); ?> role="article">

								<header class="article-header">

									<h1 class="h2 entry-title"><a href="<?php the_permalink() ?>" rel="bookmark" title="<?php the_title_attribute(); ?>"><?php the_title(); ?></a></h1>
									<p class="byline entry-meta vcard">
												<?php printf( __( 'Posted', 'startertheme' ).' %1$s %2$s',
												/* the time the post was published */
												'<time class="updated entry-time" datetime="' . get_the_time('Y-m-d') . '" itemprop="datePublished">' . get_the_time(get_option('date_format')) . '</time>',
												/* the author of the post */
												'<span class="by">'.__( 'by', 'startertheme').'</span> <span class="entry-author author" itemprop="author" itemscope itemptype="http://schema.org/Person">' . get_the_author_link( get_the_author_meta( 'ID' ) ) . '</span>'
										); ?>
									</p>

								</header>

								<section class="entry-content cf">
									<?php the_excerpt(); ?>
								</section>

								<footer class="article-footer cf">
									<p class="footer-comment-count">
										<?php comments_number( __( '<span>No</span> Comments', 'startertheme' ), __( '<span>One</span> Comment', 'startertheme' ), __( '<span>%</span> Comments', 'startertheme' ) );?>
									</p>


									<?php printf( '<p class="footer-category">' . __('filed under', 'startertheme' ) . ': %1$s</p>' , get_the_category_list(', ') ); ?>

									<?php the_tags( '<p class="footer-tags tags"><span class="tags-title">' . __( 'Tags:', 'startertheme' ) . '</span> ', ', ', '</p>' ); ?>


								</footer>

							</article>
						<?php endwhile;?>
						<?php $the_query = new WP_Query( 'offset=1' ); ?>
					<?php while ($the_query -> have_posts()) : $the_query -> the_post(); ?>
						<article id="post-<?php the_ID(); ?>" <?php post_class( 'cf single-post' ); ?> role="article">

							<header class="article-header">

								<h1 class="h2 entry-title"><a href="<?php the_permalink() ?>" rel="bookmark" title="<?php the_title_attribute(); ?>"><?php the_title(); ?></a></h1>
								<p class="byline entry-meta vcard">
											<?php printf( __( 'Posted', 'startertheme' ).' %1$s %2$s',
											/* the time the post was published */
											'<time class="updated entry-time" datetime="' . get_the_time('Y-m-d') . '" itemprop="datePublished">' . get_the_time(get_option('date_format')) . '</time>',
											/* the author of the post */
											'<span class="by">'.__( 'by', 'startertheme').'</span> <span class="entry-author author" itemprop="author" itemscope itemptype="http://schema.org/Person">' . get_the_author_link( get_the_author_meta( 'ID' ) ) . '</span>'
									); ?>
								</p>

							</header>

							<section class="entry-content cf">
								<?php the_excerpt(); ?>
							</section>

							<footer class="article-footer cf">
								<p class="footer-comment-count">
									<?php comments_number( __( '<span>No</span> Comments', 'startertheme' ), __( '<span>One</span> Comment', 'startertheme' ), __( '<span>%</span> Comments', 'startertheme' ) );?>
								</p>


								<?php printf( '<p class="footer-category">' . __('filed under', 'startertheme' ) . ': %1$s</p>' , get_the_category_list(', ') ); ?>

								<?php the_tags( '<p class="footer-tags tags"><span class="tags-title">' . __( 'Tags:', 'startertheme' ) . '</span> ', ', ', '</p>' ); ?>


							</footer>

						</article>
					<?php endwhile;?>




						</main>

					<?php get_sidebar(); ?>

				</div>

			</div>

<?php get_footer(); ?>

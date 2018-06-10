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
				<div id="inner__content" class="wrap cf">

						<main id="main" class="col-xs-12 col-sm-8 col-lg-9 cf" role="main" itemscope itemprop="mainContentOfPage" itemtype="http://schema.org/Blog">
							<?php $the_query = new WP_Query( 'showposts=1' ); ?>
						<?php while ($the_query -> have_posts()) : $the_query -> the_post(); ?>
							<article id="post-<?php the_ID(); ?>" <?php post_class( 'cf single-post' ); ?> role="article">

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

								<section class="post post__content cf">
									<?php
									$content = get_the_excerpt();
									echo wp_trim_words( $content , '55' );
									?>
									<a href="<?php the_permalink() ?>" class="read-more">Read more &raquo;</a>
								</section>
							</article>
						<?php endwhile;?>
						<!-- all the rest -->
						<?php $the_query = new WP_Query( 'offset=1' ); ?>
						<ul class="row articles__secondary">
							<?php while ($the_query -> have_posts()) : $the_query -> the_post(); ?>
								<li class="col-xs-12 col-md-6">
									<article id="post-<?php the_ID(); ?>" <?php post_class( 'cf single-post' ); ?> role="article">

										<header class="post post__header">

											<?php printf( '<p class="category">' . __('', 'startertheme' ) . '%1$s</p>' , get_the_category_list(', ') ); ?>

											<?php the_post_thumbnail('featured-half'); ?>

											<h1 class="h2 entry-title"><a href="<?php the_permalink() ?>" rel="bookmark" title="<?php the_title_attribute(); ?>"><?php the_title(); ?></a></h1>
											<p class="byline entry-meta vcard">
												<?php printf( '<p class="byline entry-meta vcard">' . __( '', 'startertheme' ).' %1$s', '<time class="updated entry-time" datetime="' . get_the_time('Y-m-d') . '" itemprop="datePublished">' . get_the_time(get_option('date_format')) . '</time></p>'); ?>
											</p>

										</header>

										<section class="entry-content cf">
											<?php
											$content = get_the_excerpt();
											echo wp_trim_words( $content , '10' );
											?>
											<a href="<?php the_permalink() ?>" class="read-more">Read more &raquo;</a>
										</section>

									</article>
								</li>
							<?php endwhile;?>
						</ul>

						</main>

					<?php get_sidebar(); ?>

				</div>

			</div>

<?php get_footer(); ?>

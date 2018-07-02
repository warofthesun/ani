<!--page-hunter-blog-->
<?php
/*
 Template Name: DrHunter Blog
*/
?>
<?php get_header(); ?>

			<div id="content" class="row">

					<div id="inner__content" class="wrap row">
						<?php $custom_query = new WP_Query('pagename=drhunter');
						while($custom_query->have_posts()) : $custom_query->the_post(); ?>
						<?php if( get_field('include_blog_sidebar') ) : ?>
					 <main id="main" class="col-xs-12 col-sm-8 col-lg-9" role="main" itemscope itemprop="mainContentOfPage" itemtype="http://schema.org/Blog">
					 <?php else : ?>
					 <main id="main" class="col-xs-12 col-sm-10" role="main" itemscope itemprop="mainContentOfPage" itemtype="http://schema.org/Blog">
					 <?php endif; ?>
				 <?php endwhile; ?>

						 <?php $query = new WP_Query( array(
		 						'no_found_rows'  => true,
		 						'category_name'            => 'drhunter'
		 				) );

		 				if ( $query->have_posts() ) : while ( $query->have_posts() ) : $query->the_post(); ?>

						<article id="post-<?php the_ID(); ?>" <?php post_class( ' single-post' ); ?> role="article">

							<header class="post post__header">
								<div class="row">
									<h1 class="h2 entry-title col-xs-12 col-md-8"><a href="<?php the_permalink() ?>" rel="bookmark" title="<?php the_title_attribute(); ?>"><?php the_title(); ?></a></h1>
									<div class="col-xs-12 col-md-4 article-info">
										<?php printf( '<p class="byline entry-meta vcard">' . __( '', 'startertheme' ).' %1$s', '<time class="updated entry-time" datetime="' . get_the_time('Y-m-d') . '" itemprop="datePublished">' . get_the_time(get_option('date_format')) . '</time></p>'); ?>
										<p class="category">
											<?php //use the id number of DrHunter category to remove the word "DrHunter" from title ?>
											<?php exclude_post_categories("8"); ?>
										</p>
									</div>
								</div>
								<?php the_post_thumbnail('featured-image'); ?>
							</header>

							<section class="post post__content">
								<?php
								$content = get_the_excerpt();
								echo wp_trim_words( $content , '55' );
								?>
								<a href="<?php the_permalink() ?>" class="read-more">Read more &raquo;</a>
							</section>
						</article>
						<?php endwhile; endif; ?>
						</main>
						<?php $custom_query = new WP_Query('pagename=drhunter');
						while($custom_query->have_posts()) : $custom_query->the_post(); ?>
						<?php if( get_field('include_blog_sidebar') ) : ?>
							<?php get_sidebar('drhunter'); ?>
						<?php endif; endwhile;?>


				</div>


			</div>

<?php get_footer(); ?>

<!--page-->
<?php get_header(); ?>

			<div id="content" class="<?php echo sanitize_title_with_dashes(get_the_title()); ?>">
				<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
					<header class="article-header">


						<h1 class="page-title" itemprop="headline"><?php the_title(); ?></h1>

					</header>
				<div id="inner-content" class="wrap cf row">

						<main id="main" class="col-xs-12 cf" role="main" itemscope itemprop="mainContentOfPage" itemtype="http://schema.org/Blog">



							<article id="post-<?php the_ID(); ?>" <?php post_class( 'cf' ); ?> role="article" itemscope itemtype="http://schema.org/BlogPosting">



								<section class="entry-content cf" itemprop="articleBody">

									<?php the_content(); ?>

								</section> <?php // end article section ?>

								<footer class="article-footer cf">

								</footer>

								<?php comments_template(); ?>

							</article>

							<?php endwhile; endif; ?>

						</main>

				</div>

			</div>

<?php get_footer(); ?>

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
				<section class="content__full-width content__full-width--lt-blue content__full-width--centered <?php echo sanitize_title_with_dashes(get_the_title()); ?>">
					<div class="wrap">
						<h1>Section Title</h1>
						<ul class="col-xs-12">
							<li class="col-xs-12 col-sm-6">
								<a href="#">
									<h4>ANI Current Medical Information Form</h4>
									<p>
										Form for release of health history from another provider to ANI
									</p>
								</a>
							</li>
							<li class="col-xs-12 col-sm-6">
								<a href="#">
									<h4>ANI Current Medical Information Form</h4>
									<p>
										Form for release of health history from another provider to ANI
									</p>
								</a>
							</li>
							<li class="col-xs-12 col-sm-6">
								<a href="#">
									<h4>ANI Current Medical Information Form</h4>
									<p>
										Form for release of health history from another provider to ANI
									</p>
								</a>
							</li>
							<li class="col-xs-12 col-sm-6">
								<a href="#">
									<h4>ANI Current Medical Information Form</h4>
									<p>
										Form for release of health history from another provider to ANI
									</p>
								</a>
							</li>
						</ul>
					</div>
				</section>

				<?php endwhile; endif; ?>

			</div>

<?php get_footer(); ?>

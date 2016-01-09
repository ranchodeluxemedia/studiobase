<?php get_header(); ?>

			<div id="content">

				<div id="inner-content" class="wrap cf">

						<main id="main" class="grid-4 cf" role="main" itemscope itemprop="mainContentOfPage" itemtype="http://schema.org/Blog">

							<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

							<article id="post-<?php the_ID(); ?>" <?php post_class( 'cf' ); ?> role="article" itemscope itemtype="http://schema.org/BlogPosting">

								<header class="article-header">

									<h1 class="page-title" itemprop="headline">About James Cook</h1>

								</header> <?php // end article header ?>

								<section class="entry-content cf" itemprop="articleBody">
									
									<?php	the_content(); ?>

								</section> <?php // end article section ?>

								<footer class="article-footer cf">

								</footer>

								<?php comments_template(); ?>

							</article>

							<?php endwhile; endif; ?>

						</main>

						<div id="sidebar1" class="sidebar grid-2 cf">
							<p>
								<img src="<?php echo get_template_directory_uri(); ?>/assets/images/la_james.jpg">
								<img src="<?php echo get_template_directory_uri(); ?>/assets/images/james-stage.jpg">
							</p>
						</div>

				</div>

			</div>

<?php get_footer(); ?>

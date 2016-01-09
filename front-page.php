<?php 

/* Template Name: Homepage */

get_header(); ?>

		<div id="slideshow">
			<?php echo get_new_royalslider(1); ?>
		</div>

			<div id="content">

				<div id="inner-content" class="wrap cf">

						<main id="main" class="grid-6 cf" role="main" itemscope itemprop="mainContentOfPage" itemtype="http://schema.org/Blog">

							<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

							<article id="post-<?php the_ID(); ?>" <?php post_class( 'cf' ); ?> role="article" itemscope itemtype="http://schema.org/BlogPosting">

								<header class="article-header">

									<h1 class="page-title" itemprop="headline"><?php the_title(); ?></h1>

								</header> <?php // end article header ?>

								<section class="entry-content cf" itemprop="articleBody">
									<?php	the_content(); ?>
								</section>

								<footer class="article-footer cf">

								</footer>

							</article>

							<?php endwhile; endif; ?>

						</main>

						<?php //get_sidebar(); ?>

				</div>

			</div>

			<div id="call-to-action">
				<div id="inner-call-to-action" class="wrap cf">
					
				</div>
			</div>

<?php get_footer(); ?>

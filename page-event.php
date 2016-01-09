<?php 
	/* Template Name: Events Page */
get_header(); ?>

			<div id="content">

				<div id="inner-content" class="wrap cf">

						<main id="main" class="grid-6 cf" role="main" itemscope itemprop="mainContentOfPage" itemtype="http://schema.org/Blog">

						<?php 
						$today = date('Y-m-d');
						$args = array( 
							'post_type' => 'event',
							'posts_per_page' => 5,
							'meta_key' => 'event_date',
							'meta_compare' => '>',
							'meta_value' => $today,
							'orderby' => 'event_date',
							'paged' => $paged
						);
						$the_query = new WP_Query( $args );
						?>

						<?php if ( $the_query->have_posts() ) : while ( $the_query->have_posts() ) : $the_query->the_post(); ?>

							<div class="event cf">

							<?php $date = new DateTime(get_field('event_date'));
										$month = $date->format('M');
										$day = $date->format('d'); ?>

							<div class="event-date cf">
								<div class="event-date-month"><?php echo $month; ?></div>
								<div class="event-date-day"><?php echo $day; ?></div>
								<div class="event-date-time"><?php the_field('event_time'); ?></div>
							</div>
								
								<h3><a href="<?php the_permalink();?>"><?php the_title(); ?></a></h3>

							</div>

						<?php wp_reset_postdata(); ?>
						<?php endwhile; else: ?>
								<p>Sorry, there are no gigs scheduled at this time.</p>
						<?php endif; ?>

						</main>

						<?php //get_sidebar(); ?>

				</div>

			</div>

<?php get_footer(); ?>

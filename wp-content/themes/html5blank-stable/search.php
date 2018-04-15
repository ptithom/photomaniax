<?php get_header(); ?>

	<main role="main">

		<div class="wrapper">
			<!-- section -->
			<section>

				<h1 class="heading-decor"><?php echo sprintf( __( '%s Search Results for ', 'html5blank' ), $wp_query->found_posts ); echo get_search_query(); ?></h1>
				<div class="content-posts">
					<?php if (have_posts()): while (have_posts()) : the_post(); ?>

						<?php get_template_part('loop-ajax'); ?>

					<?php endwhile; ?>
					<?php else: ?>

						<!-- article -->
						<article class="wrapper-empty">
							<h2 class="text-center"><?php _e( 'Sorry, nothing to display.', 'html5blank' ); ?></h2>
						</article>
						<!-- /article -->

					<?php endif; ?>

				</div>
				<?php get_template_part('pagination'); ?>

			</section>
		<!-- /section -->
		</div>
	</main>

<?php get_footer(); ?>

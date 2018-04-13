<?php get_header(); ?>

	<main role="main">

		<div class="wrapper">
			<!-- section -->
			<section>

				<h1 class="heading-decor"><?php echo sprintf( __( '%s Search Results for ', 'html5blank' ), $wp_query->found_posts ); echo get_search_query(); ?></h1>
				<div class="content-posts">
					<?php get_template_part('loop-ajax'); ?>
				</div>
				<?php get_template_part('pagination'); ?>

			</section>
		<!-- /section -->
		</div>
	</main>

<?php get_sidebar(); ?>

<?php get_footer(); ?>

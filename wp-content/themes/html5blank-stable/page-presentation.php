<?php get_header(); ?>

	<main role="main">
		<!-- section -->

		<div class="wrapper">

		<section>



		<?php if (have_posts()): while (have_posts()) : the_post(); ?>

			<!-- article -->
			<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>



				<div class="row full-height">
					<div class="col-12 col-md-6 ">
						<div class="background-image" style="background-image: url(<?= get_the_post_thumbnail_url() ?>)"></div>
					</div>
					<div class="col-12 col-md-6 ">
						<div class="content-about Aligner">
							<div class="Aligner-item">
								<h1 class="heading-decor left"><?php the_title(); ?></h1>
								<?php the_content(); ?>
							</div>
						</div>
					</div>
				</div>

				<?php edit_post_link(); ?>

			</article>
			<!-- /article -->

		<?php endwhile; ?>

		<?php else: ?>

			<!-- article -->
			<article>

				<h2><?php _e( 'Sorry, nothing to display.', 'html5blank' ); ?></h2>

			</article>
			<!-- /article -->

		<?php endif; ?>

		</section>
		<!-- /section -->

		</div>

	</main>

<?php get_footer(); ?>

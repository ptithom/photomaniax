<?php get_header(); ?>

	<main role="main">
	<!-- section -->
		<div class="wrapper">
			<section>

			<?php if (have_posts()): while (have_posts()) : the_post(); ?>

				<!-- article -->
				<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>


					<!-- post title -->
					<h1 class="heading-decor title">
						<a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a>
					</h1>
					<!-- /post title -->


					<div class="row wrapper-desc-single">
						<div class="col-md-4">
							<p><?php the_author(); ?></p>
							<?php the_author_posts_link(); ?>
						</div>
						<div class="col-md-8">

							<div class="wrapper-content">
								<?php the_content(); // Dynamic Content ?>
							</div>

							<!-- post details -->
							<div class="wrapper-details">
							<span class="date"><?php the_time('F j, Y'); ?> <?php the_time('g:i a'); ?></span>
							<p><?php _e( 'Categorised in: ', 'html5blank' ); the_category(', '); // Separated by commas ?></p>
							</div>
							<!-- /post details -->



						</div>

					</div>

					<div class="wrapper-medias">
						<h2 class="heading-decor left">
							Galerie
						</h2>
						<!-- /post title -->

						<div class="row">

							<?php if(!empty(get_field( "media" ))):?>
								<?php foreach(get_field( "media" ) as $media): ?>
									<div class="col-md-3 wrapper-media">
										<a href="<?= $media['media'] ?>" data-fancybox="gallery" class="background-image" style="background-image: url('<?= $media['media'] ?>')"></a>
									</div>
										<?php endforeach; ?>
							<?php endif; ?>

						</div>
					</div>


					<?php edit_post_link(); // Always handy to have Edit Post Links available ?>

					<?php //comments_template(); ?>

				</article>
				<!-- /article -->

			<?php endwhile; ?>

			<?php else: ?>

				<!-- article -->
				<article>

					<h1><?php _e( 'Sorry, nothing to display.', 'html5blank' ); ?></h1>

				</article>
				<!-- /article -->

			<?php endif; ?>

			</section>
			<!-- /section -->
			</div>
	</main>


<?php get_footer(); ?>

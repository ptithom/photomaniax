<?php /* Template Name: Auteurs */ get_header(); ?>

<main role="main">
	<!-- section -->

	<div class="wrapper">

		<section>

			<h1 class="heading-decor"><?php the_title(); ?></h1>
			<?php if (have_posts()): while (have_posts()) : the_post(); ?>

			<!-- article -->
			<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

			<?php the_content(); ?>

				<div class="row wrapper_auteurs">

					<?php foreach(get_field('liste_user') as $author): ?>
						<div class="col-md-4 section_user">
							<?php $author = get_userdata($author['ID']) ?>
							<?php include(locate_template('loop-auteur.php')); ?>

						</div>
					<?php endforeach; ?>
				</div>

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

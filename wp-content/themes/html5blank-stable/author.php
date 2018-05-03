<?php get_header(); ?>

<main role="main">

	<div class="wrapper">
		<section>

		<?php if (have_posts()): the_post(); ?>

			<h1 class="heading-decor"><?php echo get_the_author(); ?></h1>

		<?php if ( get_the_author_meta('description')) : ?>

		<?php echo get_avatar(get_the_author_meta('user_email')); ?>

			<h2><?php _e( 'About ', 'html5blank' ); echo get_the_author() ; ?></h2>

			<?php echo wpautop( get_the_author_meta('description') ); ?>

		<?php endif; ?>

			<div class="content-posts">
				<?php rewind_posts(); while (have_posts()) : the_post(); ?>

						<?php get_template_part('loop-ajax'); ?>

				<?php endwhile; ?>
			</div>

		<?php else: ?>

			<!-- article -->
			<article>

				<h2><?php _e( 'Sorry, nothing to display.', 'html5blank' ); ?></h2>

			</article>
			<!-- /article -->

		<?php endif; ?>

			<?php get_template_part('pagination'); ?>

		</section>
		<!-- /section -->
	</div>
</main>

<?php get_footer(); ?>

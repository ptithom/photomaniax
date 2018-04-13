<?php get_header(); ?>

	<main role="main">

		<div class="wrapper">
			<!-- section -->
			<section>

				<h1 class="heading-decor"><?php single_cat_title(); ?></h1>

				<?php

				$cat = get_queried_object();

				$childrens = get_terms( $cat->taxonomy, array(
					'parent'    => $cat->term_id,
					'hide_empty' => false
				) );
				// print_r($children); // uncomment to examine for debugging
				if(!empty($childrens)): ?>
					<ul class="listing_cat" >

						<li class="select-cat active" data-id="<?= $cat->term_taxonomy_id ?>">
							All
						</li>
					<?php foreach($childrens as $children): ?>
						<li class="select-cat" data-idcat="<?= $children->term_taxonomy_id ?>" >
							<?= $children->name?>
						</li>

					<?php endforeach; ?>
					</ul>
				<?php endif; ?>

				<div class="content-posts">

					<div class="desc_cat"><?php echo category_description(); ?></div>
					<?php if (have_posts()): while (have_posts()) : the_post(); ?>

						<?php get_template_part('loop-ajax'); ?>

					<?php endwhile; ?>

					<?php else: ?>

						<!-- article -->
						<article>
							<h2><?php _e( 'Sorry, nothing to display.', 'html5blank' ); ?></h2>
						</article>
						<!-- /article -->

					<?php endif; ?>

				</div>

			</section>
			<!-- /section -->

			</div>
	</main>

<?php get_footer(); ?>

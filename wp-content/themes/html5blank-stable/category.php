<?php get_header(); ?>

	<main role="main">

		<div class="wrapper">
			<!-- section -->
			<section>

				<h1 class="heading-decor"><?php single_cat_title(); ?></h1>

				<?php  ?>

				<?php

				$cat = get_queried_object();

				$childrens = get_terms( $cat->taxonomy, array(
					'parent'    => $cat->term_id,
					'hide_empty' => false
				) );
				// print_r($children); // uncomment to examine for debugging
				if(!empty($childrens)): ?>
					<ul class="listing_cat">

						<li class="select-cat active" data-id="<?= $term->term_id ?>">
							All
						</li>
					<?php foreach($childrens as $children): ?>

						<li class="select-cat" data-id="<?= $children->term_id ?>">
							<?= $children->name?>
						</li>

					<?php endforeach; ?>
					</ul>
				<?php endif; ?>

				<div class="content-posts">
					<?php get_template_part('loop'); ?>
				</div>

			</section>
			<!-- /section -->

			</div>
	</main>

<?php get_footer(); ?>

<?php /* Template Name: Home */ get_header(); ?>

	<main role="main">
		<!-- section -->
		<section class="text-center full-height">
			<div class="vertical-center text-center">
				<div class="title-home">
					#<h1><?php the_title(); ?></h1>
				</div>
			</div>
		</section>
		<!-- /section -->
	</main>

	<div class="box_about d-none full-height">
		<div class="text-center">
			<div class="row full-height">
				<div class="col-12 col-md-6 ">
					<div class="background-image" style="background-image: url(<?= get_the_post_thumbnail_url(9) ?>)"></div>
				</div>
				<div class="col-12 col-md-6 ">
					<div class="content-about Aligner">
						<div class="Aligner-item">
							<?php

							$post_12 = get_post(9);
							$trim_me = $post_12->post_content;

							echo "<h3 class='heading-decor left'>".$post_12->post_title."</h3>";
							echo $trim_me;

							?>
						</div>
					</div>
				</div>
			</div>

		</div>
	</div>

	<div class="box_slide_cat d-none full-height">
		<div class="text-center">
			<?php
			$cat = get_queried_object();

			$childrens = get_terms( 'category', array(
			'parent'    => "3",
			'hide_empty' => false
			) );
			// print_r($children); // uncomment to examine for debugging
			if(!empty($childrens)): ?>
			<div class="listing_cat slick_slider_cat" >

				<?php foreach($childrens as $children): ?>

					<div class="full-height slide_cat">
						<div class="background-image" style="background-image: url(<?= get_field( "media",$children->terme_id ) ?>)">
							<div class="content_title_cat">
								<?= $children->name?>
							</div>
						</div>
					</div>

				<?php endforeach; ?>
			</div>
			<?php endif; ?>

		</div>
	</div>


<?php get_footer(); ?>

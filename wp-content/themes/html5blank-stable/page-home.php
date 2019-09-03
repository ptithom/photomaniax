<?php /* Template Name: Home */ get_header(); ?>

	<main role="main">


		<div class="wrapper_slider">

			<section class="text-center full-height">
				<div class="vertical-center text-center">
					<div class="title-home">
						#<h1><?php the_title(); ?></h1>
						<div class="nav_slide next"><i class="fa fa-chevron-down"></i></div>
					</div>
				</div>
			</section>

			<section class="box_slide_cat  full-height">
				<div class="text-center">
					<?php

					$childrens = get_categories( array(
						'parent'    => ID_CAT_MONTH,
						'hide_empty' => false,
						'orderby'    => 'ID',
						'order'      => 'DESC',
					) );
					$childrens_hs = get_categories( array(
						'parent'    => ID_CAT_HS,
						'hide_empty' => false,
						'orderby'    => 'ID',
						'order'      => 'DESC',
					) );

					if(!empty($childrens) || !empty($childrens_hs)): ?>
						<div class="listing_cat slick_slider_cat" >
							<?php foreach($childrens_hs as $children_hs): ?>
								<div class="full-height slide_cat">
									<a href="<?= get_category_link($children_hs) ?>">
										<div class="background-image" style="background-image: url(<?= get_field( "media",$children_hs )["sizes"]["medium_large"] ?>)">

										</div>
										<div class="content_infos">
											<?php if($children_hs->parent == ID_CAT_HS): ?>
												<div class="title_sub_categorie">
													<?= get_cat_name($children_hs->parent) ?>
												</div>
											<?php endif	?>

											<div class="info_cat">
												<?= get_field('contraintes',$children_hs) ?>
											</div>

											<div class="content_title_cat">
												<?= $children_hs->name?>
											</div>
										</div>


									</a>
								</div>

							<?php endforeach; ?>
							<?php foreach($childrens as $children): ?>

								<div class="full-height slide_cat">
									<a href="<?= get_category_link($children) ?>">
										<div class="background-image" style="background-image: url(<?= get_field( "media",$children )["sizes"]["medium_large"] ?>)">

										</div>
										<div class="content_infos">
											<?php if($children->parent == ID_CAT_HS): ?>
												<div class="title_sub_categorie">
													<?= get_cat_name($children->parent) ?>
												</div>
											<?php endif	?>

											<div class="info_cat">
												<?= get_field('contraintes',$children) ?>
											</div>

											<div class="content_title_cat">
												<?= $children->name?>
											</div>
										</div>


									</a>
								</div>

							<?php endforeach; ?>
						</div>
					<?php endif; ?>

				</div>
			</section>

			<section class="box_about full-height">
				<div class="text-center">
					<div class="row full-height">
						<div class="col-12 col-md-6 d-none d-md-flex">
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
			</section>

		</div>

	</main>



<?php get_footer(); ?>

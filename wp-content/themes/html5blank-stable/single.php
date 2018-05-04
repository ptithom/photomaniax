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
						<div class="col-md-4 section_user">

							<?php $author = get_userdata($post->post_author); ?>
							<?php include(locate_template('loop-auteur.php')); ?>

						</div>
						<div class="col-md-8">

							<div class="wrapper-content">
								<?php the_content(); // Dynamic Content ?>
							</div>

							<!-- post details -->
							<div class="wrapper-details">
									<?php
									$perma_cat = get_post_meta($post->ID , '_category_permalink', true);
									if ( $perma_cat != null ) {
										$cat_id = $perma_cat['category'];
										$category = get_category($cat_id);
									} else {
										$categories = get_the_category();
										$category = $categories[0];
									}
									$category_link = get_category_link($category);
									$category_name = $category->name;
									$contraintes = get_field('contraintes',$category)
									?>


								<p>
									<?php _e( 'Categorised in: ', 'html5blank' ); ?>
									<a href="<?php echo $category_link ?>"><?php echo $category_name ?></a>
								</p>
								<div class="rappel-cat">
									Rappel des contrainte de la serie :<br>
									<div class="conraintes"><?= $contraintes ?></div>
								</div>
								<!-- /post details -->

							</div>
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
										<a href="<?= wp_get_attachment_image_src($media['media'],'full') ?>" data-fancybox="gallery" class="background-image" style="background-image: url('<?= wp_get_attachment_image_src($media['media'],'medium') ?>')"></a>
									</div>
								<?php endforeach; ?>
							<?php endif; ?>

						</div>
					</div>

					<div class="social full-size">
						<a class="btn facebook" href="<?= stafe_get_share_link($post->ID, 'facebook') ?>" target="_blank"><i class="fa fa-facebook" aria-hidden="true"></i> PARTAGER</a>
						<a class="btn twitter" href="<?= stafe_get_share_link($post->ID, 'twitter') ?>" target="_blank"><i class="fa fa-twitter" aria-hidden="true"></i> PARTAGER</a>
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

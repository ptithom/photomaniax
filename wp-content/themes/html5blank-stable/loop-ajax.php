

	<!-- article -->
	<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

		<div class="row">

			<div class="col-12 col-md-7">
				<?php
				$media_url = "";
				if(!empty(get_field( "media" ))){
					$media_url = get_field( "media" )[0]["media"];
				} ?>
				<a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
				<div class="cat_preview_media" style="background-image: url('<?= wp_get_attachment_image_src($media_url,'medium')[0] ?>')"></div>
				</a>
			</div>
			<div class="col-12 col-md-5 wrapper-desc-post">


				<h2>
					<a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a>
				</h2>
				<!-- /post title -->

				<!-- post details -->
				<div class="wrapper-details">
					<span class="author"><?php _e( 'Published by', 'html5blank' ); ?> <?php the_author_posts_link(); ?></span>
					<?php if ( ! empty( get_the_category() ) ): $categories = get_the_category();?>
						<span class="cat text-uppercase"><?php _e( 'in', 'html5blank' ); ?> <?= $categories[0]->name; ?></span>
					<?php endif; ?>
				</div>

				<!-- /post details -->

				<?php html5wp_excerpt('html5wp_index'); // Build your custom callback length in functions.php ?>

				<?php edit_post_link(); ?>

			</div>

		</div>


	</article>
	<!-- /article -->

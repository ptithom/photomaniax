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
							<div class="wrapper_user">
								<div class="row -">
									<div class="col-md-5">
										<a href="<?= get_author_posts_url(); ?>">
											<div class="picture_author" style="background-image: url('<?= get_field('media_user',$author); ?>') "></div>
										</a>
									</div>
									<div class="col-md-7">
										<a href="<?= get_author_posts_url(); ?>">
											<div class="name_author">
												<?= get_the_author_meta( 'first_name' ); ?> <?= get_the_author_meta( 'last_name' ); ?>
											</div>
										</a>
										<div class="job_author">
											<?= get_field('role',$author); ?>
										</div>
										<div class="info_user">
											<?php if(!empty(get_field('links',$author))):?>
												<?php foreach(get_field('links',$author) as $link): ?>
													<a href="<?= $link['url'] ?>" target="_blank"><?= $link['label'] ?></a>
												<?php endforeach; ?>
											<?php endif; ?>
										</div>
									</div>
								</div>
							</div>
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

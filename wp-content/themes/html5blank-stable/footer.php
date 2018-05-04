
			<div class="box_search d-none full-height">
				<div class="close-section "><i class="fa fa-close"></i></div>
				<div class="vertical-center text-center">
					<?php get_search_form(); ?>
				</div>
			</div>


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

			<!-- footer -->
			<footer class="footer d-none" role="contentinfo">

				<div class="close-section "><i class="fa fa-close"></i></div>

				<div>
					<h3 class="heading-decor">
						<span>Photomaniax</span>
					</h3>
					<div class="content_section">
						<?= get_field('footer_desc','option') ?>
					</div>

				</div>


				<div>
					<h3 class="heading-decor">
						<span>Latest Article</span>
					</h3>
					<div class="content_section">
						<?php

						$loop = new WP_Query( array(
							'posts_per_page' => 6,
							'post_status'    => 'publish',
						));

						if ($loop->have_posts()){
							while ($loop->have_posts()){
								$loop->the_post();
								$media_url = "";
								if(!empty(get_field( "media" ))){
									$media_url = get_field( "media" )[0]["media"];
								}
						?>
								<a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
									<div class="latest-img" style="background-image: url('<?= wp_get_attachment_image_src($media_url,'medium') ?>')"></div>
								</a>
								<?php

							}
						}

						?>
					</div>

				</div>

				<div>
					<h3 class="heading-decor">
						<span>Participer a l'Aventure</span>
					</h3>
					<div class="content_section">
						<?= get_field('footer_contact','option') ?>
					</div>

				</div>

			</footer>
			<!-- /footer -->

			<!-- footer -->
			<subfooter role="contentinfo">


				<!-- copyright -->
				<p class="copyright">
					&copy; <?php echo date('Y'); ?> Copyright <?php bloginfo('name'); ?>. dev by <a href="https://github.com/ptithom" target="_blank">Pti-thom</a> with <3.
				</p>
				<!-- /copyright -->

			</subfooter>
			<!-- /footer -->


		<?php wp_footer(); ?>

		<!-- analytics -->
		<script>
		(function(f,i,r,e,s,h,l){i['GoogleAnalyticsObject']=s;f[s]=f[s]||function(){
		(f[s].q=f[s].q||[]).push(arguments)},f[s].l=1*new Date();h=i.createElement(r),
		l=i.getElementsByTagName(r)[0];h.async=1;h.src=e;l.parentNode.insertBefore(h,l)
		})(window,document,'script','//www.google-analytics.com/analytics.js','ga');
		ga('create', 'UA-XXXXXXXX-XX', 'yourdomain.com');
		ga('send', 'pageview');
		</script>

	</body>
</html>


			<div class="box_search d-none">
				<?php get_search_form(); ?>
			</div>

			<!-- footer -->
			<footer class="footer d-none" role="contentinfo">

				<div class="close-section "><i class="fa fa-close"></i></div>


			</footer>
			<!-- /footer -->

			<!-- footer -->
			<subfooter role="contentinfo">


				<!-- copyright -->
				<p class="copyright">
					&copy; <?php echo date('Y'); ?> Copyright <?php bloginfo('name'); ?>. dev by Pti-thom with <3.
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

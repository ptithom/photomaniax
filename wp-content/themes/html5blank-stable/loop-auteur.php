<div class="wrapper_user">
	<div class="row -">
		<div class="col-md-5">
			<a href="<?= get_author_posts_url($author->ID); ?>">
				<div class="picture_author" style="background-image: url('<?= wp_get_attachment_image_src(get_field('media_user',$author),'medium')[0] ?>') "></div>

			</a>
		</div>
		<div class="col-md-7">
			<a href="<?= get_author_posts_url($author->ID); ?>">
				<div class="name_author">
					<?= get_the_author_meta( 'first_name',$author->ID ); ?> <?= get_the_author_meta( 'last_name',$author->ID ); ?>
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
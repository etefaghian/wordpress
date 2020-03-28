<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<div class="posthead"><a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a></div>
	<div class="main-content">
		<?php the_content() ?>
	</div>
</article>
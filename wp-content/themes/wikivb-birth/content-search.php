<article id="post-<?php the_ID(); ?>" <?php post_class( 'postcontent rightb' ); ?>>
	<div class="posthead">
		<a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
	</div>
	<div class="maincontr">
		<?php if ( has_post_thumbnail() ) {the_post_thumbnail('birththumb');} else { ?><img src="<?php echo get_option('wikivb_birth_thumbimg'); ?>" alt="<?php the_title(); ?>" title="<?php the_title(); ?>" width="120px" height="120px" /><?php } ?>
		<ul>
			<li><?php the_author(); ?></li>
			<li><?php the_time('d M Y'); ?></li>
			<li><?php comments_popup_link( __('بدون دیدگاه'), __('1 دیدگاه'), __('% دیدگاه') ); ?></li>
		</ul>
	</div>
	<div class="maincontl">
		<span><?php the_excerpt() ?></span>
		<a class="continue leftb" href="<?php the_permalink() ?>">ادامه مطلب</a>
		<?php likes_wikivb(get_the_ID()); ?>
	</div>
</article>
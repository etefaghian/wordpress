<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<div class="posthead"><a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a></div>
	<div class="postmeta">
		<?php if ( has_post_thumbnail() ) {the_post_thumbnail('birththumbc');} else { ?><img src="<?php echo get_option('wikivb_birth_thumbimg'); ?>" alt="<?php the_title(); ?>" title="<?php the_title(); ?>" width="150px;" height="150px;" /><?php } ?>
		<ul>
			<li>توسط: <?php the_author(); ?></li>
			<li>تاریخ انتشار: <?php the_time('d M Y'); ?></li>
			<li>دسته بندی: <?php the_category(' , '); ?></li>
			<li>نظرات: <?php comments_popup_link( __('بدون دیدگاه'), __('1'), __('%') ); ?></li>
			<li>تعداد بازدید: <?php setPostViews(get_the_ID()); ?><?php echo getPostViews(get_the_ID()); ?></li>
		</ul>
	</div>
	<div class="clear-both"></div>
	<div class="main-content">
		<?php the_content() ?>
	</div>
</article>
<?php likes_wikivb(get_the_ID()); ?>
<div class="clear-both"></div>
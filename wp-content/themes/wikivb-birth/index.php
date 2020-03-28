<?php get_header(); ?>
<div class="sidebar-show"><?php get_sidebar(); ?></div>

<div class="content cright">
<div class="col">
	<?php $lastsubject = get_option('wikivb_birth_lastsubject_one');$category_id = get_cat_ID($lastsubject);$category_link = get_category_link($category_id); ?>
	<div class="posts-top">
		<h2 class="titlecat rightb"><?php echo $lastsubject ?></h2>
		<a href="<?php echo esc_url($category_link); ?>/?feed=rss2" class="rss leftb" rel="tooltip" title="مشاهده RSS feed ها"></a>
		<a href="<?php echo esc_url($category_link); ?>" class="viewall leftb">مشاهده تمام مطالب</a>
	</div>
	<?php
		$my_query = new WP_Query(array('cat' => $category_id, 'showposts' => get_option('wikivb_birth_number_lastsubject')));
		while ($my_query->have_posts()):
		$my_query->the_post();
		$do_not_duplicate = $post->ID;
		include(TEMPLATEPATH . '/content-search.php');
		endwhile; ?>
</div>
<div class="col">
	<?php $lastsubject = get_option('wikivb_birth_lastsubject_two');$category_id = get_cat_ID($lastsubject);$category_link = get_category_link($category_id); ?>
	<div class="posts-top">
		<h2 class="titlecat rightb"><?php echo $lastsubject ?></h2>
		<a href="<?php echo esc_url($category_link); ?>/?feed=rss2" class="rss leftb" rel="tooltip" title="مشاهده RSS feed ها"></a>
		<a href="<?php echo esc_url($category_link); ?>" class="viewall leftb">مشاهده تمام مطالب</a>
	</div>
	
	<?php
		$my_query = new WP_Query(array('cat' => $category_id, 'showposts' => get_option('wikivb_birth_number_lastsubject')));
		while ($my_query->have_posts()):
		$my_query->the_post();
		$do_not_duplicate = $post->ID;
		include(TEMPLATEPATH . '/content-search.php');
		endwhile; ?>
</div>
<?php if (get_option('wikivb_birth_alastsubject_three') == "true") : ?>
<div class="col">
	<?php $lastsubject = get_option('wikivb_birth_lastsubject_three');$category_id = get_cat_ID($lastsubject);$category_link = get_category_link($category_id); ?>
	<div class="posts-top">
		<h2 class="titlecat rightb"><?php echo $lastsubject ?></h2>
		<a href="<?php echo esc_url($category_link); ?>/?feed=rss2" class="rss leftb" rel="tooltip" title="مشاهده RSS feed ها"></a>
		<a href="<?php echo esc_url($category_link); ?>" class="viewall leftb">مشاهده تمام مطالب</a>
	</div>
	
	<?php
		$my_query = new WP_Query(array('cat' => $category_id, 'showposts' => get_option('wikivb_birth_number_lastsubject')));
		while ($my_query->have_posts()):
		$my_query->the_post();
		$do_not_duplicate = $post->ID;
		include(TEMPLATEPATH . '/content-search.php');
		endwhile; ?>
</div>
<?php endif ; ?>
<?php if (get_option('wikivb_birth_alastsubject_four') == "true") : ?>
<div class="col">
	<?php $lastsubject = get_option('wikivb_birth_lastsubject_four');$category_id = get_cat_ID($lastsubject);$category_link = get_category_link($category_id); ?>
	<div class="posts-top">
		<h2 class="titlecat rightb"><?php echo $lastsubject ?></h2>
		<a href="<?php echo esc_url($category_link); ?>/?feed=rss2" class="rss leftb" rel="tooltip" title="مشاهده RSS feed ها"></a>
		<a href="<?php echo esc_url($category_link); ?>" class="viewall leftb">مشاهده تمام مطالب</a>
	</div>
	
	<?php
		$my_query = new WP_Query(array('cat' => $category_id, 'showposts' => get_option('wikivb_birth_number_lastsubject')));
		while ($my_query->have_posts()):
		$my_query->the_post();
		$do_not_duplicate = $post->ID;
		include(TEMPLATEPATH . '/content-search.php');
		endwhile; ?>
</div>
<?php endif ; ?>
</div>
<div class="sidebar-hide"><?php get_sidebar( 'bottom' ); ?></div>
<?php get_footer(); ?>
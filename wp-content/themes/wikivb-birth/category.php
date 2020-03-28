<?php get_header(); ?>
<div class="sidebar-show"><?php get_sidebar(); ?></div>

<div class="content cright">
	<?php if ( have_posts() ) : ?>
		<div class="posts-top">
			<h2 class="titlecat rightb"><?php single_cat_title(); ?></h2>
			<a href="<?php echo esc_url( get_category_link(get_cat_ID('single_cat_title()')) ); ?>/?feed=rss2" class="rss leftb"></a>
		</div>
	<?php
		while ( have_posts() ) : the_post();
			get_template_part( 'content', 'search' );
		endwhile;
		else :
			get_template_part( 'content', 'none' );
		endif;
	?>
	<?php pagination_wikibirth(); ?>
</div>

<div class="sidebar-hide"><?php get_sidebar( 'bottom' ); ?></div>
<?php get_footer(); ?>
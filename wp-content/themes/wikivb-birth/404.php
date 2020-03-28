<?php get_header(); ?>
<div class="sidebar-show"><?php get_sidebar(); ?></div>

<div id="primary" class="cright notfound">
	<div class="content content-area">
		<div class="posthead"><?php _e( 'Not Found', 'birth' ); ?></div>
			<div class="main-content">
				<p><?php _e( 'It looks like nothing was found at this location. Maybe try a search?', 'birth' ); ?></p>
				<?php get_search_form(); ?>
			</div>
	</div>
</div>

<div class="sidebar-hide"><?php get_sidebar( 'bottom' ); ?></div>
<?php get_footer(); ?>

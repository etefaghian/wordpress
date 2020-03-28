<?php get_header(); ?>
<div class="sidebar-show"><?php get_sidebar(); ?></div>

<div id="primary" class="cright">
	<div class="content content-area">
		<?php if ( have_posts() ) : ?>
		<?php
			while ( have_posts() ) : the_post();
				get_template_part( 'content', get_post_format() );
			endwhile;
			else :
				get_template_part( 'content', 'none' );
			endif;
		?>
	</div>
	<?php if ( has_tag() ) : ?>
		<div class="tag"><?php the_tags(' ', ' '); ?></div>
	<?php endif; ?>
	<?php comments_template(); ?>
</div>

<div class="sidebar-hide"><?php get_sidebar( 'bottom' ); ?></div>
<?php get_footer(); ?>

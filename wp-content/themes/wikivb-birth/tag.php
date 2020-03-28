<?php get_header(); ?>
<div class="sidebar-show"><?php get_sidebar(); ?></div>

<div class="content cright<?php if ( !have_posts() ) : ?> notfound content-area<?php endif; ?>">
	<?php if ( have_posts() ) : ?>	
		<div class="posts-top">
			<h2 class="titlecat rightb"><?php printf( __( 'Tag Archives: %s', 'birth' ), single_tag_title( '', false ) ); ?></h2>
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
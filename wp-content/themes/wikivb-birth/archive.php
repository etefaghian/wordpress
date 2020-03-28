<?php get_header(); ?>
<div class="sidebar-show"><?php get_sidebar(); ?></div>

<div class="content cright<?php if ( !have_posts() ) : ?> notfound content-area<?php endif; ?>">
			<?php if ( have_posts() ) : ?>
				<div class="posts-top"><h2 class="titlecat rightb">
					<?php
						if ( is_day() ) :
							if(function_exists('jdate')) {
								printf( __( 'Daily Archives: %s', 'birth' ), jdate(get_option('date_format'), strtotime($post->post_date)) );
							} else {
								printf( __( 'Daily Archives: %s', 'birth' ), get_the_date() );
							}
						

						elseif ( is_month() ) :
							if(function_exists('jdate')) {
								printf( __( 'Monthly Archives: %s', 'birth' ), jdate( 'F Y', strtotime($post->post_date)) );
							} else {
								printf( __( 'Monthly Archives: %s', 'birth' ), get_the_date( _x( 'F Y', 'monthly archives date format', 'birth' ) ) );
							}

						elseif ( is_year() ) :
							if(function_exists('jdate')) {
								printf( __( 'Yearly Archives: %s', 'birth' ), jdate( 'Y', strtotime($post->post_date)) );
							} else {
								printf( __( 'Yearly Archives: %s', 'birth' ), get_the_date( _x( 'Y', 'yearly archives date format', 'birth' ) ) );
							}

						else :
							_e( 'Archives', 'birth' );

						endif;
					?>
				</h2></div>

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
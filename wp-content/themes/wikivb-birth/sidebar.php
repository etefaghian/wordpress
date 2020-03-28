<div class="sidebar leftb">
	<div class="sidebarm">
		<div class="sidehead">دسته بندی</div>
		<div class="sidebody">
			<ul class="category">
				<?php wp_list_categories('orderby=id&title_li=&hide_empty=0'); ?>
			</ul>
		</div>
	</div>
	<?php if (!function_exists('dynamic_sidebar') || !dynamic_sidebar('left_sidebar')) : ?><?php endif; ?>
	<div class="sidebarm ads">
		<div class="sidehead">تبلیغات</div>
		<div class="sidebody">
			<a href="<?php echo get_option('wikivb_birth_sidebanneradr'); ?>" title="<?php echo get_option('wikivb_birth_sidebannertar'); ?>" target="_blank"><img src="<?php echo get_option('wikivb_birth_sidebannerimgr'); ?>" width="120px" height="240px" alt="<?php echo get_option('wikivb_birth_sidebannertar'); ?>" title="<?php echo get_option('wikivb_birth_sidebannertar'); ?>" /></a>
			<a href="<?php echo get_option('wikivb_birth_sidebanneradl'); ?>" title="<?php echo get_option('wikivb_birth_sidebannertal'); ?>" target="_blank"><img src="<?php echo get_option('wikivb_birth_sidebannerimgl'); ?>" width="120px" height="240px" alt="<?php echo get_option('wikivb_birth_sidebannertal'); ?>" title="<?php echo get_option('wikivb_birth_sidebannertal'); ?>" /></a>
			<a href="<?php echo get_option('wikivb_birth_sidebannerhad1'); ?>" title="<?php echo get_option('wikivb_birth_sidebannerhta1'); ?>" target="_blank"><img src="<?php echo get_option('wikivb_birth_sidebannerhimg1'); ?>" width="200px" height="200px" alt="<?php echo get_option('wikivb_birth_sidebannerhta1'); ?>" title="<?php echo get_option('wikivb_birth_sidebannerhta1'); ?>" /></a>
			<a href="<?php echo get_option('wikivb_birth_sidebannerhad2'); ?>" title="<?php echo get_option('wikivb_birth_sidebannerhta2'); ?>" target="_blank"><img src="<?php echo get_option('wikivb_birth_sidebannerhimg2'); ?>" width="200px" height="200px" alt="<?php echo get_option('wikivb_birth_sidebannerhta2'); ?>" title="<?php echo get_option('wikivb_birth_sidebannerhta2'); ?>" /></a>
		</div>
	</div>
</div>
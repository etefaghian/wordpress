<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html <?php language_attributes(); ?> class="no-js">
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>" />
	<meta name="apple-mobile-web-app-capable" content="yes" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<meta name="robots" content="index, follow" />
	<meta name="description" content="<?php bloginfo('description'); ?>" />
	<title><?php bloginfo('name'); ?><?php wp_title(); ?></title>
	<link type="image/x-icon" href="<?php bloginfo('template_directory'); ?>/favicon.ico" rel="Shortcut Icon" />
	<link rel="profile" href="http://gmpg.org/xfn/11" />
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
	<link href="<?php bloginfo('stylesheet_url'); ?>" rel="stylesheet" type="text/css" />
	<link href="<?php bloginfo('template_directory'); ?>/wikivb-birth.css" rel="stylesheet" type="text/css" />
	<link rel="alternate" type="application/rss+xml" title="RSS 2.0" href="<?php bloginfo('rss2_url'); ?>" />
	<link rel="alternate" type="text/xml" title="RSS .92" href="<?php bloginfo('rss_url'); ?>" />
	<link rel="alternate" type="application/atom+xml" title="Atom 0.3" href="<?php bloginfo('atom_url'); ?>" />
	<script type="text/javascript" src="<?php bloginfo('template_directory'); ?>/scripts/jquery.min.js"></script>
	<link href="<?php bloginfo('template_directory'); ?>/scripts/media-queries.css" rel="stylesheet" type="text/css" />
	<script type="text/javascript" src="<?php bloginfo('template_directory'); ?>/scripts/css3-mediaqueries.js"></script>
	<script type="text/javascript" src="<?php bloginfo('template_directory'); ?>/scripts/styleswitch.js"></script>
	<script type="text/javascript" src="<?php bloginfo('template_directory'); ?>/scripts/tooltip.js"></script>
	<script type="text/javascript" src="<?php bloginfo('template_directory'); ?>/scripts/jquery-ui.js"></script>
	<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />
	<?php wp_get_archives('type=monthly&format=link'); ?>
	<?php //comments_popup_script(); // off by default ?>
	<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<div class="above_body">
<div id="header" class="floatcontainer doc_header">
<div class="center">
<a name="top" href="<?php bloginfo('url'); ?>" title="<?php bloginfo('name'); ?>" class="header-logo"><img src="<?php echo get_option('wikivb_birth_logo'); ?>" width="270px" height="80px" alt="<?php bloginfo('name'); ?>" title="<?php bloginfo('name'); ?>" /></a>
<div class="header-left">
<div class="left-icons">
<div class="li-main one"><span class="li-button one-button" rel="tooltip" title="تنظیمات ظاهر"></span>
<div class="li-content one-lic">
<div class="option-list colorselect">
<?php include(TEMPLATEPATH . '/choosetheme.php'); ?>
</div>
</div>
</div>
<div class="li-main two"><span class="li-button two-button" rel="tooltip" title="اخبار و اطلاعیه ها"></span>
<div class="li-content two-lic">
<ul>
<?php if (get_option('wikivb_birth_news1')) : ?><li><a href="<?php echo get_option('wikivb_birth_anews1'); ?>" target="_blank"><?php echo get_option('wikivb_birth_news1'); ?></a></li><?php endif ; ?>
<?php if (get_option('wikivb_birth_news2')) : ?><li><a href="<?php echo get_option('wikivb_birth_anews2'); ?>" target="_blank"><?php echo get_option('wikivb_birth_news2'); ?></a></li><?php endif ; ?>
<?php if (get_option('wikivb_birth_news3')) : ?><li><a href="<?php echo get_option('wikivb_birth_anews3'); ?>" target="_blank"><?php echo get_option('wikivb_birth_news3'); ?></a></li><?php endif ; ?>
<?php if (get_option('wikivb_birth_news4')) : ?><li><a href="<?php echo get_option('wikivb_birth_anews4'); ?>" target="_blank"><?php echo get_option('wikivb_birth_news4'); ?></a></li><?php endif ; ?>
<?php if (get_option('wikivb_birth_news5')) : ?><li><a href="<?php echo get_option('wikivb_birth_anews5'); ?>" target="_blank"><?php echo get_option('wikivb_birth_news5'); ?></a></li><?php endif ; ?>
</ul>
</div>
</div>
<div class="li-main three"><span class="li-button three-button" rel="tooltip" title="جستجو کنید"></span>
<div class="li-content three-lic">
<form method="get" id="searchform" class="searchform" action="<?php echo home_url(); ?>/">
     <input type="text" value="کليد واژه + اينتر" onblur="if (this.value == '') this.value = 'کليد واژه + اينتر';" onfocus="if (this.value == 'کليد واژه + اينتر') this.value = '';" name="s" id="s" /><input type="submit" id="searchsubmit" value="" />
</form>
</div>
</div>
</div>
<a href="<?php echo get_option('wikivb_birth_headerbannerad'); ?>" title="<?php echo get_option('wikivb_birth_headerbannerta'); ?>"><img src="<?php echo get_option('wikivb_birth_headerbannerimg'); ?>" width="468px" height="60px" alt="<?php echo get_option('wikivb_birth_headerbannerta'); ?>" title="<?php echo get_option('wikivb_birth_headerbannerta'); ?>" /></a>
</div>
</div>
</div>

<div class="center">
<div class="nav-menu">
<span class="open-navbar"></span>
<div class="navbar-hide">
<?php if ( has_nav_menu( 'navbar-menu' ) ) : ?>
		<?php wp_nav_menu( array( 'theme_location' => 'navbar-menu', 'container' => false, 'menu_class' => 'navtabs floatcontainer', 'menu_id' => 'navtabs', 'fallback_cb' => '' ));
else : ?>
<ul id="navtabs" class="navtabs floatcontainer">
<li><a href="<?php bloginfo('url'); ?>">صفحه اصلی</a></li>
</ul>
<?php endif; ?>
</div>
	
	<div id="toplinks" class="toplinks">
		<?php if (is_user_logged_in()) : ?>
			<ul class="isuser">
				<li class="headavatar" rel="tooltip" title="<?php $current_user = wp_get_current_user(); echo $current_user->user_login; ?> خوش آمدید"><?php $current_user = wp_get_current_user();if ( ($current_user instanceof WP_User) ) {echo get_avatar( $current_user->user_email, 32 );} ?></li>
				<div class="toplinksleft buttstopl">
					<li class="toplinkspannel" rel="tooltip" title="کنترل پنل"><a href="<?php echo get_edit_user_link(); ?>"><span></span></a></li>
					<li class="toplinkslogout" rel="tooltip" title="خروج"><a href="<?php echo wp_logout_url(); ?>"><span></span></a></li>
				</div>
			</ul>
		<?php else : ?>
			<ul class="nouser not-user">
				<?php if (get_option('users_can_register')) : ?><li id="register-link" class="nolog-link"><a href="<?php echo wp_registration_url(); ?>" rel="nofollow">عضويت</a></li><?php endif ; ?>
				<li id="login-main"><span class="nolog-link" id="open-login">ورود</span>
				<div class="login-box">	
<form method="post" action="<?php echo wp_login_url(); ?>" id="navbar_loginform" name="navbar_loginform">
	<input type="text" size="20" class="input" id="navbar_username" name="log" placeholder="نام کاربری" value="" />
	<input type="password" size="20" class="input" id="navbar_password" name="pwd" placeholder="رمز عبور" value="" />
	<button type="submit" class="loginbutton" title="ورود" id="wp-submit" name="wp-submit"><span>ورود</span></button>
	<input type="hidden" value="<?php bloginfo('url'); ?>" name="redirect_to" />
	<div id="remember" class="remember"><input type="checkbox" value="forever" id="rememberme" name="rememberme" class="regular-checkbox" /><label for="rememberme"></label><span>به ياد داشته باش</span></div>
</form>	
				</div>
				</li>
			</ul>
		<?php endif ; ?>
</div>
</div>
</div>
</div>
<div class="center">
<?php if (is_home()) : ?>
<div class="header-wall">
<?php if (get_option('wikivb_birth_aboutus_sub')) : ?><h4><?php echo get_option('wikivb_birth_aboutus_sub'); ?></h4><?php endif ; ?>
<?php if (get_option('wikivb_birth_aboutus_text')) : ?><span><?php echo get_option('wikivb_birth_aboutus_text'); ?></span><?php endif ; ?>
</div>
<?php endif; ?>
<div id="breadcrumb" class="breadcrumb"><?php custom_breadcrumbs(); ?></div>
<div class="body_wrapper">
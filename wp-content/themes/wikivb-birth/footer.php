<div class="clear-both"></div>
</div>
</div>
<div class="the-foot"><div class="center">
<div class="foot-top">
<ul class="follow-us">
<?php if (get_option('wikivb_birth_telegram_url')) : ?><li><a href="<?php echo get_option('wikivb_birth_wikivb_birth_telegram_url'); ?>" target="_blank" rel="tooltip" title="کانال تلگرام" class="telegram"><span></span></a></li><?php endif ; ?>
<?php if (get_option('wikivb_birth_facebook_url')) : ?><li><a href="<?php echo get_option('wikivb_birth_wikivb_birth_facebook_url'); ?>" target="_blank" rel="tooltip" title="فيسبوک" class="one"><span></span></a></li><?php endif ; ?>
<?php if (get_option('wikivb_birth_twitter_url')) : ?><li><a href="<?php echo get_option('wikivb_birth_wikivb_birth_twitter_url'); ?>" target="_blank" rel="tooltip" title="توييتر" class="two"><span></span></a></li><?php endif ; ?>
<?php if (get_option('wikivb_birth_instagram_url')) : ?><li><a href="<?php echo get_option('wikivb_birth_wikivb_birth_instagram_url'); ?>" target="_blank" rel="tooltip" title="اينستاگرام" class="three"><span></span></a></li><?php endif ; ?>
<?php if (get_option('wikivb_birth_googleplus_url')) : ?><li><a href="<?php echo get_option('wikivb_birth_wikivb_birth_googleplus_url'); ?>" target="_blank" rel="tooltip" title="گوگل پلاس" class="four"><span></span></a></li><?php endif ; ?>
<li><a href="<?php bloginfo('rss2_url'); ?>" target="_blank" rel="tooltip" title="فيد مطالب" class="five"><span></span></a></li>
</ul>
<span class="copyright"><b>&#169;</b> تمامی حقوق برای 
<a href="<?php bloginfo('url'); ?>" target="_blank" title="<?php bloginfo('name'); ?>"><?php bloginfo('name'); ?></a>
 محفوظ بوده و هرگونه کپی برداري از محتوای انجمن پيگرد قانونی دارد</span>
</div>
<?php wp_nav_menu( array( 'theme_location' => 'footer-menu', 'container_class' => 'floatcontainer footer', 'container_id' => 'footer', 'menu_class' => 'footer_links', 'menu_id' => 'footer_links', 'fallback_cb' => '' )); ?>
</div></div>
<script type="text/javascript">
$('.one-button').click(function(e){
 e.stopPropagation();
 $('.one-lic').slideToggle('fast');
 $(".one-button").toggleClass("active-button");
});
$('.one-lic').click(function(e){
 e.stopPropagation();
});
$(document).click(function(){
 $('.one-lic').slideUp();
 $( ".one-button" ).removeClass( "active-button", 300, "easeInBack" );
});
$('.two-button').click(function(e){
 e.stopPropagation();
 $('.two-lic').slideToggle('fast');
 $(".two-button").toggleClass("active-button");
});
$('.two-lic').click(function(e){
 e.stopPropagation();
});
$(document).click(function(){
 $('.two-lic').slideUp();
 $( ".two-button" ).removeClass( "active-button", 300, "easeInBack" );
});
$('.three-button').click(function() {
 $( ".three-lic" ).toggle("slide", { direction: "left" }, 300);
 $(".three-button").toggleClass("active-button");
});
$( ".one-button , .three-button" ).click(function() {
 $( ".two-lic" ).hide( "drop", { direction: "down" }, "fast" );
 $( ".two-button" ).removeClass( "active-button", 300, "easeInBack" );
 return false;
});
$( ".two-button , .three-button" ).click(function() {
 $( ".one-lic" ).hide( "drop", { direction: "down" }, "fast" );
 $( ".one-button" ).removeClass( "active-button", 300, "easeInBack" );
 return false;
});
$( "#open-login" ).click(function() {
        $( ".login-box" ).toggle("slide", { direction: "up" }, 300);
	$("#open-login").toggleClass("open-login-active");
});
$( ".open-navbar" ).click(function() {
	$(".navbar-hide").toggle("slide", { direction: "up" }, 300);
	$(".open-navbar").toggleClass("open-navbar-active");
});
</script>
<?php wp_footer(); ?>
</body>
</html>
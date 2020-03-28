<?php

add_action('init','propanel_of_options');

if (!function_exists('propanel_of_options')) {
function propanel_of_options(){

$shortname = "wikivb_birth";
$siteurl = get_option( 'siteurl' );
global $tt_options;
$tt_options = get_option('of_options');
$tt_categories = array();  
$tt_categories_obj = get_categories('hide_empty=0');
foreach ($tt_categories_obj as $tt_cat) {
$tt_categories[$tt_cat->cat_ID] = $tt_cat->cat_name;}
$sample_array = array("1","2","3","4","5","6","7","8","9","10");


$options = array();


$options[] = array( "name" => __('تنظیمات','framework_localize'),
			"type" => "heading");
			
			
$options[] = array( "name" => __('لوگو','framework_localize'),
			"id" => $shortname."_logo",
			"std" => $siteurl."/wp-content/themes/wikivb-birth/images/logo.png",
			"type" => "upload");
$options[] = array( "name" => __('تصویر بند انگشتی پیش فرض','framework_localize'),
			"desc" => __('تصویر باید در اندازه 150 در 150 باشد.','framework_localize'),
			"id" => $shortname."_thumbimg",
			"std" => $siteurl."/wp-content/themes/wikivb-birth/images/default-image.png",
			"type" => "upload");
$options[] = array( "name" => __('تغییر رنگ','framework_localize'),
			"desc" => __('رنگ مورد نظر را جهت پیش فرض شدن انتخاب نمایید.','framework_localize'),
			"id" => $shortname."_choosecolor",
			"std" => "1",
			"type" => "select",
			"options" => array(
				'Green',
				'Red',
				'Blue',
				'Yellow',
				'Grayblue',
				'Pink'));
$options[] = array( "name" => __('عنوان درباره ما','framework_localize'),
			"desc" => __('در صورت خالی گذاشتن کادر، عنوان نمایش داده نخواهد شد.','framework_localize'),
			"id" => $shortname."_aboutus_sub",
			"std" => "لورم ايپسوم متن ساختگي !",
			"type" => "text");
$options[] = array( "name" => __('متن درباره ما','framework_localize'),
			"desc" => __('در صورت خالی گذاشتن کادر، متن نمایش داده نخواهد شد.','framework_localize'),
			"id" => $shortname."_aboutus_text",
			"std" => " لورم ايپسوم متن ساختگي با توليد سادگي نامفهوم از صنعت چاپ و با استفاده از طراحان گرافيک است. چاپگرها و متون بلکه روزنامه و مجله در ستون و سطرآنچنان که لازم است و براي شرايط فعلي تکنولوژي ",
			"type" => "textarea");
				
$options[] = array( "name" => __('آدرس کانال تلگرام','framework_localize'),
			"desc" => __('آدرس کانال تلگرام را اینجا وارد نمایید. در صورت خالی گذاشتن کادر، آیکن مربوط به کانال تلگرام نمایش داده نخواهد شد.','framework_localize'),
			"id" => $shortname."_telegram_url",
			"std" => $siteurl,
			"type" => "text");
$options[] = array( "name" => __('آدرس فیس بوک','framework_localize'),
			"desc" => __('آدرس فیس بوک را اینجا وارد نمایید. در صورت خالی گذاشتن کادر، آیکن مربوط به فیس بوک نمایش داده نخواهد شد.','framework_localize'),
			"id" => $shortname."_facebook_url",
			"std" => $siteurl,
			"type" => "text");
$options[] = array( "name" => __('آدرس توییتر','framework_localize'),
			"desc" => __('آدرس توییتر را اینجا وارد نمایید. در صورت خالی گذاشتن کادر، آیکن مربوط به توییتر نمایش داده نخواهد شد.','framework_localize'),
			"id" => $shortname."_twitter_url",
			"std" => $siteurl,
			"type" => "text");
$options[] = array( "name" => __('آدرس اینستاگرام','framework_localize'),
			"desc" => __('آدرس اینستاگرام را اینجا وارد نمایید. در صورت خالی گذاشتن کادر، آیکن مربوط به اینستاگرام نمایش داده نخواهد شد.','framework_localize'),
			"id" => $shortname."_instagram_url",
			"std" => $siteurl,
			"type" => "text");
$options[] = array( "name" => __('آدرس گوگل پلاس','framework_localize'),
			"desc" => __('آدرس گوگل پلاس را اینجا وارد نمایید. در صورت خالی گذاشتن کادر، آیکن مربوط به گوگل پلاس نمایش داده نخواهد شد.','framework_localize'),
			"id" => $shortname."_googleplus_url",
			"std" => $siteurl,
			"type" => "text");
			


$options[] = array( "name" => __('اخبار و اطلاعیه ها','framework_localize'),
			"type" => "heading");
			
			
$options[] = array( "name" => __('متن خبر 1','framework_localize'),
			"id" => $shortname."_news1",
			"std" => "متن خبر 1",
			"type" => "text");
$options[] = array( "name" => __('لینک خبر 1','framework_localize'),
			"id" => $shortname."_anews1",
			"std" => $siteurl,
			"type" => "text");
$options[] = array( "name" => __('متن خبر 2','framework_localize'),
			"id" => $shortname."_news2",
			"std" => "متن خبر 2",
			"type" => "text");
$options[] = array( "name" => __('لینک خبر 2','framework_localize'),
			"id" => $shortname."_anews2",
			"std" => $siteurl,
			"type" => "text");
$options[] = array( "name" => __('متن خبر 3','framework_localize'),
			"id" => $shortname."_news3",
			"std" => "متن خبر 3",
			"type" => "text");
$options[] = array( "name" => __('لینک خبر 3','framework_localize'),
			"id" => $shortname."_anews3",
			"std" => $siteurl,
			"type" => "text");
$options[] = array( "name" => __('متن خبر 4','framework_localize'),
			"id" => $shortname."_news4",
			"std" => "متن خبر 4",
			"type" => "text");
$options[] = array( "name" => __('لینک خبر 4','framework_localize'),
			"id" => $shortname."_anews4",
			"std" => $siteurl,
			"type" => "text");
$options[] = array( "name" => __('متن خبر 5','framework_localize'),
			"id" => $shortname."_news5",
			"std" => "متن خبر 5",
			"type" => "text");
$options[] = array( "name" => __('لینک خبر 5','framework_localize'),
			"id" => $shortname."_anews5",
			"std" => $siteurl,
			"type" => "text");


$options[] = array( "name" => __('آخرین مطالب','framework_localize'),
			"type" => "heading");
			

$options[] = array( "name" => __('تعداد نمایش آخرین مطالب','framework_localize'),
			"id" => $shortname."_number_lastsubject",
			"std" => "4",
			"type" => "select",
			"options" => $sample_array);
$options[] = array( "name" => __('نمایش آخرین مطالب اول','framework_localize'),
			"desc" => __('دسته مورد نظر را انتخاب نمایید.','framework_localize'),
			"id" => $shortname."_lastsubject_one",
			"std" => "1",
			"type" => "select",
			"options" => $tt_categories);
$options[] = array( "name" => __('نمایش آخرین مطالب دوم','framework_localize'),
			"desc" => __('دسته مورد نظر را انتخاب نمایید.','framework_localize'),
			"id" => $shortname."_lastsubject_two",
			"std" => "1",
			"type" => "select",
			"options" => $tt_categories);
$options[] = array( "name" => __('نمایش/عدم نمایش دسته سوم','framework_localize'),
			"desc" => __('برای نمایش دادن آخرین مطالب دسته سوم، این گزینه را تیک بزنید.','framework_localize'),
			"id" => $shortname."_alastsubject_three",
			"std" => "false",
			"type" => "checkbox");
$options[] = array( "name" => __('نمایش آخرین مطالب سوم','framework_localize'),
			"desc" => __('دسته مورد نظر را انتخاب نمایید.','framework_localize'),
			"id" => $shortname."_lastsubject_three",
			"std" => "1",
			"type" => "select",
			"options" => $tt_categories);
$options[] = array( "name" => __('نمایش/عدم نمایش دسته چهارم','framework_localize'),
			"desc" => __('برای نمایش دادن آخرین مطالب دسته چهارم، این گزینه را تیک بزنید.','framework_localize'),
			"id" => $shortname."_alastsubject_four",
			"std" => "false",
			"type" => "checkbox");
$options[] = array( "name" => __('نمایش آخرین مطالب چهارم','framework_localize'),
			"desc" => __('دسته مورد نظر را انتخاب نمایید.','framework_localize'),
			"id" => $shortname."_lastsubject_four",
			"std" => "1",
			"type" => "select",
			"options" => $tt_categories);




$options[] = array( "name" => __('تبلیغات','framework_localize'),
			"type" => "heading");

$options[] = array( "name" => __('آدرس بنر 60*460 هدر','framework_localize'),
			"desc" => __('آدرس تصویر پیش فرض : '.$siteurl.'/wp-content/themes/wikivb-birth/images/ads.gif'),
			"id" => $shortname."_headerbannerimg",
			"std" => $siteurl."/wp-content/themes/wikivb-birth/images/ads.gif",
			"type" => "text");
$options[] = array( "name" => __('لینک بنر 60*460 هدر','framework_localize'),
			"id" => $shortname."_headerbannerad",
			"std" => $siteurl,
			"type" => "text");
$options[] = array( "name" => __('توضیحات بنر 60*460 هدر','framework_localize'),
			"id" => $shortname."_headerbannerta",
			"std" => "تبلیغات شما در اینجا",
			"type" => "text");
$options[] = array( "name" => __('آدرس بنر عمودی 240*120 راست','framework_localize'),
			"desc" => __('آدرس تصویر پیش فرض : '.$siteurl.'/wp-content/themes/wikivb-birth/images/sideV-ads.png'),
			"id" => $shortname."_sidebannerimgr",
			"std" => $siteurl."/wp-content/themes/wikivb-birth/images/sideV-ads.png",
			"type" => "text");
$options[] = array( "name" => __('لینک بنر عمودی 240*120 راست','framework_localize'),
			"id" => $shortname."_sidebanneradr",
			"std" => $siteurl,
			"type" => "text");
$options[] = array( "name" => __('توضیحات بنر عمودی 240*120 راست','framework_localize'),
			"id" => $shortname."_sidebannertar",
			"std" => "تبلیغات شما در اینجا",
			"type" => "text");
$options[] = array( "name" => __('آدرس بنر عمودی 240*120 چپ','framework_localize'),
			"desc" => __('آدرس تصویر پیش فرض : '.$siteurl.'/wp-content/themes/wikivb-birth/images/sideV-ads.png'),
			"id" => $shortname."_sidebannerimgl",
			"std" => $siteurl."/wp-content/themes/wikivb-birth/images/sideV-ads.png",
			"type" => "text");
$options[] = array( "name" => __('لینک بنر عمودی 240*120 چپ','framework_localize'),
			"id" => $shortname."_sidebanneradl",
			"std" => $siteurl,
			"type" => "text");
$options[] = array( "name" => __('توضیحات بنر عمودی 240*120 چپ','framework_localize'),
			"id" => $shortname."_sidebannertal",
			"std" => "تبلیغات شما در اینجا",
			"type" => "text");
$options[] = array( "name" => __('آدرس بنر افقی 200*200 شماره 1','framework_localize'),
			"desc" => __('آدرس تصویر پیش فرض : '.$siteurl.'/wp-content/themes/wikivb-birth/images/sideH-ads.png'),
			"id" => $shortname."_sidebannerhimg1",
			"std" => $siteurl."/wp-content/themes/wikivb-birth/images/sideH-ads.png",
			"type" => "text");
$options[] = array( "name" => __('لینک بنر افقی 200*200 شماره 1','framework_localize'),
			"id" => $shortname."_sidebannerhad1",
			"std" => $siteurl,
			"type" => "text");
$options[] = array( "name" => __('توضیحات بنر افقی 200*200 شماره 1','framework_localize'),
			"id" => $shortname."_sidebannerhta1",
			"std" => "تبلیغات شما در اینجا",
			"type" => "text");
$options[] = array( "name" => __('آدرس بنر افقی 200*200 شماره 2','framework_localize'),
			"desc" => __('آدرس تصویر پیش فرض : '.$siteurl.'/wp-content/themes/wikivb-birth/images/sideH-ads.png'),
			"id" => $shortname."_sidebannerhimg2",
			"std" => $siteurl."/wp-content/themes/wikivb-birth/images/sideH-ads.png",
			"type" => "text");
$options[] = array( "name" => __('لینک بنر افقی 200*200 شماره 2','framework_localize'),
			"id" => $shortname."_sidebannerhad2",
			"std" => $siteurl,
			"type" => "text");
$options[] = array( "name" => __('توضیحات بنر افقی 200*200 شماره 2','framework_localize'),
			"id" => $shortname."_sidebannerhta2",
			"std" => "تبلیغات شما در اینجا",
			"type" => "text");


update_option('of_template',$options); 					  
update_option('of_shortname',$shortname);

}
}
?>
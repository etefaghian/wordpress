<?php
require_once "comment-t.php";
require_once(TEMPLATEPATH . '/admin/admin-functions.php');
require_once(TEMPLATEPATH . '/admin/admin-interface.php');
require_once(TEMPLATEPATH . '/admin/theme-settings.php');
if (function_exists('add_theme_support')) {
    add_theme_support('post-thumbnails');
    add_image_size('birththumb', 120, 120, true);
	add_image_size('birththumbc', 150, 150, true);
}
add_action('after_setup_theme', 'lang_birth');
function lang_birth(){
    load_theme_textdomain('birth', get_template_directory() . '/languages');
}
function birth_menu() {
	register_nav_menus(array('footer-menu' => __( 'فوتر' )));
	register_nav_menus(array('navbar-menu' => __( 'ناوبر' )));
}
add_action( 'init', 'birth_menu' );
if (function_exists('register_sidebar')) {
	register_sidebar(array(
        'name'=> 'left_sidebar',
        'id' => 'left_sidebar',
        'before_widget' => '<div id="%1$s" class="sidebarm %2$s">',
        'after_widget' => '</div></div>',
        'before_title' => '<div class="sidehead">',
        'after_title' => '</div><div class="sidebody">',
    ));
}
function pagination_wikibirth() {
global $wp_query;
$big = 12345678;
$page_format = paginate_links( array(
    'base' => str_replace( $big, '%#%', esc_url( get_pagenum_link( $big ) ) ),
    'format' => '?paged=%#%',
    'current' => max( 1, get_query_var('paged') ),
    'total' => $wp_query->max_num_pages,
    'type'  => 'array'
) );
if( is_array($page_format) ) {
            $paged = ( get_query_var('paged') == 0 ) ? 1 : get_query_var('paged');
			echo '<div class="navigation">';
            echo '<span class="pages">'. ' صفحه ' . $paged . ' از ' . $wp_query->max_num_pages .'</span>';
            foreach ( $page_format as $page ) {
                    echo "$page";
            }
			echo '</div>';
}
}
function likeThis($post_id,$action = 'get') {
	if(!is_numeric($post_id)) {
		error_log("خطا : مقدار عددي براي post_id ارسال نشده است");
		return;
	}
	switch($action) {
	case 'get':
		$data = get_post_meta($post_id, '_likes');
		if(!is_numeric($data[0])) {
			$data[0] = 0;
			add_post_meta($post_id, '_likes', '0', true);
		}
		return $data[0];
	break;
	case 'update':
		if(isset($_COOKIE["like_" . $post_id])) {
			return;
		}
		$currentValue = get_post_meta($post_id, '_likes');
		if(!is_numeric($currentValue[0])) {
			$currentValue[0] = 0;
			add_post_meta($post_id, '_likes', '1', true);
		}
		$currentValue[0]++;
		update_post_meta($post_id, '_likes', $currentValue[0]);
		setcookie("like_" . $post_id, $post_id,time()+(60*60*24*365));
	break;
	}
}
function likes_wikivb($post_id) {
	$likes = likeThis($post_id);
	$who = ' پسندیده';
	if($likes == 1) {
		$who = ' پسندیده';
	}
	if(isset($_COOKIE["like_" . $post_id])) {
	print '<a href="#" class="likeThis done" id="like-'.$post_id.'">'.$likes.$who.'</a>';
		return;
	}
	print '<a href="#" class="likeThis" id="like-'.$post_id.'">'.$likes.$who.'</a>';
}
function setUpPostLikes($post_id) {
	if(!is_numeric($post_id)) {
		error_log("خطا : مقدار عددي براي post_id ارسال نشده است");
		return;
	}
	add_post_meta($post_id, '_likes', '0', true);
}
function checkHeaders() {
	if(isset($_POST["likepost"])) {
		likeThis($_POST["likepost"],'update');
	}
}
function jsIncludes() {
	wp_enqueue_script('jquery');
	wp_register_script('wikivb-likes',
	 get_template_directory_uri(). '/scripts/likes.js' );
	wp_enqueue_script('wikivb-likes',array('jquery'));
}
add_action ('publish_post', 'setUpPostLikes');
add_action ('init', 'checkHeaders');
add_action ('get_header', 'jsIncludes');
function custom_breadcrumbs() {
    $custom_taxonomy    = 'product_cat';
    global $post,$wp_query;
    if ( !is_front_page() ) {
        echo '<ul class="floatcontainer">';
        echo '<li class="navbithome"><a href="' . get_home_url() . '"><span></span></a></li><li class="navbit"><a href="' . get_home_url() . '">صفحه اصلی</a></li>';
        if ( is_archive() && !is_tax() && !is_category() && !is_tag() ) {
            echo '<li class="navbit lastnavbit"><span>' . post_type_archive_title($prefix, false) . '</span></li>';
        } else if ( is_archive() && is_tax() && !is_category() && !is_tag() ) {
            $post_type = get_post_type();
            if($post_type != 'post') {
                $post_type_object = get_post_type_object($post_type);
                $post_type_archive = get_post_type_archive_link($post_type);
                echo '<li class="navbit"><a href="' . $post_type_archive . '">' . $post_type_object->labels->name . '</a></li>';
            }
            $custom_tax_name = get_queried_object()->name;
            echo '<li class="navbit lastnavbit"><span>' . $custom_tax_name . '</span></li>';
        } else if ( is_single() ) {
            $post_type = get_post_type();
            if($post_type != 'post') {
                $post_type_object = get_post_type_object($post_type);
                $post_type_archive = get_post_type_archive_link($post_type);
                echo '<li class="navbit"><a href="' . $post_type_archive . '">' . $post_type_object->labels->name . '</a></li>';
            }
            $category = get_the_category();
            if(!empty($category)) {
                $last_category = end(array_values($category));
                $get_cat_parents = rtrim(get_category_parents($last_category->term_id, true, ','),',');
                $cat_parents = explode(',',$get_cat_parents);
                $cat_display = '';
                foreach($cat_parents as $parents) {
                    $cat_display .= '<li class="navbit">'.$parents.'</li>';
                }
            }
            $taxonomy_exists = taxonomy_exists($custom_taxonomy);
            if(empty($last_category) && !empty($custom_taxonomy) && $taxonomy_exists) {
                $taxonomy_terms = get_the_terms( $post->ID, $custom_taxonomy );
                $cat_id         = $taxonomy_terms[0]->term_id;
                $cat_nicename   = $taxonomy_terms[0]->slug;
                $cat_link       = get_term_link($taxonomy_terms[0]->term_id, $custom_taxonomy);
                $cat_name       = $taxonomy_terms[0]->name;
            }
            if(!empty($last_category)) {
                echo $cat_display;
                echo '<li class="navbit lastnavbit"><span>' . get_the_title() . '</span></li>';
            } else if(!empty($cat_id)) {
                echo '<li class="navbit"><a href="' . $cat_link . '">' . $cat_name . '</a></li>';
                echo '<li class="navbit lastnavbit"><span>' . get_the_title() . '</span></li>';
            } else {
                echo '<li class="navbit lastnavbit"><span>' . get_the_title() . '</span></li>';
            }
        } else if ( is_category() ) {
            echo '<li class="navbit lastnavbit"><span>' . single_cat_title('', false) . '</span></li>';
        } else if ( is_page() ) {
            if( $post->post_parent ){
                $anc = get_post_ancestors( $post->ID );
                $anc = array_reverse($anc);
                foreach ( $anc as $ancestor ) {
                    $parents .= '<li class="navbit"><a href="' . get_permalink($ancestor) . '">' . get_the_title($ancestor) . '</a></li>';
                }
                echo $parents;
                echo '<li class="navbit lastnavbit"><span> ' . get_the_title() . '</span></li>';
            } else {
                echo '<li class="navbit lastnavbit"><span> ' . get_the_title() . '</span></li>';
            }
        } else if ( is_tag() ) {
            $term_id        = get_query_var('tag_id');
            $taxonomy       = 'post_tag';
            $args           = 'include=' . $term_id;
            $terms          = get_terms( $taxonomy, $args );
            $get_term_id    = $terms[0]->term_id;
            $get_term_slug  = $terms[0]->slug;
            $get_term_name  = $terms[0]->name;
            echo '<li class="navbit lastnavbit"><span>بایگانی برچسب : ' . $get_term_name . '</span></li>';
        } elseif ( is_day() ) {
            echo '<li class="navbit"><a href="' . get_year_link( get_the_time('Y') ) . '">' . get_the_time('Y') . ' Archives</a></li>';
            echo '<li class="navbit"><a href="' . get_month_link( get_the_time('Y'), get_the_time('m') ) . '">' . get_the_time('M') . ' Archives</a></li>';
            echo '<li class="navbit lastnavbit"><span> ' . get_the_time('jS') . ' ' . get_the_time('M') . ' Archives</span></li>';
        } else if ( is_month() ) {
            echo '<li class="navbit"><a href="' . get_year_link( get_the_time('Y') ) . '">' . get_the_time('Y') . ' Archives</a></li>';
            echo '<li class="navbit lastnavbit"><span>' . get_the_time('M') . ' Archives</span></li>';
        } else if ( is_year() ) {
            echo '<li class="navbit lastnavbit"><span>' . get_the_time('Y') . ' Archives</span></li>';
        } else if ( is_author() ) {
            global $author;
            $userdata = get_userdata( $author );
            echo '<li class="navbit lastnavbit"><span>' . 'Author: ' . $userdata->display_name . '</span></li>';
        } else if ( get_query_var('paged') ) {
            echo '<li class="navbit lastnavbit"><span>'.__('Page') . ' ' . get_query_var('paged') . '</span></li>';
        } else if ( is_search() ) {
            echo '<li class="navbit lastnavbit"><span>جستجوی پیشرفته</span></li>';
        } elseif ( is_404() ) {
            echo '<li class="navbit lastnavbit"><span>صفحه وجود ندارد</span></li>';
        }
        echo '</ul>';
    } else {
        echo '<ul class="floatcontainer"><li class="navbithome"><a href="' . get_home_url() . '"><span></span></a></li><li class="navbit lastnavbit"><span>صفحه اصلی</span></li></ul>';
    }   
}
function limit_title($title){
$n = 50;
if ( strlen ($title) > $n )
{
echo mb_substr(the_title($before = '', $after = '', FALSE), 0, $n) . '...';
}
else { the_title(); }
}
function getPostViews($postID){
    $count_key = 'post_views_count';
    $count = get_post_meta($postID, $count_key, true);
    if($count==''){
        delete_post_meta($postID, $count_key);
        add_post_meta($postID, $count_key, '0');
        return "بدون بازدید";
    }
    return $count.' بازدید';
}
function setPostViews($postID) {
    $count_key = 'post_views_count';
    $count = get_post_meta($postID, $count_key, true);
    if($count==''){
        $count = 0;
        delete_post_meta($postID, $count_key);
        add_post_meta($postID, $count_key, '0');
    }else{
        $count++;
        update_post_meta($postID, $count_key, $count);
    }
}
add_filter('manage_posts_columns', 'posts_column_views');
add_action('manage_posts_custom_column', 'posts_custom_column_views',5,2);
function posts_column_views($defaults){
    $defaults['post_views'] = __('بازدید');
    return $defaults;
}
function posts_custom_column_views($column_name, $id){
	if($column_name === 'post_views'){
        echo getPostViews(get_the_ID());
    }
}
function add_stylesheet_to_head() {
$choosecolor = get_option('wikivb_birth_choosecolor');
$choosecolor2 = "$choosecolor";
switch ($choosecolor2) {
case "Green":
echo '<link rel="stylesheet" type="text/css" href="' . get_template_directory_uri() . '/scripts/colors/green.css" />
<link rel="alternate stylesheet" type="text/css" media="screen" title="grayblue-theme" href="' . get_template_directory_uri() . '/scripts/colors/grayblue.css" />
<link rel="alternate stylesheet" type="text/css" media="screen" title="red-theme" href="' . get_template_directory_uri() . '/scripts/colors/red.css" />
<link rel="alternate stylesheet" type="text/css" media="screen" title="blue-theme" href="' . get_template_directory_uri() . '/scripts/colors/blue.css" />
<link rel="alternate stylesheet" type="text/css" media="screen" title="yellow-theme" href="' . get_template_directory_uri() . '/scripts/colors/yellow.css" />
<link rel="alternate stylesheet" type="text/css" media="screen" title="pink-theme" href="' . get_template_directory_uri() . '/scripts/colors/pink.css" />';
break;
case "Red":
echo '<link rel="stylesheet" type="text/css" href="' . get_template_directory_uri() . '/scripts/colors/red.css" />
<link rel="alternate stylesheet" type="text/css" media="screen" title="green-theme" href="' . get_template_directory_uri() . '/scripts/colors/green.css" />
<link rel="alternate stylesheet" type="text/css" media="screen" title="grayblue-theme" href="' . get_template_directory_uri() . '/scripts/colors/grayblue.css" />
<link rel="alternate stylesheet" type="text/css" media="screen" title="blue-theme" href="' . get_template_directory_uri() . '/scripts/colors/blue.css" />
<link rel="alternate stylesheet" type="text/css" media="screen" title="yellow-theme" href="' . get_template_directory_uri() . '/scripts/colors/yellow.css" />
<link rel="alternate stylesheet" type="text/css" media="screen" title="pink-theme" href="' . get_template_directory_uri() . '/scripts/colors/pink.css" />';
break;
case "Blue":
echo '<link rel="stylesheet" type="text/css" href="' . get_template_directory_uri() . '/scripts/colors/blue.css" />
<link rel="alternate stylesheet" type="text/css" media="screen" title="red-theme" href="' . get_template_directory_uri() . '/scripts/colors/red.css" />
<link rel="alternate stylesheet" type="text/css" media="screen" title="green-theme" href="' . get_template_directory_uri() . '/scripts/colors/green.css" />
<link rel="alternate stylesheet" type="text/css" media="screen" title="grayblue-theme" href="' . get_template_directory_uri() . '/scripts/colors/grayblue.css" />
<link rel="alternate stylesheet" type="text/css" media="screen" title="yellow-theme" href="' . get_template_directory_uri() . '/scripts/colors/yellow.css" />
<link rel="alternate stylesheet" type="text/css" media="screen" title="pink-theme" href="' . get_template_directory_uri() . '/scripts/colors/pink.css" />';
break;
case "Yellow":
echo '<link rel="stylesheet" type="text/css" href="' . get_template_directory_uri() . '/scripts/colors/yellow.css" />
<link rel="alternate stylesheet" type="text/css" media="screen" title="blue-theme" href="' . get_template_directory_uri() . '/scripts/colors/blue.css" />
<link rel="alternate stylesheet" type="text/css" media="screen" title="red-theme" href="' . get_template_directory_uri() . '/scripts/colors/red.css" />
<link rel="alternate stylesheet" type="text/css" media="screen" title="green-theme" href="' . get_template_directory_uri() . '/scripts/colors/green.css" />
<link rel="alternate stylesheet" type="text/css" media="screen" title="grayblue-theme" href="' . get_template_directory_uri() . '/scripts/colors/grayblue.css" />
<link rel="alternate stylesheet" type="text/css" media="screen" title="pink-theme" href="' . get_template_directory_uri() . '/scripts/colors/pink.css" />';
break;
case "Grayblue":
echo '<link rel="stylesheet" type="text/css" href="' . get_template_directory_uri() . '/scripts/colors/grayblue.css" />
<link rel="alternate stylesheet" type="text/css" media="screen" title="yellow-theme" href="' . get_template_directory_uri() . '/scripts/colors/yellow.css" />
<link rel="alternate stylesheet" type="text/css" media="screen" title="blue-theme" href="' . get_template_directory_uri() . '/scripts/colors/blue.css" />
<link rel="alternate stylesheet" type="text/css" media="screen" title="red-theme" href="' . get_template_directory_uri() . '/scripts/colors/red.css" />
<link rel="alternate stylesheet" type="text/css" media="screen" title="green-theme" href="' . get_template_directory_uri() . '/scripts/colors/green.css" />
<link rel="alternate stylesheet" type="text/css" media="screen" title="pink-theme" href="' . get_template_directory_uri() . '/scripts/colors/pink.css" />';
break;
case "Pink":
echo '<link rel="alternate stylesheet" type="text/css" media="screen" title="pink-theme" href="' . get_template_directory_uri() . '/scripts/colors/pink.css" />
<link rel="alternate stylesheet" type="text/css" media="screen" title="grayblue-theme" href="' . get_template_directory_uri() . '/scripts/colors/grayblue.css" />
<link rel="alternate stylesheet" type="text/css" media="screen" title="yellow-theme" href="' . get_template_directory_uri() . '/scripts/colors/yellow.css" />
<link rel="alternate stylesheet" type="text/css" media="screen" title="blue-theme" href="' . get_template_directory_uri() . '/scripts/colors/blue.css" />
<link rel="alternate stylesheet" type="text/css" media="screen" title="red-theme" href="' . get_template_directory_uri() . '/scripts/colors/red.css" />
<link rel="alternate stylesheet" type="text/css" media="screen" title="green-theme" href="' . get_template_directory_uri() . '/scripts/colors/green.css" />';
break;
default:
echo '<link rel="stylesheet" type="text/css" href="' . get_template_directory_uri() . '/scripts/colors/green.css" />
<link rel="alternate stylesheet" type="text/css" media="screen" title="grayblue-theme" href="' . get_template_directory_uri() . '/scripts/colors/grayblue.css" />
<link rel="alternate stylesheet" type="text/css" media="screen" title="red-theme" href="' . get_template_directory_uri() . '/scripts/colors/red.css" />
<link rel="alternate stylesheet" type="text/css" media="screen" title="blue-theme" href="' . get_template_directory_uri() . '/scripts/colors/blue.css" />
<link rel="alternate stylesheet" type="text/css" media="screen" title="yellow-theme" href="' . get_template_directory_uri() . '/scripts/colors/yellow.css" />
<link rel="alternate stylesheet" type="text/css" media="screen" title="pink-theme" href="' . get_template_directory_uri() . '/scripts/colors/pink.css" />';
}
}
add_action( 'wp_head', 'add_stylesheet_to_head' );
?>
<?php

// Hide admin bar from front end
show_admin_bar(false);

// Add support thumbnail
add_theme_support( 'post-thumbnails' );

// Add support title tag
add_theme_support( 'title-tag' );

// Add style and javascript theme
function add_style_script()
{
	wp_enqueue_style('style', get_stylesheet_uri() );
	wp_enqueue_style('bootstrap', get_template_directory_uri().'/css/bootstrap.min.css');
	wp_enqueue_style('hover', get_template_directory_uri().'/css/hover.css');
	wp_enqueue_style('lightslider', get_template_directory_uri().'/css/lightslider.css');
	wp_enqueue_style('magnific-popup', get_template_directory_uri().'/css/magnific-popup.css');
	wp_enqueue_style('jquery.mmenu', get_template_directory_uri().'/css/jquery.mmenu.css');
	wp_enqueue_style('slider', get_template_directory_uri().'/css/slider.css');
	wp_enqueue_style('responsive', get_template_directory_uri().'/css/responsive.css');
	wp_enqueue_style('magnific-popup', get_template_directory_uri().'/css/magnific-popup.css');

	// Javascripts
	wp_enqueue_script('jquery', get_template_directory_uri().'/js/jquery-3.2.1.min.js');
	wp_enqueue_script('bootstrap', get_template_directory_uri().'/js/bootstrap.min.js', '', '1.0', true);
	// wp_enqueue_script('jssor.slider.mini', get_template_directory_uri().'/js/jssor.slider.mini.js', '', '1.0', true);
	// wp_enqueue_script('slider', get_template_directory_uri().'/js/slider.js', '', '1.0', true);
	wp_enqueue_script('lightslider', get_template_directory_uri().'/js/lightslider.js', '', '1.0', true);
	wp_enqueue_script('jquery.magnific-popup.min', get_template_directory_uri().'/js/jquery.magnific-popup.min.js', '', '1.0', true);
	wp_enqueue_script('jquery.mmenu', get_template_directory_uri().'/js/jquery.mmenu.js', '', '1.0', true);
	wp_enqueue_script('lmtscript', get_template_directory_uri().'/js/lmtscript.js', '', '1.0', true);
}
add_action('wp_enqueue_scripts', 'add_style_script');

// Add icon/meta/... into Header
function add_header()
{
	
	echo '<link rel="shortcut icon" href="'.get_template_directory_uri().'/images/favicon.ico" type="image/x-icon">';
	echo '<link rel="icon" href="'.get_template_directory_uri().'/images/favicon.ico" type="image/x-icon">';
}
add_action('wp_head', 'add_header');

// Add menu TOp
function register_top_menus() {
  register_nav_menus(
    array(
      'top-menu' => __( 'Top Menu' ),
      'footer-menu' => __( 'Footer Menu' )
     )
   );
 }
 add_action( 'init', 'register_top_menus' );

 // Add Type of product taxanomy
 function add_type_product_taxonomy()
 {
 	$labels = array(
 		'name' => 'Loại sản phẩm',
 		'singular' => 'Loại sản phẩm',
        'menu_name' => 'Loại sản phẩm'
 		);
 	$args = array(
 		'labels' => $labels,
 		'description' => 'Phân loại sản phẩm nằm trong cùng một nhóm',
 		'hierarchical'               => true,
        'public'                     => true,
        'show_ui'                    => true,
        'show_admin_column'          => true,
        'show_in_nav_menus'          => true,
        'show_tagcloud'              => true,
        'rewrite'           => array( 'slug' => 'loai-san-pham' ),
 		);
 	register_taxonomy('type-of-product', 'product', $args);
 	// flush_rewrite_rules();
 }
 add_action('init', 'add_type_product_taxonomy', 0);

// Add custom post type Product
function add_post_type_product()
{
	$label = array(
        'name' => __('Các sản phẩm', 'lemitran'), //Tên post type dạng số nhiều
        'singular_name' => __('Sản phẩm', 'lemitran') //Tên post type dạng số ít
    );
	$args = array(
       //Tham số cấu hình cho custom post type
		'labels' => $label, //Gọi các label trong biến $label ở trên
        'description' => __('Post type đăng sản phẩm','lemitran'), //Mô tả của post type
        'rewrite' => array('slug' => 'san-pham'),
        'supports' => array(
            'title',
            'thumbnail',
            'comments',
            'revisions',
            'custom-fields'
        ), //Các tính năng được hỗ trợ trong post type
        'taxonomies' => array( 'type-of-product' ), //Các taxonomy được phép sử dụng để phân loại nội dung
        'hierarchical' => false, //Cho phép phân cấp, nếu là false thì post type này giống như Post, true thì giống như Page
        'public' => true, //Kích hoạt post type
        'show_ui' => true, //Hiển thị khung quản trị như Post/Page
        'show_in_menu' => true, //Hiển thị trên Admin Menu (tay trái)
        'show_in_nav_menus' => true, //Hiển thị trong Appearance -> Menus
        'show_in_admin_bar' => true, //Hiển thị trên thanh Admin bar màu đen.
        'menu_position' => 5, //Thứ tự vị trí hiển thị trong menu (tay trái)
        'menu_icon' => '', //Đường dẫn tới icon sẽ hiển thị
        'can_export' => true, //Có thể export nội dung bằng Tools -> Export
        'has_archive' => true, //Cho phép lưu trữ (month, date, year)
        'exclude_from_search' => true, //Loại bỏ khỏi kết quả tìm kiếm
        'publicly_queryable' => true, //Hiển thị các tham số trong query, phải đặt true
        'capability_type' => 'post' //
    );

    register_post_type( 'product' , $args );
}
add_action('init', 'add_post_type_product');

// Add meta post
function add_meta_infor_box()
{
        add_meta_box(
            'information_product',           // Unique ID
            'Thông tin sản phẩm',  // Box title
            'html_form_information', // Content callback, must be of type callable
            'product'// Post type
           
        );

        add_meta_box(
            'digital_product', // Unique ID
            'Thông số kỹ thuật',  // Box title
            'html_form_digital', // Content callback, must be of type callable
            'product'// Post type
           
        );

        add_meta_box(
            'guide_product', // Unique ID
            __('Hướng dẫn', 'lemitran'),  // Box title
            'html_form_guide', // Content callback, must be of type callable
            'product'// Post type
           
        );

        add_meta_box(
            'media_product', // Unique ID
            __('Video/Hình ảnh', 'lemitran'),  // Box title
            'html_form_media', // Content callback, must be of type callable
            'product'// Post type
           
        );
}
add_action('add_meta_boxes', 'add_meta_infor_box');


function html_form_information($post)
{
	$content = get_post_meta($post->ID, 'custom_information', true);
	//This function adds the WYSIWYG Editor 
	wp_editor ( 
	$content , 
		'custom_information', 
		array ( "media_buttons" => true, 'textarea_rows' => 10 ) 
		);

}

function html_form_digital($post)
{
	$content = get_post_meta($post->ID, 'custom_digital', true);
	//This function adds the WYSIWYG Editor 
	wp_editor ( 
		$content , 
		'custom_digital', 
		array ( "media_buttons" => true, 'textarea_rows' => 10 ) 
		);

}

function html_form_guide($post)
{
	$content = get_post_meta($post->ID, 'custom_guide', true);
	//This function adds the WYSIWYG Editor 
	wp_editor ( 
		$content , 
		'custom_guide', 
		array ( "media_buttons" => true, 'textarea_rows' => 10 ) 
		);

}

function html_form_media($post)
{
	$content = get_post_meta($post->ID, 'custom_media', true);
	//This function adds the WYSIWYG Editor 
	wp_editor ( 
	$content , 
		'custom_media', 
		array ( "media_buttons" => true, 'textarea_rows' => 10 ) 
		);

}

// Save Custom Post
add_action( 'save_post', 'product_information_product_save' );
function product_information_product_save(  ) {
	global $post;
	if ($post->post_type != 'product') {
		return;
	}
	$custom_information = $_POST['custom_information'];
	$custom_digital = $_POST['custom_digital'];
	$custom_guide = $_POST['custom_guide'];
	$custom_media = $_POST['custom_media'];
	// var_dump(   $_POST['custom_information']); die;
	update_post_meta( $post->ID, 'custom_information', $custom_information );
	update_post_meta( $post->ID, 'custom_digital', $custom_digital );
	update_post_meta( $post->ID, 'custom_guide', $custom_guide );
	update_post_meta( $post->ID, 'custom_media', $custom_media );

}


function location_posts( $query ) {
    if( is_tax( 'type-of-product' ) ) {
        $query->set('posts_per_page', 1);
    }
    return $query;
}
add_filter('pre_get_posts', 'location_posts');


// Widget footer latest news
function footer_latest_news_widget_location() {
	register_sidebar( array(
		'name'          => 'Footer Widget Area',
		'id'            => 'footer-widget-area',
		// 'before_widget' => '<div class="chw-widget">',
		// 'after_widget'  => '</div>',
		// 'before_title'  => '<h2 class="chw-title">',
		// 'after_title'   => '</h2>',
	) );

}
add_action( 'widgets_init', 'footer_latest_news_widget_location' );


// Custom pagination
function lvd_pagination($posts){
	$pages =  paginate_links( array(
	    'format' => '?paged=%#%',
	    'current' => max( 1, get_query_var('paged') ),
	    'total' => $posts->max_num_pages,
	    'prev_text' => __('Trước', 'lemitran'),
	    'next_text' => __('Sau', 'lemitran'),
	    'type' => 'array'
	) );
	$paged = ( get_query_var('paged') ) ? get_query_var('paged') : 1; 
	if (is_array($pages)) {
		$t = '<ul class="pagination">';
		foreach ($pages as $page) {
			$t .= '<li class="page-item">'. $page.'</li>';
		}
		$t .= '</ul>';
	}
	echo $t;
	//wp_reset_query();

}


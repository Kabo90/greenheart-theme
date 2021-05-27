<?php



function greenHeartThemePageTitle(){
	
	//add title to the blog
	add_theme_support('title-tag');
	add_theme_support('custom-logo');
	add_theme_support( 'post-thumbnails' );

	
}


add_action('after_setup_theme','greenHeartThemePageTitle');









function greenHeartStyle(){
	
	
	$version = wp_get_theme()->get('Version');
	wp_enqueue_style('greenHeartStyleSheet', get_template_directory_uri().'/style.css', array('fontAwesomeStyleSheet'), $version , 'all');
	wp_enqueue_style('fontAwesomeStyleSheet', 'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css', array(), '4.7.0' , 'all');
	wp_enqueue_style('fontAwesomeStyleSheet2', 'https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css
', array(), '4.4.0' , 'all');

}

add_action('wp_enqueue_scripts','greenHeartStyle');







function greenHeartJscript(){
	
	
wp_enqueue_script('greenHeartJavaScript1', get_template_directory_uri().'/assets/js/main.js', array(), '1.0', true );
wp_enqueue_script('greenHeartJavaScript2', get_template_directory_uri().'/assets/js/primaryNavigation.js', array(), '1.0', true );

	
}

add_action('wp_enqueue_scripts','greenHeartJscript');






function greenHeartMenu(){
	
$location = array(

  'primary' => 'Desktop Menu',
  'secondary' => 'Mobile Menu'
);
  register_nav_menus($location);
	
}

add_action('init','greenHeartMenu');









function greenHeartWidget(){
	
	register_sidebar(
	
	array('before_title' =>'<h2 class="widget-title">',
           'after_title' => '</h2>',
		 'before_widget' => '<section id="%1$s" class="widget %2$s">',
		  'after_widget' => '</section>',
	      'name' => 'SideBar Area',
        	'id' => 'sidebar-1',
			'description' => 'Sidebar Widget Area'
		 )
	
	
	
	);
	
	
	
	register_sidebar(
	
	array('before_title' =>'<h2 class="widget-title">',
           'after_title' => '</h2>',
		 'before_widget' => '<section id="%1$s" class="widget %2$s">',
		  'after_widget' => '</section>',
	      'name' => 'Footer Area',
        	'id' => 'footer-1',
			'description' => 'Sidebar Widget Area'
		 )
	
	
	
	);
	
	
	
}


add_action('widgets_init','greenHeartWidget');



?>






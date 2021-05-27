<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<!-- Title -->


<?php

wp_head();

?>



</head>







<body>



<div class="header">
<h1>
<a class="headingLogo" href='<?php echo get_home_url(); ?>'><?php echo get_bloginfo('name');?></a>
</h1>

<?php
if (function_exists('the_custom_logo') ){
	
	$logoId = get_theme_mod('custom_logo');
	$logo   = wp_get_attachment_image_src($logoId);
	
	
}



?>

<div class="logoContainer">
<a class="headingLogo" href='<?php echo get_home_url(); ?>'><img class="siteLogo"  src="<?php echo $logo[0]; ?>"></a>
</div>


  <div class="search-container">
<?php get_search_form();?>
  </div>
  
  
  
<div class="topnav">
    <a href="javascript:void(0);" class="icon" onclick="myFunction()">
    <i class="fa fa-bars"></i>
  </a>
  
  
  <div id="myLinks">

  <?php
  
  wp_nav_menu(
  
   array(
     'menu' => 'primary',
	 'container' => '',
     'theme_location' => 'primary',


   
   )
  
  );
  
  
  ?>
  
    </div>


  </div>

  

</div>











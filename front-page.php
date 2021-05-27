<?php 



/*

if(isset($_SERVER['REMOTE_ADDR']) && $_SERVER['REMOTE_ADDR'] == "184.103.10.247"){
	
	
	
}else{
	
header("location:https://www.google.com");

}


*/

?>




<?php

get_header();


?>




<div class="wraper">



<div class="main">
<!--posts-->
<?php
get_template_part( 'template-parts/posts' );
?>

<hr class="separator">





</div>







<!--sidebar-->
<?php 
get_sidebar(); 
?>



</div>
















<?php

get_footer();


?>


<?php

get_header();


?>







<div class="wraper">




<div class="main">

<!--single-post-->
<?php
get_template_part( 'template-parts/single-post' );
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


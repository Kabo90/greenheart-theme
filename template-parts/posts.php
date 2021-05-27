
    <div class="posts">


<?php 
	

if(have_posts() ){
		
 while(have_posts() ){
	the_post();	
	?>
	

	<div class="postThumbnail">
	<?php
    if ( has_post_thumbnail() ) {	
	?>
	

	  	<a  href="<?php the_permalink(); ?>">
	<?php
    the_post_thumbnail('medium');
	?>
	
	<?php
    }

    ?>
<div class="postTitle">
<?php the_title();?>
</div>
<div class="postPara">
<?php the_excerpt(); ?>
</div>
</a>
 <p><?php echo get_the_date( 'M d Y' );?> &nbsp &nbsp  Written by <?php the_author();?></p>
</div>
	<?php
			
		}
	


the_posts_pagination();

	}

?>

 






    </div>

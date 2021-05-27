<div class="posts">


<?php 
	

if(have_posts() ){
		
 while(have_posts() ){
	 
	the_post();	
?>
	
	
<div class="postTitleSinglePost">
<?php the_title();?>
</div>


<div class="postThumbnail">
<?php
if ( has_post_thumbnail() ) {	
the_post_thumbnail('medium');
}

}

}
?>
</div>



<div class="postParaSinglePost">
<?php the_content();?>
</div>


<br><br><br>
  <span class="postDate"><?php the_date();?></span>
 
<span id="postTags" class="postTags"><?php the_tags('Tags: &#160; <i class="fa fa-tag"></i> ', '&#160; ', '<br />');?></span>
  <br><br>
  <span class="commentsNumber"><i class="fa fa-comment"></i><?php comments_number();?></span>


<!-- get comments from template_template 'comments.php' -->
<?php comments_template();?>

    </div>
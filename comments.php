<?php if ( post_password_required() )
	return;
?>



<?php

if(has_tag() ){
	
//ok

}else{

?>

<script>
document.getElementById("postTags").style.display = "none";
</script>

<?php
}

?>




<div id="comments" class="comments-area">

	<?php if ( have_comments() ) { ?>
		<h2 class="comments-title">
			<?php comments_number(); ?>
		</h2>

		<ol class="comment-list">
			<?php
				wp_list_comments( array(
					'style'       => 'ol',
					'short_ping'  => false,
					'avatar_size' => 96,
				) );
			?>
		</ol><!-- .comment-list -->

		 <?php paginate_comments_links();  // Check for comment navigation ?>

		<?php if ( ! comments_open() && get_comments_number() ) { ?>
		<p class="no-comments"><?php echo 'Comments are closed.';} ?></p>

	   <?php }else{
		   
		   if ( !comments_open()) {
	   //in case there is no comments and the comments are closed on the post//

		?>
		<p class="no-comments">
		<?php 
		echo '&nbsp Sorry comments are closed on this post.';}
		?>
		</p>
		<?php

	         }
			 
			 
			 

	comment_form();
	
	
	
	
	?>

</div><!-- end #comments -->

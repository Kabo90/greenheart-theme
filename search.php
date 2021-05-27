<?php get_header(); ?>
<div class="category-title"><h2><center>Search result</center></h2> </div>
<div id="main" style="width:99%; background:white; margin:auto;">
<div id="content">
<?php if(have_posts()){ ?><?php while(have_posts()){ the_post(); ?>
	
         
        <div class="post">
                        <div class="featured-thumb"><?php the_post_thumbnail('thumbnail'); ?></div>

        <h1 class="singleposttitle"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h1>
          <div class="smallcontent">  <?php
			    if( strpos( get_the_content(), 'more-link' ) === false ) {
			        the_excerpt();
			    }
			    else {
			        the_content('Continue Reading &raquo;');
			    }
			?></div>
            <div class="entry">   
              
                 <div class="totalcomments"><a href="<?php comments_link(); ?>"><?php comments_number('0', '1', '%'); ?></a><span class="commentname">COMMENTS</span></div>
                 <p class="postmetadata">
                 
               
                <span class="author"><?php echo get_avatar( get_the_author_meta('ID'), '32' ); ?><?php the_author_posts_link(); ?></span>
                <span class="category"><?php the_category(' / ') ?></span>
                <span class="date"><?php the_date(); ?></span>
                
              	                

               </p>
               


              
                  
            </div>
            
            
        </div>
<?php }?>
<?php }else{ echo "<center>Sorry! We did not find something match your search</center>";} ?>
      
     </div> <!--end content-->   
<?php
the_posts_pagination();
?>

</div> <!--end main-->
<?php get_footer(); ?>

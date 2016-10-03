<article><div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
 <header class="entry-header">
  <?php  the_title(sprintf('<h1 class="entry-title"><a href="%s">', esc_url (get_permalink( ))), '</a></h1>' ); ?>
  <small>
  	Posted on: <?php  the_time('F j, Y') ?> at <?php the_time('g:i a'); ?>, in <?php the_category();  ?>
  </small>
 </header>
 <div class="row">
  <?php  if ( has_post_thumbnail( )):?>
  	  <div class="col-xs-12 col-sm-4">
  	  	<div class="thumbnail"><?php the_post_thumbnail('medium'); ?></div>
  	  </div>
  	  <div class="col-xs-12 col-sm-8">
  	  <?php the_content( ); ?>
  	  </div>
  	  <?php else: ?> 
  	  <div class="col-xs-12">
  	  <?php the_content( ); ?>
  	  </div>
  	  <?php endif; ?>
  	  </div>
  	  </div>	
	
</article>











<!-- 
<h3><?php the_title(); ?></h3>

<div class="thumbnail-img"><?php //the_post_thumbnail('thumbnail'); ?></div>
	<section>
	 	<div class="contentbox">
			<div class="entry">

            	<?php //the_content('Read the rest of this entry »'); ?>
            
        	</div>
		</div>
	</section>
<small>Posted on <?php  //the_time('F j, Y') ?> at <?php //the_time('g:i a'); ?>, in <?php the_category(); ?></small> -->


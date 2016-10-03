<?php 

/*
	Template Name: Community
*/


get_header(); ?>

<section>
<hr>

 <div class="row">

 	<div class="col-xs-12 col-mid-8">
 	<?php
 	// setting up a custome loop to pull out posts from specific categories //
 	$args = array (
 		'type' => 'post',
 		'posts_per_page' => 1,
 		'category_name' => 'community',
 		);
 	$lastwalk = new WP_Query($args);
 	if ($lastwalk->have_posts()):
 			while ($lastwalk->have_posts() ): $lastwalk->the_post();
 		get_template_part('content', get_post_format() );
 		endwhile;
 		endif;
 		wp_reset_postdata();
 	
 	?>
 	</div>
 </div>	
 <hr>

 <div class="row">

 	<div class="col-xs-12 col-mid-8">
 	<?php
 	// setting up a custome loop to pull out posts from specific categories //
 	$args = array (
 		'type' => 'post',
 		'posts_per_page' => 2,
 		'offset' => 1,
 		'category_name' => 'community',
 		);
	 	$lastwalk = new WP_Query($args);
	 	if ($lastwalk->have_posts()):
 			while ($lastwalk->have_posts() ): $lastwalk->the_post();
 		get_template_part('content', get_post_format() );
 		endwhile;
 		endif;
 		wp_reset_postdata();
 	
 	?>
 	</div>
 </div>	
 <hr>

 </section>

<?php get_footer(); ?>
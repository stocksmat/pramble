<?php 

/*
	Template Name: Popular walks
*/


get_header(); ?>

<section>
<hr>

 <div class="row">

 	<div class="col-xs-12 col-md-12">
 	<?php
 	// setting up a custome loop to pull out posts from specific categories //
 	$args = array (
 		'type' => 'post',
 		'posts_per_page' => 1,
 		'category_name' => 'walks',
 		);
 	$lastwalk = new WP_Query($args);
 	if ($lastwalk->have_posts()):
 			while ($lastwalk->have_posts() ): $lastwalk->the_post();?>
 		<div class="col-xs-12 col-md-12">
 			<div class="textbox">
 		<?php
 		get_template_part('content', get_post_format() ); ?>
 		</div>
 		</div>
 		<?php
 		endwhile;
 		endif;
 		wp_reset_postdata();
 	
 	?>
 	</div>
 </div>	


 <div class="row">

 	<div class="col-xs-12">
 	<?php
 	// setting up a custome loop to pull out posts from specific categories //
 	$args = array (
 		'type' => 'post',
 		'posts_per_page' => 2,
 		'offset' => 1,
 		'category_name' => 'walks',
 		);
	 	$lastwalk = new WP_Query($args);
	 	if ($lastwalk->have_posts()):
 			while ($lastwalk->have_posts() ): $lastwalk->the_post(); ?>
 		<div class="col-xs-12 col-md-12">
 			<div class="textbox">
 		<?php
 		get_template_part('content', get_post_format() );?>
 		</div>
 		</div>
 		<?php
 		endwhile;
 		endif;
 		wp_reset_postdata();
 	
 	?>
 	</div>
 </div>	
 <hr>

 </section>

<?php get_footer(); ?>
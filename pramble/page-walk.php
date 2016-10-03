<?php 

/*
	Template Name: Rate Walks
*/


get_header(); ?>

<section>
<hr>

 <div class="row">

 	<div class="col-xs-12 col-mid-8">

		<?php 
		
		if( have_posts() ): ?>
		<?php while( have_posts() ): the_post(); ?>
			<?php the_content( ); ?>
		<?php  endwhile; ?>
 	
 <?php endif;
				
		?>

 
 

 </section>

<?php get_footer(); ?>
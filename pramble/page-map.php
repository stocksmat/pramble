<?php 

/*
	Template Name: Map page
*/


get_header(); ?>

<?php if ( have_posts() ):
	
			while (have_posts()): the_post(); ?>
				
				
				
					<div class="row">
						<div class="col-xs-12 col-md-8">
							<div class="pramblemapcontainer">
								<?php echo do_shortcode('[codepeople-post-map cat="203"]'); ?>
							</div>	
						</div>
						<div class="col-xs-12 col-md-4">
							<div class="textbox">
						 		<p><?php the_content(); ?></p>
						 	</div>
						 </div>
					</div>

				

				<hr>
				
			 <?php endwhile;
		endif;
		?>
		
	

 

<?php get_footer(); ?>
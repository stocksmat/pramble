<?php 

/*
	Template Name: search page
*/


get_header(); ?>

<?php if ( have_posts() ):
	
			while (have_posts()): the_post(); ?>
			<div class="row">
			<div class="col-xs-12 col-md-12">
				<div class="textboxsearch">
				<h1>Search for a walk</h1>
				<h2>type a search perameter or click on a map pin</h2>
				</div>
				</div>
				</div>
				<div class="row">
					<div class="col-xs-6 col-md-4">
						<?php get_search_form(); ?>
					</div>
				</div>		
					<div class="row">

						<div class="col-xs-12 col-md-12">
						
								<div class="pramblemapcontainersearch">
									<?php echo do_shortcode('[codepeople-post-map cat="203"]'); ?>
								</div>	
						</div> 	
					</div>
				

				

				
				
			 <?php endwhile;
		endif;
		
	

 ?>

<?php get_footer(); ?>
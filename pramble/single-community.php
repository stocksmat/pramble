<?php get_header(); ?>

<div class="row">
	
	<div class="col-xs-12 col-sm-8">
		
	

		<?php 
		
		if( have_posts() ): 
			
			while( have_posts() ): the_post(); ?>
				<article id="post-<?php the_id();  ?>"<?php post_class( ); ?>>
					<?php  the_title('<h1 class="entry-title">','</h1>' ); ?>
						<?php if (has_post_thumbnail()): ?>
							<small><?php the_category(' '); ?> || <?php the_tags(); ?>||<?php edit_post_link(); ?></small>

			 				<div class="pull-left"><?php the_post_thumbnail('thumbnail' ); ?></div>
						<?php endif; ?>
						<div class="textbox">
							<?php the_content(); ?>
						</div>
						<hr>

						<div class="row">
						<div class="col-xs-6 text-left"><?php previous_post_link(); ?></div>
						<div class="col-xs-6 text-right"><?php next_post_link(); ?></div>
						</div>
						<?php if (comments_open() ){
							comments_template();
						} else {
							echo'<h5 class="text-center">Sorry, Comments are restricted on these posts</h5>';
						}
						?>
				</article>
			<?php  endwhile;
			
		endif;
				
		?>
	
	
	</div>
	
	<?php 
				 		
		echo '<div class="col-xs-12 col-sm-4">';				
 		get_sidebar();
		echo '</div>';
		
 		?>
	
</div>
<hr>
<?php get_footer(); ?>
	 				
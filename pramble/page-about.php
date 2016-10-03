<?php get_header(); ?>

<img src="<?php header_image(); ?>" height ="<?php _e( 'auto', 'pramble' );?>" width=" <?php  _e( '100%', 'pramble');?>"alt="" />

<?php if ( have_posts() ):

	
			while (have_posts()): the_post(); ?>

			<h1>
				TRhis page will have
			</h1>

				<p><?php the_content(); ?></p>
				
				<h3><?php the_title(); ?></h3>

				<small><?php the_time('F jS, Y') ?> <!-- by <?php the_author() ?> --></small>

				<hr>
				
			 <?php endwhile;
		endif;
		# code...
	

 ?>

<?php get_footer(); ?>
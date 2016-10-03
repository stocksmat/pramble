<article id="post-<?php the_id();  ?>"<?php post_class( ); ?>>
	<?php  the_title('<h1 class="entry-title">','</h1>' ); ?>
	<?php if (has_post_thumbnail()): ?>
		<div class="pull-left"><?php the_post_thumbnail('thumbnail' ); ?></div>
	<?php endif; ?>
		<small><?php the_category(' '); ?> || <?php the_tags(); ?>||<?php edit_post_link(); ?></small>
	<div class="row">
		<div class="col-xs-12 col-md-8">
			<div class="textbox">
				<?php the_excerpt(); ?>
			</div>
		</div>	
	</div>
	<hr>
</article>
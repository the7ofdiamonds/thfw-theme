<?php if( have_posts() ): while( have_posts() ): the_post();?>
	<div class="card content <?php post_class(); ?>" id="post-<?php the_ID(); ?>">
	<?php the_content();?>
	</div>
<?php endwhile; else: endif;?>
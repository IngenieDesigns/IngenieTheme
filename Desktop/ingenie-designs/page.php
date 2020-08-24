<?php 
 get_header();
?>
</div>
<?php 
				if ( have_posts() ) : while ( have_posts() ) : the_post();
  	
					get_template_part( 'content', get_post_format() );
                    comment_form();
  wp_list_comments( $args );
				endwhile; endif; 
			?>
	 <?php wp_link_pages( $args ); ?>
 <?php get_footer(); ?>
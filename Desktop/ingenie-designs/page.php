<?php 
 get_header();
?>

<div class="fluid-container" style="background-color: #f5f5f5;margin-bottom: 25px;">
<?php
if ( function_exists('yoast_breadcrumb') ) {
yoast_breadcrumb('
<p id="breadcrumbs">','</p>
');
}
?>
</div>
<div class="fluid-container">
	

<div class="container">
	<h1 class="title"><?php wp_title(''); ?></h1>
</div>
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
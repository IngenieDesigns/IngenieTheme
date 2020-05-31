<?php /* Template Name: Home Page With Slider */ ?>

<?php 
 get_header();
?>

<div class="fluid-container" style="background-color: #f5f5f5;margin-bottom: 0px;">
<?php
if ( function_exists('yoast_breadcrumb') ) {
yoast_breadcrumb('
<p id="breadcrumbs">','</p>
');
}
?>
</div>
<div class="fluid-container">
	<?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar("Slider") ) : ?>
<?php endif;?>
</div>	

<?php 
				if ( have_posts() ) : while ( have_posts() ) : the_post();
  	
					get_template_part( 'content', get_post_format() );
  
				endwhile; endif; 
			?>
 <?php get_footer(); ?>
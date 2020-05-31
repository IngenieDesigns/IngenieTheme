<?php /* Template Name: Blog Template */ ?>

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
	<?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar("Slider") ) : ?>
<?php endif;?>
</div>	

<?php 
				if ( have_posts() ) : while ( have_posts() ) : the_post();
  	
					get_template_part( 'content', get_post_format() );
  
				endwhile; endif; 
			?>
<div class="container-fluid darkmint">
		<div class="container slogan">
			<div class="row">
		<h2>Testimonials</h2>
			</div>
		</div>
		</div>
<div id="greytwit" class="fluid-container">
<div class="container">
	<div class="row">
		
<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
<p> <b>Tempo Fitness</b>
</p>
</div>

<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
<p> <b>Leannas Crystal Art</b></p>
</div>
</div>
	</div>
<div class="container">


</div>
 <?php get_footer(); ?>
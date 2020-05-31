<?php /* Template Name: Home Page With Slider and Featured */ ?>

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
<?php
  $args = array(
        'posts_per_page' => 5,
        'meta_key' => 'meta-checkbox',
        'meta_value' => 'yes'
    );
    $featured = new WP_Query($args);
 
if ($featured->have_posts()): while($featured->have_posts()): $featured->the_post(); ?>
<h3><a href="<?php the_permalink(); ?>"> <?php the_title(); ?></a></h3>
<p class="details">By <a href="<?php the_author_posts() ?>"><?php the_author(); ?> </a> / On <?php echo get_the_date('F j, Y'); ?> / In <?php the_category(', '); ?></p>
<?php if (has_post_thumbnail()) : ?>
 
<figure> <a href="<?php the_permalink(); ?>"><?php the_post_thumbnail(); ?></a> </figure>
<p ><?php the_excerpt();?></p>
<?php
endif;
endwhile; else:
endif;
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
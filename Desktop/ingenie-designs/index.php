<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package WordPress
 * @subpackage Twenty_Nineteen
 * @since 1.0.0
 */

get_header();
?>

	<section id="primary" class="content-area">
		<main id="main" class="site-main">
<div id="content" class="site-content" role="main">
  
 <!-- Start the Loop. -->
  <div class="container">
 <div class="row">
 <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

 	<!-- Test if the current post is in category 3. -->
 	<!-- If it is, the div box is given the CSS class "post-cat-three". -->
 	<!-- Otherwise, the div box is given the CSS class "post". -->

 	<?php if ( in_category( '3' ) ) : ?>
 		<div class="post-cat-three">
 	<?php else : ?>
 		<div class="site-post col-lg-6">
 	<?php endif; ?>


 	<!-- Display the Title as a link to the Post's permalink. -->
<div class="posthead">
 	<h2><a href="<?php the_permalink(); ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>"><?php the_title(); ?></a></h2>


 	<!-- Display the date (November 16th, 2009 format) and a link to other posts by this posts author. -->

 	
		<small><?php the_time('F jS, Y'); ?> by <?php the_author_posts_link(); ?></small></div>

 	<!-- Display the Post's content in a div box. -->

 	<div class="entry">
 	<div class="row no-gutters">
		<div class="col-lg-7" style="padding-left: 0px;padding-right: 0px;">
 		<?php the_excerpt(); ?>
			 </div>
			<div class="col-lg-5">
		<?php if ( has_post_thumbnail()) : ?>
    <a href="<?php the_permalink(); ?>" alt="<?php the_title_attribute(); ?>">
        <?php the_post_thumbnail(); ?>
    </a>
<?php endif; ?>
			</div>
 	


 	<!-- Display a comma separated list of the Post's Categories. -->

 	<p class="postmetadata"><?php _e( 'Posted in' ); ?> <?php the_category( ', ' ); ?></p>
 	
 	 <!-- closes the first div box -->
 	 </div>
</div>
</div>

 	<!-- Stop The Loop (but note the "else:" - see next line). -->

 <?php endwhile; else : ?>


 	<!-- The very first "if" tested to see if there were any Posts to -->
 	<!-- display.  This "else" part tells what do if there weren't any. -->
 	<p><?php esc_html_e( 'Sorry, no posts matched your criteria.' ); ?></p>


 	<!-- REALLY stop The Loop. -->
 <?php endif; ?>
    </div>
    </div>
</div><!-- #content .site-content -->

		</main><!-- .site-main -->
	</section><!-- .content-area -->


<?php
get_footer(); ?>
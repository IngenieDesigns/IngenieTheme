<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package WordPress
 * @subpackage Twenty_Nineteen
 * @since 1.0.0
 */

get_header();
?>
<div class="container">
	<section id="primary" class="content-area">
		<main id="main" class="site-main">

			<?php

			/* Start the Loop */
			while ( have_posts() ) :
				the_post();

				get_template_part( 'template-parts/content/blog', 'single' );

				if ( is_singular( 'attachment' ) ) {
					// Parent post navigation.
					the_post_navigation(
						array(
							/* translators: %s: parent post link */
							'prev_text' => sprintf( __( '<span class="meta-nav">Published in</span><span class="post-title">%s</span>', 'twentynineteen' ), '%title' ),
						)
					);
				} elseif ( is_singular( 'post' ) ) {
					// Previous/next post navigation.//
					the_post_navigation(
						array(
							'next_text' => '<span class="meta-nav" aria-hidden="true">' . __( 'Next Post', 'twentynineteen' ) . '</span> ' .
								'<span class="screen-reader-text">' . __( 'Next post:', 'twentynineteen' ) . '</span> <br/>' ,
							'prev_text' => '<span class="meta-nav" aria-hidden="true">' . __( 'Previous Post', 'twentynineteen' ) . '</span> ' .
								'<span class="screen-reader-text">' . __( 'Previous post:', 'twentynineteen' ) . '</span> <br/>' ,
						)
					);
				}

				// If comments are open or we have at least one comment, load up the comment template.
				if ( comments_open() || get_comments_number() ) {
					comments_template();
				}

			endwhile; // End of the loop.
			?>
            <?php if ( have_posts() ) : ?>
 
    <!-- Add the pagination functions here. -->
 
    <!-- Start of the main loop. -->
    <?php while ( have_posts() ) : the_post(); ?>
 
    <!-- the rest of your theme's main loop -->
 
    <?php endwhile; ?>
    <!-- End of the main loop -->
 
    <!-- Add the pagination functions here. -->
 

	 
<div class="nav-previous alignleft"><?php next_posts_link( 'Older posts' ); ?></div>
 
 
 
<div class="nav-next alignright"><?php previous_posts_link( 'Newer posts' ); ?></div>
 
<?php else : ?>
 
<?php _e('Sorry, no posts matched your criteria.'); ?>
 
<?php endif; ?>
</div>

		</main><!-- #main -->
	</section><!-- #primary -->
</div>
<?php
get_footer();
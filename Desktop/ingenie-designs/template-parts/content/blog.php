<div class="container">
<div class="postwrap">
	<a class="posttitle" href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>"><h2 class="post-title"><?php the_title(); ?></h2>
	<small class="post-meta"><?php the_date(); ?> by <a href="#"><?php the_author(); ?></a></small>

</div>
 <?php the_content(); ?>
<!-- /.blog-post -->
</div>
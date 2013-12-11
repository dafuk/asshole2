<?php

  /**
  *@desc A single blog post See page.php is for a page layout.
  */

  get_header();

  if (have_posts()) : while (have_posts()) : the_post();
  ?>

    <div class="postBubble" id="post-<?php the_ID(); ?>">

      <h1 class="postTitle"><a href="<?php the_permalink() ?>" rel="bookmark"><?php the_title(); ?></a></h1>
      <article><?php the_content(__('(more...)')); ?></article>
	<?php the_tags( '<p><strong>תגיות:</strong> ', ', ', '</p>'); ?>

      <hr>

    </div>

	<?php

  comments_template();

  endwhile; else: ?>

		<p>Sorry, no posts matched your criteria.</p>

<?php
  endif;

  get_footer();

?>
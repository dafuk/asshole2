<?php
  get_header();

  if (have_posts()) : while (have_posts()) : the_post();
  ?>

    <div class="postBubble" id="post-<?php the_ID(); ?>">

      <h1 class="postTitle"><a href="<?php the_permalink() ?>" rel="bookmark"><?php the_title(); ?></a></h1>
      <article><?php the_content(__('(more...)')); ?></article>
    </div>

  <?php
  comments_template();

  endwhile; else: ?>

    <p>;(</p>

<?php
  endif;

  get_footer();
?>
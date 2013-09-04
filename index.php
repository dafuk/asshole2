<?php

  get_header();

  if (have_posts()): ?>


  <ol id="posts"><?php

    while (have_posts()) : the_post(); ?>

    <li class="postBubble" id="post-<?php the_ID(); ?>">

      <h2 class="postTitle"><a href="<?php the_permalink() ?>" rel="bookmark"><?php the_title(); ?></a></h2>
      <article><?php the_content(__('(more...)')); ?></article>
    </li>
    <li>
<article>
<ins class="adsbygoogle"
     style="display:inline-block;width:480px;height:60px"
     data-ad-client="ca-pub-2134012079272013"
     data-ad-slot="2198875640"></ins>
<script>
  (adsbygoogle = window.adsbygoogle || []).push({});
</script>

</article>
<hr>
    </li>

    <?php endwhile; ?>

  </ol>

<?php else: ?>

  <p><?php _e('Sorry, no posts matched your criteria.'); ?></p>

<?php

  endif;
  ?>

  <?php if (will_paginate()): ?>
  
    <ul id="pagination">
      <li class="previous"><?php posts_nav_link('','','') ?></li>
    </ul>
    
  <?php endif; ?>


  <?php
  get_footer();
?>

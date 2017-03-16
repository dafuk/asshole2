<?php

  get_header();

  if (have_posts()): ?>


  <ol id="posts"><?php

    while (have_posts()) : the_post(); ?>
<?php	ass_post_item(); ?>
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

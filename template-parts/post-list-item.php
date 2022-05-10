<li>
  <h3>
    <?php the_title() ?>
  </h3>
  <p class="dateTime">
    <?php echo get_the_date() ?>
    &nbsp;-&nbsp;
    <?php the_time() ?>
  </p>
  <?php the_excerpt() ?>
  <a href="<?php the_permalink() ?>">View Post</a>
</li>

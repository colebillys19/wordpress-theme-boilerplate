<!-- This file is responsible for displaying single blog posts. -->
<?php get_header() ?>
<article>
  <div class="postContent">
    <h2><?php the_title() ?></h2>
    <p class="dateTime">
      <?php the_date() ?>
      &nbsp;-&nbsp;
      <?php the_time() ?>
    </p>
    <?php the_content() ?>
  </div>
  <?php comments_template() ?>
</article>
<?php get_footer() ?>

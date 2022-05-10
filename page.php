<!--
  This file is responsible for displaying static pages. (e.g. an about page)
-->
<?php get_header() ?>
<article>
  <h2>
    <?php the_title() ?>
  </h2>
  <?php the_content() ?>
</article>
<?php get_footer() ?>

<!--
  This is the most generic template file in a wordpress theme, and one of the
  two required files for a theme (the other ebing style.css). It is used to
  display a page when nothing more specific matches a query. For this
  boilerplate, we're using this file to provide a page to user that displays
  all posts - as this is the simplest way to allow for that functionality.
-->
<?php get_header() ?>
<article>
  <h2>Blog</h2>
  <?php get_template_part( 'template-parts/post-list' ) ?>
  <?php the_posts_pagination() ?>
</article>
<?php get_footer() ?>

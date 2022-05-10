<ul class="postList">
  <?php
    if ( have_posts() ) {
      while ( have_posts() ) {
        the_post();
        get_template_part( 'template-parts/post-list-item' );
      }
    }
  ?>
</ul>

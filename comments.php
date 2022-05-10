<!-- This file is responsible for displaying and serving up comments. -->
<div class="commentsContent">
  <h4>
    <?php
      if ( ! have_comments() ) {
        echo 'no comments';
      } elseif (get_comments_number() == 1) {
        echo '1 comment';
      } else {
        echo get_comments_number() . ' comments';
      }
    ?>
  </h4>
  <ul>
    <?php wp_list_comments() ?>
    <?php
      if ( comments_open() ) {
        comment_form();
      }
    ?>
  <ul>
</div>

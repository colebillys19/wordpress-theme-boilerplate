<!--
  This file is responsible for any markup we want to be above (in the rendered
  document) the main page/post content.
-->
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!-- Inject logic relevant to wordpress in head. -->
    <?php
      wp_head();
    ?>
  </head>
  <body>
    <header>
      <h1>
        <?php echo get_option( 'blogname' ) ?>
      </h1>
      <nav>
        <!-- Inject nav menu links. -->
        <?php
          wp_nav_menu(
            array(
              'menu' => 'primary',
              'container' => '',
              'theme_location' => 'primary',
            )
          );
        ?>
      </nav>
    </header>
    <main>
      <aside>
        <h2>Recent Posts</h2>
        <!-- inject recent blog posts section -->
        <?php
          $args = array(
            'post_type' => 'post',
            // Set amount of posts shown in list.
            'posts_per_page' => '5',
          );
          $the_query = new WP_Query( $args );
          if ( $the_query->have_posts() ) {
              echo '<ul>';
              while ( $the_query->have_posts() ) {
                $the_query->the_post();
                echo
                  '<li><a href="' .
                  get_the_permalink() .
                  '">' .
                  get_the_title() .
                  '</a><span>' .
                  get_the_date() .
                  '&nbsp;-&nbsp;' .
                  get_the_time() .
                  '</span></li>';
              }
              echo '</ul>';
          } else {
            echo '<p>No posts to display.</p>';
          }
          wp_reset_postdata();
        ?>
      </aside>

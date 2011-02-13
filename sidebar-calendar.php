<div id="sidebar">
  <div id="sidebar_container">
<?php
  echo '<ul id="sidebarnav">';
  //$output = wp_list_pages('echo=0&depth=1&title_li=<h2>Top Level Pages</h2>' );
  $rootpages = array(237,39,31,37);
  if (is_page()) {
    $page = $post->ID;
    if ($post->post_parent && !in_array($post->ID, $rootpages)) {
      $page = $post->post_parent;
    }
    $children=wp_list_pages( 'echo=0&depth=1&child_of=' . $page . '&title_li=' );
    if ($children) {
      $output = wp_list_pages ('echo=0&depth=1&child_of=' . $page . '&title_li=<h2>' . get_the_title($post->post_parent) . '</h2>');
    }
  }
  echo $output;
  echo '</ul>';
?>
<ul>
	   <?php dynamic_sidebar( 'calendarsidebar' ); ?>
</ul>
	<p style='margin-top:2em; font-size:120%'><a href="">See our full calendar</a></p>
<?php
        $args = array(
          'post_type' => 'attachment',
          'post_mime_type' => 'application/pdf,application/msword,application/vnd.ms-excel,application/vnd.openxmlformats-officedocument.spreadsheetml.sheet,application/vnd.openxmlformats-officedocument.wordprocessingml.document',
          'numberposts' => -1,
          'post_status' => null,
          'post_parent' => $post->ID,
          'orderby' => 'menu_order',
          'order' => 'desc'
          );
        $attachments = get_posts($args);
        if ($attachments) {
	  echo "<h2 id='related-header'>Related Documents</h2><ul id='related-docs'>";
          foreach ($attachments as $attachment) {
            echo '<li><a href="'.wp_get_attachment_url($attachment->ID).'">';
            echo $attachment->post_title;
            echo '</a></li>';
          }
	  echo "</ul>";
        }

    ?>

  </div> <!-- sidebar_container -->
</div> <!-- sidebar -->
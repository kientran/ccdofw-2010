<div id="sidebar">
  <div id="sidebar_container"><?php

if (is_front_page() ) {
   echo"<h2>Who We Are</h2>";
   echo"<p>Catholic Charities serves the 28 counties in the Diocese of Fort Worth. We provide services to individuals, families and children among us in need as we advocate compassion and justice in our community.</p>";

} else {
  
  echo '<ul>';
  $output = wp_list_pages('echo=0&depth=1&title_li=<h2>Top Level Pages</h2>' );
  if (is_page()) {
    $page = $post->ID;
    if ($post->post_parent) {
      $page = $post->post_parent;
    }
    $children=wp_list_pages( 'echo=0&child_of=' . $page . '&title_li=' );
    if ($children) {
      $output = wp_list_pages ('echo=0&child_of=' . $page . '&title_li=<h2>' . get_the_title($post->ID) . '</h2>');
    }
  }
  echo $output;
  echo '</ul>';
} 
  
  
if ( get_post_type() == 'job-posting') :

  echo "<h2><a href='/employment'>Employment Opportunities</h2>";
  $loop = new WP_Query( array( 'post_type' => 'job-posting', 'posts_per_page' => 10 ) );
  
  echo "<ul>";

  while ( $loop->have_posts() ) : $loop->the_post();
  ?>
	<li ><a href="<?php the_permalink(); ?>" title="<?php printf( esc_attr__( 'Permalink to %s', 'twentyten' ), the_title_attribute( 'echo=0' ) ); ?>" rel="bookmark"><?php the_title(); ?></a></li>
<?php
endwhile;
?>

</ul>
<?php

  endif;
?>
  <?php
        $args = array(
          'post_type' => 'attachment',
          'post_mime_type' => 'application/pdf,application/msword',
          'numberposts' => -1,
          'post_status' => null,
          'post_parent' => $post->ID,
          'orderby' => 'menu_order',
          'order' => 'desc'
          );
        $attachments = get_posts($args);
        if ($attachments) {
	  echo "<h2>Related Documents</h2><ul>";
          foreach ($attachments as $attachment) {
            echo '<li><a href="'.wp_get_attachment_url($attachment->ID).'">';
            echo $attachment->post_title;
            echo '</a></li>';
          }
	  echo "</ul>";
        }
    ?>
  </div>
</div>


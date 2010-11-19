<div id="sidebar">
  <div id="sidebar_container"><?php

if (is_front_page() ) {
?>

    <h2>Who We Are</h2>
    <p>Catholic Charities serves the 28 counties in the Diocese of Fort Worth. We provide services to individuals, families and children among us in need as we advocate compassion and justice in our community.</p>
<?php
} else {
  if($post->post_parent) {
    $children = wp_list_pages("title_li=&child_of=".$post->post_parent."&echo=0&depth=1");
    $titlenamer = get_the_title($post->post_parent);
    $titleurl = get_permalink($post->post_parent);
  }
  else {
    $children = wp_list_pages("title_li=&child_of=".$post->ID."&echo=0&depth=1");
    $titlenamer = get_the_title($post->ID);
    $titleurl = get_permalink($post->ID);
  }
  if ($children) { ?>

    <h2><a href='<?php echo $titleurl ?>'><? echo $titlenamer ?></a></h2>
      <ul>
      <?php echo $children; ?>
      </ul>
<?php
  } 
  if ( get_post_type() == 'job-posting') :
?>
  <h2><a href='/employment'>Employment Opportunities</h2>
<?php
$loop = new WP_Query( array( 'post_type' => 'job-posting', 'posts_per_page' => 10 ) );?>
<ul>
<?php
while ( $loop->have_posts() ) : $loop->the_post();
?>
	<li ><a href="<?php the_permalink(); ?>" title="<?php printf( esc_attr__( 'Permalink to %s', 'twentyten' ), the_title_attribute( 'echo=0' ) ); ?>" rel="bookmark"><?php the_title(); ?></a></li>
<?php
endwhile;
?>
</ul>
<?php

  endif;
}
?>
  </div>
</div>


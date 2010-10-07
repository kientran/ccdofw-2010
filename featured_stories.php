<?php
$args = array(
    'meta_key' => 'featured',
    'meta_value' => 'checkbox_on',
    'sort_column' => 'menu_order',
    'hierarchical' => 0
 ); // hieracrhical = 0 b/c wordpress is stuipd like that.

$featuredpages = get_pages($args);

if( $featuredpages ) {
?>
<div id="featured_stories">
<div id="upper_front">
  <?php
  foreach ($featuredpages as $page) {
    $id = $page->ID;
    $title = get_post_meta($id, 'featured-title', true);
    $text = get_post_meta($id, 'featured-text', true);
    $imageurl = get_post_meta($id, 'featured-image', true);
    $pageurl = get_permalink($id);

    if ( empty($title) ) {
      $title = $page->post_title;
    }

    if ( !empty($title) && !empty($text) && !empty($imageurl) ) {

    
?>
    <div class="boxgrid">
      <img src='<?php echo $imageurl ?>' />
      <div class="boxcaption">
        <h3><?php echo $title ?></h3>
        <p><?php echo $text ?></p>
        <div class="readstory"><a href="<?php echo $pageurl ?>" class="green awesome">See My Story</a></div>
      </div>
    </div> 
<?php
    }
  }
?>
</div>
</div>
<?php
} //End if

?>

<div id="action_buttons">
<a href="#" class="green awesome">Donate Now</a>
<a href="#" class="blue awesome">Volunteer Check-in</a>
<a href="#" class="blue awesome">Newsletter Signup</a>
<a href="#" class="blue awesome">Careers</a>

</div>


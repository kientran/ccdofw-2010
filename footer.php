<?php
  $blogurl = get_bloginfo('url');
  $templateurl = get_bloginfo('template_url');
  function print_page_children($post_slug) {
    $page = get_page_by_path($post_slug);
    $args = array (
      'child_of' => $page->ID,
      'depth' => 1,
      'title_li' => ''
      
    );
    return wp_list_pages( $args );
  }
?>
<footer>
<table>
<tr>
  <td>
    <ul>
      <li class="footer_head">About Us</li>
<?php echo print_page_children('about'); ?>
   </ul>
</td>
  <td>
    <ul>
      <li class="footer_head">Media</li>
<?php echo print_page_children('media'); ?>
     </ul>
  </td>
  <td>
    <ul>
      <li class="footer_head">Programs</li>
<?php echo print_page_children('programs'); ?>
    </ul>
  </td>
  <td>
    <ul>
      <li class="footer_head">Get Involved</li>
<?php echo print_page_children('get-involved'); ?>
   </ul>
  </td>
  <td>
    <p class="footer_head">Address</p>
    <p><a href="">
    249 West Thornhill Drive<br />
    Fort Worth, Texas 76115</a></p>
    <p class="footer_head">Phone</p>
    <p>817-534-0814</p>
  </td>
</tr>
</table>
<div id='footerlinks'>
<div id='affiliates'>
    <a href=""><img src='<?php echo $templateurl ?>/images/facebook.png'></a>
    <a href=""><img src='<?php echo $templateurl ?>/images/twitter.png'></a>
    <a href=""><img src='<?php echo $templateurl ?>/images/youtube.png'></a>
    <a href=""><img src="<?php echo $templateurl ?>/images/coalogo.png" /></a>
    <a href=""><img src="<?php echo $templateurl ?>/images/unitedwaylogo.png" /></a>
</div>
<div id="copyright">&copy; 2010 Catholic Charities - Diocese of Fort Worth</div>
</div>
</footer>

</div>

<?php wp_footer() ?>

</body>
</html>

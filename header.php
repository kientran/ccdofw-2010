<?php
  $blogurl = get_bloginfo('url');
  $templateurl = get_bloginfo('template_url');
 ?>
<!DOCTYPE html>
<html lang="en">
<head>  
 <!--[if lt IE 9]>
    <script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
 <![endif]-->
  
  <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.4.2/jquery.min.js"></script>
  <script type="text/javascript">
    if (typeof jQuery == 'undefined')
    {
      document.write(unescape("%3Cscript src='/wp-includes/js/jquery' type='text/javascript'%3E%3C/script%3E"));
    }
  </script>

<?php wp_head(); ?>
<!--[if lt IE 8]>
      <link href="<?php echo $templateurl ?>/stylesheets/ie.css" media="screen, projection" rel="stylesheet" type="text/css" />
  <![endif]-->
</head>

<body class="bp two-col">
<div id="container">

<header>
  <div id="searchbar">
      <a href="<?php echo $blogurl ?>">Home</a> | <a href="mailto:infocatholiccharities@ccdofw.org">Contact</a> <form role='search' method='get' id='searchform' action='<?php echo $blogurl ?>'><input type="text" class="faded" id="searchfield" name='s' value="Search"><input type='hidden' id='searchsubmit' value='Search' /></form>
  </div>
  <div id="logobar"><a href="<?php echo $blogurl ?>">Catholic Charities</a>
    <div id="creed">
      Providing Help<br />
      Creating Hope<br />
      Promoting Justice
    </div>
  </div>
  <?php get_template_part('navigation', 'header'); ?>
  </header>



<?php
/*
Template Name: Newsletter Signup Form
*/
?>
<?php get_header() ?>

<div id="content">
<div id="content_container">

		<div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
			<h2 class="entry-title"><a href="<?php the_permalink(); ?>" title="<?php printf( esc_attr__( 'Permalink to %s', 'twentyten' ), the_title_attribute( 'echo=0' ) ); ?>" rel="bookmark"><?php the_title(); ?></a></h2>

			<div class="entry-content">
				<script type='text/javascript'>
				<!--
				function resizeIframe(newHeight)
				{
				  document.getElementById('iFrame').style.height = parseInt(newHeight) + 120 + 'px';
				}
				// -->
				</script>
				<iframe id='iFrame' src='/wp-content/themes/ccdofw.org/newsletter-signup.php' width='100%'>
				</iframe>
			</div><!-- .entry-content -->	
		</div>
</div>
</div>

<?php get_sidebar() ?>

<?php get_footer() ?>

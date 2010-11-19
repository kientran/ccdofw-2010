<?php
/**
 * The loop that displays posts.
 *
 * The loop displays the posts and the post content.  See
 * http://codex.wordpress.org/The_Loop to understand it and
 * http://codex.wordpress.org/Template_Tags to understand
 * the tags used in it.
 *
 * This can be overridden in child themes with loop.php or
 * loop-template.php, where 'template' is the loop context
 * requested by a template. For example, loop-index.php would
 * be used if it exists and we ask for the loop with:
 * <code>get_template_part( 'loop', 'index' );</code>
 *
 * @package CCDOFW
 * @subpackage 2010
 * @since 2010 1.0
 */
?>

<div id="content">
<div id="content_container">
<h2>Employment Opportunities</h2>
<?php
$loop = new WP_Query( array( 'post_type' => 'job-posting', 'posts_per_page' => 10 ) );
while ( $loop->have_posts() ) : $loop->the_post();
?>
<div class='job-listing'>
	<h3 class="entry-title job-title"><a href="<?php the_permalink(); ?>" title="<?php printf( esc_attr__( 'Permalink to %s', 'twentyten' ), the_title_attribute( 'echo=0' ) ); ?>" rel="bookmark"><?php the_title(); ?></a></h3>
<?php
$id = $post->ID;
$program = get_post_meta($id, 'job-program', true);
$postingdate = get_post_meta($id, 'job-posting-date', true);
$expires = get_post_meta($id, 'job-expires', true);
$summary = get_post_meta($id, 'job-summary', true);

?>
<span class='program-title'><strong>Program:</strong> <?php echo $program; ?></span><br />
<span class='posting-date'><strong>Posting Date:</strong> <?php echo $postingdate; ?></span><br />
<span class='expires-date'><strong>Expires Date:</strong> <?php echo $expires; ?></span>
<p>
<?php echo $summary; ?>
</p>
<p class="entry-title job-title"><a href="<?php the_permalink(); ?>" title="<?php printf( esc_attr__( 'Permalink to %s', 'twentyten' ), the_title_attribute( 'echo=0' ) ); ?>" rel="bookmark">More info</a></p>
</div>
<?php
endwhile;
?>

</div>
</div>

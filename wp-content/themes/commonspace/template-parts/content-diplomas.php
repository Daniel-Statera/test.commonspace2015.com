<?php
/**
 * Template part for displaying page content in page.php
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package commonspace
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

	<div class="entry-content container">
	<div class="col-md-9">
		<?php
			the_content();

			wp_link_pages( array(
				'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'commonspace' ),
				'after'  => '</div>',
			) );
		?>
	</div>
	<?php get_sidebar();?>
	</div><!-- .entry-content -->
</article><!-- #post-## -->

<?php
/**
 * Template part for displaying posts
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package commonspace
 */

?>
<!-- <div class="news">
<a href="<?php the_permalink() ?>"><?php echo get_the_post_thumbnail() ?></a>
<h3><?php echo get_the_title( $post ); ?></h3>
<div class="text">
<?php
	the_content( sprintf(
		/* translators: %s: Name of current post. */
		wp_kses( __( 'Читать далее', 'commonspace' ), array( 'span' => array( 'class' => array() ) ) ),
		the_title( '<span class="screen-reader-text">"', '"</span>', false )
	) );
?> 
</div>
<p class="date_news"><?php echo get_the_date(); ?> <i class="fa fa-eye"></i> <?php echo getPostViews(get_the_ID()); ?> <a href="<?php echo esc_url( get_permalink() ); ?>" class="link">Читать далее</a></p>
<hr>
</div> -->

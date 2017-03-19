<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package commonspace
 */

get_header(); ?>
 
<section id="slider_news">
		<div class="container">
			<h1>Новости Единого Простора 2<i class="fa fa-bullhorn"></i></h1>
			<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>		
		</div>
</section>
<section>
	<div class="container content-news">
		<div id="news-block" class="col-md-9">
    <?php // Display blog posts on any page @ http://m0n.co/l
	    $temp = $wp_query; $wp_query= null;
	    $wp_query = new WP_Query(); $wp_query->query('showposts=5&cat=1' . '&paged='.$paged);
	    while ($wp_query->have_posts()) : $wp_query->the_post();
    ?>

	<div class="news">
		<a href="<?php the_permalink() ?>">
			<?php 
				if (has_post_thumbnail()) {
				    $thumb = wp_get_attachment_image_src(get_post_thumbnail_id(), 'thumbnail');
				  
				    $thumb_alt = trim(strip_tags( $attachment->post_excerpt ));
				    $thumb_title = trim(strip_tags( $attachment->post_title ));
				  
				    echo '<img src="'.$thumb[0].$size.'" width="200px" height="150px"'.$thumb_alt.'" title="'.$thumb_title.'" />';
				}
			?>
		</a>
		<h3><?php echo get_the_title( $post ); ?></h3>
		<div class="text">
			<?php the_content(''); ?>
		</div>
		<p class="date_news"><?php echo get_the_date(); ?> <i class="fa fa-eye"></i> <?php echo getPostViews(get_the_ID()); ?> <a href="<?php echo esc_url( get_permalink() ); ?>" class="link">Читать далее</a></p>
		<hr>
	</div>

    <?php endwhile; 
    ?>

			<div class="row">
			<div class="forcelink text-right">
					<?php if (function_exists('wp_corenavi')) wp_corenavi(); ?>
				</div>
			</div>

		</div>
		<?php get_sidebar(); ?>
	</div>
</section>
 
 
<?php get_footer(); ?>
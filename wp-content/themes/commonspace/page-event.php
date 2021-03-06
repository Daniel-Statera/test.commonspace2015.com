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
		<h1>Проекты и мероприятия <i class="fa fa-bullhorn"></i></h1>
		<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>		
	</div>
</section>

<section id="events_contents">
	<div class="container">
		<div class="row">
    <?php // Display blog posts on any page @ http://m0n.co/l
	    $temp = $wp_query; $wp_query= null;
	    $wp_query = new WP_Query(); $wp_query->query('showposts=9&cat=3' . '&paged='.$paged);
	    while ($wp_query->have_posts()) : $wp_query->the_post();
    ?>

	<div class="col-md-4 col-sm-6">
		<div class="body-event">
			<a href="<?php the_permalink() ?>"><?php 
				if (has_post_thumbnail()) {
				    $thumb = wp_get_attachment_image_src(get_post_thumbnail_id(), 'thumbnail');
				  
				    $thumb_alt = trim(strip_tags( $attachment->post_excerpt ));
				    $thumb_title = trim(strip_tags( $attachment->post_title ));
				  
				    echo '<img src="'.$thumb[0].$size.'" height=100%"'.$thumb_alt.'" title="'.$thumb_title.'" />';
				}
				else {
					echo "<img height=100% width=100% src='/wp-content/themes/commonspace/img/events-img.jpg'>";
				}
			?></a>
			<img src="/wp-content/themes/commonspace/img/event-open.png" alt="event-open">
			<a href="<?php the_permalink() ?>"><h2><?php echo get_the_title( $post ); ?></h2></a>
			<hr>
			<h3><?php echo get_the_date(); ?></h3>
			<p>Мероприятие <a href="<?php echo esc_url( get_permalink() ); ?>" class="link">Подробнее</a></p>
		</div>
	</div>

    <?php endwhile; 
    wp_reset_postdata(); ?>


		</div>
		<div class="row">
			<div class="forcelink text-right">
					<?php if (function_exists('wp_corenavi')) wp_corenavi(); ?>
				</div>
			</div>	
		</div>
	</section>
 
 
<?php get_footer(); ?>
<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
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
		<?php 
			if( have_posts() ){ while( have_posts() ){ the_post(); 
		?>
			<div class="col-md-4">
				<div class="body-event">
					<a href="<?php the_permalink() ?>"><?php 
						if (has_post_thumbnail()) {
						    $thumb = wp_get_attachment_image_src(get_post_thumbnail_id(), 'thumbnail');
						  
						    $thumb_alt = trim(strip_tags( $attachment->post_excerpt ));
						    $thumb_title = trim(strip_tags( $attachment->post_title ));
						  
						    echo '<img src="'.$thumb[0].$size.'" height=100% width="100%"'.$thumb_alt.'" title="'.$thumb_title.'" />';
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

	<?php } /* конец while */ ?>

	<?php
	} // конец if
	else 
	echo "<h2 class='text-center'>Мероприятий нет.</h2>"
	?>

	</div>
	<div class="row">
		<div class="forcelink text-right">
				<?php if (function_exists('wp_corenavi')) wp_corenavi(); ?>
			</div>
		</div>	
	</div>
</section>

<?php
get_footer();

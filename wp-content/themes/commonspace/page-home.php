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

<?php
/**
 * Template part for displaying page content in page.php
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package commonspace
 */

?>

	<section id="slider">
		<div class="container">
			<div class="col-md-10 col-md-offset-1 text-center">
				<h1>Международный общественный союз <span class="slider-title">«Единый простор»</span> – это объединение людей, включенных в различные cоциальные проекты и программы, направленные на построение гражданского общества.</h1>

				<p>Нас поддерживают: </p>
				<div id="text-gerbs" class="col-md-12 col-md-offset-5">
					<img src="wp-content/themes/commonspace/img/Gerb_Dnepropetrovskoi_oblasti.png" alt="Gerb_Dnepropetrovskoi_oblasti">
					<img src="wp-content/themes/commonspace/img/Logo_Dnipropetrovska_gerb.png" alt="Logo_Dnipropetrovska_gerb">
				</div>
				<div id="slider-margin" class="col-md-12"></div>
				
				<div class="row text-left">
					<div class="col-md-3">
						<div class="top-lite"></div>
						<h2>30 тысяч</h2>
						<p>Участников в проектах</p>
					</div>
					<div class="col-md-3">
						<div class="top-lite"></div>
						<h2>Около 3 млн грн</h2>
						<p>Инвестиций  в коммунальную собственность Днепра</p>
					</div>
					<div class="col-md-3">
						<div class="top-lite"></div>
						<h2>Больше 20</h2>
						<p>Проведенных проектов и мероприятий</p>
					</div>
					<div class="col-md-3">
						<div class="top-lite"></div>
						<h2>400 тыс. грн</h2>
						<p>Привлеченные инвестиции</p>
					</div>
				</div>
				
			</div>
		</div>
	</section>
	<div id="content">
		<section id="projects">
			<div class="container">
				<div class="row">
					<div class="col-md-12">
						<h2>Проекты и мероприятия</h2>
					</div>
                    <?php // Display blog posts on any page @ http://m0n.co/l
                        $posts = query_posts('posts_per_page=4&cat=3'); 
                            foreach($posts as $post){ setup_postdata($post);
                        
                        $thumb = wp_get_attachment_image_src(get_post_thumbnail_id(), 'thumbnail');
                        $thumb_alt = trim(strip_tags( $attachment->post_excerpt ));
                        $thumb_title = trim(strip_tags( $attachment->post_title ));
                    
                        $date = get_the_date();
                        $date = explode('.',$date);
                        
                        switch($date[1]){
                            case 1: $date[1] = 'января'; break;
                            case 2: $date[1] = 'февраля'; break;
                            case 3: $date[1] = 'марта'; break;
                            case 4: $date[1] = 'апреля'; break;
                            case 5: $date[1] = 'мая'; break;
                            case 6: $date[1] = 'июня'; break;
                            case 7: $date[1] = 'июля'; break;
                            case 8: $date[1] = 'августа'; break;
                            case 9: $date[1] = 'сентября'; break;
                            case 10: $date[1] = 'октября'; break;
                            case 11: $date[1] = 'ноября'; break;
                            case 12: $date[1] = 'декабря'; break;
                        }
                        $dateOut = $date[0].' '.$date[1].' '.$date[2];
                    ?>
                    <div class="col-md-3 col-sm-6">
						<div>
							<a href="<?=get_the_permalink(); ?>"><img class="poster" src="<?=$thumb[0].$size;?>" alt="<?=$thumb_alt;?>"></a>
							<img src="wp-content/themes/commonspace/img/act_open.png" alt="act_open">
							<h3 class="sub_text"><?php the_title(); ?></h3>
							<p class="date"><?=$dateOut; ?></p>

							<p class="categories">Мероприятие <a class="link" href="<?=get_the_permalink(); ?>">Подробнее</a></p>
						</div>
					</div>
                    <?php } ?>
				</div>
				<div class="row">
					<div class="col-md-4 col-md-offset-8">
						<a href="/event"><div class="btn">ПРОСМОТРЕТЬ ВСЕ</div></a>
					</div>
				</div>
			</div>
		</section>
		<section id="news">
			<div class="container">
				<div class="row">
					<div class="col-md-5">
						<h2>Нуждается в поддержке</h2>
						<div id="support">
							<h2>Социальный проект: <br><font id="title_support">«Помоги детскому дому»</font></h2>
							<div class="bottom_support">
								<div id="eye"></div>
								<font class="eye_info">132</font>
								<font class="stats">90% собрано</font>
								<a href="#">Подробнее</a>
							</div>
						</div>
						<br clear="all"/>
						<div class="celendar">
							<h2>Календарь событий</h2>
							<img src="wp-content/themes/commonspace/img/Celendar.PNG" alt="Celendar">
						</div>
						
					</div>
					<div class="col-md-7 news">
						<h2>Последние Новости</h2>
                        
                        <?php // Display blog posts on any page @ http://m0n.co/l
                        
                            $posts = query_posts('posts_per_page=5&cat=1'); 
                            foreach($posts as $post){ setup_postdata($post);
                        
                            $thumb = wp_get_attachment_image_src(get_post_thumbnail_id(), 'thumbnail');
                            $thumb_alt = trim(strip_tags( $attachment->post_excerpt ));
                            $thumb_title = trim(strip_tags( $attachment->post_title )); 
                        
                        ?>

                            <div class="effect-border">
                                <a class="home-news-img" href="<?=get_the_permalink(); ?>"><img src="<?=$thumb[0].$size;?>" alt="<?=$thumb_alt;?>"></a>
                                <h3><?php the_title(); ?></h3>
                                <p><?php echo mb_substr( strip_tags( get_the_content() ), 0, 105 ); ?>...</p>
                                <p class="date_news"><?=get_the_date('d.m.Y'); ?> <a href="<?=get_the_permalink(); ?>" class="link">Подробнее</a></p>
                            </div>    
                        <?php } ?>
                        
					</div>
					<div class="col-md-4 col-md-offset-8">
						<a href="/news"><div class="btn">ПРОСМОТРЕТЬ ВСЕ</div></a>
					</div>
				</div>
			</div>
		</section>
	</div>
<?php
get_footer();

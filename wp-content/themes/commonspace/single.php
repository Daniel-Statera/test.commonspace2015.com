<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package commonspace
 */

get_header(); ?>

	<div class="wrap_page_out">

    <div class="container">
      <div class="col-md-12">
      <div class="col-lg-9">
           
         <div class="col-md-12">
         <div class="row">
            
              <h1 class="header_page_out"><?php echo get_the_title( $post ); ?></h1>
              <p class="data_news_page"><?php echo get_the_date(); ?><i class="fa fa-eye"></i> <?php echo getPostViews(get_the_ID()); ?></p>
              <p>
              	<?php
					the_post();
					the_content(); 
				?>
			  </p>
            </div>
          </div>
         

       </div>
                <?php get_sidebar(); ?>
            </div>
         </div>
        </div>
<?php
          setPostViews(get_the_ID());
?>
<?php
get_sidebar();
get_footer();

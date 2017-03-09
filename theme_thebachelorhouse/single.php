<?php
/**
 * The template for displaying all single posts
 *
 * @package WordPress
 * @subpackage Twenty_Thirteen
 * @since Twenty Thirteen 1.0
 */

get_header(); ?>

<div class="blog-detail-page">
	<div id="primary" class="content-area">
		<div id="content" class="site-content" role="main">

			<?php /* The loop */ ?>
			<?php while ( have_posts() ) : the_post(); ?>

				<?php get_template_part( 'content', get_post_format() ); ?>
				<?php twentythirteen_post_nav(); ?>
				<?php comments_template(); ?>

			<?php endwhile; ?>
		</div><!-- #content -->
	</div><!-- #primary -->
  <div class="blog-detail-left">  
    
<div  class="newly-recent-posts">
        <h2>Recent Posts</h2>
        <ul>
         <?php
			$recent_posts = wp_get_recent_posts(array('post_type'=>'','posts_per_page=5'));
			foreach( $recent_posts as $recent ){
				echo '<a href="' . get_permalink($recent["ID"]) . '" title="Look '.esc_attr($recent["post_title"]).'" >' .   $recent["post_title"].'</a><br />';
			}
			?>
         </ul>
 </div>
 <div class="newly-post-categories">
				<h2>Categories</h2>
				<ul>
				<?php
				$args = array(
				  'orderby' => 'name',
				  'parent' => 0
				  );
				$categories = get_categories( $args );
				foreach ( $categories as $category ) {
					echo '<a href="' . get_category_link( $category->term_id ) . '">' . $category->name . '</a><br />';
				}
				?>
				</ul>
</div>
<div class="newly-tags-class">
			<h2>Tags</h2>
			<ul>
			<?php
			echo get_the_tag_list('<p>Tags: ',', ','</p>');
			?>
			</ul>
</div>

</div>

</div>
	
<?php get_sidebar(); ?>
<?php get_footer(); ?>
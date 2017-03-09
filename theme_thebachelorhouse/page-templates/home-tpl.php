<?php
/**
 * Template Name: Home Page
 *
 */

get_header(); ?>

<?php echo do_shortcode('[metaslider id=26]'); ?>

	<div id="primary" class="content-area">
		<div id="content" class="site-content" role="main">

		<?php /* The loop */ ?>
			<?php while ( have_posts() ) : the_post(); ?>

				<?php the_content();?>
			
			<?php endwhile; ?>

			<?php query_posts('posts_per_page=1');

			//The Loop
			if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
				<div class="home-latest-outer">
				    <div class="home-latest-blog">
				        <div class="heading">
				            <h2>The latest from our blog</h2>
				        </div>
				        <div class="row">
				            <div class="home-blog-left col-sm-6 col-md-6 col-lg-6 col-xs-12 wow fadeInLeft">
				            	<!-- <img class="alignnone size-full wp-image-227" src="http://www.thebachelorhouse.com/wp-content/uploads/2016/10/mistake-img.jpg" alt="mistake-img" /> -->
				            	<?php the_post_thumbnail( 'medium_large' );?>
				            </div>
				            <div class="home-blog-right col-sm-6 col-md-6 col-lg-6 col-xs-12 wow fadeInRight">
				                <h3 class="home-blog-title"><?php the_title(); ?></h3>
				                <div class="home-blog-mis-img">
				                    <div class="mis-img">
				                    	<!-- <img class="alignnone size-full wp-image-229" src="http://www.thebachelorhouse.com/wp-content/uploads/2016/10/mis-img.png" alt="mis-img" /> -->
				                    	<?php echo get_avatar( get_the_author_meta( 'ID' ) ); ?>
				                    </div>
				                    <div class="mis-img-cont">
				                        <h4><?php the_author_meta('nickname'); ?></h4> <span class="home-post-date"><?php the_time( 'j '); ?><small><?php the_time('M'); ?></small></span>
				                    </div>
				                </div>
				                <div class="home-blog-excerpt">
					                <?php the_excerpt(); ?>
				                </div>
				            </div>
				        </div>
				    </div>
				</div>
			<?php endwhile;
			endif;

			//Reset Query
			wp_reset_query(); ?>

			


		</div><!-- #content -->
	</div><!-- #primary -->


	<script>
		jQuery('#anc_bangkok').click(function(){
            jQuery(this).addClass('active');
            jQuery('#anc_hongkong').removeClass('active');
			jQuery('#address_bangkok').show();
			jQuery('#address_hongkong').hide();

		});


		jQuery('#anc_hongkong').click(function(){
            jQuery(this).addClass('active');
            jQuery('#anc_bangkok').removeClass('active');
			jQuery('#address_bangkok').hide();
			jQuery('#address_hongkong').show();

		});
	</script>
	
<?php get_footer(); ?>
<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages and that other
 * 'pages' on your WordPress site will use a different template.
 *
 * @package WordPress
 * @subpackage Twenty_Thirteen
 * @since Twenty Thirteen 1.0
 */

get_header(); ?>

	<!--Requirement jQuery-->
	<!--Load Script and Stylesheet -->
	
<?php	wp_enqueue_script( 'jquery.simple-dtpicker', get_template_directory_uri() . '/js/jquery.simple-dtpicker.js', array ( 'jquery' ), 1.1, true);?>
<?php wp_enqueue_style( 'jquery.simple-dtpicker', get_template_directory_uri() . '/css/jquery.simple-dtpicker.css',false,'1.1','all');?>

	<script type="text/javascript" src="jquery.simple-dtpicker.js"></script>
	<link type="text/css" href="jquery.simple-dtpicker.css" rel="stylesheet" />
	<!---->
	<div id="primary" class="content-area">
		<div id="content" class="site-content" role="main">

			<?php /* The loop */ ?>
			<?php while ( have_posts() ) : the_post(); ?>

				<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
					<header class="entry-header">
						<?php if ( has_post_thumbnail() && ! post_password_required() ) : ?>
						<div class="entry-thumbnail">
							<?php the_post_thumbnail(); ?>
						</div>
						<?php endif; ?>

						<h1 class="entry-title"><?php the_title(); ?></h1>
					</header><!-- .entry-header -->

					<div class="entry-content">
						<?php the_content(); ?>
						<?php wp_link_pages( array( 'before' => '<div class="page-links"><span class="page-links-title">' . __( 'Pages:', 'twentythirteen' ) . '</span>', 'after' => '</div>', 'link_before' => '<span>', 'link_after' => '</span>' ) ); ?>
					</div><!-- .entry-content -->

					<footer class="entry-meta">
						<?php edit_post_link( __( 'Edit', 'twentythirteen' ), '<span class="edit-link">', '</span>' ); ?>
					</footer><!-- .entry-meta -->
				</article><!-- #post -->

				<?php comments_template(); ?>
			<?php endwhile; ?>

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


 <script>
    
		 jQuery("#btnShow").click(function(){
			jQuery("#dialog").show();
			 
		 });
		jQuery(".close-dealog").click(function(){
			jQuery("#dialog").hide();
			 
		 });
		
	
   
</script>
<script type="text/javascript">
		jQuery(function(){
			jQuery('*[name=date]').appendDtpicker();
		});
	</script>
    <?php get_sidebar(); ?>
<?php get_footer(); ?>
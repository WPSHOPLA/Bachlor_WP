<?php
/**
 * Template Name: Page Other Template
 *
 */

get_header(); 

$currentpageid= get_the_ID();
?>

<?php
if($currentpageid == 6){
  echo do_shortcode('[metaslider id=31]'); // about us slider
}

if($currentpageid == 8){
  echo do_shortcode('[metaslider id=33]'); // Services slider
}

if($currentpageid == 12){
  echo do_shortcode('[metaslider id=34]'); // membership slider
}


if($currentpageid == 14){
 echo do_shortcode('[metaslider id=36]'); // faq slider
}

if($currentpageid == 299){
 echo do_shortcode('[metaslider id=306]'); // faq slider
}

if($currentpageid == 186){
 echo do_shortcode('[metaslider id=341]'); // sign up slider
}

if($currentpageid == 801){
 echo do_shortcode('[metaslider id=931]'); // sign up slider
}
?>


	<div id="primary" class="content-area">
		<div id="content" class="site-content" role="main">

		<?php /* The loop */ ?>
			<?php while ( have_posts() ) : the_post(); ?>

				<?php the_content();?>
			
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

<?php get_footer(); ?>
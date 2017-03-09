<?php
/**
 * The template for displaying the footer
 *
 * Contains footer content and the closing of the #main and #page div elements.
 *
 * @package WordPress
 * @subpackage Twenty_Thirteen
 * @since Twenty Thirteen 1.0
 */
?>

		</div><!-- #main -->

		<script>
		  
		jQuery( document ).ready(function() {
		   jQuery('#click-privacy-policy').click(function(){ 
			jQuery('#pop-up-outer-privacy').show();
			});
			jQuery('.close-privacy').click(function(){
			jQuery('#pop-up-outer-privacy').hide();
			});
			jQuery(".home-where-you-are").addClass("wow fadeIn").attr("data-wow-duration", "1s").attr("data-wow-delay", ".5s");
			jQuery(".banner88 .owl-item img").addClass("wow flipInX");
			var headerHeight = jQuery(".site-header").height();
			jQuery(".page-template-blog-tpl .site-main").css("margin-top", headerHeight+'px');
			jQuery("#metaslider_341 .slides li:eq(0)").append('<div class="slider-overlay"></div>');
		});
		
		
		
		jQuery( document ).ready(function() {
		   jQuery('#click-terms').click(function(){ 
			jQuery('#pop-up-outer-terms').show();
			});
			jQuery('.close-privacy').click(function(){
			jQuery('#pop-up-outer-terms').hide();
			});
			jQuery('.animate').scrolla(); 
		});
		
		var carouselWidth = jQuery(window).width() - 30;
		if(jQuery(window).width() < 768) {
			jQuery("#wp-client-testimonials .carousel-wrap ul li").css("width", carouselWidth+'px');			
		}
			
		 </script>
      <div class="pop-up-outer-privacy" id="pop-up-outer-privacy" style="display:none;">
             <div class="pop-up-inner">
			    <div class="close-privacy">X</div>
               
			<?php if ( is_active_sidebar( 'privacy-policy-widget' ) ) : ?>

			   <?php dynamic_sidebar( 'privacy-policy-widget' ); ?>

			<?php endif; ?>
             </div>
          </div>
		  
		  
		  
		  <div class="pop-up-outer-terms" id="pop-up-outer-terms" style="display:none;">
             <div class="pop-up-inner">
			    <div class="close-privacy">X</div>
               
			<?php if ( is_active_sidebar( 'terms-widget' ) ) : ?>

			   <?php dynamic_sidebar( 'terms-widget' ); ?>

			<?php endif; ?>
             </div>
          </div>
		  
		  
		<?php if ( is_active_sidebar( 'footer-banner' ) ) : ?>

		   <?php dynamic_sidebar( 'footer-banner' ); ?>

		<?php endif; ?>
  
		
		<footer id="colophon" class="site-footer" role="contentinfo">
			<?php //get_sidebar( 'main' ); ?>
			
			<?php if ( is_active_sidebar( 'footer-detail' ) ) : ?>

			   <?php dynamic_sidebar( 'footer-detail' ); ?>

			<?php endif; ?>

			<div class="site-info">
				<?php do_action( 'twentythirteen_credits' ); ?>
				<!--<a href="<?php //echo esc_url( __( 'https://wordpress.org/', 'twentythirteen' ) ); ?>"><?php //printf( __( 'Proudly powered by %s', 'twentythirteen' ), 'WordPress' ); ?></a> -->
                
                <ul>
                   <li>Membership Enquiries:<a href="#"> info@thebachelorhouse.com</a></li> /
                   <li>Press inquiries:<a href="#"> press@thebachelorhouse.com</a></li> /
                   <li>Partnership:<a href="#"> partner@thebachelorhouse.com </a></li>
                </ul>
                
                
			</div><!-- .site-info -->
		</footer><!-- #colophon -->
	</div><!-- #page -->

	<?php wp_footer(); ?>
</body>
</html>
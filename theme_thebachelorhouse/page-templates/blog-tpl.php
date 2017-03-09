<?php 
/*
 Template Name: Blog 
*/
 ?>
 
 <?php
		get_header();
 ?>
 
 <?php 
		$args = array( 'post_type' => '', 'posts_per_page' => 1 );
		 $loop = new WP_Query( $args );
		while ( $loop->have_posts() ) : $loop->the_post(); 
?>


<div class="outer-blog">

<div class="blog-inner">

<div class="loop-post-for1"> 
						  <?php the_post_thumbnail( 'medium_large' );?>
						   <div class="time-for-loop"> 
						   	  <span class="post-date"><?php the_time( 'j M'); ?></span>
						      <a href="<?php the_permalink(); ?>">
						        <h2><?php the_title();  ?> </h2></a>
                              </div>  
						        <div class="the-context-items">
						        Posted at <?php echo the_time('H:i'); ?>hr 
						        <?php $category = get_the_category();
							  $firstCategory = $category[0]->cat_name; echo 'in '. $firstCategory;?> 
						    <?php echo 'by '. $author = get_the_author(); ?>
						   <?php echo '/ '. $my_var = get_comments_number( $post_id ) .' Comments / 0 Likes'; ?>
						</div>
                        <div class="post-excerpt"><?php the_excerpt(); ?></div>
						<?php
                endwhile;
              ?>
</div>


<div class="blog-sidebar-left">
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
					echo '<a href="' . get_category_link( $category->term_id ) . '">' . $category->name . '</a>';
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


<div class="blog-center-start-today">
  <span>Possibilities are always endless. Start today.</span>
</div>



<div class="blog-cat-outer">

<div class="blog-cat-inner">
<h2 class="story-sm">Our Story</h2>
<h2 class="media-sm">News And Media</h2>
<h2 class="faq-sm"> <a href="http://www.thebachelorhouse.com/faqs/">FAQS</a></h2>
</div>

<div class="blog-cat-detail">
<span>Tell Us about You</span>
<p>Please complete the details below and one of our team will get in touch with you.Or you can just give us a call on +66 892278923 (Bangkok) or +852 2682 6430for a chat with one of our friendly and experienced Consultants.</p>
</div>


</div>



 <div class="contct-form7-shrtcode">
        <?php echo do_shortcode( '[contact-form-7 id="368"]' ); ?>
</div>

</div>

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

<?php
   get_footer();
 ?>
 
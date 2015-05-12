<?php get_header(); ?>
  
  	<main class="main">
	  	<?php if ( has_post_thumbnail() ) :

	  	 	$id = get_post_thumbnail_id($post->ID);
	  	 	$thumb_url = wp_get_attachment_image_src($id,'full', true);
	  	 	?>
	    	
			<div class="main__page-banner" style="background-image: url('<?php echo $thumb_url[0] ?>');"></div>
						
		<?php endif; ?>
	  
	  	<section class="main__content">
	  		<div class="inner">
		
				<?php get_template_part( 'templates/loop' ); ?>
				<?php if ( $post->ID == 12 ) //contact
			  		{
			  			get_template_part('templates/social'); 
					}
			  	?>
			</div>
	  	</section>
	  	<?php if ( $post->ID != 59 ) //gallery
	  		{
	  			get_sidebar('testimonials'); 
			}
	  	?>
	  	
	</main>

<?php get_footer(); ?>
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

	  			 <div id="primary" class="blog-content">

                     <?php get_template_part( 'templates/post' ); ?>
					<?php
							// If comments are open or we have at least one comment, load up the comment template.
							if ( comments_open() || get_comments_number() ) :
								comments_template();
							endif;
						?>
                </div>
                <?php get_sidebar(); ?>
		
				
			</div>
	  	</section>
	  	
	</main>

<?php get_footer(); ?>
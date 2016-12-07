<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
	
	<?php if ( is_single() ) { ?>
			<h1 class="main__content__title"><?php the_title(); ?></h1>
		<?php }else { ?>
			<h1 class="main__content__title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h1>
		<?php }
		?>
	
	<div class="post-published-data">
            <div class="post-data"><?php echo get_the_date('Y.m.d'); ?></div>
     </div>
	<?php the_content(); ?>	
	<?php 
	$images = rwmb_meta( 'rw_gallery', 'type=image&size=full' );
	
	if ( $images ) : ?>
		<div class="services-gallery">
			<div id="slider-gallery">
			<?php 
				

				foreach ( $images as $image )
				{
				    echo "<div class='slide' style='background-image: url(".$image['url'].");' ></div>";
				}
				
			?>
				
			</div>
		</div>
	<?php endif; ?>



	

<?php endwhile; ?>
<!-- post navigation -->
<?php else: ?>
<!-- no posts found -->
<?php endif; ?>
<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
				
	<h1 class="main__content__title"><?php the_title(); ?></h1>
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
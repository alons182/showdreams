<?php
/**
 * The template for displaying 404 pages (not found).
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package showdreams
 */

get_header(); ?>
		
		<main class="main">
	  	
		  	<section class="main__content">
		  		<div class="inner">
			
					<section class="error-404 not-found">
						<header class="page-header">
							<h1 class="page-title"><?php esc_html_e( 'Oops! La pagina no fue encontrada.', 'showdreams' ); ?></h1>
						</header><!-- .page-header -->

						<div class="page-content">
							<p><?php esc_html_e( 'Parece que no se encontró nada en este lugar. Tal vez intente una búsqueda?', 'showdreams' ); ?></p>

							<?php get_search_form(); ?>

							

						</div><!-- .page-content -->
					</section><!-- .error-404 -->
				</div>
		  	</section>
		  
	  	
	</main>
		
<?php get_footer(); ?>

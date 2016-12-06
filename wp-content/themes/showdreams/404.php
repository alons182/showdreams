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
	  		<div class="main__banner">
                               
                    <div class="main__banner__slide" style="background-image: url('<?php echo get_template_directory_uri();  ?>/img/banner.jpg');">
                        <div class="inner ">
                

                            <a href="<?php echo home_url( '/contact-us' ); ?>" class="btn"><span><?php  echo (get_locale() == "es_ES") ? "Contáctenos" : "Contact Us" ?></span></a>
                            ff
                        </div>
                    </div>
            </div>
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

<?php 
    /*
    Template Name: Page Home
     */
 ?>
<?php get_header(); ?>
  
        
        <main class="main">
            <div class="main__banner">
                               
                    <div class="main__banner__slide" style="background-image: url('<?php echo get_template_directory_uri();  ?>/img/banner.jpg');">
                        <div class="inner ">
                

                            <a href="<?php echo home_url( '/contact-us' ); ?>" class="btn"><span><?php  echo (get_locale() == "es_ES") ? "Contáctenos" : "Contact Us" ?></span></a>
                            
                        </div>
                    </div>
                    

                
            </div>
            
            <section class="main__featured">
                <div class="inner">
                        <h1 class="main__featured__title"><?php  echo (get_locale() == "es_ES") ? "Nuestros servicios principales" : "Our Main Services" ?></h1>
                    
                        <?php
                            $args = array(
                              'post_type' => 'services'
                              
                              
                            );
                            $services = new WP_Query( $args );
                            if( $services->have_posts() ) {
                              while( $services->have_posts() ) {
                                $services->the_post();
                                ?>
                                   <article class="main__featured__item <?php  echo $post->post_name; ?>">
                                    <a href="<?php the_permalink(); ?>" class="main__featured__item__link">
                                    <div class="main__featured__item__img"></div>
                                    <div class="main__featured__item__text">
                                        <p class="main__featured__item__description"><?php the_title(); ?></p>
                                    </div>   
                                </a>
                                
                            </article>
                                  
                                <?php
                              }
                            }
                            else {
                              echo 'Oh ohm no services!';
                            }
                          ?>
                        
                </div>
                
                
                
            </section>
            <section class="main__services inner">
                    <div class="inner cycle-slideshow " data-cycle-fx="fade" data-cycle-timeout="5000" data-cycle-slides=".main__banner__slide__info">
                            <div class="main__banner__slide__info">
                                <?php if(get_locale() == "es_ES") : ?>
                                    <h1><span>Si lo puedes soñar...</span>
                                    <span>Nosotros lo hacemos realidad!</span></h1>
                                <?php else : ?>
                                    <h1><span>If you can dream it...</span>
                                    <span>we make it reality!!</span></h1>

                                <?php endif; ?>
                            </div>
                            <div class="main__banner__slide__info">
                                 <?php if(get_locale() == "es_ES") : ?>
                                    <h1><span>Nuestro Servicio de DJ...</span>
                                    <span>Simplemente inolvidable!</span></h1>
                                <?php else : ?>
                                    <h1><span>Our Dj Services...</span>
                                    <span>Simply unforgetable!!</span></h1>
                                <?php endif; ?>
                            </div>
                            <div class="main__banner__slide__info">
                            <?php if(get_locale() == "es_ES") : ?>
                                    <h1><span>Llevamos su evento...</span>
                                    <span>al siguiente nivel!</span></h1>
                                <?php else : ?>
                                    <h1><span>We take your event...</span>
                                    <span>to the next level !!</span></h1>
                                  <?php endif; ?>
                                
                            </div>
                             

                           
                            
                        </div>
                    <?php rewind_posts(); ?>
                      <?php query_posts( 'post_type=page&page_id=2' ); ?>
                        <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

                                <?php the_content(); ?>
                
                            <?php endwhile; ?>
                            <!-- post navigation -->
                          
                        <?php endif; ?>
                    <div class="main__services__container">
                       
                        <?php rewind_posts(); ?>
                        <?php query_posts( 'post_type=page&posts_per_page=3&page_id=63' ); ?>
                        <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
            
                            <article class="main__services__item">
                                <figure class="main__services__item__figure">
                                    <a href="<?php the_permalink(); ?>" class="main__services__item__link">
                                       <?php the_post_thumbnail( 'services-thumb' ,["class" => "main__services__item__img"]); ?> 
                                       
                                    </a>
                                  
                                </figure>
                                <h3 class="main__services__item__title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
                                <div class="main__services__item__description"><?php the_excerpt(); ?></div>
                                
                                
                            </article>
                
                            <?php endwhile; ?>
                            <!-- post navigation -->
                          
                        <?php endif; ?>
                        <?php query_posts( 'post_type=page&posts_per_page=3&page_id=59' ); ?>
                        <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
            
                            <article class="main__services__item">
                                <figure class="main__services__item__figure">
                                    <a href="<?php the_permalink(); ?>" class="main__services__item__link">
                                       
                                       <?php the_post_thumbnail( 'services-thumb' ,["class" => "main__services__item__img"]); ?> 
                                       
                                    </a>
                                  
                                </figure>
                                <h3 class="main__services__item__title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
                                <div class="main__services__item__description"><?php the_excerpt(); ?></div>
                                
                                
                            </article>
                
                            <?php endwhile; ?>
                            <!-- post navigation -->
                          
                        <?php endif; ?>
                        
                    </div>
                    
                     
                
            </section>
             <?php get_sidebar('testimonials'); ?>
            
        </main>
        <?php get_sidebar('contact'); ?>
        <?php get_footer(); ?>
        

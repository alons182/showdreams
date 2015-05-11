<?php get_header(); ?>
  
        
        <main class="main">
            <div class="main__banner">
                               
                    <div class="main__banner__slide" style="background-image: url('<?php echo get_template_directory_uri();  ?>/img/banner.jpg');">
                        <div class="inner">
                            <div class="main__banner__slide__info">
                                <h1><span>Lorem ipsum dolor sit amet</span>
                                <span>consectetur adipisicing</span></h1>
                                <a href="<?php echo home_url( '/contact-us' ); ?>" class="btn"><span>Contact Us</span></a>
                            </div>
                            
                        </div>
                    </div>
                    

                
            </div>
            
            <section class="main__featured">
                <div class="inner">
                        <h1 class="main__featured__title">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Lorem ipsum dolor sit amet</h1>
                    <?php rewind_posts(); ?>
                        <?php query_posts( 'cat=4' ); ?>
                        <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
            
                            <article class="main__featured__item">
                                <a href="<?php the_permalink(); ?>" class="main__featured__item__link">
                                    <div class="main__featured__item__img"></div>
                                    <div class="main__featured__item__text">
                                        <p class="main__featured__item__description"><?php the_title(); ?></p>
                                    </div>   
                                </a>
                                
                            </article>
                            
                
                            <?php endwhile; ?>
                            <!-- post navigation -->
                          
                        <?php endif; ?>
                   
                </div>
                
                
                
            </section>
            <section class="main__services inner">
                    <h1 class="main__services__title">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Lorem ipsum dolor sit amet</h1>
                    <p class="main__services__description">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Magnam atque facere dicta consectetur repellendus officia ducimus alias perspiciatis, reprehenderit doloribus tempora expedita fugiat ipsum deserunt magni itaque saepe sit ullam.</p>
                    <div class="main__services__container">
                        <?php rewind_posts(); ?>
                        <?php query_posts( 'cat=4' ); ?>
                        <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
            
                            <article class="main__services__item">
                                <figure class="main__services__item__figure">
                                    <a href="<?php the_permalink(); ?>" class="main__services__item__link">
                                       <?php the_post_thumbnail('medium',["class" => "main__services__item__img"]); ?> 
                                       
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
           
            
        </main>
        
        <?php get_footer(); ?>

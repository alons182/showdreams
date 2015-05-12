        <footer class="footer">
            <div class="inner">
                <div class="footer__contact">
                    <a href="<?php echo home_url( '/' ); ?>" class="footer__logo"><img src="<?php echo get_template_directory_uri(); ?>/img/logo-white.png" alt="Show Dreams" class="footer__logo__img" /></a>
                    <div class="footer__contact__item footer__contact__item--tel">
                         8480-68-65 <br/>
                        <span>Lorem ipsum dolor sit amet</span>
                    </div>
                    <div class="footer__contact__item footer__contact__item--tel">
                        8824-37-03 <br/>
                        <span>Lorem ipsum dolor sit amet</span>
                    </div>
                    <div class="footer__contact__item footer__contact__item--mail">
                        <a href="mailto::info@showdreams.com">info@showdreams.com</a>
                    </div>
                </div>
                <div class="footer__info">
                     <?php
                    wp_nav_menu(
                         array(
                            'theme_location' => 'menu-footer',
                            'container'       => 'nav',
                            'container_class' => 'footer__menu',
                            'container_id'    => '',
                            'menu_class'      => 'footer__menu__ul',
                            'menu_id'         => '',
                             )

                        ); ?>
                    
                    <div class="footer__social">
                        <h4>Siguenos en:</h4>
                        <div class="footer__social__item">
                             <a href="https://www.facebook.com/pages/Show-Dreams/333030813484914?fref=ts" class="footer__social__link" target="_blank"><i class="icon-facebook"></i><span class="footer__social__info">Facebook</span></a>
                             
                        </div>
                        <div class="footer__social__item">
                            <a href="#" class="footer__social__link"><i class="icon-twitter"></i><span class="footer__social__info">Twitter</span></a>
                            
                        </div>
                        <div class="footer__social__item">
                            <a href="#" class="footer__social__link"><i class="icon-google-plus"></i><span class="footer__social__info">Google Plus</span></a>
                            
                        </div>
                        <div class="footer__social__item">
                            <a href="#" class="footer__social__link"><i class="icon-youtube"></i><span class="footer__social__info">Youtube</span></a>
                            
                        </div>
                    </div>
                </div>
                
               
            </div>
            <div class="footer__copyright">
                <div class="inner">
                    <span class="footer__copyright__show">Show Dreams</span>
                    <span class="footer__copyright__avotz"><a href="http//avotz.com" target="_blank"><i class="icon-avotz"></i>&copy; 2015</a></span>
                </div>
                
            </div>
            
            
        </footer>

        

        <script src="<?php echo get_template_directory_uri() ?>/js/bundle.js"></script>
        <?php wp_footer(); ?>
    </body>
</html>
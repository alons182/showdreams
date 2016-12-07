
        
<?php get_header(); ?>
  
    <main class="main">
        <div class="main__page-banner" style="background-image: url('<?php echo get_template_directory_uri();  ?>/img/banner.jpg');"></div>
         
      
        <section class="main__content">
            <div class="inner">
                <div id="primary" class="blog-content">

                      <?php get_template_part( 'templates/post' ); ?>
                </div>
                <?php get_sidebar(); ?>
        
            </div>
        </section>
      
        
    </main>
    
 
<?php get_footer(); ?>
        
       

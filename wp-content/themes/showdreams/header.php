<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        
        <title>Show Dreams</title>
        <meta name="description" content="<?php bloginfo('description') ?>">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href='http://fonts.googleapis.com/css?family=PT+Sans:400,700' rel='stylesheet' type='text/css'>
        
        <link rel="stylesheet" href="<?php bloginfo('stylesheet_url') ?>">
        
        <?php wp_head(); ?>

        
    </head>
    <body <?php body_class(); ?>>    
        <div class="top">
            <div class="inner">
                <?php get_template_part( 'templates/nav' ); ?>
	            <div class="top__social">
	                <a href="https://www.facebook.com/pages/Show-Dreams/333030813484914?fref=ts" class="top__social__link" target="_blank"><i class="icon-facebook"></i></a>
	                <a href="#" class="top__social__link"><i class="icon-twitter"></i></a>
	                <a href="#" class="top__social__link"><i class="icon-google-plus"></i></a>
	            </div>
	            <button id="btn-menu" class="top__btn-menu"><i class="icon-menu"></i></button>
            </div>
        </div>
        <header class="header">
            <div class="inner">
                <a href="<?php echo home_url( '/' ); ?>" class="header__logo"><img src="<?php echo get_template_directory_uri();  ?>/img/logo.png" alt="Show Dreams" class="header__logo__img" /></a>
                
                
            </div>
            
        </header>
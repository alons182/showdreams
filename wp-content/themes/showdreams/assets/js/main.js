;(function($){

  var btnMenu = $('#btn-menu'),
      menu = $('.top__menu');
     



      btnMenu.on('click', function(){

          menu.toggle();
          $(this).toggleClass('top__btn-menu--active');

      });
      menu.find(".menu-item-has-children").hoverIntent({
      over: function() {
            $(this).find(">.sub-menu").slideDown(200 );
          },
      out:  function() {
            $(this).find(">.sub-menu").slideUp(200);
          },
      timeout: 200

       });

    //$(".chosen-select").chosen();
    
    //SCROLL WINDOW FUNCTIONALITY

    $(window).scroll(function () {
          if ($(this).scrollTop() > 50) {
              $('.header').addClass("header--fixed");
          } else {
              $('.header').removeClass("header--fixed");
          }
      });


    //GALLERY OF CARROUSEL

  $('#slider-gallery').carouFredSel({
    width: '100%',
    align: false,
    items: 3,
    items: {
      width: $('.services-gallery').width() * 0.15,
      height: 400,
      visible: 1,
      minimum: 1
    },
    scroll: {
      items: 1,
      timeoutDuration : 5000,
      onBefore: function(data) {
 
        //  find current and next slide
        var currentSlide = $('.slide.active', this),
          nextSlide = data.items.visible,
          _width = $('.services-gallery').width();
 
        //  resize currentslide to small version
        currentSlide.stop().animate({
          width: _width * 0.15
        });   
        currentSlide.removeClass( 'active' );
 
        //  hide current block
        data.items.old.add( data.items.visible ).find( '.slide-block' ).stop().fadeOut();         
 
        //  animate clicked slide to large size
        nextSlide.addClass( 'active' );
        nextSlide.stop().animate({
          width: _width * 0.7
        });           
      },
      onAfter: function(data) {
        //  show active slide block
        data.items.visible.last().find( '.slide-block' ).stop().fadeIn();
      }
    },
    onCreate: function(data){
 
      //  clone images for better sliding and insert them dynamacly in slider
      var newitems = $('.slide',this).clone( true ),
        _width = $('.services-gallery').width();
 
      $(this).trigger( 'insertItem', [newitems, newitems.length, false] );
 
      //  show images 
      $('.slide', this).fadeIn();
      $('.slide:first-child', this).addClass( 'active' );
      $('.slide', this).width( _width * 0.15 );
 
      //  enlarge first slide
      $('.slide:first-child', this).animate({
        width: _width * 0.7
      });
 
      //  show first title block and hide the rest
      $(this).find( '.slide-block' ).hide();
      $(this).find( '.slide.active .slide-block' ).stop().fadeIn();
    }
  });
 
  //  Handle click events
  $('#slider-gallery').children().click(function() {
    $('#slider-gallery').trigger( 'slideTo', [this] );
  });
 





})(jQuery);

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
      $('.top__languages').hoverIntent({
      over: function() {
            $('.top__languages__container').slideDown(200 );
          },
      out:  function() {
            $('.top__languages__container').slideUp(200);
          },
      timeout: 200

       });

      /*.on('click', function(){

         $('.top__languages__container').toggle();
       
      });*/

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

  // mini-contact form
  $('.mini-contact__btn').on('click', function (e) {
      
      $(this).addClass('open');
      $('.mini-contact__form').removeClass('bounceOutDown').addClass('bounceInUp').addClass('open');;    
  });
  
  $('.mini-contact__close').on('click', function (e) {
      
      $('.mini-contact__btn').removeClass('open');
      $('.mini-contact__form').removeClass('bounceInUp').addClass('bounceOutDown');    
  });

   // Forms with ajax process
    $('form[data-remote]').on('submit', function(e){
        var form =$(this);
        var method = form.find('input[name="_method"]').val() || 'POST';
        var url = form.prop('action');
        form.find('.loader').show();
        $.ajax({
            type: method,
            url: url,
            data: form.serialize(),
            success: function(){
                var message = form.data('remote-success-message');
                form.find('.loader').hide();
                if(message)
                {

                    $('.response').removeClass('message-error').addClass('message-success').html(message).fadeIn(300).delay(4500).fadeOut(300);
                }
            },
            error:function(){
                form.find('.loader').hide();
                $('.response').removeClass('message-success').addClass('message-error').html('Whoops, looks like something went wrong.').fadeIn(300).delay(4500).fadeOut(300);

            }
        });

        limpiaForm(form);

        e.preventDefault();
    });

    $('input[data-confirm], button[data-confirm]').on('click', function(e){
       var input = $(this);

        input.prop('disabled','disabled');

        if(! confirm(input.data('confirm'))){
            e.preventDefault();
        }
    });

    function limpiaForm(miForm) {

        // recorremos todos los campos que tiene el formulario
        $(":input", miForm).each(function() {
            var type = this.type;
            var tag = this.tagName.toLowerCase();
            //limpiamos los valores de los campos…
            if (type == 'text' || type == 'password'  || type == 'email' || tag == 'textarea')
                this.value = "";
            // excepto de los checkboxes y radios, le quitamos el checked
            // pero su valor no debe ser cambiado
            else if (type == 'checkbox' || type == 'radio')
                this.checked = false;
            // los selects le ponesmos el indice a -
            else if (tag == 'select')
                this.selectedIndex = -1;
        });
    }

 





})(jQuery);

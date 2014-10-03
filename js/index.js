    $(function() {
          $(".rslides").responsiveSlides();
        });
        $(function() {

            var height = $(window).height();
            var head = $('.div_header').height();
            var foot = $('.div_footer').height();
            var contentHeight = height-(head+foot);

            $('.div_content').css('min-height', contentHeight);
            $('.div_content').css('line-height', contentHeight+'px');
              
            $('._message .btn_sim').click(function() {
                $('._backForm').show();
           });
           $('._close a').click(function(){
            $('._backForm').hide();
           });

           //For IPad

           $(window).bind('orientationchange', function(event) {
              $('.div_content').css('min-height', contentHeight);
              $('.div_content').css('line-height', contentHeight+'px'); 
            });
           $('.success').css('top', ($(window).height()-120));

            setTimeout(function() {
              $('.success').removeClass('bounceInLeft');
              $('.success').addClass('bounceOutLeft');
            }, 3000);

            $(".forClick").hover(function() {
              $(this).parent().find('#inner').slideDown("slow").show();
            });
             
            $('#inner').hover(
              function() {
                clearTimeout( this.timer )
              },
              function() {
                var obj = this;
                this.timer = setTimeout(function() {  
                  $(obj).slideUp('slow'); 
                }, 1000);
              }
            );            

            $('._backForm').click( function(event){
              if( $(event.target).closest("._modalWindow").length ) 
                return;
                $("._backForm").hide();
                event.stopPropagation();
            });

        });
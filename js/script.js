$(function() {
  var height = $(window).height();
  var head = $('.div_header').height();
  var foot = $('.div_footer').height();
  var contentHeight = height-(head+foot);
  var paddingContent = (50/contentHeight)*100;

  $('.div_content').css('min-height', contentHeight);
    
  $('._message .btn_sim').click(function() {
      $('._backForm').show();
 });
 $('._close a').click(function(){
  $('._backForm').hide();
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
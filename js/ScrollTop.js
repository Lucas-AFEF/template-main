$(function(){
   $('nav a').click(function(){
     var href = $(this).attr('href');
     var offSetTop = $(href).offset().top;
     
     $('html,body').animate({'scrollTop': offSetTop});
     return false;
     if($(window)[0].innerWidth <= 768){
          $('.menu-mobile h2').click();
      }
   });
});
/*$(function(){
   $('nav a').click(function(){
      var href = $(this).attr('href');
      var offSetTop = $(href).offset().top;
      $('html,body').animate({'scrollTop': offSetTop});
      return false;
   }); 
});*/

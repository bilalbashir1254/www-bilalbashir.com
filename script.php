

<script type="text/javascript">  
   var slide_index = 1;
   
   $('#portfolio-wrapper .item-wrap a').click( function(){
      var href=   $(this).attr('href'); 
      var arr = href.split('-');
      var slide_index = 1;
      displaySlides(slide_index,href);
   })
   
 
  function nextSlide(n,slide) {  
       displaySlides(slide_index += n,slide);  
   }  

   function currentSlide(n) {  
       displaySlides(slide_index = n);  
   }  

   function displaySlides(n,href) {  
      var i;  
        
      var slides =$(href+" .showSlide").length;
       
      if (n > slides) { slide_index = 1 }  
      if (n < 1) { slide_index = slides }  
      $(".showSlide").css("display","none")
      $(href+ " .showSlide:nth-child("+slide_index+")").css("display","block"); 
   }
     
</script> 

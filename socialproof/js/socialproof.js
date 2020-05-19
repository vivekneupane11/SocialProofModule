let count = 0;
let timer = 0;

window.onload = function() {
  let isSmallDesktop = window.matchMedia("only screen and (max-width: 1198px)").matches;
  let isMobile = window.matchMedia("only screen and (max-width: 760px)").matches;

  jQuery('#mainsp').delay(4000).animate({opacity:1},3000);
  jQuery('.closebutton').click(function(){
      jQuery('#mainsp').animate({opacity:0,top:'100vh'},1000);
 jQuery('#allmessagesdiv').delay(1000).animate({'marginTop':'0px'});
    clearInterval(interval);
  });
function showmessage(){
    let lengthCounter = jQuery('#count').val()-1;

    jQuery('#mainsp').animate({opacity:0,top:'100vh'},1000);

 if (isMobile) {
   jQuery('#allmessagesdiv').delay(1000).animate({'marginTop':'-=82px'},2000);
   jQuery('#mainsp').delay(2000).animate({opacity:1,top:'82vh'},1000);
   isSmallDesktop = false;

 }
 else if (isSmallDesktop) {
   jQuery('#allmessagesdiv').delay(1000).animate({'marginTop':'-=90px'},2000);
   jQuery('#mainsp').delay(2000).animate({opacity:1,top:'82vh'},1000);

 }
 else{
   jQuery('#allmessagesdiv').delay(1000).animate({'marginTop':'-=90px'},2000);
   jQuery('#mainsp').delay(2000).animate({opacity:1,top:'80vh'},1000);

 }

      count++;
      if(count>lengthCounter){
          jQuery('#allmessagesdiv').animate({'marginTop':'0px'},10);
          jQuery('#allmessagesdiv').animate({opacity:1},1000);
          timer+= 1;
          count = 0;
          if(timer >= 3){
              jQuery('#mainsp').animate({opacity:0,top:'100vh'},1000);
             jQuery('#allmessagesdiv').delay(1000).animate({'marginTop':'0px'});
            clearInterval(interval);
          }
      }


}
  var interval = setInterval(showmessage,10000);

}

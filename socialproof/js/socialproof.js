let count = 0;
let timer = 0;
window.onload = function() {
  jQuery('#mainsp').delay(4000).animate({opacity:1},3000);

function showmessage(){
    let lengthCounter = jQuery('#count').val()-1;
    console.log(lengthCounter);
    jQuery('#mainsp').animate({opacity:0},1000);
    jQuery('#allmessagesdiv').delay(1000).animate({'marginTop':'-=75px'},2000);
    jQuery('#mainsp').delay(2000).animate({opacity:1},1000);
      count++;
      if(count>lengthCounter){
          jQuery('#allmessagesdiv').animate({'marginTop':'0px'},10);
          jQuery('#allmessagesdiv').animate({opacity:1},1000);
          timer+= 1;
          count = 0;
          if(timer >= 3){
            jQuery('#mainsp').animate({opacity:0},1000);
             jQuery('#allmessagesdiv').animate({'marginTop':'0px'},10);
            clearInterval(interval);
          }
      }
}
  var interval = setInterval(showmessage,10000);
}

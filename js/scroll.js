
$(window).scroll(function(){
  var nn=$(window).height();
  var ab=$(document).height();
  var bb=$(window).scrollTop();
  var n=(bb/(ab-nn))*100
  $("#linee").css({"background-color":"#1B8139","height":"64px","width":n+"%","top":"0","display":"block","position":"fixed"})
//  $("#linee").css({"width":n+"%","top":"0","position":"fixed"})
//var n=document.documentElement.scrollTop;
//var nnn=document.getElementById('a').offsetHeight;
//document.getElementById("s").innerHTML=(nnn-n);
//alert(nnn);

})
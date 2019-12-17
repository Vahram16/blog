(function(d){var h=[];d.loadImages=function(a,e){"string"==typeof a&&(a=[a]);for(var f=a.length,g=0,b=0;b<f;b++){var c=document.createElement("img");c.onload=function(){g++;g==f&&d.isFunction(e)&&e()};c.src=a[b];h.push(c)}}})(window.jQuery);
$.fn.hasAttr = function(name) { var attr = $(this).attr(name); return typeof attr !== typeof undefined && attr !== false; };


$(document).ready(function() {
r=function(){dpi=window.devicePixelRatio;$('.js23').attr('src', (dpi>1) ? 'images/kisspng-bob-the-builder-castle-builders-board-game-drawing-builder-5ac217c30443a4.8722605815226695070175-1130.png' : 'images/kisspng-bob-the-builder-castle-builders-board-game-drawing-builder-5ac217c30443a4.8722605815226695070175-565.png');
$('.js24').attr('src', (dpi>1) ? 'images/pbl-learning2-01-412.png' : 'images/pbl-learning2-01-206.png');};
if(!window.HTMLPictureElement){r();}
(function(){$('a[href^="#"]:not(.allowConsent,.noConsent,.denyConsent,.removeConsent)').each(function(i,e){$(e).click(function(){var t=e.hash.length>1?$('[name="'+e.hash.slice(1)+'"]').offset().top:0;return $("html, body").animate({scrollTop:t},400),!1})})})();
initMenu($('#m5')[0]);

});
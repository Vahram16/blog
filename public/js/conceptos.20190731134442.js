(function(d){var h=[];d.loadImages=function(a,e){"string"==typeof a&&(a=[a]);for(var f=a.length,g=0,b=0;b<f;b++){var c=document.createElement("img");c.onload=function(){g++;g==f&&d.isFunction(e)&&e()};c.src=a[b];h.push(c)}}})(window.jQuery);
$.fn.hasAttr = function(name) { var attr = $(this).attr(name); return typeof attr !== typeof undefined && attr !== false; };


$(document).ready(function() {
r=function(){dpi=window.devicePixelRatio;$('.js5').attr('src', (dpi>1) ? 'images/10-pasos-01-1810.png' : 'images/10-pasos-01-905.png');
$('.js6').attr('src', (dpi>1) ? 'images/circle-1414809-01-400.jpg' : 'images/circle-1414809-01-200.jpg');
$('.js7').attr('src', (dpi>1) ? 'images/circle-1414809-02-400.jpg' : 'images/circle-1414809-02-200.jpg');
$('.js8').attr('src', (dpi>1) ? 'images/circle-1414809-03-400.jpg' : 'images/circle-1414809-03-200.jpg');
$('.js9').attr('src', (dpi>1) ? 'images/circle-1414809-04-400.jpg' : 'images/circle-1414809-04-200.jpg');
$('.js10').attr('src', (dpi>1) ? 'images/aprendizaje-1620.png' : 'images/aprendizaje-810.png');
$('.js11').attr('src', (dpi>1) ? 'images/placeholder-570.png' : 'images/placeholder-285.png');
$('.js12').attr('src', (dpi>1) ? 'images/placeholder-570.png' : 'images/placeholder-285.png');
$('.js13').attr('src', (dpi>1) ? 'images/placeholder-570.png' : 'images/placeholder-285.png');
$('.js4').attr('src', (dpi>1) ? 'images/pbl-learning2-01-412.png' : 'images/pbl-learning2-01-206.png');};
if(!window.HTMLPictureElement){r();}
(function(){$('a[href^="#"]:not(.allowConsent,.noConsent,.denyConsent,.removeConsent)').each(function(i,e){$(e).click(function(){var t=e.hash.length>1?$('[name="'+e.hash.slice(1)+'"]').offset().top:0;return $("html, body").animate({scrollTop:t},400),!1})})})();
initMenu($('#m2')[0]);

});
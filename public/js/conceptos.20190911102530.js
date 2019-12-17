(function(d){var h=[];d.loadImages=function(a,e){"string"==typeof a&&(a=[a]);for(var f=a.length,g=0,b=0;b<f;b++){var c=document.createElement("img");c.onload=function(){g++;g==f&&d.isFunction(e)&&e()};c.src=a[b];h.push(c)}}})(window.jQuery);
$.fn.hasAttr = function(name) { var attr = $(this).attr(name); return typeof attr !== typeof undefined && attr !== false; };


$(document).ready(function() {
r=function(){dpi=window.devicePixelRatio;$('.js5').attr('src', (dpi>1) ? 'images/10-pasos-01-1810.png' : 'images/10-pasos-01-905.png');
$('.js6').attr('src', (dpi>1) ? 'images/aprendizaje-1620.png' : 'images/aprendizaje-810.png');
$('.js7').attr('src', (dpi>1) ? 'images/circle-1414809-01-400-400.jpg' : 'images/circle-1414809-01-400-200.jpg');
$('.js8').attr('src', (dpi>1) ? 'images/circle-1414809-02-400-400.jpg' : 'images/circle-1414809-02-400-200.jpg');
$('.js9').attr('src', (dpi>1) ? 'images/circle-1414809-03-400-400.jpg' : 'images/circle-1414809-03-400-200.jpg');
$('.js10').attr('src', (dpi>1) ? 'images/circle-1414809-04-400-400.jpg' : 'images/circle-1414809-04-400-200.jpg');
$('.js11').attr('src', (dpi>1) ? 'images/je240kkjiua-570.jpg' : 'images/je240kkjiua-285.jpg');
$('.js12').attr('src', (dpi>1) ? 'images/afbdiw-lzwk-570.jpg' : 'images/afbdiw-lzwk-285.jpg');
$('.js13').attr('src', (dpi>1) ? 'images/9o8ydygtt64-570.jpg' : 'images/9o8ydygtt64-285.jpg');
$('.js4').attr('src', (dpi>1) ? 'images/pbl-learning2-01-412.png' : 'images/pbl-learning2-01-206.png');};
if(!window.HTMLPictureElement){r();}
(function(){$('a[href^="#"]:not(.allowConsent,.noConsent,.denyConsent,.removeConsent)').each(function(i,e){$(e).click(function(){var t=e.hash.length>1?$('[name="'+e.hash.slice(1)+'"]').offset().top:0;return $("html, body").animate({scrollTop:t},400),!1})})})();
initMenu($('#m2')[0]);
var wl = new woolite();
wl.init();
wl.addAnimation($('.js7')[0], "1.00s", "0.00s", 1, 100);
wl.addAnimation($('.js8')[0], "1.50s", "0.50s", 1, 100);
wl.addAnimation($('.js9')[0], "2.00s", "1.00s", 1, 100);
wl.addAnimation($('.js10')[0], "2.50s", "1.50s", 1, 100);
wl.start();

});
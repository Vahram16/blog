(function(d){var h=[];d.loadImages=function(a,e){"string"==typeof a&&(a=[a]);for(var f=a.length,g=0,b=0;b<f;b++){var c=document.createElement("img");c.onload=function(){g++;g==f&&d.isFunction(e)&&e()};c.src=a[b];h.push(c)}}})(window.jQuery);
$.fn.hasAttr = function(name) { var attr = $(this).attr(name); return typeof attr !== typeof undefined && attr !== false; };


$(document).ready(function() {
r=function(){dpi=window.devicePixelRatio;$('.js18').attr('src', (dpi>1) ? 'images/placeholder-426.png' : 'images/placeholder-213.png');
$('.js19').attr('src', (dpi>1) ? 'images/kisspng-pdf-computer-icons-adobe-acrobat-adobe-logo-5b4bf9dc099856.0984323415317058200393-138.png' : 'images/kisspng-pdf-computer-icons-adobe-acrobat-adobe-logo-5b4bf9dc099856.0984323415317058200393-69.png');
$('.js20').attr('src', (dpi>1) ? 'images/kisspng-pdf-computer-icons-adobe-acrobat-adobe-logo-5b4bf9dc099856.0984323415317058200393-138.png' : 'images/kisspng-pdf-computer-icons-adobe-acrobat-adobe-logo-5b4bf9dc099856.0984323415317058200393-69.png');
$('.js14').attr('src', (dpi>1) ? 'images/pbl-learning2-01-518.png' : 'images/pbl-learning2-01-259.png');
$('.js15').attr('src', (dpi>1) ? 'images/kisspng-pdf-computer-icons-adobe-acrobat-adobe-logo-5b4bf9dc099856.0984323415317058200393-138.png' : 'images/kisspng-pdf-computer-icons-adobe-acrobat-adobe-logo-5b4bf9dc099856.0984323415317058200393-69.png');
$('.js16').attr('src', (dpi>1) ? 'images/kisspng-pdf-computer-icons-adobe-acrobat-adobe-logo-5b4bf9dc099856.0984323415317058200393-138.png' : 'images/kisspng-pdf-computer-icons-adobe-acrobat-adobe-logo-5b4bf9dc099856.0984323415317058200393-69.png');
$('.js17').attr('src', (dpi>1) ? 'images/placeholder-426.png' : 'images/placeholder-213.png');};
if(!window.HTMLPictureElement){r();}
(function(){$('a[href^="#"]:not(.allowConsent,.noConsent,.denyConsent,.removeConsent)').each(function(i,e){$(e).click(function(){var t=e.hash.length>1?$('[name="'+e.hash.slice(1)+'"]').offset().top:0;return $("html, body").animate({scrollTop:t},400),!1})})})();
initMenu($('#m3')[0]);

});
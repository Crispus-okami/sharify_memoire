

function _(elt) {
   return document.getElementById(elt);
}

var id1 = _('p1');
var id2 = _('p2');
id2.onblur = () => {
   if (id1.value == id2.value) {
      // _('sp').innerHTML = "mot identique"
   } else {
      _('sp').innerHTML = "Les mots de passe ne sont pas identiques"
   }
}

$('.owl-carousel').owlCarousel({
   loop:true,
   margin:10,
   nav:true,
   autoplay:true,
   autoplayTimeout:4000,
   navSpeed:2000,
   autoplayHoverPause:true,
   responsive:{
       0:{
           items:1
       },
       600:{
           items:1
       },
       1000:{
           items:1
       }
   }
})


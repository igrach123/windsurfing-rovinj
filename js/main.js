
// @koala-prepend "owl.carousel.min.js"
// @koala-prepend "blueimp-gallery.min.js"
// @koala-prepend "jquery.matchHeight.js"
// @koala-prepend "smooth-scroll.min.js"
// @koala-prepend "echo.min.js"
// @koala-prepend "lazyload.min.js"
// @koala-prepend "vendor/wow.min.js"


//image preloader
echo.init({
    callback: function (element, op) {
        console.log(element, 'has been', op + 'ed')
    }
});

// echo.render(); is also available for non-scroll callbacks
// wow reveal js
new WOW().init();

//show more on click o nama

$(document).ready(function(){
    $("#morebtn-hide").click(function(){
      $("#showtext").hide();
    });
    $("#morebtn").click(function(){
      $("#showtext").show();
    });
  });
  


//match heoght group 1
$(function() {
	$('.item').matchHeight(options);
});

//Owl Carousel 2
$(document).ready(function(){
$("#testimonial-slider").owlCarousel({
items:2,
itemsTablet:[767,1],
itemsDesktopSmall:[979,2],
responsiveClass:true,

pagination:false,
stopOnHover:true,
transitionStyle:"fade",
navigation:true,
navigationText:[
"<i class='fa fa-chevron-left fa-3x'></i>",
"<i class='fa fa-chevron-right fa-3x'></i>"
],
autoPlay:true
});
});
//Owl Carousel 1
$(document).ready(function(){
$("#testimonial-slider-hr").owlCarousel({
items:2,
itemsTablet:[767,1],
itemsDesktopSmall:[979,2],
responsiveClass:true,

pagination:false,
stopOnHover:true,
transitionStyle:"fade",
navigation:true,
navigationText:[
"<i class='fa fa-chevron-left fa-3x'></i>",
"<i class='fa fa-chevron-right fa-3x'></i>"
],
autoPlay:true
});
});



//Navbar Scroll Event
var lastScrollTop = 0;
var navbar        = $('.navbar');
$(window).scroll(function(event){
var st = $(this).scrollTop();
if (st > lastScrollTop){
navbar.addClass('navbar-scroll-custom');
} else {
navbar.removeClass('navbar-scroll-custom');
}
lastScrollTop = st;
});

// change naviagtion color on scroll 
$(function() {
var nav = $('nav');
$(window).scroll(function() {
var scroll = $(window).scrollTop();

if (scroll >= 150) {
    nav.addClass('bg-trans');
   
} else {
    nav.removeClass('bg-trans');
    
}
});
})
//change logo on scroll
$(function() {
var header = $('#logo1');
$(window).scroll(function() {
var scroll = $(window).scrollTop();

if (scroll >= 150) {
    header.addClass('smaller');
   
} else {
    header.removeClass('smaller');
    
}
});
});
//change logo on scroll
$(function() {
var header = $('#lang-id');
$(window).scroll(function() {
var scroll = $(window).scrollTop();
                            if (scroll >= 150) {
                                header.addClass('smaller');
                            
                                } else {
                                header.removeClass('smaller');
                                
                                }
                            });
});


  //show this modal for privacy on scroll////////////////////
  
/*maps unclickable + google map 1*/
$('.maps').click(function () {
$('.maps iframe').css("pointer-events", "auto");
});

$( ".maps" ).mouseleave(function() {
$('.maps iframe').css("pointer-events", "none"); 
});

// //GOOGLE MAP 1
// function initMap(){
//   //options
//   var options = {
//     zoom:13,
//     center:{lat:45.0740,lng:13.6548}
//   }
//   //map init
//   var map = new google.maps.Map(
//     document.getElementById("map1"), options);

 
  
//   //marker
//   var marker1 = new google.maps.Marker({
//     position:{lat:45.087466,lng:13.640614},
//     map:map
//   });

//   var marker2 = new google.maps.Marker({
//     position:{lat:45.060838,lng:13.665519},
//     map:map
//   });

//   var infowWindow1 = new google.maps.InfoWindow({
//     content:'<a href="https://goo.gl/maps/DfY4Ys1uGFn" target="_blank"> Rovinj s northern port Valdibora </a>',
//   });
//     marker1.addListener('click', function() {
//       infoWindow1.open(map, marker1);
//     });

    
//   var map2 = new google.maps.Map(
//     document.getElementById("map2"), options);

//     var marker3 = new google.maps.Marker({
//       position:{lat:45.087466,lng:13.640614},
//       map:map2,
//     });
  
//     var marker4 = new google.maps.Marker({
//       position:{lat:45.060838,lng:13.665519},
//       map:map2,
//     });  

// };

// closen hamburger nav on click
$(function() {
$('.nav a').on('click', function(){ 
if($('.navbar-toggle').css('display') !='none'){
    $(".navbar-toggle").trigger( "click" );
}
});
});

//smoth scroll initialisation
smoothScroll.init();

//GALERIJAAAAAA
document.getElementById('bikes').onclick = function (event) {
event = event || window.event;
var target = event.target || event.srcElement,
link = target.src ? target.parentNode : target,
options = {index: link, event: event},
links = this.getElementsByTagName('a');
blueimp.Gallery(links, options);
};

blueimp.Gallery(
document.getElementById('bikes').getElementsByTagName('a'),
{
container: '#blueimp-gallery-carousel',
carousel: true
}
);
var options = {
displayClass: 'blueimp-gallery-display',
};


//back to top icona
$('body').prepend('<a href="#navigation" class="back-to-top"></a>');
var amountScrolled = 300;

$(window).scroll(function() {
if ( $(window).scrollTop() > amountScrolled ) {
$('a.back-to-top').fadeIn('slow');
} else {
$('a.back-to-top').fadeOut('slow');
}
});
$('a.back-to-top').click(function() {
$('html, body').animate({
scrollTop: 0
}, 700);
return false;
});


window.addEventListener('load', function(){
var allimages= document.getElementsByTagName('img');
for (var i=0; i<allimages.length; i++) {
if (allimages[i].getAttribute('data-src')) {
    allimages[i].setAttribute('src', allimages[i].getAttribute('data-src'));
}
}
}, false)


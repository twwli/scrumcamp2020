/****************************************************
FUNCTIONS
****************************************************/

$(window).load(function() {
// Animate loader off screen
    $(".home-img").fadeIn(800);
});

jQuery(document).ready(function($) {

/* CUSTOM ANIMATIONS IN VIEWPORT */

/* Animate Speakers */
$('.speakers li:first-of-type a').attr('data-wow-delay','600ms');
$('.speakers li:nth-of-type(3n+2) a').attr('data-wow-delay','900ms');
$('.speakers li:nth-of-type(3n+3) a').attr('data-wow-delay','1200ms');

$('.speakers li:nth-of-type(3n+4) a').attr('data-wow-delay','600ms');
$('.speakers li:nth-of-type(3n+5) a').attr('data-wow-delay','900ms');
$('.speakers li:nth-of-type(3n+6) a').attr('data-wow-delay','1200ms');

$('.speakers li:nth-of-type(3n+7) a').attr('data-wow-delay','600ms');
$('.speakers li:nth-of-type(3n+8) a').attr('data-wow-delay','600ms');
$('.speakers li:nth-of-type(3n+9) a').attr('data-wow-delay','1200ms');

$('.speakers li:nth-of-type(3n+10) a').attr('data-wow-delay','600ms');
$('.speakers li:nth-of-type(3n+11) a').attr('data-wow-delay','900ms');
$('.speakers li:nth-of-type(3n+12) a').attr('data-wow-delay','1200ms');

$('.speakers li:nth-of-type(3n+13) a').attr('data-wow-delay','600ms');
$('.speakers li:nth-of-type(3n+14) a').attr('data-wow-delay','900ms');
$('.speakers li:nth-of-type(3n+15) a').attr('data-wow-delay','1200ms');

$('.speakers li:nth-of-type(3n+16) a').attr('data-wow-delay','600ms');
$('.speakers li:nth-of-type(3n+17) a').attr('data-wow-delay','900ms');
$('.speakers li:nth-of-type(3n+18) a').attr('data-wow-delay','1200ms');

$('.speakers li:nth-of-type(3n+19) a').attr('data-wow-delay','600ms');
$('.speakers li:nth-of-type(3n+20) a').attr('data-wow-delay','900ms');
$('.speakers li:nth-of-type(3n+21) a').attr('data-wow-delay','1200ms');

/* Animate Sponsors */
$('.partners li:first-of-type').attr('data-wow-delay','600ms');
$('.partners li:nth-of-type(3n+2)').attr('data-wow-delay','900ms');
$('.partners li:nth-of-type(3n+3)').attr('data-wow-delay','1200ms');
$('.partners li:nth-of-type(3n+4)').attr('data-wow-delay','1500ms');
$('.partners li:nth-of-type(3n+5)').attr('data-wow-delay','1800ms');
$('.partners li:nth-of-type(3n+6)').attr('data-wow-delay','2100ms');
$('.partners li:nth-of-type(3n+7)').attr('data-wow-delay','2400ms');
$('.partners li:nth-of-type(3n+8)').attr('data-wow-delay','2700ms');
$('.partners li:nth-of-type(3n+9)').attr('data-wow-delay','3000ms');
$('.partners li:nth-of-type(3n+10)').attr('data-wow-delay','3300ms');
$('.partners li:nth-of-type(3n+11)').attr('data-wow-delay','3600ms');
$('.partners li:nth-of-type(3n+12)').attr('data-wow-delay','3900ms');
$('.partners li:nth-of-type(3n+13)').attr('data-wow-delay','4200ms');
$('.partners li:nth-of-type(3n+14)').attr('data-wow-delay','4500ms');
$('.partners li:nth-of-type(3n+15)').attr('data-wow-delay','4800ms');
$('.partners li:nth-of-type(3n+16)').attr('data-wow-delay','5100ms');

var wow = new WOW(
  {
    boxClass:     'wow',      // animated element css class (default is wow)
    animateClass: 'animated', // animation css class (default is animated)
    offset:       0,          // distance to the element when triggering the animation (default is 0)
    mobile:       false,       // trigger animations on mobile devices (default is true)
    live:         true,       // act on asynchronously loaded content (default is true)
    callback:     function(box) {
      // the callback is fired every time an animation is started
      // the argument that is passed in is the DOM node being animated
    },
    scrollContainer: null,    // optional scroll container selector, otherwise use window,
    resetAnimation: true,     // reset animation on end (default is true)
  }
);
wow.init();

/* GDPR ACCEPTANCE */

/* Force the checkbox to be empty on page load*/
$('input[type=checkbox]').prop('checked',false);

/* Make the button clickable */
$('.acceptance-optin-wrap input:checkbox').change(function(){
    if ($(this).is(':checked')) {
        $('.wpcf7-submit').addClass("is-clickable");
    }
    else {
        $('.wpcf7-submit').removeClass("is-clickable");
    }
});

/* Make the button clickable */
$('.newsletter-box-optin-wrap input:checkbox').change(function(){
    if ($(this).is(':checked')) {
        $('#ck_subscribe_button').addClass("is-clickable");
    }
    else {
        $('#ck_subscribe_button').removeClass("is-clickable");
    }
});

$('.home .inner-header').addClass('wow');

/* NAVBAR ANIMATION */


var prevScrollpos = window.pageYOffset;
window.onscroll = function() {
  var currentScrollPos = window.pageYOffset;
  if (prevScrollpos > currentScrollPos) {
    document.getElementById("header").style.top = "0";
  } else {
    document.getElementById("header").style.top = "-107px";
  }
  prevScrollpos = currentScrollPos;
}

$(window).scroll(function () {
   var height = $('#home').height();

   if ($(this).scrollTop() > height - 100 ) {
      $('#navbar').removeClass('header-dark');
   }
   else {
      $('#navbar').addClass('header-dark');
   }
});



/* MOBILE NAV */

$('.toggle-menu').click (function(){
  $(this).toggleClass('active');
  $('#menu').toggleClass('open');
  $("#menu li").each(function(i, li) {
      var $list = $(this).closest('ul');
      $list.delay(200).queue(function() {
          $(li).toggleClass('anim fadeInUp');
          $list.dequeue();
      });
  });
  $('body').toggleClass('no-overflow');
});

$('.menu-item a').click (function(){
  $('#menu').removeClass('open');
  $("#menu li").each(function(i, li) {
      var $list = $(this).closest('ul');
      $list.delay(200).queue(function() {
          $(li).removeClass('anim fadeInUp');
          $list.dequeue();
      });
  });
  $('.toggle-menu').removeClass('active');
  $('body').removeClass('no-overflow');
});


/* SCHEDULE TABS (MOBILE ONLY) */

$('.tab a').on('click', function (e) {
  
  e.preventDefault();
  
  $(this).parent().addClass('active');
  $(this).parent().siblings().removeClass('active');
  
  target = $(this).attr('href');

  $('.tab-content > div').not(target).hide();
  
  $(target).fadeIn(600);
  
});

/* SMOOTH SCROLLS */

$(function() {
  $('.scroll-down-btn[href^="#"], #menu-main-nav a[href*=#]:not([href=#])').click(function() {
    if (location.pathname.replace(/^\//,'') == this.pathname.replace(/^\//,'') && location.hostname == this.hostname) {
      var target = $(this.hash);
      target = target.length ? target : $('[name=' + this.hash.slice(1) +']');
      if (target.length) {
        $('html,body').animate({
          scrollTop: target.offset().top
        }, 600);
        return false;
      }
    }
  });
});

/* FIXED SHARE BUTTONS */

/* $(function(){
  $(window).scroll(function() {
    var scroll = $(window).scrollTop();
      if ( scroll >= 420 ) {
           $('#post-share').addClass('is-fixed');
        }
        else {
            $('#post-share').removeClass('is-fixed');
        }
  });
}); */

$(window).scroll(function () {
   var height = $('#blog-header').height();

   if ($(this).scrollTop() > height - 0 ) {
      $('#post-share').addClass('is-fixed');
   }
   else {
      $('#post-share').removeClass('is-fixed');
   }
});


/* SPEAKERS SLIDER FOR MOBILE */

$('.slick').slick({
    slidesToShow: 1,
    slidesToScroll: 1,
    mobileFirst: true,
    arrows: false,
    dots: true,
    centerMode: true,
    responsive: [
      {
        breakpoint: 768,
        settings: 'unslick'
      }
    ]
  });

}); /* end of as page load scripts */

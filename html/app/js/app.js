
   var $loader_overlay = $('.loader_overlay');
   if ( $loader_overlay.length > 0 ) {
      // preloader init
      $('body').queryLoader2({
         barColor: 'transparent',
         backgroundColor: 'transparent',
         percentage: false,
         barHeight: 1,
         minimumTime: 500,
         deepSearch: true,
         onComplete: function() {
            $loader_overlay.fadeOut('normal', function(){
                $(".line").addClass("ready");
            });
         }
      });
   }





var app = (function(document, $) {

    'use strict';
    var docElem = document.documentElement,

        _userAgentInit = function() {
            docElem.setAttribute('data-useragent', navigator.userAgent);
        },
        _init = function() {
            // $(document).foundation();
            _userAgentInit();
        };

    return {
        init: _init
    };

})(document, jQuery);

var wow = new WOW(
  {
    boxClass:     'wow',      // animated element css class (default is wow)
    animateClass: 'animated', // animation css class (default is animated)
    offset:       0,          // distance to the element when triggering the animation (default is 0)
    mobile:       true,       // trigger animations on mobile devices (default is true)
    live:         false        // act on asynchronously loaded content (default is true)
  }
);


var clock = (function(){
    
    function b(){
        var M,m,z,K,O,L,u,s,F,I,B,A={},o='red',E='#000',p='butt',
        N=Math.PI,e=Math.sin,f=Math.cos,
        j={interval:50,sLength:20,sOverlap:5,sColour:o,sCap:p,sThickness:0.75,sBlob:1.5,mLength:18,mOverlap:1,mColour:E,mCap:p,mThickness:1.25,hLength:12,hOverlap:1,hColour:E,hCap:p,hThickness:1.5,diameter:50,dRadius:22,dHourR1:16,dHourR2:22,dMinuteR1:20,dMinuteR2:22,dThickness:1,dColour:'#999',dCap:p};
        function l(h,x,w){m.lineWidth=h;m.strokeStyle=x;m.lineCap=w}
        function n(y,P,x){var w=f(y),h=e(y);m.moveTo(P*w,P*h);m.lineTo(x*w,x*h)}
        function r(Z,Q,P,X,T,ab,U,W){var S=W.height,aa=W.width,R=P-Q,ac=R/S,Y=aa/2,V=S-(P==0?0:S/Math.abs(R/Q));m.save();m.rotate(Z);m.scale(ac,ac);m.translate(-Y,-V);m.drawImage(W,0,0);m.restore()}
        function v(U,y,w,T,Q,V,R,S){var h=U-N/2,P=f(h),x=e(h);m.strokeStyle=m.fillStyle=Q;m.lineCap=R;m.lineWidth=V;m.beginPath();m.moveTo(y*P,y*x);m.lineTo(w*P,w*x);m.stroke();m.closePath();m.beginPath();T&&m.arc(0,0,T,0,2*N,true);m.fill();m.closePath()}
        function C(w){var h=A.s&&A.s.complete?r:v;h(w*N/30,-j.sOverlap,j.sLength,j.sBlob,j.sColour,j.sThickness,j.sCap,A.s)}
        function H(h){var w=A.m&&A.m.complete?r:v;w(h*N/30,-j.mOverlap,j.mLength,j.mBlob,j.mColour,j.mThickness,j.mCap,A.m)}
        function J(w){var h=A.h&&A.h.complete?r:v;h(w*N/6,-j.hOverlap,j.hLength,j.hBlob,j.hColour,j.hThickness,j.hCap,A.h)}
        function q(){var h=60,w=N/30;if(j.dThickness){l(j.dThickness,j.dColour,j.dCap);m.fillStyle=j.dFill;m.beginPath();m.moveTo(j.dRadius,0);m.arc(0,0,j.dRadius,0,2*N,false);j.dFill&&m.fill();m.stroke();m.closePath()}if(j.dMinuteR2&&j.dMinuteR2!=j.dMinuteR1){l(j.dMThickness||j.dThickness,j.dMColour||j.dColour,j.dMCap||j.dCap);m.beginPath();while(--h>=0){h%5&&n(h*w,j.dMinuteR1,j.dMinuteR2)}m.stroke();m.closePath()}if(j.dHourR2&&j.dHourR2!=j.dHourR1){l(j.dHThickness||j.dThickness,j.dHColour||j.dColour,j.dHCap||j.dCap);m.beginPath();for(h=0;h<12;++h){n(h*5*w,j.dHourR1,j.dHourR2)}m.stroke();m.closePath()}}
        function i(h,w){var x=new Image;x.onload=function(){A[w]=this};x.src=h}
        function g(y){var w,x,h;h=y.getSeconds()+(j.tick?0:y.getMilliseconds()*0.001);x=y.getMinutes()+(h/60);w=y.getHours()+(x/60);j.noFace||q();J(w);H(x);j.hideSeconds||C(h)}
        function t(){m.setTransform(1,0,0,1,0,0);m.clearRect(0,0,z,K);m.setTransform(O,0,0,L,u,s);var h=new Date;I&&h.setTime(h.valueOf()+I);j.tz!=undefined&&h.setTime(h.valueOf()+(h.getTimezoneOffset()*60000)+(j.tz*3600000));j.offset&&h.setTime(h.valueOf()+(j.offset*1000));g(h)}function D(h){t();F(D)}function k(x,w){var h;if(j){for(h in w){j[h]=w[h]}}if(j.interval){M=document.getElementById(x);z=M.width;K=M.height;h=(z>K?K:z);O=(j.width||j.height||h)/(j.diameter||100);L=(j.height||j.width||h)/(j.diameter||100);u=j.x!=undefined?j.x:z/2;s=j.y!=undefined?j.y:K/2;m=M.getContext('2d');j.sImage&&i(j.sImage,'s');j.mImage&&i(j.mImage,'m');j.hImage&&i(j.hImage,'h');G();F=j.useRAF&&(window.mozRequestAnimationFrame||window.webkitRequestAnimationFrame);j.startTime!=undefined&&(I=(j.startTime*1000)-new Date().valueOf());t();if(F){F(D)}else{B=setInterval(t,j.interval)}}}
        function G(){F&&(F=function(){});B&&clearInterval(B);B=null}this.start=k;this.stop=G}var c={};
        function d(f,e){(c[f]||(c[f]=new b))&&c[f].start(f,e)}
        function a(e){c[e]&&c[e].stop()}window.startClock=d;window.stopClock=a}());




(function() {

    'use strict';
    app.init();
    wow.init();

 var clockHandColor = '#B5995C';
      startClock('clockCanvasLA',{
          noFace: true,
          tz: -7,
          hideSeconds: true,
          mColour: clockHandColor,
          mThickness: 1,
          hColour: clockHandColor,
          hThickness: 1
        });


  mediaCheck({
  media: '(max-width: 640px)',
  entry: function() {},
  exit: function() {
    $('.main-nav').removeClass('menu-on').removeClass('menu-off'); 
    $('body').removeClass('MenuMobile');
  }
});    



})();








  
// Responsive imgmap CHECK AL GIRAR DISPOSITIVO 
$('img[usemap]').rwdImageMaps();

var $overBlack = $('.overlay-black'),
    $sunset    = $('.sunset'), 
    $txt       = $('.txt');

$('area').on('mouseenter touchstart', function(e) {
    e.preventDefault();
    var zone = $(this).data('zone');
    $overBlack.stop(true, true).fadeIn();
    $sunset.filter('.img'+zone).stop(true, true).fadeIn();
    // if(zone == 1) {$('.t1-line-for-medium').slideDown();}   
    $txt.stop(true,true).filter('.t'+zone).fadeIn('slow');
    $('.t'+zone+'-line').stop(true,true).slideDown();
    // $("#sunset").find("h4").removeClass("fadeIn").addClass("fadeOut");
}).on('mouseleave touchend',function(e){
   e.preventDefault();
    var zone = $(this).data('zone');
    $sunset.filter('.img'+zone).hide();
    // if(zone == 1) {$('.t1-line-for-medium').slideUp();} 
    $txt.stop(true,true).filter('.t'+zone).fadeOut(); 
    $('.t'+zone+'-line').stop(true,true).slideUp();
    $overBlack.hide();
    // $("#sunset").find("h4").removeClass("fadeOut").addClass("fadeIn");
});



// $( "#sunset" ).mouseout(function(e){
//   $(this).find("h4").removeClass("fadeOutUp").addClass("fadeIn");
// });



 var offsetY = window.pageYOffset,
        $body = $('body'),
        $win = $(window),
        $close = $('.btnClose'),
        $open = $('.btnOpen'),
        $holder = $('#disclaimer'),
        $stuff = $('.modal-content'),
        $mainNav = $('.main-nav');

$('.btn-menu').bind('click tap',(function(e) {
	if($mainNav.hasClass('menu-on')) {
    $mainNav.removeClass( 'menu-on' ).toggleClass('menu-off');  
    $body.removeClass('MenuMobile'); 
  return false;
  }

	$mainNav.removeClass('menu-off').toggleClass( 'menu-on' );
  $body.addClass('MenuMobile');
	e.preventDefault();
}));



// Stycky Nav
var origOffsetY = 70;
function scroll() {
    if ($(window).scrollTop() >= origOffsetY) {
        $mainNav.addClass('sticky');
    } else {
        $mainNav.removeClass('sticky');
    }
  }
  document.onscroll = scroll;


$('.gallery').slick({
  // appendArrows: $('.gallery'),
  dots: false,
  infinite: true,
  swipe: true,
  speed: 600,
  autoplay: false,
  autoplaySpeed: 6000,
  cssEase:'cubic-bezier(1,.01,.03,.1)',
  // prevArrow: $('.btn-prev'),
  // nextArrow: $('.btn-next'),
  onBeforeChange : function(slide, index){
    $('.gallery-name').removeClass('fadeInUp').addClass('fadeOutDown');
  },
  onAfterChange: function(slide, index){
        var altActive = $('.slick-slide:not(.gallery)').filter('.slick-active').children().attr('alt');
        var actSlide = index+1;
        if(actSlide<10) {actSlide = "0"+actSlide;}
        $('.counter-current').text(actSlide);
        $('.gallery-name').text(altActive).removeClass('fadeOutDown').addClass('fadeInUp');
      },
  onInit: function(slide, index){
        $('.counter-current').text("01");

        var totSlide = $('.slick-slide:not(.slick-cloned)').length-1;
         if(totSlide<10) {totSlide = "0"+totSlide;}
        $('.counter-total').text(totSlide);

         var altActive = $('.slick-slide:not(.gallery)').filter('.slick-active').children().attr('alt');
        $('.gallery-name').text(altActive);

        $('.btn-next').click(function(e){
          e.preventDefault;
          $('.gallery').slickNext();
        });
        $('.btn-prev').click(function(e){
          e.preventDefault;
          $('.gallery').slickPrev();
        });


      } 
});





  // Press blocks with animation
  $('.main-content, .gallery-grid').on('mouseenter mouseleave tap', '.hover-animation', function() {
     $(this).children('img').toggleClass('sepia');
     $(this).children('.hover-content').toggleClass('visible');
  }); 


  $('.icon-totop').click(function(e) {
    $('html,body').animate({scrollTop: 0}, 1000);
    e.preventDefault();
  });

  // $('.load-more').click(function(e) {
  //   var page = $(this).data("page");
  //   var mode = $(this).data("mode");
  //   var load = "press/morenews-"+mode+"-"+page+".html";
  //   // console.log("ahora:"+load);
  //   var loadNext = "press/morenews-"+mode+"-"+Number(page+1)+".html";
  //   // console.log("Next:"+loadNext);
  //   $.post(load, function(content) {
  //     $('.main-content').append(content);
  //   });

  //   $.post(loadNext, function(content) { 
  //     if(content == "") {
  //       // console.log("NO MAS NEWS");
  //      $('.load-more').fadeOut();
  //       return;
  //   }

  //   }).fail(function() {
  //     // console.log("NO FILE");
  //       $('.load-more').fadeOut();
  //       return;
  // });

  //   $(this).data("page", page+1);
  //   e.preventDefault();
  // });



   $(document).keyup(function (e) {
        if (e.keyCode == 27) $close.trigger('click');
    });
    // Disclaimer Modal
    $open.bind('click tap',(function(e) {
        $holder.removeClass('invisible').addClass('visible');
         offsetY = window.pageYOffset;
            // Block scrolling
            $body.css({
                // 'position': 'fixed',
                // 
                // 'width':'100%',
                // '-webkit-overflow-scrolling': 'touch',
                // 'overflow':'hidden',
                // 'height':'100%',

              'overflow': 'hidden',
              'position': 'fixed',
              'top': -offsetY + 'px',
              'left': '0',
              'width': '100%',


            });
            $(window).scrollTop(0) 

            // Show popup

      e.preventDefault();
    }));


    $close.click(function (e) {
        // Allow scrolling again
        $body.css({
            'position': 'static',
            'height':'auto',
            'overflow':'auto'
        });
        $win.scrollTop(offsetY);
        // Reset the overlay scroll position to the top
        $stuff.scrollTop(0);
        // Hide popup
        $holder.removeClass('visible').addClass('invisible');
         e.preventDefault();
    });






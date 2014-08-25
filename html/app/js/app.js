var app = (function(document, $) {

    'use strict';
    var docElem = document.documentElement,

        _userAgentInit = function() {
            docElem.setAttribute('data-useragent', navigator.userAgent);
        },
        _init = function() {
            $(document).foundation();
            _userAgentInit();
        };

    return {
        init: _init
    };

})(document, jQuery);

(function() {

    'use strict';
    app.init();

})();



// 
/**
 * March 1.0
 * For more information, please contact <graham@goat1000.com>
 */
(function(){
    function b(){
        var M,m,z,K,O,L,u,s,F,I,B,A={},o="red",E="#000",p="butt",
        N=Math.PI,e=Math.sin,f=Math.cos,
        j={interval:50,sLength:20,sOverlap:5,sColour:o,sCap:p,sThickness:0.75,sBlob:1.5,mLength:18,mOverlap:1,mColour:E,mCap:p,mThickness:1.25,hLength:12,hOverlap:1,hColour:E,hCap:p,hThickness:1.5,diameter:50,dRadius:22,dHourR1:16,dHourR2:22,dMinuteR1:20,dMinuteR2:22,dThickness:1,dColour:"#999",dCap:p};
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
        function t(){m.setTransform(1,0,0,1,0,0);m.clearRect(0,0,z,K);m.setTransform(O,0,0,L,u,s);var h=new Date;I&&h.setTime(h.valueOf()+I);j.tz!=undefined&&h.setTime(h.valueOf()+(h.getTimezoneOffset()*60000)+(j.tz*3600000));j.offset&&h.setTime(h.valueOf()+(j.offset*1000));g(h)}function D(h){t();F(D)}function k(x,w){var h;if(j){for(h in w){j[h]=w[h]}}if(j.interval){M=document.getElementById(x);z=M.width;K=M.height;h=(z>K?K:z);O=(j.width||j.height||h)/(j.diameter||100);L=(j.height||j.width||h)/(j.diameter||100);u=j.x!=undefined?j.x:z/2;s=j.y!=undefined?j.y:K/2;m=M.getContext("2d");j.sImage&&i(j.sImage,"s");j.mImage&&i(j.mImage,"m");j.hImage&&i(j.hImage,"h");G();F=j.useRAF&&(window.mozRequestAnimationFrame||window.webkitRequestAnimationFrame);j.startTime!=undefined&&(I=(j.startTime*1000)-new Date().valueOf());t();if(F){F(D)}else{B=setInterval(t,j.interval)}}}
        function G(){F&&(F=function(){});B&&clearInterval(B);B=null}this.start=k;this.stop=G}var c={};
        function d(f,e){(c[f]||(c[f]=new b))&&c[f].start(f,e)}
        function a(e){c[e]&&c[e].stop()}window.startClock=d;window.stopClock=a}());


 var clockHandColor = '#B5995C';

  try {

    startClock('clockCanvasNY',{
      noFace: true,
      tz: -4,
      hideSeconds: true,
      mColour: clockHandColor,
      mThickness: 1,
      hColour: clockHandColor,
      hThickness: 1
    });



  } catch(e) {
    // in Internet Explorer there is no canvas!
   console.log(e);
    $('.clock').hide();
  }
  
// Responsive imgmap
$('img[usemap]').rwdImageMaps();
$('area').mouseenter(function() {
var zone = $(this).data("zone");
    // console.log($(this).data("zone"));
    $(".overlay-black").stop(true, true).fadeIn();
    $(".sunset").filter(".img"+zone).stop(true, true).fadeIn();
    if(zone == 1) {$(".t1-line-for-medium").slideDown();}   
    $(".txt").stop(true,true).filter(".t"+zone).slideDown().children().fadeIn();
    
}).mouseleave(function(){
    var zone = $(this).data("zone");

    // console.log("out " + $(this).data("zone"));
    $(".sunset").filter(".img"+zone).hide();
        if(zone == 1) {$(".t1-line-for-medium").slideUp();} 
    $(".txt").stop(true,true).filter(".t"+zone).slideUp().children().fadeOut();
    $(".overlay-black").hide();
});

// jQuery stuff
$(document).ready(function() {

   $(window).load(function() {
      
      $(".chosen-select").chosen({
         disable_search: true,
         placeholder_text_single: "sanntu"
      });

   });

});

	// console.log($(this).data("zone"));
	$(".overlay-black").stop(true, true).fadeIn();
	$(".sunset").filter(".img"+zone).stop(true, true).fadeIn();
	if(zone == 1) {$(".t1-line-for-medium").slideDown();}	
	$(".txt").stop(true,true).filter(".t"+zone).slideDown().children().fadeIn();
}).mouseleave(function(){
	var zone = $(this).data("zone");
	// console.log("out " + $(this).data("zone"));
	$(".sunset").filter(".img"+zone).hide();
		if(zone == 1) {$(".t1-line-for-medium").slideUp();}	
	$(".txt").stop(true,true).filter(".t"+zone).slideUp().children().fadeOut();
	$(".overlay-black").hide();
});

// 
var count = 0;
$('.btn-menu').click(function(e) {
	var $mainNav = $('.main-nav');
	if($mainNav.hasClass("menu-on")) {$mainNav.addClass( "anim" ); setTimeout(function(){$mainNav.removeClass( "menu-on" ).removeClass('anim');}, 1000); return false;}
	$mainNav.removeClass("anim").toggleClass( "menu-on" );
	count++;
	return false;
});

mediaCheck({
  media: '(max-width: 640px)',
  entry: function() {
  },
  exit: function() {
    $('.main-nav').removeClass('menu-on'); 
  }
});
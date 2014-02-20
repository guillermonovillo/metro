/* ***********************************************************************************************************************
    for CSS transitions and animations event compatibility
    var transitionend      = 'transitionend webkitTransitionEnd',
        animationstart     = 'animationstart webkitAnimationStart',
        animationiteration = 'animationiteration webkitAnimationIteration',
        animationend       = 'animationend webkitAnimationEnd';    
*********************************************************************************************************************** */
// (function(){"use strict";function e(){}function t(e,t){for(var n=e.length;n--;)if(e[n].listener===t)return n;return-1}var n=e.prototype;n.getListeners=function(e){var t,n,i=this._getEvents();if("object"==typeof e){t={};for(n in i)i.hasOwnProperty(n)&&e.test(n)&&(t[n]=i[n])}else t=i[e]||(i[e]=[]);return t},n.flattenListeners=function(e){var t,n=[];for(t=0;e.length>t;t+=1)n.push(e[t].listener);return n},n.getListenersAsObject=function(e){var t,n=this.getListeners(e);return n instanceof Array&&(t={},t[e]=n),t||n},n.addListener=function(e,n){var i,r=this.getListenersAsObject(e),s="object"==typeof n;for(i in r)r.hasOwnProperty(i)&&-1===t(r[i],n)&&r[i].push(s?n:{listener:n,once:!1});return this},n.on=n.addListener,n.addOnceListener=function(e,t){return this.addListener(e,{listener:t,once:!0})},n.once=n.addOnceListener,n.defineEvent=function(e){return this.getListeners(e),this},n.defineEvents=function(e){for(var t=0;e.length>t;t+=1)this.defineEvent(e[t]);return this},n.removeListener=function(e,n){var i,r,s=this.getListenersAsObject(e);for(r in s)s.hasOwnProperty(r)&&(i=t(s[r],n),-1!==i&&s[r].splice(i,1));return this},n.off=n.removeListener,n.addListeners=function(e,t){return this.manipulateListeners(!1,e,t)},n.removeListeners=function(e,t){return this.manipulateListeners(!0,e,t)},n.manipulateListeners=function(e,t,n){var i,r,s=e?this.removeListener:this.addListener,o=e?this.removeListeners:this.addListeners;if("object"!=typeof t||t instanceof RegExp)for(i=n.length;i--;)s.call(this,t,n[i]);else for(i in t)t.hasOwnProperty(i)&&(r=t[i])&&("function"==typeof r?s.call(this,i,r):o.call(this,i,r));return this},n.removeEvent=function(e){var t,n=typeof e,i=this._getEvents();if("string"===n)delete i[e];else if("object"===n)for(t in i)i.hasOwnProperty(t)&&e.test(t)&&delete i[t];else delete this._events;return this},n.emitEvent=function(e,t){var n,i,r,s,o=this.getListenersAsObject(e);for(r in o)if(o.hasOwnProperty(r))for(i=o[r].length;i--;)n=o[r][i],s=n.listener.apply(this,t||[]),(s===this._getOnceReturnValue()||n.once===!0)&&this.removeListener(e,o[r][i].listener);return this},n.trigger=n.emitEvent,n.emit=function(e){var t=Array.prototype.slice.call(arguments,1);return this.emitEvent(e,t)},n.setOnceReturnValue=function(e){return this._onceReturnValue=e,this},n._getOnceReturnValue=function(){return this.hasOwnProperty("_onceReturnValue")?this._onceReturnValue:!0},n._getEvents=function(){return this._events||(this._events={})},"function"==typeof define&&define.amd?define(function(){return e}):"undefined"!=typeof module&&module.exports?module.exports=e:this.EventEmitter=e}).call(this),function(e){"use strict";var t=document.documentElement,n=function(){};t.addEventListener?n=function(e,t,n){e.addEventListener(t,n,!1)}:t.attachEvent&&(n=function(t,n,i){t[n+i]=i.handleEvent?function(){var t=e.event;t.target=t.target||t.srcElement,i.handleEvent.call(i,t)}:function(){var n=e.event;n.target=n.target||n.srcElement,i.call(t,n)},t.attachEvent("on"+n,t[n+i])});var i=function(){};t.removeEventListener?i=function(e,t,n){e.removeEventListener(t,n,!1)}:t.detachEvent&&(i=function(e,t,n){e.detachEvent("on"+t,e[t+n]);try{delete e[t+n]}catch(i){e[t+n]=void 0}});var r={bind:n,unbind:i};"function"==typeof define&&define.amd?define(r):e.eventie=r}(this),function(e){"use strict";function t(e,t){for(var n in t)e[n]=t[n];return e}function n(e){return"[object Array]"===h.call(e)}function i(e){var t=[];if(n(e))t=e;else if("number"==typeof e.length)for(var i=0,r=e.length;r>i;i++)t.push(e[i]);else t.push(e);return t}function r(e,n){function r(e,n,o){if(!(this instanceof r))return new r(e,n);"string"==typeof e&&(e=document.querySelectorAll(e)),this.elements=i(e),this.options=t({},this.options),"function"==typeof n?o=n:t(this.options,n),o&&this.on("always",o),this.getImages(),s&&(this.jqDeferred=new s.Deferred);var a=this;setTimeout(function(){a.check()})}function h(e){this.img=e}r.prototype=new e,r.prototype.options={},r.prototype.getImages=function(){this.images=[];for(var e=0,t=this.elements.length;t>e;e++){var n=this.elements[e];"IMG"===n.nodeName&&this.addImage(n);for(var i=n.querySelectorAll("img"),r=0,s=i.length;s>r;r++){var o=i[r];this.addImage(o)}}},r.prototype.addImage=function(e){var t=new h(e);this.images.push(t)},r.prototype.check=function(){function e(e,r){return t.options.debug&&a&&o.log("confirm",e,r),t.progress(e),n++,n===i&&t.complete(),!0}var t=this,n=0,i=this.images.length;if(this.hasAnyBroken=!1,!i)return this.complete(),void 0;for(var r=0;i>r;r++){var s=this.images[r];s.on("confirm",e),s.check()}},r.prototype.progress=function(e){var t=this;this.hasAnyBroken=this.hasAnyBroken||!e.isLoaded,setTimeout(function(){t.emit("progress",t,e),t.jqDeferred&&t.jqDeferred.notify(t,e)})},r.prototype.complete=function(){var e=this.hasAnyBroken?"fail":"done";if(this.isComplete=!0,this.emit(e,this),this.emit("always",this),this.jqDeferred){var t=this.hasAnyBroken?"reject":"resolve";this.jqDeferred[t](this)}},s&&(s.fn.imagesLoaded=function(e,t){var n=new r(this,e,t);return n.jqDeferred.promise(s(this))});var c={};return h.prototype=new e,h.prototype.check=function(){var e=c[this.img.src];if(e)return this.useCached(e),void 0;if(c[this.img.src]=this,this.img.complete&&void 0!==this.img.naturalWidth)return this.confirm(0!==this.img.naturalWidth,"naturalWidth"),void 0;var t=this.proxyImage=new Image;n.bind(t,"load",this),n.bind(t,"error",this),t.src=this.img.src},h.prototype.useCached=function(e){if(e.isConfirmed)this.confirm(e.isLoaded,"cached was confirmed");else{var t=this;e.on("confirm",function(e){return t.confirm(e.isLoaded,"cache emitted confirmed"),!0})}},h.prototype.confirm=function(e,t){this.isConfirmed=!0,this.isLoaded=e,this.emit("confirm",this,t)},h.prototype.handleEvent=function(e){var t="on"+e.type;this[t]&&this[t](e)},h.prototype.onload=function(){this.confirm(!0,"onload"),this.unbindProxyEvents()},h.prototype.onerror=function(){this.confirm(!1,"onerror"),this.unbindProxyEvents()},h.prototype.unbindProxyEvents=function(){n.unbind(this.proxyImage,"load",this),n.unbind(this.proxyImage,"error",this)},r}var s=e.jQuery,o=e.console,a=o!==void 0,h=Object.prototype.toString;"function"==typeof define&&define.amd?define(["eventEmitter","eventie"],r):e.imagesLoaded=r(e.EventEmitter,e.eventie)}(window);

lexusMagazineOnLoad = function(){};
lexusMagazineReady  = function(){};

MagazineNaviStatus  = function(){};
MagazineNaviOpen    = function(){};
MagazineNaviClose   = function(){};
MagazineNaviHidden  = function(){};
MagazineNaviView    = function(){};

(function (window, $) {
    var $window = $(window),
        $document = $(document);

    // https://github.com/ftlabs/fastclick
    $(window).on('load', function() {
       new FastClick(document.body);
    }, false);

    var isJp = location.href.indexOf('/jp/') != -1;

    $document.ready(function(){
        var mod = window.Modernizr,
            modCSSAnimations  = mod && mod.cssanimations,
            modCSSTransforms  = mod && mod.csstransforms,
            modCSSTransitions = mod && mod.csstransitions,
            modTouch          = mod && mod.touch,
            modAnim           = modCSSAnimations && modCSSTransitions;

        // jQuery imagesLoaded
        // https://github.com/desandro/imagesloaded

        var isCache             = cacheCheck(),
            $loadingWrapper     = $('#loading-wrap'),
            $loading            = $('<div id="loading"></div>').appendTo($loadingWrapper),
            atHome              = $loadingWrapper.hasClass('at-home');

        function imgLoad(){
            var imgLoader           = imagesLoaded("body"),
                imgTotal            = imgLoader.images.length,

                progress1           = 0,
                progress2           = 0,
                percent1            = 0,
                percent2            = 0,

                imgLoaded           = 0,
                animLoaded          = 0,
                spriteFrameSize     = atHome? 170: 100,
                spriteFrameCount    = atHome? 51: 42;

            imgLoader.on("progress",function(instance,image){
                var result = image.isLoaded ? 'loaded' : 'broken';
                imgLoaded++;
                progress1   = (imgLoaded/imgTotal)*100;
                progress2   = (imgLoaded/imgTotal)*spriteFrameCount;
                //image load complete
                if(progress1 == 100){
                    // lexusMagazineOnLoad();
                    // dfdAnimationComplete();
                }
            });

            var progressTimer = setInterval(function(){
                percent1 += (progress1-percent1)*0.1;
                percent2 += (progress2-percent2)*0.1;

                $loading.html(parseInt(percent1));
                $loading.css({backgroundPosition: '0 ' + (-parseInt(percent2)*spriteFrameSize) + 'px'});

                if(percent1 >= 100){
                    //image Load complete
                    clearInterval(progressTimer);
                    setTimeout(function(){
                        lexusMagazineOnLoad();
                        imgLoadComplete();
                    },50);
                    return
                }
                if(percent1 >= 99.9){
                    percent1 = 100;
                    percent2 = spriteFrameCount;
                }

            },1000/60);
        }


        function imgLoadComplete() {
            $loading.stop().fadeOut(600,"easeOutQuint");

            if(!isCache){
                $operate.find('p').each(function(i){
                    $(this).delay(i*200).fadeIn(800,"easeInOutQuint");
                });

                $("#operate").hover(
                    function(){$("#operate-line").stop().animate({top:"25px"},300,"easeOutExpo");},
                    function(){$("#operate-line").stop().animate({top:"18px"},400,"easeOutExpo");}
                );

                setTimeout(function(){
                    $(document).on('mousewheel',function(){
                        if(isCache != "start"){
                            isCache = "start";
                            startMotion();
                        }
                    });

                    $(window).keydown(function(e){
                        if(isCache != "start"){
                            if(e.keyCode == 38 || e.keyCode == 40){
                                isCache = "start";
                                startMotion();
                            }
                        }
                    });

                    if(modTouch){
                        $(document).on("touchend", function(){
                             if(isCache != "start"){
                                isCache = "start";
                                startMotion();
                            }
                        });
                    }

                    $("#operate").on("click",function(){
                        if(isCache != "start"){
                            isCache = "start";
                            startMotion();
                        }
                    });
                },1000);

                function startMotion(){
                    $("#operate").fadeOut(500,"easeInOutQuint");
                    setTimeout(function(){start()},500);
                }

            }else{
                start();
            }


            function start(){
                if(modAnim){
                    $loadingWrapper
                    .addClass('done')
                    .on('transitionend webkitTransitionEnd', function (event) {
                        $('.anim-stage').addClass('anim-ready');
                        lexusMagazineReady();
                        $loadingWrapper.remove();
                        $loadingWrapper = null;
                    });
                }else{
                    $loadingWrapper.animate({ opacity: 0 }, 500, function(){
                        $('.anim-stage').addClass('anim-ready');
                        lexusMagazineReady();
                        $loadingWrapper.remove();
                        $loadingWrapper = null;
                    });
                }

            }
            
        }

        var $operate;
        if(!isCache){
            // localStorage.clear();
            // console.log("append");
            $loadingWrapper.append('<div id="operate"></div>');
            $operate = $loadingWrapper.find('#operate')//.css({display:"none"});
            $operate.append(
                '<div>'+
                    '<p>PLEASE KEEP SCROLLING TO<br>READ THE CONTENT</p>'+
                    '<p id="operate-summary">'+
                    '<span id="operate-keyboard"><img src="/magazine/common/images/operate-key-mouse.png" alt="keyboard or mouse"></span>'+
                    '</p>'+
                    '<p id="operate-btn">'+
                        'START'+
                        '<span id="operate-line"><img src="/magazine/common/images/operate-start-line.png"></span>'+
                    '</p>'+
                '</div>'
            )
        }

         /* ************************************************************
            magazine navigation bar setting
        ************************************************************ */
        function magazinNavibSetting(){

            var dataURL = '/magazine/common/data/contents'+(isJp?'-jp' : '') +'.json';
            var navi_data,
                navi_open   = false;
                issue_total = 0,
                issue_current = 0,
                issue_changing = false;

            var path = window.location.pathname;
                urlIssueNumber = path.indexOf('issue')>-1?path.match(/issue[0-9]+/)[0].replace("issue","")-1:1;


                /* ************************************************************
                   *2013.10.30 アワード用のためissue1のみ公開*
                   if(isJp)urlIssueNumber=0; -> なし
                ************************************************************ */
                // if(isJp)urlIssueNumber=0;


            dataLoad();

            function dataLoad(){
                $.ajax({
                    url:dataURL,
                    success : function(data){
                        navi_data = data;
                        for(var i in data){
                            issue_total++; 
                        }
                        init();
                    },
                    error : function(data){
                        console.log("json load error");
                    } 
                });
            }

            function init(){
                layoutInit();
            }

            var $magazine_nav,
                    $mnav_tap,
                        $mnav_tap_bg,
                            $mnav_tap_icon,
                            $mnav_tap_text,
                    $mnav_wrap,
                        $mnav_body,
                            $mnav_bg,
                            $mnav_top,
                                $mnav_top_bg,
                                $mnav_issue_current_wrap,
                                    $mnav_issue_current_inner,
                                        $mnav_issue_currents,
                                $mnav_issue_navi,
                            $mnav_middle;

            var thumb_wraps = [],
                thumbs      = [];
            function layoutInit(){

                $magazine_nav = $("#magazine-nav");
                if(typeof $magazine_nav[0] == "undefined")return;

                $mnav_tap               = $('<div id="mnav-tab"></div>').appendTo($magazine_nav);
                $mnav_tap_bg            = $('<div id="mnav-tab-bg"></div>').appendTo($mnav_tap);
                $mnav_tap_icon          = $('<img src="/magazine/common/images/magazine-navi-tab-icon-32x32.png" id="mnav-tab-icon" width="14" height="14">').appendTo($mnav_tap);
                $mnav_tap_text          = $('<span id="mnav-tab-text">contents</span>').appendTo($mnav_tap);
                $mnav_wrap              = $('<div id="mnav-wrap"></div>').appendTo($magazine_nav);
                $mnav_body              = $('<div id="mnav-body"></div>').appendTo($mnav_wrap);
                $mnav_bg                = $('<div id="mnav-bg"></div>').appendTo($mnav_body);
                $mnav_top               = $('<div id="mnav-top"></div>').appendTo($mnav_body);
                $mnav_top_bg            = $('<div id="mnav-top-bg"></div>').appendTo($mnav_top);
                $mnav_issue_current_wrap    = $('<div id="mnav-issue-current-wrap"></div>').appendTo($mnav_top);
                $mnav_issue_current_inner   = $('<div id="mnav-issue-current-wrap-inner"></div>').appendTo($mnav_issue_current_wrap);
                $mnav_issue_currents        = $('<div id="mnav-issue-currents"></div>').appendTo($mnav_issue_current_inner);
                $mnav_issue_navi            = $('<div id="mnav-issue-navi-wrap"></div>').appendTo($mnav_top);
                $mnav_middle                = $('<div id="mnav-middle" class="clearfix"></div>').appendTo($mnav_body);
                $mnav_close                 = $('<div id="manv-close"><img src="/magazine/common/images/icon-x-24x24.png" width="12" height="12"></div>').appendTo($mnav_middle);

                $("#globalfooter").appendTo($mnav_wrap);
                $('<div class="mnav-issue-current"></div>').appendTo($mnav_issue_currents);
                for(var i=0; i<issue_total; i++){
                    var menu = $('<div class="mnav-issue-navi"><img src="/magazine/common/images/number-100x100-0'+(i+1)+'.png" width="50" height="50"></div>').appendTo($mnav_issue_navi);
                    if(i==issue_total-1)$('<span id="mnav-issue-navi-title">ISSUE</span>').appendTo($mnav_issue_navi);
                    var current = $('<div class="mnav-issue-current"><img src="/magazine/common/images/number-120x160-0'+(i+1)+'.png" width="60" height="80"></div>').appendTo($mnav_issue_currents);
                    current.css({left:(-i*100)+"%"});
                }

                // wrap create
                for(var k=0; k<15; k++){
                    var thumb_wrap  = $('<div class="mnav-thumb-wrap"></div>').appendTo($mnav_middle), 
                        thumb_outer = $('<div class="mnav-thumb-wrap-outer"></div>').appendTo(thumb_wrap),
                        thumb_inner = $('<div class="mnav-thumb-wrap-inner"></div>').appendTo(thumb_outer),
                        thumb       = $('<div class="mnav-thumbs"></div>').appendTo(thumb_inner);
                    // thumb_wrap.css(css3DSet(500,'50%','50%'));
                    if(k==0){
                        $('<h2 id="mnva-title">CONTENTS</h2>').appendTo(thumb);
                    }
                    thumb_wraps[k] = {outer:thumb_outer,inner:thumb_inner,thumb:thumb};
                }

                // thumb create in wrap
                for(var i=0; i<=issue_total; i++){
                    var data = navi_data['issue'+i];
                    thumbs[i] = [];
                    for(var j=0; j<14; j++){
                        var thumb   = $('<div class="mnav-thumb"></div>').appendTo(thumb_wraps[j+1].thumb);

                        if(i > 0){
                            var img = $('<div class="mnav-thumb-img"><img src="' + data[j].image + '" alt="" width="180" height="115"></div>').appendTo(thumb);
                            if(data[j].overlayText != ""){
                                $('<span class="mnav-thum-non-active">'+data[j].overlayText+'</span>').appendTo(img);
                            }else{
                                thumb.wrap('<a href="'+data[j].url+'"></a>');
                            }
                            $('<p class="mnav-thumb-title">'+data[j].title+'</p>').appendTo(thumb);
                            $('<p class="mnav-thumb-summary">'+data[j].description+'</p>').appendTo(thumb);
                        }else{
                            $('<div class="mnav-thumb-img"></div>').appendTo(thumb);
                        }
                        thumb.css({left:(i*200)+"px"});
                    }
                    if(i==issue_total){
                        // maviLoad();
                    }
                }

                if(modCSSTransitions){
                    $loadingWrapper.css(css3_XYZ2(0,0,1001));
                    $magazine_nav.css(css3_XYZ2(0,0,1000));
                    $mnav_body.css(css3_XYZ2(0,50,500));   
                    $("#globalheader").css(css3_XYZ2(0,0,1002)); 
                }
                
                // $mnav_wrap.css({display:'none'});
                addEvent();
            }

            function maviLoad(){
                var mnvLoader   = imagesLoaded("#magazine-nav"),
                    mnvTotal    = mnvLoader.images.length,
                    mnvLoadCnt  = 0;
                mnvLoader.on("progress",function(instance,image){
                    var result = image.isLoaded ? 'loaded' : 'broken';
                    mnvLoadCnt++;
                    if(mnvLoadCnt == mnvTotal){
                        addEvent();
                    }
                });
            }
            function addEvent(){
                if(!modCSSTransitions){
                    $mnav_tap
                    .on('mouseover',function(){
                        // $(this).stop().animate({top:'-30px'},300,"easeOutQuint");
                    })
                    .on('mouseout',function(){
                        // $(this).stop().animate({top:'-30px'},300,"easeOutQuint");
                    }) 
                }

                $(".mnav-issue-navi").each(function(i){
                    $(this)
                    .on('click',function(){
                        if(issue_changing)return;
                        if(issue_current != i+1){
                            issueChange(i+1);
                        }
                    })
                    .on('mouseover',function(){
                        issueNaviActive(i+1);
                    })
                    .on('mouseout',function(){
                        issueNaviActive(issue_current);
                    });
                });

                $('.mnav-thumb-wrap').each(function(i){
                    if(i > 0){
                        $(this).on('mouseover',function(){
                            thumbActive(i);
                        });

                        $(this).on('mouseout',function(){
                            thumbActive(0);
                        });
                    }
                })

                $mnav_close
                .on('mouseover',function(){
                    // $mnav_close.css({background:'rgba(0,0,0,1)'});
                    $mnav_close.find('img').css(css3_ROTATE_Z(300,0,0,180));
                })
                .on('mouseout',function(){
                    // $mnav_close.css({background:'rgba(0,0,0,0.7)'});
                    $mnav_close.find('img').css(css3_ROTATE_Z(0,0,0,0));
                })
                .on('click',function(){
                    magazine_navi_open(false);
                });

                $mnav_bg.on('click',function(){
                    magazine_navi_open(false);
                });

                $mnav_top_bg.on('click',function(){
                    magazine_navi_open(false);
                });

                // navi tab
                $mnav_tap.css({cursor: "pointer"})
                $mnav_tap.on('click',function(){
                    if(navi_open)return;
                    magazine_navi_open(true);
                });

                // issueNaviActive(0)
                // issueChange(0);
            }

            var body_css_overflow = $('body').css('overflow');
            function magazine_navi_open(flag){
                if(flag){
                    $mnav_wrap.scrollTop(0);
                    change_delay = 20;
                    setTimeout(function(){
                        $('body').css({overflow:'hidden'});
                        $(".mnav-issue-navi").eq(urlIssueNumber).trigger('click');
                        $(".mnav-issue-navi").eq(urlIssueNumber).trigger('mouseover');
                        navi_open = true;
                    },600)
                }else{
                    
                    change_delay = 0;
                    issueNaviActive(0);
                    issueChange(0);
                    
                    setTimeout(function(){
                        navi_open = false;
                    },1100)
                    $('body').css({overflow:body_css_overflow});
                }

                setTimeout(function(){
                    if(modCSSTransforms && modCSSTransitions){
                        if(flag){
                            $magazine_nav.css(css3_XYZ2(0,-100,1000));
                            $mnav_body.css(css3_XYZ2(0,0,0));
                            $mnav_wrap.css({opacity:1});
                            $mnav_tap.addClass('mnav-tab-click');
                        }else{
                            $magazine_nav.css(css3_XYZ2(0,0,1000));
                            $mnav_body.css(css3_XYZ2(0,100,500));
                            $mnav_wrap.css({opacity:0});
                            $mnav_tap.removeClass('mnav-tab-click');
                        }
                    }else{
                        if(flag){
                            $magazine_nav.stop().animate({top:0},1000,"easeInOutExpo");
                        }else{
                            $magazine_nav.stop().animate({top:'100%'},1000,"easeInOutExpo");
                        }
                    }
                },10);
            }

            //global function add
            MagazineNaviOpen = function(){
                if(navi_open)return;
                magazine_navi_open(true);
            }
            MagazineNaviClose = function(){
                if(!navi_open)return;
                magazine_navi_open(false);
            }

            MagazineNaviHidden = function(){
                $magazine_nav.css({display:'none'});
            }

            MagazineNaviView = function(){
                $magazine_nav.css({display:'block'});   
            }

            MagazineNaviStatus = function(){
                return navi_open;
            }

            function thumbActive(id){
                if(issue_changing || !navi_open)return;
                for(var o in thumb_wraps){
                    if(o > 0){
                        var thumb   = thumb_wraps[o].inner;
                            opacity = 1,
                            css3 = {tx:0,ty:0,tz:0};
                        var scale = 1;
                        if(o == id){
                            opacity = 1;
                            css3.tz = 100;
                            scale = 1.1;
                        }else if(id == 0){
                            opacity = 1;
                        }else{
                            opacity = .5;
                            css3.tz = -200;
                            scale = 0.9;
                        }

                        if(modCSSTransforms && modCSSTransitions){
                            thumb.css({opacity:opacity});
                            if(UA.isIE){
                                thumb.css(css3_scale(scale));
                            }else{
                                thumb.css(css3_XYZ(css3.tx,css3.ty,css3.tz));    
                            }
                        }else{
                            thumb.stop().animate({opacity:opacity},600,'easeOutQuint');
                        }
                    }
                }
            }

            function issueNaviActive(id){
                $(".mnav-issue-navi").each(function(i){
                    var navi = $(this).find('img'),
                        css  = {opacity:1},
                        css3 = {tx:0,ty:0,tz:0};

                    if(id-1 == i){
                        css3.tz = 300;
                    }else{
                        css.opacity = 0.3;
                    }


                    if(modCSSTransforms && modCSSTransitions){
                        navi.css(css3_XYZ(css3.tx,css3.ty,css3.tz));
                        navi.css(css);
                    }else{
                        navi.stop().animate(css,600,'easeOutQuint');
                    }
                });
            }

            function issueChange(id){
                // if(issue_changing || issue_current == id)return;
                var class_name  = id<issue_current?'filp-l':'filp-r';
                issue_current   = id;
                issue_changing  = true;

                for(var o in thumb_wraps){
                    var outer = thumb_wraps[o].outer,
                        thumb = thumb_wraps[o].thumb;
                    if(o != 0){
                        anim_thumb_flip(outer,o,class_name);
                        anim_thumb_move(thumb,o,-issue_current*200);
                    }
                }

                if(modCSSTransforms && modCSSTransitions){
                    $mnav_issue_currents.css(css3_XYZ(80*(id-1),0,0));
                    anim_thumb_flip($mnav_issue_current_inner,0,'filp');
                }else{
                    $mnav_issue_currents.stop().animate({left:80*(id-1)});
                    // anim_thumb_flip($mnav_issue_current_inner,0,'filp');
                }
            }

            var change_delay = 35;
            function anim_thumb_flip(element,id,className){
                var delay;
                if(modCSSTransforms && modCSSTransitions)delay = id*change_delay;
                else delay = 0;
                setTimeout(function(){
                    element.addClass(className);
                    setTimeout(function(){element.removeClass(className)},1600);
                },delay);

            }
            function anim_thumb_move(element,id,posX){
                var delay;
                if(modCSSTransforms && modCSSTransitions)delay = id*change_delay;
                else delay = 0;
                setTimeout(function(){
                    var returnDelay = 1600
                    if(modCSSTransforms && modCSSTransitions){
                        element.css(css3_XYZ(posX,0,0));
                    }else{
                        returnDelay = 1000;
                        element.stop().animate({left:posX+"px"},700,"easeInOutExpo");
                    }
                    
                    if(id==14){
                        setTimeout(function(){
                            issue_changing = false;
                        },returnDelay)
                    }
                },delay);
            }
            function issueChangeEnd(element){
                element.removeClass('issueChange');
            }
        };

        /* ************************************************************
            local storage 
        ************************************************************ */
        // var localData = {
        //     get     : function(key){return localStorage.getItem(key)},
        //     set     : function(key,value){localStorage.setItem(key, value)},
        //     clear   : function(){localStorage.clear()}
        // }

        function cacheCheck(){
            var location    = "magazine/",//+Math.random(),//window.location.pathname,
                t           = new Date(),
                date        = t.getFullYear()+""+t.getMonth()+""+t.getDate(),
                cache       = true;
            if(localStorage.getItem(location) == null){
                localStorage.setItem(location,date);
                cache = false;
            }else{
                if(localStorage.getItem(location) != date){
                    cache = false;
                    localStorage.setItem(location,date);
                }
            }

            // localStorage.clear();
            return cache;
        }

        magazinNavibSetting();
        imgLoad();    
    });


})(this, jQuery);
(function($){

	var narrow      = false;
	var header      = $('#globalheader');
	var headerTop   = header.find('.top');
	var menuSec     = header.find('.sec');
	var menuSub     = header.find('.sub');
	var buttonsTop  = headerTop.find('a');
	var buttonsSub   = menuSec.find('a');
	var buttonMenu  = buttonsTop.eq(0);
	var buttonAmaz  = buttonsTop.eq(1);
	var buttonLang  = buttonsTop.eq(2);
	var buttonLocal = buttonsTop.eq(3);
	var spClose     = header.find('.intsp-btn-close');
	var regions     = header.find('#local .regions a');

	var chageTimerID = null;
	var closeTimerID = null;
	var closeTimeout = 2500;

	// show
	var localSec    = menuSec.filter('#local');
	var svgMap      = localSec.find('svg');
	var svgPaths    = svgMap.find('path');
	var regionLinks = localSec.find('.regions a');
	var siteLinks   = localSec.find('.region a');
	var localOutput = localSec.find('p');

	localOutput.html(' ');

	function setLocation(_country, _continent, _code){
		if(svgPaths.length > 0){
			var selectedPaths = svgPaths.filter(function(){
				if( $(this).attr('class').indexOf(_code) != -1 ) return this;
			});
			selectedPaths.attr('class', 'selected');

		}else{
			var mapHolder = header.find('.map-holder');
			var mapImage  = mapHolder.find('img').clone();

			var src = mapImage.attr('src').replace(/^(.*)(\.png)$/, '$1-'+_code.toLowerCase()+'$2');

			mapImage.attr('src', src).css({position:'absolute', top:0, left:0});
			mapHolder.append(mapImage);
		}

		var outerLinks = [];
		var continentIndex = 0;

		switch(_continent.toUpperCase()){
			case 'EUROPE':
				continentIndex = 0;
				outerLinks = window.regionList['europe']['children']; break;
			case 'ASIA':
				continentIndex = 1;
				outerLinks = window.regionList['asia']['children']; break;
			case 'AFRICA':
				continentIndex = 2;
				outerLinks = window.regionList['africa']['children']; break;
			case 'NORTH AMERICA':
				continentIndex = 3;
				outerLinks = window.regionList['north-america']['children']; break;
			case 'SOUTH AMERICA':
				continentIndex = 4;
				outerLinks = window.regionList['south-america']['children']; break;
			case 'OCEANIA':
				continentIndex = 5;
				outerLinks = window.regionList['oceania']['children']; break;
		}
		for(var i=0; i<outerLinks.length; i++){
			if(outerLinks[i].code == _code){
				localOutput.html( 'We think you are in:<strong><a class="localoutput" href="' + outerLinks[i]['href'] + '" target="_blank">' + _country + '</a> <sub>in</sub> ' + _continent + '<strong>' );
				break;
			}
		}

		localSec.find('.region').eq(continentIndex).addClass('show');

		if(narrow){
			localSec.find('.region').eq(continentIndex).find('.region-title').not('.show').trigger('click');
		}else{
			regionLinks.filter( function(){
				if( $(this).text().toLowerCase() === _continent.toLowerCase() ) return true;
			}).trigger('click');
		}

		siteLinks.filter( function(){
			if( $(this).attr('class') == _code ) return true;
		}).addClass('your-local');
	}

	// region accordion
	if(window.useResponsive){
		var regionsAccordion = localSec.find('.region');
		var regionsWrapper   = localSec.find('.global-sites');
		var localClose       = localSec.find('.intsp-btn-close');

		jQuery.windowSizeChanged(function(){
			regionsAccordion.each(function(i){
				regionsAccordion.eq(i).find('.region-title').removeClass('show');
				regionsAccordion.eq(i).stop().clearStyle();
			});
		}, function(){
			regionsAccordion.each(function(i){
				regionsAccordion.eq(i).find('.region-title').removeClass('show');

				if(Shared.ua.isiPhone){
					regionsWrapper.stop().clearStyle().css({height:46+34*regionsAccordion.size()});
					regionsAccordion.eq(i).stop().clearStyle().css({height:34, position:'absolute', top:0, left:0, overflow:'hidden'}).translate3d(0, 34*i);
				}else{
					regionsAccordion.eq(i).stop().clearStyle().css({height:34, overflow:'hidden'});
				}
			});
			if(Shared.ua.isiPhone){
				localClose.clearStyle().css({position:'absolute', top:108+34*regionsAccordion.size(), left:0}).translate3d(0, 0);
			}
		});

		regionsAccordion.find('ul').transformOrigin('50%', '0%');

		regionsAccordion.each(function(i){
			var that  = this;
			var wrap  = $(this);
			var title = wrap.find('.region-title');
			var list  = wrap.find('ul');
			var height = Math.ceil(list.find('li').size()/2) * 40 + 33;

			list.transformOrigin('50%', '0%');

			title.bind('click', function(e){

				document.body.scrollTop = 38;
				document.documentElement.scrollTop = 38;

				if(title.hasClass('show')){
					// close self
					if(Shared.ua.isiPhone){
						regionsWrapper.stop().animate({height:46+34*regionsAccordion.size()}, 400, 'easeOutQuad');
						list.transition('transform', 400, 'easeOutQuad').transform('scaleY(0)');

						regionsAccordion.each(function(j){
							regionsAccordion.eq(j).transition('transform', 400, 'easeOutQuad').translate3d(0, 34*j);
						});
						localClose.transition('transform', 400, 'easeOutQuad').translate3d(0, 0);
					}else{
						wrap.stop().animate({height:34}, 400, 'easeOutQuad');
					}
				}else{
					regionsAccordion.each(function(j){

						if(this == that){
							// open self
							if(Shared.ua.isiPhone){
								wrap.css({height:height});
								regionsWrapper.stop().animate({height:46+height+34*(regionsAccordion.size()-1)}, 400, 'easeOutQuad');
								list.transition('transform', 400, 'easeOutQuad').transform('scaleY(1)');
								list.css({height:height});
							}else{
								wrap.stop().animate({height:height}, 400, 'easeOutQuad');
							}
						}else{
							// close other
							var _title = $(this).find('.region-title');

							if(_title.hasClass('show')){
								_title.removeClass('show');

								if(Shared.ua.isiPhone){
									$(this).css({height:34});
									$(this).find('ul').transition('transform', 400, 'easeOutQuad').transform('scaleY(0)');
								}else{
									$(this).stop().animate({height:34}, 400, 'easeOutQuad');
								}
							}
						}
						if(Shared.ua.isiPhone){
							if(j > i){
								regionsAccordion.eq(j).transition('transform', 400, 'easeOutQuad').translate3d(0, height+34*(j-1));
							}else{
								regionsAccordion.eq(j).transition('transform', 400, 'easeOutQuad').translate3d(0, 34*j);
							}
							localClose.transition('transform', 400, 'easeOutQuad').translate3d(0, height-34);
						}
					});
				}
				title.toggleClass('show');
			});
		});
	}



	/*****************************************************************************************************************
	 * FOOTER
	 *****************************************************************************************************************/



	if(window.useResponsive){
		var footer = $('#globalfooter');

		// デザイン調整
		jQuery.windowSizeChanged(function(){
			footer.find('.sec-nav ul').removeClass('show').clearStyle().find('li').clearStyle();

		}, function(){
			footer.find('.sec-nav ul').removeClass('show').each(function(i){
				$(this).clearStyle().css({height:44, overflow:'hidden'}).find('li').clearStyle().each(function(j){
					if(j == 0 || j == 1){
						;
					}else if(j == 2){
						$(this).css({opacity:0}).matrix(1, 0, 0, 1, 10);
					}else{
						$(this).css({opacity:0}).matrix(1, 0, 0, 1, 10);
					}
				});
			});
		});

		// 開閉
		footer.find('.sec-nav ul').each(function(){
			var ul = $(this);
			var li = ul.find('li');

			li.eq(1).bind('click', function(e){
				if(narrow){
					e.preventDefault();

					if(!ul.hasClass('show')){
						ul.css({height:'auto'});
						var h = ul.height();

						li.each(function(i){
							if(i > 1) $(this).transition('all', 400, 'easeInOutCubic', i*25).css({opacity:1}).matrix(1, 0, 0, 1);
						});
						if(Shared.ua.isiPhone || !Shared.ua.isMobile){
							ul.stop().css({height:44}).animate({height:h}, 400, 'easeOutQuad');
						}else{
							ul.stop().css({height:'auto'});
						}
					}else{
						li.each(function(i){
							if(i > 1) $(this).transition('all', 300, 'easeInOutCubic', (li.length-i)*20).css({opacity:0}).matrix(1, 0, 0, 1, 10);
						});
						if(Shared.ua.isiPhone || !Shared.ua.isMobile){
							ul.stop().animate({height:44}, 300, 'easeOutQuad');
						}else{
							ul.stop().css({height:44});
						}
					}
					ul.toggleClass('show');
				}
			});
		});
	}

})(jQuery);
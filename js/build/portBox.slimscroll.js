/*! Copyright (c) 2011 Piotr Rochala (http://rocha.la)
 * Dual licensed under the MIT (http://www.opensource.org/licenses/mit-license.php)
 * and GPL (http://www.opensource.org/licenses/gpl-license.php) licenses.
 *
 * Version: 1.1.0
 *
 */
(function($) {

  jQuery.fn.extend({
    slimScroll: function(options) {

      var defaults = {

        // width in pixels of the visible scroll area
        width : 'auto',

        // height in pixels of the visible scroll area
        height : '250px',

        // width in pixels of the scrollbar and rail
        size : '7px',

        // scrollbar color, accepts any hex/color value
        color: '#000',

        // scrollbar position - left/right
        position : 'right',

        // distance in pixels between the side edge and the scrollbar
        distance : '1px',

        // default scroll position on load - top / bottom / $('selector')
        start : 'top',

        // sets scrollbar opacity
        opacity : .4,

        // enables always-on mode for the scrollbar
        alwaysVisible : false,

        // check if we should hide the scrollbar when user is hovering over
        disableFadeOut: false,

        // sets visibility of the rail
        railVisible : false,

        // sets rail color
        railColor : '#333',

        // sets rail opacity
        railOpacity : .2,

        // whether  we should use jQuery UI Draggable to enable bar dragging
        railDraggable : true,

        // defautlt CSS class of the slimscroll rail
        railClass : 'slimScrollRail',

        // defautlt CSS class of the slimscroll bar
        barClass : 'slimScrollBar',

        // defautlt CSS class of the slimscroll wrapper
        wrapperClass : 'slimScrollDiv',

        // check if mousewheel should scroll the window if we reach top/bottom
        allowPageScroll : false,

        // scroll amount applied to each mouse wheel step
        wheelStep : 20,

        // scroll amount applied when user is using gestures
        touchScrollStep : 200
      };

      var o = $.extend(defaults, options);

      // do it for every element that matches selector
      this.each(function(){

      var isOverPanel, isOverBar, isDragg, queueHide, touchDif,
        barHeight, percentScroll, lastScroll,
        divS = '<div></div>',
        minBarHeight = 30,
        releaseScroll = false;

        // used in event handlers and for better minification
        var me = $(this);

        // ensure we are not binding it again
        if (me.parent().hasClass(o.wrapperClass))
        {
            // start from last bar position
            var offset = me.scrollTop();

            // find bar and rail
            bar = me.parent().find('.' + o.barClass);
            rail = me.parent().find('.' + o.railClass);

            getBarHeight();

            // check if we should scroll existing instance
            if ($.isPlainObject(options))
            {
              if ('scrollTo' in options)
              {
                // jump to a static point
                offset = parseInt(o.scrollTo);
              }
              else if ('scrollBy' in options)
              {
                // jump by value pixels
                offset += parseInt(o.scrollBy);
              }
              else if ('destroy' in options)
              {
                // remove slimscroll elements
                bar.remove();
                rail.remove();
                me.unwrap();
                return;
              }

              // scroll content by the given offset
              scrollContent(offset, false, true);
            }

            return;
        }

        // optionally set height to the parent's height
        o.height = (o.height == 'auto') ? me.parent().innerHeight() : o.height;

        // wrap content
        var wrapper = $(divS)
          .addClass(o.wrapperClass)
          .css({
            position: 'relative',
            overflow: 'hidden',
            width: o.width,
            height: o.height
          });

        // update style for the div
        me.css({
          overflow: 'hidden',
          width: o.width,
          height: o.height
        });

        // create scrollbar rail
        var rail = $(divS)
          .addClass(o.railClass)
          .css({
            width: o.size,
            height: '100%',
            position: 'absolute',
            top: 0,
            display: (o.alwaysVisible && o.railVisible) ? 'block' : 'none',
            'border-radius': o.size,
            background: o.railColor,
            opacity: o.railOpacity,
            zIndex: 90
          });

        // create scrollbar
        var bar = $(divS)
          .addClass(o.barClass)
          .css({
            background: o.color,
            width: o.size,
            position: 'absolute',
            top: 0,
            opacity: o.opacity,
            display: o.alwaysVisible ? 'block' : 'none',
            'border-radius' : o.size,
            BorderRadius: o.size,
            MozBorderRadius: o.size,
            WebkitBorderRadius: o.size,
            zIndex: 99
          });

        // set position
        var posCss = (o.position == 'right') ? { right: o.distance } : { left: o.distance };
        rail.css(posCss);
        bar.css(posCss);

        // wrap it
        me.wrap(wrapper);

        // append to parent div
        me.parent().append(bar);
        me.parent().append(rail);

        // make it draggable
        if (o.railDraggable)
        {
          bar.draggable({
            axis: 'y',
            containment: 'parent',
            start: function() { isDragg = true; },
            stop: function() { isDragg = false; hideBar(); },
            drag: function(e)
            {
              // scroll content
              scrollContent(0, $(this).position().top, false);
            }
          });
        }

        // on rail over
        rail.hover(function(){
          showBar();
        }, function(){
          hideBar();
        });

        // on bar over
        bar.hover(function(){
          isOverBar = true;
        }, function(){
          isOverBar = false;
        });

        // show on parent mouseover
        me.hover(function(){
          isOverPanel = true;
          showBar();
          hideBar();
        }, function(){
          isOverPanel = false;
          hideBar();
        });

        // support for mobile
        me.bind('touchstart', function(e,b){
          if (e.originalEvent.touches.length)
          {
            // record where touch started
            touchDif = e.originalEvent.touches[0].pageY;
          }
        });

        me.bind('touchmove', function(e){
          // prevent scrolling the page
          e.originalEvent.preventDefault();
          if (e.originalEvent.touches.length)
          {
            // see how far user swiped
            var diff = (touchDif - e.originalEvent.touches[0].pageY) / o.touchScrollStep;
            // scroll content
            scrollContent(diff, true);
          }
        });

        // check start position
        if (o.start === 'bottom')
        {
          // scroll content to bottom
          bar.css({ top: me.outerHeight() - bar.outerHeight() });
          scrollContent(0, true);
        }
        else if (o.start !== 'top')
        {
          // assume jQuery selector
          scrollContent($(o.start).position().top, null, true);

          // make sure bar stays hidden
          if (!o.alwaysVisible) { bar.hide(); }
        }

        // attach scroll events
        attachWheel();

        // set up initial height
        getBarHeight();

        function _onWheel(e)
        {
          // use mouse wheel only when mouse is over
          if (!isOverPanel) { return; }

          var e = e || window.event;

          var delta = 0;
          if (e.wheelDelta) { delta = -e.wheelDelta/120; }
          if (e.detail) { delta = e.detail / 3; }

          var target = e.target || e.srcTarget;
          if ($(target).closest('.' + o.wrapperClass).is(me.parent())) {
            // scroll content
            scrollContent(delta, true);
          }

          // stop window scroll
          if (e.preventDefault && !releaseScroll) { e.preventDefault(); }
          if (!releaseScroll) { e.returnValue = false; }
        }

        function scrollContent(y, isWheel, isJump)
        {
          var delta = y;
          var maxTop = me.outerHeight() - bar.outerHeight();

          if (isWheel)
          {
            // move bar with mouse wheel
            delta = parseInt(bar.css('top')) + y * parseInt(o.wheelStep) / 100 * bar.outerHeight();

            // move bar, make sure it doesn't go out
            delta = Math.min(Math.max(delta, 0), maxTop);

            // if scrolling down, make sure a fractional change to the
            // scroll position isn't rounded away when the scrollbar's CSS is set
            // this flooring of delta would happened automatically when
            // bar.css is set below, but we floor here for clarity
            delta = (y > 0) ? Math.ceil(delta) : Math.floor(delta);

            // scroll the scrollbar
            bar.css({ top: delta + 'px' });
          }

          // calculate actual scroll amount
          percentScroll = parseInt(bar.css('top')) / (me.outerHeight() - bar.outerHeight());
          delta = percentScroll * (me[0].scrollHeight - me.outerHeight());

          if (isJump)
          {
            delta = y;
            var offsetTop = delta / me[0].scrollHeight * me.outerHeight();
            offsetTop = Math.min(Math.max(offsetTop, 0), maxTop);
            bar.css({ top: offsetTop + 'px' });
          }

          // scroll content
          me.scrollTop(delta);

          // fire scrolling event
          me.trigger('slimscrolling', ~~delta);

          // ensure bar is visible
          showBar();

          // trigger hide when scroll is stopped
          hideBar();
        }

        function attachWheel()
        {
          if (window.addEventListener)
          {
            this.addEventListener('DOMMouseScroll', _onWheel, false );
            this.addEventListener('mousewheel', _onWheel, false );
          }
          else
          {
            document.attachEvent("onmousewheel", _onWheel)
          }
        }

        function getBarHeight()
        {
          // calculate scrollbar height and make sure it is not too small
          barHeight = Math.max((me.outerHeight() / me[0].scrollHeight) * me.outerHeight(), minBarHeight);
          bar.css({ height: barHeight + 'px' });

          // hide scrollbar if content is not long enough
          var display = barHeight == me.outerHeight() ? 'none' : 'block';
          bar.css({ display: display });
        }

        function showBar()
        {
          // recalculate bar height
          getBarHeight();
          clearTimeout(queueHide);

          // when bar reached top or bottom
          if (percentScroll == ~~percentScroll)
          {
            //release wheel
            releaseScroll = o.allowPageScroll;

            // publish approporiate event
            if (lastScroll != percentScroll)
            {
                var msg = (~~percentScroll == 0) ? 'top' : 'bottom';
                me.trigger('slimscroll', msg);
            }
          }
          lastScroll = percentScroll;

          // show only when required
          if(barHeight >= me.outerHeight()) {
            //allow window scroll
            releaseScroll = true;
            return;
          }
          bar.stop(true,true).fadeIn('fast');
          if (o.railVisible) { rail.stop(true,true).fadeIn('fast'); }
        }

        function hideBar()
        {
          // only hide when options allow it
          if (!o.alwaysVisible)
          {
            queueHide = setTimeout(function(){
              if (!(o.disableFadeOut && isOverPanel) && !isOverBar && !isDragg)
              {
                bar.fadeOut('slow');
                rail.fadeOut('slow');
              }
            }, 1000);
          }
        }

      });

      // maintain chainability
      return this;
    }
  });

  jQuery.fn.extend({
    slimscroll: jQuery.fn.slimScroll
  });

})(jQuery);

/*
 * 	portBox 1.0 - jQuery plugin
 *	written by Joey Navarro	
 *	http://www.joeynavarro.com
 *
 *	Copyright (c) 2013 Joey Navarro (http://www.joeynavarro.com)
 *	Dual licensed under the MIT (MIT-LICENSE.txt)
 *	and GPL (GPL-LICENSE.txt) licenses.
 *
 *	Built for jQuery library
 *	http://jquery.com
 *
 */
(function($) {
		

/*------------------------
Listen For Click
-------------------------*/

$(document).on('click', '[data-display]', function(e){
	e.preventDefault();
	var portBoxID = $(this).attr('data-display');
	$('#'+portBoxID).display($(this).data());	

});

/*------------------------
Set Defaults
-------------------------*/

	$.fn.display = function(options) {
	
		var defaults = {
			//Set default animation, can be set to any jQuery UI effect
			//blind, bounce, clip, drop, explode, fade, fold, hilight, puff, pulsate, scale, shake, size, slide, transfer
			animation: 'fade', 
			
			//Set the speed of the animation				   
			animationspeed: 200, 
			
			//click background to close box yea or nay
			bgclose: true,
		};
		
		options = $.extend({}, defaults, options); 
		

		
		return this.each(function() {
			
/*------------------------
Globals Are Nice
-------------------------*/	
			
			var portBox = $(this),
				locked = false,
				portBoxBG = $('.portBox-overlay'),
				scrollBar;
				
/*--------------------------
IE Check
---------------------------*/

			var mobileIE = false
			
			if(navigator.userAgent.match(/Windows Phone/i)){
				mobileIE = true;	
			}

/*---------------------------
Animations Locks
----------------------------*/
	
			function unlockPB() {

				locked = false;
				
				portBox.find('video').each(function () {

					$(this).get(0).play();
				});
			}
			
			function lockPB() {
				locked = true;
			}			
/*------------------------
Drop in da BG
-------------------------*/
			
			//If portBox background does not exist add it after portBox
			if(portBoxBG.length == 0) {
				portBoxBG = $('<div class="portBox-overlay" />').insertAfter(portBox);
			}

/*-------------------------
Scroll Bar and Close Button
--------------------------*/   
       
        	//If slimScroll function exists scrollBar equals TRUE
			//Else scrollBar equals FALSE
			if (typeof $.fn.slimScroll == 'function'){
				scrollBar = true;
			}else{
				scrollBar = false;	
			};

			//IF portBox does not have a scroll bar div  and scrollBar is set to TRUE
			if (portBox.has(".scrollBar").length == 0 && scrollBar == true){
				
				//Wrap Everything in the portBox div in a new div with class of scrollBar
				//Add 20 padding on right and set portBox padding to 10 to offset inclusion of scroll bar
				portBox.wrapInner('<div class="scrollBar" style="padding-right:20px;" />');
				portBox.css({'padding-right' : 10});
				
				//Run the slimScroll function
				$(function(){
					$('.scrollBar').slimScroll({
						height: '100%'
					});
				});	
				
				//Add Close button anchor tag last so it's not traped in slimScroll div
				portBox.append('<a class="close-portBox">&#215;</a>');		
			}
			
			//If no Close button exists add one
			if (portBox.has(".close-portBox").length == 0 && scrollBar == false){
				
				portBox.append('<a class="close-portBox">&#215;</a>');
			}
			
/*------------------------
Keep It In Da Center
-------------------------*/	
			
			portBox.center = function () {
			var top, left;
			
				//If window width is greater than or equal to 1025px 
				//OR box height	is greater than window height 
				//AND scrollBar is TRUE set height to 90%
				 if(portBox.outerHeight() + 25 > $(window).height() && scrollBar === true && mobileIE === false){
					 
					 var maxH = $(window).height() - 80;
					 
					portBox.css({'height' :maxH + 'px'});	 
				}
				
				//Set top an left to 0 <-- seems unnecessary but fixed window offsetting problems when box first appears
				portBox.css({
					top:0, 
					left:0
				});
			
				//Get the windows height minus the portBox height divide it in half
				//Get the windows width minus the portBox width divide it in half
				
				top = Math.max($(window).height() - portBox.outerHeight(), 0) / 2;
				left = Math.max($(window).width() - portBox.outerWidth(), 0) / 2;
				
				//Set top and left values for portBox to center it 
				
				portBox.css({
					top:top + $(window).scrollTop(), 
					left:left + $(window).scrollLeft()
				});
				// If window width greater than or equal to portBox width move close icon inside box 
				//and leave 5px margin on either side of box
				
				if(portBox.innerWidth() + 10 >= $(window).width()){
					portBox.css({'margin-right' : 5 + 'px'}),
					$('.close-portBox').css({'top': 3, 'right': 3});
					
				// Else no margin and position close icon upper right hanging off corner		
				}else{
					portBox.css({'margin-right' : 0 + 'px'}),
					$('.close-portBox').css({'top': -6, 'right': -7});	
				}
				
				//If portBox height is greater than or equal to window height add top of 20 
				if(portBox.outerHeight() >= $(window).height() && scrollBar == false){
					portBox.css({'top' : 20 + $(window).scrollTop()});
				}

			};
			
			//Run the center function
			portBox.center();	
			
			//Run it again as window is resized
			$(window).on('resize.portBox', portBox.center);
			
/*------------------------
Make It Appear 
-------------------------*/ 
			
			//When the portBox opens
			portBox.on('portBox:open', function () {

				//If its not locked
				if(!locked) {
					
					//lock It
					lockPB();
					
					//If no animation is set
					if(options.animation == '') {
						
						//Set portBox and background to display block so they just appear 
						portBox.css({'display' : 'block'}),
						portBoxBG.css({'display':'block'});

						//Then unlock the portBox
						unlockPB();				
					}else{
						
						//Else fade in the BG and run animation on portBox
						portBoxBG.fadeIn(options.animationspeed);
						portBox.show(options.animation, options.animationspeed);
						
						//Then unlock portBox
						unlockPB();																				
					}
				}
			});
				
/*------------------------
Make It Go Away
-------------------------*/	
			
			//When portBox is closed
			portBox.on('portBox:close', function () {
				
				//If its not locked
				if(!locked) {
					
					//lock It
					lockPB();
					
					//If no animation is set
					if(options.animation == '') {
						
						//Set portBox and background back to display none  
						portBox.css({'display' : 'none'}),
						portBoxBG.css({'display' : 'none'});
						
						//Then unlock portBox
						unlockPB();	
					}else{
						
						//Else fade out the BG and portBox
						portBoxBG.fadeOut(options.animationspeed),
						portBox.fadeOut(options.animationspeed);
						
						//Then unlock portBox
						unlockPB();				
					} 
					
					//On close turn off the resize handler 
					//triggering the portBox.center function  		
					$(window).off('resize.portBox');	
				}}
			);     

/*-------------------------------
Open and Closing Listeners
--------------------------------*/
			
			//Open 
			portBox.trigger('portBox:open')
			
			//Close
			//Close Button
			var closeButton = $('.close-portBox').one('click.portBoxEvent', function () {
				portBox.trigger('portBox:close')
			});
			//Background Click
			if(options.bgclose) {
				portBoxBG.css({'cursor':'pointer'})
				portBoxBG.one('click.portBoxEvent', function () {
				portBox.trigger('portBox:close')
				});
			}
			//Escape Key
			$('body').keyup(function(e) {
				if(e.which===27){ portBox.trigger('portBox:close'); }
			});			
		
		});//end return each function 
	}//end display function
})(jQuery);
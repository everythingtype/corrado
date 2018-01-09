// Corrado Financial Group

(function($) {

	var scrollTimer = null;

	jQuery.fn.setScrollClass = function() {

		if ( $(window).scrollTop() > 40 ) {
			var isScrolled = true;
		} else {
			var isScrolled = false;
		}

		var hasScrolled = $(this).hasClass('scrolled');

		if ( hasScrolled == false ) {
			if ( isScrolled == true ) {
				$(this).addClass('scrolled');
			}
		} else if ( hasScrolled == true ) {
			if ( isScrolled == false ) {
				$(this).removeClass('scrolled');
			}
		}

	}

	function handleScroll() {
	    scrollTimer = null;
		$('.banner').setScrollClass();
	}

	$(window).scroll(function(){
		// Resize actions are in handleScroll()

	    if (scrollTimer) {
	        clearTimeout(scrollTimer);   // clear any previous pending timer
	    }
	    scrollTimer = setTimeout(handleScroll, 1);   // set new timer

	});

	$(document).ready( function() {

		// Smooth Scrolling
		$('a[href*="#"]')
		  // Remove links that don't actually link to anything
		  .not('[href="#"]')
		  .not('[href="#0"]')
		  .click(function(event) {
		
		    // On-page links
		    if (
		      location.pathname.replace(/^\//, '') == this.pathname.replace(/^\//, '') 
		      && 
		      location.hostname == this.hostname
		    ) {
		      // Figure out element to scroll to
		      var target = $(this.hash);
		      target = target.length ? target : $('[name=' + this.hash.slice(1) + ']');
		      // Does a scroll target exist?
		      if (target.length) {
		        // Only prevent default if animation is actually gonna happen
		        event.preventDefault();
		        $('html, body').animate({
		          scrollTop: target.offset().top
		        }, 500, function() {
		          // Callback after animation
		          // Must change focus!
		          var $target = $(target);
		          $target.focus();
		          if ($target.is(":focus")) { // Checking if the target was focused
		            return false;
		          } else {
		            $target.attr('tabindex','-1'); // Adding tabindex for elements not focusable
		            $target.focus(); // Set focus again
		          };
		        });
		      }
		    }
		  });

	});

})(jQuery);

/**
 * what-input - A global utility for tracking the current input method (mouse, keyboard or touch).
 * @version v4.1.3
 * @link https://github.com/ten1seven/what-input
 * @license MIT
 */
!function(b,c){"object"==typeof exports&&"object"==typeof module?module.exports=c():"function"==typeof define&&define.amd?define("whatInput",[],c):"object"==typeof exports?exports.whatInput=c():b.whatInput=c()}(this,function(){return function(a){function c(d){if(b[d])return b[d].exports;var e=b[d]={exports:{},id:d,loaded:!1};return a[d].call(e.exports,e,e.exports,c),e.loaded=!0,e.exports}var b={};return c.m=a,c.c=b,c.p="",c(0)}([function(a,b){"use strict";a.exports=function(){var a=document.documentElement,b="initial",c=null,d=["input","select","textarea"],e=[16,17,18,91,93],f={keydown:"keyboard",mousedown:"mouse",mousemove:"mouse",MSPointerDown:"pointer",MSPointerMove:"pointer",pointerdown:"pointer",pointermove:"pointer",touchstart:"touch"},g=[],h=!1,i=!1,j={x:null,y:null},k={2:"touch",3:"touch",4:"mouse"},l=function(){f[s()]="mouse",m(),o()},m=function(){window.PointerEvent?(a.addEventListener("pointerdown",n),a.addEventListener("pointermove",p)):window.MSPointerEvent?(a.addEventListener("MSPointerDown",n),a.addEventListener("MSPointerMove",p)):(a.addEventListener("mousedown",n),a.addEventListener("mousemove",p),"ontouchstart"in window&&(a.addEventListener("touchstart",q),a.addEventListener("touchend",q))),a.addEventListener(s(),p),a.addEventListener("keydown",n)},n=function(g){if(!h){var i=g.which,j=f[g.type];if("pointer"===j&&(j=r(g)),b!==j||c!==j){var k=document.activeElement,l=!1;k&&k.nodeName&&-1===d.indexOf(k.nodeName.toLowerCase())&&(l=!0),("touch"===j||"mouse"===j||"keyboard"===j&&l&&-1===e.indexOf(i))&&(b=c=j,o())}}},o=function(){a.setAttribute("data-whatinput",b),a.setAttribute("data-whatintent",b),-1===g.indexOf(b)&&(g.push(b),a.className+=" whatinput-types-"+b)},p=function(d){if(j.x!==d.screenX||j.y!==d.screenY?(i=!1,j.x=d.screenX,j.y=d.screenY):i=!0,!h&&!i){var e=f[d.type];"pointer"===e&&(e=r(d)),c!==e&&(c=e,a.setAttribute("data-whatintent",c))}},q=function(b){"touchstart"===b.type?(h=!1,n(b)):h=!0},r=function(b){return"number"==typeof b.pointerType?k[b.pointerType]:"pen"===b.pointerType?"touch":b.pointerType},s=function(){return"onwheel"in document.createElement("div")?"wheel":void 0!==document.onmousewheel?"mousewheel":"DOMMouseScroll"};return"addEventListener"in window&&Array.prototype.indexOf&&l(),{ask:function(d){return"loose"===d?c:b},types:function(){return g}}}()}])});
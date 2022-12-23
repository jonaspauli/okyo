import {domReady} from '@roots/sage/client';
import {gsap} from 'gsap';
import { ScrollTrigger } from 'gsap/ScrollTrigger.js';
import $ from 'jquery';
import SplitType from 'split-type';

/**
 * app.main
 */
const main = async (err) => {
  if (err) {
    // handle hmr errors
    console.error(err);
  }

  // application code
};

/**
 * Initialize
 *
 * @see https://webpack.js.org/api/hot-module-replacement
 */
domReady(main);
import.meta.webpackHot?.accept(main);

const myText = new SplitType('.anim-head');

gsap.to('.char', {
    y: 0,
    stagger: 0.05,
    delay: 0.2,
    duration: .1
});

gsap.registerPlugin(ScrollTrigger);

gsap.to ('.fade', {
    ScrollTrigger: ".fade",
    stagger: 0.3,
    opacity: 1,
    delay: 0.5,
});

function is_touch_enabled() {
    return ( 'ontouchstart' in window ) ||
    ( navigator.maxTouchPoints > 0 ) ||
    ( navigator.msMaxTouchPoints > 0 );
}

jQuery(document).ready(function($) {
    var alterClass = function() {
      var ww = document.body.clientWidth;
      if ( is_touch_enabled() ) {
        $('.sticky-container').attr('class', function() {
            return $(this).attr('class').replace('sticky-container', 'non-sticky-container');
        });
      } 
    };
    $(window).resize(function(){
      alterClass();
    });
    //Fire it when the page first loads:
    alterClass();
  });

/**
* By Alvaro Trigo 
* Sidescroll
* Follow me on Twitter: https://twitter.com/imac2
*/
$(window).load(function(){
  init();

  var g_containerInViewport;
  function init(){
      setStickyContainersSize();
      bindEvents();
  }

  function bindEvents(){
      window.addEventListener("wheel", wheelHandler);        
  }

  function setStickyContainersSize(){
      document.querySelectorAll('.sticky-container').forEach(function(container){
          const stikyContainerHeight = container.querySelector('main').scrollWidth;
          container.setAttribute('style', 'height: ' + stikyContainerHeight + 'px');
      });
  }

  function isElementInViewport (el) {
      const rect = el.getBoundingClientRect();
      return rect.top <= 0 && rect.bottom > document.documentElement.clientHeight;
  }

  function wheelHandler(evt){
      
      const containerInViewPort = Array.from(document.querySelectorAll('.sticky-container')).filter(function(container){
          return isElementInViewport(container);
      })[0];

      if(!containerInViewPort){
          return;
      }

      var isPlaceHolderBelowTop = containerInViewPort.offsetTop < document.documentElement.scrollTop;
      var isPlaceHolderBelowBottom = containerInViewPort.offsetTop + containerInViewPort.offsetHeight > document.documentElement.scrollTop;
      let g_canScrollHorizontally = isPlaceHolderBelowTop && isPlaceHolderBelowBottom;

      if(g_canScrollHorizontally){
          containerInViewPort.querySelector('main').scrollLeft += evt.deltaY;
      }
  }
});



// Gutschein 3D

require('@marcreichel/apple-tv-card');


// Textband


/// Rellax

$('.gallery-rellax').each(function() {
    
    $(this).addClass("rellax");
     $(this).attr({'data-rellax-speed' : (Math.random() * 2) - 1})
    
      });
    
    
     $(document).ready(function(){
    
     var rellax = new Rellax('.rellax', {
    
    
      });
     });


/// Text Scroll

$(document).ready(function() {
  var containers = $('.textband');

  if (containers.length) {
      containers.each(function() {
          var container = $(this);

          // Support small text - copy to fill screen width
          if (container.find('.scrolling-text').outerWidth() < $(window).width()) {
              var windowToScrolltextRatio = Math.round($(window).width() / container.find('.scrolling-text').outerWidth()),
                  scrollTextContent = container.find('.scrolling-text .scrolling-text-content').text(),
                  newScrollText = '';
              for (var i = 0; i < windowToScrolltextRatio; i++) {
                  newScrollText += ' ' + scrollTextContent;
              }
              container.find('.scrolling-text .scrolling-text-content').text(newScrollText);
          }

          // Init variables and config
          var scrollingText = container.find('.scrolling-text'),
              scrollingTextWidth = scrollingText.outerWidth(),
              scrollingTextHeight = scrollingText.outerHeight(true),
              startLetterIndent = parseInt(scrollingText.find('.scrolling-text-content').css('font-size'), 10) / 4.8,
              startLetterIndent = Math.round(startLetterIndent),
              scrollAmountBoundary = Math.abs($(window).width() - scrollingTextWidth),
              transformAmount = 0,
              leftBound = 0,
              rightBound = scrollAmountBoundary,
              transformDirection = container.hasClass('left-to-right') ? -1 : 1,
              transformSpeed = 200;

          // Read transform speed
          if (container.attr('speed')) {
              transformSpeed = container.attr('speed');
          }
      
          // Make scrolling text copy for scrolling infinity
          container.append(scrollingText.clone().addClass('scrolling-text-copy'));
          container.find('.scrolling-text').css({'position': 'absolute', 'left': 0});
          container.css('height', scrollingTextHeight);
      
          var getActiveScrollingText = function(direction) {
              var firstScrollingText = container.find('.scrolling-text:nth-child(1)');
              var secondScrollingText = container.find('.scrolling-text:nth-child(2)');
      
              var firstScrollingTextLeft = parseInt(container.find('.scrolling-text:nth-child(1)').css("left"), 10);
              var secondScrollingTextLeft = parseInt(container.find('.scrolling-text:nth-child(2)').css("left"), 10);
      
              if (direction === 'left') {
                  return firstScrollingTextLeft < secondScrollingTextLeft ? secondScrollingText : firstScrollingText;
              } else if (direction === 'right') {
                  return firstScrollingTextLeft > secondScrollingTextLeft ? secondScrollingText : firstScrollingText;
              }
          }
      
          $(window).on('scroll', function(e) {
              var delta = e.originalEvent.deltaY;
              
              if (delta > 0) {
                  // going down
                  transformAmount += transformSpeed * transformDirection;
                  container.find('.scrolling-text .scrolling-text-content').css('transform', 'skewX(10deg)');
              }
              else {
                  transformAmount -= transformSpeed * transformDirection;
                  container.find('.scrolling-text .scrolling-text-content').css('transform', 'skewX(-10deg)');
              }
              setTimeout(function(){
                  container.find('.scrolling-text').css('transform', 'translate3d('+ transformAmount * -1 +'px, 0, 0)');
              }, 10);
              setTimeout(function() {
                  container.find('.scrolling-text .scrolling-text-content').css('transform', 'skewX(0)');
              }, 500)
      
              // Boundaries
              if (transformAmount < leftBound) {
                  var activeText = getActiveScrollingText('left');
                  activeText.css({'left': Math.round(leftBound - scrollingTextWidth - startLetterIndent) + 'px'});
                  leftBound = parseInt(activeText.css("left"), 10);
                  rightBound = leftBound + scrollingTextWidth + scrollAmountBoundary + startLetterIndent;
      
              } else if (transformAmount > rightBound) {
                  var activeText = getActiveScrollingText('right');
                  activeText.css({'left': Math.round(rightBound + scrollingTextWidth - scrollAmountBoundary + startLetterIndent) + 'px'});
                  rightBound += scrollingTextWidth + startLetterIndent;
                  leftBound = rightBound - scrollingTextWidth - scrollAmountBoundary - startLetterIndent;
              }
          });
      })
  }
});

/// Startseite


const canvas = document.querySelector('.okyo-scrolling');
const context = canvas.getContext("2d");

canvas.width = 1920;
canvas.height = 1080;

const frameCount = 296;
const currentFrame = index => (
    `anim/anim_${index.toString().padStart(3, '0')}.jpg`
);

const images = []
const okyoanim = {
  frame: 0
};

for (let i = 0; i < frameCount; i++) {
  const img = new Image();
  img.src = currentFrame(i);
  images.push(img);
}

gsap.to(okyoanim, {
  frame: frameCount - 1,
  pin: true,
  snap: "frame",
  ease: "none",
  scrollTrigger: {
    scrub: 0.2
  },
  onUpdate: render // use animation onUpdate instead of scrollTrigger's onUpdate
});

images[0].onload = render;

function render() {
  context.clearRect(0, 0, canvas.width, canvas.height);
  context.drawImage(images[okyoanim.frame], 0, 0); 
};



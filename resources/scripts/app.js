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



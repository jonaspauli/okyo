"use strict";(self.webpackChunksage=self.webpackChunksage||[]).push([[143],{813:(t,e,n)=>{var o=n(575),r=n(358),i=n(92),c=n(567),s=n.n(c),l=n(829);const a=async t=>{t&&console.error(t)};(0,o.Z)(a),new l.Z(".anim-head"),r.p8.to(".char",{y:0,stagger:.05,delay:.2,duration:.1}),r.p8.registerPlugin(i.i),r.p8.to(".fade",{ScrollTrigger:".fade",stagger:.3,opacity:1,delay:.5}),jQuery(document).ready((function(t){var e=function(){document.body.clientWidth,("ontouchstart"in window||navigator.maxTouchPoints>0||navigator.msMaxTouchPoints>0)&&t(".sticky-container").attr("class",(function(){return t(this).attr("class").replace("sticky-container","non-sticky-container")}))};t(window).resize((function(){e()})),e()})),s()(window).load((function(){document.querySelectorAll(".sticky-container").forEach((function(t){const e=t.querySelector("main").scrollWidth;t.setAttribute("style","height: "+e+"px")})),window.addEventListener("wheel",(function(t){const e=Array.from(document.querySelectorAll(".sticky-container")).filter((function(t){return function(t){const e=t.getBoundingClientRect();return e.top<=0&&e.bottom>document.documentElement.clientHeight}(t)}))[0];if(e){var n=e.offsetTop<document.documentElement.scrollTop,o=e.offsetTop+e.offsetHeight>document.documentElement.scrollTop;n&&o&&(e.querySelector("main").scrollLeft+=t.deltaY)}}))})),n(680),s()(".gallery-rellax").each((function(){s()(this).addClass("rellax"),s()(this).attr({"data-rellax-speed":2*Math.random()-1})})),s()(document).ready((function(){new Rellax(".rellax",{})})),s()(document).ready((function(){var t=s()(".textband");t.length&&t.each((function(){var t=s()(this);if(t.find(".scrolling-text").outerWidth()<s()(window).width()){for(var e=Math.round(s()(window).width()/t.find(".scrolling-text").outerWidth()),n=t.find(".scrolling-text .scrolling-text-content").text(),o="",r=0;r<e;r++)o+=" "+n;t.find(".scrolling-text .scrolling-text-content").text(o)}var i=t.find(".scrolling-text"),c=i.outerWidth(),l=i.outerHeight(!0),a=parseInt(i.find(".scrolling-text-content").css("font-size"),10)/4.8,d=(a=Math.round(a),Math.abs(s()(window).width()-c)),f=0,u=0,g=d,h=t.hasClass("left-to-right")?-1:1,m=50;t.attr("speed")&&(m=t.attr("speed")),t.append(i.clone().addClass("scrolling-text-copy")),t.find(".scrolling-text").css({position:"absolute",left:0}),t.css("height",l);var x=function(e){var n=t.find(".scrolling-text:nth-child(1)"),o=t.find(".scrolling-text:nth-child(2)"),r=parseInt(t.find(".scrolling-text:nth-child(1)").css("left"),10),i=parseInt(t.find(".scrolling-text:nth-child(2)").css("left"),10);return"left"===e?r<i?o:n:"right"===e?r>i?o:n:void 0};s()(window).on("scroll",(function(e){if(e.originalEvent.deltaY>0?(f+=m*h,t.find(".scrolling-text .scrolling-text-content").css("transform","skewX(10deg)")):(f-=m*h,t.find(".scrolling-text .scrolling-text-content").css("transform","skewX(-10deg)")),setTimeout((function(){t.find(".scrolling-text").css("transform","translate3d("+-1*f+"px, 0, 0)")}),10),setTimeout((function(){t.find(".scrolling-text .scrolling-text-content").css("transform","skewX(0)")}),500),f<u)(n=x("left")).css({left:Math.round(u-c-a)+"px"}),u=parseInt(n.css("left"),10),g=u+c+d+a;else if(f>g){var n;(n=x("right")).css({left:Math.round(g+c-d+a)+"px"}),u=(g+=c+a)-c-d-a}}))}))}));const d=document.querySelector(".okyo-scrolling"),f=d.getContext("2d");d.width=1920,d.height=1080;const u=[],g={frame:0};for(let t=0;t<296;t++){const e=new Image;e.src="anim/anim_".concat(t.toString().padStart(3,"0"),".jpg"),u.push(e)}function h(){f.clearRect(0,0,d.width,d.height),f.drawImage(u[g.frame],0,0)}r.p8.to(g,{frame:295,pin:!0,snap:"frame",ease:"none",scrollTrigger:{scrub:.2},onUpdate:h}),u[0].onload=h},201:()=>{},567:t=>{t.exports=window.jQuery}},t=>{var e=e=>t(t.s=e);t.O(0,[829],(()=>(e(813),e(201)))),t.O()}]);
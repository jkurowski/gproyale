// Slider
(function(c,I,B){c.fn.responsiveSlides=function(l){var a=c.extend({auto:!0,speed:100,timeout:4E3,pager:!1,nav:!1,random:!1,pause:!1,pauseControls:!0,prevText:"Previous",nextText:"Next",maxwidth:"",navContainer:"",manualControls:"",namespace:"rslides",before:c.noop,after:c.noop},l);return this.each(function(){B++;var f=c(this),s,r,t,m,p,q,n=0,e=f.children(),C=e.size(),h=parseFloat(a.speed),D=parseFloat(a.timeout),u=parseFloat(a.maxwidth),g=a.namespace,d=g+B,E=g+"_nav "+d+"_nav",v=g+"_here",j=d+"_on",
    w=d+"_s",k=c("<ul class='"+g+"_tabs "+d+"_tabs' />"),x={"float":"left",position:"relative",opacity:1,zIndex:2},y={"float":"none",position:"absolute",opacity:0,zIndex:1},F=function(){var b=(document.body||document.documentElement).style,a="transition";if("string"===typeof b[a])return!0;s=["Moz","Webkit","Khtml","O","ms"];var a=a.charAt(0).toUpperCase()+a.substr(1),c;for(c=0;c<s.length;c++)if("string"===typeof b[s[c]+a])return!0;return!1}(),z=function(b){a.before(b);F?(e.removeClass(j).css(y).eq(b).addClass(j).css(x),
        n=b,setTimeout(function(){a.after(b)},h)):e.stop().fadeOut(h,function(){c(this).removeClass(j).css(y).css("opacity",1)}).eq(b).fadeIn(h,function(){c(this).addClass(j).css(x);a.after(b);n=b})};a.random&&(e.sort(function(){return Math.round(Math.random())-0.5}),f.empty().append(e));e.each(function(a){this.id=w+a});f.addClass(g+" "+d);l&&l.maxwidth&&f.css("max-width",u);e.hide().css(y).eq(0).addClass(j).css(x).show();F&&e.show().css({"-webkit-transition":"opacity "+h+"ms ease-in-out, 5s transform linear","-moz-transition":"opacity "+
        h+"ms ease-in-out, 5s transform linear","-o-transition":"opacity "+h+"ms ease-in-out, 5s transform linear",transition:"opacity "+h+"ms ease-in-out, 5s transform linear"});if(1<e.size()){if(D<h+100)return;if(a.pager&&!a.manualControls){var A=[];e.each(function(a){a+=1;A+="<li><a href='#' class='"+w+a+"'>"+a+"</a></li>"});k.append(A);l.navContainer?c(a.navContainer).append(k):f.after(k)}a.manualControls&&(k=c(a.manualControls),k.addClass(g+"_tabs "+d+"_tabs"));(a.pager||a.manualControls)&&k.find("li").each(function(a){c(this).addClass(w+(a+1))});if(a.pager||a.manualControls)q=
    k.find("a"),r=function(a){q.closest("li").removeClass(v).eq(a).addClass(v)};a.auto&&(t=function(){p=setInterval(function(){e.stop(!0,!0);var b=n+1<C?n+1:0;(a.pager||a.manualControls)&&r(b);z(b)},D)},t());m=function(){a.auto&&(clearInterval(p),t())};a.pause&&f.hover(function(){clearInterval(p)},function(){m()});if(a.pager||a.manualControls)q.bind("click",function(b){b.preventDefault();a.pauseControls||m();b=q.index(this);n===b||c("."+j).queue("fx").length||(r(b),z(b))}).eq(0).closest("li").addClass(v),
a.pauseControls&&q.hover(function(){clearInterval(p)},function(){m()});if(a.nav){g="<a href='#' class='"+E+" prev'> </a><a href='#' class='"+E+" next'> </a>";l.navContainer?c(a.navContainer).append(g):f.after(g);var d=c("."+d+"_nav"),G=d.filter(".prev");d.bind("click",function(b){b.preventDefault();b=c("."+j);if(!b.queue("fx").length){var d=e.index(b);b=d-1;d=d+1<C?n+1:0;z(c(this)[0]===G[0]?b:d);if(a.pager||a.manualControls)r(c(this)[0]===G[0]?b:d);a.pauseControls||m()}});
    a.pauseControls&&d.hover(function(){clearInterval(p)},function(){m()})}}if("undefined"===typeof document.body.style.maxWidth&&l.maxwidth){var H=function(){f.css("width","100%");f.width()>u&&f.css("width",u)};H();c(I).bind("resize",function(){H()})}})}})(jQuery,this,0);

// Easing
jQuery.easing.jswing=jQuery.easing.swing,jQuery.extend(jQuery.easing,{def:"easeInOutExpo",swing:function(e,n,u,i,r){return jQuery.easing[jQuery.easing.def](e,n,u,i,r)},easeInOutExpo:function(e,n,u,i,r){return 0===n?u:n===r?u+i:(n/=r/2)<1?i/2*Math.pow(2,10*(n-1))+u:i/2*(2-Math.pow(2,-10*--n))+u}});

// AOS
!function(e,t){"object"==typeof exports&&"object"==typeof module?module.exports=t():"function"==typeof define&&define.amd?define([],t):"object"==typeof exports?exports.AOS=t():e.AOS=t()}(this,function(){return function(e){function t(o){if(n[o])return n[o].exports;var i=n[o]={exports:{},id:o,loaded:!1};return e[o].call(i.exports,i,i.exports,t),i.loaded=!0,i.exports}var n={};return t.m=e,t.c=n,t.p="dist/",t(0)}([function(e,t,n){"use strict";function o(e){return e&&e.__esModule?e:{default:e}}var i=Object.assign||function(e){for(var t=1;t<arguments.length;t++){var n=arguments[t];for(var o in n)Object.prototype.hasOwnProperty.call(n,o)&&(e[o]=n[o])}return e},r=n(1),a=(o(r),n(6)),u=o(a),c=n(7),f=o(c),s=n(8),d=o(s),l=n(9),p=o(l),m=n(10),b=o(m),v=n(11),y=o(v),g=n(14),h=o(g),w=[],k=!1,x=document.all&&!window.atob,j={offset:120,delay:0,easing:"ease",duration:400,disable:!1,once:!1,startEvent:"DOMContentLoaded",throttleDelay:99,debounceDelay:50,disableMutationObserver:!1},O=function(){var e=arguments.length>0&&void 0!==arguments[0]&&arguments[0];if(e&&(k=!0),k)return w=(0,y.default)(w,j),(0,b.default)(w,j.once),w},_=function(){w=(0,h.default)(),O()},S=function(){w.forEach(function(e,t){e.node.removeAttribute("data-aos"),e.node.removeAttribute("data-aos-easing"),e.node.removeAttribute("data-aos-duration"),e.node.removeAttribute("data-aos-delay")})},z=function(e){return e===!0||"mobile"===e&&p.default.mobile()||"phone"===e&&p.default.phone()||"tablet"===e&&p.default.tablet()||"function"==typeof e&&e()===!0},A=function(e){return j=i(j,e),w=(0,h.default)(),z(j.disable)||x?S():(document.querySelector("body").setAttribute("data-aos-easing",j.easing),document.querySelector("body").setAttribute("data-aos-duration",j.duration),document.querySelector("body").setAttribute("data-aos-delay",j.delay),"DOMContentLoaded"===j.startEvent&&["complete","interactive"].indexOf(document.readyState)>-1?O(!0):"load"===j.startEvent?window.addEventListener(j.startEvent,function(){O(!0)}):document.addEventListener(j.startEvent,function(){O(!0)}),window.addEventListener("resize",(0,f.default)(O,j.debounceDelay,!0)),window.addEventListener("orientationchange",(0,f.default)(O,j.debounceDelay,!0)),window.addEventListener("scroll",(0,u.default)(function(){(0,b.default)(w,j.once)},j.throttleDelay)),j.disableMutationObserver||(0,d.default)("[data-aos]",_),w)};e.exports={init:A,refresh:O,refreshHard:_}},function(e,t){},,,,,function(e,t){(function(t){"use strict";function n(e,t,n){function o(t){var n=b,o=v;return b=v=void 0,k=t,g=e.apply(o,n)}function r(e){return k=e,h=setTimeout(s,t),_?o(e):g}function a(e){var n=e-w,o=e-k,i=t-n;return S?j(i,y-o):i}function c(e){var n=e-w,o=e-k;return void 0===w||n>=t||n<0||S&&o>=y}function s(){var e=O();return c(e)?d(e):void(h=setTimeout(s,a(e)))}function d(e){return h=void 0,z&&b?o(e):(b=v=void 0,g)}function l(){void 0!==h&&clearTimeout(h),k=0,b=w=v=h=void 0}function p(){return void 0===h?g:d(O())}function m(){var e=O(),n=c(e);if(b=arguments,v=this,w=e,n){if(void 0===h)return r(w);if(S)return h=setTimeout(s,t),o(w)}return void 0===h&&(h=setTimeout(s,t)),g}var b,v,y,g,h,w,k=0,_=!1,S=!1,z=!0;if("function"!=typeof e)throw new TypeError(f);return t=u(t)||0,i(n)&&(_=!!n.leading,S="maxWait"in n,y=S?x(u(n.maxWait)||0,t):y,z="trailing"in n?!!n.trailing:z),m.cancel=l,m.flush=p,m}function o(e,t,o){var r=!0,a=!0;if("function"!=typeof e)throw new TypeError(f);return i(o)&&(r="leading"in o?!!o.leading:r,a="trailing"in o?!!o.trailing:a),n(e,t,{leading:r,maxWait:t,trailing:a})}function i(e){var t="undefined"==typeof e?"undefined":c(e);return!!e&&("object"==t||"function"==t)}function r(e){return!!e&&"object"==("undefined"==typeof e?"undefined":c(e))}function a(e){return"symbol"==("undefined"==typeof e?"undefined":c(e))||r(e)&&k.call(e)==d}function u(e){if("number"==typeof e)return e;if(a(e))return s;if(i(e)){var t="function"==typeof e.valueOf?e.valueOf():e;e=i(t)?t+"":t}if("string"!=typeof e)return 0===e?e:+e;e=e.replace(l,"");var n=m.test(e);return n||b.test(e)?v(e.slice(2),n?2:8):p.test(e)?s:+e}var c="function"==typeof Symbol&&"symbol"==typeof Symbol.iterator?function(e){return typeof e}:function(e){return e&&"function"==typeof Symbol&&e.constructor===Symbol&&e!==Symbol.prototype?"symbol":typeof e},f="Expected a function",s=NaN,d="[object Symbol]",l=/^\s+|\s+$/g,p=/^[-+]0x[0-9a-f]+$/i,m=/^0b[01]+$/i,b=/^0o[0-7]+$/i,v=parseInt,y="object"==("undefined"==typeof t?"undefined":c(t))&&t&&t.Object===Object&&t,g="object"==("undefined"==typeof self?"undefined":c(self))&&self&&self.Object===Object&&self,h=y||g||Function("return this")(),w=Object.prototype,k=w.toString,x=Math.max,j=Math.min,O=function(){return h.Date.now()};e.exports=o}).call(t,function(){return this}())},function(e,t){(function(t){"use strict";function n(e,t,n){function i(t){var n=b,o=v;return b=v=void 0,O=t,g=e.apply(o,n)}function r(e){return O=e,h=setTimeout(s,t),_?i(e):g}function u(e){var n=e-w,o=e-O,i=t-n;return S?x(i,y-o):i}function f(e){var n=e-w,o=e-O;return void 0===w||n>=t||n<0||S&&o>=y}function s(){var e=j();return f(e)?d(e):void(h=setTimeout(s,u(e)))}function d(e){return h=void 0,z&&b?i(e):(b=v=void 0,g)}function l(){void 0!==h&&clearTimeout(h),O=0,b=w=v=h=void 0}function p(){return void 0===h?g:d(j())}function m(){var e=j(),n=f(e);if(b=arguments,v=this,w=e,n){if(void 0===h)return r(w);if(S)return h=setTimeout(s,t),i(w)}return void 0===h&&(h=setTimeout(s,t)),g}var b,v,y,g,h,w,O=0,_=!1,S=!1,z=!0;if("function"!=typeof e)throw new TypeError(c);return t=a(t)||0,o(n)&&(_=!!n.leading,S="maxWait"in n,y=S?k(a(n.maxWait)||0,t):y,z="trailing"in n?!!n.trailing:z),m.cancel=l,m.flush=p,m}function o(e){var t="undefined"==typeof e?"undefined":u(e);return!!e&&("object"==t||"function"==t)}function i(e){return!!e&&"object"==("undefined"==typeof e?"undefined":u(e))}function r(e){return"symbol"==("undefined"==typeof e?"undefined":u(e))||i(e)&&w.call(e)==s}function a(e){if("number"==typeof e)return e;if(r(e))return f;if(o(e)){var t="function"==typeof e.valueOf?e.valueOf():e;e=o(t)?t+"":t}if("string"!=typeof e)return 0===e?e:+e;e=e.replace(d,"");var n=p.test(e);return n||m.test(e)?b(e.slice(2),n?2:8):l.test(e)?f:+e}var u="function"==typeof Symbol&&"symbol"==typeof Symbol.iterator?function(e){return typeof e}:function(e){return e&&"function"==typeof Symbol&&e.constructor===Symbol&&e!==Symbol.prototype?"symbol":typeof e},c="Expected a function",f=NaN,s="[object Symbol]",d=/^\s+|\s+$/g,l=/^[-+]0x[0-9a-f]+$/i,p=/^0b[01]+$/i,m=/^0o[0-7]+$/i,b=parseInt,v="object"==("undefined"==typeof t?"undefined":u(t))&&t&&t.Object===Object&&t,y="object"==("undefined"==typeof self?"undefined":u(self))&&self&&self.Object===Object&&self,g=v||y||Function("return this")(),h=Object.prototype,w=h.toString,k=Math.max,x=Math.min,j=function(){return g.Date.now()};e.exports=n}).call(t,function(){return this}())},function(e,t){"use strict";function n(e,t){var n=new r(o);a=t,n.observe(i.documentElement,{childList:!0,subtree:!0,removedNodes:!0})}function o(e){e&&e.forEach(function(e){var t=Array.prototype.slice.call(e.addedNodes),n=Array.prototype.slice.call(e.removedNodes),o=t.concat(n).filter(function(e){return e.hasAttribute&&e.hasAttribute("data-aos")}).length;o&&a()})}Object.defineProperty(t,"__esModule",{value:!0});var i=window.document,r=window.MutationObserver||window.WebKitMutationObserver||window.MozMutationObserver,a=function(){};t.default=n},function(e,t){"use strict";function n(e,t){if(!(e instanceof t))throw new TypeError("Cannot call a class as a function")}function o(){return navigator.userAgent||navigator.vendor||window.opera||""}Object.defineProperty(t,"__esModule",{value:!0});var i=function(){function e(e,t){for(var n=0;n<t.length;n++){var o=t[n];o.enumerable=o.enumerable||!1,o.configurable=!0,"value"in o&&(o.writable=!0),Object.defineProperty(e,o.key,o)}}return function(t,n,o){return n&&e(t.prototype,n),o&&e(t,o),t}}(),r=/(android|bb\d+|meego).+mobile|avantgo|bada\/|blackberry|blazer|compal|elaine|fennec|hiptop|iemobile|ip(hone|od)|iris|kindle|lge |maemo|midp|mmp|mobile.+firefox|netfront|opera m(ob|in)i|palm( os)?|phone|p(ixi|re)\/|plucker|pocket|psp|series(4|6)0|symbian|treo|up\.(browser|link)|vodafone|wap|windows ce|xda|xiino/i,a=/1207|6310|6590|3gso|4thp|50[1-6]i|770s|802s|a wa|abac|ac(er|oo|s\-)|ai(ko|rn)|al(av|ca|co)|amoi|an(ex|ny|yw)|aptu|ar(ch|go)|as(te|us)|attw|au(di|\-m|r |s )|avan|be(ck|ll|nq)|bi(lb|rd)|bl(ac|az)|br(e|v)w|bumb|bw\-(n|u)|c55\/|capi|ccwa|cdm\-|cell|chtm|cldc|cmd\-|co(mp|nd)|craw|da(it|ll|ng)|dbte|dc\-s|devi|dica|dmob|do(c|p)o|ds(12|\-d)|el(49|ai)|em(l2|ul)|er(ic|k0)|esl8|ez([4-7]0|os|wa|ze)|fetc|fly(\-|_)|g1 u|g560|gene|gf\-5|g\-mo|go(\.w|od)|gr(ad|un)|haie|hcit|hd\-(m|p|t)|hei\-|hi(pt|ta)|hp( i|ip)|hs\-c|ht(c(\-| |_|a|g|p|s|t)|tp)|hu(aw|tc)|i\-(20|go|ma)|i230|iac( |\-|\/)|ibro|idea|ig01|ikom|im1k|inno|ipaq|iris|ja(t|v)a|jbro|jemu|jigs|kddi|keji|kgt( |\/)|klon|kpt |kwc\-|kyo(c|k)|le(no|xi)|lg( g|\/(k|l|u)|50|54|\-[a-w])|libw|lynx|m1\-w|m3ga|m50\/|ma(te|ui|xo)|mc(01|21|ca)|m\-cr|me(rc|ri)|mi(o8|oa|ts)|mmef|mo(01|02|bi|de|do|t(\-| |o|v)|zz)|mt(50|p1|v )|mwbp|mywa|n10[0-2]|n20[2-3]|n30(0|2)|n50(0|2|5)|n7(0(0|1)|10)|ne((c|m)\-|on|tf|wf|wg|wt)|nok(6|i)|nzph|o2im|op(ti|wv)|oran|owg1|p800|pan(a|d|t)|pdxg|pg(13|\-([1-8]|c))|phil|pire|pl(ay|uc)|pn\-2|po(ck|rt|se)|prox|psio|pt\-g|qa\-a|qc(07|12|21|32|60|\-[2-7]|i\-)|qtek|r380|r600|raks|rim9|ro(ve|zo)|s55\/|sa(ge|ma|mm|ms|ny|va)|sc(01|h\-|oo|p\-)|sdk\/|se(c(\-|0|1)|47|mc|nd|ri)|sgh\-|shar|sie(\-|m)|sk\-0|sl(45|id)|sm(al|ar|b3|it|t5)|so(ft|ny)|sp(01|h\-|v\-|v )|sy(01|mb)|t2(18|50)|t6(00|10|18)|ta(gt|lk)|tcl\-|tdg\-|tel(i|m)|tim\-|t\-mo|to(pl|sh)|ts(70|m\-|m3|m5)|tx\-9|up(\.b|g1|si)|utst|v400|v750|veri|vi(rg|te)|vk(40|5[0-3]|\-v)|vm40|voda|vulc|vx(52|53|60|61|70|80|81|83|85|98)|w3c(\-| )|webc|whit|wi(g |nc|nw)|wmlb|wonu|x700|yas\-|your|zeto|zte\-/i,u=/(android|bb\d+|meego).+mobile|avantgo|bada\/|blackberry|blazer|compal|elaine|fennec|hiptop|iemobile|ip(hone|od)|iris|kindle|lge |maemo|midp|mmp|mobile.+firefox|netfront|opera m(ob|in)i|palm( os)?|phone|p(ixi|re)\/|plucker|pocket|psp|series(4|6)0|symbian|treo|up\.(browser|link)|vodafone|wap|windows ce|xda|xiino|android|ipad|playbook|silk/i,c=/1207|6310|6590|3gso|4thp|50[1-6]i|770s|802s|a wa|abac|ac(er|oo|s\-)|ai(ko|rn)|al(av|ca|co)|amoi|an(ex|ny|yw)|aptu|ar(ch|go)|as(te|us)|attw|au(di|\-m|r |s )|avan|be(ck|ll|nq)|bi(lb|rd)|bl(ac|az)|br(e|v)w|bumb|bw\-(n|u)|c55\/|capi|ccwa|cdm\-|cell|chtm|cldc|cmd\-|co(mp|nd)|craw|da(it|ll|ng)|dbte|dc\-s|devi|dica|dmob|do(c|p)o|ds(12|\-d)|el(49|ai)|em(l2|ul)|er(ic|k0)|esl8|ez([4-7]0|os|wa|ze)|fetc|fly(\-|_)|g1 u|g560|gene|gf\-5|g\-mo|go(\.w|od)|gr(ad|un)|haie|hcit|hd\-(m|p|t)|hei\-|hi(pt|ta)|hp( i|ip)|hs\-c|ht(c(\-| |_|a|g|p|s|t)|tp)|hu(aw|tc)|i\-(20|go|ma)|i230|iac( |\-|\/)|ibro|idea|ig01|ikom|im1k|inno|ipaq|iris|ja(t|v)a|jbro|jemu|jigs|kddi|keji|kgt( |\/)|klon|kpt |kwc\-|kyo(c|k)|le(no|xi)|lg( g|\/(k|l|u)|50|54|\-[a-w])|libw|lynx|m1\-w|m3ga|m50\/|ma(te|ui|xo)|mc(01|21|ca)|m\-cr|me(rc|ri)|mi(o8|oa|ts)|mmef|mo(01|02|bi|de|do|t(\-| |o|v)|zz)|mt(50|p1|v )|mwbp|mywa|n10[0-2]|n20[2-3]|n30(0|2)|n50(0|2|5)|n7(0(0|1)|10)|ne((c|m)\-|on|tf|wf|wg|wt)|nok(6|i)|nzph|o2im|op(ti|wv)|oran|owg1|p800|pan(a|d|t)|pdxg|pg(13|\-([1-8]|c))|phil|pire|pl(ay|uc)|pn\-2|po(ck|rt|se)|prox|psio|pt\-g|qa\-a|qc(07|12|21|32|60|\-[2-7]|i\-)|qtek|r380|r600|raks|rim9|ro(ve|zo)|s55\/|sa(ge|ma|mm|ms|ny|va)|sc(01|h\-|oo|p\-)|sdk\/|se(c(\-|0|1)|47|mc|nd|ri)|sgh\-|shar|sie(\-|m)|sk\-0|sl(45|id)|sm(al|ar|b3|it|t5)|so(ft|ny)|sp(01|h\-|v\-|v )|sy(01|mb)|t2(18|50)|t6(00|10|18)|ta(gt|lk)|tcl\-|tdg\-|tel(i|m)|tim\-|t\-mo|to(pl|sh)|ts(70|m\-|m3|m5)|tx\-9|up(\.b|g1|si)|utst|v400|v750|veri|vi(rg|te)|vk(40|5[0-3]|\-v)|vm40|voda|vulc|vx(52|53|60|61|70|80|81|83|85|98)|w3c(\-| )|webc|whit|wi(g |nc|nw)|wmlb|wonu|x700|yas\-|your|zeto|zte\-/i,f=function(){function e(){n(this,e)}return i(e,[{key:"phone",value:function(){var e=o();return!(!r.test(e)&&!a.test(e.substr(0,4)))}},{key:"mobile",value:function(){var e=o();return!(!u.test(e)&&!c.test(e.substr(0,4)))}},{key:"tablet",value:function(){return this.mobile()&&!this.phone()}}]),e}();t.default=new f},function(e,t){"use strict";Object.defineProperty(t,"__esModule",{value:!0});var n=function(e,t,n){var o=e.node.getAttribute("data-aos-once");t>e.position?e.node.classList.add("aos-animate"):"undefined"!=typeof o&&("false"===o||!n&&"true"!==o)&&e.node.classList.remove("aos-animate")},o=function(e,t){var o=window.pageYOffset,i=window.innerHeight;e.forEach(function(e,r){n(e,i+o,t)})};t.default=o},function(e,t,n){"use strict";function o(e){return e&&e.__esModule?e:{default:e}}Object.defineProperty(t,"__esModule",{value:!0});var i=n(12),r=o(i),a=function(e,t){return e.forEach(function(e,n){e.node.classList.add("aos-init"),e.position=(0,r.default)(e.node,t.offset)}),e};t.default=a},function(e,t,n){"use strict";function o(e){return e&&e.__esModule?e:{default:e}}Object.defineProperty(t,"__esModule",{value:!0});var i=n(13),r=o(i),a=function(e,t){var n=0,o=0,i=window.innerHeight,a={offset:e.getAttribute("data-aos-offset"),anchor:e.getAttribute("data-aos-anchor"),anchorPlacement:e.getAttribute("data-aos-anchor-placement")};switch(a.offset&&!isNaN(a.offset)&&(o=parseInt(a.offset)),a.anchor&&document.querySelectorAll(a.anchor)&&(e=document.querySelectorAll(a.anchor)[0]),n=(0,r.default)(e).top,a.anchorPlacement){case"top-bottom":break;case"center-bottom":n+=e.offsetHeight/2;break;case"bottom-bottom":n+=e.offsetHeight;break;case"top-center":n+=i/2;break;case"bottom-center":n+=i/2+e.offsetHeight;break;case"center-center":n+=i/2+e.offsetHeight/2;break;case"top-top":n+=i;break;case"bottom-top":n+=e.offsetHeight+i;break;case"center-top":n+=e.offsetHeight/2+i}return a.anchorPlacement||a.offset||isNaN(t)||(o=t),n+o};t.default=a},function(e,t){"use strict";Object.defineProperty(t,"__esModule",{value:!0});var n=function(e){for(var t=0,n=0;e&&!isNaN(e.offsetLeft)&&!isNaN(e.offsetTop);)t+=e.offsetLeft-("BODY"!=e.tagName?e.scrollLeft:0),n+=e.offsetTop-("BODY"!=e.tagName?e.scrollTop:0),e=e.offsetParent;return{top:n,left:t}};t.default=n},function(e,t){"use strict";Object.defineProperty(t,"__esModule",{value:!0});var n=function(e){return e=e||document.querySelectorAll("[data-aos]"),Array.prototype.map.call(e,function(e){return{node:e}})};t.default=n}])});

//Galeria
;window.Modernizr=function(a,b,c){function x(a){j.cssText=a}function y(a,b){return x(prefixes.join(a+";")+(b||""))}function z(a,b){return typeof a===b}function A(a,b){return!!~(""+a).indexOf(b)}function B(a,b){for(var d in a){var e=a[d];if(!A(e,"-")&&j[e]!==c)return b=="pfx"?e:!0}return!1}function C(a,b,d){for(var e in a){var f=b[a[e]];if(f!==c)return d===!1?a[e]:z(f,"function")?f.bind(d||b):f}return!1}function D(a,b,c){var d=a.charAt(0).toUpperCase()+a.slice(1),e=(a+" "+n.join(d+" ")+d).split(" ");return z(b,"string")||z(b,"undefined")?B(e,b):(e=(a+" "+o.join(d+" ")+d).split(" "),C(e,b,c))}var d="2.6.2",e={},f=!0,g=b.documentElement,h="modernizr",i=b.createElement(h),j=i.style,k,l={}.toString,m="Webkit Moz O ms",n=m.split(" "),o=m.toLowerCase().split(" "),p={},q={},r={},s=[],t=s.slice,u,v={}.hasOwnProperty,w;!z(v,"undefined")&&!z(v.call,"undefined")?w=function(a,b){return v.call(a,b)}:w=function(a,b){return b in a&&z(a.constructor.prototype[b],"undefined")},Function.prototype.bind||(Function.prototype.bind=function(b){var c=this;if(typeof c!="function")throw new TypeError;var d=t.call(arguments,1),e=function(){if(this instanceof e){var a=function(){};a.prototype=c.prototype;var f=new a,g=c.apply(f,d.concat(t.call(arguments)));return Object(g)===g?g:f}return c.apply(b,d.concat(t.call(arguments)))};return e}),p.csstransitions=function(){return D("transition")};for(var E in p)w(p,E)&&(u=E.toLowerCase(),e[u]=p[E](),s.push((e[u]?"":"no-")+u));return e.addTest=function(a,b){if(typeof a=="object")for(var d in a)w(a,d)&&e.addTest(d,a[d]);else{a=a.toLowerCase();if(e[a]!==c)return e;b=typeof b=="function"?b():b,typeof f!="undefined"&&f&&(g.className+=" "+(b?"":"no-")+a),e[a]=b}return e},x(""),i=k=null,function(a,b){function k(a,b){var c=a.createElement("p"),d=a.getElementsByTagName("head")[0]||a.documentElement;return c.innerHTML="x<style>"+b+"</style>",d.insertBefore(c.lastChild,d.firstChild)}function l(){var a=r.elements;return typeof a=="string"?a.split(" "):a}function m(a){var b=i[a[g]];return b||(b={},h++,a[g]=h,i[h]=b),b}function n(a,c,f){c||(c=b);if(j)return c.createElement(a);f||(f=m(c));var g;return f.cache[a]?g=f.cache[a].cloneNode():e.test(a)?g=(f.cache[a]=f.createElem(a)).cloneNode():g=f.createElem(a),g.canHaveChildren&&!d.test(a)?f.frag.appendChild(g):g}function o(a,c){a||(a=b);if(j)return a.createDocumentFragment();c=c||m(a);var d=c.frag.cloneNode(),e=0,f=l(),g=f.length;for(;e<g;e++)d.createElement(f[e]);return d}function p(a,b){b.cache||(b.cache={},b.createElem=a.createElement,b.createFrag=a.createDocumentFragment,b.frag=b.createFrag()),a.createElement=function(c){return r.shivMethods?n(c,a,b):b.createElem(c)},a.createDocumentFragment=Function("h,f","return function(){var n=f.cloneNode(),c=n.createElement;h.shivMethods&&("+l().join().replace(/\w+/g,function(a){return b.createElem(a),b.frag.createElement(a),'c("'+a+'")'})+");return n}")(r,b.frag)}function q(a){a||(a=b);var c=m(a);return r.shivCSS&&!f&&!c.hasCSS&&(c.hasCSS=!!k(a,"article,aside,figcaption,figure,footer,header,hgroup,nav,section{display:block}mark{background:#FF0;color:#000}")),j||p(a,c),a}var c=a.html5||{},d=/^<|^(?:button|map|select|textarea|object|iframe|option|optgroup)$/i,e=/^(?:a|b|code|div|fieldset|h1|h2|h3|h4|h5|h6|i|label|li|ol|p|q|span|strong|style|table|tbody|td|th|tr|ul)$/i,f,g="_html5shiv",h=0,i={},j;(function(){try{var a=b.createElement("a");a.innerHTML="<xyz></xyz>",f="hidden"in a,j=a.childNodes.length==1||function(){b.createElement("a");var a=b.createDocumentFragment();return typeof a.cloneNode=="undefined"||typeof a.createDocumentFragment=="undefined"||typeof a.createElement=="undefined"}()}catch(c){f=!0,j=!0}})();var r={elements:c.elements||"abbr article aside audio bdi canvas data datalist details figcaption figure footer header hgroup mark meter nav output progress section summary time video",shivCSS:c.shivCSS!==!1,supportsUnknownElements:j,shivMethods:c.shivMethods!==!1,type:"default",shivDocument:q,createElement:n,createDocumentFragment:o};a.html5=r,q(b)}(this,b),e._version=d,e._domPrefixes=o,e._cssomPrefixes=n,e.testProp=function(a){return B([a])},e.testAllProps=D,g.className=g.className.replace(/(^|\s)no-js(\s|$)/,"$1$2")+(f?" js "+s.join(" "):""),e}(this,this.document),function(a,b,c){function d(a){return"[object Function]"==o.call(a)}function e(a){return"string"==typeof a}function f(){}function g(a){return!a||"loaded"==a||"complete"==a||"uninitialized"==a}function h(){var a=p.shift();q=1,a?a.t?m(function(){("c"==a.t?B.injectCss:B.injectJs)(a.s,0,a.a,a.x,a.e,1)},0):(a(),h()):q=0}function i(a,c,d,e,f,i,j){function k(b){if(!o&&g(l.readyState)&&(u.r=o=1,!q&&h(),l.onload=l.onreadystatechange=null,b)){"img"!=a&&m(function(){t.removeChild(l)},50);for(var d in y[c])y[c].hasOwnProperty(d)&&y[c][d].onload()}}var j=j||B.errorTimeout,l=b.createElement(a),o=0,r=0,u={t:d,s:c,e:f,a:i,x:j};1===y[c]&&(r=1,y[c]=[]),"object"==a?l.data=c:(l.src=c,l.type=a),l.width=l.height="0",l.onerror=l.onload=l.onreadystatechange=function(){k.call(this,r)},p.splice(e,0,u),"img"!=a&&(r||2===y[c]?(t.insertBefore(l,s?null:n),m(k,j)):y[c].push(l))}function j(a,b,c,d,f){return q=0,b=b||"j",e(a)?i("c"==b?v:u,a,b,this.i++,c,d,f):(p.splice(this.i++,0,a),1==p.length&&h()),this}function k(){var a=B;return a.loader={load:j,i:0},a}var l=b.documentElement,m=a.setTimeout,n=b.getElementsByTagName("script")[0],o={}.toString,p=[],q=0,r="MozAppearance"in l.style,s=r&&!!b.createRange().compareNode,t=s?l:n.parentNode,l=a.opera&&"[object Opera]"==o.call(a.opera),l=!!b.attachEvent&&!l,u=r?"object":l?"script":"img",v=l?"script":u,w=Array.isArray||function(a){return"[object Array]"==o.call(a)},x=[],y={},z={timeout:function(a,b){return b.length&&(a.timeout=b[0]),a}},A,B;B=function(a){function b(a){var a=a.split("!"),b=x.length,c=a.pop(),d=a.length,c={url:c,origUrl:c,prefixes:a},e,f,g;for(f=0;f<d;f++)g=a[f].split("="),(e=z[g.shift()])&&(c=e(c,g));for(f=0;f<b;f++)c=x[f](c);return c}function g(a,e,f,g,h){var i=b(a),j=i.autoCallback;i.url.split(".").pop().split("?").shift(),i.bypass||(e&&(e=d(e)?e:e[a]||e[g]||e[a.split("/").pop().split("?")[0]]),i.instead?i.instead(a,e,f,g,h):(y[i.url]?i.noexec=!0:y[i.url]=1,f.load(i.url,i.forceCSS||!i.forceJS&&"css"==i.url.split(".").pop().split("?").shift()?"c":c,i.noexec,i.attrs,i.timeout),(d(e)||d(j))&&f.load(function(){k(),e&&e(i.origUrl,h,g),j&&j(i.origUrl,h,g),y[i.url]=2})))}function h(a,b){function c(a,c){if(a){if(e(a))c||(j=function(){var a=[].slice.call(arguments);k.apply(this,a),l()}),g(a,j,b,0,h);else if(Object(a)===a)for(n in m=function(){var b=0,c;for(c in a)a.hasOwnProperty(c)&&b++;return b}(),a)a.hasOwnProperty(n)&&(!c&&!--m&&(d(j)?j=function(){var a=[].slice.call(arguments);k.apply(this,a),l()}:j[n]=function(a){return function(){var b=[].slice.call(arguments);a&&a.apply(this,b),l()}}(k[n])),g(a[n],j,b,n,h))}else!c&&l()}var h=!!a.test,i=a.load||a.both,j=a.callback||f,k=j,l=a.complete||f,m,n;c(h?a.yep:a.nope,!!i),i&&c(i)}var i,j,l=this.yepnope.loader;if(e(a))g(a,0,l,0);else if(w(a))for(i=0;i<a.length;i++)j=a[i],e(j)?g(j,0,l,0):w(j)?B(j):Object(j)===j&&h(j,l);else Object(a)===a&&h(a,l)},B.addPrefix=function(a,b){z[a]=b},B.addFilter=function(a){x.push(a)},B.errorTimeout=1e4,null==b.readyState&&b.addEventListener&&(b.readyState="loading",b.addEventListener("DOMContentLoaded",A=function(){b.removeEventListener("DOMContentLoaded",A,0),b.readyState="complete"},0)),a.yepnope=k(),a.yepnope.executeStack=h,a.yepnope.injectJs=function(a,c,d,e,i,j){var k=b.createElement("script"),l,o,e=e||B.errorTimeout;k.src=a;for(o in d)k.setAttribute(o,d[o]);c=j?h:c||f,k.onreadystatechange=k.onload=function(){!l&&g(k.readyState)&&(l=1,c(),k.onload=k.onreadystatechange=null)},m(function(){l||(l=1,c(1))},e),i?k.onload():n.parentNode.insertBefore(k,n)},a.yepnope.injectCss=function(a,c,d,e,g,i){var e=b.createElement("link"),j,c=i?h:c||f;e.href=a,e.rel="stylesheet",e.type="text/css";for(j in d)e.setAttribute(j,d[j]);g||(n.parentNode.insertBefore(e,n),m(c,0))}}(this,document),Modernizr.load=function(){yepnope.apply(window,[].slice.call(arguments,0))};

// Hover Thumbs
(function(c,b,d){c.HoverDir=function(e,f){this.$el=c(f);this._init(e)};c.HoverDir.defaults={speed:300,easing:"ease",hoverDelay:0,inverse:false};c.HoverDir.prototype={_init:function(e){this.options=c.extend(true,{},c.HoverDir.defaults,e);this.transitionProp="all "+this.options.speed+"ms "+this.options.easing;this.support=Modernizr.csstransitions;this._loadEvents()},_loadEvents:function(){var e=this;this.$el.on("mouseenter.hoverdir, mouseleave.hoverdir",function(i){var g=c(this),f=g.find("div"),j=e._getDir(g,{x:i.pageX,y:i.pageY}),h=e._getStyle(j);if(i.type==="mouseenter"){f.hide().css(h.from);clearTimeout(e.tmhover);e.tmhover=setTimeout(function(){f.show(0,function(){var k=c(this);if(e.support){k.css("transition",e.transitionProp)}e._applyAnimation(k,h.to,e.options.speed)})},e.options.hoverDelay)}else{if(e.support){f.css("transition",e.transitionProp)}clearTimeout(e.tmhover);e._applyAnimation(f,h.from,e.options.speed)}})},_getDir:function(g,k){var f=g.width(),i=g.height(),e=(k.x-g.offset().left-(f/2))*(f>i?(i/f):1),l=(k.y-g.offset().top-(i/2))*(i>f?(f/i):1),j=Math.round((((Math.atan2(l,e)*(180/Math.PI))+180)/90)+3)%4;return j},_getStyle:function(k){var g,l,i={left:"0px",top:"-100%"},e={left:"0px",top:"100%"},h={left:"-100%",top:"0px"},f={left:"100%",top:"0px"},m={top:"0px"},j={left:"0px"};switch(k){case 0:g=!this.options.inverse?i:e;l=m;break;case 1:g=!this.options.inverse?f:h;l=j;break;case 2:g=!this.options.inverse?e:i;l=m;break;case 3:g=!this.options.inverse?h:f;l=j;break}return{from:g,to:l}},_applyAnimation:function(f,e,g){c.fn.applyStyle=this.support?c.fn.css:c.fn.animate;f.stop().applyStyle(e,c.extend(true,[],{duration:g+"ms"}))},};var a=function(e){if(b.console){b.console.error(e)}};c.fn.hoverdir=function(g){var e=c.data(this,"hoverdir");if(typeof g==="string"){var f=Array.prototype.slice.call(arguments,1);this.each(function(){if(!e){a("cannot call methods on hoverdir prior to initialization; attempted to call method '"+g+"'");return}if(!c.isFunction(e[g])||g.charAt(0)==="_"){a("no such method '"+g+"' for hoverdir instance");return}e[g].apply(e,f)})}else{this.each(function(){if(e){e._init()}else{e=c.data(this,"hoverdir",new c.HoverDir(g,this))}})}return e}})(jQuery,window);(function(e){if(typeof define==="function"&&define.amd){define(["jquery"],e)}else{e(jQuery)}})(function(e){function n(e){return u.raw?e:encodeURIComponent(e)}function r(e){return u.raw?e:decodeURIComponent(e)}function i(e){return n(u.json?JSON.stringify(e):String(e))}function s(e){if(e.indexOf('"')===0){e=e.slice(1,-1).replace(/\\"/g,'"').replace(/\\\\/g,"\\")}try{e=decodeURIComponent(e.replace(t," "));return u.json?JSON.parse(e):e}catch(n){}}function o(t,n){var r=u.raw?t:s(t);return e.isFunction(n)?n(r):r}var t=/\+/g;var u=e.cookie=function(t,s,a){if(s!==undefined&&!e.isFunction(s)){a=e.extend({},u.defaults,a);if(typeof a.expires==="number"){var f=a.expires,l=a.expires=new Date;l.setTime(+l+f*864e5)}return document.cookie=[n(t),"=",i(s),a.expires?"; expires="+a.expires.toUTCString():"",a.path?"; path="+a.path:"",a.domain?"; domain="+a.domain:"",a.secure?"; secure":""].join("")}var c=t?undefined:{};var h=document.cookie?document.cookie.split("; "):[];for(var p=0,d=h.length;p<d;p++){var v=h[p].split("=");var m=r(v.shift());var g=v.join("=");if(t&&t===m){c=o(g,s);break}if(!t&&(g=o(g))!==undefined){c[m]=g}}return c};u.defaults={};e.removeCookie=function(t,n){if(e.cookie(t)===undefined){return false}e.cookie(t,"",e.extend({},n,{expires:-1}));return!e.cookie(t)}});function getCookie(b){var c,a,e,d=document.cookie.split(";");for(c=0;c<d.length;c++){a=d[c].substr(0,d[c].indexOf("="));e=d[c].substr(d[c].indexOf("=")+1);a=a.replace(/^\s+|\s+$/g,"");if(a==b){return unescape(e)}}};

// Lightbox
/*! Swipebox v1.5.2 | Constantin Saguin csag.co | MIT License | github.com/brutaldesign/swipebox */

;( function ( window, document, $, undefined ) {

    $.swipebox = function( elem, options ) {

        $( elem ).addClass( 'swipebox' ); // fugly but yea, swipebox class all the things

        // Default options
        var ui,
            defaults = {
                useCSS : true,
                useSVG : true,
                initialIndexOnArray : 0,
                removeBarsOnMobile : true,
                hideCloseButtonOnMobile : false,
                hideBarsDelay : 3000,
                videoMaxWidth : 1140,
                vimeoColor : 'cccccc',
                beforeOpen: null,
                afterOpen: null,
                afterClose: null,
                afterMedia: null,
                nextSlide: null,
                prevSlide: null,
                loopAtEnd: false,
                autoplayVideos: false,
                queryStringData: {},
                toggleClassOnLoad: ''
            },

            plugin = this,
            elements = [], // slides array [ { href:'...', title:'...' }, ...],
            $elem,
            selector = '.swipebox',
            isMobile = navigator.userAgent.match( /(iPad)|(iPhone)|(iPod)|(Android)|(PlayBook)|(BB10)|(BlackBerry)|(Opera Mini)|(IEMobile)|(webOS)|(MeeGo)/i ),
            isTouch = isMobile !== null || document.createTouch !== undefined || ( 'ontouchstart' in window ) || ( 'onmsgesturechange' in window ) || navigator.msMaxTouchPoints,
            supportSVG = !! document.createElementNS && !! document.createElementNS( 'http://www.w3.org/2000/svg', 'svg').createSVGRect,
            winWidth = window.innerWidth ? window.innerWidth : $( window ).width(),
            winHeight = window.innerHeight ? window.innerHeight : $( window ).height(),
            currentX = 0,
            /* jshint multistr: true */
            html = '<div id="swipebox-overlay">\
					<div id="swipebox-container">\
						<div id="swipebox-slider"></div>\
						<div id="swipebox-top-bar">\
							<div id="swipebox-title"></div>\
						</div>\
						<div id="swipebox-bottom-bar">\
							<div id="swipebox-arrows">\
								<a id="swipebox-prev"><i class="las la-arrow-circle-left"></i></a>\
								<a id="swipebox-next"><i class="las la-arrow-circle-right"></i></a>\
							</div>\
						</div>\
						<a id="swipebox-close"><i class="lar la-times-circle"></i></a>\
					</div>\
			</div>';

        plugin.settings = {};

        $.swipebox.close = function () {
            ui.closeSlide();
        };

        $.swipebox.extend = function () {
            return ui;
        };

        plugin.init = function() {

            plugin.settings = $.extend( {}, defaults, options );

            if ( Array.isArray( elem ) ) {

                elements = elem;
                ui.target = $( window );
                ui.init( plugin.settings.initialIndexOnArray );

            } else {

                $( document ).on( 'click', selector, function( event ) {

                    // console.log( isTouch );

                    if ( event.target.parentNode.className === 'slide current' ) {

                        return false;
                    }

                    if ( ! Array.isArray( elem ) ) {
                        ui.destroy();
                        $elem = $( selector );
                        ui.actions();
                    }

                    elements = [];
                    var index, relType, relVal;

                    // Allow for HTML5 compliant attribute before legacy use of rel
                    if ( ! relVal ) {
                        relType = 'data-rel';
                        relVal = $( this ).attr( relType );
                    }

                    if ( ! relVal ) {
                        relType = 'rel';
                        relVal = $( this ).attr( relType );
                    }

                    if ( relVal && relVal !== '' && relVal !== 'nofollow' ) {
                        $elem = $( selector ).filter( '[' + relType + '="' + relVal + '"]' );
                    } else {
                        $elem = $( selector );
                    }

                    $elem.each( function() {

                        var title = null,
                            href = null;

                        if ( $( this ).attr( 'title' ) ) {
                            title = $( this ).attr( 'title' );
                        }

                        if ( $( this ).attr( 'href' ) ) {
                            href = $( this ).attr( 'href' );
                        }

                        elements.push( {
                            href: href,
                            title: title
                        } );
                    } );

                    index = $elem.index( $( this ) );
                    event.preventDefault();
                    event.stopPropagation();
                    ui.target = $( event.target );
                    ui.init( index );
                } );
            }
        };

        ui = {

            /**
             * Initiate Swipebox
             */
            init : function( index ) {
                if ( plugin.settings.beforeOpen ) {
                    plugin.settings.beforeOpen();
                }
                this.target.trigger( 'swipebox-start' );
                $.swipebox.isOpen = true;
                this.build();
                this.openSlide( index );
                this.openMedia( index );
                this.preloadMedia( index+1 );
                this.preloadMedia( index-1 );
                if ( plugin.settings.afterOpen ) {
                    plugin.settings.afterOpen(index);
                }
            },

            /**
             * Built HTML containers and fire main functions
             */
            build : function () {
                var $this = this, bg;

                $( 'body' ).append( html );

                if ( supportSVG && plugin.settings.useSVG === true ) {
                    bg = $( '#swipebox-close' ).css( 'background-image' );
                    bg = bg.replace( 'png', 'svg' );
                    $( '#swipebox-prev, #swipebox-next, #swipebox-close' ).css( {
                        'background-image' : bg
                    } );
                }

                if ( isMobile && plugin.settings.removeBarsOnMobile ) {
                    $( '#swipebox-bottom-bar, #swipebox-top-bar' ).remove();
                }

                $.each( elements,  function() {
                    $( '#swipebox-slider' ).append( '<div class="slide"></div>' );
                } );

                $this.setDim();
                $this.actions();

                if ( isTouch ) {
                    $this.gesture();
                }

                // Devices can have both touch and keyboard input so always allow key events
                $this.keyboard();

                $this.animBars();
                $this.resize();

            },

            /**
             * Set dimensions depending on windows width and height
             */
            setDim : function () {

                var width, height, sliderCss = {};

                // Reset dimensions on mobile orientation change
                if ( 'onorientationchange' in window ) {

                    window.addEventListener( 'orientationchange', function() {
                        if ( window.orientation === 0 ) {
                            width = winWidth;
                            height = winHeight;
                        } else if ( window.orientation === 90 || window.orientation === -90 ) {
                            width = winHeight;
                            height = winWidth;
                        }
                    }, false );


                } else {

                    width = window.innerWidth ? window.innerWidth : $( window ).width();
                    height = window.innerHeight ? window.innerHeight : $( window ).height();
                }

                sliderCss = {
                    width : width,
                    height : height
                };

                $( '#swipebox-overlay' ).css( sliderCss );

            },

            /**
             * Reset dimensions on window resize envent
             */
            resize : function () {
                var $this = this;

                $( window ).resize( function() {
                    $this.setDim();
                } ).resize();
            },

            /**
             * Check if device supports CSS transitions
             */
            supportTransition : function () {

                var prefixes = 'transition WebkitTransition MozTransition OTransition msTransition KhtmlTransition'.split( ' ' ),
                    i;

                for ( i = 0; i < prefixes.length; i++ ) {
                    if ( document.createElement( 'div' ).style[ prefixes[i] ] !== undefined ) {
                        return prefixes[i];
                    }
                }
                return false;
            },

            /**
             * Check if CSS transitions are allowed (options + devicesupport)
             */
            doCssTrans : function () {
                if ( plugin.settings.useCSS && this.supportTransition() ) {
                    return true;
                }
            },

            /**
             * Touch navigation
             */
            gesture : function () {

                var $this = this,
                    index,
                    hDistance,
                    vDistance,
                    hDistanceLast,
                    vDistanceLast,
                    hDistancePercent,
                    vSwipe = false,
                    hSwipe = false,
                    hSwipMinDistance = 10,
                    vSwipMinDistance = 50,
                    startCoords = {},
                    endCoords = {},
                    bars = $( '#swipebox-top-bar, #swipebox-bottom-bar' ),
                    slider = $( '#swipebox-slider' );

                bars.addClass( 'visible-bars' );
                $this.setTimeout();

                $( 'body' ).bind( 'touchstart', function( event ) {

                    $( this ).addClass( 'touching' );
                    index = $( '#swipebox-slider .slide' ).index( $( '#swipebox-slider .slide.current' ) );
                    endCoords = event.originalEvent.targetTouches[0];
                    startCoords.pageX = event.originalEvent.targetTouches[0].pageX;
                    startCoords.pageY = event.originalEvent.targetTouches[0].pageY;

                    $( '#swipebox-slider' ).css( {
                        '-webkit-transform' : 'translate3d(' + currentX +'%, 0, 0)',
                        'transform' : 'translate3d(' + currentX + '%, 0, 0)'
                    } );

                    $( '.touching' ).bind( 'touchmove',function( event ) {
                        event.preventDefault();
                        event.stopPropagation();
                        endCoords = event.originalEvent.targetTouches[0];

                        if ( ! hSwipe ) {
                            vDistanceLast = vDistance;
                            vDistance = endCoords.pageY - startCoords.pageY;
                            if ( Math.abs( vDistance ) >= vSwipMinDistance || vSwipe ) {
                                var opacity = 0.75 - Math.abs(vDistance) / slider.height();

                                slider.css( { 'top': vDistance + 'px' } );
                                slider.css( { 'opacity': opacity } );

                                vSwipe = true;
                            }
                        }

                        hDistanceLast = hDistance;
                        hDistance = endCoords.pageX - startCoords.pageX;
                        hDistancePercent = hDistance * 100 / winWidth;

                        if ( ! hSwipe && ! vSwipe && Math.abs( hDistance ) >= hSwipMinDistance ) {
                            $( '#swipebox-slider' ).css( {
                                '-webkit-transition' : '',
                                'transition' : ''
                            } );
                            hSwipe = true;
                        }

                        if ( hSwipe ) {

                            // swipe left
                            if ( 0 < hDistance ) {

                                // first slide
                                if ( 0 === index ) {
                                    // console.log( 'first' );
                                    $( '#swipebox-overlay' ).addClass( 'leftSpringTouch' );
                                } else {
                                    // Follow gesture
                                    $( '#swipebox-overlay' ).removeClass( 'leftSpringTouch' ).removeClass( 'rightSpringTouch' );
                                    $( '#swipebox-slider' ).css( {
                                        '-webkit-transform' : 'translate3d(' + ( currentX + hDistancePercent ) +'%, 0, 0)',
                                        'transform' : 'translate3d(' + ( currentX + hDistancePercent ) + '%, 0, 0)'
                                    } );
                                }

                                // swipe right
                            } else if ( 0 > hDistance ) {

                                // last Slide
                                if ( elements.length === index +1 ) {
                                    // console.log( 'last' );
                                    $( '#swipebox-overlay' ).addClass( 'rightSpringTouch' );
                                } else {
                                    $( '#swipebox-overlay' ).removeClass( 'leftSpringTouch' ).removeClass( 'rightSpringTouch' );
                                    $( '#swipebox-slider' ).css( {
                                        '-webkit-transform' : 'translate3d(' + ( currentX + hDistancePercent ) +'%, 0, 0)',
                                        'transform' : 'translate3d(' + ( currentX + hDistancePercent ) + '%, 0, 0)'
                                    } );
                                }

                            }
                        }
                    } );

                    return false;

                } ).bind( 'touchend',function( event ) {
                    event.preventDefault();
                    event.stopPropagation();

                    $( '#swipebox-slider' ).css( {
                        '-webkit-transition' : '-webkit-transform 0.4s ease',
                        'transition' : 'transform 0.4s ease'
                    } );

                    vDistance = endCoords.pageY - startCoords.pageY;
                    hDistance = endCoords.pageX - startCoords.pageX;
                    hDistancePercent = hDistance*100/winWidth;

                    // Swipe to bottom to close
                    if ( vSwipe ) {
                        vSwipe = false;
                        if ( Math.abs( vDistance ) >= 2 * vSwipMinDistance && Math.abs( vDistance ) > Math.abs( vDistanceLast ) ) {
                            var vOffset = vDistance > 0 ? slider.height() : - slider.height();
                            slider.animate( { top: vOffset + 'px', 'opacity': 0 },
                                300,
                                function () {
                                    $this.closeSlide();
                                } );
                        } else {
                            slider.animate( { top: 0, 'opacity': 1 }, 300 );
                        }

                    } else if ( hSwipe ) {

                        hSwipe = false;

                        // swipeLeft
                        if( hDistance >= hSwipMinDistance && hDistance >= hDistanceLast) {

                            $this.getPrev();

                            // swipeRight
                        } else if ( hDistance <= -hSwipMinDistance && hDistance <= hDistanceLast) {

                            $this.getNext();
                        }

                    } else { // Top and bottom bars have been removed on touchable devices
                        // tap
                        if ( ! bars.hasClass( 'visible-bars' ) ) {
                            $this.showBars();
                            $this.setTimeout();
                        } else {
                            $this.clearTimeout();
                            $this.hideBars();
                        }
                    }

                    $( '#swipebox-slider' ).css( {
                        '-webkit-transform' : 'translate3d(' + currentX + '%, 0, 0)',
                        'transform' : 'translate3d(' + currentX + '%, 0, 0)'
                    } );

                    $( '#swipebox-overlay' ).removeClass( 'leftSpringTouch' ).removeClass( 'rightSpringTouch' );
                    $( '.touching' ).off( 'touchmove' ).removeClass( 'touching' );

                } );
            },

            /**
             * Set timer to hide the action bars
             */
            setTimeout: function () {
                if ( plugin.settings.hideBarsDelay > 0 ) {
                    var $this = this;
                    $this.clearTimeout();
                    $this.timeout = window.setTimeout( function() {
                            $this.hideBars();
                        },

                        plugin.settings.hideBarsDelay
                    );
                }
            },

            /**
             * Clear timer
             */
            clearTimeout: function () {
                window.clearTimeout( this.timeout );
                this.timeout = null;
            },

            /**
             * Show navigation and title bars
             */
            showBars : function () {
                var bars = $( '#swipebox-top-bar, #swipebox-bottom-bar' );
                if ( this.doCssTrans() ) {
                    bars.addClass( 'visible-bars' );
                } else {
                    $( '#swipebox-top-bar' ).animate( { top : 0 }, 500 );
                    $( '#swipebox-bottom-bar' ).animate( { bottom : 0 }, 500 );
                    setTimeout( function() {
                        bars.addClass( 'visible-bars' );
                    }, 1000 );
                }
            },

            /**
             * Hide navigation and title bars
             */
            hideBars : function () {
                var bars = $( '#swipebox-top-bar, #swipebox-bottom-bar' );
                if ( this.doCssTrans() ) {
                    bars.removeClass( 'visible-bars' );
                } else {
                    $( '#swipebox-top-bar' ).animate( { top : '-50px' }, 500 );
                    $( '#swipebox-bottom-bar' ).animate( { bottom : '-50px' }, 500 );
                    setTimeout( function() {
                        bars.removeClass( 'visible-bars' );
                    }, 1000 );
                }
            },

            /**
             * Animate navigation and top bars
             */
            animBars : function () {
                var $this = this,
                    bars = $( '#swipebox-top-bar, #swipebox-bottom-bar' );

                bars.addClass( 'visible-bars' );
                $this.setTimeout();

                $( '#swipebox-slider' ).click( function() {
                    if ( ! bars.hasClass( 'visible-bars' ) ) {
                        $this.showBars();
                        $this.setTimeout();
                    }
                } );

                $( '#swipebox-bottom-bar' ).hover( function() {
                    $this.showBars();
                    bars.addClass( 'visible-bars' );
                    $this.clearTimeout();

                }, function() {
                    if ( plugin.settings.hideBarsDelay > 0 ) {
                        bars.removeClass( 'visible-bars' );
                        $this.setTimeout();
                    }

                } );
            },

            /**
             * Keyboard navigation
             */
            keyboard : function () {
                var $this = this;
                $( window ).bind( 'keyup', function( event ) {
                    event.preventDefault();
                    event.stopPropagation();

                    if ( event.keyCode === 37 ) {

                        $this.getPrev();

                    } else if ( event.keyCode === 39 ) {

                        $this.getNext();

                    } else if ( event.keyCode === 27 ) {

                        $this.closeSlide();
                    }
                } );
            },

            /**
             * Navigation events : go to next slide, go to prevous slide and close
             */
            actions : function () {
                var $this = this,
                    action = 'touchend click'; // Just detect for both event types to allow for multi-input

                if ( elements.length < 2 ) {

                    $( '#swipebox-bottom-bar' ).hide();

                    if ( undefined === elements[ 1 ] ) {
                        $( '#swipebox-top-bar' ).hide();
                    }

                } else {
                    $( '#swipebox-prev' ).bind( action, function( event ) {
                        event.preventDefault();
                        event.stopPropagation();
                        $this.getPrev();
                        $this.setTimeout();
                    } );

                    $( '#swipebox-next' ).bind( action, function( event ) {
                        event.preventDefault();
                        event.stopPropagation();
                        $this.getNext();
                        $this.setTimeout();
                    } );
                }

                $( '#swipebox-close' ).bind( action, function( event ) {
                    event.preventDefault();
                    event.stopPropagation();
                    $this.closeSlide();
                } );
            },

            /**
             * Set current slide
             */
            setSlide : function ( index, isFirst ) {

                isFirst = isFirst || false;

                var slider = $( '#swipebox-slider' );

                currentX = -index*100;

                if ( this.doCssTrans() ) {
                    slider.css( {
                        '-webkit-transform' : 'translate3d(' + (-index*100)+'%, 0, 0)',
                        'transform' : 'translate3d(' + (-index*100)+'%, 0, 0)'
                    } );
                } else {
                    slider.animate( { left : ( -index*100 )+'%' } );
                }

                $( '#swipebox-slider .slide' ).removeClass( 'current' );
                $( '#swipebox-slider .slide' ).eq( index ).addClass( 'current' );
                this.setTitle( index );

                if ( isFirst ) {
                    slider.fadeIn();
                }

                $( '#swipebox-prev, #swipebox-next' ).removeClass( 'disabled' );

                if ( index === 0 ) {
                    $( '#swipebox-prev' ).addClass( 'disabled' );
                } else if ( index === elements.length - 1 && plugin.settings.loopAtEnd !== true ) {
                    $( '#swipebox-next' ).addClass( 'disabled' );
                }
            },

            /**
             * Open slide
             */
            openSlide : function ( index ) {
                $( 'html' ).addClass( 'swipebox-html' );
                if ( isTouch ) {
                    $( 'html' ).addClass( 'swipebox-touch' );

                    if ( plugin.settings.hideCloseButtonOnMobile ) {
                        $( 'html' ).addClass( 'swipebox-no-close-button' );
                    }
                } else {
                    $( 'html' ).addClass( 'swipebox-no-touch' );
                }
                $( window ).trigger( 'resize' ); // fix scroll bar visibility on desktop
                this.setSlide( index, true );
            },

            /**
             * Set a time out if the media is a video
             */
            preloadMedia : function ( index ) {
                var $this = this,
                    src = null;

                if ( elements[ index ] !== undefined ) {
                    src = elements[ index ].href;
                }

                if ( ! $this.isVideo( src ) ) {
                    setTimeout( function() {
                        $this.openMedia( index );
                    }, 1000);
                } else {
                    $this.openMedia( index );
                }
            },

            /**
             * Open
             */
            openMedia : function ( index ) {
                var $this = this,
                    src,
                    slide;

                if ( elements[ index ] !== undefined ) {
                    src = elements[ index ].href;
                }

                if ( index < 0 || index >= elements.length ) {
                    return false;
                }

                slide = $( '#swipebox-slider .slide' ).eq( index );

                if ( ! $this.isVideo( src ) ) {
                    slide.addClass( 'slide-loading' );
                    $this.loadMedia( src, function() {
                        slide.removeClass( 'slide-loading' );
                        slide.html( this );

                        if ( plugin.settings.afterMedia ) {
                            plugin.settings.afterMedia( index );
                        }
                    } );
                } else {
                    slide.html( $this.getVideo( src ) );

                    if ( plugin.settings.afterMedia ) {
                        plugin.settings.afterMedia( index );
                    }
                }

            },

            /**
             * Set link title attribute as caption
             */
            setTitle : function ( index ) {
                var title = null;

                $( '#swipebox-title' ).empty();

                if ( elements[ index ] !== undefined ) {
                    title = elements[ index ].title;
                }

                if ( title ) {
                    $( '#swipebox-top-bar' ).show();
                    $( '#swipebox-title' ).append( title );
                } else {
                    $( '#swipebox-top-bar' ).hide();
                }
            },

            /**
             * Check if the URL is a video
             */
            isVideo : function ( src ) {

                if ( src ) {
                    if ( src.match( /(youtube\.com|youtube-nocookie\.com)\/watch\?v=([a-zA-Z0-9\-_]+)/) || src.match( /vimeo\.com\/([0-9]*)/ ) || src.match( /youtu\.be\/([a-zA-Z0-9\-_]+)/ ) ) {
                        return true;
                    }

                    if ( src.toLowerCase().indexOf( 'swipeboxvideo=1' ) >= 0 ) {
                        return true;
                    }
                }
            },

            /**
             * Parse URI querystring and:
             * - overrides value provided via dictionary
             * - rebuild it again returning a string
             */
            parseUri : function (uri, customData) {
                var a = document.createElement('a'),
                    qs = {};

                // Decode the URI
                a.href = decodeURIComponent( uri );

                // QueryString to Object
                if ( a.search ) {
                    qs = JSON.parse( '{"' + a.search.toLowerCase().replace('?','').replace(/&/g,'","').replace(/=/g,'":"') + '"}' );
                }

                // Extend with custom data
                if ( $.isPlainObject( customData ) ) {
                    qs = $.extend( qs, customData, plugin.settings.queryStringData ); // The dev has always the final word
                }

                // Return querystring as a string
                return $
                    .map( qs, function (val, key) {
                        if ( val && val > '' ) {
                            return encodeURIComponent( key ) + '=' + encodeURIComponent( val );
                        }
                    })
                    .join('&');
            },

            /**
             * Get video iframe code from URL
             */
            getVideo : function( url ) {
                var iframe = '',
                    youtubeUrl = url.match( /((?:www\.)?youtube\.com|(?:www\.)?youtube-nocookie\.com)\/watch\?v=([a-zA-Z0-9\-_]+)/ ),
                    youtubeShortUrl = url.match(/(?:www\.)?youtu\.be\/([a-zA-Z0-9\-_]+)/),
                    vimeoUrl = url.match( /(?:www\.)?vimeo\.com\/([0-9]*)/ ),
                    qs = '';

                if ( youtubeUrl || youtubeShortUrl) {
                    if ( youtubeShortUrl ) {
                        youtubeUrl = youtubeShortUrl;
                    }

                    console.log( youtubeUrl );

                    qs = ui.parseUri( url, {
                        'autoplay' : ( plugin.settings.autoplayVideos ? '1' : '0' ),
                        'v' : ''
                    });
                    iframe = '<iframe width="560" height="315" src="https://' + youtubeUrl[1] + '/embed/' + youtubeUrl[2] + '?' + qs + '" frameborder="0" allowfullscreen></iframe>';

                } else if ( vimeoUrl ) {
                    qs = ui.parseUri( url, {
                        'autoplay' : ( plugin.settings.autoplayVideos ? '1' : '0' ),
                        'byline' : '0',
                        'portrait' : '0',
                        'color': plugin.settings.vimeoColor
                    });
                    iframe = '<iframe width="560" height="315"  src="//player.vimeo.com/video/' + vimeoUrl[1] + '?' + qs + '" frameborder="0" webkitAllowFullScreen mozallowfullscreen allowFullScreen></iframe>';

                } else {
                    iframe = '<iframe width="560" height="315" src="' + url + '" frameborder="0" allowfullscreen></iframe>';
                }

                return '<div class="swipebox-video-container" style="max-width:' + plugin.settings.videoMaxWidth + 'px"><div class="swipebox-video">' + iframe + '</div></div>';
            },

            /**
             * Load image
             */
            loadMedia : function ( src, callback ) {
                // Inline content
                if ( src.trim().indexOf('#') === 0 ) {
                    callback.call(
                        $('<div>', {
                            'class' : 'swipebox-inline-container'
                        })
                            .append(
                                $(src)
                                    .clone()
                                    .toggleClass( plugin.settings.toggleClassOnLoad )
                            )
                    );
                }
                // Everything else
                else {
                    if ( ! this.isVideo( src ) ) {
                        var img = $( '<img>' ).on( 'load', function() {
                            callback.call( img );
                        } );

                        img.attr( 'src', src );
                    }
                }
            },

            /**
             * Get next slide
             */
            getNext : function () {
                var $this = this,
                    src,
                    index = $( '#swipebox-slider .slide' ).index( $( '#swipebox-slider .slide.current' ) );
                if ( index + 1 < elements.length ) {

                    src = $( '#swipebox-slider .slide' ).eq( index ).contents().find( 'iframe' ).attr( 'src' );
                    $( '#swipebox-slider .slide' ).eq( index ).contents().find( 'iframe' ).attr( 'src', src );
                    index++;
                    $this.setSlide( index );
                    $this.preloadMedia( index+1 );
                    if ( plugin.settings.nextSlide ) {
                        plugin.settings.nextSlide(index);
                    }
                } else {

                    if ( plugin.settings.loopAtEnd === true ) {
                        src = $( '#swipebox-slider .slide' ).eq( index ).contents().find( 'iframe' ).attr( 'src' );
                        $( '#swipebox-slider .slide' ).eq( index ).contents().find( 'iframe' ).attr( 'src', src );
                        index = 0;
                        $this.preloadMedia( index );
                        $this.setSlide( index );
                        $this.preloadMedia( index + 1 );
                        if ( plugin.settings.nextSlide ) {
                            plugin.settings.nextSlide(index);
                        }
                    } else {
                        $( '#swipebox-overlay' ).addClass( 'rightSpring' );
                        setTimeout( function() {
                            $( '#swipebox-overlay' ).removeClass( 'rightSpring' );
                        }, 500 );
                    }
                }
            },

            /**
             * Get previous slide
             */
            getPrev : function () {
                var index = $( '#swipebox-slider .slide' ).index( $( '#swipebox-slider .slide.current' ) ),
                    src;
                if ( index > 0 ) {
                    src = $( '#swipebox-slider .slide' ).eq( index ).contents().find( 'iframe').attr( 'src' );
                    $( '#swipebox-slider .slide' ).eq( index ).contents().find( 'iframe' ).attr( 'src', src );
                    index--;
                    this.setSlide( index );
                    this.preloadMedia( index-1 );
                    if ( plugin.settings.prevSlide ) {
                        plugin.settings.prevSlide(index);
                    }
                } else {
                    $( '#swipebox-overlay' ).addClass( 'leftSpring' );
                    setTimeout( function() {
                        $( '#swipebox-overlay' ).removeClass( 'leftSpring' );
                    }, 500 );
                }
            },
            /* jshint unused:false */
            nextSlide : function ( index ) {
                // Callback for next slide
            },

            prevSlide : function ( index ) {
                // Callback for prev slide
            },

            /**
             * Close
             */
            closeSlide : function () {
                $( 'html' ).removeClass( 'swipebox-html' );
                $( 'html' ).removeClass( 'swipebox-touch' );
                $( window ).trigger( 'resize' );
                this.destroy();
            },

            /**
             * Destroy the whole thing
             */
            destroy : function () {
                $( window ).unbind( 'keyup' );
                $( 'body' ).unbind( 'touchstart' );
                $( 'body' ).unbind( 'touchmove' );
                $( 'body' ).unbind( 'touchend' );
                $( '#swipebox-slider' ).unbind();
                $( '#swipebox-overlay' ).remove();

                if ( ! Array.isArray( elem ) ) {
                    elem.removeData( '_swipebox' );
                }

                if ( this.target ) {
                    this.target.trigger( 'swipebox-destroy' );
                }

                $.swipebox.isOpen = false;

                if ( plugin.settings.afterClose ) {
                    plugin.settings.afterClose();
                }
            }
        };

        plugin.init();
    };

    $.fn.swipebox = function( options ) {

        if ( ! $.data( this, '_swipebox' ) ) {
            var swipebox = new $.swipebox( this, options );
            this.data( '_swipebox', swipebox );
        }
        return this.data( '_swipebox' );

    };

}( window, document, jQuery ) );

function makeWidget(){$('body').append('<div id="viewport" style="position:fixed;right:0;bottom:0;padding:10px 15px;background:white;font-size:11px;-webkit-box-shadow: 0px 0px 5px 0px rgba(0,0,0,0.75);-moz-box-shadow: 0px 0px 5px 0px rgba(0,0,0,0.75);box-shadow: 0px 0px 5px 0px rgba(0,0,0,0.75);line-height:normal"><div class="viewportHeader" style="cursor:pointer;min-width:100px">RWD Helper</div><div class="viewportBody" style="display:none"><table id="viewport-width" style="border-collapse: collapse;margin-top:5px"><tbody><tr><td><code style="font-family: SFMono-Regular,Menlo,Monaco,Consolas,Liberation Mono,Courier New,monospace;word-break: break-word;padding: 0.2rem 0.4rem;font-size: 90%;color: #bd4147;background-color: #f8f9fa;border-radius: 0.25rem">verge<wbr>.viewportW()</code></td><td id="output-vw"></td></tr><tr><td><code style="font-family: SFMono-Regular,Menlo,Monaco,Consolas,Liberation Mono,Courier New,monospace;word-break: break-word;padding: 0.2rem 0.4rem;font-size: 90%;color: #bd4147;background-color: #f8f9fa;border-radius: 0.25rem">$(window)<wbr>.width()</code></td><td id="output-ww"></td></tr><tr><td><code style="font-family: SFMono-Regular,Menlo,Monaco,Consolas,Liberation Mono,Courier New,monospace;word-break: break-word;padding: 0.2rem 0.4rem;font-size: 90%;color: #bd4147;background-color: #f8f9fa;border-radius: 0.25rem">document.clientWidth</code></td><td id="output-dcw"></td></tr><tr><td><code style="font-family: SFMono-Regular,Menlo,Monaco,Consolas,Liberation Mono,Courier New,monospace;word-break: break-word;padding: 0.2rem 0.4rem;font-size: 90%;color: #bd4147;background-color: #f8f9fa;border-radius: 0.25rem">window<wbr>.innerWidth</code></td><td id="output-wiw"></td></tr><tr><td><code style="font-family: SFMono-Regular,Menlo,Monaco,Consolas,Liberation Mono,Courier New,monospace;word-break: break-word;padding: 0.2rem 0.4rem;font-size: 90%;color: #bd4147;background-color: #f8f9fa;border-radius: 0.25rem">window<wbr>.outerWidth</code></td><td id="output-wow"></td></tr></tbody></table><hr style="border:0;border-top: 1px solid rgba(0,0,0,.1);box-sizing: content-box;height: 0;overflow: visible;margin:5px 0 3px"><table id="viewport-height" style="border-collapse: collapse"><tbody><tr><td><code style="font-family: SFMono-Regular,Menlo,Monaco,Consolas,Liberation Mono,Courier New,monospace;word-break: break-word;padding: 0.2rem 0.4rem;font-size: 90%;color: #bd4147;background-color: #f8f9fa;border-radius: 0.25rem">verge<wbr>.viewportH()</code></td><td id="output-vh"></td></tr><tr><td><code style="font-family: SFMono-Regular,Menlo,Monaco,Consolas,Liberation Mono,Courier New,monospace;word-break: break-word;padding: 0.2rem 0.4rem;font-size: 90%;color: #bd4147;background-color: #f8f9fa;border-radius: 0.25rem">$(window)<wbr>.height()</code></td><td id="output-wh"></td></tr><tr><td><code style="font-family: SFMono-Regular,Menlo,Monaco,Consolas,Liberation Mono,Courier New,monospace;word-break: break-word;padding: 0.2rem 0.4rem;font-size: 90%;color: #bd4147;background-color: #f8f9fa;border-radius: 0.25rem">document.clientHeight</code></td><td id="output-dch"></td></tr><tr><td><code style="font-family: SFMono-Regular,Menlo,Monaco,Consolas,Liberation Mono,Courier New,monospace;word-break: break-word;padding: 0.2rem 0.4rem;font-size: 90%;color: #bd4147;background-color: #f8f9fa;border-radius: 0.25rem">window<wbr>.innerHeight</code></td><td id="output-wih"></td></tr><tr><td><code style="font-family: SFMono-Regular,Menlo,Monaco,Consolas,Liberation Mono,Courier New,monospace;word-break: break-word;padding: 0.2rem 0.4rem;font-size: 90%;color: #bd4147;background-color: #f8f9fa;border-radius: 0.25rem">window<wbr>.outerHeight</code></td><td id="output-woh"></td></tr></tbody></table></div></div>');var viewport=$.cookie("viewport");if(viewport=="visible"){$(".viewportBody").show();$.cookie("viewport","visible")}else{$(".viewportBody").hide();$.cookie("viewport","hidden")}$(".viewportHeader").click(function(){$(".viewportBody").toggle();if($.cookie("viewport")==="visible"){$.cookie("viewport","hidden")}else{$.cookie("viewport","visible")}});}(function(e){if(typeof define==="function"&&define.amd){define(["jquery"],e)}else{e(jQuery)}})(function(e){function n(e){return u.raw?e:encodeURIComponent(e)}function r(e){return u.raw?e:decodeURIComponent(e)}function i(e){return n(u.json?JSON.stringify(e):String(e))}function s(e){if(e.indexOf('"')===0){e=e.slice(1,-1).replace(/\\"/g,'"').replace(/\\\\/g,"\\")}try{e=decodeURIComponent(e.replace(t," "));return u.json?JSON.parse(e):e}catch(n){}}function o(t,n){var r=u.raw?t:s(t);return e.isFunction(n)?n(r):r}var t=/\+/g;var u=e.cookie=function(t,s,a){if(s!==undefined&&!e.isFunction(s)){a=e.extend({},u.defaults,a);if(typeof a.expires==="number"){var f=a.expires,l=a.expires=new Date;l.setTime(+l+f*864e5)}return document.cookie=[n(t),"=",i(s),a.expires?"; expires="+a.expires.toUTCString():"",a.path?"; path="+a.path:"",a.domain?"; domain="+a.domain:"",a.secure?"; secure":""].join("")}var c=t?undefined:{};var h=document.cookie?document.cookie.split("; "):[];for(var p=0,d=h.length;p<d;p++){var v=h[p].split("=");var m=r(v.shift());var g=v.join("=");if(t&&t===m){c=o(g,s);break}if(!t&&(g=o(g))!==undefined){c[m]=g}}return c};u.defaults={};e.removeCookie=function(t,n){if(e.cookie(t)===undefined){return false}e.cookie(t,"",e.extend({},n,{expires:-1}));return!e.cookie(t)}});function getCookie(b){var c,a,e,d=document.cookie.split(";");for(c=0;c<d.length;c++){a=d[c].substr(0,d[c].indexOf("="));e=d[c].substr(d[c].indexOf("=")+1);a=a.replace(/^\s+|\s+$/g,"");if(a==b){return unescape(e)}}};!function(e,d,f){"undefined"!=typeof module&&module.exports?module.exports=f():e[d]=f()}(this,"verge",function(){function x(){return{width:n(),height:m()}}function w(e,d){var f={};return d=+d||0,f.width=(f.right=e.right+d)-(f.left=e.left-d),f.height=(f.bottom=e.bottom+d)-(f.top=e.top-d),f}function v(b,d){return b=b&&!b.nodeType?b[0]:b,b&&1===b.nodeType?w(b.getBoundingClientRect(),d):!1}function u(a){a=null==a?x():1===a.nodeType?v(a):a;var f=a.height,c=a.width;return f="function"==typeof f?f.call(a):f,c="function"==typeof c?c.call(a):c,c/f}var t={},s="undefined"!=typeof window&&window,r="undefined"!=typeof document&&document,q=r&&r.documentElement,p=s.matchMedia||s.msMatchMedia,o=p?function(b){return !!p.call(s,b).matches}:function(){return !1},n=t.viewportW=function(){var d=q.clientWidth,c=s.innerWidth;return c>d?c:d},m=t.viewportH=function(){var d=q.clientHeight,c=s.innerHeight;return c>d?c:d};return t.mq=o,t.matchMedia=p?function(){return p.apply(s,arguments)}:function(){return{}},t.viewport=x,t.scrollX=function(){return s.pageXOffset||q.scrollLeft},t.scrollY=function(){return s.pageYOffset||q.scrollTop},t.rectangle=v,t.aspect=u,t.inX=function(e,c){var f=v(e,c);return !!f&&f.right>=0&&f.left<=n()},t.inY=function(e,c){var f=v(e,c);return !!f&&f.bottom>=0&&f.top<=m()},t.inViewport=function(e,c){var f=v(e,c);return !!f&&f.bottom>=0&&f.right>=0&&f.top<=m()&&f.left<=n()},t});function updateView(){var e=verge.viewportW();var c=verge.viewportH();var j=$(window).width();var f=$(window).height();var g=document.documentElement.clientWidth;var i=document.documentElement.clientHeight;var d=window.innerWidth;var a=window.innerHeight;var b=window.outerWidth;var h=window.outerHeight;$("#output-vw").text(e);$("#output-vh").text(c);$("#output-ww").text(e);$("#output-wh").text(c);$("#output-dcw").text(g);$("#output-dch").text(i);$("#output-wiw").text(d);$("#output-wih").text(a);$("#output-wow").text(b);$("#output-woh").text(h)};$(document).ready(function(){updateView()});$(window).resize(function() {updateView()});

//makeWidget();

document.addEventListener("DOMContentLoaded", function() {
    const header = $('#header');
    const aboveHeight = 20;

    function onScroll() {
        if ($(window).scrollTop() > aboveHeight && !header.hasClass('fixed')) {
            header.addClass('fixed');
            header.css({
                animation: "stickymenu 500ms",
                animationFillMode: "forwards"
            });
        }
        if ($(window).scrollTop() < aboveHeight && header.hasClass('fixed')) {
            header.removeClass('fixed');
            header.removeAttr('style');
        }
    }
    window.addEventListener('scroll', function() {
        requestAnimationFrame(onScroll);
    });

    onScroll();

    const items = document.querySelectorAll(".homepage nav#homepageNav a");
    const sections = document.querySelectorAll('section');

    const observer = new IntersectionObserver((entries) => {
        entries.forEach((e) => {
            if(e.isIntersecting) {
                items.forEach(link => {
                    link.classList.remove('active');
                    if(e.target.id === link.dataset.nav){
                        link.classList.add('active');
                    }
                })
            }
        })
    }, {
        threshold: 0.7,
    });

    sections.forEach((section) => {
        observer.observe(section);
    })

    items.forEach(link => {
        link.addEventListener('click', (e) => {

            let target = e.target.getAttribute('target');
            if(!target){
                e.preventDefault();
                let section = document.getElementById(e.target.dataset.nav);
                let offset = $(section).offset();

                let computedStyle = getComputedStyle(section);
                let padding = parseInt(computedStyle.paddingTop);

                $('html, body').stop().animate({
                    scrollTop: offset.top - aboveHeight + padding - 30
                }, 1500, 'easeInOutExpo', function() {
                    console.log("end");
                    if ($('body').hasClass("openmenu")) {
                        $('body').removeClass("openmenu");
                    }
                });
            }
        });
    });

    var headerHeight = $('#header').outerHeight();
    $(".scroll-to").click(function (e) {
        e.preventDefault();
        const section = $(this).attr('href');
        const offset = $(this).data("offset");
        $('html, body').stop().animate({
            scrollTop: $(section).offset().top - headerHeight - offset
        }, 1500, 'easeInOutExpo');
    });

    $("#triggermenu, .closemenu").click(function(b){
        b.preventDefault();
        $('body').toggleClass('openmenu');
    });
    $("#megamenu-opacity").click(function (event) {
        if ($('body').hasClass("openmenu")) {
            $('body').removeClass("openmenu");
        }
        event.preventDefault();
    });

    // Ruchoma galeria
    $('.col-gallery-thumb').each( function() { $(this).hoverdir(); } );

    // Lightbox
    $( '.swipebox' ).swipebox({useSVG : false});
});
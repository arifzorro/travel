window.Modernizr=function(e,t,n){function r(e){y.cssText=e}function o(e,t){return typeof e===t}function i(e,t){return!!~(""+e).indexOf(t)}function a(e,t){for(var r in e){var o=e[r];if(!i(o,"-")&&y[o]!==n)return"pfx"==t?o:!0}return!1}function s(e,t,r){for(var i in e){var a=t[e[i]];if(a!==n)return r===!1?e[i]:o(a,"function")?a.bind(r||t):a}return!1}function c(e,t,n){var r=e.charAt(0).toUpperCase()+e.slice(1),i=(e+" "+w.join(r+" ")+r).split(" ");return o(t,"string")||o(t,"undefined")?a(i,t):(i=(e+" "+C.join(r+" ")+r).split(" "),s(i,t,n))}var l,u,d,f="2.6.2",p={},m=!0,h=t.documentElement,g="modernizr",v=t.createElement(g),y=v.style,b=({}.toString," -webkit- -moz- -o- -ms- ".split(" ")),E="Webkit Moz O ms",w=E.split(" "),C=E.toLowerCase().split(" "),j={},x=[],S=x.slice,M=function(e,n,r,o){var i,a,s,c,l=t.createElement("div"),u=t.body,d=u||t.createElement("body");if(parseInt(r,10))for(;r--;)s=t.createElement("div"),s.id=o?o[r]:g+(r+1),l.appendChild(s);return i=["&#173;",'<style id="s',g,'">',e,"</style>"].join(""),l.id=g,(u?l:d).innerHTML+=i,d.appendChild(l),u||(d.style.background="",d.style.overflow="hidden",c=h.style.overflow,h.style.overflow="hidden",h.appendChild(d)),a=n(l,e),u?l.parentNode.removeChild(l):(d.parentNode.removeChild(d),h.style.overflow=c),!!a},P={}.hasOwnProperty;d=o(P,"undefined")||o(P.call,"undefined")?function(e,t){return t in e&&o(e.constructor.prototype[t],"undefined")}:function(e,t){return P.call(e,t)},Function.prototype.bind||(Function.prototype.bind=function(e){var t=this;if("function"!=typeof t)throw new TypeError;var n=S.call(arguments,1),r=function(){if(this instanceof r){var o=function(){};o.prototype=t.prototype;var i=new o,a=t.apply(i,n.concat(S.call(arguments)));return Object(a)===a?a:i}return t.apply(e,n.concat(S.call(arguments)))};return r}),j.touch=function(){var n;return"ontouchstart"in e||e.DocumentTouch&&t instanceof DocumentTouch?n=!0:M(["@media (",b.join("touch-enabled),("),g,")","{#modernizr{top:9px;position:absolute}}"].join(""),function(e){n=9===e.offsetTop}),n},j.cssanimations=function(){return c("animationName")},j.csstransforms=function(){return!!c("transform")},j.csstransforms3d=function(){var e=!!c("perspective");return e&&"webkitPerspective"in h.style&&M("@media (transform-3d),(-webkit-transform-3d){#modernizr{left:9px;position:absolute;height:3px;}}",function(t){e=9===t.offsetLeft&&3===t.offsetHeight}),e},j.csstransitions=function(){return c("transition")};for(var A in j)d(j,A)&&(u=A.toLowerCase(),p[u]=j[A](),x.push((p[u]?"":"no-")+u));return p.addTest=function(e,t){if("object"==typeof e)for(var r in e)d(e,r)&&p.addTest(r,e[r]);else{if(e=e.toLowerCase(),p[e]!==n)return p;t="function"==typeof t?t():t,"undefined"!=typeof m&&m&&(h.className+=" "+(t?"":"no-")+e),p[e]=t}return p},r(""),v=l=null,function(e,t){function n(e,t){var n=e.createElement("p"),r=e.getElementsByTagName("head")[0]||e.documentElement;return n.innerHTML="x<style>"+t+"</style>",r.insertBefore(n.lastChild,r.firstChild)}function r(){var e=v.elements;return"string"==typeof e?e.split(" "):e}function o(e){var t=g[e[m]];return t||(t={},h++,e[m]=h,g[h]=t),t}function i(e,n,r){if(n||(n=t),u)return n.createElement(e);r||(r=o(n));var i;return i=r.cache[e]?r.cache[e].cloneNode():p.test(e)?(r.cache[e]=r.createElem(e)).cloneNode():r.createElem(e),i.canHaveChildren&&!f.test(e)?r.frag.appendChild(i):i}function a(e,n){if(e||(e=t),u)return e.createDocumentFragment();n=n||o(e);for(var i=n.frag.cloneNode(),a=0,s=r(),c=s.length;c>a;a++)i.createElement(s[a]);return i}function s(e,t){t.cache||(t.cache={},t.createElem=e.createElement,t.createFrag=e.createDocumentFragment,t.frag=t.createFrag()),e.createElement=function(n){return v.shivMethods?i(n,e,t):t.createElem(n)},e.createDocumentFragment=Function("h,f","return function(){var n=f.cloneNode(),c=n.createElement;h.shivMethods&&("+r().join().replace(/\w+/g,function(e){return t.createElem(e),t.frag.createElement(e),'c("'+e+'")'})+");return n}")(v,t.frag)}function c(e){e||(e=t);var r=o(e);return v.shivCSS&&!l&&!r.hasCSS&&(r.hasCSS=!!n(e,"article,aside,figcaption,figure,footer,header,hgroup,nav,section{display:block}mark{background:#FF0;color:#000}")),u||s(e,r),e}var l,u,d=e.html5||{},f=/^<|^(?:button|map|select|textarea|object|iframe|option|optgroup)$/i,p=/^(?:a|b|code|div|fieldset|h1|h2|h3|h4|h5|h6|i|label|li|ol|p|q|span|strong|style|table|tbody|td|th|tr|ul)$/i,m="_html5shiv",h=0,g={};!function(){try{var e=t.createElement("a");e.innerHTML="<xyz></xyz>",l="hidden"in e,u=1==e.childNodes.length||function(){t.createElement("a");var e=t.createDocumentFragment();return"undefined"==typeof e.cloneNode||"undefined"==typeof e.createDocumentFragment||"undefined"==typeof e.createElement}()}catch(n){l=!0,u=!0}}();var v={elements:d.elements||"abbr article aside audio bdi canvas data datalist details figcaption figure footer header hgroup mark meter nav output progress section summary time video",shivCSS:d.shivCSS!==!1,supportsUnknownElements:u,shivMethods:d.shivMethods!==!1,type:"default",shivDocument:c,createElement:i,createDocumentFragment:a};e.html5=v,c(t)}(this,t),p._version=f,p._prefixes=b,p._domPrefixes=C,p._cssomPrefixes=w,p.testProp=function(e){return a([e])},p.testAllProps=c,p.testStyles=M,p.prefixed=function(e,t,n){return t?c(e,t,n):c(e,"pfx")},h.className=h.className.replace(/(^|\s)no-js(\s|$)/,"$1$2")+(m?" js "+x.join(" "):""),p}(this,this.document),function(e,t,n){function r(e){return"[object Function]"==g.call(e)}function o(e){return"string"==typeof e}function i(){}function a(e){return!e||"loaded"==e||"complete"==e||"uninitialized"==e}function s(){var e=v.shift();y=1,e?e.t?m(function(){("c"==e.t?f.injectCss:f.injectJs)(e.s,0,e.a,e.x,e.e,1)},0):(e(),s()):y=0}function c(e,n,r,o,i,c,l){function u(t){if(!p&&a(d.readyState)&&(b.r=p=1,!y&&s(),d.onload=d.onreadystatechange=null,t)){"img"!=e&&m(function(){w.removeChild(d)},50);for(var r in M[n])M[n].hasOwnProperty(r)&&M[n][r].onload()}}var l=l||f.errorTimeout,d=t.createElement(e),p=0,g=0,b={t:r,s:n,e:i,a:c,x:l};1===M[n]&&(g=1,M[n]=[]),"object"==e?d.data=n:(d.src=n,d.type=e),d.width=d.height="0",d.onerror=d.onload=d.onreadystatechange=function(){u.call(this,g)},v.splice(o,0,b),"img"!=e&&(g||2===M[n]?(w.insertBefore(d,E?null:h),m(u,l)):M[n].push(d))}function l(e,t,n,r,i){return y=0,t=t||"j",o(e)?c("c"==t?j:C,e,t,this.i++,n,r,i):(v.splice(this.i++,0,e),1==v.length&&s()),this}function u(){var e=f;return e.loader={load:l,i:0},e}var d,f,p=t.documentElement,m=e.setTimeout,h=t.getElementsByTagName("script")[0],g={}.toString,v=[],y=0,b="MozAppearance"in p.style,E=b&&!!t.createRange().compareNode,w=E?p:h.parentNode,p=e.opera&&"[object Opera]"==g.call(e.opera),p=!!t.attachEvent&&!p,C=b?"object":p?"script":"img",j=p?"script":C,x=Array.isArray||function(e){return"[object Array]"==g.call(e)},S=[],M={},P={timeout:function(e,t){return t.length&&(e.timeout=t[0]),e}};f=function(e){function t(e){var t,n,r,e=e.split("!"),o=S.length,i=e.pop(),a=e.length,i={url:i,origUrl:i,prefixes:e};for(n=0;a>n;n++)r=e[n].split("="),(t=P[r.shift()])&&(i=t(i,r));for(n=0;o>n;n++)i=S[n](i);return i}function a(e,o,i,a,s){var c=t(e),l=c.autoCallback;c.url.split(".").pop().split("?").shift(),c.bypass||(o&&(o=r(o)?o:o[e]||o[a]||o[e.split("/").pop().split("?")[0]]),c.instead?c.instead(e,o,i,a,s):(M[c.url]?c.noexec=!0:M[c.url]=1,i.load(c.url,c.forceCSS||!c.forceJS&&"css"==c.url.split(".").pop().split("?").shift()?"c":n,c.noexec,c.attrs,c.timeout),(r(o)||r(l))&&i.load(function(){u(),o&&o(c.origUrl,s,a),l&&l(c.origUrl,s,a),M[c.url]=2})))}function s(e,t){function n(e,n){if(e){if(o(e))n||(d=function(){var e=[].slice.call(arguments);f.apply(this,e),p()}),a(e,d,t,0,l);else if(Object(e)===e)for(c in s=function(){var t,n=0;for(t in e)e.hasOwnProperty(t)&&n++;return n}(),e)e.hasOwnProperty(c)&&(!n&&!--s&&(r(d)?d=function(){var e=[].slice.call(arguments);f.apply(this,e),p()}:d[c]=function(e){return function(){var t=[].slice.call(arguments);e&&e.apply(this,t),p()}}(f[c])),a(e[c],d,t,c,l))}else!n&&p()}var s,c,l=!!e.test,u=e.load||e.both,d=e.callback||i,f=d,p=e.complete||i;n(l?e.yep:e.nope,!!u),u&&n(u)}var c,l,d=this.yepnope.loader;if(o(e))a(e,0,d,0);else if(x(e))for(c=0;c<e.length;c++)l=e[c],o(l)?a(l,0,d,0):x(l)?f(l):Object(l)===l&&s(l,d);else Object(e)===e&&s(e,d)},f.addPrefix=function(e,t){P[e]=t},f.addFilter=function(e){S.push(e)},f.errorTimeout=1e4,null==t.readyState&&t.addEventListener&&(t.readyState="loading",t.addEventListener("DOMContentLoaded",d=function(){t.removeEventListener("DOMContentLoaded",d,0),t.readyState="complete"},0)),e.yepnope=u(),e.yepnope.executeStack=s,e.yepnope.injectJs=function(e,n,r,o,c,l){var u,d,p=t.createElement("script"),o=o||f.errorTimeout;p.src=e;for(d in r)p.setAttribute(d,r[d]);n=l?s:n||i,p.onreadystatechange=p.onload=function(){!u&&a(p.readyState)&&(u=1,n(),p.onload=p.onreadystatechange=null)},m(function(){u||(u=1,n(1))},o),c?p.onload():h.parentNode.insertBefore(p,h)},e.yepnope.injectCss=function(e,n,r,o,a,c){var l,o=t.createElement("link"),n=c?s:n||i;o.href=e,o.rel="stylesheet",o.type="text/css";for(l in r)o.setAttribute(l,r[l]);a||(h.parentNode.insertBefore(o,h),m(n,0))}}(this,document),Modernizr.load=function(){yepnope.apply(window,[].slice.call(arguments,0))},Modernizr.addTest("cssfilters",function(){var e=document.createElement("div");return e.style.cssText=Modernizr._prefixes.join("filter:blur(2px); "),!!e.style.length&&(void 0===document.documentMode||document.documentMode>9)});var dtGlobals={};dtGlobals.isMobile=/(Android|webOS|iPhone|iPad|iPod|BlackBerry|IEMobile|Opera Mini|windows phone)/.test(navigator.userAgent),dtGlobals.isAndroid=/(Android)/.test(navigator.userAgent),dtGlobals.isiOS=/(iPhone|iPod|iPad)/.test(navigator.userAgent),dtGlobals.isiPhone=/(iPhone|iPod)/.test(navigator.userAgent),dtGlobals.isiPad=/(iPad)/.test(navigator.userAgent),dtGlobals.isBuggy=navigator.userAgent.match(/AppleWebKit/)&&"undefined"==typeof window.ontouchstart&&!navigator.userAgent.match(/Chrome/),dtGlobals.isWindowsPhone=navigator.userAgent.match(/IEMobile/i),dtGlobals.customColor="red",document.documentElement.className+=dtGlobals.isMobile?" mobile-true":" mobile-false",dtGlobals.logoURL=!1,dtGlobals.logoH=!1,dtGlobals.logoW=!1;
!function(e){var t={};function n(r){if(t[r])return t[r].exports;var o=t[r]={i:r,l:!1,exports:{}};return e[r].call(o.exports,o,o.exports,n),o.l=!0,o.exports}n.m=e,n.c=t,n.d=function(e,t,r){n.o(e,t)||Object.defineProperty(e,t,{enumerable:!0,get:r})},n.r=function(e){"undefined"!=typeof Symbol&&Symbol.toStringTag&&Object.defineProperty(e,Symbol.toStringTag,{value:"Module"}),Object.defineProperty(e,"__esModule",{value:!0})},n.t=function(e,t){if(1&t&&(e=n(e)),8&t)return e;if(4&t&&"object"==typeof e&&e&&e.__esModule)return e;var r=Object.create(null);if(n.r(r),Object.defineProperty(r,"default",{enumerable:!0,value:e}),2&t&&"string"!=typeof e)for(var o in e)n.d(r,o,function(t){return e[t]}.bind(null,o));return r},n.n=function(e){var t=e&&e.__esModule?function(){return e.default}:function(){return e};return n.d(t,"a",t),t},n.o=function(e,t){return Object.prototype.hasOwnProperty.call(e,t)},n.p="",n(n.s=8)}([function(e,t){e.exports=window.wp.element},function(e,t){e.exports=window.wp.htmlEntities},function(e,t){e.exports=window.wp.i18n},function(e,t){e.exports=window.wc.wcSettings},function(e,t){e.exports=window.wc.wcBlocksRegistry},,,,function(e,t,n){"use strict";n.r(t);var r,o=n(0),i=n(4),c=n(2),u=n(3),l=n(1);const s=Object(u.getSetting)("cod_data",{}),a=Object(c.__)("Cash on delivery","woocommerce"),d=Object(l.decodeEntities)(s.title)||a,p=()=>Object(l.decodeEntities)(s.description||""),f={name:"cod",label:Object(o.createElement)(e=>{const{PaymentMethodLabel:t}=e.components;return Object(o.createElement)(t,{text:d})},null),content:Object(o.createElement)(p,null),edit:Object(o.createElement)(p,null),canMakePayment:e=>{let{cartNeedsShipping:t,selectedShippingMethods:n}=e;if(!s.enableForVirtual&&!t)return!1;if(!s.enableForShippingMethods.length)return!0;const r=Object.values(n);return s.enableForShippingMethods.some(e=>r.some(t=>t.includes(e)))},ariaLabel:d,supports:{features:null!==(r=null==s?void 0:s.supports)&&void 0!==r?r:[]}};Object(i.registerPaymentMethod)(f)}]);
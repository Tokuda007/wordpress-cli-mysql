(()=>{"use strict";var e={311:e=>{e.exports=jQuery}},t={};function r(a){var s=t[a];if(void 0!==s)return s.exports;var l=t[a]={exports:{}};return e[a](l,l.exports,r),l.exports}(()=>{const e=r(311);document.addEventListener("DOMContentLoaded",(()=>{var t;t=".ac-notice",document.querySelectorAll(t).forEach((t=>{((e,t,r,a=null)=>{(a||document).addEventListener(e,(e=>{let a=document.querySelectorAll(t);if(a){for(var s=e.target,l=-1;s&&-1===(l=Array.prototype.indexOf.call(a,s));)s=s.parentElement;l>-1&&r.call(s,e)}}))})("click",".ac-notice__dismiss, [data-dismiss], .notice-dismiss",(r=>{r.preventDefault();let a=t.dataset.dismissibleCallback?JSON.parse(t.dataset.dismissibleCallback):null;a&&e.post(ajaxurl,a)}),t)}))}))})()})();
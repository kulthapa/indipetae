var OmekaElasticsearch=function(e){var t={};function n(r){if(t[r])return t[r].exports;var a=t[r]={i:r,l:!1,exports:{}};return e[r].call(a.exports,a,a.exports,n),a.l=!0,a.exports}return n.m=e,n.c=t,n.d=function(e,t,r){n.o(e,t)||Object.defineProperty(e,t,{enumerable:!0,get:r})},n.r=function(e){"undefined"!=typeof Symbol&&Symbol.toStringTag&&Object.defineProperty(e,Symbol.toStringTag,{value:"Module"}),Object.defineProperty(e,"__esModule",{value:!0})},n.t=function(e,t){if(1&t&&(e=n(e)),8&t)return e;if(4&t&&"object"==typeof e&&e&&e.__esModule)return e;var r=Object.create(null);if(n.r(r),Object.defineProperty(r,"default",{enumerable:!0,value:e}),2&t&&"string"!=typeof e)for(var a in e)n.d(r,a,function(t){return e[t]}.bind(null,a));return r},n.n=function(e){var t=e&&e.__esModule?function(){return e.default}:function(){return e};return n.d(t,"a",t),t},n.o=function(e,t){return Object.prototype.hasOwnProperty.call(e,t)},n.p="",n(n.s=0)}([function(e,t,n){"use strict";n.r(t);var r=document.getElementById("indipetae-advanced-search-form"),a=document.getElementById("applied-fields"),o=document.getElementById("indipetae-advanced-search-form__reset-button"),d=new Set,c="adv-select__opt--grayed-out",l="advanced-search__added-field",i=parseInt(document.getElementById("min-date-holder").innerText),u=parseInt(document.getElementById("max-date-holder").innerText);function s(e){e.preventDefault();var t=Array.prototype.slice.call(document.querySelectorAll("#indipetae-advanced-search-form .advanced-search-field__input")),n=Array.prototype.slice.call(document.querySelectorAll("#indipetae-advanced-search-form .advanced-search-field__select")),a=t.concat(n),o=Array.prototype.slice.call(document.querySelectorAll("#indipetae-advanced-search-form .advanced-search-field__range-inputs")),d=[];a.forEach((function(e){e.value&&d.push(e.name+"="+e.value)})),o.forEach((function(e){var t=e.querySelector(".advanced-search-field__input--range__min").value,n=e.querySelector(".advanced-search-field__input--range__max").value,r=e.dataset.field;d.push(r+"[][or]="+t+" – "+n)}));var c=document.querySelector("#indipetae-advanced-search-form #date_min"),l=document.querySelector("#indipetae-advanced-search-form #date_max");(c||l)&&(c=c?parseInt(c.value):"_",l=l?parseInt(l.value):"_",d.push("year="+c+"-"+l));var i=d.join("&");window.location=r.action+"?"+i}function f(e){e.preventDefault(),document.querySelectorAll("."+l).forEach((function(e){e.parentNode.removeChild(e)})),d.clear(),r.reset()}function m(e){e.preventDefault();var t=e.target.dataset.field;if(!d.has(t)){var n,r=document.querySelector("#adv-search__"+t+"_template");r.content?(n=r.content.cloneNode(!0),d.add(t)):n=v(r.innerHTML);var o=Math.random().toString().slice(2,11),c=n.querySelector("[id]"),s=n.querySelector("label"),f=n.querySelector(".advanced-search-field ");n.querySelector("label").innerText;c.id=c.id+"_"+o,f.classList.add(l),s.setAttribute("for",c.id),!function(e){var t=h(e);return document.querySelectorAll(t).length>0}(t)?a.appendChild(n):(n.querySelector("label").innerHTML='<span class="advanced-search-field__or-label">or</span>',p(function(e){var t=h(e),n=document.querySelectorAll(t);return n.length>0?n[n.length-1]:null}(t),n));var y=document.getElementById("add-"+t+"-button");y&&y.parentNode.removeChild(y),p(f,function(e,t){return v('<div class="row">\n<div class="col-md-8">\n<button id="add-'+e+'-button" class="add-query-row-button" data-field="'+e+'">+</button>\n</div>\n</div>')}(t)),document.getElementById("add-"+t+"-button").addEventListener("click",m),$(".adv-search-field--date_range #"+c.id).daterangepicker({showDropdowns:!0,startDate:i+"/1/1",endDate:u+"/12/31",locale:{format:"YYYY-MM-DD",separator:" – "},minYear:i,maxYear:u})}}function p(e,t){e.parentNode.insertBefore(t,e.nextSibling)}function v(e){var t=document.createDocumentFragment(),n=document.createElement("div");for(n.innerHTML=e;n.childNodes[0];)t.appendChild(n.childNodes[0]);return t}function y(e){e.target.matches(".advanced-search-field__delete-button")&&(e.preventDefault(),function(e){if(e.matches(".advanced-search-field__delete-button")){var t=e.dataset.field,n=h(t),r=function(e){var t=h(e);return document.querySelectorAll(t).length>1}(t),a=document.querySelector(n+" label").innerHTML;e.parentNode.parentNode.remove(),r?document.querySelector(n+" label").innerHTML=a:(d.delete(t),document.getElementById("add-"+t+"-button").remove()),o=t,document.querySelector(".adv-select__opt--"+o).classList.remove(c)}var o}(e.target))}function h(e){return"#applied-fields .adv-search-field--"+e}function _(e){window.location.href=e.target.value}!function(){if("function"==typeof NodeList.prototype.forEach)return!1;NodeList.prototype.forEach=Array.prototype.forEach}(),Element.prototype.matches||(Element.prototype.matches=Element.prototype.matchesSelector||Element.prototype.mozMatchesSelector||Element.prototype.msMatchesSelector||Element.prototype.oMatchesSelector||Element.prototype.webkitMatchesSelector||function(e){for(var t=(this.document||this.ownerDocument).querySelectorAll(e),n=t.length;--n>=0&&t.item(n)!==this;);return n>-1});t.default={resultSorter:function(){document.addEventListener("DOMContentLoaded",(function(){document.getElementById("indipetae-sort-select").addEventListener("change",_)}))},advancedSearch:function(){document.addEventListener("DOMContentLoaded",(function(){r.addEventListener("submit",s),o.addEventListener("click",f),a.addEventListener("click",y),document.querySelectorAll(".adv-select__opt").forEach((function(e){e.addEventListener("click",m)}))}))}}}]).default;
//# sourceMappingURL=indipetae.bundle.js.map
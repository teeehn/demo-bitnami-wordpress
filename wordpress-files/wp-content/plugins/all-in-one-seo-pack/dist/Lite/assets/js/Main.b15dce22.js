var m=Object.defineProperty,v=Object.defineProperties;var d=Object.getOwnPropertyDescriptors;var r=Object.getOwnPropertySymbols;var f=Object.prototype.hasOwnProperty,g=Object.prototype.propertyIsEnumerable;var i=(t,n,e)=>n in t?m(t,n,{enumerable:!0,configurable:!0,writable:!0,value:e}):t[n]=e,o=(t,n)=>{for(var e in n||(n={}))f.call(n,e)&&i(t,e,n[e]);if(r)for(var e of r(n))g.call(n,e)&&i(t,e,n[e]);return t},a=(t,n)=>v(t,d(n));import"./ToolsSettings.cc636f56.js";import{d as $,f as h,j as x}from"./index.01898232.js";import{R as S,a as y}from"./RequiresUpdate.76e69211.js";import{n as s}from"./vueComponentNormalizer.87056a83.js";import{C as k}from"./Index.56ef3e9e.js";import A from"./Overview.cfc76032.js";import"./RequiresUpdate.33501e39.js";/* empty css             */import"./params.bea1a08d.js";import"./Header.c813b01a.js";import"./LicenseKeyBar.0d9de81d.js";import"./LogoGear.0c3dd5e3.js";import"./AnimatedNumber.b6059bfd.js";import"./index.460e1b4b.js";import"./client.93f15631.js";import"./Logo.1a5e022a.js";import"./QuestionMark.83ebd18e.js";import"./Support.b1f25bbd.js";import"./Tabs.23386ef9.js";import"./TruSeoScore.a520926e.js";import"./Information.f4b75b56.js";import"./Slide.f5d21606.js";import"./Close.5e7bcb70.js";import"./Exclamation.356738ce.js";import"./Url.781a1d48.js";import"./Gear.c974e953.js";import"./Blur.8490ecd2.js";import"./Row.13b6f3f1.js";import"./Card.77d72357.js";import"./Tooltip.674a9fb4.js";import"./InternalOutbound.0e3ee7df.js";import"./DonutChartWithLegend.fe87aad2.js";import"./SeoSiteScore.8753b911.js";import"./Row.b5e5f12f.js";import"./Index.c7d3532f.js";import"./Index.17df93e8.js";var M=function(){var t=this,n=t.$createElement,e=t._self._c||n;return e("div")},R=[];const P={},c={};var b=s(P,M,R,!1,E,null,null,null);function E(t){for(let n in c)this[n]=c[n]}var j=function(){return b.exports}(),T=function(){var t=this,n=t.$createElement,e=t._self._c||n;return e("div")},F=[];const w={},u={};var C=s(w,T,F,!1,L,null,null,null);function L(t){for(let n in u)this[n]=u[n]}var U=function(){return C.exports}(),q=function(){var t=this,n=t.$createElement,e=t._self._c||n;return e("div")},D=[];const N={},p={};var z=s(N,q,D,!1,O,null,null,null);function O(t){for(let n in p)this[n]=p[n]}var V=function(){return z.exports}(),B=function(){var t=this,n=t.$createElement,e=t._self._c||n;return e("div")},G=[];const H={},l={};var I=s(H,B,G,!1,J,null,null,null);function J(t){for(let n in l)this[n]=l[n]}var K=function(){return I.exports}(),Q=function(){var t=this,n=t.$createElement,e=t._self._c||n;return e("div",{staticClass:"aioseo-link-assistant"},[e("core-main",{attrs:{"page-name":t.strings.pageName,"exclude-tabs":t.excludedTabs,showTabs:t.$route.name!=="post-report"}},[e(t.$route.name,{tag:"component"})],1),e("transition",{attrs:{name:"fade-processing-popup"}},[t.suggestionsScan.showProcessingPopup&&(t.$route.name==="links-report"||t.$route.name==="overview")&&t.suggestionsScan.percent!==100?e("core-processing-popup",{on:{"close-processing-popup":t.toggleProcessingPopup}}):t._e()],1)],1)},W=[];const X={components:{CoreMain:k,DomainsReport:j,LinksReport:U,Overview:A,PostReport:V,Settings:K},mixins:[S,y],data(){return{strings:{pageName:"Link Assistant"}}},computed:a(o({},$("linkAssistant",["suggestionsScan"])),{excludedTabs(){const t=(this.$addons.isActive("aioseo-link-assistant")?this.getExcludedUpdateTabs("aioseo-link-assistant"):this.getExcludedActivationTabs("aioseo-link-assistant"))||[];return t.push("post-report"),t}}),methods:o(o({},h("linkAssistant",["toggleProcessingPopup"])),x("linkAssistant",["pollSuggestionsScan","getMenuData"])),mounted(){this.$bus.$on("changes-saved",()=>{this.getMenuData()}),this.$isPro&&this.suggestionsScan.percent!==100&&this.$addons.isActive("aioseo-link-assistant")&&!this.$addons.requiresUpgrade("aioseo-link-assistant")&&this.$addons.hasMinimumVersion("aioseo-link-assistant")&&this.pollSuggestionsScan()}},_={};var Y=s(X,Q,W,!1,Z,null,null,null);function Z(t){for(let n in _)this[n]=_[n]}var qt=function(){return Y.exports}();export{qt as default};

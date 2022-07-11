import{n as o}from"./vueComponentNormalizer.87056a83.js";import{C as _}from"./Blur.8490ecd2.js";import{C as p}from"./SettingsRow.eb71f07b.js";import{S as d}from"./External.8868c638.js";import{C as m}from"./Index.c7d3532f.js";import{C as v}from"./Card.77d72357.js";import{C as f}from"./ProBadge.7c0de2f7.js";import{C as S}from"./Index.17df93e8.js";import{A as $}from"./ToolsSettings.cc636f56.js";import"./index.01898232.js";import"./Row.13b6f3f1.js";import"./index.460e1b4b.js";import"./client.93f15631.js";import"./Tooltip.674a9fb4.js";import"./QuestionMark.83ebd18e.js";import"./Slide.f5d21606.js";const c={data(){return{strings:{customFieldSupport:"Custom Field Support",exclude:"Exclude Pages/Posts",video:"Video Sitemap",description:"The Video Sitemap works in much the same way as the XML Sitemap module, it generates an XML Sitemap specifically for video content on your site. Search engines use this information to display rich snippet information in search results.",enableSitemap:"Enable Sitemap",openSitemap:"Open Video Sitemap",noIndexDisplayed:"Noindexed content will not be displayed in your sitemap.",doYou404:"Do you get a blank sitemap or 404 error?",ctaButtonText:"Upgrade to Pro and Unlock Video Sitemaps",ctaHeader:this.$t.sprintf("Video Sitemaps are only available for licensed %1$s %2$s users.","AIOSEO","Pro"),thisFeatureRequires:"This feature requires one of the following plans:"}}}};var g=function(){var e=this,n=e.$createElement,t=e._self._c||n;return t("div")},h=[];const y={},r={};var x=o(y,g,h,!1,C,null,null,null);function C(e){for(let n in r)this[n]=r[n]}var k=function(){return x.exports}(),b=function(){var e=this,n=e.$createElement,t=e._self._c||n;return t("core-blur",[t("div",{staticClass:"aioseo-settings-row aioseo-section-description"},[e._v(" "+e._s(e.strings.description)+" "),t("span",{domProps:{innerHTML:e._s(e.$links.getDocLink(e.$constants.GLOBAL_STRINGS.learnMore,"videoSitemaps",!0))}})]),t("core-settings-row",{attrs:{name:e.strings.enableSitemap},scopedSlots:e._u([{key:"content",fn:function(){return[t("base-toggle",{attrs:{value:!0}})]},proxy:!0}])}),t("core-settings-row",{attrs:{name:e.$constants.GLOBAL_STRINGS.preview},scopedSlots:e._u([{key:"content",fn:function(){return[t("div",{staticClass:"aioseo-sitemap-preview"},[t("base-button",{attrs:{size:"medium",type:"blue"}},[t("svg-external"),e._v(" "+e._s(e.strings.openSitemap)+" ")],1)],1),t("div",{staticClass:"aioseo-description"},[e._v(" "+e._s(e.strings.noIndexDisplayed)+" "),t("br"),e._v(" "+e._s(e.strings.doYou404)+" "),t("span",{domProps:{innerHTML:e._s(e.$links.getDocLink(e.$constants.GLOBAL_STRINGS.learnMore,"blankSitemap",!0))}})])]},proxy:!0}])})],1)},L=[];const w={components:{CoreBlur:_,CoreSettingsRow:p,SvgExternal:d},mixins:[c]},s={};var A=o(w,b,L,!1,M,null,null,null);function M(e){for(let n in s)this[n]=s[n]}var P=function(){return A.exports}(),R=function(){var e=this,n=e.$createElement,t=e._self._c||n;return t("div",{staticClass:"aioseo-video-sitemap-lite"},[t("core-card",{attrs:{slug:"videoSitemap",noSlide:!0},scopedSlots:e._u([{key:"header",fn:function(){return[e._v(" "+e._s(e.strings.video)+" "),t("core-pro-badge")]},proxy:!0}])},[t("blur"),t("cta",{attrs:{"feature-list":[e.strings.customFieldSupport,e.strings.exclude],"cta-link":e.$links.getPricingUrl("video-sitemap","video-sitemap-upsell"),"button-text":e.strings.ctaButtonText,"learn-more-link":e.$links.getUpsellUrl("video-sitemap",null,"home")},scopedSlots:e._u([{key:"header-text",fn:function(){return[e._v(" "+e._s(e.strings.ctaHeader)+" ")]},proxy:!0},{key:"description",fn:function(){return[e.$isPro&&e.$addons.requiresUpgrade("aioseo-video-sitemap")&&e.$addons.currentPlans("aioseo-video-sitemap")?t("core-alert",{attrs:{type:"red"}},[e._v(" "+e._s(e.strings.thisFeatureRequires)+" "),t("strong",[e._v(e._s(e.$addons.currentPlans("aioseo-video-sitemap")))])]):e._e(),e._v(" "+e._s(e.strings.description)+" ")]},proxy:!0}])})],1)],1)},V=[];const F={components:{Blur:P,CoreAlert:m,CoreCard:v,CoreProBadge:f,Cta:S},mixins:[c]},i={};var E=o(F,R,V,!1,T,null,null,null);function T(e){for(let n in i)this[n]=i[n]}var a=function(){return E.exports}(),U=function(){var e=this,n=e.$createElement,t=e._self._c||n;return t("div")},B=[];const G={},l={};var I=o(G,U,B,!1,O,null,null,null);function O(e){for(let n in l)this[n]=l[n]}var j=function(){return I.exports}(),D=function(){var e=this,n=e.$createElement,t=e._self._c||n;return t("div",{staticClass:"aioseo-video-sitemap"},[e.shouldShowMain?t("video-sitemap"):e._e(),e.shouldShowActivate?t("activate"):e._e(),e.shouldShowUpdate?t("update"):e._e(),e.shouldShowLite?t("lite"):e._e()],1)},q=[];const H={mixins:[$],components:{Activate:k,Lite:a,VideoSitemap:a,Update:j},data(){return{addonSlug:"aioseo-video-sitemap"}}},u={};var N=o(H,D,q,!1,z,null,null,null);function z(e){for(let n in u)this[n]=u[n]}var ue=function(){return N.exports}();export{ue as default};

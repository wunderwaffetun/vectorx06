var y=Object.defineProperty,g=Object.defineProperties;var v=Object.getOwnPropertyDescriptors;var c=Object.getOwnPropertySymbols;var f=Object.prototype.hasOwnProperty,C=Object.prototype.propertyIsEnumerable;var u=(e,s,t)=>s in e?y(e,s,{enumerable:!0,configurable:!0,writable:!0,value:t}):e[s]=t,n=(e,s)=>{for(var t in s||(s={}))f.call(s,t)&&u(e,t,s[t]);if(c)for(var t of c(s))C.call(s,t)&&u(e,t,s[t]);return e},r=(e,s)=>g(e,v(s));import{d as i,e as _,j as h}from"./index.01898232.js";import{C as S}from"./Card.77d72357.js";import{C as A}from"./Tabs.23386ef9.js";import{C as b}from"./SeoSiteAnalysisResults.50e9af01.js";import{p as k}from"./popup.25df8419.js";import"./ToolsSettings.cc636f56.js";import{S as $}from"./SeoSiteScore.8753b911.js";import{n as a}from"./vueComponentNormalizer.87056a83.js";import{C as z}from"./Blur.8490ecd2.js";import{C as O}from"./Index.8ed62ab8.js";import{S as R}from"./Book.b6a9040c.js";import{S as T}from"./Refresh.c697ed05.js";import"./Tooltip.674a9fb4.js";import"./client.93f15631.js";import"./index.460e1b4b.js";import"./QuestionMark.83ebd18e.js";import"./Slide.f5d21606.js";import"./TruSeoScore.a520926e.js";import"./Information.f4b75b56.js";import"./GoogleSearchPreview.bf413128.js";import"./Close.5e7bcb70.js";import"./Gear.c974e953.js";import"./params.bea1a08d.js";var x=function(){var e=this,s=e.$createElement,t=e._self._c||s;return t("div",{staticClass:"aioseo-site-score-analyze"},[e.analyzeError?e._e():t("div",{staticClass:"aioseo-seo-site-score-score"},[t("core-site-score",{attrs:{loading:e.loading,score:e.score,description:e.description}})],1),e.analyzeError?e._e():t("div",{staticClass:"aioseo-seo-site-score-description"},[t("h2",[e._v(e._s(e.strings.yourOverallSiteScore))]),t("div",{domProps:{innerHTML:e._s(e.strings.goodResult)}}),t("div",{domProps:{innerHTML:e._s(e.strings.forBestResults)}}),t("div",{staticClass:"d-flex"},[t("svg-book"),t("a",{attrs:{href:e.$links.getDocUrl("ultimateGuide"),target:"_blank"}},[e._v(e._s(e.strings.readUltimateSeoGuide))])],1)]),e.analyzeError?t("div",{staticClass:"analyze-errors"},[t("h3",[e._v(e._s(e.strings.anErrorOccurred))]),t("span",{domProps:{innerHTML:e._s(e.getError)}})]):e._e()])},E=[];const I={components:{CoreSiteScore:O,SvgBook:R},props:{score:Number,loading:Boolean,description:String,summary:{type:Object,default(){return{}}}},data(){return{strings:{yourOverallSiteScore:"Your Overall Site Score",goodResult:this.$t.sprintf("A very good score is between %1$s%3$d and %4$d%2$s.","<strong>","</strong>",50,75),forBestResults:this.$t.sprintf("For best results, you should strive for %1$s%3$d and above%2$s.","<strong>","</strong>",70),anErrorOccurred:"An error occurred while analyzing your site.",criticalIssues:"Important Issues",warnings:"Warnings",recommendedImprovements:"Recommended Improvements",goodResults:"Good Results",completeSiteAuditChecklist:"Complete Site Audit Checklist",readUltimateSeoGuide:"Read the Ultimate WordPress SEO Guide"}}},computed:r(n({},i(["analyzeError"])),{getError(){switch(this.analyzeError){case"invalid-url":return"The URL provided is invalid.";case"missing-content":return this.$t.sprintf("%1$s %2$s","We were unable to parse the content for this site.",this.$links.getDocLink(this.$constants.GLOBAL_STRINGS.learnMore,"seoAnalyzerIssues",!0));case"invalid-token":return this.$t.sprintf("Your site is not connected. Please connect to %1$s, then try again.","AIOSEO")}return this.analyzeError}})},m={};var G=a(I,x,E,!1,L,null,null,null);function L(e){for(let s in m)this[s]=m[s]}var P=function(){return G.exports}(),w=function(){var e=this,s=e.$createElement,t=e._self._c||s;return t("div",{staticClass:"aioseo-seo-site-score"},[e.internalOptions.internal.siteAnalysis.connectToken?e._e():t("core-blur",[t("core-site-score-analyze",{attrs:{score:85,description:e.description}})],1),e.internalOptions.internal.siteAnalysis.connectToken?e._e():t("div",{staticClass:"aioseo-seo-site-score-cta"},[t("a",{attrs:{href:"#"},on:{click:function(l){return e.openPopup(e.$aioseo.urls.connect)}}},[e._v(e._s(e.connectWithAioseo))]),e._v(" "+e._s(e.strings.toSeeYourSiteScore)+" ")]),e.internalOptions.internal.siteAnalysis.connectToken?t("core-site-score-analyze",{attrs:{score:e.score,description:e.description,loading:e.analyzing,summary:e.getSummary}}):e._e()],1)},M=[];const B={components:{CoreBlur:z,CoreSiteScoreAnalyze:P},mixins:[$],data(){return{score:0}},watch:{"internalOptions.internal.siteAnalysis.score"(e){this.score=e}},computed:r(n(n({},i(["internalOptions","analyzing"])),_(["goodCount","recommendedCount","criticalCount"])),{getSummary(){return{recommended:this.recommendedCount(),critical:this.criticalCount(),good:this.goodCount()}}}),methods:r(n({},h(["saveConnectToken","runSiteAnalyzer"])),{openPopup(e){k(e,this.connectWithAioseo,600,630,!0,["token"],this.completedCallback,this.closedCallback)},completedCallback(e){return this.saveConnectToken(e.token)},closedCallback(e){e&&this.runSiteAnalyzer(),this.$store.commit("analyzing",!0)}}),mounted(){!this.internalOptions.internal.siteAnalysis.score&&this.internalOptions.internal.siteAnalysis.connectToken&&(this.$store.commit("analyzing",!0),this.runSiteAnalyzer()),this.score=this.internalOptions.internal.siteAnalysis.score}},d={};var D=a(B,w,M,!1,U,null,null,null);function U(e){for(let s in d)this[s]=d[s]}var j=function(){return D.exports}(),W=function(){var e=this,s=e.$createElement,t=e._self._c||s;return t("div",{staticClass:"aioseo-seo-audit-checklist"},[t("core-card",{attrs:{slug:"connectOrScore","hide-header":"","no-slide":"",toggles:!1}},[t("core-seo-site-score-analyze")],1),(e.$isPro&&e.options.general.licenseKey||e.internalOptions.internal.siteAnalysis.connectToken)&&e.internalOptions.internal.siteAnalysis.score?t("core-card",{attrs:{slug:"completeSeoChecklist"},scopedSlots:e._u([{key:"header",fn:function(){return[t("span",{staticClass:"card-title"},[e._v(e._s(e.strings.completeSeoChecklist))]),t("base-button",{staticClass:"refresh-results",attrs:{type:"gray",size:"small",loading:e.analyzing},on:{click:e.refresh}},[t("svg-refresh"),e._v(" "+e._s(e.strings.refreshResults)+" ")],1)]},proxy:!0},{key:"tabs",fn:function(){return[t("core-main-tabs",{attrs:{tabs:e.tabs,showSaveButton:!1,active:e.settings.internalTabs.seoAuditChecklist,internal:"","skinny-tabs":""},on:{changed:e.processChangeTab},scopedSlots:e._u([{key:"md-tab",fn:function(l){var o=l.tab;return[t("span",{staticClass:"round",class:o.data.analyze.classColor},[e._v(e._s(o.data.analyze.count||0))]),t("span",{staticClass:"label"},[e._v(e._s(o.label))])]}}],null,!1,1060827092)})]},proxy:!0}],null,!1,4189792867)},[t("core-seo-site-analysis-results",{attrs:{section:e.settings.internalTabs.seoAuditChecklist,"all-results":e.getSiteAnalysisResults,"show-instructions":""}})],1):e._e()],1)},F=[];const H={components:{CoreCard:S,CoreMainTabs:A,CoreSeoSiteAnalysisResults:b,CoreSeoSiteScoreAnalyze:j,SvgRefresh:T},data(){return{internalDebounce:!1,strings:{completeSeoChecklist:"Complete SEO Checklist",refreshResults:"Refresh Results"}}},computed:r(n(n({},i(["internalOptions","options","settings","analyzing"])),_(["getSiteAnalysisResults","allItemsCount","criticalCount","recommendedCount","goodCount"])),{tabs(){const e=this.internalOptions.internal.siteAnalysis;return[{slug:"all-items",name:"All Items",analyze:{classColor:"black",count:e.score?this.allItemsCount():0}},{slug:"critical",name:"Important Issues",analyze:{classColor:"red",count:e.score?this.criticalCount():0}},{slug:"recommended-improvements",name:"Recommended Improvements",analyze:{classColor:"blue",count:e.score?this.recommendedCount():0}},{slug:"good-results",name:"Good Results",analyze:{classColor:"green",count:e.score?this.goodCount():0}}]}}),methods:r(n({},h(["changeTab","runSiteAnalyzer"])),{processChangeTab(e){this.internalDebounce||(this.internalDebounce=!0,this.changeTab({slug:"seoAuditChecklist",value:e}),setTimeout(()=>{this.internalDebounce=!1},50))},refresh(){this.$store.commit("analyzing",!0),this.runSiteAnalyzer({refresh:!0})}})},p={};var Y=a(H,W,F,!1,N,null,null,null);function N(e){for(let s in p)this[s]=p[s]}var ge=function(){return Y.exports}();export{ge as default};

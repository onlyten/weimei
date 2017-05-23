var BMapLib=window.BMapLib=BMapLib||{},BMAPLIB_TAB_SEARCH=0,BMAPLIB_TAB_TO_HER
E=1,BMAPLIB_TAB_FROM_HERE=2;!function(){function
t(t,e){this._point=t,this.guid=e}function e(t){this.iw=t}function i(t){var e=d
ocument.createElement("script");e.setAttribute("type","text/javascript"),e.set
Attribute("src",t),e.addEventListener?e.addEventListener("load",function(t){va
r e=t.target||t.srcElement;e.parentNode.removeChild(e)},!1):e.attachEvent&&e.a
ttachEvent("onreadystatechange",function(){var t=window.event.srcElement;!t||"
loaded"!=t.readyState&&"complete"!=t.readyState||t.parentNode.removeChild(t)})
,setTimeout(function(){document.getElementsByTagName("head")[0].appendChild(e)
,e=null},1)}var n,s=n=s||{version:"1.5.0"};s.guid="$BAIDU$",function(){window[
s.guid]=window[s.guid]||{},s.lang=s.lang||{},s.lang.isString=function(t){retur
n"[object String]"==Object.prototype.toString.call(t)},s.lang.Event=function(t
,e){this.type=t,this.returnValue=!0,this.target=e||null,this.currentTarget=nul
l},s.object=s.object||{},s.extend=s.object.extend=function(t,e){for(var i in
e)e.hasOwnProperty(i)&&(t[i]=e[i]);return t},s.event=s.event||{},s.event._list
eners=s.event._listeners||[],s.dom=s.dom||{},s.dom._g=function(t){return s.lan
g.isString(t)?document.getElementById(t):t},s._g=s.dom._g,s.event.on=function(
t,e,i){e=e.replace(/^on/i,""),t=s.dom._g(t);var n,o=function(e){i.call(t,e)},a
=s.event._listeners,r=s.event._eventFilter,h=e;return e=e.toLowerCase(),r&&r[e
]&&(n=r[e](t,e,o),h=n.type,o=n.listener),t.addEventListener?t.addEventListener
(h,o,!1):t.attachEvent&&t.attachEvent("on"+h,o),a[a.length]=[t,e,i,o,h],t},s.o
n=s.event.on,s.event.un=function(t,e,i){t=s.dom._g(t),e=e.replace(/^on/i,"").t
oLowerCase();for(var n,o,a,r=s.event._listeners,h=r.length,d=!i;h--;)n=r[h],n[
1]!==e||n[0]!==t||!d&&n[2]!==i||(o=n[4],a=n[3],t.removeEventListener?t.removeE
ventListener(o,a,!1):t.detachEvent&&t.detachEvent("on"+o,a),r.splice(h,1));ret
urn t},s.un=s.event.un,s.dom.g=function(t){return"string"==typeof t||t
instanceof String?document.getElementById(t):t&&t.nodeName&&(1==t.nodeType||9=
=t.nodeType)?t:null},s.g=s.G=s.dom.g,s.string=s.string||{},s.browser=s.browser
||{},s.browser.ie=s.ie=/msie
(\d+\.\d+)/i.test(navigator.userAgent)?document.documentMode||+RegExp.$1:void
0,s.dom._NAME_ATTRS=function(){var t={cellpadding:"cellPadding",cellspacing:"c
ellSpacing",colspan:"colSpan",rowspan:"rowSpan",valign:"vAlign",usemap:"useMap
",frameborder:"frameBorder"};return s.browser.ie<8?(t["for"]="htmlFor",t["clas
s"]="className"):(t.htmlFor="for",t.className="class"),t}(),s.dom.setAttr=func
tion(t,e,i){return t=s.dom.g(t),"style"==e?t.style.cssText=i:(e=s.dom._NAME_AT
TRS[e]||e,t.setAttribute(e,i)),t},s.setAttr=s.dom.setAttr,s.dom.setAttrs=funct
ion(t,e){t=s.dom.g(t);for(var i in e)s.dom.setAttr(t,i,e[i]);return
t},s.setAttrs=s.dom.setAttrs,s.dom.create=function(t,e){var
i=document.createElement(t),n=e||{};return s.dom.setAttrs(i,n)},s.cookie=s.coo
kie||{},s.cookie._isValidKey=function(t){return new RegExp('^[^\\x00-\\x20\\x7
f\\(\\)<>@,;:\\\\\\"\\[\\]\\?=\\{\\}\\/\\u0080-\\uffff]+$').test(t)},s.cookie.
getRaw=function(t){if(s.cookie._isValidKey(t)){var e=new RegExp("(^|
)"+t+"=([^;]*)(;|$)"),i=e.exec(document.cookie);if(i)return i[2]||null}return
null},s.cookie.get=function(t){var e=s.cookie.getRaw(t);return"string"==typeof
e?e=decodeURIComponent(e):null},s.cookie.setRaw=function(t,e,i){if(s.cookie._i
sValidKey(t)){i=i||{};var n=i.expires;"number"==typeof i.expires&&(n=new
Date,n.setTime(n.getTime()+i.expires)),document.cookie=t+"="+e+(i.path?";
path="+i.path:"")+(n?"; expires="+n.toGMTString():"")+(i.domain?";
domain="+i.domain:"")+(i.secure?"; secure":"")}},s.cookie.set=function(t,e,i){
s.cookie.setRaw(t,encodeURIComponent(e),i)},s.cookie.remove=function(t,e){e=e|
|{},e.expires=new Date(0),s.cookie.setRaw(t,"",e)},s.isPhone=function(t){retur
n/\d{11}/.test(t)},s.isActivateCode=function(t){return/\d{4}/.test(t)},n.undop
e=!0}();var o=BMapLib.SearchInfoWindow=function(t,e,i){this.guid=r++,BMapLib.S
earchInfoWindow.instance[this.guid]=this,this._isOpen=!1,this._map=t,this._opt
s=i=i||{},this._content=e||"",this._opts.width=i.width,this._opts.height=i.hei
ght,this._opts._title=i.title||"",this._opts.offset=i.offset||new BMap.Size(0,
0),this._opts.enableAutoPan=i.enableAutoPan===!1?!1:!0,this._opts._panel=i.pan
el||null,this._opts._searchTypes=i.searchTypes,this._opts.enableSendToPhone=i.
enableSendToPhone};o.prototype=new BMap.Overlay,o.prototype.initialize=functio
n(t){this._closeOtherSearchInfo();var
e=this,i=this._createSearchTemplate(),n=t.getPanes().floatPane;return n.style.
width="auto",n.appendChild(i),this._initSearchTemplate(),this._getSearchInfoWi
ndowSize(),this._boxWidth=parseInt(this.container.offsetWidth,10),this._boxHei
ght=parseInt(this.container.offsetHeight,10),s.event.on(i,"onmousedown",functi
on(t){e._stopBubble(t)}),s.event.on(i,"ontouchstart",function(t){e._stopBubble
(t)}),s.event.on(i,"touchmove",function(t){e._stopBubble(t)}),s.event.on(i,"to
uchend",function(t){e._stopBubble(t)}),s.event.on(i,"onmouseover",function(t){
e._stopBubble(t)}),s.event.on(i,"click",function(t){e._stopBubble(t)}),s.event
.on(i,"dblclick",function(t){e._stopBubble(t)}),i},o.prototype.draw=function()
{this._isOpen&&this._adjustPosition(this._point)},o.prototype.open=function(t)
{this._map.closeInfoWindow();var e,i=this;this._isOpen||(this._map.addOverlay(
this),this._isOpen=!0,setTimeout(function(){i._dispatchEvent(i,"open",{point:i
._point})},10)),t instanceof
BMap.Point?(e=t,this._removeMarkerEvt(),this._marker=null):t instanceof BMap.M
arker&&(this._marker&&this._removeMarkerEvt(),e=t.getPosition(),this._marker=t
,!this._markerDragend&&this._marker.addEventListener("dragend",this._markerDra
gend=function(t){i._point=t.point,i._adjustPosition(i._point),i._panBox(),i.sh
ow()}),!this._markerDragging&&this._marker.addEventListener("dragging",this._m
arkerDragging=function(){i.hide(),i._point=i._marker.getPosition(),i._adjustPo
sition(i._point)})),this.show(),this._point=e,this._panBox(),this._adjustPosit
ion(this._point)},o.prototype.close=function(){this._isOpen&&(this._map.remove
Overlay(this),this._disposeAutoComplete(),this._isOpen=!1,this._dispatchEvent(
this,"close",{point:this._point}))},o.prototype.enableAutoPan=function(){this.
_opts.enableAutoPan=!0},o.prototype.disableAutoPan=function(){this._opts.enabl
eAutoPan=!1},o.prototype.setContent=function(t){this._setContent(t),this._getS
earchInfoWindowSize(),this._adjustPosition(this._point)},o.prototype.setTitle=
function(t){this.dom.title.innerHTML=t,this._opts._title=t},o.prototype.getCon
tent=function(){return
this.dom.content.innerHTML},o.prototype.getTitle=function(){return this.dom.ti
tle.innerHTML},o.prototype.setPosition=function(t){this._point=t,this._adjustP
osition(t),this._panBox(),this._removeMarkerEvt()},o.prototype.getPosition=fun
ction(){return this._point},o.prototype.getOffset=function(){return this._opts
.offset},s.object.extend(o.prototype,{_closeOtherSearchInfo:function(){for(var
t=BMapLib.SearchInfoWindow.instance,e=t.length;e--;)t[e]._isOpen&&t[e].close()
},_setContent:function(t){if(this.dom&&this.dom.content){"undefined"==typeof
t.nodeType?this.dom.content.innerHTML=t:this.dom.content.appendChild(t);var e=
this;e._adjustContainerWidth(),this._content=t}},_adjustPosition:function(t){v
ar e=this._getPointPosition(t),i=this._marker&&this._marker.getIcon();this._ma
rker?(this.container.style.bottom=-(e.y-this._opts.offset.height-i.anchor.heig
ht+i.infoWindowAnchor.height)-this._marker.getOffset().height+2+30+"px",this.c
ontainer.style.left=e.x-i.anchor.width+this._marker.getOffset().width+i.infoWi
ndowAnchor.width-this._boxWidth/2+28+"px"):(this.container.style.bottom=-(e.y-
this._opts.offset.height)+30+"px",this.container.style.left=e.x-this._boxWidth
/2+25+"px")},_getPointPosition:function(t){return this._pointPosition=this._ma
p.pointToOverlayPixel(t),this._pointPosition},_getSearchInfoWindowSize:functio
n(){this._boxWidth=parseInt(this.container.offsetWidth,10),this._boxHeight=par
seInt(this.container.offsetHeight,10)},_stopBubble:function(t){t&&t.stopPropag
ation?t.stopPropagation():window.event.cancelBubble=!0},_panBox:function(){if(
this._opts.enableAutoPan){var t=parseInt(this._map.getContainer().offsetHeight
,10),e=parseInt(this._map.getContainer().offsetWidth,10),i=this._boxHeight,n=t
his._boxWidth;if(!(i>=t||n>=e)){this._map.getBounds().containsPoint(this._poin
t)||this._map.setCenter(this._point);var s,o,a=this._map.pointToPixel(this._po
int),r=n/2-28-a.x+10,h=n/2+28+a.x-e+10;if(this._marker)var
d=this._marker.getIcon();var c=this._marker?d.anchor.height+this._marker.getOf
fset().height-d.infoWindowAnchor.height:0;s=i-a.y+this._opts.offset.height+c+3
1+10,panX=r>0?r:h>0?-h:0,o=s>0?s:0,this._map.panBy(panX,o)}}},_removeMarkerEvt
:function(){this._markerDragend&&this._marker.removeEventListener("dragend",th
is._markerDragend),this._markerDragging&&this._marker.removeEventListener("dra
gging",this._markerDragging),this._markerDragend=this._markerDragging=null},_d
ispatchEvent:function(t,e,i){0!=e.indexOf("on")&&(e="on"+e);var n=new
s.lang.Event(e);if(i)for(var o in i)n[o]=i[o];t.dispatchEvent(n)},_initSearchT
emplate:function(){this._initDom(),this._initPanelTemplate(),this.setTitle(thi
s._opts._title),this._opts.height&&(this.dom.content.style.height=parseInt(thi
s._opts.height,10)+"px"),this._setContent(this._content),this._initService(),t
his._bind(),this._opts._searchTypes&&this._setSearchTypes(),this._mendIE6()},_
createSearchTemplate:function(){if(!this._div){var t=s.dom.create("div",{"clas
s":"BMapLib_SearchInfoWindow",id:"BMapLib_SearchInfoWindow"+this.guid}),e=['<d
iv class="BMapLib_bubble_top">','<div class="BMapLib_bubble_title"
id="BMapLib_bubble_title'+this.guid+'"></div>','<div
class="BMapLib_bubble_tools">','<div class="BMapLib_bubble_close" title="关闭"
id="BMapLib_bubble_close'+this.guid+'">',"</div>",'<div
class="BMapLib_sendToPhone" title="发送到手机"
id="BMapLib_sendToPhone'+this.guid+'">',"</div>","</div>","</div>",'<div
class="BMapLib_bubble_center">','<div class="BMapLib_bubble_content"
id="BMapLib_bubble_content'+this.guid+'">',"</div>",'<div class="BMapLib_nav"
id="BMapLib_nav'+this.guid+'">','<ul class="BMapLib_nav_tab"
id="BMapLib_nav_tab'+this.guid+'">','<li class="BMapLib_first BMapLib_current"
id="BMapLib_tab_search'+this.guid+'" style="display:block;">','<span
class="BMapLib_icon BMapLib_icon_nbs"></span>在附近找',"</li>",'<li class=""
id="BMapLib_tab_tohere'+this.guid+'" style="display:block;">','<span
class="BMapLib_icon BMapLib_icon_tohere"></span>到这里去',"</li>",'<li class=""
id="BMapLib_tab_fromhere'+this.guid+'" style="display:block;">','<span
class="BMapLib_icon BMapLib_icon_fromhere"></span>从这里出发',"</li>","</ul>",'<ul
class="BMapLib_nav_tab_content">','<li
id="BMapLib_searchBox'+this.guid+'">','<table width="100%" align="center"
border=0 cellpadding=0 cellspacing=0>','<tr><td style="padding-
left:8px;"><input id="BMapLib_search_text'+this.guid+'"
class="BMapLib_search_text" type="text" maxlength="100"
autocomplete="off"></td><td width="55" style="padding-left:7px;"><input
id="BMapLib_search_nb_btn'+this.guid+'" type="submit" value="搜索"
class="iw_bt"></td></tr>',"</table>","</li>",'<li
id="BMapLib_transBox'+this.guid+'" style="display:none">','<table width="100%"
align="center" border=0 cellpadding=0 cellspacing=0>','<tr><td width="30"
style="padding-left:8px;"><div
id="BMapLib_stationText'+this.guid+'">起点</div></td><td><input
id="BMapLib_trans_text'+this.guid+'" class="BMapLib_trans_text" type="text"
maxlength="100" autocomplete="off"></td><td width="106" style="padding-
left:7px;"><input id="BMapLib_search_bus_btn'+this.guid+'" type="button"
value="公交" class="iw_bt" style="margin-right:5px;"><input
id="BMapLib_search_drive_btn'+this.guid+'" type="button" class="iw_bt"
value="驾车"></td></tr>',"</table>","</li>","</ul>","</div>","</div>",'<div
class="BMapLib_bubble_bottom"></div>','<img
src="http://api.map.baidu.com/library/SearchInfoWindow/1.4/src/iw_tail.png"
width="58" height="31" alt="" class="BMapLib_trans"
id="BMapLib_trans'+this.guid+'"
style="left:144px;"/>'];t.innerHTML=e.join(""),this._div=t}return
this._div},_initPanelTemplate:function(){var t=s.g(this._opts._panel);if(!this
.dom.panel&&t){t.innerHTML="",this.dom.panel=t;var e=s.dom.create("div");e.sty
le.cssText="display:none;background:#FD9;height:30px;line-height:30px;text-
align:center;font-
size:12px;color:#994C00;",t.appendChild(e),this.dom.panel.address=e;var i=s.do
m.create("div");t.appendChild(i),this.dom.panel.localSearch=i}},_initDom:funct
ion(){this.dom||(this.dom={container:s.g("BMapLib_SearchInfoWindow"+this.guid)
,content:s.g("BMapLib_bubble_content"+this.guid),title:s.g("BMapLib_bubble_tit
le"+this.guid),closeBtn:s.g("BMapLib_bubble_close"+this.guid),transIco:s.g("BM
apLib_trans"+this.guid),navBox:s.g("BMapLib_nav"+this.guid),navTab:s.g("BMapLi
b_nav_tab"+this.guid),seartTab:s.g("BMapLib_tab_search"+this.guid),tohereTab:s
.g("BMapLib_tab_tohere"+this.guid),fromhereTab:s.g("BMapLib_tab_fromhere"+this
.guid),searchBox:s.g("BMapLib_searchBox"+this.guid),transBox:s.g("BMapLib_tran
sBox"+this.guid),stationText:s.g("BMapLib_stationText"+this.guid),nbBtn:s.g("B
MapLib_search_nb_btn"+this.guid),busBtn:s.g("BMapLib_search_bus_btn"+this.guid
),driveBtn:s.g("BMapLib_search_drive_btn"+this.guid),searchText:s.g("BMapLib_s
earch_text"+this.guid),transText:s.g("BMapLib_trans_text"+this.guid),sendToPho
neBtn:s.g("BMapLib_sendToPhone"+this.guid)},this.container=this.dom.container)
},_adjustContainerWidth:function(){var t=250;this._opts.width?(t=parseInt(this
._opts.width,10),t+=10):t=parseInt(this.dom.content.offsetWidth,10),250>t&&(t=
250),this._width=t,this.container.style.width=this._width+"px",this._adjustTra
nsPosition()},_adjustTransPosition:function(){this.dom.transIco.style.left=thi
s.container.offsetWidth/2-2-29+"px",this.dom.transIco.style.top=this.container
.offsetHeight-2+"px"},_initService:function(){var t=this._map,e=this,i={};i.ma
p=t,this.dom.panel&&(i.panel=this.dom.panel.localSearch),this.localSearch||(th
is.localSearch=new BMap.LocalSearch(t,{renderOptions:i,onSearchComplete:functi
on(){e._clearAddress(),e._drawCircleBound()}})),this.transitRoute||(this.trans
itRoute=new BMap.TransitRoute(t,{renderOptions:i,onSearchComplete:function(t){
e._transitRouteComplete(e.transitRoute,t)}})),this.drivingRoute||(this.driving
Route=new BMap.DrivingRoute(t,{renderOptions:i,onSearchComplete:function(t){e.
_transitRouteComplete(e.drivingRoute,t)}}))},_bind:function(){var t=this;s.on(
this.dom.closeBtn,"click",function(){t.close()}),s.on(this.dom.closeBtn,"touch
start",function(){t.close()}),s.on(this.dom.sendToPhoneBtn,"click",function(){
t._sendToPhone()}),s.on(this.dom.sendToPhoneBtn,"touchstart",function(){t._sen
dToPhone()}),s.on(this.dom.seartTab,"click",function(){t._showTabContent(BMAPL
IB_TAB_SEARCH)}),s.on(this.dom.seartTab,"touchstart",function(){t._showTabCont
ent(BMAPLIB_TAB_SEARCH)}),s.on(this.dom.tohereTab,"click",function(){t._showTa
bContent(BMAPLIB_TAB_TO_HERE)}),s.on(this.dom.tohereTab,"touchstart",function(
){t._showTabContent(BMAPLIB_TAB_TO_HERE)}),s.on(this.dom.fromhereTab,"click",f
unction(){t._showTabContent(BMAPLIB_TAB_FROM_HERE)}),s.on(this.dom.fromhereTab
,"touchstart",function(){t._showTabContent(BMAPLIB_TAB_FROM_HERE)}),s.on(this.
dom.searchText,"click",function(){t._localSearchAction()}),s.on(this.dom.searc
hText,"touchstart",function(){t._localSearchAction()}),s.on(this.dom.nbBtn,"cl
ick",function(){t._localSearchAction()}),s.on(this.dom.nbBtn,"touchstart",func
tion(){t._localSearchAction()}),s.on(this.dom.busBtn,"click",function(){t._tra
nsitRouteAction(t.transitRoute)}),s.on(this.dom.busBtn,"touchstart",function()
{t._transitRouteAction(t.transitRoute)}),s.on(this.dom.driveBtn,"click",functi
on(){t._transitRouteAction(t.drivingRoute)}),s.on(this.dom.driveBtn,"touchstar
t",function(){t._transitRouteAction(t.drivingRoute)}),this._autoCompleteIni(),
this._opts.enableSendToPhone===!1&&(this.dom.sendToPhoneBtn.style.display="non
e")},_showTabContent:function(t){this._hideAutoComplete();for(var e=this.dom.n
avTab.getElementsByTagName("li"),i=e.length,n=0,i=e.length;i>n;n++)e[n].classN
ame="";switch(t){case BMAPLIB_TAB_SEARCH:this.dom.seartTab.className="BMapLib_
current",this.dom.searchBox.style.display="block",this.dom.transBox.style.disp
lay="none";break;case BMAPLIB_TAB_TO_HERE:this.dom.tohereTab.className="BMapLi
b_current",this.dom.searchBox.style.display="none",this.dom.transBox.style.dis
play="block",this.dom.stationText.innerHTML="起点",this._pointType="endPoint";br
eak;case BMAPLIB_TAB_FROM_HERE:this.dom.fromhereTab.className="BMapLib_current
",this.dom.searchBox.style.display="none",this.dom.transBox.style.display="blo
ck",this.dom.stationText.innerHTML="终点",this._pointType="startPoint"}this._fir
stTab.className+="
BMapLib_first"},_autoCompleteIni:function(){this.searchAC=new BMap.Autocomplet
e({input:this.dom.searchText,location:this._map}),this.transAC=new BMap.Autoco
mplete({input:this.dom.transText,location:this._map})},_hideAutoComplete:funct
ion(){this.searchAC.hide(),this.transAC.hide()},_disposeAutoComplete:function(
){this.searchAC.dispose(),this.transAC.dispose()},_localSearchAction:function(
){var t=this._kw=this.dom.searchText.value;if(""==t)this.dom.searchText.focus(
);else{this._reset(),this.close();var e=this._radius=1e3;this.localSearch.sear
chNearby(t,this._point,e)}},_drawCircleBound:function(){this._closeCircleBound
();var e=this._searchCircle=new BMap.Circle(this._point,this._radius,{strokeWe
ight:3,strokeOpacity:.4,strokeColor:"#e00",filColor:"#00e",fillOpacity:.4}),i=
this._searchLabel=new t(this._point,this.guid);this._map.addOverlay(e),this._m
ap.addOverlay(i),this._hasCircle=!0},_changeSearchRadius:function(){var t=pars
eInt(s.g("BMapLib_search_radius"+this.guid).value,10);t>0&&t!=this._radius&&(t
his._radius=t,this.localSearch.searchNearby(this._kw,this._point,t),this._clos
eCircleBound())},_closeCircleBound:function(){this._searchCircle&&this._map.re
moveOverlay(this._searchCircle),this._searchLabel&&this._map.removeOverlay(thi
s._searchLabel),this._hasCircle=!1},_transitRouteAction:function(t){var e=this
.dom.transText.value;if(""==e)this.dom.transText.focus();else{this._reset(),th
is.close();var i=this._getTransPoi(e);t.search(i.start,i.end)}},_transitRouteC
omplete:function(t,e){this._clearAddress();var
i=t.getStatus();if(i==BMAP_STATUS_UNKNOWN_ROUTE){var n=e.getStartStatus(),s=e.
getEndStatus(),o="";o="找不到相关的线路",n==BMAP_ROUTE_STATUS_EMPTY&&s==BMAP_ROUTE_STA
TUS_EMPTY?o="找不到相关的起点和终点":(n==BMAP_ROUTE_STATUS_EMPTY&&(o="找不到相关的起点"),s==BMAP_
ROUTE_STATUS_EMPTY&&(o="找不到相关的终点")),"startPoint"==this._pointType&&s==BMAP_ROU
TE_STATUS_ADDRESS||"endPoint"==this._pointType&&n==BMAP_ROUTE_STATUS_ADDRESS?t
his._searchAddress(t):(this.dom.panel.address.style.display="block",this.dom.p
anel.address.innerHTML=o)}},_searchAddress:function(t){var
e=this,i=this.dom.panel;if(!this.lsAddress){var
n={map:this._map};i&&(n.panel=this.dom.panel.localSearch),this.lsAddress=new
BMap.LocalSearch(this._map,{renderOptions:n})}var o="startPoint"==e._pointType
?"终点":"起点";i&&(this.dom.panel.address.style.display="block",this.dom.panel.add
ress.innerHTML="请选择准确的"+o),this.lsAddress.setInfoHtmlSetCallback(function(i,n)
{var a=document.createElement("div");a.style.cssText="position:relative;left:5
0%;margin:5px 0 0 -30px;width:60px;height:27px;line-height:27px;border:1px
solid #E0C3A6;text-align:center;color:#B35900;cursor:pointer;background-
color:#FFEECC;border-radius:2px; background-image: -webkit-gradient(linear,
left top, left bottom, from(#FFFDF8), to(#FFEECC))",a.innerHTML="设为"+o,n.appen
dChild(a),s.on(a,"click",function(){e._clearAddress();var n=i.marker.getPositi
on();"起点"==o?t.search(n,e._point):t.search(e._point,n)})}),this._reset(),this.
lsAddress.search(this.dom.transText.value)},_getTransPoi:function(t){var e,i;r
eturn"startPoint"==this._pointType?(e=this._point,i=t):(e=t,i=this._point),{st
art:e,end:i}},_setSearchTypes:function(){var t,e=this._unique(this._opts._sear
chTypes),i=this.dom.navTab,n=[this.dom.seartTab,this.dom.tohereTab,this.dom.fr
omhereTab],o=0,a=0,r=0;if(this.tabLength=e.length,tabWidth=Math.floor((this
._width-this.tabLength+1)/this.tabLength),0==e.length)this.dom.navBox.style.di
splay="none";else{for(o=0,a=n.length;a>o;o++)n[o].className="",n[o].style.disp
lay="none";for(o=0;o<this.tabLength;o++){if(t=n[e[o]],0==o&&(t.className="BMap
Lib_first BMapLib_current",this._firstTab=t,r=e[o]),o==this.tabLength-1){var h
=this._width-(this.tabLength-1)*(tabWidth+1);t.style.width=6==s.browser.ie?h-3
+"px":h+"px"}else t.style.width=tabWidth+"px";t.style.display="block"}void
0!=e[1]&&i.appendChild(n[e[1]]),void 0!=e[2]&&i.appendChild(n[e[2]]),this._sho
wTabContent(r)}this._adjustTransPosition()},_unique:function(t){for(var
e,i,n=t.length,s=t.slice(0);--n>=0;)if(i=s[n],0>i||i>2)s.splice(n,1);else
for(e=n;e--;)if(i==s[e]){s.splice(n,1);break}return s},_reset:function(){this.
localSearch.clearResults(),this.transitRoute.clearResults(),this.drivingRoute.
clearResults(),this._closeCircleBound(),this._hideAutoComplete()},_clearAddres
s:function(){this.lsAddress&&this.lsAddress.clearResults(),this.dom.panel&&(th
is.dom.panel.address.style.display="none")},_mendIE6:function(){if(s.browser.i
e&&!(s.browser.ie>6))for(var t=this.container.getElementsByTagName("IMG"),e=0;
e<t.length;e++)t[e].src.indexOf(".png")<0||(t[e].style.cssText+=";FILTER: prog
id:DXImageTransform.Microsoft.AlphaImageLoader(src="+t[e].src+",sizingMethod=c
rop)",t[e].src="http://api.map.baidu.com/images/blank.gif")},_sendToPhone:func
tion(){this.showPopup()},showPopup:function(){this.pop||(this.pop=new
e(this)),this._map.addOverlay(this.pop)}}),t.prototype=new
BMap.Overlay,t.prototype.initialize=function(t){function e(t){t&&t.stopPropaga
tion?t.stopPropagation():window.event.cancelBubble=!0}this._map=t;var i=this._
div=document.createElement("div");s.on(i,"mousedown",e),s.on(i,"touchstart",e)
,s.on(i,"click",e),s.on(i,"dblclick",e);var
n=BMapLib.SearchInfoWindow.instance[this.guid];return
i.style.cssText="position:absolute;white-
space:nowrap;background:#fff;padding:1px;border:1px solid
red;z-index:99;",i.innerHTML='<input type="text" value="'+n._radius+'"
style="width:30px;" id="BMapLib_search_radius'+this.guid+'"/>m <a
href="javascript:void(0)" title="修改" onclick="BMapLib.SearchInfoWindow.instanc
e['+this.guid+']._changeSearchRadius()" style="font-size:12px;text-
decoration:none;color:blue;">修改</a><img
src="http://api.map.baidu.com/images/iw_close1d3.gif" alt="关闭" title="关闭"
style="cursor:pointer;padding:0 5px;" onclick="BMapLib.SearchInfoWindow.instan
ce['+this.guid+']._closeCircleBound()"/>',t.getPanes().labelPane.appendChild(i
),i},t.prototype.draw=function(){var t=this._map,e=t.pointToOverlayPixel(this.
_point);this._div.style.left=e.x+10+"px",this._div.style.top=e.y-25+"px"};var
a="http://api.map.baidu.com";e.prototype=new
BMap.Overlay,s.extend(e.prototype,{initialize:function(t){return this._map=t,t
his.container=this.generalDom(),this._map.getContainer().appendChild(this.cont
ainer),this.initDom(),this.bind(),this.getAddressByPoint(),this.getRememberPho
ne(),this.addPhoneNum=0,this.container},draw:function(){},generalDom:function(
){var t=document.createElement("div"),e=this._map.getSize(),i=0,n=0;e.width>45
0&&(n=(e.width-450)/2),e.height>260&&(i=(e.height-260)/2),t.style.cssText="pos
ition:absolute;background:#fff;width:480px;height:260px;top:"+i+"px;left:"+n+"
px;ovflow:hidden;";var s=['<div
class="BMapLib_sms_tab_container">',"<span>发送到手机</span>",'<span
id="BMapLib_sms_tip" style="display:none;">',"</span>","</div>",'<div
id="BMapLib_sms_pnl_phone" class="BMapLib_sms_pnl_phone" style="display:
block;">','<div class="BMapLib_ap" id="pnl_phone_left" style="display:
block;">',"<table>","<tr>","<th>发送方手机号</th>",'<td><input type="text" bid=""
id="BMapLib_phone_0" maxlength="11" class="BMapLib_sms_input
BMapLib_sms_input_l" /><span
id="BMapLib_activateTip"></span></td>',"</tr>",'<tr id="BMapLib_activateBox"
style="display:none;">',"<th>激活码</th>",'<td><input type="text"
id="BMapLib_activate" class="BMapLib_sms_input BMapLib_sms_input_s"
maxlength="4"/><input type="button" value="获取" id="BMapLib_activate_btn"
bid="activate"
/>',"</tr>","<tr>","<th></th>","<td>","</td>","</tr>","<tr>",'<th style
="vertical-align:top;padding-top:7px;">接收方手机号</th>','<td><div><input
type="text" id="BMapLib_phone_1" class="BMapLib_sms_input BMapLib_sms_input_l"
maxlength="11"/><input type="checkbox"
id="BMapLib_is_remember_phone"/>记住此号</div>','<div
id="BMapLib_add_phone_con"></div>','<div><a href="javascript:void(0)"
id="BMapLib_add_phone_btn"
bid="addPhone">新增</a></div>',"</td>","</tr>","<tr>","<th></th>",'<td ><input
type="text" id="BMapLib_ver_input"  maxlength="4" style="width:67px;border:
1px solid #a5acb2;vertical-align: middle;height:18px;" tabindex="5"
placeholder="验证码"><img width="69" height="20" id="BMapLib_ver_image"
bid="BMapLib_ver_image" style="border: 1px solid #d5d5d5;vertical-align:middle
;margin-left: 5px;" alt="点击更换数字"
title="点击更换数字"></td>',"</tr>","<tr>","<th></th>",'<td><input type="button"
value="免费发送到手机" bid="sendToPhoneBtn"/></td>',"</tr>","</table>","</div>",'<div
class="BMapLib_mp" id="pnl_phone_right" style="display: block;">','<div
class="BMapLib_mp_title">短信内容：</div>','<div id="BMapLib_msgContent"
class="BMapLib_msgContent"></div>',"</div>",'<div
style="clear:both;"></div>','<p id="BMapLib_sms_declare_phone"
class="BMapLib_sms_declare_phone">百度保证不向任何第三方提供输入的手机号码</p>','<div
id="tipError" class="tip fail" style="display:none;">','<span
id="tipText"></span>','<a href="javascript:void(0)" id="tipClose"
class="cut"></a>',"</div>",'<div id="sms_lack_tip"
style="display:none;">已达每日5次短信上限</div>','<div id="sms_unlogin_tip"
style="display:none;">','<div style="padding-left:40px;">','<ul
class="login_ul"><li id="normal_login-2" class="login_hover"><a
href="javascript:void(0)">手机登录</a></li></ul>','<div id="loginBox_02"
class="loginBox">','<div id="pass_error_info-2"
class="pass_error_style"></div>','<div id="passports-2"></div>','<div
id="loginIframe_iph-2" style="display:none"></div>',"</div>","</div>",'<div
class="nopass" style="padding-left:128px;">没有百度帐号？<a
href="https://passport.baidu.com/v2/?reg&amp;regType=1&amp;tpl=ma"
target="_blank">立即注册</a></div>',"</div>","</div>",'<button
class="BMapLib_popup_close" bid="close"></button>','<div
id="BMapLib_success_tip"
style="display:none;">您的短信已经发送到您的手机，请注意查收!</div>'].join("");return t.innerHTML
=s,t},initDom:function(){this.dom={sms_tip:s.g("BMapLib_sms_tip"),activate_btn
:s.g("BMapLib_activate_btn"),fromphone:s.g("BMapLib_phone_0"),tophone:s.g("BMa
pLib_phone_1"),isRememberPhone:s.g("BMapLib_is_remember_phone"),sms_container:
s.g("BMapLib_sms_pnl_phone"),success_tip:s.g("BMapLib_success_tip"),add_phone_
con:s.g("BMapLib_add_phone_con"),add_phone_btn:s.g("BMapLib_add_phone_btn"),ac
tivateBox:s.g("BMapLib_activateBox"),activateTip:s.g("BMapLib_activateTip"),ac
tivate_input:s.g("BMapLib_activate"),ver_image:s.g("BMapLib_ver_image"),ver_in
put:s.g("BMapLib_ver_input")}},showTip:function(t){var e=t.error,i={PHONE_NUM_
INVALID:"手机号码无效",SMS_SEND_SUCCESS:"发送到手机成功",AK_INVALID:"你所使用的key无效",INTERNAL_E
RROR:"服务器错误",OVER_MAX_ACTIVATE_TIME:"今天已超过发送激活码最大次数",SMS_ACTIVATE_SUCCESS:"激活码
已发送到您的手机，请注意查收！",ACTIVATE_FAIL:"手机激活码无效",SMS_LACK:"今天您还能往5个手机发送短信",PARAM_INVAL
ID:"请填完所有选项",SEND_ACTIVATE_FAIL:"激活码发送失败",VCODE_VERITY_FAIL:"验证码校验失败"},n=i[e];
if("SMS_LACK"==e){var s=t.res_sms;n="今天您还能往"+s+"个手机发送短信",this.addPhoneNum=s-1}
this.renderImageVer(),n&&(this.dom.sms_tip.innerHTML=n,this.dom.sms_tip.style.
display="inline"),"SMS_SEND_SUCCESS"==e&&(this.rememberPhone(),this.sendSucces
s())},bind:function(){var
t=this;t.renderImageVer(),s.on(this.container,"click",function(e){var i=e.targ
et||e.srcElement,n=i.getAttribute("bid");switch(n){case"close":t.closeActon();
break;case"sendToPhoneBtn":t.sendAction();break;case"activate":t.activateActio
n();break;case"addPhone":t.addPhoneAction();break;case"deletePhone":t.deletePh
oneAction(i);break;case"BMapLib_ver_image":t.renderImageVer()}});s.g("BMapLib_
phone_0"),s.g("BMapLib_phone_1");this.container.onkeypress=function(t){var e=t
||window.e,i=e.which||e.keyCode,n=!1;return(i>=48&&57>=i||44==i||8==i)&&(n=!0)
,n},this.dom.ver_input.onkeypress=function(e){t._stopBubble(e);var i=e||window
.e,n=i.which||i.keyCode,s=!1;return(n>=48&&57>=n||n>=65&&90>=n||n>=97&&122>=n)
&&(s=!0),s},s.on(this.dom.fromphone,"blur",function(){s.isPhone(this.value)?t.
checkActivateAction():(t.dom.activateTip.innerHTML="",t.dom.activateBox.style.
display="none")}),s.on(this.dom.activate_input,"blur",function(){s.isActivateC
ode(this.value)&&t.checkActivateAction()})},_stopBubble:function(t){t&&t.stopP
ropagation?t.stopPropagation():window.event.cancelBubble=!0},renderImageVer:fu
nction(){var t=this;this.request("http://map.baidu.com/maps/services/captcha?"
,{cbName:"cb"},function(e){t.vcode=e.content.vcode,t.dom.ver_image.src="http:/
/map.baidu.com/maps/services/captcha/image?vcode="+t.vcode})},checkActivateAct
ion:function(){var t={phone:this.dom.fromphone.value,activate:this.dom.activat
e_input.value,cbName:"callback"},e=this;this.request(this.config.ckActivateURL
,t,function(t){t&&0!=t.isactivate?(e.dom.activateBox.style.display="none",e.do
m.activateTip.style.color="green",e.dom.activateTip.innerHTML="已激活"):(e.dom.ac
tivateBox.style.display="table-row",e.dom.activateTip.style.color="red",e.dom.
activateTip.innerHTML="未激活")})},activateAction:function(){var t=this,e=this._m
ap.getKey(),i={phone:this.dom.fromphone.value,ak:e,cbName:"callback"};s.isPhon
e(i.phone)?this.request(this.config.activateURL,i,function(e){e&&t.showTip(e)}
):this.showTip({error:"PHONE_NUM_INVALID"})},closeActon:function(){this._map.r
emoveOverlay(this)},getMessage:function(){},sendAction:function(){var
t=this;if(this.validate()){tophoneStr=s.g("BMapLib_phone_1").value;for(var e=t
his.dom.add_phone_con.getElementsByTagName("input"),i=0,n=e.length;n>i;i++){if
(!s.isPhone(e[i].value))return void
this.showTip({error:"PHONE_NUM_INVALID"});tophoneStr+=","+e[i].value}var o=thi
s._map.getKey(),a={fromphone:s.g("BMapLib_phone_0").value,tophone:tophoneStr,a
k:o,activate:this.dom.activate_input.value,code_input:this.dom.ver_input.value
,vcode:this.vcode,content:s.g("BMapLib_phone_0").value+"分享一个位置给您，"+this.messag
eContent,cbName:"callback"};this.request(this.config.sendURL,a,function(e){e&&
t.showTip(e)})}},validate:function(){var t=!0;return s.isPhone(this.dom.fromph
one.value)&&s.isPhone(this.dom.tophone.value)||(t=!1,this.showTip({error:"PHON
E_NUM_INVALID"})),t},getAddressByPoint:function(){var
t=this.iw._point,e=this,i=new
BMap.Geocoder;i.getLocation(t,function(t){if(t&&t.addressComponents){var i=t.a
ddressComponents;e.address=i.province+i.city+i.district+i.street+i.streetNumbe
r,e.generalMessage()}})},generalMessage:function(){var t=s.g("BMapLib_msgConte
nt"),e="",i=this.iw,n=i.getPosition();this.userPhone&&(e+=this.userPhone+"分享一个
位置给您，"),i.getTitle&&(e+="名称为："+i.getTitle()+"，"),this.address&&(e+="大致位置在"+thi
s.address+"，");var o="http://api.map.baidu.com/marker?location="+n.lat+","+n.l
ng+"&title="+encodeURIComponent(i.getTitle())+"&content="+encodeURIComponent(i
.getContent())+"&output=html",a={url:encodeURIComponent(o),t:(new Date).getTim
e(),cbName:"callback"},r=this;this.request(this.config.shortURL,a,function(i){
e+=i.url,r.messageContent=e,t.innerHTML=e})},rememberPhone:function(){if(this.
dom.isRememberPhone.checked){var t=this.dom.tophone.value;s.cookie.set("BMapLi
b_phone",t,{path:"/",expires:2592e6})}},getRememberPhone:function(){var t=s.co
okie.get("BMapLib_phone");t&&(this.dom.tophone.value=t,this.dom.isRememberPhon
e.checked=!0)},sendSuccess:function(){this.dom.sms_container.style.display="no
ne",this.dom.success_tip.style.display="block";var t=this;setTimeout(function(
){t._map.removeOverlay(t)},1500)},addPhoneAction:function(){if(this.addPhoneNu
m>=4);else{var t=document.createElement("div");t.innerHTML='<input type="text"
class="BMapLib_sms_input BMapLib_sms_input_l" maxlength="11"/><a
href="javascript:void(0);" style="margin-left:5px;" bid="deletePhone">删除</a>',
this.dom.add_phone_con.appendChild(t),this.addPhoneNum++}},deletePhoneAction:f
unction(t){t.parentNode.parentNode.removeChild(t.parentNode),this.addPhoneNum-
- },request:function(t,e,n){var s=(1e5*Math.random()).toFixed(0);BMapLib["BMap
Lib_cbk"+s]=function(t){n&&n(t),delete BMapLib["BMapLib_cbk"+s]};for(var o in 
e)"cbName"!=o&&(t+="&"+o+"="+e[o]);t+="&"+e.cbName+"=BMapLib.BMapLib_cbk"+s,i(
t)},config:{sendURL:a+"/ws/message?method=send",activateURL:a+"/ws/message?met
hod=activate",ckActivateURL:a+"/ws/message?method=ckActivate",shortURL:"http:/
/j.map.baidu.com/?"}});var r=0;BMapLib.SearchInfoWindow.instance=[]}();

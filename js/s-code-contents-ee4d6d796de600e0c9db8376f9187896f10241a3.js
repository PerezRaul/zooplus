/*
 ============== DO NOT ALTER ANYTHING BELOW THIS LINE ! ============

 Adobe Visitor API for JavaScript version: 1.3
 Copyright 1996-2013 Adobe, Inc. All Rights Reserved
 More info available at http://www.omniture.com
*/
function Visitor(k,s){if(!k)throw"Visitor requires Adobe Marketing Cloud Org ID";var a=this;a.version="1.3";var h=window;h.s_c_in||(h.s_c_il=[],h.s_c_in=0);a._c="Visitor";a._il=h.s_c_il;a._in=h.s_c_in;a._il[a._in]=a;h.s_c_in++;var o=h.document,i=h.P;i||(i=null);var j=h.Q;j||(j=!0);var p=h.O;p||(p=!1);a.D=function(a){var c=0,b,e;if(a)for(b=0;b<a.length;b++)e=a.charCodeAt(b),c=(c<<5)-c+e,c&=c;return c};a.n=function(a){var c="0123456789",b="",e="",f,g=8,h=10,i=10;if(1==a){c+="ABCDEF";for(a=0;16>a;a++)f=
Math.floor(Math.random()*g),b+=c.substring(f,f+1),f=Math.floor(Math.random()*g),e+=c.substring(f,f+1),g=16;return b+"-"+e}for(a=0;19>a;a++)f=Math.floor(Math.random()*h),b+=c.substring(f,f+1),h=0==a&&9==f?3:10,f=Math.floor(Math.random()*i),e+=c.substring(f,f+1),i=0==a&&9==f?3:10;return b+e};a.J=function(){var a;!a&&h.location&&(a=h.location.hostname);if(a)if(/^[0-9.]+$/.test(a))a="";else{var c=a.split("."),b=c.length-1,e=b-1;1<b&&2>=c[b].length&&0>",ac,ad,ae,af,ag,ai,al,am,an,ao,aq,ar,as,at,au,aw,ax,az,ba,bb,be,bf,bg,bh,bi,bj,bm,bo,br,bs,bt,bv,bw,by,bz,ca,cc,cd,cf,cg,ch,ci,cl,cm,cn,co,cr,cu,cv,cw,cx,cz,de,dj,dk,dm,do,dz,ec,ee,eg,es,eu,fi,fm,fo,fr,ga,gb,gd,ge,gf,gg,gh,gi,gl,gm,gn,gp,gq,gr,gs,gt,gw,gy,hk,hm,hn,hr,ht,hu,id,ie,im,in,io,iq,ir,is,it,je,jo,jp,kg,ki,km,kn,kp,kr,ky,kz,la,lb,lc,li,lk,lr,ls,lt,lu,lv,ly,ma,mc,md,me,mg,mh,mk,ml,mn,mo,mp,mq,mr,ms,mt,mu,mv,mw,mx,my,na,nc,ne,nf,ng,nl,no,nr,nu,om,pa,pe,pf,ph,pk,pl,pm,pn,pr,ps,pt,pw,py,qa,re,ro,rs,ru,rw,sa,sb,sc,sd,se,sg,sh,si,sj,sk,sl,sm,sn,so,sr,st,su,sv,sx,sy,sz,tc,td,tf,tg,th,tj,tk,tl,tm,tn,to,tp,tt,tv,tw,tz,ua,ug,us,uy,uz,va,vc,ve,vg,vi,vn,vu,wf,ws,yt,".indexOf(","+
c[b]+",")&&e--;if(0<e)for(a="";b>=e;)a=c[b]+(a?".":"")+a,b--}return a};a.cookieRead=function(a){var a=encodeURIComponent(a),c=(";"+o.cookie).split(" ").join(";"),b=c.indexOf(";"+a+"="),e=0>b?b:c.indexOf(";",b+1);return 0>b?"":decodeURIComponent(c.substring(b+2+a.length,0>e?c.length:e))};a.cookieWrite=function(d,c,b){var e=a.cookieLifetime,f,c=""+c,e=e?(""+e).toUpperCase():"";b&&"SESSION"!=e&&"NONE"!=e?(f=""!=c?parseInt(e?e:0):-60)?(b=new Date,b.setTime(b.getTime()+1E3*f)):1==b&&(b=new Date,f=b.getYear(),
b.setYear(f+2+(1900>f?1900:0))):b=0;return d&&"NONE"!=e?(o.cookie=encodeURIComponent(d)+"="+encodeURIComponent(c)+"; path=/;"+(b?" expires="+b.toGMTString()+";":"")+(a.m?" domain="+a.m+";":""),a.cookieRead(d)==c):0};a.d=i;a.z=function(a,c){try{"function"==typeof a?a.apply(h,c):a[1].apply(a[0],c)}catch(b){}};a.M=function(d,c){c&&(a.d==i&&(a.d={}),void 0==a.d[d]&&(a.d[d]=[]),a.d[d].push(c))};a.l=function(d,c){if(a.d!=i){var b=a.d[d];if(b)for(;0<b.length;)a.z(b.shift(),c)}};a.h=i;a.K=function(d,c,b){!c&&
b&&b();var e=o.getElementsByTagName("HEAD")[0],f=o.createElement("SCRIPT");f.type="text/javascript";f.setAttribute("async","async");f.src=c;e.firstChild?e.insertBefore(f,e.firstChild):e.appendChild(f);b&&(a.h==i&&(a.h={}),a.h[d]=setTimeout(b,a.loadTimeout))};a.I=function(d){a.h!=i&&a.h[d]&&(clearTimeout(a.h[d]),a.h[d]=0)};a.F=p;a.G=p;a.isAllowed=function(){if(!a.F&&(a.F=j,a.cookieRead(a.cookieName)||a.cookieWrite(a.cookieName,"T",1)))a.G=j;return a.G};a.a=i;a.c=i;var v=a.W;v||(v="MC");var l=a.Y;l||
(l="MCMID");var w=a.X;w||(w="MCCIDH");var t=a.U;t||(t="A");var m=a.R;m||(m="MCAID");var u=a.V;u||(u="AAM");var q=a.T;q||(q="MCAAMLH");var n=a.S;n||(n="MCAAMB");var r=a.Z;r||(r="NONE");a.u=0;a.C=function(){if(!a.u){var d=a.version;a.customerIDMappingServer&&(d+="|"+a.customerIDMappingServer);a.customerIDMappingServerSecure&&(d+="|"+a.customerIDMappingServerSecure);a.audienceManagerServer&&(d+="|"+a.audienceManagerServer);a.audienceManagerServerSecure&&(d+="|"+a.audienceManagerServerSecure);if(a.audienceManagerCustomerIDDPIDs)for(var c in a.audienceManagerCustomerIDDPIDs)!Object.prototype[c]&&
a.audienceManagerCustomerIDDPIDs[c]&&(d+=c+"="+a.audienceManagerCustomerIDDPIDs[c]);a.u=a.D(d)}return a.u};a.H=p;a.j=function(){if(!a.H){a.H=j;var d=a.C(),c=p,b=a.cookieRead(a.cookieName),e,f,g,h=new Date;a.a==i&&(a.a={});if(b&&"T"!=b){b=b.split("|");b[0].match(/^[\-0-9]+$/)&&(parseInt(b[0])!=d&&(c=j),b.shift());1==b.length%2&&b.pop();for(d=0;d<b.length;d+=2)e=b[d].split("-"),f=e[0],g=b[d+1],e=1<e.length?parseInt(e[1]):0,c&&(f==w&&(g=""),0<e&&(e=h.getTime()/1E3-60)),f&&g&&(a.g(f,g,1),0<e&&(a.a["expire"+
f]=e,h.getTime()>=1E3*e&&(a.c||(a.c={}),a.c[f]=j)))}if(!a.b(m)&&(b=a.cookieRead("s_vi")))b=b.split("|"),1<b.length&&0<=b[0].indexOf("v1")&&(g=b[1],d=g.indexOf("["),0<=d&&(g=g.substring(0,d)),g&&g.match(/^[0-9a-fA-F\-]+$/)&&a.g(m,g))}};a.N=function(){var d=a.C(),c,b;for(c in a.a)!Object.prototype[c]&&a.a[c]&&"expire"!=c.substring(0,6)&&(b=a.a[c],d+=(d?"|":"")+c+(a.a["expire"+c]?"-"+a.a["expire"+c]:"")+"|"+b);a.cookieWrite(a.cookieName,d,1)};a.b=function(d,c){return a.a!=i&&(c||!a.c||!a.c[d])?a.a[d]:
i};a.g=function(d,c,b){a.a==i&&(a.a={});a.a[d]=c;b||a.N()};a.t=function(d,c){var b=new Date;b.setTime(b.getTime()+1E3*c);a.a==i&&(a.a={});a.a["expire"+d]=Math.floor(b.getTime()/1E3);0>c&&(a.c||(a.c={}),a.c[d]=j)};a.B=function(a){if(a&&("object"==typeof a&&(a=a.d_mid?a.d_mid:a.visitorID?a.visitorID:a.id?a.id:a.uuid?a.uuid:""+a),a&&(a=a.toUpperCase(),"NOTARGET"==a&&(a=r)),!a||a!=r&&!a.match(/^[0-9a-fA-F\-]+$/)))a="";return a};a.i=function(d,c){a.I(d);a.f!=i&&(a.f[d]=p);if(d==v){var b=a.b(l);if(!b){b=
"object"==typeof c&&c.mid?c.mid:a.B(c);if(!b){if(a.q){a.getAnalyticsVisitorID(null,!1,!0);return}b=a.n()}a.g(l,b)}if(!b||b==r)b="";"object"==typeof c&&((c.d_region||c.dcs_region||c.d_blob||c.blob)&&a.i(u,c),a.q&&c.mid&&a.i(t,{id:c.id}));a.l(l,[b])}if(d==u&&"object"==typeof c){b=604800;void 0!=c.id_sync_ttl&&c.id_sync_ttl&&(b=parseInt(c.id_sync_ttl));var e=a.b(q);e||((e=c.d_region)||(e=c.dcs_region),e&&(a.t(q,b),a.g(q,e)));e||(e="");a.l(q,[e]);e=a.b(n);if(c.d_blob||c.blob)(e=c.d_blob)||(e=c.blob),
a.t(n,b),a.g(n,e);e||(e="");a.l(n,[e])}if(d==t){b=a.b(m);b||((b=a.B(c))||(b=r),a.g(m,b));if(!b||b==r)b="";a.l(m,[b])}};a.f=i;a.o=function(d,c,b,e){var f="",g;if(a.isAllowed()&&(a.j(),f=a.b(d),!f&&(d==l?g=v:d==q||d==n?g=u:d==m&&(g=t),g))){if(a.f==i||!a.f[g])a.f==i&&(a.f={}),a.f[g]=j,a.K(g,c,function(){if(!a.b(d)){var b="";d==l&&(b=a.n());a.i(g,b)}});a.M(d,b);return""}if((d==l||d==m)&&f==r)f="",e=j;b&&e&&a.z(b,[f]);return f};a._setMarketingCloudFields=function(d){a.j();a.i(v,d)};a.setMarketingCloudVisitorID=
function(d){a._setMarketingCloudFields(d)};a.q=p;a.getMarketingCloudVisitorID=function(d,c){return a.isAllowed()?(a.marketingCloudServer&&0>a.marketingCloudServer.indexOf(".demdex.net")&&(a.q=j),a.o(l,a.r("_setMarketingCloudFields"),d,c)):""};a._mapCustomerIDsDone=function(d){d&&"success"==d.status&&a.g(w,a.s)};a.L=function(){a._mapCustomerIDsDone({status:"success"})};a.e={};a.A=p;a.s="";a.setCustomerIDs=function(d){a.e=d;if(a.isAllowed()){a.j();var d=a.b(w),c="",b,e;d||(d=0);for(b in a.e)e=a.e[b],
!Object.prototype[b]&&e&&(c+=(c?"|":"")+b+"|"+e);a.s=a.D(c);a.s!=d&&(a.A=j,a.L())}};a.getCustomerIDs=function(){return a.e};a._setAnalyticsFields=function(d){a.j();a.i(t,d)};a.setAnalyticsVisitorID=function(d){a._setAnalyticsFields(d)};a.getAnalyticsVisitorID=function(d,c,b){if(a.isAllowed()){var e="";b||(e=a.getMarketingCloudVisitorID(function(){a.getAnalyticsVisitorID(d,j)}));if(e||b){var f=b?a.marketingCloudServer:a.trackingServer,g="";a.loadSSL&&(b?a.marketingCloudServerSecure&&(f=a.marketingCloudServerSecure):
a.trackingServerSecure&&(f=a.trackingServerSecure));f&&(g="http"+(a.loadSSL?"s":"")+"://"+f+"/id?callback=s_c_il%5B"+a._in+"%5D._set"+(b?"MarketingCloud":"Analytics")+"Fields&mcorgid="+encodeURIComponent(a.marketingCloudOrgID)+(e?"&mid="+e:""));return a.o(b?l:m,g,d,c)}}return""};a._setAudienceManagerFields=function(d){a.j();a.i(u,d)};a.r=function(d){var c=a.audienceManagerServer,b="",e=a.b(l),f=a.b(n,j),g="",h,i;a.loadSSL&&a.audienceManagerServerSecure&&(c=a.audienceManagerServerSecure);if(c){if(a.e&&
a.audienceManagerCustomerIDDPIDs)for(h in a.e)Object.prototype[h]||(b=a.e[h],i=a.audienceManagerCustomerIDDPIDs[h],b&&i&&(g+=(g?"%01":"&d_cid=")+i+"%01"+encodeURIComponent(b)));d||(d="_setAudienceManagerFields");b="http"+(a.loadSSL?"s":"")+"://"+c+"/id?d_rtbd=json&d_ver=2"+(!e&&a.q?"&d_verify=1":"")+"&d_orgid="+encodeURIComponent(a.marketingCloudOrgID)+(e?"&d_mid="+e:"")+(f?"&d_blob="+encodeURIComponent(f):"")+g+"&d_cb=s_c_il%5B"+a._in+"%5D."+d}return b};a.getAudienceManagerLocationHint=function(d,
c){return a.isAllowed()&&a.getMarketingCloudVisitorID(function(){a.getAudienceManagerLocationHint(d,j)})?a.o(q,a.r(),d,c):""};a.getAudienceManagerBlob=function(d,c){if(a.isAllowed()&&a.getMarketingCloudVisitorID(function(){a.getAudienceManagerBlob(d,j)})){var b=a.r();a.A&&a.t(n,-1);return a.o(n,b,d,c)}return""};a.k="";a.p={};a.v="";a.w={};a.getSupplementalDataID=function(d,c){!a.k&&!c&&(a.k=a.n(1));var b=a.k;a.v&&!a.w[d]?(b=a.v,a.w[d]=j):b&&(a.p[d]&&(a.v=a.k,a.w=a.p,a.k=b=!c?a.n(1):"",a.p={}),b&&
(a.p[d]=j));return b};0>k.indexOf("@")&&(k+="@AdobeOrg");a.marketingCloudOrgID=k;a.namespace=s;a.cookieName="AMCV_"+k;a.m=a.J();a.m==h.location.hostname&&(a.m="");if(s){var x="AMCV_"+s,z=a.cookieRead(a.cookieName),y=a.cookieRead(x);!z&&y&&(a.cookieWrite(a.cookieName,y,1),a.cookieWrite(x,"",-60))}a.loadSSL=0<=h.location.protocol.toLowerCase().indexOf("https");a.loadTimeout=500;a.marketingCloudServer=a.audienceManagerServer="dpm.demdex.net";a.customerIDMappingServer="map.adobecrs.com"}
Visitor.getInstance=function(k,s){var a,h=window.s_c_il,o;0>k.indexOf("@")&&(k+="@AdobeOrg");if(h)for(o=0;o<h.length;o++)if((a=h[o])&&"Visitor"==a._c&&(a.marketingCloudOrgID==k||s&&a.namespace==s))return a;return new Visitor(k,s)};

/* Global settings */

s = new AppMeasurement();
function getAnalyticsAccount() {
  for(var toolid in _satellite.tools) {
    if(_satellite.tools[toolid].settings.engine == "sc") {
      return _satellite.tools[toolid].settings.account;
    }
  }
}
s.account = getAnalyticsAccount();
s.trackInlineStats= true;
s.linkTrackVars= 'None';
s.charSet= 'UTF-8';
s.linkLeaveQueryString= false;
s.linkExternalFilters= '';
s.linkTrackEvents= 'None';
s.trackDownloadLinks= true;
s.cookieDomainPeriods = location.hostname.split('.').length - 1; 
s.visitorNamespace = "zooplus";
s.trackingServer = "zooplus.d1.sc.omtrdc.net";
s.trackingServerSecure = "zooplus.d1.sc.omtrdc.net";
//Europe time parting DST
s._tpDST = {
2014:'3/30,10/26',
2015:'3/29,10/25',
2016:'3/27,10/30',
2017:'3/26,10/29',
2018:'3/25,10/28',
2019:'3/31,10/27'}

/* Visitor ID service config - needs to be configured yet*/
var visitor = new Visitor("BD7F317853C3F61D0A490D4E");
visitor.trackingServer = "zooplus.d1.sc.omtrdc.net"; // same as s.trackingServer
visitor.trackingServerSecure = "zooplus.d1.sc.omtrdc.net"; //same as s.trackingServerSecure

// To enable CNAME support, add the following configuration variables
// If you are not using CNAME, DO NOT include these variables
// visitor.marketingCloudServer = "INSERT-TRACKING-SERVER-HERE";
// visitor.marketingCloudServerSecure = "INSERT-SECURE-TRACKING-SERVER-HERE"; //same as s.trackingServerSecure
s.visitor = Visitor.getInstance("BD7F317853C3F61D0A490D4E");

/* Plugin Config*/
s.usePlugins=true
  s.doPlugins=function(s) {
    /* Add calls to plugins here */
    s.prop30=s.getNewRepeat(30,'s_getNewRepeat'); //NewRepeat Visitor
    s.prop31 = s.getPreviousValue(s.pageName,'s_ppn'); //previous PageName
		s.prop10 = s.getPercentPageViewed(); // Percentage viewed
    var tp = s.getTimeParting('n','+1'); // Time Parting
		s.prop32 = tp;
    s.prop33 = s.getVisitNum(30); //Visitnumber in 30 days
    s.prop34=s_getLoadTime();
    s.prop35=s.getDaysSinceLastVisit('s_vi');
    s.prop36=s.version;
    //s.plugins=s.removePluginsOnPurchase();
    //s.campaign = s.Util.getQueryParam('gclid');
    //s.eVar42 = s.Util.getQueryParam('app'); //URL parameter for app usage for iOS and Android
    s.events=s.apl(s.events,"event22",",",1)
    s.prop37 = (typeof(Visitor) != "undefined" ? "VisitorAPI Present" : "VisitorAPI Missing");
    
    }
/************************** PLUGINS SECTION *************************/
/*
 * Plugin: remove Netscape Plugins on Purchase event
 */
  /*
s.removePluginsOnPurchase = function() {
  if(location.pathname.match("/checkout/finish.htm")) {
    return "";
  }
  return s.plugins;
};
*/

/*
 * Plugin: getNewRepeat 1.2 - Returns whether user is new or repeat
 */
s.getNewRepeat=new Function("d","cn",""
+"var s=this,e=new Date(),cval,sval,ct=e.getTime();d=d?d:30;cn=cn?cn:"
+"'s_nr';e.setTime(ct+d*24*60*60*1000);cval=s.c_r(cn);if(cval.length="
+"=0){s.c_w(cn,ct+'-New',e);return'New';}sval=s.split(cval,'-');if(ct"
+"-sval[0]<30*60*1000&&sval[1]=='New'){s.c_w(cn,ct+'-New',e);return'N"
+"ew';}else{s.c_w(cn,ct+'-Repeat',e);return'Repeat';}");
/*
* Utility Function: split v1.5 (JS 1.0 compatible)
*/
s.split=new Function("l","d",""
+"var i,x=0,a=new Array;while(l){i=l.indexOf(d);i=i>-1?i:l.length;a[x"
+"++]=l.substring(0,i);l=l.substring(i+d.length);}return a");

/*
 * Plugin: getPercentPageViewed v1.71
 */
s.getPercentPageViewed=new Function("n",""
+"var s=this,W=window,EL=W.addEventListener,AE=W.attachEvent,E=['load"
+"','unload','scroll','resize','zoom','keyup','mouseup','touchend','o"
+"rientationchange','pan'];W.s_Obj=s;s_PPVid=(n=='-'?s.pageName:n)||s"
+".pageName||location.href;if(!W.s_PPVevent){s.s_PPVg=function(n,r){v"
+"ar k='s_ppv',p=k+'l',c=s.c_r(n||r?k:p),a=c.indexOf(',')>-1?c.split("
+"',',10):[''],l=a.length,i;a[0]=unescape(a[0]);r=r||(n&&n!=a[0])||0;"
+"a.length=10;if(typeof a[0]!='string')a[0]='';for(i=1;i<10;i++)a[i]="
+"!r&&i<l?parseInt(a[i])||0:0;if(l<10||typeof a[9]!='string')a[9]='';"
+"if(r){s.c_w(p,c);s.c_w(k,'?')}return a};W.s_PPVevent=function(e){va"
+"r W=window,D=document,B=D.body,E=D.documentElement,S=window.screen|"
+"|0,Ho='offsetHeight',Hs='scrollHeight',Ts='scrollTop',Wc='clientWid"
+"th',Hc='clientHeight',C=100,M=Math,J='object',N='number',s=W.s_Obj|"
+"|W.s||0;e=e&&typeof e==J?e.type||'':'';if(!e.indexOf('on'))e=e.subs"
+"tring(2);s_PPVi=W.s_PPVi||0;if(W.s_PPVt&&!e){clearTimeout(s_PPVt);s"
+"_PPVt=0;if(s_PPVi<2)s_PPVi++}if(typeof s==J){var h=M.max(B[Hs]||E[H"
+"s],B[Ho]||E[Ho],B[Hc]||E[Hc]),X=W.innerWidth||E[Wc]||B[Wc]||0,Y=W.i"
+"nnerHeight||E[Hc]||B[Hc]||0,x=S?S.width:0,y=S?S.height:0,r=M.round("
+"C*(W.devicePixelRatio||1))/C,b=(D.pageYOffset||E[Ts]||B[Ts]||0)+Y,p"
+"=h>0&&b>0?M.round(C*b/h):0,O=W.orientation,o=!isNaN(O)?M.abs(o)%180"
+":Y>X?0:90,L=e=='load'||s_PPVi<1,a=s.s_PPVg(s_PPVid,L),V=function(i,"
+"v,f,n){i=parseInt(typeof a==J&&a.length>i?a[i]:'0')||0;v=typeof v!="
+"N?i:v;v=f||v>i?v:i;return n?v:v>C?C:v<0?0:v};if(new RegExp('(iPod|i"
+"Pad|iPhone)').exec(navigator.userAgent||'')&&o){o=x;x=y;y=o}o=o?'P'"
+":'L';a[9]=L?'':a[9].substring(0,1);s.c_w('s_ppv',escape(W.s_PPVid)+"
+"','+V(1,p,L)+','+(L||!V(2)?p:V(2))+','+V(3,b,L,1)+','+X+','+Y+','+x"
+"+','+y+','+r+','+a[9]+(a[9]==o?'':o))}if(!W.s_PPVt&&e!='unload')W.s"
+"_PPVt=setTimeout(W.s_PPVevent,333)};for(var f=W.s_PPVevent,i=0;i<E."
+"length;i++)if(EL)EL(E[i],f,false);else if(AE)AE('on'+E[i],f);f()};v"
+"ar a=s.s_PPVg();return!n||n=='-'?a[1]:a");

/*
 * Plugin: getTimeParting 3.4
 */
s.getTimeParting=new Function("h","z",""
+"var s=this,od;od=new Date('1/1/2000');if(od.getDay()!=6||od.getMont"
+"h()!=0){return'Data Not Available';}else{var H,M,D,U,ds,de,tm,da=['"
+"Sunday','Monday','Tuesday','Wednesday','Thursday','Friday','Saturda"
+"y'],d=new Date();z=z?z:0;z=parseFloat(z);if(s._tpDST){var dso=s._tp"
+"DST[d.getFullYear()].split(/,/);ds=new Date(dso[0]+'/'+d.getFullYea"
+"r());de=new Date(dso[1]+'/'+d.getFullYear());if(h=='n'&&d>ds&&d<de)"
+"{z=z+1;}else if(h=='s'&&(d>de||d<ds)){z=z+1;}}d=d.getTime()+(d.getT"
+"imezoneOffset()*60000);d=new Date(d+(3600000*z));H=d.getHours();M=d"
+".getMinutes();M=(M<10)?'0'+M:M;D=d.getDay();U=' AM';if(H>=12){U=' P"
+"M';H=H-12;}if(H==0){H=12;}D=da[D];tm=H+':'+M+U;return(tm+'|'+D);}");

/*
 * Plugin: getPreviousValue_v1.0 - return previous value of designated
 *   variable (requires split utility)
 */
s.getPreviousValue=new Function("v","c","el",""
+"var s=this,t=new Date,i,j,r='';t.setTime(t.getTime()+1800000);if(el"
+"){if(s.events){i=s.split(el,',');j=s.split(s.events,',');for(x in i"
+"){for(y in j){if(i[x]==j[y]){if(s.c_r(c)) r=s.c_r(c);v?s.c_w(c,v,t)"
+":s.c_w(c,'no value',t);return r}}}}}else{if(s.c_r(c)) r=s.c_r(c);v?"
+"s.c_w(c,v,t):s.c_w(c,'no value',t);return r}");
/*
 * Utility Function: split v1.5 - split a string (JS 1.0 compatible)
 */
s.split=new Function("l","d",""
+"var i,x=0,a=new Array;while(l){i=l.indexOf(d);i=i>-1?i:l.length;a[x"
+"++]=l.substring(0,i);l=l.substring(i+d.length);}return a");

/*                                                                 
* Plugin: getVisitNum - version 3.0
*/
s.getVisitNum=new Function("tp","c","c2",""
+"var s=this,e=new Date,cval,cvisit,ct=e.getTime(),d;if(!tp){tp='m';}"
+"if(tp=='m'||tp=='w'||tp=='d'){eo=s.endof(tp),y=eo.getTime();e.setTi"
+"me(y);}else {d=tp*86400000;e.setTime(ct+d);}if(!c){c='s_vnum';}if(!"
+"c2){c2='s_invisit';}cval=s.c_r(c);if(cval){var i=cval.indexOf('&vn="
+"'),str=cval.substring(i+4,cval.length),k;}cvisit=s.c_r(c2);if(cvisi"
+"t){if(str){e.setTime(ct+1800000);s.c_w(c2,'true',e);return str;}els"
+"e {return 'unknown visit number';}}else {if(str){str++;k=cval.substri"
+"ng(0,i);e.setTime(k);s.c_w(c,k+'&vn='+str,e);e.setTime(ct+1800000);"
+"s.c_w(c2,'true',e);return str;}else {s.c_w(c,e.getTime()+'&vn=1',e)"
+";e.setTime(ct+1800000);s.c_w(c2,'true',e);return 1;}}");
s.dimo=new Function("m","y",""
+"var d=new Date(y,m+1,0);return d.getDate();");
s.endof=new Function("x",""
+"var t=new Date;t.setHours(0);t.setMinutes(0);t.setSeconds(0);if(x=="
+"'m'){d=s.dimo(t.getMonth(),t.getFullYear())-t.getDate()+1;}else if("
+"x=='w'){d=7-t.getDay();}else {d=1;}t.setDate(t.getDate()+d);return "
+"t;");

function s_getLoadTime(){if(!window.s_loadT){var b=new Date().getTime(),o=window.performance?performance.timing:0,a=o?o.requestStart:window.inHeadTS||0;s_loadT=a?Math.round((b-a)/100):''}return s_loadT}

/*
 * Plugin: Days since last Visit 1.1 - capture time from last visit
 */
s.getDaysSinceLastVisit=new Function("c",""
+"var s=this,e=new Date(),es=new Date(),cval,cval_s,cval_ss,ct=e.getT"
+"ime(),day=24*60*60*1000,f1,f2,f3,f4,f5;e.setTime(ct+3*365*day);es.s"
+"etTime(ct+30*60*1000);f0='Cookies Not Supported';f1='First Visit';f"
+"2='More than 30 days';f3='More than 7 days';f4='Less than 7 days';f"
+"5='Less than 1 day';cval=s.c_r(c);if(cval.length==0){s.c_w(c,ct,e);"
+"s.c_w(c+'_s',f1,es);}else{var d=ct-cval;if(d>30*60*1000){if(d>30*da"
+"y){s.c_w(c,ct,e);s.c_w(c+'_s',f2,es);}else if(d<30*day+1 && d>7*day"
+"){s.c_w(c,ct,e);s.c_w(c+'_s',f3,es);}else if(d<7*day+1 && d>day){s."
+"c_w(c,ct,e);s.c_w(c+'_s',f4,es);}else if(d<day+1){s.c_w(c,ct,e);s.c"
+"_w(c+'_s',f5,es);}}else{s.c_w(c,ct,e);cval_ss=s.c_r(c+'_s');s.c_w(c"
+"+'_s',cval_ss,es);}}cval_s=s.c_r(c+'_s');if(cval_s.length==0) retur"
+"n f0;else if(cval_s!=f1&&cval_s!=f2&&cval_s!=f3&&cval_s!=f4&&cval_s"
+"!=f5) return '';else return cval_s;");

/*
 * Plugin Utility: apl v1.1
 */
s.apl=new Function("l","v","d","u",""
+"var s=this,m=0;if(!l)l='';if(u){var i,n,a=s.split(l,d);for(i=0;i<a."
+"length;i++){n=a[i];m=m||(u==1?(n==v):(n.toLowerCase()==v.toLowerCas"
+"e()));}}if(!m)l=l?l+d+v:v;return l");
/*
 ============== DO NOT ALTER ANYTHING BELOW THIS LINE ! ==========
/*
 AppMeasurement for JavaScript version: 1.3.2
 Copyright 1996-2013 Adobe, Inc. All Rights Reserved
 More info available at http://www.omniture.com
*/
function AppMeasurement(){var s=this;s.version="1.3.2";var w=window;if(!w.s_c_in)w.s_c_il=[],w.s_c_in=0;s._il=w.s_c_il;s._in=w.s_c_in;s._il[s._in]=s;w.s_c_in++;s._c="s_c";var k=w.ob;k||(k=null);var j=w,g,o;try{g=j.parent;for(o=j.location;g&&g.location&&o&&""+g.location!=""+o&&j.location&&""+g.location!=""+j.location&&g.location.host==o.host;)j=g,g=j.parent}catch(p){}s.Za=function(s){try{console.log(s)}catch(a){}};s.oa=function(s){return""+parseInt(s)==""+s};s.replace=function(s,a,c){if(!s||s.indexOf(a)<
0)return s;return s.split(a).join(c)};s.escape=function(b){var a,c;if(!b)return b;b=encodeURIComponent(b);for(a=0;a<7;a++)c="+~!*()'".substring(a,a+1),b.indexOf(c)>=0&&(b=s.replace(b,c,"%"+c.charCodeAt(0).toString(16).toUpperCase()));return b};s.unescape=function(b){if(!b)return b;b=b.indexOf("+")>=0?s.replace(b,"+"," "):b;try{return decodeURIComponent(b)}catch(a){}return unescape(b)};s.Qa=function(){var b=w.location.hostname,a=s.fpCookieDomainPeriods,c;if(!a)a=s.cookieDomainPeriods;if(b&&!s.ha&&
!/^[0-9.]+$/.test(b)&&(a=a?parseInt(a):2,a=a>2?a:2,c=b.lastIndexOf("."),c>=0)){for(;c>=0&&a>1;)c=b.lastIndexOf(".",c-1),a--;s.ha=c>0?b.substring(c):b}return s.ha};s.c_r=s.cookieRead=function(b){b=s.escape(b);var a=" "+s.d.cookie,c=a.indexOf(" "+b+"="),e=c<0?c:a.indexOf(";",c);b=c<0?"":s.unescape(a.substring(c+2+b.length,e<0?a.length:e));return b!="[[B]]"?b:""};s.c_w=s.cookieWrite=function(b,a,c){var e=s.Qa(),d=s.cookieLifetime,f;a=""+a;d=d?(""+d).toUpperCase():"";c&&d!="SESSION"&&d!="NONE"&&((f=a!=
""?parseInt(d?d:0):-60)?(c=new Date,c.setTime(c.getTime()+f*1E3)):c==1&&(c=new Date,f=c.getYear(),c.setYear(f+5+(f<1900?1900:0))));if(b&&d!="NONE")return s.d.cookie=b+"="+s.escape(a!=""?a:"[[B]]")+"; path=/;"+(c&&d!="SESSION"?" expires="+c.toGMTString()+";":"")+(e?" domain="+e+";":""),s.cookieRead(b)==a;return 0};s.D=[];s.C=function(b,a,c){if(s.ia)return 0;if(!s.maxDelay)s.maxDelay=250;var e=0,d=(new Date).getTime()+s.maxDelay,f=s.d.mb,i=["webkitvisibilitychange","visibilitychange"];if(!f)f=s.d.nb;
if(f&&f=="prerender"){if(!s.V){s.V=1;for(c=0;c<i.length;c++)s.d.addEventListener(i[c],function(){var b=s.d.mb;if(!b)b=s.d.nb;if(b=="visible")s.V=0,s.delayReady()})}e=1;d=0}else c||s.r("_d")&&(e=1);e&&(s.D.push({m:b,a:a,t:d}),s.V||setTimeout(s.delayReady,s.maxDelay));return e};s.delayReady=function(){var b=(new Date).getTime(),a=0,c;for(s.r("_d")&&(a=1);s.D.length>0;){c=s.D.shift();if(a&&!c.t&&c.t>b){s.D.unshift(c);setTimeout(s.delayReady,parseInt(s.maxDelay/2));break}s.ia=1;s[c.m].apply(s,c.a);s.ia=
0}};s.setAccount=s.sa=function(b){var a,c;if(!s.C("setAccount",arguments))if(s.account=b,s.allAccounts){a=s.allAccounts.concat(b.split(","));s.allAccounts=[];a.sort();for(c=0;c<a.length;c++)(c==0||a[c-1]!=a[c])&&s.allAccounts.push(a[c])}else s.allAccounts=b.split(",")};s.foreachVar=function(b,a){var c,e,d,f,i="";d=e="";if(s.lightProfileID)c=s.H,(i=s.lightTrackVars)&&(i=","+i+","+s.Y.join(",")+",");else{c=s.c;if(s.pe||s.linkType)if(i=s.linkTrackVars,e=s.linkTrackEvents,s.pe&&(d=s.pe.substring(0,1).toUpperCase()+
s.pe.substring(1),s[d]))i=s[d].lb,e=s[d].kb;i&&(i=","+i+","+s.A.join(",")+",");e&&i&&(i+=",events,")}a&&(a=","+a+",");for(e=0;e<c.length;e++)d=c[e],(f=s[d])&&(!i||i.indexOf(","+d+",")>=0)&&(!a||a.indexOf(","+d+",")>=0)&&b(d,f)};s.J=function(b,a,c,e,d){var f="",i,m,w,q,g=0;b=="contextData"&&(b="c");if(a){for(i in a)if(!Object.prototype[i]&&(!d||i.substring(0,d.length)==d)&&a[i]&&(!c||c.indexOf(","+(e?e+".":"")+i+",")>=0)){w=!1;if(g)for(m=0;m<g.length;m++)i.substring(0,g[m].length)==g[m]&&(w=!0);if(!w&&
(f==""&&(f+="&"+b+"."),m=a[i],d&&(i=i.substring(d.length)),i.length>0))if(w=i.indexOf("."),w>0)m=i.substring(0,w),w=(d?d:"")+m+".",g||(g=[]),g.push(w),f+=s.J(m,a,c,e,w);else if(typeof m=="boolean"&&(m=m?"true":"false"),m){if(e=="retrieveLightData"&&d.indexOf(".contextData.")<0)switch(w=i.substring(0,4),q=i.substring(4),i){case "transactionID":i="xact";break;case "channel":i="ch";break;case "campaign":i="v0";break;default:s.oa(q)&&(w=="prop"?i="c"+q:w=="eVar"?i="v"+q:w=="list"?i="l"+q:w=="hier"&&(i=
"h"+q,m=m.substring(0,255)))}f+="&"+s.escape(i)+"="+s.escape(m)}}f!=""&&(f+="&."+b)}return f};s.Sa=function(){var b="",a,c,e,d,f,i,m,w,g="",k="",j=c="";if(s.lightProfileID)a=s.H,(g=s.lightTrackVars)&&(g=","+g+","+s.Y.join(",")+",");else{a=s.c;if(s.pe||s.linkType)if(g=s.linkTrackVars,k=s.linkTrackEvents,s.pe&&(c=s.pe.substring(0,1).toUpperCase()+s.pe.substring(1),s[c]))g=s[c].lb,k=s[c].kb;g&&(g=","+g+","+s.A.join(",")+",");k&&(k=","+k+",",g&&(g+=",events,"));s.events2&&(j+=(j!=""?",":"")+s.events2)}s.AudienceManagement&&
s.AudienceManagement.isReady()&&(b+=s.J("d",s.AudienceManagement.getEventCallConfigParams()));for(c=0;c<a.length;c++){d=a[c];f=s[d];e=d.substring(0,4);i=d.substring(4);!f&&d=="events"&&j&&(f=j,j="");if(f&&(!g||g.indexOf(","+d+",")>=0)){switch(d){case "supplementalDataID":d="sdid";break;case "timestamp":d="ts";break;case "dynamicVariablePrefix":d="D";break;case "visitorID":d="vid";break;case "marketingCloudVisitorID":d="mid";break;case "analyticsVisitorID":d="aid";break;case "audienceManagerLocationHint":d=
"aamlh";break;case "audienceManagerBlob":d="aamb";break;case "pageURL":d="g";if(f.length>255)s.pageURLRest=f.substring(255),f=f.substring(0,255);break;case "pageURLRest":d="-g";break;case "referrer":d="r";break;case "vmk":case "visitorMigrationKey":d="vmt";break;case "visitorMigrationServer":d="vmf";s.ssl&&s.visitorMigrationServerSecure&&(f="");break;case "visitorMigrationServerSecure":d="vmf";!s.ssl&&s.visitorMigrationServer&&(f="");break;case "charSet":d="ce";break;case "visitorNamespace":d="ns";
break;case "cookieDomainPeriods":d="cdp";break;case "cookieLifetime":d="cl";break;case "variableProvider":d="vvp";break;case "currencyCode":d="cc";break;case "channel":d="ch";break;case "transactionID":d="xact";break;case "campaign":d="v0";break;case "resolution":d="s";break;case "colorDepth":d="c";break;case "javascriptVersion":d="j";break;case "javaEnabled":d="v";break;case "cookiesEnabled":d="k";break;case "browserWidth":d="bw";break;case "browserHeight":d="bh";break;case "connectionType":d="ct";
break;case "homepage":d="hp";break;case "plugins":d="p";break;case "events":j&&(f+=(f!=""?",":"")+j);if(k){i=f.split(",");f="";for(e=0;e<i.length;e++)m=i[e],w=m.indexOf("="),w>=0&&(m=m.substring(0,w)),w=m.indexOf(":"),w>=0&&(m=m.substring(0,w)),k.indexOf(","+m+",")>=0&&(f+=(f?",":"")+i[e])}break;case "events2":f="";break;case "contextData":b+=s.J("c",s[d],g,d);f="";break;case "lightProfileID":d="mtp";break;case "lightStoreForSeconds":d="mtss";s.lightProfileID||(f="");break;case "lightIncrementBy":d=
"mti";s.lightProfileID||(f="");break;case "retrieveLightProfiles":d="mtsr";break;case "deleteLightProfiles":d="mtsd";break;case "retrieveLightData":s.retrieveLightProfiles&&(b+=s.J("mts",s[d],g,d));f="";break;default:s.oa(i)&&(e=="prop"?d="c"+i:e=="eVar"?d="v"+i:e=="list"?d="l"+i:e=="hier"&&(d="h"+i,f=f.substring(0,255)))}f&&(b+="&"+d+"="+(d.substring(0,3)!="pev"?s.escape(f):f))}d=="pev3"&&s.g&&(b+=s.g)}return b};s.v=function(s){var a=s.tagName;if(""+s.sb!="undefined"||""+s.eb!="undefined"&&(""+s.eb).toUpperCase()!=
"HTML")return"";a=a&&a.toUpperCase?a.toUpperCase():"";a=="SHAPE"&&(a="");a&&((a=="INPUT"||a=="BUTTON")&&s.type&&s.type.toUpperCase?a=s.type.toUpperCase():!a&&s.href&&(a="A"));return a};s.ka=function(s){var a=s.href?s.href:"",c,e,d;c=a.indexOf(":");e=a.indexOf("?");d=a.indexOf("/");if(a&&(c<0||e>=0&&c>e||d>=0&&c>d))e=s.protocol&&s.protocol.length>1?s.protocol:l.protocol?l.protocol:"",c=l.pathname.lastIndexOf("/"),a=(e?e+"//":"")+(s.host?s.host:l.host?l.host:"")+(h.substring(0,1)!="/"?l.pathname.substring(0,
c<0?0:c)+"/":"")+a;return a};s.F=function(b){var a=s.v(b),c,e,d="",f=0;if(a){c=b.protocol;e=b.onclick;if(b.href&&(a=="A"||a=="AREA")&&(!e||!c||c.toLowerCase().indexOf("javascript")<0))d=s.ka(b);else if(e)d=s.replace(s.replace(s.replace(s.replace(""+e,"\r",""),"\n",""),"\t","")," ",""),f=2;else if(a=="INPUT"||a=="SUBMIT"){if(b.value)d=b.value;else if(b.innerText)d=b.innerText;else if(b.textContent)d=b.textContent;f=3}else if(b.src&&a=="IMAGE")d=b.src;if(d)return{id:d.substring(0,100),type:f}}return 0};
s.pb=function(b){for(var a=s.v(b),c=s.F(b);b&&!c&&a!="BODY";)if(b=b.parentElement?b.parentElement:b.parentNode)a=s.v(b),c=s.F(b);if(!c||a=="BODY")b=0;if(b&&(a=b.onclick?""+b.onclick:"",a.indexOf(".tl(")>=0||a.indexOf(".trackLink(")>=0))b=0;return b};s.bb=function(){var b,a,c=s.linkObject,e=s.linkType,d=s.linkURL,f,i;s.Z=1;if(!c)s.Z=0,c=s.j;if(c){b=s.v(c);for(a=s.F(c);c&&!a&&b!="BODY";)if(c=c.parentElement?c.parentElement:c.parentNode)b=s.v(c),a=s.F(c);if(!a||b=="BODY")c=0;if(c){var m=c.onclick?""+
c.onclick:"";if(m.indexOf(".tl(")>=0||m.indexOf(".trackLink(")>=0)c=0}}else s.Z=1;!d&&c&&(d=s.ka(c));d&&!s.linkLeaveQueryString&&(f=d.indexOf("?"),f>=0&&(d=d.substring(0,f)));if(!e&&d){var g=0,k=0,j;if(s.trackDownloadLinks&&s.linkDownloadFileTypes){m=d.toLowerCase();f=m.indexOf("?");i=m.indexOf("#");f>=0?i>=0&&i<f&&(f=i):f=i;f>=0&&(m=m.substring(0,f));f=s.linkDownloadFileTypes.toLowerCase().split(",");for(i=0;i<f.length;i++)(j=f[i])&&m.substring(m.length-(j.length+1))=="."+j&&(e="d")}if(s.trackExternalLinks&&
!e&&(m=d.toLowerCase(),s.na(m))){if(!s.linkInternalFilters)s.linkInternalFilters=w.location.hostname;f=0;s.linkExternalFilters?(f=s.linkExternalFilters.toLowerCase().split(","),g=1):s.linkInternalFilters&&(f=s.linkInternalFilters.toLowerCase().split(","));if(f){for(i=0;i<f.length;i++)j=f[i],m.indexOf(j)>=0&&(k=1);k?g&&(e="e"):g||(e="e")}}}s.linkObject=c;s.linkURL=d;s.linkType=e;if(s.trackClickMap||s.trackInlineStats)if(s.g="",c){e=s.pageName;d=1;c=c.sourceIndex;if(!e)e=s.pageURL,d=0;if(w.s_objectID)a.id=
w.s_objectID,c=a.type=1;if(e&&a&&a.id&&b)s.g="&pid="+s.escape(e.substring(0,255))+(d?"&pidt="+d:"")+"&oid="+s.escape(a.id.substring(0,100))+(a.type?"&oidt="+a.type:"")+"&ot="+b+(c?"&oi="+c:"")}};s.Ta=function(){var b=s.Z,a=s.linkType,c=s.linkURL,e=s.linkName;if(a&&(c||e))a=a.toLowerCase(),a!="d"&&a!="e"&&(a="o"),s.pe="lnk_"+a,s.pev1=c?s.escape(c):"",s.pev2=e?s.escape(e):"",b=1;s.abort&&(b=0);if(s.trackClickMap||s.trackInlineStats){a={};c=0;var d=s.cookieRead("s_sq"),f=d?d.split("&"):0,i,w,g;d=0;if(f)for(i=
0;i<f.length;i++)w=f[i].split("="),e=s.unescape(w[0]).split(","),w=s.unescape(w[1]),a[w]=e;e=s.account.split(",");if(b||s.g){b&&!s.g&&(d=1);for(w in a)if(!Object.prototype[w])for(i=0;i<e.length;i++){d&&(g=a[w].join(","),g==s.account&&(s.g+=(w.charAt(0)!="&"?"&":"")+w,a[w]=[],c=1));for(f=0;f<a[w].length;f++)g=a[w][f],g==e[i]&&(d&&(s.g+="&u="+s.escape(g)+(w.charAt(0)!="&"?"&":"")+w+"&u=0"),a[w].splice(f,1),c=1)}b||(c=1);if(c){d="";i=2;!b&&s.g&&(d=s.escape(e.join(","))+"="+s.escape(s.g),i=1);for(w in a)!Object.prototype[w]&&
i>0&&a[w].length>0&&(d+=(d?"&":"")+s.escape(a[w].join(","))+"="+s.escape(w),i--);s.cookieWrite("s_sq",d)}}}return b};s.Ua=function(){if(!s.jb){var b=new Date,a=j.location,c,e,d,f=d=e=c="",i="",w="",g="1.2",k=s.cookieWrite("s_cc","true",0)?"Y":"N",o="",p="",n=0;if(b.setUTCDate&&(g="1.3",n.toPrecision&&(g="1.5",c=[],c.forEach))){g="1.6";d=0;e={};try{d=new Iterator(e),d.next&&(g="1.7",c.reduce&&(g="1.8",g.trim&&(g="1.8.1",Date.parse&&(g="1.8.2",Object.create&&(g="1.8.5")))))}catch(r){}}c=screen.width+
"x"+screen.height;d=navigator.javaEnabled()?"Y":"N";e=screen.pixelDepth?screen.pixelDepth:screen.colorDepth;i=s.w.innerWidth?s.w.innerWidth:s.d.documentElement.offsetWidth;w=s.w.innerHeight?s.w.innerHeight:s.d.documentElement.offsetHeight;b=navigator.plugins;try{s.b.addBehavior("#default#homePage"),o=s.b.qb(a)?"Y":"N"}catch(t){}try{s.b.addBehavior("#default#clientCaps"),p=s.b.connectionType}catch(u){}if(b)for(;n<b.length&&n<30;){if(a=b[n].name)a=a.substring(0,100)+";",f.indexOf(a)<0&&(f+=a);n++}s.resolution=
c;s.colorDepth=e;s.javascriptVersion=g;s.javaEnabled=d;s.cookiesEnabled=k;s.browserWidth=i;s.browserHeight=w;s.connectionType=p;s.homepage=o;s.plugins=f;s.jb=1}};s.I={};s.loadModule=function(b,a){var c=s.I[b];if(!c){c=w["AppMeasurement_Module_"+b]?new w["AppMeasurement_Module_"+b](s):{};s.I[b]=s[b]=c;c.Ba=function(){return c.Ea};c.Fa=function(a){if(c.Ea=a)s[b+"_onLoad"]=a,s.C(b+"_onLoad",[s,c],1)||a(s,c)};try{Object.defineProperty?Object.defineProperty(c,"onLoad",{get:c.Ba,set:c.Fa}):c._olc=1}catch(e){c._olc=
1}}a&&(s[b+"_onLoad"]=a,s.C(b+"_onLoad",[s,c],1)||a(s,c))};s.r=function(b){var a,c;for(a in s.I)if(!Object.prototype[a]&&(c=s.I[a])){if(c._olc&&c.onLoad)c._olc=0,c.onLoad(s,c);if(c[b]&&c[b]())return 1}return 0};s.Xa=function(){var b=Math.floor(Math.random()*1E13),a=s.visitorSampling,c=s.visitorSamplingGroup;c="s_vsn_"+(s.visitorNamespace?s.visitorNamespace:s.account)+(c?"_"+c:"");var e=s.cookieRead(c);if(a){e&&(e=parseInt(e));if(!e){if(!s.cookieWrite(c,b))return 0;e=b}if(e%1E4>v)return 0}return 1};
s.K=function(b,a){var c,e,d,f,w,g;for(c=0;c<2;c++){e=c>0?s.ea:s.c;for(d=0;d<e.length;d++)if(f=e[d],(w=b[f])||b["!"+f]){if(!a&&(f=="contextData"||f=="retrieveLightData")&&s[f])for(g in s[f])w[g]||(w[g]=s[f][g]);s[f]=w}}};s.wa=function(b,a){var c,e,d,f;for(c=0;c<2;c++){e=c>0?s.ea:s.c;for(d=0;d<e.length;d++)f=e[d],b[f]=s[f],!a&&!b[f]&&(b["!"+f]=1)}};s.Pa=function(s){var a,c,e,d,f,w=0,g,k="",j="";if(s&&s.length>255&&(a=""+s,c=a.indexOf("?"),c>0&&(g=a.substring(c+1),a=a.substring(0,c),d=a.toLowerCase(),
e=0,d.substring(0,7)=="http://"?e+=7:d.substring(0,8)=="https://"&&(e+=8),c=d.indexOf("/",e),c>0&&(d=d.substring(e,c),f=a.substring(c),a=a.substring(0,c),d.indexOf("google")>=0?w=",q,ie,start,search_key,word,kw,cd,":d.indexOf("yahoo.co")>=0&&(w=",p,ei,"),w&&g)))){if((s=g.split("&"))&&s.length>1){for(e=0;e<s.length;e++)d=s[e],c=d.indexOf("="),c>0&&w.indexOf(","+d.substring(0,c)+",")>=0?k+=(k?"&":"")+d:j+=(j?"&":"")+d;k&&j?g=k+"&"+j:j=""}c=253-(g.length-j.length)-a.length;s=a+(c>0?f.substring(0,c):
"")+"?"+g}return s};s.S=!1;s.O=!1;s.Da=function(b){s.marketingCloudVisitorID=b;s.O=!0;s.l()};s.P=!1;s.L=!1;s.ya=function(b){s.analyticsVisitorID=b;s.L=!0;s.l()};s.R=!1;s.N=!1;s.Aa=function(b){s.audienceManagerLocationHint=b;s.N=!0;s.l()};s.Q=!1;s.M=!1;s.za=function(b){s.audienceManagerBlob=b;s.M=!0;s.l()};s.isReadyToTrack=function(){var b=!0,a=s.visitor;if(a&&a.isAllowed()){if(!s.S&&!s.marketingCloudVisitorID&&a.getMarketingCloudVisitorID&&(s.S=!0,s.marketingCloudVisitorID=a.getMarketingCloudVisitorID([s,
s.Da]),s.marketingCloudVisitorID))s.O=!0;if(!s.P&&!s.analyticsVisitorID&&a.getAnalyticsVisitorID&&(s.P=!0,s.analyticsVisitorID=a.getAnalyticsVisitorID([s,s.ya]),s.analyticsVisitorID))s.L=!0;if(!s.R&&!s.audienceManagerLocationHint&&a.getAudienceManagerLocationHint&&(s.R=!0,s.audienceManagerLocationHint=a.getAudienceManagerLocationHint([s,s.Aa]),s.audienceManagerLocationHint))s.N=!0;if(!s.Q&&!s.audienceManagerBlob&&a.getAudienceManagerBlob&&(s.Q=!0,s.audienceManagerBlob=a.getAudienceManagerBlob([s,
s.za]),s.audienceManagerBlob))s.M=!0;if(s.S&&!s.O&&!s.marketingCloudVisitorID||s.P&&!s.L&&!s.analyticsVisitorID||s.R&&!s.N&&!s.audienceManagerLocationHint||s.Q&&!s.M&&!s.audienceManagerBlob)b=!1}return b};s.k=k;s.o=0;s.callbackWhenReadyToTrack=function(b,a,c){var e;e={};e.Ja=b;e.Ia=a;e.Ga=c;if(s.k==k)s.k=[];s.k.push(e);if(s.o==0)s.o=setInterval(s.l,100)};s.l=function(){var b;if(s.isReadyToTrack()){if(s.o)clearInterval(s.o),s.o=0;if(s.k!=k)for(;s.k.length>0;)b=s.k.shift(),b.Ia.apply(b.Ja,b.Ga)}};s.Ca=
function(b){var a,c,e=k,d=k;if(!s.isReadyToTrack()){a=[];if(b!=k)for(c in e={},b)e[c]=b[c];d={};s.wa(d,!0);a.push(e);a.push(d);s.callbackWhenReadyToTrack(s,s.track,a);return!0}return!1};s.Ra=function(){var b=s.cookieRead("s_fid"),a="",c="",e;e=8;var d=4;if(!b||b.indexOf("-")<0){for(b=0;b<16;b++)e=Math.floor(Math.random()*e),a+="0123456789ABCDEF".substring(e,e+1),e=Math.floor(Math.random()*d),c+="0123456789ABCDEF".substring(e,e+1),e=d=16;b=a+"-"+c}s.cookieWrite("s_fid",b,1)||(b=0);return b};s.t=s.track=
function(b,a){var c,e=new Date,d="s"+Math.floor(e.getTime()/108E5)%10+Math.floor(Math.random()*1E13),f=e.getYear();f="t="+s.escape(e.getDate()+"/"+e.getMonth()+"/"+(f<1900?f+1900:f)+" "+e.getHours()+":"+e.getMinutes()+":"+e.getSeconds()+" "+e.getDay()+" "+e.getTimezoneOffset());if(!s.supplementalDataID&&s.visitor&&s.visitor.getSupplementalDataID)s.supplementalDataID=s.visitor.getSupplementalDataID("AppMeasurement:"+s._in,s.expectSupplementalData?!1:!0);s.r("_s");if(!s.C("track",arguments)){if(!s.Ca(b)){a&&
s.K(a);b&&(c={},s.wa(c,0),s.K(b));if(s.Xa()){if(!s.analyticsVisitorID&&!s.marketingCloudVisitorID)s.fid=s.Ra();s.bb();s.usePlugins&&s.doPlugins&&s.doPlugins(s);if(s.account){if(!s.abort){if(s.trackOffline&&!s.timestamp)s.timestamp=Math.floor(e.getTime()/1E3);e=w.location;if(!s.pageURL)s.pageURL=e.href?e.href:e;if(!s.referrer&&!s.xa)s.referrer=j.document.referrer,s.xa=1;s.referrer=s.Pa(s.referrer);s.r("_g")}if(s.Ta()&&!s.abort)s.Ua(),f+=s.Sa(),s.ab(d,f),s.r("_t"),s.referrer=""}}b&&s.K(c,1)}s.abort=
s.supplementalDataID=s.timestamp=s.pageURLRest=s.linkObject=s.j=s.linkURL=s.linkName=s.linkType=w.rb=s.pe=s.pev1=s.pev2=s.pev3=s.g=0}};s.tl=s.trackLink=function(b,a,c,e,d){s.linkObject=b;s.linkType=a;s.linkName=c;if(d)s.i=b,s.q=d;return s.track(e)};s.trackLight=function(b,a,c,e){s.lightProfileID=b;s.lightStoreForSeconds=a;s.lightIncrementBy=c;return s.track(e)};s.clearVars=function(){var b,a;for(b=0;b<s.c.length;b++)if(a=s.c[b],a.substring(0,4)=="prop"||a.substring(0,4)=="eVar"||a.substring(0,4)==
"hier"||a.substring(0,4)=="list"||a=="channel"||a=="events"||a=="eventList"||a=="products"||a=="productList"||a=="purchaseID"||a=="transactionID"||a=="state"||a=="zip"||a=="campaign")s[a]=void 0};s.ab=function(b,a){var c,e=s.trackingServer;c="";var d=s.dc,f="sc.",w=s.visitorNamespace;if(e){if(s.trackingServerSecure&&s.ssl)e=s.trackingServerSecure}else{if(!w)w=s.account,e=w.indexOf(","),e>=0&&(w=w.substring(0,e)),w=w.replace(/[^A-Za-z0-9]/g,"");c||(c="2o7.net");d=d?(""+d).toLowerCase():"d1";c=="2o7.net"&&
(d=="d1"?d="112":d=="d2"&&(d="122"),f="");e=w+"."+d+"."+f+c}c=s.ssl?"https://":"http://";d=s.AudienceManagement&&s.AudienceManagement.isReady();c+=e+"/b/ss/"+s.account+"/"+(s.mobile?"5.":"")+(d?"10":"1")+"/JS-"+s.version+(s.ib?"T":"")+"/"+b+"?AQB=1&ndh=1&"+(d?"callback=s_c_il["+s._in+"].AudienceManagement.passData&":"")+a+"&AQE=1";s.Wa&&(c=c.substring(0,2047));s.Na(c);s.W()};s.Na=function(b){s.e||s.Va();s.e.push(b);s.X=s.u();s.va()};s.Va=function(){s.e=s.Ya();if(!s.e)s.e=[]};s.Ya=function(){var b,
a;if(s.ba()){try{(a=w.localStorage.getItem(s.$()))&&(b=w.JSON.parse(a))}catch(c){}return b}};s.ba=function(){var b=!0;if(!s.trackOffline||!s.offlineFilename||!w.localStorage||!w.JSON)b=!1;return b};s.la=function(){var b=0;if(s.e)b=s.e.length;s.z&&b++;return b};s.W=function(){if(!s.z)if(s.ma=k,s.aa)s.X>s.G&&s.ta(s.e),s.da(500);else{var b=s.Ha();if(b>0)s.da(b);else if(b=s.ja())s.z=1,s.$a(b),s.fb(b)}};s.da=function(b){if(!s.ma)b||(b=0),s.ma=setTimeout(s.W,b)};s.Ha=function(){var b;if(!s.trackOffline||
s.offlineThrottleDelay<=0)return 0;b=s.u()-s.ra;if(s.offlineThrottleDelay<b)return 0;return s.offlineThrottleDelay-b};s.ja=function(){if(s.e.length>0)return s.e.shift()};s.$a=function(b){if(s.debugTracking){var a="AppMeasurement Debug: "+b;b=b.split("&");var c;for(c=0;c<b.length;c++)a+="\n\t"+s.unescape(b[c]);s.Za(a)}};s.fb=function(b){var a,c,e;if(!a&&s.d.createElement&&s.AudienceManagement&&s.AudienceManagement.isReady()&&(a=s.d.createElement("SCRIPT"))&&"async"in a)(e=(e=s.d.getElementsByTagName("HEAD"))&&
e[0]?e[0]:s.d.body)?(a.type="text/javascript",a.setAttribute("async","async"),c=3):a=0;if(!a)a=new Image,a.alt="";a.ga=function(){try{if(s.ca)clearTimeout(s.ca),s.ca=0;if(a.timeout)clearTimeout(a.timeout),a.timeout=0}catch(b){}};a.onload=a.hb=function(){a.ga();s.Ma();s.T();s.z=0;s.W()};a.onabort=a.onerror=a.Oa=function(){a.ga();(s.trackOffline||s.aa)&&s.z&&s.e.unshift(s.La);s.z=0;s.X>s.G&&s.ta(s.e);s.T();s.da(500)};a.onreadystatechange=function(){a.readyState==4&&(a.status==200?a.hb():a.Oa())};s.ra=
s.u();if(c==1)a.open("GET",b,!0),a.send();else if(c==2)a.open("GET",b),a.send();else if(a.src=b,c==3){if(s.pa)try{e.removeChild(s.pa)}catch(d){}e.firstChild?e.insertBefore(a,e.firstChild):e.appendChild(a);s.pa=s.Ka}if(a.abort)s.ca=setTimeout(a.abort,5E3);s.La=b;s.Ka=w["s_i_"+s.replace(s.account,",","_")]=a;if(s.useForcedLinkTracking&&s.B||s.q){if(!s.forcedLinkTrackingTimeout)s.forcedLinkTrackingTimeout=250;s.U=setTimeout(s.T,s.forcedLinkTrackingTimeout)}};s.Ma=function(){if(s.ba()&&!(s.qa>s.G))try{w.localStorage.removeItem(s.$()),
s.qa=s.u()}catch(b){}};s.ta=function(b){if(s.ba()){s.va();try{w.localStorage.setItem(s.$(),w.JSON.stringify(b)),s.G=s.u()}catch(a){}}};s.va=function(){if(s.trackOffline){if(!s.offlineLimit||s.offlineLimit<=0)s.offlineLimit=10;for(;s.e.length>s.offlineLimit;)s.ja()}};s.forceOffline=function(){s.aa=!0};s.forceOnline=function(){s.aa=!1};s.$=function(){return s.offlineFilename+"-"+s.visitorNamespace+s.account};s.u=function(){return(new Date).getTime()};s.na=function(s){s=s.toLowerCase();if(s.indexOf("#")!=
0&&s.indexOf("about:")!=0&&s.indexOf("opera:")!=0&&s.indexOf("javascript:")!=0)return!0;return!1};s.setTagContainer=function(b){var a,c,e;s.ib=b;for(a=0;a<s._il.length;a++)if((c=s._il[a])&&c._c=="s_l"&&c.tagContainerName==b){s.K(c);if(c.lmq)for(a=0;a<c.lmq.length;a++)e=c.lmq[a],s.loadModule(e.n);if(c.ml)for(e in c.ml)if(s[e])for(a in b=s[e],e=c.ml[e],e)if(!Object.prototype[a]&&(typeof e[a]!="function"||(""+e[a]).indexOf("s_c_il")<0))b[a]=e[a];if(c.mmq)for(a=0;a<c.mmq.length;a++)e=c.mmq[a],s[e.m]&&
(b=s[e.m],b[e.f]&&typeof b[e.f]=="function"&&(e.a?b[e.f].apply(b,e.a):b[e.f].apply(b)));if(c.tq)for(a=0;a<c.tq.length;a++)s.track(c.tq[a]);c.s=s;break}};s.Util={urlEncode:s.escape,urlDecode:s.unescape,cookieRead:s.cookieRead,cookieWrite:s.cookieWrite,getQueryParam:function(b,a,c){var e;a||(a=s.pageURL?s.pageURL:w.location);c||(c="&");if(b&&a&&(a=""+a,e=a.indexOf("?"),e>=0&&(a=c+a.substring(e+1)+c,e=a.indexOf(c+b+"="),e>=0&&(a=a.substring(e+c.length+b.length+1),e=a.indexOf(c),e>=0&&(a=a.substring(0,
e)),a.length>0))))return s.unescape(a);return""}};s.A=["supplementalDataID","timestamp","dynamicVariablePrefix","visitorID","marketingCloudVisitorID","analyticsVisitorID","audienceManagerLocationHint","fid","vmk","visitorMigrationKey","visitorMigrationServer","visitorMigrationServerSecure","charSet","visitorNamespace","cookieDomainPeriods","fpCookieDomainPeriods","cookieLifetime","pageName","pageURL","referrer","contextData","currencyCode","lightProfileID","lightStoreForSeconds","lightIncrementBy",
"retrieveLightProfiles","deleteLightProfiles","retrieveLightData","pe","pev1","pev2","pev3","pageURLRest"];s.c=s.A.concat(["purchaseID","variableProvider","channel","server","pageType","transactionID","campaign","state","zip","events","events2","products","audienceManagerBlob","tnt"]);s.Y=["timestamp","charSet","visitorNamespace","cookieDomainPeriods","cookieLifetime","contextData","lightProfileID","lightStoreForSeconds","lightIncrementBy"];s.H=s.Y.slice(0);s.ea=["account","allAccounts","debugTracking",
"visitor","trackOffline","offlineLimit","offlineThrottleDelay","offlineFilename","usePlugins","doPlugins","configURL","visitorSampling","visitorSamplingGroup","linkObject","linkURL","linkName","linkType","trackDownloadLinks","trackExternalLinks","trackClickMap","trackInlineStats","linkLeaveQueryString","linkTrackVars","linkTrackEvents","linkDownloadFileTypes","linkExternalFilters","linkInternalFilters","useForcedLinkTracking","forcedLinkTrackingTimeout","trackingServer","trackingServerSecure","ssl",
"abort","mobile","dc","lightTrackVars","maxDelay","expectSupplementalData","AudienceManagement"];for(g=0;g<=75;g++)s.c.push("prop"+g),s.H.push("prop"+g),s.c.push("eVar"+g),s.H.push("eVar"+g),g<6&&s.c.push("hier"+g),g<4&&s.c.push("list"+g);g=["resolution","colorDepth","javascriptVersion","javaEnabled","cookiesEnabled","browserWidth","browserHeight","connectionType","homepage","plugins"];s.c=s.c.concat(g);s.A=s.A.concat(g);s.ssl=w.location.protocol.toLowerCase().indexOf("https")>=0;s.charSet="UTF-8";
s.contextData={};s.offlineThrottleDelay=0;s.offlineFilename="AppMeasurement.offline";s.ra=0;s.X=0;s.G=0;s.qa=0;s.linkDownloadFileTypes="exe,zip,wav,mp3,mov,mpg,avi,wmv,pdf,doc,docx,xls,xlsx,ppt,pptx";s.w=w;s.d=w.document;try{s.Wa=navigator.appName=="Microsoft Internet Explorer"}catch(n){}s.T=function(){if(s.U)w.clearTimeout(s.U),s.U=k;s.i&&s.B&&s.i.dispatchEvent(s.B);if(s.q)if(typeof s.q=="function")s.q();else if(s.i&&s.i.href)s.d.location=s.i.href;s.i=s.B=s.q=0};s.ua=function(){s.b=s.d.body;if(s.b)if(s.p=
function(b){var a,c,e,d,f;if(!(s.d&&s.d.getElementById("cppXYctnr")||b&&b.cb)){if(s.fa)if(s.useForcedLinkTracking)s.b.removeEventListener("click",s.p,!1);else{s.b.removeEventListener("click",s.p,!0);s.fa=s.useForcedLinkTracking=0;return}else s.useForcedLinkTracking=0;s.j=b.srcElement?b.srcElement:b.target;try{if(s.j&&(s.j.tagName||s.j.parentElement||s.j.parentNode))if(e=s.la(),s.track(),e<s.la()&&s.useForcedLinkTracking&&b.target){for(d=b.target;d&&d!=s.b&&d.tagName.toUpperCase()!="A"&&d.tagName.toUpperCase()!=
"AREA";)d=d.parentNode;if(d&&(f=d.href,s.na(f)||(f=0),c=d.target,b.target.dispatchEvent&&f&&(!c||c=="_self"||c=="_top"||c=="_parent"||w.name&&c==w.name))){try{a=s.d.createEvent("MouseEvents")}catch(g){a=new w.MouseEvent}if(a){try{a.initMouseEvent("click",b.bubbles,b.cancelable,b.view,b.detail,b.screenX,b.screenY,b.clientX,b.clientY,b.ctrlKey,b.altKey,b.shiftKey,b.metaKey,b.button,b.relatedTarget)}catch(j){a=0}if(a)a.cb=1,b.stopPropagation(),b.gb&&b.gb(),b.preventDefault(),s.i=b.target,s.B=a}}}}catch(k){}s.j=
0}},s.b&&s.b.attachEvent)s.b.attachEvent("onclick",s.p);else{if(s.b&&s.b.addEventListener){if(navigator&&(navigator.userAgent.indexOf("WebKit")>=0&&s.d.createEvent||navigator.userAgent.indexOf("Firefox/2")>=0&&w.MouseEvent))s.fa=1,s.useForcedLinkTracking=1,s.b.addEventListener("click",s.p,!0);s.b.addEventListener("click",s.p,!1)}}else setTimeout(s.ua,30)};s.ua()}
function s_gi(s){var w,k=window.s_c_il,j,g,o=s.split(","),p,n,b=0;if(k)for(j=0;!b&&j<k.length;){w=k[j];if(w._c=="s_c"&&(w.account||w.oun))if(w.account&&w.account==s)b=1;else{g=w.account?w.account:w.oun;g=w.allAccounts?w.allAccounts:g.split(",");for(p=0;p<o.length;p++)for(n=0;n<g.length;n++)o[p]==g[n]&&(b=1)}j++}b||(w=new AppMeasurement);w.setAccount?w.setAccount(s):w.sa&&w.sa(s);return w}AppMeasurement.getInstance=s_gi;window.s_objectID||(window.s_objectID=0);
function s_pgicq(){var s=window,w=s.s_giq,k,j,g;if(w)for(k=0;k<w.length;k++)j=w[k],g=s_gi(j.oun),g.setAccount(j.un),g.setTagContainer(j.tagContainerName);s.s_giq=0}s_pgicq();

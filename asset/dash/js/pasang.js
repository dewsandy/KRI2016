var ajaxCatChange=parent.location.protocol+"//"+window.location.hostname+"/ajax/ajax-category",AjaxRDEP=parent.location.protocol+"//"+window.location.hostname+"/ajax/get-region-detail",AjaxCFEP=parent.location.protocol+"//"+window.location.hostname+"/pasang/ajax-extra-fields",ajaxCheckMailEndPoint=parent.location.protocol+"//"+window.location.hostname+"/pasang/ajax-check-email",ajaxUploadPhoto=parent.location.protocol+"//"+window.location.hostname+"/pasang/ajax-upload/",ajaxRemovePhoto=parent.location.protocol+"//"+window.location.hostname+"/pasang/ajax-delete/",pluploadSWF=parent.location.protocol+"//"+window.location.hostname+"/plugins/plupload/plupload.flash.swf",ajaxPromoConfig=parent.location.protocol+"//"+window.location.hostname+"/ajax/get-promo-config",maxPhotoSize="5mb",maxPhotoCount=6,currentCount=$(".img-upload").length,edited=[];
var MD5=function(u){
	function N(b,a){
	return(b<<a)|(b>>>(32-a))
}
function M(k,b){
	var F,a,d,x,c;
	d=(k&2147483648);
x=(b&2147483648);
F=(k&1073741824);
a=(b&1073741824);
c=(k&1073741823)+(b&1073741823);
if(F&a){
	return(c^2147483648^d^x)
}
if(F|a){
	if(c&1073741824){
	return(c^3221225472^d^x)
}
else{
	return(c^1073741824^d^x)
}

}
else{
	return(c^d^x)
}

}
function t(a,c,b){
	return(a&c)|((~a)&b)
}
function s(a,c,b){
	return(a&b)|(c&(~b))
}
function r(a,c,b){
	return(a^c^b)
}
function p(a,c,b){
	return(c^(a|(~b)))
}
function w(G,F,ac,ab,k,H,I){
	G=M(G,M(M(t(F,ac,ab),k),I));
	return M(N(G,H),F)
}
function g(G,F,ac,ab,k,H,I){
	G=M(G,M(M(s(F,ac,ab),k),I));
	return M(N(G,H),F)
}
function J(G,F,ac,ab,k,H,I){
	G=M(G,M(M(r(F,ac,ab),k),I));
	return M(N(G,H),F)
}
function v(G,F,ac,ab,k,H,I){
	G=M(G,M(M(p(F,ac,ab),k),I));
	return M(N(G,H),F)
}
function f(k){
	var G;
	var d=k.length;
var c=d+8;
var b=(c-(c%64))/64;
var F=(b+1)*16;
var H=Array(F-1);
var a=0;
var x=0;
while(x<d){
	G=(x-(x%4))/4;
	a=(x%4)*8;
H[G]=(H[G]|(k.charCodeAt(x)<<a));
x++
}
G=(x-(x%4))/4;
a=(x%4)*8;
H[G]=H[G]|(128<<a);
H[F-2]=d<<3;
H[F-1]=d>>>29;
return H
}
function D(c){
	var b="",d="",k,a;
for(a=0;
	a<=3;
a++){
	k=(c>>>(a*8))&255;
	d="0"+k.toString(16);
b=b+d.substr(d.length-2,2)
}
return b
}
function L(b){
	b=b.replace(/\r\n/g,"\n");
var a="";
for(var k=0;
	k<b.length;
k++){
	var d=b.charCodeAt(k);
	if(d<128){
		a+=String.fromCharCode(d)
	}
	else{
		if((d>127)&&(d<2048)){
		a+=String.fromCharCode((d>>6)|192);
	a+=String.fromCharCode((d&63)|128)
}
else{
	a+=String.fromCharCode((d>>12)|224);
	a+=String.fromCharCode(((d>>6)&63)|128);
a+=String.fromCharCode((d&63)|128)
}

}

}
return a
}
var E=Array();
var R,j,K,y,h,aa,Z,Y,X;
var U=7,S=12,P=17,O=22;
var C=5,B=9,A=14,z=20;
var q=4,o=11,n=16,m=23;
var W=6,V=10,T=15,Q=21;
u=L(u);
E=f(u);
aa=1732584193;
Z=4023233417;
Y=2562383102;
X=271733878;
for(R=0;
	R<E.length;
R+=16){
	j=aa;
	K=Z;
y=Y;
h=X;
aa=w(aa,Z,Y,X,E[R+0],U,3614090360);
X=w(X,aa,Z,Y,E[R+1],S,3905402710);
Y=w(Y,X,aa,Z,E[R+2],P,606105819);
Z=w(Z,Y,X,aa,E[R+3],O,3250441966);
aa=w(aa,Z,Y,X,E[R+4],U,4118548399);
X=w(X,aa,Z,Y,E[R+5],S,1200080426);
Y=w(Y,X,aa,Z,E[R+6],P,2821735955);
Z=w(Z,Y,X,aa,E[R+7],O,4249261313);
aa=w(aa,Z,Y,X,E[R+8],U,1770035416);
X=w(X,aa,Z,Y,E[R+9],S,2336552879);
Y=w(Y,X,aa,Z,E[R+10],P,4294925233);
Z=w(Z,Y,X,aa,E[R+11],O,2304563134);
aa=w(aa,Z,Y,X,E[R+12],U,1804603682);
X=w(X,aa,Z,Y,E[R+13],S,4254626195);
Y=w(Y,X,aa,Z,E[R+14],P,2792965006);
Z=w(Z,Y,X,aa,E[R+15],O,1236535329);
aa=g(aa,Z,Y,X,E[R+1],C,4129170786);
X=g(X,aa,Z,Y,E[R+6],B,3225465664);
Y=g(Y,X,aa,Z,E[R+11],A,643717713);
Z=g(Z,Y,X,aa,E[R+0],z,3921069994);
aa=g(aa,Z,Y,X,E[R+5],C,3593408605);
X=g(X,aa,Z,Y,E[R+10],B,38016083);
Y=g(Y,X,aa,Z,E[R+15],A,3634488961);
Z=g(Z,Y,X,aa,E[R+4],z,3889429448);
aa=g(aa,Z,Y,X,E[R+9],C,568446438);
X=g(X,aa,Z,Y,E[R+14],B,3275163606);
Y=g(Y,X,aa,Z,E[R+3],A,4107603335);
Z=g(Z,Y,X,aa,E[R+8],z,1163531501);
aa=g(aa,Z,Y,X,E[R+13],C,2850285829);
X=g(X,aa,Z,Y,E[R+2],B,4243563512);
Y=g(Y,X,aa,Z,E[R+7],A,1735328473);
Z=g(Z,Y,X,aa,E[R+12],z,2368359562);
aa=J(aa,Z,Y,X,E[R+5],q,4294588738);
X=J(X,aa,Z,Y,E[R+8],o,2272392833);
Y=J(Y,X,aa,Z,E[R+11],n,1839030562);
Z=J(Z,Y,X,aa,E[R+14],m,4259657740);
aa=J(aa,Z,Y,X,E[R+1],q,2763975236);
X=J(X,aa,Z,Y,E[R+4],o,1272893353);
Y=J(Y,X,aa,Z,E[R+7],n,4139469664);
Z=J(Z,Y,X,aa,E[R+10],m,3200236656);
aa=J(aa,Z,Y,X,E[R+13],q,681279174);
X=J(X,aa,Z,Y,E[R+0],o,3936430074);
Y=J(Y,X,aa,Z,E[R+3],n,3572445317);
Z=J(Z,Y,X,aa,E[R+6],m,76029189);
aa=J(aa,Z,Y,X,E[R+9],q,3654602809);
X=J(X,aa,Z,Y,E[R+12],o,3873151461);
Y=J(Y,X,aa,Z,E[R+15],n,530742520);
Z=J(Z,Y,X,aa,E[R+2],m,3299628645);
aa=v(aa,Z,Y,X,E[R+0],W,4096336452);
X=v(X,aa,Z,Y,E[R+7],V,1126891415);
Y=v(Y,X,aa,Z,E[R+14],T,2878612391);
Z=v(Z,Y,X,aa,E[R+5],Q,4237533241);
aa=v(aa,Z,Y,X,E[R+12],W,1700485571);
X=v(X,aa,Z,Y,E[R+3],V,2399980690);
Y=v(Y,X,aa,Z,E[R+10],T,4293915773);
Z=v(Z,Y,X,aa,E[R+1],Q,2240044497);
aa=v(aa,Z,Y,X,E[R+8],W,1873313359);
X=v(X,aa,Z,Y,E[R+15],V,4264355552);
Y=v(Y,X,aa,Z,E[R+6],T,2734768916);
Z=v(Z,Y,X,aa,E[R+13],Q,1309151649);
aa=v(aa,Z,Y,X,E[R+4],W,4149444226);
X=v(X,aa,Z,Y,E[R+11],V,3174756917);
Y=v(Y,X,aa,Z,E[R+2],T,718787259);
Z=v(Z,Y,X,aa,E[R+9],Q,3951481745);
aa=M(aa,j);
Z=M(Z,K);
Y=M(Y,y);
X=M(X,h)
}
var l=D(aa)+D(Z)+D(Y)+D(X);
return l.toLowerCase()
}
;
tbapp.pasang={
	prop:{
	prevValues:{
	secId:null,userDefaultPoints:null,PRO_HOMEPAGE_GALLERY:null,PRO_GALLERY:null,PRO_BACKGROUND:null,PRO_BOLD:null,PRO_COLOR:null,PRO_LINK:null,PRO_LINK_VALUE:null,PRO_WATERMARK:null,aucTitle:null,catId:null,type2:null,aucAdPrice:null,aucCondition:null,aucLocation:null,aucPKab:null,aucDescr:null
}
,promoPointValue:{
	PRO_HOMEPAGE_GALLERY:150,PRO_GALLERY:60,PRO_BACKGROUND:10,PRO_BOLD:10,PRO_COLOR:1,PRO_LINK:40,PRO_WATERMARK:10
}
,promoPointExceptionCategory:{
	PRO_HOMEPAGE_GALLERY:{
	section:[],subsection:[],category:[]
}
,PRO_GALLERY:{
	section:[],subsection:[],category:[]
}
,PRO_BACKGROUND:{
	section:[],subsection:[],category:[]
}
,PRO_BOLD:{
	section:[],subsection:[],category:[]
}
,PRO_COLOR:{
	section:[],subsection:[],category:[]
}
,PRO_LINK:{
	section:[],subsection:[],category:[]
}
,PRO_WATERMARK:{
	section:[],subsection:[],category:[]
}

}

}
,init:function(a){
	this.prop=$.extend({
	
}
,this.prop,a)
}
,createAjaxManagerObject:function(b,a){
	var c={
	queue:true,cacheResponse:false
}
;
c=$.extend({
	
}
,c,a);
return $.manageAjax.create(b,c)
}
,scroll_error:function(b,a){
	destination=$(b).offset().top-100;
	a=a||"";
$("html:not(:animated),body:not(:animated)").animate({
	scrollTop:destination
}
,1100)
}
,remove_notification_box:function(a){
	a.removeClass("error success infos").find(".notification").removeClass("error success infos").find(".box p").remove()
}
,show_notification_box:function(c,a,b){
	tbapp.pasang.remove_notification_box(c);
	c.addClass(a).find(".notification").addClass(a).show().find(".box").append("<p>"+b+"</p>")
}
,check_valid_number:function(b){
	var a=function(c){
	if(c==8||c==9||c==13||c==127||c==46||(c>=48&&c<=57)){
	return true
	}
	return false
}
;
if(b.keyCode!=0&&(typeof b.keyCode!="undefined")){
	if((!b.shiftKey&&((b.keyCode>=35&&b.keyCode<=40)||b.keyCode==46))){
	return true
}
else{
	return a(b.keyCode)
}

}
else{
	return a(b.which)
}

}
,show_waiter:function(b,a,c){
	a=a||"before";
c=c||"";
waiter_html='<div class="waitnote"><div class="waiter kir"><img src="'+asset_domain+'skins/default/images/loader-lite.gif" /></div> '+c+"</div>";
switch(a){
	case"after":if(b.siblings(".waitnote").length==0){
	b.after(waiter_html)
}
break;
case"before":if(b.siblings(".waitnote").length==0){
	b.before(waiter_html)
}
break;
case"append":if(b.find(".waitnote").length==0){
	b.append(waiter.html)
}
break;
default:if(b.siblings(".waitnote").length==0){
	b.before(waiter_html)
}

}

}
,remove_waiter:function(a){
	a.remove()
}
,is_checked_prev_promo:function(promo){
	var selectedPromoPoint=eval("tbapp.pasang.prop.prevValues."+promo);
if(tbapp.global.check.isSet(selectedPromoPoint)&&selectedPromoPoint==1){
	return true
}
return false
}
,set_promo:function(a){
	var b=window.promo_point_value_override;
	if(tbapp.global.check.objLength(b)>0){
		for(promo in b){
		if($("#detail_"+promo.toLowerCase()).length){
		$("#detail_"+promo.toLowerCase()+" span").html(b[promo]);
if(tbapp.pasang.prop.prevValues.secId!=null&&tbapp.pasang.prop.prevValues.secId==a&&tbapp.pasang.is_checked_prev_promo(promo)){
	$("#"+promo).attr({
	checked:true,disabled:"disabled"
}
);
if(promo=="PRO_LINK"&&tbapp.pasang.prop.prevValues.PRO_LINK_VALUE!=null){
	$("#PRO_LINK_VALUE").val(tbapp.pasang.prop.prevValues.PRO_LINK_VALUE)
}

}
else{
	tbapp.pasang.form.toggle_promo_checkbox(promo,"enable")
}

}

}

}

}
,form:{
	clean_price:function(a){
	i=(a+"").indexOf(",",0);
if(i>0){
	a=a.substring(0,i)
}
return parseFloat(a.replace(/[^0-9]+/g,""))
}
,format_price:function(a){
	tmp="";
len=a.toString().length;
if(len-3>0){
	last_i=0;
	for(i=len;
	i>0;
i=i-3){
		if(i-3>0){
	tmp="."+a.toString().substring(i-3,i)+tmp
}
if(i>0){
	last_i=i
}

}
if(last_i>0){
	tmp=a.toString().substring(0,last_i)+tmp
}
a=tmp
}
return a
}
,request_region_detail:function(region_id,ref){
	ref=ref||"";
	if(region_id!=null){
		region_id=parseInt(region_id)
	}
	var kb_id=$("#p_kab").val()||null,kc_id=$(".custom-field[name='extra[p_kecamatan]']").val()||null,kt_id=$(".custom-field[name='extra[p_kota]']").val()||null,kab=$("#p_kab"),kota=$(".custom-field[name='extra[p_kota]']"),kec=$(".custom-field[name='extra[p_kecamatan]']");
if(tbapp.global.check.isNumeric(region_id)){
	tbapp.pasang.prop.ajaxMgrRDEP.abort();
	tbapp.pasang.prop.ajaxMgrRDEP.add({
		url:AjaxRDEP,type:"GET",data:{
		rg:region_id,kb:kb_id,kc:kc_id,kt:kt_id
	}
	,beforeSend:function(){
		if(tbapp.global.check.isNotEmpty(ref)){
		switch(ref){
		case"location":if(kab.length){
		kab.hide();
	tbapp.pasang.show_waiter(kab,"before","Sedang diproses...")
}
if(kota.length){
	kota.hide();
	tbapp.pasang.show_waiter(kota,"before","Sedang diproses...")
}
break;
case"kab":if(kec.length){
	kec.hide();
	tbapp.pasang.show_waiter(kec,"before","Sedang diproses...")
}
break
}

}

}
,success:function(d){
	d=eval("("+d+")");
if(d.status==1){
	if(kab.length){
	$(kab).html(d.docs.kab);
	$(kab).removeAttr("disabled")
}
if(kota.length){
	$(kota).html(d.docs.kota);
	$(kota).removeAttr("disabled")
}
if(kec.length){
	$(kec).html(d.docs.kec);
	$(kec).removeAttr("disabled")
}

}

}
,complete:function(){
	if(tbapp.global.check.isNotEmpty(ref)){
	setTimeout(function(){
	switch(ref){
	case"location":if(kab.length){
	tbapp.pasang.remove_waiter(kab.siblings(".waitnote"));
	kab.show()
}
if(kota.length){
	tbapp.pasang.remove_waiter(kota.siblings(".waitnote"));
kota.show()
}
break;
case"kab":if(kec.length){
	tbapp.pasang.remove_waiter(kec.siblings(".waitnote"));
kec.show()
}
break
}

}
,1000)
}

}

}
)
}

}
,request_promo_config:function(section_id){
	if(section_id!=null){
	section_id=parseInt(section_id)
}
if(tbapp.global.check.isNumeric(section_id)){
	var ajaxPromoConfigMgr=$.manageAjax.create("promoConfig",{
	queue:true,cacheResponse:true
}
);
ajaxPromoConfigMgr.abort();
ajaxPromoConfigMgr.add({
	url:ajaxPromoConfig,type:"POST",data:{
	sec_id:section_id
}
,beforeSend:function(){
	
}
,success:function(data){
	data=eval("("+data+")");
	if(tbapp.global.check.objLength(data)>1){
		var oldPromoPointValue=tbapp.pasang.prop.promoPointValue;
	tbapp.pasang.prop.promoPointValue=window.promo_point_value_override=data;
$("div.poin-sisa").text(tbapp.pasang.prop.prevValues.userDefaultPoints);
$("#frm_pasang .p-check").attr("checked",false);
$("#PRO_LINK_VALUE").val("").attr("disabled","disabled");
$("#PRO_LINK_MESSAGE").html("").attr("display",false);
tbapp.pasang.set_promo(section_id);
oldPromoPointValue=null
}

}
,complete:function(){
	
}

}
)
}

}
,promo_check:function(f,b){
	var c=$("div.poin-sisa"),a=$(c).text(),d=parseInt(a),b=parseInt(b)||0;
if(f.checked){
	d-=b;
	if(d>=0){
		$(c).text(d)
	}
	else{
		f.checked=false;
	alert("Point Anda tidak cukup! Coba tingkatkan promo poin Anda.")
}

}
else{
	d+=b;
	$(c).text(d)
}

}
,toggle_promo_checkbox:function(a,b){
	if(tbapp.global.check.isNotEmpty(a)){
	if(b=="disable"){
	tbapp.pasang.form.promo_check($("#"+a),tbapp.pasang.prop.promoPointValue[a]);
$("#"+a).attr("disabled","disabled")
}
else{
	if(b=="enable"){
	$("#"+a).removeAttr("disabled")
}

}

}

}
,check_promo_exception:function(a,c,f,b){
	var d=tbapp.pasang.form.recursive_check_promo_exception(a,c,f,b);
	if(d){
		$("#PRO_HOMEPAGE_GALLERY").removeAttr("checked");
tbapp.pasang.form.toggle_promo_checkbox(a,"disable")
}
else{
	tbapp.pasang.form.toggle_promo_checkbox(a,"enable")
}

}
,is_category_promo_exception:function(a,c,d){
	if(tbapp.global.check.isNotEmpty(a)&&tbapp.global.check.isNotEmpty(c)&&((tbapp.global.check.isNumeric(d)&&parseInt(d)>0)||(!tbapp.global.check.isNumeric(d)&&tbapp.global.check.isNotEmpty(d)))){
	if(tbapp.global.check.isSet(tbapp.pasang.prop.promoPointExceptionCategory[a])){
	var b=tbapp.pasang.prop.promoPointExceptionCategory[a];
	if(tbapp.global.check.isSet(b[c])){
		return tbapp.global.check.inArray(d,b[c])
	}

}

}
return false
}
,recursive_check_promo_exception:function(a,c,f,b){
	var d=false;
	switch(c.toLowerCase()){
		case"section":if(tbapp.global.check.isNumeric(f)&&parseInt(f)>0){
		d=tbapp.pasang.form.is_category_promo_exception(a,c,f);
	if(d==false){
		if(tbapp.global.check.isSet(b.subid)&&tbapp.global.check.isNumeric(f)&&parseInt(f)>0){
		return tbapp.pasang.form.recursive_check_promo_exception(a,"subsection",b.subid,b)
}
else{
	if(tbapp.global.check.isSet(b.catid)&&tbapp.global.check.isNumeric(f)&&parseInt(f)>0){
	return tbapp.pasang.form.recursive_check_promo_exception(a,"category",b.catid,b)
}

}

}

}
break;
case"subsection":if(tbapp.global.check.isNumeric(f)&&parseInt(f)>0){
	d=tbapp.pasang.form.is_category_promo_exception(a,c,f);
	if(d==false){
		if(tbapp.global.check.isSet(b.catid)&&tbapp.global.check.isNumeric(f)&&parseInt(f)>0){
		return tbapp.pasang.form.recursive_check_promo_exception(a,"category",b.catid,b)
}

}

}
break;
case"category":if(tbapp.global.check.isNumeric(f)&&parseInt(f)>0){
	d=tbapp.pasang.form.is_category_promo_exception(a,c,f)
}
break;
default:
}
return d
}
,validate:function(c,l,b,a,o){
	b=b||"";
a=(typeof a=="undefined")?false:a;
o=o||false;
parentObj=$(l).closest(".formBG");
switch(c.toLowerCase()){
	case"title":var d=$(l).val(),s=d.length||0;
if(s<4||s>55){
	tbapp.pasang.show_notification_box(parentObj,"error","Judul harus 4 - 55 karakter");
if(a==true){
	tbapp.pasang.scroll_error(parentObj,b)
}
if(typeof _gaq!="undefined"){
	if(b!=""&&b.toLowerCase()=="onsubmit"){
	_gaq.push(["_trackPageview","/form-analysis/frm_pasang/error/PUBLISH_AUC_TITLE"])
}
else{
	_gaq.push(["_trackPageview","/form-analysis/frm_pasang/error/AUC_TITLE"])
}

}
return false
}
else{
	tbapp.pasang.show_notification_box(parentObj,"success","Ok");
return true
}
break;
case"section":if(parseInt($("input#AUC_SECTION").val())===0){
	tbapp.pasang.show_notification_box(parentObj,"error","Mohon pilih Kategori Utama.");
if(a==true){
	tbapp.pasang.scroll_error(parentObj,b)
}
if(typeof _gaq!="undefined"){
	if(b=="onSubmit"){
	_gaq.push(["_trackPageview","/form-analysis/frm_pasang/error/PUBLISH_AUC_SECTION"])
}
else{
	_gaq.push(["_trackPageview","/form-analysis/frm_pasang/error/AUC_SECTION"])
}

}
return false
}
else{
	if(tbapp.pasang.prop.prevValues.secId!=null&&tbapp.pasang.prop.prevValues.secId!=$("input#AUC_SECTION").val()){
	tbapp.pasang.show_notification_box(parentObj,"success","Perhatian! Jika Anda mengubah kategori, poin yang sudah terpakai di iklan ini akan hangus.")
}
else{
	tbapp.pasang.show_notification_box(parentObj,"success","Ok")
}
return true
}
break;
case"subsection":var m=true,n=parseInt($("input#AUC_CAT").val()),q=parseInt($("input#AUC_SUBSECTION").val()),f=$("select#DROP_SUBSECTION").length,j=$("select#DROP_CAT").is(":visible");
if(f>0&&q==0){
	m=false;
	tbapp.pasang.show_notification_box(parentObj,"error","Mohon pilih Sub Kategori.")
}
else{
	if(f==0&&j==true&&n==0){
	m=false;
	tbapp.pasang.show_notification_box(parentObj,"error","Mohon pilih Sub Kategori.")
}
else{
	tbapp.pasang.show_notification_box(parentObj,"success","Ok")
}

}
if(!m){
	if(a==true){
	tbapp.pasang.scroll_error(parentObj,b)
	}
	if(typeof _gaq!="undefined"){
		if(b=="onSubmit"){
		_gaq.push(["_trackPageview","/form-analysis/frm_pasang/error/PUBLISH_AUC_SUBSECTION"])
}
else{
	_gaq.push(["_trackPageview","/form-analysis/frm_pasang/error/AUC_SUBSECTION"])
}

}

}
return m;
break;
case"category":var n=parseInt($("input#AUC_CAT").val());
var j=$("select#DROP_CAT").is(":visible");
if(j>0&&n==0){
	tbapp.pasang.show_notification_box(parentObj,"error","Mohon pilih Kategori.");
if(a==true){
	tbapp.pasang.scroll_error(parentObj,b)
}
if(typeof _gaq!="undefined"){
	if(b=="onSubmit"){
	_gaq.push(["_trackPageview","/form-analysis/frm_pasang/error/PUBLISH_AUC_CAT"])
}
else{
	_gaq.push(["_trackPageview","/form-analysis/frm_pasang/error/AUC_CAT"])
}

}
return false
}
else{
	tbapp.pasang.show_notification_box(parentObj,"success","Ok");
return true
}
break;
case"price":var u=this.clean_price($(l).val()).toString();
if(!u.length||parseFloat(u)<-1||u.match(/[^0-9]/)){
	tbapp.pasang.show_notification_box(parentObj,"error","Harga belum diisi.");
if(a==true){
	tbapp.pasang.scroll_error(parentObj,b)
}
if(typeof _gaq!="undefined"){
	if(b=="onSubmit"){
	_gaq.push(["_trackPageview","/form-analysis/frm_pasang/error/PUBLISH_AUC_AD_PRICE"])
}
else{
	_gaq.push(["_trackPageview","/form-analysis/frm_pasang/error/AUC_AD_PRICE"])
}

}
return false
}
else{
	$(l).val(this.format_price(u));
	tbapp.pasang.show_notification_box(parentObj,"success","Ok");
return true
}
break;
case"condition":if($(l).val()===""){
	tbapp.pasang.show_notification_box(parentObj,"error","Pilih Kondisi Dari Iklan Anda!");
if(a==true){
	tbapp.pasang.scroll_error(parentObj,b)
}
if(typeof _gaq!="undefined"){
	if(b=="onSubmit"){
	_gaq.push(["_trackPageview","/form-analysis/frm_pasang/error/PUBLISH_AUC_CONDITION"])
}
else{
	_gaq.push(["_trackPageview","/form-analysis/frm_pasang/error/AUC_CONDITION"])
}

}
return false
}
else{
	tbapp.pasang.show_notification_box(parentObj,"success","Ok");
return true
}
break;
case"region":if($(l).val()==""){
	tbapp.pasang.show_notification_box(parentObj,"error","Pilih Propinsi untuk Iklan Anda!");
if(a==true){
	tbapp.pasang.scroll_error(parentObj,b)
}
return false
}
else{
	tbapp.pasang.show_notification_box(parentObj,"success","Ok");
return true
}
break;
case"p_kab":if($(l).val()==""){
	tbapp.pasang.show_notification_box(parentObj,"error","Pilih Kabupaten / Kota untuk Iklan Anda!");
if(a==true){
	tbapp.pasang.scroll_error(parentObj,b)
}
return false
}
else{
	tbapp.pasang.show_notification_box(parentObj,"success","Ok");
return true
}
break;
case"description":var t=$(l).val(),p=5000,m=false,g=4,k=5000;
if(t.length){
	if(t.length>=g&&t.length<=k){
	m=true
}
p=k-t.length;
if(p<0){
	p==0
}

}
$("#desc_length").html(p+" karakter tersisa");
if(m){
	tbapp.pasang.show_notification_box(parentObj,"success","Ok")
}
else{
	tbapp.pasang.show_notification_box(parentObj,"error","Deskripsi harus 4 - 5000 karakter")
}
if(a==true&&m==false){
	tbapp.pasang.scroll_error(parentObj,b)
}
return m;
break;
case"email":var m=true,h=$.trim($(l).val());
if($(l).length){
	if(h.match(/^[a-zA-Z0-9_\.\-]+\@([a-zA-Z0-9\-]+\.)+[a-zA-Z0-9]{
	2,4
}
$/)){
	tbapp.pasang.show_notification_box(parentObj,"success","Ok")
}
else{
	if(a==true){
	tbapp.pasang.scroll_error(parentObj,b)
}
tbapp.pasang.show_notification_box(parentObj,"error","Format email salah");
m=false
}

}
return m;
break;
case"username":var m=true;
if($(l).length){
	var r=$(l).val();
	if(r.length<3||r.length>30){
		m=false;
	tbapp.pasang.show_notification_box(parentObj,"error","Nama harus antara 3-30 karakter!")
}
else{
	if(r.match(/^([a-zA-Z0-9 ._-]+){
	3,30
	}
	$/i)==null){
	m=false;
	tbapp.pasang.show_notification_box(parentObj,"error","Format nama hanya boleh karakter, nomor, _ dan -")
}
else{
	m=true;
	tbapp.pasang.show_notification_box(parentObj,"success","Ok")
}

}
if(!m&&a==true){
	tbapp.pasang.scroll_error(parentObj,b)
	}

}
return m;
break;
case"password":var m=true;
if($(l).length){
	var r=$(l).val();
	if(r.length==""){
		if(a==true){
		tbapp.pasang.scroll_error(parentObj,b)
	}
	m=false;
tbapp.pasang.show_notification_box(parentObj,"error","Password harus diisi")
}
else{
	tbapp.pasang.show_notification_box(parentObj,"success","Ok")
}

}
return m;
break;
case"phone":var m=true;
if($(l).length){
	var u=$(l).val();
	if(u.length==""){
		m=false;
	tbapp.pasang.show_notification_box(parentObj,"error","Nomor Telp/Hp harus diisi")
}
else{
	if(/^([0-9]){
	5,25
	}
	$/.test(u)===false){
	m=false;
	tbapp.pasang.show_notification_box(parentObj,"error","Format Telp/Hp salah. Contoh: 021234567")
}
else{
	tbapp.pasang.show_notification_box(parentObj,"success","Ok")
}

}
if(!m&&a==true){
	tbapp.pasang.scroll_error(parentObj,b)
	}

}
return m;
break;
case"pinbb":var m=true;
if($(l).length){
	var u=$(l).val();
	if(u!=""){
		if(!u.match(/\b[0-9A-F]{
		8
	}
	\b/gi)){
		m=false;
	tbapp.pasang.show_notification_box(parentObj,"error","Format PIN Blackberry salah.")
}
else{
	tbapp.pasang.show_notification_box(parentObj,"success","Ok")
}

}
else{
	if($(l).closest(".formBG").hasClass("error")||$(l).closest(".formBG").hasClass("success")){
	tbapp.pasang.remove_notification_box($(l).closest(".formBG"))
}

}

}
if(!m&&a==true){
	tbapp.pasang.scroll_error(parentObj,b)
	}
	return m;
break
}

}
,on_submit:function(){
	var t=0,q=true;
	$("#frm_pasang :submit").hide();
var a=$("#AUC_TITLE").val();
var m=/\bdijual\b/gi,l=/\bdi jual\b/gi,k=/\bdicari\b/gi,j=/\bdi cari\b/gi,p=/\bdibeli\b/gi,o=/\bdi beli\b/gi,g=/\bdisewakan\b/gi,f=/\bdi sewakan\b/gi,d=/\bsewa\b/gi,c=/\bjual\b/gi,b=/\bcari\b/gi,n=/\bbeli\b/gi;
var s=a.replace(m,"").replace(l,"").replace(k,"").replace(j,"").replace(g,"").replace(f,"").replace(d,"").replace(c,"").replace(b,"").replace(p,"").replace(o,"").replace(n,"").replace(/^\s+|\s+$/g,"");
$("#AUC_TITLE").val(s);
if(!tbapp.pasang.form.validate("title",$("input#AUC_TITLE"),"onsubmit",true)){
	t++
}
if(!tbapp.pasang.form.validate("section",$("#cat_lvl_1 select"),"onsubmit",true)){
	t++
}
if(!tbapp.pasang.form.validate("subsection",$("#cat_lvl_2 select"),"onsubmit",true)){
	t++
}
if($("#form_container #cat_lvl_3").is(":visible")){
	if(!tbapp.pasang.form.validate("category",$("#cat_lvl_3 select"),"onsubmit",true)){
	t++
}

}
if(!tbapp.pasang.form.validate("price",$("input#AUC_AD_PRICE"),"onsubmit",true)){
	t++
}
if(!tbapp.pasang.form.validate("condition",$("select#AUC_CONDITION"),"onsubmit",true)){
	t++
}
if(!tbapp.pasang.form.validate("region",$("select#AUC_LOCATION"),"onsubmit",true)){
	t++
}
if(!tbapp.pasang.form.validate("p_kab",$("select#p_kab"),"onsubmit",true)){
	t++
}
if(!tbapp.pasang.form.validate("description",$("textarea#AUC_DESCR"),"onsubmit",true)){
	t++
}
if(!tbapp.pasang.custom_field.validate_all_custom_field_exist()){
	t++
}
if($("#PRO_LINK_VALUE").length&&$("#PRO_LINK_VALUE").is(":enabled")){
	if(!$("#PRO_LINK_VALUE").val().match(/(mailto\:|(news|(ht|f)tp(s?))\:\/\/)?([a-zA-Z0-9]+(\.[a-zA-Z0-9]+)+.*)$/i)){
	$("#PRO_LINK_MESSAGE").html("Alamat website yang Anda masukkan masih salah.").attr("display",true);
tbapp.pasang.scroll_error($("#PRO_LINK_MESSAGE"));
t++
}
else{
	$("#PRO_LINK_MESSAGE").html("").attr("display",false)
}

}
if($("#frm_pasang .userinfo").length){
	if(!tbapp.pasang.form.validate("username",$("input#fullname_post"),"onsubmit",true)){
	t++
}
if(!tbapp.pasang.form.validate("email",$("input#email_post"),"onsubmit",true)){
	t++
}
if(!tbapp.pasang.form.validate("phone",$("input#phone_post"),"onsubmit",true)){
	t++
}
if(!tbapp.pasang.form.validate("pinbb",$("input#pinbb_post"),"onsubmit",true)){
	t++
}

}
if(t>0){
	q=false
}
else{
	if(!$("#frm_pasang input#chk_terms_agree").is(":checked")){
	alert("Anda harus setuju dengan semua persyaratan dan ketentuan tokobagus.com");
q=false
}

}
var r=-1;
var h=$("*[id^='delete_img']").val();
if(typeof h!="undefined"){
	edited.push(100)
}
if(currentCount!=$(".img-upload").length){
	edited.push(101)
}
if(($("#AUC_TITLE").val()==prevValues.aucTitle)==false){
	r=edited.indexOf(1);
	if(r==-1){
		edited.push(1)
	}

}
else{
	r=edited.indexOf(1);
	if(r>-1){
		edited.splice(r,1)
	}

}
if($("#AUC_CAT").val()!=prevValues.catId){
	r=edited.indexOf(2);
	if(r==-1){
		edited.push(2)
	}

}
else{
	r=edited.indexOf(2);
	if(r>-1){
		edited.splice(r,1)
	}

}
if($('input[name="AUC_TYPE2"]:checked').val()!=prevValues.type2){
	r=edited.indexOf(3);
	if(r==-1){
		edited.push(3)
	}

}
else{
	r=edited.indexOf(3);
	if(r>-1){
		edited.splice(r,1)
	}

}
if(parseInt($("#AUC_AD_PRICE").val())!=parseInt(prevValues.aucAdPrice)){
	r=edited.indexOf(4);
	if(r==-1){
		edited.push(4)
	}

}
else{
	r=edited.indexOf(4);
	if(r>-1){
		edited.splice(r,4)
	}

}
if($("#AUC_CONDITION").val()!=prevValues.aucCondition){
	r=edited.indexOf(5);
	if(r==-1){
		edited.push(5)
	}

}
else{
	r=edited.indexOf(5);
	if(r>-1){
		edited.splice(r,1)
	}

}
if($("#AUC_LOCATION").val()!=prevValues.aucLocation){
	r=edited.indexOf(6);
	if(r==-1){
		edited.push(6)
	}

}
else{
	r=edited.indexOf(6);
	if(r>-1){
		edited.splice(r,1)
	}

}
if($("#p_kab").val()!=prevValues.aucPKab){
	r=edited.indexOf(7);
	if(r==-1){
		edited.push(7)
	}

}
else{
	r=edited.indexOf(7);
	if(r>-1){
		edited.splice(r,1)
	}

}
if(MD5($("#AUC_DESCR").val())!=prevValues.aucDescr){
	r=edited.indexOf(8);
	if(r==-1){
		edited.push(8)
	}

}
else{
	r=edited.indexOf(8);
	if(r>-1){
		edited.splice(r,1)
	}

}
if(edited.length<1){
	alert("Silahkan lakukan perubahan pada iklan anda");
q=false
}
if(!q){
	$("#frm_pasang :submit").show()
}
return q
}
,preview_post:function(){
	$.ajax({
	type:"POST",dataType:"html",url:parent.location.protocol+"//"+window.location.hostname+"/pasang/ajax-preview-post/",data:$("#frm_pasang").serialize(),cache:false,beforeSend:function(){
	tbapp.global.loader.resetAll().show()
}
,success:function(a){
	setTimeout(function(){
	tbapp.global.loader.init({
	values:{
	title:"Silahkan cek kembali iklan Anda",content:a,footer:""
}
,visibility:{
	title:true,close_button:true,footer:true
}

}
);
	tbapp.global.loader.reload().show($("#frm_pasang"));
$("#frm_pasang").find(".popup-box").addClass("wide");
$("#frm_pasang").find(".popup-con").addClass("preview");
$("#frm_pasang").find(".pop-close").addClass("preview-close").hide();
$("#frm_pasang").find(".popup-foot").after($("<div/>").addClass("previewtag").after($("<a/>").attr("href","javascript:void(0);
	").addClass("pop-close preview-close preclose")));
var g=$("#frm_pasang").find(".popup-con .btn-simpan");
if(g.length){
	g.clone().prependTo($("#frm_pasang .popup-foot"));
g.remove()
}
$("#frm_pasang").find(".fotothumb .container .fotolist").first().addClass("active");
var b=$("#frm_pasang .popup-con").find("#preview_p_kab .p_kab_data");
var c=b.text();
var d=$("#frm_pasang .popup-con").find("#preview_p_kecamatan .p_kecamatan_data");
var f=d.text();
if(tbapp.global.check.isNotEmpty(c)&&tbapp.global.check.isNumeric(c)){
	if($("#frm_pasang").find("#p_kab option[value="+c+"]").text()){
	b.html($("#frm_pasang").find("#p_kab option[value="+c+"]").text())
}

}
if(tbapp.global.check.isNotEmpty(f)&&tbapp.global.check.isNumeric(f)){
	if($("#frm_pasang").find(".custom-field[name='extra[p_kecamatan]'] option[value="+f+"]").text()){
	d.html($("#frm_pasang").find(".custom-field[name='extra[p_kecamatan]'] option[value="+f+"]").text())
}

}

}
,500)
}
,error:function(){
	tbapp.global.loader.hide()
}

}
)
}
,preview_post_close:function(){
	$("#preview-post .pop-con").html("");
$("#preview-post").hide()
}

}
,custom_field:{
	$placeholder:$("#custom_field_container"),request_custom_field:function(catid){
	this.$placeholder.html("").hide();
var self=this,region_id=null,regency_id=null;
if($("#AUC_LOCATION").length){
	region_id=$("#AUC_LOCATION").val()
}
if(region_id!=null){
	region_id=parseInt(region_id)
}
if($("#p_kab").length){
	regency_id=$("#p_kab").val()
}
if(regency_id!=null){
	regency_id=parseInt(regency_id)
}
if(tbapp.pasang.prop.ajxMgrRequestCustomField==null||typeof tbapp.pasang.prop.ajxMgrRequestCustomField=="undefined"){
	tbapp.pasang.prop.ajxMgrRequestCustomField=tbapp.pasang.createAjaxManagerObject("requestCustomField",{
	
}
)
}
tbapp.pasang.prop.ajxMgrRequestCustomField.abort();
tbapp.pasang.prop.ajxMgrRequestCustomField.add({
	url:AjaxCFEP,type:"GET",data:{
	cat:catid,region:region_id,regency:regency_id
}
,beforeSend:function(){
	tbapp.pasang.show_waiter(self.$placeholder,"before","Sedang diproses...")
}
,success:function(data){
	data=eval("("+data+")");
	if(data.status==1){
		self.$placeholder.html(data.docs);
	tbapp.pasang.custom_field.attach_event_on_custom_field()
}

}
,complete:function(){
	setTimeout(function(){
	tbapp.pasang.remove_waiter(self.$placeholder.prev(".waitnote"));
	self.$placeholder.show()
}
,1000)
}

}
)
}
,attach_event_on_custom_field:function(b){
	var a=this;
	b=b||$(".custom-field");
b.each(function(){
	var d=$(this).attr("name"),c=false;
	if(d.length){
		switch(d.toLowerCase()){
		case"extra[m_tipe]":$(this).on("change",function(g){
		valid=a.validate_custom_field_bydatatype("string",this,{
		min:1
	}
	);
	a.custom_field_error_holder_check(this,valid)
}
);
break;
case"extra[m_fuel]":$(this).on("change",function(g){
	valid=a.validate_custom_field_bydatatype("string",this,{
	min:1
}
);
	a.custom_field_error_holder_check(this,valid)
}
);
break;
case"extra[m_transmission]":$(this).on("change",function(g){
	valid=a.validate_custom_field_bydatatype("string",this,{
	min:1
}
);
	a.custom_field_error_holder_check(this,valid)
}
);
break;
case"extra[p_alamat]":$(this).on("change",function(g){
	valid=a.validate_custom_field_bydatatype("string",this,{
	min:1
}
);
	a.custom_field_error_holder_check(this,valid)
}
);
break;
case"extra[p_certificate]":$(this).on("change",function(g){
	valid=a.validate_custom_field_bydatatype("string",this,{
	min:1
}
);
	a.custom_field_error_holder_check(this,valid)
}
);
break;
case"extra[m_year]":$(this).on("change",function(g){
	valid=a.validate_custom_field_bydatatype("string",this,{
	min:1
}
);
	a.custom_field_error_holder_check(this,valid)
}
);
break;
case"extra[p_bathroom]":$(this).on("change",function(g){
	valid=a.validate_custom_field_bydatatype("int",this,{
	min:1
}
);
	a.custom_field_error_holder_check(this,valid)
}
);
break;
case"extra[p_bedroom]":$(this).on("change",function(g){
	valid=a.validate_custom_field_bydatatype("int",this,{
	min:1
}
);
	a.custom_field_error_holder_check(this,valid)
}
);
break;
case"extra[p_floor]":$(this).on("change",function(g){
	valid=a.validate_custom_field_bydatatype("int",this,{
	min:1
}
);
	a.custom_field_error_holder_check(this,valid)
}
);
break;
case"extra[p_kab]":$(this).on("change",function(g){
	valid=a.validate_custom_field_bydatatype("int",this,{
	min:0
}
);
	if(valid==true){
		tbapp.pasang.form.request_region_detail()
	}
	else{
		if(d.toLowerCase()=="extra[p_kab]"){
		kec=$(".custom-field[name='extra[p_kecamatan]']");
if(kec.length){
	$(kec).html("<option value=''>Pilih Kabupaten dahulu...</option>")
}

}

}
a.custom_field_error_holder_check(this,valid)
}
);
break;
case"extra[p_kota]":$(this).on("change",function(g){
	valid=a.validate_custom_field_bydatatype("int",this,{
	min:0
}
);
	a.custom_field_error_holder_check(this,valid)
}
);
break;
case"extra[p_kecamatan]":$(this).on("change",function(g){
	valid=a.validate_custom_field_bydatatype("int",this,{
	min:0
}
);
	a.custom_field_error_holder_check(this,valid)
}
);
break;
case"extra[p_sqr_building]":$(this).on("change",function(g){
	valid=a.validate_custom_field_bydatatype("float",this,{
	min:1
}
);
	a.custom_field_error_holder_check(this,valid)
}
);
break;
case"extra[p_sqr_land]":$(this).on("change",function(g){
	valid=a.validate_custom_field_bydatatype("float",this,{
	min:1
}
);
	a.custom_field_error_holder_check(this,valid)
}
);
break;
case"extra[p_facility]":break;
default:c=true
}

}
else{
	c=true
}
if(c==true){
	var f=null;
	if($(this).is("input")){
		f=$(this).attr("type")
}
else{
	if($(this).is("select")){
	f="select"
}
else{
	if($(this).is("checkbox")){
	f="checkbox"
}

}

}
a.attach_event_on_custom_field_byfieldtype(f,this)
}

}
)
}
,attach_event_on_custom_field_byfieldtype:function(b,c){
	var a=this;
	if(tbapp.global.check.isNotEmpty(b)){
		switch(b){
		case"select":$(c).on("change",function(){
		a.validate_custom_field_byfieldtype(b,c)
	}
	);
break;
case"text":$(c).on("change",function(){
	a.validate_custom_field_byfieldtype(b,c)
}
);
break;
case"checkbox":break;
default:$(c).on("change",function(){
	a.validate_custom_field_byfieldtype(b,c)
}
)
}

}

}
,validate_custom_field_byfieldtype:function(b,d){
	var a=this,c=false;
	if(tbapp.global.check.isNotEmpty(b)){
		switch(b){
		case"select":if($(d).length&&$(d).val().length>0){
		c=true
	}
	break;
default:if($(d).length&&tbapp.global.check.isNotEmpty($(d).val())){
	c=true
}

}
a.custom_field_error_holder_check(d,c)
}
else{
	c=true
}
return c
}
,validate_custom_field_bydatatype:function(c,g,b){
	var a=this,f=$(g).val()||null,d=true;
	switch(c){
		case"string":if(tbapp.global.check.isNotEmpty(f)){
		if(tbapp.global.check.isSet(b.min)){
		if(f.length<b.min){
		d=false
	}

}
if(tbapp.global.check.isSet(b.max)){
	if(f.length>b.max){
	d=false
	}

}

}
else{
	d=false
	}
	break;
case"int":case"float":if(tbapp.global.check.isNumeric(f)){
	f=(c=="int")?parseInt(f):parseFloat(f);
if(tbapp.global.check.isSet(b.min)){
	if(f<b.min){
	d=false
}

}
if(tbapp.global.check.isSet(b.max)){
	if(f>b.max){
	d=false
}

}

}
else{
	d=false
}
break;
default:d=false
}
return d
}
,validate_all_custom_field_exist:function(){
	var a=this,c=0,b=true;
	$(".custom-field").each(function(){
		if($(this).is("input")&&$(this).attr("type")=="checkbox"){
		b=true
	}
	else{
		var f=$(this).attr("name"),d=false;
	if(f.length){
		switch(f.toLowerCase()){
		case"extra[m_tipe]":b=a.validate_custom_field_bydatatype("string",this,{
		min:1
	}
	);
break;
case"extra[m_fuel]":b=a.validate_custom_field_bydatatype("string",this,{
	min:1
}
);
break;
case"extra[m_transmission]":b=a.validate_custom_field_bydatatype("string",this,{
	min:1
}
);
break;
case"extra[p_alamat]":b=a.validate_custom_field_bydatatype("string",this,{
	min:1
}
);
break;
case"extra[p_certificate]":b=a.validate_custom_field_bydatatype("string",this,{
	min:1
}
);
break;
case"extra[m_year]":b=a.validate_custom_field_bydatatype("string",this,{
	min:1
}
);
break;
case"extra[p_bathroom]":b=a.validate_custom_field_bydatatype("int",this,{
	min:1
}
);
break;
case"extra[p_bedroom]":b=a.validate_custom_field_bydatatype("int",this,{
	min:1
}
);
break;
case"extra[p_floor]":b=a.validate_custom_field_bydatatype("int",this,{
	min:1
}
);
break;
case"extra[p_kab]":b=a.validate_custom_field_bydatatype("int",this,{
	min:0
}
);
break;
case"extra[p_kota]":b=a.validate_custom_field_bydatatype("int",this,{
	min:0
}
);
break;
case"extra[p_kecamatan]":b=a.validate_custom_field_bydatatype("int",this,{
	min:0
}
);
break;
case"extra[p_sqr_building]":b=a.validate_custom_field_bydatatype("float",this,{
	min:1
}
);
break;
case"extra[p_sqr_land]":b=a.validate_custom_field_bydatatype("float",this,{
	min:1
}
);
break;
case"extra[p_facility]":break;
default:d=true
}

}
else{
	d=true
}

}
if(d==true){
	var g=null;
	if($(this).is("input")){
		g=$(this).attr("type")
}
else{
	if($(this).is("select")){
	g="select"
}
else{
	if($(this).is("checkbox")){
	g="checkbox"
}

}

}
b=a.validate_custom_field_byfieldtype(g,this)
}
if(!b){
	c++
	}
	a.custom_field_error_holder_check(this,b,true)
}
);
if(c>0){
	b=false
}
return b
}
,custom_field_error_holder_check:function(f,c,a){
	var c=c||false,b="",a=(typeof a=="undefined")?false:a,g=(c==false)?"Data tidak boleh kosong":"Ok",d=$(f).closest(".formBG");
if(c){
	b="success"
}
else{
	b="error";
if(a){
	tbapp.pasang.scroll_error(d,"")
}

}
tbapp.pasang.show_notification_box(d,b,g)
}

}
,photoUpload:function(){
	var j=this;
	var q=new Array();
var f=maxPhotoCount;
var g=function(){
	return $("#photo-container .img-upload").length
}
;
var t=g();
var l=function(y){
	var x=Math.min(y.length,f);
	var z=maxPhotoCount-g();
x=Math.min(x,z);
for(var w=0;
	w<x;
w++){
	var A=$('<div class="img-upload"><div class="upload-progress"></div></div>');
	$("#add-photo"+(g()+1)).hide();
if($("#photo-container .img-upload:last").length){
	$("#photo-container .img-upload:last").after(A)
}
else{
	$("#photo-container").prepend(A)
}

}

}
,u=function(){
	f++;
	if(f>maxPhotoCount){
		f=maxPhotoCount
	}

}
,p=function(){
	f--;
	if(f<0){
		f=0
	}

}
,d=function(){
	$("#photo-container .img-upload").has(".upload-progress").first().remove()
}
,h=function(y,A){
	var x='<img src="'+y+'" />',z='<input type="hidden" class="photo_img_input" name="photo_img['+t+'][url]" value="'+y+'" />',w='<div class="img-upload">'+x+'<div class="del-image"></div>'+z+"</div>";
if(A!=undefined){
	A()
}
if($("#photo-container .img-upload:not(:has(.upload-progress)):last").length){
	$("#photo-container .img-upload:not(:has(.upload-progress)):last").after(w)
}
else{
	$("#photo-container").prepend(w)
}

}
,s=function(w){
	$(".add-photo-button").map(function(x,y){
	$(y).hide().attr("disabled","disabled")
}
)
}
,m=function(w){
	if($("#add-photo"+w).is(":disabled")){
	$("#add-photo"+w).removeAttr("disabled")
}
$("#add-photo"+w).show()
}
,c=function(y){
	var x=y.find("img").attr("src"),w=y.find("img").attr("rel");
if(confirm("Hapus Image Ini?")){
	if(typeof(w)!="undefined"){
	$("#uploadFoto").append('<input type="hidden" id="delete_img'+w+'" name="delete_img[]" value="'+w+'" />')
}
else{
	$.ajax({
	type:"POST",url:ajaxRemovePhoto,data:{
	src:x
}

}
)
}
$(y).remove();
u();
t--;
if(f>0){
	m(t+1)
}
n();
v();
if(t>1){
	$(".drag-note").show()
}
else{
	$(".drag-note").hide()
}

}

}
,n=function(){
	r();
	$("#photo-container .img-upload:first").append('<div class="futama"><div class="clr"></div></div>')
}
,r=function(){
	$("#photo-container").find(".futama").remove()
}
,v=function(){
	$("#photo-container .img-upload").each(function(w,x){
	$(x).find("input.photo_img_id").attr("name","photo_img["+(w)+"][id]");
	$(x).find("input.photo_img_input").attr("name","photo_img["+(w)+"][url]")
}
)
}
,b=function(w){
	var y=false;
	for(o in q){
		var x=q[o];
	if(x.state==plupload.UPLOADING){
		y=true
	}

}
if(y){
	window.setTimeout(function(){
	b(w)
	}
	,300)
}
else{
	w.start()
	}

}
,a=function(w){
	var x=w.files.slice(0);
	for(o in x){
		w.removeFile(x[o])
	}

}
;
	for(var o=1;
	o<=maxPhotoCount;
o++){
		var k=new plupload.Uploader({
	runtimes:"html5, html4",browse_button:"add-photo"+o,max_file_size:maxPhotoSize,url:ajaxUploadPhoto,flash_swf_url:pluploadSWF,filters:[{
	title:"Image files",extensions:"jpg,jpeg,pjpeg,gif,png"
}
],unique_names:true,max_file_count:maxPhotoCount,multipart_params:{
	uid:"temp"
}

}
);
	k.bind("FilesAdded",function(w,x){
		l(x);
	window.setTimeout(function(){
		b(w)
	}
	,100)
}
);
k.bind("BeforeUpload",function(w,x){
	if($("#frm_pasang input#userid").val()){
	w.settings.multipart_params.uid=$("#frm_pasang input#userid").val()
}

}
);
k.bind("FileUploaded",function(w,y,x){
	if(x.status!=undefined&&parseInt(x.status)!=200||x.response==undefined){
	alert("Terjadi kesalahan dalam mengupload foto");
	return
}
data=jQuery.parseJSON(x.response);
if(!data.status){
	alert(data.msg);
	d();
return
}
if(f>0){
	h(data.res.src,d)
}
p();
t++;
if(f<=0){
	s();
	w.stop()
}
n();
if(t>1){
	$(".drag-note").show()
}
else{
	$(".drag-note").hide()
}

}
);
k.bind("Error",function(w,x,y){
	if(x.code!=undefined){
	if(x.code==plupload.INIT_ERROR){
	d()
}
else{
	if(x.code==plupload.FILE_EXTENSION_ERROR){
	d();
	alert("Jenis file tidak didukung. Hanya berkas gambar yang diperbolehkan.")
}
else{
	if(x.code==plupload.FILE_SIZE_ERROR){
	d();
	alert("File yang diperbolehkan max 5MB")
}
else{
	d();
	alert("Terjadi kesalahan dalam mengupload foto")
}

}

}

}
else{
	d();
	alert("Terjadi kesalahan dalam mengupload foto")
}
$("#add-photo"+(t+1)).show()
}
);
k.bind("Init",function(w,x){
	window.setInterval(function(){
	w.refresh()
}
,550)
}
);
k.init();
q.push(k)
}
if(t>0){
	for(var o=1;
	o<=t;
o++){
	p();
	$("#add-photo"+o).hide()
}
if(f<=0){
	s()
	}
	n()
}
if(t>1){
	$(".drag-note").show()
}
else{
	$(".drag-note").hide()
}
$("#photo-container").on("click",".del-image",function(w){
	w.preventDefault();
	c($(this).parent(".img-upload"))
}
);
$("#photo-container").sortable({
	cursor:"move",items:"> .img-upload:not(:has(.upload-progress))",tolerance:"pointer",update:function(){
	n();
	v()
}
,start:function(w,x){
	r()
	}
	,stop:function(){
		n()
	}

}
)
}
,login:{
	loadForm:function(c){
	var b="";
var a=$("<div/>").attr("id","frm_login");
if(typeof c!="undefined"&&c!=""){
	b=b+'<div class="error-notification">'+c+"</div>";
a.append('<div class="error-notification">'+c+"</div>")
}
b=b+'<div class="formBG"><div class="kir label"><label>Email Anda</label></div><div class="kir"><input name="email" id="email_login" value="'+$("#frm_pasang #email_post").val()+'" readonly="readonly" type="text"></div><div class="clr"></div></div>';
b=b+'<div class="formBG"><div class="kir label"><label>Password</label></div><div class="kir"><input name="password" id="password_login" type="password" value=""></div><div class="clr"></div></div>';
b=b+'<input type="hidden" name="ref_pasang" value="1" />';
b=b+'<div class="formBG"><div class="kir label"><label></label></div><div class-"kir" align="right"><input id="frm_login_submit" type="submit" name="submit" class="btn" value="Login"></div><div class="clr"></div></div>';
a.append(b);
tbapp.global.loader.init({
	values:{
	title:"Member Login",content:b,footer:'Lupa Password ? <a href="'+parent.location.protocol+"//"+window.location.hostname+'/lupa.asp" target="_blank">klik disini</a>'
}
,visibility:{
	title:true,close_button:true,footer:true
}

}
);
tbapp.global.loader.reload().show($("#frm_pasang"))
}
,check_email:function(){
	$.ajax({
	url:ajaxCheckMailEndPoint,type:"POST",dataType:"json",data:$("#frm_pasang .profileData").serialize(),beforeSend:function(){
	
}
,success:function(a){
	setTimeout(function(){
	if(a.status==1){
	if(typeof a.existing!="undefined"&&a.existing==1){
	tbapp.pasang.login.loadForm("Email Anda sudah terdaftar. Anda harus login sebelum melanjutkan.");
	$("#frm_login input#email_login").val($("#frm_pasang input#email_post").val())
}
else{
	$("#frm_pasang").append('<input type="hidden" name="new_userid" value="'+a.docs.CLIENT_ID+'" />');
$("#frm_pasang :submit").attr("id","frm-submit");
tbapp.pasang.prop.hasAuthCheck=1;
if($.browser.msie){
	try{
	$("#frm_pasang").unbind();
$("#frm_pasang").bind("submit",function(){
	
}
);
$("#frm_pasang").submit()
}
catch(b){
	
}

}
else{
	$("#frm_pasang :submit").trigger("click")
}

}

}
else{
	tbapp.global.loader.hide();
	if(a.msg.toLowerCase()=="username exists"){
		tbapp.pasang.show_notification_box($("#frm_pasang #nama"),"error","Username sudah digunakan");
tbapp.pasang.scroll_error($("#frm_pasang #nama"),null)
}
else{
	alert(a.msg)
}

}

}
,500)
}
,error:function(){
	tbapp.global.loader.hide()
}

}
)
}

}
,windowCloseHandler:{
	proceed:true,saveCurrentAdDatas:function(){
	$.ajax({
	type:"POST",dataType:"json",url:parent.location.protocol+"//"+window.location.hostname+"/pasang/ajax-save-temp-datas/",data:$("#frm_pasang").serialize(),cache:false,async:false,success:function(a){
	
}
,error:function(a,c,b){
	
}
,complete:function(a,b){
	
}

}
)
}

}
,conditionCheck:function(){
	var a=$("#cat_lvl_1").val();
if(tbapp.global.check.isNumeric($("#userid").val())){
	tbapp.pasang.form.request_promo_config(a)
}
if($("#AUC_CONDITION").val()=="baru"){
	if($("#PRO_GALLERY").is(":checked")&&$("#PRO_GALLERY").is(":disabled")){
	$("#PRO_GALLERY").prop("checked",false)
}
else{
	if($("#PRO_GALLERY").is(":checked")){
	$("#PRO_GALLERY").prop("checked",false);
var b=$("#PRO_GALLERY").attr("name");
if(b.length){
	var c=tbapp.pasang.prop.promoPointValue[b];
	tbapp.pasang.form.promo_check(this,c)
}

}

}
$("#promo_pro_gallery").hide()
}
else{
	if($("#AUC_CONDITION").val()==""){
	
	}
	else{
		if(parseInt($("#cat_lvl_1 select").val())>0){
		if($("input#PRO_GALLERY.p-check").is(":checked")){
		$("input#PRO_GALLERY.p-check").prop("checked",false)
}
$("input#PRO_GALLERY.p-check").prop("disabled",false)
}
$("#promo_pro_gallery").show()
}

}

}

}
;
jQuery(document).ready(function($){
	var hidenKondisi=["198","199","200","201","4845","95","97"],KondisiBaru=["199","201"],kondisiBekas=["200","198"],selalubaru=["4845"];
	subSelected=$("#DROP_SUBSECTION").val();
secSelected=$("#DROP_SECTION").val();
catSelected=$("#DROP_CAT").val();
if($.inArray(subSelected,hidenKondisi)>-1||$.inArray(secSelected,hidenKondisi)>-1||$.inArray(catSelected,hidenKondisi)>-1){
	$("#kondisi").hide();
if($.inArray(subSelected,KondisiBaru)>-1){
	$("#AUC_CONDITION").val("baru")
}
if($.inArray(subSelected,kondisiBekas)>-1){
	$("#AUC_CONDITION").val("bekas")
}
if($.inArray(subSelected,selalubaru)>-1){
	$("#AUC_CONDITION").val("baru")
}

}
else{
	$("#kondisi").show()
}
tbapp.pasang.conditionCheck();
var override_opt={
	ajxMgrCat:$.manageAjax.create("categoryOnChange",{
	queue:true,cacheResponse:true
}
),ajaxMgrRDEP:$.manageAjax.create("regionOnChange",{
	queue:true,cacheResponse:true
}
),ajxMgrRequestCustomField:null,hasAuthCheck:0
}
;
if(!Array.prototype.indexOf){
	Array.prototype.indexOf=function(searchElement){
	if(this==null){
	throw new TypeError()
}
var t=Object(this);
var len=t.length>>>0;
if(len===0){
	return -1
}
var n=0;
if(arguments.length>1){
	n=Number(arguments[1]);
	if(n!=n){
		n=0
	}
	else{
		if(n!=0&&n!=Infinity&&n!=-Infinity){
		n=(n>0||-1)*Math.floor(Math.abs(n))
	}

}

}
if(n>=len){
	return -1
	}
	var k=n>=0?n:Math.max(len-Math.abs(n),0);
for(;
	k<len;
k++){
	if(k in t&&t[k]===searchElement){
	return k
}

}
return -1
}

}
if(tbapp.global.check.isSet(window.promo_point_value_override)){
	override_opt=$.extend(override_opt,{
	promoPointValue:window.promo_point_value_override
}
)
}
if(tbapp.global.check.isSet(window.promo_point_exception_category_override)){
	override_opt=$.extend(override_opt,{
	promoPointExceptionCategory:window.promo_point_exception_category_override
}
)
}
if(tbapp.global.check.isSet(window.prevValues)){
	window.prevValues.userDefaultPoints=parseInt($("div.poin-sisa").text());
	window.prevValues.aucCondition=$("#AUC_CONDITION").val();
override_opt=$.extend(override_opt,{
	prevValues:$.extend({
	
}
,tbapp.pasang.prop.prevValues,window.prevValues)
}
)
}
tbapp.pasang.init(override_opt);
tbapp.pasang.photoUpload();
tbapp.pasang.custom_field.attach_event_on_custom_field();
$(window).on("beforeunload",function(e){
	var qs=tbapp.global.tools.get_current_url.only_query_string();
	var pattern=/(ad)=(\d)+.*/i;
var isMatch=pattern.test(qs);
if(isMatch===false&&$("#frm_pasang").length&&tbapp.pasang.windowCloseHandler.proceed){
	tbapp.pasang.windowCloseHandler.saveCurrentAdDatas()
}

}
);
$('a[href$="logout.asp"]').on("click",function(e){
	e.preventDefault();
	tbapp.pasang.windowCloseHandler.proceed=false;
window.location.href=$(this).attr("href")
}
);
$("#form_container").on({
	focus:function(){
	$(this).closest(".formBG").addClass("active")
}
,blur:function(){
	$(this).closest(".formBG").removeClass("active")
}

}
,":input");
$("input#AUC_TITLE").on({
	keyup:function(e){
	if($(this).val().length>55){
	$(this).val($(this).val().substring(0,55))
}
$("#frm_pasang #judul").find("#title_length").html($("input#AUC_TITLE").val().length+" karakter");
	if($(this).closest(".formBG").hasClass("error")||$(this).closest(".formBG").hasClass("success")){
		tbapp.pasang.form.validate("title",$(this),"",false)
}

}
,change:function(e){
	tbapp.pasang.form.validate("title",$(this),"",false)
}
,focus:function(e){
	if($(this).closest(".formBG").hasClass("error")||$(this).closest(".formBG").hasClass("success")||$(this).closest(".formBG").hasClass("alert")){
	
	}
	else{
		tbapp.pasang.show_notification_box($(this).closest(".formBG"),"infos","Judul tanpa kata Dijual, Dicari dan sejenisnya")
}

}
,blur:function(e){
	if($(this).closest(".formBG").hasClass("infos")){
	tbapp.pasang.remove_notification_box($(this).closest(".formBG"))
}

}

}
);
$("#frm_pasang #judul").find("#title_length").html($("input#AUC_TITLE").val().length+" karakter");
$("#cat_lvl_1").on("click",function(e){
	e.preventDefault();
	$(".cat-overlay").show()
}
);
$(".cat-overlay .box-close").on("click",function(e){
	e.preventDefault();
	$(".cat-overlay").hide()
}
);
$("#ubahcat").on("click",function(e){
	e.preventDefault();
	$(".cat-overlay").show()
}
);
$("ul.catlev1").on("click","li a",function(e){
	$("input#AUC_SECTION").val($(this).data("key"));
	$("input#AUC_SUBSECTION").val(0);
$("input#AUC_CAT").val(0);
e.preventDefault();
if(parseInt($(this).data("key"))>0){
	var sec_id=$(this).data("key");
var sec_name=$(this).text();
hideKondisi=[95,97];
if($.inArray(sec_id,hideKondisi)>-1){
	$("#kondisi").hide();
$("#AUC_CONDITION").val("baru")
}
else{
	$("#kondisi").show()
}
$("input#AUC_SUBSECTION").val(0);
$("input#AUC_CAT").val(0);
tbapp.pasang.prop.ajxMgrCat.abort();
tbapp.pasang.prop.ajxMgrCat.add({
	url:ajaxCatChange,type:"POST",data:{
	secid:sec_id,lv:2
}
,success:function(data){
	var new_options="",rel_value,is_chrome=navigator.userAgent.toLowerCase().indexOf("chrome")>-1,data=eval("("+data+")"),dataMoreThanOne=false;
	if(tbapp.global.check.objLength(data.name)>1){
		dataMoreThanOne=true
	}
	if(tbapp.global.check.isNumeric($("#userid").val())){
		tbapp.pasang.form.request_promo_config(sec_id)
	}
	if(data.is_homepage_gallery_exception){
		$("#PRO_HOMEPAGE_GALLERY").removeAttr("checked");
tbapp.pasang.form.toggle_promo_checkbox("PRO_HOMEPAGE_GALLERY","disable")
}
else{
	tbapp.pasang.form.toggle_promo_checkbox("PRO_HOMEPAGE_GALLERY","enable")
}
if(dataMoreThanOne){
	var aTemp=[];
	var bTemp=[];
for(var sKey in data.name){
	aTemp[sKey]=data.name[sKey];
	bTemp.push(data.name[sKey])
}
bTemp.sort(function(a,b){
	var ret=0;
	a=a.toLowerCase();
b=b.toLowerCase();
if(a>b){
	ret=1
}
if(a<b){
	ret=-1
}
return ret
}
);
data.name={
	
}
;
$.each(bTemp,function(i,val){
	data.name[val]=$.inArray(val,aTemp)
}
);
aTemp=null;
bTemp=null
}
$.each(data.name,function(i,val){
	if(dataMoreThanOne){
	var temp_i=i;
	i=val;
val=temp_i
}
var temp_next_not="";
if(data.haschild[i]===true){
	rel_value=2;
	temp_next_not="<span></span>"
}
else{
	rel_value=1
	}
	new_options+='<li><a href="#" rel="'+rel_value+'" data-key="'+data.id[i]+'"><font>'+val+"</font>"+temp_next_not+"</a></li>"
}
);
$("ul.catlev2").html(new_options);
$("#AUC_SECTION1").val(sec_id)
}

}
)
}
$("ul.catlev1 li.selected").removeClass("selected");
$(this).parent("li").addClass("selected");
$("h3#label-catlv2").text($(this).text());
$("h3#label-catlv3").text("");
$("ul.catlev3").html("")
}
);
$("ul.catlev2").on("click","li a",function(e){
	e.preventDefault();
	var _sec_selected=$("input#AUC_SECTION").val(),_sub_selected=$(this).data("key"),hideKondisi=[198,199,200,201,4845],KondisiBaru=[199,201,4845],kondisiBekas=[200,198],sechide=[97,95];
if(parseInt(_sub_selected)>0){
	var dlevel=$(this).attr("rel");
if($.inArray(_sub_selected,hideKondisi)>-1||$.inArray(_sec_selected,sechide)>-1){
	$("#kondisi").hide();
if($.inArray(_sub_selected,KondisiBaru)>-1||$.inArray(_sec_selected,sechide)>-1){
	$("#AUC_CONDITION").val("baru")
}
if($.inArray(_sub_selected,kondisiBekas)>-1){
	$("#AUC_CONDITION").val("bekas")
}

}
else{
	$("#kondisi").show()
}
if(parseInt(dlevel)==2){
	$("input#AUC_SUBSECTION").val(_sub_selected);
$("input#AUC_CAT").val(0);
tbapp.pasang.prop.ajxMgrCat.abort();
tbapp.pasang.prop.ajxMgrCat.add({
	url:ajaxCatChange,type:"POST",data:{
	secid:_sec_selected,subid:_sub_selected,lv:3
}
,success:function(data){
	var new_options="",rel_value,is_chrome=navigator.userAgent.toLowerCase().indexOf("chrome")>-1,data=eval("("+data+")"),dataMoreThanOne=false;
	if(tbapp.global.check.objLength(data.name)>1){
		dataMoreThanOne=true
	}
	if(data.is_homepage_gallery_exception){
		$("#PRO_HOMEPAGE_GALLERY").removeAttr("checked");
tbapp.pasang.form.toggle_promo_checkbox("PRO_HOMEPAGE_GALLERY","disable")
}
else{
	tbapp.pasang.form.toggle_promo_checkbox("PRO_HOMEPAGE_GALLERY","enable")
}
if(dataMoreThanOne){
	var aTemp=[];
	var bTemp=[];
for(var sKey in data.name){
	aTemp[sKey]=data.name[sKey];
	bTemp.push(data.name[sKey])
}
bTemp.sort(function(a,b){
	var ret=0;
	a=a.toLowerCase();
b=b.toLowerCase();
if(a>b){
	ret=1
}
if(a<b){
	ret=-1
}
return ret
}
);
data.name={
	
}
;
$.each(bTemp,function(i,val){
	data.name[val]=$.inArray(val,aTemp)
}
);
aTemp=null;
bTemp=null
}
$.each(data.name,function(i,val){
	if(dataMoreThanOne){
	var temp_i=i;
	i=val;
val=temp_i
}
if(data.haschild[i]===true){
	rel_value=3
}
else{
	rel_value=2
}
new_options+='<li><a href="#" rel="'+rel_value+'" data-key="'+data.id[i]+'"><font>'+val+"</font></a></li>"
}
);
$("ul.catlev3").html(new_options);
$("#DROP_SUBSECTION1").prop("disabled",false);
$("#DROP_SUBSECTION1").val(_sub_selected)
}

}
)
}
else{
	tbapp.pasang.form.check_promo_exception("PRO_HOMEPAGE_GALLERY","section",_sec_selected,{
	secid:_sec_selected,subid:"",catid:_sub_selected
}
);
tbapp.pasang.custom_field.request_custom_field(_sub_selected);
$("input#AUC_SUBSECTION").val(0);
$("input#AUC_CAT").val(_sub_selected);
$("ul.catlev3").html("");
$("#catlv1").html($("h3#label-catlv2").text()+'<span class="arr-breadcrumb"></span>');
$("#catlv2").text($(this).text());
$("#catlv3").hide();
$("#DROP_CAT1").val(_sub_selected);
$("#DROP_SUBSECTION1").prop("disabled",true);
$(".cat-overlay").hide();
$("#crumb-cat").show();
$("#cat_lvl_1").hide();
$(".bodyshow").show()
}
$("ul.catlev2 li.selected").removeClass("selected");
$(this).parent("li").addClass("selected");
$("h3#label-catlv3").text($(this).text());
if(tbapp.pasang.prop.prevValues.secId!=null&&tbapp.pasang.prop.prevValues.secId!=$("input#AUC_SECTION").val()){
	$("#new-cat").show()
}
else{
	$("#new-cat").hide()
}

}

}
);
$("ul.catlev3").on("click","li a",function(e){
	var _sec_selected=$("input#AUC_SECTION").val()||"";
	var _sub_selected=$("input#AUC_SUBSECTION").val()||"";
var _cat_selected=$(this).data("key");
if(parseInt(_cat_selected)>0){
	$("input#AUC_CAT").val(_cat_selected);
tbapp.pasang.custom_field.request_custom_field(_cat_selected)
}
else{
	$("input#AUC_CAT").val(0);
$("#custom_field_container").html("")
}
tbapp.pasang.form.check_promo_exception("PRO_HOMEPAGE_GALLERY","section",_sec_selected,{
	secid:_sec_selected,subid:"",catid:_sub_selected
}
);
tbapp.pasang.form.validate("category",$(this),"",false);
$("#catlv1").html($("h3#label-catlv2").text()+'<span class="arr-breadcrumb"></span>');
$("#catlv2").html($("h3#label-catlv3").text()+'<span class="arr-breadcrumb"></span>');
$("#catlv3").show();
$("#catlv3").text($(this).text());
$("#DROP_CAT1").val(_cat_selected);
$(".cat-overlay").hide();
$("#crumb-cat").show();
$("#cat_lvl_1").hide();
$(".bodyshow").show();
if(tbapp.pasang.prop.prevValues.secId!=null&&tbapp.pasang.prop.prevValues.secId!=$("input#AUC_SECTION").val()){
	$("#new-cat").show()
}
else{
	$("#new-cat").hide()
}

}
);
$("input#AUC_AD_PRICE").on({
	keyup:function(e){
	if($(this).val().length>12){
	$(this).val($(this).val().substring(0,12))
}

}
,change:function(e){
	tbapp.pasang.form.validate("price",$(this),"",false)
}
,keypress:function(e){
	return tbapp.pasang.check_valid_number(e)
}
,focus:function(e){
	if($(this).closest(".formBG").hasClass("error")||$(this).closest(".formBG").hasClass("success")){
	
}
else{
	tbapp.pasang.show_notification_box($(this).closest(".formBG"),"infos","Cukup masukkan angka saja")
}

}
,blur:function(e){
	if($(this).closest(".formBG").hasClass("infos")){
	tbapp.pasang.remove_notification_box($(this).closest(".formBG"))
}

}

}
);
$("select#AUC_CONDITION").on("change",function(){
	tbapp.pasang.form.validate("condition",$(this),"",false);
	tbapp.pasang.conditionCheck();
if(tbapp.pasang.prop.prevValues.aucCondition!=null&&tbapp.pasang.prop.prevValues.aucCondition!=""&&tbapp.pasang.prop.prevValues.aucCondition!=$("select#AUC_CONDITION").val()){
	tbapp.pasang.show_notification_box(parentObj,"success","Perhatian! Jika Anda mengubah Kondisi, poin Top-Listing yang sudah terpakai di iklan ini akan hangus.")
}
else{
	tbapp.pasang.show_notification_box(parentObj,"success","ok")
}

}
);
$("select#AUC_LOCATION").on({
	change:function(){
	var $obj_kota=$(".custom-field[name='extra[p_kota]']"),$obj_kec=$(".custom-field[name='extra[p_kecamatan]']");
	tbapp.pasang.remove_notification_box($("#kota"));
if($obj_kota.length){
	tbapp.pasang.remove_notification_box($obj_kota.closest(".formBG"))
}
if($obj_kec.length){
	tbapp.pasang.remove_notification_box($obj_kec.closest(".formBG"))
}
if(tbapp.pasang.form.validate("region",$(this),"",false)){
	tbapp.pasang.form.request_region_detail($(this).val(),"location");
$("#kota").show()
}
else{
	$("#p_kab").html('<option value="0">Pilih Propinsi Dahulu</option>');
$("#kota").hide();
if($obj_kota.length){
	$obj_kota.html('<option value="">Pilih Propinsi Dahulu</option>')
}
if($obj_kec.length){
	$obj_kec.html('<option value="">Pilih Kabupaten Dahulu</option>')
}

}

}

}
);
$("select#p_kab").on({
	change:function(){
	tbapp.pasang.form.validate("p_kab",$(this),"",false);
	var $obj_kec=$(".custom-field[name='extra[p_kecamatan]']");
if($obj_kec.length){
	tbapp.pasang.remove_notification_box($obj_kec.closest(".formBG"));
tbapp.pasang.form.request_region_detail($("select#AUC_LOCATION").val(),"kab")
}

}

}
);
$("textarea#AUC_DESCR").on({
	keyup:function(e){
	if($(this).val().length>5000){
	$(this).val($(this).val().substring(0,5000))
}
$("#desc_length").html(5000-$(this).val().length+" karakter tersisa");
	var evtCode=(e.keyCode?e.keyCode:e.which);
if((evtCode>=32&&evtCode<=127)||evtCode==13||evtCode==8){
	if($(this).closest(".formBG").hasClass("error")||$(this).closest(".formBG").hasClass("success")){
	tbapp.pasang.form.validate("description",$(this),"",false)
}

}

}
,focus:function(e){
	if($(this).closest(".formBG").hasClass("error")||$(this).closest(".formBG").hasClass("success")){
	
}
else{
	tbapp.pasang.show_notification_box($(this).closest(".formBG"),"infos","Isi deskripsi dengan jelas, masukkan sebanyak mungkin keterangan tambahan agar iklan menarik")
}

}
,blur:function(e){
	if($(this).closest(".formBG").hasClass("infos")){
	tbapp.pasang.remove_notification_box($(this).closest(".formBG"))
}
if($(this).closest(".formBG").hasClass("error")||$(this).closest(".formBG").hasClass("success")||$(this).val()==""){
	
}
else{
	tbapp.pasang.form.validate("description",$(this),"",false)
}

}

}
);
$("#frm_pasang #desc_length").html((5000-$("textarea#AUC_DESCR").val().length)+" karakter tersisa");
$("input#email_post").on({
	change:function(e){
	tbapp.pasang.form.validate("email",$(this),"",false)
}
,keyup:function(e){
	if($(this).closest(".formBG").hasClass("error")||$(this).closest(".formBG").hasClass("success")){
	tbapp.pasang.form.validate("email",$(this),"",false)
}

}
,focus:function(e){
	if($(this).closest(".formBG").hasClass("error")||$(this).closest(".formBG").hasClass("success")){
	
}
else{
	tbapp.pasang.show_notification_box($(this).closest(".formBG"),"infos","Email tidak akan terlihat oleh user lain")
}

}
,blur:function(e){
	if($(this).closest(".formBG").hasClass("infos")){
	tbapp.pasang.remove_notification_box($(this).closest(".formBG"))
}

}

}
);
$("input#fullname_post").on({
	keyup:function(e){
	if($(this).val().length>30){
	$(this).val($(this).val().substring(0,30))
}
if($(this).closest(".formBG").hasClass("error")||$(this).closest(".formBG").hasClass("success")){
	tbapp.pasang.form.validate("username",$(this),"",false)
}

}
,change:function(e){
	tbapp.pasang.form.validate("username",$(this),"",false)
}
,blur:function(e){
	if($(this).closest(".formBG").hasClass("infos")){
	tbapp.pasang.remove_notification_box($(this).closest(".formBG"))
}

}

}
);
$("input#phone_post").on({
	change:function(e){
	tbapp.pasang.form.validate("phone",$(this),"",false)
}
,keyup:function(){
	if($(this).closest(".formBG").hasClass("error")||$(this).closest(".formBG").hasClass("success")){
	tbapp.pasang.form.validate("phone",$(this),"",false)
}

}
,focus:function(e){
	if($(this).closest(".formBG").hasClass("error")||$(this).closest(".formBG").hasClass("success")){
	
}
else{
	tbapp.pasang.show_notification_box($(this).closest(".formBG"),"infos",'Nomor lengkap dengan kode area. Tanpa menggunakan "+", contoh:021234567')
}

}
,blur:function(e){
	if($(this).closest(".formBG").hasClass("infos")){
	tbapp.pasang.remove_notification_box($(this).closest(".formBG"))
}

}

}
);
$("input#pinbb_post").on({
	change:function(e){
	tbapp.pasang.form.validate("pinbb",$(this),"",false)
}

}
);
$("#frm_pasang .p-check").on("click",function(e){
	var opt=$(this).attr("name");
	if(opt.length){
		var pointValue=tbapp.pasang.prop.promoPointValue[opt];
	tbapp.pasang.form.promo_check(this,pointValue);
if(opt.length&&opt=="PRO_LINK"){
	if($(this).is(":checked")){
	$("#PRO_LINK_VALUE").removeAttr("disabled").focus()
}
else{
	$("#PRO_LINK_VALUE").val("").attr("disabled","disabled");
$("#PRO_LINK_MESSAGE").html("").hide()
}

}

}

}
);
$("#PRO_LINK_VALUE").bind("blur",function(){
	if(!$(this).val().match(/(mailto\:|(news|(ht|f)tp(s?))\:\/\/)?([a-zA-Z0-9]+(\.[a-zA-Z0-9]+)+.*)$/i)){
	$("#PRO_LINK_MESSAGE").html("Alamat website yang Anda masukkan masih salah.").attr("display",true)
}
else{
	$("#PRO_LINK_MESSAGE").html("").attr("display",false)
}

}
);
if($.browser.msie){
	$("#frm_pasang").submit(function(e){
	e.preventDefault()
}
);
$("body").on("click","#frm_pasang :submit",function(){
	var $obj=$("#frm_pasang");
	if($(this).attr("id")=="frm_login_submit"){
		$obj.attr("action",parent.location.protocol+"//"+window.location.hostname+"/login.asp?ref=pasang");
try{
	$obj.unbind();
	$obj.bind("submit",function(){
		
	}
	);
$obj.submit()
}
catch(err){
	
}

}
else{
	if(tbapp.pasang.form.on_submit()){
	if($(this).attr("id")=="frm-preview"){
	tbapp.pasang.form.preview_post();
	$("#frm_pasang :submit").show();
e.preventDefault()
}
if($("#frm_pasang input#email_post").length&&tbapp.pasang.prop.hasAuthCheck==0){
	tbapp.pasang.login.check_email();
	$("#frm_pasang :submit").show();
e.preventDefault()
}
else{
	try{
	$obj.unbind();
	$obj.bind("submit",function(){
		
	}
	);
$obj.submit();
tbapp.global.loader.hide()
}
catch(err){
	
}

}

}
else{
	e.preventDefault()
}

}

}
)
}
else{
	$("body").on("click","#frm_pasang :submit",function(e){
	if($(this).attr("id")=="frm_login_submit"){
	$("#frm_pasang").attr("action",parent.location.protocol+"//"+window.location.hostname+"/login.asp?ref=pasang");
return true
}
else{
	if(tbapp.pasang.form.on_submit()){
	if($(this).attr("id")=="frm-preview"){
	tbapp.pasang.form.preview_post();
	$("#frm_pasang :submit").show();
return false
}
if($("#frm_pasang input#email_post").length&&tbapp.pasang.prop.hasAuthCheck==0){
	tbapp.pasang.login.check_email();
	$("#frm_pasang :submit").show();
return false
}
else{
	tbapp.global.loader.hide();
	return true
}

}
else{
	return false
	}

}

}
)
}
$("body").on("keypress","#frm_pasang :input",function(e){
	if(!$(this).is("textarea")){
	if(e.which==13){
	e.preventDefault()
	}

}

}
);
$("body").on("click","#member-login",function(e){
	e.preventDefault();
	tbapp.pasang.login.loadForm()
}
);
$("a.social.login").on("click",function(e){
	e.preventDefault();
	var login_url=$(this).attr("href");
try{
	var socnet_auth_window=window.open(login_url,"social_login","width=600, height=400 ,scrollbars=no")
}
catch(e){
	
}
return true
}
);
$("a.p-preview").on("click",function(e){
	e.preventDefault();
	var opt=$(this).attr("name");
if(opt.length>18){
	switch(opt.substring(18)){
	case"1":break;
case"2":tbapp.global.loader.init({
	values:{
	title:"PROMO TOP LISTING",content:'<img src="'+asset_domain+'skins/default/images/help/screenshot-promogallery.jpg?v=2">',footer:""
}
,visibility:{
	title:true,close_button:true,footer:false
}

}
);
tbapp.global.loader.reload().show();
$(".popup-bg .popup-box").css({
	width:"640px","margin-top":"5%"
}
);
break;
case"3":tbapp.global.loader.init({
	values:{
	title:"PROMO LATAR BELAKANG KUNING",content:'<img src="'+asset_domain+'skins/default/images/help/screenshot-promoyellow.jpg">',footer:""
}
,visibility:{
	title:true,close_button:true,footer:false
}

}
);
tbapp.global.loader.reload().show();
$(".popup-bg .popup-box").css({
	width:"640px","margin-top":"5%"
}
);
break;
case"4":tbapp.global.loader.init({
	values:{
	title:"PROMO JUDUL HURUF TEBAL",content:'<img src="'+asset_domain+'skins/default/images/help/screenshot-promobold.jpg">',footer:""
}
,visibility:{
	title:true,close_button:true,footer:false
}

}
);
tbapp.global.loader.reload().show();
$(".popup-bg .popup-box").css({
	width:"640px","margin-top":"5%"
}
);
break;
case"5":tbapp.global.loader.init({
	values:{
	title:"PROMO HOT ITEMS",content:'<img src="'+asset_domain+'skins/default/images/help/screenshot-promostiker.jpg">',footer:""
}
,visibility:{
	title:true,close_button:true,footer:false
}

}
);
tbapp.global.loader.reload().show();
$(".popup-bg .popup-box").css({
	width:"640px","margin-top":"5%"
}
);
break;
case"6":tbapp.global.loader.init({
	values:{
	title:"PROMO HUBUNGAN ANTAR WEBSITE",content:'<img src="'+asset_domain+'skins/default/images/help/screenshot-promolink.jpg">',footer:""
}
,visibility:{
	title:true,close_button:true,footer:false
}

}
);
tbapp.global.loader.reload().show();
$(".popup-bg .popup-box").css({
	width:"640px","margin-top":"5%"
}
);
break
}

}

}
);
$("body").on("click","#close-preview",function(e){
	e.preventDefault();
	tbapp.global.loader.hide();
tbapp.global.track.event(tbapp.global.tools.get_current_url.full(),{
	category:"Pasang Iklan",action:"edit-preview"
}
)
}
);
$("body").on("click",".pop-close.preview-close",function(e){
	tbapp.global.track.event(tbapp.global.tools.get_current_url.full(),{
	category:"Pasang Iklan",action:"close-preview"
}
)
}
);
$("body").on("click","#frm-preview",function(){
	tbapp.global.track.event(tbapp.global.tools.get_current_url.full(),{
	category:"Pasang Iklan",action:"save-ad-1"
}
)
}
);
$("body").on("click","#frm-submit",function(e){
	if($("#frm_pasang input#email_post").length){
	if(tbapp.pasang.prop.hasAuthCheck>0){
	tbapp.global.track.event(tbapp.global.tools.get_current_url.full(),{
	category:"Pasang Iklan",action:"simpan-iklan"
}
)
}

}
else{
	tbapp.global.track.event(tbapp.global.tools.get_current_url.full(),{
	category:"Pasang Iklan",action:"simpan-iklan"
}
)
}

}
);
$("body").on("click",".popup-con .fotobox .fotolist",function(e){
	e.preventDefault();
	if($(this).hasClass("active")){
		return
	}
	else{
		$("body .popup-con .fotobox .fotolist").removeClass("active");
var imageSrc=$(this).find("img").attr("src");
$("body .popup-con .fotobig").find("img").attr("src",imageSrc);
$(this).addClass("active")
}

}
);
$(".add-photo-button").css({
	"z-index":0
}
)
}
);

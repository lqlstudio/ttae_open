var DEBUG =true;
var BROWSER = {};
var CURMODULE = null,CURSCRIPT=null,CURACTION=null,$_GET={},TAE=false,UID=false,USERNAME=false,QQ_ZONE=false,GET_GOODS=0;
var URL  =location.href;
var TAE = false;

(function (){
	var set_obj = $("meta[name='set']");
	if(set_obj.length>0)	{
			var set = set_obj.attr('content').split('|');
			TAE			=  set[0] == 1 ? true:false;
			CURSCRIPT	=  set[1] ;
			CURMODULE	=  set[2] ;
			CURACTION	=  set[3] ;		  
			UID			= parseInt(set[4]);	
			USERNAME	=  set[5];
			GET_GOODS	=  set[6];	//前台获取商品方法,1=用m_taobao,其它就是用淘点金
			
	}
	var get 	=	$("meta[name='get']").attr('content');	
	if(get =='') return ;
	get  = decodeURIComponent(get);
	var filter = ['<',">","\\(",'"',"\\)",'\'',"&gt;","&lt;",'\\\\','&#','x0','0x','%','u00','eval','.js','.php','0000','\\*'];
	for(var i=0;i<filter.length;i++){
		var reg = new RegExp(filter[i]);
		get = get.replace(reg,'').replace(reg,'');
	}
	get= get.split('&');
	for(var i = 0;i<get.length;i++){
		if(get[i]){
			var s = get[i].split('=');
			var k =s[0];
			var v = s[1];
			if(k.match(/^[a-z0-9A-Z_\-]{1,10}$/)){
				$_GET[k] = v;
			}							
		}
	}
	
})();

function L(s){
	console.log(s);
}



function ajaxget(url,success,dataType){
			try{
				var type = dataType ?dataType:'json';
					$.ajax({type:'GET',url:url,data:'',success:function(s){		
						if(s['msg'] &&( s.msg.indexOf('&gt;') != -1 || s['html'] ==1))s.msg = htmldecode(s.msg);							
						if(typeof success == 'function')success(s);
					},dataType:type,error: function(s,d,e){
						if(typeof error == 'function')error(s,d,e);
						 console.log('ajax error,msg:' +  s );
						 return false;
					}});
			}catch(e){
				L(e);
			}
}




function trim(str){
	return str.replace(/\s+/g,'');
}
function sub_str(str,start,end){
	str = trim(str);
	start = trim(start);
	if(end!=-1)end = trim(end);
	
	var s = str.indexOf(start);
	var str1= str.substring(s+start.length,str.length);
	var e = end == -1 ? str1.length :str1.indexOf(end);
	return  str1.substring(0,e);	
};

function click(obj,fun){
	$(obj).click(fun);
}

function htmldecode ( str ) { 
	var converter = document.createElement("div"); 
	converter.innerHTML = str; 
	var output = converter.innerText; 
	converter = null; 
	return output; 
} 


$(function(){	
		$("._ajax_dialog").click(function(){
			var href = $(this).attr('href');
			if(href && href!='#'){
				var url = href;
			}else{
				var url = $(this).attr('data-url')
			}
			if(!url) return false;			
			 ajaxget(url,function(s){
					s.msg = decodeURIComponent(s.msg);			
					if(s.html == 1)  s.msg = htmldecode(s.msg);
					s.msg = s.msg.replace(/\+/g,'');
					showDialog(s.msg,s.status);
					
			 });
			return false;
		});	
	
		$(".showdialog").click(function(){
			var msg =$(this).attr('data-msg');
			var status =$(this).attr('data-status');
			showDialog(msg,status);
			return false;
		});
	
})


function _scroll(call){
		$(window).scroll(function(e){
				if(document.documentElement && document.documentElement['scrollTop']){
					var el = document.documentElement;
				}else{
					var el = document.body;
				}
				call(el.scrollTop,el,e);
		})
}


function  showDialog (msg,status,time,call){
			$(".dialog_info_hint").remove();
			
			if(!status) status = 'error';
			var status_class = 'dialog_info_'+status;
			var html = '<div class="dialog_info_hint dialog_info_suc cl '+status_class+'">';
			html += '<div class="dialog_info_status"></div><div class="dialog_info_con"></div></div>';
			var box = $(html);	
			box.appendTo('.uz_system')
			box.show();
			
			var content = box.find(".dialog_info_con");
			this.length++;
			content.html(msg);
			var w = 0;
			var h = 0;			
			
				w =$(window).width();
				h=$(window).height();

			
			w = parseInt(w);
			h = parseInt(h);
			
			var top=h/2-30;
			
			var width=content.outerWidth();
			var left = (w-width)/2;
			
			box.css({'left':left,top:top,'z-index':9999999});
			var class_name =  '';
			if(status =='success' || status =='none'){
				class_name='bouncein';
			}else if(status =='error'){
				class_name='shake';
			}else if(status =='info'){
				class_name='bounce';
			}
			box.addClass(class_name);
			time = time || 4000;
			
			 function remove(time){
				   setTimeout(function(){
				 	 box.addClass('bounceout');
						 setTimeout(function(){
							 box.remove();
							 if(typeof call == 'function')	call();
						},1000);
			 	   },time);
			 }
			 remove(time);
			 box.click(function(){
				remove(50); 
			});
}


function C(cookieName, cookieValue, time, path, domain, secure){
	if(typeof cookieValue == 'undefined') return getcookie(cookieName);
	setcookie(cookieName, cookieValue, time, path, domain, secure);
}

var cookiepre = 'uz-system_';
function setcookie(cookieName, cookieValue, time, path, domain, secure) {
	
	var expires = new Date();
	if(cookieValue == '' || time < 0) {
		cookieValue = '';
		time = -2592000;
	}
	expires.setTime(expires.getTime() + time * 1000);
	domain = !domain ? '' : domain;
	path = !path ? '/' : path;
	document.cookie = escape(cookiepre + cookieName) + '=' + escape(cookieValue)
		+ (expires ? '; expires=' + expires.toGMTString() : '')
		+ (path ? '; path=' + path : '/')
		+ (domain ? '; domain=' + domain : '')
		+ (secure ? '; secure' : '');
}

function getcookie(name) {
	var result = null;
    var myCookie = ""+document.cookie+";"; 
    var searchName = cookiepre+name+"=";
    var satrt = myCookie.indexOf(searchName);
    var end;
    if(satrt != -1){
        satrt += searchName.length;
        end = myCookie.indexOf(";",satrt);
       result = unescape(myCookie.substring(satrt,end));
    }	
    return result;	
}


//browser.weixin

var browser={
	  trident:navigator.userAgent.indexOf('Trident') > -1, //IE内核
	  presto:navigator.userAgent.indexOf('Presto') > -1, //opera内核
	  webkit:navigator.userAgent.indexOf('AppleWebKit') > -1, //苹果、谷歌内核
	  gecko:navigator.userAgent.indexOf('Gecko') > -1 && navigator.userAgent.indexOf('KHTML') == -1, //火狐内核
	  mobile: !!navigator.userAgent.match(/AppleWebKit.*Mobile.*/), //是否为移动终端
	  ios: !!navigator.userAgent.match(/i[^;]+;( U;)? CPU.+Mac OS X/), //ios终端
	  android:navigator.userAgent.indexOf('Android') > -1 || navigator.userAgent.indexOf('Linux') > -1, //android终端或uc浏览器
	  iphone:navigator.userAgent.indexOf('iPhone') > -1 , //是否为iPhone或者QQHD浏览器
	  ipad:navigator.userAgent.indexOf('iPad') > -1, //是否iPad
	  weixin:navigator.userAgent.indexOf('MicroMessenger') > -1, //是否微信
	  webapp:navigator.userAgent.indexOf('Safari') == -1, //是否web应该程序，没有头部与底部
	  uc:navigator.userAgent.match(/UCBrowser/i) == "UCBrowser",
	  qq:navigator.userAgent.match(/MQQBrowser/i) == "MQQBrowser",
    };
for(var i in browser){
	if(browser[i])$('html').addClass(i);
}


(function (){
	if (browser.weixin) {
		var html = '<div class="is-weixin ad hide">';
		html+='<img src="http://img02.taobaocdn.com/imgextra/i2/1038081966/TB2.yqpbpXXXXc_XXXXXXXXXXXX_!!1038081966-2-tae.png">';
		html+='</div>';
		$(html).appendTo('body');
		$(function(){
				$('a').click(function(){
						  var url=$(this).attr('href');
						  if(url.indexOf('num_iid') != -1 || url.indexOf('item.htm') !=-1){
							   $(".is-weixin").show();
							  return false;
						}
				});
		})
		
	}
})();

var _hhok = {
	ajax_dialog:function(){
				var el =  '._ajax_dialog,._ajaxDialog';		
				if($(el).length == 0) return ;			
				$(el).click(function(){
					var url = $(this).attr('data-url') ? $(this).attr('data-url') : (this.href && this.href!='#' && this.href!='javascript:;'? this.href :'') ;
					if(!url) return false;
					ajaxget(url,function(s){
						
					});
					return false;
					
				});
	}
}

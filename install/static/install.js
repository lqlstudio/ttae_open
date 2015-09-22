

function init(type){
		var address = $("input[name='address']").val();
		if(!address){
			Dialog.info('数据库地址不能为空');
			return false;
		}
		var port = $("input[name='port']").val();
		if(!port){
			Dialog.info('数据库端口不能为空');
			return false;
		}
		
		var username = $("input[name='username']").val();
		if(!username){
			Dialog.info('数据库用户名不能为空');
			return false;
		}
		var password = $("input[name='password']").val();
		if(!password){
			Dialog.info('数据库密码不能为空');
			return false;
		}
		var name = $("input[name='name']").val();
		if(!name){
			Dialog.info('数据库名称不能为空');
			return false;
		}
		$('.install_box,.hd_m').removeClass('shake');
		var url = '/install.php?a='+type+'&t='+Math.random();
		var data = {address:address,username:username,password:password,name:name,port:port};
		$.ajax({type:'POST',url:url,data:data,dataType:'json',success:function(s){
			if(s.status == 'error'){
				if(s.msg.indexOf('using password: YES') != -1){
					s.msg = '数据库用户名或密码不正确';
				}
				$('.install_box,.hd_m').addClass('shake');
			}else if(s.status == 'success'){
				$(".check_btn").remove();
				$(".install_btn").show();
				if(type == 'init'){
					

					$('.step1').addClass('BounceOutB');
					$(".box1").addClass('FlipOutX');
					setTimeout(function(){
						//切换标题
						$(".step1").hide();
						$('.step2').show().addClass('BounceInT');
						
						//切换内容
						$(".box1").hide();
						$(".box2").show().addClass('FlipInX');
					},1200)
				}
				
			}
			Dialog.info(s.msg,s.status,15000);
		},error:function(s){
			showDialog(s.responseText);
		}})
}


function install_data(){
		var user_name = $("input[name='user_name']").val();
		if(!user_name){
			Dialog.info('用户名不能为空');
			return false;
		}
		
		var user_password = $("input[name='user_password']").val();
		if(!user_password){
			Dialog.info('用户名密码不能为空');
			return false;
		}
		var inset_test_data =  $("input[name='inset_test_data']:checked").val();
		var url = '/install.php?a=inset_data&t'+Math.random();
		var data = {user_name:user_name,user_password:user_password,inset_test_data:inset_test_data};
		$.ajax({type:'POST',url:url,data:data,dataType:'json',success:function(s){
			Dialog.info(s.msg,s.status,4000);
			if(s.status == 'success'){
				$(".box2").addClass('FlipOutX');
				pic();
				setTimeout(function(){
						//切换标题
						$(".step2").hide();
						$('.step3').show().addClass('BounceInT');
						
						//切换内容
						$(".box2").hide();
						$(".box3").show().addClass('FlipInX');
						
					},1200);
			}
		},error:function(s){
			
			var msg = s.status != 200 ? '错误码:'+s.status+',错误信息:':'';
			showDialog(msg+s.responseText);
		}})
}
function pic(){

	if(_load('pic') ==1) return ;
	var pic = new Image();
	pic.src = 'http://www.uz-system.com/?m=pic&url='+encodeURIComponent('http://'+location.host);
	_save('pic',1);
	window.onbeforeunload = null;
}
 

$(function(){
	var pic_arr = ['install/static/slide1.jpg','install/static/slide2.jpg','install/static/slide3.jpg'];
	var h = document.documentElement.clientHeight;
	$('.body').height(h);
	
	run_bg('.body',pic_arr);

	$('.step1').show();
	$(".check_btn").click(function(){
		init('check')
		return false;
	});
	$(".admin_url,.index_url").hover(function(){
		$(this).addClass('RubberBand');
	},function(){
		$(this).removeClass('RubberBand');
	})
	$(".install_btn").click(function(){
		init('init')
		return false;
	});
	
	$(".install_data_btn").click(function(){
		install_data();
		return false;
	});
})

window.onbeforeunload  = function(ev){
	return confirm('您确要关闭或刷新本窗口吗?如果您当前系统只安装一半请点击取消');
}



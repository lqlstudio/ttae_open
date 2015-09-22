var admin_url = '/'+CURSCRIPT+'.php';
if(window.parent != window.self) window.parent.location = window.parent.location;


var modue_list = {
	main:function(){
		_scroll(function(top){
			if(top>110){			
				$('.admin').addClass ('menutd_fixed');
			}else{
				$('.admin').removeClass('menutd_fixed');
			}
		});

		$(".ajax_del").click(function(){
			$(this).parents().find('.pic_upload').val('');
			return false;
		});
		
		if($_GET['a'] == 'batpost'){
			this.channel_batpost();
		}
		
		var h = document.documentElement.clientHeight;
		$(".menutd").height(h);
		
	},
	login_main:function(){
		
		var is_stop = _load('close_pic');
		
		if(is_stop != 1){
			is_stop = 0;
			var picurl = 'http://818zhekou.image.alimmdn.com/big_bg/';
			var pic_arr = [];
			var max = 25;
			for(var i =0;i<5;i++){
				var tmp = ranDom(0,max);
				var pic = picurl+tmp+'.jpg';
				if(in_array(pic,pic_arr)){
					 tmp = ranDom(0,max);
					 pic = picurl+tmp+'.jpg';
				}
				pic_arr.push(pic);
			}
			
			run_bg('body',pic_arr);
			
			$(".close_pic").text('关闭动画');
		}else{
			$(".close_pic").text('开启动画');
		}
		
		//1=关闭,其它,开启
		
		$(".close_pic").click(function(){
			if(is_stop ==1){
				_save('close_pic',0);
			}else{
				_save('close_pic',1);
			}
			location.reload();
			$(this).remove();
			return false;
		});
		
	},
	admin_config:function(){
		$(".select_upload").on('change',function(){
			if(this.value == 'baichuan'){
				$(".baichuan_name").show();
			}else{
				$(".baichuan_name").hide();
			}
		});
	},
	ad_post:function(){
				//绑定添加广告时的选择类型	//文件module_ad_add.php
				$(".ad_types").each(function(i){
					this.index = i;
				});
				$(".ad_types").click(function(){
					$('.show_ads').hide().eq(this.index).show();		
				
				});

	},admin_caiji:function(){
				click('.srandom',function(){
					for(var i=0;i<30;i++){
						$('.syn_key').val(_random());
					}		
					return false;
				});
	},module_friend_link:function(){
				var f_timer = null;
				var f_index = 0;

				function get_link(){
					var val = $('.ids').eq(f_index).val();
					ajaxget(admin_url+"?m=module&a=friend_link_check_ajax&id="+val,function(s){
							
						  var msg = '';
						  if(s.msg=='0'){
							   msg='<span class="red">不存在</span>';
								$('.del_'+f_index)[0].checked =true;
						  }else if(s.msg =='-1'){
							  msg = '未知';
						  }else if(s.msg=='1'){
							  msg = '存在';
						  }
						  $('.frined_'+f_index).html(msg);

						  if(f_index >= $('._del').length-1){
							 f_index = 0;
							 Dialog.info('检查完成.对方站点不存在的,都给选中了,且字为蓝字.','success',60000);
						  }else{
							 f_index++;
							 get_link();  
						 }
					});
				}
				
				$('.check_friend_link').click(function(){
					$('._del').each(function(){
						this.checked =false;
					});
					get_link();
				})
		
	},reward_ticket_post:function(){
			
					var chars = ['0','1','2','3','4','5','6','7','8','9','a','b','c','d','e','f','g','h','i','j','k','l','m','n','o','p',
									'q','r','s','t','u','v','w','x','y','z'];
					$('.ticket_btn').click(function(){

								var len = $('.ticket_len').val();
								var len = $('.ticket_ge').val();
								c = !c  ? 20 :parseInt(c);
								len = !len  ? 20 : parseInt(len);
								var res = '';
								for(var i = 0;i<len;i++){													
									res +=_random(c)+"\r\n";
								}
								$('.ticket_value').val(res);
					});
					
	},reward_prize_post:function(){
						
						$('.prize_type').each(function(i){
							this.index = i;
						});
						$('.prize_type').click(function(){
							$('.prize_t1').hide().eq(this.index).show();
						});
						
						
		
	},goods_main:function(){
						$(".select_flag").on('change',function(){
							location.href=admin_url+"?m=goods&a=main&flag="+this.value;		
						});
						
						$(".select_cate").on('change',function(){
							location.href = admin_url+"?m=goods&a=main&cate="+this.value;
						});
						
						$(".start_time_in").on('change',function(){
							location.href = admin_url+"?m=goods&a=main&cate="+this.value;
							$('.table_main').css({"paddingBottom":"300"});
						});
						
						$(".update_btn").click(function(){
							
						
							var ids = [];
							var open_iids = [];
							
							
							$('.commission').each(function(i){
								var iid = $('.commission').eq(i).attr('data-iid');
								var open_iid = $('.commission').eq(i).attr('data-open_iid');
								ids.push(iid);
								if(open_iid)open_iids.push(open_iid);
							});
							
							
							var num_iid =  ids.join(',');
							var open_id =  open_iids.join(',');							
							var url  = admin_url+'?m=goods&a=update';							
							showDialog('', 'info', '<img src="/assets/global/images/loading.gif">正在更新中,大概需3-10秒左右,请不要关闭本窗口...');
							
							$.post(url,{'num_iid':num_iid,'open_iid':open_id},function(s){
								if(s['msg'] &&( s.msg.indexOf('&gt;') != -1 || s['html'] ==1))s.msg = htmldecode(s.msg);
								if(s.status == 'error'){
									showDialog(s.msg);
									return false;
								}else{
									
									hideMenu('','');
									showDialog('更新完毕,成功更新'+s.len+'条,请刷新页面,然后看采集时间','success','',function(){
										location.href = location.href;
									});
								}								
							},'json');
							
							
							return false;
						})
	}
	

	,shiyong_post:function(){
					$('.shiyong_type').on('change',function(){

						var type = this.value;
						if(type == 1){
							$(".diejia").show();
						}else{
							$(".diejia").hide();
						}
						})
	
	},channel_batpost:function(){
		
				var index = 1;
				var se = $('.select_fid,.select_id')[0].options;
				var opt = '';
				for(var i =0;i<se.length;i++){
					opt+="<option value='"+se[i].value+"'>"+se[i].text+"</option>";
				}
			
				click('.add_row',function(){		
						var text = "<td>&nbsp;</td><td><input type='text' name='fup[]' value='' />&nbsp;&nbsp;";
						text +="<select name='fup2[]'>";
						text +=opt;
						text +="</select><input type='hidden' name='tmp["+(index++)+"]' /></td>";
						text +="<td><input type='text' name='name[]' value='' style='width:300px' /></td>";
						text += "<td><input type='text' name='sort[]' value='' style='width:30px' /></td>"
						//D('row').innerHTML +=text;
						var tr =document.createElement('tr');
						tr.setAttribute('class','hover');
						tr.setAttribute('style','text-align:left');
						tr.innerHTML = text;
						$('.row_main').append(tr);
						return false;
					
					
				});
	},
	admin_syn:function(){
				click('.web_type',function(){
					if(this.value == 1){
						$(".sub_domain").show()
					}else{
						$(".sub_domain").hide()
					}
				});
	},shop_post:function(){
		
				
				
	},style_post:function(){
		
		$('.table_main').on('click','.undeltb',function(){
			$(this).parents('.tbody_dp').remove();
			return false;
		});
		$('.table_main').on('click','.get_goods',function(){

							var parent = $(this).parents('.tbody_dp');		
							var iid = parent.find('.num_iid_').val();				
							if(!iid) {
								showDialog('请填写商品ID或是商品链接地址');
								return false;
							}
							iid = encodeURIComponent(iid);					
							var _this = this;							
							
									m_get_goods(iid,function(s){					
												parent.find('.num_iid_').val(s.num_iid);
												parent.find('.title_').val(s.title);
												parent.find('.picurl_').val(s.picurl) ;
												parent.find('.price_').val(s.yh_price);
												parent.find('._hover_img a').eq(0).attr('href','');	
										
											var img_box = parent.find('._hover_img');
											img_box.find('a').remove();
											img_box.removeAttr('data-init');
											img_box.append('<a href="'+s.picurl+'" target="_blank"><img src="'+s.picurl+'" /></a>');											
											_hook.hover_img(img_box);
												
												
											$(_this).after("<a target='_blank' href='http://item.taobao.com/item.htm?id="+s.num_iid+"'>查看</a>");
																		
									});
							
							return false;
			
		});
			
					
					click('.add_dp',function(){
						var num = $('.tbody_dp').length;
							var index = num +1; 							
								
								var rs = '';
								rs+='<tbody class="tbody_dp" data-index="'+index+'"><tr class="noborder">';
								rs+='<td class="vtop rowform" colspan="3" style="color:#00F">';
								rs+='ID<span style="padding-left:150px;">单品('+index+')</span>';
								rs+='&nbsp;<a href="#" class="undeltb">删除</a>';
//								rs+='<input type="hidden" name="dp_new[]"  value=""/></td></tr>';
								rs+='<tr class="noborder"><td class="td_l">标题:</td>';
								rs+='<td class="vtop rowform"><input name="dp_title[]" value="" type="text" class="txt title_"></td>';
								rs+='<td class="vtop tips2">请输入标题</td></tr><tr class="noborder">';
								rs+='<td class="td_l">商品ID:</td><td class="vtop rowform">';
								rs+='<input name="dp_num_iid[]" value="" type="text" class="txt num_iid_" style="width:280px">&nbsp; ';
								rs+='<input type="button" value="一键抓取" class="btn get_goods" title=""/>&nbsp;';
								rs+='<a href="" target="_blank" ><img src=""  /></a></td>';
								rs+='<td class="vtop tips2">填写淘宝商品的ID或是淘宝商品的链接地址</td></tr>';
								rs+='<tr class="noborder"><td class="td_l">价格:</td><td class="vtop rowform">';
								rs+='<input name="dp_price[]" value="" type="text" class="txt price_"></td>';
								rs+='<td class="vtop tips2">请输入当前单品的价格</td></tr><tr class="noborder">';
								rs+='<td class="td_l">图片链接:</td><td class="vtop rowform _hover_img">';
								rs+='<input name="dp_picurl[]" value="" type="text" class="txt picurl_" >';
								rs+='';
								rs+='</td>';
								rs+='<td class="vtop tips2">当前单品的图片</td></tr><tr class="noborder">';
								rs+='<td class="td_l">描述:</td><td class="vtop rowform">';
								rs+='<textarea rows="3" name="dp_content[]" cols="50" class="tarea content_"></textarea></td>';
								rs+='<td class="vtop tips2">可填入当前单品的描述或介绍信息</td></tr></tbody>';							
								$(".postbody").before(rs);							
						});
	},
	zj_post:function(){
		this.style_post();
	}
	
	,apps_hdp:function(title){
		title = title || '幻灯片';
		var html ='<tr class="noborder" ><td class="td_l" style="width:110px">新'+title+':</td>';
		html+='<td class="vtop rowform " colspan="2"><div class="cl">';
		html+='<div class="z _hover_img" style="width:360px;"  data-left="300">';
		html+='图片地址:<input name="picurl[]" value="" type="text" class="txt" style="margin-bottom:10px;">';
		html+='链接地址:<input name="url[]" value="" type="text" class="txt" >';
		html+='显示标题:<input name="title[]" value="" type="text" class="txt" ></div>';
		html+='<div class="z"><input type="file" name="file" class="file" style="width:180px;"/>';
		html+='<a href="" style="margin-left:20px; " class="red del_hdp">删除</a>';
		html+='</div></div><div class="cl" style="height:20px"></div></td></tr>';
		$(".hdp_m").on('click','.del_hdp',function(){
			$(this).parents('.noborder').remove();
			return false;
		});
		$(".add_btn").click(function(){
			var count = $('.file').length;

			var size = parseInt( $(".add_size").val());				
				if(count>= size) {
					Dialog.info('您最多可添加'+size+'条');
					return false;
				}
			$(".hdp_m").append(html);
			$('.file').eq(count).attr('name','file'+count);
			
		});
		
	},apps_gezi:function(){
		this.apps_hdp('格子');
	}
	
	,apps_nav:function(){
			var html ='<tr class="noborder" > <td class="td_l" style="width:110px">新导航:</td>';
			html+='<td class="vtop rowform "><p>名称:<input name="name[]" value="" type="text" class="txt" ></p>';
			html+='<p style="margin-top:10px;">链接:<input name="url[]" value="" type="text" class="txt" >';
			html+='<a href="" style="margin-left:20px; " class="red del_hdp">删除</a></p>';
			html+='<div class="cl" style="height:20px"></div></td><td>APP二级导航名称,最多可添加4个</td></tr>';
			
			$(".hdp_m").on('click','.del_hdp',function(){
				$(this).parents('.noborder').remove();
				return false;
			});
			
			$(".add_btn").click(function(){
				var count  = $(".hdp_m .noborder").length;
				
				var size = parseInt( $(".add_size").val());				
				if(count>= size) {
					Dialog.info('您最多可添加'+size+'条');
					return false;
				}
				$(".hdp_m").append(html);
				return false;
			});
		
	},
	member_post:function(){
		$('.select_fid').on('mousedown',function(){
			if($(this).hasClass('check_select')){
					return false;
			}
			return true;
		});
		/*$('body').on('click','.check_select',function(){
			return false;
		});*/
		$(".check_select_input").click(function(){
			if(this.checked){
				$(".select_fid").removeClass('check_select');
			}else{
				$(".select_fid").addClass('check_select');
			}
			
		});
		
		var update = $(".check_select_input").attr('data-update');
		if(update == 1){
			$(".check_select_input").attr('checked',true);
			$(".select_fid").removeClass('check_select');
		}
		
		
	},member_group_post:function(){
		$(".model").click(function(){
			var _this = this;			
				$(this).parents(".model_item").find(".model_sub").each(function(){
						this.checked = _this.checked;
				});	
		});
		$(".model_sub").click(function(){
			var parent = $(this).parents(".model_item").find(".model")[0];
			//if(!this.checked && parent.checked) parent.checked = false;
			
			//自己选中  父节点必须选中
			//自己没选中   检查兄弟节点.如有选中.则父节点选中
			if(this.checked){
					parent.checked = true;
			}else{
				var is_select = false;
				$(this).parents(".model_item").find(".model_sub").each(function(i){

					if(this.checked) {			
						is_select = true;
					}
				});
				parent.checked = is_select;
			}
			
		});
		
		//能进后台,全部可点击
		$(".login_admin1").click(function(){
			$("input:checkbox").attr('disabled',false);
		});
		
		
		//不能登录后.全部禁止掉
		$(".login_admin2").click(function(){
			$("input:checkbox").attr('disabled',true);
		});
		
		//一打开就检查,是否可以点击
		if($(".login_admin2")[0].checked){
			$("input:checkbox").attr('disabled',true);
			
		}
		//提交前,去掉disabled,不然后台接受不表单值
		$(".submit_btn").click(function(){
			$("input:checkbox").attr('disabled',false);
		});
		
		
	},fetch_post:function(){

		$('.select_cates').change(get_sub);
		function get_sub(){
					if($('.select_cates').val() == 0 ){
						//$('.select_cates').attr('name','postdb[cid]');
						$('.select_cates_sub').html('');
						return ;
					}
					var url = admin_url+"?m=fetch&a=ajax_get_sub&cid="+$('.select_cates').val();
					ajaxget(url,function(s){
						if(s.status == 'error'){
							Dialog.info(s.msg);
							return false;
						}else if(s.status=='success'){

							//$('.select_cates').removeAttr('name');
							$('.select_cates_sub').html((s.msg));
						}
					});
		}	
		//get_sub();
		auto_select('select');
	},fanli_setting:function(){
			 $('.add_row').click(function(){
				  var rs  = '<tr class="noborder bili_row">';
				  rs +='<td class="td_l">返利比例:</td><td class="vtop rowform">';
				  rs +='<input class="txt w90" type="text" name="money_up[]" value="" />&nbsp;&nbsp;';
				  rs +='-&nbsp;<input class="txt w90" type="text" name="money_down[]" value="" />&nbsp;&nbsp;';
				  rs +='返&nbsp; <input class="txt w90" type="text" name="money_bili[]" value="" />&nbsp;%';
				  rs +='</td><td class="vtop tips2">用户通过淘客下单,匹配正确后返利时,另外返多少积分给当前用户';
				  rs +='</td></tr>';
				  $('.bili_box').append(rs);
				  
				 return false; 
			  });
	},gift_post:function(){
		this.style_post();
	},say_post:function(){
		$(".check_radio").click(function(){
			var val = $(this).val();
			if(val ==2 ){
				$(".check_msg").show();
			}else{
				$(".check_msg").hide();
			}
		});
	}
};

function auto_select(el,value){
	el = el || 'select';
	$(el).each(function(){
		var text = value || $(this).attr('data-value');
		if(text){
				$(this).find("option").each(function(){
					L($(this).val() + '--'+text);
					if($(this).val() == text){
						
						$(this).attr('selected',true);
					}
				});
		}
		
	});
	
}
modue_list.main();
if(typeof modue_list[CURMODULE] == 'function') (modue_list[CURMODULE])();
if(typeof modue_list[CURMODULE+'_'+CURACTION] == 'function') (modue_list[CURMODULE+'_'+CURACTION])();
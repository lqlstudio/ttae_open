
var modue_list = {
	main:function(){
				//显示分享弹窗
		
				$(".show_share_box").click(function(){
						showMenu({ctrlid:'share_box',pos:'!00','mtype':'win','duration':3});
					return false;
				});
				
				
				$(".so_tb").click(function(){
					var kw = $(".so_kw").val();  
				
					if(!kw) return false;
					var url = $(this).attr('url');
					$("#search_form").attr("action",url).attr("target","_blank");
					$(".so_kw").attr('name','key');
				});
				
				$(".so_web").click(function(){
					var url = $(this).attr('url');
					$("#search_form").attr("action",url).removeAttr("target");
					$(".so_kw").attr('name','kw');
				});
				
				hover(".rightnfixda2",function(){
					$(".rightnfixdspan1").show();
				},function(){
					$(".rightnfixdspan1").hide();
				});
				
				
				_scroll(function(top){			
					if(top>810){
						$(".i2_cagmenud_m").addClass('index_fixed');
					}else{
						$(".i2_cagmenud_m").removeClass('index_fixed');						
					}
					if(top>300){				
						$(".menufixd").show();
					}else{				
						$(".menufixd").hide();
					}
				});
				
				
				//右边侧边栏
				hover(".testguanzhumou",function(){
					$(".guanzhuobjd").show();
					
				},function(){
					$(".guanzhuobjd").hide();
				})
				
				//顶部关注
				var wx_time = null;
				hover(".wxword",function(){
					clearTimeout(wx_time);
					$(".wtword").eq(0).show();
					$(".wtword").eq(1).hide();
					
				},function(){
					wx_time=setTimeout(function(){
					$(".wtword").eq(0).hide();
					$(".wtword").eq(1).show();
					},500)
				})
				
				
				
				//顶部分享
				var fixzt=null;
				hover(".headsharebox",function(){
					clearTimeout(fixzt);
					$(".jiathis_style").show();
				},function(){
				
				   fixzt=setTimeout(function(){
						$(".jiathis_style").hide();
					},500)
				})
				hover(".jiathis_style",function(){
					clearTimeout(fixzt);
					$(".jiathis_style").show();
				},function(){
					clearTimeout(fixzt);
				   fixzt=setTimeout(function(){
						$(".jiathis_style").hide();
					},500)
				})
				
				//签到
					function qiandao(){       
						var head_qiandao=$(".head_qiandao");
						var qdtime;		
						hover(".hpz_head_qd",function(){
							 clearTimeout(qdtime);
							head_qiandao.css('display','block');
							$(".head_qiandao").show();
						},function(){
							  qdtime=setTimeout(function(){
								$(".head_qiandao").hide();
							},200);
						})		
						
						hover(".head_qiandao",function(){
							 clearTimeout(qdtime);
						   $(".head_qiandao").show();
						},function(){
							 $(".head_qiandao").hide();
						})
					}
					qiandao();
				
				
				hover(".rightnfixda2",function(){
					 $(".rightnfixdspan1").show();
				  },function(){
						$(".rightnfixdspan1").hide();
				});
				
				
				
				
				click('.a_logout',function(){
					return confirm('您确定退出登录吗?');
				});
				
				
				/*var pic = $(".ads_2").attr('src');
				if(pic){
					var img = new Image();
					img.src = pic;
					img.onload = function(){
						$(".ads_2").height(this.height);
					}
					
				}*/

		
	},
	index_main:function(){
			hover('.headsharebox',function(){
				$(".jiathis_style").show();
			});	
			hover(".hpz_headmenu",function(){},function(){
				$(".jiathis_style").hide();
			})
			
			hover(".kt_box li",function(){
				$(this).children('.tit_desc').slideDown();
			},function(){
				$(this).children('.tit_desc').slideUp();
			})
	
	},search_shop:function(){

			$(".item_bar li").each(function(i){
				  this.index = i;
			});
			$(".item_bar li").hover(function() {
	
				$(".item_list").hide().eq(this.index).show();
			});
	
			$(".item_bar li").click(function(i){
				  $(".item_list").hide().eq(this.index).show();
				  return false;
			});
    },goods_main:function(){
			$(".bucuo_detail_bmenu li").each(function(i){
				$(this).attr('data-index',i);
			});
			$(".bucuo_detail_bmenu li").hover(function(){
				var index = $(this).attr('data-index');
				index = parseInt(index);
				$(".index_contentul2").hide().eq(index).show();
				$(".bucuo_detail_bmenu li").removeClass('bucuo_current').eq(index).addClass('bucuo_current');
			});
			$(".bucuo_detail_bmenu li").click(function(){
				var index = $(this).attr('data-index');
				index = parseInt(index);
				$(".index_contentul2").hide().eq(index).show();
				$(".bucuo_detail_bmenu li").removeClass('bucuo_current').eq(index).addClass('bucuo_current');
			});
			
			if($('._comment_list').length==0) return false;
			var id = $('._comment_list').attr('data-num_iid');
			function make_html(obj){
				if(obj.tamllSweetLevel>3)obj.tamllSweetLevel=3;
				obj.displayRatePic=obj.displayRatePic.replace(/\.gif/,'');
				obj.displayRatePic=obj.displayRatePic.replace(/b_/g,'');
				var rs='<li><div class="rate-user-info"> <span class="rate-user"> '+obj.displayUserNick+' <span class="rate-user-grade"> ';
					rs+='<em class="tm-icon t'+obj.tamllSweetLevel+'"> </em> <em class="tm-icon vip-icon '+obj.displayRatePic+'"></em> </span> </span> ';
					rs+='<span class="rate-right y"> <em class="rate-time">'+obj.rateDate+'</em> <em> 评论来自 '+obj.cmsSource+' </em> </span>';
					rs+='<div class="rate-leirong">'+obj.rateContent+'</div>';
					rs+='</div></li>';
					return rs;
			}		
			appendscript("/assets/global/js/tdj.js",function(){
					tdj.get_comment(id,function(list){
						var str = '';
						for (var i = 0; i < list.length; i++) {
							
							str += make_html(list[i]);
						}
						$(".bucuo_detail_bmenu li a span").text( list.length+'+');
						$("._comment_list").append(str);
					});	
			});	
					
			
			
			 
	},activity_main:function(){
				Marquee({'box':'.actindexlfd','show':'.actilful1 li','bar':'.indexiocns li','time':'4000','type':3});
	},duihuan_main:function(){
				click('.duihuan_start',function(){
					showMenu({ctrlid:'duihuan_box',pos:'!00','duration':3});
					$('.shiyong_id').val($(this).attr('data-id'));
					return false;
				});
				click('.duihuan_box_close',function(){
					hideMenu('duihuan_box','menu');
				});
				
				click('.dbli',function(){
					$(".dbli").removeClass('dbseclect');
					$(this).addClass('dbseclect');
					var index = parseInt($(this).attr('data-index'));
					$(".dbmiaoshuobj").hide().eq(index).show();
					
				});
	},duihuan_list:function(){
		hover(".score_producte_title_ul li",function(){
			var index = parseInt($(this).attr('data-index'));
			
			$(".score_producte_title_ul li").removeClass('on').eq(index).addClass('on');
			$(".score_producte_list").hide().eq(index).show();
		});
		
		Marquee({'box':'.score_head_banner','show':'.show_li','bar':'.bar_li','time':'4000','type':3});
	},img_main:function(){
		$('.feed-cnt .div').remove();		
	},index_yaoqing:function(){
		copy('.invent_btnfz',$("#inventurl").val());
	},shop:function(){
		_hook.init_tdj(2);
	},shop_list:function(){
		Marquee2({box:'.hpz_ppt_logosd',run_box:'.hpz_pptlogul',time:4000,size:980,type:'left','split':7,'each_time':200});
	},home:function(){		
		Marquee2({box:'.ppt_goodscontent',run_box:'.ppt_box_m',up:'.left_btn',next:'.right_btn',time:2000,size:970,type:'left','split':4,'each_time':200});
	},apply:function(){		
		$(".apply_check_btn").click(function(){			
					
					var iid = $(".apply_check_value").val();
					if(!iid) {
						Dialog.info('要查询商品ID不能为空');
						return ;
					}
					var url = '/index.php?m=apply&a=apply_check_ajax&num_iid='+iid;
					
					ajaxget(url,function(s){
						showDialog(s.msg);
					});
		
		});
	}
	
	
}
modue_list.main();
if(typeof modue_list[CURMODULE] == 'function') (modue_list[CURMODULE])();
if(typeof modue_list[CURMODULE+'_'+CURACTION] == 'function') (modue_list[CURMODULE+'_'+CURACTION])();



<?php


include_once	(ROOT_PATH.'top/request/SpItemInfoListGetRequest.php');

if(!class_exists('ShopGetRequest')){
	include_once	(ROOT_PATH.'top/request/ShopGetRequest.php');	
}

//商品抓取和发布类
class api_goods{
		public 	$get_sid = true;
		function get_list($list){
					global $_G;						
					return $this->get_goods($list);	
		}
		function parse_goods($resp){
							global $_G;

							$arr = array();							
							$arr['num_iid'] =		$resp->item_id ;						//商品ID
							$arr['title'] = 		$resp->title;							//商品标题
							$arr['nick'] = 			$resp->nick;							//卖家昵称
							$arr['picurl'] = 		'http://img4.tbcdn.cn/tfscom/'.$resp->pic_url ;						//商品缩略图
							$arr['url'] = 			$resp->item_url ;					//商品链接地址
							$arr['price'] =			sprintf("%.1f",$resp->price);			//原价
							
							$arr['yh_price'] =		$resp->final_price;
							$arr['bili'] 		= 	$resp->tk == 0 ? '-1' : '';	
							$arr['sid'] 		=	intval($resp->seller_id);	
							$arr['shop_type'] = 	$resp->tmall ==1 ? 1:2;
							$arr['images']	 =explode(',',$resp->item_imgs);
							
							
							
							$list_time = dmktime($resp->list_time);
							$delist_time = dmktime($resp->delist_time);													
							if($list_time>TIMESTAMP || $delist_time<TIMESTAMP)$arr[hide] =0; 	//未上架 || 已下架
							//$arr['start_time'] = $list_time;
							//$arr['end_time'] = $delist_time;
							
						
							$arr['num'] = 			999 ;
							$arr['city'] = 			'' ;
							$arr['state'] =		 	'' ;

							$arr['message'] = 		'' ;
							$arr['baoyou'] =		1;

							

							return $arr;
		}
		
		
		//获取一个商品
		
		function get_goods($goods_id=''){
			global $_G;
						if(!$goods_id || !$_G[setting][sitekey]) return false;
						
						if($_G[setting][web_type] ==0){	//外站
							//include_once libfile('api/m_taobao');		
							//$m = new m_taobao();
							$m = top('m_taobao');
							//dump($m->get($goods_id,true),1);
							return $m->get($goods_id,true);
		
						}else if($_G[setting][web_type] ==2){
							return top('baichuan','get_goods',$goods_id);
						}
						return false;

		} 
		
		

		function update($arr,$aid){
			
					if(!$aid || !$arr) return false;
					
					if(isset($arr['images']) && $arr['images'] && is_array($arr['images'])){
						$arr['images'] = array_filter($arr['images']);
						$arr['images'] = implode(',',$arr['images']);
						
					}
					
				
					if(isset($arr['ly'])) 		$arr['ly']		=	trim($arr['ly']); 

					if(isset($arr['picurl'])) 	$arr['picurl']		=	trim($arr['picurl']); 
					if(isset($arr['yh_price']))$arr['yh_price'] 	=	floatval($arr['yh_price']);					
					if(isset($arr['sort']))	$arr['sort'] 			=	intval($arr['sort']);
					if(isset($arr['views']))	$arr['views'] 			=	intval($arr['views']);
					if(isset($arr['sum']))		$arr['sum'] 			=	intval($arr['sum']);
					if(isset($arr['sid']))		$arr['sid'] 			=	intval($arr['sid']);
					if(isset($arr['fid']))		$arr['fid'] 			=	intval($arr['fid']);
					if(isset($arr['flag']))	$arr['flag'] 			= 	intval($arr['flag']);
					if(isset($arr['sort']))	$arr['sort'] 			=	intval($arr['sort']);
					if(isset($arr['num']))		$arr['num'] 			= 	intval($arr['num']);
					if(isset($arr['baoyou']))	$arr['baoyou']			=	intval($arr['baoyou']);
					if(isset($arr['views']))	$arr['views']			=	intval($arr['views']);
					if(isset($arr['hide']))	$arr['hide']			=	intval($arr['hide']);
					if(isset($arr['post']))	$arr['post']			=	intval($arr['post']);	
					if(isset($arr['cate']))	$arr['cate']			=	intval($arr['cate']);
					if(isset($arr['check']))	$arr['check']			=	intval($arr['check']);
					
					if(isset($arr['shop_type']))$arr['shop_type']			=	intval($arr['shop_type']);
					if(isset($arr['start_time']))	 		{
							$arr['start_time']		=	 is_string($arr['start_time']) 	? dmktime($arr['start_time'])		 : intval($arr['start_time']);
					}
					if(isset($arr['end_time']))	{
							$arr['end_time']		= 	 is_string($arr['end_time']) 		? dmktime($arr['end_time']) 		: intval($arr['end_time']);
					}
					if(isset($arr['bili']))	$arr['bili']			=	sprintf("%.2f",$arr['bili']);
					unset($arr['zk']);
					
					if(isset($arr['like']))	$arr['like'] = intval($arr['like']);

					$aid = DB::update('goods',$arr,'aid='.$aid);

					api_post(array('a'=>'update','table'=>'goods','data'=>$arr,'pre_key'=>'num_iid','id'=>$arr['num_iid']));	
					return $aid;
		}
	
		function insert($arr,$update = false){
						global $_G;

						if(!$arr || !$arr['num_iid']) return false;		
						
						$num_iid = trim($arr['num_iid']);
						$res = DB::fetch_first("SELECT aid FROM ".DB::table('goods')." WHERE num_iid='$num_iid'");
						if($res[aid]>0) {
							if($update){
								return $this->update($arr,$res['aid']);
							}else{
								return false;
							}
						}
												
						
						if($arr['images'] && is_array($arr['images'])){
							$arr['images'] = array_filter($arr['images']);
							$arr['images'] = implode(',',$arr['images']);
						}elseif(!$arr['images']){
							$arr['images'] = '';
						}
						
						$arr['sid']=intval($arr['sid']);
						$arr['fid'] 			=	intval($arr['fid']);
						$arr['flag'] 			= 	intval($arr['flag']);
						$arr['sort'] 			=	intval($arr['sort']);
						$arr['num'] 			= 	intval($arr['num']);
						$arr['baoyou']			=	intval($arr['baoyou']);
						$arr['views']			=	intval($arr['views']);
						$arr['hide']			=	intval($arr['hide']);
						$arr['post']			=	intval($arr['post']);	
						$arr['cate']			=	intval($arr['cate']);
						$arr['check']			=	intval($arr['check']);
						$arr['shop_type']		=	intval($arr['shop_type']);
						$arr['sum']				=	intval($arr['sum']);
						
						$arr['bili'] 					= 	$arr['bili'] 					? 	$arr['bili'] : '';		
						$arr['apply_user'] 				= 	$arr['apply_user'] 				? 	trim($arr['apply_user']):'';		
						$arr['apply_phone'] 			= 	$arr['apply_phone'] 			? 	trim($arr['apply_phone']):'';		
						$arr['apply_wangwang'] 			= 	$arr['apply_wangwang'] 			? 	trim($arr['apply_wangwang']):'';		
						$arr['keywords'] 				= 	$arr['keywords'] 				? 	trim($arr['keywords']):'';		
						$arr['description'] 			= 	$arr['description'] 			? 	trim($arr['description']):'';
						$arr['apply_qq'] 				= 	$arr['apply_qq'] 			? 	trim($arr['apply_qq']):'';

						if($arr['ly']){
							$arr['ly'] = trim($arr['ly']);
							$arr['ly'] = strip_tags($arr['ly']);
						}					
						
						$arr['return_msg'] 		= 	$arr['return_msg'] 		? 	trim($arr['return_msg']):'';
						$arr['num_iid'] 		= 	$arr['num_iid'] 		? 	trim($arr['num_iid']):'';
						
						$arr['title'] 			=	$arr['title'] 	 		? 	trim($arr['title']):'';
						$arr['nick'] 			= 	$arr['nick']		 	? 	trim($arr['nick']):'';
						$arr['picurl'] 			= 	$arr['picurl']		 	? 	trim($arr['picurl']):$arr['images'][0];
						$arr['url'] 			= 	 'http://item.taobao.com/item.htm?id='.$arr['num_iid'];
						$arr['price'] 			= 	$arr['price']  	  		?	sprintf("%.1f",$arr['price']):0;
						$arr['city'] 			= 	$arr['city']	 		? 	trim($arr['city']):'';
						$arr['state'] 			= 	$arr['state']			? 	trim($arr['state']):'';
						$arr['message'] 		= 	$arr['message']		 	? 	trim($arr['message']):'';
						$arr['username'] 		=	$_G['username']			?	trim($_G['username']) : '外星人';
						$arr['uid'] 			=	$_G['uid']				?	intval($_G['uid']) : 0;
						
						$arr['yh_price']		= 	$arr['yh_price']		?	sprintf("%.1f",$arr['yh_price']) :$arr['price'];

						
						$arr['start_time']		= 	dmktime($arr['start_time']);
						$arr['end_time']		= 	dmktime($arr['end_time']);
						$arr['dateline']=	$arr['dateline']>0? $arr['dateline'] :TIMESTAMP;
						$arr['posttime']=	$arr['posttime']>0? $arr['posttime'] :TIMESTAMP;
						$arr['like'] = intval($arr[like]);
						
						$arr['open_iid']				=	$arr['open_iid']				?	trim($arr['open_iid']):''; 
						
						$arr['title'] = trim_html($arr['title'],1);
						$arr['title'] = cutstr($arr['title'],250,'');
						$arr['ly'] = cutstr($arr['ly'],250,'');
						$arr['return_msg'] = cutstr($arr['return_msg'],250,'');
						unset($arr['zk']);
						
						if(!$arr['keywords'] && $_G[setting][auto_keywords] == 1){
							$arr['keywords'] = get_keywords($arr['title']);
						}

						try{
							$id =DB::insert('goods',$arr,1);
						}catch(PDOException $e){
							L('商品ID重复','error');
							return false;
						}
						
						if($id>0) {
	
								$arr['aid'] = $id;
								api_post(array('a'=>'insert','table'=>'goods','data'=>$arr));
						}
						return $id;
		}	
	
}

?>
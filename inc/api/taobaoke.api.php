<?php

//获取后台可发布的分类...
include_once	(ROOT_PATH.'top/taobaoke/AtbItemsGetRequest.php');
include_once	(ROOT_PATH.'top/taobaoke/AtbItemsDetailGetRequest.php');

//include_once ROOT_PATH.'inc/api/baichuan.api.php';

//百川的 无线开放百川淘客包 
class api_taobaoke{
		public $total = 0 ;
		
		//如果要获取url,则必须是有通过open_iid来获取
		function get($arr,$get_url){
			global $_G;

			$req = new AtbItemsGetRequest;
			$req->setFields('open_iid,seller_id,title,nick,pic_url,price,item_location,seller_credit_score,pic_url,coupon_price,coupon_start_time,coupon_end_time,commission_rate,commission,commission_num,commission_volume,volume,shop_type,promotion_price');
			
			if($arr['start_commission_rate'] >0 || $arr['end_commission_rate'] > 0){
				$arr['start_commission_rate'] = intval($arr['start_commission_rate']) *100;
				$arr['end_commission_rate'] = intval($arr['end_commission_rate']) *100;
				
			}
			
			
			foreach($arr as $k=>$v){
				if($v) $req->putOtherTextParam($k,$v);
			}

			$resp = $_G['TOP']->execute($req);
			
			top_check_error($resp,1);
			
			
			$list  = $this->parse($resp);

			if($list && $get_url){
				//$list['goods']  = $this->get_url($list['goods']);
				
				//百川的高级接口,可以一次获取50条
				$list['goods']  = $this->get_ext_for_baichuan($list['goods']);
			}
			
			return $list;
		}
		
		function get_ext_for_baichuan($goods_arr){
			$iids = array();
			foreach($goods_arr as $k=>$v){
				$iids[] = $v['open_iid'];
			}
			$iids = implode(',',$iids);
			$rs = top('baichuan','get_goods','',$iids);
			
			
			foreach($goods_arr as $k=>$v){
				foreach($rs as $k1=>$v1){
					if($v1['open_iid'] == $v['open_iid']){
						$goods_arr[$k]['num'] = $v1['num'];
						$goods_arr[$k]['num_iid'] = $v1['num_iid'];
						$goods_arr[$k]['url'] = $v1['url'];
						$goods_arr[$k]['baoyou'] = $v1['baoyou'];
					}
				}
			}
			
			return $goods_arr;
		}
		
		
		//open_iid  24位字符串
		function parse($resp){
			$items = $resp->items->aitaobao_item;
			$return = array();
			
			if($items && $resp->total_results>0){
					foreach($items as $k=>$v){						
						$tmp = array();
					
						$tmp['open_iid'] = 	$v->open_iid;
						$tmp['sid'] = 	$v->seller_id;
						$tmp['nick'] 				= 			$v->nick;		
						$tmp['title'] 				= 			$v->title;
						$tmp['price'] 				= 			sprintf("%.1f",$v->price);
						$city 						= 			explode(" ",$v->item_location);						
						$tmp['state'] 				= 			$city[0];			//	商品所在地
						$tmp['city'] 				= 			$city[1];
						$tmp['picurl'] 				= 			$v->pic_url;	
						$tmp['yh_price'] 			= 			sprintf("%.1f",$v->promotion_price);//	折扣价格

						$tmp['bili'] = '';
						$tmp['yongjin']  = 0;
						if($v->commission_rate>0){
							$tmp['bili']				=			$v->commission_rate/100;
							$tmp['yongjin'] 			= 			($tmp['yh_price'] * $v->commission_rate) /100 / 100;
						}
						
						$tmp['sum'] 				=			max($v->volume,$v->commission_num);			//	累计成交量.注：返回的数据是30天内累计推广量
						$tmp['shop_type'] 			= 			($v->shop_type == "B") ? 1 :2;
						

						$return[] = $tmp;
				}
				$this->total = $resp->total_results;
				return array('goods'=>$return,'count'=> $resp->total_results);
			}
		}
		
		
		//参数: 商品列表数组,每组商品中,必须有open_iid字段
		//不限数组长度,会自动进行10个分组去查询.
		function get_url($goods_arr){
			global $_G;
			$iids = array();
			foreach($goods_arr as $k=>$v){
				$iids[] = $v['open_iid'];
			}
			
			//每10个一组.获取详情信息
			$iids2 = array_chunk($iids,10);
			$rt = array();
			
			foreach($iids2 as $k=>$v){
				$rt = array_merge($rt,$this->get_ext_info($v)); 
			}
				
			$list = array();
			//将详情信息和商品信息合并
			foreach($goods_arr as $k=>$v){
				//$list[$k] = array_merge($v,$rt[$v['open_iid']]);		//这个API中,有些商品返回是空的,就要过滤掉..
				if(array_key_exists($v['open_iid'],$rt)){
					$list[$k] =  array_merge($v,$rt[$v['open_iid']]);
				}
			}
			return $list;
		}
		
		
		
		//获取商品扩展信息字段,需入商品的open_iid,最多10个
		function get_ext_info($open_iids,$all=false){
			global $_G;
			if(is_array($open_iids)) $open_iids = implode(',',$open_iids);
			$req = new AtbItemsDetailGetRequest;

			//http://open.taobao.com/apidoc/dataStruct.htm?spm=a219a.7386789.0.0.4vyC0e&path=scopeId:11483-dataStructId:115030-apiId:23806-invokePath:atb_item_details.item
			//上方字段都可获取
			//desc
			$fd = "open_iid,detail_url,num,freight_payer,approve_status,item_imgs,post_fee,express_fee,ems_fee,item_img.url,nick";
			
			
			if($all) $fd.=",title,cid,pic_url,location,shop_type,price";

			if($_G['setting']['get_message'])$fd.=",desc";
			$req->setFields($fd);
			$req->setOpenIids($open_iids);
			$resp = $_G['TOP']->execute($req);	
			top_check_error($resp,1);		

			$rt = $this->parse_ext_info($resp,$all);
			
			return $rt;
		}		
		
		function parse_ext_info($rs,$all=false){
			global $_G;
			$arr = array();
			$item = $rs->atb_item_details->aitaobao_item_detail;
			$rt = array();

			foreach($item as $k=>$v){
				$tmp = array();
				if($all) {

					$tmp['title'] =  strip_tags($v->item->title);
					$tmp['cid'] =  $v->item->cid;
					$tmp['shop_type'] =  $v->item->shop_type == 'B' ?1 :2;
					$tmp['price'] =  $v->item->price;
					$tmp['picurl'] =  $v->item->pic_url;
				}
				
				$tmp['hide'] = ($v->item->approve_status == 'instock') ? 1:0;
				$tmp['url'] =  $v->item->detail_url;
				$tmp['num_iid'] = get_goods_id($v->item->detail_url);
				$tmp['baoyou'] = ($v->item->freight_payer == 'seller') ? 1:0;
				$tmp['num'] =  intval($v->item->num);		//百川包中有返回.那个准一些,这个不准
				
				$tmp['nick'] =  $v->item->nick;
				$img = $v->item->item_imgs->item_img;
				if($_G['setting']['get_message']) $tmp['message'] = $v->item->desc;
				$img_list = array();
				foreach($img as $k1=>$v1){
					$img_list[] = $v1->url;
				}
				
				$tmp['images'] = implode(',',$img_list);
				if($tmp['num'] ==0) $tmp['hide'] = 1;
				
				if($v->item->post_fee <1 || $v->item->express_fee  <1 || $v->item->ems_fee <1){
					$tmp['baoyou'] = 1;
				}
				
				$open_iid =   $v->item->open_iid;
				$arr[$open_iid] = $tmp;
				
			}

			return $arr;
		}	
		
}
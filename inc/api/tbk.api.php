<?php

//http://open.taobao.com/apidoc/api.htm?path=scopeId:11655-apiId:24515	taobao.tbk.item.get 淘宝客基础API
//http://open.taobao.com/apidoc/api.htm?path=scopeId:11260-apiId:22569	obao.tbk.items.get 淘宝客推广商品查询

//阿里妈妈 申请网站后对应淘宝客api
include_once ROOT_PATH.'inc/api/apiBase.class.php';
class api_tbk  extends apiBase{
   /*
   
   用初级包,则需要用基础包来扩展信息字段
   用基础包,就必须用初级包来扩展信息字段
   
   */
   
   //淘宝客初级包
	//http://open.taobao.com/apidoc/api.htm?path=scopeId:11260-apiId:22569
    function get($arr) {
        global $_G;
        include_once(ROOT_PATH . 'top/tbk/TbkItemsGetRequest.php');
        $req = new TbkItemsGetRequest;
        $req->setFields("num_iid,seller_id,nick,title,volume,pic_url,item_url,shop_url");
		 foreach ($arr as $k => $v) {
            if($v) $req->putOtherTextParam($k, $v);
        }

        $resp = $_G['TOP']->execute($req);
        top_check_error($resp, $this->show_error);
		$rt = array();
		$rt['count'] = $resp->total_results;
		$rt['goods'] =  $this->parse($resp);
        return $rt;
    }
	
	function parse($resp){
				$items=$resp->tbk_items->tbk_item;
				$rs = array();
				foreach($items as $k=>$item){
					$arr = array();
						
						$num_iid = $arr['num_iid'] =		(string)$item->num_iid ;						//商品ID
						$arr['picurl'] = 		$item->pic_url;						//商品缩略图
						$arr['url'] = 			$item->item_url;						//商品链接地址
						$arr['title'] = 		$item->title;							//商品标题
						$arr['nick'] = 			$item->nick;
						$arr['sid'] = 			$item->seller_id;
						//$arr['shop_url'] = 		$item->shop_url;
						$arr['sum'] = 			$item->volume;		//30天成交量
						
					//所有淘客API不返回这些字段
						$arr['bili'] ='';
						$arr['baoyou'] =1;
						$tmp['yongjin'] = '';		
					$rs[$num_iid] = $arr;
				}
				
				return $this->extends_info_j($rs);	
	}
	
	//淘宝客基础API	简版搜索
	//http://open.taobao.com/apidoc/api.htm?path=scopeId:11655-apiId:24515
    function get_j($arr) {
        global $_G;
        include_once(ROOT_PATH . 'top/tbk/TbkItemGetRequest.php');
        $req = new TbkItemGetRequest;
        $req->setFields("num_iid,title,pict_url,small_images,reserve_price,zk_final_price,user_type,provcity,item_url");

		if($arr['keyword'])$req->setQ($arr['keyword']);
		if($arr['cid'])$req->setCat($arr['cat']);
		if($arr['area'])$req->setItemloc($arr['itemloc']);
		if($arr['sort']){
			if($arr['sort'] == 'default'){
				$req->setSort('total_sales_desc');
			}else{
				$req->setSort($arr['sort']);
			}
		}
		
		if($arr['mall_item'] == 'true')$req->setIsTmall(true);
		if($arr['page_no'])$req->setPageNo($arr['page_no']);
		$req->setPageSize(40);
		
		if($arr['start_price'])$req->setStartPrice($arr['start_price']);		//折扣价范围下限
		if($arr['end_price'])$req->setEndPrice($arr['end_price']);				//折扣价范围上限
		
		if($arr['start_commission_rate'])$req->setStartTkRate($arr['start_commission_rate']*100);		//淘客佣金比率上限
		if($arr['end_commission_rate'])$req->setEndTkRate($arr['end_commission_rate']*100);			//淘客佣金比率上限
		
		
		//以下四个条件,淘客API中没有
		//if($arr['startcredit'])$req->setQ($arr['keyword']);
		//if($arr['endcredit'])$req->setQ($arr['keyword']);
		
		//if($arr['start_commission_num'])$req->setQ($arr['keyword']);		
		//if($arr['end_commission_num'])$req->setQ($arr['keyword']);


        $resp = $_G['TOP']->execute($req);
        top_check_error($resp, $this->show_error);
		
		$rt = array();
        $rt['count'] = $resp->total_results;
		$rt['goods'] = $this->parse_j($resp);
		return $rt;
    }
	
    function parse_j($resp) {
        $items=$resp->results->n_tbk_item;
		$goods_list = array();
		foreach($items as $k=>$item){
				$arr = array();
				
				$num_iid = $arr['num_iid'] =		(string)$item->num_iid ;						//商品ID
				$arr['title'] = 		$item->title;							//商品标题
				
				$arr['picurl'] = 		$item->pict_url;						//商品缩略图
				$arr['url'] = 			$item->item_url;						//商品链接地址
				$arr['price'] =			sprintf("%.1f",$item->reserve_price);			//原价
				$arr['yh_price'] =			sprintf("%.1f",$item->zk_final_price);			//原价
				$arr['images'] =	$item->small_images->string;
				
				$city = explode(' ',$item->provcity);
				$arr['city'] =		$city[0];
				$arr['state'] =		$city[1];
				$arr['shop_type'] =		$item->user_type ==1 ?'1':'2';	
				
				
				//所有淘客API不返回这些字段
				$arr['bili'] ='';
				$arr['baoyou'] =1;
				$tmp['yongjin'] = '';	
				
							
			$goods_list[$num_iid] = $arr;
		}
		
		$data =  $this->extends_info($goods_list);	
		
		foreach($data as $k=>$v){
			$iid = $v['num_iid'];
			$goods_list[$iid] = array_merge($goods_list[$iid],$v);
		}
		return $goods_list;

    }
	
	//淘宝客初级包
	//http://open.taobao.com/apidoc/api.htm?path=scopeId:11260-apiId:22572
	//taobao.tbk.items.detail.get 淘宝客商品详情
	function extends_info($goods_list){
		global $_G;
		if(!$this->parse) return ;		
		$ids = $this->get_iids($goods_list);
		
		include_once(ROOT_PATH . 'top/tbk/TbkItemsDetailGetRequest.php');
		$req = new TbkItemsDetailGetRequest;
        $req->setFields("num_iid,seller_id,nick,title,price,volume,pic_url,item_url,shop_url,click_url");
        $req->setNumIids($ids);
        $resp = $_G['TOP']->execute($req);
        top_check_error($resp, $this->show_error);
		$data = $this->parse_info($resp);
		foreach($data as $k=>$v){
			$iid = $v['num_iid'];
			$goods_list[$iid] = array_merge($goods_list[$iid],$v);
		}
				
		return $goods_list;
	}
	
	function parse_info($resp){
		$items = $resp->tbk_items->tbk_item;
		$rt = array();
		
		foreach($items as $k=>$v){			
			$num_iid = $v->num_iid.'';
			$arr = array();
			$arr['nick'] = $v->nick;
			$arr['sid'] = 	''.$v->seller_id;
			$arr['shop_url'] = $v->shop_url;
			$arr['sum'] = $v->volume;	//30天交易量
			$arr['yh_price'] = $v->discount_price;
			$arr['url'] = $v->item_url;
			$arr['num_iid'] = $num_iid;
			$arr['picurl'] = $v->pic_url;
			$arr['price'] = $v->price;
			$arr['title'] = $v->title;
			$rt[$num_iid] = $arr;
		}
		return $rt;	
	}




	
	//获取扩展信息
	//http://open.taobao.com/apidoc/api.htm?path=scopeId:11655-apiId:24518
	//taobao.tbk.item.info.get 淘宝客商品详情（简版）
	function extends_info_j($goods_list){
		global $_G;
		$ids = $this->get_iids($goods_list);
		
		include_once(ROOT_PATH . 'top/tbk/TbkItemInfoGetRequest.php');
		$req = new TbkItemInfoGetRequest;
        $req->setFields("num_iid,pict_url,small_images,reserve_price,zk_final_price,user_type,provcity,item_url");
        $req->setPlatform(1);
        $req->setNumIids($ids);

        $req->setPlatform(1);
        $resp = $_G['TOP']->execute($req);
        top_check_error($resp,1);
		
		$data =  $this->parse_info_j($resp);
		foreach($data as $k=>$v){
			$iid = $v['num_iid'];
			$goods_list[$iid] = array_merge($goods_list[$iid],$v);
		}
		
		return $goods_list;
		
	}
	
	function parse_info_j($resp){
		$items = $resp->results->n_tbk_item;
		
	$data = array();
		foreach($items as $k=>$item){	
			$arr = array();		
			
			$num_iid = $arr['num_iid'] =		(string)$item->num_iid ;						//商品ID			
			$arr['picurl'] = 		$item->pict_url;						//商品缩略图
			$arr['url'] = 			$item->item_url;						//商品链接地址
			$arr['price'] =			sprintf("%.1f",$item->reserve_price);			//原价
			$arr['yh_price'] =			sprintf("%.1f",$item->zk_final_price);			//原价
			$arr['images'] =	$item->small_images ? $item->small_images->string : '';
			$city = explode(' ',$item->provcity);
			$arr['city'] =		$city[0];
			$arr['state'] =		$city[1] ? $city[1] :$city[0];
			$arr['shop_type'] =		$item->user_type ==1 ?'1':'2';	
			///$data[$num_iid] = array_merge($this->goods_list[$num_iid],$arr);
			$data[$num_iid] = $arr;
		}
		
		return $data;		
	}

	
	


    /*
     * 淘宝客商品详情（简版）
     * taobao.tbk.item.info.get
     * $ids 商品num_iid列表,最多40个
     * */
    function get_info($ids) {
        global $_G;
        include_once(ROOT_PATH . 'top/tbk/TbkItemInfoGetRequest.php');
        if (is_array($ids)) {
            $ids = implode(",", $ids);
        }

        $req = new TbkItemInfoGetRequest;
        $req->setFields("num_iid,title,pict_url,small_images,reserve_price,zk_final_price,user_type,provcity,item_url");
        $req->setPlatform(1);
        $req->setNumIids($ids);

        $req->setPlatform(1);
        $resp = $_G['TOP']->execute($req);
        top_check_error($resp, 1);
        $rs = $this->parse_info($resp);
        return $rs;
    }

    function parse_info1($resp) {
        $item = $resp->results->n_tbk_item;
        $arr = array();
        foreach ($item as $k => $v) {
            $tmp = array();
            $tmp['url'] = $v->item_url;
            $num_iid = $tmp['num_iid'] =''. $v->num_iid;
            $tmp['picurl'] = $v->pict_url;
            $city = explode(" ", $v->provcity);
            $tmp['state'] = $city[0];            //	商品所在地
            $tmp['city'] = $city[1];

            $tmp['price'] = $v->reserve_price;
            $tmp['yh_price'] = $v->zk_final_price;
            $tmp['images'] = implode(",", $v->small_images->string);
            $tmp['title'] = $v->title;
            $tmp['shop_type'] = $v->user_type == 0 ? 1 : 0;

            if( $tmp['yh_price'] != $tmp['price'] ) {
                $tmp['zk']	= sprintf("%.1f",($tmp['yh_price']/$tmp['price']*10));
                $tmp['zk']	= 	str_replace('.0','',$tmp['zk']);
            }


            $arr[$num_iid] = $tmp;
        }
        return $arr;
    }


    /*
     * 淘宝客商品关联推荐查询
     * @paremt relate_type 推荐类型，
     * 1:同类商品推荐，
     * 2:异类商品推荐，
     * 3:同店商品推荐，此时必须输入num_iid;
     * 4:店铺热门推荐，此时必须输入user_id，这里的user_id得通过taobao.tbk.shop.get这个接口去获取user_id字段;
     * 5:类目热门推荐，此时必须输入cid
     *
     * */

    function get_recommend($relate_type, $id,$size =20) {
        global $_G;

        include_once(ROOT_PATH . 'top/tbk/TbkItemRecommendGetRequest.php');
        $req = new TbkItemRecommendGetRequest;
        $req->setFields("num_iid,title,pict_url,small_images,reserve_price,zk_final_price,user_type,provcity,item_url");
        $req->setRelateType($relate_type);

        if ($relate_type == 4) {
            $req->setUserId($id);
        } else if ($relate_type == 5) {
            $req->setCat($id);
        }else{
            $req->setNumIid($id);
        }
        $req->setCount($size);
        $req->setPlatform(1);
        $resp = $_G['TOP']->execute($req);
        top_check_error($resp,1);
        $rs  = $this->parse_info($resp);
        return $rs;
    }




}
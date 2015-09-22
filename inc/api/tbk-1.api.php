<?php

//http://open.taobao.com/apidoc/api.htm?path=scopeId:11655-apiId:24515
//优站用户才有的权限

class api_tbk {
    public $total = 0;

    //批量帅选商品
    function get($arr) {
        global $_G;
        include_once(ROOT_PATH . 'top/tbk/TbkItemGetRequest.php');
        $req = new TbkItemGetRequest;
        $req->setFields("num_iid,title,pict_url,small_images,reserve_price,zk_final_price,user_type,provcity,item_url");

        foreach ($arr as $k => $v) {
            if ($v)
                $req->putOtherTextParam($k, $v);
        }

        $resp = $_G['TOP']->execute($req);
        top_check_error($resp, 1);

        $list = $this->parse($resp);

        return $list;
    }

    //open_iid  24位字符串
    function parse($resp) {
        dump($resp);
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

    function parse_info($resp) {
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
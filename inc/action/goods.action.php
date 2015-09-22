<?php
if(!defined('IN_TTAE')) exit('Access Denied'); 

class goods extends app{
	public function main(){
			global $_G;	
		
			$aid = $_GET['aid'] ? ($_GET['aid']) : get_goods_id($_GET['itemid']);
			
			if($aid && $aid<1) {				
				msg('抱歉ID不存在');
			}
			
		
			if( $_GET['aid']){
				$aid = intval($aid); 
				$goods = D(array('and'=>"aid = ".$aid ,'limit'=>1,'all'=>true,'key'=>'goods_'.$aid)); 
			}else{
				$goods = D(array('and'=>"num_iid = '$aid'",'limit'=>1,'all'=>true,'key'=>'goods_'.$aid)); 
			}

			if($goods['status'] == 0 || $goods['status']==2){
				msg('抱歉,当前商品 '.$goods[status_text].' 暂时无法查看'); 				
			}
			
			if($_G[mobile]){
				$url = URL.'a=go_pay&num_iid='.$goods[num_iid];;
				_header("Location:".$url);
			}
			$update = array();
			if($goods['aid']>0){					
					if(!$goods[keywords]){				
						$keyword =  get_keywords($goods['title'].$goods['ly']);
						if($keyword){
							$goods[keywords] = $keyword;
							$update[keywords] = $keyword;			
						}
					}
			}
			if( $goods['fid']) $channel =$_G['all_channel']['k'.$goods[fid]];
			
			$tpl  = '';		
			if($channel)$tpl = trim($channel['goods_tpl']);		
				
			$_G['channel']=$channel;
			
			if($goods[fid])$_G[fid] = $goods[fid];
       		if ($_G['setting']['get_message'] && !$goods['message']) {
		
					$message = top('m_taobao', 'get_message', $goods[num_iid]);
					if ($message) {
						$goods['message'] = $message;
						$update['message'] = $message;
					}
        	}
		


        $up = D(array('and' => ' AND aid <' . $goods['aid'], 'table' => 'goods', 'order' => 'aid DESC'));
        $down = D(array('and' => ' AND aid >' . $goods['aid'], 'table' => 'goods', 'order' => 'aid ASC'));

        $goods[up] = $up[id] ? '<a href="' . $up[id_url] . '">' . $up[title] . '</a>' : '没有了';
        $goods[down] = $down[id] ? '<a href="' . $down[id_url] . '">' . $down[title] . '</a>' : '没有了';

        $this->add(array('goods' => $goods, 'up' => $up, 'down' => $down));
        if ($goods['aid'] > 0 &&  $update) {
            $update[views] = $goods['views'] + 1;
            DB::update('goods', $update, 'aid=' . $goods['aid']);
        }
		
		save_history(__CLASS__,$goods['aid']);
		$title = $goods['seo_title'] ? $goods['seo_title'] :$goods['title'];
        seo($title, $goods['keywords'], $goods['description']);
        $this->show($tpl);
    }
}
?>
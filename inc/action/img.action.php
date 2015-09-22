<?php
if(!defined('IN_TTAE')) exit('Access Denied'); 

class img extends app{


	function main(){
		global $_G;



		$id = intval($_GET['id']);
		if(!$id) {
			msg('抱歉,ID不存在');
 			return false;
		}
		$cache_name = 'img_'.$id;
		$cache = memory('get',$cache_name);
		if(is_array($cache)){
			$img = $cache;
		}else{		
				$img = D(array('and'=>' AND id = '.$id,'table'=>__CLASS__));
				if(!$img[id]){
					msg('抱歉,当前信息不存在');
					return false;
				}
				DB::update('img',array('like'=>$img[like]+1),'id='.$id);		
				$up =D(array('and'=>' AND id <'.$id,'table'=>__CLASS__,'order'=>'id DESC'));
				$down =   D(array('and'=>' AND id >'.$id,'table'=>__CLASS__,'order'=>'id ASC'));
				
				$img[up] = $up[id]? '<a href="'.$up[url].'">'.$up[title].'</a>' : '没有了';
				$img[down] = $down[id]? '<a href="'.$down[url].'">'.$down[title].'</a>' : '没有了';
				
			//	$img[message] = preg_replace("/###\{(.*?)\}###/ies","parse_img_goods('\\1')",$img[message]);
				//$img[message] = preg_replace("/###\{(.*?)\}###/ies","parse('img_goods','\\1')",$img[message]);
				memory('set',$cache_name,$img);	
		}
		
		$this->add(array(
			'img'=>$img 
		));
		seo($img['title'],$img['keywords'],$img['description']);
		$this->show();
	}
	
	function _list(){
		global $_G;
		
		$url = URL.'m=img&a=list';
		$and = ' `hide` = 0 ';
		$tag = '';
		if($_GET[tag]){
			$tag = $_GET['tag'];
			$tag = urldecode_utf8($tag);
			$tag = daddslashes($tag);
			$and .="AND FIND_IN_SET('".$tag."', keywords) ";
			$url .="&tag=".urlencode_utf8($tag); 
		}

		$img = D(array('and'=>$and,'table'=>'img','order'=>'`sort` DESC,id DESC','key'=>'img_list_'.$tag),array('size'=>10,'url'=>$url));
		$this->add($img);
		seo('值得买 - '.$_G['setting'][title]);
		$this->show();
	}
	
	

}
?>
<?php

abstract class  apiBase{

	public $show_error = true;	
	public $parse = true;
	public $goods_list = array();
	public function __construct(){
		
	
	}
	
	public abstract  function get($file);
	
	
	public abstract function parse($obj);
	
	
	public function get_iids($goods_list){
		if (!is_array($goods_list))  return $goods_list;
		$iids = array();
		foreach($goods_list as $k=>$v){
			$iids[] = $v['num_iid'];
		}
		return implode(',',$iids);
	}
	
	
	

	
}

?>
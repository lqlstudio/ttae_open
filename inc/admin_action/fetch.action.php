<?php
if(!defined('IN_ADMIN')) exit('Access Denied'); 

class fetch extends app{

	//规则
	function main(){
				global $_G;
				if($_GET['onsubmit'] && check() ){
						foreach($_GET[ids] as $k=>$v){
							if($_GET[del][$k] ==0) continue;
							$id = intval($v);							
							if($_GET['_del_all']==1 && $_GET['del'][$k]){
								DB::delete(__CLASS__,"id=".intval($id));
							}else{
								$arr = array();
								$arr['sort'] = $_GET['sort'][$k];
								DB::update(__CLASS__,$arr,'id='.$id);
							}
						}						
						cpmsg('操作成功','success','m='.__CLASS__.'&a='.__FUNCTION__);
						return false;
				}
				$size = 40;
				$url = 'm=fetch&a=main';
				$rs = D(array('table'=>__CLASS__,'and'=>'','order'=>' `sort` DESC,id DESC '),array('size'=>$size,'url'=>$url));
				
				$this->add($rs);			
				
				$this->show();
	}
	
	function post(){
					global $_G;
					
					if($_GET['onsubmit'] && check() ){
						$arr = array();
									$arr['title'] =trim_html($_GET['title'],1);
									$arr['fid'] = intval($_GET['fid']);
									$value = $_GET['postdb'];
									$arr['value'] = serialize($value);
									

									$url = '';
									if($_GET['id']){
											$id = intval($_GET['id']);
											DB::update(__CLASS__,$arr,"id=".$id);
											$url = '&id='.$id;
											$msg = '修改';
									}else{
											$msg = '添加';
											$arr['dateline'] =TIMESTAMP;
											$arr['count'] =0;
											$arr['updatetime'] = 0;
											$arr['count'] = 0;
											DB::insert(__CLASS__,$arr,true);
									}
									cpmsg($msg.'成功','success','m='.__CLASS__.'&a='.__FUNCTION__.$url);
					}elseif($_GET['id']) {						
						$id = intval($_GET['id']);
						$rs = DB::fetch_first("SELECT * FROM ".DB::table('fetch')." WHERE id = ".$id);
						$fetch = dunserialize($rs['value']);
						$fetch  = array_merge($fetch ,$rs);
						//dump($fetch);
					}
					
					$cates = include (libfile('config/taobao_cate'));
					$this->add(array('cates'=>$cates,'fetch'=>$fetch));					

					$this->show();
	}
	function del(){
					global $_G;
					if(!$_GET['id']){ 
						cpmsg('抱歉,要删除的规则ID不存在','error',"m=fetch&a=main");
						return false;
					}
					$id = intval($_GET['id']);
					if(!$_GET['ok']){
						cpmsg('您确定要删除当前规则吗?删除后不可恢复?','error',"m=fetch&a=del&ok=1&id=".$id,'确定删除',"<p><a href='".URL."m=fetch&a=main'>取消</a></p>");
						return false;
					}else{
						DB::delete(__CLASS__,"id=".$id);
						cpmsg('删除成功','success');
						return false;
					}
	}
	
	
	function get_cates(){
				global $_G;
				$cates = top('taobao_cate','get_user','0');

				//只写文件,只在本地使用
				writetocache('taobao_cate',arrayeval($cates));			
				cpmsg('获取成功','success',"m=fetch&a=main");
	}
	
	function ajax_get_sub(){
					global $_G;
					if(TAE){
						$Storage = Alibaba::Storage(); 
						$res = $Storage->get("cates");
						if(!$res){
							msg('未获取到分类,请先更新分类','error');
						}
						$sub_cate =  json_decode($res,true);
						if(!$sub_cate || !is_array($sub_cate)){
							msg('分类读取失败,请先更新分类','errot');
						}
					}else{
						$sub_cate =  include ('web/cache/cache_taobao_cate.php');					
					}
					$cid = intval($_GET['cid']);				
					if($sub_cate[$cid]){						
						$string = '<select name="postdb[cid]"  class="select" ><option value="">------不限------</option>';						
						foreach($sub_cate[$cid]['sub'] as $k=>$v){
							$string.="<option value='".$v[cid]."'>".$v[name]."</option>";
						}
						
						$string .="</select>";
						$string = htmlspecialchars($string);
						json(array('status'=>'success','msg'=>$string));	
					}else{
						json(array('status'=>'error','msg'=>'未找到子分类'));	
					}
					
	}
	
	


    //开始执行采集任务,自动采集,无须手选,自动下一页....
    function start(){
        global $_G;
        $id = intval($_GET[id]);
        if(!$id)msg("抱歉,ID不存在");
        $success = 0;
        $url = URL.'m=fetch&a=start&id='.$id.'&page=';
        $key = 'update_goods_'.$id;


        $page_size = 10;

        if($_G[page]>$page_size){
            $len = intval($_SESSION[$key][success_len]);
            cpmsg('更新完毕,本次计划成功采集'.$len.'条','success',URL.'m=fetch&a=main','点击返回');

        }
        if($_G['page'] ==1 )$_SESSION[$key][success_len] = 0;

        $index = intval($_SESSION[$key][success_len]);
        $rs = D(array("and"=>'and id = '.$id,'table'=>'fetch'));
        //$rs['value']['page_size']  = 100;
        $rs['value']['page_no'] = $_G['page'];

        if(!$rs['value']['cid'] && !$rs['keyword']){
        	$rs['value']['cid']  = intval($rs['value']['fup']);
        }
		$get_type = $_G['setting']['api_type'];		//1 = 百川淘宝客	0=阿里妈妈淘客

        unset($rs['value']['fup']);
		
		if($get_type == 1){
			$top  = top('taobaoke');
			$arr = $top->get($rs["value"],1);
			if($arr === false){
				$arr = $top->get($rs["value"],1);
			}
		}else if($get_type ==0){
			//get	初级包,少
			//get_j	简版,采集商品更多
			$arr  = top('tbk','get',$rs["value"]);
		}else {
			msg('请先在采集设置中设置采集接口');
		}
		$count = count($arr['goods']);
        if($count == 0){
            $len = intval($_SESSION[$key][success_len]);
            cpmsg('更新完毕,本次计划成功采集'.$len.'条','success',URL.'m=fetch&a=main','点击返回');
        }
		
        foreach($arr['goods'] as $k=>$v){
            $arr = $v;
            if(isset($arr['yongjin'])) unset($arr['yongjin']);
            $arr['fid'] = intval($rs['fid']);
            $arr['check'] = 1;
			if(!$arr['num'])$arr['num']=999;
			 $arr['baoyou'] = 1;			
			//unset($arr['open_iid']);
            if(top('goods','insert',$arr,true)){
                $success++;
                $index ++;
            }
        }
		
		

        DB::query("UPDATE ".DB::table('fetch')." SET `count`= `count` + 1 , `sum`=`sum`+ $success , updatetime =  ".TIMESTAMP ." WHERE id = ".$id);
        $_SESSION[$key][success_len] += $success;

            $url.=($_G['page']+1);
            $rs = '共采集到'.$count.'条,入库成功'.$success.'条,准备采集下一页....
						<script type="text/javascript">
						var timer = null;
						function start(){
							var url  = "'.$url.'"
							timer =setTimeout(function(){
							window.location.href = url;
							},5000);
						};
						function stop(t){
							clearTimeout(timer);
							t.value = "已暂时,继续采集请刷新页面";
						}
						start();
						</script>;
						<input type="button" value="停止" onClick="stop(this);" style="height:24px;line-height:24px;color:#f00">';

            echo $rs;


    }
	
}
?>


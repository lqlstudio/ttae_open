<?php



//短信发送类
class api_sms {
	public $signature_id;
	public $tplid;
	public $debug = false;
	
		private function init($type){
			global $_G;
				if(!array_key_exists($type,$_G['_config']['sms']['template'])){
					msg('type 不正确');
				}else{
					$this->tplid =$_G['_config']['sms']['template'][$type];
				}
				$this->signature_id =$_G['_config']['sms']['signature_id'];
		}
		
		//taobao.open.sms.sendvercode 发送短信验证码
		//http://open.taobao.com/apidoc/api.htm?path=scopeId:11826-apiId:25596
		//发送验证码,百川需要验证
		function send($phone,$type,$key){
			global $_G;
			if(!is_phone($phone)) msg('手机号码不正确');
			$this->init($type);
			
			
			include_once	(ROOT_PATH.'top/baichuan/OpenSmsSendvercodeRequest.php');
			include_once	(ROOT_PATH.'top/baichuan/SendVerCodeRequest.php');
			if(!$key)$key = 'code';
			$domain = $key."_".$type.'_'.$phone.str_replace('.','_'.$_G['host'].'_'.CURSCRIPT);
			$arr = array();
			$arr['expire_time'] = 15*60;			//15分钟后过期
			$arr['session_limit'] = 30;				//session级别的发送次数限制
			$arr['device_limit'] = 10;				//设备级别的发送次数限制
			$arr['device_limit_in_time'] = 60;		//发送次数限制的时间，单位为秒，如1个小时内一个设备最多发多少短信
			$arr['mobile_limit'] = 5;				//手机号的次数限制
			$arr['session_limit_in_time'] = 5;		//发送次数限制的时，单位为秒间，单位为秒
			$arr['external_id'] = 'test';			//外部的id，发送失败的消息通知会原封不动的带回，用于和已有的状态进行关联
			$arr['mobile_limit_in_time'] = 60*5;	//手机号的次数限制的时间，单位为秒
			$arr['template_id'] = $this->tplid;			//模板id
			$arr['signature_id'] = $this->signature_id;				//签名id	//百川后台查看
			$arr['session_id'] = session_id();		//session id
			$arr['domain'] = $domain;			//业务域，比如登录的验证码不能用于注册
			$arr['device_id'] = '';					//设备id
			$arr['mobile'] = $phone;				//手机号
			
			$req = new OpenSmsSendvercodeRequest;	
			/*$SendVerCodeRequest =new SendVerCodeRequest;	
			foreach($arr as $k=>$v){
				$SendVerCodeRequest->$k=$v;
			}*/
			
			$SendVerCodeRequest = json_encode($arr);
			$req->setSendVerCodeRequest($SendVerCodeRequest);
			
			$resp = $_G['TOP']->execute($req);
			top_check_error($resp,true);
			$rs = $resp->result;
			if(!$rs->successful){
				if($this->debug) L('发送验证码错误:'.$rs->message.',手机号'.$phone.',domain:'.$arr['domain']);
				return $rs->message;
			}else{
				
				return true;
			}
		}	
		
		//taobao.open.sms.checkvercode 验证短信验证码
		//http://open.taobao.com/apidoc/api.htm?path=scopeId:11826-apiId:25597
		function check($phone,$type,$key,$code){
			global $_G;
			if(!is_phone($phone)) msg('手机号码不正确');
			$this->init($type);
			include_once	(ROOT_PATH.'top/baichuan/OpenSmsCheckvercodeRequest.php');	
			include_once	(ROOT_PATH.'top/baichuan/CheckVerCodeRequest.php');	
			$req = new OpenSmsCheckvercodeRequest;
			$CheckVerCodeRequest = new CheckVerCodeRequest();
			if(!$code) msg('验证码不能为空');
			$arr = array();
			$domain = $key."_".$type.'_'.$phone.str_replace('.','_'.$_G['host'].'_'.CURSCRIPT);
			$arr['domain'] = $domain;
			$arr['check_fail_limit'] = 3;		//错误最多次数
			$arr['check_success_limit'] = 3;	//成功最多次数
			$arr['ver_code'] = $code;
			$arr['mobile'] = $phone;
	
			foreach($arr as $k=>$v){
				//$CheckVerCodeRequest->putOtherTextParam($k,$v);
				$CheckVerCodeRequest->$k=$v;
			}
			
			$req->setCheckVerCodeRequest(json_encode($CheckVerCodeRequest));
			
			$resp = $_G['TOP']->execute($req);
			top_check_error($resp,true);
			
			$rs = $resp->result;
			if(!$rs->successful){
				if($this->debug) L('检查验证码错误:'.$rs->message.',手机号'.$phone.',domain:'.$arr['domain']);
				return $rs->message;
			}else{
				
				return true;
			}

		}
		
		//taobao.open.sms.sendmsg 发送短信
		//http://open.taobao.com/apidoc/api.htm?path=scopeId:11826-apiId:25598
		//修改密码,不用百川验证
		function post($phone,$type,$password){
			global $_G;
			if(!is_phone($phone)) msg('手机号码不正确');
			$this->init($type);
			include_once	(ROOT_PATH.'top/baichuan/OpenSmsSendmsgRequest.php');	
			$req = new OpenSmsSendmsgRequest;
			$arr['template_id'] = $this->tplid;
			$arr['signature_id'] = $this->signature_id;	
			$arr['context'] = array('appName'=>$_G['setting']['title'],'code'=>$password);
			$arr['external_id'] = 'change_password';
			$arr['mobile'] = $phone;
			

			$SendMessageRequest = json_encode($arr);
			$req->setSendMessageRequest($SendMessageRequest);
			
			$resp = $_G['TOP']->execute($req);
			top_check_error($resp,true);

			$rs = $resp->result;
			if(!$rs->successful){
				$this->save_session('post_'.$type.'_'.$phone);
				if($this->debug) L('发送修改密码短信错误:'.$rs->message.',手机号'.$phone.',domain:'.$arr['domain']);
				return $rs->message;
			}else{
				return true;
			}
		}
	
}

?>
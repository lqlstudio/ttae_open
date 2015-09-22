<?php
if(!defined('IN_TTAE')) exit('Access Denied FROM UZ-SYSTEM'); 

function urlencode_utf8($str){	
	$str = iconv(CHARSET,'utf-8',$str);
	$str = urlencode($str);
	return $str;
}

function urldecode_utf8($str){
	$str = urldecode($str);
	$str = iconv('utf-8',CHARSET,$str);
	return $str;
}

function delete_cache($cache_name){

	if(!$cache_name) return false;
	if(is_array($cache_name)){
		foreach($cache_name as $k=>$v){
			@unlink(ROOT_PATH.'web/cache/cache_'.$v.'.php');
		}
	}else{	
		return @unlink(ROOT_PATH.'web/cache/cache_'.$cache_name.'.php');
	}
	return true;
}

function writetocache($script, $cachedata, $dir='') {
	global $_G;
	if(!$dir)$dir = 'web/cache/';
	$dir = ROOT_PATH.$dir;
	if(!is_dir($dir)) {
		dmkdir($dir, 0777);
	}
	$prefix = 'cache_';
	file_put_contents("$dir$prefix$script.php","<?php\nif(!defined('IN_TTAE')) exit('Access Denied');\n //UZ-SYSTEM! cache file, DO NOT modify me!\n//Identify: ".md5($prefix.$script.'.php'.$cachedata.$_G['authkey'])."\n\n return $cachedata \n?>");

}


function getcachevars($data, $type = 'VAR') {
	$evaluate = '';
	foreach($data as $key => $val) {
		if(!preg_match("/^[a-zA-Z_\x7f-\xff][a-zA-Z0-9_\x7f-\xff]*$/", $key)) {
			continue;
		}
		if(is_array($val)) {
			$evaluate .= "\$$key = ".arrayeval($val).";\n";
		} else {
			$val = addcslashes($val, '\'\\');
			$evaluate .= $type == 'VAR' ? "\$$key = '$val';\n" : "define('".strtoupper($key)."', '$val');\n";
		}
	}
	return $evaluate;
}


function arrayeval($array, $level = 0) {
	if(!is_array($array)) {
		return "'".$array."'";
	}
	if(is_array($array) && function_exists('var_export')) {
		return var_export($array, true);
	}

	$space = '';
	for($i = 0; $i <= $level; $i++) {
		$space .= "\t";
	}
	$evaluate = "Array\n$space(\n";
	$comma = $space;
	if(is_array($array)) {
		foreach($array as $key => $val) {
			$key = is_string($key) ? '\''.addcslashes($key, '\'\\').'\'' : $key;
			$val = !is_array($val) && (!preg_match("/^\-?[1-9]\d*$/", $val) || strlen($val) > 12) ? '\''.addcslashes($val, '\'\\').'\'' : $val;
			if(is_array($val)) {
				$evaluate .= "$comma$key => ".arrayeval($val, $level + 1);
			} else {
				$evaluate .= "$comma$key => $val";
			}
			$comma = ",\n$space";
		}
	}
	$evaluate .= "\n$space)";
	return $evaluate;
}
 


function remove_dir($dir,$del_self_dir=false) {
	if(!$dir) return false;
	$dir = ltrim($dir,'/');
	$dir = ROOT_PATH.str_replace(ROOT_PATH,'',$dir);
	if(!is_dir($dir))return ;
	$tpl = dir($dir);
	$path = array('.','..');
	while($entry = $tpl->read()) {	
		if(!in_array($entry,$path)){
			$d = $dir.'/'.$entry;		
			if(is_dir($d)){
				if (!is_writable($d))@chmod($d, 0777);
				remove_dir($d);
				@rmdir($d);
			}else{
				@unlink($d);
			}
		}
	}
	$tpl->close();
	if($del_self_dir)@rmdir($dir);
}

function dmkdir($dir, $mode = 0777, $makeindex = TRUE){
	if(!is_dir($dir)) {
		dmkdir(dirname($dir), $mode, $makeindex);
		@mkdir($dir, $mode);
		if(!empty($makeindex)) {
			@touch($dir.'/index.html'); @chmod($dir.'/index.html', 0777);
		}
	}
	return true;
}


function logout(){
	global $_G;
	$_G['uid'] =0;
	$_G['username'] ='';
	$_G['member'] =array();
	$_G['groupid'] =0;
	$_G['adminid'] =0;
	dsetcookie("auth",'',-1);
	unset($_COOKIE[auth]);
	unset($_SESSION[auth]);
	
}
function login($onauth){
		global $_G;
		
			if(!$onauth){
				 $auth = (getcookie('auth'));
				
			}else{
				 $auth = $onauth;
			}	 
			if($auth){
									  $decode_auth = authcode($auth,'decode');		
									  
									  if(!$decode_auth && $onauth){
										   $decode_auth = authcode(urldecode_utf8($onauth),'decode');
									  }
									  
									  
									  $auth = $decode_auth;
									  $tmp_user = 	explode('|',$decode_auth);		
									  
									 
									  if(is_array($tmp_user) && count($tmp_user) ==3){		
										$login_name= $tmp_user[0];
										$uid = $tmp_user[1];
										$username = $tmp_user[2];
										
										 if($login_name && $username && $uid){										
											 if(in_array($login_name,array('qq','weibo','taobao','baidu','weixin'))){
											      $user = getuser($uid,'uid');												  
												   if($username == $user[username] && $uid==$user[uid] && $login_name == $user[login_name]){
													   		if(!$user[picurl])$user[picurl] = avatar($user[username],$user['uid']);
															$_G[member] = $user;
															$_G[member][group] = $_G[group][$user[groupid]];
															$_G[uid] = intval($user[uid]);
															$_G[groupid] =$user[groupid];		
															 if($user[groupid] ==1) $_G[adminid] = 1;
															$_G[username] =  $user[username];
														
															 
															
													$_G[login_img] = '<img src="/assets/global/images/login_'.$login_name.'.png" class="_login_img"/>';
															
													}
											}
										 }										  
									  }else if(is_array($tmp_user) && count($tmp_user)==2){	
										$uid = $tmp_user[0];
										$password = $tmp_user[1];
									
											  if($uid && $password){										
													  $uid = intval($uid);
													  $user = getuser($uid,'uid');
													  
													
													   
													  if($user[uid] && $user[groupid]!=3){
														  if($password == $user[password] ){
															  
															  // && $_G['clientip'] == $user['login_ip']
															  if(!$user[picurl])$user[picurl] = avatar($user[username],$user['uid']);
															  $_G[member] = $user;
															  $_G[member][group] = $_G[group][$user[groupid]];
															  $_G[uid] = intval($user[uid]);
															  $_G[groupid] =$user[groupid];		
															  if($user[groupid] ==1) $_G[adminid] = 1;
															  $_G[username] =  $user[username];
															
															   $_G[login_img] ='';
															  
														  }
													  }
											  }
									  }
									  
				if($_G[uid]>0 && $user[uid]>0){ 
						if($user[groupid] ==3){
							logout();
							msg('抱歉,您的账户已禁止,无法登录,如有疑问,请联系客服','error','?');
							return false;
						}elseif($user[check] ==0){
							logout();
							msg('抱歉,您的账户未审核,无法登录','error','?');
							return false;
						}elseif($user['end_time'] >0 && $user['end_time']<TIMESTAMP){
							logout();
							msg('登录失败,您当前账号已到期,无法登录');
						}
				}
									  
			 }

			 if(defined('IN_ADMIN')){			
				$id  = $_G[member][groupid];
				if(($_G[adminid]!=1 || ($auth && authcode($_SESSION['auth'],'decode') != $auth))  && $_GET['m']!='login' && $_G[group][$id]['login_admin'] != 1 ){
						$url = URL.'m=login';
						header("Location:".$url);					
						echo '<script type="text/javascript">window.location.href = "'.$url.'";</script>';			
						exit;
				}
				
				 
			}

}

function web_upload($file,$path='uploads',$is_img=true){ 
			global $_G;
			if(!class_exists('upload')) include ROOT_PATH.'web/upload.class.php';
			if(!$file) $file =$_FILES[file];
			if(!$file || !$file[tmp_name]) return false;
			
			$upload = new upload();
			$img_arr= $attach = array();
			$upload_path = '/assets/'.$_G[setting][template].'/';
	  		$rs = $upload->init($file,$upload_path.$path);
			if(!$rs) return false;
			
			$attach  = & $upload->attach;

			if($attach['extension'] == 'attach' && $attach['isimage']!=1) {
				@unlink($attach['tmp_name']);
				return false;	//非可上传的文件,就禁止上传了
			}

			$upload_max_size  =$_G['setting']['upload_max_size'] ? intval($_G['setting']['upload_max_size']):2;
			if($attach['size']>1024*1024*$upload_max_size) msg ('上传文件失败,系统设置最大上传大为:'.$upload_max_size.'MB');
			if($attach['errorcode'])return $upload->errormessage();

			$target = $path.'/'.dgmdate(TIMESTAMP,'Y').'/'.dgmdate(TIMESTAMP,'m').'/'.dgmdate(TIMESTAMP,'j').'/';
			$lang_path = ROOT_PATH.$upload_path.$target;
			if(!is_dir($lang_path)) dmkdir($lang_path);
			$name = dgmdate(TIMESTAMP,'Y').dgmdate(TIMESTAMP,'m').dgmdate(TIMESTAMP,'j').strtolower(random(14));
			$attach['target'] = $lang_path.$name.'.'.$attach['ext'];
			$upload->save();
			$insert_path  = $target.$name.'.'.$attach['ext'];
			$pic = $upload_path.$insert_path;
			
			return $attach['target'] ;
			//return  taobao_upload_img($pic);

}

function taobao_upload_img($file){
	global $_G;
	//新接口还是老接口 new =1 新接口  否则是老接口
	$new = 1;
	if(!$_G[setting][upload_url] || strpos($_G[setting][upload_url],'http://') === false) return $file;
	$_G[upload_index]  = intval($_G[upload_index])+1;
	$url = trim($_G[setting][upload_url],'/').'/upload.php';
	if($new == 1)$url.='?new=1';
	$file_path ='@'.realpath(ROOT_PATH.$file).'';
	$data = array('token'	=>'1','file'=>	$file_path);
	$ch = curl_init();
	curl_setopt($ch, CURLOPT_URL, $url);
	curl_setopt($ch, CURLOPT_POST, true );
	curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
	curl_setopt($ch, CURLOPT_HEADER, false);
	curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
	//curl_setopt($ch, CURLOPT_REFERER, $_G[setting][upload_url]);
	curl_setopt($ch, CURLOPT_REFERER, $_G[siteurl]);
	curl_setopt($ch, CURLOPT_HTTPHEADER, array('X-FORWARDED-FOR:110.75.74.69','CLIENT-IP:110.75.74.69'));//IP
	$rs = curl_exec($ch);
	curl_close($ch);

if($new == 1 && strpos($rs,'img_url') !==false && strpos($rs,"var resp = {}") === false){
	$json = json_decode(trim($rs),true);
	if(is_array($json)){
		if($json[img_url] && $json[status] == 'success') {
			@unlink(ROOT_PATH.$file);
			return $json[img_url];
		}else{
			$msg =  "上传到淘宝服务器出错:".$json[msg];
			L($msg);
		}
	}
}elseif(strpos($rs,"var resp = {}")!== false){		
		$json  = '{'.sub_str($rs,'"{','}"').'"}';
		$json = stripslashes($json);		
		$json = json_decode($json,1);
		
		if(!is_array($json)){
			$json  = '{'.sub_str($rs,'"{','}"').'"}';
			$json = iconv('GBK','UTF-8',$json);
			$json = stripslashes($json);		
			$json = json_decode($json,1);
		}
		if(!is_array($json)){
			$json  = '{'.sub_str($rs,    '"{' ,      '"msg' )  ;
			$json = rtrim($json,',"') .'"}';
			$json = stripslashes($json);		
			$json = json_decode($json,1);
		}
		if(is_array($json)){
			if($json[img_url] && $json[status] == 'success') {
				@unlink(ROOT_PATH.$file);
				return $json[img_url];
			}else{
				$msg =  "上传到淘宝服务器错误:".$json[msg];
				L($msg);
			}
		}
}elseif (strpos($rs,"淘宝系统缓冲")!== false && $_G[upload_index]<5){
			return  taobao_upload_img($file);
}else{	
			$rs = trim_html($rs,1);
			L('上传图片到淘宝服务器失败'.$rs);
			echo	'上传图片到淘宝失败';
}		
	return $file;
		
	
}



function dsetcookie($var, $value = '', $life = 0, $prefix = 1) {
	global $_G;

	$config =array('cookiepre'=>'ttae_','cookiedomain'=>'','cookiepath'=>'/');
	$_G['cookie'][$var] = $value;
	$var = ($prefix ? $config['cookiepre'] : '').$var;
	$_COOKIE[$var] = $value;
	if($value == '' || $life < 0) {
		$value = '';
		$life = -1;
	}
	if(defined('IN_MOBILE')) {
		$httponly = false;
	}
	$life = $life > 0 ? TIMESTAMP + $life :TIMESTAMP - 31536000 ;
	$secure = $_SERVER['SERVER_PORT'] == 443 ? 1 : 0;
	$rt = setcookie($var, $value, $life,$config['cookiepath'], $config['cookiedomain'], $secure);
	return 	$rt;
	
}
function return_bytes($val) {
    $val = trim($val);
    $last = strtolower($val{strlen($val)-1});
    switch($last) {
        case 'g': $val *= 1024;
        case 'm': $val *= 1024;
        case 'k': $val *= 1024;
    }
    return $val;
}
function getcookie($key) {
	global $_G;	
	return isset($_G['cookie'][$key]) ? $_G['cookie'][$key] : '';
}


?>
{include file="../header.php"}
<link rel="stylesheet" type="text/css" href="{$CSSDIR}/member.css" media="all" />
<div class="login-wrap">
  <div class="login-form"> 
    
    <!--登录区域-->
    
    <div class="login">
      <div class="login_message">
        <h1>登录</h1>
        <ul>
          <form action="/index.php?m=member&a=login" method="post">
            <li class="login_li1"><!-- placeholder="用户名/邮箱"-->
              
              <input type="text" name="username" class="text logininputusr onfocus11 check_text" style="color: #333;" data-msg="请输入用户名" placeholder="请输入用户名">
              </span> </li>
            <li class="login_li1">
              <input type="password" name="password"  class="text logininputpwd password check_text" style="color: #333;" placeholder="请输入密码" data-msg="请输入密码">
            </li>
            <li class="login_li2">
              <input type="checkbox" name="remember" value="1"   class="remember" checked="checked" style="vertical-align: middle">
              <label for="remember" style="vertical-align: middle;display: inline-block;">下次自动登录</label>
              <label for=""><a href="{$URL}m=member&a=get_password">忘记密码?</a></label>
            </li>
            <li class="login_li1" style="margin-top: 10px;">
              <input type="submit" value="登  陆" class="btn login_btn check_form"  name="login_submit"  />
            </li>
            <input type="hidden" name="m" value="{$CURMODULE}" />
            <input type="hidden" name="a" value="{$CURACTION}" />
         
          <li class="login_li1" style="line-height:50px;">
            <label>其他账号登录：</label> 
           {if $_G.setting.weibo_appkey}<a class="hpz_index_icons index_icon13" href="{$URL}m=member&a=weibo_login"></a>{/if}
            {if $_G.setting.qq_appkey}<a class="hpz_index_icons index_icon14" href="{$URL}m=member&a=qq_login"></a>{/if}
            {if $_G.setting.taobao_appkey}<a class="hpz_index_icons index_icon12" href="{$URL}m=member&a=taobao_login"></a>{/if}
              </li>
 </form>
        </ul>
      </div>
    </div>
    
   
    <div class="register">
      <dl>
        <dt>注册</dt>
        <dd>还没有{$_G.setting.title}账号</dd>
        <dd><a href="/index.php?m=member&a=reg"><img src="{$IMGDIR}/relax-reg.png"></a></dd>
        <dd style="border-bottom: 1px dotted #dddddd; height: 10px;"></dd>
<dd>其他账号登录</dd>        
{if $_G.setting.weibo_appkey}<dd> <a href="{$URL}m=member&a=weibo_login"><img src="/assets/global/images/weibo_login_120x24.png"></a></dd>{/if}
{if $_G.setting.qq_appkey}<dd > <a href="{$URL}m=member&a=qq_login"><img src="/assets/global/images/qq_login_120x24.png"></a></dd> {/if}
{if $_G.setting.taobao_appkey} <dd> 
<a href="{$URL}m=member&a=taobao_login"><img src="/assets/global/images/taobao_login_120x24.png"></a> </dd>{/if}
      </dl>
      
      
      
      
    </div>
  </div>
</div>

{include file="../footer.php"}
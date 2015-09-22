 {include file="../header.php"} 
<script type="text/javascript" src="{$JSDIR}/member.js"></script>
<link rel="stylesheet" type="text/css" href="{$CSSDIR}/member.css" media="all" />
<div class="register-wrap">
  <div class="register-form"> 
    
    <!--登录区域-->
    
    <div class="register" style="height: 540px; margin-top: 18px;">
      <dl>
        <dt style="font-size: 22px; color: #666">新用户注册</dt>
        <dd style="height: 50px;"> <span class="sty1">填写账户信息</span> <span class="sty2" style="display:none;">邮件激活账户</span> <span class="sty3">注册成功</span>
          <div class="yd"></div>
        </dd>
        <form action="?m=member&a=reg" method="post" name="myform" class="myform">
          <dd style="margin-top: 20px;">
            <label for="username">用户名</label>
            <input type="text" class="text check_text"  data-msg="请输入用户名" name="username" value="">
          <dd>
            <label for="password">密码</label>
            <input type="password" class="text check_text" data-msg="请输入密码"  name="password" value="">
          <dd>
            <label for="repassword">确认密码</label>
            <input type="password" class="text check_text" data-msg="请输入确认密码"  name="password2" value="">
          <dd>
            <label for="mobile">手机</label>
            <input type="text" class="text check_text" data-msg="请输入手机号码"  name="phone" value="">
          <dd>
            <label for="email">邮箱</label>
            <input type="text" class="text check_text"  data-msg="请输入Email" name="email" value="">
          <dd>
            <input type="checkbox" id="agreement" style="vertical-align: middle; margin-left: 76px; margin-top: 18px; color: green;" checked="checked">
            <label for="agreement" style="width: 320px;font-size: 12px; text-align: left;  margin-left: 5px;margin-top: 18px; *margin-top: 22px;"> 我已经认真阅读并同意{$_G.setting.title}的 <a href="/index.php?m=member&a=xy" target="_blank">《用户注册协议》</a></label>
          </dd>
          <dd >
            <input type="submit" value="注册" name="reg_submit"  class="check_form reg_btn"  />
          </dd>
          <dd class="login_li1">
            <label style="width: 150px;height: 20px;line-height: 20px;">其他账号登录：</label>
           {if $_G.setting.weibo_appkey}<a class="hpz_index_icons index_icon13" href="{$URL}m=member&a=weibo_login"></a>{/if}
            {if $_G.setting.qq_appkey}<a class="hpz_index_icons index_icon14" href="{$URL}m=member&a=qq_login"></a>{/if}
            {if $_G.setting.taobao_appkey}<a class="hpz_index_icons index_icon12" href="{$URL}m=member&a=taobao_login"></a>{/if}
              </dd>
          <input type="hidden" name="m" value="{$CURMODULE}" />
          <input type="hidden" name="a" value="{$CURACTION}" />
        </form>
      </dl>
    </div>
    
    <!--注册区域-->
    
    <div class="login">
      <dl>
        <dt>登录</dt>
        <dd>已有{$_G.setting.title}账号?</dd>
        <dd><a href="/index.php?m=member&a=login"><img src="{$IMGDIR}/btn-login-small.png"></a></dd>
        <dd style="border-bottom: 1px dotted #dddddd; height: 10px;"></dd>
        
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
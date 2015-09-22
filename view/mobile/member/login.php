{include file="../header.php"}
<div class="hpz_returntop"><span>登录{$_G.setting.title}</span></div>

<div class="logindd">
    <div class="logind">
          <form action="{$URL}m=member&a=login" method="post" id="formg">
          <input type="hidden" name="login_submit" value="1" />
           <input type="hidden" name="m" value="{$CURMODULE}" />
            <input type="hidden" name="a" value="{$CURACTION}" />
            <ul>
                <li>
                    <input class="loginname" style="margin-top: 5px" value="" name="username" type="text" placeholder="用户名\手机号\邮箱">
                </li>
                <li><input class="loginname" style="margin-top: 15px;" value="" type="password" name="password" placeholder="密码"></li>
                <li><a class="getpwda" href="{$URL}m=member&a=get_password">忘记密码?</a></li>
                <li><a type="submit" class="loginbtn1" href="javascript:void(0)" onclick="document.getElementById('formg').submit()">登录</a></li>
                <li><a class="loginbtn1" style="background-color: #4dac14; margin-top: 10px;" href="{$URL}m=member&a=reg">注册账号</a></li>
              <li><span class="mbloginw1">其他账号登录:</span></li>
                <li>
                    <a href="/index.php?m=member&a=qq_login" class="otlogin qq"><i></i>QQ账号登录</a>
                    <a href="/index.php?m=member&a=weibo_login" class="otlogin wb" style="background-color: #E32014"><i></i>微博账号登录</a>
                </li>

            </ul>
        </form>
    </div>
</div>

{include file="../footer.php"}
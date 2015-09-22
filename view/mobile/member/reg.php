{include file="../header.php"} 

<div class="hpz_returntop"><span>注册{$_G.setting.title}</span></div>
<div class="logindd">
    <div class="logind">

         <form action="?m=member&a=reg" method="post" name="myform" class="myform" id="formg2">

            <input type="hidden" name="reg_submit" value="1">
            <ul>
                <li><input name="username" class="loginname" type="text" value="" placeholder="用户名/手机号"></li>
                <li><input name="password" class="loginname" type="password" value="" placeholder="密码（6-16字符）"></li>
                <li><input name="password2" class="loginname" type="password" value="" placeholder="确认密码"></li>
                <li><input name="email" class="loginname" type="text" value=""  placeholder="邮箱"/></li>
                
                <li style="line-height: 40px;"><span>请阅读并同意</span><a href="{$URL}m=member&a=xy">《用户注册协议》</a></li>
                <li><a class="loginbtn1" href="javascript:void(0)" onclick="document.getElementById('formg2').submit();">同意并注册</a></li>
            </ul>
             <input type="hidden" name="m" value="{$CURMODULE}" />
          <input type="hidden" name="a" value="{$CURACTION}" />
        </form>
    </div>
</div>

{include file="../footer.php"}
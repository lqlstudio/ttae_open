 {include file="../header.php"}
<link rel="stylesheet" type="text/css" href="{$CSSDIR}/member.css" media="all" />
<div class="forgetpwd-wrap">
  <div class="forgetpwd-form"> {if $step ==1}
    <form action="" method="post">
      <div class="find-password step1" >
        <dl>
          <dt>忘记密码</dt>
          <dd style="height: 50px;"> <span class="yd-text" style="color: #666;">确认账号</span> <span class="yd-text">邮件验证</span> <span class="yd-text">设置新密码</span> <span class="yd-text">修改完成</span>
            <div class="lost-timeline yd1"></div>
          </dd>
          <dd>
            <label class="label" for="username">用户名</label>
            <input type="text" name="username" id="username" class="text username check_text" style="color: #666;" data-msg="用户名不能为空">
          </dd>
          <dd>
            <label class="label" for="email">注册邮箱</label>
            <input type="text" name="email"  class="text email check_text" style="color: #666;" data-msg="邮箱不能为空">
          </dd>
          <dd>
            <input type="submit" value="1" name="onsubmit" class="nextsetp text cursor check_form" />
          </dd>
        </dl>
      </div>
      <input type="hidden" name="m" value="{$CURMODULE}" />
      <input type="hidden" name="a" value="{$CURACTION}" />
    </form>
    {elseif $step==2}
    <div class="find-password step2">
      <dl>
        <dt>邮件验证</dt>
        <dd style="height: 50px;"> <span class="yd-text" style="color: #666;">确认账号</span> <span class="yd-text" style="color: #666;">邮件验证</span> <span class="yd-text">设置新密码</span> <span class="yd-text">修改完成</span>
          <div class="lost-timeline yd2"></div>
        </dd>
        <dd style="height: auto">
          <div style="width: 500px; height: 90px;color: #666; font-size: 18px; line-height: 1.5;padding-bottom: 10px;overflow-y: auto;"> 我们已经向您的邮箱(<b class="email_value">{$email}</b>)发送了一封验证身份的邮件，请登录邮件，点击邮件中的链接修改密码！ </div>
        </dd>
        <dd><a  class="submit">&nbsp;</a></dd>
      </dl>
    </div>
    {elseif $step==3}
    <form action="" method="post">
      <div class="find-password step3"  >
        <dl>
          <dt>重置密码</dt>
          <dd style="height: 50px;"> <span class="yd-text"  style="color: #666;">确认账号</span> <span class="yd-text" style="color: #666;">邮件验证</span> <span class="yd-text" style="color: #666;">设置新密码</span> <span class="yd-text">修改完成</span>
            <div class="lost-timeline yd3"></div>
          </dd>
          <dd>
            <label class="label" for="password1">新密码</label>
            <input type="password" name="password1" class="text  check_text" style="color: #666;" data-msg="新密码不能为空">
          </dd>
          <dd>
            <label class="label" for="password2">确认新密码</label>
            <input type="password" name="password2"  class="text  check_text" style="color: #666;" data-msg="确认密码不能为空">
          </dd>
          <dd>
            <input type="submit" value="1" name="onsubmit" class="nextsetp text cursor check_form" />
          </dd>
        </dl>
      </div>
      <input type="hidden" name="new_password" value="1" />
      <input type="hidden" name="m" value="{$CURMODULE}" />
      <input type="hidden" name="a" value="{$CURACTION}" />
    </form>
    {/if} </div>
</div>
{include file="../footer.php"} 
<div style="width: 100%; height: 60px; margin: 0 auto"></div>
<div class="i2_botd cl">
    <ul class="uline">
      <li><a href="{$_G.siteurl}">首页</a></li>
      <li><a href="{$URL}mobile=no">电脑版</a></li>
      <li><a href="{$URL}mobile=yes" style="color: #666">手机版</a></li>
    </ul>
</div>
{if !$_G.uid}
<div class="botmlogind">
    <a href="{$URL}m=member&a=login" class="a1">登录</a>
    <a href="{$URL}m=member&a=reg" class="a2">注册</a>
</div>
{/if}
<div class="bottom">
copyright @2014 {$_G.host}
</div>
<script type="text/javascript" src="{$JSDIR}/main.js"></script>
{include file="../common_mobile/footer.php"}
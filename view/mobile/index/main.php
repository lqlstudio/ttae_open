{include file="../header.php"}
{if $_G.fid}
<div class="indexmenu2"><div class="indexmenu2d"><div class="cag_headt"><a href="{$_G.siteurl}">&lt;</a><span> {$_G.channel.name}</span></div></div>
</div>
{/if}
<section class="deals" id="stage">
{foreach from=$goods item=v}
<div class="item_list">
    <a target="_blank" class="imgd" href="{$v.url}">
        <img width="140" src="{$v.picurl}_150x150.jpg">
        {if $v.new ==1}<i class="mb_ico goodsdpi gisnew1"></i>{/if}
        <span class="goodsisover1"></span>
    </a>
    <h2><span><a target="_blank" href="{$v.url}">{$v.title}</a></span></h2>
    <aside>￥<span>{$v.yh_price}</span></aside>
    <p><del>￥{$v.price}</del><cite>{$v.zk}折</cite>
    <b class="b1">已售{$v.sum}</b></p>
</div>
{/foreach}
</section>

<div class=" redpage cl">
  {$showpage}
</div>

<script type="text/javascript" src="{$JSDIR}/slider.js"></script>
<script type="text/javascript" src="{$JSDIR}/sliderrun.js"></script>
<script type="text/javascript" src="{$JSDIR}/hp.js"></script>
<script type="text/javascript" src="{$JSDIR}/index.js"></script>
{include file="../footer.php"}



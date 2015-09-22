{include file="../header.php"}
 <link type="text/css" rel="stylesheet" href="{$CSSDIR}/index.css">
{if $CURMODULE == 'index' && $CURACTION == 'over'}
<div class="listtopcontent">
        <h1>即将结束</h1>
        <h2>最后疯抢，不容错过</h2>
        <div class="listlast_time">
           <h3>剩余时间：</h3>
           <b data-time="{$time}" id="display_lasttime" class="start_time2"></b>
        </div>
    
 </div>
{/if}


{if $CA=='main' && $CM=='channel'}

    {if $channel.picurl}
        <div class="_auto_ad" data-picurl="{$channel.picurl}" data-url="{$cate.org_url}"></div>
    {else}
    <div class="nav_position">
    <a href="{$_G.siteurl}">首页</a> > <a href="{$URL}fid={$_G.fid}" class="on">{$channel.name}</a>
    </div>
    
    {/if}
{/if}

{if $CA=='cate' && $CM=='index' && $cate.picurl}
    <div class="_auto_ad" data-picurl="{$cate.picurl}" data-url="{$cate.pic_url}"></div>

{/if}

    <div class="i2_goodscond">
        <ul class="i2_goodsul">
        
         {foreach from=$goods item=v}
 <li class="i2_goodsli">
                <a class="index2_ico i2_ggi i2_ggi0" style="z-index: 2000;"></a>
                <div class="i2_goodsd">
                	<i class="index2_ico i2_gdp1 i2_gnew0" style=""></i>
                    <i class="index2_ico i2_gdp1 i2_ghot0" style=""></i>
                    {if $v.over ==1}<a class="i2_gdpover2"></a>{/if}
                    <a class="i2_goodsjzbk" href="{$v.url}" target="_blank" rel="nofollow" isconvert="1" data-itemid= "{$v.num_iid}">
                       <img width="250" height="250" src="{$v.picurl}_250x250.jpg" alt="{$v.title}"  class="ver_img" >
                    </a>
                    <a class="i2_goodsname" href="{$v.id_url}" target="_blank">{$v.title}</a>
                    <div class="i2_goodprice">
                    	<span class="i2_gprw1">￥</span> <b class="i2_gprw2">{$v.yh_price}</b>
                        <div class="i2_gprw3">
                        	<span class="index2_ico i2_gprw4">{$v.zk}折</span> <del class="i2_gprw5 hide">￥{$v.price}</del>
                        </div>
                        {if $v.baoyou ==1}
                        <div class="i2_gprw6"  >包邮</div>
                        {/if}
                       
                         {if $v.sum != 999}<span class="sum" >已售:{$v.sum}</span>{/if}
                       
                    </div>
{if $v.status==5}
<a class="i2_gbuybtn btgotobuy_isover4"  href="{$v.url}" target="_blank" title="{$v.title}"  rel="nofollow" isconvert="1" data-itemid= "{$v.num_iid}"><span>{$v.h}点开始</span></a>
{elseif $v.status==3 || $v.status==4}
<a class="i2_gbuybtn btgotobuy_isover2"  href="{$v.url}" target="_blank" title="{$v.title}" rel="nofollow" isconvert="1" data-itemid= "{$v.num_iid}">抢光了</a>
                
{else}
<a class="i2_gbuybtn btgotobuy_isover1" href="{$v.url}" target="_blank" title="{$v.title}" rel="nofollow" isconvert="1" data-itemid= "{$v.num_iid}">去{if $v.shop_type==1}天猫{else}淘宝{/if}抢购</a>
{/if}
                                        
                    <div class="i2_goodsbtom">
                        <ul>
                           {if $v.baoyou ==1}<li class="i2goodsbtw1">包邮</li>{/if}
                            {foreach from=$v.tag item=tags}
                            <li class="i2goodsbtww1"><a href="{$URL}kw={$tags}" target="_blank">{$tags}</a></li>
                            {/foreach}
                           
                        </ul>
                     
                       <i class="index2_ico i2_gtimeico i2_gtiico00" style="display: block;" ></i>
                        <div class="i2_goodstimed" style="display: none;">
                            {if $v.org_end_time>0}  <i class="index2_ico i2_gtiico00"></i>       {/if}                     
                            <span class=" start_time3"  data-time="{$v.org_end_time}"  data-title="即将开始："></span>                            
                        </div>
                      
                    </div>

                    <div class="i2_shared">
                      
                      
                         {if $v.org_start_time > $_G.timestamp}
                           
                           <h1>距开始:</h1>
                           <div class="index_fxshared _start_time" data-time="{$v.org_start_time}"></div>
                           {else}
                           <h1>距结束:</h1>
                           <div class="index_fxshared _start_time" data-time="{$v.org_end_time}"></div>
                       {/if}
                       
                       
                        <a class="i2_shardwa" title="会员分享不同商品，每分享1个可获得{$_G.setting.share_jf}积分">
                            <span>分享送积分</span> <i class="index2_ico"></i>
                        </a>
						<div class="tag_list hide">标签：
                        {foreach from=$v.tags item=v1 key=k1}
                             <a href="{$URL}kw={$k1}" target="_blank" title="{$v1}" >{$v1}</a>
                        {/foreach}
                       </div>
                    </div> 


                </div>
            </li>
  {/foreach}
         </ul>

            <div style="clear:both;"></div>
         </div>

 <div class="redpage cl" >{$showpage}</div>








{include file="../tags.php"}



{include file="../footer.php"}



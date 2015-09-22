{include file="../header.php"}
<!--<link rel="stylesheet" type="text/css" href="{$CSSDIR}/brandgroup.css" media="all" />-->


<div class="ppt_detail hide">
    <a href="{$shop.id_url}" target="_blank" class="ppt_detaidover1"></a>
    <a href="{$shop.id_url}" target="_blank">
    <img class="detaigoodsimg" width="540" height="280" src="{$shop.picurl}"></a>
	 <i class="newindexicon tggoodsico pos_first"></i>
     <i class="newindexicon tggoodsicohot pos_first"></i>
    <span class="ppt_date">{$shop.start_time}~{$shop.end_time}</span>
    <span class="pptdat_log"><img width="140"  height="70" src="{$shop.pic_path}"></span>
	
    <h1 class="ppt_dailname">{$shop.title}</h1>
    <span class="ppt_dailzhekou">{$shop.zk}折起</span>
    <a class="ppt_detaitit" href="{$shop.id_url}" target="_blank">{$shop.title}</a>
    <div class="ppt_dtailprice">
        <b>￥</b><span>{$shop.yh_price}</span>  <em>￥</em>  <del>{$shop.price}</del>
    </div>
        <a href="{$shop.id_url}" target="_blank" class="ppt_detailgobuy"></a>
        <div class="ppt_timeu start_time" data-time="{$v.org_end_time}" id="display_lefttime"></div>

</div>

<div class="shop_bg cl">
{if $shop.picurl}
 <div class="_auto_ad" data-picurl="{$shop.picurl}" ></div>
{/if}
<div class="shop_desc wp cl">


<div class="ppTitle area">
    <div class="ppLogo" >
      <span><a target="_blank" href="{$shop.url}"  data-sellerid="{$shop.sid}"   isconvert="1"><img src="{$shop.pic_path}" alt="{$shop.name}"></a></span>
    </div>
    <div class="ppName">
      <h1><a target="_blank" href="{$shop.url}"  data-sellerid="{$shop.sid}"   isconvert="1">{$shop.title}</a></h1>

      <div class="ppInfor">
          <div class="desc_title_bg"></div>
          <span>
                <a target="_blank" href="{$shop.url}"  data-sellerid="{$shop.sid}"  isconvert="1">{$shop.title}卖专场<b>{$shop.zk}</b>折起 &gt; </a>
                 {$shop.start_time}~{$shop.end_time}
          </span>
      </div>
       <div class="ppInfor">
       {$shop.desc}
       </div>
    </div>
    <div class="clear"></div>
  </div>


</div>



<div class="index2_contend cl">

    <a name="index_cate" style="display:block; clear:both; height:0px; overflow:hidden;"></a>
    <div class="i2_goodscond ">
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
                        	<span class="index2_ico i2_gprw4">{$v.zk}折</span> <del class="i2_gprw5">￥{$v.price}</del>
                        </div>
                        {if $v.baoyou ==1}
                        <div class="i2_gprw6" >包邮</div>
                        {/if}
                        {if $v.sum>300 && $v.sum != 999}
                         <span class="sum" style="color: #0095FF;">已售:{$v.sum}</span>
                         {/if}
                    </div>

                    
{if $v.status==5}
<a class="i2_gbuybtn btgotobuy_isover4"  href="{$v.url}" target="_blank" title="{$v.title}" rel="nofollow" isconvert="1" data-itemid= "{$v.num_iid}"><span>{$v.h}点开始</span></a>
{elseif $v.status==3 || $v.status==4}
<a class="i2_gbuybtn btgotobuy_isover2"  href="{$v.url}" target="_blank" title="{$v.title}" rel="nofollow" isconvert="1" data-itemid= "{$v.num_iid}">抢光了</a>
                
{elseif $v.status==1}
<a class="i2_gbuybtn btgotobuy_isover1" href="{$v.url}" target="_blank" title="{$v.title}" rel="nofollow" isconvert="1" data-itemid= "{$v.num_iid}">去{if $v.shop_type==1}天猫{else}淘宝{/if}抢购</a>
{/if}
                    
                                        
                    <div class="i2_goodsbtom">
                        <ul>
                           {if $v.baoyou ==1}<li class="i2goodsbtw1">包邮</li>{/if}
                            {foreach from=$v.tag item=tags}
                            <li class="i2goodsbtww1">{$tags}</li>
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
                       
                        <a class="i2_shardwa" title="会员分享不同商品，每分享1个可获得{$_G.setting.share_jf}积分"  href="{$URL}a=share&id={$v.aid}&type=qqzone" target="_blank">
                            <span>分享送积分</span> <i class="index2_ico"></i>
                        </a>
						<div class="tag_list hide">标签：
                        {foreach from=$v.tags item=v1 key=k1}
                             <a href="{$URL}kw={$k1}" target="_blank" title="{$v1}">{$v1}</a>
                        {/foreach}
                       </div>
                    </div> 


                </div>
            </li>
  {/foreach}
         </ul>

            <div style="clear:both;"></div>
         </div>
</div>
 <div class="redpage cl" >{$showpage}</div>
</div>  






{include file="../footer.php"} 
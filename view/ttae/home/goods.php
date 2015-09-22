{include file="../header.php"}

<link rel="stylesheet" type="text/css" href="{$CSSDIR}/home_goods_list.css" media="all" />



<link rel="stylesheet" type="text/css" href="{$CSSDIR}/apply.css" media="all" />

{include file="../apply/hd.php"}



<div class="index2_box cl" >



 {foreach from=$goods item=v key=k}

<div class="by_end cl">

	<div class="nav_p_top cl">

              <span>报名时间：{$v.posttime},上次操作时间:{$v.dateline}&nbsp;&nbsp;</span>

              <!--<span class="hong">限时抢购</span>-->

              <em>审核结果：<i>{$v.status_text}</i>

              

               {if  $v.check ==0 || $v.check==2}

             	<a href="{$URL}m=home&a=post&aid={$v.aid}">编辑</a>

                <a href="{$URL}m=home&a=del&aid={$v.aid}" class="_ajax_dialog">删除</a>

             	{/if}

              

              </em>

              

              

    </div>

	<div class="nav_pq cl">

		<div class="p_img">		

		<a href="{$v.org_url}"><img width="90" height="90" src="{$v.picurl}_100x100.jpg"></a>

		</div>				  

		<ul class="p_text _hover_img">

			<li class="">

				<a href="{$v.org_url}" target="_blank">{$v.title}</a>

                <a href="{$v.picurl}" target="_blank"><img  src="{$v.picurl}"></a>

			</li>

			<li class="_hover_img">

				<span>所属分类：{$v.channel.name}</span>

				<span>原价：<b>{$v.price}</b>元</span>

				<span>活动价：<b>{$v.yh_price}</b>元</span>

				<span>是否包邮：{if $v.baoyou ==1}是{else}否{/if}</span>

			

                

			</li>

			<li>  

				<span>商品数量：{$v.num}</span>

				<span>最高佣金：{$v.commission}</span>

				<span>上线时间：{$v.start_time}-{$v.end_time}</span>

			</li>

			

		</ul>





    </div>

    <div class="pdly cl"><span>小编留言:</span>{$v.return_msg}</div>

    <div class="clear"></div>



</div>

{/foreach}

</div>



<!--分页会因为上面的浮动而有点走位,关掉div的结束,重开始-->

<div class="cl redpage">{$showpage}</div>





{include file="../footer.php"}
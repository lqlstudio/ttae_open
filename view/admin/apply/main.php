{include file='../common_admin/left_bar.php'}
<form enctype="multipart/form-data"  method="post"  >

<div class="table_top">

 <div class="table_top_l">共找到({$count})个商品信息</div>
     <div class="table_top_r">
        <ul>

<li>按条件查看商品</li>
<li><a href="{$URL}m=apply&a=main">全部</a></li>
<li {if $_GET.check && $_GET.checks==1}class="on"{/if}><a href="{$URL}m=apply&a=main&checks=1"><span>已审核</span></a></li>
<li {if $_GET.check && $_GET.checks==2}class="on"{/if}><a href="{$URL}m=apply&a=main&checks=2"><span>已拒绝</span></a></li>
<li {if $_GET.check && $_GET.checks==0}class="on"{/if}><a href="{$URL}m=apply&a=main&checks=0"><span>未审核</span></a></li>

{if $bm_status_text}
{foreach from=$bm_status_text item=v}
<li {if $_GET.check && $_GET.checks==$v.status}class="on"{/if}><a href="{$URL}m=apply&a=main&checks={$v.status}"><span>{$v.name}</span></a></li>

{/foreach}
{/if}

        </ul>
  </div>  

</div>
  <div class="table_main">
  <table class="tb tb2 ">
    <tbody>

      <tr class="hover">
        <td>删除</td>
        <td>aid</td>
        <td >所属栏目</td>
        <td class="goods_title">标题</td>
          
        <td>旺旺</td>
        
        <td>优惠价</td>
       
        <td>佣金</td>   

         <td>分类</td>

        <td>上线/下线时间</td>       
        <td>包邮</td>

        <td>排序</td>
        <td>下架</td>        
        <td>审核</td>        
        <td>编辑</td>

        <td>删除</td>

        <td>报名时间</td>
      </tr>
      <!--{foreach from=$goods item=v key=k}-->
      <tr class="hover">
        <td><input type="checkbox" name="del[{$v.aid}]" value="1" class="_del" />
          &nbsp;
          <input type="hidden" name="ids[{$v.aid}]" value="{$v.aid}" />
           <input type="hidden" name="num_iid[{$v.aid}]" value="{$v.num_iid}" />
          <a href="{$v.id_url}" target="_blank" title="新窗口打开"> <img src="{$IMGDIR}/open.gif" ></a></td>
        <td title="{$v.num_iid}">{$v.aid}</td>
        <td><a href="{$URL}m=apply&a=main&fid={$v.fid}">{$v.channel_name}</a></td>
        <td class="_hover_img goods_title" style="width:430px">
       <a href="{$v.url}" target="_blank">{if $v.title}{$v.title}{/if}</a>
        {if $v.shop_type==1}(商城){elseif $v.shop_type==2}(集市){/if}&nbsp;
        {if $v.hide == 1} <span class="red">(下架)</span>{/if} 
        <a href="{$v.picurl}" target="_blank"><img src="{$v.picurl}"  /></a>
        </td>
        
        <td title="{$v.apply_wangwang}" ><a href="#" target="_blank" class="_wangwang" data-nick="{$v.apply_wangwang}"></a></td>     
        <td><div class="price">{$v.yh_price}</div></td>
         <td><div class="commission"  data-iid="{$v.num_iid}" data-zk="{$v.zk}">{$v.commission}</div></td>
           <td><select name="cate[{$v.aid}]">
            <option value="0">----无分类----</option>
            <!--{foreach from=$_G.cate item=vv}-->
            <option value="{$vv.id}" {if $v.cate.id==$vv.id} selected="selected"{/if} >{$vv.name}</option>
            <!--{/foreach}-->
          </select></td>

        <td><p><input type="text" name="start_time[{$v.aid}]" value="{$v.start_time}" class="txt _dateline" /></p>
        <p><input type="text" name="end_time[{$v.aid}]" value="{$v.end_time}" class="txt _dateline" /></p>
        </td>
        <td><span {if $v.baoyou==0} class="red"{/if}>{$v.baoyou_name}</span></td>

        <td><input type="text" name="sort[{$v.aid}]" value="{$v.sort}"  class="txt w40"/></td>
        <td><input type="checkbox" name="hide[{$v.aid}]" value="1" {if $v.hide==1} checked="checked" {/if} /></td>
        <td>
       <a href="{$URL}m=apply&a=check&aid={$v.aid}" data-check="{$v.check}" data-default="0|1|2" class="_check_status {if $v.check==0}red{/if}"></a>
       
        </td>
        <td><a href="{$URL}m=apply&a=post&aid={$v.aid}&page={$_G.page}">编辑</a></td>

        <td><a href="{$URL}m=apply&a=del&aid={$v.aid}&page={$_G.page}" class="_confirm" data-msg="您确定删除本商品?删除后不可恢复">删除</a></td>

        <td {if $v.posttime>0}title="发布时间:{$v.posttime}"{/if}>{$v.posttime}</td>
      </tr>
      <!--{/foreach}-->
     
     <tr>
      <td class="td28" colspan="4"><input type="checkbox" class="_del_all" />反选 </td>
      <td colspan="13"><div class="y">{$showpage} </div></td>          
     </tr>
      <tr>
       
        <td class="td28"><input type="checkbox" name="_del_all"  value="1"  />删除</td>
        <td class="td28"> <input type="checkbox" name="check"  value="1"  />审核</td>
        <td class="td28"><input type="checkbox" name="hide_in"  value="1" />下架</td>
        <td  colspan="13">
          <div class="fixsel cl">

          
            
            
          
<select name="in_fid" class="select_fid"> 
 <option value="0">请选择要移动的栏目</option>
<!--{foreach from=$_G.channels item=vv}-->
 <option value="{$vv.fid}" {if $_GET.fid == $vv.fid} selected="selected" class="on"  {/if}>&nbsp;&nbsp;&nbsp;&nbsp;{$vv.name}</option>
<!--{if $vv.sub}-->
      <!--{foreach from=$vv.sub item=vvv}-->
          <option value="{$vvv.fid}" {if $_GET.fid == $vvv.fid} selected="selected" class="on" {/if}>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;{$vvv.name}</option>
          <!--{if $vvv.sub}-->
           <!--{foreach from=$vvv.sub item=a}-->
           <option value="{$a.fid}" {if $_GET.fid == $a.fid} selected="selected" class="on"  {/if}>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;{$a.name}</option>
          <!--{/foreach}-->
          <!--{/if}-->  
      <!--{/foreach}-->
<!--{/if}-->              
<!--{/foreach}-->
</select>
            

&nbsp;&nbsp;
<select name="cate_in">
<option value="-1">请选择商品分类</option>
<option value="0">无分类</option>
<!--{foreach from=$_G.goods_cate item=vv}-->
<option value="{$vv.id}" >{$vv.name}</option>
<!--{/foreach}-->
</select> &nbsp;&nbsp;
{if $_GET.fid}
<input type="hidden" name="cur_fid" value="{$_GET.fid}" />
{/if}

&nbsp;&nbsp;
上线时间:
<input type="text" name="start_time_in" value="" class="txt _dateline start_time_in" style="width:180px" />&nbsp;&nbsp;
下线时间:
<input type="text" name="end_time_in" value="" class="txt _dateline start_time_in" style="width:180px" />
        

          </div></td>
        
      </tr>
      <tr>
      	<td >&nbsp;</td>
          <td  colspan="15"><input type="submit" class="btn submit_btn"  name="onsubmit"  value="提交">&nbsp;&nbsp;全局设置,将会把所有选中的商品修改成此处设置的
          
          </td>
      </tr>
    </tbody>
  </table>
  </div>
<input type="hidden" name="m" value="{$CURMODULE}" />
<input type="hidden" name="a" value="{$CURACTION}" />
</form>
{include file='../common_admin/right_bar.php'} 
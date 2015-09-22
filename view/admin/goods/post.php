{include file='../common_admin/left_bar.php'}

<!--{if $_GET.aid && $CURMODULE == 'goods'}--> 
<div class="table_top">
<a href="/index.php?{if $_G.setting.link_type ==1}itemid={$goods.num_iid}{else}aid={$_GET.aid}{/if}" target="_blank">前台查看</a>&nbsp;&nbsp;
<a href="{$URL}m=channel&a=main&fid={$goods.fid}">查看本栏目商品</a>&nbsp;&nbsp; 
<a href="{$URL}m=channel&a=post&fid={$goods.fid}">编辑栏目信息</a>&nbsp;&nbsp; 

</div>
<!--{/if}--> 

  <div class="table_main">
<form enctype="multipart/form-data"  method="post" action="" >
  <table class="tb tb2 nobdb">
  
       <tbody>
          <tr class="noborder" >
            <td  class="td_l">自动抓取:</td>
            <td class="vtop rowform">
            <input name="goods_id" value="{$_GET.goods_id}" type="text" class="txt web_num_iid" >
              &nbsp;
              {if $_GET.aid}
              <input type="hidden" name="goods_aid" value="{$_GET.aid}" />
              {/if}
              <input type="submit" class="btn web_btn"  name="get_submit" value="抓取" >
              </td>
            <td class="vtop tips2" >填写商品ID或是商品链接,可自动获取商品信息</td>
          </tr>
          </tbody>
          </table>
      <input type="hidden" name="m" value="{$CURMODULE}" />
<input type="hidden" name="a" value="{$CURACTION}" />
</form>
     
      <form enctype="multipart/form-data"  method="post" action="" >
        <table class="tb tb2 nobdb">
     <tbody>
     
      <tr class="noborder" >
        <td  class="td_l">商品标题:</td>
        <td class="vtop rowform"><input name="postdb[title]" value="{$goods.title}" type="text" class="txt _keywords"></td>
        <td class="vtop tips2" >必填</td>
      </tr>
      <tr class="noborder" >
        <td class="td_l">所属栏目:</td>
        <td class="vtop rowform">

<select name="postdb[fid]" class="select_fid"> 
 <option value="0">----请选择栏目----</option>
<!--{foreach from=$_G.channels item=vv}-->
 <option value="{$vv.fid}" {if $goods.fid==$vv.fid || $vv.fid==$_GET.fid} selected="selected" class="on"  {/if}>&nbsp;&nbsp;&nbsp;&nbsp;{$vv.name}</option>
<!--{if $vv.sub}-->
      <!--{foreach from=$vv.sub item=vvv}-->
          <option value="{$vvv.fid}" {if $goods.fid==$vvv.fid || $vvv.fid==$_GET.fid} selected="selected" class="on" {/if}>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;{$vvv.name}</option>
          <!--{if $vvv.sub}-->
           <!--{foreach from=$vvv.sub item=a}-->
           <option value="{$a.fid}" {if $goods.fid==$a.fid || $a.fid==$_GET.fid} selected="selected" class="on"  {/if}>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;{$a.name}</option>
          <!--{/foreach}-->
          <!--{/if}-->  
      <!--{/foreach}-->
<!--{/if}-->              
<!--{/foreach}-->
</select>

          </td>
        <td class="vtop tips2" >本栏目的上级栏目或分类</td>
      </tr>

		<tr class="noborder" >
        <td class="td_l">商品分类:</td>
        <td class="vtop rowform">
          
<select name="postdb[cate]" class="select_fid"> 
 <option value="0">----请选择分类----</option>
<!--{foreach from=$_G.goods_cate item=vv}-->
 <option value="{$vv.id}" {if $goods.cate == $vv.id} selected="selected" class="on"  {/if}>&nbsp;&nbsp;&nbsp;&nbsp;{$vv.name}</option>
<!--{if $vv.sub}-->
      <!--{foreach from=$vv.sub item=vvv}-->
<option value="{$vvv.id}" {if $goods.cate == $vvv.id} selected="selected" class="on" {/if}>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;{$vvv.name}</option>
          <!--{if $vvv.sub}-->
           <!--{foreach from=$vvv.sub item=a}-->
           <option value="{$a.id}" {if $goods.cate == $a.id} selected="selected" class="on"  {/if}>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;{$a.name}</option>
          <!--{/foreach}-->
          <!--{/if}-->  
      <!--{/foreach}-->
<!--{/if}-->              
<!--{/foreach}-->
</select>
          
          
          </td>
        <td class="vtop tips2" >给商品添加分类,可在不同区域按需调用</td>
      </tr>

 	<tr class="noborder" >
        <td class="td_l">商品标记:</td>
        <td class="vtop rowform"><select name="postdb[flag]">
            <!--{foreach from=$_G.setting.flag item=vv key=k}-->
            <option value="{$k}" {if $goods.flag==$k} selected="selected"{/if} >{$vv}</option>
            <!--{/foreach}-->
          </select></td>
       <td class="vtop tips2" >商品标记,可在全局设置里添加修改,方便调用特定数据</td>
      </tr>
      

      
 	
      <tr class="noborder" >
        <td >下架商品:</td>
        <td class="vtop rowform"><ul>
            <li >
              <input class="radio" type="radio" name="postdb[hide]" value="1" {if $goods.hide==1}checked="checked"{/if}>
              &nbsp;是</li>
            <li>
              <input class="radio" type="radio" name="postdb[hide]" value="0" {if $goods.hide==0}checked="checked"{/if}>
              &nbsp;否</li>
          </ul></td>
        <td class="vtop tips2" >商品下架状态</td>
      </tr>
      

	<tr class="td_l noborder" >
        <td >是否包邮:</td>
        <td class="vtop rowform"><ul>
            <li >
              <input class="radio" type="radio" name="postdb[baoyou]" value="1" {if $goods.baoyou==1}checked="checked"{/if}>
              &nbsp;是</li>
            <li>
              <input class="radio" type="radio" name="postdb[baoyou]" value="0" {if !$goods.baoyou}checked="checked"{/if}>
              &nbsp;否</li>
          </ul></td>
        <td class="vtop tips2" ></td>
      </tr>
      
      <tr class="td_l noborder" >
        <td >店铺类型:</td>
        <td class="vtop rowform"><ul>
            <li >
              <input class="radio" type="radio" name="postdb[shop_type]" value="1" {if $goods.shop_type==1}checked="checked"{/if}>
              &nbsp;商城</li>
            <li>
              <input class="radio" type="radio" name="postdb[shop_type]" value="2" {if $goods.shop_type==2}checked="checked"{/if}>
              &nbsp;集市</li>
              <li>
              <input class="radio" type="radio" name="postdb[shop_type]" value="0" {if $goods.shop_type==0}checked="checked"{/if}>
              &nbsp;未知</li>
          </ul></td>
        <td class="vtop tips2" >卖家店铺类型</td>
      </tr>
      
      
      
       <tr class="noborder" >
        <td class="td_l">发布者用户名：</td>
        <td class="vtop rowform"><input type="txt" name="postdb[username]" value="{$goods.username}"  class="txt"/></td>
        <td class="vtop tips2" >发布者用户名</td>
      </tr>
      

      
<tr class="noborder" >
          <td class="td_l">seo keywords:</td>
          <td class="vtop rowform">
          <input name="postdb[keywords]" value="{$goods.keywords}" type="text" class="txt _in_keywords">
          </td>
          <td class="vtop tips2" >seo的关键字,便于搜索引擎收录,多个用,分格开</td>
        </tr>
        <tr class="noborder" >
          <td class="td_l">seo description:</td>
          <td class="vtop rowform"><textarea rows="3"  name="postdb[description]"  cols="50" class="tarea">{$goods.description}</textarea></td>
          <td class="vtop tips2" >seo的描述,便于搜索引擎收录,120字内</td>
        </tr>
      <tr class="noborder" >
        <td class="td_l">排序:</td>
        <td class="vtop rowform"><input  name="postdb[sort]" value="{$goods.sort}" type="text" class="txt w90" ></td>
        <td class="vtop tips2" >在列表页显示时,值越大越靠前,留空则默认发布时间降序</td>
      </tr>
      <tr class="noborder" >
        <td class="td_l">浏览次数:</td>
        <td class="vtop rowform"><input  name="postdb[views]" value="{$goods.views}" type="text" class="txt w90" ></td>
        <td class="vtop tips2" >当前商品的浏览次数</td>
      </tr>
        
     <tr class="noborder" >
        <td class="td_l">赞/喜欢:</td>
        <td class="vtop rowform"><input  name="postdb[like]" value="{$goods.like}" type="text" class="txt" ></td>
        <td class="vtop tips2" ></td>
      </tr>
      <tr class="noborder hide" >
        <td  class="td_l">商品ID:</td>
        <td class="vtop rowform"><input name="postdb[num_iid]" value="{$goods.num_iid}" type="text" class="txt"></td>
        <td class="vtop tips2" >采集的请不要更改</td>
      </tr>

      <tr class="noborder" >
        <td class="td_l">商品主图:</td>
        <td class="vtop rowform _hover_img">
        
<div class="upload_img" data-name="postdb[picurl]">
<input name="postdb[picurl]" value="{$goods.picurl}" type="text" class="txt pic_upload change_pic_main" >
{if $goods.picurl}
<a href=""  class="ajax_del" >删除</a>&nbsp;&nbsp;

{/if}
</div>
<a href="{$goods.picurl}" target="_blank" ><img src="{$goods.picurl}"  /></a>
<input type="file" name="file" class="J_TCajaUploadImg upload_file_btn" data-url="/upload.php" />
        
        </td>
        <td class="vtop tips2" >前台显示时,都将会显示这个为缩略图</td>
      </tr>
      
      <tr class="noborder" >
        <td class="td_l">商品副图:</td>
        <td class="vtop rowform goods_img2">
        {if $goods.images}
        {foreach from=$goods.images item=v1 key =k}
       <p class="_hover_img">
        <input  name="images[]" value="{$v1}" type="text" class="txt change_pic_value" >
        <a href="#" title="{$v1}" data-index="{$k}" class="change_pic red">选为主图</a>
        <a href="{$v1}" target="_blank" ><img src="{$v1}"  /></a>
       </p>
        {/foreach}
        {else}
        <input  name="images[]" value="" type="text" class="txt" >
        {/if}
          </td>
        <td class="vtop tips2" >一般可不用理会</td>
      </tr>
      
       <tr class="noborder hide" >
        <td class="td_l">店铺ID:</td>
        <td class="vtop rowform"><input  name="postdb[sid]" value="{$goods.sid}" type="text" class="txt" ></td>
        <td class="vtop tips2" >卖家的淘宝店铺ID</td>
      </tr>
      <tr class="noborder" >
        <td class="td_l">卖家昵称:</td>
        <td class="vtop rowform"><input  name="postdb[nick]" value="{$goods.nick}" type="text" class="txt" ></td>
        <td class="vtop tips2" ></td>
      </tr>
      <tr class="noborder" >
        <td class="td_l">商品链接地址:</td>
        <td class="vtop rowform"><input  name="postdb[url]" value="{if $goods.org_url}{$goods.org_url}{else}{$goods.url}{/if}" type="text" class="txt" ></td>
        <td class="vtop tips2" ></td>
      </tr>
      <tr class="noborder" >
        <td class="td_l">商品原价:</td>
        <td class="vtop rowform"><input  name="postdb[price]" value="{$goods.price}" type="text" class="txt" ></td>
        <td class="vtop tips2" >最多一位小数</td>
      </tr>
      <tr class="noborder" >
        <td class="td_l">商品库存数量:</td>
        <td class="vtop rowform"><input  name="postdb[num]" value="{$goods.num}" type="text" class="txt" ></td>
        <td class="vtop tips2" >不知道可不填</td>
      </tr>
       <tr class="noborder" >
        <td class="td_l">商品近30天销量:</td>
        <td class="vtop rowform"><input  name="postdb[sum]" value="{$goods.sum}" type="text" class="txt" ></td>
        <td class="vtop tips2" >不知道可不填</td>
      </tr>
      <tr class="noborder" >
        <td class="td_l">上线时间段:</td>
        <td class="vtop rowform"><input  name="postdb[start_time]" value="{$goods.start_time}" type="text" class="txt _dateline" ></td>
        <td class="vtop tips2" >未到时间,此商品不会在首页及列表页中显示,0或空则不限时间</td>
      </tr>
      <tr class="noborder" >
        <td class="td_l">下线时间段:</td>
        <td class="vtop rowform"><input  name="postdb[end_time]" value="{$goods.end_time}" type="text" class="txt _dateline" ></td>
        <td class="vtop tips2" >已到时间,则不会显示,0或空则不限时间</td>
      </tr>
      <tr class="noborder" >
        <td class="td_l">商品所在地:</td>
        <td class="vtop rowform">
         <input  name="postdb[state]" value="{$goods.state}" type="text" class="txt w90" >
         省&nbsp;
        <input  name="postdb[city]" value="{$goods.city}" type="text" class="txt w90" >          
          市 </td>
        <td class="vtop tips2" >发货城市</td>
      </tr>
      
      <tr class="noborder" >
        <td class="td_l">商品现价:</td>
        <td class="vtop rowform"><input  name="postdb[yh_price]" value="{$goods.yh_price}" type="text" class="txt " > 元</td>
        <td class="vtop tips2" >优惠价,最多一位小数</td>
      </tr>
      <tr class="noborder" >
          <td  class="td_l">佣金比例:</td>
          <td class="vtop rowform">
          <input name="postdb[bili]" value="{$goods.bili}" type="text"  class="txt w90"> %{if $goods.yongjin}&nbsp;&nbsp;= &nbsp;{$goods.yongjin} 元{/if}</td>
          <td class="vtop tips2" >佣金比例,如果自动查询的是为-1,则说明当前商品不是淘宝客商品,无佣金的</td>
	</tr>
    
     <tr class="noborder hide" >
          <td  class="td_l">open_iid:</td>
          <td class="vtop rowform">
          <input name="postdb[open_iid]" value="{$goods.open_iid}" type="text"  class="txt"></td>
          <td class="vtop tips2" >在百川上才能获取到,APP中调用淘客组件所需的参数</td>
	</tr>
    
    
    <tr class="noborder" >
            <td class="td_l">推荐理由:</td>
            <td class="vtop rowform">
            <textarea rows="6" name="postdb[ly]" cols="70" class="textarea _keywords">{$goods.ly}</textarea>
            </td>
            <td class="vtop tips2">商品推荐理由,250字以内,可空</td>
    </tr>
    
    
    
    
    <tr>
    	<td colspan="3">&nbsp;</td>
    </tr>
    
      

    
    

{if $goods.post >0}
	
        <tr class="noborder" >
                <td  class="td_l">联系人:</td>
                <td class="vtop rowform"><input name="postdb[apply_user]" value="{$goods.apply_user}" type="text" class="txt"></td>
                <td class="vtop tips2" >一般不必填写,商家报名时才会添加</td>
        </tr>
        
        <tr class="noborder" >
                <td  class="td_l">旺旺:</td>
                <td class="vtop rowform"><input name="postdb[apply_wangwang]" value="{$goods.apply_wangwang}" type="text" class="txt"></td>
                <td class="vtop tips2" >一般不必填写,商家报名时才会添加</td>
              </tr>
        <tr class="noborder" >
                <td  class="td_l">联系电话:</td>
                <td class="vtop rowform"><input name="postdb[apply_phone]" value="{$goods.apply_phone}" type="text" class="txt"></td>
                <td class="vtop tips2" >一般不必填写,商家报名时才会添加</td>
              </tr>
      <tr class="noborder" >
                <td  class="td_l">联系qq:</td>
                <td class="vtop rowform"><input name="postdb[apply_qq]" value="{$goods.apply_qq}" type="text" class="txt"></td>
                <td class="vtop tips2" >一般不必填写,商家报名时才会添加</td>
              </tr>

        <tr class="noborder" >
                <td class="td_l">审核拒绝或留言信息:</td>
                <td class="vtop rowform">
                <textarea rows="6" name="postdb[return_msg]" cols="70" class="ks-editor-textarea" id = "web_editor">{$goods.return_msg}</textarea>
                </td>
                <td class="vtop tips2">如果不审核,请填写拒绝信息,也可留言其它信息</td>
        </tr>
        
         <tr class="noborder" >
            <td >是否审核:</td>
            <td class="vtop rowform">
            <ul>
                <li >
                  <input class="radio" type="radio" name="postdb[check]" value="1" {if $goods.check==1}checked="checked"{/if}>
                  &nbsp;通过审核</li>
                
                   <li ><input class="radio" type="radio" name="postdb[check]" value="2" {if $goods.check==2}checked="checked"{/if}>
                  &nbsp;不通过</li>
                <li>
                  <input class="radio" type="radio" name="postdb[check]" value="0" {if $goods.check==0}checked="checked"{/if}>
                  &nbsp;未审核</li>

            {if $bm_status_text}
                  {foreach from=$bm_status_text item=v}
                   <li > <input class="radio" type="radio" name="postdb[check]" value="{$v.status}" {if $goods.check==$v.status}checked="checked"{/if}> &nbsp;{$v.name}</li>
                  {/foreach}
              {/if}

              </ul></td>
            <td class="vtop tips2" >只能审核了才会在前台显示</td>
          </tr>
{else}
 <input type="hidden" name="postdb[check]" value="1">

{/if}
{if $_G.setting.get_message==1}
      <tr class="noborder" >
        <td class="td_l">商品详细描述:</td>
        <td class="vtop rowform" colspan="3">
<div class="kg_editorContainer"  data-config='{
"width":"900","height":"400"
        }'>
        <textarea rows="6" name="postdb[message]" cols="70" class="ks-editor-textarea" id = "web_editor">{$goods.message}</textarea></div>
        </td>
        <td>&nbsp;</td>
      </tr>
{/if}
      <tr>
      <td>&nbsp;</td>
        <td colspan="5"><div class="fixsel">
            <input type="submit" class="btn submit_btn"   name="onsubmit" title="按 Enter 键可随时提交您的修改" value="提交" >
          </div></td>
      </tr>
{if $goods.aid}
<input type="hidden" name="aid" value="{$goods.aid}" />
{/if}
<input type="hidden" name="m" value="{$CURMODULE}" />
<input type="hidden" name="a" value="{$CURACTION}" />

    </tbody>

  </table>
      </form>
  </div>
{include file='../common_admin/right_bar.php'} 
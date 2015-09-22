{include file='../common_admin/left_bar.php'}
<form enctype="multipart/form-data" name="channel_add" method="post">
  
  <div class="table_main">
    <table class="tb tb2 nobdb">
      <tbody>
      
      <tr class="noborder" >
          <td class="td_l">seo title:</td>
          <td class="vtop rowform">
          <input name="postdb[seo_title]" value="{$_G.setting.seo_title}" type="text" class="txt">
          </td>
          <td class="vtop tips2" >站点首页的title,显示在网站顶部标题中..</td>
        </tr>
        
 		<tr class="noborder" >
          <td class="td_l">seo keywords:</td>
          <td class="vtop rowform">
          <input name="postdb[seo_keywords]" value="{$_G.setting.seo_keywords}" type="text" class="txt">
          </td>
          <td class="vtop tips2" >站点首页的seo的关键字,便于搜索引擎收录,多个用,分格开</td>
        </tr>
        <tr class="noborder" >
          <td class="td_l">seo description:</td>
          <td class="vtop rowform"><textarea rows="3"  name="postdb[seo_description]"  cols="50" class="tarea">{$_G.setting.seo_description}</textarea></td>
          <td class="vtop tips2" >站点首页的seo的描述,便于搜索引擎收录,120字内</td>
        </tr>

 <tr class="noborder">
          <td class="td_l">长尾关键字:</td>
          <td class="vtop rowform">
               <input name="postdb[long_keywords]" value="{$_G.setting.long_keywords}" type="text" class="txt">
            </td>
          <td class="vtop tips2">在标题,关键字,描述后面,自动加上 要优化的关键字,留空代码不添加长尾</td>
</tr>
        
        
{if $SYSTEM_TYPE>3}
         <tr class="noborder">
          <td class="td_l">开启邮件订阅:</td>
          <td class="vtop rowform">   <input name="postdb[rss_task]" value="{$_G.setting.rss_task}" type="text" class="txt"></td>
          <td class="vtop tips2">
          qq邮箱订阅, <a href="http://open.mail.qq.com/cgi-bin/dy_template?t=dy_iframe&sid=ZQ2heYw7x9n6BgNX">查看申请地址</a>.如有开通,请埴官订阅的链接.
          如果未开通请留空
          </td>
        </tr>   
{/if}


      <tr class="noborder">
          <td class="td_l">开启伪静态:</td>
          <td class="vtop rowform"><input class="radio" type="radio" name="postdb[rewrite]" value="1" {if $_G.setting.rewrite==1}checked="checked"{/if}>
            &nbsp;是
            <input class="radio" type="radio" name="postdb[rewrite]" value="0" {if $_G.setting.rewrite==0}checked="checked"{/if}>
            &nbsp;否 </td>
          <td class="vtop tips2">需要空间支持rewrite,否则页面打不开或报错</td>
        </tr>

      <tr class="noborder">
          <td class="td_l">登录关闭伪静态:</td>
          <td class="vtop rowform"><input class="radio" type="radio" name="postdb[login_rewrite]" value="1" {if $_G.setting.login_rewrite==1}checked="checked"{/if}>
            &nbsp;是
            <input class="radio" type="radio" name="postdb[login_rewrite]" value="0" {if $_G.setting.login_rewrite==0}checked="checked"{/if}>
            &nbsp;否 </td>
          <td class="vtop tips2">会员登录后是否关闭伪静态,关闭后可提升效率</td>
        </tr>

      <tr class="noborder">
          <td class="td_l">伪静态类型:</td>
          <td class="vtop rowform">

              <input class="radio" type="radio" name="postdb[rewrite_mode]" value="0" {if $_G.setting.rewrite_mode =="0" }checked="checked"{/if}>
              &nbsp;模式1
              <input class="radio" type="radio" name="postdb[rewrite_mode]" value="1" {if $_G.setting.rewrite_mode == "1" }checked="checked"{/if}>
              &nbsp;模式2 
               <input class="radio" type="radio" name="postdb[rewrite_mode]" value="2" {if $_G.setting.rewrite_mode == "2" }checked="checked"{/if}>
              &nbsp;模式3 
              </td>
          <td class="vtop tips2">

              <p>模式1 :  网址/m-img-a-main.html或 或 /m-img-id-1885.html</p>
              <p>模式2 :  网址/m/img/a/main.html 或 /m/img/id/1885.html</p>
			  <p>模式3 :  虚拟目录模式 /img/list/ 或  /img/1885.html <span class="red">推荐</span></p>
              <p class="red">修改好后请不要再修改,不然搜索引擎收录后会打不开</p>
          </td>
      </tr>




        <tr class="noborder">
          <td class="td_l">是否自动获取关键字:</td>
          <td class="vtop rowform"><input class="radio" type="radio" name="postdb[auto_keywords]" value="1" {if $_G.setting.auto_keywords==1}checked="checked"{/if}>
            &nbsp;是
            <input class="radio" type="radio" name="postdb[auto_keywords]" value="0" {if $_G.setting.auto_keywords==0}checked="checked"{/if}>
            &nbsp;否 </td>
          <td class="vtop tips2">开启后,在发布商品和添加文章时如果没有填写关键字,则可以自动根据标题获取相关关键字,利于SEO.</td>
        </tr>   

        <tr>
          <td>&nbsp;</td>
          <td colspan="2"><div class="fixsel">
              <input type="submit" class="btn submit_btn"  name="onsubmit" value="提交">
            </div></td>
        </tr>
      </tbody>
    </table>
  </div>
<input type="hidden" name="m" value="{$CURMODULE}" />
<input type="hidden" name="a" value="{$CURACTION}" />
</form>
{include file='../common_admin/right_bar.php'} 
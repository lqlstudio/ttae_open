{include file='../common_admin/left_bar.php'}
<form enctype="multipart/form-data" name="channel_add" method="post">
    <div class="table_top">app版本设置</div>
  <div class="table_main">
    <table class="tb tb2 nobdb">
      <tbody>
      
      
      
         <tr class="noborder" >
          <td class="td_l">App链接形式:</td>
          <td class="vtop rowform"><input class="radio" type="radio" name="postdb[app_url_type]" value="0" {if $_G.setting.app_url_type==0}checked="checked"{/if}>
            &nbsp;卖家原始链接
            <input class="radio" type="radio" name="postdb[app_url_type]" value="1" {if $_G.setting.app_url_type==1}checked="checked"{/if}>
            &nbsp;淘宝客链接
            
             <input class="radio" type="radio" name="postdb[app_url_type]" value="2" {if $_G.setting.app_url_type==2}checked="checked"{/if}>
            &nbsp;百川链接
             </td>
          <td class="vtop tips2">
          app的商品链接形式,卖家原始链接速度较快,但无佣金,直接跳转到卖家店中.          
          <p>淘客链接有佣金,但打开较慢且跳转到爱淘宝</p>
          <p>如果站点是百川应用,并且有获取open_iid,则直接会使用百川打开</p>
          </td>
        </tr>
      
         <tr class="noborder">
          <td class="td_l">android最新版本号:</td>
          <td class="vtop rowform"><input name="postdb[app_version_android]" value="{$_G.setting.app_version_android}" type="text" class="txt"></td>
           <td class="vtop tips2">android最新版本号,用户连接时会检查是否是最新版,必须两个点,如1.0.5 ,2.5.5 ,3.12 等</td>
        </tr>
        
		 <tr class="noborder">
          <td class="td_l">android下载地址:</td>
          <td class="vtop rowform"><input name="postdb[app_andorid_url]" value="{$_G.setting.app_andorid_url}" type="text" class="txt"></td>
          <td class="vtop tips2">android下载地址</td>
        </tr>
      
         <tr class="noborder">
          <td class="td_l">android版本说明:</td>
          <td class="vtop rowform"><textarea rows="6" name="postdb[app_desc_android]" cols="70" class="tarea">{$_G.setting.app_desc_android}</textarea></td>
          <td class="vtop tips2">android版本说明</td>
        </tr>
        
        
        <tr class="noborder">
          <td class="td_l">iphone最新版本号:</td>
          <td class="vtop rowform"><input name="postdb[app_version_iphone]" value="{$_G.setting.app_version_iphone}" type="text" class="txt"></td>
          <td class="vtop tips2">IOS当前版本号,用户连接时会检查是否是最新版,必须两个点,如1.0.5 ,2.5.5 ,3.12 等</td>
        </tr>
        <tr class="noborder">
          <td class="td_l">iphone端下载地址:</td>
          <td class="vtop rowform"><input name="postdb[app_iphone_url]" value="{$_G.setting.app_iphone_url}" type="text" class="txt"></td>
          <td class="vtop tips2">ISO端下载地址</td>
        </tr>

        <tr class="noborder">
          <td class="td_l">iphone版本说明:</td>
          <td class="vtop rowform"><textarea rows="6" name="postdb[app_desc_iphone]" cols="70" class="tarea">{$_G.setting.app_desc_iphone}</textarea></td>
          <td class="vtop tips2">IOS版本说明</td>
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
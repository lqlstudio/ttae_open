

{if $tag_kw}
<div class="area wp" style="margin-top:15px;">
<div class="footer cl">
    <div class="tags">
     <li><a href="{$_G.siteurl}" title="{$_G.setting.title}">{$_G.setting.title}</a></li>

	{foreach from=$tag_kw item=v}
      <li><a href="{$URL}tag/{$v.tagid}" target="_blank" title="{$v.name}">{$v.name}</a></li>
	{/foreach}
    </div>
  </div>
</div>
{/if}

{if $tag_shop}
<div class="area wp">
<div class="footer cl">
    <div class="tags">
    <li><a href="{$_G.siteurl}" title="{$_G.setting.title}">{$_G.setting.title}</a></li>
	{foreach from=$tag_shop item=v}
      <li><a href="{$URL}shop/{$v.seller_id}" title="{$v.name}"  target="_blank" >{$v.shop_title}</a></li>
	{/foreach}
    </div>
  </div>
</div>
{/if}
{if $tag_link}
<div class="area wp">
<div class="footer cl">
    <div class="tags">
	{foreach from=$tag_link item=v}
      <li><a href="{$v.url}" title="{$v.name}"  target="_blank" >{$v.name}</a></li>
	{/foreach}
    </div>
  </div>
</div>
{/if}
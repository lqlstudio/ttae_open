<!doctype html>
<html  class="taeapp {if $TAE==1}tae{else}web{/if} _{$CM}_{$CA}">
<head>
<meta charset="{$_G.charset}">
<title>{if $_G.title}{$_G.title}{else}{$_G.setting.title}{/if}</title>
<link href="/favicon.ico" type="image/x-icon" rel=icon />
<meta name="author" content="uz-system.com 7x24 service d_cms@qq.om"/>
<meta name="system_info" content="by uz-system version {$_G.version}"/>
<meta name="keywords" content="{$_G.keywords}"/>
<meta name="description" content="{$_G.description}"/>
{if !$_G.cpmsg}
<meta name="tk" content="{$_G.setting.pid}|{$_G.setting.taodianjing_url}|1"/>
<meta name="get" content="{$query_text}"/>
<meta name="set" content="{$global_str}"/>
<script type="text/javascript" src="/assets/global/js/jquery-1.8.3.min.js"></script> 
<!-- <script type="text/javascript" src="/assets/global/js/jquery.easing.min.js"></script>  -->
<script type="text/javascript" src="http://a.alimama.cn/tkapi.js"></script>
<script type="text/javascript" src="/assets/global/js/global.js"></script>
{/if}
<link rel="stylesheet" type="text/css" href="/assets/global/css/global.css" media="all" />
</head>
<body>
<div class="uz_system"></div>
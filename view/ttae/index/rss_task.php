<!doctype html>
<html>
<head>
<meta charset="gb2312">
<title>订阅</title>
</head>
<body>
<div style="display:none;">
<form action="http://list.qq.com/cgi-bin/qf_compose_send"  method="post" id="rss_task">
<input name="t" value="qf_booked_feedback" type="hidden">
<input name="id" value="{$id}" type="hidden">
<input id="to" name="to" class="rsstxt "  value="{$email}" type="text">
<input value="订阅" type="submit">
</form>
</div>
<script type="text/javascript">
document.getElementById("rss_task").submit();
</script>
</body>
</html>
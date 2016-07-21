<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <title>js跨域测试</title>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <script src="jquery-1.12.1.min.js" type="text/javascript"></script>
	<script type="text/javascript">
		function OnLoad(){
			window.frames[0].postMessage('3','http://dog.cn:8753/postMessage2.php');
		}
		
		window.addEventListener('message',function(e){
			alert(e.data);
		},false);
	</script>
</head>
<body>
	<iframe style="display:none" onload="OnLoad()" src="http://dog.cn:8753/postMessage2.php"></iframe>
</body>
</html>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <title>js跨域测试</title>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <script src="jquery-1.12.1.min.js" type="text/javascript"></script>
	<!-- jsonp 1 -->
	<!--
	<script type="text/javascript">
		function jsonp (res) {
			console.log(res);
		}
	</script>
	<script src="http://dog.cn:8753/jsonp2.php?callback_function=jsonp" type="text/javascript"></script>
	-->
	
	<!-- jsonp 2 -->
	<script type="text/javascript">
		$.getJSON('http://dog.cn:8753/jsonp2.php?callback_function=?',function (res) {
			console.log(res);
		});
	</script>
</head>
<body>
</body>
</html>
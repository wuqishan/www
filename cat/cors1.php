<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <title>js跨域测试</title>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <script src="jquery-1.12.1.min.js" type="text/javascript"></script>
	<script type="text/javascript">
		// 浏览器兼容，ie8+，移动端可以考虑使用
		$(function() {
			$("#button").click(function() {
				$.ajax({
					type: "post",
					url: "http://dog.cn:8753/cors2.php",
					dataType: "json",
					data: {},
					success: function (res) {
						console.log(res);
					},
					error: function (err) {
						console.log(err);
					}
				});
			});
		});
	</script>
</head>
<body>
	<input type="button" id="button" value="测 试">
</body>
</html>
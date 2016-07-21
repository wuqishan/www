<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <title>js跨域测试</title>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <script src="jquery-1.12.1.min.js" type="text/javascript"></script>
	<script type="text/javascript">
		
		function test_iframe() {
			var form = $();
			
			$("#myiframe").remove();
			$("#myform").remove();
			$("body").append('<iframe id="myiframe" name="myiframe" style="display:none"></iframe>');
			$("body").append('<form id="myform" method="post" target="myiframe" style="display:none" action="http://dog.cn:8753/iframe-form2.php"><input name="name" value="wells"></form>');
			
			//$("#myiframe").contents().find('body').html(form);//将form表单塞入iframe;
			$("#myform").submit();//提交数据
			
			
			var str = $("#myiframe").contents().find("body").html();
			console.log(str);
		}
		
		
		$(function() {
			$("#button").click(function() {
				test_iframe();
			});
		});
		
		function callback_function(res) {
			alert(res);
		}
	</script>
</head>
<body>
	<input id="button" type="button" value="测 试">
	
	<script>
		// 获取当前秒数
		var d = new Date();
		document.write(d.getSeconds());
	</script>
</body>
</html>
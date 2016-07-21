<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <title>js跨域测试</title>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<script type="text/javascript">
		window.addEventListener('message',function(e){
			if(e.source!=window.parent) return;
			//console.log(e)
			var data = '';
			if (e.data == '1') {
				data = '1111111111111';
			} else if (e.data == '2') {
				data = '2222222222222';
			} else {
				data = 'error';
			}
			window.parent.postMessage(data,'http://cat.cn:8753/postMessage1.php');
		},false);
	</script>
</head>
<body>
</body>
</html>
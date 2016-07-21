<?php

$data = '{"name":"abc","id":100}';

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <title>js跨域测试</title>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <script src="jquery-1.12.1.min.js" type="text/javascript"></script>
	<script type="text/javascript">
		window.name = '<?php echo $data; ?>';
		setTimeout(function() {
			window.location = 'http://dog.cn:8753/window.name2.php';
		}, 3000)
	</script>
</head>
<body>
</body>
</html>
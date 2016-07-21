<?php
$name = $_GET['name'];
?>
<html>
	<head>
		<title></title>
		<script>
			parent.callback_function("name is <?php echo $name; ?>");
		</script>
	</head>
	<body>

	</body>
</html>
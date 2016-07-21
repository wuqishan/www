<?php
header("Access-Control-Allow-Origin: http://cat.cn:8753");

$arr = [
			['id' => 1, 'name' => 'aaa'],
			['id' => 2, 'name' => 'bbb'],
			['id' => 3, 'name' => 'ccc']
		];

exit(json_encode($arr));







?>
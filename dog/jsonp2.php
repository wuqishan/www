<?php

$callback = $_GET['callback_function'];

$data = [
			['id' => 1, 'name' => 'aaa'],
			['id' => 2, 'name' => 'bbb']
		];

exit($callback.'('.json_encode($data).')');




?>
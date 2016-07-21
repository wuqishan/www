<?php

// php 各种后台处理
//.....

$name = $_POST['name'];


// 跳走
header ("location:http://cat.cn:8753/iframe-form1-callback.php?name=".$name);


?>

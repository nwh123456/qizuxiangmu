<?php
$fp = fsockopen('localhost',80,$errno,$errmsg,10);

if(!fp){
	echo $errmsg; die;
}
//拼接请求http报文
$str= <<<ABC
GET /


ABC;
?>
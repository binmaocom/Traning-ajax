<?php
var_dump($_GET);
$result = array();
$result[] = ( 'content test');
$result[] = ( 'content test1');
echo json_encode($result);
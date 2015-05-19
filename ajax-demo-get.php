<?php
sleep(6);
$get_value[] = $_GET['variable1'];
$get_value[] = $_GET['variable2'];
echo json_encode($get_value);
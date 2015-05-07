<?php

$db = new Db();

$conn = $db->connect();
//print_r($conn);

$res = $db->query('SELECT * FROM `table`',$conn);
$row = $res->fetch_assoc();


?>
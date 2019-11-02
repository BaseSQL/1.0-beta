<?php
require 'BaseConn.php';

$bsql=new BaseConn;

//-------------------------------------------

$bsql->host = 'localhost';
$bsql->host_username = 'root';
$bsql->host_password = 'demo';
$bsql->host_db = 'demo';

//-------------------------------------------

$conn = mysqli_connect($bsql->isDB('host'),$bsql->isDB('host_username'),$bsql->isDB('host_password'),$bsql->isDB('host_db'));
?>
<?php
include_once('Mysqldump/Mysqldump.php');
include('smtp/PHPMailerAutoload.php');
$dump = new Ifsnop\Mysqldump\Mysqldump('mysql:host=localhost;dbname=trabweb', 'root', '');
$f=date('d-m-Y');
$dump->start("sql_dump/$f.sql"); 


?>
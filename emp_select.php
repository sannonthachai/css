<?php
$sql="SELECT * FROM employee1 WHERE id = '$id'";
require("mysql/connect.php");
$result = mysql_query($sql);
$record = mysql_fetch_array($result);

$nname=$record[0];
$sex=$record[1];
$age=$record[2];
$pnumber=$record[3];
$email=$record[4];
$id=$record[5];
$pass=$record[6];

require("mysql/unconn.php");
?>
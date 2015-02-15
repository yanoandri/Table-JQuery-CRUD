<?php

$sid = $_POST['sid'];
$account_number = $_POST['account_number'];
$first_name = $_POST['first_name'];
$middle_name = $_POST['middle_name'];
$last_name = $_POST['last_name'];

$link = mysql_connect('localhost','root','');

mysql_select_db('investor_poc',$link);

$sql = "UPDATE tb_investor SET sid = '$sid', accNo = '$account_number', fName = '$first_name', mName = '$middle_name', lName = '$last_name' WHERE siswa_id = '$siswa_id'";
$result = mysql_query($sql,$link);

mysql_close($link);

header('Location: tampil2.php');

?>
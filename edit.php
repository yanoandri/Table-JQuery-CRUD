<?php

$sid = $_POST['SID'];
$account_number = $_POST['account_number'];
$first_name = $_POST['first_name'];
$middle_name = $_POST['middle_name'];
$last_name = $_POST['last_name'];

$link = mysql_connect('localhost','root','');

mysql_select_db('investor_poc',$link);

$sql = "UPDATE tb_investor SET fName = '$first_name', mName = '$middle_name', lName = '$last_name' WHERE sid = '$sid'";
$result = mysql_query($sql,$link);

mysql_close($link);

echo '<script type="text/javascript">alert("'.$sid.' telah diedit!"); window.location = "index.php";</script>'

?>
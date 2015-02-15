<?php

$link = mysql_connect('localhost','root','');

mysql_select_db('investor_poc',$link);

$sql = "SELECT * FROM tb_investor";
$result = mysql_query($sql,$link);

while ($row = mysql_fetch_array($result))
{
$sid = $row['sid'];
$acc_no = $row['accNo'];
$nama = $row['fName']; 
echo "$sid $acc_no $nama";
echo "<a href= delete.php?sid=$sid> hapus </a>";
echo "<a href= editform.php?sid=$sid> ubah </a>";
echo "<br>";
}

mysql_close($link);
?>
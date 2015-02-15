<?php
$siswa_id = $_GET['siswa_id'];
$link = mysql_connect('localhost','root','');
mysql_select_db('kursus',$link);
$sql = "DELETE FROM siswa WHERE siswa_id = $siswa_id"; 
$result = mysql_query($sql,$link);
mysql_close($link);
echo "deleted!";
?>
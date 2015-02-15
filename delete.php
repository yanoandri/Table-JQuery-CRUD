<?php
$sid = $_GET['sid'];
$link = mysql_connect('localhost','root','');
mysql_select_db('investor_poc',$link);
$sql = "DELETE FROM tb_investor WHERE sid = '$sid'"; 
$result = mysql_query($sql,$link) or die(mysql_error());
mysql_close($link);
echo '<script type="text/javascript">alert("'.$sid.' telah dihapus!"); window.location = "index.php";</script>'
?>

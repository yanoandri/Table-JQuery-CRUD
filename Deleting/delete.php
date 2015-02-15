<?
$link = mysql_connect('localhost','root','');
mysql_select_db('investor_poc',$link);
$sql = "DELETE FROM tb_investor WHERE sid = 1";
$result = mysql_query($sql,$link);
mysql_close($link);
echo "deleted";
?>
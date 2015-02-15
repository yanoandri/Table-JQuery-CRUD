<?php
$link = mysql_connect("localhost", "root", "");
mysql_select_db("kursus", $link);
$result = mysql_query("SELECT * FROM Siswa", $link);
$num_rows = mysql_num_rows($result);
echo "Jumlah baris record hasil query = $num_rows";
?> 
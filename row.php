<?php
$link = mysql_connect("localhost", "root", "");
mysql_select_db("kursus", $link);
$result = mysql_query("SELECT siswa_id, siswa_nama FROM Siswa",
$link);
while ($row = mysql_fetch_row($result)) {
echo "siswa_id=" . $row[0] . " siswa_nama=" . $row[1] . "</br>";
}
?> 
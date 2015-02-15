<?php
$link = mysql_connect("localhost", "root", "");
mysql_select_db("kursus", $link);
$query = "SELECT siswa_nama, Angkatan FROM siswa";
if ($_REQUEST['kolom'] == "siswa_nama" || $_REQUEST['kolom']== "Angkatan") {
	$query = $query . " ORDER BY " . $_REQUEST['kolom']. " ASC";
}
$result = mysql_query($query, $link);
?>
<table border="1">
<tr>
<th><a href="sorting.php?kolom=siswa_nama">NAMA</a></th>
<th><a href="sorting.php?kolom=Angkatan">Angkatan</a></th>
</tr>
<?php
while ($row = mysql_fetch_array($result, MYSQL_ASSOC)) {
echo "<tr>";
echo "<td>" . $row["siswa_nama"] . "</td>";
echo "<td>" . $row["Angkatan"] . "</td>";
echo "</tr>";
}
?>
</table>
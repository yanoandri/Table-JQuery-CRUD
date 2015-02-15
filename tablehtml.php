<?php
$link = mysql_connect("localhost", "root", "");
mysql_select_db("kursus", $link);
$result = mysql_query("SELECT siswa_id, siswa_nama FROM Siswa", $link);
?>
<table border="1">
<tr> <td>ID</td> <td>NAMA</td> </tr>
<?php
while ($row = mysql_fetch_array($result, MYSQL_ASSOC)) {
echo "<tr>";
echo "<td>" . $row["id"] . "</td>";
echo "<td>" . $row["nama"] . "</td>";
echo "</tr>";
}
?>
</table>

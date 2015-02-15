<?php
$link = mysql_connect('localhost','root','');
mysql_select_db('kursus',$link);
$sql = "SELECT * FROM siswa";
$result = mysql_query($sql,$link);
while ($row = mysql_fetch_array($result))
{
$siswa_id = $row['siswa_id'];
$siswa_nama = $row['siswa_nama'];
$siswa_alamat = $row['siswa_alamat']; 
$Angkatan = $row['Angkatan']; 
echo "$siswa_id $siswa_nama ";
echo "<a href=tampil.php?siswa_id=$siswa_id> hapus </a>";
echo "<br>";
}
mysql_close($link);
?>
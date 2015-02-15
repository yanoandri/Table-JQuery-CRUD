<?php
$sid = $_GET['sid'];
$link = mysql_connect('localhost','root','');
mysql_select_db('investor_poc',$link);
$sql = "SELECT * FROM tb_investor WHERE sid = $sid";
$result = mysql_query($sql,$link);
$row = mysql_fetch_array($result);
?>
<!-- ini ke bawah bagian menampilkan data lama dan meminta input
data baru -->
<p>ID:
<input name="sid" type="text" id="sid" value="<?php echo
$row['sid']; ?>" size="24" maxlength="255">
</p>
<p>Account Number:
<input name="account_number" type="text" id="account_number" value="<?php echo
$row['accNo']; ?>" size="24" maxlength="255">
</p>
<p>First Name:
<input name="first_name" type="text" id="first_name" value="<?php echo 
$row['fName']; ?>" size="32" maxlength="255">
</p>
<p>Middle Name:
<input name="middle_name" type="text" id="middle_name" value="<?php echo $row['mName']; ?>" size="32" maxlength="255">
</p>
<p>Last Name:
<textarea name="last_name" size="32" maxlength="255"
id="last_name"><?php echo $row['lName']; ?>
</textarea>
</p>
<p>
<input type="submit" name="Submit" value="Submit">
<input type="reset" name="Submit2" value="Reset">
</p>
</form>
<?
//biasanya, langkah #5 ada di baris terakhir
mysql_close($link);
?>
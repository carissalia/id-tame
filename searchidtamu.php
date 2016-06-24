<?php
include "koneksiidtamu.php";
$id_tamu=$_POST['id_tamu'];
$q= "select * from bukutamu where id_tamu like '%$id_tamu%'";
$result=mysql_query($q);
echo "<center>";
echo "<h2> Hasil Searching </h2>";
echo "<table border='1' cellpadding='5' cellspacing='8'>";
echo "<tr bgcolor='orange'>
<td>ID Tamu</td>
<td>Nama</td>
<td>E-mail</td>
</tr>";
while ($data=mysql_fetch_array($result))
{
	echo "
	<tr>
	<td> ".$data['id_tamu']."</td>
	<td> ".$data['nama']."</td>
	<td> ".$data['email']."</td>
	</tr> ";
}
	echo "</table>";


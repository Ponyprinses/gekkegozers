<?php

try
	{
		$pdo = new PDO("mysql:host=localhost;dbname=database;","root","");
	}
	catch(PDOException $e)
	{
		echo $e->getMessage();
	}
$parameters = array();
$sth = $pdo->prepare('select * from tabel');
$sth->execute($parameters);
?>
<table>
	<tr>
		<th>x:</th>
		<th>y</th>
		<th>z</th>
		<th></th>
	</tr>
<?php
while($row = $sth->fetch())
{
	?>
	<tr>
		<td><?php echo $row["x"];?></td>
		<td><?php echo $row["y"];?></td>
		<td><?= $row["z"];?></td>
		<td><a href="updatepagina?ID=<?php echo $row["ID"]?>">Aanpassen</a></td>
	
	</tr>
	<?php
}
echo "</table>";
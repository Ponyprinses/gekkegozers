
<?php
$Message = NULL;
//dit gebeurd alleen wanneer de knop van het formulier is ingedrukt
if(isset($_POST["Send"]))
{
	$parameters = array(':' => $_GET[''],
						':' => $_POST[''],
						':' => $_POST[''] ,
						':' => $_POST['']);

	$sth = $pdo->prepare('UPDATE tabel SET x=:x, y=:y WHERE ID = :ID');

	$sth->execute($parameters);

	$Message = "";
}
//dit gebeurd altijd
$parameters = array("ID" => $_GET["ID"]);
$sth = $pdo->prepare('select * from snacks WHERE ID=:ID');

$sth->execute($parameters);

$row = $sth->fetch();
?>
<form method="post" action="">
<input type="text" name="x" value="<?php echo $row['x'];?>" /><br />
<textarea name="y" rows="5" cols="45"><?php echo $row['y'];?></textarea><br />
<input type="submit" name="Send" value="Aanpassen!" /><br />
</form>
<?php
echo $Message;
?>


	

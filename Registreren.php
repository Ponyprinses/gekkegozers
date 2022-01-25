<?PHP
if(isset($_POST["Send"]))
{
	//maak unieke salt
	$Salt = hash('sha512', uniqid(mt_rand(1, mt_getrandmax()), true));
	//hash het paswoord met de Salt
	$Password = hash('sha512', $_POST['Password'] . $Salt);

	$parameters = array(':x' => $_POST["x"],
	// voeg meer lines toe als nodig
);

	$sth = $pdo->prepare('INSERT INTO tabelnaam (x,) VALUES (:x,)');

	$sth->execute($parameters);

	header('Refresh:2;URL=inloggen.php');

}

?>




<h1>Registreren</h1>
	<form name="Registratie" action="" method="post">
		<label for="x">Naam:</label>
		<!-- voeg meer toe als nodig -->
		<input type="submit" name="Send" value="Registreer!" />
	</form>


<?php
$Message = NULL;
if(isset($_POST["Send"]))
{	$parameters = array(":gebruikersnaam" => $_POST["gebruikersnaam"]);
	$sth = $pdo->prepare('SELECT * FROM tabel WHERE gebruikersnaam = :gebruikersnaam');
	$sth->execute($parameters);	
	// controleren of de username voorkomt in de DB
	if ($sth->rowCount() == 1) 
	{	// Variabelen inlezen uit query
		$row = $sth->fetch();
			// paswoord hashen met de unieke Salt uit de DB
			$password = hash('sha512', $_POST['Password'] . $row['Salt']);
			// controleren of het paswoord overeenkomt met het paswoord uit de DB
			if ($row['Wachtwoord'] == $password) 
			{
				// vraagt de user agent op (later nodig)
				$user_browser = $_SERVER['HTTP_USER_AGENT'];
				$_SESSION['user_id'] = $row['ID'];
				$_SESSION['email'] = $row['Email'];
				$_SESSION['level'] = $row['Level'];
				$_SESSION['login_string'] = hash('sha512',
						  $password . $user_browser);
				
				// Login successful.
				$Message = "u bent ingelogd";
				
				header('Refresh:2;URL=');
			 } 
			 else 
			 {
				// password incorrect
				$Message = "";
			 }
		}
		else
		{
			// username bestaat niet
			$Message ="";
		}
}
?>

<h1>Inloggen</h1>
	<?php echo '<br />'.$Message.'<br />';?>
	<form name="InlogFormulier" action="" method="post">
		<label for="gebruikersnaam">Inlognaam:</label>
		<input type="text" id="gebruikersnaam" name="gebruikersnaam" />
		<br />
		<label for="Password">Wachtwoord:</label>
		<input type="password" id="Password" name="Password" />
		<br />		
		<input type="submit" name="Send" value="Log in!" />
	</form>
	<br />

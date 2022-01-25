<?php
if($_SESSION['level'] >= 5)
{
	echo "toegang verleend";
	//code
}
else
{
	echo "";
	header('refresh:5;url=');
}

?>
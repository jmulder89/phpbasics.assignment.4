<?php
	
	$render = "U kunt inloggen.";
	$hashMD5 = md5("Welkom01");
	if(isset($_POST['acc']) && isset($_POST['pass']) )
	{
		if($_POST['acc'] == "admin" && md5($_POST['pass']) == $hashMD5)
		{
			$render = "Valide inlog actie, u bent nu ingeloged";
		}
		elseif($_POST['acc'] != "admin" && $_POST['pass'] != $hashMD5)
		{
			$render = "ERROR wachtwoord of username fout, probeer opnieuw.";
		}
	}

?>
<!DOCTYPE html>
<html>
	<head>
		<style type="text/css">
		
		</style>
	
	</head>
	<body>
		<form action="01inlog" method="post">
			Username:		<input type="text" name="acc" value="" /><br/><br/>
			Password: 		<input type="text" name="pass" value="" /><br/><br/>
			
			Login	<input type="submit" name="button" value="Login">
		</form>
		<p>__________________________________________</p>
	<?php
	
		echo $render;
	
	?>
	</body>

</html>
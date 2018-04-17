
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Identification</title>
</head>
<body>
<?php
session_start();
$form="";
$assoid="";
$db = new PDO('mysql:host=localhost;dbname=slickteam', 'root', '');
$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
$request= 'SELECT * FROM slickteam.identification';
$result=$db->query($request);


if (isset($_POST["password"])) {
	$password = addslashes($_POST["password"]);
}

if(!isset($_POST['identifiant'])){
	$form.='
	<form method="post" action="" name="postForm" id="postForm">
	<h1>Connexion administrateur site</h1>
	<label for="identifiant"><span class="placeholder">identifiant</span></label><input class="identifiant" name="identifiant" type="text">
	<label for="password">Mot de passe</label>
	<input type="password" name="password" id="password" /><br><br>
	<button type="submit" name="submit" id="submit">Valider</button>
	</form>
	</body>
	</html>';
	echo $form;
}else{
	$message='';
	if(empty($password) OR ($password == "")) //check champ vide
	{
		$message="<p>Une erreur s'est produite pendant votre identification. Vous devez remplir tout les champs
		Cliquez<a href='./identifiant.php'>ici</a> pour revenir</p>";
	}
	else //check mot de passe
	{	
		try{
		$query=$db->prepare('SELECT * FROM slickteam.identification WHERE identifiant= :identifiant');
		}catch (Exception $e)
        {
        die('Erreur : ' . $e->getMessage());
        }

		$query->bindvalue(':identifiant',$_POST["identifiant"], PDO::PARAM_STR);
		$query->execute();
		$data=$query->fetch();
		var_dump ($data);
		if($data["mdp"] == $_POST["password"])//accès OK
		{
				$_SESSION["admin"]=connecté;
				header('HTTP/1.1 404 Not Found');
				header('Location: ../index.php');
				exit;
		}
		else //accès refuser
		{
			$message="<p>Une erreur s'est produite lors de votre identification, mot de passe ou nom d'association invalide</p>";
		}
	$query->CloseCursor();
	}


echo $message;
}
?>
</body>
</html>
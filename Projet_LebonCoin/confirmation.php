<?php
$bdd= new PDO('mysql:host=127.0.0.1;dbname=espace_membre', 'root', '');
	if(isset($_GET['pseudo'], $_GET['key']) AND !epmty($_GET['pseudo']) AND !empty($_GET['key'])) {
		$pseudo = htmlspecialchars(urldecode($_GET['pseudo']));
		echo $pseudo;
		$key = htmlspecialchars($_GET['key']);
		echo $key;

		$requser = $bdd->prepare("SELECT = FROM membres WHERE pseudo = ? AND confirmkey = ?");
		$requser->execute(array($pseudo, $key));
		$userexist = $requser->rowCount();

		if($userexist == 1){
			$user = $requser->fetch();
			if($user['confirme'] == 0) {
				$updateuser = $bdd->prepare("UPDATE membres SET confirme = 1 WHERE pseudo = ? AND CC ")
				$updateuser->execute(array($pseudo,$key));
				echo "Votre compte a bien été confirmé !";
			} else{
				echo"Votre compte a déjà été confirmé !";
			}
		} else {
			echo "L'utiilisateur n'existe pas !";
		}
	}
?>


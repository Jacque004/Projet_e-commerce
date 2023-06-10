<?php
    include_once("VerifSignForm.php");
    if(isset($_POST['inscrire'])){
      var_dump($_POST);
        $nom = $_POST['inputnom'];
        $pseudo = $_POST['inputpseudo'];
        $email = $_POST['inputemail'];
        $mdp = $_POST['inputmdp'];
        $cmdp = $_POST['confirmmdp'];
        $cmail = $_POST['confirmmail'];
        if($mdp !== $cmdp){	
          echo 'verifier mot de passe';
        }
        if($email !== $cmail){	
          echo 'verifier email';
        }
        if(!empty($_POST)){
          //Commande pour ajouter un article
          $query = "INSERT INTO `utilisateur` (`idUser`, `Nom`, `Adresse`, `pseudo`, `email`, `mdp`) VALUES (NULL, :nom, :adresse, :pseudo, :email, :mdp);";
          $pdostmt =$pdo->prepare($query);
          $pdostmt->execute([':nom'=>$nom, ':adresse'=>'', ':pseudo'=>$pseudo, ':email'=>$email,':mdp'=>$mdp]);
          $pdostmt->closeCursor();
          header('Location: acceuil.html');
        }
        else {
          echo 'error';
        }

    }



?>


<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewpoint" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" type="text/css" href="inscription.css">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.13.0/css/all.css">
  <title>EPMI shop-Inscription</title>
</head>
<body>
  <nav class="navbar navbar-expand-sm">
    <div class="container" style="font-size: 30px"><a class="nav-brand" href="acceuil.html">EPMI shop</a></div>
  </nav>
  <div class="formCo">
		<form name="inscription" method="post">
			<h1>S'inscrire</h1>
			<div class="social">
				<p><i class="fab fa-instagram"></i></p>
				<p><i class="fab fa-facebook-square"></i></p>
				<p><i class="fab fa-twitter-square"></i></p>
				<p><i class="fab fa-youtube"></i></p>
			</div>
	
			 <p class="choose-email">ou:</p>
	
			<div class="inputs">		
        <div style="margin: auto 0%; display: inline-flex;"><span style="font-size: 9px;">* </span><input type="text" name="inputnom" required placeholder="Nom et prénom"></div>
        <div style="margin: auto 0%; display: inline-flex;"><span style="font-size: 9px;">* </span><input type="text" name="inputpseudo" required placeholder="Nom d'utilisateur"></div>
				<div style="margin: auto 0%; display: inline-flex;"><span style="font-size: 9px;">* </span><input type="email" name="inputemail" required placeholder="Adresse e-mail"></div>
        <div style="margin: auto 0%; display: inline-flex;"><span style="font-size: 9px;">* </span><input type="email" name="confirmmail" required placeholder="Confirmer adresse e-mail"></div>
				<div style="margin: auto 0%; display: inline-flex;"><span style="font-size: 9px;">* </span><input type="password" name="inputmdp" required placeholder="Mot de passe"></div>
        <div style="margin: auto 0%; display: inline-flex;"><span style="font-size: 9px;">* </span><input type="password" name="confirmmdp" required placeholder="Comfirmer mot de passe"></div>
        <div style="margin: auto 0%; display: inline-flex;">
          <select name="genre" id="select-genre">
            <option value="">--Ton genre--</option>
            <option value="man">Homme</option>
            <option value="woman">Femme</option>
          </select></div>
        <div style=" margin: 15px 10% auto 1%;"><input type="tel" placeholder="Numéro de téléphone"></div>
			</div>
      <p style="font-size: 10px"> * : obligatoire</p>
	
		<p class="inscription"> Déjà un compte ? <span><a href="connexion.html"> Connecte toi</a></span> </p>
	
    <div style="text-align: center;">
      <button class="connexion" type="submit" name="inscrire">s'inscrire</button>
    </div>
	
		</form>
	</div>

</body>
</html>


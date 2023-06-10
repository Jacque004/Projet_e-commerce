<?php
// Vérifier si le formulaire a été soumis
if (isset($_POST['connecter'])) {
    // Récupérer les valeurs du formulaire
    $email = $_POST['email'];
    $mdp = $_POST['mdp'];
    include('crud/adminlog.php');
}
?>

<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewpoint" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="connexion.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.13.0/css/all.css">
    <title>IEF Shop-Connexion</title>
</head>

<body>
    <nav class="navbar navbar-expand-sm">
        <div class="container" style="font-size: 30px; font-family: Georgia, serif;"><a class="nav-brand" href="acceuil.html">IEF Shop</a><br>
            <div style="width: 50%; font-family: Georgia, serif">
                <h7 style="padding: 5px; margin: 5px; text-align: center"><i class="fas fa-user"></i> : Adminlog@Shopping.net</h7><br>
                <h7 style="padding: 5px; margin: 5px; text-align: center"><i class="fas fa-lock"></i> : Administraion000ABz</h7>
            </div>
        </div>
    </nav>
    <div class="formCo" style="font-family: Georgia, serif">
        <form name="connexion" method="POST">
            <h1>Se connecter</h1>
            <p class="choose-email">ou utiliser mon adresse e-mail :</p>

            <div class="inputs">
                <input type="email" name="email" placeholder="Adresse e-mail">
                <input type="password" name="mdp" placeholder="Mot de passe">
            </div>


            <p class="inscription">Pas encore de compte ? <span><a href="inscription.php"> Inscris toi maintenant</a></span> </p>

            <div>
                <button name="connecter" class="connexion" type="submit">Se connecter</button>
            </div>

        </form>
    </div>
</body>

</html>
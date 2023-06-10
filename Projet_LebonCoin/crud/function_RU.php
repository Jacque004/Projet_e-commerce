<?php
    include_once("connexionC.php");
    $pdo =new connect();
?>
<?php 
    if(!empty($_POST)){	
        //commande de modification
        $query = "UPDATE utilisateur SET Nom=:nom, Adresse=:adresse, pseudo=:pseudo, email=:email, mdp=:mdp WHERE idUser=:id";
        $pdostmt= $pdo->prepare($query);
        $pdostmt->execute([':id' => $_POST['id'], ':nom' => $_POST['inputnom'], ':adresse' => $_POST['inputadresse'], ':pseudo' => $_POST['inputpseudo'], ':email' => $_POST['inputemail'], ':mdp' => $_POST['inputmdp']]);
        $pdostmt->closeCursor();
        //var_dump($_POST);
        header('Location: client.php');
    }
?>
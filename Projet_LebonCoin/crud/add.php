<?php
include_once("connexionC.php");
$pdo =new connect();
//Recuperation des champs du form
if(isset($_POST['Enregistrer'])) {	
    $nom = $_POST['inputnom'];
    $prix = $_POST['inputprix'];
    $sexe = $_POST['inputsexe'];
    $description = $_POST['inputdescription'];
}    
//Verifier si les champs sont vides
if(!empty($nom)&&!empty($prix)&&!empty($sexe)&&!empty($description)){
    //Commande pour ajouter un article
    $query = "INSERT INTO article(idArticle, NomArticle, Prix, Description, sexe) VALUES(NULL, :nom, :prix, :description,:sexe)";
    $pdostmt =$pdo->prepare($query);
        $pdostmt->execute([':nom'=>$nom, ':prix'=>$prix, ':sexe'=>$sexe, ':description'=>$description]);
    $pdostmt->closeCursor();
    header('Location: article.php');
}
?>
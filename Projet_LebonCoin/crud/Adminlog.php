<?php
  // Vérifier les identifiants dans la table administrateur
  include('crud/connexionC.php');
  $pdo = new connect();
$adminmail ='Adminlog@Shopping.net';
$adminpsw ='Administraion000ABz';
if($email== $adminmail && $mdp == $adminpsw){
    header('location: crud/index.php');
    
  } else {
    // Sinon, afficher un message d'erreur
    echo 'Identifiants incorrects.';}
?>
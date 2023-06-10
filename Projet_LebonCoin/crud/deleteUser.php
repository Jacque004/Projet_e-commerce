<?php
    $client=true;
    include_once("main.php");
    if(!empty($_GET["id"])){
        //var_dump($_GET["id"]);
        //commande de suppresiion
        $query= "DELETE FROM utilisateur WHERE `utilisateur`.`idUser`=:id";
        $objstmt=$pdo->prepare($query);
        $objstmt->execute(['id'=>$_GET['id']]);
        $objstmt->closeCursor();
        header("Location:client.php");
    }
?>
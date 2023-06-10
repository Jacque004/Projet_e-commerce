<?php
    $article=true;
    include_once("main.php");
    if(!empty($_GET["id"])){
        $id = (int) $_GET["id"]; // Transformation de l'id en int pour faire la suppression 
        
        //commande de suppresiion
        $query= "DELETE FROM article WHERE idArticle=:id";
        $objstmt=$pdo->prepare($query);
        $objstmt->execute(['id'=>$id]);
        $objstmt->closeCursor();
        header("Location:article.php");
    }
?>
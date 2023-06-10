<!-- Page pour ajouter un client-->
<?php
    $article=true;
    include_once("header.php");
    include_once("main.php");
    if(!empty($_POST)){	
        //commande de modification
        $query = "UPDATE article SET NomArticle=:nom, Prix=:prix, Description=:description, sexe=:sexe WHERE idArticle=:id";
        $pdostmt= $pdo->prepare($query);
        $pdostmt->execute([':id' => $_POST['id'], ':nom' => $_POST['inputnom'], ':description' => $_POST['inputdescription'], ':sexe' => $_POST['inputsexe'], ':prix' => $_POST['inputprix']]);
        $pdostmt->closeCursor();
        //var_dump($_POST);
        
        echo '<br>Enregistre avec succes';
    }

?>
<?php
    //obtenir l'id de url
    //var_dump($_GET['id']);
    if(!empty($_GET['id'])){
    //selection de l'id associer a la valuer
    $query = "SELECT * FROM article WHERE idArticle=:id";
    $pdostmt = $pdo->prepare($query);
    $pdostmt->execute([':id' => $_GET['id']]);
    }
    while($row = $pdostmt->fetch(PDO::FETCH_ASSOC)):

?>
    
    <h1 class="mt-5">Modifier un article</h1>
    <!--Formulaire d'ajout-->
    <form class="row g-3" method="Post">
    <input type="hidden" name="id" value="<?php echo $_GET['id'];?>">
        <div class="col-md-8">
        <label for="inputnom" class="form-label">Nom</label>
        <input type="text" class="form-control" name="inputnom" value="<?php echo $row['NomArticle'] ?>" required>
        </div>
        <div class="col-md-3">
        <label for="inputprix" class="form-label">Prix</label>
        <input type="text" class="form-control" name="inputprix" value="<?php echo $row['Prix'] ?>" required>
        </div>
        <div class="col-md-1">
        <label for="inputsexe" class="form-label">Sexe</label>
        <input type="text" class="form-control" name="inputsexe" value="<?php echo $row['sexe'] ?>" required>
        </div>
        <div class="col-12">
        <label for="inputdescription" class="form-label">Description</label>
        <input type="text" class="form-control" name="inputdescription" value="<?php echo $row['Description'] ?>" required>
        </div>
        <div class="col-12">
        <button type="submit" class="btn btn-primary" name="Enregistrer">Enregistrer</button>
        </div>
    </form>

    </div>
    </main>
<!-- fin de boucle-->
<?php endwhile;?>
<!-- Insertion du footer-->
<?php
    include_once("footer.php");
?>        
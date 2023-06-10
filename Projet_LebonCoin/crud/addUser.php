<!-- Page pour ajouter un article-->
<?php
    $client=true;
    //insertion du header et du debut du contenu de la page "main"
    include_once("header.php");
    include_once("main.php");
    //Verifier si les champs sont vides
    if(!empty($_POST['inputnom'])&&!empty($_POST['inputadresse'])&&!empty($_POST['inputpseudo'])&&!empty($_POST['inputmdp'])&&!empty($_POST['inputemail'])){
        //Commande pour ajouter un article
        $query = "INSERT INTO `utilisateur` (`idUser`, `Nom`, `Adresse`, `pseudo`, `email`, `mdp`) VALUES (NULL, :nom, :adresse, :pseudo, :email, :mdp);";
        $pdostmt =$pdo->prepare($query);
		    $pdostmt->execute([':nom'=>$_POST['inputnom'], ':adresse'=>$_POST['inputadresse'], ':pseudo'=>$_POST['inputpseudo'], ':email'=>$_POST['inputemail'],':mdp'=>$_POST['inputmdp']]);
        $pdostmt->closeCursor();
        echo '<br>Ajouté avec succes';
    }
    else {
      echo 'error';
    }
    
?>

  <h1 class="mt-5">Ajouter un article</h1>
  <!--Formulaire d'ajout-->
  <form class="row g-3" method="Post">
    <div class="col-md-6">
      <label for="inputnom" class="form-label">Nom</label>
      <input type="text" class="form-control" name="inputnom" required>
    </div>
    <div class="col-md-3">
      <label for="inputpseudo" class="form-label">Pseudo</label>
      <input type="text" class="form-control" name="inputpseudo" required>
    </div>
    <div class="col-md-4">
      <label for="inputemail" class="form-label">email</label>
      <input type="text" class="form-control" name="inputemail" required>
    </div>
    <div class="col-md-4">
      <label for="inputmdp" class="form-label">Mot de passe</label>
      <input type="text" class="form-control" name="inputmdp" required>
    </div>
    <div class="col-12">
      <label for="inputadresse" class="form-label">Adresse</label>
      <input type="text" class="form-control" name="inputadresse" required>
    </div>
    <div class="col-12">
      <button type="submit" class="btn btn-primary" name="Enregistrer">Enregistrer</button>
    </div>
  </form>

</div>
</main>

<!-- Insertion du footer-->
<?php
    include_once("footer.php")
?>
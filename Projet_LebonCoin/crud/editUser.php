<!-- Page pour ajouter un client-->
<?php
    include_once("header.php");
    include_once("main.php");
?>
<?php
    //obtenir l'id de url
    //var_dump($_GET['id']);
    if(!empty($_GET['id'])){
    //selection de l'id associer a la valuer
    $query = "SELECT * FROM utilisateur WHERE idUser=:id";
    $pdostmt = $pdo->prepare($query);
    $pdostmt->execute([':id' => $_GET['id']]);
    }
    while($row = $pdostmt->fetch(PDO::FETCH_ASSOC)):

?>

  <h1 class="mt-5">Ajouter un article</h1>
  <!--Formulaire d'ajout-->
  <form class="row g-3" action="function_RU.php" method="Post">
  <input type="hidden" name="id" value="<?php echo $_GET['id'];?>">
    <div class="col-md-6">
      <label for="inputnom" class="form-label">Nom</label>
      <input type="text" class="form-control" name="inputnom" value="<?php echo $row['Nom'] ?>" required>
    </div>
    <div class="col-md-3">
      <label for="inputpseudo" class="form-label">Pseudo</label>
      <input type="text" class="form-control" name="inputpseudo" value="<?php echo $row['pseudo'] ?>" required>
    </div>
    <div class="col-md-4">
      <label for="inputemail" class="form-label">email</label>
      <input type="text" class="form-control" name="inputemail" value="<?php echo $row['email'] ?>" required>
    </div>
    <div class="col-md-4">
      <label for="inputmdp" class="form-label">Mot de passe</label>
      <input type="text" class="form-control" name="inputmdp" value="<?php echo $row['mdp'] ?>" required>
    </div>
    <div class="col-12">
      <label for="inputadresse" class="form-label">Adresse</label>
      <input type="text" class="form-control" name="inputadresse" value="<?php echo $row['Adresse'] ?>" required>
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
    include_once("footer.php")
?>
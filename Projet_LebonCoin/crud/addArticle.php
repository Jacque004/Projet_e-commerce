<!-- Page pour ajouter un article-->
<?php
    $article=true;
    //insertion du header et du debut du contenu de la page "main"
    include_once("header.php");
    include_once("main.php");
    
?>

  <h1 class="mt-5">Ajouter un article</h1>
  <!--Formulaire d'ajout-->
  <form class="row g-3" action="add.php" method="Post">
    <div class="col-md-8">
      <label for="inputNom" class="form-label">Nom</label>
      <input type="text" class="form-control" name="inputnom" required>
    </div>
    <div class="col-md-3">
      <label for="inputPrix" class="form-label">Prix</label>
      <input type="text" class="form-control" name="inputprix" required>
    </div>
    <div class="col-md-1">
      <label for="inputSexe" class="form-label">Sexe</label>
      <input type="text" class="form-control" name="inputsexe" required>
    </div>
    <div class="col-12">
      <label for="inputDescription" class="form-label">Description</label>
      <input type="text" class="form-control" name="inputdescription" required>
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
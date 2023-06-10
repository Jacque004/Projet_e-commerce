<?php
$article = true;
include_once("header.php");
include_once("main.php");
$count = 0;
?>
<h1 class="mt-5" style="font-family: Georgia, serif">Articles</h1>
<a href="addArticle.php" class="btn btn-success" style="float: right; margin-bottom: 10px">
    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-bag-plus-fill" viewBox="0 0 16 16">
        <path fill-rule="evenodd" d="M10.5 3.5a2.5 2.5 0 0 0-5 0V4h5v-.5zm1 0V4H15v10a2 2 0 0 1-2 2H3a2 2 0 0 1-2-2V4h3.5v-.5a3.5 3.5 0 1 1 7 0zM8.5 8a.5.5 0 0 0-1 0v1.5H6a.5.5 0 0 0 0 1h1.5V12a.5.5 0 0 0 1 0v-1.5H10a.5.5 0 0 0 0-1H8.5V8z" />
    </svg>
</a>
<?php
$query = "SELECT * FROM `article`";
$pdostmt = $pdo->prepare($query);
$pdostmt->execute();
//var_dump($pdostmt->fetchAll(PDO::FETCH_ASSOC));
?>
<!-- Base de donnée intégré-->
<table id="datatable" class="display">
    <thead>
        <tr>
            <th>ID</th>
            <th>Nom</th>
            <th>Prix</th>
            <th>Description</th>
            <th>sexe</th>
            <th>Action</th>
        </tr>
    </thead>
    <tbody>
        <!--boucle while pour recupérer toute les lignes de la table-->
        <?php while ($ligne = $pdostmt->fetch(PDO::FETCH_ASSOC)) :
            //var_dump($ligne);Pour tester les champs sont récup
            $count++;
        ?>
            <tr>
                <td><?php echo $ligne['idArticle'] ?></td>
                <td><?php echo $ligne['NomArticle'] ?></td>
                <td><?php echo $ligne['Prix'] ?></td>
                <td><?php echo $ligne['Description'] ?></td>
                <td><?php echo $ligne['sexe'] ?></td>
                <td>
                    <a href="editArticle.php?id=<?php echo $ligne['idArticle'] ?>" class="btn btn-primary">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-pencil" viewBox="0 0 16 16">
                            <path d="M12.146.146a.5.5 0 0 1 .708 0l3 3a.5.5 0 0 1 0 .708l-10 10a.5.5 0 0 1-.168.11l-5 2a.5.5 0 0 1-.65-.65l2-5a.5.5 0 0 1 .11-.168l10-10zM11.207 2.5 13.5 4.793 14.793 3.5 12.5 1.207 11.207 2.5zm1.586 3L10.5 3.207 4 9.707V10h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.293l6.5-6.5zm-9.761 5.175-.106.106-1.528 3.821 3.821-1.528.106-.106A.5.5 0 0 1 5 12.5V12h-.5a.5.5 0 0 1-.5-.5V11h-.5a.5.5 0 0 1-.468-.325z" />
                        </svg>
                    </a>

                    <a href="delete.php?id=<?php echo $ligne['idArticle'] ?>" class="btn btn-danger">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-trash3-fill" viewBox="0 0 16 16">
                            <path d="M11 1.5v1h3.5a.5.5 0 0 1 0 1h-.538l-.853 10.66A2 2 0 0 1 11.115 16h-6.23a2 2 0 0 1-1.994-1.84L2.038 3.5H1.5a.5.5 0 0 1 0-1H5v-1A1.5 1.5 0 0 1 6.5 0h3A1.5 1.5 0 0 1 11 1.5Zm-5 0v1h4v-1a.5.5 0 0 0-.5-.5h-3a.5.5 0 0 0-.5.5ZM4.5 5.029l.5 8.5a.5.5 0 1 0 .998-.06l-.5-8.5a.5.5 0 1 0-.998.06Zm6.53-.528a.5.5 0 0 0-.528.47l-.5 8.5a.5.5 0 0 0 .998.058l.5-8.5a.5.5 0 0 0-.47-.528ZM8 4.5a.5.5 0 0 0-.5.5v8.5a.5.5 0 0 0 1 0V5a.5.5 0 0 0-.5-.5Z" />
                        </svg>
                    </a>
                </td>
            </tr>

            <!-- Modal/pop up de confirmation de suppression -->

            <div class="modal fade" id="deleteModal<?php echo $count ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog" style="font-family: Georgia, serif">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Suppresion</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            Voulez-vous vraiment supprimer cet article ?
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Annuler</button>
                            <a href="delete.php?id=<?php echo $ligne['idArticle'] ?>" class="btn btn-danger">Supprimer</a>
                        </div>
                    </div>
                </div>
            </div>
        <?php endwhile; ?>
    </tbody>
</table>
</div>
</main>

<?php
include_once("footer.php")
?>
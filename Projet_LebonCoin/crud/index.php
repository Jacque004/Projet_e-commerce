<?php
$index = true;
include_once("header.php")
?>

<!-- Begin page content -->
<main class="flex-shrink-0" style="padding: 45px;">
  <div class="container" style="padding: 60px 15px 0px">
    <h1 class="mt-5" style="font-family: Georgia, serif">Accueil</h1>
  </div>
  <div style="font-family: Georgia, serif">
    <p class="h2" style="text-align: center"><u>Gestionnaire de données IEF SHOP</u></p>
    <p class="h3" style="text-align: center">Bienvenue</p>
  </div>
  <div class="container justify-content center" style="font-family: Georgia, serif">
    <div class="row">
      <div class="col-6">
        <p class="h3" style="text-align: center"><u>Gestion client</u></p>
        <a href="client.php" style="color: black; text-decoration:none">
          <div class="card">
            <img src="https://www.dynamique-mag.com/wp-content/uploads/d9704aca16c3ef0a60fb46ea0a0cc0c5.jpg" stule=" width: auto;" class="card-img-top" alt="gestionclient.jpg">
            <div class="card-body">
              <p class="card-text">La page de gestion client de l'entreprise s'engage à garantir la confidentialité et la sécurité des données de ses clients, collectées de manière transparente pour mieux comprendre leurs besoins. Les données sont utilisées pour améliorer les produits et services, stockées de manière sécurisée et partagées uniquement avec des tiers de confiance. Les clients ont des droits en matière de protection des données, et leur consentement est obtenu lors de l'utilisation des services.</p>
            </div>
          </div>
        </a>
      </div>
      <div class="col-6">
        <p class="h3" style="text-align: center"><u>Gestion Article</u></p>
        <a href="article.php" style="color: black; text-decoration:none">
          <div class="card">
            <img src="https://shoutoutla.com/wp-content/uploads/2020/11/c-PersonalJoeyHONSA__61D8545B-AE2B-439E-A28E-511AEB324F18_1603488995809.jpeg" alt="gestionarticle.jpg">
            <div class="card-body">
              <p class="card-text">La page de gestion des articles explique comment l'entreprise collecte, stocke, traite et utilise les données liées à ses produits. Elle met en avant l'importance de la fiabilité et de l'exactitude des données pour offrir des informations précises et actualisées aux clients. Les mesures de sécurité appropriées sont prises pour protéger les données contre tout accès non autorisé. Les données sont également mises à jour régulièrement pour maintenir leur qualité. Les données sont utilisées pour gérer les commandes, les stocks, les prix, les promotions, et pour améliorer la performance des articles. Les utilisateurs ont également le droit d'accéder à leurs données et de les rectifier si nécessaire.</p>
            </div>
          </div>
        </a>
      </div>
    </div>
  </div>
</main>

<?php
include_once("footer.php")
?>
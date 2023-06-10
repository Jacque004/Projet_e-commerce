// sélectionne tous les boutons "favoris"
const boutonsFavoris = document.querySelectorAll('.btn-favoris');

// boucle sur chaque bouton pour ajouter un gestionnaire d'événement clic
boutonsFavoris.forEach(function(bouton) {
  bouton.addEventListener('click', function() {
    // ajoute le produit aux favoris
    ajouterAuFavoris(this.dataset.produit);
  });
});

// fonction pour ajouter le produit aux favoris
function ajouterAuFavoris(idProduit) {
  // récupère la liste des produits favoris depuis le stockage local
  const favoris = JSON.parse(localStorage.getItem('favoris')) || [];

  // vérifie si le produit est déjà dans les favoris
  const index = favoris.findIndex(function(produit) {
    return produit.id === idProduit;
  });

  // si le produit n'est pas encore dans les favoris, l'ajoute à la liste
  if (index === -1) {
    favoris.push({ id: idProduit });
    localStorage.setItem('favoris', JSON.stringify(favoris));
  }
}
// Fonction pour ajouter un élément au panier
function addToCart(item) {
  // Créer un nouvel élément de liste
  const li = document.createElement('li');
  li.innerHTML = `
    <img src="${item.image}" alt="${item.name}">
    <span>${item.name}</span>
    <span>${item.price}€</span>
    <button class="remove-item-btn">Supprimer</button>
  `;
//
  // Ajouter l'élément de liste au panier
  document.getElementById('cart-items').appendChild(li);

  // Mettre à jour le total du panier
  const cartTotal = parseFloat(document.getElementById('cart-total').textContent);
  document.getElementById('cart-total').textContent = (cartTotal + item.price).toFixed(2);

  // Ajouter un écouteur d'événement pour le bouton de suppression
  li.querySelector('.remove-item-btn').addEventListener('click', function() {
    // Supprimer l'élément de liste
    li.remove();

    // Mettre à jour le total du panier
    document.getElementById('cart-total').textContent = (cartTotal - item.price).toFixed(2);
  });
}

// Exemple d'utilisation de la fonction addToCart
const item = {
  name: 'Produit 1',
  price: 9.99,
  image: 'produit1.jpg'
};
addToCart(item);


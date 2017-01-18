# php-rpgmgch

# Step 1 : Afficher un tableau d'utilisateurs

### User.php
Créer une classe User dans User.php qui contient les attributs suivants :
  * id (String)
  * email (String)
  * createdAt (Date)
Ajouter les accesseurs nécessaires et rendez ces attributes privés.

### Client.php
Créer une classe Client dans Client.php, héritant de User avec la méthode publique suivante :
  * buy()

### users.php
Dans users.php, créer deux nouvelles instances de Client (avec tous les attributes initialisés), et renvoyez un tableau php de ces clients.
```
// users.php
$client1 = new Client(....);
$client2 = new Client(....);

return [
  $client1,
  $client2
];
```

### UserTable.php
Créer un fichier userTable.php qui va récupérer la liste des clients et générer un tableau html affichant l'ensemble de leur informations
```
$users = require('users.php');

<html
....
<?php for .....

?>
...
</html>

```
### Show Time
Lancer ensuite votre serveur php et vérifier qu'en vous rendant à cette url `/userTable.php` , le tableau s'affiche correctement.

***

# Step 2 : Afficher le stock de produits
### Product.php
Créer une classe Product ayant les attributs et méthodes suivants :
* id
* name
* price
* et les accesseurs nécessaires

### Vegetable.php
Créer une classe Vegetable héritant de Product et ayant les attributs et méthodes suivants :
* productorName
* expiresAt
* isFresh()

Implémenter la méthode fresh qui retourne un booléen, vrai si le produit peut être consommé (avant sa date d'expiration), faux sinon.

### Cloth.php
Créer une classe Cloth héritant de Product et ayant les attributs et méthodes suivants :
* brand
* try()

### products.php
Créer un fichier products.php qui retourne un tableau contenant deux légumes et trois vêtements.

### productTable.php
Créer productTable.php qui renvoie un tableau html avec la liste des produits récemment créés.

***

# Step 3 : Shopping
### Implémentation de buy()
Ajouter l'attribut (et ses accesseurs) `billAmount`.

Ajouter l'attribut (et ses accesseurs) `cart` qui est un tableau de Product.

Ajouter la méthode `addProductToCart($product)` qui ajouter un produit au panier du client.

Dans la classe `Client`, implémenter la méthode `buy` pour qu'elle prenne en paramètre un objet de classe `Product`.

A chaque fois qu'un client achète un produit, sa facture augment du prix du produit et ce produit est ajouté au panier.

### Test
Créer un fichier testOrder.php où vous effectuerez des tests des scenarii suivants :
- votre premier utilisateur achète un de vos légumes
- votre second utilisateur achète un légume et un vêtement

Afficher toutes les informations nécessaires.

***

# Step 4 : Clean up
### models
Créer un répertoire `models` dans lequel vous placez vos modèles : Product, Vegetable, Cloth, User, Client.

Mettez à jour les fichiers qui sont impactés.

Testez. Tout fonctionne encore ?

### data
Créer un répertoire `data` dans lequel vous placez vos données factices : users.php et products.php.

### views
Créer un répertoire `views` dans lequel vous placerez vos vues : userTable.php et productTable.php

Tout fonctionne encore ?

### controllers
Créer un fichier `users.php` à la racine de votre projet. Quand l'utilisateur ira sur /users.php, il doit voir le tableau des utilisateurs.

Faites de même en créant `products.php` qui a un comportement similaire mais pour les produits.

C'est toujours bon ? On continue

***

# Step 5 : Shopping Time
Créer une page shopping.php qui va permettre de créer une commande pour un client.

Afficher un select qui va permettre d'afficher et de sélectionner un client.

Afficher 3 `select` successifs qui vont permettre de sélectionner chacun un produit.

Ajouter un bouton d'envoi de commande.

Une fois que la commande a été validée, afficher un récapitulatif de la commande (le `cart` du client sélectionné) : liste des produits, prix total ...


***
# Step 6 - Bonus
* Si un utilisateur commande un produit périmé, afficher un message d'erreur.
* Lors du récapitulatif, ajouter la possibilité à un utilisateur de supprimer un article de son panier.
* Stocker le panier dans un COOKIE (ne stocker que les `id` du client et des produits) : rafraîchissez votre page et vérifier que le panier en cours est toujours visible. Ajouter alors la possibilité de réinitialiser la commande (client et produits).

# Step 2836 : Module de paiement
Implémenter un module de paiement avec Stripe.
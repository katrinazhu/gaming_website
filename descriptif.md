gaming_website
============

A Symfony project created on May 3, 2017, 3:14 pm.
Website that allows user to log in and play game with stored data.
============

Dans ce jeu, l'utilisateur peut créer des personnages pour acheter les récoltes
L'utilisateur peut les vendre après quelques temps
L'utilisateur peut aussi voir les statistiques d'autres utilisateurs.

Pour faire fonctionner le site web, on doit:
- changer "database_password" dans app/config/parameters.yml à votre propre mot de passe pour root
- taper à terminal: 
	php bin/console doctrine:database:create
	php bin/console doctrine:generate:entities AppBundle/Entity/User
	php bin/console doctrine:generate:entities AppBundle/Entity/Personnage
	php bin/console doctrine:generate:entities AppBundle/Entity/Crop
	php bin/console doctrine:schema:update --force
	php bin/console server:run
# Projet-PHP

Author
------

Anne-Sophie Saint-Omer

Sujet
-----

Il s'agit de réaliser une application de type CRUD (Create-Retrieve-Update-Delete) comprenant au minimum les fonctionnalités suivantes :

    - Liste de tous les contacts.
    - Création d'un nouveau contact.
    - Mise à jour d'un contact existant.
    - Suppression d'un contact.
    - La validation des données entrées pas l'utilisateur.


Dossier
-------

index.html -> IHM et Ajax + JQuery.
database.php -> Classe correspondant à la base de données.
person.php -> Classe Personne.
main.php -> Execution des méthodes de database.php et person.php.
style.css -> "Design" application.
person.sqlite -> Base de données exemple.


Manuel
------

Ouvrir le fichier index.html

Pour ajouter un contact : 
- Cliquez sur "Ajouter"
- Replissez le formulaire et cliquez sur Valider.
-> Le contact apparaît dans la liste.

Si vous ne souhaitez plus ajouter de contact, cliquez sur le bouton Ajouter pour fermer le formulaire.

Pour modifier ou supprimer un contact : 
- Cliquez sur le contact dans la liste.
- Un formulaire apparaît avec les champs pré-remplis.
- Modifier les champs et cliquez sur modifier.
- > Les changements apparaissent.

- Supprimer le contact.
-> Le contact disparait de la liste.

Si vous ne souhaitez plus modifier ou supprimer de contact, cliquez sur Annuler. 


Bonus
-----

Le formulaire et les vérifications sont gérés à l'aide d'Ajax et de jQuery :

- Les boutons et le formulaire apparaissent ou disparaissent en fonction des besoins.
- Le formulaire est vidé lorsqu'on ajoute un contact.
- Les éléments de la liste sont ajoutés, supprimés ou modifiés en "live".
- Les méthodes de la base de données sont appelées dans main.php à l'aide de Ajax.

Vérification des champs à l'aide d'expressions régulières :
- Regex
- input rouge lorsqu'un champ est vide ou incorrect :
	Code postal à 5 chiffres
	Numéro de téléphone à 10 chiffres
	adressemail@gmail.com
	websiteexeample.com


Remarques
---------

Il reste certainement quelques exceptions quant à la vérification du formulaire. 
Les regex se trouvent dans le fichier index.html.






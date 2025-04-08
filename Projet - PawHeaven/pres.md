# Présentation du projet 

## PawHeaven : Refuge pour animaux 

*Notre projet web PHP est une plateforme dédiée à la gestion d'un refuge animalier fictif nommé **PawHeaven**. Il permet de gérer les utilisateurs, les animaux à adopter, les connexions et inscriptions, ainsi que les modifications du contenu.

## Structure du projet


## Fichiers principaux

- **index.php** : page d'accueil du site.
- **pres.md** : fichier de présentation ou documentation technique/introductive.
- **style.css** : le css principale du site (couleurs, mise en page, typographie...).

## Dossiers

### inc/
- **header.php** : inclut l’en-tête HTML commun à toutes les pages.
- **footer.php** : inclut le pied de page.
- **cle.php** : probablement une clé secrète ou un fichier de configuration sécurisé ( à ne pas exposer publiquement).

### pages/
Contient toutes les pages fonctionnelles du site :
- **connexion.php / signup.php / failed_connexion.php / echec.php** : gestion de l’authentification (connexion, échecs).
- **admin.php / user.php** : interfaces respectives pour les rôles administrateur et utilisateur.
- **animals.php / update_animals.php / suppression.php / modification.php** : gestion des fiches d’animaux à adopter.
- **traitement.php** : traitement des formulaires (probablement pour login, ajout, suppression...).
- **contact.php** : formulaire ou page de contact.

## Fonctionnalités envisagées

- Système de connexion/inscription sécurisé.
- Gestion de base de données (non incluse ici, à vérifier).
- Interface d'administration pour gérer les animaux.
- Ajout, suppression, modification des fiches d’animaux.
- Interface utilisateur simple et claire.

## À vérifier

- Sécurité des formulaires (protection CSRF, validation serveur).
- Fichier `cle.php` : s’il contient une clé API ou DB, il doit être placé hors du dossier public.
- Aucune base de données n’est visible ici, c'est à relier via WampServer.

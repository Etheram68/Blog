[![Codacy Badge](https://api.codacy.com/project/badge/Grade/5c29e424d35b47d78307aaf02605c187)](https://www.codacy.com/app/Etheram68/Blog?utm_source=github.com&amp;utm_medium=referral&amp;utm_content=Etheram68/Blog&amp;utm_campaign=Badge_Grade)
# Information d'installation
Télécharger le répertoir.

Dézipper le dossier dans votre dossier www du logiciel Wamp/Xamp

Ouvrir le dossier Config -> dev.ini et remplacé par les information de votre base de données

Pour la partit Installation si le site est déployer dans un dossier du nom de Blog remmplacé à racineWeb entre les \ \ par le nom du dossier.
Si il n'y a pas de dossier et que le site est installé à la racine mettre simplement \ .

Bonne installation du site web.

En cas d'utilisation sur windows remplacer le contenu du .Htaccess par 

 # Réécrit une URL de type xxx/yyy/zzz en index.php?controleur=xxx&action=yyy&id=zzz

RewriteEngine On

RewriteRule ^index\.php$ - [L]

RewriteRule ^([a-zA-Z]*)/?([a-zA-Z]*)?/?([a-zA-Z0-9]*)?/?$ index.php?controleur=$1&action=$2&id=$3 [QSA,NC,L]

 # END

# Énoncé
Vous venez de décrocher un contrat avec Jean Forteroche, acteur et écrivain. Il travaille actuellement sur son prochain roman, "Billet simple pour l'Alaska". Il souhaite innover et le publier par épisode en ligne sur son propre site.

Seul problème : Jean n'aime pas WordPress et souhaite avoir son propre outil de blog, offrant des fonctionnalités plus simples. Vous allez donc devoir développer un moteur de blog en PHP et MySQL.

Vous développerez une application de blog simple en PHP et avec une base de données MySQL. Elle doit fournir une interface frontend (lecture des billets) et une interface backend (administration des billets pour l'écriture). On doit y retrouver tous les éléments d'un CRUD :

Create : création de billets
Read : lecture de billets
Update : mise à jour de billets
Delete : suppression de billets
Chaque billet doit permettre l'ajout de commentaires, qui pourront être modérés dans l'interface d'administration au besoin.
Les lecteurs doivent pouvoir "signaler" les commentaires pour que ceux-ci remontent plus facilement dans l'interface d'administration pour être modérés.

L'interface d'administration sera protégée par mot de passe. La rédaction de billets se fera dans une interface WYSIWYG basée sur TinyMCE, pour que Jean n'ait pas besoin de rédiger son histoire en HTML (on comprend qu'il n'ait pas très envie !).

Vous développerez en PHP sans utiliser de framework pour vous familiariser avec les concepts de base de la programmation. Le code sera construit sur une architecture MVC. Vous développerez autant que possible en orienté objet (au minimum, le modèle doit être construit sous forme d'objet).

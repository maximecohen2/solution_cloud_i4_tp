# Solution Cloud : TP

Réalisé par Maxime COHEN

## Sujet 

Dépôt : https://gl.avalone-fr.com/anthony/i4-gestion-produits

### Partie 1

Nous souhaitons que l'application puisse être déployée par Docker afin de faciliter son intégration sur différentes plate-formes et notamment sur le Cloud.

La base test fournie dans le dépôt doit être chargée par défaut dès le déploiement de l'application afin que celle-ci soit opérationnelle immédiatement.
Il doit y avoir au minimum un container pour l'application PHP et un pour la base de données MySQL.


### Partie 2

Actuellement, les images des produits sont stockées sur le disque du serveur Web / PHP. Cela risque de poser problème sur une grande quantité de photos sont stockées.

Pour améliorer cela, nous souhaiterions que les photos des produits soient stockés sur un système de stockage objet.

Privilégiez un  stockage compatible avec l'API S3 : le serveur Minio (https://www.minio.io/) pourra faire l'affaire.

Votre modification devra permettre à l'application l'upload des photos vers le stockage objet et leur affichage à partir de ce même stockage.


## Solution

### Installation

> Attention: Le README de l'installation de la partie 1 du TP est obsolète. Veuillez utiliser le README de la dernière version (celui-ci). 

Pour accéder à la partie 1 du TP, lancer la commande:
```bash
git checkout tags/tp1
```

Pour accéder à la partie 2 du TP, lancer la commande:
```bash
git checkout master
```

Lancer les commandes suivantes afin de changer les droits et lancer les conteneurs: 

```bash
chown -R www-data:www-data ./docker/www/uploads
docker-compose up -d
```

Puis pour se connecter, accéder à l'url suivante : http://localhost/

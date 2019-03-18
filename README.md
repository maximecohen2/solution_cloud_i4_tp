# Solution Cloud : TP

Réalisé par Maxime COHEN

### Sujet 

Nous souhaitons que l'application puisse être déployée par Docker afin de faciliter son intégration sur différentes plate-formes et notamment sur le Cloud.

La base test fournie dans le dépôt doit être chargée par défaut dès le déploiement de l'application afin que celle-ci soit opérationnelle immédiatement.
Il doit y avoir au minimum un container pour l'application PHP et un pour la base de données MySQL.

Dépôt : https://gl.avalone-fr.com/anthony/i4-gestion-produits

### Solution

Lancer la commande 

```bash
docker-compose up -d
```

Puis pour se connecter, accéder à l'url suivante : http://localhost/

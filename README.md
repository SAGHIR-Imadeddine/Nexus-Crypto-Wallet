# Nexus Crypto Wallet

## Description

Dans un monde financier en constante évolution, Nexus Crypto Wallet se distingue en offrant une plateforme unique qui fournit des mises à jour en temps réel sur les prix des cryptomonnaies. Cette plateforme permet aux utilisateurs de gérer efficacement leurs portefeuilles de cryptomonnaies et de réaliser des transactions sécurisées.

## User Stories

- Les utilisateurs, identifiés par leur nom, prénom, date de naissance, NexusID, email et mot de passe, peuvent :
  - Gérer leur propre liste de suivi (watchlist) pour se tenir informé des cryptomonnaies qui les intéressent.
  - Consulter les prix, classement, market cap, volume 24H, circulating_supply et total_supply actualisés de leur watchlist, des latest ou des dix meilleurs projets en cryptomonnaies pour rester informés du marché.
  - Importer des cryptomonnaies identifiées par des attributs tels que leur nom, symbol, slug et max_supply via une API pour étendre leur watchlist.
  - Gérer un portefeuille virtuel pour leurs cryptomonnaies.
  - Effectuer des achats et des ventes de cryptomonnaies directement depuis l'application.
  - Envoyer des cryptomonnaies à d'autres utilisateurs via leur NexusID ou leur email pour des transactions sécurisées et rapides.
  - Recevoir une notification quand ils effectuent une opération ou bien quand ils reçoivent des cryptomonnaies.
  - Visualiser les statistiques de leur portefeuille sous forme graphique (Chart.js).
  - Recevoir un code de vérification par email pour une authentification sécurisée.

## Conception UML

- Diagramme de cas d'utilisation
- Diagramme de classe
- Diagrammes de séquence

## Technologies Utilisées

- Back-end (PHP POO/MVC + Routing)
- Front-end (HTML/CSS, JS, Tailwind)
- Base de données (SQL)
- API externe (https://coinmarketcap.com/api/documentation/v1/)

## Installation

1. **Cloner le Répertoire**
    ```bash
    git clone https://github.com/SAGHIR-Imadeddine/Nexus-Crypto-Wallet.git
    ```

2. **Configuration de la Base de Données**
    - Créer une base de données dans le système de gestion de base de données choisi.
    - Importer le schéma de base de données fourni dans le fichier `nexus.sql`.

3. **Configurer la Connexion à la Base de Données**
    - Modifier les paramètres de connexion à la base de données dans le fichier `config/config.php`.

4. **Lancer l'Application**
    - Accéder à l'application via un navigateur web.

## Contributions

Les contributions visant à améliorer les fonctionnalités, la sécurité et l'accessibilité du système sont les bienvenues. Veuillez suivre les normes et directives de codage établies.


## Auteur

- [Douae Sebti](https://github.com/Douaesb)
- [Zineb Machrouh](https://github.com/zinebMachrouh)

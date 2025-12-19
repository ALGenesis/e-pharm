# E-Pharm - Plateforme de Gestion Pharmaceutique

## 📋 Description du Projet
E-Pharm est une plateforme de gestion pharmaceutique en ligne qui permet aux entreprises du secteur pharmaceutique de gérer leurs produits, commandes et stocks de manière efficace.

## 🚀 Fonctionnalités Principales
- Gestion des utilisateurs et des rôles (admin, utilisateur)
- Gestion des entreprises pharmaceutiques
- Catalogue de produits avec catégories
- Système de commandes en ligne
- Suivi des stocks
- Tableau de bord d'administration

## 🛠️ Prérequis
- PHP 7.4 ou supérieur
- MySQL 5.7 ou supérieur
- Serveur web (Apache/Nginx)
- Composer (pour la gestion des dépendances)

## 🚀 Installation

1. **Cloner le dépôt**
   ```bash
   git clone [URL_DU_REPO]
   cd e-pharm
   ```

2. **Configurer la base de données**
   - Créer une base de données MySQL nommée `epharm_db`
   - Importer le schéma SQL : `sql/epharm-mcd.sql`
   - Importer les données de test : `sql/insert/insert-data.sql`

3. **Configurer l'application**
   - Modifier les paramètres de connexion dans `includes/config/db.inc.php`
   ```php
   const DB_HOST = 'localhost';
   const DB_NAME = 'epharm_db';
   $db_user = 'root';  // Votre utilisateur MySQL
   $db_pass = '';      // Votre mot de passe MySQL
   ```

4. **Méthode 1 : Avec le serveur PHP intégré**
   ```bash
   php -S localhost:8000
   ```
   Accédez à l'application via `http://localhost:8000`

5. **Méthode 2 : Avec Laragon**
   - Copiez ou déplacez le dossier du projet dans le répertoire `www` de Laragon (généralement `C:\laragon\www\`)
   - Démarrer Laragon s'il n'est pas déjà en cours d'exécution
   - Cliquez sur "Start All" dans l'interface de Laragon
   - Accédez à l'application via `http://e-pharm.test` (ou `http://localhost/e-pharm` si les noms de domaine virtuels ne sont pas configurés)

   

## 📁 Structure du Projet
```
e-pharm/
├── assets/          # Ressources statiques (images, polices, etc.)
├── data/            # Données fictives de l'application (JSON)
├── includes/        # Fichiers PHP inclus
│   ├── config/      # Configuration de l'application
│   └── utils/       # Utilitaires et helpers
├── pages/           # Pages de l'application
├── script/          # Scripts JavaScript
├── sql/             # Fichiers de base de données
│   └── insert/      # Données d'exemple
├── styles/          # Feuilles de style CSS
└── index.php        # Point d'entrée principal
```

## 🔐 Authentification
- **Admin** : Accès complet à l'application
- **Entreprise** : Gestion des produits et commandes
- **Utilisateur** : Consultation et commande de produits

## 🔄 Workflow de Développement
1. Créer une nouvelle branche pour votre fonctionnalité
   ```bash
   git checkout -b feature/nom-de-la-fonctionnalite
   ```
2. Pour ajouter une nouvelle page :
   - Copier `template.html` dans le dossier `pages/`
   - Créer un fichier CSS correspondant dans `styles/`
   - Utiliser des classes spécifiques pour le style
   - Tester sur différentes tailles d'écran

3. Soumettre une pull request pour révision

## 📝 Conventions de Code
- **PHP** : PSR-12
- **HTML** : HTML5 sémantique
- **CSS** : BEM methodology
- **JavaScript** : ES6+

## 📊 Base de Données
Le schéma de base de données inclut les tables suivantes :
- `users` : Gestion des utilisateurs
- `entreprises` : Entreprises pharmaceutiques
- `products` : Produits en vente
- `categories` : Catégories de produits
- `orders` & `orders_details` : Gestion des commandes
- `roles` & `staff` : Gestion des rôles et permissions

## 🤝 Contribution
Les contributions sont les bienvenues ! Merci de lire les [directives de contribution](CONTRIBUTING.md) avant de soumettre des changements.

## 📄 Licence
Ce projet est sous licence MIT. Voir le fichier `LICENSE` pour plus de détails.

## 📞 Contact
Pour toute question, veuillez ouvrir une issue ou contacter l'équipe de développement.
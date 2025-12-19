# Guide de Contribution pour E-Pharm

Merci de contribuer à E-Pharm ! Voici comment vous pouvez nous aider à améliorer ce projet.

## 📋 Avant de Commencer

1. **Ouvrir un ticket**
   - Vérifiez d'abord si un ticket existe déjà pour votre problème ou votre fonctionnalité
   - Si ce n'est pas le cas, créez un nouveau ticket en détaillant clairement le problème ou la fonctionnalité

2. **Discutez des changements majeurs**
   - Pour les changements importants, ouvrez d'abord une discussion pour discuter de ce que vous aimeriez changer
   - Cela permet d'éviter le travail en double et de s'assurer que vos efforts sont alignés avec la vision du projet

## 🛠️ Processus de Développement

### Configuration de l'Environnement

1. **Fork et Clone**
   ```bash
   # Fork le dépôt
   # Puis clonez votre fork
   git clone https://github.com/votre-utilisateur/e-pharm.git
   cd e-pharm
   ```

2. **Branche de Fonctionnalité**
   - Créez une branche pour votre fonctionnalité :
     ```bash
     git checkout -b feature/nom-de-la-fonctionnalite
     ```
   - Pour les corrections de bugs :
     ```bash
     git checkout -b bugfix/courte-description
     ```


### Normes de Code

1. **PHP**
   - Suivez les standards PSR-12
   - Utilisez le typage strict
   - Documentez vos fonctions avec PHPDoc
   - Exemple :
     ```php
     /**
      * Calcule le total d'une commande
      *
      * @param array $items Tableau d'items de commande
      * @return float Total de la commande
      * @throws InvalidArgumentException Si les items ne sont pas valides
      */
     public function calculateOrderTotal(array $items): float
     {
         // Implémentation
     }
     ```

2. **JavaScript**
   - Utilisez ES6+
   - Évitez les variables globales
   - Utilisez des noms de variables descriptifs

3. **CSS**
   - Suivez la méthodologie BEM
   - Utilisez des variables CSS pour les couleurs et les espacements
   - Exemple :
     ```css
     .product-card {
         /* styles */
     }
     
     .product-card--featured {
         /* modificateur */
     }
     
     .product-card__title {
         /* élément */
     }
     ```

### Tests

1. **Tests Unitaires**
   - Écrivez des tests pour les nouvelles fonctionnalités
   - Assurez-vous que tous les tests passent avant de soumettre une PR
   - Exécutez les tests avec :
     ```bash
     php vendor/bin/phpunit
     ```

2. **Tests d'Intégration**
   - Testez manuellement les flux principaux de l'application
   - Vérifiez la compatibilité entre navigateurs si vous modifiez le frontend

## 📤 Soumettre des Modifications

1. **Valider les Modifications**
   ```bash
   # Ajoutez les fichiers modifiés
   git add .
   
   # Créez un commit descriptif
   git commit -m "feat: ajoute la fonctionnalité de recherche"
   
   # Poussez vers votre fork
   git push origin votre-branche
   ```

2. **Pull Request**
   - Allez sur GitHub et créez une nouvelle Pull Request
   - Remplissez le modèle de PR fourni
   - Assurez-vous que tous les tests CI passent
   - Assignez un réviseur approprié

3. **Révision du Code**
   - Les PR nécessitent au moins une approbation avant fusion
   - Répondez aux commentaires de révision
   - Poussez les modifications supplémentaires si nécessaire

## 📝 Bonnes Pratiques

- **Messages de Commit**
  - Utilisez le format conventionnel : `type(portée): description`
  - Types : feat, fix, docs, style, refactor, test, chore
  - Exemple : `feat(products): ajoute la recherche de produits`

- **Documentation**
  - Mettez à jour la documentation pour les nouvelles fonctionnalités
  - Ajoutez des commentaires pour le code complexe

- **Sécurité**
  - Ne committez jamais d'informations sensibles (mots de passe, clés API)
  - Validez et échappez toutes les entrées utilisateur

## 🤝 Rejoindre la Communauté

- Rejoignez notre [espace de discussion]()
- Participez aux revues de code
- Aidez à trier les problèmes et à reproduire les bugs

Merci de contribuer à E-Pharm ! Votre travail est grandement apprécié. 🚀

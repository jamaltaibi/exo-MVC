# Gestionnaire de Tâches MVC

Bienvenue dans mon projet de gestionnaire de tâches MVC ! Ce projet est une application web qui permet aux utilisateurs de gérer des tâches quotidiennes via une interface simple.

## Structure du Projet

- **index.php** : Point d'entrée de l'application qui gère le routage et l'initialisation.
- **controllers/controller.php** : Contient la logique de contrôle, traitant les requêtes utilisateur.
- **models/model.php** : Gère l'accès et les manipulations des données de la base de données.
- **views/** : Contient les fichiers HTML affichés à l'utilisateur.
  - **header.php** : L'en-tête de l'application.
  - **base.php** : La structure de base de l'application.
  - **tabaffichage.php** : Affiche la liste des tâches.
  - **tabtache.php** : Formulaire pour soumettre de nouvelles tâches.

## Fonctionnalités

- **Gestion des tâches** : Permet aux utilisateurs d'ajouter, modifier et supprimer des tâches.
- **Navigation simplifiée** : Utilise des liens pour naviguer entre la vue des tâches et la soumission de nouvelles tâches.

## Aperçu de la Mise en Page

### index.php

- Initialise l'application et gère le routage basé sur les paramètres de l'URL.

### controllers/controller.php

- **index()** : Charge les composants principaux de la vue.
- **affichageTaches()** : Affiche la liste des tâches.
- **soumettreTache()**, **entrerTache()**, **modifierTache()**, **supptache()** : Gèrent les opérations CRUD sur les tâches.

### models/model.php

- Gère la connexion à la base de données et les opérations SQL.

### views/tabaffichage.php et tabtache.php

- **tabaffichage.php** : Affiche toutes les tâches existantes avec des options pour les modifier ou les supprimer.
- **tabtache.php** : Formulaire pour entrer de nouvelles tâches.

## Installation

1. Clonez le dépôt :
    ```bash
    https://github.com/jamaltaibi/exo-MVC.git
    ```
2. Configurez votre serveur web pour pointer vers le dossier contenant `index.php`.
3. Importez le schéma de la base de données situé dans `schema.sql` dans votre système de gestion de base de données.
4. Modifiez les paramètres de connexion dans `models/model.php` pour correspondre à votre environnement de base de données.

## Utilisation

Ouvrez votre navigateur web et accédez à l'adresse où vous avez configuré votre serveur web. Utilisez la navigation pour gérer vos tâches.

## Auteur

- **Taibi Jamal**

---

© Taibi Jamal

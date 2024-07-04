### Exercice : Création d'une Application Todolist pour une Entreprise de Gravure

#### Objectif
Réaliser une application Todolist destinée à une entreprise de gravure. Cette application permettra aux employés de gérer leurs tâches quotidiennes. Le projet sera divisé en trois parties principales : la maquette de l'application, la création d'un site web statique avec des formulaires, et la persistance des données dans un fichier JSON. Le tout sera structuré et stylisé en utilisant Bootstrap 5.3.

#### Partie 1 : Maquette de l'application avec Figma

1. **Installation et prise en main de Figma**
   - Créez un compte Figma et familiarisez-vous avec l'interface.
   - Suivez des tutoriels de base pour comprendre les fonctionnalités principales.

2. **Création de la maquette**
   - Concevez une maquette représentant l'application Todolist.
   - La maquette doit inclure les pages suivantes :
     - **Page d'accueil** : Affiche la liste des tâches avec options pour ajouter, éditer et supprimer des tâches.
     - **Formulaire d'ajout/édition de tâche** : Formulaire permettant de créer ou modifier une tâche (titre, description, date d'échéance, statut).
   - Utilisez des composants réutilisables pour les éléments de l'interface (boutons, champs de formulaire, etc.).

#### Partie 2 : Réalisation du site web statique

1. **Mise en place du projet**
   - Créez un dossier de projet et structurez-le comme suit :
     - `index.html`
     - `form.html`
     - `style.css`
     - `script.js`
     - `data.json`
   - Incluez les fichiers nécessaires pour Bootstrap 5.3 (CSS et JS).

2. **Création des pages HTML**
   - **index.html** :
     - Implémentez la page d'accueil de l'application.
     - Utilisez Bootstrap pour structurer la liste des tâches.
   - **form.html** :
     - Implémentez le formulaire d'ajout/édition de tâche.
     - Utilisez les composants de formulaire de Bootstrap pour les champs de saisie.
   - **style.css** :
     - Ajoutez du style personnalisé si nécessaire.

3. **Interactivité avec JavaScript**
   - **script.js** :
     - Ajoutez du code pour gérer l'ajout, l'édition et la suppression des tâches.
     - Utilisez le LocalStorage ou un fichier JSON pour la persistance des données.

#### Partie 3 : Persistance des données dans un fichier JSON

1. **Structure du fichier JSON**
   - **data.json** :
     ```json
     [
       {
         "id": 1,
         "title": "Tâche exemple",
         "description": "Description de la tâche",
         "dueDate": "2024-05-30",
         "status": "en cours"
       }
     ]
     ```

2. **Gestion des données avec JavaScript**
   - Utilisez JavaScript pour lire et écrire dans le fichier JSON.
   - Implémentez des fonctions pour charger les tâches depuis le JSON et les afficher sur la page.
   - Implémentez des fonctions pour ajouter, éditer et supprimer des tâches, et mettre à jour le JSON en conséquence.

#### Livrables

1. **Figma** :
   - URL du projet Figma contenant la maquette de l'application.

2. **Site web** :
   - Les fichiers HTML, CSS et JavaScript.
   - Un fichier JSON contenant des exemples de tâches.
   - Un document expliquant l'architecture du projet et comment l'exécuter.

#### Évaluation

- **Qualité de la maquette Figma** : Respect des consignes, cohérence et esthétique de l'interface.
- **Fonctionnalité du site web** : Capacité à ajouter, éditer et supprimer des tâches, persistance des données.
- **Utilisation de Bootstrap 5.3** : Conformité avec les bonnes pratiques de Bootstrap, responsive design.
- **Qualité du code** : Propreté, organisation et commentaires dans le code.

---

Bonne chance dans la réalisation de votre application Todolist !

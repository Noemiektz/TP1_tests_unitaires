# README - Tests et Analyse des Performances

## Objectif
Ce projet a consisté à tester une application web de gestion de tâches en réalisant des tests fonctionnels, end-to-end (E2E), de non-régression et une analyse des performances.

---

## 1. Tests fonctionnels
### Réalisation
- Test des fonctionnalités d'ajout et de suppression d'une tâche.
- Vérification que chaque action produit le résultat attendu.

### Résultat
✅ Fonctionnalités validées avec succès.

---

## 2. Test E2E avec Cypress
### Réalisation
- Automatisation du scénario :
  1. Connexion à l'application.
  2. Ajout d'une tâche.
  3. Vérification de son affichage.
  4. Suppression et validation de la suppression.

### Résultat
✅ Tests automatisés passés avec succès.

---

## 3. Test de non-régression
### Réalisation
- Ajout de la fonctionnalité d’échéance aux tâches.
- Exécution de la suite de tests pour valider que les fonctionnalités existantes restent opérationnelles.

### Résultat
✅ Aucun impact négatif détecté après l'ajout de la nouvelle fonctionnalité.

---

## 4. Analyse des performances avec JMeter
### Réalisation
- Simulation de 50 utilisateurs ajoutant des tâches simultanément.
- Analyse des temps de réponse du serveur.

### Résultat
✅ Temps de réponse acceptables et absence de goulots d'étranglement majeurs.

---

## Rendu
- Captures d’écran des tests et de l’analyse des performances fournies.
- Travail réalisé en collaboration avec [Nom du collaborateur si applicable].

🚀 Projet terminé avec succès !

# BeAPI Blocks Theme

## Installation

Vous devrez d'abord installer les dépendances :
```bash
composer install
yarn
```

Après l'installation, vous pouvez utiliser les commandes suivantes pour gérer l'environnement local :
```bash
# Démarrer l'environnement local (disponible à http://localhost:8889)
yarn wp-env-start

# Arrêter l'environnement local
yarn wp-env-stop

# Réinitialiser la base de données (supprimera toutes les données de manière permanente)
yarn wp-env-clean

# Supprimer l'environnement local (supprimera toutes les données et fichiers de manière permanente)
yarn wp-env-destroy
```

Après l'installation, vous pouvez utiliser les commandes suivantes pour la génération des assets :
```bash
# Observe les modifications du dossier src
yarn start

# Génère les assets pour la production
yarn build
```

## Theme.json

Le fichier `theme.json` est généré automatiquement.

Il est stocké à la racine du thème et est utilisé pour configurer le thème dans l'interface Gutenberg. Il ne faaut pas éditer le fichier `theme.json` manuellement.

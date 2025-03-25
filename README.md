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
yarn wp-env start

# Arrêter l'environnement local
yarn wp-env stop

# Réinitialiser la base de données (supprimera toutes les données de manière permanente)
yarn wp-env clean

# Supprimer l'environnement local (supprimera toutes les données et fichiers de manière permanente)
yarn wp-env destroy
```

Après l'installation, vous pouvez utiliser les commandes suivantes pour la génération des assets :
```bash
# Observe les modifications du dossier src
yarn start

# Génère les assets pour la production
yarn build
```

## Theme.json

Le fichier `theme.json`, stocké à la racine du thème, est utilisé pour configurer le thème dans l'interface Gutenberg. Il est généré automatiquement à partir des fichiers json dans `src/theme-json/`. 

**Il ne faut pas l'éditer manuellement !**

Le plugin `WebpakThemeJsonPlugin` dans le dossier `config/` qui se charge de la concaténation génère également le fichier `_theme-json.scss` dans le dossier `src/scss/00-variables/`. Les variables de couleurs ainsi que les variables customs y sont exportées :

```json
{
	"version": 3,
	"$schema": "https://schemas.wp.org/trunk/theme.json",
	"settings": {
		"custom": {
			"h1": {
				"lineHeight": "1.11"
			},
        }
    }
}
```

Deviendra dans le fichier `_theme-json.scss` :

```scss
$settings-custom-h1-line-height: 1.11
```

## Single news

4 heros sont disponibles pour la single news, `parts/hero-single-[1-4].php`. Pour le modifier, il faut changer le numéro au niveau de l’inclusion du pattern dans le fichier `templates/single.html`. Puis sélectionner le numéro correspondant de le fichier `00-variables/_config.scss`

```html
<!-- wp:pattern {"slug":"beapi-blocks-theme/hero-single-3"} /-->
```

```scss
$hero-single-variations: (3);
```

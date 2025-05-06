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

### Convention de nommage

Les fichiers sont nommés suivant la profondeur de l’objet, ainsi le fichier contenant le json suivant :

```json
{
    "version": 3,
    "$schema": "https://schemas.wp.org/trunk/theme.json",
    "styles": {
        "blocks": {
            "core/paragraph": {
                ...
            }
        }
    }
}
```

Sera nommé :

```bash
styles-blocks-coreParagraph.json
```

## Archive news

2 mises en formes sont disponibles pour l'archive news, `patterns/hidden-home-content-[1-2].php`. Pour la modifier, il faut changer le numéro au niveau de l’inclusion du pattern dans le fichier `templates/home.html`. Puis sélectionner le numéro correspondant dans le fichier `00-variables/_config.scss`

```html
<!-- wp:pattern {"slug":"beapi-blocks-theme/hidden-home-content-2"} /-->
```

```scss
$home-variations: (2);
```

## Single

4 heros sont disponibles pour les singles, `patterns/hidden-hero-single-[1-4].php`. Pour le modifier, il faut changer le numéro au niveau de l’inclusion du pattern dans le fichier template, ex : `templates/single.html`. Puis sélectionner le numéro correspondant dans le fichier `00-variables/_config.scss`

```html
<!-- wp:pattern {"slug":"beapi-blocks-theme/hero-single-3"} /-->
```

```scss
$hero-single-variations: (3);
```

## Résultats de recherche

2 mises en formes sont disponibles pour les résultats de recherche, `patterns/hidden-search-results-[1-2].php`. Pour la modifier, il faut changer le numéro au niveau de l’inclusion du pattern dans le fichier `templates/search.html`.
```html
<!-- wp:pattern {"slug":"beapi-blocks-theme/hidden-search-results-2"} /-->
```

## Single Event

2 heros sont disponibles pour les singles, `patterns/hidden-hero-single-event-[1-2].php`. Pour le modifier, il faut changer le numéro au niveau de l’inclusion du pattern dans le fichier template, ex : `templates/single-sc_event.html`.

```html
<!-- wp:pattern {"slug":"beapi-blocks-theme/hidden-hero-single-event-1"} /-->
```

Il est possible de désactiver les styles relatifs à sugar calendar en  modifiant la variable dans le fichier `00-variables/_config.scss`

```scss
$has-sugar-calendar-enabled: false;
```
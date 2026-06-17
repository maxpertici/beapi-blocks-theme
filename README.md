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

## Générateur de patterns (CLI Tempest)

Le thème expose une commande CLI basée sur Tempest Console pour générer les fichiers d'un pattern à partir de stubs versionnés.

### Pré-requis

```bash
composer install
composer require --dev tempest/console:^1.0.0-alpha.4
```

### Stubs

Les stubs sont stockés dans :

- `stubs/pattern-generator/pattern.php.stub`
- `stubs/pattern-generator/pattern.scss.stub`

Vous pouvez ajouter des variantes par catégorie :

- `stubs/pattern-generator/{category}.pattern.php.stub`
- `stubs/pattern-generator/{category}.pattern.scss.stub`

### Utilisation

```bash
beapi make:pattern "Nom du pattern"
```

En local dans le dépôt, l'entrée correspond au binaire `./beapi` :

```bash
./beapi make:pattern "Nom du pattern"
```

Options disponibles :

- `--slug=` : slug personnalisé (sinon slug généré depuis le nom)
- `--category=` : catégorie (`common` ou `hero`)
- `--title=` : titre du pattern dans l'entête PHP
- `--description=` : description du pattern dans l'entête PHP
- `--only-php` : génère uniquement `patterns/{slug}.php`
- `--only-scss` : génère uniquement `src/scss/wp-pattern/{slug}.scss`
- `--force` : écrase les fichiers existants

### Conventions générées

- Le template PHP est créé dans `patterns/{slug}.php`
- Le SCSS est créé dans `src/scss/wp-pattern/{slug}.scss`
- Le slug est normalisé et partagé entre nom de fichier, slug WordPress et classe CSS `wp-pattern-{slug}`

Le markup généré inclut la classe `wp-pattern-{slug}` pour permettre le chargement automatique du SCSS côté front.

## Assets splitting

``` bash
|_ src
    |_ js
        |_ common # Fichiers editor.js, index.js ...
        |_ template # Fichier nommés selon la class du body (home.js, blog.js, single.js, single-post.js, ...)
        |_ wp-block # Fichiers nommés selon la class du block sans wp-block- (ex: button.js, beapi-icon.js...)
        |_ wp-pattern # Fichiers nommés selon la class du pattern sans wp-pattern-
    |_ scss
        |_ common # Fichiers editor.scss, style.scss ...
        |_ template # Fichier nommés selon la class du body (home.scss, blog.scss)
        |_ wp-block # Fichiers nommés selon la class du block sans wp-block- (ex: button.scss, beapi-icon.scss...)
        |_ wp-pattern # Fichiers nommés selon la class du pattern sans wp-pattern-
```

### Chargement des assets

Le chargment des fichiers présents dans les dossiers `common/` doit être déclaré explicitement dans le fichier `Assets.php`. Le chargement des assets est automatique pour les fichiers présents dans les dossier `template/`, `wp-block/` et `wp-pattern/`.

Les assests des dossiers `wp-block/` sont ajoutés aux metadatas des blocs. Pour les dossiers `template/` et `wp-pattern/`, les assets sont chargés en fonction des classes présentes sur les blocks et sur les classes présentes à l'appel de la fonction php `get_body_class()`. Point de vigilance, la fonction `get_body_class()` est appellée au moment du hook `wp_enqueue_scripts`, des classes customs peuvent potentiellement être absentes.

Pour l'éditeur, la totalité des assets est chargée sans détection.

#### Exemples de nommage
- `wp-block/button.scss` sera chargé si un bloc button est présent dans la page.
- `wp-block/beapi-icon.scss` sera chargé si un bloc beapi icon est présent dans la page.
- `wp-block/columns.scss` sera chargé si un bloc columns est présent dans la page.
- `wp-pattern/card.scss` sera chargé si un bloc ayant la class `wp-pattern-card` est présent dans la page.
- `wp-template/home.scss` sera chargé si la balise `body` possède la class `home`

### Exposition des ressources JS communes

Le fichier `index.js` et `editor.js` importent le fichier `js/utils/beapi.js` qui expose les classes, instances et objets communs :
```js
import AbstractDomElement from '../classes/AbstractDomElement';
import scrollDirection from '../classes/ScrollDirection';
import * as oneloop from 'oneloop.js';
import extend from './extend';

// ----
// First declaration of beapi object is normally done in Assets.php
// ----
window.beapi = window.beapi || {};

// ----
// Expose classes and libraries for partial assets (wp-block, wp-pattern, template)
// ----
extend(window.beapi, {
	classes: {
		AbstractDomElement,
	},
	libraries: {
		oneloop,
	},
	instances: {
		scrollDirection,
	},
});
```

L'objet `beapi` est ensuite accessible dans les fichiers partiels, voir le fichier `js/wp-block/button.js` :
```js
/**
 * Button block
 */

const AbstractDomElement = window.beapi.classes.AbstractDomElement;
const oneloop = window.beapi.libraries.oneloop;
const scrollDirection = window.beapi.instances.scrollDirection;

class Button extends AbstractDomElement {
	constructor(element, options) {
		const instance = super(element, options);

		// avoid double init :
		if (!instance.isNewInstance()) {
			return instance;
		}

		// eslint-disable-next-line no-console
		console.log(
			'[Button] constructor',
			this._element,
			oneloop,
			scrollDirection
		);
	}
}

Button.init('.wp-block-button');
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

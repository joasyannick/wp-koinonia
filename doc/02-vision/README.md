# Document de vision

Ce répertoire contient le document de vision du projet, rédigé en DocBook 5.1 et transformable en HTML.

## Contenu

- `vision.xml` : fichier source au format DocBook 5.1.
- `vision.html` : rendu HTML généré à partir de `vision.xml`.

## Prérequis

- Savoir se servir d’une invite de commandes.
- [Java Runtime Environment (JRE)](https://www.oracle.com/java/) version 8 ou supérieure, fournissant la commande `java`.
  - Vérifiez l’installation avec :
    ```sh
    java -version
    ```
- DocBook, Jing et Saxon sont fournis dans le répertoire `../01-common` :
  - `../01-common/01-tools/01-docbook/5.1/docbook.rng` : règles de syntaxe du format DocBook 5.1.
  - `../01-common/01-tools/02-jing/20091111/jing.jar` : [Jing](https://relaxng.org/jclark/jing.html), validateur de `vision.xml`.
  - `../01-common/01-tools/03-saxon/he-12.7/saxon-he-12.7.jar` : [Saxon](https://www.saxonica.com/download/java.xml), générateur de `vision.html`.

## Validation du format

Si la commande suivante s’exécute sans erreur :
```sh
java -jar '../01-common/01-tools/02-jing/20091111/jing.jar' \
  '../01-common/01-tools/01-docbook/5.1/docbook.rng' \
  vision.xml
```
alors `vision.xml` est conforme aux règles de syntaxe du format DocBook 5.1.

## Génération du HTML

La commande suivante génère `vision.html` :
```sh
java -cp '../01-common/01-tools/03-saxon/he-12.7/saxon-he-12.7.jar' \
  net.sf.saxon.Transform \
  -s:vision.xml \
  -xsl:../01-common/02-templates/koinonia.xsl \
  -o:vision.html \
  user-css-links=../01-common/02-templates/koinonia.css
```
Ouvrez ensuite `vision.html` dans un navigateur web. La feuille de style CSS `../01-common/02-templates/koinonia.css` offre un rendu de qualité à l’impression, notamment au format PDF.

## Point de contact

Le document de vision est sous la responsabilité du chef de produit. Pour toute question, suggestion ou contribution, ses coordonnées sont indiquées dans `03-team/02-people`.

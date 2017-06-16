# Materialize Template
Dieses Template basiert auf HTML5 mit der Materialize Library.

![screenshots](https://raw.githubusercontent.com/DoM1niC/Materialize-Template/master/screenshots.jpg)
#### Demo: http://demo.dom1nic.eu

## Voraussetzung
- NGINX oder Apache Webserver
- PHP 5 / 7 

## Installation
- Webseite auf beliebigen Server mit PHP kopieren und aufrufen.
- keine Installation von Datenbanken notwendig, alle Bereiche werden per Hand bearbeitet mit einem Editor.

## FAQ
**Frage**: Wie bearbeite ich einzelne Bereiche?

Antwort: Fast alle Bereiche können über die PHP Dateien bearbeitet werden mit puren HTML5, sonst Index.php anpassen! (Siehe Ordner sections,modals usw.)


**Frage**: Wie setze ich den SMTP Server für das Kontaktformular fest?

Antwort: sections/footer/config.php bearbeiten!


**Frage:** Wie setze ich mein Facebook Konto unter "Über Mich"?

Antwort: sections/aboutme/facebook.php bearbeiten!


**Frage:** Wie setze ich den Namen der Seite?

Antwort: sitename.php anpassen!


**Frage:** Bilder & Video Gallerie Inhalte?

Antwort: Werden automatisch ausgelesen vom uploads Ordner.


**Frage:** Wie setze ich den Zeitplan?

Antwort: Einfach mit einem beliebigen Editor unter sections/timetable.json bearbeiten.


**Frage:** Wie füge ich Produkte in den Shop?

Antwort: Unter sections/shop_products.php beliebige Einträge bearbeiten und hinzufügen.


## Geplant
- Artikel / News Script, verfassen von Inhalten mit einem HTML Editor

### Verwendete Libraries
[Materialize](http://materializecss.com/), a CSS Framework based on material design

[VideoJS](http://videojs.com), Video Player

[JQuery](https://jquery.com/)

[Font Awesome](http://fontawesome.io), Symbole & Icon's

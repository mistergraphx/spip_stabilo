# Stabilo

## Description

Permettre au rédacteur de surligner des parties de texte

## Fonctionnalités

Le plugin ajoute des boutons dans la barre d'outils typographique de spip,
permettant de surligner des parties de texte pour les mettre en évidence.

| Raccourcis | Description|
|--|--|
| `[* Texte surligné 1]`      | Surligne le texte avec la couleur 1 |
| `[** Texte surligné 2]`     | Surligne le texte avec la couleur 2 |
| `[*** Texte surligné 2]`    | Surligne le texte avec la couleur 3 |


## Sources et docs

http://romy.tetue.net/stabilo-web

https://html.spec.whatwg.org/multipage/text-level-semantics.html#the-mark-element
https://www.alsacreations.com/astuce/lire/1378-html5-element-mark.html

Accessibilité :
https://codepen.io/jacmaes/pen/sDiof utilise le aria-label pour décrire le surlignage

## Todo

- [ ] Rendre accessible : la couleur ne suffit pas,
 La couleur de surlignage doit être décrite via un aria-label, voir une explication visuelle, pour un daltonien
- [ ] Rendre configurable, avec choix des couleurs background/foreground
- [ ] Personnaliser les classes ? Ou les couleurs ?
- [ ] Personnaliser le markup span, div, strong, mark

# Stabilo

Surligner des parties de texte, avec des couleurs et de manière accessible.

![](https://framapic.org/pDkNGJH05k4G/SniYfn85ukWL)

## Fonctionnalités

Le plugin ajoute des boutons dans la barre d'outils typographique de spip,
permettant de surligner des parties de texte pour les mettre en évidence.

| Raccourcis | Description|
|--|--|
| `[* Texte surligné 1 *]`      | Surligne le texte avec la couleur 1 |
| `[** Texte surligné 2 *]`     | Surligne le texte avec la couleur 2 |
| `[*** Texte surligné 3 *]`    | Surligne le texte avec la couleur 3 |

Les couleurs de surlignage sont configurables depuis l'espace privé,
Ainsi que leur description textuelle,
qui est utilisé dans le rendu comme aria-label du texte mis en évidence.
La description est affiché en infobulle lors du survol.

## Sources et docs

* http://romy.tetue.net/stabilo-web
* https://html.spec.whatwg.org/multipage/text-level-semantics.html#the-mark-element
* https://www.alsacreations.com/astuce/lire/1378-html5-element-mark.html


Accessibilité :

* https://codepen.io/jacmaes/pen/sDiof utilise le aria-label pour décrire le surlignage
* https://developer.paciellogroup.com/blog/2017/12/short-note-on-making-your-mark-more-accessible/


## Todo

- [ ] Une option pour ne pas afficher les notes coté public, si on souhaite utiliser les couleurs pour mettre des notes de relecture ou des infos
- [ ] Personnaliser les classes ? Ou les couleurs ?
- [ ] Personnaliser le markup span, div, strong, mark, ins, del

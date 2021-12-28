[Retour à la documentation générale](./index.md)


# Passerelles Zigbee Tuya

Pour utiliser une telle passerelle, choisir le type : "Gateway Hub Tuya Zigbee"

## Compatibilité

Le dialogue entre le plugin et la passerelle se fait en Wifi. Ensuite, le dialogue entre les capteurs et actionneurs et la passerelle se fait via Zigbee. Ils doivent être compatibles Tuya et avoir été inclus d'abord dans l'application Tuya.

Le plugin peut récupérer l'état des périphériques dès que ceux-ci envoient une information de changement d'état ou quand le plugin les interroge au lancement du démon. Si un interrupteur mural est utilisé, Jeedom le saura immédiatement.

Les équipements suivants sont compatibles mais la liste n'est pas exclusive et sera complétée en fonction du retour des utilisateurs.
- passerelles MoesHouse, BENEXMART 
- passerelle SilverCrest Smart Home de Lidl
- toutes les passerelles Tuya/Zigbee sont normalement compatibles, il n'y a pas encore eu de retour de passerelle non compatible.
- serrure Vima (mais pas MiHome)
	le plugin ne peut ouvrir/fermer car la serrure n'est pas prévue pour le faire, mais il peut connaitre la dernière clé utilisée
- capteur de température et d'humidité TYZS2
	fonctionnement complet
- tête thermostatique Hessway
	Ne gère pas la programmation des plages horaires des différents modes mais peut démarrer n'importe quel mode.
	Utiliser l'option "mode étendu" de création des commandes pour créer toutes les commandes du thermostat.
- le double switch variateur QS-Zigbee-D02-TRIAC-LN
- capteur de présence Moes
- capteur de présence BENEXMART
- capteur de température BENEXMART
- capteur de porte BENEXMART
- plug Lonsoho avec conso
- télécommande 3 boutons loratap
- interrupteurs muraux simples/doubles/triples
- télécommande, ampoules blanche et couleur, prises simple et triple Lidl

Tous les autres périphériques, ou les périphériques similaires d'une autre marque ou d'un autre modèle, doivent être entièrement configurés en mode personnalisé. Cependant la configuration générée pour ces modèles peut aider pour un autre.

Néanmoins, la compatibilité de ces périphériques n'est pas garantie car le protocole peut être modifié par les constructeurs. Ne pas modifier le firmware du périphérique sans avoir vérifié qu'il est compatible avec le plugin.

Il faut créer un équipement, avec la même adresse IP et la même clé, pour la passerelle et chaque périphérique connecté à la passerelle.

L'option "Interrogation de l'état" permet de récupérer l'état toutes les 20s même si le périphérique ne le renvoie pas. A utiliser pour les prises électriques qui ne renvoient pas régulièrement la consommation mais ne pas utiliser pour les périphériques à piles sous peine de les vider.


## Clé et identifiant de la passerelle

Il est indispensable de récupérer la clé locale (localKey) et le devId de la passerelle permettant au plugin de dialoguer avec les périphériques.

Pour récupérer la localKey et le devId, la procédure est complexe et nécessite plusieurs manipulations. Faire une recherche sur le web avec comme mot clé : Tuya localKey, sur Github en particulier ou sur le [forum Jeedom](https://community.jeedom.com/t/plugin-wifilightv2-recuperer-id-et-localkey-pour-tuya-smartlife/13047) .

Si la passerelle est désinstallée puis réinstallée dans l'application mobile, alors sa clé sera modifiée. Il faudra retrouver la clé avec la procédure ci-dessus. 

Aucune aide ne sera donnée pour récupérer la clé.

La clé et l'adresse IP des périphériques connectés à la passerelle est la même que celle de la passerelle.


## Clé et identifiant du périphérique

Configurer le périphérique et renseigner la localKey trouvée ci-dessus ainsi que l'adresse IP qui est la même que celle de la passerelle. Il faut ensuite modifier l'état du périphérique avec l'application fournie par le constructeur de la passerelle et consulter les logs.
Dans les logs, lorsque le périphérique renvoie son état, vous trouverez une information comme celle-ci :
    
    Mess :{"dps":{"161":"Esc"},"cid":"ec1bxxxxxxxx28","t":1589301302}
 
Le cid est à copier dans le champ devId du périphérique du plugin (sans les " "). C'est lui qui permet de distinguer 2 équipements connectés à la passerelle.

Nota : si le périphérique ne renvoie pas son état, le cid ne pourra pas être trouvé dans les logs. Les experts pourront retrouver les dps et le cid car ils sont affichés à côté de la localKey lors de la procédure pour trouver la trouver, ils sont juste à côté de celle-ci. Le cid porte le nom de nodeId dans les paquets de l'appli Smartlife.


## Choix du périphérique standard connecté à la passerelle

Si votre périphérique est dans la liste proposée, il devrait fonctionner immédiatement. Si votre périphérique est un peu différent, les n° de dps ou les paramètres peuvent avoir des valeurs différentes que les configurations par défaut. Il est possible de modifier les commandes créées en changeant le n° de dps et le paramètre avec un éventuelle formule de calcul pour retrouver la valeur voulue. Voir [Mode création manuelle des commandes en V3](./tuya#tocAnchor-1-10-8) de la partie Tuya pour interpréter les logs du plugin et comprendre les commandes de la configuration par défaut.


## Création automatique du périphérique en mode inclusion

Pour pouvoir utiliser le mode inclusion des périphériques connectés à la passerelle, il faut au préalable avoir connecté et configuré correctement une passerelle en utilisant le sous-type Gateway Hub Tuya/Zigbee avec son adresse IP et sa localKey. Le périphérique à inclure à la passerelle doit retourner son état, si ce n'est pas le cas, la procédure ne pourra pas fonctionner. Si plusieurs passerelles sont connectées et configurées dans le plugin, il faut activer uniquement la passerelle sur laquelle doit être inclus le périphérique. 
Si aucune passerelle ou plusieurs passerelles sont configurées et actives, le processus d'inclusion sera abandonné. Le périphérique à inclure ne doit pas déjà se trouver dans le plugin, sinon il faut soit le supprimer soit utiliser le mode apprentissage.

- cliquer sur le mode inclusion, attendre quelques instants
- agir sur le périphérique ou modifier l'état du périphérique avec l'appli Smartlife (mais l'usage de l'appli peut bloquer le périphérique : dans ce cas lancer rapidement l'appli Smartlife et agir rapidement sur le périphérique puis quitter l'appli Smartlife) en utilisant toutes les possibilités de l'appli Smartlife ou du périphérique
- cliquer ensuite sur le bouton arrêt de l'inclusion et sauvegarder
- le périphérique est créé et configuré, vous pouvez l'éditer

Il faut inclure un seul périphérique à la fois. Pour exclure un périphérique, il suffit de le supprimer dans le plugin.

Ce mode est uniquement là pour aider la configuration personnalisée d'un nouveau périphérique qui n'est pas proposé par le plugin. L'utilisation de ce mode ne peut donner un périphérique complètement fonctionnel et nécessite de comprendre, de supprimer ou de modifier les commandes créées.

Exemples de modifications :
- Si au dps correspond uniquement une info dans le périphérique (par exemple 3 valeurs possibles d'un même bouton), il faudra supprimer les 3 commandes actions créées automatiquement. Cependant, les commandes actions ont comme paramètre toutes les valeurs récupérées par le plugin et permettent de connaitre les valeurs prises par l'info du dps.
- Pour les dps numériques, une commande info et une commande action numériques sont créés automatiquement, si seule l'info est utile (cas de la température d'un capteur) il faut supprimer la commande action. Si les valeurs numériques prennent les valeurs 0 ou 1 pendant l'apprentissage, le plugin va aussi créer 3 commandes ETAT/ON/OFF, il faudra les supprimer.
- Pour les dps contenant une info 0/1 pour un actionneur tout ou rien, comme une prise électrique, le plugin va créer une info et 2 actions ON/OFF.
- Dans le cas d'un dps contenant true ou false, une commande info et deux commandes action (ON et OFF) sont créés automatiquement, si seule l'info est utile (cas d'un capteur de présence) il faut supprimer les commandes actions.
- Pour des dps contenant une info de couleur, le plugin va identifier le codage de la couleur et créer 3 commandes action et 3 commandes info qui correspondent à Hue Saturation Intensité
- De manière générale, le sous-type créé par le plugin pourra ne pas correspondre à la donnée, il faudra alors faire des tests en le modifiant.

Vous pouvez partager la configuration obtenue en cliquant sur le bouton Exporter. Transférer le contenu du champ configGet et une photo du périphérique au développeur.

## Mode apprentissage

Cocher la case « Mode inclusion » dans la configuration du périphérique et le sauvegarder pour ajouter les commandes oubliées dans la phase précédente ou les commandes non proposées après avoir choisi le sous-type. Terminer en cliquant sur le bouton « arrêter l’inclusion » et sauvegarder.

Si vous partez d'une configuration standard après avoir choisi un sous-type et que vous ajoutez l'apprentissage pour vérifier les dps standards, il faudra modifier les commandes créées par la configuration standard et supprimer les commandes créées par l'apprentissage. En effet, lors de la sauvegarde, les dps standards sont toujours recréés, sinon il est possible de ne pas les afficher.

## Mode création manuelle des commandes

Ce mode est utile pour les commandes qui nécessitent d'être ajustées (dps, paramètre), pour envoyer plusieurs dps en même temps ou pour la gestion des couleurs des lampes, sinon utilisez les sous-types proposés ou le mode apprentissage. 

La procédure nécessite que le périphérique renvoie son état dans les logs. Si le périphérique ne renvoie pas son état, le cid et les dps ne pourront pas être trouvés dans les logs. Les experts pourront retrouver la liste des dps du périphérique et son cid car ils sont affichés à côté de la localKey lors de la procédure pour trouver ces derniers.

Le plugin est équipé de boutons permettant de créer automatiquement les commandes des cas les plus courants, il suffira de modifier le n° de dps ou le paramètre automatiquement créés. Voir [ici](./tuya#tocAnchor-1-10-8) pour la compréhension des logs et la création manuelle des commandes.

## Périphériques alimentés par pile

Pour que le % de capacité soit affiché dans Analyse/Equipements, le nom logique de la commande info correspondante doit contenir battery et get .

# Tuya 

Pour utiliser ces périphériques sans passerelle Tuya/Zigbee, choisir le type : "Tuya SmartLife compatible V3"

## Compatibilité

De nombreuses marques sont compatibles avec le plugin. Consulter le forum pour plus d'informations. Le plugin permet de contrôler de nombreux actionneurs.
Il peut récupérer l'état des périphériques dès que celui-ci envoie une information de changement d'état ou quand il les interroge toutes les minutes. Si un interrupteur mural est utilisé, Jeedom le saura immédiatement.

Les équipements suivants sont compatibles en firmware 1.0. et en firmware 2.0.

-  prises simples avec et sans retour sur la consommation, en particulier les prises wifi Neo Coolcam
-  prises multiples avec et sans consommation avec et sans USB
-  commande de volets roulants (4 types de modèles dont 1 avec led et info de positionnement)
-  interrupteurs muraux : 1, 2 ou 3 inters
-  interrupteur mural avec variateur
-  humidificateur NEWKBO 300 ml et uniquement celui-ci
-  thermostat BHT-6000GCLW / BHT 6000 et uniquement ces modèles
-  ampoules RGBW globe et modèles similaires en fonctionnement
-  smart Garage (beta)
-  2 diffuseurs  dont Maxcio
-  radiateur électrique
-  Proscenic (l'aspirateur n'est pas compatible et la procédure d'intégration est complexe)
-  Fil pilote
-  sirène
-  Alarme (infos uniquement)
-  Radiateur soufflant Lidl

Néanmoins, la compatibilité de ces périphériques n'est pas garantie car le protocole peut être modifié par les constructeurs. Ne pas modifier le firmware du périphérique sans avoir vérifié qu'il est compatible avec le plugin.

Les capteurs de présence et d'ouverture ne sont pas compatibles car ils ne dialoguent pas en local. D'autres périphériques de la liste ci-dessus peuvent aussi avoir un fonctionnement uniquement par internet, ils ne sont pas compatibles avec le plugin. Il faut demander au vendeur si le mode LAN est actif.

## Configuration initiale d'un périphérique

Il est indispensable de récupérer une clé locale (localKey) et un devId permettant au plugin de dialoguer avec les périphériques.

La procédure est complexe et nécessite plusieurs manipulations. Faire une recherche sur le web avec comme mot clé : Tuya localKey, sur Github en particulier ou sur le [forum Jeedom](https://community.jeedom.com/t/plugin-wifilightv2-recuperer-id-et-localkey-pour-tuya-smartlife/13047) .

Le périphérique ne doit pas être connecté à une application sur téléphone mobile, sinon il ne répondra pas aux ordres de Jeedom. Il faut donc fermer toute application possiblement connectée au périphérique.

Si le périphérique est désinstallé puis réinstallé dans l'application mobile, alors sa clé sera modifiée. Il faudra retrouver la clé avec la procédure ci-dessus. 

Aucune aide ne sera donnée pour récupérer la clé locale ou le devId.

## Tuya Smartlife compatible V1
Le type V1 correspond aux périphériques en firmware 1.0 . Les périphériques avec ce firmware ne sont plus vendus et leur firmware peut être mis à jour avec l'application Smartlife. Il n'y aura pas de nouveaux ajouts de périphériques. Il faut passer en V3.

Le plugin teste les périphériques (mais ils doivent être ajoutés manuellement) et affiche un message dans le centre de messages lorsqu'un périphérique a été configuré avec le mauvais firmware.

Il existe quelques périphériques qui annoncent un firmware 1.x et qui pourtant sont des firmware 2.x, comme certaines commandes de volets roulants.

Pour les périphériques multicanaux, comme les prises, il faut créer un wifilightV2 par canal.

Les paramètres de configuration de l'énergie, pour les prises qui la gèrent, permettent d'attribuer le bon dps à la tension, l'ampérage et la puissance (voir ci-après).


## Tuya Smartlife compatible V2
Le type V2 correspond aux périphériques en firmware 2.0 . En plus de cette compatibilité, il y a la possibilité d'ajouter des commandes personnalisées. Il n'y aura pas de nouveaux ajouts de périphériques. Le type V2 ne doit plus être utilisé pour de nouveaux périphériques et est présent pour assurer la compatibilité avec les anciennes versions du plugin, il faut passer en V3

Pour les périphériques multicanaux, comme les prises, il faut créer un wifilightV2 par canal. 

Les paramètres de configuration de l'énergie, pour les prises qui la gèrent, permettent d'attribuer le bon dps à la tension, l'ampérage et la puissance. Pour récupérer ce paramétrage, installer la prise dans Jeedom puis aller dans les logs de wifilightV2. La prise est interrogée toutes les minutes. Repérer le message qui ressemble à :

    Mess : {"devId":"xxxxxxxxxghekqd","dps":{"1":false,"2":false,"9":0,"10":0,"18":0,"19":0,"20":2281,"21":1,"22":726,"23":28971,"24":19417,"25":1070}}

L'index "20" correspond ici à la tension d'alimentation en centaine de mV soit : 228.1 V, elle doit légèrement bouger. Les index "18" et "19" correspondent au courant (mA) et à la puissance en W, ici aucun appareil n'est branché et donc les informations sont à zéro. C'est un bon moyen de trouver la tension, en branchant un appareil, ces 2 valeurs doivent être modifiées et la tension est juste après.

La syntaxe est alors : 20;18;19 qu'il faut mettre dans le champ 'Paramétrage de l'énergie' en V1 et V2 .

Pour les plugs 1 prise, en général il faut : 6;4;5 (mis par défaut par le plugin).

Pour les plugs 2 prises, en général il faut : 9;7;8 (mis par défaut par le plugin).

Pour les autres prises, la valeur 20;18;19 est mise par défaut.


## Tuya Smartlife compatible V3
Le type V3 correspond aux périphériques en firmware 2.0 . En plus de cette compatibilité, il y a la possibilité de modifier finement le n° de dps et les paramètres de dps de tous les périphériques présents en V3 afin de les adapter au besoin. Le type V3 possède aussi un mode apprentissage des dps et paramètres du périphérique. Pour ce type, toutes les commandes d'un même périphérique sont créées dans un seul wifilightV2, y compris pour les prises multiples.

L'option "Interrogation de l'état" permet de récupérer l'état toutes les 20s même si le périphérique ne le renvoie pas. A utiliser pour les prises électriques qui ne renvoient pas régulièrement la consommation mais ne pas utiliser pour les périphériques à piles sous peine de les vider.


## Choix d'un périphérique V3 standard proposé dans la liste des sous-types
Cette procédure est à privilégier car elle est la plus simple. Choisir le sous-type correspondant au périphérique à intégrer. Certains périphériques très proches visuellement ont cependant des comportements différents, tester tous les sous-types qui peuvent correspondre et vérifier le bon fonctionnement.

Vous avez la possibilité de modifier le n° de dps ainsi que ses paramètres pour ajuster un périphérique qui a un comportement légèrement différent de celui proposé par le plugin. Voir le mode création manuelle des commandes ci-dessous pour utiliser les informations présentes dans les logs du plugin.

Si vous supprimez des commandes, elles seront automatiquement recréées lors de la sauvegarde du périphérique, il est préférable de décocher la case "Afficher".

## Mode apprentissage en V3

Pour lancer l'apprentissage, il faut créer manuellement le périphérique avec les bons paramètres : IP, localKey, devId et le sous-type Personnalisé. Cocher la case « mode inclusion » et sauvegarder le périphérique qui entre alors en mode inclusion. Attendre quelques secondes et modifier l'état du périphérique réel ou avec l'appli Smartlife pour que le plugin crée automatiquement les commandes actions et infos, utilisez toutes les possibilités offertes par l'appli. Pour terminer, cliquer sur le bouton « arrêter l’inclusion » et sauvegarder.

Ce mode est uniquement là pour aider la configuration personnalisée d'un nouveau périphérique qui n'est pas proposé par le plugin. L'utilisation de ce mode ne peut donner un périphérique complètement fonctionnel et nécessite de comprendre de supprimer ou de modifier les commandes créées.

Exemples de modifications :
- Si au dps correspond uniquement une info dans le périphérique (par exemple 3 valeurs possibles d'un même bouton), il faudra supprimer les 3 commandes actions créées automatiquement. Cependant, les commandes actions ont comme paramètre toutes les valeurs récupérées par le plugin et permettent de connaitre les valeurs prises par l'info du dps.
- Pour les dps numériques, une commande info et une commande action numériques sont créés automatiquement, si seule l'info est utile (cas de la température d'un capteur) il faut supprimer la commande action. Si les valeurs numériques prennent les valeurs 0 ou 1 pendant l'apprentissage, le plugin va aussi créer 3 commandes ETAT/ON/OFF, il faudra les supprimer.
- Pour les dps contenant une info 0/1 pour un actionneur tout ou rien, comme une prise électrique, le plugin va créer une info et 2 actions ON/OFF.
- Dans le cas d'un dps contenant true ou false, une commande info et deux commandes action (ON et OFF) sont créés automatiquement, si seule l'info est utile (cas d'un capteur de présence) il faut supprimer les commandes actions.
- Pour des dps contenant une info de couleur, le plugin va identifier le codage de la couleur et créer 3 commandes action et 3 commandes info qui correspondent à Hue Saturation Intensité
- De manière générale, le sous-type créé par le plugin pourra ne pas correspondre à la donnée, il faudra alors faire des tests en le modifiant.

Si vous partez d’une configuration standard après avoir choisi un sous-type et que vous ajoutez l’apprentissage pour vérifier les dps standards, il faudra modifier les commandes créées par la configuration standard et supprimer les commandes créées par l’apprentissage. En effet, lors de la sauvegarde, les dps standards sont toujours recréés, sinon il est possible de ne pas les afficher.

Vous pouvez partager la configuration obtenue en cliquant sur le bouton Exporter. Transférer le contenu du champ configGet et une photo du périphérique au développeur.
	
## Mode création manuelle des commandes en V3

Ce mode est utile pour les commandes qui nécessitent d'être ajustées (dps, paramètre), pour envoyer plusieurs dps en même temps ou pour la gestion des couleurs des lampes, sinon utilisez les sous-types proposés ou le mode apprentissage. 

La procédure nécessite que le périphérique renvoie son état dans les logs. Si le périphérique ne renvoie pas son état, le devId et les dps ne pourront pas être trouvés dans les logs. Les experts pourront retrouver les dps et le devId car ils sont affichés à côté de la localKey lors de la procédure pour trouver ces derniers.

Le plugin est équipé de boutons permettant de créer automatiquement les commandes des cas les plus courants, il suffira de modifier le n° de dps ou le paramètre automatiquement créés.


### Configuration
-   désactiver tous les périphériques wifilightV2 sauf celui à tester
-   bien configurer le périphérique (adresse IP statique, localKey, devId)
-   vérifier que le démon tourne, sinon le démarrer
-   configurer les logs wifilightV2 en mode debug, redémarrer le démon
-   effacer les logs

### Récupération des informations
-   appuyer sur un bouton du périphérique physique (on, off, haut, bas, etc.) ou attendre que le périphérique renvoie son état ou appuyer sur un bouton de l'appli Smart Life (mais dans ce dernier cas, cela peut empêcher le retour d'état).
-   repérer dans les logs le retour d'état

Utiliser toutes les possibilités de l'application Tuya et bien repérer dans les logs le n° de dps et sa valeur qui sont envoyés au plugin. 


### Cas d'un actionneur tout ou rien, true/false

Dans les logs, lors de l'utilisation de l'appli Smartlife, on trouve par exemple :

    Mess :{"devId":"xxxxxxxxxghekqd",dps:{"2":true,"8":true}}
	
Ici, le bouton off a été sélectionné sur le périphérique et on observe que le dps de n° 2 a changé.
	
    Mess :{"devId":"xxxxxxxxxghekqd",dps:{"2":false,"8":true}}

Ici, le bouton on a été sélectionné sur le périphérique et on observe que le dps de n° 2 a changé.

Cliquer sur le bouton ON/OFF de l'interface afin de créer automatiquement les 3 commandes pour gérer les boutons ON/OFF. Il suffit de modifier le n° de dps en mettant 2. Pour les paramètres mettre true et false, ne pas ajouter de guillemets.

Pour configurer manuellement :

-   Création d'une nouvelle commande action/défaut dans les commandes du périphérique :
    *    Dans la colonne interface mettre ON comme nom du bouton
	*    Dans la colonne nom interne et n° de commande, mettre comme Id unique : _ON, comme n° de dps : 2 (sans les doubles guillemets) et comme paramètre : true.
-   Créer une nouvelle commande action/défaut dans les commandes du périphérique :
    *    Dans la colonne interface mettre OFF comme nom du bouton
	*    Dans la colonne nom interne et n° de commande, mettre comme Id unique : _OFF, comme n° de dps : 2 (sans les doubles guillemets) et comme paramètre : false.
-   Créer une nouvelle commande info/binary dans les commandes du périphérique :
    *    Dans la colonne interface mettre ETAT comme nom de l'info
	*    Dans la colonne nom interne et n° de commande, mettre comme Id unique : _ETAT, comme n° de dps : 2 (sans les doubles guillemets) et rien dans paramètres.

### Cas d'un actionneur avec plusieurs modes

Dans les logs, lors de l'utilisation de l'appli Smartlife, on trouve par exemple :

    Mess :{"devId":"xxxxxxxxxghekqd",dps:{"1":"off","101":true}}
	
Ici, le bouton off a été sélectionné sur le périphérique et on observe que le dps de n° 1 a changé.
	
    Mess :{"devId":"xxxxxxxxxghekqd",dps:{"1":"on","101":true}}

Ici, le bouton on a été sélectionné sur le périphérique et on observe que le dps de n° 1 a changé.

    Mess :{"devId":"xxxxxxxxxghekqd",,dps:{"1":"stop","101":true}}

Ici, le bouton stop a été sélectionné sur le périphérique et on observe que le dps de n° 1 a changé.

Cliquer sur le bouton "Boutons" de l'interface afin de créer automatiquement les 4 commandes pour gérer les boutons ON/OFF/STOP. Il suffit de modifier le n° de dps en mettant 1. Pour les paramètres mettre "on", "off" et "stop", les guillemets compris car ils sont présents après le n° de dps 1.

Pour configurer manuellement :

-   Création d'une nouvelle commande action/défaut dans les commandes du périphérique :
    *    Dans la colonne interface mettre ON comme nom du bouton
	*    Dans la colonne nom interne et n° de commande, mettre comme Id unique : _ON, comme n° de dps : 1 (sans les doubles guillemets) et comme paramètre : "on" (si le on n'est pas entouré de guillemets, il faut les enlever).
-   Créer une nouvelle commande action/défaut dans les commandes du périphérique :
    *    Dans la colonne interface mettre OFF comme nom du bouton
	*    Dans la colonne nom interne et n° de commande, mettre comme Id unique : _OFF, comme n° de dps : 1 (sans les doubles guillemets) et comme paramètre : "off" (si le off n'est pas entouré de guillemets, il faut les enlever).
-   Créer une nouvelle commande action/défaut dans les commandes du périphérique :
    *    Dans la colonne interface mettre STOP comme nom du bouton
	*    Dans la colonne nom interne et n° de commande, mettre comme Id unique : _STOP, comme n° de dps : 1 (sans les doubles guillemets) et comme paramètre : "stop" (si le stop n'est pas entouré de guillemets, il faut les enlever).
-   Créer une nouvelle commande info/autre dans les commandes du périphérique :
    *    Dans la colonne interface mettre ETAT comme nom de l'info
	*    Dans la colonne nom interne et n° de commande, mettre comme Id unique : _ETAT, comme n° de dps : 1 (sans les doubles guillemets) et rien dans paramètres.

### Dans le cas d'une commande numérique, comme une commande d'intensité :
	
Dans les logs, lors de l'utilisation de l'appli Smartlife, on trouve :

    Mess :{"devId":"xxxxxxxxxghekqd",dps:{"3":850,"101":true}}

Ici, un curseur d'intensité a été sélectionné sur l'application du périphérique et on observe que le dps de n° 3 a changé.

Cliquer sur le bouton Curseur de l'interface afin de créer automatiquement les 2 commandes pour gérer le curseur. Pour les adapter au besoin, il suffit de modifier les n° de dps et de mettre 3 (sans guillemets). Pour le paramètre de la commande action : soit ne rien mettre, soit mettre #slider# soit mettre une formule par exemple : #slider#/10. Pour le paramètre de l'info, c'est identique sauf qu'il faut utiliser #value#. Ne pas mettre de guillemets car il n'y en a pas après le n° de dps.

Pour configurer manuellement :
	
-   Créer une nouvelle commande action/curseur dans les commandes du périphérique :
    *    Dans la colonne interface mettre Intensité comme nom du curseur
	*    Dans la colonne nom interne et n° de commande, mettre comme Id unique : _Intensite, comme n° de dps : 3 (sans les doubles guillemets) et comme paramètre : #slider# (ici la valeur numérique n'est pas entourée de guillemets, il ne faut donc pas les mettre).
-   Créer une nouvelle commande info/autre dans les commandes du périphérique :
    *    Dans la colonne interface mettre IntensiteGet comme nom de l'info
	*    Dans la colonne nom interne et n° de commande, mettre comme Id unique : _IntensiteGet, comme n° de dps : 3 (sans les doubles guillemets) et rien dans paramètres.


### Dans le cas d'un capteur numérique, comme un capteur de température :
	
Dans les logs, lors de l'utilisation de l'appli Smartlife, on trouve :

    Mess :{"devId":"xxxxxxxxxghekqd",dps:{"8":23,"101":true}}
	
Ici, c'est une température qui est envoyée régulièrement et on observe que le dps de n° 8 a changé.

Cliquer sur le bouton Info Num de l'interface afin de créer automatiquement la commande pour récupérer la température. Pour les adapter au besoin, il suffit de modifier le n° de dps, ici 8 (sans parenthèse). Pour le paramètre de l'info, soit ne rien mettre, soit mettre #value# soit mettre une formule par exemple : #value#/10 . Ne pas mettre de guillemets car il n'y en a pas après le n° de dps.

Pour configurer manuellement :
	
-   Créer une nouvelle commande info/autre dans les commandes du périphérique :
    *    Dans la colonne interface mettre TempGet comme nom de l'info
	*    Dans la colonne nom interne et n° de commande, mettre comme Id unique : _TempGet, comme n° de dps : 8 (sans les doubles guillemets) et rien dans paramètres.
	

### Dans le cas d'un capteur tout ou rien, comme un détecteur de porte :

Dans les logs, lors de l'utilisation de l'appli Smartlife, on trouve :
	
    Mess :{"devId":"xxxxxxxxxghekqd",dps:{"12":1}}
		
    Mess :{"devId":"xxxxxxxxxghekqd",dps:{"12":0}}
	
Ici, c'est l'information d'ouverture puis de fermeture qui est envoyée et on observe que le dps de n° 12 a changé.

Cliquer sur le bouton Info Bin de l'interface afin de créer automatiquement la commande pour récupérer la valeur. Pour l'adapter au besoin, il suffit de modifier le n° de dps et de mettre 12 (sans guillemets). Les paramètres doivent être laissés vides.  

Pour configurer manuellement :
	
-   Créer une nouvelle commande info/binaire dans les commandes du périphérique :
    *    Dans la colonne interface mettre PorteGet comme nom de l'info
	*    Dans la colonne nom interne et n° de commande, mettre comme Id unique : _PorteGet, comme n° de dps : 12 (sans les doubles guillemets) et rien dans paramètres.

### Dans le cas de la couleur d'une lampe :

Cette partie est complexe et demande une lecture très attentive. 

Le codage de la couleur chez Tuya a plusieurs formats qui sont différents de celui utilisé par Jeedom. Jeedom utilise le format RGB (Reg Green Blue) alors que Tuya utilise différents formats HSV (Hue Saturation Value) ou combinant HSV et RGB. Le RGB code chaque couleur de 0 à 255 ou en hexadécimal de 0 à FF. Le rouge est donc codé FF0000, le bleu : 0000FF, le blanc : FFFFFF et le noir : 000000. Les valeurs pour HSV sont les suivantes : Hue de 0 à 360° (couleur), S de 0 à 100% (Saturation) et V de 0 à 100% (Intensité). Voir [ici](https://www.rapidtables.com/convert/color/) pour aller plus loin.

Afin de permettre au plugin de fonctionner correctement pour les couleurs, il faut identifier les formats utilisés par Tuya lors d'un changement de couleur avec l'appli Smartlife et en observant à cet instant dans les logs le n° de dps qui a été modifié.

1 - format HSV : H (codé de 0 à 360 ) S (codé de 0 à 1000) V (codé de 0 à 1000) le résultat est ensuite donné en base 16, soit 12 digits hexadécimaux. Exemple pour du rouge : RGB = FF0000 et H= 0° S=100% V=100% soit en codage Tuya  000003E803E8 (Hue = 0000 S =03E8 V=03E8)

2 - format RGB00HSV : RGB est codé sur 6 digits (chacun de 00 à FF pour chaque couleur). 00 est intercalé puis H (codé de 0 à 255 ) S (codé de 0 à 255) V (codé de 0 à 255). Le résultat est donné en base 16, soit 14 digits hexadécimaux. Exemple pour du rouge : RGB = FF0000 et H= 0° S=100% V=100% soit en codage Tuya  FF00000000FFFF

3 - format RGB0HSV : RGB sont codés comme ci-dessus. 0 est intercalé puis H (codé de 0 à 360 ) S (codé de 0 à 100) V (codé de 0 à 100). Le résultat est donné en base 16, soit 14 digits hexadécimaux. Exemple pour du violet : RGB = FF00FF et H= 300° S=100% V=100% soit en codage Tuya  FF0000012C6464

Dans les logs, lors de l'utilisation de la modification de la couleur de la lampe, on trouve :

    Mess:{"devId":"633225xxxxx","dps":{"1":true,"27":true,"28":"white","29":254,"31":"08ff0000766464","32":"cf38000168ffff","33":"ffff500100ff00"}

Il faut repérer le n° de dps qui change, ici c'est le 31 soit 08ff0000766464 . Les 2 derniers 64 en hexadécimal font 100 en décimal. 08=R FF=G 00=B 076= hue, c'est le format 3. Cliquer sur le bouton Couleur 3 et modifier les n° de dps pour mettre 31. Ne pas modifier les paramètres. 

Pour créer manuellement les 6 boutons dans le cas d'un format de couleur 1 :
	
-   Créer une nouvelle commande action/couleur dans les commandes du périphérique :
    *    Dans la colonne interface mettre Couleur comme nom
	*    Dans la colonne nom interne et n° de commande, mettre comme Id unique : _Couleur, comme n° de dps : 120 (sans les doubles guillemets) et comme paramètre : "#colorH4S4V4_1000#" (ici la valeur est entourée de guillemets, il faut donc les mettre).
-   Créer une nouvelle commande info/autre dans les commandes du périphérique :
    *    Dans la colonne interface mettre ColorGet comme nom de l'info
	*    Dans la colonne nom interne et n° de commande, mettre comme Id unique : _ColorGet, comme n° de dps : 120 (sans les doubles guillemets) et "#colorH4S4V4_1000#" dans paramètres.
-   Créer une nouvelle commande action/curseur dans les commandes du périphérique :
    *    Dans la colonne interface mettre Intensité comme nom
	*    Dans la colonne nom interne et n° de commande, mettre comme Id unique : _Intensité, comme n° de dps : 120 (sans les doubles guillemets) et comme paramètre : #slider_intH4S4V4_1000# (ne pas mettre de guillemets).
-   Créer une nouvelle commande action/curseur dans les commandes du périphérique :
    *    Dans la colonne interface mettre Saturation comme nom
	*    Dans la colonne nom interne et n° de commande, mettre comme Id unique : _Saturation, comme n° de dps : 120 (sans les doubles guillemets) et comme paramètre : #slider_satH4S4V4_1000# (ne pas mettre de guillemets).
-   Créer une nouvelle commande info/numérique dans les commandes du périphérique :
    *    Dans la colonne interface mettre Intensité comme nom
	*    Dans la colonne nom interne et n° de commande, mettre comme Id unique : _IntensitéGet, comme n° de dps : 120 (sans les doubles guillemets) et comme paramètre : #slider_intH4S4V4_1000# (ne pas mettre de guillemets).
-   Créer une nouvelle commande info/numérique dans les commandes du périphérique :
    *    Dans la colonne interface mettre Saturation comme nom
	*    Dans la colonne nom interne et n° de commande, mettre comme Id unique : _SaturationGet, comme n° de dps : 120 (sans les doubles guillemets) et comme paramètre : #slider_satH4S4V4_1000# (ne pas mettre de guillemets).
	
Nota : il est indispensable de mettre le même n° de dps pour ces 6 commandes et de n'ajouter aucune autre commande action ou info sur ce n° de dps sinon le plugin ne pourra pas décoder correctement les informations et mettre à jour le retour d'état.

### Modifier plusieurs n° de dps dans la même commande

Pour envoyer plusieurs n° de dps en même temps, mettre \* dans le n° de dps et mettre la commande complète sans les accolades dans le champ paramètres. Un et un seul des n° de dps pourra être un curseur ou (exclusivement) une couleur.

Créer une commande action/autre et mettre dans paramètres :

    "1":true,"3":"color"
   
Permet d'allumer la lampe et de passer en couleur.

Créer une commande action/curseur et mettre dans paramètres :

    "1":true,"3":#slider#/10
   
Permet d'allumer la lampe et de modifier l'intensité. Une formule sur le #slider# peut être appliquée.
 
Créer une commande action/couleur et mettre dans paramètres :

    "2":"color","3":"#colorR2G2B200H2S2V2_255#"
   
Permet de passer la lampe en mode couleur et de spécifier la couleur. Le plugin utilisera la couleur, l'intensité et la saturation du widget color.

### Modifier plusieurs n° de dps avec retour d'état

Pour envoyer plusieurs n° de dps en même temps avec retour d'état mettre, dans le champ n° de dps, la valeur du n° de dps qui doit être mise à jour suivie du caractère \*. Mettre la commande complète sans les accolades dans le champ paramètres. Un et un seul des n° de dps pourra être un curseur ou (exclusivement) une couleur.

Créer une commande action/curseur, mettre 3\* dans le champ n° de dps et mettre dans paramètres :

    "1":true,"3":#slider#/10
   
Permet d'allumer la lampe et de modifier l'intensité, la commande info de dps n° 3 sera mise à jour.
 
Créer une commande action/color, mettre 3\* dans le champ n° de dps et mettre dans paramètres :

    "2":"color","3":"#colorR2G2B200H2S2V2_255#"
   
Permet de passer la lampe en mode couleur et de spécifier la couleur. Le plugin utilisera l'intensité et la saturation des curseurs intensité et saturation de n° de dps 3.


## Périphériques alimentés par pile

Pour que le % de capacité soit affiché dans Analyse/Equipements, le nom logique de la commande info correspondante doit contenir battery et get .



# Débogage 

## Test et configuration préalables

1. le périphérique à tester a été inclus dans l'appli Smartlife,
2. dans le cas d'un périphérique Tuya/Zigbee, sa passerelle a été incluse dans l'appli Smartlife et le péripéhrique doit aussi avoir été inclus
3. les localKey et devId ou cid ont été récupérés (le débogage peut permettre de retrouver cid et devId)
4. le périphérique et son éventuelle passerelle n'ont pas été supprimés de l'appli Smartlife et l'appli Smartlife n'a pas été supprimée
5. l'appli Smartlife est arrêtée sur tous les terminaux pouvant la faire tourner
6. l'adresse IP du périphérique (Tuya ou passerelle Tuya/Zigbee) est rendue fixe et est connue
7. configurer les logs wifilightV2 en mode debug, redémarrer le démon

## Vérifier que le périphérique est trouvé et connecté

1. désactiver dans wifilightV2 tous les périphériques sauf celui à tester (ne garder qu'un seul canal en cas de périphérique multi-canaux) (dans la cas d'un périphérique connecté à une passerelle, la passerelle doit rester activée), le but est de ne pas mélanger tous les périphériques
2. effacer les logs
3. sauvegarder le périphérique dans le plugin : cela a pour effet de lancer le démon qui teste toutes les minutes les périphériques wifilightV2

Exemple de log OK où le plugin a trouvé le périphérique donc avec la bonne adresse IP :

    [2021-03-29 06:36:42][DEBUG] : ** Prise Zigbee - TuyaCustom2_V2 @192.168.1.106 - c:12 **
    [2021-03-29 06:36:42][DEBUG] :     Key not set New device: created  @192.168.1.106 ADD New device @192.168.1.106 channel:12 key:1 @192.168.1.106 c:12 d:0

-Par la suite les logs seront du type :	
	 [2021-03-29 06:31:21][DEBUG] : ** Prise Zigbee - TuyaCustom2_V2 @192.168.1.106 - c:12 **
    [2021-03-29 06:31:21][DEBUG] :      key:1 @192.168.1.106 c:12 d:1
	
Exemple de log KO où le plugin n'a pas trouvé le périphérique donc mauvaise adresse IP

    [2021-03-05 07:13:55][DEBUG] : ** Test vanne - TuyaCustom2_V2 @192.168.1.199 - c:11 **
    [2021-03-05 07:13:55][DEBUG] :     Key not set New device: created  @192.168.1.199 close Connection impossible. Err=115 : Operation now in progress ADD New device @192.168.1.199 channel:11

Par la suite les messages seront du type :

    [2021-03-05 07:15:04][DEBUG] : << Ping of: lidl @192.168.1.130  diff:24
    [2021-03-05 07:15:04][DEBUG] :     Cmd to 192.168.1.130 - Try:192.168.1.130  6668 - Connect OK!

Il se peut qu'il y ait ensuite des déconnexions ou que l'appli Smartlife soit aussi connectée au périphérique, dans ce cas le message dans les logs est :

    [2020-12-10 07:36:40][DEBUG] : << Ping of: Vanne @192.168.1.122  diff:24
    [2020-12-10 07:36:40][DEBUG] :     Cmd to 192.168.1.122 - Try:192.168.1.122  6668 - Connect OK!
    [2020-12-10 07:36:40][DEBUG] :     Error on:192.168.1.122 is :Connection reset by peer n:104  diff:16

ou il n'y a plus de ping dans les logs pour cette adresse ip, cela correspond à une mauvaise connexion permanente entre le périphérique et Jeedom ou si le périphérique n'est plus alimenté.

Le plugin tentera de se reconnecter au périphérique toutes les minutes ou toutes les 3 minutes ce qui lui permettra de retrouver le périphérique s'il est rebranché. 

A ce stade, la seul point testé et OK est que l'adresse IP est la bonne et que le périphérique est joignable.

## Vérifier que la localKey est la bonne

Dans le cas d'un passerelle Tuya/Zigbee, les tests doivent se faire sur un périphérique relié à la passerelle. La passerelle seule ne renvoie aucun message.

1. renseigner la localKey sans espace et sans guillemets dans le champ Jeton du périphérique (et de la passerelle s'il y en a une). Vérifier plusieurs fois : la localKey doit être la même pour tous les périphériques de même adresse IP (les périphériques Tuya/Zigbee connectés à une passerelle ou les périphériques multicanaux). Le plugin utilise l'une de ces clés pour dialoguer avec le périphérique donc vérifier qu'elles sont correctes et identiques.
2. désactiver dans wifilightV2 tous les périphériques sauf celui à tester (ne garder qu'un seul canal en cas de périphérique multi-canaux), le but est de ne pas mélanger tous les périphériques.
3. effacer les logs
4. utiliser soit les boutons du périphérique physique, soit l'appli Smartlife pour changer l'état du périphérique. 

Notas :
- l'appli Smartlife peut empêcher le dialogue entre le plugin et le périphérique. Il est préférable de lancer l'appli Smartlife après la connexion ci-dessus au périphérique. A l'inverse il se peut que l'appli Smartlife réponde très mal.
- si le périphérique ne renvoie pas son état, les informations sur les dps et le devId ou le cid sont à rechercher dans le fichier ayant permis de récupérer la localKey, ils sont juste à côté de celle-ci. Le cid porte le nom de nodeId  dans les paquets de l'appli SmartLife.

Exemple de log KO où la localKey n'est pas bonne car la trame reçue par le plugin n'est pas décodée :

    [2021-03-05 07:16:53][DEBUG] : Receive from:192.168.1.106
    [2021-03-05 07:16:53][DEBUG] :   Mess: Bad response


Dans le cas où le décodage de la trame est correct, on trouve un message tel que celui-ci :

    [2021-03-05 07:16:53][DEBUG] : Receive from:192.168.1.106
    [2021-03-05 07:16:53][DEBUG] :   Mess: {"dps":{"1":true,"9":0,"17":8370,"18":44,"19":50,"20":2320,"27":"on","28":"relay"},"cid":"588xxxxxxxxxa"} - Read Json OK

C'est ce message qui va permettre de configurer le périphérique dans le plugin en identifiant à quoi servent les n° de dps et quelles valeurs ils prennent, voir plus haut.
Certains messages ne sont jamais décodés, il suffit qu'un seul message soit correctement décodé pour être sûr que la localKey est correcte.

## Vérifier que le devId ou le cid sont corrects

Dans le cas d'un passerelle Tuya/Zigbee, les tests doivent se faire sur un périphérique relié à la passerelle. La passerelle seule ne renvoie aucun message.

1. le cid (pour les périphériques Tuya/Zigbee) ou le devId pour les autres a été trouvé en même temps que la LocaKey. Il est spécifique à chaque périphérique et n'est jamais modifié, cela permet de repérer vos périphériques.
2. repérer les messages "Mess" en provenance du périphérique.

**Pour un périphérique non Zigbee qui renvoie son devId, on trouvera :**

    [2020-12-10 08:01:58][DEBUG] :     Mess :{"devId":"308001xxxxxxxxxb4c","dps":{"1":true},"t":1607583717,"s":3} - Read Json OK

le devId est indiqué en clair, il suffit de le recopier dans le devId de la configuration du périphérique. Attention : tous les périphériques ne renvoient pas leur devId.

**Pour un périphérique Zigbee qui renvoie son cid, on trouvera :**

    [2020-12-10 08:14:34][DEBUG] :     Mess :{"dps":{"1":"pir"},"cid":"bc33xxxxxxxxxxxx45","t":1607584474} - Read Json OK

le cid est indiqué en clair, il suffit de le recopier dans le devId de la configuration du périphérique. Attention : tous les périphériques ne renvoient pas leur cid. 

Vous pouvez alors vérifier la concordance avec la procédure permettant de trouver la localKey et le devId ou le cid.

Si le cid ou le devId ne sont pas corrects, les commandes actions ne seront pas exécutées par le périphérique.

**Exemple d'envoi d'une commande correcte vers un périphérique Tuya non Zigbee :**

    [2021-03-05 07:23:28][DEBUG] :     Cmd to 127.0.0.1: {"devId":"588e8xxxxxxxx21a","dps":{"1":true},"t":"1614925408"} - canal:12 - Try:127.0.0.1  6900 - Connect OK!
    [2021-03-05 07:23:28][DEBUG] :     Receive from Jeedom to Send cmd to device @192.168.1.129 canal:12
    [2021-03-05 07:23:28][DEBUG] :     Cmd to 192.168.1.129 - Try:192.168.1.129  6668 - Connect OK!
    [2021-03-05 07:23:28][DEBUG] :     No state update
    [2021-03-05 07:23:28][DEBUG] : Receive from:192.168.1.129
    [2021-03-05 07:23:28][DEBUG] :   Mess:  - empty
    [2021-03-05 07:23:28][DEBUG] : Receive from:192.168.1.129
    [2021-03-05 07:23:28][DEBUG] :   Mess: {"dps":{"1":false,"9":0,"18":0,"19":0,"20":2367,"21":1,"22":636,"23":28600,"24":16823,"25":2480,"26":0,"38":"on","41":"","42":"","46":true}} - Read Json OK
    [2021-03-05 07:23:28][DEBUG] :    Tuya  prise Wifi test @192.168.1.129  Mess: {"dps":{"1":false,"9":0,"18":0,"19":0,"20":2367,"21":1,"22":636,"23":28600,"24":16823,"25":2480,"26":0,"38":"on","41":"","42":"","46":true}} - Read Json OK
    [2021-03-05 07:23:28][DEBUG] :     Update devices @192.168.1.129 canal:12
    [2021-03-05 07:23:28][DEBUG] :      Dps18|SwOnOffGet_Det_Fen:0 Dps19|ModeForcedGetZ:0 Dps20|SwOnOffGet_Test:2367 Dps21|VanneGetZ formula:#value# #value#:1 After:1
    [2021-03-05 07:23:28][DEBUG] :      No other states to update

Le plugin envoie la commande au démon à l'adresse 127.0.0.1 (Cmd to 127.0.0.1).
Puis le démon envoie la commande au périphérique à l'adresse 192.168.1.129 ( Receive from Jeedom to Send cmd). Si ce message n'apparait pas, alors le démon du plugin ne tourne pas -> voir les vérifications préalables.
Enfin, le périphérique renvoie son état (Receive from). Le premier message n'est pas décodé et le deuxième l'est. Noter que ce périphérique ne renvoie pas son devId.
Si le devId ou le cid ne sont pas corrects, le périphérique ne renvoie pas son état ou renvoie un message vide ou une erreur et n'exécute pas la commande.

## Un souci avec une commande action (les autres fonctionnent)

1. Vérifier les 4 points ci-dessus
2. Désactiver tous les périphériques wifilightV2 sauf celui à tester (ne garder qu'un canal pour les multicanaux) (laisser la passerelle Tuya/Zigbee active pour un périphérique Zigbee) et effacer les logs pour plus de clarté.
3. Attendre que le démon passe (il interroge les périphériques toutes les minutes le message commence par : >>>>>>>> Search for) 
4. Attendre 10s après le message contenant >>>>>>>>>>> End <<<<<<<<<<<< (fin de l'interrogation des périphériques par le démon).
5. Activer la commande du plugin qui dysfonctionne 2 fois avec 5s d'intervalle
6. Stopper les logs et les sauvegarder.
7. Envoyer les logs sur le forum (avec la config du périphérique et l'action qui a été faite)


## Trouver de l'aide sur le forum

Afin d'obtenir de l'aide rapide et de qualité, il est nécessaire de bien préparer sa question. Donner les éléments, les logs de chaque étape suivante avec votre démarche et le diagnostic :
1. copie d'écran de la configuration du périphérique
2. réaliser les tests et configuration préalable (voir paragraphe ci-dessus)
3. vérifier que le périphérique est trouvé et connecté, donner les logs si KO (voir paragraphe ci-dessus)
4. vérifier que la localKey est la bonne, donner les logs si KO (voir paragraphe ci-dessus)
5. vérifier que le devId ou le cid sont corrects, donner les logs si KO (voir paragraphe ci-dessus)

Si une étape est KO, ce n'est pas la peine de tester les suivantes. Si vous ne comprenez pas ce que vous faites, les aidants du forum ne pourront pas le savoir pour vous. Il est rappelé au tout début de la doc du plugin qu'utiliser des périphériques Tuya en local nécessite de savoir suivre à la lettre une procédure et d'avoir quelques notions en informatique.

[Retour à la documentation générale](./index.md)





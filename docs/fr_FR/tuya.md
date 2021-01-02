[Retour à la documentation générale](./index.md)

# Zigbee Tuya 

## Compatibilité

Le dialogue entre le plugin et la passerelle se fait en Wifi. Ensuite, le dialogue entre les capteurs et actionneurs et la passerelle se fait via Zigbee. Ils doivent être compatibles Tuya et avoir été inclus d'abord dans l'application Tuya.

Le plugin peut récupérer l'état des périphériques dès que ceux-ci envoient une information de changement d'état ou quand le plugin les interroge au lancement du demon. Si un interrupteur mural est utilisé, Jeedom le saura immédiatement.

Les équipements suivants sont compatibles mais la liste n'est pas exclusive et sera complétée en fonction du retour des utilisateurs.
- passerelle MoesHouse, BENEXMART,(toutes les passerelles Zigbee Tuya sont normalement compatibles)
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
- plug Lonsoho
- interrupteurs muraux simples/doubles/triples


Tous les autres périphériques, ou les périphériques similaires d'une autre marque ou d'un autre modèle, doivent être entièrement configurés en mode personnalisé. Cependant la configuration générée pour ces modèles peut aider pour un autre.

Néanmoins, la compatibilité de ces périphériques n'est pas garantie car le protocole peut être modifié par les constructeurs. Ne pas modifier le firmware du périphérique sans avoir vérifié qu'il est compatible avec le plugin.

Il faut créer un équipement, avec la même adresse IP et la même clé, pour la passerelle et chaque périphérique connecté à la passerelle et lui attribuer un n° de canal (le numéro entre 1 et 100 est sans importance mais chaque périphérique doit avoir un n° de canal différent).

Si l'application Tuya est connectée au périphérique, avant le plugin, le plugin ne pourra généralement pas y accéder.

L'option "Interrogation de l'état" permet de récupérer l'état toutes les 20s même si le périphérique ne le renvoie pas. A utiliser pour les prises électriques qui ne renvoient pas régulièrement la consommation mais ne pas utiliser pour les périphériques à piles sous peine de les vider.

Il y a 5 méthodes pour créer un périphérique :
- Utiliser une configuration standard proposées par le plugin, c'est la plus simple si votre périphérique correspond à l'un de ceux proposés
- Modifier une configuration standard proche du périphérique à contrôler en modifiant les dps, les paramètres et les types là où ils sont différents, ceci nécessite de consulter les logs du plugin
- Créer entièrement la configuration, ce qui nécessite de consulter les logs du plugin
- Utiliser les boutons prédéfinis pour créer les commandes à partir de la configuration personnalisée ou en ajoutant des commandes à une configuration standard. Il faudra configurer les commandes, ce qui nécessite de consulter les logs.
- Utiliser le mode inclusion, complété par l'apprentissage ce qui crée automatiquement les commandes dans le périphérique. Cette méthode permet de récupérer toutes les informations en provenance du périphérique physique sans consulter les logs. Il faudra supprimer les commandes inutiles.

Les 4 premières méthodes peuvent être mixées ainsi que les 4 dernières. La première et la dernière méthode sont recommandées.


## Clé et identifiant de la passerelle

Il est indispensable de récupérer la clé locale (localKey) et le devId de la passerelle permettant au plugin de dialoguer avec les périphériques.

Pour récupérer la clé et le devId, la procédure est complexe et nécessite plusieurs manipulations. Faire une recherche sur le web avec comme mot clé : Tuya localKey, sur Github en particulier ou sur le [forum Jeedom](https://community.jeedom.com/t/plugin-wifilightv2-recuperer-id-et-localkey-pour-tuya-smartlife/13047) .

Si la passerelle est désinstallée puis réinstallée dans l'application mobile, alors sa clé sera modifiée. Il faudra retrouver la clé avec la procédure ci-dessus. 

Aucune aide ne sera donnée pour récupérer la clé.

La clé et l'adresse IP des périphériques connectés à la passerelle est la même que celle de la passerelle.


## Clé et identifiant du périphérique

Configurer le périphérique et renseigner la clé trouvée ci-dessus ainsi que l'adresse IP qui est la même que celle de la passerelle. Il faut ensuite modifier l'état du périphérique avec l'application fournie par le constructeur de la passerelle et consulter les logs.
Vous trouverez une information comme celle-ci :
    
    Receive after decode :{"dps":{"161":"Esc"},"cid":"ec1bbdfffe781b28","t":1589301302}
 
Le cid est à copier dans le champ identifiant du périphérique du plugin (sans les " "). C'est lui qui permet de distinguer 2 équipements connectés à la passerelle.

Si aucun message en clair n'apparait, c'est que la clé n'est pas bonne.

Nota : si le périphérique ne renvoie pas son état, le cid ne pourra pas être trouvé dans les logs. Les experts pourront retrouver les dps et le cid car ils sont affichés à côté de la localKey lors de la procédure pour trouver ces derniers.


## Configuration

Si votre périphérique est dans la liste proposée, il devrait fonctionner immédiatement. Si votre périphérique est un peu différent, les n° de dps ou les paramètres peuvent avoir des valeurs différentes que les configurations par défaut. Il est possible de modifier les commandes créées en changeant le n° de dps et le paramètre avec un éventuelle formule de calcul pour retrouver la valeur voulue. Voir [Périphérique personnalisé](./tuya#tocAnchor-1-9-5) pour comprendre les commandes de la configuration par défaut.

Si le périphérique est complètement différent, il faut configurer manuellement le plugin en choisissant le sous-type "Personnalisé" et en se référant au paragraphe [Périphérique personnalisé](./tuya#tocAnchor-1-9-5). Partagez alors votre configuration sur le forum pour l'intégrer dans le plugin.


## Configuration en mode inclusion

Pour pouvoir utiliser le mode inclusion des périphériques connectés à la passerelle, il faut au préalable avoir connecté et configuré correctement une et une seule passerelle en utilisant le sous-type Gateway Hub Tuya/Zigbee avec son adresse IP et sa localKey. Le périphérique doit retourner son état, si ce n'est pas le cas, la procédure ne pourra pas fonctionner. Si 2 passerelles sont connectées, le plugin utilisera les caractéristiques de l'une d'elles sans savoir laquelle. Le périphérique ne doit pas déjà se trouver dans le plugin, sinon il faut soit le supprimer soit utiliser le mode apprentissage.

- Cliquer sur le mode inclusion, attendre que le périphérique soit inclus puis agir sur le périphérique ou modifier l'état du périphérique avec l'appli Tuya (mais l'usage de l'appli peut bloquer le périphérique).
- Quand le périphérique est détecté, le plugin rée un nouveau wifilightV2 avec l'adresse IP et la localKey de la passerelle, le cid est automatiquement renseigné.
- Ensuite, le plugin interroge l'état du périphérique et crée les commandes infos et action.
- Tout en restant en mode inclusion, il faut agir sur toutes les commandes du périphérique pour créer tous les dps possibles.
- cliquer ensuite sur le bouton arrêt de l'inclusion.
- éditer le périphérique, supprimer les commandes infos ou action inutiles et le sauvegarder.

Il faut inclure un seul périphérique à la fois. Pour exclure un périphérique, il suffit de le supprimer dans le plugin.

Ce mode est uniquement là pour aider la configuration personnalisée d'un nouveau périphérique qui n'est pas proposé par le plugin. L'utilisation de ce mode ne peut donner un périphérique complètement fonctionnel.

Nota :
- Si au dps correspond uniquement une info dans le périphérique (par exemple 3 valeurs possibles d'un même bouton), il faudra supprimer les 3 commandes actions créées automatiquement. Cependant, les commandes actions ont comme paramètre toutes les valeurs récupérées par le plugin et permettent de connaitre les valeurs prises par l'info du dps.
- Pour les dps numériques, une commande info et une commande action numériques sont créés automatiquement, si seule l'info est utile (cas de la température d'un capteur) il faut supprimer la commande action. Si les valeurs numériques prennent les valeurs 0 ou 1 pendant l'apprentissage, le plugin va aussi créer 3 commandes ETAT/ON/OFF, il faudra les supprimer.
- Pour les dps contenant une info 0/1 pour un actionneur tout ou rien, comme une prise électrique, le plugin va créer une info et 2 actions ON/OFF.
- Dans le cas d'un dps contenant true ou false, une commande info et deux commandes action (ON et OFF) sont créés automatiquement, si seule l'info est utile (cas d'un capteur de présence) il faut supprimer les commandes actions.
- Pour des dps contenant une info de couleur, le plugin créera une commande info et une commande action pour chaque couleur sélectionnée. L'intérêt pourra être de garder la commande action pour générer une couleur particulière, ce sera aussi utile pour identifier le codage de la couleur.
- De manière générale, le sous-type créé par le plugin pourra ne pas correspondre à la donnée, il faudra alors faire des tests en le modifiant.

Attention :
- si vous partez d'une configuration standard et que vous ajoutez l'apprentissage pour vérifier les dps standards, il faudra modifier les commandes créées par la config standard et supprimer les commandes créées par l'apprentissage. En effet, lors de la sauvegarde, les dps standards sont toujours recréés, sinon il est possible de na pas les afficher.

## Mode apprentissage

Cocher la case « Mode inclusion » du périphérique et le sauvegarder pour ajouter les commandes oubliées dans la phase précédente. Terminer en cliquant sur le bouton « arrêter l’inclusion ».

## Périphériques alimentés par pile

Pour que le % de capacité soit affiché dans Analyse/Equipements, le nom logique de la commande info correspondante doit contenir battery et get .

# Tuya 

## Compatibilité

De nombreuses marques sont compatibles avec le plugin. Consulter le forum pour plus d'informations. Le plugin permet de contrôler de nombreux actionneurs.
Il peut récupérer l'état des périphériques dès que celui-ci envoie une information de changement d'état ou quand il les interroge toutes les minutes. Si un interrupteur mural est utilisé, Jeedom le saura immédiatement.

Les équipements suivants sont compatibles en firmware 1.0. et en firmware 2.0.

-  prises simples avec et sans retour sur la consommation, en particulier les prises wifi Neo Coolcam
-  prises multiples avec et sans consommation avec et sans USB
-  commande de volets roulants
-  interrupteurs muraux : 1, 2 ou 3 inters
-  interrupteur mural avec variateur
-  humidificateur NEWKBO 300 ml et uniquement celui-ci
-  thermostat BHT-6000GCLW / BHT 6000 et uniquement ces modèles
-  ampoules RGBW globe et modèles similaires en fonctionnement
-  smart Garage

Néanmoins, la compatibilité de ces périphériques n'est pas garantie car le protocole peut être modifié par les constructeurs. Ne pas modifier le firmware du périphérique sans avoir vérifié qu'il est compatible avec le plugin.

Les capteurs de présence et d'ouverture ne sont pas compatibles car ils ne dialoguent pas en local. D'autres périphériques de la liste ci-dessus peuvent aussi avoir un fonctionnement uniquement par internet, ils ne sont pas compatibles avec le plugin. Il faut demander au vendeur si le mode LAN est actif.

Le plugin teste les périphériques (mais ils doivent être ajoutés manuellement) et affiche un message dans le centre de messages lorsqu'un périphérique a été configuré avec le mauvais firmware.

- le type V1 correspond aux périphériques en firmware 1.0 : il n'y aura pas de nouveaux ajouts de périphériques.
- le type V2 correspond aux périphériques en firmware 2.0 : possibilité d'ajouter des commandes personnalisées, il n'y aura pas de nouveaux ajouts de périphériques.
- le type V3 correspond aux périphériques en firmware 2.0 : possibilité en plus de modifier le n° de dps et les paramètres de dps de tous les périphériques présents en V3 afin de les adapter au besoin. Pour ce type, la notion de canal a disparue et toutes les commandes de prises électriques sont créées dans le même périphérique. Cette version est aussi munie d'un mode apprentissage des dps pour les périphériques non proposés par le plugin.

En V1 et V2, pour les périphériques multicanaux (comme les prises multiples), il faut créer autant d'équipements wifilightV2 que de canal, une copie du premier créé facile la tâche, ensuite il faut changer le n° de canal. Le n° de canal correspond au n° de prise (USB en plus si présent) et par défaut au n° de dps.

Dans les 3 cas, testez de préférence les configurations standards avant de créer manuellement les commandes.

Si l'application Tuya est connectée au périphérique, avant le plugin, le plugin ne pourra généralement pas y accéder.

L'option "Interrogation de l'état" permet de récupérer l'état toutes les 20s même si le périphérique ne le renvoie pas. A utiliser pour les prises électriques qui ne renvoient pas régulièrement la consommation mais ne pas utiliser pour les périphériques à piles sous peine de les vider.

Il y a 5 méthodes pour créer un périphérique :
- Utiliser une configuration standard proposées par le plugin, c'est la plus simple si votre périphérique correspond à l'un de ceux proposés
- Modifier une configuration standard proche du périphérique à contrôler en modifiant les dps, les paramètres et les types là où ils sont différents, ceci nécessite de consulter les logs du plugin.
- Créer entièrement la configuration, ce qui nécessite de consulter les logs du plugin.
- Utiliser les boutons prédéfinis pour créer les commandes à partir de la configuration personnalisée ou en ajoutant des commandes à une configuration standard. Il faudra configurer les commandes, ce qui nécessite de consulter les logs.
- Utiliser l'apprentissage ce qui crée automatiquement les commandes et les paramètres dans le périphérique. Cette méthode permet de récupérer toutes les informations en provenance du périphérique physique sans consulter les logs. Il faudra supprimer les commandes inutiles.

Les 4 premières méthodes peuvent être mixées ainsi que les 4 dernières. La première et la dernière méthode sont recommandées.

Attention :
- si vous partez d'une configuration standard et que vous ajoutez l'apprentissage pour vérifier les dps standards, il faudra modifier les commandes créées par la config standard et supprimer les commandes créées par l'apprentissage. En effet, lors de la sauvegarde, les dps standards sont toujours recréés, sinon il est possible de na pas les afficher.
- en V3, les paramètres de configuration de l'énergie ne sont pas présents car les dps peuvent être modifiés directement dans les commandes qui correspondent à l'énergie.


## Configuration du périphérique

Il est indispensable de récupérer une clé locale (localKey) et un identifiant devId permettant au plugin de dialoguer avec les périphériques.

La procédure est complexe et nécessite plusieurs manipulations. Faire une recherche sur le web avec comme mot clé : Tuya localKey, sur Github en particulier ou sur ou sur le [forum Jeedom](https://community.jeedom.com/t/plugin-wifilightv2-recuperer-id-et-localkey-pour-tuya-smartlife/13047) .

Le périphérique ne doit pas être connecté à une application sur téléphone mobile, sinon il ne répondra pas aux ordres de Jeedom. Il faut donc fermer toute application possiblement connectée au périphérique.

Si le périphérique est désinstallé puis réinstallé dans l'application mobile, alors sa clé sera modifiée. Il faudra retrouver la clé avec la procédure ci-dessus. 

Aucune aide ne sera donnée pour récupérer la clé ou l'identifiant.

Tout changement de configuration nécessite de redémarrer le démon.

## Consommation des prises

Pour les configurations standards concernant les prises avec consommation, selon les marques, la consommation n'est pas envoyée de façon unique par la prise. Pour récupérer ce paramétrage, installer la prise dans Jeedom et conserver le retour d'état dans la configuration, puis aller dans les logs de wifilightV2. La prise est interrogée toutes les minutes. Repérer le message qui ressemble à :

    return decoded : {"devId":"xxxxxxxxx","dps":{"1":false,"2":false,"9":0,"10":0,"18":0,"19":0,"20":2281,"21":1,"22":726,"23":28971,"24":19417,"25":1070}}

L'index "20" correspond ici à la tension d'alimentation en centaine de mV soit : 228.1 V, elle doit légèrement bouger. Les index "18" et "19" correspondent au courant (mA) et à la puissance en W, ici aucun appareil n'est branché et donc les informations sont à zéro. C'est un bon moyen de trouver la tension, en branchant un appareil, ces 2 valeurs doivent être modifiées et la tension est juste après.

La syntaxe est alors : 20;18;19 qu'il faut mettre dans le champ 'Paramétrage de l'énergie'.

Pour les plugs 1 prise, en général il faut : 6;4;5 (mis par défaut par le plugin en V1 et V2).

Pour les plugs 2 prises, en général il faut : 9;7;8 (mis par défaut par le plugin en V1 et V2).

Pour les autres prises, la valeur 20;18;19 est mise par défaut en V1 et V2.

En V3, les dps peuvent être modifiés directement pour les adapter aux n° qui contiennent les informations de consommation.


## Périphériques alimentés par pile

Pour que le % de capacité soit affiché dans Analyse/Equipements, le nom logique de la commande info correspondante doit contenir battery et get .

## Mode apprentissage

Pour lancer l'apprentissage, disponible uniquement en V3,  il faut créer manuellement le périphérique avec les bons paramètres : IP, localKey, devID car la procédure ne permet pas de les retrouver. Cocher la case « mode inclusion » et sauvegarder le périphérique qui entre alors en mode inclusion. Attendre quelques secondes et modifier l'état du périphérique réel ou avec l'appli Tuya pour que le plugin crée automatiquement les commandes actions et infos. Pour terminer, cliquer sur le bouton « arrêter l’inclusion ». Pour plus d'information voir ici : [Mode inclusion](./tuya#tocAnchor-1-1-5) (la partie décrivant la création automatique du périphérique n'est pas disponible sur les périphériques Tuya non Zigbee).


## Personnalisation des commandes

Devant la diversité des périphériques compatibles Tuya, il peut être nécessaire de créer des commandes personnalisées. Avant de passer aux commandes personnalisées, tester d'abord les configurations standard qui fonctionnent dans la majorité des cas. Ces configurations standards peuvent, en V3, être modifiées pour ajuster le n° de dps et le paramètre afin qu'ils correspondent au périphérique.

Le mode apprentissage doit être privilégié pour créer autmatiquement les commandes. Cependant, le paragraphe suivant donne des éléments pour interpréter les logs wifilightV2 et les commandes créées en mode apprentissage et modifier une configuration standard V3 ou le résultat d el'apprentissage. La configuration des commandes de gestion des couleurs de lampes doit néanmoins passer par la création manuelle des commandes info et action.


## Création manuelle des commandes info et action

Il est possible de créer un périphérique entièrement personnalisé ou d'ajouter des commandes personnalisées (en V2 et V3 uniquement) à un périphérique existant ou de modifier les n° de dps et paramètres d'une commande (en V3 uniquement). L'interface propose de créer des commandes automatiquement, ceci a l'avantage de mieux faire fonctionner le retour d'état. La procédure nécessite que le périphérique renvoie son état dans les logs, sinon il n'y a pas de solution.

Nota : si le périphérique ne renvoie pas son état, le devId et les dps ne pourront pas être trouvé dans les logs. Les experts pourront retrouver les dps et le devId car ils sont affichés à côté de la localKey lors de la procédure pour trouver ces derniers.

### Configuration
-   désactiver tous les périphériques wifilightV2 sauf celui à tester
-   bien configurer le périphérique (adresse IP statique, localKey, devId)
-   vérifier que le demon tourne, sinon le démarrer
-   configurer les logs wifilightV2 en mode debug, redémarrer le demon
-   effacer les logs

### Récupération des informations
-   appuyer sur un bouton du périphérique physique (on, off, haut, bas, etc.) ou attendre que le périphérique renvoie son état ou appuyer sur un bouton de l'appli Smart Live (mais dans ce dernier cas, cela peut empêcher le retour d'état).
-   repérer dans les logs le retour d'état

Utiliser toutes les possibilités de l'application Tuya et bien repérer dans les logs le n° de dps et sa valeur qui sont envoyés au plugin. 

Le plugin est équipé de boutons permettant de créer automatiquement les cas les plus courants, il suffira de modifier le n° de dps ou le paramètre automatiquement créés.

### Cas d'un actionneur tout ou rien, true/false

Dans les logs, lors de l'utilisation de l'appli Tuya, on trouve par exemple :

    Receive after decode :{devId:50701244cc50e37e9aff,dps:{"2":true,"8":true}}
	
Ici, le bouton off a été sélectionné sur le périphérique et on observe que le dps de n° 2 a changé.
	
    Receive after decode :{devId:50701244cc50e37e9aff,dps:{"2":false,"8":true}}

Ici, le bouton on a été sélectionné sur le périphérique et on observe que le dps de n° 2 a changé.

Cliquer sur le bouton ON/OFF de l'interface afin de créer automatiquement les 3 commandes pour gérer les boutons ON/OFF. Il suffit de modifier le n° de dps en mettant 2. Pour les paramètres mettre true et false, ne pas ajouter de guillemets.

Pour configurer manuellement :

-   Création d'une nouvelle commande action/défaut dans les commandes du périphérique :
    *    Dans la colonne interface mettre ON comme nom du bouton
	*    Dans la colonne nom interne et n° de commande, mettre comme Id unique : _ON, comme n° de dps : 2 (sans les doubles guillemets) et comme paramètre : true.
-   Créer une nouvelle commande action/défaut dans les commandes du périphérique :
    *    Dans la colonne interface mettre OFF comme nom du bouton
	*    Dans la colonne nom interne et n° de commande, mettre comme Id unique : _OFF, comme n° de dps : 2 (sans les doubles guillemets) et comme paramètre : false .
-   Créer une nouvelle commande info/binary dans les commandes du périphérique :
    *    Dans la colonne interface mettre ETAT comme nom de l'info
	*    Dans la colonne nom interne et n° de commande, mettre comme Id unique : _ETAT, comme n° de dps : 2 (sans les doubles guillemets) et rien dans paramètres.

### Cas d'un actionneur avec plusieurs modes

Dans les logs, lors de l'utilisation de l'appli Tuya, on trouve par exemple :

    Receive after decode :{devId:50701244cc50e37e9aff,dps:{"1":"off","101":true}}
	
Ici, le bouton off a été sélectionné sur le périphérique et on observe que le dps de n° 1 a changé.
	
    Receive after decode :{devId:50701244cc50e37e9aff,dps:{"1":"on","101":true}}

Ici, le bouton on a été sélectionné sur le périphérique et on observe que le dps de n° 1 a changé.

    Receive after decode :{devId:50701244cc50e37e9aff,dps:{"1":"stop","101":true}}

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
	
Dans les logs, lors de l'utilisation de l'appli Tuya, on trouve :

    Receive after decode :{devId:50701244cc50e37e9aff,dps:{"3":850,"101":true}}

Ici, un curseur d'intensité a été sélectionné sur l'application du périphérique et on observe que le dps de n° 3 a changé.

Cliquer sur le bouton Curseur de l'interface afin de créer automatiquement les 2 commandes pour gérer le curseur. Pour les adapter au besoin, il suffit de modifier les n° de dps et de mettre 3 (sans guillemets). Pour le paramètre de la commande action : soit ne rien mettre, soit mettre #slider# soit mettre une formule par exemple : #slider#/10. Pour le paramètre de l'info, c'est identique sauf qu'il faut utiliser #value# . Ne pas mettre de guillemets car il n'y en a pas après le n° de dps.

Pour configurer manuellement :
	
-   Créer une nouvelle commande action/curseur dans les commandes du périphérique :
    *    Dans la colonne interface mettre Intensité comme nom du curseur
	*    Dans la colonne nom interne et n° de commande, mettre comme Id unique : _Intensite, comme n° de dps : 3 (sans les doubles guillemets) et comme paramètre : #slider# (ici la valeur numérique n'est pas entourée de guillemets, il ne faut donc pas les mettre).
-   Créer une nouvelle commande info/autre dans les commandes du périphérique :
    *    Dans la colonne interface mettre IntensiteGet comme nom de l'info
	*    Dans la colonne nom interne et n° de commande, mettre comme Id unique : _IntensiteGet, comme n° de dps : 3 (sans les doubles guillemets) et rien dans paramètres.


### Dans le cas d'un capteur numérique, comme un capteur de température :
	
Dans les logs, lors de l'utilisation de l'appli Tuya, on trouve :

    Receive after decode :{devId:50701244cc50e37e9aff,dps:{"8":23,"101":true}}
	
Ici, c'est une température qui est envoyée régulièrement et on observe que le dps de n° 8 a changé.

Cliquer sur le bouton Info Num de l'interface afin de créer automatiquement la commande pour récupérer la température. Pour les adapter au besoin, il suffit de modifier le n° de dps, ici 8 (sans parenthèse). Pour le paramètre de l'info, soit ne rien mettre, soit mettre #value# soit mettre une formule par exemple : #value#/10 . Ne pas mettre de guillemets car il n'y en a pas après le n° de dps.

Pour configurer manuellement :
	
-   Créer une nouvelle commande info/autre dans les commandes du périphérique :
    *    Dans la colonne interface mettre TempGet comme nom de l'info
	*    Dans la colonne nom interne et n° de commande, mettre comme Id unique : _TempGet, comme n° de dps : 8 (sans les doubles guillemets) et rien dans paramètres.
	

### Dans le cas d'un capteur tout ou rien, comme un détecteur de porte :

Dans les logs, lors de l'utilisation de l'appli Tuya, on trouve :
	
    Receive after decode :{devId:50701244cc50e37e9aff,dps:{"12":1}}
		
    Receive after decode :{devId:50701244cc50e37e9aff,dps:{"12":0}}
	
Ici, c'est l'information d'ouverture puis de fermeture qui est envoyée et on observe que le dps de n° 12 a changé.

Cliquer sur le bouton Info Bin de l'interface afin de créer automatiquement la commande pour récupérer la valeur. Pour l'adapter au besoin, il suffit de modifier le n° de dps et de mettre 12 (sans guillemets). Les paramètres doivent être laissés vides.  

Pour configurer manuellement :
	
-   Créer une nouvelle commande info/binaire dans les commandes du périphérique :
    *    Dans la colonne interface mettre PorteGet comme nom de l'info
	*    Dans la colonne nom interne et n° de commande, mettre comme Id unique : _PorteGet, comme n° de dps : 12 (sans les doubles guillemets) et rien dans paramètres.

### Dans le cas de la couleur d'une lampe :

Cette partie est complexe et demande une lecture très attentive. 

Le codage de la couleur chez Tuya a plusieurs formats qui sont différents de celui utilisé par Jeedom. Jeedom utilise le format RGB (Reg Green Blue) alors que Tuya utilise différents formats HSV (Hue Saturation Value) ou combinant HSV et RGB. Le RGB code chaque couleur de 0 à 255 ou en hexadécimal de 0 à FF. Le rouge est donc codé FF0000, le bleu : 0000FF, le blanc : FFFFFF et le noir : 000000. Les valeurs pour HSV sont les suivantes : Hue de 0 à 360° (couleur), S de 0 à 100% (Saturation) et V de 0 à 100% (Intensité). Voir [ici](https://www.rapidtables.com/convert/color/) pour aller plus loin.

Afin de permettre au plugin de fonctionner correctement pour les couleurs, il faut identifier les formats utilisés par Tuya lors d'un changement de couleur avec l'appli tuya et en observant à cet instant dans les logs le n° de dps qui a été modifié.

1 - format HSV : H (codé de 0 à 360 ) S (codé de 0 à 1000) V (codé de 0 à 1000) le résultat est ensuite donné en base 16, soit 12 digits hexadécimaux. Exemple pour du rouge : RGB = FF0000 et H= 0° S=100% V=100% soit en codage Tuya  000003E803E8 (Hue = 0000 S =03E8 V=03E8)

2 - format RGB00HSV : RGB est codé sur 6 digits (chacun de 00 à FF pour chaque couleur). 00 est intercalé puis H (codé de 0 à 255 ) S (codé de 0 à 255) V (codé de 0 à 255). Le résultat est donné en base 16, soit 14 digits hexadécimaux. Exemple pour du rouge : RGB = FF0000 et H= 0° S=100% V=100% soit en codage Tuya  FF00000000FFFF

3 - format RGB0HSV : RGB sont codés comme ci-dessus. 0 est intercalé puis H (codé de 0 à 360 ) S (codé de 0 à 100) V (codé de 0 à 100). Le résultat est donné en base 16, soit 14 digits hexadécimaux. Exemple pour du violet : RGB = FF00FF et H= 300° S=100% V=100% soit en codage Tuya  FF0000012C6464

Dans les logs, lors de l'utilisation de la modification de la couleur de la lampe, on trouve :

    Receive after decode:{"devId":"63322540bcddc254e92c","dps":{"1":true,"27":true,"28":"white","29":254,"31":"08ff0000766464","32":"cf38000168ffff","33":"ffff500100ff00"}

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

### Modifier plusieurs n° de dps

Pour envoyer plusieurs n° de dps en même temps, laisser le champ n° de dps vide et mettre la commande complète sans les accolades dans le champ paramètres. Un et un seul des n° de dps pourra être un curseur ou (exclusivement) une couleur.

Créer une commande action/autre et mettre dans paramètres :

    "1":true,"3":"color"
   
Permet d'allumer la lampe et de passer en couleur.

Créer une commande action/curseur et mettre dans paramètres :

    "1":true,"3":#slider#/10
   
Permet d'allumer la lampe et de modifier l'intensité.
 
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

## Remarques :
-   rien dans les logs en provenance de l'appli tuya : mauvaise adresse IP ou périphérique qui ne renvoie pas son état
-   information cryptée (n'apparait pas en clair, message vide) : localKey incorrect
-   message d'erreur dans la réponse du périphérique (GW id invalid par exemple) : id ou cid incorrect
-   la commande ne fonctionne pas : vérifier la commande

# Débogage 

Tests préalables :

1. l'appli Tuya est arrêtée
2. l'adresse IP du périphérique (Tuya ou passerelle Tuya/Zigbee) est rendue fixe

## vérifier que le périphérique est trouvé et connecté

1. désactiver dans wifilightV2 tous les périphériques sauf celui à tester (ne garder qu'un seul canal en cas de périphérique multi-canaux), le but est de ne pas mélanger tous les périphériques
2. effacer les logs
3. sauvegarder le périphérique dans le plugin : cela a pour effet de lancer le demon qui teste toutes les minutes les périphériques wifilightV2

Exemple de log KO où le plugin n'a pas trouvé le périphérique donc mauvaise adresse IP

    [2020-12-10 07:40:12][DEBUG] : ****** Device listenable Inter BC Tuya 2 OK - Class:Tuya_SW_2 @192.168.1.122 Channel:2 *****
    [2020-12-10 07:40:12][DEBUG] :    Key not set
    [2020-12-10 07:40:12][DEBUG] :    Socket created  @192.168.1.122
    [2020-12-10 07:40:12][DEBUG] :    Connection impossible. Err=115 : Operation now in progress

Exemple de log OK où le plugin a trouvé le périphérique donc bonne adresse IP :

    [2020-12-10 07:40:12][DEBUG] : ****** Device listenable Telco3 - Class:TuyaCustom2_V2 @192.168.1.106 Channel:5c0272fffec24266 *****
    [2020-12-10 07:40:12][DEBUG] :    Key:0  time diff:0
    [2020-12-10 07:40:12][DEBUG] :    Socket already created @192.168.1.106
    [2020-12-10 07:40:12][DEBUG] :    ADD New device @192.168.1.106 channel:5c0272fffec24266
    [2020-12-10 07:40:12][DEBUG] :    Device and socket exist : key:0 @192.168.1.106 channel:5c0272fffec24266 diff:0

Par la suite les messages seront du type :

    [2020-12-10 07:53:41][DEBUG] : ****** Device listenable Inter BC Tuya OK - Class:Tuya_SW_2 @192.168.1.122 Channel:1 *****
    [2020-12-10 07:53:41][DEBUG] :    Device and socket exist : key:3 @192.168.1.122 channel:1 diff:13

Il se peut qu'il y ait ensuite des déconnexions, dans ce cas le message dans les logs est :

    [2020-12-10 07:36:40][DEBUG] :     << Ping @192.168.1.122  diff:16
    [2020-12-10 07:36:40][DEBUG] :     Cmd to 192.168.1.122 - Try:192.168.1.122  6668 - Connect OK!
    [2020-12-10 07:36:40][DEBUG] :     Error on:192.168.1.122 is :Connection reset by peer n:104  diff:16

ou il n'y a plus de ping dans les logs pour cette adresse ip, cela correspond à une mauvaise connexion permanente entre le périphérique et Jeedom ou si le périphérique n'est plus alimenté. Quand tout est correct le message est :

    [2020-12-10 07:36:43][DEBUG] :     << Ping @192.168.1.106  diff:16
    [2020-12-10 07:36:43][DEBUG] :     Cmd to 192.168.1.106 - Try:192.168.1.106  6668 - Connect OK!

Le plugin tentera de se reconnecter au périphérique toutes les minutes ou toutes les 3 minutes ce qui lui permettra de retrouver le périphérique s'il est rebranché. 

A ce stade, la seul point testé et OK c'est que l'adresse IP est la bonne et que le périphérique est joignable.

## vérifier que la localKey est la bonne

1. renseigner la localKey sans espace et sans guillemets dans le champ Jeton du plugin. Vérifier plusieurs fois : la localKey doit être la même pour tous les périphériques de même adresse IP. Le plugin utilise l'une de ces clés pour dialoguer avec le périphérique donc vérifier qu'elles sont correctes et identiques.
2. désactiver dans wifilightV2 tous les périphériques sauf celui à tester (ne garder qu'un seul canal en cas de périphérique multi-canaux), le but est de ne pas mélanger tous les périphériques.
3. effacer les logs
4. utiliser soit les boutons du périphérique physique, soit l'appli Tuya pour changer l'état du périphérique. Noter qu'utiliser l'appli Tuya peut empêcher le dialogue entre le plugin et le périphérique. Il est préférable de lancer l'appli Tuya après la connexion ci-dessus au périphérique. A l'inverse il se peut que l'appli Tuya réponde très mal. Si le périphérique ne renvoie pas son état, la procédure se termine ici et le périphérique est incompatible avec le plugin.

Nota : les experts pourront retrouver les dps car ils sont affichés à côté de la localKey ou du cid (pour les périphériques Tuya/Zigbee) lors de la procédure pour trouver ces derniers.

Exemple de log KO où la localKey n'est pas bonne car la trame reçue par le plugin n'est pas décodée :

    [2020-12-10 08:01:56][DEBUG] :    Receive after decode :pr-q;oTEJ^mhvoH]R,(0!]?E?N2KS ]OI!Empty

Dans le cas où le décodage de la trame est correct, on trouve un message tel que celui-ci :

    [2020-12-10 08:01:56][DEBUG] :    Multiple device @192.168.1.122 canal:1
    [2020-12-10 08:01:56][DEBUG] :     CanalDev:1 in MultiC
    [2020-12-10 08:01:56][DEBUG] :     Found Canal:1 OK
    [2020-12-10 08:01:56][DEBUG] :     Update other states: - On:0
    [2020-12-10 08:01:58][DEBUG] :     Receive after decode :{"devId":"30800135cc50e3418b4c","dps":{"1":true},"t":1607583717,"s":3}]D"{4K - Read Json OK

Les caractères de la fin du message seront filtrés par le plugin et ne doivent pas inquiéter. C'est ce message qui va permettre de configurer le périphérique dans le plugin en identifiant à quoi servent les n° de dps et quelles valeurs ils prennent, voir plus haut.

## vérifier que le devId ou le cid est le bon

1. le cid (pour les périphériques Tuya/Zigbee) ou le devId pour les autres a été trouvé en même temps que la LocaKey. Il est spécifique à chaque périphérique et n'est jamais modifié, cela permet de repérer vos périphériques.
2. repérer les messages "Receive after decode" en provenance du périphérique.

Pour un périphérique non Zigbee on trouvera :

    [2020-12-10 08:01:58][DEBUG] :     Receive after decode :{"devId":"30800135cc50e3418b4c","dps":{"1":true},"t":1607583717,"s":3}]D"{4K - Read Json OK

le devId est indiqué en clair, il suffit de le recopier dans l'identifiant de la configuration du périphérique.

Pour un périphérique Zigbee on trouvera :

    [2020-12-10 08:14:34][DEBUG] :     Receive after decode :{"dps":{"1":"pir"},"cid":"bc33acfffe525145","t":1607584474}

le cid est indiqué en clair, il suffit de le recopier dans l'identifiant de la configuration du périphérique. Vous pouvez alors vérifier la concordance avec la procédure permettant de trouver la localKey et le devId ou le cid.


## Un souci avec une commande action

1. Vérifier les 3 points ci-dessus
2. Désactiver tous les périphériques wifiLightV2 sauf celui à tester (ne garder qu'un canal pour les multicanaux), attendre que le demon passe et effacer les logs pour plus de clarté
3. activer la commande qui dysfonctionne 2 fois avec 5s d'intervalle
4. stopper les logs et les sauvegarder.
5. récupérer toutes les valeurs qui arrivent dans la commande info associée à cette commande action (généralement une commande info de type xxxxGetyy) et qui a normalement le même dps. Pour cela utiliser soit l'appli Tuya qui correspond à la même commande action à tester, soit vous modifiez ce même bouton physique sur le périphérique. Vous notez toutes les valeurs qui sont remontées dans le plugin (appuyer sur le bouton tester du plugin).
6. envoyer les logs et les informations du point 5


## trouver de l'aide sur le forum

Sans application des tests ci-dessus et de l'envoi des logs associés, la réponse pénible à écrire et probablement pénible à lire sera : lire la doc. Notez que rares sont les cas où le passage par les 3 étapes ci-dessous ne permet pas de résoudre le problème.

[Retour à la documentation générale](./index.md)




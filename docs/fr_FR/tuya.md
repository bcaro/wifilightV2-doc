[Retour à la documentation générale](./index.md)

#Zigbee Tuya <a id="zigbee-tuya"></a>

##Compatibilité

Le dialogue entre le plugin et la passerelle se fait en WiFi. Ensuite, le dialogue entre les capteurs et actionneurs et la passerelle se fait via Zigbee. Ils doivent être compatibles Tuya.

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
- le double switch variateur  QS-Zigbee-D02-TRIAC-LN
- capteur de présence Moes
- capteur de présence BENEXMART
- capteur de température BENEXMART
- capteur de porte BENEXMART
- plug Lonsoho


Tous les autres périphériques, ou les périphériques similaires d'une autre marque ou d'un autremodèle, doivent être entièrement configurés en mode "custom". Cependant la configuration générée pour ces modèles peut aider pour un autre.

Néanmoins, la compatibilité de ces périphériques n'est pas garantie car le protocole peut être modifié par les constructeurs. Ne pas modifier le firmware du périphérique sans avoir vérifié qu'il est compatible avec le plugin.

Il faut créer un équipement, avec la même adresse IP et la même clé, pour la passerelle et chaque périphérique connecté à la passerelle et lui attribuer un n° de canal (le numéro entre 1 et 100 est sans importance mais chaque périphérique doit avoir un n° de canal différent).


##Récupération de la clé de la passerelle

Il est indispensable de récupérer la clé locale (LocalKey) de la passerelle permettant au plugin de dialoguer avec les périphériques.

Pour récupérer la clé, la procédure est complexe et nécessite plusieurs manipulations. Faire une recherche sur le web avec comme mot clé : Tuya localkey, sur Github en particulier ou sur le forum Jeedom.

Si la passerelle est désinstallée puis réinstallée dans l'application mobile, alors sa clé sera modifiée. Il faudra retrouver la clé avec la procédure ci-dessus. 

Aucune aide ne sera donnée pour récupérer la clé.

La clé des périphériques connectés à la passerelle est la même que celle de la passerelle.


##Récupération de l'identifiant du périphérique

Configurer le périphérique et renseigner la clé trouvée ci-dessus. Il faut ensuite modifier l'état du périphérique avec l'application fournie par le constructeur de la passerelle et consulter les logs.
Vous trouverez une information comme celle-ci :
    
    Receive after decode :{"dps":{"161":"Esc"},"cid":"ec1bbdfffe781b28","t":1589301302}
 
Le cid est à copier dans le champ id du périphérique du plugin (sans les " "). C'est lui qui permet de distinguer 2 équipements connectés à la passerelle.

Si aucun message en clair n'apparait, c'est que la clé n'est pas bonne.



##Configurer les périphériques

Si votre périphérique est dans la liste proposée, il devrait fonctionner immédiatement. Si votre périphérique est un peu différent, les dps ou les paramètres peuvent avoir des valeurs différentes que les configurations par défaut. Il est possible de modifier les commandes créées en changeant le n° de dps et le paramètre avec un éventuelle formule de calcul pour retrouver la valeur voulue. Voir [Périphérique custom](#Périphérique-custom) pour comprendre les commandes de la configuration par défaut.

Si le périphérique est complètement différent, il faut configurer manuellement le plugin en choisissant le sous-type "Custom" et en se référant au paragraphe [Périphérique custom](#Périphérique-custom). Partagez alors votre configuration sur le forum pour l'intégrer dans le plugin.

#Tuya <a id="tuya"></a>

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

- le type V1 correspond aux périphériques en firmware 1.0
- le type V2 correspond aux périphériques en firmware 2.0 possibilité d'ajouter des commandes custom
- le type V3 correspond aux périphériques en firmware 2.0 possibilité en plus de modifier le dps et les paramètres de dps de tous les périphériques présents en V3 afin de les adapter au besoin. Pour ce type, la notion de canal a disparue et toutes les commandes de prises électriques sont créées dans le même périphérique.

En V1 et V2, pour les périphériques multicanaux (comme les prises multiples), il faut donc créer autant d'équipements wifilightV2 que de canal, une copie du premier créé facile la tâche, ensuite il faut changer le n° de canal. Le n° de canal correspond au n° de prise (USB en plus si présent).

Dans les 3 cas, testez de préférence les configurations standards avant de créer manuellement les commandes



##Configuration du périphérique

Il est indispensable de récupérer une clé locale (LocalKey) et un identifiant permettant au plugin de dialoguer avec les périphériques.

La procédure est complexe et nécessite plusieurs manipulations. Faire une recherche sur le web avec comme mot clé : Tuya localkey, sur Github en particulier ou sur le forum Jeedom.

Le périphérique ne doit pas être connecté à une application sur téléphone mobile, sinon il ne répondra pas aux ordres de Jeedom. Il faut donc fermer toute application possiblement connectée au périphérique.

Si le périphérique est désinstallé puis réinstallé dans l'application mobile, alors sa clé sera modifiée. Il faudra retrouver la clé avec la procédure ci-dessus. 

Aucune aide ne sera donnée pour récupérer la clé ou l'identifiant.

Tout changement de configuration nécessite de redémarrer le démon.

##Configuration de la récupération de la consommation des prises

Pour les configurations standards concernant les prises avec consommation, selon les marques, la consommation n'est pas envoyée de façon unique par la prise. Pour récupérer ce paramétrage, installer la prise dans Jeedom et conserver le retour d'état dans la configuration, puis aller dans les logs de wifilightV2. La prise est interrogée toutes les minutes. Repérer le message qui ressemble à :

    return decoded : {"devId":"xxxxxxxxx","dps":{"1":false,"2":false,"9":0,"10":0,"18":0,"19":0,"20":2281,"21":1,"22":726,"23":28971,"24":19417,"25":1070}}

L'index "20" correspond ici à la tension d'alimentation en centaine de mV soit : 228.1 V, elle doit légèrement bouger. Les index "18" et "19" correspondent au courant (mA) et à la puissance en W, ici aucun appareil n'est branché et donc les informations sont à zéro. C'est un bon moyen de trouver la tension, en branchant un appareil, ces 2 valeurs doivent être modifiées et la tension est juste après.

La syntaxe est alors : 20;18;19 qu'il faut mettre dans le champ 'Paramétrage de l'énergie'.

Pour les plugs 1 prise, en général il faut : 6;4;5 (mis par défaut par le plugin).

Pour les plugs 2 prises, en général il faut : 9;7;8 (mis par défaut par le plugin).

Pour les autres prises, la valeur 20;18;19 est mise par défaut.

##Personnalisation des commandes

Devant la diversité des périphériques compatibles Tuya, il peut être nécessaire de créer des commandes personnalisées. Avant de passer aux commandes personnalisées, tester d'abord les configurations standard qui fonctionnent dans la majorité des cas. Ces configurations standards peuvent, en V3, être modifiées pour ajuster le dps et le paramètre afin qu'ils correspondent au périphérique.

Le paragraphe suivant donne des éléments pour interpréter les logs wifilightV2 et configurer soit entièrement un périphérique ou modifier une configuration standard V3.

##Périphérique custom

Il est possible de créer un périphérique entièrement custom ou d'ajouter des commandes custom à un périphérique existant ou de modifier les dps/paramètres d'une commande. L'interface propose de créer des commandes automatiquement, ceci a l'avantage de mieux faire fonctionner le retour d'état. La procédure nécessite que le périphérique renvoie son état dans les logs, sinon il n'y a pas de solution.

###Configuration
-   désactiver tous les périphériques wifilightV2 sauf celui à tester
-   bien configurer le périphérique (adresse IP statique, LocalKey, Id)
-   vérifier que le demon tourne, sinon le démarrer
-   configurer les logs wifilightV2 en mode debug, redémarrer le demon
-   effacer les logs

###Récupération des informations
-   appuyer sur un bouton du périphérique physique (on, off, haut, bas, etc.) ou attendre que le périphérique renvoie son état ou appuyer sur un bouton de l'appli Smart Live (mais dans ce dernier cas, cela peut empêcher le retour d'état).
-   repérer dans les logs le retour d'état

Utiliser toutes les possibilités de l'application Tuya et bien repérer dans les logs le dps et sa valeur qui sont envoyés au plugin. 

Le plugin est équipé de boutons permettant de créer automatiquement les cas les plus courants, il suffira de modifier le dps ou le paramètre automatiquement créés.

####Cas d'un actionneur tout ou rien, tel que ON/OFF

Dans les logs, lors de l'utilisation de l'appli Tuya, on trouve par exemple :

    Receive after decode :{devId:50701244cc50e37e9aff,dps:{"1":"off","101":true}}
	
Ici, le bouton off a été sélectionné sur le périphérique et on observe que le dps 1 a changé.
	
    Receive after decode :{devId:50701244cc50e37e9aff,dps:{"1":"on","101":true}}

Ici, le bouton on a été sélectionné sur le périphérique et on observe que le dps 1 a changé.

Cliquer sur le bouton ON/OFF de l'interface afin de créer automatiquement les 3 commandes pour gérer les boutons ON/OFF. Il suffit de modifier le dps en mettant 1. Pour les paramètres mettre "on" et "off", les guillemets compris car ils sont présents après le dps 1.

Pour configurer manuellement :

-   Création d'une nouvelle commande action/défaut dans les commandes du périphérique :
    *    Dans la colonne interface mettre ON comme nom du bouton
	*    Dans la colonne nom interne et n° de commande, mettre comme Id unique : _ON, comme dps : 1 (sans les doubles guillemets) et comme paramètre : "on" (si le on n'est pas entouré de guillemets, il faut les enlever).
-   Créer une nouvelle commande action/défaut dans les commandes du périphérique :
    *    Dans la colonne interface mettre OFF comme nom du bouton
	*    Dans la colonne nom interne et n° de commande, mettre comme Id unique : _OFF, comme dps : 1 (sans les doubles guillemets) et comme paramètre : "off" (si le off n'est pas entouré de guillemets, il faut les enlever).
-   Créer une nouvelle commande info/binary dans les commandes du périphérique :
    *    Dans la colonne interface mettre ETAT comme nom de l'info
	*    Dans la colonne nom interne et n° de commande, mettre comme Id unique : _ETAT, comme dps : 1 (sans les doubles guillemets) et rien dans paramètres.

####Dans le cas d'une commande numérique, comme une commande d'intensité :
	
Dans les logs, lors de l'utilisation de l'appli Tuya, on trouve :

    Receive after decode :{devId:50701244cc50e37e9aff,dps:{"3":850,"101":true}}

Ici, un curseur d'intensité a été sélectionné sur l'application du périphérique et on observe que le dps 3 a changé.

Cliquer sur le bouton Curseur de l'interface afin de créer automatiquement les 2 commandes pour gérer le curseur. Pour les adapter au besoin, il suffit de modifier les dps et de mettre 3 (sans guillemets). Pour le paramètre de la commande action : soit ne rien mettre, soit mettre #slider# soit mettre une formule par exemple : #slider#/10. Pour le paramètre de l'info, c'est identique sauf qu'il faut utiliser #value# . Ne pas mettre de guillemets car il n'y en a pas après le dps.

Pour configurer manuellement :
	
-   Créer une nouvelle commande action/curseur dans les commandes du périphérique :
    *    Dans la colonne interface mettre Intensité comme nom du curseur
	*    Dans la colonne nom interne et n° de commande, mettre comme Id unique : _Intensite, comme dps : 3 (sans les doubles guillemets) et comme paramètre : #slider# (ici la valeur numérique n'est pas entourée de guillemets, il ne faut donc pas les mettre).
-   Créer une nouvelle commande info/autre dans les commandes du périphérique :
    *    Dans la colonne interface mettre IntensiteGet comme nom de l'info
	*    Dans la colonne nom interne et n° de commande, mettre comme Id unique : _IntensiteGet, comme dps : 3 (sans les doubles guillemets) et rien dans paramètres.


####Dans le cas d'un capteur numérique, comme un capteur de température :
	
Dans les logs, lors de l'utilisation de l'appli Tuya, on trouve :

    Receive after decode :{devId:50701244cc50e37e9aff,dps:{"8":23,"101":true}}
	
Ici, c'est une température qui est envoyée régulièrement et on observe que le dps 8 a changé.

Cliquer sur le bouton Info Num de l'interface afin de créer automatiquement la commande pour récupérer la température. Pour les adapter au besoin, il suffit de modifier le dps, ici 8 (sans parenthèse). Pour le paramètre de l'info, soit ne rien mettre, soit mettre #value# soit mettre une formule par exemple : #value#/10 . Ne pas mettre de guillemets car il n'y en a pas après le dps.

Pour configurer manuellement :
	
-   Créer une nouvelle commande info/autre dans les commandes du périphérique :
    *    Dans la colonne interface mettre TempGet comme nom de l'info
	*    Dans la colonne nom interne et n° de commande, mettre comme Id unique : _TempGet, comme dps : 8 (sans les doubles guillemets) et rien dans paramètres.
	

####Dans le cas d'un capteur tout ou rien, comme un détecteur de porte :

Dans les logs, lors de l'utilisation de l'appli Tuya, on trouve :
	
    Receive after decode :{devId:50701244cc50e37e9aff,dps:{"12":1}}
		
    Receive after decode :{devId:50701244cc50e37e9aff,dps:{"12":0}}
	
Ici, c'est l'information d'ouverture puis de fermeture qui est envoyée et on observe que le dps 12 a changé.

Cliquer sur le bouton Info Bin de l'interface afin de créer automatiquement la commande pour récupérer la valeur. Pour l'adapter au besoin, il suffit de modifier le dps et de mettre 12 (sans guillemets). Les paramètres doivent être laissés vides.  

Pour configurer manuellement :
	
-   Créer une nouvelle commande info/binaire dans les commandes du périphérique :
    *    Dans la colonne interface mettre PorteGet comme nom de l'info
	*    Dans la colonne nom interne et n° de commande, mettre comme Id unique : _PorteGet, comme dps : 12 (sans les doubles guillemets) et rien dans paramètres.

####Dans le cas de la couleur d'une lampe :

Cette partie est complexe et demande une lecture très attentive. 

Le codage de la couleur chez Tuya a plusieurs format et est différent de celui utilisé par Jeedom. Jeedom utilise le format RGB (Reg Green Blue) alors que Tuya utilise différents formats HSV (Hue Saturation Value) ou combinant HSV et RGB. Le RGB code chaque couleur de 0 à 255 ou en hexadéciaml de 0 à FF. Le rouge est donc codé FF0000, le bleu : 0000FF, le blanc : FFFFFF et le noir : 000000. Les valeur pour HSV sont les suivantes : Hue de 0 à 360° (couleur), S de 0 à 100% (Saturation) et V de 0 à 100% (Intensité). Voir [ici](https://www.rapidtables.com/convert/color/) pour aller plus loin.

Afin de permettre au plugin de fonctionner correctement pour les couleurs, il faut identifier les formats utilisés par Tuya lors d'un changement de couleur avec l'appli tuya et en recupérant à cet instant dans les logs le dps qui a été modifié.

1 - format HSV : H (codé de 0 à 360 ) S (codé de 0 à 1000) V (codé de 0 à 1000) le résultat est ensuite donné en base 16, soit 12 digits hexadécimaux. Exemple pour du rouge : RGB = FF0000 et H= 0° S=100% V=100% soit en codage Tuya  000003E803E8 (Hue = 0000 S =03E8 V=03E8)

2 - format RGB00HSV : RGB est codé sur 6 digits (chacun de 00 à FF pour chaque couleur). 00 est intercalé puis H (codé de 0 à 255 ) S (codé de 0 à 255) V (codé de 0 à 255). Le résultat est donné en base 16, soit 14 digits hexadécimaux. Exemple pour du rouge : RGB = FF0000 et H= 0° S=100% V=100% soit en codage Tuya  FF00000000FFFF

3 - format RGB0HSV : RGB sont codés comme ci-dessus. 0 est intercalé puis H (codé de 0 à 360 ) S (codé de 0 à 100) V (codé de 0 à 100). Le résultat est donné en base 16, soit 14 digits hexadécimaux. Exemple pour du violet : RGB = FF00FF et H= 300° S=100% V=100% soit en codage Tuya  FF0000012C6464

Dans les logs, lors de l'utilisation de la modification de la couleur de la lampe, on trouve :

    Receive after decode:{"devId":"63322540bcddc254e92c","dps":{"1":true,"27":true,"28":"white","29":254,"31":"08ff0000766464","32":"cf38000168ffff","33":"ffff500100ff00"}

Il faut repérer le dps qui change, ici c'est le 31 soit 08ff0000766464 . Les 2 derniers 64 en hexadéciaml font 100 en décimal. 08=R FF=G 00=B 076= hue, c'est le format 3. Cliquer sur le bouton Couleur 3 et modifier les dps pour mettre 31. Ne pas modifier les paramètres. 

Pour créer manuellement les 6 boutons dans le cas d'un format de couleur 1 :
	
-   Créer une nouvelle commande action/couleur dans les commandes du périphérique :
    *    Dans la colonne interface mettre Couleur comme nom
	*    Dans la colonne nom interne et n° de commande, mettre comme Id unique : _Couleur, comme dps : 120 (sans les doubles guillemets) et comme paramètre : "#colorH4S4V4_1000#" (ici la valeur est entourée de guillemets, il faut donc les mettre).
-   Créer une nouvelle commande info/autre dans les commandes du périphérique :
    *    Dans la colonne interface mettre ColorGet comme nom de l'info
	*    Dans la colonne nom interne et n° de commande, mettre comme Id unique : _ColorGet, comme dps : 120 (sans les doubles guillemets) et "#colorH4S4V4_1000#" dans paramètres.
-   Créer une nouvelle commande action/curseur dans les commandes du périphérique :
    *    Dans la colonne interface mettre Intensité comme nom
	*    Dans la colonne nom interne et n° de commande, mettre comme Id unique : _Intensité, comme dps : 120 (sans les doubles guillemets) et comme paramètre : #slider_intH4S4V4_1000# (ne pas mettre de guillemets).
-   Créer une nouvelle commande action/curseur dans les commandes du périphérique :
    *    Dans la colonne interface mettre Saturation comme nom
	*    Dans la colonne nom interne et n° de commande, mettre comme Id unique : _Saturation, comme dps : 120 (sans les doubles guillemets) et comme paramètre : #slider_satH4S4V4_1000# (ne pas mettre de guillemets).
-   Créer une nouvelle commande info/numérique dans les commandes du périphérique :
    *    Dans la colonne interface mettre Intensité comme nom
	*    Dans la colonne nom interne et n° de commande, mettre comme Id unique : _IntensitéGet, comme dps : 120 (sans les doubles guillemets) et comme paramètre : #slider_intH4S4V4_1000# (ne pas mettre de guillemets).
-   Créer une nouvelle commande info/numérique dans les commandes du périphérique :
    *    Dans la colonne interface mettre Saturation comme nom
	*    Dans la colonne nom interne et n° de commande, mettre comme Id unique : _SaturationGet, comme dps : 120 (sans les doubles guillemets) et comme paramètre : #slider_satH4S4V4_1000# (ne pas mettre de guillemets).
	
Nota : il est indispensable de mettre le même dps pour ces 6 commandes et de n'ajouter aucune autre commande action ou info sur ce dps sinon le plugin ne pourra pas décoder correctement les informations et mettre à jour le retour d'état.

####Pour envoyer plusieurs dps en même temps :

Ceci peut être utile pour éteindre une prise complète en même temps. Utiliser alors le bouton +Commande pour créer une commande action. Il n'y aura pas de commande info associée, mais il est possible de les créer manuellement pour chaque dps, elles seront mises à jour par le retour d'état.



##Remarques :
-   rien dans les logs en provenance de l'appli tuya : mauvaise adresse IP ou périphérique qui ne renvoie pas son état
-   information cryptée (n'apparait pas en clair, message vide) : localkey incorrect
-   message d'erreur dans la réponse du périphérique (GW id invalid parexemple)
-   la commande ne fonctionne pas : vérifier la commande

[Retour à la documentation générale](./index.md)



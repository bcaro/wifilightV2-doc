# Présentation

Ce plugin permet de gérer de nombreux bandeaux de leds, ampoules leds, prises électriques, thermostats, capteur de température, capteur de porte, etc.  pilotés en wifi ou par radiofréquence 2.4 GHz via une box wifi vendue avec le produit. Le principe du plugin est de ne jamais utiliser le cloud et donc une connexion internet entre le plugin et le périphérique via un serveur lointain, toutes les actions sont donc locales au réseau domestique.

<img src="../images/wifilightV2_screenshot01.png" alt="image" style="height:100px;"/>
<img src="../images/wifilightV2_screenshot02.png" alt="image" style="height:100px;"/>
<img src="../images/wifilightV2_screenshot03.png" alt="image" style="height:100px;"/>
<img src="../images/wifilightV2_screenshot04.png" alt="image" style="height:100px;"/>
<img src="../images/wifilightV2_screenshot05.png" alt="image" style="height:100px;"/>
<img src="../images/wifilightV2_screenshot06.png" alt="image" style="height:100px;"/>
<img src="../images/wifilightV2_screenshot07.png" alt="image" style="height:100px;"/>
<img src="../images/wifilightV2_screenshot08.png" alt="image" style="height:100px;"/>
<img src="../images/wifilightV2_screenshot09.png" alt="image" style="height:100px;"/>
<img src="../images/wifilightV2_screenshot10.png" alt="image" style="height:100px;"/>
<img src="../images/wifilightV2_screenshot11.png" alt="image" style="height:100px;"/>
<img src="../images/wifilightV2_screenshot12.png" alt="image" style="height:100px;"/>
<img src="../images/wifilightV2_screenshot13.png" alt="image" style="height:100px;"/>
<img src="../images/wifilightV2_screenshot14.png" alt="image" style="height:100px;"/>

# Compatibilités et limitations

## Produits compatibles 
 
Il existe de nombreux produits compatibles avec le plugin mais de marques très différentes ou sans marque.
 
Les produits compatibles :
-   Ampoules Mi.Light/EasyBulb/LimitlessLED reliées aux contrôleurs ci-dessous : pas de retour d'état !
-   Strip-led Mi.Light/EasyBulb/LimitlessLED reliée aux contrôleurs ci-dessous : pas de retour d'état !
-   Contrôleur led Mi.Light/EasyBulb/LimitlessLED V3.0 à V5.0 (la miboxer n'est pas compatible): pas de retour d'état !
-   Contrôleur led Mi.Light/EasyBulb/LimitlessLED V6.0/iBox1/iBox2 : pas de retour d'état !
-   Ampoules WiFi Xiaomi Yeelight blanches et couleur avec retour d'état !
-   Strip-led WiFi Xiaomi Yeelight couleur avec retour d'état !
-   Plafonnier WiFi Xiaomi Yeelight avec retour d'état !
-   Lampe de chevet V2 WiFi Xiaomi Yeelight avec retour d'état !
-   Lampe de bureau WiFi Xiaomi Mijia avec retour d'état !
- 	Sonoff Basic R3 en mode DIY avec retour d'état !!
-   Nanoleaf Aurora avec retour d'état !

Produits pouvant être compatibles et non garantis :
-   LW12/Lagute : RGB strip-led contrôleur : retour d'état !
-   Wifi 320/370 RGB/RGBW strip-led contrôleur : retour d’état partiel !
-   Magic UFO : RGBW strip-led contrôleur, gère le blanc !
-   MagicHome : RGBW/RGBWW strip-led contrôleur et ampoules/spots RGBW compatibles avec l'appli MagicHome !
-   H801 : RGBW strip-led contrôleur, pas de retour d’état !!
-   Arilux AL-C01/02/03/04/06/10 : RGB/RGBW/RGBWW strip-led contrôleur, retour d’état !
-   TP-Link LB100/110/120/130 : ampoules avec retour d’état !
-   Lampe Extel Meli avec retour d'état !
-   Xiaomi Philips : Lampe bureau, ampoule et plafonnier avec retour d'état !!!
-   Ampoules, prises, interrupteur, interrupteurs volets, humidificateur, thermostat compatibles Tuya Smart live ou Jinvoo smart ou eFamilyCloud apps avec retour d'état !!!
-   Prises électriques TP-link HS100 HS110 avec retour d'état !!
-   Contrôleurs de pixel strip leds compatible Magic home avec retour d'état !
-	Périphériques contrôlés par l'appli Ewelink dont les Sonoff en mode LAN avec retour d'état !!!
-	Passerelles wifi utilisant le protocole Tuya pour les périphériques Zigbee !!!
-   Périphériques Meross !!!

Pour ces contrôleurs, ampoules ou prises, le protocole d'échange ne provient pas directement du constructeur qui peut donc le modifier à tout moment. Plusieurs versions existent sur le marché qui ne sont pas toutes compatibles avec le plugin.

Attention :
- ! : intégration facile pour une personne qui lit la documentation avant d'agir
- !! : en plus de !, nécessite de suivre une procédure particulière, adapté à une personne qui comprend qu'une procédure est faite pour être suivie scrupuleusement
- !!! : en plus de !! nécessite des connaissances de base en informatique et être habitué à faire des recherches sur internet dans un but précis

Produits incompatibles et qui ne le seront pas :
-   Le pont Mi.light MiBoxer (sauf ON/OFF de la box)
-	Les contrôleurs de Led Milight(du type YL etc.) sans pont.
-   Les ampoules, prises ou contrôleurs de bandeau led qui contiennent un récepteur bluetoooth au lieu d'un récepteur radiofréquence 2.4 Ghz ou WiFi.
-   Les contrôleurs de bandeau led ou d'ampoules et les ampoules ou prises qui utilisent une connexion WiFi point à point avec l'application mobile.
-   L'ancienne lampe de chevet Xiaomi Yeelight n'est pas compatible.
-	Certains périphériques compatibles Magic Home ne fonctionnent plus qu'avec le cloud.
- 	Tous les capteurs WiFi sur pile (détecteur de présence, détecteur d'ouverture) compatibles Tuya qui ne fonctionnent plus qu'avec le cloud.


## Test de compatibilité


Il est conseillé de se renseigner sur le forum pour connaitre la compatibilité d'un produit peu diffusé.

Aller sur le forum de Jeedom [ici](https://community.jeedom.com/t/plugin-wifilightv2-discussion-generale/2439)


# Limitations

Mi.Light/EasyBulb/LimitlessLED :
-   Toutes les fonctionnalités sont prises en compte par le plugin.
-   Le pont MiBoxer n'est pas compatible

LW12/Lagute :
-   La programmation des modes custom n'est pas possible, il faut utiliser l'application fournie avec le contrôleur (Magic Home). Par contre, les modes customs peuvent être déclenchés avec le plugin.
-   Il existe plusieurs versions de LW12 qui peuvent ne pas être compatibles avec le plugin.

Magic UFO, MagicHome et Arilux AL-C01/02/03/04/06/10 :
-   La programmation des modes custom, le mode radio et les timers ne sont pas gérés. Il faut utiliser l'application fournie avec le contrôleur (Magic Home). Par contre, les modes customs peuvent être déclenchés avec le plugin.
-   Il existe différents modèles qui peuvent ne pas être compatibles avec le plugin.

Xiaomi Yeelight :
-   Les commandes HSV ne sont pas gérées. Flow et scène le sont en créant des commandes avec le code JSON correspondant à l'effet recherché (voir la documentation de l'API YeeLight).
-   La lampe de chevet Xiaomi n'est pas compatible.
-   La lampe de bureau Xiaomi Mijia est partiellement compatible (pas de retour d'état complet).

Wifi 320/370 :
-   Le retour d'état des modes scènes n'est pas géré, seul ON/OFF est géré.
-   Il existe différents modèles qui peuvent ne pas être compatibles avec le plugin.

H810 :
-   les jeux de scène ne sont pas gérés.
-   Il existe différents modèles qui peuvent ne pas être compatibles avec le plugin.

TP-Link :
-   Les timers ne sont pas gérés.
-   Les informations de consommation électrique ne sont pas gérées pour les ampoules.

Extel Meli :
-   La partie son de la lampe n'est pas prise en compte

Xiaomi Philips :
-   Toutes les fonctionnalités sont prises en compte

Contrôleurs de pixel strip leds compatibles Magic Home :
-   les scènes custom ne sont pas gérées.

Périphériques compatibles Tuya Smart/Jinvoo/eFamilyCloud :
-   toutes les commandes des périphériques validés (voir le forum) du firmware 1.0 et du firmware 2.0 sont compatibles (en particulier les prises Neo CoolCam).

Sonoff DIY :
-   Basic R3 avec le firmware 3.3.0 périphériques avec un seul contact.

Ewelink et Sonoff LAN :
-   périphériques avec le firmware 3.0.1 (liste donnée ci-après dans le paragraphe eWelink)

Nanoleaf Aurora :
-   Rythm non implantés

Passerelle Wifi Tuya et périphériques Zigbee :
-   La configuration est manuelle sauf pour un nombre limité de périphériques. La gestion de la couleur des ampoules sera limitée à des boutons de couleur individuelle (mais via des scénarios, ce problème peut être contourné par les experts).

# Configuration du module wifi

## Installer les périphériques

Télécharger l'application mobile du constructeur et suivre les indications afin de contrôler le périphérique avec le mobile. Pour chaque équipement wifilightV2, une aide détaillée est fournie dans la page de configuration.

Tant que le périphérique n'est pas contrôlé avec l'application mobile, le plugin ne pourra pas fonctionner.

Consultez l'aide et les forums du constructeur des périphériques.


## Configurer le routeur
Il faut configurer le DHCP de votre routeur (généralement fourni par votre fournisseur d'accès) pour modifier l'attribution de l'adresse IP du module wifi ou de l'ampoule ou la prise pour qu'elle soit statique. Noter cette adresse. En général, elle sera de la forme :
192.168.1.xxx 
où xxx correspond à l'adresse du module wifi (2 à 254)

Consultez les forums de votre box pour apprendre à configurer votre DHCP.

Après cette modification, vérifier que l'application mobile contrôle toujours le périphérique.

Vous pouvez alors passer à la configuration du plugin wifilightV2.

## Installation et Configuration du plugin

wifilightV2 ne crée aucun périphérique automatiquement, il faut les créer dans le plugin avant de les paramétrer.

Aide : 
-   Utiliser l'icône sous forme de point d'interrogation pour obtenir une aide sur chaque élément de configuration.

Paramétrage :
-   Pour paramétrer un équipement, choisir le menu Plugins / Objets communicants / wifilightV2
-   Puis cliquer sur le bouton en haut à gauche Ajouter un module Wifi 
-   Saisir le nom du module wifi
-   Saisir l'objet parent
-   Choisir la catégorie Lumière (par défaut)
-   Activer et rendre visible (par défaut)
-   Saisir l'adresse IP du module de la prise ou de l'ampoule WiFi (voir la FAQ pour plus d'explications)
-   Pour certains périphériques il est demandé de saisir le canal utilisé, créer un équipement wifilightV2 par canal
-   Pour certains périphériques il est demandé de saisir un jeton ou (et) un identifiant, consulter l'aide sur la page de configuration du périphérique
-   Pour certains périphériques il est possible de supprimer le retour d'état s'il provoque des microcoupures 
-   Pour certains contrôleurs il faut indiquer le nombre de leds des pixel strip leds
-   Pour certains contrôleurs il faut indiquer l'ordre des couleurs si les couleurs par défaut ne correspondent pas
-   Saisir la marque ou le type de périphérique
-   Saisir le sous-type exact du contrôleur, de l'ampoule, de la prise ou du strip-led, ceci est indispensable pour créer les commandes afin de piloter le périphérique
-   Saisir le nombre d'envois de commandes : permet de répéter la commande pour un équipement éloigné en cas de mauvaise transmission. (1 par défaut). Certaines ampoules ou prises ne gèrent pas cette répétition car le plugin s'assure par retour d'état de la transmission. Certaines commandes relatives (incrémentations) ne sont pas répétées.
-   Saisir le délai d'envoi en cas de répétition (0 ms par défaut, 100 ms max)
-   Saisir le % d'incrémentation de l'intensité lors de l'appui sur les boutons d'incrémentation ou de décrémentation de l'intensité lumineuse
-   Saisir le n° de groupe pour la synchronisation, voir plus bas

## Ajout des commandes
lors de la sauvegarde du module, les commandes sont automatiquement créées.

Configurer le paramètre "Création des commandes" pour créer tout ou partie des commandes.

le nom des commandes peut être modifié. Les commandes automatiquement créées et effacées sont recréées lors d'une sauvegarde.

Lorsque toutes les commandes sont créées, elles peuvent alourdir l'interface, il est possible de ne pas les afficher en configurant la ftion des commandes.

## Modification du type ou de sous-type de périphérique

-   supprimer toutes les commandes
-   modifier le type ou le sous-type de périphérique
-   sauvegarder 2 fois

# Fonctionnement du retour d'état et état de connexion

## Compatibilité du retour d'état

Le retour d'état est immédiat pour les périphériques suivants :
- Yeelight
- compatibles avec Ewelink
- compatibles avec l'appli Tuya smart live
- Sonoff en mode LAN

Par exemple, si un interrupteur est actionné, Jeedom le saura immédiatement.

Pour les périphériques :
 - LW12/Lagute
 - Magic UFO/Home
 - Arilux
 - Wifi 3x0 (partiellement) 
 - TP-Link
 - Xiaomi Philips
 - Extel Meli
 - Sonoff en mode DIY
 - Nanoleaf Aurora
 - Meross

Le plugin interroge régulièrement le périphérique pour connaitre son état. Le délai pour que Jeedom connaisse l'état peut dépasser 1 minute.

Pour les autres périphériques il n'y a pas de retour d'état.

## Mise à jour par scénario

Les commandes xxxxGet et Etat peuvent être utilisées dans un scénario Jeedom.

## Information de connexion

La commande ConnectedGet permet de récupérer l'état de la connexion de chaque périphérique. Elle est mise à jour toutes les minutes.
-  -1 : périphérique avec retour d'état OK
-  -2 : impossible de préparer la connexion au périphérique
-  -3 : périphérique non connecté
-  -4 : pas de réponse du périphérique
-  -5 : mauvaise réponse du périphérique
-  -6 : périphérique sans retour d'état

# Fonctionnement de la synchronisation

## Principe de la synchronisation

Il est possible de synchroniser plusieurs périphériques de marques différentes :

Tous les périphériques qui ont le même numéro de groupe sont synchronisées

Le groupe 0 n'est pas synchronisé (groupe par défaut)

Lors de l'utilisation d'une commande d'un périphérique du groupe, la même commande est appliquée sur tous les périphériques du même groupe

Si la commande n'existe pas pour le périphérique synchronisé, elle est simplement ignorée.

Attention, les périphériques ne vont pas être commandés exactement en même temps à cause des délais de latence lors de l'envoi des commandes qui se fait les uns après les autres.

## Configuration de la synchronisation

Il suffit de mettre un nombre différent de zéro dans le champ groupe lors de la configuration de l'équipement. Tous les équipements ayant les mêmes numéros seront synchronisés.

# Configuration de la valeur en Kelvin de la température de couleur de certaines lampes

Il y a 2 curseurs pour la température en Kelvin. Kelvin exprimé en % de 0 (chaud) à 100 (froid) et KelvinVal exprimé en Kelvin de min à max. 
Les valeurs par défaut correspondent la plupart du temps aux données du constructeur. Pour certaines lampes qui ne donnent pas les valeurs min et max, le plugin utilise par défaut 2700 à 6500.
Pour certaines lampes, les valeurs min et max peuvent être erronées et les valeurs extrêmes non comprises par la lampe. Il faut ajuster ces valeurs pour qu'elles soient dans les limites acceptées par la lampe. 
Vous pouvez prévenir le développeur pour qu'il modifie la configuration par défaut pour éviter ces ajustements.

# Cas particulier des box Mi.Light

## Configuration de l'iBox 1 ou 2

Depuis la version 1.0.58 des iBox 1 et 2, il peut être nécessaire de modifier leur configuration pour qu'elles puissent dialoguer avec Jeedom. 

Se connecter en http (avec un navigateur Web) à l'adresse IP de votre iBox. Les identifiants par défaut sont admin/admin. Aller dans l'onglet "Other Setting" et dans "Network Parameters setting/Protocol" choisir UDP et sauvegarder.

# Cas particulier des Xiaomi Yeelight

## Configuration de l'ampoule
Il est indispensable d'activer le contrôle par réseau local via l'application Xiaomi Yeelight.

## Mode Scène Xiaomi Yeelight
Il est possible de configurer les modes scène. Plusieurs modes scène sont préprogrammés dans le plugin mais il est possible d'ajouter d'autres modes scène.

Il suffit de respecter certaines conditions :
-   Ajouter une commande wifilightV2 action de type Défaut
-   Lui donner un nom (par exemple Scene Clignote)
-   Dans paramètres, mettre la commande scène Yeelight, par exemple : "id":1, "method":"set_scene","params":["cf",0,0,"500,1,255,100,1000,1,16776960,70"]

Ne pas mettre les accolades de début et de fin ainsi que les caractères de retour à la ligne, le plugin les ajoutera automatiquement
S'inspirer des commandes préconfigurées pour créer ces modes scène supplémentaires.
Pour la syntaxe Yeelight, voir [ici](https://www.yeelight.com/download/Yeelight_Inter-Operation_Spec.pdf)

## Mise à jour de l'état dans Jeedom
Lors de l'activation du plugin et dès que le démon est lancé ainsi que toutes les minutes, le plugin recherche les ampoules alimentées et connectées à Jeedom.

Dès que l'ampoule est trouvée, l'état de l'ampoule est remonté au plugin immédiatement.

Noter que le plugin peut mettre jusqu'à 1 minute pour trouver une ampoule et 4 minutes pour trouver qu'un périphérique est déconnecté.

# Cas particulier des périphériques TP-Link

## Configuration de l'ampoule

Note : certains périphériques en version 2 ne nécessitent pas de récupérer un jeton : laisser le champ vide dans la configuration du périphérique.
Depuis mi 2019, de nouveaux périphériques sortent en protocole version 2. Le protocole V2 nécessite de récupérer un jeton (token) permettant au plugin de dialoguer avec les périphériques TP-Link.

Pour obtenir ce jeton, il faut capturer les trames échangées entre l'appli Kasa sur le téléphone et le périphérique à ajouter dans le plugin. Sous Android il faut utiliser Packet Capture.

Le plugin permet ensuite d'extraire le jeton. Il faut copier la trame récupérée dans le champ Paramètres de la commande getKey puis exécuter cette commande. Si la trame est décodable, le jeton sera affiché dans les logs et dans le centre de messages (attention : effacer à chaque fois le message après lecture).

La trame à mettre dans "Paramètres" doit avoir l'allure suivante (les ... remplacent d'autres valeurs) :

    00 00 00 5f d0 f2 91 fe 90 e4 81 f9 8d af 95 ... 99 bb 81 fa 87 fa 87

Les données sont séparées par des espaces et représentent des nombres hexadécimaux qui sont issus directement de Packet Capture. En général, la trame commence par 3 zéros puis, ici, 5f donne la taille de la trame en hexadécimal soit 95 en décimal.

Aucune aide ne sera donnée pour récupérer la trame à partir de Packet Capure.

Pour l'instant seules les prises sont utilisables en V2, contacter l'auteur si vous avez des ampoules en V2.

# Cas particulier des Xiaomi Philips

## Configuration de l'ampoule

Il est indispensable de récupérer un jeton (token) permettant au plugin de dialoguer avec les périphériques Xiaomi Philips.

La procédure est complexe et nécessite plusieurs manipulations. Faire une recherche sur le web avec comme mot clé : Xiaomi token.

Aucune aide ne sera donnée pour récupérer le jeton.

# Cas particulier des périphériques Meross

## Configuration

Il est indispensable de récupérer un namespace qui correspond au Jeton dans le plugin, un messageId qui correspond à Identifiant dans le plugin et un timestamp. Pour trouver ces 3 paramètres, voir sur le web : Meross Credentials ou sur le forum.

Aucune aide ne sera donnée pour récupérer les 3 informations.

# Cas particulier des Sonoff en mode DIY

## Compatibilité

Les périphériques Sonoff compatibles sont : 
-  Sonoff D1 smart Dimmer
-  Sonoff BASICR3 et RFR3
-  Sonoff MINI

## Configuration du mode DIY

Sonoff donne tous les éléments [ici]( https://github.com/itead/Sonoff_Devices_DIY_Tools/tree/master/tool) pour configurer les modules en mode DIY.

Un téléphone portable et un PC sous windows avec carte Wifi sont nécessaires.
Le logiciel à faire tourner pour trouver le Sonoff donne dans la colonne de gauche l'identifiant nécessaire à la configuration du périphérique.

Le périphérique Sonoff doit être en firmware 3.3.0 ou plus, l'appli Windows ci-dessus permet de mettre à jour le firmware.

# Cas particulier des périphériques compatibles avec l'application Ewelink en mode LAN

## Récupération de l'APiKey et du DeviceID

Suivre les indications [ici](https://blog.ipsumdomus.com/sonoff-switch-complete-hack-without-firmware-upgrade-1b2d6632c01) pour récupérer ces 2 informations ou faire une recherche sur le web et le forum jeedom avec comme mots clé : Ewelink ou Sonoff Apikey. Le deviceid est à mettre dans l'identifiant du plugin. L'Apikey est à mettre dans le jeton. Il ne faut mettre ni espace ni guillemets.

Le périphérique doit être en firmware 3.0.1 ou plus, l'appli Ewelink permet de mettre à jour le firmware.

## Information de connexion

Quand un périphérique se connecte au wifi, le plugin sera immédiatement prévenu. Par contre, lorsqu'un périphérique est déconnecté, le plugin ne pourra le savoir que si une commande lui est envoyée par le plugin.

## Compatibilité

De nombreuses marques sont compatibles dont les Sonoff. 
-  Interrupteurs, prises murales, switch : simples de toutes marques
-  Interrupteurs, prises murales, switch : multiples de toutes marques
-  Interrupteurs, prises murales, switch : simples avec variateur de toutes marques
-  Sonoff D1 smart Dimmer
-  2 types de lampes (tester les 2 types)
-  Sonoff TH10/1H16 capteur de température. ON/OFF non fonctionnel depuis le firmware 3.4 
-  Sonoff basic, RF, POW, Mini
-  Sonoff Dual
-  Sonoff 4CH/4CH PRO
-  Sonoff Touch
-  Sonoff S20/S26
-  Sonoff T1/TX
-  Sonoff SLAMPHER
-  Sonoff T4EUC1
-  Sonoff RF bridge 433 pour les capteurs uniquement (porte, détecteur de présence, télécommande)


Néanmoins, la compatibilité de ces périphériques n'est pas garantie car le protocole peut être modifié par les constructeurs. Ne pas modifier le firmware du périphérique sans avoir vérifié qu'il est compatible avec le plugin.

Pour les périphériques multicanaux (comme le Sonoff 4CH) il faut créer autant d'équipements wifilightV2 que de canal, une copie du premier créé facile la tâche, ensuite il faut changer le n° de canal.

Pour les périphériques non présents dans cette liste (Sonoff Ifan par exemple) ou si la configuration ne fonctionne pas et après avoir intégré le périphérique dans Jeedom (avec la configuration Sonoff Basic par exemple) repérer dans les logs :

	Receive after decode :{...............}
	
et donner dans le [forum](https://community.jeedom.com/t/plugin-wifilightv2-sonoff-ewelink-lan/2632) le contenu des accolades afin de permettre l'intégration du module dans le plugin.

# Cas particulier de la passerelle Zigbee Tuya

## Compatibilité

Le dialogue entre le plugin et la passerelle se fait en WiFi. Ensuite, le dialogue entre les capteurs et actionneurs et la passerelle se fait via Zigbee. Ils doivent être compatibles Tuya.

Le plugin peut récupérer l'état des périphériques dès que ceux-ci envoient une information de changement d'état ou quand le plugin les interroge au lancement du demon. Si un interrupteur mural est utilisé, Jeedom le saura immédiatement.

Les équipements suivants sont compatibles mais la liste n'est pas exclusive et sera complétée en fonction du retour des utilisateurs.
- passerelle MoesHouse
- serrure Vima (mais pas MiHome)
	le plugin ne peut ouvrir/fermer car la serrure n'est pas prévue pour le faire, mais il peut connaitre la dernière clé utilisée
- capteur de température et d'humidité TYZS2
	fonctionnement complet
- tête thermostatique Hessway
	test complet OK. Ne gère pas la programmation des plages horaires des différents modes mais peut démarrer n'importe quel mode
	Utiliser l'option "mode étendu" de création des commandes pour créer toutes les commandes du thermostat.
- pour les autres périphériques, ils doivent être entièrement configurés en mode "custom".

Néanmoins, la compatibilité de ces périphériques n'est pas garantie car le protocole peut être modifié par les constructeurs. Ne pas modifier le firmware du périphérique sans avoir vérifié qu'il est compatible avec le plugin.

Il faut créer un équipement, avec la même adresse IP, pour chaque périphérique connecté à la passerelle et lui attribuer un n° de canal (le numéro entre 1 et 100 est sans importance mais chaque périphérique doit avoir un n° de canal différent).


## Récupération de la clé du périphérique

Il est indispensable de récupérer une clé locale (LocalKey) permettant au plugin de dialoguer avec les périphériques.

Pour récupérer la clé, la procédure est complexe et nécessite plusieurs manipulations. Faire une recherche sur le web avec comme mot clé : Tuya localkey, sur Github en particulier ou sur le forum Jeedom.

Si le périphérique est désinstallé puis réinstallé dans l'application mobile, alors sa clé sera modifiée. Il faudra retrouver la clé avec la procédure ci-dessus. 

Aucune aide ne sera donnée pour récupérer la clé.


## Récupération de l'identifiant du périphérique

Configurer le périphérique et renseigner la clé trouvée ci-dessus. Il faut ensuite modifier l'état du périphérique avec l'application fournie par le constructeur de la passerelle et consulter les logs.
Vous trouverez une information comme celle-ci :
    
    Receive after decode :{"dps":{"161":"Esc"},"cid":"ec1bbdfffe781b28","t":1589301302}
 
Le cid est à copier dans le champ id du périphérique du plugin (sans les " "). C'est lui qui permet de distinguer 2 équipements connectés à la passerelle.

Si aucun message en clair n'apparait, c'est que la clé n'est pas bonne.

## Configurer les périphériques

Si votre périphérique est dans la liste proposée, il devrait fonctionner immédiatement. Si votre périphérique est un peu différent, les dps peuvent avoir des valeurs différentes que les configurations par défaut. Il est possible de modifier les commandes créées en changeant le n° de dps et la formule de calcul pour retrouver la valeur voulue. Voir [Périphérique custom](#Périphérique-custom) pour comprendre la signification de la configuration par défaut.

Si le périphérique est complètement différent, il faut configurer manuellement le plugin en choisissant le sous-type "Custom" et en se référant au paragraphe [Périphérique custom](#Périphérique-custom) concernant les périphériques Tuya. Partagez alors votre configuration sur le forum pour l'intégrer dans le plugin.

# Cas particulier des périphériques compatibles Tuya Smart/Jinvoo/eFamilyCloud apps

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

Pour les périphériques multicanaux (comme les prises multiples) il faut créer autant d'équipements wifilightV2 que de canal, une copie du premier créé facile la tâche, ensuite il faut changer le n° de canal.

Les capteurs de présence et d'ouverture ne sont pas compatibles car ils ne dialoguent pas en local. D'autres périphériques de la liste ci-dessus peuvent aussi avoir un fonctionnement uniquement par internet, ils ne sont pas compatibles avec le plugin. Il faut demander au vendeur si le mode LAN est actif.

Le plugin teste les périphériques (mais ils doivent être ajoutés manuellement) et affiche un message dans le centre de messages lorsqu'un périphérique a été configuré avec le mauvais firmware.


## Configuration du périphérique

Il est indispensable de récupérer une clé locale (LocalKey) et un identifiant permettant au plugin de dialoguer avec les périphériques.

La procédure est complexe et nécessite plusieurs manipulations. Faire une recherche sur le web avec comme mot clé : Tuya localkey, sur Github en particulier ou sur le forum Jeedom.

Le périphérique ne doit pas être connecté à une application sur téléphone mobile, sinon il ne répondra pas aux ordres de Jeedom. Il faut donc fermer toute application possiblement connectée au périphérique.

Si le périphérique est désinstallé puis réinstallé dans l'application mobile, alors sa clé sera modifiée. Il faudra retrouver la clé avec la procédure ci-dessus. 

Aucune aide ne sera donnée pour récupérer la clé ou l'identifiant.

Tout changement de configuration nécessite de redémarrer le démon.

## Configuration de la récupération de la consommation des prises

Selon les marques, la consommation n'est pas envoyée de façon unique par la prise. Pour récupérer ce paramétrage, installer la prise dans Jeedom et conserver le retour d'état dans la configuration, puis aller dans les logs de wifilightV2. La prise est interrogée toutes les minutes. Repérer le message qui ressemble à :

    return decoded : {"devId":"xxxxxxxxx","dps":{"1":false,"2":false,"9":0,"10":0,"18":0,"19":0,"20":2281,"21":1,"22":726,"23":28971,"24":19417,"25":1070}}

L'index "20" correspond ici à la tension d'alimentation en centaine de mV soit : 228.1 V, elle doit légèrement bouger. Les index "18" et "19" correspondent au courant (mA) et à la puissance en W, ici aucun appareil n'est branché et donc les informations sont à zéro. C'est un bon moyen de trouver la tension, en branchant un appareil, ces 2 valeurs doivent être modifiées et la tension est juste après.

La syntaxe est alors : 20;18;19 qu'il faut mettre dans le champ 'Paramétrage de l'énergie'.

Pour les plugs 1 prise, en général il faut : 6;4;5 (mis par défaut par le plugin).

Pour les plugs 2 prises, en général il faut : 9;7;8 (mis par défaut par le plugin).

Pour les autres prises, la valeur 20;18;19 est mise par défaut.

## Personnalisation des commandes

Devant la diversité des périphériques compatibles Tuya, il peut être nécessaire de créer des commandes personnalisées.

Créer une nouvelle commande action/défaut. Donner un nom et un Id identiques et mettre la commande Tuya dans paramètres. Laisser dps vide. Les commandes Tuya sont au format JSON et contiennent dps:{xxxxxx}. C'est le xxxxxx qu'il faut mettre dans paramètres. 

Exemples :

Pour lever certains volets roulant : xxxxxx vaut "1":"1" qui est à mettre dans paramètres (utiliser les doubles guillemets de la touche 3).

Pour mettre la prise n°2 de certains plugs à on : xxxxxx vaut "2":true qui est à mettre dans paramètres (utiliser les doubles guillemets de la touche 3).

Pour éteindre la prise n°1 et la prise n°2 de certains plugs : xxxxxx vaut "1":false,"2":false qui est à mettre dans paramètres (utiliser les doubles guillemets de la touche 3).

Le paragraphe suivant donne des éléments pour interpréter les logs wifilightV2.
-   Noter qu'il est nécessaire que le périphérique renvoie son état.
-   Dans de nombreux cas il n'y aura pas de retour d'état si les commandes ajoutées par défaut ne récupèrent pas le dps. Dans ce cas il est possible de récupérer le retour d'état en ajoutant une commande custom en spécifiant le dps comme indiqué dans le paragraphe suivant.
-   Il est donc possible de mixer des commandes personnalisées en spécifiant le dps (paragraphe suivant) ou sans spécifier le dps.

## Périphérique custom

Il est possible de créer un périphérique entièrement custom. Contrairement aux commandes personnalisées, un périphérique custom n'a aucune commande prédéfinie (sauf connectedGet) et tout doit être configuré pour chaque commande. La procédure nécessite que le périphérique renvoie son état dans les logs, sinon il n'y a pas de solution.

### Configuration
-   désactiver tous les périphériques wifilightV2 sauf celui à tester
-   bien configurer le périphérique (adresse IP statique, LocalKey, Id)
-   vérifier que le demon tourne, sinon le démarrer
-   configurer les logs wifilightV2 en mode debug, redémarrer le demon
-   effacer les logs

### Récupération des informations
-   appuyer sur un bouton du périphérique (on, off, haut, bas, etc.) ou attendre que le périphérique renvoie son état ou appuyer sur un bouton de l'appli Smart Live (mais dans ce dernier cas, cela peut empêcher le retour d'état).
-   repérer dans les logs le retour d'état

Pour les Id uniques, toujours commencer par le caractère _ColorGet
Le plugin est équipé de boutons permettant de créer autmatiquement les cas les plus courants, il suffira de modifier le dps automatiquement céé.

#### Cas d'un actionneur tout ou rien, tel que ON/OFF

    Receive after decode :{devId:50701244cc50e37e9aff,dps:{"1":"off","101":true}}
	
Ici, le bouton off a été sélectionné sur le périphérique et on observe que le dps 1 a changé.
	
    Receive after decode :{devId:50701244cc50e37e9aff,dps:{"1":"on","101":true}}

	
Ici, le bouton on a été sélectionné sur le périphérique et on observe que le dps 1 a changé.
	
-   Créer une nouvelle commande action/défaut dans les commandes du périphérique :
    *    Dans la colonne interface mettre ON comme nom du bouton
	*    Dans la colonne nom interne et n° de commande, mettre comme Id unique : _ON, comme dps : 1 (sans les doubles guillemets) et comme paramètre : "on" (si le on n'est pas entouré de guillemets, il faut les enlever).
-   Créer une nouvelle commande action/défaut dans les commandes du périphérique :
    *    Dans la colonne interface mettre OFF comme nom du bouton
	*    Dans la colonne nom interne et n° de commande, mettre comme Id unique : _OFF, comme dps : 1 (sans les doubles guillemets) et comme paramètre : "off" (si le off n'est pas entouré de guillemets, il faut les enlever).
-   Créer une nouvelle commande info/autre dans les commandes du périphérique :
    *    Dans la colonne interface mettre ETAT comme nom de l'info
	*    Dans la colonne nom interne et n° de commande, mettre comme Id unique : _ETAT, comme dps : 1 (sans les doubles guillemets) et rien dans paramètres.

#### Dans le cas d'une commande numérique, comme une commande d'intensité :
	
    Receive after decode :{devId:50701244cc50e37e9aff,dps:{"3":850,"101":true}}

	
Ici, un curseur d'intensité a été sélectionné sur l'application du périphérique et on observe que le dps 3 a changé.
	
-   Créer une nouvelle commande action/curseur dans les commandes du périphérique :
    *    Dans la colonne interface mettre Intensité comme nom du curseur
	*    Dans la colonne nom interne et n° de commande, mettre comme Id unique : _Intensite, comme dps : 3 (sans les doubles guillemets) et comme paramètre : #slider# (ici la valeur numérique n'est pas entourée de guillemets, il ne faut donc pas les mettre).
-   Créer une nouvelle commande info/autre dans les commandes du périphérique :
    *    Dans la colonne interface mettre IntensiteGet comme nom de l'info
	*    Dans la colonne nom interne et n° de commande, mettre comme Id unique : _IntensiteGet, comme dps : 3 (sans les doubles guillemets) et rien dans paramètres.
	
Dans le champ paramètres, il est possible de mettre une formule en utilisant #value# dans la commande info et #slider# dans la commande action, sinon laisser entièrement vide.


#### Dans le cas d'un capteur numérique, comme un capteur de température :
	
    Receive after decode :{devId:50701244cc50e37e9aff,dps:{"8":23,"101":true}}
	
Ici, c'est une température qui est envoyée régulièrement et on observe que le dps 8 a changé.
	
-   Créer une nouvelle commande info/autre dans les commandes du périphérique :
    *    Dans la colonne interface mettre TempGet comme nom de l'info
	*    Dans la colonne nom interne et n° de commande, mettre comme Id unique : _TempGet, comme dps : 8 (sans les doubles guillemets) et rien dans paramètres.
	
Dans le champ paramètres, il est possible de mettre une formule en utilisant #value# dans la commande info.

#### Dans le cas d'un capteur tout ou rien, comme un détecteur de porte :
	
    Receive after decode :{devId:50701244cc50e37e9aff,dps:{"12":1}}
		
    Receive after decode :{devId:50701244cc50e37e9aff,dps:{"12":0}}

	
Ici, c'est l'information d'ouverture puis de fermeture qui est envoyée et on observe que le dps 12 a changé.
	
-   Créer une nouvelle commande info/binaire dans les commandes du périphérique :
    *    Dans la colonne interface mettre PorteGet comme nom de l'info
	*    Dans la colonne nom interne et n° de commande, mettre comme Id unique : _PorteGet, comme dps : 12 (sans les doubles guillemets) et rien dans paramètres.

#### Dans le cas de la couleur d'une lampe :

Le codage de la couleur chez tuya a plusieurs format et est différent de celui utilisé par Jeedom. Jeedom utilise le format RGB alors que tuya utilise différents formats HSV ou combinant HSV et RGB. Le RGB code chaque couleur de 0 à 255 ou en hexadéciaml de 0 à FF. Le rouge est donc codé FF0000, le bleu : 0000FF, le blanc : FFFFFF et le noir : 000000. Les valeur pour HSV sont les suivantes : Hue de 0 à 360° (couleur), S de 0 à 100% (Saturation) et V de 0 à 100% (Intensité). Voir [ici](https://www.rapidtables.com/convert/color/) pour aller plus loin.

Afin de permettre au plugin de fonctionner correctement pour les couleurs, il faut identifier les formats utilisés par tuya lors d'un changement de couleur avec l'appli tuya et en recupérant à cet instant dans les logs le dps qui a été modifié.

1 - format HSV : H (codé de 0 à 360 ) S (codé de 0 à 1000) V (codé de 0 à 1000) le résultat est ensuite donné en base 16, soit 12 digits hexadécimaux. Exemple pour du rouge : RGB = FF0000 et H= 0° S=100% V=100% soit en codage Tuya  000003E803E8

2 - format RGB00HSV : RGB est codé sur 6 digits (chacun de 00 à FF pour chaque couleur). 00 est intercallé puis H (codé de 0 à 255 ) S (codé de 0 à 255) V (codé de 0 à 255). Le résultat est donné en base 16, soit 14 digits hexadécimaux. Exemple pour du rouge : RGB = FF0000 et H= 0° S=100% V=100% soit en codage Tuya  FF00000000FFFF

3 - format RGB0HSV : RGB sont codés comme ci-dessus. 0 est intercallé puis H (codé de 0 à 360 ) S (codé de 0 à 100) V (codé de 0 à 100). Le résultat est donné en base 16, soit 14 digits hexadécimaux. Exemple pour du violet : RGB = FF00FF et H= 300° S=100% V=100% soit en codage Tuya  FF0000012C6464


Dans le champ paramètre des dps (couleur/info couleur/action saturation/action intensité/action) il faut mettre : 
-  si format 1 : #colorH4S4V4_1000# #colorH4S4V4_1000# #slider_satH4S4V4_1000# #slider_intH4S4V4_1000# 
-  si format 2 : #colorR2G2B200H2S2V2_255# #colorR2G2B200H2S2V2_255# #slider_satR2G2B200H2S2V2_255#  #slider_intR2G2B200H2S2V2_255#
-  si format 2 : #colorR2G2B20H3S2V2_100# #colorR2G2B20H3S2V2_100# #slider_satR2G2B20H3S2V2_100#  #slider_intR2G2B20H3S2V2_100#

Si le codage ne correspond pas à ceux ci-dessus, il faut configurer des boutons pour chaque couleur individuelle désirée en mettant comme valeur du dps le codage de la couleur attendue par le périphérique, il faut pour cela changer les couleurs avec l'appli tuya et consulter les logs. Le retour d'état ne pourra pas fonctionner.

Vous pouvez aider en échangeant sur le forum pour communiquer d'autres codages utilisés par tuya.

Exemple :

    Receive after decode :{devId:50701244cc50e37e9aff,dps:{"120":"012F003F00FF","101":true}}

	
Ici, une couleur a été modifiée sur l'application du périphérique et on observe que le dps 120 a changé, il a le format 1.
	
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
	
Nota : il est indispensable de mettre le même dps pour ces 4 commandes et de n'ajouter aucune autre commande action ou info sinon le plugin ne pourra pas décoder correctement la couleur.

## Remarques :
-   rien dans les logs : mauvaise adresse IP ou périphérique qui ne renvoie pas son état
-   retour avec erreur : Id incorrect
-   retour non décodé : localkey incorrect
-   la commande ne fonctionne pas : vérifier la commande

## Mise à jour de l'état dans Jeedom
Lors de l'activation du plugin et dès que le démon est lancé ainsi que toutes les minutes, le plugin recherche les périphériques alimentés et connectés à Jeedom.

Dès que le périphérique est trouvé, l'état du périphérique est remonté au plugin immédiatement.

Noter que le plugin peut mettre jusqu'à 1 minute pour trouver qu'un périphérique est connecté ou déconnecté.

# Cas particulier du Nanoleaf


## Récupération de la clé

Appuyer pendant 5-7 s sur le bouton power du Nanoleaf et appuyer sur la commande getKey du plugin. Vérifier que l'Apikey a été placée dans le champ "jeton" de la configuration du plugin.


## Utilisation d'effets custom

Créer un effet avec l'appli du NanoLeaf et lui donner un nom. Créer une commande action/défaut dans la liste des commandes du périphérique dans le plugin. Mettre le nom dans paramètres. Donner ensuite un identifiant unique et un nom, ils peuvent être identiques au nom de la commande.


# FAQ


## Quels périphériques peuvent être utilisés ?

Lire la documentation

## Rien ne se passe

Faire d'abord fonctionner le périphérique avec l'application mobile fournie par le constructeur.

Utiliser le bouton <tester> dans le menu Plugin/Objets Connectés/wifilightV2/commandes.

Aucune aide ne sera apportée sans que les périphériques soient opérationnels avec l'application constructeur sur un téléphone portable.
Il est nécessaire de donner une adresse IP fixe au périphérique.


## Je ne sais pas configurer ma box internet

Aucune aide ne sera apportée sur la box et les notions nécessaires pour configurer le routeur pour attribuer une adresse IP fixe. Consulter les forums de la box.

## Toutes les commandes ne sont pas créées lors d'un changement de modèle de périphérique

Sauvegarder 2 fois.

## La gestion de l'intensité des ampoules blanches Mi.Light/EasyBulb/LimitlessLED n'est pas pratique

Le constructeur des leds n'a pas prévu de pouvoir affecter directement l'intensité de l'ampoule. On ne peut qu'incrémenter ou décrémenter par rapport à la valeur précédente. Le plugin ne fait que reproduire ce fonctionnement. Le curseur qui est proposé est en conséquence capricieux.

## La gestion de l'intensité de la couleur a quelquefois des comportements imprévus

Aucun protocole ne gère l'intensité de la couleur, bien que généralement les applications mobiles le fassent. Tant que Jeedom gère couleur et intensité, tout se passe bien. Mais si l'intensité est modifiée par une application mobile, les résultats ne sont pas toujours ceux attendus. Le plugin essaye de corriger le souci quand la lampe ou le contrôleur possède un retour d'état.

## Y a-t-il un retour d'état ?

Lire la documentation

## Impossible de faire fonctionner les ampoules Xiaomi Yeelight

Il est indispensable d'activer le mode contrôle par réseau local via l'application Xiaomi Yeelight.

## Je ne contrôle pas le son des ampoules Extel Meli

Le son n'est pas géré par le plugin

## Impossible de faire fonctionner les ampoules Xiaomi Philips

Pour dialoguer avec les ampoules Xiaomi Philips, il est nécessaire de transmettre un jeton ou token en anglais. Sans ce jeton, l'ampoule ne prendra pas en compte les ordres qui lui sont envoyés. Ce jeton se trouve dans l'application Mi-Home et, selon votre téléphone, il existe plusieurs méthodes pour récupérer le jeton. La procédure est décrite sur plusieurs sites mais elle n'est pas reproduite ici pour deux raisons principales :

-   Xiaomi a déjà modifié son protocole ce qui a obligé à modifier la procédure pour récupérer le jeton, il pourrait encore le faire.
-   De nouvelles procédures plus simples peuvent être mises à disposition des internautes.
-   Cette documentation ne sera pas maintenue aussi rapidement qu'une simple recherche sur le web avec les mots clés : xiaomi token .

## Impossible de faire fonctionner les périphériques compatibles Tuya/Smart live/Jinvoo/eFamilyCloud apps

Pour dialoguer avec ces ampoules, prises et autres périphériques, il est nécessaire de transmettre une clé locale ou Localkey ou token en anglais et un identifiant. Sans ces paramètres, l'ampoule ne prendra pas en compte les ordres qui lui sont envoyés. Il existe plusieurs méthodes pour récupérer ces informations. La procédure est décrite sur plusieurs sites mais elle n'est pas reproduite ici pour deux raisons principales :

-   Les applications ont été mises à jour, ce qui a obligé à modifier la procédure pour récupérer les informations.
-   De nouvelles procédures plus simples peuvent être mises à disposition des internautes.
-   Cette documentation ne sera pas maintenue aussi rapidement qu'une simple recherche sur le web avec les mots clés : Tuya LocalKey et en particulier sur Github.

## Erreur lors de l'envoi de commande / roue crantée sans arrêt / Emission sans arrêt
-   les équipements wifilightV2 doivent être mis à jour
-   aller dans chaque équipement et sauvegarder 2 fois
-   tester avec un nouvel équipement si cela persiste

## Pont Mi.Light IBox1, iBox2, V6 : commande prise en compte aléatoirement
-   les ordres sont envoyés trop rapidement
-   dans les scénarios, mettre des pauses de durée suffisante

## Pont Mi.Light IBox1, iBox2, V6 : commande non prise en compte
-   lors de l'appairage avec l'application Mi.Light sur mobile et lors de la configuration de wifilightV2, bien choisir la même télécommande.

## LW12 Magic UFO Arilux Wifi3x0 H801 Contrôleurs compatibles Magic Home Tuya/Jinvoo/eFamilyCloud
-   de nombreuses versions existent et certaines peuvent être incompatibles avec le plugin. Contacter l'auteur pour un diagnostic.

## Des commandes sont manquantes lors de la création ou de la modification du sous type d'ampoule
-   sauvegarder l'équipement (2 fois)

# Comment obtenir de l'aide ?

Aller sur le forum de Jeedom [ici](https://community.jeedom.com/t/plugin-wifilightv2-sonoff-ewelink-lan/2632)

# Bogues connus


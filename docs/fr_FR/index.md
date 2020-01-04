# Présentation

Ce plugin permet de gérer de nombreux bandeaux de leds ou ampoules leds ou prises électriques pilotés en wifi ou par radiofréquence 2.4 GHz via une box wifi vendue avec le produit.


![Milight](../images/wifilightV2_screenshot01.png) ![Tuya](../images/wifilightV2_screenshot03.png) ![Plafonnier](../images/wifilightV2_screenshot05.png) ![Prise](../images/wifilightV2_screenshot07.png) 

![Sonoff](../images/wifilightV2_screenshot02.png) ![MagicHome](../images/wifilightV2_screenshot04.png)

# Compatibilités et limitations

## Produits compatibles 
 
Il existe de nombreux produits compatibles avec le plugin mais de marques très différents ou sans marque.
 
Les produits compatibles :
-   Ampoules Mi.Light/EasyBulb/LimitlessLED reliées aux contrôleurs ci-dessous : pas de retour d'état !
-   Strip-led Mi.Light/EasyBulb/LimitlessLED reliée aux contrôleurs ci-dessous : pas de retour d'état !
-   Contrôleur led Mi.Light/EasyBulb/LimitlessLED V3.0 à V5.0 (la miboxer n'est pas compatible): pas de retour d'état !
-   Contrôleur led Mi.Light/EasyBulb/LimitlessLED V6.0/iBox1/iBox2 : pas de retour d'état !
-   Ampoules WiFi Xiaomi Yeelight blanches et couleur avec retour d'état !
-   Strip-led WiFi Xiaomi Yeelight couleur avec retour d'état !
-   Plafonnier WiFi Xiaomi Yeelight avec retour d'état !
-   Lampe de bureau WiFi Xiaomi Mijia avec retour d'état !
- 	Sonoff Basic R3 en mode DIY avec retour d'état !!

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
-   Ampoules, prises, interrupteur, interrupteurs volets, humidifieur, thermostat compatibles Tuya Smart live ou Jinvoo smart ou eFamilyCloud apps avec retour d'état !!!
-   Prises électriques TP-link HS100 HS110 avec retour d'état !!
-   Contrôleurs de pixel strip leds compatible Magic home avec retour d'état !
-	Périphériques contrôlés par l'appli Ewelink dont les Sonoff en mode LAN avec retour d'état !!!

Pour ces contrôleurs, ampoules ou prises, le protocole d'échange ne provient pas directement du constructeur qui peut donc le modifier à tout moment. Plusieurs versions existent sur le marché qui ne sont pas toutes compatibles avec le plugin.

Attention :
- ! : intégration facile pour pour une personne qui lit la documentation avant d'agir
- !! : en plus de !, nécessite de suivre une procédure particulière, adapté à une personne qui comprend qu'une procédure est faite pour être suivie scrupuleusement
- !!! : en plus de !! nécessite des connaissances de base en informatique et être habitué à faire des recherches sur internet dans un but précis

Produits incompatibles et qui ne le seront pas :
-   Le pont Mi.light MiBoxer (sauf ON/OFF de la box)
-	Les contrôleurs de Led Milight(du type YL etc.) sans pont.
-   Les ampoules, prises ou contrôleurs de bandeau led qui contiennent un récepteur bluetoooth au lieu d'un récepteur radiofréquence 2.4 Ghz ou WiFi.
-   Les contrôleurs de bandeau led ou d'ampoules et les ampoules ou prises qui utilisent une connexion WiFi point à point avec l'application mobile.
-   La lampe de chevet Xiaomi n'est pas compatible (par construction).

## Test de compatibilité

Sur demande, un plugin de test pour les produits non validés peut être fourni.

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

le nom des commandes peut être modifié. Les commandes automatiquement créées et effacées sont recréées lors d'une sauvegarde.

lorsque toutes les commandes sont créées, elles peuvent alourdir l'interface, il est possible de ne pas les afficher en configurant la création des commandes.

## Modification du type ou de sous-type de périphérique

-   supprimer toutes les commandes
-   modifier le type ou le sous-type de périphérique
-   sauvegarder 2 fois

# Fonctionnement du retour d'état et état de connexion

## Compatibilité du retour d'état

Le retour d'état est immédiat pour les périphériques suivants :
- Yeelight
- compatibles avec ewelink
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

Le plugin interroge régulièrement le périphérique pour connaitre son état. Le délai pour que Jeedom connaisse l'état peut dépasser 1 minute.

Pour les autres périphériques il n'y a pas de retour d'état;

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

##  Principe de la synchronisation

Il est possible de synchroniser plusieurs périphériques de marques différentes :

Toutes les périphériques qui ont le même numéro de groupe sont synchronisées

Le groupe 0 n'est pas synchronisé (groupe par défaut)

Lors de l'utilisation d'une commande d'un périphérique du groupe, la même commande est appliquée sur tous les périphériques du même groupe

Si la commande n'existe pas pour le périphérique synchronisé, elle est simplement ignorée.

Attention, les périphériques ne vont pas être commandés exactement en même temps à cause des délais de latence lors de l'envoi des commandes qui se fait les uns après les autres.

## Configuration de la synchronisation

Il suffit de mettre un nombre différent de zéro dans le champ groupe lors de la configuration de l'équipement. Tous les équipements ayant les mêmes numéros seront synchronisés.

# Cas particulier des box Mi.Light

## Configuration de l'iBox 1 ou 2

Depuis la version 1.0.58 des iBox 1 et 2, il peut être nécessaire de modifier leur configuration pour qu'elles puissent dialoguer avec Jeedom. 

Se connecter en http (avec un navigateur Web) à l'adresse IP de votre iBox. Les identifiants par défaut sont admin/admin. Aller dans l'onglet "Other Setting" et dans "Network Parameters setting/Protocol" choisir UDP et sauvegarder.

# Cas particulier des Xiaomi Yeelight

## Configuration de l'ampoule
Il est indispensable d'activer le contrôle par réseau local via l'application  Xiaomi Yeelight.

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

# Cas particulier des Sonoff en mode DIY

## Configuration du mode DIY

Sonoff donne tous les éléments [ici]( https://github.com/itead/Sonoff_Devices_DIY_Tools/tree/master/tool) pour configurer les modules en mode DIY.

Un téléphone portable et un PC sous windows avec carte Wifi sont nécessaires.
Le logiciel à faire tourner pour trouver le Sonoff donne dans la colonne de gauche l'identifiant nécessaire à la configuration du périphérique.

Le périphérique Sonoff doit être en firmware 3.3.0 ou plus, l'appli Windows ci-dessus permet de mettre à jour le firmware.

# Cas particulier des périphériques compatibles avec l'application Ewelink en mode LAN

## Récupération de l'APiKey et du DeviceID

Suivre les indications [ici](https://blog.ipsumdomus.com/sonoff-switch-complete-hack-without-firmware-upgrade-1b2d6632c01) pour récupérer ces 2 informations. Le deviceid est à mettre dans l'identifiant du plugin. L'Apikey est à mettre dans le jeton. Il ne faut mettre ni espace ni guillements.

Le périphérique doit être en firmware 3.0.1 ou plus, l'appli Ewelink permet de mettre à jour le firmware.

## Information de connexion

Quand un périphérique se connecte au wifi, le plugin sera immédiatement prévenu. Par contre, lorsqu'un périphérique est déconnecté, le plugin ne pourra le savoir que si une commande lui est envoyée par le plugin.

## Compatibilité

De nombreuses marques sont compatibles dont les Sonoff. 
-  Interrupteurs, prises murales, switch : simples de toutes marques
-  Interrupteurs, prises murales, switch : multiples de toutes marques
-  2 types de lampes (tester les 2 types)
-  Sonoff TH10/1H16 capteur de température
-  Sonoff basic, RF, POW, Mini
-  Sonoff Dual
-  Sonoff 4CH/4CH PRO
-  Sonoff Touch
-  Sonoff S20/S26
-  Sonoff T1/TX
-  Sonoff SLAMPHER
-  Sonoff T4EUC1
-  Sonoff RF bridge 433 pour les capteurs uniquement (porte, détecteur de présence, télécommande)

Pour les périphériques multicanaux (comme le Sonoff 4CH) il faut créer autant d'équipements wifilightV2 que de canal, une copie du premier créé facile la tache, ensuite il faut changer le n° de canal.

Pour les périphériques non présents dans cette liste (Sonoff Ifan, variateur de lumière par exemple) ou si la configuration ne fonctionne pas et après avoir intégré le périphérique dans Jeedom (avec la configuration Sonoff Basic par exemple) repérer dans les logs :

	Receive after decode :{...............}
	
et donner dans le [forum](https://community.jeedom.com/t/plugin-wifilightv2-sonoff-ewelink-lan/2632) le contenu des accolades afin de permettre l'intégration du module dans le plugin.

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

Néanmoins, la compatibilité de ces périphériques n'est pas garantie car le protocole peut être modifié par les constructeurs.

Pour les périphériques multicanaux (comme les prises multiples) il faut créer autant d'équipements wifilightV2 que de canal, une copie du premier créé facile la tache, ensuite il faut changer le n° de canal.

Les capteurs de présence et d'ouverture ne sont pas compatibles car ils ne dialoguent pas en local.

Le plugin teste les périphériques (mais ils doivent être ajoutés manuellement) et affiche un message dans le centre de messages lorsqu'un périphérique a été configuré avec le mauvais firmware.


## Configuration du périphérique

Il est indispensable de récupérer une clé locale (LocalKey) et un identifiant permettant au plugin de dialoguer avec les périphériques.

La procédure est complexe et nécessite plusieurs manipulations. Faire une recherche sur le web avec comme mot clé : Tuya localkey, sur Github en particulier ou sur le forum Jeedom.

Le périphérique ne doit pas être connecté à une application sur téléphone mobile, sinon il ne répondra pas aux ordres de Jeedom. Il faut donc fermer toute application possiblement connectée au périphérique.

Si le périphérique est désinstallé puis réinstallé dans l'application mobile, alors sa clé sera modifiée. Il faudra retrouver la clé avec la procédure ci-dessus. 

Aucune aide ne sera donnée pour récupérer la clé ou l'identifiant.

Tout changement de configuration nécessite de redémarrer le démon.

## Configuration de la récupération de la consommation des prises

Selon les marques, la consommation n'est pas envoyée de façon unique par la prise. Pour récupérer ce paramétrage, installer la prise dans Jeedom et conserver le retour d'état dans la configuration, puis aller dans les logs de wifilightV2. La prise est interrogée toutes les minutes. Repérer la message qui ressemble à :

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

Il est possible de créer un périphérique entièrement custom. Contrairement aux commandes personnalisées, un périphérique custom n'a aucune commande prédéfinie et tout doit être configuré pour chaque commande. La procédure nécessite que le périphérique renvoie son état dans les logs, sinon il n'y a pas de soulution.

### Configuration
-   désactiver tous les périphériques wifilightV2 sauf celui à tester
-   bien configurer le périphérique (adresse IP statique, LocalKey, Id)
-   vérifier que le demon tourne, sinon le démarrer
-   configurer les logs wifilightV2 en mode debug
-   effacer les logs

### Récupération des informations
-   appuyer sur un bouton du périphérique (on,off,haut,bas,etc.) ou attendre que le prériphérique renvoie son état ou appuyer sur un bouton de l'appli Smart Live (mais dans ce dernier cela peut empêcher le retour d'état)
-   repérer dans les logs le passage ressemblant à ceci :

		Receive after decode :{devId:50701244cc50e37e9aff,dps:{"1":"off","101":true}}
		[2019-10-13 09:15:30][DEBUG] :       >>> : devId | 50701244cc50e37e9aff : 50701244cc50e37e9aff
		[2019-10-13 09:15:30][DEBUG] :       >>> : dps | Array : Array
		[2019-10-13 09:15:30][DEBUG] :       >>>>>>>>>>> : 1 | stop : stop
		[2019-10-13 09:15:30][DEBUG] :       >>>>>>>>>>> : 101 | 1 : 1
	
	Ici, le bouton off a été sélectionné sur le périphérique et on observe que le dps 1  a changé.
	
		Receive after decode :{devId:50701244cc50e37e9aff,dps:{"1":"on","101":true}}
		[2019-10-13 09:15:30][DEBUG] :       >>> : devId | 50701244cc50e37e9aff : 50701244cc50e37e9aff
		[2019-10-13 09:15:30][DEBUG] :       >>> : dps | Array : Array
		[2019-10-13 09:15:30][DEBUG] :       >>>>>>>>>>> : 1 | stop : stop
		[2019-10-13 09:15:30][DEBUG] :       >>>>>>>>>>> : 101 | 1 : 1
	
	Ici, le bouton on a été sélectionné sur le périphérique et on observe que le dps 1  a changé.
	
-   Créer une nouvelle commande action/défaut dans les commandes du périphérique :
    *    Dans la colonne interface mettre ON comme nom du bouton
	*    Dans la colonne nom interne et n° de commande, mettre comme Id unique : ON, comme dps : 1 (sans les double guillemets) et comme paramètre : "on" (si le on n'est pas entouré de guillemets, il faut les enlever).
-   Créer une nouvelle commande action/défaut dans les commandes du périphérique :
    *    Dans la colonne interface mettre OFF comme nom du bouton
	*    Dans la colonne nom interne et n° de commande, mettre comme Id unique : OFF, comme dps : 1 (sans les double guillemets) et comme paramètre : "off" (si le off n'est pas entouré de guillemets, il faut les enlever).
-   Créer une nouvelle commande info/autre dans les commandes du périphérique :
    *    Dans la colonne interface mettre ETAT comme nom de l'info
	*    Dans la colonne nom interne et n° de commande, mettre comme Id unique : ETAT, comme dps : 1 (sans les double guillemets) et rien dans paramètres.

	Dans le cas d'une information numérique :
	
		Receive after decode :{devId:50701244cc50e37e9aff,dps:{"3":850,"101":true}}
		[2019-10-13 09:15:30][DEBUG] :       >>> : devId | 50701244cc50e37e9aff : 50701244cc50e37e9aff
		[2019-10-13 09:15:30][DEBUG] :       >>> : dps | Array : Array
		[2019-10-13 09:15:30][DEBUG] :       >>>>>>>>>>> : 3 | 850 : 850
		[2019-10-13 09:15:30][DEBUG] :       >>>>>>>>>>> : 101 | 1 : 1
	
	Ici, un curseur d'intensité a été sélectionné sur l'application du périphérique et on observe que le dps 3 a changé.
	
-   Créer une nouvelle commande action/curseur dans les commandes du périphérique :
    *    Dans la colonne interface mettre Intensité comme nom du curseur
	*    Dans la colonne nom interne et n° de commande, mettre comme Id unique : Intensite, comme dps : 3 (sans les double guillemets) et comme paramètre : #slider# (ici la valeur numérique n'est pas entourée de guillemets, il ne faut donc pas les mettre).
-   Créer une nouvelle commande info/autre dans les commandes du périphérique :
    *    Dans la colonne interface mettre IntensiteGet comme nom de l'info
	*    Dans la colonne nom interne et n° de commande, mettre comme Id unique : IntensiteGet, comme dps : 3 (sans les double guillemets)et rien dans paramètres.

Remarques :
-   rien dans les logs : mauvaise adresse IP ou périphérique qui ne renvoie pas son état
-   retour avec erreur : Id incorrect
-   retour non décodé : localkey incorrect
-   la commande ne fonctionne pas : vérifier la commande
-   pour modifier la couleur d'une lampe, la technique du slider n'est pas possible il faut programmer plusieurs boutons avec des couleurs prédéfinies

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

## La gestion de l'intensité des ampoules blanches  Mi.Light/EasyBulb/LimitlessLED n'est pas pratique

Le constructeur des leds n'a pas prévu de pouvoir affecter directement l'intensité de l'ampoule. On ne peut qu'incrémenter ou décrémenter par rapport à la valeur précédente. Le plugin ne fait que reproduire ce fonctionnement. Le curseur qui est proposé est en conséquence capricieux.

## La gestion de l'intensité de la couleur a quelquefois des comportements imprévus

Aucun protocole ne gère l'intensité de la couleur, bien que généralement les applications mobiles le fassent. Tant que Jeedom gère couleur et intensité, tout se passe bien. Mais si l'intensité est modifiée par une application mobile, les résultats ne sont pas toujours ceux attendus. Le plugin essaye de corriger le souci quand la lampe ou le contrôleur possède un retour d'état.

## Y a-t-il un retour d'état ?

Lire la documentation

## Impossible de faire fonctionner les ampoules Xiaomi Yeelight

Il est indispensable d'activer le mode contrôle par réseau local via l'application  Xiaomi Yeelight.

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
-   de nombreuses versions existent et certaines peuvent être incompatibles avec le plugin. Contacter l'auteur pour une éventuelle mise à jour.

## Des commandes sont manquantes lors de la création ou de la modification du sous type d'ampoule
-   sauvegarder l'équipement (2 fois)


# Comment obtenir de l'aide ?


Aller sur le forum de Jeedom [ici](https://community.jeedom.com/t/plugin-wifilightv2-sonoff-ewelink-lan/2632)

# Bogues connus

La mémoire diminue drastiquement
-	Bogue corrigé.

Pour les prises compatibles Tuya des microcoupures surviennent régulièrement
-   Bogue corrigé.
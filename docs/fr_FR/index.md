# Changelog

[voir ici](https://bcaro.github.io/wifilightV2-doc/fr_FR/changelog)

# Installation

Le plugin nécessite d'installer des dépendances. Si les dépendances ne sont pas installées de nombreux périphériques ne pourront pas fonctionner correctement. Néanmoins, si l'installation échoue, seule la recherche de l'adresse IP des périphériques Tuya et Ewelink ne fonctionnera pas.

# Présentation

Attention :
Le fonctionnement permanent du plugin ne peut être garanti : incompatibilité ou compatibilité partielle du produit, protocole mal géré, connexion de mauvaise qualité par exemples. Ne pas utiliser le plugin pour commander des appareils sensibles pouvant générer des désordres de tout ordre. Le plugin est fourni pour des besoins de tests et non pour une installation nécessitant un fonctionnement optimal en toute circonstance.

Ce plugin permet de gérer de nombreux bandeaux de leds, ampoules leds, prises électriques, thermostats, capteur de température, capteur de porte, etc. pilotés en wifi directement ou via une box wifi vendue avec le produit. Le principe du plugin est de ne jamais utiliser le cloud et donc une connexion internet entre le plugin et le périphérique via un serveur lointain, toutes les actions sont donc locales au réseau domestique.

Une exception : les produits Govee.

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
<img src="../images/wifilightV2_screenshot15.png" alt="image" style="height:100px;"/>
<img src="../images/wifilightV2_screenshot16.png" alt="image" style="height:100px;"/>
<img src="../images/wifilightV2_screenshot17.png" alt="image" style="height:100px;"/>
<img src="../images/wifilightV2_screenshot18.png" alt="image" style="height:100px;"/>
<img src="../images/wifilightV2_screenshot19.png" alt="image" style="height:100px;"/>
<img src="../images/wifilightV2_screenshot20.png" alt="image" style="height:100px;"/>
<img src="../images/wifilightV2_screenshot21.png" alt="image" style="height:100px;"/>


# Compatibilités et limitations

## Produits compatibles 
 
Il existe de nombreux produits compatibles avec le plugin mais de marques très différentes ou sans marque.
 
Les produits compatibles :
-   Ampoules Mi.Light/EasyBulb/LimitlessLED reliées aux contrôleurs ci-dessous : pas de retour d'état !
-   Strip-led Mi.Light/EasyBulb/LimitlessLED reliée aux contrôleurs ci-dessous : pas de retour d'état !
-   Contrôleur led Mi.Light/EasyBulb/LimitlessLED V3.0 à V5.0 (la miboxer n'est pas compatible): pas de retour d'état !
-   Contrôleur led Mi.Light/EasyBulb/LimitlessLED V6.0/iBox1/iBox2 : pas de retour d'état !
-   Contrôleur led DIY MiLight-hub : avec retour d'état !!
-   Ampoules WiFi Xiaomi Yeelight blanches et couleur avec retour d'état !
-   Strip-led WiFi Xiaomi Yeelight couleur avec retour d'état !
-   Plafonnier WiFi Xiaomi Yeelight avec retour d'état !
-   Lampe de chevet V2 WiFi Xiaomi Yeelight avec retour d'état !
-   Lampe de bureau WiFi Xiaomi Mijia avec retour d'état !
- 	Sonoff Basic R3 en mode DIY avec retour d'état !!
-   Nanoleaf Aurora avec retour d'état !
-	Produits myStrom avec retour d'état !!
-   Produits Govee avec retour d'état !


Produits pouvant être compatibles et non garantis :
-   LW12/Lagute : RGB strip-led contrôleur : retour d'état !
-   Wifi 320/370 RGB/RGBW strip-led contrôleur : retour d’état partiel !
-   Magic UFO : RGBW strip-led contrôleur, gère le blanc !
-   MagicHome : RGBW/RGBWW strip-led contrôleur et ampoules/spots RGBW compatibles avec l'appli MagicHome !
-   H801 : RGBW strip-led contrôleur, pas de retour d’état !!
-   Arilux AL-C01/02/03/04/06/10 : RGB/RGBW/RGBWW strip-led contrôleur, retour d’état !
-   Kasa LB100/110/120/130 : ampoules avec retour d’état !
-   Lampe Extel Meli avec retour d'état !
-   Xiaomi Philips : Lampe bureau, ampoule et plafonnier avec retour d'état !!!
-   Ampoules, prises, interrupteur, interrupteurs volets, humidificateur, thermostat compatibles Tuya Smartlife app avec retour d'état !!
-   Prises électriques Kasa HS100 HS110 avec retour d'état !!
-   Contrôleurs de pixel strip leds compatible Magic home avec retour d'état !
-	Périphériques contrôlés par l'appli Ewelink dont les Sonoff en mode LAN avec retour d'état !!
-	Passerelles wifi (dont Lidl) utilisant le protocole Tuya pour les périphériques Zigbee !!
-   Périphériques Meross !!
-	Produits Wiz !!
-   Tapo !


Pour ces derniers contrôleurs ou périphériques wifi, le protocole d'échange ne provient pas directement du constructeur qui peut donc le modifier à tout moment. Plusieurs versions existent sur le marché qui ne sont pas toutes compatibles avec le plugin. Certains produits particuliers peuvent ne pas être compatibles.

Attention :
- ! : intégration facile pour une personne qui lit la documentation avant d'agir
- !! : en plus de !, nécessite de suivre une procédure particulière, adapté à une personne qui comprend qu'une procédure est faite pour être suivie scrupuleusement
- !!! : en plus de !! nécessite des connaissances de base en informatique et être habitué à faire des recherches sur internet dans un but précis


Il est conseillé de se renseigner sur le forum pour connaitre la compatibilité d'un produit peu diffusé.

Ne jamais modifier le firmware des produits, ce qui peut les rendre incompatibles avec le plugin.

Aller sur le forum de Jeedom [ici](https://community.jeedom.com/t/plugin-wifilightv2-discussion-generale/2439)


## Limitations

Mi.Light/EasyBulb/LimitlessLED :
-   Toutes les fonctionnalités sont prises en compte par le plugin (avec les ibox1 et 2 et avec le pont DIY Milight-hub)
-   Le pont MiBoxer n'est pas compatible
-	Les contrôleurs de Led Milight(du type YL etc.) sans pont.

LW12/Lagute :
-   La programmation des modes custom n'est pas possible, il faut utiliser l'application fournie avec le contrôleur (Magic Home). Par contre, les modes customs peuvent être déclenchés avec le plugin.
-   Il existe plusieurs versions de LW12 qui peuvent ne pas être compatibles avec le plugin.

Magic UFO, MagicHome et Arilux AL-C01/02/03/04/06/10 :
-   La programmation des modes custom, le mode radio et les timers ne sont pas gérés. Il faut utiliser l'application fournie avec le contrôleur (Magic Home). Par contre, les modes customs peuvent être déclenchés avec le plugin.
-   Il existe différents modèles qui peuvent ne pas être compatibles avec le plugin.
-	Certains périphériques compatibles Magic Home sont incompatibles car ne fonctionnent plus qu'avec le cloud

Xiaomi Yeelight :
-   Les commandes HSV ne sont pas gérées. Flow et scène le sont en créant des commandes avec le code JSON correspondant à l'effet recherché (voir la documentation de l'API YeeLight).
-   La lampe de chevet Xiaomi de première version n'est pas compatible.
-   La lampe de bureau Xiaomi Mijia est partiellement compatible (pas de retour d'état complet).

Wifi 320/370 :
-   Le retour d'état des modes scènes n'est pas géré, seul ON/OFF est géré.
-   Il existe différents modèles qui peuvent ne pas être compatibles avec le plugin.

H810 :
-   les jeux de scène ne sont pas gérés.
-   Il existe différents modèles qui peuvent ne pas être compatibles avec le plugin.

Kasa :
-   Les timers ne sont pas gérés.
-   Les informations de consommation électrique ne sont pas gérées pour les ampoules.

Extel Meli :
-   La partie son de la lampe n'est pas prise en compte

Xiaomi Philips :
-   Toutes les fonctionnalités sont prises en compte

Contrôleurs de pixel strip leds compatibles Magic Home :
-   les scènes custom ne sont pas gérées.

Périphériques compatibles Tuya Smartlife :
-   toutes les commandes des périphériques validés (voir le forum) du firmware 1.0 et du firmware 2.0 sont compatibles (en particulier les prises Neo CoolCam).
-   non compatibles avec les périphériques cloud, en particulier les capteurs d'ouverture

Sonoff DIY :
-   Basic R3 avec le firmware 3.3.0 périphériques avec un seul contact.

Ewelink et Sonoff LAN :
-   périphériques avec le firmware 3.0.1 (liste donnée ci-après dans le paragraphe eWelink)
-   non compatible zigbee
-   non compatibles avec les périphériques cloud, en particulier les capteurs d'ouverture et les lampes ou strip leds.

Meross :
-   commande de volets roulant : fonctionnement partiel
-   commande de porte de garage : fonctionnement partiel

Nanoleaf Aurora :
-   Rythm non implantés

Passerelle Wifi Tuya et périphériques Zigbee :
-   La configuration est manuelle ou semi-automatique sauf pour un nombre limité de périphériques.

Wiz :
- seule la lampe a été testée, en attente de retours des utilisateurs pour les autres périphériques

myStrom :
- seule la prise commandée a été testée, en attente de retours des utilisateurs pour les autres périphériques

Govee :
- la connexion avec les produits se fait via le nuage et nécessite internet.
- seules les commandes On/Off intensité couleur et température de couleur fonctionnent
- ces commandes ne fonctionnent pas sur tous les modules Govee

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

## Configuration du plugin

wifilightV2 ne crée pas les périphériques automatiquement sauf :

-   Tuya Smartlife
-   Ewelink
-   Govee

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
-   Pour la box Milight-hub, un identifiant et un port doivent être configurés
-   Vous pouvez charger des images dans le dossier /data/myImages du plugin. Ces images peuvent remplacer les images associées aux périphériques dans la page d'affichage de tous les périphériques wifilightV2. Utile pour les périphériques personnalisés qui ne sont pas associés à une image.
-   Pour certains périphériques il est demandé de saisir le canal utilisé, créer un équipement wifilightV2 par canal
-   Pour certains périphériques il est demandé de saisir un jeton ou (et) un identifiant, consulter l'aide sur la page de configuration du périphérique
-   Pour les périphériques Tuya, il est possible de forcer l'interrogation de l'état toutes les minutes, utile pour les prises avec consommation.
-   Pour certains contrôleurs il faut indiquer le nombre de leds des pixel strip leds
-   Pour certains contrôleurs il faut indiquer l'ordre des couleurs si les couleurs par défaut ne correspondent pas
-   Saisir la marque ou le type de périphérique
-   Saisir le sous-type exact du contrôleur, de l'ampoule, de la prise ou du strip-led, ceci est indispensable pour créer les commandes afin de piloter le périphérique
-   Saisir le nombre d'envois de commandes : permet de répéter la commande pour un équipement éloigné en cas de mauvaise transmission. (1 par défaut). Certaines ampoules ou prises ne gèrent pas cette répétition car le plugin s'assure par retour d'état de la transmission. Certaines commandes relatives (incrémentations) ne sont pas répétées.
-   Saisir le délai d'envoi en cas de répétition (0 ms par défaut, 100 ms max)
-   Saisir le % d'incrémentation de l'intensité lors de l'appui sur les boutons d'incrémentation ou de décrémentation de l'intensité lumineuse
-   Configurer le nombre de commandes créées, la création de toutes les commandes (énergie couleurs effets) peut alourdir l'interface
-   Saisir le n° de groupe pour la synchronisation, voir plus bas

## Ajout des commandes
Lors de la sauvegarde du module, les commandes sont automatiquement créées.

Configurer le paramètre "Création des commandes" pour créer tout ou partie des commandes.

le nom des commandes peut être modifié. Les commandes automatiquement créées et effacées sont recréées lors d'une sauvegarde.

Lorsque toutes les commandes sont créées, elles peuvent alourdir l'interface, il est possible de ne pas les afficher en configurant la création des commandes.

## Modification du périphérique

-   un changement de type ou de sous type supprime toutes les commandes
-   sauvegarder 2 fois après changement

# Retour d'état

## Compatibilité

Le retour d'état est immédiat pour les périphériques suivants :
- Yeelight
- compatibles avec Ewelink
- compatibles avec l'appli Tuya smart live
- Sonoff en mode LAN
- compatibles Tuya/Zigbee
- Sonoff en mode DIY (nécessite un firmware récent, sinon interrogation toutes les minutes)


Par exemple, si un interrupteur est actionné, Jeedom le saura immédiatement.

Pour les périphériques :
 - LW12/Lagute
 - Magic UFO/Home
 - Arilux
 - Wifi 3x0 (partiellement) 
 - TP-Link
 - Xiaomi Philips
 - Extel Meli
 - Nanoleaf Aurora
 - Meross
 - Mi.Light connectés au pont Milight-hub
 - Wiz
 - myStrom
 - Govee
 - Tapo

Le plugin interroge régulièrement le périphérique pour connaitre son état. Le délai pour que Jeedom connaisse l'état peut dépasser 1 minute.

Pour les autres périphériques il n'y a pas de retour d'état.

La commande stateGet permet, pour les périphériques qui renvoient leur état, de forcer la mise à jour de l'état en interrogeant le périphérique.

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

Sur la page des périphériques, un émoticône indique si la connexion est OK ou KO.  L'émoticône indifférent est utilisé dans les cas où le plugin ne peut connaitre l'état de la connexion, soit les périphériques qui ne renvoient pas leur état. Noter que pour les périphériques avec passerelle (Tuya Zigbee, Meross), l'état de la connexion est celui de la passerelle et est appliqué à tous les périphériques connectés à la passerelle.

# Synchronisation

## Principe

Il est possible de synchroniser plusieurs périphériques de marques différentes :

Tous les périphériques qui ont le même numéro de groupe sont synchronisées

Le groupe 0 n'est pas synchronisé (groupe par défaut)

Lors de l'utilisation d'une commande d'un périphérique du groupe, la même commande est appliquée sur tous les périphériques du même groupe

Si la commande n'existe pas pour le périphérique synchronisé, elle est simplement ignorée.

Attention, les périphériques ne vont pas être commandés exactement en même temps à cause des délais de latence lors de l'envoi des commandes qui se fait les uns après les autres.

## Configuration

Il suffit de mettre un nombre différent de zéro dans le champ groupe lors de la configuration de l'équipement. Tous les équipements ayant les mêmes numéros seront synchronisés.

# Kelvin des lampes

Il y a 2 curseurs pour la température en Kelvin. Kelvin exprimé en % de 0 (chaud) à 100 (froid) et KelvinVal exprimé en Kelvin de min à max. 
Les valeurs par défaut correspondent la plupart du temps aux données du constructeur. Pour certaines lampes qui ne donnent pas les valeurs min et max, le plugin utilise par défaut 2700 à 6500.
Pour certaines lampes, les valeurs min et max peuvent être erronées et les valeurs extrêmes non comprises par la lampe. Il faut ajuster ces valeurs pour qu'elles soient dans les limites acceptées par la lampe. 
Vous pouvez prévenir le développeur pour qu'il modifie la configuration par défaut pour éviter ces ajustements.   

# liste des couleurs

Pour les ampoules couleurs, il faut avoir créé le périphérique en mode étendu + couleurs + disco. Une liste à choix est alors associée à chaque couleur. Si les commandes couleurs sont supprimées, la liste à choix créée automatiquement ne sera pas modifiée mais la liste déroulante ne pourra plus avoir accès à cette couleur. Pour ne pas être gêné dans l'interface, il faut supprimer l'affichage des commandes couleurs.   


# liste des modes Disco et Custom

Certaines lampes possèdent des modes disco et custom. Une liste à choix est associée à chaque option de ces modes. Si les commandes disco ou custom sont supprimées, la liste à choix créée automatiquement ne sera pas modifiée. Pour les commandes custom, vous pouvez ajouter de nouvelles commandes mais il faudra modifier manuellement cette nouvelle commande dans la liste. Il faut avoir créé le périphérique en mode étendu + couleurs + disco. Si les modes Disco et Custom individuels sont supprimés, la liste déroulante ne pourra plus avoir accès à ce mode. Pour ne pas être gèné dans l'interface, il faut supprimer l'affichage des commandes disco et custom.

Par exemple, la commande action/liste pour les customs a comme nom interne : CMD_LIST_CUSTOM. Son paramètre correspond à la construction de cette liste :

    Scene01|Extinction;Scene02|Allumage

La liste affichera Extinction et Allumage et les commandes qui seront exécutées seront celles de nom interne Scene01 ou Scene02. Si vous ajoutez une nouvelle commande custom, par exemple Scene03 dont le nom est Flash, il faudra modifier le paramètre de cette façon : 

    Scene01|Extinction;Scene02|Allumage;Scene03|Flash

Si par la suite, la commande Scene01 est supprimée, il faudra manuellement modifier le paramètre de CMD_LIST_CUSTOM : 

    Scene02|Allumage;Scene03|Flash
   


# Mi.Light

Il faut créer un périphérique par canal dans le plugin.

## Ibox 1 / 2 et Mi.Light Box

### Arrêt de la vente

Mi.Light ne diffuse plus les ibox1 et 2 qui les a remplacées par la Miboxer qui est purement cloud et n'est pas compatible avec le plugin.

### Configuration

Depuis la version 1.0.58 des iBox 1 et 2, il peut être nécessaire de modifier leur configuration pour qu'elles puissent dialoguer avec Jeedom. 

Se connecter en http (avec un navigateur Web) à l'adresse IP de votre iBox. Les identifiants par défaut sont admin/admin. Aller dans l'onglet "Other Setting" et dans "Network Parameters setting/Protocol" choisir UDP et sauvegarder.

Il faut laisser le champ Port vide (ni même un espace).


## MiLight-Hub

### Un hub alternatif

Plusieurs projets ont abouti à des hubs compatibles avec les ampoules et télécommandes Mi.Light afin de contourner les limitations des hubs du constructeur et qui deviennent encore plus intéressants aujourd'hui avec la disparition des iBox1 et 2. Le plugin est compatible avec le projet de [Sidoh](https://github.com/sidoh/esp8266_milight_hub) et propose 2 modes pour piloter les ampoules. Le premier mode est celui historique des iBox1 et 2, ce qui permet d'utiliser vos périphériques comme habituellement, il y aura 2 paramètres de configuration à ajouter. Le 2ème mode est complètement nouveau et a comme avantages une très grande réactivité et un retour d'état partiel toutes les minutes.

### Montage du Milight-hub

Le hub est donc DIY, il faut donc le monter et le programmer avec les informations fournies par [Sidoh](https://github.com/sidoh/esp8266_milight_hub). Un tuto est disponible [sur le forum](https://community.jeedom.com/t/tuto-realiser-un-hub-milight-en-remplacement-des-ibox1-et-ibox2/47836?u=bernardfr.caron).

### Mode historique Mi.Light

Dans ce mode, il suffit de renseigner le paramètre Port avec le port du mode UDP du Milight-hub. Voir [Sidoh](https://github.com/sidoh/esp8266_milight_hub)  ou [sur le forum](https://community.jeedom.com/t/tuto-realiser-un-hub-milight-en-remplacement-des-ibox1-et-ibox2/47836?u=bernardfr.caron) pour plus de détails.

### Mode ESP

Dans ce mode, le choix des périphériques se fait par le type de télécommande et non par le type de lampe comme dans le mode historique. Il faut, après avoir renseigné les paramètres habituels, renseigner l'identifiant du groupe de télécommandes, voir [Sidoh](https://github.com/sidoh/esp8266_milight_hub) ou [sur le forum](https://community.jeedom.com/t/tuto-realiser-un-hub-milight-en-remplacement-des-ibox1-et-ibox2/47836?u=bernardfr.caron) pour plus de détails. Ce mode propose un retour d'état partiel mis à jour toutes les minutes.

Pour appairer une lampe avec le Milight-Hub, mettre la lampe sous tension et cliquer sur Sync ON. Utiliser Sync OFF pour désappairer. Pour appairer une télécommande, sélectionner le ON du canal à synchroniser dès la mise sous tension et cliquer sur Sync ON.

Pour connaitre les caractéristiques du hub, cliquer sur getKey, le résultat est obtenu dans getKetget en cliquant sur Tester.

# Xiaomi Yeelight

## Configuration
Il est indispensable d'activer le contrôle par réseau local via l'application Xiaomi Yeelight.

## Choix de la version

Le plugin permet le choix entre 2 versions :

- V1 : la connexion entre le plugin et le périphérique n'est pas permanente, le temps de réaction est un peu plus important et le retour d'état n'est pas immédiat.
- V2 : la connexion est permanente donc le plugin est plus réactif et le retour d'état est immédiat. Par contre cela entraine une plus grande sensibilité aux mauvaises connexions wifi, provoquant des déconnexions avec impossibilité pendant quelques minutes d'accéder au périphérique.

## Mode Scène
Il est possible de configurer les modes scène. Plusieurs modes scène sont préprogrammés dans le plugin mais il est possible d'ajouter d'autres modes scène.

Il suffit de respecter certaines conditions :
-   Ajouter une commande wifilightV2 action de type Défaut
-   Lui donner un nom (par exemple Scene Clignote)
-   Dans paramètres, mettre la commande scène Yeelight, par exemple : 

    "id":1,"method":"set_scene","params":["cf",0,0,"500,1,255,100,1000,1,16776960,70"]

Ne pas mettre les accolades de début et de fin ainsi que les caractères de retour à la ligne, le plugin les ajoutera automatiquement
S'inspirer des commandes préconfigurées pour créer ces modes scène supplémentaires.
Pour la syntaxe Yeelight, voir [ici](https://www.yeelight.com/download/Yeelight_Inter-Operation_Spec.pdf)

## Etat
En V2, lors de l'activation du plugin et dès que le démon est lancé ainsi que toutes les minutes, le plugin recherche les ampoules alimentées et connectées à Jeedom.

Dès que l'ampoule est trouvée, l'état de l'ampoule est remonté au plugin immédiatement.

Noter que le plugin peut mettre jusqu'à 1 minute pour trouver une ampoule et 4 minutes pour trouver qu'un périphérique est déconnecté.

En V1, le retour d'état peut prendre jusqu'à une minute.

# Tapo & Kasa TP-Link 

Les périphériques compatibles sont :

Tapo :
- ampoules L510 L530 L900 L920
- prises P100 P110

Kasa :
-   ampoules KL50 KL60 KL110 KL120 KL130 LB100 LB110 LB120 LB130
-   prises HS100 HS110 KP105 KP110


## Configuration du cloud TP-Link

Cette partie du plugin nécessite le lancement des dépendances.

Dans la configuration du plugin, renseigner l'adresse mail et le mot de passe de connexion à l'appli Kasa ou Tapo et sauvegarder. Ensuite, sélectionner : Tapo-Kasa Passer en inclusion. Les périphériques sont créés automatiquement. Les identifiants sont les mêmes pour Tapo et Kasa.

Si l'adresse IP locale n'est pas trouvée par le plugin, faire le rapprochement entre l'adresse mac et l'adresse IP données dans les paramètres du périphérique de l'application Tuya et votre routeur et modifier l'adresse IP. La procédure pour trouver l'adresse IP utilise une commande du système Linux, si elle ne peut être chargée ou si le système n'est pas compatible, l'adresse IP ne pourra pas être trouvée automatiquement.

Pour les périphériques de la liste ci-dessous, le sous-type est trouvé, dans les autres cas le Tapo P100 est choisi par le plugin, vous pouvez changer le sous-type sans perdre le deviceId.

Si l'adresse IP n'a pas été trouvée parce que le périphérique n'est pas connecté, lui donner l'adresse : 0.0.0.0 , le connecter et relancer la procédure d'inclusion.

Si un périphérique de même deviceID existe déjà, l'inclusion ne se fera pas.

Par la suite, le contrôle des périphériques est local.

Note : Les prises HS100 HS110 KP105 KP110 peuvent nécessiter d'utiliser le protocole V2, faire la modification manuellement.


# Xiaomi Philips

Il est indispensable de récupérer un jeton (token) permettant au plugin de dialoguer avec les périphériques Xiaomi Philips.

La procédure est complexe et nécessite plusieurs manipulations. Faire une recherche sur le web avec comme mot clé : Xiaomi token ou sur le forum [ici](https://community.jeedom.com/t/xiaomi-philips-et-wifilightv2/48064) .

Aucune aide ne sera donnée pour récupérer le jeton.

# Meross

Les périphériques compatibles sont :
-   prises simple : MSS110 MSS210
-   prises simple + consommation : MSS310 (la consommation ne remonte que toutes les minutes)
-   prises doubles MSS120 MSS620
-   prises quadruples MSS420
-   prises quintuples MSS425
-   lampes couleur : MSL120 BR30
-   lampes MSL420 MSL430 MSL450
-   lampes variateur : MSL100
-   strip led : MSL320 MSL320 pro
-   hub : MSH300
-   têtes thermostatiques : MTS100 MTS150
-   volets roulants MRS100 (retour d'état et positionnement non fonctionnels)
-   garage MSG100
-   commutateur MSS710


D'autres périphériques peuvent être rendus compatibles : contacter le développeur.

Il faut créer un périphérique dans le plugin pour chaque prise commandée et lui affecter un canal de 1 à n correspondant aux n prises. Le canal 0 est utilisé pour actionner toutes les prises en même temps.
Attention : certaines prises anciennes ont un comportement différent, utiliser la version V1 dans le sous type.


## type "Meross" pour firmware <2.2.2
Ne pas créer de nouveaux périphériques avec cette option, utiliser de préférence Meross V2, ce type est présent pour assurer la compatibilité avec les périphériques configurés avant l'arrivée de la V2. Aucune aide ne sera donnée pour trouver les paramètres nécessaires à ce type.

## type "Meross V2" pour tout firmware y compris 2.2.2
Afin d'obtenir une clé, il faut renseigner les login et mot de passe du compte Meross, sauvegarder et cliquer sur getKey dans l'nglet des commandes. Elle est récupérée des serveurs Meross et sauvegardée dans le champ Clé. Vous pouvez recopier cette clé dans tous vos périphériques Meross et effacer les login et mot de passe, mais alors il ne faut plus cliquer sur getKey.

Attention : des utilisations répétées du getgey peuvent produire un blocage d'accès aux serveurs Meross qui peut durer plusieurs heures. Faire une copie de la Clé sur tous vos périphériques Meross, elle dépend du compte utilisateur et pas du périphérique.

## Hub Meross 
Pour les équipements reliés au hub Meross MSH300 et après avoir indiqué son adresse ip et l'avoir sauvegardé, faire un appui sur getKey qui récupère la clé et tous les périphériques reliés au Hub. Lors de l'ajout d'un nouveau périphérique au hub, faire simplement getKey pour le créer dans le plugin.


## Scrutation précise d'un évènement.

Créer un scénario déclenché une seule fois au démarrage de Jeedom : mettre une boucle sur 1 000 000. Mettre à l'intérieur une autre boucle sur 1 000 000 ces 2 boucles imbriquées munies d'une pause vont empêcher la sortie du scénario pendant des centaines d'années. Dans la boucle interne mettre une pause de 10s et un appel à stateGet du périphérique pour mettre à jour les informations du périphérique. La pause peut être diminuée jusque 1s selon la puissance et la complexité de l'installation.

- Permet de récupérer l'information d'ouverture du module garage
- Permet un calcul plus précis de la consommation : récupérer alors la puissance, la diviser par 360 (pour une période de scrutation de 10s) et l’ajouter à une variable qui s’appellera consommation. Le 360 permet d'obtenir la consommation en kWh.

# Sonoff en mode DIY

## Compatibilité

Les périphériques compatibles sont : 
-  Sonoff D1 smart Dimmer
-  Sonoff BASICR3 et RFR3
-  Sonoff MINI

## Configuration

Pour les firmware à partir de 3.3.0 et en dessous de 3.5.0 c.-à-d. le mode DIY 1.0, Sonoff donne tous les éléments [ici]( https://github.com/itead/Sonoff_Devices_DIY_Tools/tree/master/tool) pour configurer les modules en mode DIY.

Un téléphone portable et un PC sous windows avec carte Wifi sont nécessaires.
Le logiciel à faire tourner pour trouver le Sonoff donne dans la colonne de gauche l'identifiant nécessaire à la configuration du périphérique.

Le périphérique Sonoff doit être en firmware 3.3.0 ou plus, l'appli Windows ci-dessus permet de mettre à jour le firmware.

Pour les firmwares à partir de 3.5.0, la procédure est plus simple et est détaillée [ici sur le forum](https://community.jeedom.com/t/sonoff-diy-et-wifilightv2-en-firmware-3-5-0/48060) .

# SonOff Ewelink et Cloud

Cette procédure automatise la création de la plupart des périphériques Ewelink et Sonoff. Cependant, l'accès aux périphériques reste en local. Le périphérique doit être en firmware 3.0.1 ou plus, l'appli Ewelink permet de mettre à jour le firmware.

## Configuration du plugin

Dans la configuration du plugin, renseigner le login (adresse mail uniquement) et le mot de passe de connexion à l'appli Ewelink et sauvegarder. Ensuite, sélectionner : Ewelink Passer en inclusion. Les périphériques sont créés automatiquement. 

Si l'adresse IP locale n'est pas trouvée par le plugin, faire le rapprochement entre l'adresse mac et l'adresse IP données dans les paramètres du périphérique de l'application Tuya et votre routeur et modifier l'adresse IP. La procédure pour trouver l'adresse IP utilise une commande du système Linux, si elle ne peut être chargée ou si le système n'est pas compatible, l'adresse IP ne pourra pas être trouvée automatiquement.

Cette partie du plugin nécessite le lancement des dépendances.

Pour la plupart des périphériques sonoff, le sous-type est trouvé, dans les autres cas le sonoff basic est choisi par le plugin, vous pouvez changer le sous-type sans perdre l'ApiKey et le deviceID.

Si un périphérique de même deviceID existe déjà, l'inclusion ne se fera pas.

### Remarques :
- certains périphériques ne sont pas créés (le cloud Ewelink ne fournit pas les données)
- les périphériques purement cloud seront intégrés mais le plugin ne pourra pas y accéder
- si l'adresse IP n'a pas été trouvée parce que le périphérique n'est pas connecté, lui donner l'adresse : 0.0.0.0 , le connecter et relancer la procédure d'inclusion.


## ApiKey DeviceID

Pour récupérer manuellement ces 2 informations, vous pouvez aller [ici]( https://blog.ipsumdomus.com/sonoff-switch-complete-hack-without-firmware-upgrade-1b2d6632c01 ) ou [sur le forum Jeedom](https://community.jeedom.com/t/plugin-wifilightv2-sonoff-ewelink-lan/2632 )  ou faire une recherche sur le web et le forum Jeedom avec comme mots clé : Ewelink ou Sonoff Apikey. Il ne faut mettre ni espace ni guillemets.

## Connexion

Quand un périphérique se connecte au wifi, le plugin sera immédiatement prévenu. Par contre, lorsqu'un périphérique est déconnecté, le plugin ne pourra le savoir que si une commande lui est envoyée par le plugin.

## Compatibilité

De nombreuses marques sont compatibles dont les Sonoff. Les produits testés sont les suivants :
-  Interrupteurs, prises murales, switch : simples de toutes marques
-  Interrupteurs, prises murales, switch : multiples de toutes marques
-  Interrupteurs, prises murales, switch : simples avec variateur de toutes marques
-  Sonoff D1 smart Dimmer
-  Sonoff TH10/1H16 capteur de température. Nouvelle config pour firmware >=3.4 avec ON/OFF OK
-  Sonoff basic R2, RF, POW, Mini
-  Sonoff Dual R2
-  Sonoff Dual R3 (la récupération de la consommation et la configuration du moteur sont à tester, la configuration moteur n'est pas complètement implantée)
-  Sonoff 4CH/4CH PRO
-  Sonoff Touch
-  Sonoff S20/S26
-  Sonoff T1/TX
-  Sonoff SLAMPHER
-  Sonoff T4EUC1
-  Ifan 2/3/4 à tester 
-  Sonoff RF bridge 433 pour les capteurs uniquement (porte, détecteur de présence, télécommande)

Le sonoff DW2 n'est pas compatible car purement cloud et ne se met pas en Acces Point permettant de trouver apiKey et DeviceID. Il est probable qu'il en soit de même pour tous les capteurs de porte compatibles ewelink.

Le Hub Zigbee n'est pas compatible (et purement cloud).

Aucune ampoule ou strip led n'est compatible.

Néanmoins, la compatibilité de ces périphériques n'est pas garantie car le protocole peut être modifié par les constructeurs. Ne pas modifier le firmware du périphérique sans avoir vérifié qu'il est compatible avec le plugin.

Pour les périphériques multicanaux (comme le Sonoff 4CH) il faut créer autant d'équipements wifilightV2 que de canal, une copie du premier créé facile la tâche, ensuite il faut changer le n° de canal.

Pour les périphériques non présents dans cette liste (Sonoff Ifan par exemple) ou si la configuration ne fonctionne pas et après avoir intégré le périphérique dans Jeedom (avec la configuration Sonoff Basic par exemple) repérer dans les logs :

	Receive after decode :{...............}
	
et donner dans le [forum](https://community.jeedom.com/t/plugin-wifilightv2-sonoff-ewelink-lan/2632) le contenu des accolades afin de permettre l'intégration du module dans le plugin.

# Tuya Smartlife et Cloud Tuya

Cette procédure automatise la création de la plupart des périphériques Tuya et Tuya/Zigbee. Cependant, l'accès aux périphériques reste en local.

## Configuration de la plateforme Tuya

Suivre d'abord ce [tuto](https://linkdhome.com/articles/local-tuya-device-control-in-homekit) et aller dans l'onglet "Overview" pour récupérer : Access ID et Access Secret. Dans la configuration du plugin, renseigner ces 2 paramètres dans la partie Tuya et sauvegarder, ensuite sélectionner : Tuya Passer en inclusion. Les périphériques sont créés automatiquement. 

Si l'adresse IP locale n'est pas trouvée par le plugin, faire le rapprochement entre l'adresse mac et l'adresse IP données dans les paramètres du périphérique de l'application Tuya et votre routeur et modifier l'adresse IP. La procédure pour trouver l'adresse IP utilise une commande du système Linux, si elle ne peut être chargée ou si le système n'est pas compatible, l'adresse IP ne pourra pas être trouvée automatiquement.

Cette partie du plugin nécessite le lancement des dépendances.

Si un périphérique de même devId existe déjà, l'inclusion ne se fera pas.

### Remarques :
- certains périphériques ne sont pas créés (le cloud Tuya ne fournit pas les données)
- les périphériques purement cloud seront intégrés mais le plugin ne pourra pas y accéder
- les couleurs suivant les 3 formats connus sont créées ainsi que les commandes saturation et intensité liées
- les périphériques avec des informations codées (partie actionneur des alarmes en général) ne sont pas gérés
- les périphériques ayant des informations non standard (en général peut être résolu avec un bloc code dans un scénario) ne sont pas gérés
- le plugin ne décode pas les commandes complexes et met alors dans paramètres le Json provenant du cloud Tuya
- la suppression d'une commande créée par le plugin via le cloud Tuya ne peut plus être recréée
- si l'adresse IP n'a pas été trouvée parce que le périphérique n'est pas connecté, lui donner l'adresse : 0.0.0.0 , le connecter et relancer la procédure d'inclusion.

### Astuces :
- si la procédure automatique dysfonctionne, passer en [mode apprentissage du périphérique](./tuya#tocAnchor-1-12-7) et agir uniquement sur les boutons de l'appli Tuya Smartlife en correspondance. Si d'autres boutons sont utilisés, le plugin créera des doublons des commandes créées via le cloud Tuya.
- de manière générale, les commandes peuvent être créées manuellement ou en mode apprentissage
- le min et le max d'une valeur numérique sont remontés depuis le cloud. Selon les besoins, modifier les paramètres #slider# et #value# ainsi que le min et max Jeedom.

### Participation à l'amélioration de cette partie :
Vous pouvez contribuer à l'amélioration de la création automatique en donnant le maximum de renseignements : le Json du cloud Tuya, les modifications apportées, les logs ou toute remarque pertinente. 

Pour obtenir le Json du cloud Tuya :
- dans Tuya IOT Platform : Cloud > Development > choisir le projet > Devices > Copier le device ID du périphérique
- Cloud > Api Explorer > (dans la nouvelle fenêtre) Smart Home Management System > Device Control > Get Device Specification Attribute (le 2ème de la liste sans s à Attribute)
- coller le device ID > Submit Request > Copy (lien fenêtre droite)

[Voir la documentation spécifique](./tuya#tocAnchor-1-1)

## Création manuelle ou semi manuelle des périphériques Tuya et Tuya/Zigbee

Cette procédure nécessite de recopier manuellement la localkey depuis le cloud Tuya. 

 [Voir la documentation spécifique pour les passerelles Tuya/Zigbee](./tuya#tocAnchor-1-1)
 
 [Voir la documentation spécifique pour les produits Tuya Wifi](./tuya#tocAnchor-1-10)


Attention :

Les produits Lidl Tuya/Zigbee ne doivent jamais avoir été appairés avec l'application Lidl. Il faut les appairer uniquement avec l'application Tuya Smartlife, sinon ils ne pourront plus être utilisés par le plugin.

# Nanoleaf


## Clé

Appuyer pendant 5-7 s sur le bouton power du Nanoleaf et appuyer sur la commande getKey du plugin. Vérifier que l'Apikey a été placée dans le champ "jeton" de la configuration du plugin.


## Effets custom

Créer un effet avec l'appli du NanoLeaf et lui donner un nom. Créer une commande action/défaut dans la liste des commandes du périphérique dans le plugin. Mettre le nom dans paramètres. Donner ensuite un identifiant unique et un nom, ils peuvent être identiques au nom de la commande.

# Govee

Les périphériques wifi compatibles sont :
-   ampoules : 
    H6002 H6003 H6008 H6049 H6050 H6051 H6052 H6054 H6059 H605B H6061 H6062 H6071 H6072 H6073 H6075 H6076 H6083 H6085 H6086 H6087 H6089 H6104 H6109 H610A H611A H611B H611C H611Z H6110 H614A H614B H614C H614D H614E H6117 H6121 H6135 H6137 H6141 H6142 H6143 H6144 H6148 H615A H615B H615C H615D H6154 H6159 H6160 H6163 H6172 H6182 H6188 H618A H618C H618E H6195 H6198 H6199 H619A H619B H619C H619D H619E H619Z H61A0 H7005 H7021 H7022 H7028 H7050 H7060 MSS210HK MSS210 MSS425EHK MSS425FHK MSS620
-   prises :
	H5001 H5080 H5081 H7014

La prise double n'est pas supportée mais pourrait l'être si un utilisateur en a une et veut participer à l'amélioration du plugin.


## Installation
L'installation, la création et la configuration des périphériques est entièrement automatique :
- récupérer l'API key à partir de l'application fournie par Govee
- dans la configuration du plugin, mettre cette API key dans le champ Govee et sauvegarder.
- cliquer sur Govee passer en inclusion. Les périphériques sont créés automatiquement.

## Remarques
Il faut faire attention aux points suivants :
- lorsqu'un périphérique avec la même adresse MAC est déjà présent dans le plugin il ne sera ni recréé ni modifié
- si un périphérique est supprimé sur le compte Govee il ne sera pas supprimé du plugin, il faudra le faire manuellement
- si un modèle de périphérique n'est pas connu, le type Bulb sera utilisé
- si la connexion internet ou les serveurs Govee ne sont pas fonctionnels, le plugin ne pourra pas accéder au périphérique
- le plugin ne peut que changer la couleur, l'intensité, la température de couleur et faire ON/OFF sur le périphérique.
- pour certains modèles, la variation d'intensité ne fonctionne pas, de même que la température de couleur ou la couleur.

# A l'aide ?

Aller sur le forum de Jeedom [ici](https://community.jeedom.com/t/plugin-wifilightv2-discussion-generale/2439)
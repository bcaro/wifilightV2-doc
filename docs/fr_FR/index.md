# Changelog

[voir ici](https://bcaro.github.io/wifilightV2-doc/fr_FR/changelog)

# Installation

Le plugin nécessite d'installer des dépendances. Si les dépendances ne sont pas installées, la recherche des périphériques Tapo, Ewelink et Kasa sera moins performante.

Luna : souci lors du chargement de la page du plugin, il suffit de la recharger avec le navigateur

# Présentation

Attention :
Le fonctionnement permanent du plugin ne peut être garanti : incompatibilité ou compatibilité partielle du produit, protocole mal géré, connexion de mauvaise qualité par exemples. Ne pas utiliser le plugin pour commander des appareils sensibles pouvant générer des désordres de tout ordre. Le plugin est fourni pour des besoins de tests et non pour une installation nécessitant un fonctionnement optimal en toute circonstance.

Ce plugin permet de gérer de nombreux bandeaux de leds, ampoules leds, prises électriques, thermostats, capteur de température, capteur de porte, etc. pilotés en wifi directement ou via une box wifi vendue avec le produit. Le principe du plugin est de ne jamais utiliser le cloud et donc une connexion internet entre le plugin et le périphérique via un serveur lointain, toutes les actions sont donc locales au réseau domestique.

Une exception : les produits Govee en mode cloud.

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
- 	Sonoff en mode DIY avec retour d'état !!
-   Nanoleaf Aurora avec retour d'état !
-	Produits myStrom avec retour d'état !!
-   Produits Govee LAN avec retour d'état !


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
-   Contrôleurs de pixel strip leds compatibles Magic home avec retour d'état !
-	Périphériques contrôlés par l'appli Ewelink dont les Sonoff en mode LAN avec retour d'état !!
-	Passerelles wifi (dont Lidl) utilisant le protocole Tuya pour les périphériques Zigbee !!
-   Périphériques Meross !!
-	Produits Wiz !!
-   Tapo !


Pour ces derniers contrôleurs ou périphériques wifi, le protocole d'échange ne provient pas directement du constructeur qui peut donc le modifier à tout moment. Plusieurs versions existent sur le marché qui ne sont pas toutes compatibles avec le plugin. Certains produits particuliers peuvent ne pas être compatibles.

Attention :
- ! : intégration facile pour une personne qui lit la documentation avant d'agir
- !! : en plus de !, nécessite de suivre une procédure particulière, adapté à une personne qui comprend qu'une procédure est faite pour être suivie scrupuleusement
- !!! : en plus de !! nécessite des connaissances de base en informatique et être habitué à effectuer des recherches sur internet dans un but précis


Il est conseillé de se renseigner sur le forum pour connaitre la compatibilité d'un produit peu diffusé.

Ne jamais modifier le firmware des produits, ce qui peut les rendre incompatibles avec le plugin.

Aller sur le forum de Jeedom [ici](https://community.jeedom.com/t/plugin-wifilightv2-discussion-generale/2439)


## Limitations

Mi.Light/EasyBulb/LimitlessLED :
-   Toutes les fonctionnalités sont prises en compte par le plugin (avec les ibox1 et 2 et avec le pont DIY Milight-hub)
-   Le pont MiBoxer n'est pas compatible
-	Les contrôleurs de Led Milight(du type YL etc.) sans pont.

LW12/Lagute :
-   La programmation des modes custom n'est pas possible, il faut utiliser l'application fournie avec le contrôleur (Magic Home). Cependant, les modes customs peuvent être déclenchés avec le plugin.
-   Il existe plusieurs versions de LW12 qui peuvent ne pas être compatibles avec le plugin.

Magic UFO, MagicHome et Arilux AL-C01/02/03/04/06/10 :
-   La programmation des modes custom, le mode radio et les timers ne sont pas gérés. Il faut utiliser l'application fournie avec le contrôleur (Magic Home). Cependant, les modes customs peuvent être déclenchés avec le plugin.
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

Govee cloud :
- la connexion avec les produits se fait via le cloud et nécessite internet.
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

- Tuya Smartlife
- Ewelink
- Govee
- Govee LAN
- Tapo
- Kasa (TP-Link)

Aide : 
-   Utiliser l'icône sous forme de point d'interrogation pour obtenir une aide sur chaque élément de configuration.

Paramétrage :
-   Pour paramétrer un équipement, choisir le menu Plugins / Objets communicants / wifilightV2
-   Puis cliquer sur le bouton en haut à gauche Ajouter un module Wifi 
-   Saisir le nom du module wifi
-   Saisir l'objet parent
-   Choisir la catégorie Lumière (par défaut)
-   Activer et rendre visible (par défaut)
-   Saisir l'adresse IP du module de la prise ou de l'ampoule Wifi (voir la FAQ pour plus d'explications)
-   Pour la box Milight-hub, un identifiant et un port doivent être configurés
-   Vous pouvez charger des images dans le dossier /data/myImages du plugin. Ces images peuvent remplacer les images associées aux périphériques dans la page d'affichage de tous les périphériques wifilightV2. Utile pour les périphériques personnalisés qui ne sont pas associés à une image. Ce dossier est aussi utilisé pour le cache des images en provenance du cloud Tuya. Si vous modifiez une image du cloud Tuya, vous pouvez la récupérer en vidant le champ de l'image alternative.
-   Pour certains périphériques il est demandé de saisir le canal utilisé, créer un équipement wifilightV2 par canal des multiprises ou des interrupteurs
-   Pour certains périphériques il est demandé de saisir un jeton ou (et) un identifiant, consulter l'aide sur la page de configuration du périphérique
-   Pour les périphériques Tuya, il est possible de forcer l'interrogation de l'état toutes les 30 secondes, utile pour les prises avec consommation.
-   Pour certains contrôleurs il faut indiquer le nombre de leds des pixel strip leds
-   Pour certains contrôleurs il faut indiquer l'ordre des couleurs si les couleurs par défaut ne correspondent pas
-   Saisir la marque ou le type de périphérique
-   Saisir le sous-type exact du contrôleur, de l'ampoule, de la prise ou du strip led, ceci est indispensable pour créer les commandes afin de piloter le périphérique
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
- Sonoff en mode DIY (nécessite un firmware récent, sinon interrogation toutes les 30 secondes)


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
 - Govee LAN
 - Tapo

Le plugin interroge régulièrement le périphérique pour connaitre son état. Le délai pour que Jeedom connaisse l'état peut dépasser 1 minute.

Pour les autres périphériques il n'y a pas de retour d'état.

La commande stateGet permet, pour les périphériques qui renvoient leur état, de forcer la mise à jour de l'état en interrogeant le périphérique.


## Mise à jour par scénario et scrutation rapide d'un évènement

Les commandes xxxxGet et Etat peuvent être utilisées dans un scénario Jeedom. Il est possible de créer un scénario déclenché une seule fois au démarrage de Jeedom : mettre une boucle sur 1 000 000. Mettre à l'intérieur une autre boucle sur 1 000 000. Ces 2 boucles imbriquées vont empêcher la sortie du scénario pendant des centaines d'années. Dans la boucle interne, mettre une pause de 10s et un appel au stateGet du périphérique pour mettre à jour les informations du périphérique. La pause peut être diminuée jusque 1s selon la puissance et la complexité de l'installation.

## Information de connexion

La commande ConnectedGet permet de récupérer l'état de la connexion de chaque périphérique. Elle est mise à jour toutes les 30 secondes.
-  -1 : périphérique avec retour d'état OK
-  -2 : impossible de préparer la connexion au périphérique
-  -3 : périphérique non connecté
-  -4 : pas de réponse du périphérique
-  -5 : mauvaise réponse du périphérique
-  -6 : périphérique sans retour d'état

Sur la page des périphériques, un émoticône indique si la connexion est OK ou KO. L'émoticône indifférent est utilisé dans les cas où le plugin ne peut connaitre l'état de la connexion, soit les périphériques qui ne renvoient pas leur état. Noter que pour les périphériques avec passerelle (Tuya Zigbee, Meross), l'état de la connexion est celui de la passerelle et est appliqué à tous les périphériques connectés à la passerelle.

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

Certaines lampes possèdent des modes disco et custom. Une liste à choix est associée à chaque option de ces modes. Si les commandes disco ou custom sont supprimées, la liste à choix créée automatiquement ne sera pas modifiée. Pour les commandes custom, vous pouvez ajouter de nouvelles commandes mais il faudra modifier manuellement cette nouvelle commande dans la liste. Il faut avoir créé le périphérique en mode étendu + couleurs + disco. Si les modes Disco et Custom individuels sont supprimés, la liste déroulante ne pourra plus avoir accès à ce mode. Pour ne pas être gêné dans l'interface, il faut supprimer l'affichage des commandes disco et custom.

Par exemple, la commande action/liste pour les customs a comme nom interne : CMD_LIST_CUSTOM. Son paramètre correspond à la construction de cette liste :

    Scene01|Extinction;Scene02|Allumage

La liste affichera Extinction et Allumage et les commandes qui seront exécutées seront celles de nom interne Scene01 ou Scene02. Si vous ajoutez une nouvelle commande custom, par exemple Scene03 dont le nom est Flash, il faudra modifier le paramètre de cette façon : 

    Scene01|Extinction;Scene02|Allumage;Scene03|Flash

Si par la suite, la commande Scene01 est supprimée, il faudra manuellement modifier le paramètre de CMD_LIST_CUSTOM : 

    Scene02|Allumage;Scene03|Flash
   


# Mi.Light

Il faut créer un périphérique par canal de chaque prise ou interrupteur dans le plugin.

## Ibox 1 / 2 et Mi.Light Box

### Arrêt de la vente

Mi.Light ne diffuse plus les ibox1 et 2 qui les a remplacées par la Miboxer qui est purement cloud et n'est pas compatible avec le plugin.

### Configuration

Depuis la version 1.0.58 des iBox 1 et 2, il peut être nécessaire de modifier leur configuration pour qu'elles puissent dialoguer avec Jeedom. 

Se connecter en http (avec un navigateur Web) à l'adresse IP de votre iBox. Les identifiants par défaut sont admin/admin. Aller dans l'onglet "Other Setting" et dans "Network Parameters setting/Protocol" choisir UDP et sauvegarder.

Il faut laisser le champ Port vide (ni même un espace).


## MiLight-Hub

### Un hub alternatif

Plusieurs projets ont abouti à des hubs compatibles avec les ampoules et télécommandes Mi.Light afin de contourner les limitations des hubs du constructeur et qui deviennent encore plus intéressants aujourd'hui avec la disparition des iBox1 et 2. Le plugin est compatible avec le projet de [Sidoh](https://github.com/sidoh/esp8266_milight_hub) et propose 2 modes pour piloter les ampoules. Le premier mode est celui historique des iBox1 et 2, ce qui permet d'utiliser vos périphériques comme habituellement, il y aura 2 paramètres de configuration à ajouter. Le 2ème mode est complètement nouveau et a comme avantages une très grande réactivité et un retour d'état partiel toutes les 30 secondes.

### Montage du Milight-hub

Le hub est donc DIY, il faut donc le monter et le programmer avec les informations fournies par [Sidoh](https://github.com/sidoh/esp8266_milight_hub). Un tuto est disponible [sur le forum](https://community.jeedom.com/t/tuto-realiser-un-hub-milight-en-remplacement-des-ibox1-et-ibox2/47836?u=bernardfr.caron).

### Mode historique Mi.Light

Dans ce mode, il suffit de renseigner le paramètre Port avec le port du mode UDP du Milight-hub. Voir [Sidoh](https://github.com/sidoh/esp8266_milight_hub)  ou [sur le forum](https://community.jeedom.com/t/tuto-realiser-un-hub-milight-en-remplacement-des-ibox1-et-ibox2/47836?u=bernardfr.caron) pour plus de détails.

### Mode ESP

Dans ce mode, le choix des périphériques se fait par le type de télécommande et non par le type de lampe comme dans le mode historique. Il faut, après avoir renseigné les paramètres habituels, renseigner l'identifiant du groupe de télécommandes, voir [Sidoh](https://github.com/sidoh/esp8266_milight_hub) ou [sur le forum](https://community.jeedom.com/t/tuto-realiser-un-hub-milight-en-remplacement-des-ibox1-et-ibox2/47836?u=bernardfr.caron) pour plus de détails. Ce mode propose un retour d'état partiel mis à jour toutes les 30 secondes.

Pour appairer une lampe avec le Milight-Hub, mettre la lampe sous tension et cliquer sur Sync ON. Utiliser Sync OFF pour désappairer. Pour appairer une télécommande, sélectionner le ON du canal à synchroniser dès la mise sous tension et cliquer sur Sync ON.

Pour connaitre les caractéristiques du hub, cliquer sur getKey, le résultat est obtenu dans getKetget en cliquant sur Tester.

# Xiaomi Yeelight

L'ampoule YLDP13YL se trouve dans le type Philips Xiaomi

## Configuration
Il est indispensable d'activer le contrôle par réseau local via l'application Xiaomi Yeelight.

## Choix de la version

Le plugin permet le choix entre 2 versions :

- V1 : la connexion entre le plugin et le périphérique n'est pas permanente, le temps de réaction est un peu plus important et le retour d'état n'est pas immédiat.
- V2 : la connexion est permanente donc le plugin est plus réactif et le retour d'état est immédiat. Cependant, cela entraine une plus grande sensibilité aux mauvaises connexions wifi, provoquant des déconnexions avec impossibilité pendant quelques minutes d'accéder au périphérique.

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
En V2, lors de l'activation du plugin et dès que le démon est lancé ainsi que toutes les 30 secondes, le plugin recherche les ampoules alimentées et connectées à Jeedom.

Dès que l'ampoule est trouvée, l'état de l'ampoule est remonté au plugin immédiatement.

Noter que le plugin peut mettre jusqu'à 1 minute pour trouver une ampoule et 4 minutes pour trouver qu'un périphérique est déconnecté.

En V1, le retour d'état peut prendre jusqu'à 30 secondes.

# Tapo & Kasa TP-Link 

Les périphériques compatibles sont :

Tapo :
- ampoules L510 L530 L900 L920 L930
- prises P100 P103 P105 P110

Kasa :
-   ampoules KL50 KL60 KL110 KL120 KL130 LB100 LB110 LB120 LB130
-   prises HS100 HS110 KP105 KP110

Ne pas utiliser ou supprimer la double authentification avec les applications Tapo/Kasa. Les effets ne fonctionnent pas, même si les commandes sont créées par le plugin.

Pour les périphériques avec le firmware déployé vers novembre 2023, utiliser Tapo V2. L'inclusion trouve normalement le bon firmware. Il peut être nécessaire au préalable de se connecter à l'appli mobile pour que l'accès au cloud fonctionne.


## Configuration du cloud TP-Link


Dans la configuration du plugin, renseigner l'adresse mail et le mot de passe de connexion à l'appli Kasa ou Tapo et sauvegarder. Ensuite, sélectionner : Tapo-Kasa Passer en inclusion. Les périphériques sont créés automatiquement. Les identifiants sont les mêmes pour Tapo et Kasa.

Si l'adresse IP locale n'est pas trouvée par le plugin, faire le rapprochement entre l'adresse mac et l'adresse IP données dans les paramètres du périphérique de l'application mobile et votre routeur et modifier l'adresse IP. La procédure pour trouver l'adresse IP utilise une commande du système Linux, si elle ne peut être chargée ou si le système n'est pas compatible, l'adresse IP ne pourra pas être trouvée automatiquement.

Pour les périphériques de la liste ci-dessus, le sous-type est trouvé, dans les autres cas le Tapo P100 est choisi par le plugin, vous pouvez changer le sous-type sans perdre le deviceId.

Si l'adresse IP n'a pas été trouvée parce que le périphérique n'est pas connecté, lui donner l'adresse : 0.0.0.0 , le connecter et relancer la procédure d'inclusion.

Si un périphérique de même deviceId existe déjà, l'inclusion ne se fera pas.

Par la suite, le contrôle des périphériques est local.

Note : 
- Tous les périphériques TP-link présents dans le cloud sont créés, en particulier les routeurs ou bornes wifi TP-link. Comme le plugin ne les reconnait pas, une prise TAPO P100 est créée, il suffit de supprimer les périphériques inutiles.


# Xiaomi Philips

Il est indispensable de récupérer un jeton (token) permettant au plugin de dialoguer avec les périphériques Xiaomi Philips.

La procédure est complexe et nécessite plusieurs manipulations. Effectuer une recherche sur le web avec comme mot clé : Xiaomi token ou sur le forum [ici](https://community.jeedom.com/t/xiaomi-philips-et-wifilightv2/48064).

Aucune aide ne sera donnée pour récupérer le jeton.

# Meross

Les périphériques compatibles sont :
- prises simple : MSS110 MSS210
- prises simple + consommation : MSS310 (la consommation ne remonte que toutes les 30 secondes)
- prises doubles MSS120 MSS620
- prises quadruples MSS420
- prises quintuples MSS425
- lampes couleur : MSL120 BR30
- lampes MSL420 MSL430 MSL450
- lampes variateur : MSL100
- strip led : MSL320 MSL320 pro
- volets roulants MRS100 (retour d'état et positionnement non fonctionnels)
- garage MSG100
- commutateur MSS710
- interrupteurs MSS510 MSS550
- diffuseurs MOD100 MOD150
- thermostat MTS200
- hub : MSH300
   - capteur de température MS100
   - têtes thermostatiques : MTS100 MTS150
   - détecteur fumée : GS559A en beta tester les informations de fumée et de chaleur
- purificateur MAP100 beta à tester
- humidificateur MSXH0 beta à tester  

D'autres périphériques peuvent être rendus compatibles : contacter le développeur.

Dans l'application Meross, il faut supprimer la double authentification.

Il faut créer un périphérique dans le plugin pour chaque prise commandée et lui affecter un canal de 1 à n correspondant aux n prises de la multiprise. Le canal 0 est utilisé pour actionner toutes les prises en même temps.
Attention : certaines prises anciennes ont un comportement différent, utiliser la version V1 dans le sous type.


## type "Meross" pour firmware <2.2.2
Ne pas créer de nouveaux périphériques avec cette option, utiliser de préférence Meross V2, ce type est présent pour assurer la compatibilité avec les périphériques configurés avant l'arrivée de la V2. Aucune aide ne sera donnée pour trouver les paramètres nécessaires à ce type.

## type "Meross V2" pour tout firmware y compris 2.2.2
Afin d'obtenir une clé, il faut renseigner les identifiant (login) et mot de passe (Meross n'accepte pas certains caractères spéciaux dans le mot de passe) du compte Meross dans la configuration du plugin. Cliquer ensuite sur getKey dans l'onglet des commandes de chaque périphérique. La clé est récupérée des serveurs Meross et sauvegardée dans le champ Clé. Vous pouvez recopier cette clé dans tous vos périphériques Meross et effacer les login et mot de passe, mais alors il ne faut plus cliquer sur getKey.

Attention : des utilisations répétées du getKey peuvent produire un blocage d'accès aux serveurs Meross qui peut durer plusieurs heures. Faire une copie de la Clé sur tous vos périphériques Meross, elle dépend du compte utilisateur et pas du périphérique.

## Hub Meross 
Pour les équipements reliés au hub Meross MSH300 et après avoir indiqué son adresse ip et l'avoir sauvegardé, faire un appui sur getKey qui récupère la clé et tous les périphériques reliés au Hub. Lors de l'ajout d'un nouveau périphérique au hub, faire simplement getKey pour le créer dans le plugin.


# Sonoff en mode DIY

## Compatibilité

Les périphériques compatibles sont : 
- Sonoff D1 smart Dimmer
- Sonoff BASICR3 et RFR3
- Sonoff MINI

## Configuration

Pour les firmware à partir de 3.3.0 et en dessous de 3.5.0 c.-à-d. le mode DIY 1.0, Sonoff donne tous les éléments [ici](https://github.com/itead/Sonoff_Devices_DIY_Tools/tree/master/tool) pour configurer les modules en mode DIY.

Un téléphone portable et un PC sous Windows avec carte Wifi sont nécessaires.
Le logiciel à faire tourner pour trouver le Sonoff donne dans la colonne de gauche l'identifiant nécessaire à la configuration du périphérique.

Le périphérique Sonoff doit être en firmware 3.3.0 ou plus, l'appli Windows ci-dessus permet de mettre à jour le firmware.

Pour les firmwares à partir de 3.5.0, la procédure est plus simple et est détaillée [ici sur le forum](https://community.jeedom.com/t/sonoff-diy-et-wifilightv2-en-firmware-3-5-0/48060) .

# Sonoff Ewelink et Cloud

Cette procédure automatise la création de la plupart des périphériques Sonoff ou compatibles Ewelink. Cependant, l'accès aux périphériques reste en local. Le périphérique doit être en firmware 3.0.1 ou plus, l'appli Ewelink permet de mettre à jour le firmware.

## Configuration du plugin

Dans la configuration du plugin, renseigner le login (adresse électronique uniquement) et le mot de passe de connexion à l'appli Ewelink et sauvegarder. Ensuite, sélectionner : Ewelink Passer en inclusion. Les périphériques qui se trouvent dans l'application Ewelink sont créés automatiquement. Si le périphérique est supprimé de l'application Ewelink, il ne fonctionnera plus avec le plugin.

Pour la plupart des périphériques Sonoff ou compatibles Ewelink, le sous-type est trouvé. Dans les autres cas le sonoff basic est choisi par le plugin, vous pouvez changer le sous-type sans perdre l'ApiKey et le deviceID.

Pour les périphériques multicanaux comme les multiprises, mettre 1 pour le canal du périphérique trouvé, le dupliquer et lui donner comme n° de canal 2, etc. pour créer autant de périphériques wifilightV2 que de canaux.

Si un périphérique de même deviceID existe déjà, l'inclusion ne se fera pas. Vous pouvez modifier le deviceID pour forcer la création d'un doublon.


Remarques :

- si l'adresse IP n'a pas été trouvée parce que le périphérique n'est pas connecté ou parce que l'inclusion ne le permet pas, vérifier que son adresse IP est : 0.0.0.0 , utiliser l'application Ewelink ou faire ON/OFF sur le périphérique afin de modifier l'état du périphérique, l'adresse IP sera automatiquement ajoutée.
- certains périphériques ne sont pas créés (le cloud Ewelink ne fournit pas les données)
- les périphériques purement cloud seront intégrés mais le plugin ne pourra pas y accéder
- tous les périphériques Sonoff sont intégrés mais ne seront pas forcément gérés, comme les caméras  
- quand un périphérique se connecte au wifi, le plugin sera prévenu immédiatement. Cependant, lorsqu'un périphérique est déconnecté, le plugin ne pourra le savoir que si une commande lui est envoyée par le plugin.
- L'ApiKey et le DeviceID sont récupérés automatiquement par l'inclusion. Néanmoins, pour récupérer manuellement ces 2 informations, vous pouvez aller [ici]( https://blog.ipsumdomus.com/sonoff-switch-complete-hack-without-firmware-upgrade-1b2d6632c01 ) ou [sur le forum Jeedom](https://community.jeedom.com/t/plugin-wifilightv2-sonoff-ewelink-lan/2632 ) ou faire une recherche sur le web et le forum Jeedom avec comme mots clé : Ewelink ou Sonoff Apikey. Il ne faut mettre ni espace ni guillemets.


## Compatibilité

De nombreuses marques sont compatibles dont les Sonoff. Les produits testés sont les suivants :
- Interrupteurs, prises murales, switch : simples de toutes marques
- Interrupteurs, prises murales, switch : multiples de toutes marques
- Interrupteurs, prises murales, switch : simples avec variateur de toutes marques
- Sonoff D1 smart Dimmer
- Sonoff TH10/1H16 firmware >=3.4 
- Sonoff THR316D capteur de température et humidité + interrupteur
- Sonoff basic R2, RF, POW, Mini
- Sonoff Dual R2
- Sonoff Dual R3 :la récupération de la consommation ne remonte que si l'application Ewelink est active, la configuration moteur n'est pas complètement implantée. Pour mettre à jour la conso, il faut demander une action qui n'a pas d'incidence dans un scénario toutes les minutes.
- Sonoff 4CH/4CH PRO 
- Sonoff Touch
- Sonoff S20/S26
- Sonoff T1/TX
- Sonoff SLAMPHER
- Sonoff T4EUC1
- Sonoff Ifan 2/3/4 à tester 
- Sonoff POW R316/320 : pour mettre à jour la conso, le plugin agit sur la led wifi toutes les 30 secondes
- Sonoff RF bridge 433 pour les capteurs uniquement (porte, détecteur de présence, télécommande)
- Sonoff Micro USB

Note : Certains périphériques ne mettent à jour leur état vers Jeedom que si il y a une action dessus (4CH, TH10/16). Pour forcer la remonté de l'état, le plugin agit sur la led de connexion et la fait clignoter. Pour désactiver ce fonctionnement, cocher "Pas de de MAJ forcée de l'état".

Néanmoins, la compatibilité de ces périphériques n'est pas garantie car le protocole peut être modifié par les constructeurs. Ne pas modifier le firmware du périphérique sans avoir vérifié qu'il est compatible avec le plugin.

Périphériques non compatibles car purement cloud :

- Les produits wifi à piles
- Sonoff POW (first) fw 2.6.1
- Sonoff TH10/1H16 firmware <3.4 
- Sonoff L1 (color, brightness, effects) fw 2.7.0
- Sonoff B1 (color, brightness, color temp) fw 2.6.0
- Sonoff B02, B05-B, B05-BL
- Sonoff SC (five sensors) fw 2.7.0
- Sonoff DW2
- Sonoff SwitchMan R5
- Sonoff S-MATE
- Sonoff S40 fw 1.1
- King Art - King Q4 Cover (pause, position) fw 2.7.0
- KING-M4 (brightness) fw 2.7.0
- Eachen WiFi Door/Window Sensor
- Essential Oils Diffuser (fan and color light) fw 2.9.0
- Smart USB Mosquito Killer
- Smart Bulb RGB+CCT
Ainsi que les passerelles et produits uniquement Zigbee.


Pour les périphériques multicanaux (comme le Sonoff 4CH, les interrupteurs ou les multiprises) il faut créer autant d'équipements wifilightV2 que de canal, une copie du premier créé facile la tâche, ensuite il faut changer le n° de canal qui va de 1 à 4.

Pour les périphériques non présents dans cette liste ou si la configuration ne fonctionne pas ou si un périphérique n'a pas le sous-type correct et après avoir utilisé la procédure d'intégration du périphérique, donner le contenu des logs wifilightV2_inc dans le [forum](https://community.jeedom.com/t/plugin-wifilightv2-sonoff-ewelink-lan/2632) afin de permettre l'intégration du module dans le plugin.

# Tuya Smartlife et cloud Tuya

La création de la plupart des appareils Tuya et Tuya/Zigbee est automatique en récupérant dans le cloud Tuya leurs informations de configuration. Pour cela, les périphériques doivent fonctionner dans l'application Tuya Smartlife. Cependant, par la suite, l'accès aux appareils reste local.

Les appareils Tuya utilisent différents protocoles :

<3.3 : Cet ancien protocole n'est pas pris en charge par l'inclusion. Le plugin trouvera l'appareil dans le cloud Tuya, mais il ne trouvera pas le bon protocole. Vous devez le modifier manuellement en utilisant fw 1.0 et affecter manuellement son adresse IP et choisir une configuration dans la liste.

3.3/3.4/3.5 : Les appareils avec ces protocoles sont normalement trouvés automatiquement en inclusion Tuya, que ce soit pour un appareil wifi ou une passerelle Zigbee.

Si le plugin ne trouve pas le bon protocole, il est possible de le changer manuellement sans perdre les commandes créées par le cloud Tuya, il faut choisir le sous-type personnalisé pour un périphérique wifi ou Zigbee et passerelle pour une passerelle Tuya/Zigbee, avant de sauvegarder.

## Inclusion des périphériques Tuya depuis le cloud

Suivre d'abord ce [tuto](https://linkdhome.com/articles/local-tuya-device-control-in-homekit) et aller dans l'onglet "Overview" pour récupérer les deux paramètres : Access ID et Access Secret. 
- Tuya change souvent son interface, il faut adapter le tuto
- La durée du plan gratuit est limitée, il faut chercher et trouver pour le renouveler

Dans la configuration du plugin, renseigner ces 2 paramètres dans la partie Tuya et sauvegarder. Ensuite, sélectionner : Tuya Passer en inclusion. Les périphériques sont créés automatiquement. 

### Notes and limitations
- les périphériques Wifi et donc non Zigbee qui sont sur **pile** sont purement cloud (capteurs de fermeture, de porte, de température par exemple) seront intégrés mais le plugin ne pourra pas y accéder
- si l'adresse IP est à 0.0.0.0 c'est que Jeedom n'a pas accès au périphérique, c'est probablement la configuration réseau à reconsidérer. Noter que l'adresse IP 0.0.0.0 est aussi affectée aux périphériques de firmware  <3.3. et aux périphériques non compatibles. Afin de tester cette accessibilité, voir [ici](https://community.jeedom.com/t/soucis-plugin-wifilightv2/83734/7?u=bernardfr.caron), si le périphérique ne l'est pas, c'est qu'il n'est pas compatible ou qu'une configuration réseau empêche le dialogue entre lui et la box Jeedom. 
- le cloud Tuya peut ne pas fournir **toutes les commandes du périphérique**, voir [ici](https://community.jeedom.com/t/borne-de-recharge-feyree/109739/23) pour essayer de résoudre le problème
- les périphériques avec des informations codées (partie actionneur des alarmes en général) ne sont pas gérés
- les périphériques ayant des informations non standard (peut éventuellement être résolu avec un bloc code dans un scénario) ne sont pas gérés
- le plugin ne décode pas les commandes complexes et met alors dans paramètres l’information brute provenant du cloud Tuya
- les périphériques multicanaux (multiprises, interrupteurs multiples) inclus par le plugin via le cloud Tuya sont regroupés dans le même périphérique
- si un périphérique de même devId existe déjà, l'inclusion ne se fera pas.
- les couleurs suivant les 3 formats connus sont créées ainsi que les commandes saturation et intensité liées
- la suppression d'une commande créée par le plugin via le cloud Tuya ne peut plus être recréée
- le min et le max d'une valeur numérique sont remontés depuis le cloud. Selon les besoins, modifier les paramètres #slider# et #value# ainsi que le min et max Jeedom. Cette partie est à améliorer avec les retours des utilisateurs.


### Astuces
- si l'adresse IP n'a pas été trouvée parce que le périphérique n'est pas connecté, lui donner l'adresse : 0.0.0.0 , le connecter et relancer la procédure d'inclusion.
- si la localkey d'un périphérique a changé, modifier le devId ou le nodeId du périphérique (en mettant par exemple @ à la fin), refaire l'inclusion et recopier le devId ou le nodeId et la nouvelle localkey dans l'ancien périphérique. Enfin, supprimer le périphérique créé par inclusion.
- si la procédure automatique dysfonctionne ou si des commandes ne sont pas fournies par le cloud Tuya, passer en [mode apprentissage du périphérique](./tuya) et agir uniquement sur les boutons de l'appli Tuya Smartlife en correspondance. Si d'autres boutons sont utilisés, le plugin créera des doublons des commandes créées via le cloud Tuya. Mais attention, cette documentation est très technique et réservée à un public averti, ne l'utilisez pas en mode panique alors que vous n'avez pas les connaissances pour comprendre son contenu.
- de manière générale, les commandes peuvent être créées manuellement ou en mode apprentissage

### Scrutation précise d'un évènement
Lorsque l'option "interrogation de l'état" est cochée, le plugin interroge le périphérique toutes les 12 secondes. Ceci permet, par exemple, de récupérer la consommation d'un périphérique lorsque celui-ci ne l'envoie pas régulièrement. Il faut néanmoins faire attention, ceci peut vider la batterie des périphériques sur batterie. Pour certains périphériques qui mesurent la puissance consommée, l'ouverture de l'application mobile est nécessaire pour que les données soient transmises au plugin.

## Création manuelle ou semi manuelle des périphériques Tuya et Tuya/Zigbee

Cette procédure permet d'ajouter manuellement un périphérique et de créer manuellement les commandes manquantes. Elle est destinée aux utilisateurs avertis.

 [Voir la documentation spécifique Tuya et Tuya/Zigbee](./tuya)
 
## Pour obtenir de l'aide
Donner le maximum de renseignements : la configuration matérielle et logicielle Jeedom, l'éventuel message d'erreur de connexion du plugin au cloud Tuya, les informations du cloud Tuya, les logs ou toute remarque pertinente. 

### Donner les informations du cloud Tuya
Ceci est à faire lorsqu'un périphérique n'est pas créé ou incomplètement créé lors de l'inclusion, alors que le périphérique n'est pas dans ceux qui ne sont pas compatibles. Le plugin va chercher ces informations en mode inclusion Tuya.

Obtenir la liste des périphériques :
- dans Tuya developper : iot platform > Cloud > Development > Open project > devices 
- faire une copie d'écran des périphériques

Obtenir les informations d'un périphérique :
- dans Tuya developper : Developer Platform > Cloud > Development > Open project > Devices 
- copier le device ID du périphérique à déboguer
- Cloud > Api Explorer > (dans la nouvelle fenêtre) Sélectionner Smart Home basic Service (en haut à gauche) -> Smart Home Device Control -> Get Device Specification (dernier de la liste)
- coller le device ID > Submit Request > Copy (lien à droite de "Response"), les paramètres affichés sont ceux qui seront remontés dans le plugin lors de l’inclusion
- coller la copie dans le forum

### Obtenir les logs

- Configurer les logs de wifilightV2, comme ils sont bavards, les configurer en augmentant le nombre de lignes dans la configuration de débogage de Jeedom.
- Effacer les logs _tuya, attendre 2 minutes et récupérer les logs _tuya
- copier ces logs sur le forum


# Nanoleaf


## Clé

Appuyer pendant 5-7 s sur le bouton power du Nanoleaf et appuyer sur la commande getKey du plugin. Vérifier que l'Apikey a été placée dans le champ "jeton" de la configuration du plugin.


## Effets custom

Créer un effet avec l'appli du NanoLeaf et lui donner un nom. Créer une commande action/défaut dans la liste des commandes du périphérique dans le plugin. Mettre le nom dans paramètres. Donner ensuite un identifiant unique et un nom, ils peuvent être identiques au nom de la commande.

## Envoi d'une commande personnalisée

Créer une commande action/defaut, dans nom interne mettre un nom et dans paramètres, mettre le json de la commande personnalisée sauf les accolades externes mais avec la commande write, par exemple :

    "write" : {"command" : "request", "animName" : "Northern Lights"}
	
Voir la documentation Nanoleaf pour créer ces effets.
# Govee LAN

Les périphériques wifi compatibles sont indiqués dans l'appli Govee. Inclure d'abord le périphérique dans l'appli puis sélectionner "Govee LAN passer en inclusion" pour inclure les périphériques, ils seront accessibles en local sans passer par le cloud.


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

Aller sur le forum de Jeedom [ici](https://community.jeedom.com/t/plugin-wifilightv2-discussion-generale/2439) et apporter le maximum d'informations pour obtenir de l'aide :
- version du plugin
- configuration du plugin
- configuration du périphérique

Les logs du plugin ne sont pas compatibles avec syslog, mettre la configuration standard pour les logs. 
Pour avoir accès aux logs wifilightV2 en Debian inférieur à 12, il faut mettre le niveau de log pas défaut à Debug :
- aller dans Réglages/Système/Configuration onglet Logs puis Niveau de Logs
- niveau de log par défaut : mettre "Debug"
- nombre maximal de lignes dans un fichier de log : 1000
- pour wifilightV2 cocher "Défaut"
- il est conseillé de mettre tous les autres à "Aucun" ou "Erreur"
- relancer le demon du plugin
- dès que les tests sont terminés, revenir au niveau par défaut "Error" et limiter le nombre de lignes, sinon les logs grossissent énormément 

Ils sont répartis en 4 catégories :
- wifilightV2_cmd : pour les commandes envoyées vers les périphériques
- wifilightV2_inc : lors de l'inclusion des périphériques
- wifilight_Tuya : le daemon pour les périphériques Tuya et Yeelight. Il teste la présence de ces périphériques toutes les 30 secondes, maintient la connexion permanente et récupère l'état en temps réel.
- wifilightV2_dem : le 2ème daemon pour tous les autres périphériques. Il teste la présence de ces périphériques toutes les 30 secondes et interroge l'état toutes les 12s pour les périphériques qui ne renvoient pas automatiquement leur état.


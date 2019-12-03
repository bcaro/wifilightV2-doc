1.53 - 2019-12-03
-   Ewelink : ajout du Sonoff RF bridge 433 - uniquement les capteurs
-   Sonoff TH10/TH16 : ajout des informations du thermostat interne
-   Sonoff Pow R2 : ajout des informations électriques
-   Tuya : meilleur retour d'état des prises multiples
-   correction bogues 

1.52 - 2019-11-27
-   Tuya : lampes globe en stable
-   nettoyage du code 
-	correction bogues
-	déplacement de la doc

1.51 - 2019-11-23
-   Tuya : ajout du pont MiBoxer de Milight (module en Beta), seuls ON/OFF de la box complète fonctionne. Mis à disposition pour ceux qui arriveraient à récupérer l'ApiKey avec l'appli MiBoxer.
-   Tuya : ajout d'un périphérique custom permettant de configurer n'importe quel périphérique
-   Tuya : refonte des commandes customs : pour les commandes custom existantes -> nécessité de les reconfigurer avec le nouveau format
-   Tuya : nécessité de sauvegarder tous les équipements
-   eWeLink : utilisation d'une fake key pour la SelfApiKey
-   eWeLink : correction de l'info de connexion
-   Tuya : correction de l'info de connexion
-   correction de bogues mineurs
-   relance du demon après la modification d'une configuration

1.50 - 2019-10-28 
-   Tuya : ajout lampe RGBW type 2 (module en beta)
-   correction bogue Sonoff Dual
-	Ewelink : ajout des périphériques 3 et 4 canaux
-   Sonoff : compatible TH10/1H16 capteur de température, basic, RF, POW, Mini, Dual, 4CH/4CH PRO, Touch, S20/S26, T1/TX, SLAMPHER, T4EUC1

1.49 - 2019-10-23 
-   correction bogue Tuya curtain mod2
-   correction bogue Sonoff Dual

1.48 - 2019-10-18 
-   eWelink : ajout modules avec 2 canaux (dont Sonoff Dual) en Beta
-   correction bogue retour état Sonoff

1.47 - 2019-10-16 
-   ajout tuya volets mod2 (on/off/stop au lieu de 1/2/3 dans les commandes)
-   correction bogues

1.46 - 2019-10-12 
-   ajout ewelink capteur température/humidité dont Sonoff TH10/16
-	ajout ewelink mode inching (ON pendant un temps donné)
-   correction bogues

1.45 - 2019-10-2 
-   Compatible périphériques avec Appli Ewelink en mode LAN
-   Compatible SonOff en mode LAN

1.44 - 2019-09-27
-   Compatible Sonoff Basic R3 en mode DIY
-   Compatible V4 Jeedom
-   Compatible Buster
-	Suppression du widget couleur sans Off non compatible V4, le plugin n'offrira plus de widgets personnalisés.

1.43 - 2019-07-08
-   TP-link : prise en compte du nouveau protocole V2 pour les prises, nécessite un jeton.
-   Tuya : les capteurs d'ouverture et PIR ne seront pas compatibles avec le plugin. Ces capteurs passent obligatoirement par le cloud : à proscrire en utilisation alarme.
-   Correction bogue : calcul du courant des prises Tuya maintenant en ampères (modifier vos scénarios  car l'unité du courant est incorrecte)
-   Tuya et TP-Link, unités pour la consommation : A V W kWh. Sauvegarder l'équipement pour un affichage correct de l'unité dans la liste des commandes.

1.42 - 2019-06-02
-   Tuya : correction bogue retour d'état
-   Démon : plus de fuite mémoire

1.41 - 2019-06-19
-   Tuya : compatibilité bidirectionnelle avec le plugin en firmware 2.0(actionneur OK)
-   Tuya : ajout de l'interrupteur dimmer
-   Démon : réécrit pour mieux gérer les connexions/déconnexions tuya et Yeelight
-   Un réenregistrement de chaque périphérique sera peut-être nécessaire

1.40 - 2019-06-16
-   Tuya : ajout du retour d'état instantanné pour les équipements qui retournent leur état
-   Tuya : certains équipements sont passés en firmware 2.0 : ils sont compatibles avec le plugin uniquement en retour d'état
-   Tuya : l'application mobile doit être arrêtée pour que le plugin fonctionne
-	Tuya : Pour les utilisateurs de la version beta, les périphériques tuya V2 seront à reconfigurer (le firmware V1 est séparé du firmware V2)
-   Suppression du cron 1 min
-   Un bogue PhP fait qu'il y a des fuites de mémoire, dans ce cas configurer le heartbeat du plugin pour le relancer régulièrement

1.39 - 2019-05-05
-   Tuya : ajout thermostat

1.38 - 2019-04-05
-   Tuya : correction retour état
-   Desktop : correction bogue affichage retour état

1.37 - 2019-04-04
-   Tuya : ajout consommation sur toutes les prises tuya
-	Tuya : configuration de la récupération des paramètres d'énergie
-   Attention : la configuration pour récupérer les paramètres d'énergie a été modifiée. Les anciennes configurations restent compatibles.

1.36 - 2019-04-03
-   Tuya : ajout des interrupteurs muraux
-   Tuya : ajout d'un humidificateur
-	Tuya : ajout de la consommation sur toutes les prises
-   Attention : il faudra reconfigurer les prises Tuya : prendre la configuration prise Xplugs + USB et cocher la suppression du retour d'état pour les prises présentant des microcoupures.

1.35 - 2019-03-13
-   Tuya : ajout des interrupteurs pour volets roulants
-   Tuya : ajout de commandes customs pour tous les périphériques (permet de tester de nouveaux actionneurs)

1.34 - 2019-03-02
-   Ajout d'une configuration avec retour d'état pour toutes les prises. Attention des microcoupures peuvent survenir, prendre alors la configuration sans retour d'état.

1.33 - 2019-02-15
-   Paramétrage possible pour la récupération de la consommation sur les prises tuya : les prises conso de type 2 doivent être reconfigurées en type 1 avant installation du plugin.

1.32 - 2019-02-13
-   Corrections bogues TP-Link HS110.
-   Modification du protocole (UDP -> TCP) pour les équipements TP-Link. Normalement sans incidence.

1.31 - 2019-02-12
-   Ajout d'un 2ème type de plug avec conso compatible Smart Live.

1.30 - 2019-02-01
-   Suppression du retour d'état pour les plugs Tuya sans mesure de consommation : fonctionnalité inutile car seul Jeedom peut contrôler le plug et provoque des microcoupures.
-   Modification de la doc pour la nouvelle configuration des iBox Mi.Light

1.29 - 2019-1-27
-   Correction couleurs HSV ampoules Tuya
-   Ajout ampoules RGB Tuya

1.28 - 2019-1-16
-   Ajout plug TP_Link
-   Amélioration communication Tuya smart plug

1.27 - 2019-1-11
-   Tuya smart plug en stable
-   Amélioration communication Tuya smart plug

1.26 - 2019-1-1
-   Ajout des prises électriques compatibles Tuya/smart live/Jinvoo/eFamillyCloud apps
-   Corrections de bogues mineurs
-   Refonte de la documentation

1.25 - 2018-11-25
-   Ajout en beta des controlleur led adressable SP108 Led Shop (ON/OFF)
-   Ajout de la télécommande RGB Mi.Light 
-   Correction de bogues mineurs

1.24 - 2018-11-14
-   Correction bogue page affichage des équipements

1.23 - 2018-09-06
-   Ajout des contrôleurs de pixel strip leds compatibles Magic Home

1.22 - 2018-07-10
-   Ajout des ampoules compatibles Tuya/Jinvoo smart apps
-   Ajout de l'ampoule Mi.Light Floodlight
-   Ajout de l'ampoule Philips Zhiuri
-   Corrections bogues mineurs

1.21 - 2018-03-10
-   Ajout des contrôleurs de bandeaux led Sunix
-   Correction bogues Arilux RGBWW

1.20 - 2018-03-02
-   Ajout de la remontée immédiate de l'état des ampoules Xiaomi Yeelight
-   Amélioration de l'interface de configuration du plugin 
-   Corrections bogues

1.19 - 2018-02-15
-   Ajout arrêt temporisé Xiaomi Philips 
-   Amélioration retour d'état ON/OFF toutes lampes avec retour d'état
-   Corrections bogues

1.18 - 2018-02-13
-   Corrections Yeelight JIAOYUE
-   Ajout modes custom sur Yeelight couleurs

1.17 - 2018-02-11
-   Ajout Mi.Light : Track Light RGBW / WW
-   Ajout modes custom Yeelight JIAOYUE
-   Tri des listes

1.16 - 2018-01-25
-   Ajout Xiaomi Philips : lampe de bureau, ampoule et plafonnier
-   Ajout du plafonnier Yeelight JIAOYUE 650
-   Ajout pour toutes les lampes de boutons d'incrémentation et décrémentation de l'intensité
-   Mi.Light : mémorisation de l'intensité RGB et Blanc
-   Correction télécommande Mi.Light 8 boutons
-   Correction de bogues mineurs.

1.15 - 2017-11-29
-   Ajout MiLight : télécommande 8 canaux RGBW CT et led strip RGBW CT
-   Mise à jour de la doc (orthographe, aide Yeelight)

1.14 - 2017-09-28
-   Correction de bogues : Plafonnier Yeelight et LW12. Ajout Vitesse H801

1.13 - 2017-09-26
-   Correction de bogues : Plafonnier Yeelight, RUN/STOP LW12, déplacement icône

1.12 - 2017-09-13
-   Affichage des commandes accessible directement dans l'onglet Commandes

1.11 - 2017-09-04
-   Possibilité de modifier le widget color par défaut

1.10 - 2017-06-17
-   Ajout des ampoules Extel Meli

1.09 - 2017-05-22
-   Compatibilité Jeedom V3.0

1.08 - 2017-05-13
-   Ajout des ampoules TP-Link
-   Correction de bogues

1.07 - 2017-05-03
-   Correction retour d'état RGBWW

1.06 - 2017-05-01
-   Ajout Arilux RGBWW
-   Ajout MagicHome strip led RGBWW et RGBW bulbs
-   Correction retour d'état wifi3x0

1.05 - 2017-04-17
-   Correction bogues H801

1.04 - 2017-04-16
-   Correction bogues Yeelight sunset/sunrise

1.03 - 2017-04-12
-   Correction bogues
-   Ajout des modes lever et coucher du soleil pour les Yeelight RGBW
-   Ajout d'un mode de synchronisation des ampoules
-   Ajout de la compatibilité Xiaomi Mijia

1.02 - 2017-04-02
-   Correction bogues
-   Ajout mode moonlight pour les ceiling yeelight

1.01 - 2017-01-29
-   Ajout de l'information de connexion
-   Correction de bogues
-   Par défaut les informations d'état ne sont plus affichées

1.00 - 2017-01-25
-   Publication de la première version

[Retour à la documentation du plugin](https://bcaro.github.io/wifilightV2-doc/fr_FR/)

Si rien n'est présent dans le changelog lors d'une mise à jour stable :
- modification de la doc 
- modification de l'aide dans l'interface
- corrections orthographiques
- suppression/ajout de logs
- corrections mineures de la configuration de périphériques


Ne jamais utiliser la version beta sans échange avec le développeur. Elle sert à tester de nouvelles configurations ou de nouvelles marques avec les utilisateurs. Le principe du plugin est que la collaboration avec un utilisateur profite ensuite à tous les autres.

1.96v 2025-09-13 (Jeedom V4.2) Beta
- \[UPDATE] L'inclusion Tuya a été revue. Les nouveaux périphériques ne peuvent plus être découverts comme auparavant. Afin de rester compatible avec les anciens (on en trouve encore à l'achat), la découverte utilise aussi l'ancienne méthode. Les périphériques ajoutés utilisent le protocole 3.5, à modifier si besoins. De plus, l'API Tuya pour connaitre les périphériques a évolué. Le plugin utilise l'ancienne et la nouvelle pour trouver plus facilement les dps pouvant entrainer des doublons faciles à supprimer.
- \[BUGFIX] Correction bogue divers mineurs
- \[UPDATE] L'image est conservée lors d'un changement de type Tuya avec le sous-Type Personnalisé.

1.96u 2025-03-01 (Jeedom V4.2)

- \[BUGFIX] Correction bogue divers mineurs 

1.96t 2024-10-22 (Jeedom V4.2)
- \[UPDATE] Amélioration page santé (tri)
- \[BUGFIX] Correction bogue lorsque la donnée Tuya ne correspond pas au type 

1.96s 2024-10-16 (Jeedom V4.2)
- \[UPDATE] Compatible Jeedom 4.5
- \[NEW] Ajout Govee en mode LAN
- \[UPDATE] Refonte Govee Cloud avec la nouvelle API, l’inclusion utilisera la nouvelle API avec des fonctionnalités étendues.
- \[UPDATE] Les périphériques Goove fonctionnant avec l’ancienne API ne seront plus compatibles, API devenue non fonctionnelle. En particulier, lors d’une sauvegarde, le type passera en API Govee V2 et le périphérique ne sera plus compatible.
- \[UPDATE] Nouveaux serveurs pour Tapo
- \[BUGFIX] Corrections Meross
- \[UPDATE] Ajout du tri dans certaines colonnes de la page santé + MAJ temps réel de la date de dernière connexion
- \[UPDATE] Suppression lib monolog avec impact sur l'affichage des logs, il faut, dans la config des logs de Jeedom, configurer le niveau de log par défaut en debug.
- \[UPDATE] Suppression lib guzzlehttp avec des effets de bord possibles sur : Mystrom et nanoleaf qui n’ont pas été testés
- \[BUGFIX] Corrections pour Debian 12
- \[UPDATE] Il y a une fuite mémoire dans les daemons qui est due au plugin virtuel, lorsqu’une info générée par le plugin est utilisée par un virtuel. Plus il y a de virtuels associés, plus la fuite est rapide. Le plugin se préserve en testant la nuit la mémoire utilisée et relance le daemon. Il n’y a pas de solution côté plugin pour éviter cette fuite.

1.96r 2024-05-03 (Jeedom V4.2)
- \[BUGFIX] Correction bogue quand les périphériques Tuya ne sont pas associés aux passerelles. Faire une inclusion Tuya pour associer les périphériques Tuya aux passerelles

1.96q 2024-05-02 (Jeedom V4.2)
- \[UPDATE] Compatibilité Debian 12 améliorée (déconnexions, latences)
- \[UPDATE] Retour inclusion Zigbee/Tuya mais disparaitra à termes
- \[UPDATE] Retour de la surveillance de la consommation mémoire des deamons, utile pour Debian12

1.96p 2024-05-01 (Jeedom V4.2)
- \[UPDATE] Compatibilité Debian 12 
- \[UPDATE] Govee : ajout  Goove en mode local, partie  en alpha à tester sur la version beta du plugin. Sans test, il n'y aura pas de passage en stable.
- \[UPDATE] Sonoff : ajout mini
- \[UPDATE] Sonoff : si l'équipement a une led, utilisation de la led pour obtenir l'état de l'équipement
- \[NEW] Ajout d'une page santé des périphériques du plugin :

	Sonoff : la mise à jour de l'état est automatique pour les sonoff avec led de connexion, le plugin crée les 3 commandes pour la gérer si besoin. Pour les autres sonoff, faire un scénario qui modifie un état qui n'est pas utilisé (inching, startoff) ou qui remet le même état, ce qui n'affecte pas le périphérique mais qui met à jour le reste de l'état du périphérique.
	
	Tuya : si un périphérique n'a pas son état modifié depuis 24h, il est signalé (cas des boutons qui n'envoient pas régulièrement leur état ou des périphériques sur passerelles Zigbee)
	
	Pour les périphériques qui ne retournent pas leur état il sont signalés comme état inconnu.
- \[BUGFIX] Corrections bogues divers

1.96o 2024-03-02 (Jeedom V4.2)
- \[UPDATE] Sonoff : amélioration de l'inclusion des périphériques et du retour d'état
- \[UPDATE] Meross : Modification adresse accès au cloud
- \[BUGFIX] Tuya : Correction affichage de l'unité pour bouton couleur 1
- \[BUGFIX] Tuya : Correction changement protocole quand le périphérique n'est pas connecté
- \[BUGFIX] Tuya : Modification interrogation cloud réglant le problème : sign invalid
- \[UPDATE] Tuya : Modification recherche uid 

1.96n 2023-12-21 (Jeedom V4.2)
Attention : pour les périphériques dont l'état est interrogé régulièrement, il peut être nécessaire de sauvegarder le périphérique pour que cette  interrogation persiste.
- \[UPDATE] Sonoff : amélioration de l'inclusion de l'interrupteur Tx Evolution
- \[UPDATE] Govee : ajout d'une option pour supprimer l'interrogation toutes les min de l'API pour récupérer l'état. Evite d'atteinde le quota d'appel à l'API Govee.

1.96m 2023-12-01 (Jeedom V4.2)
- \[UPDATE] Sonoff : ajout de l'interrupteur Tx Evolution
- \[UPDATE] Tapo : ajout du nouveau protocole
- \[BUGFIX] Luna : souci lors du chargement de la page du plugin, il suffit de la recharger avec le navigateur
- \[UPDATE] Ajout de couleurs sur l'information de connectivité (merci @penta42)

1.96l 2023-10-04 (Jeedom V4.2)
- \[BUGFIX] Wiz : nombreuses corrections sur le retour d'état
- \[BUGFIX] Revogi : correction bogues
- \[UPDATE] Corrections orthographiques

1.96k 2023-08-31 (Jeedom V4.2)
- \[UPDATE] Tuya : modification des messages d'erreur si pas d'accès au cloud
- \[UPDATE] Tuya : l'adresse IP n'est plus mise à 0.0.0.0 lors de l'inclusion si le périphérique existe déjà et a une adresse IP attribuée
- \[UPDATE] Luna : rechargement automatique de la page de configuration du plugin wifilightV2 pour obtenir les droits (contournement de bogue)
- \[UPDATE] Corrections orthographiques

1.96j 2023-06-30 (Jeedom V4.2)
- \[BUGFIX] Meross : correction bogue du MSG100

1.96i 2023-06-28 (Jeedom V4.2)
- \[UPDATE] Meross : intégration du MSG200
- \[UPDATE] Amélioration des messages du plugin
- \[UPDATE] Compatible Debian 11
- \[UPDATE] Compatible Jeedom 4.4

1.96h 2023-04-18 (Jeedom V4.2)
- \[UPDATE] Tuya : modification pour continuer à avoir accès au cloud.

1.96g 2023-04-15 (Jeedom V4.2)
- \[UPDATE] Sonoff : amélioration de la recherche des périphériques 
- \[UPDATE] Retour des dépendances pour améliorer la recherche des périphériques
- \[BUGFIX] Correction bogue bloquant sur version PhP non supportée

1.96f 2023-04-11 (Jeedom V4.2)
- \[UPDATE] Sonoff : correction mise à jour de l'état et récupération adresse mac (à améliorer)

1.96e 2023-04-04 (Jeedom V4.2)
- \[UPDATE] Sonoff : correction création des périphériques lors de l'inclusion

1.96d 2023-04-03 (Jeedom V4.2)
- \[UPDATE] Tuya : amélioration inclusion
- \[UPDATE] Sonoff : Pow R316/320 : validé
- \[UPDATE] Sonoff : Micro USB : retour d'état fonctionnel
- \[UPDATE] Sonoff : l'adresse IP est automatiquement trouvée pour tous les périphériques non cloud

1.96c 2023-02-23 (Jeedom V4.2)
- \[UPDATE] Tuya : amélioration inclusion
- \[UPDATE] Tuya : amélioration protocole 3.5 retour d'état

1.96b 2023-02-21 (Jeedom V4.2)
- \[BUGFIX] Correction bogue qui bloquait les daemons (merci 3.14r)
- \[UPDATE] Tuya : amélioration interrogation de l'état toutes versions

1.96 2023-02-14 (Jeedom V4.2)
- \[NEW] Tuya : ajout du nouveau protocole micrologiciel 3.5 / refonte du micrologiciel 3.4, plus réactif
ATTENTION : vérifier que toutes les passerelles ont le sous type passerelle et que tous les périphériques reliés ont le sous type personnalisé
Il est nécessaire de faire une inclusion pour que la passerelle et ses périphériques soient appairés dans le plugin
Les micrologiciels suivants ont été vérifiés : <3.3 et 3.3 : 2 passerelles et 3 wifi - 3.4 : une passerelle et 1 wifi - 3.5 : une passerelle et un wifi.
Malgré le temps passé à vérifier le fonctionnement, des bogues peuvent apparaitre, les signaler sur le forum.

- \[UPDATE] Tuya : amélioration de la recherche des périphériques dans le cloud
- \[UPDATE] Tuya : l'interrogation de la consommation des prises est maintenant bien mise à jour toutes les 12s
- \[UPDATE] Tuya : numérotation des différents types selon le micrologiciel (sans conséquence sur les configurations existantes)
- \[UPDATE] Tuya : mise en cache des images du cloud
- \[UPDATE] Sonoff Pow R316/320 : ajouté pour test
- \[UPDATE] Sonoff Pow R2 : ajout des consommations jour et mois
- \[BUGFIX] Meross MTS200 : correction remontée de la température courante (merci @t0urista)
- \[UPDATE] Meross MTS100 MTS150 MTS200 : ajout du retour state. Il est nécessaire de sauvegarder l'équipement pour ajouter state qui se trouve dans ModeOnGet
- \[UPDATE] Plus de dépendances

1.95b 2022-12-28 (Jeedom V4.2)
- \[BUGFIX] Correction bogue passerelles Tuya/Zigbee V3 (protocole 3.4) : mélange des retours d'état des périphériques

1.95 2022-12-18 (Jeedom V4.2)
- \[UPDATE] Meross MTS200 ajout de l'information d'ouverture de vanne
	ATTENTION : pour la détection de l'ouverture de fenêtre la commandes info a changé :
	* PIRGetZ = info d'ouverture de fenêtre (au lieu de OpenGetz)
	* DetectionGetZ = info de permission de prise en compte de l'ouverture de la fenêtre
	* OpenGetZ = Remonté de l'ouverture de la vanne thermostatique :
	Il est nécessaire de sauvegarder l'équipement configuré avant la 1.95 et de revoir l'utilisation des informations concernant l'ouverture fenêtre dans les scénarios
- \[UPDATE] Traduction améliorée (merci à ktn pour le script traduitjdm)
- \[UPDATE] Insistance sur la lecture préalable de la doc

1.94 - 2022-11-05 (Jeedom V4.2)
- \[UPDATE] Meross : sortie du mode beta du MOD100, le MOD150 est compatible
- \[UPDATE] Sonoff : DualR3 mode volet roulant testé sauf le retour position
- \[UPDATE] Corrections interface et traduction
- \[BUGFIX] Corrections bogues

1.93 - 2022-10-19 (Jeedom V4.2)
- \[BUGFIX] Meross : correction MTS200 thermostat
- \[BUGFIX]Corrections interface et traduction
- \[UPDATE] Adaptation à Jeedom 4.3
- \[BUGFIX] Suppression de warnings PhP

1.92b - 2022-10-11 (Jeedom V4.2)
- \[BUGFIX] Correction bogue Govee et Meross V1

1.92 - 2022-10-09 (Jeedom V4.2)
- \[NEW] Passerelles en protocole 3.4 Tuya : Les passerelles Tuya/Zigbee sont validées dont Lidl Silvercrest.
- \[UPDATE] Meross : ajout du GS559 capteur de fumées
- \[UPDATE] Sonoff : ajout de l'inter température/humidité THR316D/THR320D
- \[UPDATE] Dual R3 : tests approfondis : ne récupère la consommation que si l'appli eWeLink est active
- \[UPDATE] Yeelight : ajout de YLDP13YL dans le type Philips
- \[BUGFIX] eWeLink : correction bogue détection automatique.
- \[BUGFIX] Corrections de bogues

1.91 - 2022-09-07 stable (Jeedom V4.2)
- \[UPDATE] Ajout du nouveau protocole 3.4 Tuya : la détection en inclusion est automatique et corrigerait le souci du hub Lidl Silvercrest. Les passerelles Tuya/Zigbee n'ont pas été testées.
- \[UPDATE] Tuya : la modification du type ne supprime pas les commandes pour palier la recherche automatique défaillante du type.
- \[UPDATE] Les daemons ont maintenant une période de 30s au lieu de 60s. Le plugin sera plus réactif aux déconnexions et aux changements d'état. Attention si vous avez des scénarios ou calculs basés sur cette période.
- Sortie du mode alpha du bouton Mystrom
- \[BUGFIX] Lhomma : correction bogues accès aux périphériques
- \[BUGFIX] Sonoff TH10/16 : correction infos température et humidité à 0
- \[UPDATE] Sonoff : amélioration de la détection des sous-types
- \[UPDATE] Ajout d'un time out pour l'affichage des images Tuya en ligne qui bloquait l'interface sans internet
- \[BUGFIX] eWeLink : correction bogue détection automatique.Corrections diverses inclusion Tuya
- \[BUGFIX] eWeLink : correction bogue détection automatique.Correction bogues mineurs

1.90 - 2022-04-21 stable (Jeedom V4.2)
- \[UPDATE] Adaptation au passage en V2 du cloud eWeLink

1.89b - 2022-04-19 stable (Jeedom V4.2)
- \[BUGFIX] Correction bogue daemon
- \[BUGFIX] Correction thermostat Tuya ZMAI/EMAI

1.89 - 2022-04-13 stable (Jeedom V4.2)
- \[UPDATE] Ajout du Sonoff Micro mais le retour d'état ne fonctionne pas
- \[BUGFIX] Correction bogue région eWeLink
- \[BUGFIX] Correction bogue stateGet
- \[BUGFIX] Correction bogue récupération clé Meross

1.88 - 2022-03-28 (Jeedom V4.2)
- \[UPDATE] Revogi : ajout des prises Revogi Smart plug (1 à 6) V3
- \[UPDATE] Meross : ajout purificateur MAP100, diffuseur MOD100, humidificateur MSXH0 le tout en beta à tester en profondeur
- \[UPDATE] Nanoleaf : envoi de commandes RAW permettant de créer un effet (non complètement testé à valider)
- \[UPDATE] Sonoff : ajout de l'USB Micro (fonctionne aussi avec des modèles non Sonoff multicanaux)
- \[UPDATE] Sonoff : détection de la région par brute force (bienvenue à nos amis de Martinique)
- \[UPDATE] Refonte des daemons : nouveau daemon spécifique pour Tuya/Yeelight afin que les autres périphériques ne créent pas des déconnexions
- \[NEW] Refonte des logs, divisés en 4 parties pour éviter les mélanges via les daemons


1.87 - 2022-03-07 (Jeedom V4.2)
- \[UPDATE] Meross : intégration des lampes blanches et couleur (testé avec MSL100, MSL120, MSL320 devrait fonctionner avec les autres lampes)
- \[UPDATE] Meross : ajout vanne thermostatique MTS150
- \[UPDATE] Meross : correctif des modules qui ne fonctionnaient plus après changement de micrologiciel : MRS100 volets roulants, Plug conso V1 et Hub thermostat. Nécessite de sauvegarder l'équipement, sinon le refaire.
- \[UPDATE] Meross : ajout du Hub MSH300 et création automatiques des périphériques qui lui sont connectés.
- Cloud TP-LINK (Tapo et Kasa) : création automatique des périphériques à partir du compte TP-LINK. Le plugin utilise les mêmes identifiants pour ces deux applis. Les périphériques sont ensuite contrôlés localement.
- \[UPDATE] TP-LINK : rebaptisé Kasa lorsque cette appli est utilisée
- \[UPDATE] Kasa (ex TP-LINK) : refonte complète, plus besoin en V2 de mettre un jeton.
- \[UPDATE] Tapo : identifiants au compte TP-LINK reportés dans la config du plugin : il faut les renseigner
- \[UPDATE] Kasa : identifiants au compte TP-LINK à renseigner dans la config du plugin pour la création automatique
- \[UPDATE] Tapo compatible : ampoules L510 L530 L900 L920 et prises P100 P110
- \[UPDATE] Kasa compatible : ampoules KL50 KL60 KL110 KL120 KL130 LB100 LB110 LB120 LB130 et prises HS100 HS110 KP105 KP110
- \[UPDATE] Ajout du Mode pour les lampes couleurs RGBW : couleur ou blanc
- Sortie du mode beta du contrôleur SPI LED Shop SP108

1.86 - 2022-02-10 (Jeedom V4.2)
- \[UPDATE] Tapo : intégration des prises et lampes de TP-LINK (110 en beta à tester)
- \[UPDATE] Adaptation aux changements de Jeedom V4.2.

1.85 - 2022-01-29 (Jeedom V4.2)
- \[UPDATE] Tuya inclusion : les valeurs numériques ne sont plus calibrées sur 0-100 lors de l'inclusion. Seule l'amplification est prise en compte. Les min/max sont reportés dans la configuration de la commande.
- \[UPDATE] Sonoff : lors de l'inclusion, les périphériques sont créés avec le bon modèle (à tester) (ne fonctionne pas pour les autres marques compatibles eWeLink : un Sonoff basic est alors créé)
- \[UPDATE] Sonoff : ajout DUAL R3 (à tester) (la configuration complète du DUAL R3 n'est pas implantée, seules les consos des 2 canaux et la configuration moteur le sont)
- \[UPDATE] Sonoff : ajout Ifan 2/3/4 (à tester)
- \[UPDATE] Sonoff : refonte des sous-types
- \[UPDATE] Les images personnalisées apparaissent dans la configuration du plugin
- \[UPDATE] Modification de noms de classes
- \[BUGFIX] Correction commande configGet Tuya
- \[BUGFIX] Correction de bogues
- \[UPDATE] Adaptation du plugin à l'évolution du core en 4.2

1.84 - 2022-01-10 (Jeedom V4)
- \[UPDATE] Il est indispensable d'installer des dépendances dans la configuration du plugin
- \[UPDATE] Si vous utilisez des images personnalisées, elles seront déplacées dans /data/myImages. Normalement le plugin ira chercher les images déplacées, sinon il faudra reconfigurer chaque périphérique ayant une image personnalisée.
- \[NEW] Possibilité d'utiliser toutes les images du plugin se trouvant dans data/images pour configurer un périphérique.
- \[NEW] eWeLink : récupération dans le cloud de la plupart des périphériques fonctionnant en mode LAN et surtout de leur deviceId, apikey et adresse IP, ce qui rend leur configuration bien plus facile. La création d'un périphérique est maintenant automatique pour une majorité de périphériques, il faut néanmoins choisir le sous-type (limitations indiquées dans la doc). Le fonctionnement est ensuite local.
- \[NEW] Tuya : récupération de l'adresse IP locale : la création d'un périphérique est maintenant automatique pour une majorité de périphériques et de commandes dps (limitations indiquées dans la doc). Le fonctionnement reste ensuite en local.
- \[UPDATE] Nanoleaf : création dynamique des modes scène et correction bogue
- \[UPDATE] Meross V2 : les paramètres d'authentification sont reportés dans la configuration du plugin. Sans incidence sur les périphériques créés mais pour les nouveaux il faut renseigner la configuration du plugin. La copie de la clé Meross est toujours possible car identique pour tous.
- \[NEW] Traduction de_DE
- \[UPDATE] Maintenance traduction
- \[BUGFIX] Correction de bogues

1.83 - 2021-12-21 (Jeedom V4)
- \[NEW] Tuya : récupération dans le cloud de la plupart des périphériques et surtout de leur Id et Localkey. Nécessite de créer un compte sur les serveurs Tuya.
- \[UPDATE] Meross V2 :  MSG100 récupération de l'information d'ouverture en mode scrutation

1.82 - 2021-11-29 (Jeedom V4)
- \[NEW] Ajout des appareils Govee en wifi : usage du nuage Govee et création automatique des périphériques (voir les limitations dans la doc)
- \[UPDATE] Maintenance traductions en_US et es_ES

1.81b - 2021-11-03 (Jeedom V4)
- \[UPDATE] Ajout PAC Tuya
- \[NEW] Traduction en anglais : doc et interface
- \[NEW] Traduction en espagnol : doc et interface
- \[BUGFIX] Correction disparition de la valeur de la localKey pour certains périphériques Tuya

1.81 - 2021-10-26 (Jeedom V4)
- \[NEW] Ajout des Meross en micrologiciel 2.2.2 -> Meross V2. Compatible anciens micrologiciel : passez à cette version
- \[BUGFIX] Correction des prises Meross sans conso qui ne renvoyaient pas leur état
- \[UPDATE] \[UPDATE] Plus besoin de credentials pour Meross en Meross V2 -> connexion aux serveurs Meross. Passez à cette version.
- \[UPDATE] Suppression de toutes les explications pour les Meross non V2 : ne plus utiliser ce type.
- \[UPDATE] Ajout du switch myStrom
- \[UPDATE] Ajout du bouton myStorm (Beta à tester)
- \[UPDATE] Ajout du PIR myStrom (Beta à tester)
- \[UPDATE] Ajout de l'ampoule RGBW myStrom en Beta et non testé, en attente de retour des utilisateurs
- \[UPDATE] Par défaut l'état ON/OFF n'est plus inversé lors de la création d'un périphérique
- \[UPDATE] Refonte de la création des listes de commandes (couleurs, ambiance, disco, custom)
- \[BUGFIX] Corrections mineures de bogues
- \[UPDATE] Amélioration interface et aides pour les devid, key, mac, localkey, token, etc. (mais les tooltips n'apparaissent pas) : le nom du champ dans l'interface correspond à la doc et aux usages
- \[NEW] Compatibilité avec la présentation tableau des périphériques sous Jeedom 4.2

1.80 - 2021-09-17 (Jeedom V4)
- \[UPDATE] Ajout des ampoules blanches et couleur Wiz
- \[UPDATE] Ajout du plug Wiz : à tester probablement non fonctionnel
- \[UPDATE] Ajout des plugs Meross en micrologiciel plus ancien (V1)
- \[BUGFIX] Correction bogue retour d'état multiprises Meross
- \[UPDATE] Suppression de l'option d'interrogation des Meross toutes les 20s car non fonctionnel.

1.79 - 2021-08-21 (Jeedom V4)
- \[UPDATE] Tuya : ajout télérupteur pour tableau électrique et ajout capteur CO2 PM2.5
- \[UPDATE] Tuya Zigbee : ajout capteur CO2
- \[UPDATE] Sonoff TH10/16 : retour du on/off pour version >=3.4.0

1.78 - 2021-06-28 (Jeedom V4)
- \[UPDATE] Commande binaire : possibilité d'inverser 0->1 1->0
- \[UPDATE] Tuya : correction des information binaires vides, remplacées par 0
- \[UPDATE] Tuya : ajout double relai

1.77 - 2021-06-15 (Jeedom V4)
- \[UPDATE] Yeelight, eWeLink, Sonoff DIY, Xiaomi Philips : un id non numérique est maintenant accepté (certains périphériques ont un id contenant des lettres)
- \[UPDATE] Yeelight Bed : ajout de la couleur
- \[UPDATE] Tuya : ajout de l'unité pour les valeurs numériques
- \[UPDATE] Tuya : ajout d'une commande de volet roulant
- \[UPDATE] Tuya : ajout d'un module volet roulant
- \[UPDATE] Tuya : ajout de l'export de l'unité
- \[UPDATE] Milight : ajout d'une nouvelle télécommande pour strip led CCT
- \[UPDATE] Sonoff/eWeLink : ajout des propriétés currentTemperature et currentHumidity pour le TH10/16

1.76 - 2021-05-26 (Jeedom V4)
- \[UPDATE] Modification de l'intervalle de temps entre 2 interrogations des périphériques Tuya : permet de ne pas perdre la connexion 
- \[UPDATE] Ajout des ampoules blanches Innr
- \[UPDATE] Ajout spot avec détecteur Action LSC
- \[UPDATE] Ajout d'une alarme Tuya
- \[BUGFIX] Correction bogue détection périphérique Tuya/Zigbee

1.75 - 2021-03-31 (Jeedom V4)
- \[UPDATE] Ajout de l'information de connexion dans la page d'affichage des périphériques wifilightV2
- \[BUGFIX] Correction bogue sur l'interrogation non systématique des périphériques Tuya toutes les minutes (et toutes les 20s)

1.74 - 2021-03-19 (Jeedom V4)
- \[BUGFIX] Correction bogue prises Tuya/Lidl avec true/false
- \[BUGFIX] Correction bogue de la MAJ widget binaire
- \[UPDATE] Nettoyage logs 

1.73 - 2021-03-07 (Jeedom V4)
- \[BUGFIX] Correction bogue dans certain cas lors de l'affichage de la liste des périphériques

1.72 - 2021-03-07 (Jeedom V4)
- \[UPDATE] Tuya : ajout lampe couleur Lidl
- \[UPDATE] Tuya : ajout télécommande Lidl
- \[UPDATE] Tuya : ajout prises simple et triple Lidl
- \[UPDATE] Les couleurs sont regroupées dans un select (nécessite de sauvegarder l'équipement). Ce select est créé en mode création Minimale des commandes.
- \[BUGFIX] Correction bogue lors de l'affichage des périphériques
- \[BUGFIX] Correction bogue gestion couleurs Tuya

1.71 - 2021-02-26 (Jeedom V4)
- \[BUGFIX] Tuya : correction bogue création des sliders en mode inclusion
- \[UPDATE] Tuya : ajout d'une config pour les lampes blanches Lidl

1.70 - 2021-02-21
- \[UPDATE] Tuya : ajout d'un module chauffage soufflant
- \[UPDATE] Tuya : ajout de deux diffuseurs
- \[UPDATE] Tuya : amélioration du fonctionnement du diffuseur Proscenic
- \[NEW] Tuya : la passerelle Silvercrest de Lidl est compatible avec le plugin en tant que passerelle Tuya/Zigbee
- \[BUGFIX] Tuya : correction \* dans le champ dps
- \[UPDATE] Tuya : ajout de l'apprentissage des couleurs
- \[BUGFIX] Meross : correction bogue switch et plug 1 canal
- \[UPDATE] Meross : ajout de la commande de volets roulants MRS100 (incomplet : le positionnement et le retour d'état sont KO)
- \[NEW] Ajout de l'upload et de la sélection dans le dossier data du plugin des images alternatives
- \[UPDATE] Ajout (retour) d'une option pour les périphériques Tuya permettant d'empêcher le plugin d'interroger l'état lors du démarrage du daemon et régulièrement. 

Dernière version pour Jeedom V3 : passez en V4 pour bénéficier des nouveautés.

1.69 - 2021-01-30
- \[UPDATE] Tuya : Ajout d'un module fil pilote
- \[UPDATE] Ajout d'une commande stateGet permettant, par exemple, à un scénario de remonter l'état des périphériques qui le peuvent. Nécessite de sauvegarder l'équipement créé avant la 1.69 .
- \[UPDATE] Retour de la possibilité de déplacer les commandes (disparu en 1.68)
- \[UPDATE] Tuya : commandes avec formules multiples, il est obligatoire de mettre \* dans le champ dps
- \[BUGFIX] Tuya : correction bogue calcul de formule info
 
1.68 - 2021-01-27
- \[UPDATE] Tuya Zigbee config V1 : supprimée, les périphériques en V1 ne seront plus visibles et ne pourront plus être configurés. La config V2 est renommée et c'est la seule qui apparait dans le choix des types de périphériques.
- \[UPDATE] Tuya : suppression de la notion de canal pour Tuya/Zigbee et Tuya V3 (enfin)
- \[UPDATE] Tuya : ajout de périphériques Proscenic (friteuse et humidificateur), d'autres Proscenic sont compatibles via l'apprentissage, mais pas tous (les aspirateurs ne le sont pas à cette date). L'utilisation des Proscenic dans le plugin nécessite une astuce lors de l'utilisation de l'appli Proscenic.
- \[UPDATE] Tuya : ajout d'une alarme
- \[NEW] Tuya : export d'une config personnalisée pour la partager (nécessite de sauvegarder l'équipement)
- \[NEW] Milight : les ibox1/2 ne sont plus commercialisées et remplacées par la miBoxer qui est 100% cloud. Pour que le plugin puisse continuer à exploiter les lampes Milight ou que vous puissiez remplacer une ibox1/2 défaillante, il est possible d'utiliser une [box DIY proposée par Sidoh](https://github.com/sidoh/esp8266_milight_hub) . Le plugin est compatible avec cette box car elle reproduit le protocole Mi.Light mais il implante aussi le protocole spécifique à cette box DIY qui est plus simple et plus performant.
- \[UPDATE] iHomma : ajout des plafonniers en beta (à tester)
- \[UPDATE] Meross : ajout vanne thermostatique
- \[UPDATE] Meross : amélioration du fonctionnement des prises
- \[UPDATE] Les modes custom standard (Nanoleaf, Yeelight) sont regroupés dans un select. La commande select dans la configuration du périphérique peut ensuite être modifiée pour ajouter de nouveaux modes custom (nécessite de sauvegarder l'équipement).
- \[UPDATE] Les modes disco (Milight, Arilux, Lagute, MagicUFO, Yeelight, H801, TPLink, Extel, Philips, Tuya) sont regroupés dans un select (nécessite de sauvegarder l'équipement).
- \[UPDATE] Réaffectation des commandes génériques lors de la création d'une nouvelle commande (inactif sur les commandes déjà créées).
- \[UPDATE] Amélioration de l'apprentissage des modules Tuya
- \[UPDATE] La recharge de l'interface du mode inclusion n'est plus nécessaire
- \[BUGFIX] Corrections mineures de bogues
- \[UPDATE] Amélioration de l'interface et de la navigation lors des changements de types/sous-types

1.67 - 2020-12-23
Avant application de cette version, faire une sauvegarde de votre jeedom. Elle a été testée avec sur les périphériques Tuya, Tuya/Zigbee, Milight, Yeelight, Philips, Tplink. Pour les autres produits il n'y a pas eu de retour sur les tests beta. Tuya été testé sur des configurations allant jusque 16 périphériques. Le mode inclusion a été testé sur plusieurs périphériques dont un avec 16 dps.

- \[UPDATE] Tuya : ajout sirène Action LSC Smart
- \[UPDATE] Modifications des images et interfaces pour compatibilité dark mode V4
- \[NEW] Ajout de l'information de batterie dans l'onglet équipements pour les périphériques qui renvoient cette information
- \[NEW] Possibilité de modifier l'image du périphérique qui apparait dans la page des périphériques du plugin
- \[UPDATE] Suppression de l'arrondi des commandes infos
- \[UPDATE] Pour les périphériques Tuya, l'option "suppression du retour d'état" est remplacée par l'option "interrogation de l'état" : la suppression n'est plus utile depuis la connexion permanente aux périphériques Tuya. Cette option est maintenant utilisée pour permettre d'interroger l'état toutes les 20s pour les périphériques qui ne renvoient pas complètement leur état, en particulier la consommation des prises électriques. 
- \[NEW] Tuya/Zigbee : ajout d'un mode inclusion automatique des périphériques connectés à la passerelle et ajout automatique des commandes.
- \[NEW] Tuya : après configuration manuelle (IP, localKey, devId) : ajout automatique par apprentissage des commandes pour un périphérique non proposé en standard
- \[NEW] Dans les 2 cas précédents, nécessite d'enregistrer le périphérique créé dans une version précédente du plugin afin de permettre l'apprentissage des dps
- \[UPDATE] Yeelight : ajout d'un nouveau type (V1) sans connexion permanente pour les périphériques dont la connexion réseau est de mauvaise qualité. Les configurations de la version 1.66 et inférieures sont renommées V2 mais il n'y a rien à modifier.
- \[BUGFIX] Correction des bogues suite aux régressions de la 1.66

1.66 - 2020-12-09
- \[UPDATE] Tuya/Zigbee V2 : retour à la notion de canal

1.65 - 2020-12-09
- \[UPDATE] Tuya/Zigbee V2 : suppression de la notion de canal (le cid est utilisé à la place) nécessite de sauvegarder chaque périphérique
- \[UPDATE] Tuya/Zigbee V2 : ajout de 3 inters muraux
- \[UPDATE] Tuya : possibilité de plusieurs dps dans une même commande
- \[UPDATE] Ajout d'un timeout sur Meross et Nanoleaf pour ne pas bloquer le daemon
- \[BUGFIX] Correction de bogues
- \[UPDATE] Correction de la doc

1.64 - 2020-12-05
- Passerelle Tuya/Zigbee : ajout plug Lonsonho avec conso (le pilotage de la led est KO : pas le temps de corriger leur JSON mal généré)
- \[UPDATE] Tuya : ajout prise + led de veille couleur, radiateur électrique
- \[UPDATE] Tuya : ajout commande VR avec éclairage des boutons
- \[UPDATE] Tuya : ajout d'un type V3 qui permet de modifier les dsp et les paramètres de toutes les commandes. Disparition de la notion de canal. Les types 1 et 2 ne seront plus maintenus (sauf correction de bogues).
- \[NEW] Tuya/Zigbee : type V2, les dps et les paramètres de toutes les commandes peuvent être modifiés. Le type V1 ne doit plus être utilisé et sera supprimé. La notion de canal est conservée pour distinguer 2 périphériques connectés à la même passerelle.
- \[UPDATE] Tuya/Zigbee ajout d'un mode custom (oublié en 1.63)
- \[UPDATE] Xiaomi Philips : amélioration du dialogue afin de ne pas perdre de commandes
- \[BUGFIX] Correction de bogues (H810, inter simple tuya, lampe tuya H4S4V4)
- \[BUGFIX] Corrections mineures de bogues

1.63 - 2020-12-01
- \[UPDATE] Passerelle Tuya/Zigbee : ajout capteurs présences, capteur d'ouverture, switch gradateur double, télécommande 3 boutons LoraTap
- \[NEW] Tuya : ajout d'une interface de création des commandes de base facilitant la configuration des périphériques custom (valable aussi par la passerelle Tuya/Zigbee) 
- \[NEW] Tuya : avec l'interface custom, possibilité d'intégrer des lampes avec contrôle de leur couleur/saturation/intensité et retour d'état
- \[UPDATE] Tuya : ajout d'un interrupteur de volet roulant avec positionnement
- \[NEW] Meross : nouvelle marque prise en compte, en mode LAN, donc sans internet, comme tous les périphériques compatibles wifilightV2
- \[NEW] Meross : ajout des prises MSS210HK MSS210 MSS425EHK MSS425FHK et switch MSS710
- \[NEW] Meross : ajout du module pour porte de garage en beta (incomplet et à tester)
- \[NEW] Meross : ajout du plug avec conso MSS310 en beta (à tester) (la conso ne remonte que toutes les minutes)
- \[BUGFIX] Correction de bogues
- \[UPDATE] Simplification et correction de la doc

Attention : 
- \[UPDATE] Les configurations Tuya/Zigbee V1 devront être refaites en V2 pour le passage en stable.
- \[UPDATE] Ne plus utiliser la config passerelle Tuya/Zigbee V1, il faut passer en V2. La V1 n'est plus proposée et sera supprimée lors de la prochaine release du plugin.

1.62 - 2020-10-31
- \[UPDATE] Passerelle Tuya/Zigbee : ajout d'une tête thermostatique, d'une serrure et d'un capteur de température
- \[UPDATE] eWeLink : ajout d'un nouveau type de commande de volets roulants
- \[UPDATE] Sonoff TH10/16 : le nouveau micrologiciel 3.4.1 ne permet pas le ON/OFF
- \[BUGFIX] Correction de bogues

1.61 - 2020-06-16
- \[UPDATE] eWeLink Sonoff LAN et Sonoff DIY : ajout de l'interrupteur avec variateur
- \[UPDATE] Sonoff TH10/16 : le nouveau micrologiciel 3.4.1 permet à nouveau le ON/OFF 

1.60 - 2020-06-01
- \[BUGFIX] Nanoleaf : correction bogue température de couleur du blanc 

1.59 - 2020-05-26
- \[NEW] Ajout d'une gateway WiFi utilisant des périphériques Zigbee compatibles Tuya : ajoute la compatibilité de nombreux périphériques dont une gâche connectée.
- \[UPDATE] Yeelight : filtrage des retours d'état non valides
- \[UPDATE] Nanoleaf : correctif afin de permettre le fonctionnement avec Buster
- \[NEW] Compatibilité avec HomeBridge ou autres plugins afin de fournir la température de couleur des lampes en Kelvin : nécessite de sauvegarder chaque équipement (partie en beta à tester par les plugins pouvant l'utiliser).
- \[UPDATE] Les valeurs min et max des sliders sont modifiables par l'utilisateur. Ne les modifier que pour la température de couleur (KelvinVal), pour tous les autres, un dysfonctionnement est possible

ATTENTION : Il est nécessaire de sauvegarder TOUS les périphériques de type lampe ou led qui gèrent la température de couleur.

1.58 - 2020-05-04
- \[UPDATE] Tuya : ajout Smart Garage

1.57 - 2020-04-30
- \[UPDATE] Yeelight : ajout de la lampe de chevet V2 (la V1 ne sera toujours pas compatible)
- \[UPDATE] Yeelight : amélioration de la rapidité et du retour d'état

1.56 - 2020-04-26
- \[BUGFIX] Tuya : correction des blocages suite à déconnexion (mais la déconnexion n'est pas due au plugin)
- \[NEW] Tuya et Yeelight : récupération de l'état à la connexion
- \[UPDATE] Tuya et Yeelight : l'état des widgets n'est modifié que si le périphérique est connecté et répond
- \[BUGFIX] Correction de la fuite mémoire dans le daemon
- \[BUGFIX] Sonoff RF Bridge : correction pour le nouveau micrologiciel 3.4
- Sonoff TH10/16 : le micrologiciel 3.4 supprime le mode LAN et donc l'accès par le plugin pour ON/OFF (cependant, la température est remontée dans le plugin)
- \[BUGFIX] Correction bogues
	
	!!Ne modifiez pas les micrologiciels de vos périphériques !!

1.55 - 2020-01-26
- \[UPDATE] TPlink prises HS110 V1/V2 : ajout des statistiques de conso + correction retour état led
- \[NEW] Ajout de la surveillance de certains cas de fuite mémoire : daemon relancé la nuit si détection de fuite
- \[UPDATE] Yeelight : ajout Smart Meteorite
- \[BUGFIX] Correction bogues

1.54 - 2020-01-11
- \[BUGFIX] Sonoff : correction du connectedGet (enfin)
- \[BUGFIX] Tuya : correction du connectedGet (enfin)
- \[UPDATE] Sonoff RF bridge : passage à 32 triggers
- \[UPDATE] Magic Home : ajout du mode custom
- \[NEW] Ajout du Nanoleaf
- \[BUGFIX] Correction bogues 

1.53 - 2019-12-12
- \[UPDATE] Sonoff : ajout du RF bridge 433 - uniquement les capteurs
- \[UPDATE] Sonoff TH10/TH16 : ajout des informations du thermostat interne (mais pas possible de les modifier)
- \[UPDATE] Sonoff Pow R2 : ajout des informations électriques (mais d'une efficacité limitée, ceci n'est pas dû au plugin)
- \[UPDATE] Tuya : meilleur retour d'état des prises multiples V2
- \[UPDATE] Tuya : ajout 2ème type lampe Blanche
- \[BUGFIX] Correction bogues 

1.52 - 2019-11-27
- \[UPDATE] Tuya : lampes globe en stable
- \[UPDATE] nettoyage du code 
- \[BUGFIX] Correction bogues
- \[UPDATE] Déplacement de la doc

1.51 - 2019-11-23
- \[UPDATE] Tuya : ajout du pont MiBoxer de Milight (module en Beta), seuls ON/OFF de la box complète fonctionne. Mis à disposition pour ceux qui arriveraient à récupérer l'ApiKey avec l'appli MiBoxer.
- \[UPDATE] Tuya : ajout d'un périphérique custom permettant de configurer n'importe quel périphérique
- \[UPDATE] Tuya : refonte des commandes customs : pour les commandes custom existantes -> nécessité de les reconfigurer avec le nouveau format
- \[UPDATE] Tuya : nécessité de sauvegarder tous les équipements
- \[UPDATE] eWeLink : utilisation d'une fake key pour la SelfApiKey
- \[BUGFIX] eWeLink : correction de l'info de connexion
- \[BUGFIX] Tuya : correction de l'info de connexion
- \[BUGFIX] Correction de bogues mineurs
- \[UPDATE] relance du daemon après la modification d'une configuration

1.50 - 2019-10-28 
- \[UPDATE] Tuya : ajout lampe RGBW type 2 (module en beta)
- \[BUGFIX] Correction bogue Sonoff Dual
- \[UPDATE] eWeLink : ajout des périphériques 3 et 4 canaux
- \[UPDATE] Sonoff : compatible TH10/1H16 capteur de température, basic, RF, POW, Mini, Dual, 4CH/4CH PRO, Touch, S20/S26, T1/TX, SLAMPHER, T4EUC1

1.49 - 2019-10-23 
- \[BUGFIX] Correction bogue Tuya curtain mod2
- \[BUGFIX] Correction bogue Sonoff Dual

1.48 - 2019-10-18 
- \[UPDATE] eWeLink : ajout modules avec 2 canaux (dont Sonoff Dual) en Beta
- \[BUGFIX] Correction bogue retour état Sonoff

1.47 - 2019-10-16 
- \[UPDATE] Ajout Tuya volets mod2 (on/off/stop au lieu de 1/2/3 dans les commandes)
- \[BUGFIX] Correction bogues

1.46 - 2019-10-12 
- \[UPDATE] Ajout eWeLink capteur température/humidité dont Sonoff TH10/16
- \[UPDATE] Ajout eWeLink mode inching (ON pendant un temps donné)
- \[BUGFIX] Correction bogues

1.45 - 2019-10-2 
- \[NEW] Compatible périphériques avec Appli eWeLink en mode LAN
- \[NEW] Compatible Sonoff en mode LAN

1.44 - 2019-09-27
- \[NEW] Compatible Sonoff Basic R3 en mode DIY
- \[UPDATE] Compatible V4 Jeedom
- \[UPDATE] Compatible Buster
- \[UPDATE] Suppression du widget couleur sans Off non compatible V4, le plugin n'offrira plus de widgets personnalisés.

1.43 - 2019-07-08
- \[NEW] TP-LINK : prise en compte du nouveau protocole V2 pour les prises, nécessite un jeton.
- \[UPDATE] Tuya : les capteurs d'ouverture et PIR ne seront pas compatibles avec le plugin. Ces capteurs passent obligatoirement par le cloud : à proscrire en utilisation alarme.
- \[BUGFIX] Correction bogue : calcul du courant des prises Tuya maintenant en ampères (modifier vos scénarios car l'unité du courant est incorrecte)
- \[UPDATE] Tuya et TP-LINK, unités pour la consommation : A V W kWh. Sauvegarder l'équipement pour un affichage correct de l'unité dans la liste des commandes.

1.42 - 2019-06-02
- \[BUGFIX] Tuya : correction bogue retour d'état
- \[BUGFIX] Daemon : plus de fuite mémoire

1.41 - 2019-06-19
- \[UPDATE] Tuya : compatibilité bidirectionnelle avec le plugin en micrologiciel 2.0 (actionneur OK)
- \[UPDATE] Tuya : ajout de l'interrupteur variateur
- \[UPDATE] Daemon : réécrit pour mieux gérer les connexions/déconnexions tuya et Yeelight
- Un réenregistrement de chaque périphérique sera peut-être nécessaire

1.40 - 2019-06-16
- \[UPDATE] Tuya : ajout du retour d'état instantané pour les équipements qui retournent leur état
- \[UPDATE] Tuya : certains équipements sont passés en micrologiciel 2.0 : ils sont compatibles avec le plugin uniquement en retour d'état
- \[UPDATE] Tuya : l'application mobile doit être arrêtée pour que le plugin fonctionne
- \[UPDATE] Tuya : Pour les utilisateurs de la version beta, les périphériques Tuya V2 seront à reconfigurer (le micrologiciel V1 est séparé du micrologiciel V2)
- \[UPDATE] Suppression du cron 1 min
- \[BUG] Un bogue PhP fait qu'il y a des fuites de mémoire, dans ce cas configurer le heartbeat du plugin pour relancer régulièrement le deamon

1.39 - 2019-05-05
- \[UPDATE] Tuya : ajout thermostat

1.38 - 2019-04-05
- \[BUGFIX] Tuya : correction retour état
- \[BUGFIX] Desktop : correction bogue affichage retour état

1.37 - 2019-04-04
- \[UPDATE] Tuya : ajout consommation sur toutes les prises tuya
- \[UPDATE] Tuya : configuration de la récupération des paramètres d'énergie
- \[UPDATE] Attention : la configuration pour récupérer les paramètres d'énergie a été modifiée. Les anciennes configurations restent compatibles.

1.36 - 2019-04-03
- \[UPDATE] Tuya : ajout des interrupteurs muraux
- \[UPDATE] Tuya : ajout d'un humidificateur
- \[UPDATE] Tuya : ajout de la consommation sur toutes les prises
- \[UPDATE] Attention : il faudra reconfigurer les prises Tuya : prendre la configuration prise Xplugs + USB et cocher la suppression du retour d'état pour les prises présentant des microcoupures.

1.35 - 2019-03-13
- \[UPDATE] Tuya : ajout des interrupteurs pour volets roulants
- \[UPDATE] Tuya : ajout de commandes customs pour tous les périphériques (permet de tester de nouveaux actionneurs)

1.34 - 2019-03-02
- \[UPDATE] Ajout d'une configuration avec retour d'état pour toutes les prises. Attention des microcoupures peuvent survenir, prendre alors la configuration sans retour d'état.

1.33 - 2019-02-15
- \[UPDATE] Paramétrage possible pour la récupération de la consommation sur les prises Tuya : les prises conso de type 2 doivent être reconfigurées en type 1 avant installation du plugin.

1.32 - 2019-02-13
- \[BUGFIX] Corrections bogues TP-LINK HS110.
- \[UPDATE] Modification du protocole (UDP -> TCP) pour les équipements TP-LINK. Normalement sans incidence.

1.31 - 2019-02-12
- \[UPDATE] Ajout d'un 2ème type de plug avec conso compatible Smart Live.

1.30 - 2019-02-01
- \[UPDATE] Suppression du retour d'état pour les plugs Tuya sans mesure de consommation : fonctionnalité inutile car seul Jeedom peut contrôler le plug et provoque des microcoupures.
- \[UPDATE] Modification de la doc pour la nouvelle configuration des iBox Mi.Light

1.29 - 2019-1-27
- \[BUGFIX] Correction couleurs HSV ampoules Tuya
- \[UPDATE] Ajout ampoules RGB Tuya

1.28 - 2019-1-16
- \[NEW] Ajout plug TP-LINK
- \[UPDATE] Amélioration communication Tuya smart plug

1.27 - 2019-1-11
- \[UPDATE] Tuya smart plug en stable
- \[UPDATE] Amélioration communication Tuya smart plug

1.26 - 2019-1-1
- \[UPDATE] Ajout des prises électriques compatibles Tuya/smart live/Jinvoo/eFamillyCloud apps
- \[BUGFIX] Corrections de bogues mineurs
- \[UPDATE] Refonte de la documentation

1.25 - 2018-11-25
- \[NEW] Ajout en beta des contrôleurs led adressable SP108 Led Shop (ON/OFF)
- \[UPDATE] Ajout de la télécommande RGB Mi.Light 
- \[BUGFIX] Correction de bogues mineurs

1.24 - 2018-11-14
- \[BUGFIX] Correction bogue page affichage des équipements

1.23 - 2018-09-06
- \[NEW] Ajout des contrôleurs de pixel strip leds compatibles Magic Home

1.22 - 2018-07-10
- \[NEW] Ajout des ampoules compatibles Tuya/Jinvoo smart apps
- \[UPDATE] Ajout de l'ampoule Mi.Light Floodlight
- \[UPDATE] Ajout de l'ampoule Philips Zhiuri
- \[BUGFIX] Corrections bogues mineurs

1.21 - 2018-03-10
- \[NEW] Ajout des contrôleurs de bandeaux led Sunix
- \[BUGFIX] Correction bogues Arilux RGBWW

1.20 - 2018-03-02
- \[UPDATE] Ajout de la remontée immédiate de l'état des ampoules Xiaomi Yeelight
- \[UPDATE] Amélioration de l'interface de configuration du plugin 
- \[BUGFIX] Corrections bogues

1.19 - 2018-02-15
- \[UPDATE] Ajout arrêt temporisé Xiaomi Philips 
- \[UPDATE] Amélioration retour d'état ON/OFF toutes lampes avec retour d'état
- \[BUGFIX] Corrections bogues

1.18 - 2018-02-13
- \[BUGFIX] Corrections Yeelight JIAOYUE
- \[UPDATE] Ajout modes custom sur Yeelight couleurs

1.17 - 2018-02-11
- \[UPDATE] Ajout Mi.Light : Track Light RGBW / WW
- \[UPDATE] Ajout modes custom Yeelight JIAOYUE
- \[UPDATE] Tri des listes

1.16 - 2018-01-25
- \[UPDATE] Ajout Xiaomi Philips : lampe de bureau, ampoule et plafonnier
- \[UPDATE] Ajout du plafonnier Yeelight JIAOYUE 650
- \[UPDATE] Ajout pour toutes les lampes de boutons d'incrémentation et décrémentation de l'intensité
- \[UPDATE] Mi.Light : mémorisation de l'intensité RGB et Blanc
- \[BUGFIX] Correction télécommande Mi.Light 8 boutons
- \[BUGFIX] Correction de bogues mineurs.

1.15 - 2017-11-29
- \[UPDATE] Ajout MiLight : télécommande 8 canaux RGBW CT et led strip RGBW CT
- \[UPDATE] Mise à jour de la doc (orthographe, aide Yeelight)

1.14 - 2017-09-28
- \[BUGFIX] Correction de bogues : Plafonnier Yeelight et LW12. Ajout Vitesse H801

1.13 - 2017-09-26
- \[BUGFIX] Correction de bogues : Plafonnier Yeelight, RUN/STOP LW12, déplacement icône

1.12 - 2017-09-13
- \[UPDATE] Affichage des commandes accessible directement dans l'onglet Commandes

1.11 - 2017-09-04
- \[UPDATE] Possibilité de modifier le widget color par défaut

1.10 - 2017-06-17
- \[UPDATE] Ajout des ampoules Extel Meli

1.09 - 2017-05-22
- \[UPDATE] Compatibilité Jeedom V3.0

1.08 - 2017-05-13
- \[NEW] Ajout des ampoules TP-LINK
- \[BUGFIX] Correction de bogues

1.07 - 2017-05-03
- \[BUGFIX] Correction retour d'état RGBWW

1.06 - 2017-05-01
- \[NEW] Ajout Arilux RGBWW
- \[UPDATE] Ajout MagicHome strip led RGBWW et RGBW bulbs
- \[BUGFIX] Correction retour d'état wifi3x0

1.05 - 2017-04-17
- \[BUGFIX] Correction bogues H801

1.04 - 2017-04-16
- \[BUGFIX] Correction bogues Yeelight sunset/sunrise

1.03 - 2017-04-12
- \[BUGFIX] Correction bogues
- \[UPDATE] Ajout des modes lever et coucher du soleil pour les Yeelight RGBW
- \[UPDATE] Ajout d'un mode de synchronisation des ampoules
- \[NEW] Ajout de la compatibilité Xiaomi Mijia

1.02 - 2017-04-02
- \[BUGFIX] Correction bogues
- \[UPDATE] Ajout mode moonlight pour les ceiling yeelight

1.01 - 2017-01-29
- \[NEW] Ajout de l'information de connexion
- \[BUGFIX] Correction de bogues
- \[UPDATE] Par défaut les informations d'état ne sont plus affichées

1.00 - 2017-01-25
- \[NEW] Publication de la première version
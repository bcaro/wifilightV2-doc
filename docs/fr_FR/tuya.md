# Périphériques et Passerelles Zigbee Tuya

Cette partie est à utiliser après avoir inclus le périphérique et sa passerelle via le cloud Tuya. Si ce n'est pas le cas, revenir à la documentation principale et lire pourquoi il y a besoin d'utiliser cette partie de la documentation très technique. Elle est à utiliser lorsque le cloud Tuya n'a pas donné entière satisfaction et est réservée aux utilisateurs avertis.

Vérifier que suite à l'inclusion :
Le type est :  "Passerelle Tuya Zigbee fwx.x"
La passerelle a comme sous-type :  "Gateway hub Tuya zigbee"
Le ou les périphériques liés à la passerelle ont comme sous-type : "personnalisé"
le x.x = 3.4 ou 3.5 à modifier éventuellement manuellement.

Après avoir éventuellement mis manuellement l'adresse IP identique sur la passerelle et ses périphériques et mis le même firmware sur l'ensemble, vérifier que le devid est le même partout et enfin faire une inclusion Tuya pour appairer la passerelle et ses périphériques.


## Mode apprentissage

Pour lancer l'apprentissage, cocher la case « mode inclusion » et sauvegarder le périphérique qui entre alors en mode inclusion. Attendre une dizaine de secondes et modifier l'état du périphérique réel ou avec l'appli Smartlife pour que le plugin crée automatiquement les commandes actions et infos, utilisez toutes les possibilités offertes par l'appli. Pour terminer, cliquer sur le bouton « arrêter l’inclusion » et sauvegarder.

## Mode création manuelle des commandes

Ce mode est utile pour les commandes qui nécessitent d'être ajustées (dps, paramètre), pour envoyer plusieurs dps en même temps ou pour la gestion des couleurs des lampes. 

La procédure nécessite que le périphérique renvoie son état dans les logs.

Le plugin est équipé de boutons permettant de créer les commandes des cas les plus courants, il suffira de modifier le n° de dps ou le paramètre. Voir [ici](./tuya#tocAnchor-1-5-2) pour la compréhension des logs et la création manuelle des commandes.

## Périphériques alimentés par pile

Pour que le % de capacité soit affiché dans Analyse/Equipements, le nom logique de la commande info correspondante doit contenir battery et get .

# Tuya

Cette partie est à utiliser après avoir inclus le périphérique via le cloud Tuya. Si ce n'est pas le cas, revenir à la documentation principale et lire pourquoi il y a besoin d'utiliser cette partie de la documentation très technique. Elle est à utiliser lorsque le cloud Tuya n'a pas donné entière satisfaction et est réservée aux utilisateurs avertis.

Pour utiliser ces périphériques sans passerelle Tuya/Zigbee, choisir le type : "Tuya Smart Life fw x.x"
le x.x = 3.3 ou 3.4 ou 3.5 à modifier manuellement. Il est nécessaire de modifier l'adresse IP si l'inclusion l'a mise à 0.0.0.0 .


## Mode apprentissage

Pour lancer l'apprentissage, cocher la case « mode inclusion » et sauvegarder le périphérique qui entre alors en mode inclusion. Attendre quelques secondes et modifier l'état du périphérique réel ou avec l'appli Smartlife pour que le plugin crée automatiquement les commandes actions et infos, utilisez toutes les possibilités offertes par l'appli. Pour terminer, cliquer sur le bouton « arrêter l’inclusion » et sauvegarder. Si rien n'est trouvé : l'adresse IP n'est pas bonne ou le firmware n'est pas bon.

Ce mode est uniquement là pour aider la configuration personnalisée d'un périphérique qui est mal configuré par le cloud. L'utilisation de ce mode ne peut donner un périphérique complètement fonctionnel et nécessite de comprendre de supprimer ou de modifier les commandes créées.

Exemples de modifications :
- Si au dps correspond uniquement une info dans le périphérique (par exemple 3 valeurs possibles d'un même bouton), il faudra supprimer les 3 commandes actions créées automatiquement. Cependant, les commandes actions ont comme paramètres toutes les valeurs récupérées par le plugin et permettent de connaitre les valeurs prises par l'info du dps.
- Pour les dps numériques, une commande info et une commande action numériques sont créés automatiquement, si seule l'info est utile (cas de la température d'un capteur) il faut supprimer la commande action. Si les valeurs numériques prennent les valeurs 0 ou 1 pendant l'apprentissage, le plugin va aussi créer 3 commandes ETAT/ON/OFF, il faudra les supprimer.
- Pour les dps contenant une info 0/1 pour un actionneur tout ou rien, comme une prise électrique, le plugin va créer une info et 2 actions ON/OFF.
- Dans le cas d'un dps contenant true ou false, une commande info et deux commandes action (ON et OFF) sont créés automatiquement, si seule l'info est utile (cas d'un capteur de présence) il faut supprimer les commandes actions.
- Pour des dps contenant une info de couleur, le plugin va identifier le codage de la couleur et créer 3 commandes action et 3 commandes info qui correspondent à Hue Saturation Intensité
- De manière générale, le sous-type créé par le plugin pourra ne pas correspondre à la donnée, il faudra alors faire des tests en le modifiant.

Si vous partez d’une configuration standard après avoir choisi un sous-type et que vous ajoutez l’apprentissage pour vérifier les dps standards, il faudra modifier les commandes créées par la configuration standard et supprimer les commandes créées par l’apprentissage. En effet, lors de la sauvegarde, les dps standards sont toujours recréés, sinon il est possible de ne pas les afficher.
	
## Mode création manuelle des commandes

Ce mode est utile pour les commandes qui nécessitent d'être ajustées (dps, paramètre), pour envoyer plusieurs dps en même temps ou pour la gestion des couleurs des lampes. 

La procédure nécessite que le périphérique renvoie son état dans les logs. Si le périphérique ne renvoie pas son état, les dps ne pourront pas être trouvés dans les logs.

Le plugin est équipé de boutons permettant de créer automatiquement les commandes des cas les plus courants, il suffira de modifier le n° de dps ou le paramètre automatiquement créé.


### Configuration
-   désactiver tous les périphériques wifilightV2 sauf celui à tester
-   configurer le périphérique (adresse IP statique, firmware)
-   vérifier que le démon tourne, sinon le démarrer
-   configurer les logs wifilightV2 en mode debug, redémarrer le démon
-   effacer les logs

### Récupération des informations
-   appuyer sur un bouton du périphérique physique (on, off, haut, bas, etc.) ou attendre que le périphérique renvoie son état ou appuyer sur un bouton de l'appli Smart Life (mais dans ce dernier cas, cela peut empêcher le retour d'état).
-   repérer dans les logs le retour d'état

Utiliser toutes les possibilités de l'application Tuya et bien repérer dans les logs le n° de dps et sa valeur qui sont envoyés au plugin.

Si vous ajoutez des paramètres manuellement, il ne faut pas mettre de guillemets ni d'accolades externes :

    [color=FF0000]"{"2":"color","3":"#colorR2G2B200H2S2V2_255#""}[/color]
	
	mais :
	
    "2":"color","3":"#colorR2G2B200H2S2V2_255#"


### Cas d'un actionneur tout ou rien, true/false

Dans les logs, lors de l'utilisation de l'appli Smartlife, on trouve par exemple :

	[2023-06-22 06:19:32][DEBUG] : Receive from:192.168.1.106 cmd:a - {"dps":{"2":true,"103":100,"104":false},"cid":"842e14fffee35087"}     cid|842e14fffee35087 2|1 103|100 104|  - Read Json OK

Ici, le bouton off a été sélectionné sur le périphérique et on observe que le dps de n° 2 a changé.
	
	[2023-06-22 06:19:36][DEBUG] : Receive from:192.168.1.106 cmd:a - {"dps":{"2":false,"103":100,"104":false},"cid":"842e14fffee35087"}     cid|842e14fffee35087 2| 103|100 104|  - Read Json OK


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

	[2023-06-22 06:20:32][DEBUG] : Receive from:192.168.1.106 cmd:a - {"dps":dps:{"1":"up","101":true},"cid":"842e14fffee35087"}     cid|842e14fffee35087 1|up 101|1 - Read Json OK
	
Ici, le bouton up a été sélectionné sur le périphérique et on observe que le dps de n° 1 a changé.
	
	[2023-06-22 06:20:36][DEBUG] : Receive from:192.168.1.106 cmd:a - {"dps":dps:{"1":"down","101":true},"cid":"842e14fffee35087"}     cid|842e14fffee35087 1|down 101|1 - Read Json OK

Ici, le bouton down a été sélectionné sur le périphérique et on observe que le dps de n° 1 a changé.

	[2023-06-22 06:20:38][DEBUG] : Receive from:192.168.1.106 cmd:a - {"dps":dps:{"1":"stop","101":true},"cid":"842e14fffee35087"}     cid|842e14fffee35087 1|stop 101|1 - Read Json OK

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

	[2023-06-22 06:25:32][DEBUG] : Receive from:192.168.1.106 cmd:a - {dps:{"3":850,"101":true},"cid":"842e14fffee35087"}     cid|842e14fffee35087 3|850 101|1 - Read Json OK

Ici, un curseur d'intensité a été sélectionné sur l'application du périphérique et on observe que le dps de n° 3 a changé.

Cliquer sur le bouton Curseur de l'interface afin de créer automatiquement les 2 commandes pour gérer le curseur. Pour les adapter au besoin, il suffit de modifier les n° de dps et de mettre 3 (sans guillemets). Pour le paramètre de la commande action : soit ne rien mettre, soit mettre #slider# soit mettre une formule par exemple : #slider#/10. Pour le paramètre de l'info, c'est identique mais il faut utiliser #value#. Ne pas mettre de guillemets car il n'y en a pas après le n° de dps.

Pour configurer manuellement :
	
-   Créer une nouvelle commande action/curseur dans les commandes du périphérique :
    *    Dans la colonne interface mettre Intensité comme nom du curseur
	*    Dans la colonne nom interne et n° de commande, mettre comme Id unique : _Intensite, comme n° de dps : 3 (sans les doubles guillemets) et comme paramètre : #slider# (ici la valeur numérique n'est pas entourée de guillemets, il ne faut donc pas les mettre).
-   Créer une nouvelle commande info/autre dans les commandes du périphérique :
    *    Dans la colonne interface mettre IntensiteGet comme nom de l'info
	*    Dans la colonne nom interne et n° de commande, mettre comme Id unique : _IntensiteGet, comme n° de dps : 3 (sans les doubles guillemets) et rien dans paramètres.


### Dans le cas d'un capteur numérique, comme un capteur de température :
	
Dans les logs, lors de l'utilisation de l'appli Smartlife, on trouve :

	[2023-06-22 06:30:32][DEBUG] : Receive from:192.168.1.106 cmd:a - {dps:{"8":23,"101":true},"cid":"842e14fffee35087"}     cid|842e14fffee35087 8|23 101|1 - Read Json OK
	
Ici, c'est une température qui est envoyée régulièrement et on observe que le dps de n° 8 a changé.

Cliquer sur le bouton Info Num de l'interface afin de créer automatiquement la commande pour récupérer la température. Pour les adapter au besoin, il suffit de modifier le n° de dps, ici 8 (sans parenthèse). Pour le paramètre de l'info, soit ne rien mettre, soit mettre #value# soit mettre une formule par exemple : #value#/10 . Ne pas mettre de guillemets car il n'y en a pas après le n° de dps.

Pour configurer manuellement :
	
-   Créer une nouvelle commande info/autre dans les commandes du périphérique :
    *    Dans la colonne interface mettre TempGet comme nom de l'info
	*    Dans la colonne nom interne et n° de commande, mettre comme Id unique : _TempGet, comme n° de dps : 8 (sans les doubles guillemets) et rien dans paramètres.
	

### Dans le cas d'un capteur tout ou rien, comme un détecteur de porte :

Dans les logs, lors de l'utilisation de l'appli Smartlife, on trouve :

	[2023-06-22 06:40:32][DEBUG] : Receive from:192.168.1.106 cmd:a - {dps:{"12":1},"cid":"842e14fffee35087"}     cid|842e14fffee35087 12|1 - Read Json OK
	[2023-06-22 06:40:40][DEBUG] : Receive from:192.168.1.106 cmd:a - {dps:{"12":0},"cid":"842e14fffee35087"}     cid|842e14fffee35087 12|0 - Read Json OK
	
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

1 - format HSV : H (codé de 0 à 360) S (codé de 0 à 1000) V (codé de 0 à 1000) le résultat est ensuite donné en base 16, soit 12 digits hexadécimaux. Exemple pour du rouge : RGB = FF0000 et H= 0° S=100% V=100% soit en codage Tuya : 000003E803E8 (Hue = 0000 S =03E8 V=03E8)

2 - format RGB00HSV : RGB est codé sur 6 digits (chacun de 00 à FF pour chaque couleur). 00 est intercalé puis H (codé de 0 à 255) S (codé de 0 à 255) V (codé de 0 à 255). Le résultat est donné en base 16, soit 14 digits hexadécimaux. Exemple pour du rouge : RGB = FF0000 et H= 0° S=100% V=100% soit en codage Tuya : FF00000000FFFF

3 - format RGB0HSV : RGB sont codés comme ci-dessus. 0 est intercalé puis H (codé de 0 à 360) S (codé de 0 à 100) V (codé de 0 à 100). Le résultat est donné en base 16, soit 14 digits hexadécimaux. Exemple pour du violet : RGB = FF00FF et H= 300° S=100% V=100% soit en codage Tuya : FF0000012C6464

Dans les logs, lors de l'utilisation de la modification de la couleur de la lampe, on trouve :

	[2023-06-22 06:45:40][DEBUG] : Receive from:192.168.1.106 cmd:a - {"dps":{"1":true,"27":true,"28":"white","29":254,"31":"08ff0000766464","32":"cf38000168ffff","33":"ffff500100ff00"},"cid":"842e14fffee35087"}     cid|842e14fffee35087 1|1 27|1 28|white 29|254 31|08ff0000766464 32|cf38000168ffff 33|ffff500100ff00  - Read Json OK
	
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
2. le périphérique a été inclus dans le plugin via inclusion Tuya
3. l'adresse IP est correcte, pour le firmware, il faut les essayer un par un et vérifier que le plugin se connecte au périphérique
4. dans le cas d'un périphérique Tuya/Zigbee, sa passerelle a été incluse dans l'appli Smartlife et le périphérique doit aussi avoir été inclus
5. le périphérique et son éventuelle passerelle n'ont pas été supprimés de l'appli Smartlife et l'appli Smartlife n'a pas été supprimée
6. l'appli Smartlife est arrêtée sur tous les terminaux pouvant la faire tourner
7. configurer les logs wifilightV2 en mode debug, redémarrer le démon

## Vérifier que le périphérique est trouvé et connecté

1. désactiver dans wifilightV2 tous les périphériques sauf celui à tester (ne garder qu'un seul canal en cas de périphérique multi-canaux) (dans le cas d'un périphérique connecté à une passerelle, la passerelle doit rester activée), le but est de ne pas mélanger tous les périphériques
2. effacer les logs
3. sauvegarder le périphérique dans le plugin : cela a pour effet de lancer le démon qui teste toutes les minutes les périphériques wifilightV2

Exemple de log OK où le plugin a trouvé le périphérique donc avec la bonne adresse IP :

    [2023-06-22 06:19:28][DEBUG] : ** v5 SY1-ZigBee Smart Metering Switch 2 - TuyaCustom2_V4 @192.168.1.137 - cha:29 **
    [2023-06-22 06:19:28][DEBUG] :       Socket already created ADD New device OK
    [2023-06-22 06:19:28][DEBUG] : ** Conso Climatisation - TuyaCustom_V2 @192.168.1.135 - cha:1 **
    [2023-06-22 06:19:28][DEBUG] :      New device: created ADD New device OK
	
Exemple de log KO où le plugin n'a pas trouvé le périphérique car une mauvaise adresse IP

    [2023-06-22 06:19:28][DEBUG] : ** Air Conditioner - TuyaCustom_V2 @192.168.1.133 - cha:1 **
    [2023-06-22 06:19:28][DEBUG] :      No connected device

Par la suite les messages seront du type :

    [2023-06-22 06:18:38][DEBUG] : << Ping of: v5 SY1-ZigBee Smart Metering Switch 2 @192.168.1.137  diff:13
    [2023-06-22 06:18:38][DEBUG] : Receive from:192.168.1.137 cmd:9 - Empty response


A ce stade, l'adresse IP est la bonne, le périphérique est joignable et le firmware est correct.


## Un souci avec une commande action (les autres fonctionnent)

1. Vérifier les 4 points ci-dessus
2. Désactiver tous les périphériques wifilightV2 sauf celui à tester (ne garder qu'un canal pour les multicanaux) (laisser la passerelle Tuya/Zigbee active pour un périphérique Zigbee) et effacer les logs pour plus de clarté.
3. Attendre que le démon passe (il interroge les périphériques toutes les 30s le message commence par : >>>>>>>> Search for) 
4. Attendre 10s après le message contenant >>>>>>>>>>> End <<<<<<<<<<<< (fin de l'interrogation des périphériques par le démon).
5. Activer la commande du plugin qui dysfonctionne 2 fois avec 5s d'intervalle
6. Stopper les logs et les sauvegarder.
7. Envoyer les logs sur le forum (avec la config du périphérique et l'action qui a été faite)


## Trouver de l'aide sur le forum

Afin d'obtenir de l'aide rapide et de qualité, il est nécessaire de bien préparer sa question. Donner les éléments, les logs de chaque étape suivante avec votre démarche et le diagnostic :
1. copie d'écran de la configuration du périphérique
2. réaliser les tests et configuration préalable (voir paragraphe ci-dessus)
3. vérifier que le périphérique est trouvé et connecté, donner les logs si KO (voir paragraphe ci-dessus)

Si une étape est KO, ce n'est pas la peine de tester les suivantes. Si vous ne comprenez pas ce que vous faites, les aidants du forum ne pourront pas le savoir pour vous. Il est rappelé au tout début de la doc du plugin qu'utiliser des périphériques Tuya en local nécessite de savoir suivre à la lettre une procédure et d'avoir quelques notions en informatique.

[Retour à la documentation générale](./index.md)



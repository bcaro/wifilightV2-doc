# Präsentation

Dieses Plugin kann viele LED-Streifen oder LED-Lampen oder elektrische Stecker verwalten, die über eine mit dem Produkt gelieferte WLAN-Box mit einer Funkfrequenz von 2,4 GHz gesteuert werden.


![Milight](../images/wifilightV2_screenshot01.png) ![Tuya](../images/wifilightV2_screenshot03.png) ![Plafonnier](../images/wifilightV2_screenshot05.png) ![Prise](../images/wifilightV2_screenshot07.png) 

![Sonoff](../images/wifilightV2_screenshot02.png) ![MagicHome](../images/wifilightV2_screenshot04.png)

# Kompatibilität und Einschränkungen

## Kompatible Produkte

Es gibt viele Produkte, die mit dem Plugin kompatibel sind, aber sehr unterschiedliche Marken oder Marken.

Kompatible Produkte:
-   Mi.Light / EasyBulb / LimitlessLED-Lampen, die an die unten aufgeführten Steuerungen angeschlossen sind: keine Rückmeldung!
-   LED-Leiste Mi.Light / EasyBulb / LimitlessLED an die unten stehenden Steuerungen angeschlossen: keine Rückmeldung!
-   LED-Controller Mi.Light / EasyBulb / LimitlessLED V3.0 bis V5.0 (der Miboxer ist nicht kompatibel): keine Rückmeldung!
-   Mi.Light / EasyBulb / LimitlessLED LED-Controller V6.0 / iBox1 / iBox2: Kein Feedback!
-   Weiß und Farbe Xiaomi Yeelight WiFi-Lampen mit Status-Feedback!
-   Strip-LED WiFi Xiaomi Yeelight Farbe mit Status-Feedback!
-   Xiaomi Yeelight WiFi Deckenleuchte mit Statusrückmeldung!
-   WiFi Desktop-Lampe Xiaomi Mijia mit Status-Feedback!
-   Sonoff Basic R3 im DIY-Modus mit Statusrückmeldung !!
-   Nanoleaf Aurora mit Status-Feedback!

Produkte, die möglicherweise kompatibel und nicht garantiert sind:
-   LW12 / Lagute: RGB-Streifen-LED-Controller: Statusrückmeldung!
-   Wifi 320/370 RGB / RGBW Streifen-LED-Controller: Teilstatus-Rückmeldung!
-   Magic UFO: RGBW-Controller mit LED-Streifen, verwaltet Weiß!
-   MagicHome: RGBW / RGBWW-LED-Controller und RGBW-Lampen / Spots, die mit der MagicHome-App kompatibel sind!
-   H801: RGBW-Streifen-LED-Controller, keine Statusrückmeldung !!
-   Arilux AL-C01 / 02/03/04/06/10: RGB / RGBW / RGBWW-Streifen-LED-Controller, Statusrückmeldung!
-   TP-Link LB100 / 110/120/130: Leuchtmittel mit Statusrückmeldung!
-   Extel Meli Lampe mit Statusrückmeldung!
-   Xiaomi Philips: Schreibtischlampe, Birne und Deckenlampe mit Statusrückmeldung !!!
-   Lampen, Steckdosen, Schalter, Verschlussschalter, Luftbefeuchter, Thermostat kompatibel mit Tuya Smart Live oder Jinvoo Smart oder eFamilyCloud Apps mit Status-Feedback !!!
-   TP-Link HS100 HS110 Steckdosen mit Statusrückmeldung !!
-   Magic Home kompatible Pixel Strip Controller mit Statusrückmeldung!
-   Von der Ewelink-App gesteuerte Peripheriegeräte, einschließlich Sonoffs im LAN-Modus mit Statusrückmeldung !!!

Für diese Steuerungen, Lampen oder Fassungen kommt das Austauschprotokoll nicht direkt vom Hersteller, der es daher jederzeit ändern kann. Auf dem Markt gibt es mehrere Versionen, die nicht alle mit dem Plugin kompatibel sind.

Bitte beachten Sie:
- ! : Einfache Integration für eine Person, die die Dokumentation liest, bevor sie handelt
- !! : zusätzlich zu !, muss ein bestimmtes Verfahren befolgt werden, das an eine Person angepasst ist, die versteht, dass ein Verfahren gewissenhaft befolgt werden muss
- !!! : zusätzlich zu !! erfordert grundlegende Computerkenntnisse und ist an die Recherche im Internet für einen bestimmten Zweck gewöhnt

Inkompatible und nicht kompatible Produkte:
-   Die Mi.light MiBoxer Bridge (außer ON / OFF der Box)
-   LED Milight Controller (Typ YL etc.) ohne Brücke.
-   Lampen, Sockel oder LED-Streifen-Controller, die anstelle eines 2,4-GHz- oder WiFi-Funkempfängers einen Bluetooth-Empfänger enthalten.
-   Die LED-Streifen- oder Lampen-Controller und die Lampen oder Fassungen, die eine Punkt-zu-Punkt-WiFi-Verbindung mit der mobilen Anwendung verwenden.
-   Die Xiaomi Nachttischlampe ist nicht kompatibel (von der Konstruktion her).

## Kompatibilitätstest

Auf Anfrage kann ein Test-Plugin für nicht validierte Produkte bereitgestellt werden.

Es ist ratsam, im Forum nachzufragen, ob ein nicht weit verbreitetes Produkt kompatibel ist.

Gehen Sie zum Jeedom-Forum [hier] (https://community.jeedom.com/t/plugin-wifilightv2-discussion-generale/2439)


# Begrenztheit

Mi.Light / EasyBulb / LimitlessLED:
-   Alle Funktionalitäten werden vom Plugin berücksichtigt.
-   MiBoxer Bridge ist nicht kompatibel

LW12 / Lagute:
-   Das Programmieren von benutzerdefinierten Modi ist nicht möglich, Sie müssen die mit dem Controller gelieferte Anwendung (Magic Home) verwenden. Andererseits können benutzerdefinierte Modi mit dem Plugin ausgelöst werden.
-   Es gibt verschiedene Versionen von LW12, die möglicherweise nicht mit dem Plugin kompatibel sind.

Magic UFO, MagicHome und Arilux AL-C01 / 02/03/04/06/10:
-   Das Programmieren von benutzerdefinierten Modi, Radiomodus und Timern wird nicht unterstützt. Sie müssen die mit dem Controller gelieferte Anwendung (Magic Home) verwenden. Andererseits können benutzerdefinierte Modi mit dem Plugin ausgelöst werden.
-   Es gibt verschiedene Modelle, die möglicherweise nicht mit dem Plugin kompatibel sind.

Xiaomi Yeelight:
-   HSV-Befehle werden nicht verwaltet. Flow und Szene werden erstellt, indem Befehle mit dem JSON-Code erstellt werden, der dem gewünschten Effekt entspricht (siehe die YeeLight-API-Dokumentation).
-   Die Xiaomi Nachttischlampe ist nicht kompatibel.
-   Die Xiaomi Mijia Schreibtischlampe ist teilweise kompatibel (keine vollständige Statusrückmeldung).

Wifi 320/370:
-   Die Statusrückmeldung für den Szenenmodus wird nicht verwaltet, sondern nur EIN / AUS.
-   Es gibt verschiedene Modelle, die möglicherweise nicht mit dem Plugin kompatibel sind.

H810:
-   Bühnenspiele werden nicht gemanagt.
-   Es gibt verschiedene Modelle, die möglicherweise nicht mit dem Plugin kompatibel sind.

TP-Link:
-   Die Timer werden nicht verwaltet.
-   Die Informationen zum Stromverbrauch werden für die Lampen nicht verwaltet.

Extel Meli:
-   Der Tonanteil der Lampe wird nicht berücksichtigt

Xiaomi Philips:
-   Alle Eigenschaften werden berücksichtigt

Magic Home kompatible Pixel Strip Controller:
-   benutzerdefinierte Szenen werden nicht verwaltet.

Kompatible Geräte Tuya Smart / Jinvoo / eFamilyCloud:
-   Alle Befehle von validierten Geräten (siehe Forum) der Firmware 1.0 und der Firmware 2.0 sind kompatibel (insbesondere die Neo CoolCam-Sockets).

Sonoff DIY:
-   Basic R3 mit Firmware 3.3.0-Peripheriegeräten mit einem einzigen Kontakt.

Ewelink und Sonoff LAN:
-   Geräte mit Firmware 3.0.1 (Liste unten im eWelink-Absatz)

Nanoleaf AUrora:
-   Rhythmus nicht implementiert

# WiFi Modul Konfiguration

## Installieren Sie Peripheriegeräte

Laden Sie die mobile Anwendung des Herstellers herunter und befolgen Sie die Anweisungen, um das Gerät mit Ihrem Handy zu steuern. Für jedes wifilightV2-Gerät finden Sie auf der Konfigurationsseite eine ausführliche Hilfe.

Solange das Gerät nicht mit der mobilen Anwendung gesteuert wird, funktioniert das Plugin nicht.

Konsultieren Sie die Hilfe und Foren des Geräteherstellers.


## Konfigurieren Sie den Router
Sie müssen das DHCP Ihres Routers (in der Regel von Ihrem Zugangsanbieter bereitgestellt) so konfigurieren, dass die Zuordnung der IP-Adresse des WLAN-Moduls oder der Glühbirne oder der Fassung statisch ist. Notieren Sie diese Adresse. Im Allgemeinen hat es die Form: 192.168.1.xxx wobei xxx der Adresse des WLAN-Moduls entspricht (2 bis 254)

Konsultieren Sie die Foren Ihrer Box, um zu erfahren, wie Sie DHCP konfigurieren.

Überprüfen Sie nach dieser Änderung, ob die mobile Anwendung das Gerät noch steuert.

Sie können dann mit der Konfiguration des wifilightV2-Plugins fortfahren.

## Plugin Installation und Konfiguration

wifilightV2 erstellt kein Gerät automatisch, Sie müssen es im Plugin erstellen, bevor Sie es konfigurieren können.

Hilfe:
-   Verwenden Sie das Fragezeichensymbol, um Hilfe zu den einzelnen Konfigurationselementen zu erhalten.

Konfiguration:
-   Um ein Gerät zu konfigurieren, wählen Sie das Menü Plugins / Kommunikationsobjekte / wifilightV2.
-   Klicken Sie dann oben links auf die Schaltfläche WLAN-Modul hinzufügen
-   Geben Sie den Namen des WLAN-Moduls ein
-   Übergeordnetes Objekt eingeben
-   Wählen Sie die Kategorie Licht (Standard)
-   Aktivieren und sichtbar machen (Standard)
-   Geben Sie die IP-Adresse des WLAN-Steckers oder des Lampenmoduls ein (weitere Erläuterungen finden Sie in den häufig gestellten Fragen).
-   Für einige Peripheriegeräte ist es erforderlich, den verwendeten Kanal einzugeben und ein wifilightV2-Gerät pro Kanal zu erstellen
-   Bei einigen Geräten werden Sie aufgefordert, ein Token oder (und) eine Kennung einzugeben. Weitere Informationen finden Sie in der Hilfe auf der Gerätekonfigurationsseite
-   Bei einigen Geräten ist es möglich, die Statusrückmeldung zu unterdrücken, wenn es zu Mikroschnitten kommt
-   Bei einigen Controllern muss die Anzahl der LEDs der Pixelstreifen-LEDs angegeben werden
-   Bei einigen Controllern muss die Reihenfolge der Farben angegeben werden, wenn die Standardfarben nicht übereinstimmen
-   Geben Sie die Marke oder den Gerätetyp ein
-   Geben Sie den genauen Untertyp des Controllers, der Glühlampe, der Fassung oder der LED-Leiste ein. Dies ist wichtig, um die Befehle für die Steuerung des Geräts zu erstellen
-   Geben Sie die Anzahl der gesendeten Bestellungen ein: Damit können Sie die Bestellung für entfernte Geräte im Falle einer schlechten Übertragung wiederholen. (1 standardmäßig). Einige Lampen oder Fassungen schaffen diese Wiederholung nicht, da das Plugin durch Rückgabe den Sendestatus sicherstellt. Einige relative Befehle (Inkremente) werden nicht wiederholt.
-   Geben Sie die Sendeverzögerung im Wiederholungsfall ein (standardmäßig 0 ms, max. 100 ms)
-   Geben Sie den prozentualen Intensitätsanstieg ein, wenn Sie die Tasten zum Erhöhen oder Verringern der Lichtintensität drücken
-   Geben Sie die Gruppennummer für die Synchronisation ein, siehe unten

## Befehle hinzufügen
Beim Speichern des Moduls werden Aufträge automatisch angelegt.

Der Name der Befehle kann geändert werden. Die automatisch erstellten und gelöschten Aufträge werden während eines Backups neu erstellt.

Wenn alle Befehle erstellt wurden, können sie die Benutzeroberfläche belasten. Sie können nicht angezeigt werden, indem Sie die Erstellung der Befehle konfigurieren.

## Ändern des Gerätetyps oder Untertyps

-   Alle Bestellungen löschen
-   Gerätetyp oder Untertyp ändern
-   2 mal sparen

# Statusrückmeldung und Verbindungsstatusbetrieb

## Kompatibilität der Statusrückmeldung

Die Statusrückmeldung erfolgt sofort für die folgenden Geräte:
- Yeelight
- kompatibel mit ewelink
- Kompatibel mit der Tuya Smart Live App
- Sonoff im LAN-Modus

Wenn zum Beispiel ein Schalter gedrückt wird, weiß Jeedom es sofort.

Für Peripheriegeräte:
 - LW12 / Lagute
 - Magisches UFO / Zuhause
 - Arilux
 - Wifi 3x0 (teilweise)
 - TP-Link
 - Xiaomi Philips
 - Extel Meli
 - Sonoff im DIY-Modus
 - Nanoleaf Aurora

Das Plugin fragt das Gerät regelmäßig nach seinem Status ab. Die Verzögerung, mit der Jeedom den Status erkennt, kann 1 Minute überschreiten.

Für andere Geräte gibt es keine Statusrückmeldung.

## Update nach Szenario

Die Befehle xxxxGet und State können in einem Jeedom-Szenario verwendet werden.

## Verbindungsinformationen

Mit dem Befehl ConnectedGet können Sie den Verbindungsstatus jedes Geräts abrufen. Es wird jede Minute aktualisiert.
-  -1: Gerät mit Status Return OK
-  -2: Die Verbindung zum Gerät kann nicht hergestellt werden
-  -3: Gerät nicht angeschlossen
-  -4: Keine Antwort vom Gerät
-  -5: falsche Antwort vom Gerät
-  -6: Gerät ohne Statusrückmeldung

# Wie funktioniert die Synchronisation?

## Prinzip der Synchronisation

Es ist möglich, mehrere Geräte verschiedener Marken zu synchronisieren:

Alle Geräte mit derselben Gruppennummer werden synchronisiert

Gruppe 0 ist nicht synchronisiert (Standardgruppe)

Wenn Sie einen Befehl von einem Gerät in der Gruppe verwenden, wird derselbe Befehl auf alle Geräte in derselben Gruppe angewendet

Wenn der Befehl für das synchronisierte Gerät nicht vorhanden ist, wird er einfach ignoriert.

Achtung, die Peripheriegeräte werden aufgrund der Latenzzeiten beim Versand der nacheinander ausgeführten Bestellungen nicht exakt zur gleichen Zeit bestellt.

## Synchronisierungskonfiguration

Geben Sie bei der Konfiguration des Geräts einfach eine andere Zahl als Null in das Gruppenfeld ein. Alle Geräte mit den gleichen Nummern werden synchronisiert.

# Sonderfall von Mi.Light-Boxen

## Konfiguration von iBox 1 oder 2

Seit Version 1.0.58 von iBox 1 und 2 muss die Konfiguration möglicherweise geändert werden, damit sie mit Jeedom kommunizieren können.

Stellen Sie über http (mit einem Webbrowser) eine Verbindung zur IP-Adresse Ihrer iBox her. Die Standardanmeldeinformationen sind admin / admin. Gehen Sie zur Registerkarte &quot;Other Setting&quot; und wählen Sie unter &quot;Network Parameters setting / Protocol&quot; UDP und speichern Sie.

# Sonderfall von Xiaomi Yeelight

## Glühlampenkonfiguration
Die lokale Netzwerksteuerung muss unbedingt über die Xiaomi Yeelight-App aktiviert werden.

## Xiaomi Yeelight Szenenmodus
Szenenmodi können konfiguriert werden. Im Plugin sind mehrere Szenenmodi vorprogrammiert, es können jedoch auch andere Szenenmodi hinzugefügt werden.

Es reicht aus, bestimmte Bedingungen zu beachten:
-   Fügen Sie eine wifilightV2-Aktion vom Typ Standard hinzu
-   Gib ihm einen Namen (zum Beispiel Scene Flashes)
-   Geben Sie als Parameter den Yeelight-Szenenbefehl ein, zum Beispiel: &quot;id&quot;: 1, &quot;method&quot;: &quot;set_scene&quot;, &quot;params&quot;: [&quot;cf&quot;, 0,0, &quot;500,1,255,100,1000,1,16776960, 70 „]

Platzieren Sie nicht die Anfangs- und Endklammern sowie die Zeilenumbrüche, das Plugin fügt sie automatisch hinzu. Lassen Sie sich von den vorkonfigurierten Befehlen inspirieren, um diese zusätzlichen Szenenmodi zu erstellen. Informationen zur Yeelight-Syntax finden Sie [hier] (https://www.yeelight.com/download/Yeelight_Inter-Operation_Spec.pdf).

## Statusaktualisierung in Jeedom
Beim Aktivieren des Plugins und sobald der Daemon sowie jede Minute gestartet wird, sucht das Plugin nach Glühbirnen, die mit Strom versorgt und mit Jeedom verbunden sind.

Sobald die Glühbirne gefunden wurde, wird der Zustand der Glühbirne sofort an das Plugin zurückgegeben.

Beachten Sie, dass das Plug-in bis zu 1 Minute benötigt, um eine Glühbirne zu finden, und 4 Minuten, um festzustellen, dass ein Gerät nicht angeschlossen ist.

# Sonderfall von TP-Link Geräten

## Glühlampenkonfiguration

Seit Mitte 2019 gibt es neue Geräte mit dem Protokoll Version 2. Für das V2-Protokoll muss ein Token wiederhergestellt werden, mit dem das Plugin mit TP-Link-Geräten kommunizieren kann.

Um dieses Token zu erhalten, müssen Sie die Frames erfassen, die zwischen der Kasa-App auf dem Telefon und dem Gerät ausgetauscht werden, das im Plugin hinzugefügt werden soll. Auf Android muss Packet Capture verwendet werden.

Das Plugin ermöglicht es Ihnen dann, den Token zu extrahieren. Sie müssen den abgerufenen Frame in das Feld Parameter des Befehls getKey kopieren und diesen Befehl ausführen. Wenn der Frame decodierbar ist, wird der Token in den Protokollen und in der Mitteilungszentrale angezeigt (Achtung: Löschen Sie die Mitteilung jedes Mal nach dem Lesen).

Der Rahmen, der in &quot;Parameter&quot; eingefügt werden soll, muss das folgende Aussehen haben (die ... ersetzen andere Werte):

00 00 00 5f d0 f2 91 fe 90 e4 81 f9 8d af 95 ... 99 bb 81 fa 87 fa 87

Die Daten sind durch Leerzeichen getrennt und stellen Hexadezimalzahlen dar, die direkt aus Packet Capture stammen. Im Allgemeinen beginnt der Frame mit 3 Nullen, hier gibt 5f die Größe des Frames in hexadezimaler oder 95 in dezimaler Form an.

Es wird keine Hilfe zur Wiederherstellung des Frames von Packet Capure gegeben.

Im Moment können nur die Fassungen in V2 verwendet werden. Wenden Sie sich an den Autor, wenn Sie Lampen in V2 haben.

# Sonderfall von Xiaomi Philips

## Glühlampenkonfiguration

Es ist wichtig, ein Token abzurufen, mit dem das Plugin mit Xiaomi Philips-Geräten kommunizieren kann.

Das Verfahren ist komplex und erfordert mehrere Manipulationen. Führen Sie eine Websuche mit dem Schlüsselwort: Xiaomi Token durch.

Es wird keine Hilfe zum Abrufen des Tokens gegeben.

# Sonderfall von Sonoff im DIY-Modus

## DIY Modus Konfiguration

Sonoff bietet alle Elemente [hier] (https://github.com/itead/Sonoff_Devices_DIY_Tools/tree/master/tool), um die Module im DIY-Modus zu konfigurieren.

Ein Mobiltelefon und ein Windows-PC mit WLAN-Karte sind erforderlich. Die Software, die ausgeführt werden muss, um den Sonoff zu finden, gibt in der linken Spalte die Kennung an, die für die Konfiguration des Geräts erforderlich ist.

Das Sonoff-Gerät muss über Firmware 3.3.0 oder höher verfügen. Mit der obigen Windows-App können Sie die Firmware aktualisieren.

# Sonderfall von Geräten, die mit der Ewelink-Anwendung im LAN-Modus kompatibel sind

## APiKey und DeviceID abrufen

Befolgen Sie die Anweisungen [hier] (https://blog.ipsumdomus.com/sonoff-switch-complete-hack-without-firmware-upgrade-1b2d6632c01), um diese beiden Informationen abzurufen. Die Geräte-ID ist in die Plugin-Kennung einzutragen. Der Apikey ist in den Spielstein zu legen. Setzen Sie keine Leerzeichen oder Anführungszeichen.

Das Gerät muss sich in Firmware 3.0.1 oder höher befinden. Die Ewelink-App wird zum Aktualisieren der Firmware verwendet.

## Verbindungsinformationen

Wenn ein Gerät eine Verbindung zum WLAN herstellt, wird das Plugin sofort benachrichtigt. Wenn andererseits ein Gerät getrennt wird, weiß das Plugin nur, ob das Plugin einen Befehl an es sendet.

## Kompatibilität

Viele Marken sind kompatibel, einschließlich Sonoff.
-  Schalter, Steckdosen, Schalter: Einfach aller Marken
-  Schalter, Steckdosen, Schalter: Vielfache aller Marken
-  2 Arten von Lampen (testen Sie die 2 Arten)
-  Sonoff TH10 / 1H16 Temperatursensor
-  Sonoff Basic, RF, POW, Mini
-  Sonoff Dual
-  Sonoff 4CH / 4CH PRO
-  Sonoff Touch
-  Sonoff S20 / S26
-  Sonoff T1 / TX
-  Sonoff SLAMPHER
-  Sonoff T4EUC1
-  Sonoff RF Bridge 433 nur für Sensoren (Tür, Präsenzmelder, Fernbedienung)

Für Mehrkanal-Peripheriegeräte (wie das Sonoff 4CH) müssen Sie so viele wifilightV2-Geräte erstellen, wie Kanäle vorhanden sind. Eine Kopie der ersten, einfach zu erkennenden Geräte. Anschließend müssen Sie die Kanalnummer ändern.

Für die in dieser Liste nicht vorhandenen Geräte (z. B. Sonoff Ifan, Dimmer) oder wenn die Konfiguration nicht funktioniert und nach der Integration des Geräts in Jeedom (z. B. mit der Sonoff-Basiskonfiguration) in den Protokollen suchen:

Empfangen nach Decodierung: {...............}

und geben Sie im [forum] (https://community.jeedom.com/t/plugin-wifilightv2-sonoff-ewelink-lan/2632) den Inhalt der geschweiften Klammern an, um die Integration des Moduls in das Plugin zu ermöglichen.

# Sonderfall für mit Tuya Smart / Jinvoo / eFamilyCloud-Apps kompatible Geräte

## Kompatibilität

Viele Marken sind mit dem Plugin kompatibel. Konsultieren Sie das Forum für weitere Informationen. Das Plugin ermöglicht die Steuerung vieler Aktoren. Es kann den Status der Peripheriegeräte abrufen, sobald es Statusänderungsinformationen sendet oder wenn es sie jede Minute abfragt. Wenn ein Wandschalter verwendet wird, weiß Jeedom sofort Bescheid.

Das folgende Gerät ist mit Firmware 1.0 kompatibel. und in Firmware 2.0.

-  einfache steckdosen mit und ohne rücknahme bei verbrauch, insbesondere die neo coolcam wifi steckdosen
-  Mehrfachsteckdosen mit und ohne Verbrauch mit und ohne USB
-  Rollladensteuerung
-  wandschalter: 1, 2 oder 3 kreuzungen
-  Wandschalter mit Dimmer
-  NEWKBO Luftbefeuchter 300 ml und nur dieser
-  Thermostat BHT-6000GCLW / BHT 6000 und nur diese Modelle
-  RGBW-Glühlampen und ähnliche Modelle in Betrieb

Die Kompatibilität dieser Geräte kann jedoch nicht garantiert werden, da das Protokoll vom Hersteller geändert werden kann.

Bei mehrkanaligen Geräten (z. B. Mehrfachsteckdosen) müssen Sie so viele wifilightV2-Geräte erstellen, wie Kanäle vorhanden sind. Dabei handelt es sich um eine Kopie der ersten, einfach zu erkennenden Geräte. Anschließend müssen Sie die Kanalnummer ändern.

Präsenz- und Öffnungssensoren sind nicht kompatibel, da sie lokal nicht interagieren.

Das Plugin testet die Geräte (diese müssen jedoch manuell hinzugefügt werden) und zeigt eine Meldung im Message Center an, wenn ein Gerät mit der falschen Firmware konfiguriert wurde.


## Gerätekonfiguration

Es ist wichtig, einen lokalen Schlüssel (LocalKey) und eine Kennung abzurufen, damit das Plugin mit den Geräten kommunizieren kann.

Das Verfahren ist komplex und erfordert mehrere Manipulationen. Führen Sie eine Suche im Web mit dem Schlüsselwort: Tuya localkey, insbesondere in Github oder im Jeedom-Forum durch.

Das Gerät darf nicht mit einer Mobiltelefonanwendung verbunden sein, da es sonst nicht auf Bestellungen von Jeedom reagiert. Es ist daher erforderlich, alle Anwendungen zu schließen, die möglicherweise mit dem Gerät verbunden sind.

Wenn das Gerät deinstalliert und anschließend in der mobilen App erneut installiert wird, wird der Schlüssel geändert. Sie müssen den Schlüssel mit dem obigen Verfahren finden.

Es wird keine Hilfe zur Wiederherstellung des Schlüssels oder der Kennung gegeben.

Jede Konfigurationsänderung erfordert einen Neustart des Daemons.

## Konfiguration der Verwertung des Fangverbrauchs

Laut den Marken wird der Verbrauch vom Stecker nicht auf einzigartige Weise gesendet. Um diese Konfiguration wiederherzustellen, installieren Sie das Plugin in Jeedom und behalten Sie die Statusrückmeldung in der Konfiguration bei. Gehen Sie dann zu den Protokollen von wifilightV2. Der Socket wird jede Minute abgefragt. Suchen Sie die Nachricht, die wie folgt aussieht:

return decodiert: {&quot;devId&quot;: &quot;xxxxxxxxx&quot;, &quot;dps&quot;: {&quot;1&quot;: false, &quot;2&quot;: false, &quot;9&quot;: 0, &quot;10&quot;: 0, &quot;18&quot;: 0, &quot;19&quot; : 0, &quot;20&quot;: 2281, &quot;21&quot;: 1 &quot;22&quot;: 726 &quot;23&quot;: 28971, &quot;24&quot;: 19417, &quot;25&quot;: 1070}}

Der Index &quot;20&quot; entspricht hier der Versorgungsspannung in Hunderten von mV, dh: 228,1 V sollten sich geringfügig bewegen. Die Indizes &quot;18&quot; und &quot;19&quot; entsprechen dem Strom (mA) und der Leistung in W, hier ist kein Gerät angeschlossen und daher ist die Information Null. Es ist eine gute Möglichkeit, die Spannung zu ermitteln, indem Sie ein Gerät anschließen. Diese beiden Werte müssen geändert werden, und die Spannung ist gleich danach.

Die Syntax lautet dann: 20; 18; 19 und muss im Feld &#39;Energieeinstellung&#39; eingegeben werden.

Für Stecker 1 ist im Allgemeinen Folgendes erforderlich: 6; 4; 5 (standardmäßig vom Plugin festgelegt).

Für Stecker mit 2 Buchsen benötigen Sie im Allgemeinen: 9; 7; 8 (standardmäßig vom Plugin festgelegt).

Für die anderen Buchsen ist standardmäßig der Wert 20; 18; 19 eingestellt.

## Auftragsanpassung

Angesichts der Vielzahl von Tuya-kompatiblen Geräten müssen möglicherweise benutzerdefinierte Befehle erstellt werden.

Erstellen Sie einen neuen Aktions- / Standardbefehl. Geben Sie einen identischen Namen und eine identische ID ein und geben Sie den Befehl Tuya in die Parameter ein. Lass dps leer. Tuya-Befehle sind im JSON-Format und enthalten dps: {xxxxxx}. Dies ist das xxxxxx, das Sie in Parameter eingeben müssen.

Beispiele:

Um bestimmte Rollläden anzuheben: xxxxxx hat den Wert &quot;1&quot;: &quot;1&quot;, der in den Parametern eingegeben werden soll (verwenden Sie die doppelten Anführungszeichen von Taste 3).

Um den Stecker Nr. 2 bestimmter Stecker einzuschalten: xxxxxx hat den Wert &quot;2&quot;: true, der in den Parametern eingestellt werden soll (verwenden Sie die doppelten Anführungszeichen von Taste 3).

Zum Ausschalten von Stecker Nr. 1 und Stecker Nr. 2 bestimmter Stecker: xxxxxx hat den Wert &quot;1&quot;: false, &quot;2&quot;: false, der in den Parametern eingestellt werden soll (verwenden Sie die doppelten Anführungszeichen von Taste 3).

Der folgende Absatz enthält Elemente zur Interpretation der wifilightV2-Protokolle.
-   Beachten Sie, dass das Gerät seinen Status zurückgeben muss.
-   In vielen Fällen wird kein Status zurückgegeben, wenn die standardmäßig hinzugefügten Befehle die dps nicht wiederherstellen. In diesem Fall können Sie die Statusrückmeldung abrufen, indem Sie einen benutzerdefinierten Befehl hinzufügen, indem Sie die dps wie im folgenden Absatz angegeben angeben.
-   Es ist daher möglich, benutzerdefinierte Befehle durch Angabe der dps (nächster Absatz) oder ohne Angabe der dps zu mischen.

## Benutzerdefiniertes Gerät

Es ist möglich, ein vollständig benutzerdefiniertes Gerät zu erstellen. Im Gegensatz zu benutzerdefinierten Befehlen verfügt ein benutzerdefiniertes Gerät über keine vordefinierten Befehle, und für jeden Befehl muss alles konfiguriert werden. Das Verfahren erfordert, dass das Gerät seinen Status in die Protokolle zurückgibt, da sonst keine Erleichterung eintritt.

### Konfiguration
-   Deaktivieren Sie alle wifilightV2-Geräte mit Ausnahme des zu testenden
-   das Gerät richtig konfigurieren (statische IP-Adresse, LocalKey, Id)
-   Überprüfen Sie, ob der Dämon ausgeführt wird, wenn er nicht gestartet wird
-   Konfigurieren Sie die wifilightV2-Protokolle im Debug-Modus
-   Protokolle löschen

### Informationsbeschaffung
-   Drücken Sie eine Taste am Gerät (Ein, Aus, Auf, Ab usw.) oder warten Sie, bis das Gerät seinen Status zurückgibt, oder drücken Sie eine Taste in der Smart Live-App (in letzterer kann es jedoch Statusrückmeldungen verhindern) )
-   Suchen Sie in den Protokollen die Passage, die so aussieht:

        Receive after decode :{devId:50701244cc50e37e9aff,dps:{"1":"off","101":true}}
        [2019-10-13 09:15:30][DEBUG] :       >>> : devId | 50701244cc50e37e9aff : 50701244cc50e37e9aff
        [2019-10-13 09:15:30][DEBUG] :       >>> : dps | Array : Array
        [2019-10-13 09:15:30][DEBUG] :       >>>>>>>>>>> : 1 | stop : stop
        [2019-10-13 09:15:30][DEBUG] :       >>>>>>>>>>> : 101 | 1 : 1

    Hier wurde der Aus-Schalter am Gerät ausgewählt und wir stellen fest, dass sich der dps 1 geändert hat.

        Receive after decode :{devId:50701244cc50e37e9aff,dps:{"1":"on","101":true}}
        [2019-10-13 09:15:30][DEBUG] :       >>> : devId | 50701244cc50e37e9aff : 50701244cc50e37e9aff
        [2019-10-13 09:15:30][DEBUG] :       >>> : dps | Array : Array
        [2019-10-13 09:15:30][DEBUG] :       >>>>>>>>>>> : 1 | stop : stop
        [2019-10-13 09:15:30][DEBUG] :       >>>>>>>>>>> : 101 | 1 : 1

    Hier wurde die Einschalttaste am Gerät ausgewählt und wir stellen fest, dass sich der dps 1 geändert hat.

-   Erstellen Sie einen neuen Aktions- / Standardbefehl in den Gerätebefehlen:
    *    In der Interface-Spalte setzen Sie als Name des Buttons ON
    *    Geben Sie in der Spalte interner Name und Bestellnummer als eindeutige ID: ON, als dps: 1 (ohne doppelte Anführungszeichen) und als Parameter: &quot;on&quot; (wenn die nicht von Anführungszeichen umgeben ist, müssen sie angegeben werden off).
-   Erstellen Sie einen neuen Aktions- / Standardbefehl in den Gerätebefehlen:
    *    In der Interface-Spalte als Name der Schaltfläche OFF setzen
    *    Geben Sie im internen Namen und in der Best. Nr. Spalte als eindeutige ID: OFF, als dps: 1 (ohne doppelte Anführungszeichen) und als Parameter: &quot;off&quot; (wenn das off nicht von Anführungszeichen umgeben ist, müssen diese angegeben werden off).
-   Erstellen Sie einen neuen info / other-Befehl in den Gerätebefehlen:
    *    Tragen Sie in der Interface-Spalte STATUS als Namen der Info ein
    *    Geben Sie in die Spalte mit dem internen Namen und der Bestellnummer die eindeutige ID STATUS als dps: 1 (ohne Anführungszeichen) und nichts in den Parametern ein.

    Bei digitalen Informationen:

        Receive after decode :{devId:50701244cc50e37e9aff,dps:{"3":850,"101":true}}
        [2019-10-13 09:15:30][DEBUG] :       >>> : devId | 50701244cc50e37e9aff : 50701244cc50e37e9aff
        [2019-10-13 09:15:30][DEBUG] :       >>> : dps | Array : Array
        [2019-10-13 09:15:30][DEBUG] :       >>>>>>>>>>> : 3 | 850 : 850
        [2019-10-13 09:15:30][DEBUG] :       >>>>>>>>>>> : 101 | 1 : 1

    Hier wurde ein Intensitätsregler für die Anwendung des Geräts ausgewählt und wir stellen fest, dass sich der dps 3 geändert hat.

-   Erstellen Sie einen neuen Aktions- / Cursorbefehl in den Gerätebefehlen:
    *    In der Interface-Spalte geben Sie Intensität als Cursornamen ein
    *    Geben Sie in der Spalte Interner Name und Bestellnummer als eindeutige ID: Intensität, als dps: 3 (ohne doppelte Anführungszeichen) und als Parameter: # Schieberegler # (hier ist der numerische Wert nicht in Anführungszeichen eingeschlossen, nicht in Anführungszeichen) ein also nicht setzen).
-   Erstellen Sie einen neuen info / other-Befehl in den Gerätebefehlen:
    *    In der Interface-Spalte geben Sie IntensiteGet als Namen der Info ein
    *    Geben Sie in die Spalte Interner Name und Bestellnummer als eindeutige ID: IntensiteGet, als dps: 3 (ohne doppelte Anführungszeichen) und nichts in den Parametern ein.

Anmerkungen:
-   nichts in den Protokollen: falsche IP-Adresse oder Gerät, das seinen Status nicht zurückgibt
-   Rückgabe mit Fehler: ID falsch
-   return nicht decodiert: falscher localkey
-   Der Befehl funktioniert nicht: Überprüfen Sie den Befehl
-   Um die Farbe einer Lampe zu ändern, ist die Schiebertechnik nicht möglich. Es müssen mehrere Tasten mit vordefinierten Farben programmiert werden

## Statusaktualisierung in Jeedom
Wenn Sie das Plugin aktivieren und sobald der Daemon gestartet wird, sowie jede Minute, sucht das Plugin nach Geräten, die mit Strom versorgt werden und mit Jeedom verbunden sind.

Sobald das Gerät gefunden wurde, wird der Gerätestatus sofort an das Plugin zurückgegeben.

Beachten Sie, dass das Plug-in bis zu 1 Minute dauern kann, bis festgestellt wird, dass ein Gerät verbunden oder getrennt ist.

# Sonderfall von Nanoleaf


## Schlüsselwiederherstellung

Drücken Sie den Ein- / Ausschalter am Nanoleaf für 5-7 s und drücken Sie den Befehl getKey am Plugin. Überprüfen Sie, ob der Apikey im Feld &quot;Token&quot; der Plugin-Konfiguration platziert wurde.


## Verwenden benutzerdefinierter Effekte

Erstellen Sie einen Effekt mit der NanoLeaf-App und geben Sie ihm einen Namen. Erstellen Sie einen Aktions- / Standardbefehl in der Liste der Gerätebefehle im Plugin. Geben Sie den Namen in die Parameter ein. Geben Sie dann eine eindeutige Kennung und einen Namen an, die mit dem Namen der Bestellung identisch sein können.


# FAQ


## Welche Geräte können verwendet werden?

Lesen Sie die Dokumentation

## Es passiert nichts

Bedienen Sie das Gerät zunächst mit der vom Hersteller bereitgestellten mobilen Anwendung.

Verwenden Sie die Taste <tester> im Menü Plugin / Verbundene Objekte / wifilightV2 / Befehle.

Es wird keine Hilfe gegeben, ohne dass die Peripheriegeräte mit der Anwendung des Herstellers auf einem Mobiltelefon betriebsbereit sind. Es ist erforderlich, dem Gerät eine feste IP-Adresse zuzuweisen.


## Ich kann meine Internetbox nicht konfigurieren

Es wird keine Hilfe zu der Box und den Konzepten gegeben, die zur Konfiguration des Routers für die Zuweisung einer festen IP-Adresse erforderlich sind. Konsultieren Sie die Box-Foren.

## Beim Ändern des Gerätemodells werden nicht alle Befehle erstellt

2 mal speichern.

## Es ist nicht praktisch, die Intensität von weißen Mi.Light / EasyBulb / LimitlessLED-Lampen zu steuern

Der Hersteller der LEDs hat nicht vorgehabt, die Intensität der Glühlampe direkt beeinflussen zu können. Wir können nur im Vergleich zum vorherigen Wert inkrementieren oder dekrementieren. Das Plugin reproduziert nur diesen Vorgang. Der vorgeschlagene Cursor ist folglich launisch.

## Das Farbintensitätsmanagement weist manchmal unerwartetes Verhalten auf

Kein Protokoll verwaltet die Intensität der Farbe, obwohl dies in der Regel bei mobilen Anwendungen der Fall ist. Solange Jeedom Farbe und Intensität verwaltet, ist alles in Ordnung. Wenn die Intensität jedoch durch eine mobile Anwendung geändert wird, stimmen die Ergebnisse nicht immer mit den erwarteten Ergebnissen überein. Das Plugin versucht, das Problem zu beheben, wenn die Lampe oder der Controller eine Statusrückmeldung erhalten.

## Gibt es eine Statusrückmeldung?

Lesen Sie die Dokumentation

## Xiaomi Yeelight-Lampen können nicht betrieben werden

Es ist wichtig, den Steuermodus über das lokale Netzwerk über die Xiaomi Yeelight-Anwendung zu aktivieren.

## Ich kann den Klang von Extel Meli-Glühbirnen nicht steuern

Der Sound wird nicht vom Plugin verwaltet

## Xiaomi Philips-Lampen können nicht betrieben werden

Für die Kommunikation mit Xiaomi Philips-Lampen ist es erforderlich, ein Token oder einen Token in englischer Sprache zu senden. Ohne diesen Token berücksichtigt die Glühbirne die an sie gesendeten Bestellungen nicht. Dieses Token befindet sich in der Mi-Home-App. Abhängig von Ihrem Telefon gibt es verschiedene Methoden, um das Token abzurufen. Das Verfahren ist an mehreren Stellen beschrieben, wird hier jedoch aus zwei Hauptgründen nicht wiedergegeben:

-   Xiaomi hat bereits sein Protokoll geändert, wodurch das Verfahren zur Wiederherstellung des Tokens geändert werden musste. Dies ist jedoch weiterhin möglich.
-   Internetnutzern können neue und einfachere Verfahren zur Verfügung gestellt werden.
-   Diese Dokumentation wird nicht so schnell gepflegt wie eine einfache Websuche mit den Schlüsselwörtern: xiaomi token.

## Mit Tuya / Smart Live / Jinvoo / eFamilyCloud-Apps kompatible Geräte können nicht bedient werden

Um mit diesen Lampen, Fassungen und anderen Peripheriegeräten zu kommunizieren, ist es erforderlich, einen lokalen oder lokalen Schlüssel oder einen Token-Schlüssel in Englisch und eine Kennung zu senden. Ohne diese Parameter berücksichtigt die Lampe die an sie gesendeten Bestellungen nicht. Es gibt verschiedene Methoden, um diese Informationen abzurufen. Das Verfahren ist an mehreren Stellen beschrieben, wird hier jedoch aus zwei Hauptgründen nicht wiedergegeben:

-   Die Anwendungen wurden aktualisiert, was uns dazu zwang, das Verfahren zum Abrufen der Informationen zu ändern.
-   Internetnutzern können neue und einfachere Verfahren zur Verfügung gestellt werden.
-   Diese Dokumentation wird nicht so schnell wie eine einfache Websuche mit den Schlüsselwörtern: Tuya LocalKey und insbesondere auf Github gepflegt.

## Fehler beim Senden des Befehls / Zahnrad ohne Stopp / Senden ohne Stopp
-   wifilightV2-Geräte müssen aktualisiert werden
-   Gehe zu jedem Gerät und spare 2 mal
-   Testen Sie mit einem neuen Gerät, ob es bestehen bleibt

## Mi.Light IBox1, iBox2, V6 Bridge: Befehl wird zufällig berücksichtigt
-   Bestellungen werden zu schnell versendet
-   Legen Sie in den Szenarien ausreichend lange Pausen ein

## Mi.Light IBox1, iBox2, V6 Bridge: Befehl nicht berücksichtigt
-   Wählen Sie beim Koppeln mit der Mi.Light-Anwendung auf Mobilgeräten und beim Konfigurieren von wifilightV2 dieselbe Fernbedienung.

## LW12 Magic UFO Arilux Wifi3x0 H801 Kompatible Steuerungen Magic Home Tuya / Jinvoo / eFamilyCloud
-   Es gibt viele Versionen und einige sind möglicherweise nicht mit dem Plugin kompatibel. Kontaktieren Sie den Autor für ein mögliches Update.

## Befehle fehlen beim Erstellen oder Ändern des Lampentyps
-   Rette die Ausrüstung (2 Mal)


# Wie bekomme ich Hilfe?


Gehen Sie zum Jeedom-Forum [hier] (https://community.jeedom.com/t/plugin-wifilightv2-sonoff-ewelink-lan/2632)

# Bekannte Fehler

Der Speicher nimmt drastisch ab
-   Fehler behoben.

Bei Tuya-kompatiblen Buchsen treten regelmäßig Mikroschnitte auf
-   Fehler behoben.
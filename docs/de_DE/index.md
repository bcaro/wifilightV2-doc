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

Produkte, die kompatibel und ungesichert sein können:
-   LW12 / Lagute: RGB-Streifen-LED-Controller: Hintergrundzustand!
-   Wifi 320/370 RGB / RGBW-Streifen-LED-Controller: Teilstatus-Rückkehr!
-   Magic UFO: RGBW-Streifen-LED-Controller, kümmert sich um das Weiß!
-   MagicHome: RGBW / RGBWW-LED-Controller und RGBW-kompatible Lampen / Spots mit der MagicHome-App!
-   H801: RGBW-Streifen-LED-Controller, kein Rückgabestatus !!
-   Arilux AL-C01 / 02/03/04/06/10: RGB / RGBW / RGBWW-Streifen-LED-Controller, Rückmeldung!
-   TP-Link LB100 / 110/120/130: Leuchtmittel mit Statusrückmeldung!
-   Extel Meli Lampe mit Statusrückmeldung!
-   Xiaomi Philips: Schreibtischlampe, Lampe und Decke mit Status-Feedback!
-   Lampen, Steckdosen, Schalter, Klappenschalter, Luftbefeuchter, Thermostat-kompatible Tuya Smart Live- oder Jinvoo Smart- oder eFamilyCloud-Apps mit Feedback!
-   TP-Link HS100 HS110 Steckdosen mit Statusrückmeldung !!
-   Magic Home kompatible LED Pixel Strip Controller mit Statusrückmeldung!
-   Von der Ewelink-App gesteuerte Geräte, einschließlich Sonoff im LAN-Modus mit Statusrückmeldung !!!

Für diese Steuerungen, Lampen oder Fassungen kommt das Austauschprotokoll nicht direkt vom Hersteller, der es jederzeit ändern kann. Auf dem Markt gibt es mehrere Versionen, die nicht alle mit dem Plugin kompatibel sind.

Achtung:
- ! : Einfache Integration für jemanden, der die Literatur liest, bevor er handelt
- !! : zusätzlich zu !, muss ein bestimmtes Verfahren befolgt werden, das an eine Person angepasst ist, die versteht, dass ein Verfahren genauestens befolgt werden muss
- !!! : zusätzlich zu !! erfordert grundlegende Computerkenntnisse und ist es gewohnt, das Internet für einen bestimmten Zweck zu erforschen

Inkompatible Produkte und wer wird nicht:
-   Die Mi.light MiBoxer Bridge (außer ON / OFF Box)
-   Controllers Led Milight (Typ YL etc.) ohne Brücke.
-   Die LED-Lampen, Sockel oder Controller, die einen Bluetooth-Empfänger anstelle eines 2,4-GHz-Funkempfängers oder WLAN enthalten.
-   Die LED-Strip-Controller oder Lampen und Lampen oder Sockel, die eine Punkt-zu-Punkt-WiFi-Verbindung mit der mobilen Anwendung verwenden.
-   Die Xiaomi Nachttischlampe ist nicht kompatibel (von der Konstruktion her).

## Kompatibilitätstest

Auf Anfrage kann ein Test-Plugin für nicht validierte Produkte bereitgestellt werden.

Es ist ratsam, im Forum nachzufragen, um die Kompatibilität eines wenig verbreiteten Produkts zu erfahren.

Gehen Sie zu Jeedoms Forum [hier] (https://community.jeedom.com/t/plugin-wifilightv2-discussion-generale/2439)


# Begrenztheit

Mi.Light / EasyBulb / LimitlessLED:
-   Alle Funktionen werden vom Plugin berücksichtigt.
-   Die MiBoxer Bridge ist nicht kompatibel

LW12 / Lagute:
-   Das Programmieren von benutzerdefinierten Modi ist nicht möglich, es ist erforderlich, die mit dem Controller gelieferte Anwendung (Magic Home) zu verwenden. Andererseits können benutzerdefinierte Modi mit dem Plugin ausgelöst werden.
-   Es gibt verschiedene Versionen von LW12, die möglicherweise nicht mit dem Plugin kompatibel sind.

Magic UFO, MagicHome und Arilux AL-C01 / 02/03/04/06/10:
-   Benutzerdefinierte Programmierung, Radiomodus und Timer werden nicht unterstützt. Sie müssen die mit dem Controller gelieferte Anwendung (Magic Home) verwenden. Andererseits können benutzerdefinierte Modi mit dem Plugin ausgelöst werden.
-   Es gibt verschiedene Modelle, die möglicherweise nicht mit dem Plugin kompatibel sind.

Xiaomi Yeelight:
-   HSV-Befehle werden nicht unterstützt. Flow und Szene werden erstellt, indem Befehle mit dem JSON-Code erstellt werden, der dem gewünschten Effekt entspricht (siehe die YeeLight-API-Dokumentation).
-   Die Xiaomi Nachttischlampe ist nicht kompatibel.
-   Die Xiaomi Mijia Schreibtischlampe ist teilweise kompatibel (keine vollständige Statusrückmeldung).

Wifi 320/370:
-   Der Status der Motivprogramme wird nicht verwaltet, sondern nur EIN / AUS.
-   Es gibt verschiedene Modelle, die möglicherweise nicht mit dem Plugin kompatibel sind.

H810:
-   Bühnenspiele werden nicht verwaltet.
-   Es gibt verschiedene Modelle, die möglicherweise nicht mit dem Plugin kompatibel sind.

TP-Link:
-   Timer werden nicht verwaltet.
-   Informationen zum Stromverbrauch werden für Glühbirnen nicht unterstützt.

Extel Meli:
-   Der Tonanteil der Lampe wird nicht berücksichtigt

Xiaomi Philips:
-   Alle Eigenschaften werden berücksichtigt

Magic Home-kompatible LED-Controller mit Pixelstreifen:
-   benutzerdefinierte Szenen werden nicht unterstützt.

Kompatible Geräte Tuya Smart / Jinvoo / eFamilyCloud:
-   Alle Befehle für validierte Geräte (siehe Forum) von Firmware 1.0 und Firmware 2.0 sind kompatibel (insbesondere die Neo CoolCam-Sockets).

Sonoff DIY:
-   Basic R3 mit Firmware 3.3.0 Geräte mit einem einzigen Kontakt.

Ewelink und Sonoff LAN:
-   Geräte mit Firmware 3.0.1 (Liste unten im Abschnitt eWelink)

# WiFi Modul Konfiguration

## Geräte installieren

Laden Sie die mobile Anwendung vom Hersteller herunter und befolgen Sie die Anweisungen, um das Gerät mit dem Mobiltelefon zu steuern. Für jedes wifilightV2-Gerät finden Sie auf der Konfigurationsseite eine ausführliche Hilfe.

Solange das Gerät nicht mit der mobilen Anwendung gesteuert wird, funktioniert das Plugin nicht.

Informationen zum Geräte-Builder finden Sie in der Hilfe und in den Foren.


## Konfigurieren Sie den Router
Es ist erforderlich, das DHCP Ihres Routers (in der Regel von Ihrem Dienstanbieter bereitgestellt) so zu konfigurieren, dass die Zuweisung der IP-Adresse des Moduls wifi oder der Glühbirne oder des Verschlusses statisch ist. Bewerten Sie diese Adresse. Im Allgemeinen hat es die Form: 192.168.1.xxx wobei xxx die Adresse des WLAN-Moduls ist (2 bis 254)

Überprüfen Sie die Foren in Ihrem Feld, um zu erfahren, wie Sie DHCP konfigurieren.

Stellen Sie nach dieser Änderung sicher, dass die mobile App das Gerät weiterhin steuert.

Sie können dann zur Konfiguration des wifilightV2-Plugins wechseln.

## Plugin Installation und Konfiguration

wifilightV2 erstellt keine Geräte automatisch, Sie müssen sie im Plugin erstellen, bevor Sie sie einrichten.

Hilfe:
-   Verwenden Sie das Fragezeichensymbol, um Hilfe zu den einzelnen Konfigurationselementen zu erhalten.

Einstellung:
-   Um ein Gerät einzurichten, wählen Sie das Menü Plugins / Kommunikationsobjekte / wifilightV2
-   Klicken Sie dann auf die Schaltfläche oben links. Fügen Sie ein WLAN-Modul hinzu
-   Geben Sie den Namen des WLAN-Moduls ein
-   Geben Sie das übergeordnete Objekt ein
-   Wählen Sie die Kategorie Licht (Standard)
-   Aktivieren und sichtbar machen (Standard)
-   Geben Sie die IP-Adresse des Moduls der WiFi-Buchse oder der Glühbirne ein (weitere Informationen finden Sie in den FAQ).
-   Bei einigen Geräten ist es erforderlich, den verwendeten Kanal einzugeben, und ein Gerät wifilightV2 pro Kanal zu erstellen
-   Bei einigen Geräten muss ein Token oder (und) eine Kennung eingegeben werden (siehe Hilfe auf der Gerätekonfigurationsseite)
-   Bei einigen Geräten ist es möglich, die Rückkopplung zu unterdrücken, wenn es zu Mikroschnitten kommt
-   Bei einigen Controllern muss die Anzahl der LEDs der Pixelstreifen-LEDs angegeben werden
-   Bei einigen Controllern muss die Reihenfolge der Farben angegeben werden, wenn die Farben standardmäßig nicht übereinstimmen
-   Geben Sie die Marke oder den Gerätetyp ein
-   Geben Sie den genauen Untertyp des Controllers, der Glühlampe, des Steckers oder der LED ein. Dies ist wichtig, um die Befehle zur Steuerung des Geräts zu erstellen
-   Anzahl der gesendeten Befehle eingeben: Mit dieser Option können Sie den Befehl für ein entferntes Gerät wiederholen, wenn die Übertragung fehlerhaft ist. (1 standardmäßig). Einige Glühbirnen oder Stecker schaffen diese Wiederholung nicht, da das Plugin durch Rückkehr den Zustand des Getriebes sicherstellt. Einige relative Befehle (Inkremente) werden nicht wiederholt.
-   Geben Sie die Sendeverzögerung im Wiederholungsfall ein (Standard: 0 ms, max. 100 ms)
-   Geben Sie das Intensitätsinkrement% ein, wenn Sie die Tasten zum Erhöhen oder Verringern der Lichtintensität drücken
-   Geben Sie die Gruppennummer für die Synchronisation ein, siehe unten

## Befehle hinzufügen
Beim Speichern des Moduls werden die Befehle automatisch erstellt.

Der Name der Befehle kann geändert werden. Die automatisch erstellten und gelöschten Befehle werden während einer Sicherung neu erstellt.

Wenn alle Befehle erstellt wurden, können sie die Benutzeroberfläche belasten. Sie können nicht angezeigt werden, indem Sie die Erstellung der Befehle konfigurieren.

## Ändern des Gerätetyps oder Untertyps

-   Alle Bestellungen entfernen
-   Gerätetyp oder Untertyp ändern
-   2 mal sparen

# Funktionsweise von Statusrückmeldung und Verbindungsstatus

## Vereinbarkeit der staatlichen Rückkehr

Die Statusrückmeldung erfolgt sofort für die folgenden Geräte:
- Yeelight
- kompatibel mit ewelink
- kompatibel mit der Live Tuya Smart App
- Sonoff im LAN-Modus

Wenn beispielsweise ein Schalter betätigt wird, weiß Jeedom es sofort.

Für Geräte:
 - LW12 / Lagute
 - Magisches UFO / Zuhause
 - Arilux
 - Wifi 3x0 (teilweise)
 - TP-Link
 - Xiaomi Philips
 - Extel Meli
 - Sonoff im DIY-Modus

Das Plugin fragt das Gerät regelmäßig nach seinem Status ab. Die Verzögerung, mit der Jeedom den Status erkennt, kann 1 Minute überschreiten.

Für andere Geräte gibt es keine Statusrückmeldung.

## Update nach Szenario

Die Befehle xxxxGet und Status können in einem Jeedom-Szenario verwendet werden.

## Verbindungsinformationen

Der ConnectedGet-Befehl ruft den Verbindungsstatus jedes Geräts ab. Es wird jede Minute aktualisiert.
-  -1: Gerät mit Statusrückmeldung OK
-  -2: Geräteverbindung kann nicht hergestellt werden
-  -3: Gerät nicht angeschlossen
-  -4: Keine Antwort vom Gerät
-  -5: falsche Geräteantwort
-  -6: Gerät ohne Statusrückgabe

# Wie funktioniert die Synchronisation?

## Prinzip der Synchronisation

Es ist möglich, mehrere Geräte verschiedener Marken zu synchronisieren:

Alle Geräte mit derselben Gruppennummer werden synchronisiert

Gruppe 0 ist nicht synchronisiert (Standardgruppe)

Wenn Sie einen Befehl von einem Gerät in der Gruppe verwenden, wird derselbe Befehl auf alle Geräte in derselben Gruppe angewendet

Wenn der Befehl für das synchronisierte Gerät nicht vorhanden ist, wird er einfach ignoriert.

Achtung, die Geräte werden aufgrund der Latenz nicht exakt zur gleichen Zeit bestellt, wenn Bestellungen nacheinander gesendet werden.

## Synchronisierungskonfiguration

Geben Sie bei der Konfiguration des Geräts einfach eine andere Null in das Gruppenfeld ein. Alle Geräte mit den gleichen Nummern werden synchronisiert.

# Sonderfall Mi.Light-Boxen

## IBox 1 oder 2 konfigurieren

Seit Version 1.0.58 von iBox 1 und 2 muss die Konfiguration möglicherweise geändert werden, damit sie mit Jeedom interagieren können.

Stellen Sie mit einem Webbrowser eine Verbindung zu http mit der IP-Adresse Ihrer iBox her. Die Standardanmeldeinformationen sind admin / admin. Gehen Sie zur Registerkarte &quot;Other Setting&quot; und wählen Sie unter &quot;Network Parameters setting / Protocol&quot; UDP und speichern Sie.

# Sonderfall von Xiaomi Yeelight

## Glühlampenkonfiguration
Die LAN-Steuerung muss unbedingt über die Xiaomi Yeelight-Anwendung aktiviert werden.

## Xiaomi Yeelight Szenenmodus
Es ist möglich, die Motivprogramme zu konfigurieren. Im Plugin sind mehrere Szenenmodi vorprogrammiert, es können jedoch auch andere Szenenmodi hinzugefügt werden.

Es genügt, bestimmte Bedingungen einzuhalten:
-   Fügen Sie einen wifilightV2-Aktionsbefehl vom Typ Standard hinzu
-   Gib ihm einen Namen (zB Scene Blink)
-   Geben Sie als Parameter den Szenenbefehl Yeelight ein, zum Beispiel: &quot;id&quot;: 1, &quot;method&quot;: &quot;set_scene&quot;, &quot;params&quot;: [&quot;cf&quot;, 0,0, &quot;500,1,255,100,1000,1,16776960, 70 „]

Platzieren Sie nicht die Anfangs- und Endklammern sowie die Zeilenumbruchzeichen, das Plugin fügt sie automatisch hinzu. Inspirieren Sie vorkonfigurierte Befehle, um diese zusätzlichen Szenenmodi zu erstellen.

## Status in Jeedom aktualisieren
Wenn Sie das Plugin aktivieren und sobald der Daemon gestartet wird, sucht das Plugin jede Minute nach den Lampen, die mit Strom versorgt und mit Jeedom verbunden sind.

Sobald die Glühbirne gefunden wurde, wird der Zustand der Glühbirne sofort wieder mit dem Plugin verbunden.

Beachten Sie, dass das Plug-in bis zu 1 Minute dauern kann, um eine Glühbirne zu finden, und 4 Minuten, um festzustellen, dass ein Gerät nicht angeschlossen ist.

# Sonderfall von TP-Link Geräten

## Glühlampenkonfiguration

Seit Mitte 2019 sind neue Geräte in Protokollversion 2 verfügbar. Für das V2-Protokoll muss ein Token (Token) wiederhergestellt werden, damit das Plugin mit den TP-Link-Geräten interagieren kann.

Um dieses Token zu erhalten, müssen die zwischen der Kasa-App auf dem Telefon und dem Gerät ausgetauschten Frames erfasst werden, die im Plugin hinzugefügt werden sollen. In Android müssen Sie Packet Capture verwenden.

Das Plugin ermöglicht dann das Extrahieren des Tokens. Sie müssen den abgerufenen Frame in das Feld GetKey Command Parameters kopieren und diesen Befehl ausführen. Wenn der Frame decodierbar ist, wird das Token in den Protokollen und in der Mitteilungszentrale angezeigt (Achtung: Löschen Sie die Mitteilung jedes Mal nach dem Lesen).

Der Frame, der in &quot;Parameter&quot; eingefügt werden soll, muss die folgende Geschwindigkeit haben (... andere Werte ersetzen):

00 00 00 5f d0 f2 91 fe 90 e4 81 f9 8d af 95 ... 99 bb 81 fa 87 fa 87

Die Daten sind durch Leerzeichen getrennt und stellen Hexadezimalzahlen dar, die direkt aus Packet Capture stammen. Im Allgemeinen beginnt der Frame mit 3 Nullen, und hier gibt 5f die Größe des Frames hexadezimal oder 95 dezimal an.

Es wird keine Hilfe zur Wiederherstellung des Frames von Packet Capure gegeben.

Im Moment sind nur die Stecker in V2 verwendbar, um den Autor zu kontaktieren, wenn Sie Lampen in V2 haben.

# Sonderfall von Philips Xiaomi

## Glühlampenkonfiguration

Ein Token muss unbedingt wiederhergestellt werden, damit das Plugin mit Philips Xiaomi-Geräten interagieren kann.

Das Verfahren ist komplex und erfordert mehrere Manipulationen. Führen Sie eine Suche im Web mit dem folgenden Schlüsselwort durch: Xiaomi-Token.

Es wird keine Hilfe zur Wiederherstellung des Tokens gegeben.

# Sonderfall von Sonoff im DIY-Modus

## DIY-Modus einrichten

Sonoff bietet alle Elemente [hier] (https://github.com/itead/Sonoff_Devices_DIY_Tools/tree/master/tool), um die Module im DIY-Modus zu konfigurieren.

Ein Mobiltelefon und ein Windows-PC mit WLAN-Karte sind erforderlich. Die Software, die ausgeführt werden muss, um den Sonoff zu finden, gibt in der linken Spalte die zur Konfiguration des Geräts erforderliche Kennung an.

Das Sonoff-Gerät muss Firmware 3.3.0 oder höher sein. Die oben genannte Windows-Anwendung ermöglicht das Aktualisieren der Firmware.

# Sonderfall von Geräten, die mit der Ewelink-Anwendung im LAN-Modus kompatibel sind

## APiKey und DeviceID werden abgerufen

Befolgen Sie die Anweisungen [hier] (https://blog.ipsumdomus.com/sonoff-switch-complete-hack-without-firmware-upgrade-1b2d6632c01), um diese beiden Informationen abzurufen. Die Geräte-ID ist in die Kennung des Plugins einzutragen. Der Apikey ist in den Token zu setzen. Sie dürfen keine Leerzeichen oder Anführungszeichen setzen.

Das Gerät muss Firmware 3.0.1 oder höher sein, die Ewelink-App ermöglicht das Aktualisieren der Firmware.

## Verbindungsinformationen

Wenn ein Gerät eine Verbindung zum WLAN herstellt, wird das Plugin sofort benachrichtigt. Wenn andererseits ein Gerät getrennt wird, kann das Plugin nur wissen, ob ein Befehl vom Plugin gesendet wurde.

## Kompatibilität

Viele Marken sind kompatibel, einschließlich Sonoff.
-  Schalter, Steckdosen, Schalter: Einfach aller Marken
-  Schalter, Steckdosen, Schalter: Vielfaches aller Marken
-  2 Arten von Lampen (beide Arten testen)
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

Bei Mehrkanalgeräten (wie dem Sonoff 4CH) müssen Sie so viele wifilightV2-Geräte erstellen, wie Kanäle vorhanden sind. Dies ist eine Kopie der ersten erstellten einfachen Aufgabe. Anschließend müssen Sie die Kanalnummer ändern.

Für Geräte, die in dieser Liste nicht enthalten sind (z. B. Sonoff Ifan, Dimmer) oder wenn die Konfiguration nicht funktioniert und nach der Integration des Geräts in Jeedom (z. B. mit der Sonoff-Basiskonfiguration) in den Protokollen suchen:

Empfangen nach Decodierung: {...............}

und geben Sie im [forum] (https://community.jeedom.com/t/plugin-wifilightv2-sonoff-ewelink-lan/2632) den Inhalt der geschweiften Klammern an, um die Integration des Moduls in das Plugin zu ermöglichen.

# Sonderfall kompatibler Geräte Tuya Smart / Jinvoo / eFamilyCloud-Apps

## Kompatibilität

Viele Marken sind mit dem Plugin kompatibel. Konsultieren Sie das Forum für weitere Informationen. Das Plugin kann viele Aktoren steuern. Es kann den Status von Geräten abrufen, sobald es Statusänderungsinformationen sendet oder wenn es sie jede Minute abfragt. Wenn ein Wandschalter verwendet wird, weiß Jeedom dies sofort.

Die folgenden Geräte sind mit Firmware 1.0 kompatibel. und in Firmware 2.0.

-  einfache stecker mit und ohne verbrauchsrendite, insbesondere neo coolcam wifi steckdosen
-  Mehrere Steckdosen mit und ohne Stromverbrauch mit und ohne USB
-  Rollladensteuerung
-  wandschalter: 1, 2 oder 3 kreuzungen
-  Wandschalter mit Dimmer
-  Luftbefeuchter NEWKBO 300 ml und nur dieser
-  Thermostat BHT-6000GCLW / BHT 6000 und nur diese Modelle
-  RGBW-Glühlampen und ähnliche Modelle in Betrieb

Trotzdem kann die Kompatibilität dieser Geräte nicht garantiert werden, da das Protokoll vom Hersteller geändert werden kann.

Bei mehrkanaligen Geräten (z. B. Mehrfachsteckdosen) müssen Sie so viele wifilight V2-Geräte erstellen, wie Sie kanalisieren können. Dies ist eine Kopie der ersten erstellten einfachen Aufgabe. Anschließend müssen Sie die Kanalnummer ändern.

Präsenz- und Öffnungssensoren sind nicht kompatibel, da sie nicht lokal kommunizieren.

Das Plugin testet die Geräte (diese müssen jedoch manuell hinzugefügt werden) und zeigt eine Meldung im Message Center an, wenn ein Gerät mit der falschen Firmware konfiguriert wurde.


## Gerätekonfiguration

Es ist wichtig, einen lokalen Schlüssel (LocalKey) und eine Kennung wiederherzustellen, damit das Plugin mit den Geräten interagieren kann.

Das Verfahren ist komplex und erfordert mehrere Manipulationen. Suchen Sie im Web nach dem Stichwort: Tuya localkey, insbesondere bei Github oder im Forum Jeedom.

Das Gerät darf nicht mit einer Mobiltelefonanwendung verbunden sein, da es sonst nicht auf Bestellungen von Jeedom reagiert. Es ist daher erforderlich, alle Anwendungen zu schließen, die möglicherweise mit dem Gerät verbunden sind.

Wenn das Gerät in der mobilen App deinstalliert und erneut installiert wird, wird der Schlüssel geändert. Es ist notwendig, den Schlüssel mit der obigen Prozedur zu finden.

Es wird keine Hilfe zur Wiederherstellung des Schlüssels oder der Kennung gegeben.

Jede Konfigurationsänderung erfordert einen Neustart des Daemons.

## Wiederherstellung des Socket-Verbrauchs konfigurieren

Laut Marken wird der Verbrauch nicht ausschließlich über die Verkaufsstelle versandt. Um diese Einstellung abzurufen, installieren Sie das Plug-in in Jeedom und behalten Sie den Status in der Konfiguration bei. Wechseln Sie dann zu den Protokollen von wifilightV2. Der Fang wird jede Minute abgefragt. Finde die Nachricht, die so aussieht:

return decodiert: {&quot;devId&quot;: &quot;xxxxxxxxx&quot;, &quot;dps&quot;: {&quot;1&quot;: false, &quot;2&quot;: false, &quot;9&quot;: 0, &quot;10&quot;: 0, &quot;18&quot;: 0, &quot;19&quot; : 0, &quot;20&quot;: 2281, &quot;21&quot;: 1 &quot;22&quot;: 726 &quot;23&quot;: 28971, &quot;24&quot;: 19417, &quot;25&quot;: 1070}}

Der Index &quot;20&quot; entspricht hier der Versorgungsspannung in den hundert mV oder 228,1 V, sie muss sich geringfügig bewegen. Die Indizes &quot;18&quot; und &quot;19&quot; entsprechen dem Strom (mA) und der Leistung in W, hier ist kein Gerät angeschlossen und daher die Information auf Null. Dies ist ein guter Weg, um die Spannung zu finden, indem Sie ein Gerät anschließen, diese 2 Werte müssen geändert werden und die Spannung ist gleich danach.

Die Syntax lautet dann: 20; 18; 19 und muss im Feld &#39;Energieeinstellung&#39; eingegeben werden.

Für Stecker 1 benötigt man im Allgemeinen: 6; 4; 5 (voreingestellt durch das Plugin).

Für Stecker 2 benötigt man im Allgemeinen: 9; 7; 8 (voreingestellt durch das Plugin).

Für andere Ausgänge ist standardmäßig der Wert 20; 18; 19 eingestellt.

## Auftragsanpassung

Angesichts der Vielzahl von Tuya-kompatiblen Geräten müssen möglicherweise benutzerdefinierte Befehle erstellt werden.

Erstellen Sie einen neuen Aktions- / Standardbefehl. Geben Sie einen identischen Namen und eine identische ID ein und geben Sie den Befehl Tuya in die Parameter ein. Leer lassen Tuya-Befehle sind im JSON-Format und enthalten dps: {xxxxxx}. Es ist das xxxxxx, das parametriert werden muss.

Beispiele:

So heben Sie bestimmte Rollläden an: xxxxxx ist &quot;1&quot;: &quot;1&quot;, um Parameter einzugeben (verwenden Sie die doppelten Anführungszeichen der Taste 3).

So setzen Sie den Stecker Nr. 2 einiger Stecker auf einen: xxxxxx Wert &quot;2&quot;: true, um Parameter einzugeben (verwenden Sie die doppelten Anführungszeichen des Schlüssels 3).

So deaktivieren Sie # 1 und # 2 einiger Stecker: xxxxxx ist &quot;1&quot;: false, &quot;2&quot;: false, das in Parametern eingestellt werden soll (verwenden Sie die doppelten Anführungszeichen auf Taste 3).

Der folgende Absatz enthält Elemente zum Interpretieren von wifilightV2-Protokollen.
-   Beachten Sie, dass das Gerät seinen Status zurückgeben muss.
-   In vielen Fällen erfolgt keine Statusrückmeldung, wenn die standardmäßig hinzugefügten Befehle die dps nicht wiederherstellen. In diesem Fall ist es möglich, die Statusrückgabe wiederherzustellen, indem Sie einen benutzerdefinierten Befehl hinzufügen, indem Sie den Wert dps wie im folgenden Absatz angegeben angeben.
-   Es ist daher möglich, benutzerdefinierte Befehle durch Angabe der dps (nächster Absatz) oder ohne Angabe der dps zu mischen.

## Benutzerdefiniertes Gerät

Es ist möglich, ein vollständig benutzerdefiniertes Gerät zu erstellen. Im Gegensatz zu benutzerdefinierten Befehlen verfügt ein benutzerdefiniertes Gerät über keinen vordefinierten Befehl, und für jeden Befehl muss alles konfiguriert werden. Die Prozedur erfordert, dass das Gerät seinen Status in den Protokollen zurückgibt, andernfalls erfolgt keine Erleichterung.

### Konfiguration
-   Deaktivieren Sie alle wifilightV2-Geräte mit Ausnahme des zu testenden
-   Gerät konfigurieren (statische IP-Adresse, LocalKey, Id)
-   Überprüfen Sie, ob der Dämon läuft, andernfalls starten Sie ihn
-   Konfigurieren Sie wifilightV2-Protokolle im Debug-Modus
-   Löschen Sie die Protokolle

### Informationen abrufen
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
-   Internetnutzern können neue und einfachere Verfahren zur Verfügung gestellt werden.
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
-   Bogue corrigé.

Pour les prises compatibles Tuya des microcoupures surviennent régulièrement
-   Bogue corrigé.
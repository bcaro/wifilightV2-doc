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

Weitere Informationen zum Geräte-Builder finden Sie in der Hilfe und in den Foren.


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
-   Klicken Sie dann oben links auf die Schaltfläche Ein WLAN-Modul hinzufügen
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
-   Geben Sie den genauen Untertyp des Controllers, der Glühbirne, des Steckers oder der LED-Leiste ein. Dies ist wichtig, um die Befehle zur Steuerung des Geräts zu erstellen
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

# Sonderfall von Mi.Light-Boxen

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

Um dieses Token zu erhalten, müssen die zwischen der Kasa-App auf dem Telefon und dem Gerät, das im Plugin hinzugefügt werden soll, ausgetauschten Frames aufgezeichnet werden. In Android müssen Sie Packet Capture verwenden.

Das Plugin erlaubt es dann, den Token zu extrahieren. Sie müssen den abgerufenen Frame in das Feld GetKey Command Parameters kopieren und diesen Befehl ausführen. Wenn der Frame decodierbar ist, wird der Token in den Protokollen und in der Mitteilungszentrale angezeigt (Achtung: Löschen Sie die Mitteilung jedes Mal nach dem Lesen).

Der Frame, der in &quot;Parameter&quot; eingefügt werden soll, muss die folgende Geschwindigkeit haben (... andere Werte ersetzen):

00 00 00 5f d0 f2 91 fe 90 e4 81 f9 8d af 95 ... 99 bb 81 fa 87 fa 87

Die Daten sind durch Leerzeichen getrennt und stellen Hexadezimalzahlen dar, die direkt aus Packet Capture stammen. Im Allgemeinen beginnt der Frame mit 3 Nullen, und hier gibt 5f die Größe des Frames hexadezimal oder 95 dezimal an.

Es wird keine Hilfe zur Wiederherstellung des Frames von Packet Capure gegeben.

Im Moment sind nur die Stecker in V2 verwendbar, um den Autor zu kontaktieren, wenn Sie Lampen in V2 haben.

# Sonderfall von Philips Xiaomi

## Glühlampenkonfiguration

Ein Token muss unbedingt wiederhergestellt werden, damit das Plugin mit Philips Xiaomi-Geräten interagieren kann.

Das Verfahren ist komplex und erfordert mehrere Manipulationen. Führen Sie eine Suche im Web mit dem folgenden Schlüsselwort durch: Xiaomi-Token.

Keine Unterstützung wird gegeben, das Token zu erholen.

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

Dennoch kann die Kompatibilität dieser Geräte nicht garantiert werden, da das Protokoll vom Hersteller geändert werden kann.

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

return decodiert: {&quot;devId&quot;: &quot;xxxxxxxxx&quot;, &quot;dps&quot;: {&quot;1&quot;: falsch, &quot;2&quot;: falsch, &quot;9&quot;: 0, &quot;10&quot;: 0, &quot;18&quot;: 0, &quot;19&quot; : 0, &quot;20&quot;: 2281, &quot;21&quot;: 1 &quot;22&quot;: 726 &quot;23&quot;: 28971, &quot;24&quot;: 19417, &quot;25&quot;: 1070}}

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
-   Drücken Sie eine Gerätetaste (Ein, Aus, Auf, Ab usw.) oder warten Sie, bis das Gerät wieder in den Status zurückgekehrt ist, oder drücken Sie eine Taste in der Smart Live-App (in letzterer kann jedoch die Statusrückkehr verhindert werden) )
-   finde in den Logs die Passage, die so aussieht:

        Receive after decode :{devId:50701244cc50e37e9aff,dps:{"1":"off","101":true}}
        [2019-10-13 09:15:30][DEBUG] :       >>> : devId | 50701244cc50e37e9aff : 50701244cc50e37e9aff
        [2019-10-13 09:15:30][DEBUG] :       >>> : dps | Array : Array
        [2019-10-13 09:15:30][DEBUG] :       >>>>>>>>>>> : 1 | stop : stop
        [2019-10-13 09:15:30][DEBUG] :       >>>>>>>>>>> : 101 | 1 : 1

    Hier wurde der Aus-Schalter am Gerät ausgewählt und es wird beobachtet, dass sich der dps 1 geändert hat.

        Receive after decode :{devId:50701244cc50e37e9aff,dps:{"1":"on","101":true}}
        [2019-10-13 09:15:30][DEBUG] :       >>> : devId | 50701244cc50e37e9aff : 50701244cc50e37e9aff
        [2019-10-13 09:15:30][DEBUG] :       >>> : dps | Array : Array
        [2019-10-13 09:15:30][DEBUG] :       >>>>>>>>>>> : 1 | stop : stop
        [2019-10-13 09:15:30][DEBUG] :       >>>>>>>>>>> : 101 | 1 : 1

    Hier wurde die Schaltfläche am Gerät ausgewählt und es wird beobachtet, dass sich der dps 1 geändert hat.

-   Erstellen Sie einen neuen Aktions- / Standardbefehl in den Gerätebefehlen:
    *    In der Interface-Spalte setzen Sie als Name des Buttons ON
    *    Stellen Sie in der Spalte interner Name und Bestellnummer als eindeutige ID: ON, als dps: 1 (ohne doppelte Anführungszeichen) und als Parameter: &quot;on&quot; (wenn Sie nicht von Anführungszeichen umgeben sind, benötigen Sie diese off).
-   Erstellen Sie einen neuen Aktions- / Standardbefehl in den Gerätebefehlen:
    *    In der Interface-Spalte als Name der Schaltfläche OFF setzen
    *    Stellen Sie in der Spalte mit dem internen Namen und der Bestellnummer als eindeutige ID: OFF, als dps: 1 (ohne doppelte Anführungszeichen) und als Parameter: &quot;off&quot; (wenn off nicht in Anführungszeichen eingeschlossen ist, benötigen Sie diese off).
-   Erstellen Sie einen neuen info / other-Befehl in den Gerätebefehlen:
    *    In der Interface-Spalte geben Sie STAT als Namen der Info ein
    *    Legen Sie in der Spalte Interner Name und Auftrags-ID als eindeutige ID: STATUS fest, z. B. dps: 1 (ohne doppelte Anführungszeichen) und nichts in Parametern.

    Bei digitalen Informationen:

        Receive after decode :{devId:50701244cc50e37e9aff,dps:{"3":850,"101":true}}
        [2019-10-13 09:15:30][DEBUG] :       >>> : devId | 50701244cc50e37e9aff : 50701244cc50e37e9aff
        [2019-10-13 09:15:30][DEBUG] :       >>> : dps | Array : Array
        [2019-10-13 09:15:30][DEBUG] :       >>>>>>>>>>> : 3 | 850 : 850
        [2019-10-13 09:15:30][DEBUG] :       >>>>>>>>>>> : 101 | 1 : 1

    Hier wurde ein Intensitätsregler in der Geräteanwendung ausgewählt, und es wird beobachtet, dass sich der dps 3 geändert hat.

-   Erstellen Sie einen neuen Aktions- / Cursorbefehl in den Gerätebefehlen:
    *    In der Spalte Interface geben Sie Intensität als Cursornamen ein
    *    Stellen Sie in der Spalte Interner Name und Bestellnummer als eindeutige ID: Intensität, als dps: 3 (ohne doppelte Anführungszeichen) und als Parameter: # Schieberegler # (hier ist der numerische Wert nicht in Anführungszeichen eingeschlossen, nicht in Anführungszeichen) ein setzen Sie sie nicht).
-   Erstellen Sie einen neuen info / other-Befehl in den Gerätebefehlen:
    *    In der Interface-Spalte geben Sie IntensiteGet als Namen der Info ein
    *    Legen Sie in der Spalte Interner Name und Bestellnummer als eindeutige ID fest: IntensiteGet, als dps: 3 (ohne doppelte Anführungszeichen) und nichts in Parametern.

Anmerkungen:
-   nichts in den Protokollen: schlechte IP-Adresse oder Gerät, das seinen Status nicht zurückgibt
-   Rückgabe mit Fehler: Falsche ID
-   return nicht decodiert: falscher localkey
-   Der Befehl funktioniert nicht: Überprüfen Sie den Befehl
-   Um die Farbe einer Lampe zu ändern, ist es nicht möglich, die Technik des Schiebereglers zu ändern. Es müssen mehrere Tasten mit vordefinierten Farben programmiert werden

## Status in Jeedom aktualisieren
Wenn Sie das Plugin aktivieren und sobald der Daemon gestartet wird, sucht das Plugin jede Minute nach Geräten, die mit Strom versorgt werden und mit Jeedom verbunden sind.

Sobald das Gerät gefunden wird, wird der Gerätestatus sofort an das Plugin zurückgegeben.

Beachten Sie, dass das Plug-in bis zu 1 Minute dauern kann, bis festgestellt wird, dass ein Gerät verbunden oder getrennt ist.

# FAQ


## Welche Geräte können verwendet werden?

Lesen Sie die Dokumentation

## Es passiert nichts

Führen Sie das Gerät zunächst mit der vom Hersteller bereitgestellten mobilen Anwendung aus.

Verwenden Sie die Taste <tester> im Menü Plugin / Verbundene Objekte / wifilightV2 / Befehle.

Es wird keine Hilfe bereitgestellt, ohne dass die Geräte mit der Build-Anwendung auf einem Mobiltelefon ausgeführt werden können. Es ist erforderlich, dem Gerät eine feste IP-Adresse zuzuweisen.


## Ich kann meine Internetbox nicht konfigurieren

Für die Box und die Konzepte, die zur Konfiguration des Routers für die Zuweisung einer festen IP-Adresse erforderlich sind, wird keine Hilfe bereitgestellt. Konsultieren Sie die Foren der Box.

## Bei einer Gerätemodelländerung werden nicht alle Befehle erstellt

2 mal speichern.

## Weißlichtintensitätsmanagement Mi.Light / EasyBulb / LimitlessLED ist nicht praktikabel

Der Hersteller von LEDs hat nicht vor, die Intensität der Glühlampe direkt zu beeinflussen. Wir können nur vom vorherigen Wert inkrementieren oder dekrementieren. Das Plugin repliziert nur diesen Vorgang. Der vorgeschlagene Cursor ist daher launisch.

## Das Farbintensitätsmanagement weist manchmal unerwartete Verhaltensweisen auf

Kein Protokoll verarbeitet die Farbintensität, obwohl dies in der Regel bei mobilen Anwendungen der Fall ist. Solange Jeedom Farbe und Intensität verwaltet, läuft alles gut. Wenn sich die Intensität jedoch durch eine mobile Anwendung ändert, sind die Ergebnisse nicht immer die erwarteten. Das Plugin versucht, das Problem zu beheben, wenn die Lampe oder der Controller eine Statusrückmeldung hat.

## Gibt es eine Rückkehr des Staates?

Lesen Sie die Dokumentation

## Kann nicht Xiaomi Yeelight Glühbirnen betreiben

Der LAN-Steuerungsmodus muss unbedingt über die Xiaomi Yeelight-Anwendung aktiviert werden.

## Ich kann den Klang von Extel Meli-Glühbirnen nicht steuern

Sound wird vom Plugin nicht unterstützt

## Philips Xiaomi-Lampen können nicht betrieben werden

Um mit Philips Xiaomi-Lampen interagieren zu können, muss ein Token oder ein Token in englischer Sprache gesendet werden. Ohne diesen Token berücksichtigt die Glühbirne die an sie gesendeten Bestellungen nicht. Dieses Token befindet sich in der Mi-Home-App. Abhängig von Ihrem Telefon gibt es verschiedene Möglichkeiten, das Token wiederherzustellen. Das Verfahren ist an mehreren Stellen beschrieben, wird hier jedoch aus zwei Hauptgründen nicht wiedergegeben:

-   Xiaomi hat bereits sein Protokoll geändert, wodurch das Verfahren zur Wiederherstellung des Tokens geändert werden musste.
-   Internetnutzern können neue und einfachere Verfahren zur Verfügung gestellt werden.
-   Diese Dokumentation wird nicht so schnell gepflegt wie eine einfache Suche im Web mit den Schlüsselwörtern: xiaomi token.

## Kompatible Geräte können nicht bedient werden. Tuya / Smart live / Jinvoo / eFamilyCloud-Apps

Für die Interaktion mit diesen Lampen, Fassungen und anderen Geräten ist es erforderlich, einen lokalen Schlüssel oder Localkey oder Token in englischer Sprache und eine Kennung zu übertragen. Ohne diese Parameter berücksichtigt die Lampe die an sie gesendeten Bestellungen nicht. Es gibt verschiedene Methoden, um diese Informationen abzurufen. Das Verfahren ist an mehreren Stellen beschrieben, wird hier jedoch aus zwei Hauptgründen nicht wiedergegeben:

-   Die Anwendungen wurden aktualisiert, was bedeutet, dass das Verfahren zum Abrufen der Informationen geändert wurde.
-   Internetnutzern können neue und einfachere Verfahren zur Verfügung gestellt werden.
-   Diese Dokumentation wird nicht so schnell gepflegt wie eine einfache Suche im Web mit den Schlüsselwörtern: Tuya LocalKey und insbesondere auf Github.

## Fehler beim Senden des Befehls / Zahnrad ohne Stopp / Emission ohne Stopp
-   wifilightV2-Geräte müssen aktualisiert werden
-   gehe in jedes Gerät und spare 2 mal
-   Testen Sie mit neuen Geräten, ob dies weiterhin der Fall ist

## Mi.Light Bridge IBox1, iBox2, V6: Befehl wird zufällig berücksichtigt
-   Bestellungen werden zu schnell versendet
-   Legen Sie in den Szenarien ausreichend lange Pausen ein

## Mi.Light Bridge IBox1, iBox2, V6: Befehl nicht berücksichtigt
-   Wählen Sie beim Koppeln mit der mobilen Mi.Light-Anwendung und beim Konfigurieren von wifilightV2 dieselbe Fernbedienung.

## LW12 UFO Magic Arilux Wifi3x0 H801 Kompatible Magic Home Tuya / Jinvoo / eFamilyCloud-Steuerungen
-   Es gibt viele Versionen und einige sind möglicherweise nicht mit dem Plugin kompatibel. Kontaktieren Sie den Autor für ein mögliches Update.

## Befehle fehlen beim Erstellen oder Ändern des Untertyps der Glühlampe
-   Rette die Ausrüstung (2 Mal)


# Wie bekomme ich Hilfe?


Zum Jeedom-Forum [hier] (https://community.jeedom.com/t/plugin-wifilightv2-sonoff-ewelink-lan/2632)

# Bekannte Fehler

Das Gedächtnis nimmt drastisch ab
-   Fehler behoben.

Bei Tuya-kompatiblen Steckdosen treten regelmäßig Mikroschnitte auf
-   Fehler behoben.
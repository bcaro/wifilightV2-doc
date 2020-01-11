1.54 - 2020-01-05
-   Sonoff: fixed connectedget (endlich)
-   Tuya: fixed connectedget (endlich)
-   Sonoff RF Bridge: Übergang zu 32 Triggern
-   Magic Home: Hinzufügen eines benutzerdefinierten Modus
-   Zugabe von Nanoleaf
-   Fehlerbehebungen

1,53 - 2019-12-12
-   Sonoff: Hinzufügung von RF Bridge 433 - nur Sensoren
-   Sonoff TH10 / TH16: Informationen vom internen Thermostat hinzugefügt (aber nicht änderbar)
-   Sonoff Pow R2: Hinzufügen von elektrischen Informationen (aber von begrenzter Effizienz, dies ist nicht auf das Plugin zurückzuführen)
-   Tuya: Besseres Feedback von V2-Steckdosen
-   Tuya: Zusatz einer weißen Lampe 2. Typs
-   Fehlerbehebungen

1,52 - 2019-11-27
-   Tuya: Globuslampen im Stall
-   Code-Bereinigung
-   Fehlerbehebungen
-   Verschieben des Dokuments

1,51 - 2019-11-23
-   Tuya: Ergänzung der MiBoxer-Brücke von Milight (Modul in Beta), nur EIN / AUS der kompletten Box funktioniert. Verfügbar für diejenigen, die den ApiKey mit der MiBoxer-App wiederherstellen können.
-   Tuya: Hinzufügen eines benutzerdefinierten Geräts zum Konfigurieren eines beliebigen Geräts
-   Tuya : refonte des commandes customs : pour les commandes custom existantes -> nécessité de les reconfigurer avec le nouveau format
-   Tuya: müssen alle Geräte retten
-   eWeLink: Verwendung eines gefälschten Schlüssels für den SelfApiKey
-   eWeLink: Korrektur der Verbindungsinformationen
-   Tuya: Verbindungsinfo korrigieren
-   kleinere Fehlerbehebungen
-   Neustart des Daemons nach Änderung einer Konfiguration

1,50 - 2019-10-28
-   Tuya: Ergänzung der RGBW Typ 2 Lampe (Modul in Beta)
-   Sonoff Dual Bugfix
-   Ewelink: Hinzufügen von 3- und 4-Kanal-Geräten
-   Sonoff: Kompatibler TH10 / 1H16-Temperatursensor, Basis, HF, POW, Mini, Dual, 4CH / 4CH PRO, Touch, S20 / S26, T1 / TX, SLAMPHER, T4EUC1

1,49 - 2019-10-23
-   Bugfix Tuya Vorhang mod2
-   Sonoff Dual Bugfix

1,48 - 2019-10-18
-   eWelink: Hinzufügen von Modulen mit 2 Kanälen (einschließlich Sonoff Dual) in der Beta
-   Fehlerkorrektur Sonoff State Return

1,47 - 2019-10-16
-   Zusatz von Shutters mod2 (on / off / stop statt 1/2/3 in den Aufträgen)
-   Fehlerbehebungen

1,46 - 2019-10-12
-   Fügen Sie einen Temperatur- / Feuchtigkeitssensor einschließlich Sonoff TH10 / 16 hinzu
-   Zwölf-Zoll-Modus hinzufügen (für eine bestimmte Zeit eingeschaltet)
-   Fehlerbehebungen

1,45 - 2019-10-2
-   Kompatible Geräte mit Ewelink App im LAN-Modus
-   SonOff-kompatibel im LAN-Modus

1,44 - 2019-09-27
-   Sonoff Basic R3 kompatibel im DIY-Modus
-   Jeedom V4 kompatibel
-   Buster kompatibel
-   Das Entfernen des Farbwidgets ohne Off ist nicht mit V4 kompatibel. Das Plugin bietet keine benutzerdefinierten Widgets mehr an.

1.43 - 2019-07-08
-   TP-Link: Unter Berücksichtigung des neuen V2-Protokolls für Sockets ist ein Token erforderlich.
-   Tuya: Die Öffnungs- und PIR-Sensoren sind nicht mit dem Plugin kompatibel. Diese Sensoren müssen durch die Cloud gehen: um bei Alarmgebrauch vermieden zu werden.
-   Fehlerkorrektur: Berechnung des Stroms der Tuya-Steckdosen jetzt in Ampere (Modifizieren Sie Ihre Szenarien, da die aktuelle Einheit falsch ist)
-   Tuya und TP-Link, Verbrauchseinheiten: AVW kWh. Speichern Sie die Ausrüstung für die korrekte Anzeige des Geräts in der Befehlsliste.

1.42 - 2019-06-02
-   Tuya: Bug Return Status Bug
-   Dämon: Keine Speicherlecks mehr

1.41 - 2019-06-19
-   Tuya: bidirektionale Kompatibilität mit dem Plugin in Firmware 2.0 (Aktor OK)
-   Tuya: Hinzufügung des Dimmerschalters
-   Daemon: umgeschrieben, um Pipa- / Yeelight-Verbindungen / -Trennungen besser verwalten zu können
-   Möglicherweise ist eine erneute Registrierung jedes Geräts erforderlich

1,40 - 2019-06-16
-   Tuya: Hinzufügen einer sofortigen Statusrückmeldung für Geräte, die ihren Status zurückgeben
-   Tuya: Einige Geräte werden auf Firmware 2.0 aktualisiert: Sie sind nur im Rückgabestatus mit dem Plugin kompatibel
-   Tuya: Die mobile Anwendung muss gestoppt werden, damit das Plugin funktioniert
-   Tuya: Für Benutzer der Beta-Version müssen Tuya V2-Geräte neu konfiguriert werden (V1-Firmware ist nicht mit V2-Firmware identisch).
-   Cronentfernung 1 min
-   Ein PhP-Fehler führt zu Speicherverlusten. In diesem Fall konfigurieren Sie den Heartbeat des Plugins so, dass er regelmäßig neu gestartet wird

1.39 - 2019-05-05
-   Tuya: Thermostat hinzufügen

1,38 - 2019-04-05
-   Tuya: Korrekturrückgabestatus
-   Desktop: Fehleranzeige gibt Statusfehler zurück

1,37 - 2019-04-04
-   Tuya: Mehrverbrauch an allen Tuya-Steckdosen
-   Tuya: Konfiguration der Energierückgewinnung
-   Bitte beachten Sie: Die Konfiguration zum Abrufen der Energieparameter wurde geändert. Die alten Konfigurationen bleiben kompatibel.

1,36 - 2019-04-03
-   Tuya: Hinzufügen von Wandschaltern
-   Tuya: Zugabe eines Luftbefeuchters
-   Tuya: Verbrauchszuschlag an allen Verkaufsstellen
-   Achtung: Sie müssen die Tuya-Buchsen neu konfigurieren: Nehmen Sie die Konfiguration der Buchse Xplugs + USB und überprüfen Sie die Unterdrückung der Statusrückmeldung für die Buchsen mit Mikroschnitten.

1,35 - 2019-03-13
-   Tuya: Hinzufügung von Schaltern für Rollläden
-   Tuya: Hinzufügen von benutzerdefinierten Befehlen für alle Geräte (ermöglicht das Testen neuer Aktuatoren)

1.34 - 2019-03-02
-   Hinzufügen einer Konfiguration mit Statusrückmeldung für alle Buchsen. Beachten Sie, dass Mikroschnitte auftreten können, und nehmen Sie die Konfiguration dann ohne Statusrückmeldung vor.

1,33 - 2019-02-15
-   Mögliche Konfiguration für die Rückgewinnung des Verbrauchs an den Rohren: Die Verbrauchsbuchsen Typ 2 müssen vor der Installation des Plugins in Typ 1 neu konfiguriert werden.

1,32 - 2019-02-13
-   TP-Link HS110 Bugfixes.
-   Modification du protocole (UDP -> TCP) pour les équipements TP-Link. Normalement sans incidence.

1.31 - 2019-02-12
-   Hinzufügen eines zweiten Steckertyps mit Smart Live-kompatiblem Verbrauch.

1,30 - 2019-02-01
-   Unterdrückung der Statusrückmeldung bei Tuya-Steckern ohne Verbrauchsmessung: Nutzlose Funktionalität, da nur Jeedom den Stecker steuern kann und Mikroschnitte verursacht.
-   Änderung des Dokuments für die neue Konfiguration von iBox Mi.Light

1,29 - 2019-1-27
-   Farbkorrektur HSV Tuya Glühlampen
-   Fügen Sie RGB-Tuya-Lampen hinzu

1,28 - 2019-1-16
-   Stecker TP_Link hinzufügen
-   Kommunikationsverbesserung Tuya Smart Plug

1,27 - 2019-1-11
-   Tuya Smart Plug in stabil
-   Kommunikationsverbesserung Tuya Smart Plug

1,26 - 2019-1-1
-   Fügen Sie mit Tuya / Smart Live / Jinvoo / eFamillyCloud-Apps kompatible Steckdosen hinzu
-   Kleinere Fehlerbehebungen
-   Neugestaltung der Dokumentation

1,25 - 2018-11-25
-   Erweiterung der Beta des adressierbaren LED-Controllers SP108 Led Shop (ON / OFF)
-   Hinzufügung der RGB Mi.Light-Fernbedienung
-   Kleinere Fehlerbehebungen

1,24 - 2018-11-14
-   Anzeigeseite für Geräte zur Fehlerbehebung

1,23 - 2018-09-06
-   Hinzufügung von Pixel Strip Controllern, die mit Magic Home kompatibel sind

1,22 - 2018-07-10
-   Hinzufügung kompatibler Tuya / Jinvoo Smart Apps-Lampen
-   Hinzufügung der Mi.Light Floodlight Birne
-   Hinzufügung der Philips Zhiuri Birne
-   Kleinere Fehlerbehebungen

1,21 - 2018-03-10
-   Hinzufügung von Sunix-LED-Strip-Controllern
-   Fehlerbehebungen Arilux RGBWW

1.20 - 2018-03-02
-   Hinzufügen der sofortigen Rückmeldung über den Zustand der Xiaomi Yeelight-Lampen
-   Verbesserung der Plugin-Konfigurationsoberfläche
-   Fehlerbehebungen

1.19 - 2018-02-15
-   Zeitgesteuertes Herunterfahren hinzufügen Xiaomi Philips
-   Verbesserung der EIN / AUS-Statusrückmeldung aller Lampen mit Statusrückmeldung
-   Fehlerbehebungen

1.18 - 2018-02-13
-   Yeelight JIAOYUE Korrekturen
-   Hinzufügen von benutzerdefinierten Modi für Yeelight-Farben

1.17 - 2018-02-11
-   Hinzufügen von Mi.Light: Track Light RGBW / WW
-   Hinzufügen von benutzerdefinierten Modi für Yeelight JIAOYUE
-   Listen sortieren

1.16 - 2018-01-25
-   Hinzufügen Xiaomi Philips: Schreibtischlampe, Glühbirne und Deckenlampe
-   Ergänzung der Deckenleuchte Yeelight JIAOYUE 650
-   Zusatz für alle Lampen der Intensität erhöhen und verringern Tasten
-   Mi.Light: Speichern der RGB- und Weißintensität
-   8 Tasten Mi.Light Fernbedienungskorrektur
-   Kleinere Fehlerbehebungen.

1.15 - 29.11.2017
-   MiLight-Zusatz: 8-Kanal-RGBW-CT-Fernbedienung und RGBW-CT-LED-Streifen
-   Update des Dokuments (Rechtschreibung, Yeelight-Hilfe)

1.14 - 28.09.2017
-   Bugfixes: Yeelight und LW12 Deckenleuchte. Zusatzgeschwindigkeit H801

1.13 - 2017-09-26
-   Fehlerkorrektur: Yeelight Deckenleuchte, RUN / STOP LW12, bewegliches Symbol

1.12 - 2017-09-13
-   Zeigen Sie Bestellungen an, auf die Sie direkt auf der Registerkarte Bestellungen zugreifen können

1.11 - 2017-09-04
-   Möglichkeit zum Ändern des Standardfarbwidgets

1.10 - 2017-06-17
-   Zugabe von Extel Meli Glühlampen

1,09 - 2017-05-22
-   Kompatibilität mit Jeedom V3.0

1,08 - 2017-05-13
-   Zugabe von TP-Link Glühlampen
-   Fehlerbehebungen

1.07 - 2017-05-03
-   RGBWW-Statusrückkopplungskorrektur

1.06 - 2017-05-01
-   Fügen Sie Arilux RGBWW hinzu
-   Fügen Sie MagicHome-Streifen-LED-RGBWW- und RGBW-Lampen hinzu
-   Wifi3x0 Status Feedback Korrektur

1,05 - 2017-04-17
-   Fehlerkorrektur H801

1.04 - 2017-04-16
-   Fehlerkorrektur Yeelight Sonnenuntergang / Sonnenaufgang

1.03 - 2017-04-12
-   Fehlerbehebungen
-   Hinzufügen von Sonnenaufgangs- und Sonnenuntergangsmodi für Yeelight RGBW
-   Hinzufügen eines Lampensynchronisationsmodus
-   Xiaomi Mijia-Kompatibilität hinzugefügt

1.02 - 2017-04-02
-   Fehlerbehebungen
-   Mondlichtmodus für Helligkeitsdecken hinzugefügt

1,01 - 29.01.2017
-   Fügen Sie Verbindungsinformationen hinzu
-   Fehlerbehebungen
-   Standardmäßig werden die Statusinformationen nicht mehr angezeigt

1,00 - 25.01.2017
-   Veröffentlichung der ersten Version

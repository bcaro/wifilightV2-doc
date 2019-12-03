1,53 - 2019-11-30
-   Ewelink: Hinzufügen der Sonoff RF Bridge 433 - nur die Sensoren
-   Sonoff TH10 / TH16: Hinzufügen von Aktionen / Informationen des internen Thermostats
-   Fehlerbehebungen

1,52 - 2019-11-27
-   Tuya: Globuslampen im Stall
-   Code-Reinigung
-   Fehlerbehebungen
-   Verschieben des Dokuments

1,51 - 2019-11-23
-   Tuya: Hinzufügen der MiBoxer-Brücke von Milight (Modul in der Beta), nur EIN / AUS der gesamten Box funktioniert. Verfügbar für diejenigen, die den ApiKey mit der MiBoxer-App wiederherstellen möchten.
-   Tuya: Fügen Sie ein benutzerdefiniertes Gerät hinzu, um ein beliebiges Gerät zu konfigurieren
-   Tuya : refonte des commandes customs : pour les commandes custom existantes -> nécessité de les reconfigurer avec le nouveau format
-   Tuya: Müssen alle Geräte sichern
-   eWeLink: Verwenden eines gefälschten Schlüssels für SelfApiKey
-   eWeLink: Anmeldeinformationen korrigieren
-   Tuya: Korrektur der Verbindungsinformationen
-   kleinere Fehlerbehebungen
-   Neustart des Dämons nach Änderung einer Konfiguration

1,50 - 2019-10-28
-   Tuya: Zusatzlampe RGBW Typ 2 (Modul in Beta)
-   Fehlerkorrektur Sonoff Dual
-   Ewelink: Hinzufügen von 3- und 4-Kanal-Geräten
-   Sonoff: Kompatibler TH10 / 1H16-Temperatursensor, Basis, HF, POW, Mini, Dual, 4CH / 4CH PRO, Touch, S20 / S26, T1 / TX, SLAMPHER, T4EUC1

1,49 - 2019-10-23
-   Korrektur Bug Tuya Vorhang mod2
-   Fehlerkorrektur Sonoff Dual

1,48 - 2019-10-18
-   eWelink: Fügen Sie in der Beta Module mit 2 Kanälen (einschließlich Sonoff Dual) hinzu
-   Korrekturfehler Rückgabestatus Sonoff

1,47 - 2019-10-16
-   Hinzufügen von Tuya Mod2-Rollläden (Ein / Aus / Stopp anstelle von 1/2/3 in den Steuerelementen)
-   Fehlerbehebungen

1,46 - 2019-10-12
-   Hinzufügen eines Temperatur- / Feuchtigkeitssensors einschließlich Sonoff TH10 / 16
-   Hinzufügen von Inching im Ewelink-Modus (für eine bestimmte Zeit eingeschaltet)
-   Fehlerbehebungen

1,45 - 2019-10-2
-   Kompatible Geräte mit Ewelink App im LAN-Modus
-   SonOff-kompatibel im LAN-Modus

1,44 - 2019-09-27
-   Kompatibel mit Sonoff Basic R3 im DIY-Modus
-   Kompatibler V4 Jeedom
-   Buster kompatibel
-   Wenn Sie das Farb-Widget entfernen, ohne dass Off nicht mit V4 kompatibel ist, bietet das Plugin keine benutzerdefinierten Widgets mehr an.

1.43 - 2019-07-08
-   TP-Link: Unter Berücksichtigung des neuen V2-Protokolls für die Outlets ist ein Token erforderlich.
-   Tuya: Die Öffnungs- und PIR-Sensoren sind nicht mit dem Plugin kompatibel. Diese Sensoren müssen die Cloud passieren, um die Verwendung von Alarmen zu vermeiden.
-   Fehlerbehebung: Berechnung des Stroms der Stecker Tuya jetzt in Ampere (Modifizieren Sie Ihre Szenarien, da die Einheit des Stroms falsch ist)
-   Tuya und TP-Link, Verbrauchseinheiten: AVW kWh. Speichern Sie die Ausrüstung für eine korrekte Anzeige des Geräts in der Befehlsliste.

1.42 - 2019-06-02
-   Tuya: Bugfix zurück Zustand
-   Daemon: kein Speicherverlust mehr

1.41 - 2019-06-19
-   Tuya: bidirektionale Kompatibilität mit dem Firmware-Plugin 2.0 (OK Aktor)
-   Tuya: Hinzufügen des Dimmerschalters
-   Dämon: umgeschrieben, um Verbindungen / Verbindungen Tuya und Yeelight besser handhaben zu können
-   Möglicherweise muss jedes Gerät neu registriert werden

1,40 - 2019-06-16
-   Tuya: Sofortige Statusrückmeldung für Geräte, die ihren Status zurückgeben
-   Tuya: Einige Geräte sind auf Firmware 2.0 umgestellt: Sie sind nur im Rückgabezustand mit dem Plugin kompatibel
-   Tuya: Die mobile Anwendung muss gestoppt werden, damit das Plugin funktioniert
-   Tuya: Für Benutzer der Beta-Version müssen Tuya V2-Geräte neu konfiguriert werden (Firmware V1 ist von Firmware V2 getrennt)
-   Cron löschen 1 min
-   Ein PhP-Fehler führt zu Speicherverlusten. In diesem Fall konfigurieren Sie den Heartbeat des Plugins so, dass er regelmäßig neu gestartet wird

1.39 - 2019-05-05
-   Tuya: Thermostatzusatz

1,38 - 2019-04-05
-   Tuya: Korrekturrückzustand
-   Desktop: Fehlerbehebung bei der Statusanzeige

1,37 - 2019-04-04
-   Tuya: Mehrverbrauch an allen Tuya-Verkaufsstellen
-   Tuya: Konfiguration der Wiederherstellung der Energieparameter
-   Achtung: Die Konfiguration zum Abrufen der Energieparameter wurde geändert. Alte Konfigurationen bleiben kompatibel.

1,36 - 2019-04-03
-   Tuya: Hinzufügen von Wandschaltern
-   Tuya: Hinzufügen eines Luftbefeuchters
-   Tuya: Mehr Verbrauch für alle Verkaufsstellen
-   Achtung: Es wird notwendig sein, die Ausgänge Tuya neu zu konfigurieren: um die Konfiguration Xplugs + USB zu nehmen und die Unterdrückung der Rückkehr des Zustands für die Buchsen mit Mikroschnitten zu überprüfen.

1,35 - 2019-03-13
-   Tuya: Hinzufügen von Schaltern für Rollläden
-   Tuya: Hinzufügen von benutzerdefinierten Befehlen für alle Geräte (ermöglicht das Testen neuer Aktoren)

1.34 - 2019-03-02
-   Fügen Sie eine Konfiguration mit Statusrückmeldung für alle Ausgänge hinzu. Achtung es können Mikroschnitte auftreten, dann wird die Konfiguration ohne Rückmeldung übernommen.

1,33 - 2019-02-15
-   Parametrierung für die Rückgewinnung des Verbrauchs an den Tuya-Buchsen möglich: Die Buchsen Typ 2 müssen vor der Installation des Plugins in Typ 1 neu konfiguriert werden.

1,32 - 2019-02-13
-   TP-Link HS110 Bugfixes.
-   Modification du protocole (UDP -> TCP) pour les équipements TP-Link. Normalement sans incidence.

1.31 - 2019-02-12
-   Ein zweiter Steckertyp mit Smart Live-kompatibler Konsole wurde hinzugefügt.

1,30 - 2019-02-01
-   Status-Feedback für Tuya-Stecker ohne Verbrauchsmessung entfernt: Nutzlose Funktion, da nur Jeedom den Stecker steuern kann und Mikroschnitte verursacht.
-   Ändern des Dokuments für die neue Mi.Light iBox-Konfiguration

1,29 - 2019-1-27
-   Korrekturfarben HSV Birnen Tuya
-   Hinzufügen von RGB-Lampen Tuya

1,28 - 2019-1-16
-   TP_Link-Stecker hinzufügen
-   Verbesserung der Kommunikation Tuya Smart Plug

1,27 - 2019-1-11
-   Tuya Smart Plug in stabil
-   Verbesserung der Kommunikation Tuya Smart Plug

1,26 - 2019-1-1
-   Hinzufügen von mit Tuya / Smart Live / Jinvoo / eFamillyCloud-Apps kompatiblen Steckdosen
-   Kleinere Fehlerbehebungen
-   Neufassung der Dokumentation

1,25 - 2018-11-25
-   Beta-Erweiterung der ansteuerbaren LED-Controller SP108 Led Shop (ON / OFF)
-   Hinzufügung der RGB Mi.Light-Fernbedienung
-   Kleinere Fehlerbehebungen

1,24 - 2018-11-14
-   Geräte zur Anzeige von Fehlerseiten wurden behoben

1,23 - 2018-09-06
-   Magic Home kompatible Pixel Strip LED Controller hinzugefügt

1,22 - 2018-07-10
-   Hinzufügen kompatibler Tuya / Jinvoo Smart Apps-Lampen
-   Hinzufügung der Mi.Light Floodlight Birne
-   Zugabe von Philips Zhiuri Birne
-   Kleinere Fehlerbehebungen

1,21 - 2018-03-10
-   Ergänzung der Sunix-LED-Leistensteuerung
-   Behobene Fehler Arilux RGBWW

1.20 - 2018-03-02
-   Hinzufügen der sofortigen Rückmeldung des Staates Xiaomi Yeelight Glühbirnen
-   Verbesserte Plugin-Konfigurationsoberfläche
-   Fehlerbehebungen

1.19 - 2018-02-15
-   Neben Xiaomi Philips verzögerte Herunterfahren
-   Verbesserte EIN / AUS-Statusrückmeldung aller Lampen mit Statusrückmeldung
-   Fehlerbehebungen

1.18 - 2018-02-13
-   Korrekturen Yeelight JIAOYUE
-   Fügen Sie benutzerdefinierte Modi für Yeelight-Farben hinzu

1.17 - 2018-02-11
-   Hinzufügen von Mi.Light: Track Light RGBW / WW
-   Hinzufügen von benutzerdefinierten Modi Yeelight JIAOYUE
-   Listen sortieren

1.16 - 2018-01-25
-   Zusatz Xiaomi Philips: Schreibtischlampe, Glühlampe und Deckenlampe
-   Zugabe von Deckenleuchte Yeelight JIAOYUE 650
-   Zusatz für alle Lampen von Inkrement-Tasten und Intensitäts-Dekrement
-   Mi.Light: Speichern der Intensität RGB und Weiß
-   Mi.Light Fernbedienung 8 Tasten
-   Kleinere Fehler behoben.

1.15 - 29.11.2017
-   Zusatz MiLight: Fernbedienung 8 Kanäle RGBW CT und LED-Streifen RGBW CT
-   Aktualisiertes Dokument (Rechtschreibung, Hilfe Yeelight)

1.14 - 28.09.2017
-   Bugfixes: Yeelight und LW12 Deckenleuchte. Geschwindigkeit hinzufügen H801

1.13 - 2017-09-26
-   Fehlerbehebungen: Yeelight-Deckenleuchte, RUN / STOP LW12, bewegliches Symbol

1.12 - 2017-09-13
-   Anzeige von Befehlen, auf die direkt in der Registerkarte Befehle zugegriffen werden kann

1.11 - 2017-09-04
-   Möglichkeit zum Bearbeiten des Standardfarbwidgets

1.10 - 2017-06-17
-   Hinzufügen von Extel Meli Glühbirnen

1,09 - 2017-05-22
-   Jeedom V3.0-Kompatibilität

1,08 - 2017-05-13
-   Zugabe von TP-Link Glühlampen
-   Fehlerbehebungen

1.07 - 2017-05-03
-   Korrektur der RGBWW-Statusrückmeldung

1.06 - 2017-05-01
-   Hinzufügen von Arilux RGBWW
-   Fügen Sie MagicHome-Streifen-LED-RGBWW- und RGBW-Lampen hinzu
-   Korrektur der Staatsrendite wifi3x0

1,05 - 2017-04-17
-   H801-Fehler behoben

1.04 - 2017-04-16
-   Yeelight Sonnenuntergang / Sonnenaufgang Bugfix

1.03 - 2017-04-12
-   Fehlerbehebungen
-   Sonnenaufgangs- und Sonnenuntergangsmodus für Yeelight RGBW hinzugefügt
-   Hinzufügen eines Synchronisationsmodus für die Lampen
-   Xiaomi Mijia-Kompatibilität hinzugefügt

1.02 - 2017-04-02
-   Fehlerbehebungen
-   Zusätzlicher Mondlichtmodus für Deckenlicht

1,01 - 29.01.2017
-   Anmeldeinformationen hinzufügen
-   Fehlerbehebungen
-   Standardmäßig werden die Statusinformationen nicht mehr angezeigt

1,00 - 25.01.2017
-   Veröffentlichung der ersten Version

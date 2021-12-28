[Zurück zur allgemeinen Dokumentation](./index.md)


# Zigbee Tuya-Gateways

Um ein solches Gateway zu verwenden, wählen Sie den Typ: "Gateway Hub Tuya Zigbee"

## Kompatibilität

Der Dialog zwischen dem Plugin und dem Gateway erfolgt über Wifi. Der Dialog zwischen den Sensoren und Aktoren und dem Gateway erfolgt dann über Zigbee. Sie müssen Tuya-kompatibel sein und zuerst in der Tuya-App enthalten sein.

Das Plugin kann den Zustand der Geräte abrufen, sobald sie eine Zustandsänderungsinformation senden oder wenn das Plugin sie beim Starten des Daemons fragt. Wenn ein Wandschalter verwendet wird, weiß Jeedom sofort Bescheid.

Die folgenden Geräte sind kompatibel, aber die Liste ist nicht exklusiv und wird basierend auf Benutzerfeedback vervollständigt.
- MoesHouse-Gateways, BENEXMART
- Lidl SilverCrest Smart Home-Gateway
- alle Tuya/Zigbee-Gateways sind normalerweise kompatibel, es gab noch keine Rückkehr von einem inkompatiblen Gateway.
- Vima-Schloss (aber nicht MiHome)
    das Plugin kann nicht öffnen/schließen, da das Schloss nicht dafür vorgesehen ist, aber es kann den zuletzt verwendeten Schlüssel kennen
- TYZS2 Temperatur- und Feuchtigkeitssensor
    Vollbetrieb
- Hessway Thermostatkopf
    Verwaltet nicht die Programmierung der Zeitschlitze der verschiedenen Modi, kann aber jeden Modus starten.
    Verwenden Sie die Option "Erweiterter Modus" zum Erstellen von Befehlen, um alle Thermostatbefehle zu erstellen.
- der Doppeldimmer QS-Zigbee-D02-TRIAC-LN
- Moes Präsenzsensor
- BENEXMART Präsenzmelder
- BENEXMART Temperatursensor
- BENEXMART Türsensor
- Lonsoho Stecker mit Verbrauch
- Loratap 3-Tasten-Fernbedienung
- Einzel/ Doppel/Dreifach-Wandschalter
- Fernbedienung, weiße und farbige Glühbirnen, Einzel und Dreifach-Lidl-Steckdosen

Alle anderen Geräte oder ähnliche Geräte einer anderen Marke oder eines anderen Modells müssen vollständig im benutzerdefinierten Modus konfiguriert werden. Die für diese Modelle generierte Konfiguration kann jedoch für andere hilfreich sein.

Die Kompatibilität dieser Geräte ist jedoch nicht gewährleistet, da das Protokoll von den Herstellern modifiziert werden kann. Ändern Sie die Firmware des Geräts nicht, ohne überprüft zu haben, ob es mit dem Plugin kompatibel ist.

Sie müssen für das Gateway und jedes mit dem Gateway verbundene Gerät ein Gerät mit derselben IP-Adresse und demselben Schlüssel erstellen.

Mit der Option "Statusabfrage" können Sie den Status alle 20s abfragen, auch wenn das Peripheriegerät ihn nicht zurücksendet. Zu verwenden für die Steckdosen, die den Verbrauch nicht regelmäßig zurückgeben, aber nicht für die batteriebetriebenen Peripheriegeräte, bei denen diese entleert werden.


## Gateway-Schlüssel und -Kennung

Es ist wichtig, den lokalen Schlüssel (localKey) und die devId des Gateways abzurufen, damit das Plugin mit den Geräten kommunizieren kann.

Um den localKey und die devId abzurufen, ist die Prozedur komplex und erfordert mehrere Operationen. Suchen Sie im Web mit dem Stichwort: Tuya localKey, insbesondere auf Github oder im [Jeedom-Forum](https://community.jeedom.com/t/plugin-wifilightv2-recuperer-id-et-localkey-pour-tuya-smartlife/13047) .

Wenn das Gateway deinstalliert und dann in der mobilen Anwendung neu installiert wird, wird sein Schlüssel geändert. Sie müssen den Schlüssel wie oben beschrieben finden.

Es wird keine Hilfe beim Abrufen des Schlüssels gegeben.

Der Schlüssel und die IP-Adresse der an das Gateway angeschlossenen Geräte sind identisch mit denen des Gateways.


## Geräteschlüssel und Kennung

Konfigurieren Sie das Gerät und geben Sie den oben gefundenen localKey sowie die IP-Adresse ein, die mit der des Gateways übereinstimmt. Anschließend müssen Sie den Zustand des Geräts mit der vom Hersteller des Gateways bereitgestellten Anwendung ändern und die Protokolle konsultieren.
Wenn das Gerät seinen Status zurückgibt, finden Sie in den Protokollen Informationen wie diese:
    
    Mess:{"dps":{"161":"Esc"},"cid":"ec1bxxxxxxxx28","t":1589301302}

Die cid ist in das devId-Feld des Plugin-Geräts zu kopieren (ohne das ""). Dadurch ist es möglich, 2 an das Gateway angeschlossene Geräte zu unterscheiden.

Hinweis: Wenn das Gerät seinen Status nicht zurückgibt, kann die cid in den Protokollen nicht gefunden werden. Experten können die dps und die cid finden, da sie während des Suchvorgangs neben dem localKey angezeigt werden, sie befinden sich direkt daneben. Die cid wird in den Smartlife-App-Paketen als nodeId bezeichnet.

## Auswahl von Standard-Peripheriegeräten, die mit dem Gateway verbunden sind

Wenn Ihr Gerät in der Vorschlagsliste enthalten ist, sollte es sofort funktionieren. Wenn Ihr Gerät etwas anders ist, können die DPS-Zahlen oder -Parameter andere Werte als die Standardkonfigurationen haben. Es ist möglich, die erstellten Aufträge durch Ändern der dps-Zahl und des Parameters mit einer möglichen Berechnungsformel zu ändern, um den gewünschten Wert zu finden. Siehe [Manueller Erstellungsmodus von Befehlen in V3](./tuya#tocAnchor-1-10-8) des Tuya-Teils, um die Plugin-Logs zu interpretieren und die Befehle der Standardkonfiguration zu verstehen.


## Automatische Erstellung des Geräts im Aufnahmemodus

Um den Inklusionsmodus der am Gateway angeschlossenen Geräte nutzen zu können, müssen Sie zunächst ein Gateway mit dem Untertyp Gateway Hub Tuya/Zigbee mit seiner IP-Adresse und dem localKey verbunden und korrekt konfiguriert haben. Das in das Gateway einzubindende Gerät muss seinen Zustand zurückgeben, ist dies nicht der Fall, kann das Verfahren nicht funktionieren. Wenn mehrere Gateways angeschlossen und im Plugin konfiguriert sind, muss nur das Gateway aktiviert werden, auf dem das Gerät eingebunden werden muss.
Wenn kein Gateway oder mehrere Gateways konfiguriert und aktiv sind, wird der Aufnahmeprozess abgebrochen. Das einzubindende Gerät darf sich noch nicht im Plugin befinden, ansonsten muss es entweder entfernt werden oder den Lernmodus verwenden.

- Klicken Sie auf den Aufnahmemodus, warten Sie einen Moment
- mit der Smartlife-App auf dem Gerät reagieren oder den Zustand des Geräts ändern (aber die Verwendung der App kann das Gerät blockieren: in diesem Fall schnell die Smartlife-App starten und schnell auf dem Gerät handeln, dann die Smartlife-App verlassen) unter Verwendung aller Möglichkeiten der Smartlife App oder des Gerätes
- dann klicke auf die Schaltfläche Aufnahme beenden und speichere
- das Gerät ist erstellt und konfiguriert, Sie können es bearbeiten

Es darf immer nur ein Gerät enthalten sein. Um ein Gerät auszuschließen, löschen Sie es einfach im Plugin.

Dieser Modus ist nur dazu da, die personalisierte Konfiguration eines neuen Geräts zu unterstützen, das das Plugin nicht bietet. Die Verwendung dieses Modus kann nicht zu einem voll funktionsfähigen Gerät führen und erfordert das Verstehen, Löschen oder Ändern der erstellten Befehle.

Beispiele für Modifikationen:
- Wenn der dps nur einer Info im Peripheriegerät entspricht (zum Beispiel 3 mögliche Werte der gleichen Schaltfläche), müssen Sie die 3 automatisch erstellten Aktionsbefehle löschen. Die Aktionsbefehle haben jedoch als Parameter alle vom Plugin abgerufenen Werte und ermöglichen es, die von der dps-Info übernommenen Werte zu kennen.
- Bei digitalen dps werden automatisch ein Info-Befehl und ein digitaler Aktionsbefehl erstellt, wenn nur die Info sinnvoll ist (bei der Temperatur eines Sensors), muss der Aktionsbefehl gelöscht werden. Wenn die Zahlenwerte beim Lernen die Werte 0 oder 1 annehmen, erzeugt das Plugin auch 3 STATE/ON/OFF-Befehle, diese müssen gelöscht werden.
- Für dps, die eine 0/1-Info für einen Alles-oder-Nichts-Aktor enthalten, wie z. B. eine Steckdose, erstellt das Plugin eine Info und 2 EIN/AUS-Aktionen.
- Bei einem dps mit true oder false werden automatisch ein Info-Befehl und zwei Aktionsbefehle (EIN und AUS) erzeugt, wenn nur die Info sinnvoll ist (bei einem Präsenzsensor) müssen die Aktionsbefehle gelöscht werden.
- Bei dps mit Farbinformationen identifiziert das Plugin die Farbcodierung und erstellt 3 Aktionsbefehle und 3 Infobefehle, die der Farbtonsättigungsintensität entsprechen
- Im Allgemeinen kann es vorkommen, dass der vom Plugin erstellte Subtyp nicht mit den Daten übereinstimmt, dann müssen Tests durch Modifikation durchgeführt werden.

Sie können die resultierende Konfiguration teilen, indem Sie auf die Schaltfläche Exportieren klicken. Übertragen Sie den Inhalt des configGet-Felds und ein Foto des Geräts an den Entwickler.

## Lernmodus

Aktivieren Sie das Kontrollkästchen "Einschlussmodus" in der Gerätekonfiguration und speichern Sie es, um die in der vorherigen Phase vergessenen oder die nach Auswahl des Untertyps nicht angebotenen Befehle hinzuzufügen. Beenden Sie den Vorgang, indem Sie auf die Schaltfläche "Aufnahme beenden" klicken und speichern.

Wenn Sie nach Auswahl eines Untertyps von einer Standardkonfiguration ausgehen und das Training hinzufügen, um die Standard-DPS zu überprüfen, müssen Sie die von der Standardkonfiguration erstellten Befehle ändern und die durch das Training erstellten Befehle löschen. Tatsächlich werden beim Speichern immer die Standard-DPS neu erstellt, andernfalls können sie nicht angezeigt werden.

## Manueller Auftragserstellungsmodus

Dieser Modus ist nützlich für die Befehle, die angepasst werden müssen (dps, parameter), um mehrere dps gleichzeitig zu senden oder für das Farbmanagement der Lampen, ansonsten verwenden Sie die vorgeschlagenen Untertypen oder den Lernmodus.

Das Verfahren erfordert, dass das Gerät seinen Status in den Protokollen zurückgibt. Wenn das Gerät seinen Status nicht zurückgibt, können cid und dps nicht in den Protokollen gefunden werden. Experten können die Liste der Geräte-DPS und deren Cid finden, da sie während des Suchvorgangs neben dem localKey angezeigt werden.

Das Plugin ist mit Schaltflächen ausgestattet, mit denen Sie die Befehle für die gängigsten Fälle automatisch erstellen können. Es reicht aus, die Anzahl der dps oder den automatisch erstellten Parameter zu ändern. Siehe [hier](./tuya#tocAnchor-1-10-8) zum Verständnis von Protokollen und der manuellen Erstellung von Befehlen.

## Batteriebetriebene Geräte

Damit der Kapazitätsprozentsatz in Analysis/Equipment angezeigt wird, muss der logische Name des entsprechenden Info-Befehls batterie und get enthalten.

# Tuya

Um diese Peripheriegeräte ohne Tuya/Zigbee-Gateway zu verwenden, wählen Sie den Typ: "Tuya SmartLife kompatibel V3"

## Kompatibilität

Viele Marken sind mit dem Plugin kompatibel. Weitere Informationen finden Sie im Forum. Das Plugin ermöglicht die Steuerung vieler Aktoren.
Es kann den Zustand der Peripheriegeräte abrufen, sobald es eine Zustandsänderungsinformation sendet oder diese jede Minute abfragt. Wenn ein Wandschalter verwendet wird, weiß Jeedom sofort Bescheid.

Die folgenden Geräte sind mit Firmware 1.0 kompatibel. und in Firmware 2.0.

- einfache Steckdosen mit und ohne Verbrauchsrückgabe, insbesondere Neo Coolcam Wifi Steckdosen
- Mehrfachsteckdosen mit und ohne Verbrauch mit und ohne USB
- Rollladensteuerung (4 Modelltypen, davon 1 mit LED und Positionsinformationen)
- Wandschalter: 1, 2 oder 3 inter
- Wandschalter mit Dimmer
- NEWKBO 300 ml Luftbefeuchter und nur dieser
- Thermostat BHT-6000GCLW / BHT 6000 und nur diese Modelle
- RGBW Globe-Glühbirnen und ähnliche Modelle in Betrieb
- Smart Garage (Beta)
- 2 Diffusoren inklusive Maxcio
- Elektrische Heizung
- Proscenic (der Staubsauger ist nicht kompatibel und das Integrationsverfahren ist komplex)
- Pilotdraht
- Meerjungfrau
- Alarm (nur Info)
- Lidl Heizlüfter

Die Kompatibilität dieser Geräte ist jedoch nicht gewährleistet, da das Protokoll von den Herstellern modifiziert werden kann. Ändern Sie die Firmware des Geräts nicht, ohne überprüft zu haben, ob es mit dem Plugin kompatibel ist.

Die Präsenz- und Öffnungssensoren sind nicht kompatibel, da sie nicht lokal kommunizieren. Andere Geräte aus der obigen Liste können auch nur über das Internet funktionieren, sie sind nicht mit dem Plugin kompatibel. Fragen Sie den Verkäufer, ob der LAN-Modus aktiv ist.

## Erstkonfiguration eines Gerätes

Es ist wichtig, einen lokalen Schlüssel (localKey) und eine devId zu erhalten, die es dem Plugin ermöglichen, mit den Geräten zu kommunizieren.

Das Verfahren ist komplex und erfordert mehrere Manipulationen. Suchen Sie im Web mit dem Stichwort: Tuya localKey, insbesondere auf Github oder im [Jeedom-Forum](https://community.jeedom.com/t/plugin-wifilightv2-recuperer-id-et-localkey-pour-tuya-smartlife/13047).

Das Gerät darf nicht mit einer Anwendung auf einem Mobiltelefon verbunden sein, da es sonst nicht auf Befehle von Jeedom reagiert. Schließen Sie daher eventuell mit dem Gerät verbundene Anwendungen.

Wenn das Gerät deinstalliert und dann in der mobilen App neu installiert wird, wird sein Schlüssel geändert. Sie müssen den Schlüssel wie oben beschrieben finden.

Es wird keine Hilfe beim Abrufen des lokalen Schlüssels oder der devId gegeben.

## Tuya Smartlife-kompatibel V1
Der Typ V1 entspricht Geräten mit Firmware 1.0. Geräte mit dieser Firmware werden nicht mehr verkauft und ihre Firmware kann mit der Smartlife App aktualisiert werden. Es werden keine neuen Geräte hinzugefügt. Sie müssen auf V3 umsteigen.

Das Plugin testet Geräte (diese müssen aber manuell hinzugefügt werden) und zeigt eine Meldung im Message Center an, wenn ein Gerät mit der falschen Firmware konfiguriert wurde.

Es gibt einige Geräte, die 1.x-Firmware anbieten und dennoch 2.x-Firmware anbieten, wie z. B. einige Rollladensteuerungen.

Für Mehrkanalgeräte wie Steckdosen müssen Sie ein wifilightV2 pro Kanal erstellen.

Mit den Energiekonfigurationsparametern für die Steckdosen, die sie verwalten, können Sie Spannung, Stromstärke und Leistung die richtigen dps zuweisen (siehe unten).


## Tuya Smartlife-kompatibel V2
Typ V2 entspricht Geräten mit Firmware 2.0. Zusätzlich zu dieser Kompatibilität besteht die Möglichkeit, benutzerdefinierte Befehle hinzuzufügen. Es werden keine neuen Geräte hinzugefügt. Typ V2 sollte für neue Geräte nicht mehr verwendet werden und ist vorhanden, um die Kompatibilität mit alten Versionen des Plugins zu gewährleisten, müssen Sie auf V3 umsteigen

Für Mehrkanalgeräte wie Steckdosen müssen Sie ein wifilightV2 pro Kanal erstellen.

Mit den Energiekonfigurationsparametern für die Steckdosen, die sie verwalten, können Sie Spannung, Stromstärke und Leistung die richtigen dps zuweisen. Um diese Einstellung abzurufen, installieren Sie das Plug-in Jeedom und gehen Sie dann zu den wifilightV2-Protokollen. Die Steckdose wird jede Minute abgefragt. Suchen Sie nach der Nachricht, die wie folgt aussieht:

    Mess:{"devId":"xxxxxxxxxghekqd","dps":{"1":false,"2":false,"9":0,"10":0,"18":0,"19":0,"20":2281,"21":1,"22":726,"23":28971,"24":19417,"25":1070}}

Der Index "20" entspricht hier der Versorgungsspannung in Hunderten von mV, dh: 228,1 V, sie sollte sich leicht bewegen. Die Indizes „18“ und „19“ entsprechen dem Strom (mA) und der Leistung in W, hier ist kein Gerät angeschlossen und somit die Angabe Null. Dies ist eine gute Möglichkeit, die Spannung zu ermitteln, indem Sie ein Gerät anschließen, diese 2 Werte müssen geändert werden und die Spannung ist gleich danach.

Die Syntax lautet dann: 20;18;19 was in V1 und V2 in das Feld 'Energieeinstellungen' eingetragen werden muss.

Für 1-Buchsen-Stecker benötigen Sie im Allgemeinen: 6;4;5 (standardmäßig vom Plugin eingestellt).

Für 2-Wege-Stecker benötigen Sie im Allgemeinen: 9;7;8 (standardmäßig vom Plugin eingestellt).

Für die anderen Ausgänge ist standardmäßig der Wert 20;18;19 eingestellt.


## Tuya Smartlife kompatibel V3
Der Typ V3 entspricht Geräten mit Firmware 2.0. Neben dieser Kompatibilität besteht die Möglichkeit, die dps-Nummer und die dps-Parameter aller in V3 vorhandenen Geräte fein zu modifizieren, um sie bei Bedarf anzupassen. Der V3-Typ verfügt auch über einen Lernmodus für dps und periphere Parameter. Bei diesem Typ werden alle Befehle für dasselbe Gerät in einem einzigen wifilightV2 erstellt, auch für mehrere Steckdosen.

Mit der Option "Statusabfrage" können Sie den Status alle 20s abfragen, auch wenn das Peripheriegerät ihn nicht zurücksendet. Zu verwenden für die Steckdosen, die den Verbrauch nicht regelmäßig zurückgeben, aber nicht für die batteriebetriebenen Peripheriegeräte, bei denen diese entleert werden.

## Auswahl eines in der Liste der Untertypen vorgeschlagenen Standard-V3-Geräts
Dieses Verfahren ist vorzuziehen, da es am einfachsten ist. Wählen Sie den Untertyp aus, der dem zu integrierenden Gerät entspricht. Einige optisch sehr ähnliche Geräte weisen jedoch unterschiedliche Verhaltensweisen auf. Testen Sie alle Untertypen, die möglicherweise übereinstimmen, und stellen Sie sicher, dass sie ordnungsgemäß funktionieren.

Sie haben die Möglichkeit, die Anzahl der dps sowie deren Parameter zu ändern, um ein Gerät anzupassen, das ein geringfügig anderes Verhalten als das vom Plugin vorgeschlagene hat. Sehen Sie sich den manuellen Erstellungsmodus der folgenden Befehle an, um die in den Plugin-Protokollen enthaltenen Informationen zu verwenden.

Wenn Sie Befehle löschen, werden diese beim Speichern des Geräts automatisch neu erstellt, es ist besser, das Kontrollkästchen "Anzeigen" zu deaktivieren.

## Lernmodus in V3

Um mit dem Lernen zu beginnen, müssen Sie das Gerät mit den richtigen Parametern manuell erstellen: IP, localKey, devId und der benutzerdefinierte Untertyp. Aktivieren Sie das Kontrollkästchen "Einschlussmodus" und speichern Sie das Gerät, das dann in den Aufnahmemodus wechselt. Warten Sie einige Sekunden und ändern Sie den Zustand des aktuellen Geräts oder mit der Smartlife-App, damit das Plugin die Aktionen und Infobefehle automatisch erstellt, nutzen Sie alle Möglichkeiten der App. Klicken Sie abschließend auf die Schaltfläche "Aufnahme beenden" und speichern Sie.

Dieser Modus ist nur dazu da, die personalisierte Konfiguration eines neuen Geräts zu unterstützen, das das Plugin nicht bietet. Die Verwendung dieses Modus kann nicht zu einem voll funktionsfähigen Gerät führen und erfordert Verständnis, um die erstellten Befehle zu löschen oder zu ändern.

Beispiele für Modifikationen:
- Wenn der dps nur einer Info im Peripheriegerät entspricht (zum Beispiel 3 mögliche Werte der gleichen Schaltfläche), müssen Sie die 3 automatisch erstellten Aktionsbefehle löschen. Die Aktionsbefehle haben jedoch als Parameter alle vom Plugin abgerufenen Werte und ermöglichen es, die von der dps-Info übernommenen Werte zu kennen.
- Bei digitalen dps werden automatisch ein Info-Befehl und ein digitaler Aktionsbefehl erstellt, wenn nur die Info sinnvoll ist (bei der Temperatur eines Sensors), muss der Aktionsbefehl gelöscht werden. Wenn die Zahlenwerte beim Lernen die Werte 0 oder 1 annehmen, erzeugt das Plugin auch 3 STATE / ON / OFF-Befehle, diese müssen gelöscht werden.
- Für dps, die eine 0/1-Info für einen Alles-oder-Nichts-Aktor enthalten, wie z. B. eine Steckdose, erstellt das Plugin eine Info und 2 EIN / AUS-Aktionen.
- Bei einem dps mit true oder false werden automatisch ein Info-Befehl und zwei Aktionsbefehle (ON und OFF) erzeugt, wenn nur die Info sinnvoll ist (bei einem Präsenzsensor) müssen die Aktionsbefehle gelöscht werden.
- Bei dps mit Farbinformationen identifiziert das Plugin die Farbcodierung und erstellt 3 Aktionsbefehle und 3 Infobefehle, die der Farbtonsättigungsintensität entsprechen
- Im Allgemeinen kann es vorkommen, dass der vom Plugin erstellte Subtyp nicht mit den Daten übereinstimmt, dann müssen Tests durch Modifikation durchgeführt werden.

Wenn Sie nach der Auswahl eines Untertyps von einer Standardkonfiguration ausgehen und Training hinzufügen, um die Standard-DPS zu überprüfen, müssen Sie die von der Standardkonfiguration erstellten Befehle ändern und die durch das Training erstellten Befehle löschen. Tatsächlich werden beim Speichern immer die Standard-DPS neu erstellt, andernfalls können sie nicht angezeigt werden.

Sie können die resultierende Konfiguration teilen, indem Sie auf die Schaltfläche Exportieren klicken. Übertragen Sie den Inhalt des configGet-Felds und ein Foto des Geräts an den Entwickler.

## Manueller Erstellungsmodus von Bestellungen in V3

Dieser Modus ist nützlich für die Befehle, die angepasst werden müssen (dps, parameter), um mehrere dps gleichzeitig zu senden oder für das Farbmanagement der Lampen, ansonsten verwenden Sie die vorgeschlagenen Untertypen oder den Lernmodus.

Das Verfahren erfordert, dass das Gerät seinen Status in den Protokollen zurückgibt. Wenn das Gerät seinen Status nicht zurückgibt, können die devId und die dps nicht in den Protokollen gefunden werden. Experten können die dps und die devId finden, da sie während der Suche neben dem localKey angezeigt werden.

Das Plugin ist mit Schaltflächen ausgestattet, mit denen Sie die Befehle für die gängigsten Fälle automatisch erstellen können. Es reicht aus, die Anzahl der dps oder den automatisch erstellten Parameter zu ändern.


### Aufbau
- alle wifilightV2-Geräte außer dem zu testenden deaktivieren
- Gerät richtig konfigurieren (statische IP-Adresse, localKey, devId)
- Überprüfen Sie, ob der Daemon läuft, ansonsten starten Sie ihn
- Konfigurieren Sie die wifilightV2-Logs im Debug-Modus, starten Sie den Daemon neu
- Protokolle löschen

### Informationsrückgewinnung
- Drücken Sie eine Taste auf dem physischen Gerät (ein, aus, oben, unten usw.) oder warten Sie, bis das Gerät seinen Status zurückgibt, oder drücken Sie eine Taste in der SmartLife-App (aber im letzteren Fall kann dies den Status verhindern Rückmeldung).
- Suchen Sie die Statusrückmeldung in den Protokollen

Nutzen Sie alle Möglichkeiten der Tuya-Anwendung und identifizieren Sie in den Protokollen eindeutig die Anzahl der dps und deren Wert, die an das Plugin gesendet werden.


### Fall eines Alles-oder-Nichts-Aktuators, wahr/falsch

In den Protokollen finden wir bei der Nutzung der Smartlife-App zum Beispiel:

    Mess:{"devId":"xxxxxxxxxghekqd",dps:{"2":true,"8":true}}

Hier wurde auf dem Gerät die Ausschalttaste ausgewählt und wir beobachten, dass sich die dps von # 2 geändert haben.

    Mess:{"devId":"xxxxxxxxxghekqd",dps:{"2":false,"8":true}}

Hier wurde am Gerät die Einschalttaste ausgewählt und wir beobachten, dass sich die dps von Nr. 2 geändert haben.

Klicken Sie auf die ON/OFF-Schaltfläche auf der Benutzeroberfläche, um automatisch die 3 Befehle zum Verwalten der ON/OFF-Schaltflächen zu erstellen. Es reicht aus, die Anzahl der dps zu ändern, indem Sie 2 eingeben. Fügen Sie für die Parameter true und false keine Anführungszeichen hinzu.

So konfigurieren Sie manuell:

- Anlegen einer neuen Aktion/Standardbefehl in den Gerätebefehlen:
    * Geben Sie in der Schnittstellenspalte als Namen der Schaltfläche ON ein
    * Geben Sie in der Spalte für den internen Namen und die Auftragsnummer als eindeutige Id: _ON, als dps-Nummer: 2 (ohne Anführungszeichen) und als Parameter: true ein.
- Erstellen Sie eine neue Aktion / einen neuen Standardbefehl in den Gerätebefehlen:
    * Geben Sie in der Schnittstellenspalte als Namen der Schaltfläche OFF ein
    * Tragen Sie in der Spalte interner Name und Auftragsnummer als eindeutige Id: _OFF, als dps-Nummer: 2 (ohne Anführungszeichen) und als Parameter: false ein.
- Erstellen Sie einen neuen Info-/Binärbefehl in den Gerätebefehlen:
    * Geben Sie in der Spalte Schnittstelle STATE als Namen der Info ein
    * Geben Sie in der Spalte interner Name und Auftragsnummer als eindeutige Id: _STATE, als Anzahl der dps: 2 (ohne Anführungszeichen) und nichts in Parametern ein.

### Fall eines Aktors mit mehreren Modi

In den Protokollen finden wir bei der Nutzung der Smartlife-App zum Beispiel:

    Mess:{"devId":"xxxxxxxxxghekqd",dps:{"1":"off","101":true}}

Hier wurde am Gerät der Off-Button ausgewählt und wir beobachten, dass sich die dps von # 1 geändert haben.

    Mess:{"devId":"xxxxxxxxxghekqd",dps:{"1":"on","101":true}}

Hier wurde am Gerät die Einschalttaste ausgewählt und wir beobachten, dass sich die dps von Nr. 1 geändert haben.

    Mess:{"devId":"xxxxxxxxxghekqd",dps:{"1":"stop","101":true}}

Hier wurde die Stopptaste am Gerät ausgewählt und wir beobachten, dass sich die dps von Nr. 1 geändert haben.

Klicken Sie auf die Schaltfläche "Schaltflächen" auf der Benutzeroberfläche, um automatisch die 4 Befehle zur Verwaltung der EIN / AUS / STOP-Schaltflächen zu erstellen. Es reicht aus, die dps-Nummer durch Eingabe von 1 zu ändern. Für die Parameter setzen Sie "on", "off" und "stop", die Anführungszeichen enthalten, da sie nach der dps-Nummer 1 stehen.

So konfigurieren Sie manuell:

- Anlegen einer neuen Aktion / Standardbefehl in den Gerätebefehlen:
    * Geben Sie in der Schnittstellenspalte als Namen der Schaltfläche ON ein
    * Tragen Sie in der Spalte interner Name und Auftragsnummer als eindeutige Id: _ON, als dps-Nummer: 1 (ohne Anführungszeichen) und als Parameter: "on" ein (wenn das on nicht in Anführungszeichen steht, müssen sie entfernt werden).
- Erstellen Sie eine neue Aktion / einen neuen Standardbefehl in den Gerätebefehlen:
    * Geben Sie in der Schnittstellenspalte als Namen der Schaltfläche OFF ein
    * Tragen Sie in der Spalte interner Name und Auftragsnummer als eindeutige Id: _OFF, als dps-Nummer: 1 (ohne Anführungszeichen) und als Parameter: "off" ein (wenn das off nicht in Anführungszeichen steht, müssen sie entfernt werden).
- Erstellen Sie eine neue Aktion/einen neuen Standardbefehl in den Gerätebefehlen:
    * Geben Sie in der Schnittstellenspalte STOP als Namen der Schaltfläche ein
    * Tragen Sie in die Spalte interner Name und Auftragsnummer als eindeutige Id: _STOP, als dps-Nummer: 1 (ohne Anführungszeichen) und als Parameter: "stop" ein (wenn der Stop nicht in Anführungszeichen steht, müssen sie entfernt werden).
- Erstellen Sie in den Gerätebefehlen einen neuen Info/anderen Befehl:
    * Geben Sie in der Spalte Schnittstelle STATE als Namen der Info ein
    * Tragen Sie in der Spalte interner Name und Auftragsnummer als eindeutige Id: _STATE, als dps-Nummer: 1 (ohne Anführungszeichen) und nichts in Parametern ein.

### Bei einer digitalen Steuerung, beispielsweise einer Intensitätssteuerung:

In den Protokollen finden wir bei der Verwendung der Smartlife-App:

    Mess:{"devId":"xxxxxxxxxghekqd",dps:{"3":850,"101":true}}

Hier wurde in der Geräte-App ein Intensitätsschieberegler ausgewählt und es wird beobachtet, dass sich die dps von # 3 geändert haben.

Klicken Sie auf die Schaltfläche Cursor auf der Benutzeroberfläche, um automatisch die 2 Befehle zur Verwaltung des Cursors zu erstellen. Um sie nach Bedarf anzupassen, müssen Sie nur die dps-Zahlen ändern und 3 (ohne Anführungszeichen) eingeben. Für den Parameter des Aktionsbefehls: entweder nichts hinterlassen, oder #slider# einfügen oder eine Formel eingeben, zum Beispiel: #slider#/10. Für den info-Parameter ist es dasselbe, außer dass Sie #value# verwenden müssen. Setzen Sie keine Anführungszeichen, da nach der dps-Nummer keine stehen.

So konfigurieren Sie manuell:

- Erstellen Sie einen neuen Aktions-/Cursorbefehl in den Gerätebefehlen:
    * Geben Sie in der Schnittstellenspalte Intensität als Name des Cursors ein
    * Tragen Sie in der Spalte interner Name und Auftragsnummer als eindeutige Id: _Intensite, als dps-Nummer: 3 (ohne Anführungszeichen) und als Parameter: #slider# (hier wird der Zahlenwert nicht in Anführungszeichen gesetzt, also nicht setzen) ).
- Erstellen Sie in den Gerätebefehlen einen neuen Info/anderen Befehl:
    * Geben Sie in der Schnittstellenspalte IntensiteGet als Namen der Info ein
    * Tragen Sie in der Spalte interner Name und Auftragsnummer als eindeutige Id: _IntensiteGet, als dps-Nummer: 3 (ohne Anführungszeichen) und nichts in Parametern ein.


### Bei einem digitalen Sensor, z. B. einem Temperatursensor:

In den Protokollen finden wir bei der Verwendung der Smartlife-App:

    Mess:{"devId":"xxxxxxxxxghekqd",dps:{"8":23,"101":true}}

Hier ist es eine Temperatur, die regelmäßig gesendet wird und wir beobachten, dass sich die dps von Nr. 8 geändert haben.

Klicken Sie auf die Schaltfläche Info Num auf der Benutzeroberfläche, um automatisch den Befehl zum Abrufen der Temperatur zu erstellen. Um sie bei Bedarf anzupassen, müssen Sie lediglich die dps-Zahl ändern, hier 8 (ohne Klammern). Lassen Sie für den info-Parameter entweder nichts oder geben Sie #value# ein oder geben Sie eine Formel ein, zum Beispiel: #value#/10. Setzen Sie keine Anführungszeichen, da nach der dps-Nummer keine stehen.

So konfigurieren Sie manuell:

- Erstellen Sie in den Gerätebefehlen einen neuen Info / anderen Befehl:
    * Geben Sie in der Spalte Schnittstelle TempGet als Namen der Info ein
    * Tragen Sie in der Spalte interner Name und Auftragsnummer als eindeutige Id: _TempGet, als Anzahl der dps: 8 (ohne Anführungszeichen) und nichts in Parametern ein.

### Bei einem Alles-oder-Nichts-Sensor, wie z. B. einem Türmelder:

In den Protokollen finden wir bei der Verwendung der Smartlife-App:

    Mess:{"devId":"xxxxxxxxxghekqd",dps:{"12":1}}

    Mess:{"devId":"xxxxxxxxxghekqd",dps:{"12":0}}

Hier werden die Informationen zum Öffnen und Schließen gesendet und wir stellen fest, dass sich die dps von Nr. 12 geändert haben.

Klicken Sie in der Benutzeroberfläche auf die Schaltfläche Info Bin, um automatisch den Auftrag zum Abrufen des Wertes zu erstellen. Um es nach Bedarf anzupassen, müssen Sie nur die dps-Zahl ändern und 12 (ohne Anführungszeichen) eingeben. Die Parameter sollten leer bleiben.

So konfigurieren Sie manuell:

- Erstellen Sie einen neuen Info-/Binärbefehl in den Gerätebefehlen:
    * Geben Sie in der Spalte Schnittstelle PorteGet als Namen der Info ein
    * Tragen Sie in der Spalte interner Name und Auftragsnummer als eindeutige Id: _PorteGet, als Anzahl der dps: 12 (ohne Anführungszeichen) und nichts in Parametern ein.

### Bei der Farbe einer Lampe:

Dieser Teil ist komplex und erfordert eine sehr sorgfältige Lektüre.

Die Farbcodierung bei Tuya hat mehrere Formate, die sich von denen von Jeedom unterscheiden. Jeedom verwendet das RGB-Format (Reg Green Blue), während Tuya verschiedene HSV-Formate (Hue Saturation Value) verwendet oder HSV und RGB kombiniert. Das RGB kodiert jede Farbe von 0 bis 255 oder hexadezimal von 0 bis FF. Rot wird daher mit FF0000 codiert, Blau: 0000FF, Weiß: FFFFFF und Schwarz: 000000. Die Werte für HSV sind wie folgt: Farbton von 0 bis 360° (Farbe), S von 0 bis 100% (Sättigung) und V ab 0 bis 100 % (Intensität). Siehe [hier](https://www.rapidtables.com/convert/color/), um weiter zu gehen.

Damit das Plugin für die Farben korrekt funktioniert, ist es notwendig, die von Tuya verwendeten Formate bei einem Farbwechsel mit der Smartlife-App zu identifizieren und in diesem Moment in den Protokollen die Anzahl der geänderten dps zu beobachten. .

1 - HSV-Format: H (kodiert von 0 bis 360) S (kodiert von 0 bis 1000) V (kodiert von 0 bis 1000) das Ergebnis wird dann in der Basis 16, also 12 hexadezimalen Stellen angegeben. Beispiel für Rot: RGB = FF0000 und H = 0° S = 100 % V = 100 % oder in Tuya-Codierung 000003E803E8 (Hue = 0000 S = 03E8 V = 03E8)

2 - RGB00HSV-Format: RGB ist mit 6 Ziffern kodiert (jeweils von 00 bis FF für jede Farbe). 00 wird eingefügt, dann H (kodiert von 0 bis 255) S (kodiert von 0 bis 255) V (kodiert von 0 bis 255). Das Ergebnis wird zur Basis 16, also 14 hexadezimalen Stellen, angegeben. Beispiel für Rot: RGB = FF0000 und H = 0° S = 100 % V = 100 % oder in Tuya-Codierung FF00000000FFFF

3 - RGB0HSV-Format: RGB werden wie oben codiert. 0 wird eingefügt, dann H (kodiert von 0 bis 360) S (kodiert von 0 bis 100) V (kodiert von 0 bis 100). Das Ergebnis wird zur Basis 16, also 14 hexadezimalen Stellen, angegeben. Beispiel für Lila: RGB = FF00FF und H = 300 ° S = 100 % V = 100 % oder in Tuya-Codierung FF0000012C6464

In den Protokollen finden wir bei der Änderung der Farbe der Lampe:

    Mess:{"devId":"633225xxxxx","dps":{"1":true,"27":true,"28":"white","29":254,"31":"08ff0000766464","32":"cf38000168ffff","33":"ffff500100ff00"}

Es ist notwendig, die Anzahl der dps zu ermitteln, die sich ändert, hier ist es die 31, die 08ff0000766464 ist. Die letzten 2 64 hexadezimal ergeben 100 dezimal. 08 = R FF = G 00 = B 076 = Farbton, das ist das Format 3. Klicken Sie auf die Schaltfläche Farbe 3 und ändern Sie die Anzahl der dps auf 31. Ändern Sie die Parameter nicht.

So erstellen Sie die 6 Schaltflächen bei einem Farbformat manuell:

- Erstellen Sie einen neuen Aktions-/Farbbefehl in den Gerätebefehlen:
    * Geben Sie in der Spalte Schnittstelle Farbe als Namen ein
    * In der Spalte interner Name und Auftragsnummer als eindeutige Id: _Color, als dps-Nummer: 120 (ohne Anführungszeichen) und als Parameter: "#colorH4S4V4_1000#" (hier wird der Wert in Anführungszeichen gesetzt, muss also gesetzt werden ).
- Erstellen Sie in den Gerätebefehlen einen neuen Info / anderen Befehl:
    * Geben Sie in der Spalte Schnittstelle ColorGet als Namen der Info ein
    * Tragen Sie in der Spalte interner Name und Auftragsnummer als eindeutige Id: _ColorGet, als Anzahl der dps: 120 (ohne Anführungszeichen) und "#colorH4S4V4_1000#" in den Parametern ein.
- Erstellen Sie einen neuen Aktions-/Cursorbefehl in den Gerätebefehlen:
    * In der Schnittstellenspalte geben Sie Intensität als Namen ein
    * Geben Sie in der Spalte interner Name und Auftragsnummer als eindeutige Id: _Intensity, als Anzahl der dps: 120 (ohne Anführungszeichen) und als Parameter: #slider_intH4S4V4_1000# (ohne Anführungszeichen) ein.
- Erstellen Sie einen neuen Aktions-/Cursorbefehl in den Gerätebefehlen:
    * Geben Sie in der Schnittstellenspalte den Namen Sättigung ein
    * Geben Sie in der Spalte interner Name und Auftragsnummer als eindeutige Id: _Saturation, als Anzahl der dps: 120 (ohne Anführungszeichen) und als Parameter: #slider_satH4S4V4_1000# (ohne Anführungszeichen) ein.
- Erstellen Sie einen neuen Info / numerischen Befehl in den Gerätebefehlen

### Ändern Sie mehrere Anzahlen von dps in derselben Reihenfolge

Um mehrere dps-Nummern gleichzeitig zu senden, geben Sie \* in die dps-Anzahl ein und geben Sie den vollständigen Befehl ohne geschweifte Klammern in das Parameterfeld ein. Eine und nur eine der dps-Zahlen kann ein Cursor oder (ausschließlich) eine Farbe sein.

Erstellen Sie eine Aktion / einen anderen Befehl und geben Sie Parameter ein:

    "1":false,"3":"color"
   
Ermöglicht das Einschalten der Lampe und das Umschalten auf Farbe.

Erstellen Sie einen Aktions/Cursorbefehl und geben Sie Parameter ein:

    "1":true,"3":#slider#/10
   
Ermöglicht Ihnen, die Lampe einzuschalten und die Intensität zu ändern. Eine Formel auf dem #slider# kann angewendet werden.
 
Erstellen Sie einen Aktions-/Farbbefehl und geben Sie Parameter ein:

    "2":"color","3":"#colorR2G2B200H2S2V2_255#"
   
Ermöglicht Ihnen, die Lampe in den Farbmodus zu schalten und die Farbe festzulegen. Das Plugin verwendet die Farbe, Intensität und Sättigung des Farb-Widgets.

### Mehrere dps-Nummern mit Status-Feedback ändern

Um mehrere dps-Nummern gleichzeitig mit Statusrückmeldung zu senden, geben Sie in das Feld n ° of dps den Wert der dps-Nummer ein, die aktualisiert werden muss, gefolgt von dem Zeichen \*. Geben Sie den vollständigen Befehl ohne die geschweiften Klammern in das Parameterfeld ein. Eine und nur eine der dps-Zahlen kann ein Cursor oder (ausschließlich) eine Farbe sein.

Erstellen Sie einen Aktions/Cursorbefehl, geben Sie 3\* in das Feld n ° of dps ein und geben Sie die Parameter ein:

    "1":true,"3":#slider#/10
   
Ermöglicht das Einschalten der Lampe und das Ändern der Intensität, die Befehlsinformationen von dps n ° 3 werden aktualisiert.
 
Erstellen Sie einen Aktions/Farbbefehl, geben Sie 3\* in das Feld n ° of dps ein und geben Sie die Parameter ein:

    "2":"color","3":"#colorR2G2B200H2S2V2_255#"
   
Ermöglicht Ihnen, die Lampe in den Farbmodus zu schalten und die Farbe festzulegen. Das Plugin verwendet die Intensität und Sättigung der Intensitäts- und Sättigungsregler von dps 3.


## Batteriebetriebene Geräte

Damit der Kapazitätsprozentsatz in Analysis/Equipment angezeigt wird, muss der logische Name des entsprechenden Info-Befehls battery und get enthalten.


# Debugging

## Vorläufiger Test und Konfiguration

1.das zu prüfende Gerät in die Smartlife-App aufgenommen wurde,
2. Bei einem Tuya/Zigbee-Gerät muss dessen Gateway in der Smartlife-App enthalten sein und das Gerät muss auch enthalten sein
3. der localKey und die devId oder cid wurden abgerufen (das Debuggen kann ermöglichen, dass cid und devId gefunden werden)
4.das Gerät und sein mögliches Gateway wurden nicht aus der Smartlife-App gelöscht und die Smartlife-App wurde nicht gelöscht
5.Smartlife-App wird auf allen Terminals gestoppt, die sie ausführen können
6. die IP-Adresse des Gerätes (Tuya oder Tuya/Zigbee Gateway) wird fest eingestellt und ist bekannt
7.konfiguriere die wifilightV2-Logs im Debug-Modus, starte den Daemon neu

## Überprüfen Sie, ob das Gerät gefunden und verbunden ist

1. in wifilightV2 alle Geräte außer dem zu testenden deaktivieren (bei einem mehrkanaligen Gerät nur einen Kanal beibehalten) (bei einem an ein Gateway angeschlossenen Gerät muss das Gateway aktiviert bleiben), das Ziel ist nicht alle Geräte zu mischen
2.Protokolle löschen
3.Speichern Sie das Gerät im Plugin: Dies hat den Effekt, dass der Daemon gestartet wird, der jede Minute wifilightV2-Geräte testet

Beispiel für ein OK-Log, bei dem das Plugin das Gerät also mit der richtigen IP-Adresse gefunden hat:

    [2021-03-29 06:36:42][DEBUG] : ** Zigbee plug - TuyaCustom2_V2 @192.168.1.106 - c:12 **
    [2021-03-29 06:36:42][DEBUG] :     Key not set New device: created  @192.168.1.106 ADD New device @192.168.1.106 channel:12 key:1 @192.168.1.106 c:12 d:0

-Dann sind die Protokolle vom Typ:
    [2021-03-29 06:31:21][DEBUG] : ** Zigbee plug - TuyaCustom2_V2 @192.168.1.106 - c:12 **
    [2021-03-29 06:31:21][DEBUG] :      key:1 @192.168.1.106 c:12 d:1

Beispiel für ein KO-Log, bei dem das Plugin das Gerät nicht gefunden hat, also schlechte IP-Adresse

    [2021-03-05 07:13:55][DEBUG] : ** Zigbee plug - TuyaCustom2_V2 @192.168.1.199 - c:11 **
    [2021-03-05 07:13:55][DEBUG] :     Key not set New device: created  @192.168.1.199 close Connection impossible. Err=115 : Operation now in progress ADD New device @192.168.1.199 channel:11

Anschließend werden die Nachrichten vom Typ sein:

    [2021-03-05 07:15:04][DEBUG] : << Ping of: lidl @192.168.1.130  diff:24
    [2021-03-05 07:15:04][DEBUG] :     Cmd to 192.168.1.130 - Try:192.168.1.130  6668 - Connect OK!

Es kann dann zu Verbindungsabbrüchen kommen oder dass die Smartlife App auch mit dem Gerät verbunden ist, in diesem Fall lautet die Meldung in den Protokollen:

    [2020-12-10 07:36:40][DEBUG] : << Ping of: Zigbee plug @192.168.1.122  diff:24
    [2020-12-10 07:36:40][DEBUG] :     Cmd to 192.168.1.122 - Try:192.168.1.122  6668 - Connect OK!
    [2020-12-10 07:36:40][DEBUG] :     Error on:192.168.1.122 is :Connection reset by peer n:104  diff:16

oder kein Ping mehr in den Protokollen für diese IP-Adresse vorhanden ist, entspricht dies einer schlechten dauerhaften Verbindung zwischen dem Gerät und Jeedom oder wenn das Gerät nicht mehr mit Strom versorgt wird.

Das Plugin versucht jede Minute oder alle 3 Minuten, sich wieder mit dem Gerät zu verbinden, wodurch es das Gerät finden kann, wenn es erneut verbunden wird.

Zu diesem Zeitpunkt wird nur geprüft und in Ordnung, dass die IP-Adresse korrekt ist und das Gerät erreichbar ist.

## Überprüfen Sie, ob der localKey korrekt ist

Bei einem Tuya/Zigbee-Gateway müssen die Tests auf einem mit dem Gateway verbundenen Gerät durchgeführt werden. Das Gateway allein gibt keine Nachricht zurück.

1.Geben Sie den localKey ohne Leerzeichen und ohne Anführungszeichen in das Token-Feld des Geräts (und des Gateways, falls vorhanden) ein. Mehrmals prüfen: Der localKey muss bei allen Geräten mit derselben IP-Adresse (Tuya/Zigbee-Geräte, die an einem Gateway angeschlossen sind oder Mehrkanalgeräte) gleich sein. Das Plugin verwendet einen dieser Schlüssel, um mit dem Gerät zu kommunizieren, also überprüfen Sie, ob sie korrekt und identisch sind.
2. Deaktivieren Sie in wifilightV2 alle Peripheriegeräte außer dem zu testenden (behalten Sie nur einen Kanal bei Mehrkanal-Peripheriegeräten), das Ziel ist nicht, alle Peripheriegeräte zu mischen.
3.Protokolle löschen
4.Verwenden Sie entweder die Tasten auf dem physischen Gerät oder die Smartlife-App, um den Status des Geräts zu ändern.

Anmerkungen:
- die Smartlife-App kann den Dialog zwischen dem Plugin und dem Gerät verhindern. Am besten starten Sie die Smartlife-App nach obiger Verbindung mit dem Gerät. Umgekehrt reagiert die Smartlife-App möglicherweise sehr schlecht.
- Wenn das Gerät seinen Status nicht zurückgibt, müssen die Informationen über die dps und die devId oder die cid in der Datei gefunden werden, die es ermöglicht hat, den localKey abzurufen, sie befinden sich direkt daneben. Die cid wird in den SmartLife-App-Paketen als nodeId bezeichnet.

Beispiel für log KO, bei dem der localKey nicht gut ist, weil der vom Plugin empfangene Frame nicht dekodiert ist:

    [2021-03-05 07:16:53][DEBUG] : Receive from:192.168.1.106
    [2021-03-05 07:16:53][DEBUG] :   Mess: Bad response


Wenn die Dekodierung des Frames korrekt ist, finden wir eine Meldung wie diese:

    [2021-03-05 07:16:53][DEBUG] : Receive from:192.168.1.106
    [2021-03-05 07:16:53][DEBUG] :   Mess: {"dps":{"1":true,"9":0,"17":8370,"18":44,"19":50,"20":2320,"27":"on","28":"relay"},"cid":"588xxxxxxxxxa"} - Read Json OK

Mit dieser Nachricht kann das Gerät im Plugin konfiguriert werden, indem identifiziert wird, wofür die dps-Nummern verwendet werden und welche Werte sie annehmen, siehe oben.
Einige Nachrichten werden nie decodiert, es braucht nur eine Nachricht, um richtig decodiert zu werden, um sicherzustellen, dass der localKey korrekt ist.

## Überprüfen Sie, ob die devId oder die cid korrekt sind

Bei einem Tuya/Zigbee-Gateway müssen die Tests auf einem mit dem Gateway verbundenen Gerät durchgeführt werden. Das Gateway allein gibt keine Nachricht zurück.

1. die cid (für Tuya/Zigbee-Geräte) oder die devId für andere wurde gleichzeitig mit dem LocaKey gefunden. Es ist für jedes Gerät spezifisch und wird nie geändert, sodass Sie Ihre Geräte identifizieren können.
2. Suchen Sie die vom Peripheriegerät kommenden "Mess"-Meldungen.

** Für ein Nicht-Zigbee-Gerät, das seine devId zurückgibt, finden wir: **

    [2020-12-10 08:01:58][DEBUG] :     Mess :{"devId":"308001xxxxxxxxxb4c","dps":{"1":true},"t":1607583717,"s":3} - Read Json OK

die devId wird klar angezeigt, einfach in die devId der Gerätekonfiguration kopieren. Achtung: Nicht alle Geräte geben ihre devId zurück.

** Für ein Zigbee-Gerät, das seine Cid zurückgibt, finden wir: **

    [2020-12-10 08:14:34][DEBUG] :     Mess :{"dps":{"1":"pir"},"cid":"bc33xxxxxxxxxxxx45","t":1607584474} - Read Json OK

die cid ist klar angegeben, einfach in die devId der Gerätekonfiguration kopieren. Achtung: Nicht alle Geräte geben ihre Cid zurück.

Sie können dann die Übereinstimmung mit dem Verfahren zum Auffinden des localKey und der devId oder der cid überprüfen.

Wenn die cid oder devId nicht korrekt ist, werden die Aktionsbefehle vom Gerät nicht ausgeführt.

** Beispiel für das Senden eines korrekten Befehls an ein Nicht-Zigbee-Tuya-Gerät: **

    [2021-03-05 07:23:28][DEBUG] :     Cmd to 127.0.0.1: {"devId":"588e8xxxxxxxx21a","dps":{"1":true},"t":"1614925408"} - canal:12 - Try:127.0.0.1  6900 - Connect OK!
    [2021-03-05 07:23:28][DEBUG] :     Receive from Jeedom to Send cmd to device @192.168.1.129 canal:12
    [2021-03-05 07:23:28][DEBUG] :     Cmd to 192.168.1.129 - Try:192.168.1.129  6668 - Connect OK!
    [2021-03-05 07:23:28][DEBUG] :     No state update
    [2021-03-05 07:23:28][DEBUG] : Receive from:192.168.1.129
    [2021-03-05 07:23:28][DEBUG] :   Mess:  - empty
    [2021-03-05 07:23:28][DEBUG] : Receive from:192.168.1.129
    [2021-03-05 07:23:28][DEBUG] :   Mess: {"dps":{"1":false,"9":0,"18":0,"19":0,"20":2367,"21":1,"22":636,"23":28600,"24":16823,"25":2480,"26":0,"38":"on","41":"","42":"","46":true}} - Read Json OK
    [2021-03-05 07:23:28][DEBUG] :    Tuya  prise Wifi test @192.168.1.129  Mess: {"dps":{"1":false,"9":0,"18":0,"19":0,"20":2367,"21":1,"22":636,"23":28600,"24":16823,"25":2480,"26":0,"38":"on","41":"","42":"","46":true}} - Read Json OK
    [2021-03-05 07:23:28][DEBUG] :     Update devices @192.168.1.129 canal:12
    [2021-03-05 07:23:28][DEBUG] :      Dps18|SwOnOffGet_Det_Fen:0 Dps19|ModeForcedGetZ:0 Dps20|SwOnOffGet_Test:2367 Dps21|VanneGetZ formula:#value# #value#:1 After:1
    [2021-03-05 07:23:28][DEBUG] :      No other states to update

Das Plugin sendet den Befehl an den Daemon unter der Adresse 127.0.0.1 (Cmd an 127.0.0.1).
Dann sendet der Daemon den Befehl an das Gerät unter der Adresse 192.168.1.129 (Empfangen von Jeedom an Send cmd). Wenn diese Meldung nicht erscheint, läuft der Plugin-Daemon nicht -> siehe Vorabprüfungen.
Schließlich gibt das Gerät seinen Status zurück (Empfangen von). Die erste Nachricht wird nicht dekodiert und die zweite. Beachten Sie, dass dieses Gerät seine devId nicht zurückgibt.
Wenn die devId oder die cid nicht korrekt sind, gibt das Gerät seinen Status nicht zurück oder gibt eine leere Nachricht oder einen Fehler zurück und führt den Befehl nicht aus.

## Ein Problem mit einem Aktionsbefehl (die anderen funktionieren)

1. Überprüfen Sie die 4 Punkte oben
2. Deaktivieren Sie alle wifilightV2-Geräte außer dem zu testenden (behalten Sie nur einen Kanal für Multichannel) (lassen Sie das Tuya/Zigbee-Gateway für ein Zigbee-Gerät aktiv) und löschen Sie die Protokolle für mehr Übersichtlichkeit.
3. Warten Sie, bis der Daemon vorbei ist (er fragt die Geräte jede Minute ab, die die Nachricht beginnt mit: >>>>>>>> Suchen nach)
4. Warten Sie 10s nach der Meldung mit >>>>>>>>>>> End <<<<<<<<<<<< (Ende der Abfrage der Peripheriegeräte durch den Dämon).
5. Aktivieren Sie den Befehl des Plugins, das 2 Mal in 5s-Intervallen ausfällt
6. Stoppen Sie die Protokolle und speichern Sie sie.
7. Senden Sie die Protokolle an das Forum (mit der Gerätekonfiguration und der durchgeführten Aktion)

## Hilfe im Forum finden

Um schnelle und qualitativ hochwertige Hilfe zu erhalten, ist es notwendig, Ihre Frage gut vorzubereiten. Geben Sie die Elemente, die Protokolle jedes nächsten Schrittes mit Ihrem Ansatz und der Diagnose an:
1.Screenshot der Gerätekonfiguration
2. Führen Sie die Tests und die vorläufige Konfiguration durch (siehe Absatz oben)
3.Überprüfen Sie, ob das Gerät gefunden und angeschlossen ist, geben Sie die Protokolle an, wenn KO (siehe Absatz oben)
4.Überprüfen Sie, ob der localKey der richtige ist, geben Sie die Protokolle an, wenn KO (siehe Absatz oben)
5.Überprüfen Sie, ob die devId oder die cid korrekt sind, geben Sie die Protokolle an, wenn KO (siehe Absatz oben)

Wenn ein Schritt ausgefallen ist, müssen Sie die folgenden nicht testen. Wenn Sie nicht verstehen, was Sie tun, können die Forumshelfer es nicht für Sie herausfinden. Ganz am Anfang der Plugin-Dokumentation wird daran erinnert, dass die lokale Verwendung von Tuya-Peripheriegeräten erfordert, dass Sie wissen, wie man eine Prozedur buchstabengetreu befolgt, und einige Computerkenntnisse haben.

[Zurück zur allgemeinen Dokumentation](./index.md)





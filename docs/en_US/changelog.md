1.54 - 2020-01-05
-   Sonoff: fixed connectedget (finally)
-   Tuya: fixed connectedget (finally)
-   Sonoff RF bridge: transition to 32 triggers
-   Magic Home: addition of custom mode
-   addition of Nanoleaf
-   bug fixes

1.53 - 2019-12-12
-   Sonoff: addition of RF bridge 433 - only sensors
-   Sonoff TH10 / TH16: added information from the internal thermostat (but not possible to modify)
-   Sonoff Pow R2: addition of electrical information (but of limited efficiency, this is not due to the plugin)
-   Tuya: better feedback from V2 multiple sockets
-   Tuya: addition of 2nd type white lamp
-   bug fixes

1.52 - 2019-11-27
-   Tuya: globe lamps in stable
-   code cleanup
-   bug fixes
-   moving the doc

1.51 - 2019-11-23
-   Tuya: addition of the MiBoxer bridge from Milight (module in Beta), only ON / OFF of the complete box works. Available for those who manage to recover the ApiKey with the MiBoxer app.
-   Tuya: addition of a custom device to configure any device
-   Tuya : refonte des commandes customs : pour les commandes custom existantes -> nécessité de les reconfigurer avec le nouveau format
-   Tuya: need to save all equipment
-   eWeLink: use of a fake key for the SelfApiKey
-   eWeLink: correction of connection info
-   Tuya: fix connection info
-   minor bug fixes
-   relaunch of the daemon after modifying a configuration

1.50 - 2019-10-28
-   Tuya: addition of RGBW type 2 lamp (module in beta)
-   Sonoff Dual bug fix
-   Ewelink: addition of 3 and 4 channel devices
-   Sonoff: compatible TH10 / 1H16 temperature sensor, basic, RF, POW, Mini, Dual, 4CH / 4CH PRO, Touch, S20 / S26, T1 / TX, SLAMPHER, T4EUC1

1.49 - 2019-10-23
-   bug fix Tuya curtain mod2
-   Sonoff Dual bug fix

1.48 - 2019-10-18
-   eWelink: adding modules with 2 channels (including Sonoff Dual) in Beta
-   bug correction Sonoff state return

1.47 - 2019-10-16
-   addition of shutters mod2 (on / off / stop instead of 1/2/3 in the orders)
-   bug fixes

1.46 - 2019-10-12
-   Add ewelink temperature / humidity sensor including Sonoff TH10 / 16
-   add ewelink inching mode (ON for a given time)
-   bug fixes

1.45 - 2019-10-2
-   Compatible devices with Ewelink App in LAN mode
-   SonOff compatible in LAN mode

1.44 - 2019-09-27
-   Sonoff Basic R3 compatible in DIY mode
-   Jeedom V4 compatible
-   Buster compatible
-   Removal of the color widget without Off not compatible with V4, the plugin will no longer offer custom widgets.

1.43 - 2019-07-08
-   TP-link: taking into account the new V2 protocol for sockets, requires a token.
-   Tuya: the opening and PIR sensors will not be compatible with the plugin. These sensors must go through the cloud: to be avoided in alarm use.
-   Bug correction: calculation of the current of the Tuya sockets now in amperes (modify your scenarios because the current unit is incorrect)
-   Tuya and TP-Link, units for consumption: AVW kWh. Save the equipment for correct display of the unit in the command list.

1.42 - 2019-06-02
-   Tuya: bug return status bug
-   Demon: no more memory leaks

1.41 - 2019-06-19
-   Tuya: bidirectional compatibility with the plugin in firmware 2.0 (actuator OK)
-   Tuya: addition of the dimmer switch
-   Daemon: rewritten to better manage pipa / Yeelight connections / disconnections
-   Re-registration of each device may be required

1.40 - 2019-06-16
-   Tuya: adding instant status feedback for equipment that returns its status
-   Tuya: some equipment is upgraded to firmware 2.0: they are compatible with the plugin only in return status
-   Tuya: the mobile application must be stopped for the plugin to work
-   Tuya: For beta version users, tuya V2 devices will need to be reconfigured (V1 firmware is separate from V2 firmware)
-   Cron removal 1 min
-   A PhP bug causes memory leaks, in this case configure the plugin&#39;s heartbeat to relaunch it regularly

1.39 - 2019-05-05
-   Tuya: adding thermostat

1.38 - 2019-04-05
-   Tuya: correction return status
-   Desktop: bug display return status bug

1.37 - 2019-04-04
-   Tuya: added consumption on all the tuya sockets
-   Tuya: configuration of energy parameters recovery
-   Please note: the configuration for retrieving the energy parameters has been modified. The old configurations remain compatible.

1.36 - 2019-04-03
-   Tuya: addition of wall switches
-   Tuya: addition of a humidifier
-   Tuya: addition of consumption on all outlets
-   Warning: you will have to reconfigure the Tuya sockets: take the configuration of the Xplugs + USB socket and check the suppression of the status feedback for the sockets with micro-cuts.

1.35 - 2019-03-13
-   Tuya: addition of switches for roller shutters
-   Tuya: addition of custom commands for all devices (allows testing of new actuators)

1.34 - 2019-03-02
-   Addition of a configuration with status feedback for all sockets. Beware of micro-cuts can occur, then take the configuration without status feedback.

1.33 - 2019-02-15
-   Possible configuration for the recovery of consumption on the tuya sockets: the type 2 consumption sockets must be reconfigured in type 1 before installing the plugin.

1.32 - 2019-02-13
-   TP-Link HS110 bug fixes.
-   Modification du protocole (UDP -> TCP) pour les équipements TP-Link. Normalement sans incidence.

1.31 - 2019-02-12
-   Addition of a second type of plug with Smart Live compatible consumption.

1.30 - 2019-02-01
-   Suppression of the status feedback for Tuya plugs without consumption measurement: useless functionality because only Jeedom can control the plug and causes micro-cuts.
-   Modification of the doc for the new configuration of iBox Mi.Light

1.29 - 2019-1-27
-   Color correction HSV Tuya bulbs
-   Add RGB Tuya bulbs

1.28 - 2019-1-16
-   Add plug TP_Link
-   Communication improvement Tuya smart plug

1.27 - 2019-1-11
-   Tuya smart plug in stable
-   Communication improvement Tuya smart plug

1.26 - 2019-1-1
-   Add Tuya / smart live / Jinvoo / eFamillyCloud apps compatible electrical outlets
-   Minor bug fixes
-   Documentation redesign

1.25 - 2018-11-25
-   Addition in beta of the addressable led controller SP108 Led Shop (ON / OFF)
-   Addition of the RGB Mi.Light remote control
-   Minor bug fixes

1.24 - 2018-11-14
-   Bug fix equipment display page

1.23 - 2018-09-06
-   Addition of pixel strip controllers compatible Magic Home

1.22 - 2018-07-10
-   Addition of compatible Tuya / Jinvoo smart apps bulbs
-   Addition of the Mi.Light Floodlight bulb
-   Addition of the Philips Zhiuri bulb
-   Minor bug fixes

1.21 - 2018-03-10
-   Addition of Sunix led strip controllers
-   Bug fixes Arilux RGBWW

1.20 - 2018-03-02
-   Adding the immediate feedback of the state of the Xiaomi Yeelight bulbs
-   Improvement of the plugin configuration interface
-   Bug fixes

1.19 - 2018-02-15
-   Add timed shutdown Xiaomi Philips
-   Improvement of ON / OFF status feedback all lamps with status feedback
-   Bug fixes

1.18 - 2018-02-13
-   Yeelight JIAOYUE corrections
-   Adding custom modes on Yeelight colors

1.17 - 2018-02-11
-   Add Mi.Light: Track Light RGBW / WW
-   Adding Yeelight JIAOYUE custom modes
-   Sorting lists

1.16 - 2018-01-25
-   Add Xiaomi Philips: desk lamp, bulb and ceiling lamp
-   Addition of the Yeelight JIAOYUE 650 ceiling light
-   Addition for all lamps of intensity increase and decrease buttons
-   Mi.Light: memorization of RGB and White intensity
-   8 buttons Mi.Light remote control correction
-   Minor bug fixes.

1.15 - 2017-11-29
-   MiLight addition: 8-channel RGBW CT remote control and RGBW CT led strip
-   Update of the doc (spelling, Yeelight help)

1.14 - 2017-09-28
-   Bug fixes: Yeelight and LW12 ceiling light. Addition Speed H801

1.13 - 2017-09-26
-   Bug correction: Yeelight ceiling light, RUN / STOP LW12, moving icon

1.12 - 2017-09-13
-   View orders directly accessible in the Orders tab

1.11 - 2017-09-04
-   Ability to change the default color widget

1.10 - 2017-06-17
-   Addition of Extel Meli bulbs

1.09 - 2017-05-22
-   Jeedom V3.0 compatibility

1.08 - 2017-05-13
-   Addition of TP-Link bulbs
-   Bug fixes

1.07 - 2017-05-03
-   RGBWW state feedback correction

1.06 - 2017-05-01
-   Add Arilux RGBWW
-   Add MagicHome strip led RGBWW and RGBW bulbs
-   Wifi3x0 status feedback correction

1.05 - 2017-04-17
-   Bug correction H801

1.04 - 2017-04-16
-   Bug correction Yeelight sunset / sunrise

1.03 - 2017-04-12
-   Bug fixes
-   Addition of sunrise and sunset modes for Yeelight RGBW
-   Addition of a bulb synchronization mode
-   Added Xiaomi Mijia compatibility

1.02 - 2017-04-02
-   Bug fixes
-   Added moonlight mode for yeelight ceilings

1.01 - 2017-01-29
-   Add connection information
-   Bug fixes
-   By default the status information is no longer displayed

1.00 - 2017-01-25
-   Publication of the first version

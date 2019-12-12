1.53 - 2019-12-12
-   Sonoff: adding RF bridge 433 - only sensors
-   Sonoff TH10 / TH16: adding information from the internal thermostat (but not possible to modify them)
-   Sonoff Pow R2: adding electrical information (but of limited effectiveness, this is not due to the plugin)
-   Tuya: best return of state of the multiple catch V2
-   Tuya: addition 2nd type lamp Blanche
-   bug fixes

1.52 - 2019-11-27
-   Tuya: globe lamps in stable
-   code cleaning
-   bug fixes
-   moving the doc

1.51 - 2019-11-23
-   Tuya: addition of Milight&#39;s MiBoxer bridge (module in Beta), only ON / OFF of the complete box works. Available for those who arrive to recover the ApiKey with the MiBoxer app.
-   Tuya: add a custom device to configure any device
-   Tuya : refonte des commandes customs : pour les commandes custom existantes -> nécessité de les reconfigurer avec le nouveau format
-   Tuya: need to back up all equipment
-   eWeLink: Using a fake key for SelfApiKey
-   eWeLink: correcting login info
-   Tuya: correction of the connection info
-   minor bug fixes
-   restarting the demon after changing a configuration

1.50 - 2019-10-28
-   Tuya: addition lamp RGBW type 2 (module in beta)
-   bug correction Sonoff Dual
-   Ewelink: adding 3 and 4 channel devices
-   Sonoff: compatible TH10 / 1H16 temperature sensor, basic, RF, POW, Mini, Dual, 4CH / 4CH PRO, Touch, S20 / S26, T1 / TX, SLAMPHER, T4EUC1

1.49 - 2019-10-23
-   correction bug Tuya curtain mod2
-   bug correction Sonoff Dual

1.48 - 2019-10-18
-   eWelink: add modules with 2 channels (including Sonoff Dual) in Beta
-   correction bug return state Sonoff

1.47 - 2019-10-16
-   adding tuya mod2 shutters (on / off / stop instead of 1/2/3 in the controls)
-   bug fixes

1.46 - 2019-10-12
-   adding ewelink temperature / humidity sensor including Sonoff TH10 / 16
-   adding ewelink mode inching (ON for a given time)
-   bug fixes

1.45 - 2019-10-2
-   Compatible devices with Ewelink App in LAN mode
-   SonOff compatible in LAN mode

1.44 - 2019-09-27
-   Compatible Sonoff Basic R3 in DIY mode
-   Compatible V4 Jeedom
-   Buster compatible
-   Removing the color widget without Off not compatible V4, the plugin will no longer offer custom widgets.

1.43 - 2019-07-08
-   TP-link: taking into account the new V2 protocol for the outlets, requires a token.
-   Tuya: the opening and PIR sensors will not be compatible with the plugin. These sensors must pass through the cloud: to avoid using alarm.
-   Bug fix: calculating the current of the plugs Tuya now in amperes (modify your scenarios because the unit of the current is incorrect)
-   Tuya and TP-Link, units for consumption: AVW kWh. Save the equipment for a correct display of the unit in the list of commands.

1.42 - 2019-06-02
-   Tuya: bug fix back state
-   Daemon: no more memory leak

1.41 - 2019-06-19
-   Tuya: bidirectional compatibility with the firmware plugin 2.0 (OK actuator)
-   Tuya: adding the dimmer switch
-   Demon: rewritten to better handle connections / disconnections tuya and Yeelight
-   A re-registration of each device may be necessary

1.40 - 2019-06-16
-   Tuya: Add instantaneous status feedback for devices that return their state
-   Tuya: some equipment is changed to firmware 2.0: they are compatible with the plugin only in return state
-   Tuya: the mobile application must be stopped for the plugin to work
-   Tuya: For users of the beta version, tuya V2 devices will have to be reconfigured (firmware V1 is separate from firmware V2)
-   Deleting cron 1 min
-   A PhP bug causes memory leaks, in this case configure the plugin&#39;s heartbeat to relaunch it regularly

1.39 - 2019-05-05
-   Tuya: thermostat addition

1.38 - 2019-04-05
-   Tuya: correction back state
-   Desktop: bug fix back status display

1.37 - 2019-04-04
-   Tuya: added consumption on all tuya outlets
-   Tuya: configuration of the recovery of the energy parameters
-   Attention: the configuration to retrieve the energy parameters has been modified. Old configurations remain compatible.

1.36 - 2019-04-03
-   Tuya: adding wall switches
-   Tuya: adding a humidifier
-   Tuya: adding consumption to all outlets
-   Attention: it will be necessary to reconfigure the outlets Tuya: to take the configuration taken Xplugs + USB and to check the suppression of the return of state for the jacks having micro-cuts.

1.35 - 2019-03-13
-   Tuya: adding switches for roller shutters
-   Tuya: adding custom commands for all devices (allows to test new actuators)

1.34 - 2019-03-02
-   Add a configuration with status feedback for all outlets. Attention micro-cuts can occur, then take the configuration without feedback.

1.33 - 2019-02-15
-   Parameterization possible for the recovery of the consumption on the tuya jacks: the type 2 jacks must be reconfigured in type 1 before installation of the plugin.

1.32 - 2019-02-13
-   TP-Link HS110 bug fixes.
-   Modification du protocole (UDP -> TCP) pour les équipements TP-Link. Normalement sans incidence.

1.31 - 2019-02-12
-   Added a 2nd type of plug with Smart Live compatible conso.

1.30 - 2019-02-01
-   Removed status feedback for Tuya plugs without consumption measurement: useless feature because only Jeedom can control the plug and causes micro-cuts.
-   Changing the doc for the new Mi.Light iBox configuration

1.29 - 2019-1-27
-   Correction colors HSV bulbs Tuya
-   Adding RGB bulbs Tuya

1.28 - 2019-1-16
-   Add TP_Link plug
-   Improvement communication Tuya smart plug

1.27 - 2019-1-11
-   Tuya smart plug in stable
-   Improvement communication Tuya smart plug

1.26 - 2019-1-1
-   Adding Tuya / smart live / Jinvoo / eFamillyCloud apps compatible electrical outlets
-   Minor bug fixes
-   Recasting of the documentation

1.25 - 2018-11-25
-   Beta addition of the SP108 Led Shop (ON / OFF) addressable led controllers
-   Addition of the RGB Mi.Light remote control
-   Minor bug fixes

1.24 - 2018-11-14
-   Fixed bug page display equipment

1.23 - 2018-09-06
-   Added Magic Home compatible pixel strip LED controllers

1.22 - 2018-07-10
-   Adding compatible Tuya / Jinvoo smart apps bulbs
-   Addition of the Mi.Light Floodlight bulb
-   Addition of Philips Zhiuri bulb
-   Minor bug fixes

1.21 - 2018-03-10
-   Sunix Led Strip Controller Addition
-   Fixed bugs Arilux RGBWW

1.20 - 2018-03-02
-   Adding the immediate feedback of the state of Xiaomi Yeelight bulbs
-   Improved plugin configuration interface
-   Bug fixes

1.19 - 2018-02-15
-   Addition Xiaomi Philips delayed shutdown
-   Improved ON / OFF status feedback all lamps with status feedback
-   Bug fixes

1.18 - 2018-02-13
-   Corrections Yeelight JIAOYUE
-   Add custom modes on Yeelight colors

1.17 - 2018-02-11
-   Adding Mi.Light: Track Light RGBW / WW
-   Add custom modes Yeelight JIAOYUE
-   Sorting lists

1.16 - 2018-01-25
-   Addition Xiaomi Philips: desk lamp, bulb and ceiling lamp
-   Addition of ceiling light Yeelight JIAOYUE 650
-   Addition for all lamps of increment buttons and intensity decrement
-   Mi.Light: memorizing the intensity RGB and White
-   Mi.Light remote control 8 buttons
-   Fixed minor bugs.

1.15 - 2017-11-29
-   Addition MiLight: remote control 8 channels RGBW CT and led strip RGBW CT
-   Updated doc (spelling, help Yeelight)

1.14 - 2017-09-28
-   Bug fixes: Yeelight and LW12 ceiling light. Add Speed H801

1.13 - 2017-09-26
-   Bug fixes: Yeelight ceiling light, RUN / STOP LW12, moving icon

1.12 - 2017-09-13
-   Display of commands accessible directly in the Commands tab

1.11 - 2017-09-04
-   Ability to edit the default color widget

1.10 - 2017-06-17
-   Adding Extel Meli bulbs

1.09 - 2017-05-22
-   Jeedom V3.0 Compatibility

1.08 - 2017-05-13
-   Addition of TP-Link bulbs
-   Bug fixes

1.07 - 2017-05-03
-   RGBWW status feedback correction

1.06 - 2017-05-01
-   Adding Arilux RGBWW
-   Add MagicHome strip led RGBWW and RGBW bulbs
-   Correction of state return wifi3x0

1.05 - 2017-04-17
-   Fixed H801 bugs

1.04 - 2017-04-16
-   Yeelight sunset / sunrise bug fix

1.03 - 2017-04-12
-   Bug fixes
-   Added sunrise and sunset modes for Yeelight RGBW
-   Adding a mode of synchronization of the bulbs
-   Added Xiaomi Mijia compatibility

1.02 - 2017-04-02
-   Bug fixes
-   Addition moonlight mode for ceiling yeelight

1.01 - 2017-01-29
-   Adding login information
-   Bug fixes
-   By default the status information is no longer displayed

1.00 - 2017-01-25
-   Publication of the first version

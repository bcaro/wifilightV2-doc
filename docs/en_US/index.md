# Presentation

This plugin can manage many LED strips or LED bulbs or electrical plugs controlled by wifi or radio frequency 2.4 GHz via a box wifi sold with the product.


![Milight](../images/wifilightV2_screenshot01.png) ![Tuya](../images/wifilightV2_screenshot03.png) ![Plafonnier](../images/wifilightV2_screenshot05.png) ![Prise](../images/wifilightV2_screenshot07.png) 

![Sonoff](../images/wifilightV2_screenshot02.png) ![MagicHome](../images/wifilightV2_screenshot04.png)

# Compatibility and limitations

## Compatible products

There are many products compatible with the plugin but very different brands or brands.

Compatible products:
-   Mi.Light / EasyBulb / LimitlessLED bulbs connected to the controllers below: no feedback!
-   Strip-led Mi.Light / EasyBulb / LimitlessLED connected to the controllers below: no feedback!
-   Led controller Mi.Light / EasyBulb / LimitlessLED V3.0 to V5.0 (the miboxer is not compatible): no feedback!
-   Mi.Light / EasyBulb / LimitlessLED LED controller V6.0 / iBox1 / iBox2: No feedback!
-   White and color Xiaomi Yeelight WiFi bulbs with status feedback!
-   Strip-led WiFi Xiaomi Yeelight color with status feedback!
-   Xiaomi Yeelight WiFi ceiling light with status feedback!
-   WiFi desktop lamp Xiaomi Mijia with status feedback!
-   Sonoff Basic R3 in DIY mode with status feedback !!

Products that can be compatible and unsecured:
-   LW12 / Lagute: RGB strip-led controller: back state!
-   Wifi 320/370 RGB / RGBW strip-led controller: partial state return!
-   Magic UFO: RGBW strip-led controller, handles the white!
-   MagicHome: RGBW / RGBWW strip-led controller and bulbs / spots RGBW compatible with the MagicHome app!
-   H801: RGBW strip-led controller, no return status !!
-   Arilux AL-C01 / 02/03/04/06/10: RGB / RGBW / RGBWW strip-led controller, status feedback!
-   TP-Link LB100 / 110/120/130: bulbs with status feedback!
-   Extel Meli lamp with status feedback!
-   Xiaomi Philips: Desk lamp, bulb and ceiling with status feedback!
-   Bulbs, sockets, switch, flap switches, humidifier, thermostat compatible Tuya Smart live or Jinvoo smart or eFamilyCloud apps with feedback!
-   TP-link HS100 HS110 power sockets with status feedback !!
-   Magic home compatible LED pixel strip controllers with status feedback!
-   Devices controlled by the Ewelink app including Sonoff in LAN mode with status feedback !!!

For these controllers, bulbs or sockets, the exchange protocol does not come directly from the manufacturer who can change it at any time. Several versions exist on the market that are not all compatible with the plugin.

Warning :
- ! : easy integration for someone reading the literature before acting
- !! : in addition to!, requires to follow a particular procedure, adapted to a person who understands that a procedure is made to be followed scrupulously
- !!! : in addition to !! requires basic computer skills and is accustomed to researching the internet for a specific purpose

Incompatible products and who will not be:
-   The Mi.light MiBoxer bridge (except ON / OFF box)
-   Controllers Led Milight (type YL etc.) without bridge.
-   The led bulbs, sockets or controllers that contain a bluetoooth receiver instead of a 2.4 Ghz radio receiver or WiFi.
-   The led strip controllers or bulbs and bulbs or sockets that use a point-to-point WiFi connection with the mobile application.
-   The Xiaomi bedside lamp is not compatible (by construction).

## Compatibility test

On request, a test plugin for non validated products can be provided.

It is advisable to inquire on the forum to know the compatibility of a product little diffused.

Go to Jeedom&#39;s forum [here] (https://community.jeedom.com/t/plugin-wifilightv2-discussion-generale/2439)


# limitations

Mi.Light / EasyBulb / LimitlessLED:
-   All features are taken into account by the plugin.
-   The MiBoxer bridge is not compatible

LW12 / Lagute:
-   Programming custom modes is not possible, it is necessary to use the application provided with the controller (Magic Home). On the other hand, custom modes can be triggered with the plugin.
-   There are several versions of LW12 that may not be compatible with the plugin.

Magic UFO, MagicHome and Arilux AL-C01 / 02/03/04/06/10:
-   Custom mode programming, radio mode and timers are not supported. You must use the application supplied with the controller (Magic Home). On the other hand, custom modes can be triggered with the plugin.
-   There are different models that may not be compatible with the plugin.

Xiaomi Yeelight:
-   HSV commands are not supported. Flow and scene are created by creating commands with the JSON code corresponding to the desired effect (see the YeeLight API documentation).
-   The Xiaomi bedside lamp is not compatible.
-   The Xiaomi Mijia desk lamp is partially compatible (no full status feedback).

Wifi 320/370:
-   The status of the scene modes is not managed, only ON / OFF is managed.
-   There are different models that may not be compatible with the plugin.

H810:
-   stage games are not managed.
-   There are different models that may not be compatible with the plugin.

TP-Link:
-   Timers are not managed.
-   Power consumption information is not supported for light bulbs.

Extel Meli:
-   The sound part of the lamp is not taken into account

Xiaomi Philips:
-   All features are taken into account

Magic Home compatible pixel strip LED controllers:
-   custom scenes are not supported.

Compatible devices Tuya Smart / Jinvoo / eFamilyCloud:
-   all commands for validated devices (see the forum) of firmware 1.0 and firmware 2.0 are compatible (especially the Neo CoolCam sockets).

Sonoff DIY:
-   Basic R3 with firmware 3.3.0 devices with a single contact.

Ewelink and Sonoff LAN:
-   devices with firmware 3.0.1 (list given below in the eWelink section)

# WiFi module configuration

## Install devices

Download the mobile application from the manufacturer and follow the instructions to control the device with the mobile. For each wifilightV2 device, detailed help is provided in the configuration page.

As long as the device is not controlled with the mobile application, the plugin will not work.

See help and forums for the device builder.


## Configure the router
It is necessary to configure the DHCP of your router (generally provided by your service provider) to modify the attribution of the IP address of the module wifi or the bulb or the catch so that it is static. Rate this address. In general, it will be of the form: 192.168.1.xxx where xxx is the address of the wifi module (2 to 254)

Check the forums in your box to learn how to configure your DHCP.

After this change, verify that the mobile app is still controlling the device.

You can then go to the configuration of the wifilightV2 plugin.

## Plugin Installation and Configuration

wifilightV2 does not create any device automatically, you have to create them in the plugin before setting them up.

Help :
-   Use the question mark icon for help on each configuration item.

Setting :
-   To set up a device, choose the menu Plugins / Communicating objects / wifilightV2
-   Then click on the button at the top left Add a Wifi module
-   Enter the name of the wifi module
-   Enter the parent object
-   Choose the category Light (default)
-   Enable and make visible (default)
-   Enter the IP address of the module of the WiFi socket or light bulb (see the FAQ for more information)
-   For some devices it is requested to enter the channel used, create a device wifilightV2 per channel
-   For some devices it is requested to enter a token or (and) an identifier, see help on the device configuration page
-   For some devices it is possible to suppress the feedback if it causes micro-cuts
-   For some controllers it is necessary to indicate the number of leds of the pixel strip leds
-   For some controllers it is necessary to indicate the order of the colors if the colors by default do not correspond
-   Enter the brand or type of device
-   Enter the exact sub-type of the controller, bulb, plug or strip-led, this is essential to create the commands to control the device
-   Enter the number of command sends: allows you to repeat the command for a remote device in the event of a bad transmission. (1 by default). Some bulbs or plugs do not manage this repetition because the plugin ensures by return of state of the transmission. Some relative commands (increments) are not repeated.
-   Enter the sending delay in case of repetition (default 0 ms, 100 ms max)
-   Enter the intensity increment% when pressing the buttons for incrementing or decrementing the light intensity
-   Enter the group number for synchronization, see below

## Adding commands
when saving the module, the commands are automatically created.

the name of the commands can be changed. The commands automatically created and deleted are recreated during a backup.

when all the commands are created, they can weigh down the interface, it is possible not to display them by configuring the creation of the commands.

## Changing the device type or subtype

-   remove all orders
-   change device type or subtype
-   save 2 times

# Operation of state feedback and connection status

## Compatibility of the state return

Status feedback is immediate for the following devices:
- Yeelight
- compatible with ewelink
- compatible with the live Tuya smart app
- Sonoff in LAN mode

For example, if a switch is operated, Jeedom will know it immediately.

For devices:
 - LW12 / Lagute
 - Magic UFO / Home
 - Arilux
 - Wifi 3x0 (partially)
 - TP-Link
 - Xiaomi Philips
 - Extel Meli
 - Sonoff in DIY mode

The plugin regularly queries the device to know its status. The delay for Jeedom to know the state can exceed 1 minute.

For other devices there is no status feedback;

## Update by scenario

The xxxxGet and Status commands can be used in a Jeedom scenario.

## Connection Information

The ConnectedGet command retrieves the connection status of each device. It is updated every minute.
-  -1: Device with status feedback OK
-  -2: Can not prepare device connection
-  -3: Device not connected
-  -4: no response from the device
-  -5: wrong device response
-  -6: Device without status return

# How synchronization works

## Principle of synchronization

It is possible to synchronize multiple devices of different brands:

All devices that have the same group number are synchronized

Group 0 is not synchronized (default group)

When using a command from a device in the group, the same command is applied to all devices in the same group

If the command does not exist for the synchronized device, it is simply ignored.

Warning, the devices will not be ordered exactly at the same time due to latency when sending orders one after the other.

## Synchronization configuration

Simply put a different number of zero in the group field when configuring the equipment. All equipment with the same numbers will be synchronized.

# Special case of Mi.Light boxes

## Configuring iBox 1 or 2

Since version 1.0.58 of iBox 1 and 2, it may be necessary to modify their configuration so that they can interact with Jeedom.

Connect to http (with a web browser) to the IP address of your iBox. The default credentials are admin / admin. Go to the &quot;Other Setting&quot; tab and in &quot;Network Parameters setting / Protocol&quot; choose UDP and save.

# Special case of Xiaomi Yeelight

## Bulb configuration
It is essential to enable LAN control via the Xiaomi Yeelight application.

## Xiaomi Yeelight Scene Mode
It is possible to configure the scene modes. Several scene modes are preprogrammed in the plugin but it is possible to add other scene modes.

It suffices to respect certain conditions:
-   Add a wifilightV2 action command of type Default
-   Give it a name (eg Scene Blink)
-   In parameters, put the scene command Yeelight, for example: &quot;id&quot;: 1, &quot;method&quot;: &quot;set_scene&quot;, &quot;params&quot;: [&quot;cf&quot;, 0,0, &quot;500,1,255,100,1000,1,16776960, 70 &quot;]

Do not put the start and end braces as well as the newline characters, the plugin will add them automatically. Inspire preconfigured commands to create these additional scene modes.

## Update status in Jeedom
When activating the plugin and as soon as the daemon is started and every minute, the plugin searches for the bulbs powered and connected to Jeedom.

As soon as the bulb is found, the state of the bulb is reassembled to the plugin immediately.

Note that the plugin can take up to 1 minute to find a light bulb and 4 minutes to find that a device is disconnected.

# Special case of TP-Link devices

## Bulb configuration

Since mid 2019, new devices are coming out in protocol version 2. The V2 protocol requires to recover a token (token) allowing the plugin to interact with the TP-Link devices.

To obtain this token, it is necessary to capture the frames exchanged between the Kasa app on the phone and the device to be added in the plugin. In Android you have to use Packet Capture.

The plugin then allows to extract the token. You must copy the retrieved frame to the GetKey Command Parameters field and execute this command. If the frame is decodable, the token will be displayed in the logs and in the message center (be careful: delete the message each time after reading).

The frame to put in &quot;Parameters&quot; must have the following pace (the ... replace other values):

00 00 00 5f d0 f2 91 fe 90 e4 81 f9 8d af 95 ... 99 bb 81 fa 87 fa 87

The data is separated by spaces and represents hexadecimal numbers that come directly from Packet Capture. In general, the frame starts with 3 zeros and here 5f gives the size of the frame in hexadecimal or 95 in decimal.

No help will be given to recover the frame from Packet Capure.

For the moment only the plugs are usable in V2, to contact the author if you have bulbs in V2.

# Special case of Philips Xiaomi

## Bulb configuration

It is essential to recover a token allowing the plugin to interact with Philips Xiaomi devices.

The procedure is complex and requires several manipulations. Do a search on the web with the following keyword: Xiaomi token.

No help will be given to recover the token.

# Special case of Sonoff in DIY mode

## DIY mode setup

Sonoff gives all the elements [here] (https://github.com/itead/Sonoff_Devices_DIY_Tools/tree/master/tool) to configure the modules in DIY mode.

A mobile phone and a Windows PC with WiFi card are required. The software to run to find the Sonoff gives in the left column the identifier needed to configure the device.

The Sonoff device must be firmware 3.3.0 or higher, the above Windows application allows to update the firmware.

# Special case of devices compatible with the Ewelink application in LAN mode

## Retrieving APiKey and DeviceID

Follow the directions [here] (https://blog.ipsumdomus.com/sonoff-switch-complete-hack-without-firmware-upgrade-1b2d6632c01) to retrieve these 2 pieces of information. The deviceid is to put in the identifier of the plugin. The Apikey is to put in the token. You must not put spaces or quotes.

The device must be firmware 3.0.1 or higher, the Ewelink app allows to update the firmware.

## Connection Information

When a device connects to the wifi, the plugin will immediately be notified. On the other hand, when a device is disconnected, the plugin can only know if a command is sent by the plugin.

## Compatibility

Many brands are compatible including Sonoff.
-  Switches, wall sockets, switch: simple of all brands
-  Switches, wall outlets, switch: multiples of all brands
-  2 types of lamps (test both types)
-  Sonoff TH10 / 1H16 temperature sensor
-  Sonoff Basic, RF, POW, Mini
-  Sonoff Dual
-  Sonoff 4CH / 4CH PRO
-  Sonoff Touch
-  Sonoff S20 / S26
-  Sonoff T1 / TX
-  Sonoff SLAMPHER
-  Sonoff T4EUC1
-  Sonoff RF bridge 433 for sensors only (door, presence detector, remote control)

For multichannel devices (like the Sonoff 4CH) you have to create as many wifilightV2 devices as there are channels, a copy of the first created easy task, then you have to change the channel number.

For devices not present in this list (Sonoff Ifan, dimmer for example) or if the configuration does not work and after integrating the device into Jeedom (with the Sonoff Basic configuration for example) locate in the logs:

Receive after decode: {...............}

and give in the [forum] (https://community.jeedom.com/t/plugin-wifilightv2-sonoff-ewelink-lan/2632) the contents of the braces to allow integration of the module in the plugin.

# Special case of compatible devices Tuya Smart / Jinvoo / eFamilyCloud apps

## Compatibility

Many brands are compatible with the plugin. Consult the forum for more information. The plugin can control many actuators. It can retrieve the status of devices as soon as it sends status change information or when it queries them every minute. If a wall switch is used, Jeedom will know it immediately.

The following devices are compatible with firmware 1.0. and in firmware 2.0.

-  simple plugs with and without a return on consumption, especially Neo Coolcam wifi sockets
-  multiple outlets with and without power consumption with and without USB
-  roller shutter control
-  wall switches: 1, 2 or 3 inters
-  wall switch with dimmer
-  humidifier NEWKBO 300 ml and only this one
-  thermostat BHT-6000GCLW / BHT 6000 and only these models
-  RGBW globe bulbs and similar models in operation

Nevertheless, the compatibility of these devices is not guaranteed because the protocol can be modified by the manufacturers.

For multi-channel devices (such as multiple sockets) you need to create as many wifilightV2 devices as you can channel, a copy of the first created easy task, then you have to change the channel number.

Presence and opening sensors are not compatible because they do not communicate locally.

The plugin tests the devices (but they must be added manually) and displays a message in the message center when a device has been configured with the wrong firmware.


## Device configuration

It is essential to recover a local key (LocalKey) and an identifier allowing the plugin to interact with the devices.

The procedure is complex and requires several manipulations. Search the web with keyword: Tuya localkey, on Github in particular or on the forum Jeedom.

The device must not be connected to a mobile phone application, otherwise it will not respond to Jeedom&#39;s orders. It is therefore necessary to close any application possibly connected to the device.

If the device is uninstalled and reinstalled in the mobile app, then its key will be changed. It will be necessary to find the key with the procedure above.

No help will be given to recover the key or the identifier.

Any configuration change requires restarting the daemon.

## Configuring recovery of socket consumption

According to brands, consumption is not sent uniquely by the outlet. To retrieve this setting, install the plug in Jeedom and keep the status back in the configuration, then go to the logs of wifilightV2. The catch is interrogated every minute. Spot the message that looks like:

return decoded: {&quot;devId&quot;: &quot;xxxxxxxxx&quot;, &quot;dps&quot;: {&quot;1&quot;: false, &quot;2&quot;: false, &quot;9&quot;: 0, &quot;10&quot;: 0, &quot;18&quot;: 0, &quot;19&quot; : 0, &quot;20&quot;: 2281, &quot;21&quot;: 1, &quot;22&quot;: 726, &quot;23&quot;: 28971, &quot;24&quot;: 19417, &quot;25&quot;: 1070}}

The index &quot;20&quot; here corresponds to the supply voltage in the hundred mV or 228.1 V, it must move slightly. The indexes &quot;18&quot; and &quot;19&quot; correspond to the current (mA) and the power in W, here no device is connected and therefore the information is at zero. This is a good way to find the voltage, by connecting a device, these 2 values must be changed and the voltage is just after.

The syntax is then: 20; 18; 19 which must be put in the &#39;Energy setting&#39; field.

For plugs 1 taken, in general you need: 6; 4; 5 (defaulted by the plugin).

For plugs 2 taken, in general you need: 9; 7; 8 (defaulted by the plugin).

For other outlets, the value 20; 18; 19 is set by default.

## Order customization

Given the variety of Tuya-compatible devices, it may be necessary to create custom commands.

Create a new action / default command. Give an identical name and Id and put the command Tuya in parameters. Leave empty. Tuya commands are in JSON format and contain dps: {xxxxxx}. It is the xxxxxx that must be put in parameters.

Examples:

To lift certain shutters: xxxxxx is &quot;1&quot;: &quot;1&quot; which is to put in parameters (use the double quotes of the key 3).

To put the plug n ° 2 of some plugs to one: xxxxxx worth &quot;2&quot;: true which is to put in parameters (to use the double quotation marks of the key 3).

To turn off # 1 and # 2 of some plugs: xxxxxx is &quot;1&quot;: false, &quot;2&quot;: false which is to be set in parameters (use the double quotes on key 3).

The following paragraph provides elements for interpreting wifilightV2 logs.
-   Note that the device needs to return its state.
-   In many cases there will be no state feedback if the commands added by default do not recover the dps. In this case it is possible to recover the state return by adding a custom command by specifying the dps as indicated in the following paragraph.
-   It is therefore possible to mix custom commands by specifying the dps (next paragraph) or without specifying the dps.

## Custom device

It is possible to create a fully custom device. Unlike custom commands, a custom device has no predefined command and everything must be configured for each command. The procedure requires that the device returns its state in the logs, otherwise there is no relief.

### Configuration
-   disable all wifilightV2 devices except the one to be tested
-   configure the device (static IP address, LocalKey, Id)
-   check that the demon is running, otherwise start it
-   configure wifilightV2 logs in debug mode
-   clear the logs

### Retrieving information
-   press a device button (on, off, up, down, etc.) or wait for the device to return to its status or press a button on the Smart Live app (but in the latter it may prevent the return of status )
-   find in the logs the passage that looks like this:

        Receive after decode :{devId:50701244cc50e37e9aff,dps:{"1":"off","101":true}}
        [2019-10-13 09:15:30][DEBUG] :       >>> : devId | 50701244cc50e37e9aff : 50701244cc50e37e9aff
        [2019-10-13 09:15:30][DEBUG] :       >>> : dps | Array : Array
        [2019-10-13 09:15:30][DEBUG] :       >>>>>>>>>>> : 1 | stop : stop
        [2019-10-13 09:15:30][DEBUG] :       >>>>>>>>>>> : 101 | 1 : 1

    Here, the off button has been selected on the device and it is observed that the dps 1 has changed.

        Receive after decode :{devId:50701244cc50e37e9aff,dps:{"1":"on","101":true}}
        [2019-10-13 09:15:30][DEBUG] :       >>> : devId | 50701244cc50e37e9aff : 50701244cc50e37e9aff
        [2019-10-13 09:15:30][DEBUG] :       >>> : dps | Array : Array
        [2019-10-13 09:15:30][DEBUG] :       >>>>>>>>>>> : 1 | stop : stop
        [2019-10-13 09:15:30][DEBUG] :       >>>>>>>>>>> : 101 | 1 : 1

    Here, the button has been selected on the device and it is observed that the dps 1 has changed.

-   Create a new action / default command in the device commands:
    *    In the interface column put ON as the name of the button
    *    In the column internal name and order number, set as unique Id: ON, as dps: 1 (without the double quotation marks) and as parameter: &quot;on&quot; (if you are not surrounded by quotation marks, you need them to take off).
-   Create a new action / default command in the device commands:
    *    In the interface column put OFF as the name of the button
    *    In the internal name and order number column, set as unique Id: OFF, as dps: 1 (without the double quotation marks) and as parameter: &quot;off&quot; (if the off is not surrounded by quotation marks, you need them to take off).
-   Create a new info / other command in the device commands:
    *    In the interface column put STAT as the name of the info
    *    In the Internal Name and Order ID column, set as unique Id: STATUS, like dps: 1 (without double quotation marks) and nothing in parameters.

    In the case of digital information:

        Receive after decode :{devId:50701244cc50e37e9aff,dps:{"3":850,"101":true}}
        [2019-10-13 09:15:30][DEBUG] :       >>> : devId | 50701244cc50e37e9aff : 50701244cc50e37e9aff
        [2019-10-13 09:15:30][DEBUG] :       >>> : dps | Array : Array
        [2019-10-13 09:15:30][DEBUG] :       >>>>>>>>>>> : 3 | 850 : 850
        [2019-10-13 09:15:30][DEBUG] :       >>>>>>>>>>> : 101 | 1 : 1

    Here, an intensity slider has been selected on the device application and it is observed that the dps 3 has changed.

-   Create a new action / cursor command in the device commands:
    *    In the interface column put Intensity as cursor name
    *    In the column internal name and order number, set as unique Id: Intensity, as dps: 3 (without the double quotation marks) and as parameter: # slider # (here the numerical value is not surrounded by quotation marks, it does not do not put them).
-   Create a new info / other command in the device commands:
    *    In the interface column put IntensiteGet as the name of the info
    *    In the column internal name and order number, set as unique Id: IntensiteGet, as dps: 3 (without the double quotation marks) and nothing in parameters.

Notes:
-   nothing in the logs: bad IP address or device that does not return its status
-   return with error: Incorrect Id
-   return not decoded: incorrect localkey
-   the command does not work: check the command
-   to modify the color of a lamp, the technique of the slider is not possible it is necessary to program several buttons with predefined colors

## Update status in Jeedom
When activating the plugin and as soon as the daemon is launched and every minute, the plugin searches for devices powered and connected to Jeedom.

As soon as the device is found, the device status is returned to the plugin immediately.

Note that the plugin can take up to 1 minute to find that a device is connected or disconnected.

# FAQ


## Which devices can be used?

Read the documentation

## Nothing is happening

First run the device with the mobile application provided by the manufacturer.

Use the button <tester> in the Plugin / Connected Objects / wifilightV2 / commands menu.

No help will be provided without the devices being operational with the build application on a mobile phone. It is necessary to give a fixed IP address to the device.


## I do not know how to configure my internet box

No help will be provided on the box and the concepts necessary to configure the router to assign a fixed IP address. Consult the forums of the box.

## All commands are not created during a device model change

Save 2 times.

## White light intensity management Mi.Light / EasyBulb / LimitlessLED is not practical

The manufacturer of LEDs has not planned to directly affect the intensity of the bulb. We can only increment or decrement from the previous value. The plugin only replicates this operation. The cursor that is proposed is therefore capricious.

## Color intensity management sometimes has unexpected behaviors

No protocol handles color intensity, although generally mobile applications do. As long as Jeedom manages color and intensity, everything goes well. But if the intensity is changed by a mobile application, the results are not always the expected ones. The plugin tries to fix the problem when the lamp or controller has a status feedback.

## Is there a return of state?

Read the documentation

## Can not operate Xiaomi Yeelight bulbs

It is essential to activate LAN control mode via the Xiaomi Yeelight application.

## I do not control the sound of Extel Meli bulbs

Sound is not supported by the plugin

## Can not operate Philips Xiaomi bulbs

To interact with Philips Xiaomi bulbs, it is necessary to transmit a token or token in English. Without this token, the bulb will not take into account the orders sent to it. This token is in the Mi-Home app and, depending on your phone, there are several ways to recover the token. The procedure is described on several sites but it is not reproduced here for two main reasons:

-   Xiaomi has already modified its protocol which has forced to modify the procedure to recover the token, it could still do it.
-   New and simpler procedures can be made available to Internet users.
-   This documentation will not be maintained as quickly as a simple search on the web with the keywords: xiaomi token.

## Unable to operate compatible devices Tuya / Smart live / Jinvoo / eFamilyCloud apps

To interact with these bulbs, sockets and other devices, it is necessary to transmit a local key or Localkey or token in English and an identifier. Without these parameters, the bulb will not take into account the orders sent to it. There are several methods to retrieve this information. The procedure is described on several sites but it is not reproduced here for two main reasons:

-   The applications have been updated, which has meant changing the procedure to retrieve the information.
-   New and simpler procedures can be made available to Internet users.
-   This documentation will not be maintained as quickly as a simple search on the web with the keywords: Tuya LocalKey and in particular on Github.

## Error sending command / notched wheel without stop / Emission without stop
-   wifilightV2 devices need to be updated
-   go into each equipment and save 2 times
-   test with new equipment if this persists

## Mi.Light bridge IBox1, iBox2, V6: command taken into account randomly
-   orders are sent too quickly
-   in the scenarios, put breaks of sufficient duration

## Mi.Light bridge IBox1, iBox2, V6: command not taken into account
-   when pairing with the Mi.Light mobile application and when configuring wifilightV2, choose the same remote control.

## LW12 UFO Magic Arilux Wifi3x0 H801 Compatible Magic Home Tuya / Jinvoo / eFamilyCloud Controllers
-   many versions exist and some may be incompatible with the plugin. Contact the author for a possible update.

## Orders are missing when creating or changing the subtype of the bulb
-   save the equipment (2 times)


# How to get help?


Go to Jeedom&#39;s forum [here] (https://community.jeedom.com/t/plugin-wifilightv2-sonoff-ewelink-lan/2632)

# Known bugs

The memory decreases drastically
-   Bug fixed.

For Tuya-compatible outlets, micro-cuts occur regularly
-   Bug fixed.
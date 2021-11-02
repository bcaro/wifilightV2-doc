[Back to main documentation ](./index.md)

# Zigbee Tuya gateways

To use such a gateway, choose the type: "Gateway Hub Tuya Zigbee"

## Compatibility

The dialogue between the plugin and the gateway is done over Wifi. Then, the dialogue between the sensors and actuators and the gateway is done via Zigbee. They must be Tuya compatible and have been included in the Tuya app first.

The plugin can retrieve the state of the devices as soon as they send a change of state information or when the plugin asks them when the daemon is launched. If a wall switch is used, Jeedom will know immediately.

The following equipment is compatible but the list is not exclusive and will be completed based on user feedback.
- MoesHouse gateways, BENEXMART
- Lidl SilverCrest Smart Home gateway
- all Tuya / Zigbee gateways are normally compatible, there has not yet been a return from an incompatible gateway.
- Vima lock (but not MiHome)
the plugin cannot open / close because the lock is not intended to do so, but it can know the last key used
- TYZS2 temperature and humidity sensor
full operation
- Hessway thermostatic head
Does not manage the programming of the time slots of the different modes but can start any mode.
Use the "extended mode" option for creating commands to create all the thermostat commands.
- the double dimmer switch QS-Zigbee-D02-TRIAC-LN
- Moes presence sensor
- BENEXMART presence sensor
- BENEXMART temperature sensor
- BENEXMART door sensor
- Lonsoho plug with consumption
- loratap 3-button remote control
- single / double / triple wall switches
- remote control, white and colored bulbs, single and triple Lidl sockets

All other devices, or similar devices of another brand or model, must be fully configured in custom mode. However the configuration generated for these models may help for another.

However, the compatibility of these devices is not guaranteed because the protocol can be modified by the manufacturers. Do not modify the firmware of the device without having verified that it is compatible with the plugin.

A device must be created, with the same IP address and the same key, for the gateway and each device connected to the gateway.

The "Status query" option allows you to retrieve the status every 20s even if the peripheral does not send it back. To be used for electrical outlets which do not regularly return consumption but do not use for battery-powered devices, otherwise they will be emptied.


## Gateway key and identifier

It is essential to retrieve the local key (localKey) and the devId of the gateway allowing the plugin to communicate with the devices.

To retrieve the key and the devId, the procedure is complex and requires several operations. Do a search on the web with the keyword: Tuya localKey, on Github in particular or on # Zigbee Tuya gateways

To use such a gateway, choose the type: "Gateway Hub Tuya Zigbee"

## Compatibility

The dialogue between the plugin and the gateway is done over Wifi. Then, the dialogue between the sensors and actuators and the gateway is done via Zigbee. They must be Tuya compatible and have been included in the Tuya app first.

The plugin can retrieve the state of the devices as soon as they send a change of state information or when the plugin asks them when the daemon is launched. If a wall switch is used, Jeedom will know immediately.

The following equipment is compatible but the list is not exclusive and will be completed based on user feedback.
- MoesHouse gateways, BENEXMART
- Lidl SilverCrest Smart Home gateway
- all Tuya / Zigbee gateways are normally compatible, there has not yet been a return from an incompatible gateway.
- Vima lock (but not MiHome)
the plugin cannot open / close because the lock is not intended to do so, but it can know the last key used
- TYZS2 temperature and humidity sensor
full operation
- Hessway thermostatic head
Does not manage the programming of the time slots of the different modes but can start any mode.
Use the "extended mode" option for creating commands to create all the thermostat commands.
- the double dimmer switch QS-Zigbee-D02-TRIAC-LN
- Moes presence sensor
- BENEXMART presence sensor
- BENEXMART temperature sensor
- BENEXMART door sensor
- Lonsoho plug with consumption
- loratap 3-button remote control
- single / double / triple wall switches
- remote control, white and colored bulbs, single and triple Lidl sockets

All other devices, or similar devices of another brand or model, must be fully configured in custom mode. However the configuration generated for these models may help for another.

However, the compatibility of these devices is not guaranteed because the protocol can be modified by the manufacturers. Do not modify the firmware of the device without having verified that it is compatible with the plugin.

A device must be created, with the same IP address and the same key, for the gateway and each device connected to the gateway.

The "Status query" option allows you to retrieve the status every 20s even if the peripheral does not send it back. To be used for electrical outlets which do not regularly return consumption but do not use for battery-powered devices, otherwise they will be emptied.


## Gateway key and identifier

It is essential to retrieve the local key (localKey) and the devId of the gateway allowing the plugin to communicate with the devices.

To retrieve the key and the devId, the procedure is complex and requires several operations. Do a search on the web with the keyword: Tuya localKey, on Github in particular or on the # Zigbee Tuya gateways

To use such a gateway, choose the type: "Gateway Hub Tuya Zigbee"

## Compatibility

The dialogue between the plugin and the gateway is done over Wifi. Then, the dialogue between the sensors and actuators and the gateway is done via Zigbee. They must be Tuya compatible and have been included in the Tuya app first.

The plugin can retrieve the state of the devices as soon as they send a change of state information or when the plugin asks them when the daemon is launched. If a wall switch is used, Jeedom will know immediately.

The following equipment is compatible but the list is not exclusive and will be completed based on user feedback.
- MoesHouse gateways, BENEXMART
- Lidl SilverCrest Smart Home gateway
- all Tuya / Zigbee gateways are normally compatible, there has not yet been a return from an incompatible gateway.
- Vima lock (but not MiHome)
the plugin cannot open / close because the lock is not intended to do so, but it can know the last key used
- TYZS2 temperature and humidity sensor
full operation
- Hessway thermostatic head
  Does not manage the programming of the time slots of the different modes but can start any mode.
  Use the "extended mode" option for creating commands to create all the thermostat commands.
- the double dimmer switch QS-Zigbee-D02-TRIAC-LN
- Moes presence sensor
- BENEXMART presence sensor
- BENEXMART temperature sensor
- BENEXMART door sensor
- Lonsoho plug with consumption
- loratap 3-button remote control
- single / double / triple wall switches
- remote control, white and colored bulbs, single and triple Lidl sockets

All other devices, or similar devices of another brand or model, must be fully configured in custom mode. However the configuration generated for these models may help for another.

However, the compatibility of these devices is not guaranteed because the protocol can be modified by the manufacturers. Do not modify the firmware of the device without having verified that it is compatible with the plugin.

A device must be created, with the same IP address and the same key, for the gateway and each device connected to the gateway.

The "Status query" option allows you to retrieve the status every 20s even if the peripheral does not send it back. To be used for electrical outlets which do not regularly return consumption but do not use for battery-powered devices, otherwise they will be emptied.


## Gateway key and identifier

It is essential to retrieve the local key (localKey) and the devId of the gateway allowing the plugin to communicate with the devices.

To retrieve the key and the devId, the procedure is complex and requires several operations. Do a search on the web with the keyword: Tuya localKey, on Github in particular or on the  [forum Jeedom](https://community.jeedom.com/t/plugin-wifilightv2-recuperer-id-et-localkey-pour-tuya-smartlife/13047) .

If the gateway is uninstalled and then reinstalled in the mobile application, then its key will be changed. You will have to find the key with the above procedure.

No help will be given to retrieve the key.

The key and IP address of devices connected to the gateway is the same as that of the gateway.


## Device key and identifier

Configure the device and enter the key found above as well as the IP address which is the same as that of the gateway. You must then modify the state of the device with the application provided by the manufacturer of the gateway and consult the logs.
You will find information like this:
    
    Mess: {"dps": {"161": "Esc"}, "cid": "ec1bxxxxxxxx28", "t": 1589301302}
 
The cid is to be copied in the device identifier field of the plugin (without the ""). It is this which makes it possible to distinguish 2 devices connected to the gateway.

Note: if the device does not return its status, the cid cannot be found in the logs. Experts will be able to find the dps and the cid as they are displayed next to the localKey during the find procedure, they are right next to it. The cid is named nodeId in the packages of the Smartlife app.


## Choice of standard device connected to the gateway

If your device is in the suggested list, it should work immediately. If your device is a little different, the dps numbers or parameters may have different values ​​than the default configurations. It is possible to modify the orders created by changing the dps number and the parameter with a possible calculation formula to find the desired value. See[Manual creation mode of orders in V3 ](./tuya#tocAnchor-1-10-8) of the Tuya part to interpret the plugin logs and understand the default configuration commands.


## Automatic creation of the device in inclusion mode

To be able to use the inclusion mode of devices connected to the gateway, you must first have connected and correctly configured a gateway using the Gateway Hub Tuya / Zigbee subtype with its IP address and localKey. The device to be included in the gateway must return its state, if this is not the case, the procedure will not be able to work. If several gateways are connected and configured in the plugin, it is necessary to activate only the gateway on which the device must be included.
If no gateway or multiple gateways are configured and active, the inclusion process will be aborted. The device to include must not already be in the plugin, otherwise it must either be removed or use learning mode.

- click on inclusion mode, wait a few moments
- act on the device or change the state of the device with the Smartlife app (but use of the app can block the device: in this case quickly launch the Smartlife app and act quickly on the device then exit the Smartlife app) using all the possibilities of the Smartlife app or the device
- then click on the stop inclusion button and save
- the device is created and configured, you can edit it

Only one device must be included at a time. To exclude a device, just delete it in the plugin.

This mode is only there to help the custom configuration of a new device which is not offered by the plugin. Using this mode cannot result in a fully functional device and requires understanding, deleting or modifying the commands created.

Examples of modifications:
- If the dps only corresponds to an info in the peripheral (for example 3 possible values ​​of the same button), you will have to delete the 3 action commands created automatically. However, the actions commands have as parameter all the values ​​retrieved by the plugin and allow to know the values ​​taken by the dps info.
- For digital dps, an info command and a digital action command are created automatically, if only the info is useful (in the case of the temperature of a sensor) the action command must be deleted. If the numerical values ​​take the values ​​0 or 1 during learning, the plugin will also create 3 STATE / ON / OFF commands, they will have to be deleted.
- For dps containing a 0/1 info for an all or nothing actuator, such as an electrical outlet, the plugin will create an info and 2 ON / OFF actions.
- In the case of a dps containing true or false, an info command and two action commands (ON and OFF) are created automatically, if only the info is useful (in the case of a presence sensor) the commands must be deleted actions.
- For dps containing color info, the plugin will identify the color coding and create 3 action commands and 3 info commands that correspond to Hue Saturation Intensity
- In general, the subtype created by the plugin may not correspond to the data, it will then be necessary to carry out tests by modifying it.

You can share the resulting configuration by clicking the Export button. Transfer the contents of the configGet field and a photo of the device to the developer.

## Learning mode

Check the "Inclusion mode" box in the device configuration and save it to add the commands forgotten in the previous phase or the commands not offered after having chosen the subtype. Finish by clicking on the "stop inclusion" button and save.

If you start from a standard configuration after choosing a subtype and you add the training to check the standard dps, you will have to modify the commands created by the standard configuration and delete the commands created by the training. Indeed, when saving, the standard dps are always recreated, otherwise it is possible not to display them.

## Manual creation of orders mode

This mode is useful for commands that need to be adjusted (dps, parameter), to send several dps at the same time or for the color management of the lamps, otherwise use the proposed subtypes or the learning mode.

The procedure requires that the device returns its status in the logs. If the device does not return its status, the cid and dps cannot be found in the logs. Experts will be able to find the list of device dps and its cid because they are displayed next to the localKey during the procedure to find them.

The plugin is equipped with buttons allowing you to automatically create the commands for the most common cases, it will suffice to modify the number of dps or the automatically created parameter. See [here] (./ tuya # tocAnchor-1-10-8) for understanding logs and manual creation of commands.

## Battery powered devices

For the% of capacity to be displayed in Analysis / Equipment, the logical name of the corresponding info command must contain battery and get.

# Tuya

To use these peripherals without a Tuya / Zigbee gateway, choose the type: "Tuya SmartLife compatible V3"

## Compatibility

Many brands are compatible with the plugin. Consult the forum for more information. The plugin allows to control many actuators.
It can retrieve the state of the peripherals as soon as it sends a change of state information or when it polls them every minute. If a wall switch is used, Jeedom will know immediately.

The following devices are compatible with firmware 1.0. and in firmware 2.0.

- simple sockets with and without return on consumption, in particular Neo Coolcam wifi sockets
- multiple sockets with and without consumption with and without USB
- control of roller shutters (4 types of models including 1 with led and positioning information)
- wall switches: 1, 2 or 3 inter
- wall switch with dimmer
- NEWKBO humidifier 300 ml and only this one
- thermostat BHT-6000GCLW / BHT 6000 and only these models
- RGBW globe bulbs and similar models in operation
- smart Garage (beta)
- 2 diffusers including Maxcio
-  electric heater
- Proscenic (the vacuum cleaner is not compatible and the integration procedure is complex)
- Pilot wire
-  Mermaid
- Alarm (info only)
- Lidl fan heater

However, the compatibility of these devices is not guaranteed because the protocol can be modified by the manufacturers. Do not modify the firmware of the device without having verified that it is compatible with the plugin.

The presence and opening sensors are not compatible because they do not communicate locally. Other devices from the above list may also work only through the internet, they are not compatible with the plugin. Ask the seller if LAN mode is active.

## Initial configuration of a device

It is essential to retrieve a local key (localKey) and a devId identifier allowing the plugin to communicate with the devices.

The procedure is complex and requires several manipulations. Do a search on the web with the keyword: Tuya localKey, on Github in particular or on the [forum Jeedom](https://community.jeedom.com/t/plugin-wifilightv2-recuperer-id-et-localkey-pour-tuya-smartlife/13047) .

The device must not be connected to an application on a mobile phone, otherwise it will not respond to Jeedom commands. You must therefore close any application possibly connected to the device.

If the device is uninstalled and then reinstalled in the mobile app, then its key will be changed. You will have to find the key with the above procedure.

No help will be given to retrieve the key or the identifier.

## Tuya Smartlife compatible V1
The V1 type corresponds to devices with firmware 1.0. Devices with this firmware are no longer sold and their firmware can be updated with the Smartlife app. There will be no new device additions. You have to switch to V3.

The plugin tests devices (but they must be added manually) and displays a message in the message center when a device has been configured with the wrong firmware.

There are some devices that advertise 1.x firmware and yet are 2.x firmware, such as some roller shutter controls.

For multichannel devices, such as outlets, you need to create one wifilightV2 per channel.

The energy configuration parameters, for the outlets that manage it, allow you to assign the right dps to voltage, amperage and power (see below).


## Tuya Smartlife compatible V2
Type V2 corresponds to devices with firmware 2.0. In addition to this compatibility, there is the possibility of adding custom commands. There will be no new device additions. Type V2 should no longer be used for new devices and is present to ensure compatibility with old versions of the plugin, you must switch to V3

For multichannel devices, such as outlets, you need to create one wifilightV2 per channel.

The energy configuration parameters, for the outlets that manage it, allow you to assign the right dps to voltage, amperage and power. To retrieve this setting, install the plug in Jeedom then go to the wifilightV2 logs. The outlet is polled every minute. Look for the message that looks like:

    Mess: {"devId": "xxxxxxxxxghekqd", "dps": {"1": false, "2": false, "9": 0, "10": 0, "18": 0, "19": 0, "20": 2281, "21": 1, "22": 726, "23": 28971, "24": 19417, "25": 1070}}

The index "20" corresponds here to the supply voltage in hundreds of mV, ie: 228.1 V, it should move slightly. The indexes "18" and "19" correspond to the current (mA) and to the power in W, here no device is connected and therefore the information is at zero. This is a good way to find the voltage, by plugging in a device, these 2 values ​​must be changed and the voltage is right after.

The syntax is then: 20; 18; 19 which must be put in the field 'Energy settings' in V1 and V2.

For 1 socket plugs, in general you need: 6; 4; 5 (set by default by the plugin).

For 2-way plugs, in general you need: 9; 7; 8 (set by default by the plugin).

For the other outlets, the value 20; 18; 19 is set by default.


## Tuya Smartlife compatible V3
Type V3 corresponds to devices with firmware 2.0. In addition to this compatibility, there is the possibility of finely modifying the dps number and the dps parameters of all the devices present in V3 in order to adapt them as needed. The V3 type also has a learning mode for dps and peripheral parameters. For this type, all commands for the same device are created in a single wifilightV2, including for multiple outlets.

The "Status query" option allows you to retrieve the status every 20s even if the peripheral does not send it back. To be used for electrical outlets which do not regularly return consumption but do not use for battery-powered devices, otherwise they will be emptied.


## Choice of a standard V3 device proposed in the list of subtypes
This procedure is to be preferred because it is the simplest. Choose the subtype corresponding to the device to integrate. Some devices that are very close visually however have different behaviors, test all the subtypes that may correspond and verify that they are working correctly.

You have the possibility of modifying the number of dps as well as its parameters to adjust a device which has a behavior slightly different from that proposed by the plugin. See the manual creation mode of the commands below to use the information present in the plugin logs.

If you delete commands, they will be automatically recreated when saving the device, it is better to uncheck the "Show" box. 

## Learning mode in V3

To start learning, you must manually create the device with the correct parameters: IP, localKey, devId and the Custom subtype. Check the "inclusion mode" box and save the device which then enters inclusion mode. Wait a few seconds and modify the state of the actual device or with the Smartlife app so that the plugin automatically creates the actions and info commands, use all the possibilities offered by the app. Finally, click on the "stop inclusion" button and save.

This mode is only there to help the custom configuration of a new device which is not offered by the plugin. Using this mode cannot result in a fully functional device and requires understanding to delete or modify the commands created.

Examples of modifications:
- If the dps only corresponds to an info in the peripheral (for example 3 possible values ​​of the same button), you will have to delete the 3 action commands created automatically. However, the actions commands have as parameter all the values ​​retrieved by the plugin and allow to know the values ​​taken by the dps info.
- For digital dps, an info command and a digital action command are created automatically, if only the info is useful (in the case of the temperature of a sensor) the action command must be deleted. If the numerical values ​​take the values ​​0 or 1 during learning, the plugin will also create 3 STATE / ON / OFF commands, they will have to be deleted.
- For dps containing a 0/1 info for an all or nothing actuator, such as an electrical outlet, the plugin will create an info and 2 ON / OFF actions.
- In the case of a dps containing true or false, an info command and two action commands (ON and OFF) are created automatically, if only the info is useful (in the case of a presence sensor) the commands must be deleted actions.
- For dps containing color info, the plugin will identify the color coding and create 3 action commands and 3 info commands that correspond to Hue Saturation Intensity
- In general, the subtype created by the plugin may not correspond to the data, it will then be necessary to carry out tests by modifying it.

If you start from a standard configuration after choosing a subtype and add training to check the standard dps, you will need to modify the commands created by the standard configuration and delete the commands created by the training. Indeed, when saving, the standard dps are always recreated, otherwise it is possible not to display them.

You can share the resulting configuration by clicking the Export button. Transfer the contents of the configGet field and a photo of the device to the developer.

## Manual creation mode of orders in V3

This mode is useful for commands that need to be adjusted (dps, parameter), to send several dps at the same time or for the color management of the lamps, otherwise use the proposed subtypes or the learning mode.

The procedure requires that the device returns its status in the logs. If the device does not return its status, the devId and the dps cannot be found in the logs. Experts will be able to find the dps and the devId because they are displayed next to the localKey during the procedure to find them.

The plugin is equipped with buttons allowing you to automatically create the commands for the most common cases, it will suffice to modify the number of dps or the automatically created parameter.


### Configuration
- disable all wifilightV2 devices except the one to be tested
- configure the device correctly (static IP address, localKey, devId)
- check that the daemon is running, otherwise start it
- configure the wifilightV2 logs in debug mode, restart the daemon
- delete logs

### Information retrieval
- press a button on the physical device (on, off, up, down, etc.) or wait for the device to return its status or press a button on the Smart Live app (but in the latter case, this may prevent the status feedback).
- locate the status feedback in the logs

Use all the possibilities of the Tuya application and clearly identify in the logs the number of dps and its value which are sent to the plugin.


### Case of an all or nothing actuator, true / false

In the logs, when using the Smartlife app, we find for example:

    Mess: {"devId": "xxxxxxxxxghekqd", dps: {"2": true, "8": true}}

Here the off button has been selected on the device and we observe that the dps of # 2 has changed.

    Mess: {"devId": "xxxxxxxxxghekqd", dps: {"2": false, "8": true}}

Here, the on button has been selected on the device and we observe that the dps of n ° 2 has changed.

Click on the ON / OFF button of the interface to automatically create the 3 commands to manage and the ON / OFF buttons. It suffices to modify the number of dps by putting 2. For the parameters put true and false, do not add quotes.

To configure manually:

- Creation of a new action/default command in the device commands:
    * In the interface column put ON as the name of the button
    * In the column internal name and order number, put as unique Id: _ON, as dps number: 2 (without double quotes) and as parameter: true.
- Create a new action/default command in the device commands:
    * In the interface column put OFF as the name of the button
    * In the column internal name and number of order, put as unique Id: _OFF, as number of dps: 2 (without double quotes) and as parameter: false.
- Create a new info/binary command in the device commands:
    * In the interface column put STATE as the name of the info
    * In the column internal name and number of order, put as unique Id: _STATE, as number of dps: 2 (without double quotes) and nothing in parameters. 

### Case of an actuator with several modes

In the logs, when using the Smartlife app, we find for example:

    Mess: {"devId": "xxxxxxxxxghekqd", dps: {"1": "off", "101": true}}

Here the off button has been selected on the device and we observe that the dps of # 1 has changed.

    Mess: {"devId": "xxxxxxxxxghekqd", dps: {"1": "on", "101": true}}

Here, the on button has been selected on the device and we observe that the dps of n ° 1 has changed.

    Mess: {"devId": "xxxxxxxxxghekqd" ,, dps: {"1": "stop", "101": true}}

Here, the stop button has been selected on the device and we observe that the dps of n ° 1 has changed.

Click on the "Buttons" button on the interface to automatically create the 4 commands to manage the ON / OFF / STOP buttons. It suffices to modify the dps number by putting 1. For the parameters put "on", "off" and "stop", the quotes included because they are present after the dps n ° 1.

To configure manually:

- Creation of a new action / default command in the device commands:
    * In the interface column put ON as the name of the button
    * In the column internal name and order number, put as unique Id: _ON, as dps number: 1 (without double quotes) and as parameter: "on" (if the on is not surrounded by quotes , they must be removed).
- Create a new action / default command in the device commands:
    * In the interface column put OFF as the name of the button
    * In the column internal name and order number, put as unique Id: _OFF, as dps number: 1 (without double quotes) and as parameter: "off" (if the off is not surrounded by quotes , they must be removed).
- Create a new action / default command in the device commands:
    * In the interface column put STOP as the name of the button
    * In the column internal name and order number, put as unique Id: _STOP, as number of dps: 1 (without double quotes) and as parameter: "stop" (if the stop is not surrounded by quotes , they must be removed).
- Create a new info / other command in the device commands:
    * In the interface column put STATE as the name of the info
    * In the column internal name and number of order, put as unique Id: _STATE, as number of dps: 1 (without double quotes) and nothing in parameters.

### In the case of a digital control, such as an intensity control:

In the logs, when using the Smartlife app, we find:

    Mess: {"devId": "xxxxxxxxxghekqd", dps: {"3": 850, "101": true}}

Here, an intensity slider has been selected on the device app and it is observed that the dps of # 3 has changed.

Click on the Cursor button on the interface to automatically create the 2 commands to manage the cursor. To adapt them as needed, all you have to do is modify the dps numbers and put 3 (without quotes). For the parameter of the action command: either leave nothing, or put # slider # or put a formula for example: # slider # / 10. For the info parameter, it's the same except that you have to use # value #. Do not put quotes because there are none after the dps number.

To configure manually:

- Create a new action / cursor command in the device commands:
    * In the interface column put Intensity as the name of the cursor
    * In the column internal name and order number, put as unique Id: _Intensite, as dps number: 3 (without double quotes) and as parameter: # slider # (here the numerical value is not surrounded by quotes, so do not put them).
- Create a new info / other command in the device commands:
    * In the interface column put IntensiteGet as the name of the info
    * In the column internal name and order number, put as unique Id: _IntensiteGet, as dps number: 3 (without double quotes) and nothing in parameters.


### In the case of a digital sensor, such as a temperature sensor:

In the logs, when using the Smartlife app, we find:

    Mess: {"devId": "xxxxxxxxxghekqd", dps: {"8": 23, "101": true}}

Here, it is a temperature which is sent regularly and we observe that the dps of n ° 8 has changed.

Click on the Info Num button on the interface to automatically create the command to retrieve the temperature. To adapt them as needed, all you have to do is modify the dps number, here 8 (without brackets). For the info parameter, either leave nothing, or put # value # or put a formula for example: # value # / 10. Do not put quotes because there are none after the dps number.

To configure manually:

- Create a new info / other command in the device commands:
    * In the interface column put TempGet as the name of the info
    * In the column internal name and order number, put as unique Id: _TempGet, as n ° of dps: 8 (without double quotes) and nothing in parameters.


### In the case of an all or nothing sensor, such as a door detector:

In the logs, when using the Smartlife app, we find:

    Mess: {"devId": "xxxxxxxxxghekqd", dps: {"12": 1}}

    Mess: {"devId": "xxxxxxxxxghekqd", dps: {"12": 0}}

Here, it is the opening then closing information which is sent and we observe that the dps of n ° 12 has changed.

Click on the Info Bin button on the interface to automatically create the order to retrieve the value. To adapt it as needed, all you have to do is modify the dps number and put 12 (without quotes). The parameters should be left empty.

To configure manually:

- Create a new info / binary command in the device commands:
    * In the interface column put PorteGet as the name of the info
    * In the column internal name and order number, put as unique Id: _PorteGet, as dps number: 12 (without double quotes) and nothing in parameters. 

### In the case of the color of a lamp:

This part is complex and requires very careful reading.

The color coding at Tuya has several formats which are different from that used by Jeedom. Jeedom uses the RGB (Reg Green Blue) format while Tuya uses different HSV (Hue Saturation Value) formats or combining HSV and RGB. The RGB codes each color from 0 to 255 or in hexadecimal from 0 to FF. Red is therefore coded FF0000, blue: 0000FF, white: FFFFFF and black: 000000. The values ​​for HSV are as follows: Hue from 0 to 360 ° (color), S from 0 to 100% (Saturation) and V from 0 to 100% (Intensity). See [here] (https://www.rapidtables.com/convert/color/) to go further.

In order to allow the plugin to function correctly for the colors, it is necessary to identify the formats used by Tuya when changing colors with the Smartlife app and by observing at this moment in the logs the number of dps which has been modified. .

1 - HSV format: H (coded from 0 to 360) S (coded from 0 to 1000) V (coded from 0 to 1000) the result is then given in base 16, i.e. 12 hexadecimal digits. Example for red: RGB = FF0000 and H = 0 ° S = 100% V = 100% or in Tuya coding 000003E803E8 (Hue = 0000 S = 03E8 V = 03E8)

2 - RGB00HSV format: RGB is coded on 6 digits (each from 00 to FF for each color). 00 is inserted then H (coded from 0 to 255) S (coded from 0 to 255) V (coded from 0 to 255). The result is given in base 16, ie 14 hexadecimal digits. Example for red: RGB = FF0000 and H = 0 ° S = 100% V = 100% or in Tuya coding FF00000000FFFF

3 - RGB0HSV format: RGB are encoded as above. 0 is inserted then H (coded from 0 to 360) S (coded from 0 to 100) V (coded from 0 to 100). The result is given in base 16, ie 14 hexadecimal digits. Example for purple: RGB = FF00FF and H = 300 ° S = 100% V = 100% or in Tuya coding FF0000012C6464

In the logs, when using the modification of the color of the lamp, we find:

    Mess: {"devId": "633225xxxxx", "dps": {"1": true, "27": true, "28": "white", "29": 254, "31": "08ff0000766464", "32": "cf38000168ffff", "33": "ffff500100ff00"}

It is necessary to locate the number of dps which changes, here it is the 31 is 08ff0000766464. The last 2 64 in hexadecimal make 100 in decimal. 08 = R FF = G 00 = B 076 = hue, this is format 3. Click on the Color 3 button and modify the numbers of dps to put 31. Do not modify the parameters.

To manually create the 6 buttons in the case of a color format 1:

- Create a new action / color command in the device commands:
    * In the interface column put Color as name
    * In the column internal name and order number, put as unique Id: _Color, as dps number: 120 (without double quotes) and as parameter: "#colorH4S4V4_1000#" (here the value is surrounded by quotes, they must therefore be put).
- Create a new info / other command in the device commands:
    * In the interface column put ColorGet as the name of the info
    * In the column internal name and number of order, put as unique Id: _ColorGet, as number of dps: 120 (without double quotes) and "#colorH4S4V4_1000#" in parameters.
- Create a new action / cursor command in the device commands:
    * In the interface column put Intensity as the name
    * In the column internal name and order number, put as unique Id: _Intensity, as number of dps: 120 (without double quotes) and as parameter: #slider_intH4S4V4_1000# (do not put quotes).
- Create a new action / cursor command in the device commands:
    * In the interface column put Saturation as name
    * In the column internal name and order number, put as unique Id: _Saturation, as number of dps: 120 (without double quotes) and as parameter: #slider_satH4S4V4_1000# (do not put quotes).
- Create a new info / numeric command in the device commands:
    * In the interface column put Intensity as the name
    * In the internal name and order number column, put as unique Id: _IntensityGet, as dps number: 120 (without double quotes) and as parameter: #slider_intH4S4V4_1000# (do not put quotes).
- Create a new info / numeric command in the device commands:
    * In the interface column put Saturation as name
    * In the column internal name and order number, put as unique Id: _SaturationGet, as number of dps: 120 (without double quotes) and as parameter:# slider_satH4S4V4_1000# (do not put quotes).

Note: it is essential to put the same dps number for these 6 commands and not to add any other action or info command on this dps number otherwise the plugin will not be able to correctly decode the information and update the feedback state.

### Modify several numbers of dps in the same order

To send several numbers of dps at the same time, put \* in the n° of dps and put the complete command without the braces in the field parameters. One and only one of the dps numbers can be a cursor or (exclusively) a color.

Create an action / other command and put in parameters:

    "1": true, "3": "color"
   
Allows you to turn on the lamp and switch to color.

Create an action / cursor command and put in parameters:

    "1": true, "3": #slider#/10
   
Allows you to turn on the lamp and modify the intensity. A formula on the # slider # can be applied.
 
Create an action / color command and put in parameters:

    "2": "color", "3": "#colorR2G2B200H2S2V2_255#"
   
Allows you to switch the lamp to color mode and specify the color. The plugin will use the color, intensity and saturation of the color widget.

### Modify several dps numbers with status feedback

To send several numbers of dps at the same time with status feedback, put, in the n ° of dps field, the value of the dps number which must be updated followed by the character \*. Put the complete command without the braces in the parameters field. One and only one of the dps numbers can be a cursor or (exclusively) a color.

Create an action / cursor command, put 3\* in the n° of dps field and put in parameters:

    "1": true, "3": #slider# 10
   
Allows to turn on the lamp and to modify the intensity, the command info of dps n ° 3 will be updated.
 
Create an action/color command, put 3\* in the n ° of dps field and put in parameters:

    "2": "color", "3": "#colorR2G2B200H2S2V2_255#"
   
Allows you to switch the lamp to color mode and specify the color. The plugin will use the intensity and saturation of the intensity and saturation sliders from dps 3. 

## Battery powered devices

For the % of capacity to be displayed in Analysis / Equipment, the logical name of the corresponding info command must contain battery and get.



# Debugging

## Preliminary test and configuration

1.the device to be tested has been included in the Smartlife app,
2. in the case of a Tuya / Zigbee device, its gateway has been included in the Smartlife app and the device must also have been included
3.localKey and devId or cid have been retrieved (debugging may allow cid and devId to be found)
4.the device and its possible gateway have not been deleted from the Smartlife app and the Smartlife app has not been deleted
5.Smartlife app is stopped on all terminals that can run it
6. the IP address of the device (Tuya or Tuya / Zigbee gateway) is made fixed and is known
7.configure the wifilightV2 logs in debug mode, restart the daemon

## Check that the device is found and connected

1.deactivate in wifilightV2 all the devices except the one to be tested (keep only one channel in the case of a multi-channel device) (in the case of a device connected to a gateway, the gateway must remain enabled), the goal is not to mix all devices
2.clear logs
3.save the device in the plugin: this has the effect of launching the daemon which tests every minute wifilightV2 devices

Example of an OK log where the plugin found the device and therefore the correct IP address: 

    [2021-03-05 07:13:54][DEBUG] : ** Zig plug - TuyaCustom2_V2 @192.168.1.106 - c:12 **
    [2021-03-05 07:13:54][DEBUG] :     Key:0 Diff:0  Socket already created @192.168.1.106 ADD New device @192.168.1.106 channel:12key:0 @192.168.1.106 c:12 d:0

	
Example of a KO log where the plugin did not find the device so bad IP address :

    [2021-03-05 07:13:55][DEBUG] : ** Test vanne - TuyaCustom2_V2 @192.168.1.199 - c:11 **
    [2021-03-05 07:13:55][DEBUG] :     Key not set New device: created  @192.168.1.199 close Connection impossible. Err=115 : Operation now in progress ADD New device @192.168.1.199 channel:11

Subsequently the messages will be of the type: 

    [2021-03-05 07:15:04][DEBUG] : << Ping of: lidl @192.168.1.130  diff:24
    [2021-03-05 07:15:04][DEBUG] :     Cmd to 192.168.1.130 - Try:192.168.1.130  6668 - Connect OK!

There may then be disconnections or that the Smartlife app is also connected to the device, in this case the message in the logs is: 

    [2020-12-10 07:36:40][DEBUG] : << Ping of: Vanne @192.168.1.122  diff:24
    [2020-12-10 07:36:40][DEBUG] :     Cmd to 192.168.1.122 - Try:192.168.1.122  6668 - Connect OK!
    [2020-12-10 07:36:40][DEBUG] :     Error on:192.168.1.122 is :Connection reset by peer n:104  diff:16

or there is no more ping in the logs for this ip address, this corresponds to a bad permanent connection between the device and Jeedom or if the device is no longer powered.

The plugin will attempt to reconnect to the device every minute or every 3 minutes which will allow it to find the device if it is reconnected.

At this point, the only point tested and OK is that the IP address is correct and that the device is reachable.

## Check that the localKey is correct

In the case of a Tuya / Zigbee gateway, the tests must be done on a device connected to the gateway. The gateway alone does not return any message.

1. fill in the localKey without space and without quotes in the Token field of the device (and of the gateway if there is one). Check several times: the localKey must be the same for all devices with the same IP address (Tuya / Zigbee devices connected to a gateway or multi-channel devices). The plugin uses one of these keys to communicate with the device, so check that they are correct and identical.
2. deactivate in wifilightV2 all the peripherals except the one to be tested (keep only one channel in case of multi-channel peripheral), the goal is not to mix all the peripherals.
3.clear logs
4.Use either the buttons on the physical device or the Smartlife app to change the status of the device.

Notes:
- the Smartlife app can prevent the dialogue between the plugin and the device. It is best to launch the Smartlife app after the above connection to the device. Conversely, the Smartlife app may respond very poorly.
- if the device does not return its status, the information on the dps and the devId or the cid must be found in the file which made it possible to retrieve the localKey, they are right next to it. The cid is named nodeId in the SmartLife app packages.

Example of log KO where the localKey is not good because the frame received by the plugin is not decoded:

    [2021-03-05 07:16:53] [DEBUG]: Receive from: 192.168.1.106
    [2021-03-05 07:16:53] [DEBUG]: Mess: Empty


If the decoding of the frame is correct, we find a message like this:

    [2021-03-05 07:16:53] [DEBUG]: Receive from: 192.168.1.106
    [2021-03-05 07:16:53] [DEBUG]: Mess: {"dps": {"1": true, "9": 0, "17": 8370, "18": 44, "19 ": 50," 20 ": 2320," 27 ":" on "," 28 ":" relay "}," cid ":" 588xxxxxxxxxa "} - Read Json OK

The characters at the end of the message will be filtered out by the plugin and should not be of concern. It is this message that will allow the device to be configured in the plugin by identifying what the dps numbers are used for and what values ​​they take, see above.
Some messages are never decoded, it only takes one message to be correctly decoded to be sure that the localKey is correct.

## Check that the devId or the cid are correct

In the case of a Tuya / Zigbee gateway, the tests must be done on a device connected to the gateway. The gateway alone does not return any message.

1. the cid (for Tuya / Zigbee devices) or the devId for others was found at the same time as the LocaKey. It is specific to each device and is never modified, this allows you to identify your devices.
2. locate the "Mess" messages coming from the peripheral. 

** For a non-Zigbee device which returns its devId, we will find: **

    [2020-12-10 08:01:58] [DEBUG]: Mess: {"devId": "308001xxxxxxxxxb4c", "dps": {"1": true}, "t": 1607583717, "s": 3 } - Read Json OK

the devId is indicated in plain text, it suffices to copy it into the identifier of the device configuration. Warning: not all devices return their devId.

** For a Zigbee device which returns its cid, we will find: **

    [2020-12-10 08:14:34] [DEBUG]: Mess: {"dps": {"1": "pir"}, "cid": "bc33xxxxxxxxxxxx45", "t": 1607584474} - Read Json OK

the cid is indicated in clear, just copy it in the identifier of the configuration of the device. Warning: not all devices return their cid.

You can then check the concordance with the procedure for finding the localKey and the devId or the cid.

If the cid or devId is not correct, the action commands will not be executed by the device.

** Example of sending a correct command to a non-Zigbee Tuya device: **

    [2021-03-05 07:23:28] [DEBUG]: Cmd to 127.0.0.1: {"devId": "588e8xxxxxxxx21a", "dps": {"1": true}, "t": "1614925408" } - channel: 12 - Try: 127.0.0.1 6900 - Connect OK!
    [2021-03-05 07:23:28] [DEBUG]: Receive from Jeedom to Send cmd to device @ 192.168.1.129 channel: 12
    [2021-03-05 07:23:28] [DEBUG]: Cmd to 192.168.1.129 - Try: 192.168.1.129 6668 - Connect OK!
    [2021-03-05 07:23:28] [DEBUG]: No state update
    [2021-03-05 07:23:28] [DEBUG]: Receive from: 192.168.1.129
    [2021-03-05 07:23:28] [DEBUG]: Mess: - empty
    [2021-03-05 07:23:28] [DEBUG]: Receive from: 192.168.1.129
    [2021-03-05 07:23:28] [DEBUG]: Mess: {"dps": {"1": false, "9": 0, "18": 0, "19": 0, "20 ": 2367," 21 ": 1," 22 ": 636," 23 ": 28600," 24 ": 16823," 25 ": 2480," 26 ": 0," 38 ":" on "," 41 ":" "," 42 ":" "," 46 ": true}} - Read Json OK
    [2021-03-05 07:23:28] [DEBUG]: Tuya Wifi socket test @ 192.168.1.129 Mess: {"dps": {"1": false, "9": 0, "18": 0, "19": 0, "20": 2367, "21": 1, "22": 636, "23": 28600, "24": 16823, "25": 2480, "26": 0, "38 ":" on "," 41 ":" "," 42 ":" "," 46 ": true}} - Read Json OK
    [2021-03-05 07:23:28] [DEBUG]: Update devices @ 192.168.1.129 channel: 12
    [2021-03-05 07:23:28] [DEBUG]: Dps18 | SwOnOffGet_Det_Fen: 0 Dps19 | ModeForcedGetZ: 0 Dps20 | SwOnOffGet_Test: 2367 Dps21 | VanneGetZ formula: # value # # value #: 1 After: 1
    [2021-03-05 07:23:28] [DEBUG]: No other states to update

The plugin sends the command to the daemon at the address 127.0.0.1 (Cmd to 127.0.0.1).
Then the daemon sends the command to the device at the address 192.168.1.129 (Receive from Jeedom to Send cmd).
Finally, the device returns its status (Receive from). The first message is not decoded and the second is. Note that this device does not return its devId.
If the devId or cid is not correct, the device does not return its status or return an empty message or an error and does not execute the command.


## A problem with an action command (the others work)

1. Check the 4 points above
2. Deactivate all wifilightV2 devices except the one to be tested (keep only one channel for multichannels) (leave the Tuya / Zigbee gateway active for a Zigbee device) and delete the logs for greater clarity.
3. Wait for the daemon to pass (it polls the devices every minute the message begins with: >>>>>>>> Search for)
4. Wait 10s after the message containing >>>>>>>>>>> End <<<<<<<<<<<< (end of the interrogation of peripherals by the daemon).
5. Activate the command of the plugin which malfunctions 2 times with 5s intervals
6. Stop the logs and save them.
7. Send the logs to the forum (with the device config and the action taken))


## Find help on the forum

In order to obtain fast and quality help, it is necessary to prepare your question well. Give the elements, the logs of each next step with your approach and the diagnosis:
1.Screen shot of the device configuration
2.perform the tests and preliminary configuration (see paragraph above)
3.Check that the device is found and connected, give the logs if KO (see paragraph above)
4.Check that the localKey is the correct one, give the logs if KO (see paragraph above)
5.Check that the devId or the cid are correct, give the logs if KO (see paragraph above)

If one step is knocked out, you don't need to test the next ones. If you don't understand what you are doing, the forum helpers won't be able to find out for you. It is recalled at the very beginning of the plugin's doc that using Tuya devices locally requires knowing how to follow a procedure to the letter and having some computer knowledge.

[Return to main documentation](./index.md)




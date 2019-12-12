# Presentación

Este complemento puede gestionar muchas tiras LED o bombillas LED o enchufes eléctricos controlados por wifi o radiofrecuencia de 2,4 GHz a través de una caja wifi que se vende con el producto.


![Milight](../images/wifilightV2_screenshot01.png) ![Tuya](../images/wifilightV2_screenshot03.png) ![Plafonnier](../images/wifilightV2_screenshot05.png) ![Prise](../images/wifilightV2_screenshot07.png) 

![Sonoff](../images/wifilightV2_screenshot02.png) ![MagicHome](../images/wifilightV2_screenshot04.png)

# Compatibilidad y limitaciones.

## Productos compatibles

Hay muchos productos compatibles con el complemento, pero marcas o marcas muy diferentes.

Productos compatibles:
-   Bombillas Mi.Light / EasyBulb / LimitlessLED conectadas a los controladores a continuación: ¡sin comentarios!
-   Strip-led Mi.Light / EasyBulb / LimitlessLED conectado a los controladores a continuación: ¡sin comentarios!
-   Controlador LED Mi.Light / EasyBulb / LimitlessLED V3.0 a V5.0 (el miboxer no es compatible): ¡sin comentarios!
-   Mi.Light / EasyBulb / LimitlessLED LED controller V6.0 / iBox1 / iBox2: ¡Sin comentarios!
-   ¡Bombillas blancas y de color de Xiaomi Yeelight WiFi con retroalimentación de estado!
-   ¡Color de tira WiFi WiFi Xiaomi Yeelight con retroalimentación de estado!
-   ¡Luz de techo WiFi Xiaomi Yeelight con retroalimentación de estado!
-   ¡Lámpara de escritorio WiFi Xiaomi Mijia con retroalimentación de estado!
-   ¡Sonoff Basic R3 en modo bricolaje con retroalimentación de estado!

Productos que pueden ser compatibles y sin garantía:
-   LW12 / Lagute: controlador de tira de RGB: ¡estado posterior!
-   Controlador de tira de wifi Wifi 320/370 RGB / RGBW: ¡retorno parcial de estado!
-   Magic UFO: controlador de tira RGBW, maneja el blanco!
-   MagicHome: controlador de tira RGBW / RGBWW y bombillas / focos RGBW compatibles con la aplicación MagicHome.
-   H801: controlador de tira RGBW, sin estado de retorno !!
-   Arilux AL-C01 / 02/03/04/06/10: controlador de tira RGB / RGBW / RGBWW, ¡retroalimentación!
-   TP-Link LB100 / 110/120/130: bombillas con retroalimentación de estado!
-   Lámpara Extel Meli con retroalimentación de estado!
-   Xiaomi Philips: lámpara de escritorio, bombilla y techo con retroalimentación de estado.
-   ¡Bombillas, enchufes, interruptores, interruptores de aleta, humidificador, termostato compatible con aplicaciones Tuya Smart live o Jinvoo smart o eFamilyCloud con comentarios!
-   TP-link HS100 HS110 tomas de corriente con retroalimentación de estado !!
-   Controladores de tira de píxeles LED compatibles con Magic Home con retroalimentación de estado.
-   ¡Dispositivos controlados por la aplicación Ewelink, incluido Sonoff en modo LAN con retroalimentación de estado!

Para estos controladores, bombillas o enchufes, el protocolo de intercambio no viene directamente del fabricante, que puede cambiarlo en cualquier momento. Existen varias versiones en el mercado que no son todas compatibles con el complemento.

Atención :
- ! : integración fácil para alguien que lee la literatura antes de actuar
- !! : además de !, requiere seguir un procedimiento particular, adaptado a una persona que entiende que un procedimiento está hecho para ser seguido escrupulosamente
- !!! : ademas de !! requiere habilidades informáticas básicas y está acostumbrado a investigar en Internet para un propósito específico

Productos incompatibles y quienes no serán:
-   El puente Mi.light MiBoxer (excepto el cuadro ON / OFF)
-   Controladores Led Milight (tipo YL, etc.) sin puente.
-   Las bombillas led, enchufes o controladores que contienen un receptor bluetoooth en lugar de un receptor de radio de 2.4 Ghz o WiFi.
-   Los controladores de tira led o bombillas y bombillas o enchufes que utilizan una conexión WiFi punto a punto con la aplicación móvil.
-   La lámpara de cabecera de Xiaomi no es compatible (por construcción).

## Prueba de compatibilidad

A petición, se puede proporcionar un complemento de prueba para productos no validados.

Es recomendable consultar en el foro para conocer la compatibilidad de un producto poco difundido.

Vaya al foro de Jeedom [aquí] (https://community.jeedom.com/t/plugin-wifilightv2-discussion-generale/2439)


# limitaciones

Mi.Light / EasyBulb / LimitlessLED:
-   Todas las características son tomadas en cuenta por el complemento.
-   El puente MiBoxer no es compatible.

LW12 / Lagute:
-   No es posible programar modos personalizados, es necesario usar la aplicación provista con el controlador (Magic Home). Por otro lado, los modos personalizados se pueden activar con el complemento.
-   Hay varias versiones de LW12 que pueden no ser compatibles con el complemento.

Magic UFO, MagicHome y Arilux AL-C01 / 02/03/04/06/10:
-   La programación en modo personalizado, el modo de radio y los temporizadores no son compatibles. Debe usar la aplicación suministrada con el controlador (Magic Home). Por otro lado, los modos personalizados se pueden activar con el complemento.
-   Existen diferentes modelos que pueden no ser compatibles con el complemento.

Xiaomi Yeelight:
-   Los comandos HSV no son compatibles. El flujo y la escena se crean mediante la creación de comandos con el código JSON correspondiente al efecto deseado (consulte la documentación de la API de YeeLight).
-   La lámpara de noche Xiaomi no es compatible.
-   La lámpara de escritorio Xiaomi Mijia es parcialmente compatible (sin comentarios de estado completos).

Wifi 320/370:
-   El estado de los modos de escena no se gestiona, solo se gestiona ON / OFF.
-   Existen diferentes modelos que pueden no ser compatibles con el complemento.

H810:
-   los juegos de escenario no se gestionan.
-   Existen diferentes modelos que pueden no ser compatibles con el complemento.

TP-Link:
-   Los temporizadores no se gestionan.
-   La información de consumo de energía no es compatible con las bombillas.

Extel Meli:
-   La parte de sonido de la lámpara no se tiene en cuenta.

Xiaomi Philips:
-   Todas las funciones son tomadas en cuenta.

Controladores LED de tira de píxeles compatibles con Magic Home:
-   No se admiten escenas personalizadas.

Dispositivos compatibles Tuya Smart / Jinvoo / eFamilyCloud:
-   Todos los comandos para dispositivos validados (ver el foro) de firmware 1.0 y firmware 2.0 son compatibles (especialmente los sockets Neo CoolCam).

Sonoff DIY:
-   Basic R3 con dispositivos de firmware 3.3.0 con un solo contacto.

Ewelink y Sonoff LAN:
-   dispositivos con firmware 3.0.1 (la lista se proporciona a continuación en la sección eWelink)

# Configuración del módulo WiFi

## Instalar dispositivos

Descargue la aplicación móvil del fabricante y siga las instrucciones para controlar el dispositivo con el móvil. Para cada dispositivo wifilightV2, se proporciona ayuda detallada en la página de configuración.

Mientras el dispositivo no esté controlado con la aplicación móvil, el complemento no funcionará.

Consulte la ayuda y los foros para el generador de dispositivos.


## Configurar el enrutador
Es necesario configurar el DHCP de su enrutador (generalmente proporcionado por su proveedor de servicios) para modificar la atribución de la dirección IP del módulo wifi o la bombilla o la captura para que sea estático. Califica esta dirección. En general, tendrá la forma: 192.168.1.xxx donde xxx es la dirección del módulo wifi (2 a 254)

Verifique los foros en su casilla para aprender cómo configurar su DHCP.

Después de este cambio, verifique que la aplicación móvil aún controle el dispositivo.

Luego puede ir a la configuración del complemento wifilightV2.

## Instalación y configuración de complementos

wifilightV2 no crea ningún dispositivo automáticamente, debe crearlos en el complemento antes de configurarlos.

Ayuda :
-   Use el icono de signo de interrogación para obtener ayuda en cada elemento de configuración.

Ajuste:
-   Para configurar un dispositivo, elija el menú Complementos / Comunicar objetos / wifilightV2
-   Luego haga clic en el botón en la parte superior izquierda Agregar un módulo Wifi
-   Ingrese el nombre del módulo wifi
-   Ingrese el objeto padre
-   Elija la categoría Luz (predeterminado)
-   Habilitar y hacer visible (predeterminado)
-   Ingrese la dirección IP del módulo de la toma WiFi o la bombilla (consulte las preguntas frecuentes para obtener más información)
-   Para algunos dispositivos se le solicita ingresar al canal utilizado, crear un dispositivo wifilightV2 por canal
-   Para algunos dispositivos se le solicita que ingrese un token o (y) un identificador, consulte la ayuda en la página de configuración del dispositivo
-   Para algunos dispositivos es posible suprimir la retroalimentación si causa microcortes
-   Para algunos controladores es necesario indicar el número de leds de los leds de la tira de píxeles
-   Para algunos controladores es necesario indicar el orden de los colores si los colores por defecto no corresponden
-   Ingrese la marca o tipo de dispositivo
-   Ingrese el subtipo exacto del controlador, bombilla, enchufe o tira de led, esto es esencial para crear los comandos para controlar el dispositivo
-   Ingrese el número de envíos de comandos: le permite repetir el comando para un dispositivo remoto en caso de una transmisión incorrecta. (1 por defecto). Algunas bombillas o enchufes no manejan esta repetición porque el complemento se asegura mediante el retorno del estado de la transmisión. Algunos comandos relativos (incrementos) no se repiten.
-   Ingrese el retraso de envío en caso de repetición (predeterminado 0 ms, 100 ms máx.)
-   Ingrese el% de incremento de intensidad al presionar los botones para aumentar o disminuir la intensidad de la luz
-   Ingrese el número de grupo para la sincronización, vea a continuación

## Agregar comandos
Al guardar el módulo, los comandos se crean automáticamente.

El nombre de los comandos se puede cambiar. Los comandos creados y eliminados automáticamente se recrean durante una copia de seguridad.

cuando se crean todos los comandos, pueden pesar la interfaz, es posible no mostrarlos configurando la creación de los comandos.

## Cambiar el tipo o subtipo de dispositivo

-   eliminar todos los pedidos
-   cambiar el tipo o subtipo de dispositivo
-   ahorre 2 veces

# Operación de retroalimentación de estado y estado de conexión

## Compatibilidad del retorno estatal

La retroalimentación de estado es inmediata para los siguientes dispositivos:
- Yeelight
- compatible con ewelink
- compatible con la aplicación inteligente Tuya en vivo
- Sonoff en modo LAN

Por ejemplo, si se opera un interruptor, Jeedom lo sabrá de inmediato.

Para dispositivos:
 - LW12 / Lagute
 - OVNI Mágico / Inicio
 - Arilux
 - Wifi 3x0 (parcialmente)
 - TP-Link
 - Xiaomi Philips
 - Extel Meli
 - Sonoff en modo bricolaje

El complemento consulta regularmente el dispositivo para conocer su estado. El retraso para que Jeedom conozca el estado puede exceder 1 minuto.

Para otros dispositivos no hay comentarios de estado;

## Actualización por escenario

Los comandos xxxxGet y Status se pueden usar en un escenario Jeedom.

## Información de conexión

El comando ConnectedGet recupera el estado de conexión de cada dispositivo. Se actualiza cada minuto.
-  -1: dispositivo con retroalimentación de estado OK
-  -2: no se puede preparar la conexión del dispositivo
-  -3: dispositivo no conectado
-  -4: no hay respuesta del dispositivo
-  -5: respuesta incorrecta del dispositivo
-  -6: Dispositivo sin retorno de estado

# Cómo funciona la sincronización

## Principio de sincronización

Es posible sincronizar múltiples dispositivos de diferentes marcas:

Todos los dispositivos que tienen el mismo número de grupo están sincronizados

El grupo 0 no está sincronizado (grupo predeterminado)

Cuando se usa un comando de un dispositivo en el grupo, el mismo comando se aplica a todos los dispositivos en el mismo grupo

Si el comando no existe para el dispositivo sincronizado, simplemente se ignora.

Advertencia, los dispositivos no se ordenarán exactamente al mismo tiempo debido a la latencia al enviar pedidos uno tras otro.

## Configuración de sincronización

Simplemente ponga un número diferente de cero en el campo de grupo al configurar el equipo. Todos los equipos con los mismos números serán sincronizados.

# Estuche especial de cajas Mi.Light

## Configurar iBox 1 o 2

Desde la versión 1.0.58 de iBox 1 y 2, puede ser necesario modificar su configuración para que puedan interactuar con Jeedom.

Conéctese a http (con un navegador web) a la dirección IP de su iBox. Las credenciales predeterminadas son admin / admin. Vaya a la pestaña &quot;Otra configuración&quot; y en &quot;Configuración de parámetros de red / Protocolo&quot; elija UDP y guarde.

# Caso especial de Xiaomi Yeelight

## Configuración de la bombilla
Es esencial habilitar el control de LAN a través de la aplicación Xiaomi Yeelight.

## Modo de escena Xiaomi Yeelight
Es posible configurar los modos de escena. Varios modos de escena están preprogramados en el complemento, pero es posible agregar otros modos de escena.

Es suficiente respetar ciertas condiciones:
-   Agregue un comando de acción wifilightV2 de tipo Predeterminado
-   Ponle un nombre (por ejemplo, Scene Blink)
-   En los parámetros, coloque el comando de escena Yeelight, por ejemplo: &quot;id&quot;: 1, &quot;method&quot;: &quot;set_scene&quot;, &quot;params&quot;: [&quot;cf&quot;, 0,0, &quot;500,1,255,100,1000,1,16776960, 70 &quot;]

Ne pas mettre les accolades de début et de fin ainsi que les caractères de retour à la ligne, le plugin les ajoutera automatiquement
S'inspirer des commandes préconfigurées pour créer ces modes scène supplémentaires.
Pour la syntaxe Yeelight, voir [ici](https://www.yeelight.com/download/Yeelight_Inter-Operation_Spec.pdf)

## Actualizar estado en Jeedom
Al activar el complemento y tan pronto como se inicia el demonio y cada minuto, el complemento busca las bombillas alimentadas y conectadas a Jeedom.

Tan pronto como se encuentra la bombilla, el estado de la bombilla se vuelve a montar en el complemento de inmediato.

Tenga en cuenta que el complemento puede tomar hasta 1 minuto para encontrar una bombilla y 4 minutos para encontrar que un dispositivo está desconectado.

# Caso especial de dispositivos TP-Link

## Configuración de la bombilla

Desde mediados de 2019, salen nuevos dispositivos en la versión 2 del protocolo. El protocolo V2 requiere recuperar un token (token) que permita que el complemento interactúe con los dispositivos TP-Link.

Para obtener este token, es necesario capturar los marcos intercambiados entre la aplicación Kasa en el teléfono y el dispositivo que se agregará en el complemento. En Android debes usar Packet Capture.

El complemento luego permite extraer el token. Debe copiar el marco recuperado en el campo Parámetros del comando GetKey y ejecutar este comando. Si el marco es decodificable, el token se mostrará en los registros y en el centro de mensajes (tenga cuidado: elimine el mensaje cada vez que lo lea).

El marco para poner en &quot;Parámetros&quot; debe tener el siguiente ritmo (el ... reemplazar otros valores):

00 00 00 5f d0 f2 91 fe 90 e4 81 f9 8d af 95 ... 99 bb 81 fa 87 fa 87

Los datos están separados por espacios y representan números hexadecimales que provienen directamente de Packet Capture. En general, el marco comienza con 3 ceros y aquí 5f da el tamaño del marco en hexadecimal o 95 en decimal.

No se brindará ayuda para recuperar el marco de Packet Capure.

Por el momento, solo los enchufes son utilizables en V2, para contactar al autor si tiene bombillas en V2.

# Caso especial de Philips Xiaomi

## Configuración de la bombilla

Es esencial recuperar un token que permita que el complemento interactúe con los dispositivos Philips Xiaomi.

El procedimiento es complejo y requiere varias manipulaciones. Haga una búsqueda en la web con la siguiente palabra clave: token Xiaomi.

No se brindará ayuda para recuperar el token.

# Caso especial de Sonoff en modo bricolaje

## Configuración del modo de bricolaje

Sonoff proporciona todos los elementos [aquí] (https://github.com/itead/Sonoff_Devices_DIY_Tools/tree/master/tool) para configurar los módulos en modo DIY.

Se requiere un teléfono móvil y una PC con Windows con tarjeta WiFi. El software a ejecutar para encontrar el Sonoff le da en la columna izquierda el identificador necesario para configurar el dispositivo.

El dispositivo Sonoff debe ser firmware 3.3.0 o superior, la aplicación de Windows anterior permite actualizar el firmware.

# Caso especial de dispositivos compatibles con la aplicación Ewelink en modo LAN

## Recuperando APiKey y DeviceID

Siga las instrucciones [aquí] (https://blog.ipsumdomus.com/sonoff-switch-complete-hack-without-firmware-upgrade-1b2d6632c01) para recuperar estos 2 datos. El deviceid debe poner el identificador del complemento. El Apikey es poner la ficha. No debe poner espacios ni comillas.

El dispositivo debe ser firmware 3.0.1 o superior, la aplicación Ewelink permite actualizar el firmware.

## Información de conexión

Cuando un dispositivo se conecta a wifi, el complemento será notificado de inmediato. Por otro lado, cuando se desconecta un dispositivo, el complemento solo puede saber si el complemento envía un comando.

## compatibilidad

Muchas marcas son compatibles, incluido Sonoff.
-  Interruptores, enchufes de pared, interruptor: simple de todas las marcas
-  Interruptores, enchufes de pared, interruptor: múltiplos de todas las marcas.
-  2 tipos de lámparas (prueba ambos tipos)
-  Sonoff TH10 / 1H16 sensor de temperatura
-  Sonoff Basic, RF, POW, Mini
-  Sonoff Dual
-  Sonoff 4CH / 4CH PRO
-  Sonoff Touch
-  Sonoff S20 / S26
-  Sonoff T1 / TX
-  Sonoff SLAMPHER
-  Sonoff T4EUC1
-  Sonoff RF bridge 433 solo para sensores (puerta, detector de presencia, control remoto)

Para dispositivos multicanal (como el Sonoff 4CH), debe crear tantos dispositivos wifilightV2 como canales, una copia de la primera tarea fácil creada, luego debe cambiar el número de canal.

Para los dispositivos que no están presentes en esta lista (Sonoff Ifan, dimmer, por ejemplo) o si la configuración no funciona y después de integrar el dispositivo en Jeedom (con la configuración básica de Sonoff, por ejemplo), ubique en los registros:

Recibir después de la decodificación: {...............}

y proporcione en el [foro] (https://community.jeedom.com/t/plugin-wifilightv2-sonoff-ewelink-lan/2632) el contenido de las llaves para permitir la integración del módulo en el complemento.

# Caso especial de dispositivos compatibles Aplicaciones Tuya Smart / Jinvoo / eFamilyCloud

## compatibilidad

Muchas marcas son compatibles con el complemento. Consulte el foro para más información. El complemento puede controlar muchos actuadores. Puede recuperar el estado de los dispositivos tan pronto como envía información de cambio de estado o cuando los consulta cada minuto. Si se usa un interruptor de pared, Jeedom lo sabrá de inmediato.

Los siguientes dispositivos son compatibles con el firmware 1.0. y en firmware 2.0.

-  Enchufes simples con y sin retorno de consumo, especialmente los enchufes wifi Neo Coolcam
-  múltiples tomacorrientes con y sin consumo de energía con y sin USB
-  control de persiana
-  interruptores de pared: 1, 2 o 3 inters
-  interruptor de pared con dimmer
-  humidificador NEWKBO 300 ml y solo este
-  termostato BHT-6000GCLW / BHT 6000 y solo estos modelos
-  Bombillas de globo RGBW y modelos similares en funcionamiento

Sin embargo, la compatibilidad de estos dispositivos no está garantizada porque el protocolo puede ser modificado por los fabricantes.

Para dispositivos multicanal (como múltiples enchufes), debe crear tantos dispositivos wifilightV2 como pueda canalizar, una copia de la primera tarea fácil creada, luego debe cambiar el número de canal.

Los sensores de presencia y apertura no son compatibles porque no se comunican localmente.

El complemento prueba los dispositivos (pero deben agregarse manualmente) y muestra un mensaje en el centro de mensajes cuando un dispositivo se ha configurado con el firmware incorrecto.


## Configuración del dispositivo

Es esencial recuperar una clave local (LocalKey) y un identificador que permita que el complemento interactúe con los dispositivos.

El procedimiento es complejo y requiere varias manipulaciones. Busque en la web con la palabra clave: Tuya localkey, en Github en particular o en el foro Jeedom.

El dispositivo no debe estar conectado a una aplicación de teléfono móvil, de lo contrario no responderá a las órdenes de Jeedom. Por lo tanto, es necesario cerrar cualquier aplicación posiblemente conectada al dispositivo.

Si el dispositivo se desinstala y se vuelve a instalar en la aplicación móvil, se cambiará su clave. Será necesario encontrar la clave con el procedimiento anterior.

No se brindará ayuda para recuperar la clave o el identificador.

Cualquier cambio de configuración requiere reiniciar el demonio.

## Configurar la recuperación del consumo de socket

Según las marcas, el consumo no se envía exclusivamente por el outlet. Para recuperar esta configuración, instale el enchufe en Jeedom y mantenga el estado en la configuración, luego vaya a los registros de wifilightV2. La captura se interroga cada minuto. Encuentra el mensaje que se ve así:

return decodificado: {&quot;devId&quot;: &quot;xxxxxxxxx&quot;, &quot;dps&quot;: {&quot;1&quot;: falso, &quot;2&quot;: falso, &quot;9&quot;: 0, &quot;10&quot;: 0, &quot;18&quot;: 0, &quot;19&quot; : 0, &quot;20&quot;: 2281, &quot;21&quot;: 1, &quot;22&quot;: 726, &quot;23&quot;: 28.971, &quot;24&quot;: 19.417, &quot;25&quot;: 1070}}

El índice &quot;20&quot; aquí corresponde a la tensión de alimentación en los cien mV o 228.1 V, debe moverse ligeramente. Los índices &quot;18&quot; y &quot;19&quot; corresponden a la corriente (mA) y la potencia en W, aquí no hay ningún dispositivo conectado y, por lo tanto, la información está en cero. Esta es una buena manera de encontrar el voltaje, conectando un dispositivo, estos 2 valores deben cambiarse y el voltaje es justo después.

La sintaxis es entonces: 20; 18; 19 que debe ponerse en el campo &#39;Configuración de energía&#39;.

Para los enchufes de 1 enchufe, en general necesita: 6; 4; 5 (predeterminado por el complemento).

Para los enchufes 2 tomados, en general necesita: 9; 7; 8 (predeterminado por el complemento).

Para otras salidas, el valor 20; 18; 19 se establece de manera predeterminada.

## Personalización de pedidos

Dada la variedad de dispositivos compatibles con Tuya, puede ser necesario crear comandos personalizados.

Crear una nueva acción / comando predeterminado. Dé un nombre e Id idénticos y ponga el comando Tuya en parámetros. Dejar en blanco Los comandos de Tuya están en formato JSON y contienen dps: {xxxxxx}. Es el xxxxxx que se debe poner en los parámetros.

Ejemplos:

Para levantar ciertos postigos: xxxxxx es &quot;1&quot;: &quot;1&quot;, que es para poner parámetros (use las comillas dobles de la tecla 3).

Para poner el enchufe n ° 2 de algunos enchufes a uno: xxxxxx por valor de &quot;2&quot;: verdadero, que es poner parámetros (para usar las comillas dobles de la tecla 3).

Para desactivar # 1 y # 2 de algunos enchufes: xxxxxx es &quot;1&quot;: falso, &quot;2&quot;: falso, que se configurará en los parámetros (utilice las comillas dobles en la tecla 3).

El siguiente párrafo proporciona elementos para interpretar los registros de wifilightV2.
-   Tenga en cuenta que el dispositivo debe devolver su estado.
-   En muchos casos no habrá retroalimentación de estado si los comandos agregados por defecto no recuperan el dps. En este caso, es posible recuperar el retorno del estado agregando un comando personalizado especificando el dps como se indica en el siguiente párrafo.
-   Por lo tanto, es posible mezclar comandos personalizados especificando el dps (siguiente párrafo) o sin especificar el dps.

## Dispositivo personalizado

Es posible crear un dispositivo totalmente personalizado. A diferencia de los comandos personalizados, un dispositivo personalizado no tiene un comando predefinido y todo debe configurarse para cada comando. El procedimiento requiere que el dispositivo devuelva su estado en los registros, de lo contrario no hay alivio.

### configuración
-   deshabilitar todos los dispositivos wifilightV2 excepto el que se va a probar
-   configurar el dispositivo (dirección IP estática, LocalKey, Id)
-   compruebe que el demonio está corriendo, de lo contrario, inícielo
-   configurar registros de wifilightV2 en modo de depuración
-   borrar los registros

### Recuperando información
-   presione un botón del dispositivo (encendido, apagado, arriba, abajo, etc.) o espere a que el dispositivo regrese a su estado o presione un botón en la aplicación Smart Live (pero en este último puede evitar el retorno del estado )
-   encuentra en los registros el pasaje que se ve así:

        Receive after decode :{devId:50701244cc50e37e9aff,dps:{"1":"off","101":true}}
        [2019-10-13 09:15:30][DEBUG] :       >>> : devId | 50701244cc50e37e9aff : 50701244cc50e37e9aff
        [2019-10-13 09:15:30][DEBUG] :       >>> : dps | Array : Array
        [2019-10-13 09:15:30][DEBUG] :       >>>>>>>>>>> : 1 | stop : stop
        [2019-10-13 09:15:30][DEBUG] :       >>>>>>>>>>> : 101 | 1 : 1

    Aquí, se ha seleccionado el botón de apagado en el dispositivo y se observa que el dps 1 ha cambiado.

        Receive after decode :{devId:50701244cc50e37e9aff,dps:{"1":"on","101":true}}
        [2019-10-13 09:15:30][DEBUG] :       >>> : devId | 50701244cc50e37e9aff : 50701244cc50e37e9aff
        [2019-10-13 09:15:30][DEBUG] :       >>> : dps | Array : Array
        [2019-10-13 09:15:30][DEBUG] :       >>>>>>>>>>> : 1 | stop : stop
        [2019-10-13 09:15:30][DEBUG] :       >>>>>>>>>>> : 101 | 1 : 1

    Aquí, el botón ha sido seleccionado en el dispositivo y se observa que el dps 1 ha cambiado.

-   Cree una nueva acción / comando predeterminado en los comandos del dispositivo:
    *    En la columna de la interfaz, active el nombre del botón
    *    En el nombre interno de la columna y el número de orden, establezca como Id único: ON, como dps: 1 (sin las comillas dobles) y como parámetro: &quot;on&quot; (si no está entre comillas, los necesita apagado).
-   Cree una nueva acción / comando predeterminado en los comandos del dispositivo:
    *    En la columna de la interfaz, apague el nombre del botón
    *    En la columna de nombre interno y número de orden, establezca como Id único: OFF, como dps: 1 (sin las comillas dobles) y como parámetro: &quot;off&quot; (si el off no está entre comillas, los necesita apagado).
-   Cree una nueva información / otro comando en los comandos del dispositivo:
    *    En la columna de interfaz ponga STAT como el nombre de la información
    *    En la columna Nombre interno e ID de pedido, establezca como Id único: ESTADO, como dps: 1 (sin comillas dobles) y nada en los parámetros.

    En el caso de la información digital:

        Receive after decode :{devId:50701244cc50e37e9aff,dps:{"3":850,"101":true}}
        [2019-10-13 09:15:30][DEBUG] :       >>> : devId | 50701244cc50e37e9aff : 50701244cc50e37e9aff
        [2019-10-13 09:15:30][DEBUG] :       >>> : dps | Array : Array
        [2019-10-13 09:15:30][DEBUG] :       >>>>>>>>>>> : 3 | 850 : 850
        [2019-10-13 09:15:30][DEBUG] :       >>>>>>>>>>> : 101 | 1 : 1

    Aquí, se ha seleccionado un control deslizante de intensidad en la aplicación del dispositivo y se observa que el dps 3 ha cambiado.

-   Cree un nuevo comando de acción / cursor en los comandos del dispositivo:
    *    En la columna de interfaz coloque Intensidad como nombre del cursor
    *    En el nombre interno de la columna y el número de orden, establezca como Id único: Intensidad, como dps: 3 (sin las comillas dobles) y como parámetro: # control deslizante # (aquí el valor numérico no está entre comillas, no no los pongas).
-   Cree una nueva información / otro comando en los comandos del dispositivo:
    *    En la columna de interfaz coloque IntensiteGet como nombre de la información
    *    En el nombre interno de la columna y el número de orden, establezca como Id único: IntensiteGet, como dps: 3 (sin las comillas dobles) y nada en los parámetros.

Notas:
-   nada en los registros: dirección IP o dispositivo incorrecto que no devuelve su estado
-   volver con error: ID incorrecta
-   retorno no decodificado: clave local incorrecta
-   el comando no funciona: verifique el comando
-   Para modificar el color de una lámpara, la técnica del control deslizante no es posible, es necesario programar varios botones con colores predefinidos

## Actualizar estado en Jeedom
Al activar el complemento y tan pronto como se inicia el demonio, y cada minuto, el complemento busca dispositivos alimentados y conectados a Jeedom.

Tan pronto como se encuentra el dispositivo, el estado del dispositivo se devuelve al complemento inmediatamente.

Tenga en cuenta que el complemento puede tardar hasta 1 minuto en descubrir que un dispositivo está conectado o desconectado.

# Preguntas frecuentes


## ¿Qué dispositivos se pueden usar?

Lee la documentación

## No pasa nada

Primero ejecute el dispositivo con la aplicación móvil proporcionada por el fabricante.

Usa el botón <tester> en el menú Complemento / Objetos conectados / wifilightV2 / comandos.

No se proporcionará ayuda sin que los dispositivos estén operativos con la aplicación de compilación en un teléfono móvil. Es necesario dar una dirección IP fija al dispositivo.


## No sé cómo configurar mi caja de internet

No se proporcionará ayuda sobre la caja y los conceptos necesarios para configurar el enrutador para asignar una dirección IP fija. Consulte los foros de la caja.

## Todos los comandos no se crean durante un cambio de modelo de dispositivo

Ahorre 2 veces

## La gestión de la intensidad de la luz blanca Mi.Light / EasyBulb / LimitlessLED no es práctica

El fabricante de LED no ha planeado afectar directamente la intensidad de la bombilla. Solo podemos aumentar o disminuir el valor anterior. El complemento solo replica esta operación. El cursor que se propone es, por lo tanto, caprichoso.

## La gestión de la intensidad del color a veces tiene comportamientos inesperados.

Ningún protocolo maneja la intensidad del color, aunque generalmente las aplicaciones móviles lo hacen. Mientras Jeedom maneje el color y la intensidad, todo va bien. Pero si una aplicación móvil cambia la intensidad, los resultados no siempre son los esperados. El complemento intenta solucionar el problema cuando la lámpara o el controlador tienen una retroalimentación de estado.

## ¿Hay un retorno del estado?

Lee la documentación

## No se pueden operar las bombillas Xiaomi Yeelight

Es esencial activar el modo de control de LAN a través de la aplicación Xiaomi Yeelight.

## No controlo el sonido de las bombillas Extel Meli

El sonido no es compatible con el complemento

## No se pueden operar bombillas Philips Xiaomi

Para interactuar con las bombillas Philips Xiaomi, es necesario transmitir un token o token en inglés. Sin este token, la bombilla no tendrá en cuenta los pedidos que se le envíen. Este token se encuentra en la aplicación Mi-Home y, según su teléfono, hay varias formas de recuperarlo. El procedimiento se describe en varios sitios, pero no se reproduce aquí por dos razones principales:

-   Xiaomi ya ha modificado su protocolo que ha obligado a modificar el procedimiento para recuperar el token, todavía podría hacerlo.
-   Se pueden poner a disposición de los usuarios de Internet procedimientos nuevos y más simples.
-   Esta documentación no se mantendrá tan rápidamente como una simple búsqueda en la web con las palabras clave: token xiaomi.

## No se pueden operar dispositivos compatibles Tuya / Smart live / Jinvoo / eFamilyCloud apps

Para interactuar con estas bombillas, enchufes y otros dispositivos, es necesario transmitir una clave local o Localkey o token en inglés y un identificador. Sin estos parámetros, la bombilla no tendrá en cuenta los pedidos que se le envíen. Existen varios métodos para recuperar esta información. El procedimiento se describe en varios sitios, pero no se reproduce aquí por dos razones principales:

-   Las aplicaciones se han actualizado, lo que ha significado cambiar el procedimiento para recuperar la información.
-   Se pueden poner a disposición de los usuarios de Internet procedimientos nuevos y más simples.
-   Esta documentación no se mantendrá tan rápidamente como una simple búsqueda en la web con las palabras clave: Tuya LocalKey y en particular en Github.

## Error al enviar comando / rueda con muesca sin parada / Emisión sin parada
-   los dispositivos wifilightV2 necesitan ser actualizados
-   entra en cada equipo y ahorra 2 veces
-   prueba con equipo nuevo si esto persiste

## Mi.Light bridge IBox1, iBox2, V6: comando tomado en cuenta al azar
-   los pedidos se envían demasiado rápido
-   en los escenarios, poner pausas de duración suficiente

## Mi.Light bridge IBox1, iBox2, V6: comando no tomado en cuenta
-   al emparejar con la aplicación móvil Mi.Light y al configurar wifilightV2, elija el mismo control remoto.

## LW12 UFO Magic Arilux Wifi3x0 H801 Compatible Magic Home Tuya / Jinvoo / eFamilyCloud Controllers
-   Existen muchas versiones y algunas pueden ser incompatibles con el complemento. Póngase en contacto con el autor para una posible actualización.

## Faltan pedidos al crear o cambiar el subtipo de la bombilla
-   guardar el equipo (2 veces)


# ¿Cómo obtener ayuda?


Vaya al foro de Jeedom [aquí] (https://community.jeedom.com/t/plugin-wifilightv2-sonoff-ewelink-lan/2632)

# Errores conocidos

La memoria disminuye drásticamente.
-   Error solucionado

Para los tomacorrientes compatibles con Tuya, los microcortes ocurren regularmente
-   Error solucionado
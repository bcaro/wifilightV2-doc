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
-   Nanoleaf Aurora con comentarios de estado!

Productos que pueden ser compatibles y no garantizados:
-   LW12 / Lagute: controlador de tira RGB: retroalimentación de estado.
-   Controlador de tira WiFi RGB 320/370 RGB / RGBW: retroalimentación parcial del estado.
-   Magic UFO: controlador de tira RGBW, ¡maneja el blanco!
-   MagicHome: controlador de tira RGBW / RGBWW y focos / focos RGBW compatibles con la aplicación MagicHome.
-   H801: Controlador de tira de RGBW, sin comentarios de estado.
-   Arilux AL-C01 / 02/03/04/06/10: controlador de tira RGB / RGBW / RGBWW, retroalimentación de estado.
-   TP-Link LB100 / 110/120/130: bombillas con retroalimentación de estado!
-   ¡Lámpara Extel Meli con retroalimentación de estado!
-   Xiaomi Philips: lámpara de escritorio, bombilla y lámpara de techo con retroalimentación de estado.
-   ¡Bombillas, enchufes, interruptores, interruptores de obturación, humidificador, termostato compatible con aplicaciones Tuya Smart live o Jinvoo smart o eFamilyCloud con comentarios de estado!
-   TP-link HS100 HS110 enchufes eléctricos con retroalimentación de estado !!
-   ¡Controladores de tira de píxeles compatibles con Magic Home con retroalimentación de estado!
-   Periféricos controlados por la aplicación Ewelink, incluidos Sonoffs en modo LAN con comentarios de estado.

Para estos controladores, bombillas o enchufes, el protocolo de intercambio no viene directamente del fabricante, que puede modificarlo en cualquier momento. Existen varias versiones en el mercado que no son todas compatibles con el complemento.

Atención :
- ! : integración fácil para una persona que lee la documentación antes de actuar
- !! : además de !, requiere seguir un procedimiento particular, adecuado para una persona que entiende que un procedimiento está hecho para ser seguido escrupulosamente
- !!! : ademas de !! requiere conocimientos básicos de informática y estar acostumbrado a investigar en Internet para un propósito específico

Productos incompatibles y no incompatibles:
-   El puente Mi.light MiBoxer (excepto ON / OFF de la caja)
-   Controladores Led Milight (tipo YL, etc.) sin puente.
-   Bombillas, enchufes o controladores de tira de LED que contienen un receptor bluetoooth en lugar de un receptor de radio de 2,4 Ghz o WiFi.
-   La tira de LED o los controladores de bombilla y las bombillas o enchufes que utilizan una conexión WiFi punto a punto con la aplicación móvil.
-   La lámpara de cabecera de Xiaomi no es compatible (por construcción).

## Prueba de compatibilidad

A petición, se puede proporcionar un complemento de prueba para productos no validados.

Es recomendable consultar en el foro para averiguar la compatibilidad de un producto que no está ampliamente distribuido.

Vaya al foro Jeedom [aquí] (https://community.jeedom.com/t/plugin-wifilightv2-discussion-generale/2439)


# limitaciones

Mi.Light / EasyBulb / LimitlessLED:
-   El complemento tiene en cuenta todas las funcionalidades.
-   El puente MiBoxer no es compatible

LW12 / Lagute:
-   No es posible programar modos personalizados, debe usar la aplicación suministrada con el controlador (Magic Home). Por otro lado, los modos personalizados se pueden activar con el complemento.
-   Hay varias versiones de LW12 que pueden no ser compatibles con el complemento.

Magic UFO, MagicHome y Arilux AL-C01 / 02/03/04/06/10:
-   No se admite la programación de modos personalizados, modo de radio y temporizadores. Debe usar la aplicación suministrada con el controlador (Magic Home). Por otro lado, los modos personalizados se pueden activar con el complemento.
-   Existen diferentes modelos que pueden no ser compatibles con el complemento.

Xiaomi Yeelight:
-   Los comandos HSV no se administran. El flujo y la escena se crean mediante la creación de comandos con el código JSON correspondiente al efecto deseado (consulte la documentación de la API YeeLight).
-   La lámpara de noche Xiaomi no es compatible.
-   La lámpara de escritorio Xiaomi Mijia es parcialmente compatible (sin comentarios de estado completos).

Wifi 320/370:
-   La retroalimentación del estado del modo de escena no se gestiona, solo se gestiona ON / OFF.
-   Existen diferentes modelos que pueden no ser compatibles con el complemento.

H810:
-   los juegos de escenario no se gestionan.
-   Existen diferentes modelos que pueden no ser compatibles con el complemento.

TP-Link:
-   Los temporizadores no se gestionan.
-   La información del consumo de energía no se administra para las bombillas.

Extel Meli:
-   La parte de sonido de la lámpara no se tiene en cuenta.

Xiaomi Philips:
-   Todas las funciones son tomadas en cuenta.

Controladores de tira de píxeles compatibles con Magic Home:
-   Las escenas personalizadas no se gestionan.

Dispositivos compatibles Tuya Smart / Jinvoo / eFamilyCloud:
-   Todos los comandos de dispositivos validados (ver foro) de firmware 1.0 y firmware 2.0 son compatibles (en particular, los sockets Neo CoolCam).

Sonoff DIY:
-   Basic R3 con periféricos de firmware 3.3.0 con un solo contacto.

Ewelink y Sonoff LAN:
-   dispositivos con firmware 3.0.1 (la lista se proporciona a continuación en el párrafo eWelink)

Nanoleaf AUrora:
-   Ritmo no implementado

# Configuración del módulo WiFi

## Instalar periféricos

Descargue la aplicación móvil del fabricante y siga las instrucciones para controlar el dispositivo con su dispositivo móvil. Para cada dispositivo wifilightV2, se proporciona ayuda detallada en la página de configuración.

Mientras el dispositivo no esté controlado con la aplicación móvil, el complemento no podrá funcionar.

Consulte la ayuda y los foros del fabricante del dispositivo.


## Configurar el enrutador
Debe configurar el DHCP de su enrutador (generalmente proporcionado por su proveedor de acceso) para modificar la asignación de la dirección IP del módulo wifi o la bombilla o el zócalo para que sea estático. Tenga en cuenta esta dirección. En general, tendrá la forma: 192.168.1.xxx donde xxx corresponde a la dirección del módulo wifi (2 a 254)

Consulte los foros de su caja para aprender cómo configurar su DHCP.

Después de esta modificación, verifique que la aplicación móvil aún controle el dispositivo.

Luego puede proceder a la configuración del complemento wifilightV2.

## Instalación y configuración de complementos

wifilightV2 no crea ningún dispositivo automáticamente, debe crearlos en el complemento antes de configurarlos.

Ayuda :
-   Use el icono de signo de interrogación para obtener ayuda con cada elemento de configuración.

Configuración:
-   Para configurar un dispositivo, elija el menú Complementos / Comunicación de objetos / wifilightV2.
-   Luego haga clic en el botón en la parte superior izquierda Agregar un módulo WiFi
-   Ingrese el nombre del módulo wifi
-   Ingresar objeto primario
-   Elija la categoría de luz (predeterminado)
-   Activar y hacer visible (predeterminado)
-   Ingrese la dirección IP del módulo de conexión WiFi o la bombilla (consulte las preguntas frecuentes para obtener más explicaciones)
-   Para algunos periféricos se le solicita ingresar al canal utilizado, crear un dispositivo wifilightV2 por canal
-   Para algunos dispositivos se le pide que ingrese un token o (y) un identificador, consulte la ayuda en la página de configuración del dispositivo
-   Para algunos dispositivos es posible suprimir la retroalimentación de estado si causa microcortes
-   Para algunos controladores es necesario indicar el número de leds de los leds de la tira de píxeles
-   Para algunos controladores es necesario indicar el orden de los colores si los colores predeterminados no coinciden
-   Ingrese la marca o tipo de dispositivo
-   Ingrese el subtipo exacto del controlador, la bombilla, el zócalo o el led de tira, esto es esencial para crear los comandos para controlar el dispositivo
-   Ingrese el número de pedidos enviados: le permite repetir el pedido de equipos remotos en caso de una transmisión incorrecta. (1 por defecto). Algunas bombillas o enchufes no gestionan esta repetición porque el complemento lo garantiza mediante el retorno del estado de la transmisión. Algunos comandos relativos (incrementos) no se repiten.
-   Ingrese el retraso de envío en caso de repetición (0 ms por defecto, 100 ms como máximo)
-   Ingrese el% de aumento de intensidad al presionar los botones para aumentar o disminuir la intensidad de la luz
-   Ingrese el número de grupo para la sincronización, vea a continuación

## Agregar comandos
Al guardar el módulo, los pedidos se crean automáticamente.

El nombre de los comandos se puede cambiar. Los pedidos creados y eliminados automáticamente se recrean durante una copia de seguridad.

cuando se crean todos los comandos, pueden pesar la interfaz, es posible no mostrarlos configurando la creación de los comandos.

## Cambiar el tipo o subtipo de dispositivo

-   eliminar todos los pedidos
-   cambiar el tipo o subtipo de dispositivo
-   ahorre 2 veces

# Retroalimentación de estado y operación de estado de conexión

## Compatibilidad de retroalimentación de estado

La retroalimentación de estado es inmediata para los siguientes dispositivos:
- Yeelight
- compatible con ewelink
- compatible con la aplicación en vivo inteligente Tuya
- Sonoff en modo LAN

Por ejemplo, si se presiona un interruptor, Jeedom lo sabrá de inmediato.

Para periféricos:
 - LW12 / Lagute
 - OVNI Mágico / Inicio
 - Arilux
 - Wifi 3x0 (parcialmente)
 - TP-Link
 - Xiaomi Philips
 - Extel Meli
 - Sonoff en modo bricolaje
 - Aurora Nanoleaf

El complemento consulta regularmente el dispositivo para conocer su estado. El retraso para que Jeedom conozca el estado puede exceder 1 minuto.

Para otros dispositivos no hay comentarios de estado;

## Actualización por escenario

Los comandos xxxxGet y State se pueden usar en un escenario Jeedom.

## Información de conexión

El comando ConnectedGet le permite recuperar el estado de conexión de cada dispositivo. Se actualiza cada minuto.
-  -1: dispositivo con estado regresar OK
-  -2: no se puede preparar la conexión al dispositivo
-  -3: dispositivo no conectado
-  -4: no hay respuesta del dispositivo
-  -5: respuesta incorrecta del dispositivo
-  -6: dispositivo sin retroalimentación de estado

# Cómo funciona la sincronización

## Principio de sincronización

Es posible sincronizar varios dispositivos de diferentes marcas:

Todos los dispositivos con el mismo número de grupo están sincronizados

El grupo 0 no está sincronizado (grupo predeterminado)

Cuando se usa un comando de un dispositivo en el grupo, el mismo comando se aplica a todos los dispositivos en el mismo grupo

Si el comando no existe para el dispositivo sincronizado, simplemente se ignora.

Atención, los periféricos no se ordenarán exactamente al mismo tiempo debido a los tiempos de latencia durante el envío de los pedidos, que se realizan uno tras otro.

## Configuración de sincronización

Simplemente ponga un número distinto de cero en el campo de grupo cuando configure el equipo. Todos los equipos con los mismos números serán sincronizados.

# Caso particular de cajas Mi.Light

## Configuración de iBox 1 o 2

Desde la versión 1.0.58 de iBox 1 y 2, puede ser necesario modificar su configuración para que puedan comunicarse con Jeedom.

Conéctese en http (con un navegador web) a la dirección IP de su iBox. Las credenciales predeterminadas son admin / admin. Vaya a la pestaña &quot;Otra configuración&quot; y en &quot;Configuración de parámetros de red / Protocolo&quot; elija UDP y guarde.

# Caso especial de Xiaomi Yeelight

## Configuración de la bombilla
Es esencial activar el control de la red local a través de la aplicación Xiaomi Yeelight.

## Modo de escena Xiaomi Yeelight
Los modos de escena se pueden configurar. Varios modos de escena están preprogramados en el complemento, pero es posible agregar otros modos de escena.

Es suficiente respetar ciertas condiciones:
-   Agregue una acción wifilightV2 de tipo Predeterminado
-   Póngale un nombre (por ejemplo, Destellos de escena)
-   En los parámetros, coloque el comando de escena Yeelight, por ejemplo: &quot;id&quot;: 1, &quot;method&quot;: &quot;set_scene&quot;, &quot;params&quot;: [&quot;cf&quot;, 0,0, &quot;500,1,255,100,1000,1,16776960, 70 &quot;]

No coloque las llaves de inicio y fin, así como los caracteres de nueva línea, el complemento los agregará automáticamente. Inspírese en los comandos preconfigurados para crear estos modos de escena adicionales. Para la sintaxis de Yeelight, consulte [aquí] (https://www.yeelight.com/download/Yeelight_Inter-Operation_Spec.pdf)

## Actualización de estado en Jeedom
Al activar el complemento y tan pronto como se lanza el demonio, así como cada minuto, el complemento busca bombillas con luz y conectadas a Jeedom.

Tan pronto como se encuentra la bombilla, el estado de la bombilla se devuelve al complemento inmediatamente.

Tenga en cuenta que el complemento puede tardar hasta 1 minuto en encontrar una bombilla y 4 minutos en encontrar que un dispositivo está desconectado.

# Caso especial de dispositivos TP-Link

## Configuración de la bombilla

Desde mediados de 2019, salen nuevos dispositivos en el protocolo de la versión 2. El protocolo V2 requiere recuperar un token que permita que el complemento se comunique con los dispositivos TP-Link.

Para obtener este token, debe capturar los marcos intercambiados entre la aplicación Kasa en el teléfono y el dispositivo que se agregará en el complemento. En Android tienes que usar Packet Capture.

El complemento luego le permite extraer el token. Debe copiar el marco recuperado en el campo Parámetros del comando getKey y luego ejecutar este comando. Si el marco es decodificable, el token se mostrará en los registros y en el centro de mensajes (atención: elimine el mensaje cada vez que lo lea).

El marco para poner en &quot;Parámetros&quot; debe tener el siguiente aspecto (el ... reemplazar otros valores):

00 00 00 5f d0 f2 91 fe 90 e4 81 f9 8d af 95 ... 99 bb 81 fa 87 fa 87

Los datos están separados por espacios y representan números hexadecimales que provienen directamente de Packet Capture. En general, el marco comienza con 3 ceros, luego, aquí, 5f da el tamaño del marco en hexadecimal o 95 en decimal.

No se brindará ayuda para recuperar el marco de Packet Capure.

Por el momento solo se pueden usar los enchufes en V2, contacte al autor si tiene bombillas en V2.

# Caso especial de Xiaomi Philips

## Configuración de la bombilla

Es esencial recuperar un token que permita que el complemento se comunique con dispositivos Xiaomi Philips.

El procedimiento es complejo y requiere varias manipulaciones. Haga una búsqueda en la web con la palabra clave: token Xiaomi.

No se brindará ayuda para recuperar el token.

# Caso especial de Sonoff en modo bricolaje

## Configuración del modo de bricolaje

Sonoff proporciona todos los elementos [aquí] (https://github.com/itead/Sonoff_Devices_DIY_Tools/tree/master/tool) para configurar los módulos en modo DIY.

Se requiere un teléfono móvil y una PC con Windows con tarjeta WiFi. El software a ejecutar para encontrar el Sonoff le da en la columna izquierda el identificador necesario para la configuración del dispositivo.

El dispositivo Sonoff debe estar en el firmware 3.3.0 o más, la aplicación de Windows anterior le permite actualizar el firmware.

# Caso especial de dispositivos compatibles con la aplicación Ewelink en modo LAN

## Recuperando APiKey y DeviceID

Siga las instrucciones [aquí] (https://blog.ipsumdomus.com/sonoff-switch-complete-hack-without-firmware-upgrade-1b2d6632c01) para recuperar estos 2 datos. El deviceid se debe colocar en el identificador del complemento. El Apikey se debe poner en la ficha. No ponga espacio ni comillas.

El dispositivo debe estar en el firmware 3.0.1 o superior, la aplicación Ewelink se utiliza para actualizar el firmware.

## Información de conexión

Cuando un dispositivo se conecta a wifi, el complemento será notificado de inmediato. Por otro lado, cuando se desconecta un dispositivo, el complemento solo sabrá si el complemento le envía un comando.

## compatibilidad

Muchas marcas son compatibles, incluido Sonoff.
-  Interruptores, enchufes de pared, interruptor: simple de todas las marcas
-  Interruptores, enchufes de pared, interruptor: múltiplos de todas las marcas
-  2 tipos de lámparas (prueba los 2 tipos)
-  Sonoff TH10 / 1H16 sensor de temperatura
-  Sonoff basic, RF, POW, Mini
-  Sonoff Dual
-  Sonoff 4CH / 4CH PRO
-  Sonoff Touch
-  Sonoff S20 / S26
-  Sonoff T1 / TX
-  Sonoff SLAMPHER
-  Sonoff T4EUC1
-  Sonoff RF bridge 433 solo para sensores (puerta, detector de presencia, control remoto)

Para los periféricos multicanal (como el Sonoff 4CH), debe crear tantos equipos wifilightV2 como canales, una copia del primer creado fácil de detectar, luego debe cambiar el número del canal.

Para los dispositivos no presentes en esta lista (Sonoff Ifan, dimmer, por ejemplo) o si la configuración no funciona y después de integrar el dispositivo en Jeedom (con la configuración básica de Sonoff, por ejemplo), ubique en los registros:

Recibir después de la decodificación: {...............}

y proporcione en el [foro] (https://community.jeedom.com/t/plugin-wifilightv2-sonoff-ewelink-lan/2632) el contenido de las llaves para permitir la integración del módulo en el complemento.

# Caso especial de dispositivos compatibles con las aplicaciones Tuya Smart / Jinvoo / eFamilyCloud

## compatibilidad

Muchas marcas son compatibles con el complemento. Consulte el foro para más información. El complemento permite controlar muchos actuadores. Puede recuperar el estado de los periféricos tan pronto como envía información de cambio de estado o cuando los interroga cada minuto. Si se usa un interruptor de pared, Jeedom lo sabrá de inmediato.

El siguiente equipo es compatible con el firmware 1.0. y en firmware 2.0.

-  enchufes simples con y sin retorno del consumo, en particular los enchufes wifi Neo Coolcam
-  múltiples enchufes con y sin consumo con y sin USB
-  control de persiana
-  interruptores de pared: 1, 2 o 3 inters
-  interruptor de pared con dimmer
-  Humidificador NEWKBO 300 ml y solo este
-  termostato BHT-6000GCLW / BHT 6000 y solo estos modelos
-  Bombillas de globo RGBW y modelos similares en funcionamiento

Sin embargo, la compatibilidad de estos dispositivos no está garantizada porque el protocolo puede ser modificado por los fabricantes.

Para dispositivos multicanal (como múltiples enchufes), debe crear tantos equipos wifilightV2 como canales, una copia del primer creado fácil de detectar, luego debe cambiar el número de canal.

Los sensores de presencia y apertura no son compatibles porque no interactúan localmente.

El complemento prueba los dispositivos (pero deben agregarse manualmente) y muestra un mensaje en el centro de mensajes cuando un dispositivo se ha configurado con el firmware incorrecto.


## Configuración del dispositivo

Es esencial recuperar una clave local (LocalKey) y un identificador que permita que el complemento se comunique con los dispositivos.

El procedimiento es complejo y requiere varias manipulaciones. Haga una búsqueda en la web con la palabra clave: Tuya localkey, en particular en Github o en el foro Jeedom.

El dispositivo no debe estar conectado a una aplicación en un teléfono móvil, de lo contrario no responderá a las órdenes de Jeedom. Por lo tanto, es necesario cerrar cualquier aplicación posiblemente conectada al dispositivo.

Si el dispositivo se desinstala y luego se reinstala en la aplicación móvil, se cambiará su clave. Deberá encontrar la clave con el procedimiento anterior.

No se brindará ayuda para recuperar la clave o el identificador.

Cualquier cambio de configuración requiere reiniciar el demonio.

## Configuración de recuperación de consumo de capturas

Según las marcas, el consumo no se envía de manera única por el enchufe. Para recuperar esta configuración, instale el enchufe en Jeedom y mantenga los comentarios de estado en la configuración, luego vaya a los registros de wifilightV2. El zócalo se sondea cada minuto. Encuentra el mensaje que se parece a:

return decodificado: {&quot;devId&quot;: &quot;xxxxxxxxx&quot;, &quot;dps&quot;: {&quot;1&quot;: falso, &quot;2&quot;: falso, &quot;9&quot;: 0, &quot;10&quot;: 0, &quot;18&quot;: 0, &quot;19&quot; : 0, &quot;20&quot;: 2281, &quot;21&quot;: 1, &quot;22&quot;: 726, &quot;23&quot;: 28.971, &quot;24&quot;: 19.417, &quot;25&quot;: 1070}}

El índice &quot;20&quot; aquí corresponde a la tensión de alimentación en cientos de mV, es decir: 228,1 V, debe moverse ligeramente. Los índices &quot;18&quot; y &quot;19&quot; corresponden a la corriente (mA) y a la potencia en W, aquí no hay ningún dispositivo conectado y, por lo tanto, la información es cero. Es una buena manera de encontrar la tensión, conectando un dispositivo, estos 2 valores deben modificarse y la tensión es justo después.

La sintaxis es entonces: 20; 18; 19 que debe ponerse en el campo &#39;Configuración de energía&#39;.

Para los enchufes 1 socket, en general es necesario: 6; 4; 5 (establecido por defecto por el complemento).

Para enchufes con 2 enchufes, en general necesita: 9; 7; 8 (establecido por defecto por el complemento).

Para los otros sockets, el valor 20; 18; 19 se establece de manera predeterminada.

## Personalización de pedidos

Dada la variedad de dispositivos compatibles con Tuya, puede ser necesario crear comandos personalizados.

Crear una nueva acción / comando predeterminado. Dé un nombre e Id idénticos y ponga el comando Tuya en los parámetros. Deja dps vacío. Los comandos de Tuya están en formato JSON y contienen dps: {xxxxxx}. Este es el xxxxxx que tienes que poner en los parámetros.

Ejemplos:

Para abrir ciertas persianas enrollables: xxxxxx vale &quot;1&quot;: &quot;1&quot;, que se debe establecer en parámetros (utilice las comillas dobles de la tecla 3).

Para activar el enchufe n ° 2 de ciertos enchufes: xxxxxx vale &quot;2&quot;: verdadero, que se debe configurar en los parámetros (utilice las comillas dobles de la tecla 3).

Para desactivar el enchufe n ° 1 y el enchufe n ° 2 de ciertos enchufes: xxxxxx vale &quot;1&quot;: falso, &quot;2&quot;: falso que se debe configurar en los parámetros (utilice las comillas dobles de la tecla 3).

El siguiente párrafo proporciona elementos para interpretar los registros de wifilightV2.
-   Tenga en cuenta que es necesario que el dispositivo devuelva su estado.
-   En muchos casos no habrá retorno de estado si los comandos agregados por defecto no recuperan el dps. En este caso, es posible recuperar la retroalimentación de estado agregando un comando personalizado especificando el dps como se indica en el siguiente párrafo.
-   Por lo tanto, es posible mezclar comandos personalizados especificando el dps (siguiente párrafo) o sin especificar el dps.

## Dispositivo personalizado

Es posible crear un dispositivo totalmente personalizado. A diferencia de los comandos personalizados, un dispositivo personalizado no tiene comandos predefinidos y todo debe configurarse para cada comando. El procedimiento requiere que el dispositivo devuelva su estado a los registros, de lo contrario no hay alivio.

### configuración
-   deshabilitar todos los dispositivos wifilightV2 excepto el que se va a probar
-   configurar el dispositivo correctamente (dirección IP estática, LocalKey, Id)
-   compruebe que el demonio se está ejecutando, si no lo inicia
-   configurar registros de wifilightV2 en modo de depuración
-   registros claros

### Recuperación de información
-   presione un botón en el dispositivo (encendido, apagado, arriba, abajo, etc.) o espere a que el dispositivo devuelva su estado o presione un botón en la aplicación Smart Live (pero en este último puede evitar comentarios de estado )
-   ubica en los registros el pasaje con este aspecto:

        Receive after decode :{devId:50701244cc50e37e9aff,dps:{"1":"off","101":true}}
        [2019-10-13 09:15:30][DEBUG] :       >>> : devId | 50701244cc50e37e9aff : 50701244cc50e37e9aff
        [2019-10-13 09:15:30][DEBUG] :       >>> : dps | Array : Array
        [2019-10-13 09:15:30][DEBUG] :       >>>>>>>>>>> : 1 | stop : stop
        [2019-10-13 09:15:30][DEBUG] :       >>>>>>>>>>> : 101 | 1 : 1

    Aquí, se seleccionó el botón de apagado en el dispositivo y observamos que el dps 1 ha cambiado.

        Receive after decode :{devId:50701244cc50e37e9aff,dps:{"1":"on","101":true}}
        [2019-10-13 09:15:30][DEBUG] :       >>> : devId | 50701244cc50e37e9aff : 50701244cc50e37e9aff
        [2019-10-13 09:15:30][DEBUG] :       >>> : dps | Array : Array
        [2019-10-13 09:15:30][DEBUG] :       >>>>>>>>>>> : 1 | stop : stop
        [2019-10-13 09:15:30][DEBUG] :       >>>>>>>>>>> : 101 | 1 : 1

    Aquí, el botón de encendido ha sido seleccionado en el dispositivo y observamos que el dps 1 ha cambiado.

-   Cree una nueva acción / comando predeterminado en los comandos del dispositivo:
    *    En la columna de la interfaz, active el nombre del botón
    *    En el nombre interno de la columna y el número de orden, coloque como Id único: ON, como dps: 1 (sin las comillas dobles) y como parámetro: &quot;on&quot; (si el uno no está entre comillas, deben estar apagado).
-   Cree una nueva acción / comando predeterminado en los comandos del dispositivo:
    *    En la columna de la interfaz, apague el nombre del botón
    *    En la columna de nombre interno y número de orden, coloque como Id único: OFF, como dps: 1 (sin las comillas dobles) y como parámetro: &quot;off&quot; (si el off no está rodeado de comillas, deben estar apagado).
-   Cree una nueva información / otro comando en los comandos del dispositivo:
    *    En la columna de interfaz ponga ESTADO como el nombre de la información
    *    En la columna de nombre interno y número de orden, coloque como Id único: ESTADO, como dps: 1 (sin las comillas dobles) y nada en los parámetros.

    En el caso de la información digital:

        Receive after decode :{devId:50701244cc50e37e9aff,dps:{"3":850,"101":true}}
        [2019-10-13 09:15:30][DEBUG] :       >>> : devId | 50701244cc50e37e9aff : 50701244cc50e37e9aff
        [2019-10-13 09:15:30][DEBUG] :       >>> : dps | Array : Array
        [2019-10-13 09:15:30][DEBUG] :       >>>>>>>>>>> : 3 | 850 : 850
        [2019-10-13 09:15:30][DEBUG] :       >>>>>>>>>>> : 101 | 1 : 1

    Aquí, se ha seleccionado un control deslizante de intensidad en la aplicación del dispositivo y observamos que el dps 3 ha cambiado.

-   Cree un nuevo comando de acción / cursor en los comandos del dispositivo:
    *    En la columna de interfaz, coloque Intensidad como el nombre del cursor
    *    En el nombre interno de la columna y el número de orden, coloque como Id. Único: Intensidad, como dps: 3 (sin comillas dobles) y como parámetro: # control deslizante # (aquí el valor numérico no está entre comillas, no así que no los pongas).
-   Cree una nueva información / otro comando en los comandos del dispositivo:
    *    En la columna de interfaz coloque IntensiteGet como nombre de la información
    *    En el nombre interno de la columna y el número de pedido, coloque como Id único: IntensiteGet, como dps: 3 (sin las comillas dobles) y nada en los parámetros.

Notas:
-   nada en los registros: dirección IP o dispositivo incorrecto que no devuelve su estado
-   volver con error: Id incorrecto
-   retorno no decodificado: clave local incorrecta
-   el comando no funciona: verifique el comando
-   Para cambiar el color de una lámpara, la técnica del control deslizante no es posible, es necesario programar varios botones con colores predefinidos

## Actualización de estado en Jeedom
Al activar el complemento y tan pronto como se inicia el demonio, así como cada minuto, el complemento busca dispositivos alimentados y conectados a Jeedom.

Tan pronto como se encuentra el dispositivo, el estado del dispositivo se devuelve inmediatamente al complemento.

Tenga en cuenta que el complemento puede tardar hasta 1 minuto en descubrir que un dispositivo está conectado o desconectado.

# Caso especial de Nanoleaf


## Recuperación clave

Presione el botón de encendido en Nanoleaf durante 5-7 sy presione el comando getKey en el complemento. Compruebe que Apikey se haya colocado en el campo &quot;token&quot; de la configuración del complemento.


## Usar efectos personalizados

Crea un efecto con la aplicación NanoLeaf y dale un nombre. Cree un comando de acción / predeterminado en la lista de comandos del dispositivo en el complemento. Pon el nombre en los parámetros. Luego proporcione un identificador único y un nombre, pueden ser idénticos al nombre del pedido.


# Preguntas frecuentes


## ¿Qué dispositivos se pueden usar?

Lee la documentación

## No pasa nada

Primero opere el dispositivo con la aplicación móvil provista por el fabricante.

Usa el botón <tester> en el menú Complemento / Objetos conectados / wifilightV2 / comandos.

No se brindará ayuda sin que los periféricos estén operativos con la aplicación del fabricante en un teléfono móvil. Es necesario dar una dirección IP fija al dispositivo.


## No se como configurar mi caja de internet

No se proporcionará ayuda sobre la caja y los conceptos necesarios para configurar el enrutador para asignar una dirección IP fija. Consulte los foros de la caja.

## No todos los comandos se crean al cambiar el modelo del dispositivo

Ahorre 2 veces

## Administrar la intensidad de las bombillas blancas Mi.Light / EasyBulb / LimitlessLED no es práctico

El fabricante de los LED no ha planeado poder afectar directamente la intensidad de la bombilla. Solo podemos aumentar o disminuir en comparación con el valor anterior. El complemento solo reproduce esta operación. El cursor que se propone es, en consecuencia, caprichoso.

## La gestión de la intensidad del color a veces tiene comportamientos inesperados.

Ningún protocolo gestiona la intensidad del color, aunque generalmente las aplicaciones móviles lo hacen. Mientras Jeedom maneje el color y la intensidad, todo estará bien. Pero si la aplicación móvil modifica la intensidad, los resultados no siempre son los esperados. El complemento intenta corregir el problema cuando la lámpara o el controlador tienen una retroalimentación de estado.

## ¿Hay algún comentario de estado?

Lee la documentación

## No se pueden operar las bombillas Xiaomi Yeelight

Es esencial activar el modo de control por red local a través de la aplicación Xiaomi Yeelight.

## No controlo el sonido de las bombillas Extel Meli

El sonido no es administrado por el complemento

## No se pueden operar las bombillas Xiaomi Philips

Para comunicarse con las bombillas Xiaomi Philips, es necesario transmitir una ficha o ficha en inglés. Sin este token, la bombilla no tendrá en cuenta los pedidos que se le envíen. Este token se encuentra en la aplicación Mi-Home y, según su teléfono, existen varios métodos para recuperarlo. El procedimiento se describe en varios sitios, pero no se reproduce aquí por dos razones principales:

-   Xiaomi ya ha modificado su protocolo que obligó a modificar el procedimiento para recuperar el token, aún podría hacerlo.
-   Se pueden poner a disposición de los usuarios de Internet procedimientos nuevos y más simples.
-   Esta documentación no se mantendrá tan rápidamente como una simple búsqueda web con las palabras clave: token xiaomi.

## No se pueden operar dispositivos compatibles con las aplicaciones Tuya / Smart live / Jinvoo / eFamilyCloud

Para comunicarse con estas bombillas, enchufes y otros periféricos, es necesario transmitir una clave local o local o una clave de token en inglés y un identificador. Sin estos parámetros, la bombilla no tendrá en cuenta los pedidos que se le envíen. Existen varios métodos para recuperar esta información. El procedimiento se describe en varios sitios, pero no se reproduce aquí por dos razones principales:

-   Las aplicaciones se actualizaron, lo que nos obligó a modificar el procedimiento para recuperar la información.
-   Se pueden poner a disposición de los usuarios de Internet procedimientos nuevos y más simples.
-   Esta documentación no se mantendrá tan rápidamente como una simple búsqueda web con las palabras clave: Tuya LocalKey y, en particular, en Github.

## Error al enviar comando / rueda dentada sin parar / Enviar sin parar
-   El equipo wifilightV2 debe actualizarse
-   ve a cada equipo y ahorra 2 veces
-   prueba con equipo nuevo si persiste

## Mi.Light IBox1, iBox2, puente V6: comando tomado en cuenta al azar
-   los pedidos se envían demasiado rápido
-   en los escenarios, poner pausas de duración suficiente

## Mi.Light IBox1, iBox2, puente V6: comando no tomado en cuenta
-   al emparejar con la aplicación Mi.Light en dispositivos móviles y al configurar wifilightV2, elija el mismo control remoto.

## LW12 Magic UFO Arilux Wifi3x0 H801 Controladores compatibles Magic Home Tuya / Jinvoo / eFamilyCloud
-   Existen muchas versiones y algunas pueden ser incompatibles con el complemento. Póngase en contacto con el autor para una posible actualización.

## Faltan comandos al crear o modificar el tipo de bombilla
-   guardar el equipo (2 veces)


# ¿Cómo obtengo ayuda?


Vaya al foro de Jeedom [aquí] (https://community.jeedom.com/t/plugin-wifilightv2-sonoff-ewelink-lan/2632)

# Errores conocidos

La memoria disminuye drásticamente
-   Error solucionado

Para los enchufes compatibles con Tuya, los microcortes ocurren regularmente
-   Error solucionado
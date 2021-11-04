[Regresar a la documentación general](./index.md)

# Pasarelas Zigbee Tuya

Para utilizar una puerta de enlace de este tipo, elija el tipo: "Gateway Hub Tuya Zigbee"

## Compatibilidad

El diálogo entre el complemento y la puerta de enlace se realiza a través de Wifi. Luego, el diálogo entre los sensores y actuadores y la puerta de enlace se realiza a través de Zigbee. Deben ser compatibles con Tuya y se han incluido primero en la aplicación Tuya.

El complemento puede recuperar el estado de los dispositivos tan pronto como envían un cambio de información de estado o cuando el complemento les pregunta cuándo se inicia el demonio. Si se utiliza un interruptor de pared, Jeedom lo sabrá de inmediato.

El siguiente equipo es compatible, pero la lista no es exclusiva y se completará en función de los comentarios de los usuarios.
- Pasarelas MoesHouse, BENEXMART
- Puerta de enlace para el hogar inteligente Lidl SilverCrest
- todas las puertas de enlace Tuya/Zigbee son normalmente compatibles, todavía no ha habido un retorno de una puerta de enlace incompatible.
- Cerradura Vima (pero no MiHome)
el complemento no se puede abrir/cerrar porque el candado no está diseñado para hacerlo, pero puede saber la última clave utilizada
- Sensor de temperatura y humedad TYZS2
funcionamiento completo
- Cabezal termostático Hessway
No gestiona la programación de las franjas horarias de los diferentes modos pero puede iniciar cualquier modo.
Utilice la opción "modo extendido" para crear comandos para crear todos los comandos del termostato.
- el doble regulador QS-Zigbee-D02-TRIAC-LN
- Sensor de presencia de Moes
- Sensor de presencia BENEXMART
- Sensor de temperatura BENEXMART
- Sensor de puerta BENEXMART
- Enchufe Lonsoho con consumo
- Mando a distancia loratap de 3 botones
- interruptores de pared simple/doble/triple
- mando a distancia, bombillas blancas y de colores, casquillos Lidl simples y triples

Todos los demás dispositivos, o dispositivos similares de otra marca o modelo, deben estar completamente configurados en modo personalizado. Sin embargo, la configuración generada para estos modelos puede ayudar a otros.

Sin embargo, la compatibilidad de estos dispositivos no está garantizada porque los fabricantes pueden modificar el protocolo. No modifiques el firmware del dispositivo sin haber verificado que es compatible con el plugin.

Se debe crear un dispositivo, con la misma dirección IP y la misma clave, para la puerta de enlace y cada dispositivo conectado a la puerta de enlace.

La opción "Consulta de estado" le permite recuperar el estado cada 20 segundos incluso si el periférico no lo devuelve. Para ser utilizado para enchufes eléctricos que no devuelven regularmente el consumo pero no se utilizan para dispositivos que funcionan con baterías, de lo contrario se vaciarán.


## Clave e identificador de la puerta de enlace

Es esencial recuperar la clave local (localKey) y el devId de la puerta de enlace, lo que permite que el complemento se comunique con los dispositivos.

Para recuperar la clave y el devId, el procedimiento es complejo y requiere varias operaciones. Haga una búsqueda en la web con la palabra clave: Tuya localKey, en Github en particular o en el [foro de Jeedom](https://community.jeedom.com/t/plugin-wifilightv2-recuperer-id-et-localkey-pour-tuya-smartlife/13047).

Si la puerta de enlace se desinstala y luego se vuelve a instalar en la aplicación móvil, se cambiará su clave. Deberá encontrar la clave con el procedimiento anterior.

No se brindará ayuda para recuperar la llave.

La clave y la dirección IP de los dispositivos conectados a la puerta de enlace es la misma que la de la puerta de enlace.


## Clave e identificador del dispositivo

Configure el dispositivo e ingrese la clave que se encuentra arriba, así como la dirección IP que es la misma que la de la puerta de enlace. A continuación, debe modificar el estado del dispositivo con la aplicación proporcionada por el fabricante de la puerta de enlace y consultar los registros.
Encontrarás información como esta:
    
    Mess: {"dps": {"161": "Esc"}, "cid": "ec1bxxxxxxxx28", "t": 1589301302}
 
El cid se copiará en el campo de identificador de dispositivo del complemento (sin el ""). Es esto lo que permite distinguir 2 dispositivos conectados a la puerta de enlace.

Nota: si el dispositivo no devuelve su estado, el cid no se puede encontrar en los registros. Los expertos podrán encontrar el dps y el cid a medida que se muestran junto a la clave local durante el procedimiento de búsqueda, están justo al lado. El cid se llama nodeId en los paquetes de la aplicación Smartlife.


## Elección de dispositivo estándar conectado a la puerta de enlace

Si su dispositivo está en la lista ofrecida, debería funcionar de inmediato. Si su dispositivo es un poco diferente, los números o parámetros dps pueden tener valores diferentes a las configuraciones predeterminadas. Es posible modificar las órdenes creadas cambiando el número de dps y el parámetro con una posible fórmula de cálculo para encontrar el valor deseado. Ver [Modo de creación manual de pedidoses en V3](./tuya#tocAnchor-1-10-8) de la parte Tuya para interpretar los registros del plugin y comprender los comandos de configuración predeterminados.


## Creación automática del dispositivo en modo de inclusión

Para poder utilizar el modo de inclusión de dispositivos conectados a la puerta de enlace, primero debe haber conectado y configurado correctamente una puerta de enlace utilizando el subtipo Gateway Hub Tuya / Zigbee con su dirección IP y clave local. El dispositivo que se incluirá en la pasarela debe devolver su estado, si este no es el caso, el procedimiento no podrá funcionar. Si hay varias puertas de enlace conectadas y configuradas en el complemento, es necesario activar solo la puerta de enlace en la que se debe incluir el dispositivo.
Si no hay ninguna puerta de enlace o varias puertas de enlace configuradas y activas, el proceso de inclusión se cancelará. El dispositivo a incluir no debe estar ya en el complemento; de lo contrario, debe eliminarse o usar el modo de aprendizaje.

- haga clic en el modo de inclusión, espere unos momentos
- actuar en el dispositivo o cambiar el estado del dispositivo con la aplicación Smartlife (pero el uso de la aplicación puede bloquear el dispositivo: en este caso, inicie rápidamente la aplicación Smartlife y actúe rápidamente en el dispositivo y luego salga de la aplicación Smartlife) utilizando todos los posibilidades de la aplicación Smartlife o del dispositivo
- luego haga clic en el botón detener inclusión y guarde
- el dispositivo está creado y configurado, puede editarlo

Solo se debe incluir un dispositivo a la vez. Para excluir un dispositivo, simplemente elimínelo en el complemento.

Este modo solo está ahí para ayudar a la configuración personalizada de un nuevo dispositivo que no ofrece el complemento. El uso de este modo no puede resultar en un dispositivo completamente funcional y requiere comprender, eliminar o modificar los comandos creados.

Ejemplos de modificaciones:
- Si el dps solo corresponde a una info en el periférico (por ejemplo 3 posibles valores del mismo botón), tendrás que borrar los 3 comandos de acción creados automáticamente. Sin embargo, los comandos de acciones tienen como parámetro todos los valores recuperados por el plugin y permiten conocer los valores tomados por el dps info.
- Para dps digitales, un comando de información y un comando de acción digital se crean automáticamente, si solo la información es útil (en el caso de la temperatura de un sensor) se debe borrar el comando de acción. Si los valores numéricos toman los valores 0 o 1 durante el aprendizaje, el complemento también creará 3 comandos de ESTADO / ENCENDIDO / APAGADO, que deberán ser eliminados.
- Para dps que contienen una información 0/1 para un actuador de todo o nada, como una toma de corriente, el complemento creará una información y 2 acciones ON / OFF.
- En el caso de un dps que contenga verdadero o falso, se crea automáticamente un comando info y dos comandos de acción (ON y OFF), si solo la info es útil (en el caso de un sensor de presencia) los comandos deben ser acciones de borrado.
- Para dps que contienen información de color, el complemento identificará la codificación de color y creará 3 comandos de acción y 3 comandos de información que se correspondan con la intensidad de saturación de tono.
- En general, el subtipo creado por el plugin puede no corresponder con los datos, entonces será necesario realizar pruebas modificándolo.

Puede compartir la configuración resultante haciendo clic en el botón Exportar. Transfiera el contenido del campo configGet y una foto del dispositivo al desarrollador.

## Modo de aprendizaje

Marque la casilla "Modo de inclusión" en la configuración del dispositivo y guárdelo para agregar los comandos olvidados en la fase anterior o los comandos no ofrecidos después de haber elegido el subtipo. Termine haciendo clic en el botón "detener inclusión" y guarde.

Si parte de una configuración estándar después de elegir un subtipo y agrega el entrenamiento para verificar el dps estándar, tendrá que modificar los comandos creados por la configuración estándar y eliminar los comandos creados por el entrenamiento. De hecho, al guardar, los dps estándar siempre se recrean; de lo contrario, es posible no mostrarlos. 

## Modo de creación manual de pedidos

Este modo es útil para comandos que necesitan ser ajustados (dps, parámetro), para enviar varios dps al mismo tiempo o para la gestión del color de las lámparas, en caso contrario utilizar los subtipos propuestos o el modo de aprendizaje.

El procedimiento requiere que el dispositivo devuelva su estado en los registros. Si el dispositivo no devuelve su estado, el cid y el dps no se pueden encontrar en los registros. Los expertos podrán encontrar la lista de dispositivos dps y su cid porque se muestran junto a la clave local durante el procedimiento para encontrarlos.

El complemento está equipado con botones que le permiten crear automáticamente los comandos para los casos más comunes, bastará con modificar el número de dps o el parámetro creado automáticamente. Consulte [aquí] (./tuya#tocAnchor-1-10-8) para comprender los registros y la creación manual de comandos.

## Dispositivos a batería

Para que el% de capacidad se muestre en Análisis/Equipo, el nombre lógico del comando de información correspondiente debe contener batería y obtener.

# Tuya

Para utilizar estos periféricos sin una puerta de enlace Tuya / Zigbee, elija el tipo: "Tuya SmartLife compatible V3"

## Compatibilidad

Muchas marcas son compatibles con el complemento. Consulte el foro para obtener más información. El complemento permite controlar muchos actuadores.
Puede recuperar el estado de los periféricos tan pronto como envía un cambio de información de estado o cuando los sondea cada minuto. Si se utiliza un interruptor de pared, Jeedom lo sabrá de inmediato.

Los siguientes dispositivos son compatibles con el firmware 1.0. y en firmware 2.0.

- enchufes simples con y sin retorno de consumo, en particular enchufes wifi Neo Coolcam
- múltiples enchufes con y sin consumo con y sin USB
- control de persianas enrollables (4 tipos de modelos incluyendo 1 con led e información de posicionamiento)
- interruptores de pared: 1, 2 o 3 inter
- interruptor de pared con atenuador
- Humidificador NEWKBO 300 ml y solo este
- termostato BHT-6000GCLW/BHT6000 y solo estos modelos
- Bombillas de globo RGBW y modelos similares en funcionamiento
- garaje inteligente (beta)
- 2 difusores incluido Maxcio
-  radiador eléctrico
- Proscenic (la aspiradora no es compatible y el procedimiento de integración es complejo)
- Alambre piloto
- sirena
- Alarma (solo información)
- Calentador de ventilador Lidl

Sin embargo, la compatibilidad de estos dispositivos no está garantizada porque los fabricantes pueden modificar el protocolo. No modifiques el firmware del dispositivo sin haber verificado que es compatible con el plugin.

Los sensores de presencia y apertura no son compatibles porque no se comunican localmente. Otros dispositivos de la lista anterior también pueden funcionar solo a través de Internet, no son compatibles con el complemento. Pregúntele al vendedor si el modo LAN está activo.

## Configuración inicial de un dispositivo

Es esencial recuperar una clave local (localKey) y un identificador devId que permita que el complemento se comunique con los dispositivos.

El procedimiento es complejo y requiere varias manipulaciones. Haga una búsqueda en la web con la palabra clave: Tuya localKey, en Github en particular o en el [foro de Jeedom](https://community.jeedom.com/t/plugin-wifilightv2-recuperer-id-et-localkey-pour-tuya-smartlife/13047).

El dispositivo no debe estar conectado a una aplicación en un teléfono móvil, de lo contrario no responderá a los comandos de Jeedom. Por lo tanto, debe cerrar cualquier aplicación posiblemente conectada al dispositivo.

Si el dispositivo se desinstala y luego se vuelve a instalar en la aplicación móvil, se cambiará su clave. Deberá encontrar la clave con el procedimiento anterior.

No se brindará ayuda para recuperar la clave o el identificador.

## Compatible con Tuya Smartlife V1
El tipo V1 corresponde a dispositivos con firmware 1.0. Los dispositivos con este firmware ya no se venden y su firmware se puede actualizar con la aplicación Smartlife. No habrá nuevas adiciones de dispositivos. Tienes que cambiar a V3.

El complemento prueba los dispositivos (pero deben agregarse manualmente) y muestra un mensaje en el centro de mensajes cuando un dispositivo se ha configurado con el firmware incorrecto.

Hay algunos dispositivos que anuncian firmware 1.xy, sin embargo, son firmware 2.x, como algunos controles de persianas enrollables.

Para dispositivos multicanal, como enchufes, debe crear un wifilightV2 por canal.

Los parámetros de configuración de energía, para los tomacorrientes que la administran, permiten asignar los dps correctos a voltaje, amperaje y potencia (ver más abajo).


## Compatible con Tuya Smartlife V2
El tipo V2 corresponde a dispositivos con firmware 2.0. Además de esta compatibilidad, existe la posibilidad de agregar comandos personalizados. I No habrá nuevas adiciones de dispositivos. El tipo V2 ya no debe usarse para dispositivos nuevos y está presente para garantizar la compatibilidad con versiones anteriores del complemento, debe cambiar a V3

Para dispositivos multicanal, como enchufes, debe crear un wifilightV2 por canal.

Los parámetros de configuración de energía, para los tomacorrientes que la administran, permiten asignar los dps correctos a voltaje, amperaje y potencia. Para recuperar esta configuración, instale el complemento en Jeedom y luego vaya a los registros de wifilightV2. La salida se encuesta cada minuto. Busque el mensaje que se parece a:

    Mess: {"devId": "xxxxxxxxxghekqd", "dps": {"1": falso, "2": falso, "9": 0, "10": 0, "18": 0, "19": 0, "20": 2281, "21": 1, "22": 726, "23": 28971, "24": 19417, "25": 1070}}

El índice "20" corresponde aquí a la tensión de alimentación en cientos de mV, es decir: 228,1 V, debería moverse ligeramente. Los índices "18" y "19" corresponden a la corriente (mA) ya la potencia en W, aquí no hay ningún dispositivo conectado y por lo tanto la información está en cero. Esta es una buena manera de encontrar el voltaje, al enchufar un dispositivo, estos 2 valores deben cambiarse y el voltaje está justo después.

La sintaxis es entonces: 20;18;19 que debe colocarse en el campo 'Configuración de energía' en V1 y V2.

Para enchufes de 1 toma, en general necesita: 6;4;5 (establecido por defecto por el complemento).

Para enchufes de 2 vías, en general necesita: 9;7;8 (establecido por defecto por el complemento).

Para los demás puntos de venta, el valor 20;18;19 está configurado de forma predeterminada. 

## Compatible con Tuya Smartlife V3
El tipo V3 corresponde a dispositivos con firmware 2.0. Además de esta compatibilidad, existe la posibilidad de modificar finamente el número de dps y los parámetros de dps de todos los dispositivos presentes en V3 para adaptarlos según sea necesario. El tipo V3 también tiene un modo de aprendizaje para dps y parámetros periféricos. Para este tipo, todos los comandos para el mismo dispositivo se crean en un solo wifilightV2, incluso para múltiples salidas.

La opción "Consulta de estado" le permite recuperar el estado cada 20 segundos incluso si el periférico no lo devuelve. Para ser utilizado para enchufes eléctricos que no devuelven regularmente el consumo pero no se utilizan para dispositivos que funcionan con baterías, de lo contrario se vaciarán.


## Elección de un dispositivo V3 estándar propuesto en la lista de subtipos
Este procedimiento es el preferido porque es el más simple. Elija el subtipo correspondiente al dispositivo a integrar. Algunos dispositivos que son muy cercanos visualmente sin embargo tienen comportamientos diferentes, pruebe todos los subtipos que puedan corresponder y verifique que estén funcionando correctamente.

Tienes la posibilidad de modificar el número de dps así como sus parámetros para ajustar un dispositivo que tenga un comportamiento ligeramente diferente al propuesto por el plugin. Consulte el modo de creación manual de los comandos a continuación para utilizar la información presente en los registros del complemento.

Si elimina comandos, se volverán a crear automáticamente al guardar el dispositivo, es mejor desmarcar la casilla "Mostrar".

## Modo de aprendizaje en V3

Para comenzar a aprender, debe crear manualmente el dispositivo con los parámetros correctos: IP, localKey, devId y el subtipo Custom. Marque la casilla "modo de inclusión" y guarde el dispositivo que luego ingresa al modo de inclusión. Espere unos segundos y modifique el estado del dispositivo real o con la aplicación Smartlife para que el plugin cree automáticamente las acciones y los comandos de información, utilice todas las posibilidades que ofrece la aplicación. Finalmente, haga clic en el botón "detener inclusión" y guarde.

Este modo solo está ahí para ayudar a la configuración personalizada de un nuevo dispositivo que no ofrece el complemento. El uso de este modo no puede resultar en un dispositivo completamente funcional y requiere comprensión para eliminar o modificar los comandos creados.

Ejemplos de modificaciones:
- Si el dps solo corresponde a una info en el periférico (por ejemplo 3 posibles valores del mismo botón), tendrás que borrar los 3 comandos de acción creados automáticamente. Sin embargo, los comandos de acciones tienen como parámetro todos los valores recuperados por el plugin y permiten conocer los valores tomados por el dps info.
- Para dps digitales, un comando de información y un comando de acción digital se crean automáticamente, si solo la información es útil (en el caso de la temperatura de un sensor) se debe borrar el comando de acción. Si los valores numéricos toman los valores 0 o 1 durante el aprendizaje, el complemento también creará 3 comandos de ESTADO/ON/OFF, que deberán ser eliminados.
- Para dps que contienen una información 0/1 para un actuador de todo o nada, como una toma de corriente, el complemento creará una información y 2 acciones ON/OFF.
- En el caso de un dps que contenga verdadero o falso, se crea automáticamente un comando info y dos comandos de acción (ON y OFF), si solo la info es útil (en el caso de un sensor de presencia) los comandos deben ser acciones de borrado.
- Para dps que contienen información de color, el complemento identificará la codificación de color y creará 3 comandos de acción y 3 comandos de información que se correspondan con la intensidad de saturación de tono.
- En general, el subtipo creado por el plugin puede no corresponder con los datos, entonces será necesario realizar pruebas modificándolo.

Si comienza desde una configuración estándar después de elegir un subtipo y agrega entrenamiento para verificar el dps estándar, deberá modificar los comandos creados por la configuración estándar y eliminar los comandos creados por el entrenamiento. De hecho, al guardar, los dps estándar siempre se recrean; de lo contrario, es posible no mostrarlos.

Puede compartir la configuración resultante haciendo clic en el botón Exportar. Transfiera el contenido del campo configGet y una foto del dispositivo al desarrollador.

## Modo de creación manual de pedidos en V3

Este modo es útil para comandos que necesitan ser ajustados (dps, parámetro), para enviar varios dps al mismo tiempo o para la gestión del color de las lámparas, en caso contrario utilizar los subtipos propuestos o el modo de aprendizaje.

El procedimiento requiere que el dispositivo devuelva su estado en los registros. Si el dispositivo no devuelve su estado, devId y dps no se pueden encontrar en los registros. Los expertos podrán encontrarr el dps y el devId, ya que se muestran junto a la clave local durante el procedimiento para encontrarlos.

El complemento está equipado con botones que le permiten crear automáticamente los comandos para los casos más comunes, bastará con modificar el número de dps o el parámetro creado automáticamente.


### Configuración
- deshabilite todos los dispositivos wifilightV2 excepto el que se va a probar
- configurar el dispositivo correctamente (dirección IP estática, localKey, devId)
- compruebe que el demonio se esté ejecutando, de lo contrario inícielo
- configurar los registros de wifilightV2 en modo de depuración, reiniciar el demonio
- eliminar registros

### Recuperación de información
- presione un botón en el dispositivo físico (encendido, apagado, arriba, abajo, etc.) o espere a que el dispositivo regrese a su estado o presione un botón en la aplicación Smart Live (pero en el último caso, esto puede prevenir el estado realimentación).
- ubicar los comentarios de estado en los registros

Utilice todas las posibilidades de la aplicación Tuya e identifique claramente en los registros el número de dps y su valor que se envían al plugin. 

### Caso de un actuador de todo o nada, true/false

En los registros, al utilizar la aplicación Smartlife, encontramos por ejemplo:

    Mess: {"devId": "xxxxxxxxxghekqd", dps: {"2": true, "8": true}}

Aquí se ha seleccionado el botón de apagado en el dispositivo y observamos que ha cambiado el dps del # 2.

    Mess: {"devId": "xxxxxxxxxghekqd", dps: {"2": false, "8": true}}

Aquí, se ha seleccionado el botón de encendido en el dispositivo y observamos que ha cambiado el dps del n ° 2.

Haga clic en el botón ENCENDIDO / APAGADO en la interfaz para crear automáticamente los 3 comandos para administrar los botones ENCENDIDO / APAGADO. Basta con modificar el número de dps poniendo 2. Para los parámetros poner verdadero y falso, no agregue comillas.

Para configurar manualmente:

- Creación de una nueva acción / comando predeterminado en los comandos del dispositivo:
    * En la columna de la interfaz ponga ON como el nombre del botón
    * En la columna nombre interno y número de pedido, poner como Id único: _ON, como número dps: 2 (sin comillas dobles) y como parámetro: verdadero.
- Cree una nueva acción/comando predeterminado en los comandos del dispositivo:
    * En la columna de la interfaz ponga OFF como el nombre del botón
    * En la columna nombre interno y número de pedido, poner como Id único: _OFF, como número de dps: 2 (sin comillas dobles) y como parámetro: falso.
- Cree un nuevo comando de información / binario en los comandos del dispositivo:
    * En la columna de la interfaz, ponga ESTADO como el nombre de la información
    * En la columna nombre interno y número de pedido, poner como Id único: _STATE, como número de dps: 2 (sin comillas dobles) y nada en los parámetros.

### Caso de un actuador con varios modos

En los registros, al utilizar la aplicación Smartlife, encontramos por ejemplo:

    Mess: {"devId": "xxxxxxxxxghekqd", dps: {"1": "off", "101": true}}

Aquí se ha seleccionado el botón de apagado en el dispositivo y observamos que ha cambiado el dps del # 1.

    Mess: {"devId": "xxxxxxxxxghekqd", dps: {"1": "on", "101": true}}

Aquí, se ha seleccionado el botón de encendido en el dispositivo y observamos que ha cambiado el dps del n ° 1.

    Mess: {"devId": "xxxxxxxxxghekqd" ,, dps: {"1": "stop", "101": true}}

Aquí se ha seleccionado el botón de parada en el dispositivo y observamos que ha cambiado el dps del n ° 1.

Haga clic en el botón "Botones" en la interfaz para crear automáticamente los 4 comandos para administrar los botones ON / OFF / STOP. Basta modificar el número dps poniendo 1. Para los parámetros poner "on", "off" y "stop", se incluyen las comillas porque están presentes después del dps n ° 1.

Para configurar manualmente:

- Creación de una nueva acción / comando predeterminado en los comandos del dispositivo:
    * En la columna de la interfaz ponga ON como el nombre del botón
    * En la columna nombre interno y número de pedido, poner como Id único: _ON, como número dps: 1 (sin comillas dobles) y como parámetro: "on" (si el on no está entre comillas, se deben eliminar).
- Cree una nueva acción / comando predeterminado en los comandos del dispositivo:
    * En la columna de la interfaz ponga OFF como el nombre del botón
    * En la columna nombre interno y número de pedido, poner como Id único: _OFF, como número dps: 1 (sin comillas dobles) y como parámetro: "off" (si el off no está entre comillas, se deben eliminar).
- Cree una nueva acción / comando predeterminado en los comandos del dispositivo:
    * En la columna de la interfaz ponga STOP como nombre del botón
    * En la columna nombre interno y número de pedido, poner como Id único: _STOP, como número de dps: 1 (sin comillas dobles) y como parámetro: "stop" (si el stop no está entre comillas, deben eliminarse) .
- Cree una nueva información / otro comando en los comandos del dispositivo:
    * En la columna de la interfaz, ponga ESTADO como el nombre de la información
    * En la columna nombre interno y número de pedido, poner como Id único: _STATE, como número de dps: 1 (sin comillas dobles) y nada en los parámetros.

### En el caso de un control digital, como un control de intensidad:

En los registros, al utilizar la aplicación Smartlife, encontramos:

    Mess: {"devId": "xxxxxxxxxghekqd", dps: {"3": 850, "101": true}}

Aquí, se ha seleccionado un control deslizante de intensidad en la aplicación del dispositivo y se observa que el dps del n. ° 3 ha cambiado.

Haga clic en el botón Cursor en la interfaz para crear automáticamente los 2 comandos para administrar el cursor. Para adaptarlos según sea necesario, todo lo que tiene que hacer es modificar los números dps y poner 3 (sin comillas). Para el parámetro del comando de acción: o no dejar nada, o poner #slider# o poner una fórmula por ejemplo: #slider#/10. Para el parámetro de información, es lo mismo, excepto que debe usar #value#. No ponga comillas porque no hay ninguna después del número dps.

Para configurar manualmente:

- Crear una nueva acción/comando de cursor en la comunicación. 
andes de la carretera de circunvalación:
    * En la columna de la interfaz ponga Intensity como el nombre del cursor
    * En la columna nombre interno y número de pedido, poner como Id único: _Intensite, como número dps: 3 (sin comillas dobles) y como parámetro: #slider# (aquí el valor numérico no está entre comillas, así que no los ponga ).
- Cree una nueva información / otro comando en los comandos del dispositivo:
     * En la columna de la interfaz, ponga IntensiteGet como el nombre de la información
* En la columna nombre interno y número de pedido, ponga como Id único: _IntensiteGet, como número dps: 3 (sin comillas dobles) y nada en los parámetros. 

### En el caso de un sensor digital, como un sensor de temperatura:

En los registros, al utilizar la aplicación Smartlife, encontramos:

    Mess: {"devId": "xxxxxxxxxghekqd", dps: {"8": 23, "101": true}}

Aquí es una temperatura que se envía regularmente y observamos que ha cambiado el dps del n ° 8.

Haga clic en el botón Info Num en la interfaz para crear automáticamente el comando para recuperar la temperatura. Para adaptarlos según sea necesario, todo lo que tiene que hacer es modificar el número dps, aquí 8 (sin corchetes). Para el parámetro de información, no deje nada, o ponga #value# o ponga una fórmula, por ejemplo: #value#/10. No ponga comillas porque no hay ninguna después del número dps.

Para configurar manualmente:

- Cree una nueva información / otro comando en los comandos del dispositivo:
   * En la columna de la interfaz ponga TempGet como el nombre de la información
   * En la columna nombre interno y número de pedido, poner como Id único: _TempGet, como número de dps: 8 (sin comillas dobles) y nada en los parámetros.


### En el caso de un sensor de todo o nada, como un detector de puerta:

En los registros, al utilizar la aplicación Smartlife, encontramos:

    Mess: {"devId": "xxxxxxxxxghekqd", dps: {"12": 1}}

    Mess: {"devId": "xxxxxxxxxghekqd", dps: {"12": 0}}

Aquí, es la información de apertura y luego de cierre la que se envía y observamos que el dps del n ° 12 ha cambiado.

Haga clic en el botón Papelera de información en la interfaz para crear automáticamente la orden para recuperar el valor. Para adaptarlo según sea necesario, todo lo que tiene que hacer es modificar el número dps y poner 12 (sin comillas). Los parámetros deben dejarse vacíos.

Para configurar manualmente:

- Cree un nuevo comando de información/binario en los comandos del dispositivo:
    * En la columna de la interfaz, ponga PorteGet como el nombre de la información
* En la columna nombre interno y número de pedido, ponga como Id único: _PorteGet, como número dps: 12 (sin comillas dobles) y nada en los parámetros. 

### En el caso del color de una lámpara:

Esta parte es compleja y requiere una lectura muy cuidadosa.

La codificación de colores en Tuya tiene varios formatos que son diferentes a los utilizados por Jeedom. Jeedom usa el formato RGB (Reg Green Blue) mientras que Tuya usa diferentes formatos HSV (Hue Saturation Value) o combina HSV y RGB. El RGB codifica cada color de 0 a 255 o en hexadecimal de 0 a FF. Por lo tanto, el rojo se codifica como FF0000, azul: 0000FF, blanco: FFFFFF y negro: 000000. Los valores de HSV son los siguientes: Matiz de 0 a 360 ° (color), S de 0 a 100% (Saturación) y V de 0 a 100% (intensidad). Consulte [aquí](https://www.rapidtables.com/convert/color/) para ir más allá.

Para que el plugin funcione correctamente para los colores, es necesario identificar los formatos utilizados por Tuya durante un cambio de color con la aplicación Smartlife y observando en este momento en los registros el número de dps que se ha modificado.

1 - Formato HSV: H (codificado de 0 a 360) S (codificado de 0 a 1000) V (codificado de 0 a 1000) el resultado se da en base 16, es decir, 12 dígitos hexadecimales. Ejemplo para rojo: RGB = FF0000 y H = 0 ° S = 100% V = 100% o en codificación Tuya 000003E803E8 (Hue = 0000 S = 03E8 V = 03E8)

2 - Formato RGB00HSV: RGB está codificado en 6 dígitos (cada uno de 00 a FF para cada color). Se inserta 00 y luego H (codificado de 0 a 255) S (codificado de 0 a 255) V (codificado de 0 a 255). El resultado se da en base 16, es decir, 14 dígitos hexadecimales. Ejemplo para rojo: RGB = FF0000 y H = 0 ° S = 100% V = 100% o en codificación Tuya FF00000000FFFF

3 - Formato RGB0HSV: los RGB se codifican como se indica arriba. Se inserta 0 y luego H (codificado de 0 a 360) S (codificado de 0 a 100) V (codificado de 0 a 100). El resultado se da en base 16, es decir, 14 dígitos hexadecimales. Ejemplo de violeta: RGB = FF00FF y H = 300 ° S = 100% V = 100% o en codificación Tuya FF0000012C6464

En los registros, al utilizar la modificación del color de la lámpara, encontramos:

    Mess:{"devId":"633225xxxxx","dps":{"1":true,"27":true,"28":"white","29":254,"31":"08ff0000766464","32":"cf38000168ffff","33":"ffff500100ff00"}

Es necesario ubicar el número de dps que cambia, aquí el 31 es 08ff0000766464. Los últimos 2 64 en hexadecimal hacen 100 en decimal. 08 = R FF = G 00 = B 076 = tono, este es el formato 3. Haga clic en el botón Color 3 y modifique los números de dps para poner 31. No modifique los parámetros.

Para crear manualmente los 6 botones en el caso de un formato de color 1:

- Cree un nuevo comando de acción / color en los comandos del dispositivo:
    * En la columna de la interfaz ponga Color como nombre
    * En la columna nombre interno y número de pedido, poner como Id único: _Color, como número dps: 120 (sin comillas dobles) y como parámetro: "#colorH4S4V4_1000#" (aquí el valor está entre comillas, por lo tanto deben ponerse ).
- Cree una nueva información / otro comando en los comandos del dispositivo:
    * En la columna de la interfaz, coloque ColorGet como el nombre de la información
    * En la columna nombre interno y número de pedido, poner como único Id: _ColorGet, como número de dps: 120 (sin comillas dobles) y "#colorH4S4V4_1000#" en los parámetros.
- Cree una nueva acción / comando de cursor en los comandos del dispositivo:
    * En la columna de la interfaz ponga Intensidad como nombre
    * En la columna nombre interno y número de pedido, poner como Id único: _Intensidad, como número de dps: 120 (sin comillas dobles) y como parámetro: #slider_intH4S4V4_1000# (no poner comillas).
- Cree una nueva acción / comando de cursor en los comandos del dispositivo:
    * En la columna de la interfaz ponga Saturación como nombre
    * En la columna nombre interno y número de pedido, poner como Id único: _Saturación, como número de dps: 120 (sin comillas dobles) y como parámetro: #slider_satH4S4V4_1000# (no poner comillas).
- Cree un nuevo comando de información / numérico en los comandos del dispositivo:
    * En la columna de la interfaz ponga Intensidad como nombre
    * En la columna de nombre interno y número de pedido, poner como Id único: _IntensityGet, como número dps: 120 (sin comillas dobles) y como parámetro: #slider_intH4S4V4_1000# (no poner comillas).
- Cree un nuevo comando de información / numérico en los comandos del dispositivo:
    * En la columna de la interfaz ponga Saturación como nombre
    * En la columna nombre interno y número de pedido, ponga como Id único: _SaturationGet, como número de dps: 120 (sin comillas dobles) y como parámetro: #slider_satH4S4V4_1000# (no ponga comillas).

Nota: es esencial poner el mismo número de dps para estos 6 comandos y no agregar ninguna otra acción o comando de información en este número de dps, de lo contrario, el complemento no podrá decodificar correctamente la información y actualizar el estado de retroalimentación.

### Modifica varios números de dps en el mismo orden

Para enviar varios números de dps al mismo tiempo, ponga \* en el n ° de dps y ponga el comando completo sin las llaves en los parámetros del campo. Uno y solo uno de los números dps puede ser un cursor o (exclusivamente) un color.

Cree una acción / otro comando y coloque los parámetros:

    "1":true,"3":"color""
   
Le permite encender la lámpara y cambiar a color.

Cree un comando de acción / cursor y coloque los parámetros:

    "1":true,"3":#slider#/10
   
Le permite encender la lámpara y modificar la intensidad. Se puede aplicar una fórmula en el # control deslizante #.
 
Cree un comando de acción / color y coloque los parámetros:

    "2":"color","3":"#colorR2G2B200H2S2V2_255#"
   
Le permite cambiar la lámpara al modo de color y especificar el color. El complemento utilizará el color, la intensidad y la saturación del widget de color.

### Modifica varios números dps con comentarios de estado

Para enviar varios números de dps al mismo tiempo con retroalimentación de estado, ingrese, en el campo n ° de dps, el valor del número de dps que debe actualizarse seguido del carácter \*. Coloque el comando completo sin las llaves en el campo de parámetros. Uno y solo uno de los números dps puede ser un cursor o (exclusivamente) un color.

Cree un comando de acción/cursor, coloque 3\* en el campo n ° de dps y coloque los parámetros:

    "1":true,"3":#slider#/10
   
Permite encender la lámpara y modificar la intensidad, se actualizará la información del comando del dps n ° 3.
 
Cree un comando de acción/color, coloque 3\* en el campo n ° de dps e ingrese los parámetros:

    "2":"color","3":"#colorR2G2B200H2S2V2_255#"
   
Le permite cambiar la lámpara al modo de color y especificar el color. El complemento utilizará la intensidad y la saturación de los controles deslizantes de intensidad y saturación de dps 3.

## Dispositivos a batería

Para que el% de capacidad se muestre en Análisis/Equipo, el nombre lógico del comando de información correspondiente debe contener battery y get.


# Depuración

## Prueba preliminar y configuración

1.El dispositivo que se va a probar se ha incluido en la aplicación Smartlife,
2. en el caso de un dispositivo Tuya/Zigbee, su puerta de enlace se ha incluido en la aplicación Smartlife y el dispositivo también debe haber sido incluido
3.localKey y devId o cid han sido recuperados (la depuración puede permitir que se encuentren cid y devId)
4.El dispositivo y su posible puerta de enlace no se han eliminado de la aplicación Smartlife y la aplicación Smartlife no se ha eliminado
5.La aplicación Smartlife se detiene en todos los terminales que pueden ejecutarla
6. la dirección IP del dispositivo (puerta de enlace Tuya o Tuya/Zigbee) se fija y se conoce
7.configure los registros de wifilightV2 en modo de depuración, reinicie el demonio

## Verifique que el dispositivo esté encontrado y conectado

1.desactivar en wifilightV2 todos los dispositivos excepto el que se va a probar (mantener solo un canal en el caso de un dispositivo multicanal) (en el caso de un dispositivo conectado a una puerta de enlace, la puerta de enlace debe permanecer habilitada), el objetivo no es mezclar todos los dispositivos
2.registros claros
3.guardar el dispositivo en el complemento: esto tiene el efecto de iniciar el demonio que prueba cada minuto los dispositivos wifilightV2

Ejemplo de un registro correcto en el que el complemento encontró el dispositivo, por lo tanto, con la dirección IP correcta:

    [2021-03-29 06:36:42][DEBUG] : ** Connector Zigbee - TuyaCustom2_V2 @192.168.1.106 - c:12 **
    [2021-03-29 06:36:42][DEBUG] :     Key not set New device: created  @192.168.1.106 ADD New device @192.168.1.106 channel:12 key:1 @192.168.1.106 c:12 d:0

-Entonces los registros serán del tipo:
    [2021-03-29 06:31:21][DEBUG] : ** Prise Zigbee - TuyaCustom2_V2 @192.168.1.106 - c:12 **
    [2021-03-29 06:31:21][DEBUG] :      key:1 @192.168.1.106 c:12 d:1

Ejemplo de un registro de KO donde el complemento no encontró la dirección IP del dispositivo tan mala

    [2021-03-05 07:13:55][DEBUG] : ** Prueba de válvula - TuyaCustom2_V2 @192.168.1.199 - c:11 **
    [2021-03-05 07:13:55][DEBUG] :     Key not set New device: created  @192.168.1.199 close Connection impossible. Err=115 : Operation now in progress ADD New device @192.168.1.199 channel:11


Posteriormente los mensajes serán del tipo:

    [2021-03-05 07:15:04][DEBUG] : << Ping of: lidl @192.168.1.130  diff:24
    [2021-03-05 07:15:04][DEBUG] :     Cmd to 192.168.1.130 - Try:192.168.1.130  6668 - Connect OK!

Entonces puede haber desconexiones o que la aplicación Smartlife también esté conectada al dispositivo, en este caso el mensaje en los registros es:

    [2020-12-10 07:36:40][DEBUG] : << Ping of: Vanne @192.168.1.122  diff:24
    [2020-12-10 07:36:40][DEBUG] :     Cmd to 192.168.1.122 - Try:192.168.1.122  6668 - Connect OK!
    [2020-12-10 07:36:40][DEBUG] :     Error on:192.168.1.122 is :Connection reset by peer n:104  diff:16

o no hay más ping en los registros para esta dirección IP, esto corresponde a una mala conexión permanente entre el dispositivo y Jeedom o si el dispositivo ya no está encendido.

El complemento intentará volver a conectarse al dispositivo cada minuto o cada 3 minutos, lo que le permitirá encontrar el dispositivo si se vuelve a conectar.

En este punto, el único punto probado y correcto es que la dirección IP sea correcta y que el dispositivo sea accesible.

## Compruebe que la clave local sea correcta

En el caso de una puerta de enlace Tuya / Zigbee, las pruebas deben realizarse en un dispositivo conectado a la puerta de enlace. La puerta de enlace por sí sola no devuelve ningún mensaje.

1. Complete la clave local sin espacios y sin comillas en el campo Token del dispositivo (y de la puerta de enlace si existe). Verifique varias veces: la clave local debe ser la misma para todos los dispositivos con la misma dirección IP (dispositivos Tuya / Zigbee conectados a una puerta de enlace o dispositivos multicanal). El complemento usa una de estas claves para comunicarse con el dispositivo, así que verifique que sean correctas e idénticas.
2. desactivar en wifilightV2 todos los periféricos excepto el que se va a probar (mantener solo un canal en caso de periférico multicanal), el objetivo no es mezclar todos los periféricos.
3.registros claros
4. Utilice los botones del dispositivo físico o la aplicación Smartlife para cambiar el estado del dispositivo.

Notas:
- la aplicación Smartlife puede evitar el diálogo entre el complemento y el dispositivo. Es mejor iniciar la aplicación Smartlife después de la conexión anterior al dispositivo. Por el contrario, la aplicación Smartlife puede responder muy mal.
- Si el dispositivo no devuelve su estado, la información sobre el dps y el devId o el cid debe encontrarse en el archivo que hizo posible recuperar la clave local, están justo al lado. El cid se denomina nodeId en los paquetes de la aplicación SmartLife.

Ejemplo de log KO donde la clave local no es buena porque el marco recibido por el complemento no está decodificado:

    [2021-03-05 07:16:53][DEBUG] : Receive from:192.168.1.106
    [2021-03-05 07:16:53][DEBUG] :   Mess: Bad response


Si la decodificación del marco es correcta, nos encontramos con un mensaje como este:

    [2021-03-05 07:16:53][DEBUG] : Receive from:192.168.1.106
    [2021-03-05 07:16:53][DEBUG] :   Mess: {"dps":{"1":true,"9":0,"17":8370,"18":44,"19":50,"20":2320,"27":"on","28":"relay"},"cid":"588xxxxxxxxxa"} - Read Json OK

Es este mensaje el que permitirá que el dispositivo se configure en el complemento identificando para qué se utilizan los números dps y qué valores toman, ver más arriba.
Algunos mensajes nunca se decodifican, solo se necesita un mensaje para decodificar correctamente para asegurarse de que la clave local sea correcta.

## Verifica que el devId o el cid sean correctos

En el caso de una puerta de enlace Tuya / Zigbee, las pruebas deben realizarse en un dispositivo conectado a la puerta de enlace. La puerta de enlace por sí sola no devuelve ningún mensaje.

1. el cid (para dispositivos Tuya / Zigbee) o el devId para otros se encontraron al mismo tiempo que la clave local. Es específico para cada dispositivo y nunca se modifica, esto le permite identificar sus dispositivos.
2. Localice los mensajes "Mess" provenientes del periférico.

** Para un dispositivo que no es Zigbee que devuelve su devId, encontraremos: **

    [2020-12-10 08:14:34][DEBUG] :     Mess :{"dps":{"1":"pir"},"cid":"bc33xxxxxxxxxxxx45","t":1607584474} - Read Json OK

devId se indica en texto plano, basta con copiarlo en el identificador de la configuración del dispositivo. Advertencia: no todos los dispositivos devuelven su devId.

** Para un dispositivo Zigbee que devuelve su cid, encontraremos: **

    [2020-12-10 08:14:34] [DEBUG]: Mess: {"dps": {"1": "pir"}, "cid": "bc33xxxxxxxxxxxx45", "t": 1607584474} - Leer Json OK

el cid se indica en claro, solo cópielo en el identificador de la configuración del dispositivo. Advertencia: no todos los dispositivos devuelven su cid.

Luego puede verificar la concordancia con el procedimiento para encontrar la clave local y el devId o el cid.

Si el cid o devId no es correcto, el dispositivo no ejecutará los comandos de acción.

** Ejemplo de envío de un comando correcto a un dispositivo que no es Zigbee Tuya: **

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

El complemento envía el comando al demonio en la dirección 127.0.0.1 (Cmd a 127.0.0.1).
Luego, el demonio envía el comando al dispositivo en la dirección 192.168.1.129 (Recibir de Jeedom para enviar cmd). Si este mensaje no aparece, entonces el demonio del complemento no se está ejecutando -> vea las verificaciones preliminares.
Finalmente, el dispositivo devuelve su estado (Recibir de). El primer mensaje no se decodifica y el segundo sí. Tenga en cuenta que este dispositivo no devuelve su devId.
Si devId o cid no es correcto, el dispositivo no devuelve su estado ni devuelve un mensaje vacío o un error y no ejecuta el comando.


## Un problema con un comando de acción (los demás funcionan)

1. Compruebe los 4 puntos anteriores
2. Desactive todos los dispositivos wifilightV2 excepto el que se va a probar (mantenga solo un canal para multicanal) (deje la puerta de enlace Tuya / Zigbee activa para un dispositivo Zigbee) y elimine los registros para mayor claridad.
3. Espere a que pase el demonio (sondea los dispositivos cada minuto que el mensaje comienza con: >>>>>>>> Buscar)
4. Espere 10 segundos después del mensaje que contiene >>>>>>>>>>> End <<<<<<<<<<<< (fin de la interrogación de los periféricos por el demonio).
5. Active el comando del complemento que disfunciona 2 veces con intervalos de 5 s
6. Detenga los registros y guárdelos.
7. Envíe los registros al foro (con la configuración del dispositivo y la acción realizada)


## Encuentra ayuda en el foro

Para obtener una ayuda rápida y de calidad, es necesario preparar bien su pregunta. Proporcione los elementos, los registros de cada paso siguiente con su enfoque y el diagnóstico:
1. Captura de pantalla de la configuración del dispositivo
2. Realice las pruebas y la configuración preliminar (consulte el párrafo anterior)
3. Compruebe que el dispositivo se encuentra y está conectado, proporcione los registros si KO (consulte el párrafo anterior)
4. Compruebe que la clave local sea la correcta, proporcione los registros si es KO (consulte el párrafo anterior)
5. Compruebe que el devId o el cid sean correctos, proporcione los registros si KO (consulte el párrafo anterior)

Si se elimina un paso, no es necesario probar los siguientes. Si no comprende lo que está haciendo, los asistentes del foro no podrán averiguarlo por usted. Se recuerda al comienzo del documento del complemento que el uso de dispositivos Tuya localmente requiere saber cómo seguir un procedimiento al pie de la letra y tener algunas habilidades informáticas.

[Regresar a la documentación general](./index.md) 

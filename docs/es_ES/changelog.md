1.55 - 2020-01-26
-   Tomas TPlink HS110 V1 / V2: adición de estadísticas de consumo + corrección del retorno del estado del LED
-   Adición de monitoreo de ciertos casos de fuga de memoria: el demonio se reinicia por la noche si se detecta una fuga
-   Yeelight: adición de meteorito inteligente
-   Correcciones de errores

1.54 - 2020-01-11
-   Sonoff: fijo conectado (finalmente)
-   Tuya: fijo conectado (finalmente)
-   Sonoff RF bridge: transición a 32 disparadores
-   Magic Home: adición de modo personalizado
-   adición de Nanoleaf
-   correcciones de errores

1.53 - 2019-12-12
-   Sonoff: adición del puente RF 433 - solo sensores
-   Sonoff TH10 / TH16: se agregó información del termostato interno (pero no es posible modificarla)
-   Sonoff Pow R2: adición de información eléctrica (pero de eficiencia limitada, esto no se debe al complemento)
-   Tuya: mejor retroalimentación de estado para sockets múltiples V2
-   Tuya: adición de segundo tipo de lámpara blanca
-   correcciones de errores

1.52 - 2019-11-27
-   Tuya: lámparas de globo en establo
-   limpieza de código
-   correcciones de errores
-   moviendo el documento

1.51 - 2019-11-23
-   Tuya: adición del puente MiBoxer de Milight (módulo en Beta), solo funciona ON / OFF de la caja completa. Disponible para aquellos que logran recuperar el ApiKey con la aplicación MiBoxer.
-   Tuya: adición de un dispositivo personalizado para configurar cualquier dispositivo
-   Tuya : refonte des commandes customs : pour les commandes custom existantes -> nécessité de les reconfigurer avec le nouveau format
-   Tuya: necesita guardar todo el equipo
-   eWeLink: uso de una clave falsa para SelfApiKey
-   eWeLink: corrección de la información de conexión
-   Tuya: arregla la información de conexión
-   correcciones de errores menores
-   relanzamiento del demonio después de modificar una configuración

1.50 - 2019-10-28
-   Tuya: adición de lámpara RGBW tipo 2 (módulo en beta)
-   Sonoff Dual bug fix
-   Ewelink: adición de dispositivos de 3 y 4 canales
-   Sonoff: sensor de temperatura TH10 / 1H16 compatible, básico, RF, POW, Mini, Dual, 4CH / 4CH PRO, Touch, S20 / S26, T1 / TX, SLAMPHER, T4EUC1

1.49 - 2019-10-23
-   corrección de errores Tuya cortina mod2
-   Sonoff Dual bug fix

1.48 - 2019-10-18
-   eWelink: agregando módulos con 2 canales (incluido Sonoff Dual) en Beta
-   corrección de errores de nuevo estado de Sonoff

1.47 - 2019-10-16
-   adición de persianas mod2 (activar / desactivar / detener en lugar de 1/2/3 en los pedidos)
-   correcciones de errores

1.46 - 2019-10-12
-   Agregue un sensor de temperatura / humedad ewelink, incluido Sonoff TH10 / 16
-   agregue el modo de avance lento (ON durante un tiempo determinado)
-   correcciones de errores

1.45 - 2019-10-2
-   Dispositivos compatibles con la aplicación Ewelink en modo LAN
-   SonOff compatible en modo LAN

1.44 - 2019-09-27
-   Sonoff Basic R3 compatible en modo bricolaje
-   Compatible con Jeedom V4
-   Buster compatible
-   La eliminación del widget de color sin Off no es compatible con V4, el complemento ya no ofrecerá widgets personalizados.

1.43 - 2019-07-08
-   TP-link: teniendo en cuenta el nuevo protocolo V2 para sockets, se requiere un token.
-   Tuya: los sensores de apertura y PIR no serán compatibles con el complemento. Estos sensores deben atravesar la nube: para evitar el uso de alarmas.
-   Corrección de errores: cálculo de la corriente de los enchufes de Tuya ahora en amperios (modifique sus escenarios porque la unidad actual es incorrecta)
-   Tuya y TP-Link, unidades de consumo: AVW kWh. Guarde el equipo para la visualización correcta de la unidad en la lista de comandos.

1.42 - 2019-06-02
-   Tuya: corrección de error de devolución de estado
-   Demonio: no más pérdidas de memoria

1.41 - 2019-06-19
-   Tuya: compatibilidad bidireccional con el complemento en firmware 2.0 (actuador OK)
-   Tuya: adición del atenuador
-   Daemon: reescrito para gestionar mejor las conexiones / desconexiones de pipa / Yeelight
-   Puede ser necesario volver a registrar cada dispositivo

1.40 - 2019-06-16
-   Tuya: agregar comentarios de estado instantáneos para dispositivos que devuelven su estado
-   Tuya: algunos equipos se actualizan a firmware 2.0: son compatibles con el complemento solo a cambio de estado
-   Tuya: la aplicación móvil debe detenerse para que el complemento funcione
-   Tuya: para usuarios beta, los dispositivos tuya V2 deberán reconfigurarse (el firmware V1 es independiente del firmware V2)
-   Cron remoción 1 min
-   Un error de PhP causa pérdidas de memoria, en este caso, configure los latidos del complemento para reiniciarlo regularmente

1.39 - 2019-05-05
-   Tuya: agregando termostato

1.38 - 2019-04-05
-   Tuya: estado de retorno de corrección
-   Escritorio: error de estado de retorno de pantalla de error

1.37 - 2019-04-04
-   Tuya: consumo agregado en todos los enchufes de tuya
-   Tuya: configuración de recuperación de parámetros energéticos
-   Tenga en cuenta: la configuración para recuperar los parámetros de energía ha sido modificada. Las configuraciones antiguas siguen siendo compatibles.

1.36 - 2019-04-03
-   Tuya: adición de interruptores de pared
-   Tuya: adición de un humidificador.
-   Tuya: adición de consumo en todos los puntos de venta
-   Atención: deberá reconfigurar las tomas Tuya: tome la configuración de la toma USB Xplugs + y verifique la supresión de los comentarios de estado de las tomas con microcortes.

1.35 - 2019-03-13
-   Tuya: adición de interruptores para persianas
-   Tuya: adición de comandos personalizados para todos los periféricos (permite probar nuevos actuadores)

1.34 - 2019-03-02
-   Adición de una configuración con retroalimentación de estado para todos los sockets. Tenga cuidado con los microcortes, por lo tanto, tome la configuración sin comentarios de estado.

1.33 - 2019-02-15
-   Posible configuración para la recuperación del consumo en las tuberías: los enchufes de consumo tipo 2 deben reconfigurarse en el tipo 1 antes de instalar el complemento.

1.32 - 2019-02-13
-   TP-Link HS110 correcciones de errores.
-   Modification du protocole (UDP -> TCP) pour les équipements TP-Link. Normalement sans incidence.

1.31 - 2019-02-12
-   Adición de un segundo tipo de enchufe con consumo compatible con Smart Live.

1.30 - 2019-02-01
-   Supresión de la retroalimentación de estado para enchufes Tuya sin medición de consumo: funcionalidad inútil porque solo Jeedom puede controlar el enchufe y provoca microcortes.
-   Modificación del documento para la nueva configuración de iBox Mi.Light

1.29 - 2019-1-27
-   Bulbos de corrección de color HSV Tuya
-   Agregar bombillas RGB Tuya

1.28 - 2019-1-16
-   Añadir enchufe TP_Link
-   Mejora de la comunicación Tuya enchufe inteligente

1.27 - 2019-1-11
-   Tuya enchufe inteligente en estable
-   Mejora de la comunicación Tuya enchufe inteligente

1.26 - 2019-1-1
-   Agregue enchufes eléctricos compatibles con las aplicaciones Tuya / smart live / Jinvoo / eFamillyCloud
-   Pequeñas correcciones de errores
-   Rediseño de documentación

1.25 - 2018-11-25
-   Adición en beta del controlador led direccionable SP108 Led Shop (ON / OFF)
-   Control remoto RGB Mi.Light agregado
-   Pequeñas correcciones de errores

1.24 - 2018-11-14
-   Página de visualización del equipo de corrección de errores

1.23 - 2018-09-06
-   Adición de controladores de tira de píxeles compatibles con Magic Strip

1.22 - 2018-07-10
-   Adición de bombillas compatibles de aplicaciones inteligentes Tuya / Jinvoo
-   Adición de la bombilla Mi.Light Floodlight
-   Adición de la bombilla Philips Zhiuri
-   Pequeñas correcciones de errores

1.21 - 2018-03-10
-   Adición de controladores de tira led Sunix
-   Corrección de errores Arilux RGBWW

1.20 - 2018-03-02
-   Agregar la retroalimentación inmediata del estado de las bombillas Xiaomi Yeelight
-   Mejora de la interfaz de configuración del complemento.
-   Correcciones de errores

1.19 - 2018-02-15
-   Agregar apagado programado Xiaomi Philips
-   Mejora de la retroalimentación de estado ON / OFF de todas las lámparas con retroalimentación de estado
-   Correcciones de errores

1.18 - 2018-02-13
-   Yeelight JIAOYUE correcciones
-   Agregar modos personalizados en colores Yeelight

1.17 - 2018-02-11
-   Añadir Mi.Light: Track Light RGBW / WW
-   Agregar modos personalizados Yeelight JIAOYUE
-   Ordenar listas

1.16 - 2018-01-25
-   Agregar Xiaomi Philips: lámpara de escritorio, bombilla y lámpara de techo
-   Adición de la luz de techo Yeelight JIAOYUE 650
-   Además de todas las lámparas de intensidad aumentan y disminuyen botones
-   Mi.Light: almacenamiento de intensidad RGB y White
-   8 botones Mi.Light corrección de control remoto
-   Pequeñas correcciones de errores.

1.15 - 2017-11-29
-   Adición MiLight: control remoto RGBW CT de 8 canales y tira led RGBW CT
-   Actualización del documento (ortografía, ayuda de Yeelight)

1.14 - 2017-09-28
-   Corrección de errores: luz de techo Yeelight y LW12. Velocidad de adición H801

1.13 - 2017-09-26
-   Corrección de errores: luz de techo Yeelight, RUN / STOP LW12, desplazamiento de icono

1.12 - 2017-09-13
-   Ver pedidos directamente accesibles en la pestaña Pedidos

1.11 - 2017-09-04
-   Posibilidad de cambiar el widget de color predeterminado

1.10 - 2017-06-17
-   Adición de bombillas Extel Meli

1.09 - 2017-05-22
-   Compatibilidad con Jeedom V3.0

1.08 - 2017-05-13
-   Adición de bombillas TP-Link
-   Correcciones de errores

1.07 - 2017-05-03
-   Corrección de retroalimentación de estado RGBWW

1.06 - 2017-05-01
-   Añadir Arilux RGBWW
-   Agregue las tiras MagicHome LED RGBWW y RGBW
-   Wifi3x0 corrección de retroalimentación de estado

1.05 - 2017-04-17
-   Corrección de errores H801

1.04 - 2017-04-16
-   Corrección de errores Yeelight atardecer / amanecer

1.03 - 2017-04-12
-   Correcciones de errores
-   Adición de modos de amanecer y atardecer para Yeelight RGBW
-   Adición de un modo de sincronización de bulbo
-   Se agregó compatibilidad con Xiaomi Mijia

1.02 - 2017-04-02
-   Correcciones de errores
-   Modo de luz de luna agregado para techos con luz de luna

1.01 - 2017-01-29
-   Agregar información de conexión
-   Correcciones de errores
-   Por defecto, la información de estado ya no se muestra

1.00 - 2017-01-25
-   Publicación de la primera versión.

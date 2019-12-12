1.53 - 2019-12-12
-   Sonoff: agregando el puente RF 433 - solo sensores
-   Sonoff TH10 / TH16: agregando información del termostato interno (pero no es posible modificarlos)
-   Sonoff Pow R2: agregar información eléctrica (pero de efectividad limitada, esto no se debe al complemento)
-   Tuya: mejor retorno de estado de la captura múltiple V2
-   Tuya: además 2da lámpara tipo Blanche
-   correcciones de errores

1.52 - 2019-11-27
-   Tuya: lámparas de globo en establo
-   limpieza de código
-   correcciones de errores
-   moviendo el documento

1.51 - 2019-11-23
-   Tuya: adición del puente MiBoxer de Milight (módulo en Beta), solo funciona ON / OFF de la caja completa. Disponible para quienes llegan a recuperar la ApiKey con la aplicación MiBoxer.
-   Tuya: agrega un dispositivo personalizado para configurar cualquier dispositivo
-   Tuya : refonte des commandes customs : pour les commandes custom existantes -> nécessité de les reconfigurer avec le nouveau format
-   Tuya: necesita hacer una copia de seguridad de todo el equipo
-   eWeLink: uso de una clave falsa para SelfApiKey
-   eWeLink: corrigiendo la información de inicio de sesión
-   Tuya: corrección de la información de conexión
-   correcciones de errores menores
-   reiniciar el demonio después de cambiar una configuración

1.50 - 2019-10-28
-   Tuya: lámpara de adición RGBW tipo 2 (módulo en beta)
-   corrección de errores Sonoff Dual
-   Ewelink: agregando dispositivos de 3 y 4 canales
-   Sonoff: sensor de temperatura TH10 / 1H16 compatible, básico, RF, POW, Mini, Dual, 4CH / 4CH PRO, Touch, S20 / S26, T1 / TX, SLAMPHER, T4EUC1

1.49 - 2019-10-23
-   corrección de errores Tuya cortina mod2
-   corrección de errores Sonoff Dual

1.48 - 2019-10-18
-   eWelink: agregue módulos con 2 canales (incluido Sonoff Dual) en Beta
-   corrección error estado de retorno Sonoff

1.47 - 2019-10-16
-   Agregar persianas tuya mod2 (activar / desactivar / detener en lugar de 1/2/3 en los controles)
-   correcciones de errores

1.46 - 2019-10-12
-   agregando un sensor de temperatura / humedad ewelink incluyendo Sonoff TH10 / 16
-   Agregar el modo ewelink en marcha lenta (ENCENDIDO durante un tiempo determinado)
-   correcciones de errores

1.45 - 2019-10-2
-   Dispositivos compatibles con la aplicación Ewelink en modo LAN
-   SonOff compatible en modo LAN

1.44 - 2019-09-27
-   Sonoff Basic R3 compatible en modo bricolaje
-   Compatible V4 Jeedom
-   Buster compatible
-   Al eliminar el widget de color sin Desactivar V4 no compatible, el complemento ya no ofrecerá widgets personalizados.

1.43 - 2019-07-08
-   TP-link: teniendo en cuenta el nuevo protocolo V2 para los puntos de venta, requiere un token.
-   Tuya: los sensores de apertura y PIR no serán compatibles con el complemento. Estos sensores deben pasar a través de la nube: para evitar el uso de alarmas.
-   Corrección de errores: calcular la corriente de los enchufes Tuya ahora en amperios (modifique sus escenarios porque la unidad de la corriente es incorrecta)
-   Tuya y TP-Link, unidades de consumo: AVW kWh. Guarde el equipo para una visualización correcta de la unidad en la lista de comandos.

1.42 - 2019-06-02
-   Tuya: estado de corrección de errores
-   Daemon: no más pérdida de memoria

1.41 - 2019-06-19
-   Tuya: compatibilidad bidireccional con el complemento de firmware 2.0 (actuador OK)
-   Tuya: agregando el atenuador
-   Demon: reescrito para manejar mejor las conexiones / desconexiones tuya y Yeelight
-   Puede ser necesario volver a registrar cada dispositivo

1.40 - 2019-06-16
-   Tuya: agregue comentarios de estado instantáneos para dispositivos que devuelven su estado
-   Tuya: algunos equipos se cambian a firmware 2.0: son compatibles con el complemento solo en estado de retorno
-   Tuya: la aplicación móvil debe detenerse para que el complemento funcione
-   Tuya: para los usuarios de la versión beta, los dispositivos tuya V2 deberán reconfigurarse (el firmware V1 es independiente del firmware V2)
-   Eliminar cron 1 min
-   Un error de PhP causa pérdidas de memoria, en este caso, configure los latidos del complemento para reiniciarlo regularmente

1.39 - 2019-05-05
-   Tuya: adición de termostato

1.38 - 2019-04-05
-   Tuya: corrección del estado posterior
-   Escritorio: pantalla de estado de corrección de errores

1.37 - 2019-04-04
-   Tuya: consumo agregado en todos los puntos de venta de tuya
-   Tuya: configuración de la recuperación de los parámetros energéticos.
-   Atención: la configuración para recuperar los parámetros de energía ha sido modificada. Las configuraciones antiguas siguen siendo compatibles.

1.36 - 2019-04-03
-   Tuya: agregando interruptores de pared
-   Tuya: agregando un humidificador
-   Tuya: agregando consumo a todos los puntos de venta
-   Atención: será necesario reconfigurar los tomacorrientes Tuya: para tomar la configuración tomada Xplugs + USB y verificar la supresión del retorno de estado para las tomas que tienen microcortes.

1.35 - 2019-03-13
-   Tuya: agregando interruptores para persianas
-   Tuya: agrega comandos personalizados para todos los dispositivos (permite probar nuevos actuadores)

1.34 - 2019-03-02
-   Agregue una configuración con comentarios de estado para todos los puntos de venta. Atención pueden producirse microcortes, luego tome la configuración sin comentarios.

1.33 - 2019-02-15
-   Parametrización posible para la recuperación del consumo en las tomas tuya: las tomas tipo 2 deben reconfigurarse en el tipo 1 antes de la instalación del complemento.

1.32 - 2019-02-13
-   TP-Link HS110 correcciones de errores.
-   Modification du protocole (UDP -> TCP) pour les équipements TP-Link. Normalement sans incidence.

1.31 - 2019-02-12
-   Se agregó un segundo tipo de enchufe con consola compatible con Smart Live.

1.30 - 2019-02-01
-   Se eliminó la retroalimentación de estado de los enchufes Tuya sin medición de consumo: característica inútil porque solo Jeedom puede controlar el enchufe y causa microcortes.
-   Cambiar el documento para la nueva configuración de Mi.Light iBox

1.29 - 2019-1-27
-   Corrección colores bombillas HSV Tuya
-   Adición de bombillas RGB Tuya

1.28 - 2019-1-16
-   Añadir conector TP_Link
-   Mejora comunicación Tuya enchufe inteligente

1.27 - 2019-1-11
-   Tuya enchufe inteligente en estable
-   Mejora comunicación Tuya enchufe inteligente

1.26 - 2019-1-1
-   Agregar enchufes eléctricos compatibles con las aplicaciones Tuya / smart live / Jinvoo / eFamillyCloud
-   Pequeñas correcciones de errores
-   Refundición de la documentación

1.25 - 2018-11-25
-   Adición beta de los controladores led direccionables SP108 Led Shop (ON / OFF)
-   Adición del control remoto RGB Mi.Light
-   Pequeñas correcciones de errores

1.24 - 2018-11-14
-   Se corrigió el error en el equipo de visualización de la página

1.23 - 2018-09-06
-   Se agregaron controladores LED de tira de píxeles compatibles con Magic Home

1.22 - 2018-07-10
-   Agregar bombillas compatibles de aplicaciones inteligentes Tuya / Jinvoo
-   Adición de la bombilla Mi.Light Floodlight
-   Adición de la bombilla Philips Zhiuri
-   Pequeñas correcciones de errores

1.21 - 2018-03-10
-   Adición del controlador de tira LED Sunix
-   Errores corregidos Arilux RGBWW

1.20 - 2018-03-02
-   Agregar la retroalimentación inmediata del estado de las bombillas Xiaomi Yeelight
-   Interfaz de configuración de complemento mejorada
-   Correcciones de errores

1.19 - 2018-02-15
-   Además Xiaomi Philips apagado retrasado
-   Mejorado el estado de encendido / apagado de todas las lámparas con retroalimentación de estado
-   Correcciones de errores

1.18 - 2018-02-13
-   Correcciones Yeelight JIAOYUE
-   Agregue modos personalizados en colores Yeelight

1.17 - 2018-02-11
-   Agregar Mi.Light: Track Light RGBW / WW
-   Añadir modos personalizados Yeelight JIAOYUE
-   Ordenar listas

1.16 - 2018-01-25
-   Además Xiaomi Philips: lámpara de escritorio, bombilla y lámpara de techo
-   Adición de luz de techo Yeelight JIAOYUE 650
-   Adición para todas las lámparas de botones de incremento y disminución de intensidad
-   Mi.Light: memorizando la intensidad RGB y Blanco
-   Mi.Light control remoto 8 botones
-   Se corrigieron errores menores.

1.15 - 2017-11-29
-   Adición MiLight: control remoto 8 canales RGBW CT y tira de led RGBW CT
-   Documento actualizado (ortografía, ayuda Yeelight)

1.14 - 2017-09-28
-   Corrección de errores: luz de techo Yeelight y LW12. Añadir velocidad H801

1.13 - 2017-09-26
-   Corrección de errores: luz de techo Yeelight, RUN / STOP LW12, ícono en movimiento

1.12 - 2017-09-13
-   Visualización de comandos accesibles directamente en la pestaña Comandos

1.11 - 2017-09-04
-   Posibilidad de editar el widget de color predeterminado

1.10 - 2017-06-17
-   Agregar bombillas Extel Meli

1.09 - 2017-05-22
-   Compatibilidad con Jeedom V3.0

1.08 - 2017-05-13
-   Adición de bombillas TP-Link
-   Correcciones de errores

1.07 - 2017-05-03
-   Corrección de retroalimentación de estado RGBWW

1.06 - 2017-05-01
-   Agregar Arilux RGBWW
-   Añadir MagicHome tira led RGBWW y bombillas RGBW
-   Corrección de devolución de estado wifi3x0

1.05 - 2017-04-17
-   Corregidos errores de H801

1.04 - 2017-04-16
-   Corrección de errores al atardecer / amanecer de Yeelight

1.03 - 2017-04-12
-   Correcciones de errores
-   Se agregaron modos de amanecer y atardecer para Yeelight RGBW
-   Agregar un modo de sincronización de las bombillas
-   Se agregó compatibilidad con Xiaomi Mijia

1.02 - 2017-04-02
-   Correcciones de errores
-   Modo de luz de luna adicional para luz de techo

1.01 - 2017-01-29
-   Agregar información de inicio de sesión
-   Correcciones de errores
-   Por defecto, la información de estado ya no se muestra

1.00 - 2017-01-25
-   Publicación de la primera versión.

**A continuación se detallan los supuestos e instrucciones para la ejecución exitosa del servicio de gestión de tickets para eventos artísticos.**

1. **Supuestos**
1. Se tiene una base de datos en ambiente local, de nombre “eventos\_artisticos”,con puerto 3306, usuario root sin contraseña. Esta base de datos está sin tablas ya que se crean a través de migración en el proyecto Laravel.
1. La máquina donde está alojado el proyecto tiene instalados PHP 8.1 y Composer instalado.
1. La colección creada en el proyecto debe importarse en Postman.
2. **Instrucciones de ejecución**
1. A través de una terminal y de git se debe clonar repositorio en la máquina donde se ejecutará.

![](Aspose.Words.045d748d-2811-4757-a5d7-a656e6fa4350.001.png)

2. Dentro de la carpeta raíz del proyecto ejecutar el comando **composer install**.

![](Aspose.Words.045d748d-2811-4757-a5d7-a656e6fa4350.002.png)

3. Duplicar archivo .env.example, en este nuevo archivo cambiar los parámetros para la conexión a la base de datos y cambiar el nombre a .env .

![](Aspose.Words.045d748d-2811-4757-a5d7-a656e6fa4350.003.png)

4. Ejecutar las migraciones que crean las tablas en la base de datos, atraves del comando **php artisan migrate**.

![](Aspose.Words.045d748d-2811-4757-a5d7-a656e6fa4350.004.png)

5. Importar archivo eventos\_artisticos.sql que está dentro de la carpeta raiz a la base de datos del mismo nombre.

![](Aspose.Words.045d748d-2811-4757-a5d7-a656e6fa4350.005.jpeg)

6. Ejecutar el servidor a traves del comando **php artisan serve.**

![](Aspose.Words.045d748d-2811-4757-a5d7-a656e6fa4350.006.png)

7. Con el servido ejecutado, probar la colección de postman que se importó anteriormente.

![](Aspose.Words.045d748d-2811-4757-a5d7-a656e6fa4350.007.png)

3. **Evidencias**
1. Obtiene el listado de eventos disponibles, con la informacion mas relevante del evento.(GET/events)

![](Aspose.Words.045d748d-2811-4757-a5d7-a656e6fa4350.008.jpeg)

2. Obtiene la información completa de un evento.

![](Aspose.Words.045d748d-2811-4757-a5d7-a656e6fa4350.009.jpeg) ![](Aspose.Words.045d748d-2811-4757-a5d7-a656e6fa4350.010.jpeg)

- Si el evento no existe mostrará un mensaje de error.
3. Crea la compra de un ticket para un cliente.

` `![](Aspose.Words.045d748d-2811-4757-a5d7-a656e6fa4350.011.png)![](Aspose.Words.045d748d-2811-4757-a5d7-a656e6fa4350.012.jpeg)

- Si el usuario o el evento no existen mostrará un mensaje de error para ambos casos.
4. Lista todas las compras de un cliente.

![](Aspose.Words.045d748d-2811-4757-a5d7-a656e6fa4350.013.jpeg)

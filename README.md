**A continuación se detallan los supuestos e instrucciones para la ejecución exitosa del servicio de gestión de tickets para eventos artísticos.**

- **Supuestos**
- Se tiene una base de datos en ambiente local, de nombre “eventos\_artisticos”,con puerto 3306, usuario root sin contraseña. Esta base de datos está sin tablas ya que se crean a través de migración en el proyecto Laravel.

◆

- La máquina donde está alojado el proyecto tiene instalados PHP 8.1 y Composer instalado.
- La colección creada en el proyecto debe importarse en Postman.
- **Instrucciones de ejecución**
- A través de una terminal y de git se debe clonar repositorio en la máquina donde se ejecutará.

![](Aspose.Words.b4e7be07-70a3-44b9-a110-16910bca02e9.001.png)

- Dentro de la carpeta raíz del proyecto ejecutar el comando **composer install**.

![](Aspose.Words.b4e7be07-70a3-44b9-a110-16910bca02e9.002.png)

- Duplicar archivo .env.example, en este nuevo archivo cambiar los parámetros para la conexión a la base de datos y cambiar el nombre a .env .

![](Aspose.Words.b4e7be07-70a3-44b9-a110-16910bca02e9.003.png)

- Ejecutar las migraciones que crean las tablas en la base de datos, atraves del comando **php artisan migrate**.

![](Aspose.Words.b4e7be07-70a3-44b9-a110-16910bca02e9.004.png)

- Importar archivo eventos\_artisticos.sql que está dentro de la carpeta raiz a la base de datos del mismo nombre.

![](Aspose.Words.b4e7be07-70a3-44b9-a110-16910bca02e9.005.jpeg)

- Ejecutar el servidor a traves del comando **php artisan serve.**

![](Aspose.Words.b4e7be07-70a3-44b9-a110-16910bca02e9.006.png)

- Con el servido ejecutado, probar la colección de postman que se importó anteriormente.

![](Aspose.Words.b4e7be07-70a3-44b9-a110-16910bca02e9.007.png)

- **Evidencias**
- Obtiene el listado de eventos disponibles, con la informacion mas relevante del evento.(GET/events)

![](Aspose.Words.b4e7be07-70a3-44b9-a110-16910bca02e9.008.jpeg)

- Obtiene la información completa de un evento.

![](Aspose.Words.b4e7be07-70a3-44b9-a110-16910bca02e9.009.jpeg) ![](Aspose.Words.b4e7be07-70a3-44b9-a110-16910bca02e9.010.jpeg)

- Si el evento no existe mostrará un mensaje de error.
- Crea la compra de un ticket para un cliente.

` `![](Aspose.Words.b4e7be07-70a3-44b9-a110-16910bca02e9.011.png)![](Aspose.Words.b4e7be07-70a3-44b9-a110-16910bca02e9.012.jpeg)

- Si el usuario o el evento no existen mostrará un mensaje de error para ambos casos.
- Lista todas las compras de un cliente.

![](Aspose.Words.b4e7be07-70a3-44b9-a110-16910bca02e9.013.jpeg)

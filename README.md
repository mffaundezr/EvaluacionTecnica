**A continuación se detallan los supuestos e instrucciones para la ejecución exitosa del servicio de gestión de tickets para eventos artísticos.**


1. **Supuestos**

1. Se tiene una base de datos en ambiente local, de nombre “eventos\_artisticos”,con puerto 3306, usuario root sin contraseña. Esta base de datos está sin tablas ya que se crean a través de migración en el proyecto Laravel.

1. La máquina donde está alojado el proyecto tiene instalados  PHP 8.1 y Composer  instalado.
1. La colección creada en el proyecto debe importarse en Postman.




1. **Instrucciones de ejecución**


1. A  través de una terminal y de git se  debe clonar repositorio en la máquina donde se ejecutará.

![](Aspose.Words.ef9f815c-44bf-415a-8039-ba6709cdac46.001.png)

1. Dentro de la carpeta raíz del proyecto ejecutar el comando **composer install**.

![](Aspose.Words.ef9f815c-44bf-415a-8039-ba6709cdac46.002.png)

1. Duplicar archivo .env.example, en este nuevo archivo cambiar los parámetros para la conexión a la base de datos y cambiar el nombre a .env .



![](Aspose.Words.ef9f815c-44bf-415a-8039-ba6709cdac46.003.png)![](Aspose.Words.ef9f815c-44bf-415a-8039-ba6709cdac46.004.png)

1. Ejecutar las migraciones que crean  las tablas en la base de datos, atraves del comando **php artisan migrate**.

![](Aspose.Words.ef9f815c-44bf-415a-8039-ba6709cdac46.005.png)


1. Importar archivo eventos\_artisticos.sql que está dentro de la carpeta raiz a la base de datos del mismo nombre.

![](Aspose.Words.ef9f815c-44bf-415a-8039-ba6709cdac46.006.png)

1. Ejecutar el servidor a traves del comando **php artisan serve.**

![](Aspose.Words.ef9f815c-44bf-415a-8039-ba6709cdac46.007.png)

1. Con el servido ejecutado, probar la colección de postman que se importó anteriormente.

![](Aspose.Words.ef9f815c-44bf-415a-8039-ba6709cdac46.008.png)



























1. **Evidencias**

1. Obtiene el listado de eventos disponibles, con la informacion mas relevante del evento.(GET/events)

![](Aspose.Words.ef9f815c-44bf-415a-8039-ba6709cdac46.009.png)





1. Obtiene la información completa de un evento.![](Aspose.Words.ef9f815c-44bf-415a-8039-ba6709cdac46.010.png)

![](Aspose.Words.ef9f815c-44bf-415a-8039-ba6709cdac46.011.png)




- Si el evento no existe mostrará un mensaje de error.









1. Crea la compra de un ticket para un cliente.

![](Aspose.Words.ef9f815c-44bf-415a-8039-ba6709cdac46.012.png)![](Aspose.Words.ef9f815c-44bf-415a-8039-ba6709cdac46.013.png)






























- ![](Aspose.Words.ef9f815c-44bf-415a-8039-ba6709cdac46.014.png)Si el usuario o el evento no existen mostrará un mensaje de error para ambos casos.














1. Lista todas las compras de un cliente.

![](Aspose.Words.ef9f815c-44bf-415a-8039-ba6709cdac46.015.png)



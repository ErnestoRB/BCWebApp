# BCWebApp
## ¿Qué es?
The Bash Crashers Web Application (BCWebApp) es una aplicación web que permite llenar un formulario de datos personales básicos para después ser procesados y almacenados.

## ¿Cómo usarlo?
1.	Asegúrate de tener instalado Apache2, en caso contrario, escribe en la terminal `apt install apache2`. Para iniciarlo usa `service apache2 start`
2.	El proyecto usa PHP, si no lo tienes instalado escribe en tu terminal `apt install php && apt install libapache2-mod-php`
3.	Reinicia apache2 si es necesario: `service apache2 restart`
4.	Clona el repositorio en la carpeta */var/www/html*.
5.	Necesitas conceder todos los permisos al directorio previamente clonado, para ello escribe “chmod a=rwx /var/www/html/BCWebApp”.
6.	Dirígete al navegador de tu preferencia y en la barra de direcciones escribe ***localhost/BCWebApp***, te redirigirá al index de la página y ya estarás listo para usar nuestra aplicación.

**NOTA:** Ejecuta los comandos como superusuario cuando sea necesario.



## ¿Cómo funciona?
Esta aplicación web tiene una explicación sencilla para el usuario, se trata de una página web de formularios como cualquier otra que vemos a diario. 

El proceso es simple: Necesitas llenar tus datos de manera coherente, de lo contrario no podrás enviar tu formulario, debido a que la página está en constante validación donde verifica que los nombres no incluyan números y viceversa, al igual que con el correo electrónico, si tu correo no es de una fuente válida, la aplicación no proseguirá hasta hacer un cambio correcto.

Si ya todos tus datos son válidos, y has dado clic en el botón de enviado, se te llevará a otra página donde puedas observar tu información previamente escrita. Esto se hace gracias a un método de envío de datos a servidores que se encuentra dentro de los códigos de las páginas que estás usando. Además de lo anterior, estos mismos datos son enviados al servidor local donde reside la página web, los cuales se guardan dentro de un directorio en forma de archivo de texto, y todo esto mediante un script hecho en Python y ejecutado desde la misma página web al momento de que tu información es enviada.

Si quieres revisar lo que se ha enviado desde siempre, basta con regresar al index.php y entrar en la opción de “ver datos”, ahí encontrarás todo lo que ha guardado la página. Estos datos son recuperados de la misma manera que su almacenado, desde un script de Python y recuperados por variables en código de php al observar los datos de la persona que se seleccione.


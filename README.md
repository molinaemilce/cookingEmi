# cookingEmi
Proyecto Realizado mediante el talentcamp php de NTTDATA, se utilizó php, MVC, mysql.
<br>
El proyecto trata de un sitio web de recetas, la cual contamos con 4 secciones.
<br>
1)Home: Se encuentra el inicio, con su respectivo titulo y portada, debajo de ello hay unos beneficios sobre el contenido del sitio(son links), que al presionar cualquiera de ello nos aparecerá la informacion detallada por debajo segun lo presionado<br>
2)Recetas: En esta seccion se encuentran todas las recetas que se hay dentro de la tabla(recetas), es decir, nos muestra en cards todas las recetas que se fueron creando, para esto se utilizó conexion a la base de datos y consultas sql.<br>
3)Crear recetas: En esta seccion, hay un formulario en el que  podes crear recetas y subirlas a la base de datos, se van almacenando en la tabla(recetas) lo mismo que se menciono arriba se utizo conexion a la base de datos y consultas sql, estas peticiones se hicieron atraves del controlador. <br>
4)Seccion Contacto: Hay un formulario de contacto, en el que podes enviar tu opinion sobre el contenido del proyecto, se utizo conexion a la base de datos y consultas sql, estas peticiones se hicieron atraves del controlador y se almacenan en la tabla de contacto. (Lo que tambien antes funcionaba era de mandar esos valores del form al mail, utilizando la funcion mail que detallo en el controlador contactoControlador.php, pero hay un prblema de conexion con la base de datos del hosting gratuito, cambie muchas veces las contraseña y demas pero seguia persistiendo, por ende dejé comentado la funcionalidad de enviar mails) <br>
<br>
Se utilizó lo aprendido en clases, MVC,  tambien php nativo orientado a objetos, y consultas y conexiones a la base de datos.
<br>
<br>

 Esto está subido al 000webhost, pero a ultimo momento se presentó un error de credencial y conexion en la base de datos, por lo cual al estar sin tiempo lo hice atraves del mysql del xampp, que pude crear sin problemas los valores en el sql, dejo de todas formas lo que se subio al hosting: https://talentcamp.000webhostapp.com/vista/index.php <br>

 # Instrucciones para manipularlo de manera local
 1)Activar xampp  <br>
 2)Dentro de la carpeta sql, deje exportado la base de datos que utilicé, por lo cual hay que importarlo desde el phpmyadmin <br>
 3)Desde esta ruta ya podes manipular el sitio web: http://localhost/proyectotalentcamp/vista/index.php

Dejo los videos donde se ve que funciona correctamente de manera local:
https://drive.google.com/drive/folders/1SAIIhwVJeGdb_2TRzAVK9mkIaL-ajNbe?usp=sharing



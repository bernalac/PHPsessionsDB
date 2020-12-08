# PHPsessionsDB
Proyecto PHP dedicado a estudios de desarrollo de aplicaciones web 2º curso, módulo DWES.
La base de datos utilizada es MySQL.

El proyecto consta de 5 archivos diferenciados:
```
login.html: Es la vista de los formularios de registro y login con su respectivo estilo. 
login1.php: Se encarga del logueo aplicando una consulta a una bd por nombre de usuario y comparando la contraseña introducida. Añade sesión con el userid (único)
registro.php: Se encarga del registro, encripta la password, valida por email y ejecuta la inserción en la bd.
val.php: Página hacia el valor de sesión.
config.php: Se encarga de la base de datos usando PDO.
```


### Prerequisitos

Qué cosas necesitamos antes de empezar:

Instalaciones:
```
Mysql-server.
Módulo de PHP para apache.
```


## Creación
Necesitamos crear una base de datos.
```
CREATE DATABASE Usuario;
USE Usuario;
CREATE TABLE `users` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `username` varchar(25) NOT NULL,
  `password` varchar(255) NOT NULL,
  `email` varchar(100) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `username` (`username`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=1;
```

En esta URL podemos visualizar la creación en MySQL:

* http://www.oscarabadfolgueira.com/crear-una-base-datos-mysql-desde-consola/



**IMPORTANTE**
````
Los archivos descargados de este proyecto deben ir en la carpeta /var/www/html/
Hay que cambiar los parámetros de la base de datos según convenga en vuestro sistema (archivo config.php)

````
## Ejecución

Para ejecutar:
```
Vamos a un navegador y ponemos http://localhost/login.html
```

## Authors

* **Javier Bernal** - *Initial work* 

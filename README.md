# DesarolloSeguro
# KitchenLink

`KitchenLink` es un sistema de gestión de usuarios para restaurantes, diseñado para manejar el acceso a través de un sistema de roles y autenticación segura. El sistema cuenta con un inicio de sesión, un panel de control (dashboard) y un registro de usuarios restringido a administradores.

## ✨ Características Principales

* **Autenticación Segura:** Inicio y cierre de sesión utilizando sesiones de PHP y JSON Web Tokens (JWT) para una autenticación robusta.
* **Gestión de Contraseñas:** Almacenamiento seguro de contraseñas mediante el uso de `password_hash()` y `password_verify()`.
* **Protección contra Inyección SQL:** Uso de consultas preparadas (`prepared statements`) para todas las interacciones con la base de datos.
* **Sistema de Roles:** Gestión de usuarios basada en perfiles predefinidos:
    * Gerente
    * Mesero
    * Jefe de Cocina
    * Hostess
    * Encargado de Barra
    * Cajero

* **Registro Autorizado:** El formulario de registro solo puede ser utilizado por un usuario con rol de "Gerente", quien debe validar la operación con su propia contraseña.

## 🛠️ Tecnologías Utilizadas

* **Backend:** PHP 8.0+
* **Base de Datos:** MySQL / MariaDB
* **Frontend:** HTML, CSS, JavaScript (puro)
* **Dependencias:**
    * [Composer](https://getcomposer.org/) para la gestión de paquetes de PHP.
    * [firebase/php-jwt](https://github.com/firebase/php-jwt) para la codificación y decodificación de JSON Web Tokens.
    * [Font Awesome](https://fontawesome.com/) para iconografía.

## Requisitos Previos

Asegúrate de tener instalados los siguientes programas:
* PHP 8.0 o superior.
* Servidor web Apache (incluido en XAMPP).
* Servidor de base de datos MySQL/MariaDB (incluido en XAMPP).
* Composer.

## Instalación y Configuración

Sigue estos pasos para poner en marcha el proyecto en un entorno Fedora Linux.

**1. Instalar XAMPP**
Abre una terminal y ejecuta los siguientes comandos para instalar XAMPP:
```bash
# Otorgar permisos de ejecución al instalador
chmod 755 xampp-linux-*-installer.run

# Ejecutar el instalador con privilegios de superusuario
sudo ./xampp-linux-*-installer.run
````

> XAMPP se instalará en el directorio `/opt/lampp`.

**2. Clonar el Repositorio**
Clona este repositorio en el directorio `htdocs` de tu instalación de XAMPP.

```bash
cd /opt/lampp/htdocs
git clone <URL_DEL_REPOSITORIO>
cd <NOMBRE_DEL_PROYECTO>
```

**3. Instalar Dependencias**
Usa Composer para instalar las dependencias de PHP.

```bash
composer install
```

**4. Configurar la Base de Datos**

  * Inicia los servicios de Apache y MySQL desde XAMPP.
  * Crea una nueva base de datos con el nombre `KitchenLink`.
  * Configura tus credenciales de acceso en el archivo `src/php/db_connection.php`:
    ```php
    <?php
    $servername = "127.0.0.1:33061"; // Ajusta el puerto si es necesario
    $username_db = "root";
    $password_db = ""; // Tu contraseña
    $dbname = "KitchenLink";
    ?>
    ```

**5. Configurar la Clave Secreta para JWT**
Edita el archivo `src/php/config.php` y define una clave secreta segura para firmar los tokens.

```php
<?php
$secret_key = "TU_CLAVE_SECRETA_Y_SEGURA_AQUI";
?>
```

**6. Crear un Usuario Administrador**
Para que el sistema de registro funcione, debes crear manualmente el primer usuario con rol de "Gerente" en la base de datos. Puedes usar una herramienta como `phpMyAdmin`.

## ▶Uso

1.  Asegúrate de que los servicios de Apache y MySQL de XAMPP estén en ejecución.
2.  Abre tu navegador web y navega a `http://localhost/KitchenLink` (o el nombre de la carpeta donde clonaste el proyecto).
3.  Inicia sesión con las credenciales de un usuario existente.

## Licencia

Este proyecto está bajo la Licencia MIT. Consulta el archivo `LICENSE` para más detalles.

```
```
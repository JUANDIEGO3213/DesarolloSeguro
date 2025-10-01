# KitchenLink DesarolloSeguro

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

## 📋 Requisitos Previos

Asegúrate de tener instalados los siguientes programas:
* PHP 8.0 o superior.
* Servidor web Apache (incluido en XAMPP).
* Servidor de base de datos MySQL/MariaDB (incluido en XAMPP).
* Composer.

## 🚀 Instalación y Configuración

Sigue estos pasos para poner en marcha el proyecto en un entorno Fedora Linux.

**1. Instalar XAMPP**
Abre una terminal y ejecuta los siguientes comandos para instalar XAMPP:
```bash
# Otorgar permisos de ejecución al instalador
chmod 755 xampp-linux-*-installer.run

# Ejecutar el instalador con privilegios de superusuario
sudo ./xampp-linux-*-installer.run


Clona este repositorio en el directorio `htdocs` de tu instalación de XAMPP.
```bash
cd /opt/lampp/htdocs
git clone <URL_DEL_REPOSITORIO>
cd <NOMBRE_DEL_PROYECTO>
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


# KitchenLink: Sistema de Gestión y Login

`KitchenLink` es un proyecto full-stack que consiste en un API RESTful segura construida con PHP y un frontend interactivo construido con Angular. El sistema gestiona la autenticación de usuarios para un restaurante, manejando roles y protegiendo las rutas y los datos.

---
## ✨ Características Principales

### Backend (PHP API)
* **Autenticación Segura:** Utiliza sesiones y emite **JSON Web Tokens (JWT)** en el login.
* **Gestión de Contraseñas:** Almacena las contraseñas de forma segura usando `password_hash()`.
* **Protección contra Inyección SQL:** Emplea consultas preparadas para todas las interacciones con la base de datos.
* **Registro Autorizado:** El registro de nuevos usuarios está protegido y solo puede ser realizado por un usuario con rol de "Gerente".

### Frontend (Angular)
* **Formulario de Login Reactivo:** Captura las credenciales del usuario y se comunica con el API.
* **Interceptor de Errores HTTP:** Maneja de forma centralizada los errores del API (ej. error 401 - No Autorizado) y muestra notificaciones al usuario.
* **Protección contra XSS:** Demuestra cómo Angular sanitiza automáticamente los datos para prevenir ataques de Cross-Site Scripting.
* **Rutas Protegidas:** Utiliza un `AuthGuard` para evitar que usuarios no autenticados accedan a páginas protegidas como el Dashboard.

---
## 🛠️ Tecnologías Utilizadas

* **Backend:** PHP 8.0+, MySQL (MariaDB), Composer, `firebase/php-jwt`.
* **Frontend:** Angular, TypeScript, RxJS.
* **Servidor:** Apache (a través de XAMPP).
* **Control de Versiones:** Git y GitHub.

---
## 📋 Requisitos Previos

Asegúrate de tener instalado el siguiente software antes de empezar:

* **Git:** [Descargar Git](https://git-scm.com/downloads)
* **Node.js y npm:** [Descargar Node.js](https://nodejs.org/) (npm viene incluido)
* **Composer:** [Descargar Composer](https://getcomposer.org/download/)
* **XAMPP:** [Descargar XAMPP](https://www.apachefriends.org/index.html) (elige la versión con PHP 8.0 o superior)

---
## 🚀 Instalación y Configuración

Sigue los pasos para el **Backend** y luego para el **Frontend**.

### 1. Backend (PHP API)

#### **Paso A: Instalar XAMPP**

<details>
<summary>🔵 **Instrucciones para Fedora**</summary>

1.  Descarga el instalador de XAMPP para Linux desde el sitio oficial.
2.  Abre una terminal en la carpeta donde lo descargaste.
3.  Dale permisos de ejecución al instalador:
    ```bash
    chmod 755 xampp-linux-*-installer.run
    ```
4.  Ejecuta el instalador con privilegios de administrador:
    ```bash
    sudo ./xampp-linux-*-installer.run
    ```
    Sigue las instrucciones del asistente gráfico. XAMPP se instalará en `/opt/lampp`.
</details>

<details>
<summary>🪟 **Instrucciones para Windows**</summary>

1.  Descarga el instalador de XAMPP para Windows desde el sitio oficial.
2.  Ejecuta el archivo `.exe`.
3.  Sigue las instrucciones del asistente. Se recomienda instalarlo en la ruta por defecto: `C:\xampp`.
</details>

#### **Paso B: Clonar el Repositorio y Configurar Dependencias**

1.  Clona este repositorio dentro de la carpeta `htdocs` de XAMPP.
    * **En Fedora:**
        ```bash
        cd /opt/lampp/htdocs
        git clone [https://github.com/JUANDIEGO3213/DesarolloSeguro.git](https://github.com/JUANDIEGO3213/DesarolloSeguro.git)
        cd DesarolloSeguro
        ```
    * **En Windows:**
        ```bash
        cd C:\xampp\htdocs
        git clone [https://github.com/JUANDIEGO3213/DesarolloSeguro.git](https://github.com/JUANDIEGO3213/DesarolloSeguro.git)
        cd DesarolloSeguro
        ```
2.  Instala las dependencias de PHP con Composer:
    ```bash
    composer install
    ```

#### **Paso C: Configurar la Base de Datos**

1.  Inicia los servicios de **Apache** y **MySQL** desde el Panel de Control de XAMPP.
2.  Abre tu navegador y ve a `http://localhost/phpmyadmin`.
3.  Crea una nueva base de datos llamada `KitchenLink`.
4.  Configura tus credenciales en el archivo `src/php/db_connection.php`.
5.  Configura tu clave secreta para JWT en el archivo `src/php/config.php`.
6.  **Importante:** Crea manualmente el primer usuario con `rol_id = 1` (Gerente) en la tabla `users` para que el sistema de registro funcione.

### 2. Frontend (Angular App)

#### **Paso A: Instalar Angular CLI y Dependencias**

1.  Abre una **nueva terminal** (no en la carpeta de XAMPP, sino en tu carpeta de proyectos habitual).
2.  Instala el Angular CLI de forma global.
    * **En Fedora:**
        ```bash
        sudo npm install -g @angular/cli
        ```
    * **En Windows** (si tienes problemas de permisos, abre PowerShell o CMD como **Administrador**):
        ```bash
        npm install -g @angular/cli
        ```
3.  Navega a la carpeta del frontend (si está dentro de tu repositorio, ve a esa carpeta) y ejecuta:
    ```bash
    npm install
    ```

#### **Paso B: Configurar la URL del API**

1.  Abre el archivo del servicio de autenticación en tu proyecto de Angular: `src/app/services/auth.service.ts`.
2.  Asegúrate de que la variable `apiUrl` apunte a tu backend de PHP:
    ```typescript
    private apiUrl = 'http://localhost/DesarolloSeguro/src/php/';
    ```

---
## ▶️ Ejecutar la Aplicación

Debes tener ambos, el backend y el frontend, corriendo al mismo tiempo.

1.  **Iniciar el Backend:** Asegúrate de que los servicios de **Apache** y **MySQL** estén corriendo desde el Panel de Control de XAMPP.

2.  **Iniciar el Frontend:** Abre una terminal en la carpeta de tu proyecto de Angular y ejecuta:
    ```bash
    ng serve -o
    ```
    Esto abrirá automáticamente la aplicación en `http://localhost:4200`.

---
## ✅ Requisitos del Entregable Cumplidos

Este proyecto cumple con los siguientes puntos solicitados:

* **Validaciones en Login:** El backend (`login_handler.php`) valida que la contraseña tenga más de 8 caracteres.
* **Formulario de Creación con Hash:** El backend (`register_handler.php`) aplica `password_hash()` a las contraseñas de los nuevos usuarios.
* **Generar y Devolver JWT:** El `login_handler.php` genera un JWT con `id`, `email` y `rol` del usuario.
* **Generar Interceptores:** El frontend de Angular tiene un `error.interceptor.ts` que captura errores HTTP (como 401 No Autorizado) y muestra una alerta.
* **Prevenir XSS:** El frontend de Angular (`dashboard.component.html`) demuestra cómo la interpolación `{{ variable }}` sanitiza los datos y previene la ejecución de scripts maliciosos.

---
## 📄 Licencia

Este proyecto está bajo la Licencia MIT.
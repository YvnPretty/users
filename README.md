# Campus Milpalta - Sistema de Login Seguro

Este proyecto es un sistema de autenticación de usuarios moderno y seguro, desarrollado con **PHP** y **MySQL**, con una interfaz de usuario atractiva basada en **Glassmorphism**.

![Estado del Proyecto](https://img.shields.io/badge/Estado-Terminado-success)
![PHP](https://img.shields.io/badge/Backend-PHP-blue)
![MySQL](https://img.shields.io/badge/Database-MySQL-orange)

## 🌐 Demo en Vivo

Puedes ver una demostración visual de la interfaz (versión estática) aquí:
👉 **[Ver Demo en GitHub Pages](https://yvnpretty.github.io/users/index.html)**

> **Nota:** La demo en GitHub Pages es solo visual (HTML/JS). Para probar la funcionalidad completa con base de datos, sigue las instrucciones de instalación abajo.

---

## ✨ Características

*   **Diseño Moderno:** Interfaz estilo "Glassmorphism" con animaciones suaves y fondo dinámico.
*   **Seguridad:** Hashing de contraseñas (preparado para `password_hash`), protección contra inyecciones SQL usando PDO, y manejo seguro de sesiones.
*   **Estructura MVC:** Código organizado en carpetas lógicas (`auth`, `db`, `css`, `js`).
*   **Responsive:** Adaptable a dispositivos móviles y de escritorio.

## 🚀 Instalación y Ejecución (Versión Completa)

Para ejecutar la versión completa con backend PHP y base de datos:

### Prerrequisitos
*   Un servidor web local como **XAMPP**, **WAMP**, o **MAMP**.

### Pasos
1.  **Clonar el repositorio:**
    ```bash
    git clone https://github.com/YvnPretty/users.git
    ```
    O descarga el ZIP y extráelo en tu carpeta `htdocs` (XAMPP) o `www` (WAMP).

2.  **Configurar la Base de Datos:**
    *   Abre **phpMyAdmin** (normalmente `http://localhost/phpmyadmin`).
    *   Crea una nueva base de datos llamada `campus_milpalta` (o importa directamente el script).
    *   Importa el archivo `db/init.sql` que encontrarás en la carpeta del proyecto. Esto creará la tabla `users` y un usuario administrador por defecto.

3.  **Configurar Conexión (Opcional):**
    *   Si tu configuración de MySQL es diferente a la por defecto (Usuario: `root`, Sin contraseña), edita el archivo `db/config.php` con tus credenciales.

4.  **Ejecutar:**
    *   Abre tu navegador y ve a: `http://localhost/users/` (o la carpeta donde lo hayas guardado).
    *   El sistema te redirigirá automáticamente al login.

## 🔑 Credenciales de Prueba

Para iniciar sesión (tanto en la Demo como en Local):

*   **Usuario:** `admin`
*   **Contraseña:** `admin123`

---

## 📂 Estructura del Proyecto

```
/
├── auth/           # Scripts de autenticación (login.php)
├── css/            # Estilos CSS (styles.css)
├── db/             # Configuración y scripts SQL (config.php, init.sql)
├── js/             # Scripts JavaScript (theme.js)
├── dashboard.php   # Página principal protegida (Backend)
├── index.php       # Redireccionador principal
├── logout.php      # Script de cierre de sesión
└── index.html      # Versión Demo (Frontend Only)
```

---
Desarrollado con ❤️ por [YvnPretty](https://github.com/YvnPretty)

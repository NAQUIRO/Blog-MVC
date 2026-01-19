# Blog MVC

Este es un proyecto sencillo de Blog desarrollado en PHP implementando el patrón de arquitectura Modelo-Vista-Controlador (MVC). Permite la gestión básica de artículos (CRUD).

## Descripción

El proyecto tiene como objetivo demostrar la separación de responsabilidades en una aplicación PHP nativa, organizando el código en controladores, modelos y vistas. Utiliza una base de datos MySQL para la persistencia de datos.

## Características

*   **Listar Artículos**: Visualización de todos los artículos publicados.
*   **Añadir Artículo**: Formulario para crear y guardar nuevos artículos.
*   **Editar Artículo**: Funcionalidad para modificar el contenido de un artículo existente.
*   **Eliminar Artículo**: Opción para borrar artículos de la base de datos.
*   **Conexión a Base de Datos**: Uso de `PDO` para conectar con MySQL.

## Requisitos

*   Servidor Web (Apache/Nginx)
*   PHP 7.4 o superior
*   MySQL / MariaDB

## Instalación y Configuración

1.  **Clonar el repositorio** en tu carpeta de servidor web local (por ejemplo, `htdocs` en XAMPP).
2.  **Base de Datos**:
    *   Iniciar MySQL.
    *   Importar el archivo SQL ubicado en `Model/blogejercicio.sql`. Esto creará la base de datos `blogEjercicio` y las tablas necesarias.
3.  **Configuración**:
    *   Verificar la configuración de conexión en `Model/blogDB.php`.
    *   Por defecto está configurado para `localhost`, usuario `root` y contraseña vacía (configuración típica de XAMPP).

## Estructura del Proyecto

*   `Controller/`: Contiene la lógica de negocio y gestión de peticiones.
*   `Model/`: Contiene las clases de acceso a datos y definicion de objetos (Articulo).
*   `View/`: Contiene las plantillas HTML para la interfaz de usuario.
*   `index.php`: Punto de entrada que redirige al controlador principal.

## Uso

Accede al proyecto desde tu navegador web, por ejemplo:
`http://localhost/ejercicio-blog/`

## Autor

**Antony Jampol Aquino rumualdo**

<?php
// Configurar zona horaria de PHP al inicio del archivo
date_default_timezone_set('America/Lima'); // Para Perú

require_once '../Model/Articulo.php';

if (isset($_POST["addArticulo"])) {
    $fecha = date('Y-m-d H:i:s');
    $articulo = new Articulo($_POST["tituloAdd"], $_POST["descripcionAdd"], $_POST["autorAdd"], $fecha, $_POST["categoriaAdd"]);

    $articulo->insert();

    header('Location: ../Controller/index.php');

} else {
    // carga la cabecera 
    include '../View/cabecera.php';

    // carga el formulario
    include '../View/formAddArticulo.php';

    // carga el pie de pagina
    include '../View/piedepagina.php';
}
<?php
require_once '../Model/Articulo.php';

if (isset($_POST["update"])) {

    $articulo = Articulo::getArticuloById($_POST["idUpdate"]);

    $fecha = date('d-m-Y H:i');
    $articulo->setter($_POST["tituloUpdate"], $_POST["articuloUpdate"], $_POST["autorUpdate"], $fecha, $_POST["categoriaUpdate"]);
    $articulo->update();

    header('Location: ../Controller/index.php');

} else {
    // carga la cabecera 
    include '../View/cabecera.php';

    // carga el formulario
    include '../View/formUpdateArticulo.php';

    // carga el pie de pagina
    include '../View/piedepagina.php';
}
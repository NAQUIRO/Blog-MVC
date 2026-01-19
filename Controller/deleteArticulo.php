<?php
require_once '../Model/Articulo.php';

if (isset($_POST["borrarArticulo"])) {
    $articulo = Articulo::getArticuloById($_POST["deleteId"]);
    $articulo->delete();

    header('Location: ../Controller/index.php');

} else {
    ?>
    <p class="error">Se ha producido un error ser redirigido a la pagina anterior en 5 segundos </p>
    <?php
    header ("refresh:4;url=../Controller/index.php");
}
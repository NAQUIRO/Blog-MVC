<div class="container">
    <section class="form">
    <h2 class="page-header">Añadir Post</h2>
    <form action="../Controller/addArticulo.php" method="post">
        <div class="form-group">
            <h4>Titulo:</h4>
            <input class="form-control" type="text" name="tituloAdd" id="tituloAdd" placeholder="Titulo" autofocus required>
        </div>
        <div class="form-group">
            <h4>Descripción:</h4>
            <textarea class="form-control" name="descripcionAdd" placeholder="Descripcion" required></textarea>
        </div>
        <div class="form-group">
            <h4>Autor:</h4>
            <input class="form-control" type="text" name="autorAdd" placeholder="Autor" required>
        </div>
        <div class="form-group">
            <h4>Categoria:</h4>
            <input class="form-control" type="text" name="categoriaAdd" placeholder="Categoria">
        </div>
        <input class="btn btn-primary" type="submit" name="addArticulo" value="Añadir" >
    </form>
    </section>
</div>
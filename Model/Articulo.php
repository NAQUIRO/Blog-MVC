<?php
/** 
 * Clase blogArticulo, en esta clase tendremos todo lo relacionado con la carga y
 * obtencion de datos de los articulos del post en la base de datos.
 */
require_once 'blogDB.php';

class Articulo {
    //atributos del articulo
    private $id;
    private $titulo;
    private $articulo;
    private $autor;
    private $categoria;
    private $fecha;
    private $fechaEdicion;
    private $editado;

    // Funcion constructor que inicializa los atributos
    public function __construct($titulo, $articulo, $autor, $fecha, $categoria= "", $id = null, $editado = false, $fechaEdicion = null) {
        $this->titulo = $titulo;
        $this->articulo = $articulo;
        $this->autor = $autor;
        $this->categoria = $categoria;
        $this->fecha = $fecha;
        $this->id = $id;
        $this->fechaEdicion = $fechaEdicion;
        $this->editado = $editado;
    }

    // Funcion getId
    public function getId() {
        return $this->id;
    }

    // Funcion getTitulo
    public function getTitulo() {
        return $this->titulo;
    }

    // Funcion getArticulo
    public function getArticulo() {
        return $this->articulo;
    }

    // Funcion getAutor
    public function getAutor() {
        return $this->autor;
    }

    // Funcion getFecha
    public function getFecha() {
        return $this->fecha;
    }

    // Funcion getCategoria
    public function getCategoria() {
        return $this->categoria;
    }

    // Funcion getFechaEdicion
    public function getFechaEdicion() {
        return $this->fechaEdicion;
    }

    // Funcion getEditado
    public function getEditado() {
        return $this->editado;
    }

    // Funcion setter para modificar todos los atributos. En caso de que haya alguno que no se quiera
    // modificar simplemente se deja en blanco con comillas
    public function setter($titulo="", $articulo="", $autor="", $fecha="", $categoria= "") {
        // Si el titulo no esta vacio ni es nulo, se lo asignamos como atributo
        if ($titulo !== "" && $titulo !== null) {
            $this->titulo = $titulo;
        }

        // Si el articulo no está vacio ni es nulo, se lo asignamos como atributo
        if ($articulo !== "" && $articulo !== null) {
            $this->articulo = $articulo;
        }

        // Si el autor no está vacio ni es nulo, se lo asignamos como atributo
        if ($autor !== "" && $autor !== null) {
            $this->autor = $autor;
        }

        // Si la fecha no está vacio ni es nulo, se lo asignamos como atributo
        if ($fecha !== "" && $fecha !== null) {
            $this->fechaEdicion = $fecha;
            $this->editado = true;
        }

        // Si la categoria no esta vacio ni es nulo, se lo asignamos como atributo
        if ($categoria !== "" && $categoria !== null) {
            $this->categoria = $categoria;
        }
    }

    // Funcion insert que inserta un nuevo objeto a la base de datos
    public function insert() {
    $conexion = blogDB::connectDB();
    
    // Usar formato Y-m-d H:i:s directamente
    $insert = "INSERT INTO articulos (titulo, articulo, autor, fecha, categoria) VALUES (\"".
    "$this->titulo\", \"$this->articulo\", \"$this->autor\", \"$this->fecha\",".
    "\"$this->categoria\")";
    
    $conexion->exec($insert);
}

    //Funcion delete que borra el objeto de la base de datos
    public function delete() {
        // Establecemos la conexion con la BD
        $conexion= blogDB::connectDB();

        // Sentencia Delete
        $delete = "DELETE FROM articulos WHERE id =\"".$this->id."\"";

        // Ejecutamos la sentencia
        $conexion->exec($delete);
    }

    // Funcion update que modifica el objeto en la base de datos
    public function update() {
    $conexion = blogDB::connectDB();
    
    // Usar formato Y-m-d H:i:s directamente
    $update = "UPDATE articulos SET titulo = \"$this->titulo\", articulo = \"$this->articulo\", autor = \"$this->autor\", fechaEdicion = \"$this->fechaEdicion\", categoria = \"$this->categoria\", editado = true WHERE id = \"$this->id\"";
    
    $return = $conexion->query($update);
}

    // Funcion estatica de clase para seleccionar todos los articulos de la tabla devuelve un array de objetos
    public static function getArticulos($filtro, $valor) {
    // Establecemos la conexion con la BD
    $conexion= blogDB::connectDB();

    // Si Categoria viene vacia
    if ($filtro !== "" && $valor !== "") {
        // Sentencia Select
        $seleccion = "SELECT * FROM articulos WHERE $filtro LIKE '$valor' ORDER BY fecha DESC";
    } else {
        // Sentencia Select
        $seleccion = "SELECT * FROM articulos ORDER BY fecha DESC";
    }

    // Ejecutamos al Select con query (que devuelve los datos, exec solo devuelve filas afectadas)
    $consulta=$conexion->query($seleccion);

    // Inicializamos $articulos como array antes del while para evitar error
    $articulos = [];

    //Recorremos todos los registros
    while ($registro = $consulta->fetchObject()){
        // Manejar NULL en fechaEdicion
        $fechaEdicion = $registro->fechaEdicion;
        
        // Creamos un nuevo objeto Articulo y lo añadimos al array
        $articulos[] = new Articulo(
            $registro->titulo,
            $registro->articulo,
            $registro->autor,
            $registro->fecha,
            $registro->categoria,
            $registro->id,
            $registro->editado,
            $fechaEdicion);  // Puede ser NULL
    }

    // Devolvemos el array de objetos
    return $articulos;
}

// Funcion estatica de clase para seleccionar un articulo por su ID, devuelve un objetos
public static function getArticuloById($id) {
    // Establecemos la conexion con la BD
    $conexion= blogDB::connectDB();

        // Sentencia Select
        $seleccion = "SELECT id, titulo, articulo, autor, fecha, categoria FROM articulos WHERE id = $id";

        // Ejecutamos la sentencia SELECT
        $consulta=$conexion->query($seleccion);

        // Convertimos en objeto la fila recibida
        $registro = $consulta->fetchObject();

        // Guardamos el articulo
        $articulo = new Articulo(
            $registro->titulo,
            $registro->articulo,
            $registro->autor,
            $registro->fecha,
            $registro->categoria,
            $registro->id);

        // Devolvemos el objeto articulo
        return $articulo;
    }
}
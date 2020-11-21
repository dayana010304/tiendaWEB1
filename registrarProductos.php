
<?php
    include("BaseDatos.php");

    if (isset($_POST["botonEnvio"]))
    {
        $nombre = $_POST["nombre"];
        $autor=$_POST["autor"];
        $precio=$_POST["precio"];
        $descripcion = $_POST ["descripcion"];
        $foto= $_POST["foto"];

        $transaccion = new BaseDatos();

        $consultaSQL="INSERT INTO productos (NombreLibro, Autor, PrecioProducto, Descripción, Foto) VALUES ('$nombre', '$autor', '$precio', '$descripcion', '$foto')";

        $transaccion->agregarDatos($consultaSQL);  
        
        header("location:punto1.php");
    }
?>
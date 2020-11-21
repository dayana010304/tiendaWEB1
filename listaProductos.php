<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Listado</title>
    <link rel="stylesheet" href="./estilos.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
</head>
<body>

    <?php 

        include("BaseDatos.php");
        $transaccion= new BaseDatos();
        $consultaSQL="SELECT * FROM productos WHERE 1";
        $producto=$transaccion->consultarDatos($consultaSQL);
    ?>
    <header>
        <h1>Productos en bodega</h1>
        <hr>
    </header>
    <div class="container">
        <div class="row row-cols-1 row-cols-md-3">
            <?php foreach($producto as $producto):?>
                <div class="col mb-4">
                    <div class="card h-100">
                        <img src="<?php echo($producto["Foto"])?>" class="card-img-top" alt="imagen">
                        <div class="card-body">
                            <h3 class="card-title"><?php echo($producto["NombreLibro"]) ?></h3>
                            <p class="card-text"><?php echo($producto["Descripción"]) ?></p>
                            <a href="eliminarProductos.php?id=<?php echo($producto["IdProducto"])?>" class="btn btn-danger">Eliminar</a>
                            <button type="button" class="btn btn-warning" data-toggle="modal" data-target="#editar<?php echo($producto["IdProducto"])?>">    
                                Editar
                            </button>
                        </div>
                    </div>

                    <div class="modal fade" id="editar<?php echo($producto["IdProducto"])?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLabel">EDICIÓN DE USUARIO</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <div class="modal-body">
                                    <form action="editarProductos.php?id=<?php echo($producto["IdProducto"])?>" method="POST">
                                        <div class="form-group">
                                            <label>nombre:</label>
                                            <input type="text" class="form-control" name="NombreEditar" value="<?php echo($producto["NombreLibro"])?>">
                                        </div>
                                        <div class="form-group">
                                            <label>descripcion:</label>
                                            <textarea class="form-control" rows="3" name="DescripciónEditar"> <?php echo($producto["Descripción"])?>  </textarea>
                                        </div>
                                        <button type="submit" class="btn btn-info" name="botonEditar">Editar</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            <?php endforeach?>
        </div>
    </div>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
</body>
</html>
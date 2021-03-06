<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tienda</title>
    <link rel="stylesheet" href="./estilos.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
</head>
<body>
    <header>
      <p>
        <font face="Brush Script MT" color="#E7E700">
        <h1>REGISTRO</h1>
        </font>
      </p>
        <hr>
    </header>
    <main>
          <div class="container">
              <form action="registrarProductos.php" method="POST">
                <p>
                  <font face="Brush Script MT" color="#E7E700">
                  <h1>ADMINISTRACION DE PRODUCTOS</h1>
                  </font>
                </p>
                
                  <div class="row">
                      <div class="col">
                        <input type="text" class="form-control" placeholder="Nombre del libro" name="nombre" required>
                      </div>
                      <div class="col">
                        <input type="text" class="form-control" placeholder="Autor" name="autor" required>
                      </div>
                  </div>
                <br>
                      <div class="col">
                        <input type="text" class="form-control" placeholder="Precio del libro" name="precio" required>
                      </div>
                
                <div class="row mt-3">
                      <div class="col">
                        <label class="font-weight-bold"></label>
                        <textarea class="form-control" rows="4" placeholder="Descripción" name="descripcion"></textarea>
                      </div>
                </div>

                <div class="row mt-3">
                    <div class="col">
                        <label class="font-weight-bold"></label>
                        <input type="text" class="form-control" placeholder="Foto URL" name="foto">
                    </div>
                </div>
                <br>
                <button type="submit" class="btn btn-primary btn-lg" name="botonEnvio">Registar</button>
                <button type="button" class="btn btn-secondary btn-lg" onclick="location.href='listaProductos.php'">Inventario</button>
            </div>
            </form>
          </div>
    </main>
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script> 
</body>
</html>
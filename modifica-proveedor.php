<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Banca Turing - Modifica cliente</title>
  <link href="css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="icons/font/bootstrap-icons.min.css">
  <style>
    .aire {
      padding: 10px 60px 10px 60px;
    }

    a {
      text-decoration: none;
      color: white;
    }
    body{
      background-color: #faedcd;
    }
  </style>
</head>

<body>
  <?php
    $codProveedor = $_POST["codProveedor"];
    $nombreProveedor = $_POST["nombreProveedor"];
    $telefono = $_POST["telefono"];
    $correo = $_POST["correo"];
    $localidad = $_POST["localidad"];
    $codLocalidades = $_POST["codLocalidades"];
  ?>
  <br>
  <div class="container">

    <div class="card">
      <br>
      <h1 class="text-center">Modifica proveedor</h1>

      <form action="proveedores.php" method="post">
        <input type="hidden" name="accion" value="modificar">
        <input type="hidden" name="dniAntiguo" value="<?= $dni ?>">
        <div class="mb-3 aire">
          <label for="codProveedor" class="form-label">Código</label>
          <input
            type="text"
            class="form-control"
            id="codProveedor"
            name="codProveedor"
            value="<?= $codProveedor ?>"
            size="10">
        </div>

        <div class="mb-3 aire">
          <label for="nombreProveedor" class="form-label">Nombre</label>
          <input
            type="text"
            class="form-control"
            id="nombreProveedor"
            name="nombreProveedor"
            value="<?= $nombreProveedor ?>">
        </div>

        <div class="mb-3 aire">
          <label for="telefono" class="form-label">Télefono</label>
          <input
            type="text"
            class="form-control"
            id="telefono"
            name="telefono"
            value="<?= $telefono ?>">
        </div>

        <div class="mb-3 aire">
          <label for="correo" class="form-label">Correo</label>
          <input
            type="tel"
            class="form-control"
            id="correo"
            name="correo"
            value="<?= $correo ?>">
        </div>

        <div class="mb-3 aire">
          <label for="localidad" class="form-label">Localidad</label>
          <input
            type="tel"
            class="form-control"
            id="localidad"
            name="localidad"
            value="<?= $localidad ?>">
        </div>

        <div class="mb-3 aire">
          <label for="codLocalidades" class="form-label">coddigo Localidad</label>
          <input
            type="tel"
            class="form-control"
            id="codLocalidades"
            name="codLocalidades"
            value="<?= $codLocalidades ?>">
        </div>

        <div class="mb-3 aire">
          <button type="submit" class="btn btn-success">
            Aceptar
          </button>

          <button class="btn btn-danger">
            <a href="proveedores.php">
              Cancelar
            </a>
          </button>
          
        <div>
      </form>

    </div>
  </div>

  <script src="js/bootstrap.bundle.min.js"></script>
</body>

</html>
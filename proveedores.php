<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Empresa OLMO</title>
  <link href="css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="icons/font/bootstrap-icons.min.css">
  <style>
    body{
      background-color: #faedcd;
    }
    .aire {
      padding: 10px 60px 10px 60px;
    }
    #card{
      padding: 20px;
    }

   
  </style>
</head>

<body>

  <?php
    $conexion = mysqli_connect("db", "root", "test", "OLMO");

    if (!isset($_POST["accion"])) {
      $_POST["accion"] = "";
    }

    if ($_POST["accion"] == "eliminar") {
      $borra = "DELETE FROM proveedores WHERE codProveedor=\"$_POST[codProveedor]\"";
      mysqli_query($conexion, $borra);
    }

    if ($_POST["accion"] == "insertar") {
      $inserta = "INSERT INTO proveedores VALUES (\"$_POST[codProveedor]\", \"$_POST[nombreProveedor]\", \"$_POST[telefono]\", \"$_POST[correo]\", \"$_POST[localidad]\", \"$_POST[codLocalidades]\")";
      mysqli_query($conexion, $inserta);
    }

    if ($_POST["accion"] == "modificar") {
      $modifica = "UPDATE proveedores SET codProveedor=\"$_POST[codProveedor]\", nombreProveedor=\"$_POST[nombreProveedor]\", telefono=\"$_POST[telefono]\", correo=\"$_POST[correo]\", localidad=\"$_POST[localidad]\", codLocalidades=\"$_POST[codLocalidades]\" WHERE codProveedor=\"$_POST[codProveedor]\"";
      mysqli_query($conexion, $modifica);
    }

    $consulta = mysqli_query($conexion, "SELECT * FROM proveedores");
  ?>

  <br><br>
  <div class="container">

    <div class="card" id="card">
      <h1 class="text-center">Proveedores</h1>

      <table class="table table-striped">
        <tr>
          <th>Código</th>
          <th>Nombre</th>
          <th>Teléfono</th>
          <th>Correo</th>
          <th>Localidad</th>
          <th>Codigo localidad</th>
          <th></th>
          <th></th>
        </tr>

        <?php
        while ($registro = mysqli_fetch_array($consulta)) {
        ?>
          <tr>
            <td><?= $registro['codProveedor'] ?></td>
            <td><?= $registro['nombreProveedor'] ?></td>
            <td><?= $registro['telefono'] ?></td>
            <td><?= $registro['correo'] ?></td>
            <td><?= $registro['localidad'] ?></td>
            <td><?= $registro['codLocalidades'] ?></td>

            <!-- Botón para eliminar un cliente de la base de datos -->
            <td>
              <form action="proveedores.php" method="post">
                <input type="hidden" name="accion" value="eliminar">
                <input type="hidden" name="codProveedor" value="<?= $registro['codProveedor'] ?>">
                <button type="submit" class="btn btn-danger">
                  <i class="bi bi-trash3"></i>
                  Eliminar
                </button>
              </form>
            </td>

            <!-- Botón para modificar datos de un cliente -->
            <td>
              <form action="modifica-proveedor.php" method="post">
                <input type="hidden" name="codProveedor" value="<?= $registro['codProveedor'] ?>">
                <input type="hidden" name="nombreProveedor" value="<?= $registro['nombreProveedor'] ?>">
                <input type="hidden" name="telefono" value="<?= $registro['telefono'] ?>">
                <input type="hidden" name="correo" value="<?= $registro['correo'] ?>">
                <input type="hidden" name="localidad" value="<?= $registro['localidad'] ?>">
                <input type="hidden" name="codLocalidades" value="<?= $registro['codLocalidades'] ?>">
                <button type="submit" class="btn btn-primary">
                  <i class="bi bi-pencil"></i>
                  Modificar
                </button>
              </form>
            </td>
          </tr>
        <?php
        }
        ?>

        <form action="proveedores.php" method="post">
          <input type="hidden" name="accion" value="insertar">
          <tr>
            <td><input type="text" name="codProveedor" size="10" require></td>
            <td><input type="text" name="nombreProveedor"></td>
            <td><input type="text" name="telefono"></td>
            <td><input type="text" name="correo" size="10"></td>
            <td><input type="text" name="localidad" size="10"></td>
            <td><input type="text" name="codLocalidades" size="10"></td>
            <td>
              <button type="submit" class="btn btn-success">
                <i class="bi bi-floppy"></i>
                Añadir
              </button>
            </td>
            <td></td>
          </tr>
        </form>
      </table>
    </div>
    <br><br>
<a href="index.php">Página principal</a>
  </div>

  <script src="js/bootstrap.bundle.min.js"></script>
</body>

</html>
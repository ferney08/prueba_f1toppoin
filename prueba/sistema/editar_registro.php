<?php
include_once "includes/header.php";
include "../conexion.php";
if (!empty($_POST)) {
  $alert = "";
  if (empty($_POST['names']) || empty($_POST['email']) || empty($_POST['descripcion'] )) {
    $alert = '<div class="alert alert-primary" role="alert">
              Todo los campos son requeridos
            </div>';
  } else {
    $id = $_GET['id'];
    $names = $_POST['names'];
    $email = $_POST['email'];
    $descripcion = $_POST['descripcion']; 
    
    
    $query_update = mysqli_query($conexion, "UPDATE emp set names = '$names', email= '$email', descripcion= '$descripcion' WHERE id = $id");
    if ($query_update) {
      $alert = '<div class="alert alert-primary" role="alert">
              Modificado
            </div>';
    } else {
      $alert = '<div class="alert alert-primary" role="alert">
                Error al Modificar
              </div>';
    }
  }
}

// Validar producto
if (empty($_REQUEST['id'])) {
  header("Location: lista_registros.php");
} else {
  $id_producto = $_REQUEST['id'];
  if (!is_numeric($id_producto)) {
    header("Location: lista_registros.php");
  }
  $query_producto = mysqli_query($conexion, "SELECT p.names, p.email, p.descripcion FROM emp p  WHERE p.id = $id_producto");
  $result_producto = mysqli_num_rows($query_producto);

  if ($result_producto > 0) {
    $data_producto = mysqli_fetch_assoc($query_producto);
  } else {
    header("Location: lista_registros.php");
  }
}



?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <script language="JavaScript">

window.onbeforeunload = preguntarAntesDeSalir;

function preguntarAntesDeSalir(){
return "¿Seguro que quieres salir?";
}

</script>
</head>
<body>
  
</body>
</html>
<!-- Begin Page Content -->
<div class="container-fluid">

  <div class="row">
    <div class="col-lg-6 m-auto">

      <div class="card">
        <div class="card-header bg-primary text-white">
          Modificar producto
        </div>
        <div class="card-body">
          <form action="" method="post">
            <?php echo isset($alert) ? $alert : ''; ?>
           
              <div class="form-group">
              <label for="producto">names</label>
              <input type="text" class="form-control" placeholder="Ingrese nombre" name="names" id="names" value="<?php echo $data_producto['names']; ?>">

            </div>
              </select>
            </div>
            <div class="form-group">
              <label for="producto">email</label>
              <input type="text" class="form-control" placeholder="Ingrese producto " name="email" id="email" value="<?php echo $data_producto['email']; ?>">

            </div>
            <div class="form-group">
              <label for="precio">descripcion</label>
              <input type="text" placeholder="Ingrese nit" class="form-control" name="descripcion" id="descripcion" value="<?php echo $data_producto['descripcion']; ?>">

           
            <input type="submit" value="Actualizar " class="btn btn-primary">
          </form>
        </div>
      </div>
    </div>
  </div>


</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->
<?php include_once "includes/footer.php"; ?>
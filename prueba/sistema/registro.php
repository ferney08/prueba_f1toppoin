<?php include_once "includes/header.php";
  include "../conexion.php";
  if (!empty($_POST)) {
    $alert = "";
    if (empty($_POST['names']) || empty($_POST['email']) || empty($_POST['descripcion'] )) {
      $alert = '<div class="alert alert-danger" role="alert">
                Todo los campos son obligatorios
              </div>';
    } else {
      $names = $_POST['names'];
      $email = $_POST['email'];
      $descripcion = $_POST['descripcion']; 
      $usuario_id = $_SESSION['idUser'];

      $query_insert = mysqli_query($conexion, "INSERT INTO emp(names,email,descripcion) values ('$names', '$email', '$descripcion')");
      if ($query_insert) {
        $alert = '<div class="alert alert-primary" role="alert">
                Producto Registrado 
              </div>';
      } else {
        $alert = '<div class="alert alert-danger" role="alert">
                Error al registrar el producto
              </div>';
      }
    }
  }
  ?>

 <!-- Begin Page Content -->
 <div class="container-fluid">

   <!-- Page Heading -->
   <div class="d-sm-flex align-items-center justify-content-between mb-4">
     <h1 class="h3 mb-0 text-gray-800">Nuevo Registro</h1>
     <a href="lista_registros.php" class="btn btn-primary">Regresar</a>
   </div>

   <!-- Content Row -->
   <div class="row">
     <div class="col-lg-6 m-auto">
       <form action="" method="post" autocomplete="off">
         <?php echo isset($alert) ? $alert : ''; ?>
         <div class="form-group">
           <label>NAMES</label>
           <input type="text" placeholder="Ingrese nombre " name="names" id="names" class="form-control">
         </div>
         <div class="form-group">
           <label for="producto">Email</label>
           <input type="text" placeholder="Ingrese  email" name="email" id="email" class="form-control">
         </div>
         <div class="form-group">
           <label for="precio">descripcion</label>
           <input type="text" placeholder="Ingrese descripcion" class="form-control" name="descripcion" id="descripcion">
         </div>
        
         <input type="submit" value="Guardar " class="btn btn-primary">
       </form>
     </div>
   </div>


 </div>
 <!-- /.container-fluid -->

 </div>
 <!-- End of Main Content -->
 <?php include_once "includes/footer.php"; ?>
<?php include_once "includes/header.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
        
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap-theme.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
    <title>Document</title>
    
</head> 
<body>
<div class="container">
<div class="panel panel-default">
<div class="panel-body">
<br>
<div class="row">
<form action="import.php" method="post" enctype="multipart/form-data" id="import_form">

<div class="col-md-3">
    
<input type="file" name="file" />

</div>
<div class="col-md-5">
<input type="submit" class="btn btn-primary" name="import_data" value="IMPORT">

</div>
<div>
<input type="submit" class="btn btn-primary" name="import_data" value="Volver">
</div>  
</form>
</div>

</div>
</div>
</div>
</div>
    
</body>
</html>
 <?php include_once "includes/footer.php"; ?>
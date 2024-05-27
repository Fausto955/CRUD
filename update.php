<?php
include('connection.php');

$con=connection();

$id= $_GET['id'];

$sql ="SELECT *FROM users WHERE ID='$id'";
$query = mysqli_query($con, $sql);
$row = mysqli_fetch_array($query);
?>


<!DOCTYPE html>
<html lang="en"> 
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="estetica.css">

    <title></title>
</head>
<body>
    <div class="contenedor-update">
        <form action="edit_user.php" method="POST">

        <h1> Crear Usuario</h1>
      
            <input type ="hidden" name="id" value="<?=$row['ID']?>">
          <input type ="text" name="name" placeholder="Nombre" value="<?=$row['Nombre']?>">
          <input type ="text" name="lastname" placeholder="Apellido" value="<?=$row['lastname']?>">
          <input type ="text" name="Username" placeholder="Username" value="<?=$row['Username']?>">
          <input type ="text" name="Password"placeholder="Password"value="<?=$row['Password']?>">
          <input type ="text" name="Email"placeholder="Email"value="<?=$row['Email']?>">
          <input type ="text" name="ciudad"placeholder="ciudad"value="<?=$row['ciudad']?>">

         <input type ="submit" value="Agregar Usuario" value="Actualizar Informacion">
       
     </form>

    </div>
</body>
</html>
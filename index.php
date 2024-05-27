<?php
include('connection.php');

$con=connection();
$sql= "SELECT * FROM users";
$query = mysqli_query($con, $sql);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="estetica.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700;800&family=Rubik+Scribble&display=swap" rel="stylesheet">

    <title>Usuarios Crud</title>
</head>
<body class="bod">
    <div>  
        <form action="insert_user.php" method="POST" >
            <h1 class="datos"> Registro Usuarios</h1>
           

            <div class="ibput">

            <input class="impt" type ="text" name="id" placeholder="ID">
            <input class="impt" type ="text" name="name" placeholder="Nombre">
            <input class="impt" type ="text" name="lastname" placeholder="Apellido" >
            <input class="impt" type ="text"name="Username" placeholder="Username">
            <input class="impt" type ="text" name="Password"placeholder="Password">
            <input class="impt" type ="text" name="Email"placeholder="Email">
            <input class="impt" type ="text" name=" ciudad"placeholder="ciudad">
           
            <input class="impa" type ="submit" value="Agregar Usuario">
            </div>
        </form>

    </div>
    <div >
        <h2 class="datos">Usuarios registrados</h2>
        <table class="tb">
            <thead>
                <tr>
                    <th class="datos_2">ID</th>
                    <br/>
                    <th class="datos_2">Nombre</th>
                    <th class="datos_2">Apellido</th>
                    <th class="datos_2">Username</th>
                    <th class="datos_2">Password</th>
                    <th class="datos_2">Email</th>
                    <th class="datos_2">Ciudad</th>
                </tr>
            </thead>
            <tbody> 

      

            <?php while ($row = mysqli_fetch_array($query)):?>
           <tr>
             <th><?= $row['ID']?></th>
             <th><?= $row['Nombre']?></th> 
             <th><?= $row['lastname']?></th> 
             <th><?= $row['Username']?></th> 
             <th><?= $row['Password']?></th> 
             <th><?= $row['Email']?></th>
             <th><?= $row['ciudad']?></th>
             
             
             <th><a type="button" href="update.php?id=<?=$row['ID']?>" class="boton-edit">Editar</a></th>
             <th><a type="button" href="delete_user.php?id=<?=$row['ID']?>" class="boton-delet">Eliminar</a></th>
    
           </tr>
           <?php endwhile; ?>
            </tbody>
        </table>

    </div>

</body>
</html>

<?php
include('connection.php');
include('estic.css');
$con=connection();

$ID=$_POST['id'];
$name=$_POST['name'];
$lastname=$_POST['lastname'];
$Username=$_POST['Username'];
$Password=$_POST['Password'];
$Email=$_POST['Email'];
$ciudad=$_POST['ciudad'];

$sql ="UPDATE users SET Nombre ='$Nombre', lastname='$lastname', Username='$Username', Password='$Password', Email='$Email', ciudad='$ciudad' WHERE id='$ID'";
$query = mysqli_query($con, $sql);

if($query){
    Header("Location: index.php");
};
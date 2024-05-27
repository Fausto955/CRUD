<?php 
include('connection.php');
$con = connection();
$ID=null;
$name=$_POST['name'];
$lastname=$_POST['lastname'];
$Username=$_POST['Username'];
$Password=$_POST['Password'];
$Email=$_POST['Email'];
$ciudad=$_POST['ciudad'];

$sql ="INSERT INTO users VALUES('$ID ','$name','$lastname','$Username','$Password','$Email','$ciudad')";
$query = mysqli_query($con, $sql);
if ($query){
    Header("Location: index.php");
};
?>
<?php 

$conn=mysqli_connect("localhost","root","","practice");
$id=$_GET['id'];

$query= "delete from person where ID='$id'";
$result=mysqli_query($conn,$query);
if($result){
    header("location:showall.php");
}
else{
    echo "error";
}



?>
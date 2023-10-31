<?php
$conn=mysqli_connect("127.0.0.1","root","","practice");


if(isset($_POST['submit'])){

    $id=$_POST['id'];
    $email=$_POST['email'];
    $phone=$_POST['phone'];
    
    $query= "insert into person values('$id','$email','$phone')";
    $result=mysqli_query($conn,$query); 
    
    if($result){
        header("location:showall.php");
    }
    else{
        echo "error";
    }    
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<form action="" method="post">
 <fieldset style="width:40%;">
  <legend> signup</legend>
     
    ID:
    <input type="text" name="id" placeholder="Input id"><br><br>
    email:
    <input type="text" name="email" placeholder="Input email"><br><br>
    phone:
    <input type="text" name="phone" placeholder="Input phone"><br><br>
 <input type="submit" name="submit" value="submit">


</fieldset>
</form>


    
</body>
</html>
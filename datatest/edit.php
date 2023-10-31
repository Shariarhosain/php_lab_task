<?php
$conn=mysqli_connect("127.0.0.1","root","","practice");
$id=$_GET['id'];
$query="select * from person where ID='$id'";
$result=mysqli_query($conn,$query);
$row=mysqli_fetch_assoc($result);


if(isset($_POST['submit'])){
    $id=$_POST['id'];
    $email=$_POST['email'];
    $phone=$_POST['phone'];
    
    $query="update person set ID='$id',email='$email',phone='$phone' where ID='$id'";
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
    <title>Edir user</title>
</head>
<body>
    <form action="" method="post">
     <fieldset>
        <legend>Edit user</legend>
        ID:
    <input type="text" name="id" placeholder="Input id" value="<?php echo $row['ID']?>"><br><br>
    email:
    <input type="text" name="email" placeholder="Input email" value="<?php echo $row['email']?>"><br><br>
    phone:
    <input type="text" name="phone" placeholder="Input phone" value="<?php echo $row['phone']?>"><br><br>
        <input type="submit" name="submit" value="Edit">
     </fieldset>
    </form>
    
</body>
</html>
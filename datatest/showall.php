<?php

$conn=mysqli_connect("127.0.0.1","root","","practice");


$query = "select * from person";
$result = mysqli_query($conn, $query);


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>All Users</title>
</head>
<body>

<table border="1">
<tr>
    <td>Id</td>
    <td>email</td>
    <td>Phone</td>
    <td colspan="2">Action</td>
</tr>
<?php while($row=mysqli_fetch_assoc($result)):?>
<tr>
    <td><?php echo $row['ID'];?></td>
    <td><?php echo $row['email'];?></td>
    <td><?php echo $row['phone'];?></td>
    <td><a href="edit.php?id=<?=$row['ID']?>">Edit</a></td>
    <td><a href="delet.php?id=<?=$row['ID']?>">delete</a></td>
    </tr>
<?php endwhile;?>
</table>

</body>
</html>

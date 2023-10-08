<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

    <form action="name.php" method="post">


        <label for="name">Name:</label>
        <input type="text" id="name" name="name" value="
        <?php
        $name = $_POST['name'];
        if (isset($name)) {
            echo $name;


        }
        ?>" placeholder="Enter your Name"><br><br>
        <input type="submit" value="Submit">



    </form>


</body>

</html>
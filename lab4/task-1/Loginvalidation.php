<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form action="" method="post">


        <fieldset style="width: 50%">
            <legend>LOGIN</legend><br>
            <label for="name">User Name:</label>
            <input type="text" id="name" name="name" placeholder="Enter your Name">
            <span style="color:red;">
                <?php




                if (isset($_POST['name'])) {
                    $name = $_POST['name'];
                    if ($name == "") {
                        echo "null submission";
                    } else if (strlen($name) < 2) {

                        echo "User Name must contain at least two (2) characters";



                    } else if (preg_match('/^[a-zA-Z0-9._-]+$/', $name)) {

                        echo " ";
                    } else {
                        echo "User Name can contain alpha numeric characters, period, dash or underscore only";
                    }


                } else {
                    echo "Enter a name";
                }

                ?>
            </span>

            <br><br>
            <label for="password">Password: </label>
            <input type="password" id="password" name="password" placeholder="Enter your Name">
            <span>
                <?php

                if (isset($_POST['password'])) {
                    $password = $_POST['password'];

                    $name = $_POST['password'];
                    if ($name == "") {
                        echo "null submission";
                    } else {
                        $pattern = '/^(?=.*[@#$%])[\w@#$%]{8,}$/';

                        if (preg_match($pattern, $password)) {
                            echo " ";
                        } else {
                            echo "Password is not valid";
                        }

                    }

                }
                else{
                    echo "Enter a password";
                }




                ?>
            </span>



            <br><br>
            <hr>
            <input type="checkbox" id="remember" name="remember"> Remember me<br><br>
            <input type="submit" value="Submit"> <a href="#">Forgot Password?</a>


        </fieldset>
    </form>


    </p>
</body>

</html>
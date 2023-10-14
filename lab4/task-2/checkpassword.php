<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>change  Password</title>
</head>

<body>
    <form action="" method="post">


        <fieldset style="width: 50%">
            <legend>Change Password</legend><br>
            <label for="Password">Current Password: </label>
            <input type="Password" id="Password" name="Password" placeholder="Enter your Current Password">

            <?php
            if (isset($_POST['Password'])) {
                $Password = $_POST['Password'];
                if ($Password == "") {
                    echo "null submission";
                } else {
                    echo " ";
                }
            } else {
                echo "Enter a Current Password";
            }

            ?>

            <br><br>
            <label style="
            <?php
            if (isset($_POST['NewPassword'])) {


                $NewPassword = $_POST['NewPassword'];
                $Password = $_POST['Password'];
                if ($NewPassword == $Password) {
                    echo "color:red;";
                } else {
                    echo " color:green;";
                }
            }
            ?>
            
            
            " for="NewPassword">New Password: </label>
            <input type="Password" id="NewPassword" name="NewPassword" placeholder="Enter New  Password">
            <?php

            if (isset($_POST['NewPassword'])) {


                $NewPassword = $_POST['NewPassword'];
                $Password = $_POST['Password'];
                if ($NewPassword == $Password) {
                    echo "New Password should not be same as the Current Password";
                } else {
                    echo " ";
                }
            } else {
                echo "Enter a New Password";
            }

            ?>



            <br><br>
            <label style="
            <?php
            if (isset($_POST['RetypePassword'])) {
                $RetypePassword = $_POST['RetypePassword'];
                $NewPassword = $_POST['NewPassword'];
                if ($RetypePassword == $NewPassword) {
                    echo "color:green;";
                } else {
                    echo "color:red;";
                }
            }

            ?>" for="RetypePassword">Retype New Password: </label>
            <input type="Password" id="RetypePassword" name="RetypePassword" placeholder="Enter New Password">

            <?php

            if (isset($_POST['RetypePassword'])) {
                $RetypePassword = $_POST['RetypePassword'];
                $NewPassword = $_POST['NewPassword'];
                if ($RetypePassword == $NewPassword) {
                    echo " ";
                } else {
                    echo "New Password must match with the Retyped Password";
                }
            } else {
                echo "Enter a Retype Password";
            }

            ?>



            <br><br>
            <hr>

            <input type="submit" value="Submit">


        </fieldset>
    </form>


    </p>
</body>

</html>
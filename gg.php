<?php
if(isset($_POST['ssc']) || isset($_POST['hsc']) || isset($_POST['bsc']) || isset($_POST['msc']) ){
    if(isset($_POST['ssc'])){
        echo $_POST['ssc'];
    }
    if(isset($_POST['hsc'])){
        echo $_POST['hsc'];
    }
    if(isset($_POST['bsc'])){
        echo $_POST['bsc'];
    }
    if(isset($_POST['msc'])){
        echo $_POST['msc'];
    }
}
else{
    echo "Please select at least one degree";
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
    <input type="checkbox" name="ssc" value="SSC"/>SSC 
                        <input type="checkbox" name="hsc" value="HSC"/>HSC 
                        <input type="checkbox" name="bsc" value="BSc"/>BSC
                        <input type="checkbox" name="msc" value="MSc"/>MSC <hr>
                        <input type="submit" name="submit" value="Submit"/>
    </form>
</body>
</html>
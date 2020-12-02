<?php 

    require('connect.php');


    if(isset($_POST['add'])){
        $name = $_POST['name'];
        
        $sqli = "INSERT INTO list (name ) VALUES ('$name')";
        mysqli_query($conn,$sqli) or die('Insert Error');

        header('location: indexdb.php');

    }

?>
        
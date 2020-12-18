<?php 

    require('connect.php');

    if(!empty($_POST['name'])){

    if(isset($_POST['edit'])){

        $name = $_POST['name'];
        
        $id = $_GET['id'];

        $sql = "UPDATE list SET 
                    name = '$name' 
                   
                    WHERE id = '$id' ";

        mysqli_query($conn,$sql) or die('Can Not UPDATE ');

        header('location: indexdb.php');
    
    }
    }else{

        header('location: indexdb.php');
    }
?>
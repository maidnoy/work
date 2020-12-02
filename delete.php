<?php

    include("connect.php");

    $id = $_GET['id'];

    $sql = mysqli_query($conn,"DELETE FROM list WHERE id = $id");

    if($sql){

        header('location: indexdb.php');

    }else{

        echo 'Can Not Delete';
    }


?>
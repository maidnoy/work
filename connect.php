<!DOCTYPE html>
<html>
<head>
  <meta charset='utf-8'>
  <title> Todo List</title>

  <!--internal-->
	<style>

h1{
  
  margin-top: 30px;
  margin-left: 25%;
}
  .tb{
    
    border: 2px solid #ddd;
    border-collapse: collapse;
  
  }

  .tr{
    border-bottom: 2px solid #ddd;
    
  }

  .link{

    color: red;
    margin-right: 7%;
    margin-left: 70%;
   
  }

  .b{
    color: #fff;
    background: #3366FF;
  }

  .li{


    margin-right: 5%;
    margin-left: 90%;
  }
    input[type=checkbox]:checked + label{
  
  text-decoration: line-through;
    }
  
  .la{
    margin-left: 10px;
  }

</style>
   
</head>
<body>

<!--inline-->

    <?php

    //เรียก Localhost มาใช้งาน

    $servername = 'localhost';
    $username = 'root';
    $password = '';
    $dbname = 'todolist';

    //ตรวจว่า สามารถเรียก Localhost ใช้งานได้ไหม
    $conn = mysqli_connect($servername,$username,$password,$dbname);
    mysqli_query($conn,"SET NAMES utf8");
    if(!$conn){
        die('Connection failed : ' .$con->connec_error);
    }

    ?>

</body>
</html>
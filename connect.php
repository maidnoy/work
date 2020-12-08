<!DOCTYPE html>
<html>
<head>
  <meta charset='utf-8'>
  <title> Todo List</title>

  <!--internal-->
	<style>

.f{
  
  margin-top: 30px;
  margin-left: 20%;
}
.cb{
  
  margin-left: 15px;
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
    margin-right: 10px;
    margin-left: 70%;
   
  }

  .link2{

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
    font-size: 20px;
    margin-left: 10px;
  }
  .in{
    width: 40%;
    height: 10%;
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
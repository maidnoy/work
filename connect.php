<!DOCTYPE html>
<html>
<head>
  <meta charset='utf-8'>
  <title> Todo List</title>

  <!--internal-->
	<style>

h1{
  
  margin-top: 30px;
  margin-right: 60px;
  margin-left: 600px;
}

  a{

  color: red;
  
  }

    .a{

        background: #3366FF;
        color: #FFFFFF ;
    }
   
</head>
<body>

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
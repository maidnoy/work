<!DOCTYPE html>
<html>
<head>
  <title></title>

</head>
<body>

    <h1> Todo List </h1>


<form action="" method="post">
<input type="text" name="name" placeholder="New Test" size='50'>
<input type="submit" value="Add" size="5">

<br>
<br>

<?php 

if (!empty($_POST['name'])) {

    ?>

    <input  type='text'  name='name1'  value='<?php echo ($_POST['name']) ?>' >
   
    <?php

    if(empty($_POST['name'])){

      ?>

        <input name='name' value='<?php echo ($_POST['name']) ?>'>

      <?php
      }
    
    ?>
    <br>

 <?php

  } 
?>

<?php 


if (!empty($_POST['name1'])) {

 

    ?>

    <input name='name2'  value='<?php echo ($_POST['name1']) ?>'  >
    <br>

 <?php


  } 


?>

</form>


</body>
</html>
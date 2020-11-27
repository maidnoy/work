<!DOCTYPE html>
<html>
<head>
  <title></title>

</head>
<body>

    <h1> Todo List </h1>
<?php

$z = 'a';
$i = 1 ;

?>

<form action="" method="post">
<input type="text" name="name" placeholder="New Test" size='50'  >
<input type="submit" value="Add" size="5">

<br>
<br>

<?php 

if(!empty($_POST['name'])){


    ?>

    <input name='name<?php echo $i ?>' value='<?php echo ($_POST['name']) ?>'>
    <br>

 <?php
 
}

 for($x=1; $x <= 5; $x++){

if (!empty($_POST['name'.$i])) {


    ?>

    <input value='<?php echo ($_POST['name'.$i]) ?>'  name='name<?php $i++; echo $i ?>' >
    <br>

 <?php

 }
} 

  
?>



</form>


</body>
</html>
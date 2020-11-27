<!DOCTYPE html>
<html>
<head>
  <title></title>

</head>
<body>

    <h1> Todo List </h1>
<?php

$i = 1 ;

?>

<form action="" method="post">
<input type="text" name="name" placeholder="New Test" size='50'  value= ''>
<input type="submit" value="Add" size="5">

<br>
<br>

<?php 

$num = 0;

if(!empty($_POST['name'])){

$_POST['name'.$i] = $_POST['name'];

while(!empty($_POST['name'.$i])){


    ?>

    <input  value='<?php echo ($_POST['name'.$i]) ?>'   name='name<?php $i++; echo $i ?>'  >
    <br>

 <?php

}


}


?>

</form>
</body>
</html>
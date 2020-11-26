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
<input type="text" name="<?php  echo $i  ?>" placeholder="New Test" size='50'>
<input type="submit" value="Add" size="5">

<br>
<br>

<?php 

for($x=1; $x <= 5; $x++){

if (!empty($_POST[$i])) {

  $i++;

    ?>

    <input name='<?php  echo $i;  ?>' value='<?php echo ($_POST[$i]); ?>'>
    <br>

 <?php


  }
} 

  
?>


<?php  

  #test

      $k = 1; $m= 1;
      for($l = 1; $l<=5; $l++){
        echo 'Loop'.$l.'<br>';
        
        echo 'Number'.$k.'<br>';
      
        echo $m+$m ; echo '<br>';
$k++;
      }

?>



</form>


</body>
</html>
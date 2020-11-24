<!DOCTYPE html>
<html>
<head>
  <title></title>

</head>
<body>

    <h1> Todo List </h1>

<form action="" method="post">

  <label for="name"> <input type="text" name="name" placeholder="New Test" size="50"> <input type="submit" value="Add" size="5"> </label>

</form>
      <input type="checkbox" name="checkbox">

      <?php

          echo $_POST["name"];

      ?>
      
</body>
</html>


<!DOCTYPE html>
<html>
<head>
  <meta charset='utf-8'>
  <title> Todo List</title>

</head>
<body>

<h1> Edit Todo List </h1>

<?php

    require('connect.php');


        $id = $_GET['id'];
        $sql = "SELECT * FROM list WHERE id ='".$id."' ";
        $result = $conn->query($sql);
        $row = $result->fetch_assoc();
        

?>
 
 
    <table align='center' >
    <form action='save_edit.php?id=<?php echo $row['id']; ?>'  method='post'>
        <tr>
            <td><label> Item List </label><input type="text" name="name" size='50' value='<?php $row['name']; ?>'></td>
            
            <td><input type="submit" name='edit' value="edit" size="5"></td>
        </tr>
    </form>
    </table>

</body>
</html>
<?php  
    require("connect.php");
    require('form.php');
    
 //สร้างตัวแปรมาเก็บไว้
 $sql = 'SELECT * FROM list';
 $result = $conn->query($sql);

?>

<!DOCTYPE html>
<html>
<head>
  <meta charset='utf-8'>
  <title  align='center'> Todo List</title>

</head>
<body>


<?php
    //สร้างตาราง
?>  

<table  align='center'  >

<tr  >
    <td width = '500' >  </td>
    <td width = '50'  align='center'>  </td>
    <td width = '200'  align='center'>  </td>
</tr>
    <?php while ($row = $result->fetch_assoc()): ?>
<tr   >
    <td><s><input type='checkbox' > <?php echo $row['name'] ?> </s></td>
    <td><a href='edit.php?id=<?php echo $row['id']; ?>'>Edit </td>
    <td><a href='delete.php?id=<?php echo $row['id']; ?>'><svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-trash" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
<path d="M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0V6z"/>
<path fill-rule="evenodd" d="M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1v1zM4.118 4L4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4H4.118zM2.5 3V2h11v1h-11z"/>
</svg></td>

</tr>

<?php endwhile ?>
</table>

</body>
</html>
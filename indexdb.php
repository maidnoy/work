<?php  
    require("connect.php");
  
    
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

<h1 class='f'> Todo List </h1>

<?php

include('form.php');
    
?>  


<table  align='center'  width="60%" class='tb'  >
    <?php while ($row = $result->fetch_assoc()): ?>

    <tr  class='tr' height="70px" >
    <form action='save_edit.php?id=<?php echo $row['id']; ?>'  method='post'>

        <td > 
         <input type='checkbox' name='cbox' class='cb' value='1'> 
         
         <label class='la'  > <input type="text" name="name" class='inp' Maxlength= '20'  value=' <?php echo $row['name'] ?>' style="border: 5px #FFFFFF; width: 500px;" underline> </label>
        </td>

        <td>  <input type="submit" name='edit'  value='edit' size="5"  class='link2'  hide>   <td>  
           
        <a href='delete.php?id=<?php echo $row['id']; ?>'  class='link' onClick="return confirm('You confirm delete');">  
        <svg  width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-trash" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
        <path d="M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0V6z"/>
        <path fill-rule="evenodd" d="M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1v1zM4.118 4L4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4H4.118zM2.5 3V2h11v1h-11z"/>
        </svg> </a>
        
       </td>
       </form>
    </tr> 
   
  
<?php endwhile ?>
</table>


</body>
</html>


<!DOCTYPE html>
<html>
<head>
  <meta charset='utf-8'>
  <title> Todo List</title>

</head>
<body>

<h1 align='center'> Edit Todo List </h1>

<?php

    require('connect.php');


        $id = $_GET['id'];
        $sql = "SELECT * FROM list WHERE id ='".$id."' ";
        $result = $conn->query($sql);
        $row = $result->fetch_assoc();
        

?>

<script type='text/javascript'>

  function fncSubmit(){
    if(document.getElementById('textfield').value == ""){

      alert('Please Input Item');
      return false;
    }
  }

</script>
 
 
    <table align='center' >
    <form action='save_edit.php?id=<?php echo $row['id']; ?>'  method='post' onSubmit='javarscipt : return fncSubmit();'>
        <tr>
            <td><label> Item List </label><input type="text" name="name" size='50'  id='textfield' value='<?php $row['name']; ?>'></td>
            
            <td><input type="submit" name='edit' value="edit" size="5"></td>
        </tr>
    </form>
    </table>

</body>
</html>

<!DOCTYPE html>
<html>
<head>
  <meta charset='utf-8'>
  <title> Todo List</title>

	</style>

</head>
<body>

<script type='text/javascript'>

  function fncSubmit(){
    if(document.getElementById('textfield').value == ""){

      alert('Please Input Item');

      return false;
    }}

</script>

    <form name='frm'  method='post' action='save.php'  align='center' onSubmit='javarscipt : return fncSubmit();'>

    <input type="text" name="name" class='in' Maxlength= '20' placeholder="New Item" id='textfield' >
  
    <input type="submit" name='add' value="add" size="10%" class='b'>

    <br>
    <br>

    </form>

</body>
</html>
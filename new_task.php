<head>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="style.css">

</head>

<h1>Add</h1>

<input type="button" value="Date" onclick="today()">
<script>

function today() {
  var text = document.getElementById('description').innerHTML;
  document.getElementById('description').innerHTML = new Date().toString().substring(0,16) + "\n\n\n"+  text;
}
</script>

<input type="button" value="Appears" name="coin" onclick="playSound('appears')">

<input type="button" value="Task" onclick="document.getElementById('title').value='T ';">
<input type="button" value="Note" onclick="document.getElementById('title').value='N ';">
<input type="button" value="Done" onclick="document.getElementById('title').value='X ';">
<input type="button" value="Migrated" onclick="document.getElementById('title').value='M ';">

 <br><br>

<form action="new_task_action.php" method="post">

Title: <br> <input type="text" size="28" name="title" value="T " id="title"><br><br>

Description: <br><textarea name="description" rows="5" cols="30" id="description"></textarea> <br><br>

<input type="submit" value="OK" name="submit">

<input type="submit" value="Back" name="cancel">

<script src="sounds.js" type="text/javascript"></script>

</form>

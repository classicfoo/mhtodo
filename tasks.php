<?php
    session_start();
    if(!isset($_SESSION['login'])) {
        header('LOCATION:index.php'); die();
    }
?>

 <head>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel='shortcut icon' type='image/x-icon' href='favicon.ico' />
  <script src="search.js"></script>


  <title>Tasks</title>
  

  
 </head>

<h2 style="background-color:steelblue;">mhtodo</h2>

<input type="text" id="search" oninput="filter()" size="15"> | 

<a href="new_task.php">Add</a> |

<?php
if($_GET['mode']==='e' || empty($_GET)){
        echo "<a href='tasks.php?mode=d'>Delete</a> |";
}
else {
        echo "<a href='tasks.php'>List</a> |";
}

?>

<a href="logout.php">Logout</a>

<br><br>

<input type="button" value="Task" onclick="document.getElementById('search').value='T ';filter();">
<input type="button" value="Note" onclick="document.getElementById('search').value='N ';filter();">
<input type="button" value="Migrated" onclick="document.getElementById('search').value='M ';filter();">
<input type="button" value="Done" onclick="document.getElementById('search').value='X ';filter();">
<input type="button" value="All" onclick="document.getElementById('search').value='';filter();">

<br><hr><br>

<?php

$db = new SQLite3('todo.db');

//Get and show all tasks


//$res = $db->query('SELECT * FROM Task ORDER BY Title ');
$res = $db->query('SELECT * FROM Task ORDER BY Id DESC');




while ($row = $res->fetchArray()) {


    Echo("<div class='line'>");

    $id=$row['ID'];
    
    
    if($_GET['mode'] === "d") {
            echo "<a href='delete_multi_task_action.php?id={$id}'>Delete</a> ";
    }

    $count = substr_count($row['Description'], "\n" ) + 1;

    echo "{$row['Title']} ({$count})";
    
    
    if(empty($_GET)) {
            echo " ... ";
            echo "<a href='update_task.php?id={$id}'>edit</a> ";
    }


    echo "<br>";
    echo("</div>");



}




exit();


?>










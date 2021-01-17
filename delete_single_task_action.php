<?php

$db = new SQLite3('todo.db');

$id=$_GET['id'];


$query = "DELETE FROM Task WHERE rowid=$id";

$db->exec($query);


header('Location: tasks.php');
exit;


?>
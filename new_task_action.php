<?php


if($_POST['submit']) {

        $db = new SQLite3('todo.db');
        
        if( isset($_POST["title"])) {
                
                $title = ucwords(strtolower($_POST['title']));
                
                $stmt = $db->prepare("INSERT INTO Task(Title, Description) VALUES (:title, :description)");
                $stmt->bindParam(':title', $title); //toproper
                $stmt->bindParam(':description', $_POST['description']);
                $stmt -> execute();   
                $stmt->close();
        }
        
        header('Location: tasks.php');

} elseif ($_POST['cancel']) {

        header('Location: tasks.php');

} else {

        header('Location: tasks.php');
}

exit;

?>
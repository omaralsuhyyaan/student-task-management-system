<?php

include "db.php";



$id = $_GET["id"];



$result = mysqli_query($conn, "SELECT * FROM tasks WHERE id = $id");

$task = mysqli_fetch_assoc($result);



if ($_SERVER["REQUEST_METHOD"] == "POST") {

$title = $_POST["title"];

$description = $_POST["description"];

$status = $_POST["status"];



mysqli_query($conn, "UPDATE tasks SET title='$title', description='$description', status='$status' WHERE id=$id");



header("Location: index.php");

exit();

}

?>



<!DOCTYPE html>

<html>

<head>

<title>Edit Task</title>

<link rel="stylesheet" href="style.css">

</head>

<body>



<div class="container">

<h1>Edit Task</h1>



<form method="POST">


        <input type="text" name="title" value="<?php echo $task['title']; ?>" required    >


        
        <textarea name="description"><?php echo $task['description']; ?></textarea>


        
        <select name="status">
        
        
        <option <?php if ($task['status'] == 'To Do') echo 'selected'; ?>>To Do</option>
        
        <option <?php if ($task['status'] == 'In Progress') echo 'selected'; ?>>In Progress</option>
        
        <option <?php if ($task['status'] == 'Code Review') echo 'selected'; ?>>Code Review</option>
        
        <option <?php if ($task['status'] == 'Testing') echo 'selected'; ?>>Testing</option>
        
        <option <?php if ($task['status'] == 'Done') echo 'selected'; ?>>Done</option>
        
    </select>


    
    <button type="submit">Update Task</button>
    
</form>



    <a href="index.php">Back</a>


</div>



</body>

</html>
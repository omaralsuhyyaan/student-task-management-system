<?php

include "db.php";


if ($_SERVER["REQUEST_METHOD"] == "POST") {

$title = $_POST["title"];





$description = $_POST["description"];

$status = $_POST["status"];


mysqli_query($conn, "INSERT INTO tasks (title, description, status) VALUES ('$title', '$description', '$status')");


header("Location: index.php");

exit();

}

?>

<!DOCTYPE html>

<html>

<head>

<title>Add Task</title>

<link rel="stylesheet" href="style.css">

</head>

<body>



<div class="container">

<h1>Add New Task</h1>



<form method="POST">

<input type="text" name="title" placeholder="Task title" required>



<textarea name="description" placeholder="Task description"></textarea>



<select name="status">

<option>To Do</option>

<option>In Progress</option>

<option>Code Review</option>

<option>Testing</option>

<option>Done</option>

</select>



<button type="submit">Save Task</button>

</form>



<a href="index.php">Back</a>

</div>



</body>
</html>
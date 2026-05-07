<?php

    include "db.php";

    
    $result = mysqli_query($conn, "SELECT * FROM tasks ORDER BY id DESC");


?>

<!DOCTYPE html>

<html>

<head>

<title>Student Task Management System</title>

<link rel="stylesheet" href="style.css">

</head>

<body>

<div class="container">

<h1>Student Task Management System</h1>

    <a href="add.php" class="btn">Add New Task</a>

    <table>
        <tr>

        <th>ID</th>

        <th>Title</th>

        <th>Description</th>

        <th>Status</th>

        <th>Actions</th>

    </tr>

        <?php while ($task = mysqli_fetch_assoc($result)) { ?>

        <tr>

        <td><?php echo $task['id']; ?></td>

        <td><?php echo $task['title']; ?></td>

        <td><?php echo $task['description']; ?></td>

        <td><?php echo $task['status']; ?></td>

        <td>

        <a href="edit.php?id=<?php echo $task['id']; ?>">Edit</a>

        |

        <a href="delete.php?id=<?php echo $task['id']; ?>">Delete</a>

    </td>

</tr>

<?php } ?>

</table>

</div>

</body>
</html>
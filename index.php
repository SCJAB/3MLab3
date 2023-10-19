<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <title>Home</title>
</head>
    <body> 
        <h3>Users</h3>
        <p>
            <?php
            if (isset($_GET['save-success'])) {
                echo '<script>alert("Successfully saved")</script>';
            }
            if (isset($_GET['update-user'])) {
                echo '<script>alert("Successfully saved")</script>';
            }
            if (isset($_GET['delete.php'])) {
                echo '<script>alert("Successfully saved")</script>';
            }
            ?>
        </p> 
        <div>
            <a href="user/create.php">Add User</a>
        </div>
        <table>
            <thead>
                <th>ID</th>
                <th>Name</th>
                <th>Gender</th>
                <th>Action</th>
            </thead>
            <tbody>
                <?php
                require('php/user/users.php');
                while ($row = $result->fetch_assoc()) {
                ?>
                    <tr>
                        <td><?php echo $row['id']; ?></td>
                        <td>
                            <?php echo $row['first_name']; ?> 
                            <?php echo $row['last_name']; ?>
                        </td>
                        <td class="capitalize"><?php echo $row['gender']; ?></td> 
                        <td>
                            <a href="user/edit.php?id=<?php echo $row['id']; ?>">
                                Edit
                            </a>
                            <a href="php/user/delete.php?id=<?php echo $row['id']; ?>">
                                Delete
                            </a>
                        </td>
                    </tr>
                <?php } ?>
            </tbody>
        </table>
    </body>
</html>
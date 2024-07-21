<?php
include 'config.php';
?>
<!DOCTYPE html>
<html>
<head>
    <title>Employee List</title>
</head>
<body>
    <h2>Employee List</h2>
    <table border="1">
        <thead>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Address</th>
                <th>Salary</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
        <?php
        $sql = "SELECT * FROM Employees";
        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
            while($row = $result->fetch_assoc()) {
                echo "<tr>";
                echo "<td>".$row["id"]."</td>";
                echo "<td>".$row["Name"]."</td>";
                echo "<td>".$row["Address"]."</td>";
                echo "<td>".$row["Salary"]."</td>";
                echo '<td><a href="read.php?id='.$row["id"].'">View</a> | <a href="update.php?id='.$row["id"].'">Update</a> | <a href="delete.php?id='.$row["id"].'">Delete</a></td>';
                echo "</tr>";
            }
        } else {
            echo "<tr><td colspan='5'>No employees found</td></tr>";
        }
        $conn->close();
        ?>
        </tbody>
    </table>
    <a href="create.php">Add Employee</a>
</body>
</html>

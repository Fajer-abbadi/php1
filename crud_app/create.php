<?php
include 'config.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['name'];
    $address = $_POST['address'];
    $salary = $_POST['salary'];

    $sql = "INSERT INTO Employees (Name, Address, Salary) VALUES ('$name', '$address', '$salary')";

    if ($conn->query($sql) === TRUE) {
        echo "New record created successfully";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    $conn->close();
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Create Employee</title>
</head>
<body>
    <h2>Create Employee</h2>
    <form method="post" action="create.php">
        <label for="name">Name:</label>
        <input type="text" id="name" name="name" required><br><br>
        <label for="address">Address:</label>
        <input type="text" id="address" name="address" required><br><br>
        <label for="salary">Salary:</label>
        <input type="text" id="salary" name="salary" required><br><br>
        <input type="submit" value="Submit">
    </form>
</body>
</html>

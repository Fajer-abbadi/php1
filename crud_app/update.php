<?php
include 'config.php';

$id = $_GET['id'];

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['name'];
    $address = $_POST['address'];
    $salary = $_POST['salary'];

    $sql = "UPDATE Employees SET Name='$name', Address='$address', Salary='$salary' WHERE id=$id";

    if ($conn->query($sql) === TRUE) {
        echo "Record updated successfully";
    } else {
        echo "Error updating record: " . $conn->error;
    }

    $conn->close();
} else {
    $sql = "SELECT * FROM Employees WHERE id=$id";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
    } else {
        echo "No employee found";
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Update Employee</title>
</head>
<body>
    <h2>Update Employee</h2>
    <form method="post" action="update.php?id=<?php echo $id; ?>">
        <label for="name">Name:</label>
        <input type="text" id="name" name="name" value="<?php echo $row['Name']; ?>" required><br><br>
        <label for="address">Address:</label>
        <input type="text" id="address" name="address" value="<?php echo $row['Address']; ?>" required><br><br>
        <label for="salary">Salary:</label>
        <input type="text" id="salary" name="salary" value="<?php echo $row['Salary']; ?>" required><br><br>
        <input type="submit" value="Submit">
    </form>
</body>
</html>

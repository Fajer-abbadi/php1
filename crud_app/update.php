<?php
include 'config.php';

$id = $_GET['id'];

if (isset($id)) {
    $sql = "SELECT * FROM Employees WHERE id=$id";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
    } else {
        echo "No employee found";
        exit; 
    }
} else {
    echo "Invalid employee ID";
    exit; 
}

if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["update"])) {
    $id = $_POST["id"];
    $name = $_POST["name"];
    $address = $_POST["address"];
    $salary = $_POST["salary"];

    $update_sql = "UPDATE Employees SET Name='$name', Address='$address', Salary='$salary' WHERE id=$id";
    if ($conn->query($update_sql) === TRUE) {
        echo "Record updated successfully";
    } else {
        echo "Error updating record: " . $conn->error;
    }
    $conn->close();
} else {
    echo '<form method="post" action="update.php?id='.$id.'">
            <input type="hidden" name="id" value="'.$row["id"].'">
            Name: <input type="text" name="name" value="'.$row["Name"].'"><br>
            Address: <input type="text" name="address" value="'.$row["Address"].'"><br>
            Salary: <input type="text" name="salary" value="'.$row["Salary"].'"><br>
            <input type="submit" name="update" value="Update">
          </form>';
}
?>

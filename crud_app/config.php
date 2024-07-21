<?php
$servername = "localhost";
$username = "root";
$password = ""; // اتركها فارغة إذا لم تكن هناك كلمة مرور
$dbname = "fa_form";

// إنشاء الاتصال
$conn = new mysqli($servername, $username, $password, $dbname);

// فحص الاتصال
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>

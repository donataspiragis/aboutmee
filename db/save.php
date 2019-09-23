<?php 

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "about_me";
$charset = "utf8mb4";

if(isset($_POST['submit'])) {
    $name = htmlspecialchars($_POST['name']);
    $phone = htmlspecialchars($_POST['phone']);
    $email = htmlspecialchars($_POST['email']);
    $comment = htmlspecialchars($_POST['comment']);
    $dsn = "mysql:host=".$servername.";dbname=".$dbname.";charset=".$charset;
    $pdo = new PDO($dsn, $username, $password);
    $sql = "INSERT INTO contact (name, phone, email, comment) VALUES ('$name', '$phone', '$email', '$comment')";

    $pdo->exec($sql);
}
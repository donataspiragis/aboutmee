<?php
session_start();
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "about_me";
$charset = "utf8mb4";
$request = json_decode($_POST['data']);
if(!empty($request)) {
    $name = htmlspecialchars($request->name);
    $phone = htmlspecialchars($request->phone);
    $email = htmlspecialchars($request->email);
    $comment = htmlspecialchars($request->comment);
    $dsn = "mysql:host=".$servername.";dbname=".$dbname.";charset=".$charset;
    $pdo = new PDO($dsn, $username, $password);
    $sql = "INSERT INTO contact (name, phone, email, comment) VALUES ('$name', '$phone', '$email', '$comment')";
    $tt = $pdo->exec($sql);
    if(!empty($tt)) {
        $message = (object)[
            status => 'success'
        ];
        echo json_encode($message);
    }
}
session_destroy();
?>




 
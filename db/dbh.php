<?php

// class Dbh {
// private $servername;
// private $username;
// private $password;
// private $dbname;
// private $charset;

// public function connect() {
//     $this->servername = "localhost";
//     $this->username = "root";
//     $this->password = "";
//     $this->dbname = "about_me";
//     $this->charset = "utf8mb4";

//     try {
//         $dsn = "mysql:host=".$this->servername.";dbname=".$this->dbname.";charset=".$this->charset;
//         $pdo = new PDO($dsn, $this->username, $this->password);
//         $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
//         echo "connected";
//      }
//      catch (PDOExeption $e) {
//         echo "Connection failed: " . $e->getMessage();
//      }
// }
// }

    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "about_me";
    $charset = "utf8mb4";

    // try {
        $dsn = "mysql:host=".$servername.";dbname=".$dbname.";charset=".$charset;
        $pdo = new PDO($dsn, $username, $password);
        // $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    //     echo "connected";
    //  }
    //  catch (PDOExeption $e) {
    //     echo "Connection failed: " . $e->getMessage();
    //  }


$servername = "localhost";
$username = "root";
$password = "";
$dbname = "about_me";
$charset = "utf8mb4";

if(isset($_POST['submit'])) {
    $name = $_POST['name'];
    $phone = $_POST['phone'];
    $email = $_POST['email'];
    $comment = $_POST['comment'];
    $dsn = "mysql:host=".$servername.";dbname=".$dbname.";charset=".$charset;
    $pdo = new PDO($dsn, $username, $password);
    $sql = "INSERT INTO contact (name, phone, email, comment) VALUES ('$name', '$phone', '$email', '$comment')";

    $pdo->exec($sql);

}
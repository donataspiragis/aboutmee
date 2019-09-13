<?php 

if(isset($_POST['submit'])) {
    $name = $_POST['name'];
    $phone = $_POST['phone'];
    $email = $_POST['email'];
    $comment = $_POST['comment'];

    // $mailTo = "donatas.piragis@gmail.com";
    // $headers = "From: " . $email;
    // $txt = "You have received email from" . $name. 
    // ".\n\n". $comment;

    // mail($mailTo, $phone, $txt , $headers);
    // header("Location: index.php?mailsend");

    $sql = "INSERT INTO about_me (name, phone, email, comment)
    VALUES ($name, $phone, $email, $comment)";

    if (mysqli_query($conn, $sql)) {
        echo "New record created successfully";
        } else {
            echo "Error: " . $sql . "<br>" . mysqli_error($conn);
        }
 
    $stmt = $pdo->prepare($sql);
    $stmt->execute([$name, $phone, $email, $comment]);
    $user = $stmt->fetch();
}
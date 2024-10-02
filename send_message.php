<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $name = htmlspecialchars($_POST['name']);
    $email = htmlspecialchars($_POST['email']);
    $message = htmlspecialchars($_POST['message']);


    $to = "mdsishuvo@gmail.com.com"; 
    $subject = "New Contact from " . $name;
    $body = "Name: $name\nEmail: $email\nMessage:\n$message";

    
    $headers = "From: $email\r\n";
    $headers .= "Reply-To: $email\r\n";
    if (mail($to, $subject, $body, $headers)) {
        echo "Message sent successfully!";
    } else {
        echo "Message could not be sent.";
    }
} else {

    header("Location: index.html"); 
    exit();
}
?>

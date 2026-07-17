<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
//     echo "<pre>";
// print_r($_POST);
// echo "</pre>";
// exit;
    $name = htmlspecialchars($_POST['name']);
    $number = htmlspecialchars($_POST['number']);
    $multiSelect = htmlspecialchars($_POST['multiSelect']);
    $email = htmlspecialchars($_POST['email']);

    $to = "training@vishakarex.in";
    $subject = "New Course Application";
    $email_body = "
    You have received a new course application.

    Name: $name
    Mobile: $number
    Courses: $multiSelect
    Email: $email";

    $headers = "From: $email\r\n";

    if (mail($to, $subject, $email_body, $headers)) {
        echo "<script>
                alert('Thank you! Your application has been sent.');
                window.location.href = 'designing.html';
              </script>";
    } else {
        echo "<script>
                alert('Error sending application. Please try again later.');
                window.history.back();
              </script>";
    }
}
?>

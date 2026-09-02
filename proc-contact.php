<?php

include('conn.php');

$name = mysqli_real_escape_string($conn, $_POST['name']);
$phone = mysqli_real_escape_string($conn, $_POST['phone']);
$email = mysqli_real_escape_string($conn, $_POST['email']);
$message = mysqli_real_escape_string($conn, $_POST['message']);
// exit;

// echo $name = ($_POST['name']);
// echo $phone = mysqli_real_escape_string($conn , $_POST['phone']);
// echo $email = mysqli_real_escape_string($_POST['email']);
// echo $message = mysqli_real_escape_string($_POST['message']);
// exit;

if (!$name || !$email || !$phone || !$message)
{
    $error = 'Please fill in the form correctly.';
    include('contact.php');
    exit;
}

if (!filter_var($email, FILTER_VALIDATE_EMAIL))
{
    $error = 'Please enter a valid email address.';
    include('contact.php');
    exit;
}

// else {
//     $to = 'muyiwa@aledoy.com';
// $subject = 'Message from contact form';
// $from = "From: noreply@veritygeo.com";

// $content = 'Hi admin, below are the details that were filled'."\n"
//             .'Name: '.$name."\n"
//             .'Email: '.$email."\n"
//             .'Phone: '.$phone."\n"
//             .'Message: '.$message."\n";

// mail($to, $subject, $content, $from);
// include('contact.php');
// // include('thank-you-support.php');
// }

$sql ="insert into contact set name = '$name', email = '$email', phone = '$phone', message = '$message'";
$result = mysqli_query($conn,$sql);
if($result){
    $success = 'Your information has been received. One of our representatives would contact you shortly.';
    $to = 'info@veritygeo.com';
$subject = 'Message from Verity Geo contact form';
$from = "From: noreply@veritygeo.com";

$content = 'Hi admin, below are the details that were filled'."\n"
            .'Name: '.$name."\n"
            .'Email: '.$email."\n"
            .'Phone: '.$phone."\n"
            .'Message: '.$message."\n";

mail($to, $subject, $content, $from);
    include('contact.php');
    exit;
}

else{
    $error = 'Your information was not received. Please fill in all the fields correctly.';
    include('contact.php');
    exit;
}


?>
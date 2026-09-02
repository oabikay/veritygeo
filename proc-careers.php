<?php
require_once('fns.php');
include('conn.php');


$name = mysqli_real_escape_string($conn, $_POST['name']);
$phone = mysqli_real_escape_string($conn, $_POST['phone']);
$email = mysqli_real_escape_string($conn, $_POST['email']);
$education = mysqli_real_escape_string($conn, $_POST['education']);
$institution = mysqli_real_escape_string($conn, $_POST['institution']);
$information = mysqli_real_escape_string($conn, $_POST['information']);
$date_applied = date('Y-m-d');


$curriculum_vitae = $_FILES['curriculum_vitae']['tmp_name'];
$curriculum_vitae_name = $_FILES['curriculum_vitae']['name'];
// exit;

if (!$name || !$phone || !$email || !$education || !$institution) {
    $error = "Please fill in the form correctly. <br>Note that all the fields are compulsory";
    include('careers.php');
    exit;
}

// $email = filter_var($_POST["email"]);
if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    $error = "Please enter a valid email address.";
    include ('careers.php');
    exit;
}



if(validate_file($curriculum_vitae_name)== 'invalid')
{
    $error = "The ID you uploaded is not in the right format. Only JPG or PNG and JPEG files are allowed";
    include('careers.php');
    exit;
}


$ext = get_extension($curriculum_vitae_name);
$curriculum_vitae_name = 'uploads/cv/'.$name.'.'.$ext;
move_uploaded_file($curriculum_vitae,$curriculum_vitae_name);


$sql ="insert into careers set name = '$name', phone = '$phone', email = '$email', education = '$education', institution = '$institution', information = '$information', date_applied = '$date_applied'";
// exit;
$result = mysqli_query($conn,$sql);

if($result){
    $success = 'Your profile has been added into our pool. We shall contact you if you qualify for any of our vacancies.';
    $to = 'info@veritygeo.com';
$subject = 'Message from Verity Geo career form';
$from = "From: noreply@veritygeo.com";

$content = 'Hi admin, below are the details that were filled'."\n"
            .'Name: '.$name."\n"
            .'Email: '.$email."\n"
            .'Phone: '.$phone."\n"
            .'Education: '.$education."\n"
            .'Institution: '.$institution."\n"
            .'Information: '.$information."\n"
            .'Date applied: '.$date_applied."\n";
            
mail($to, $subject, $from, $content);
    include('careers.php');
    exit;
}

else{
    $error = 'Your information was not received. Please fill in all the fields correctly.';
    include('contact.php');
    exit;
}


?>
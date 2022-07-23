<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

//Load Composer's autoloader
require 'vendor/autoload.php';

//Create an instance; passing `true` enables exceptions
$mail = new PHPMailer(true);

try {
    $mail->SMTPDebug = SMTP::DEBUG_SERVER;                      //Enable verbose debug output
    $mail->isSMTP();
    $mail->SMTPOptions = array(
        'ssl' => array(
            'verify_peer' => false,
            'verify_peer_name' => false,
            'allow_self_signed' => true
        )
    );                                        //Send using SMTP
    $mail->Host       = 'smtp.gmail.com';                     //Set the SMTP server to send through

    $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
    $mail->Username   = 'recruitvinaykumar2023@gmail.com';                     //SMTP username
    $mail->Password   = 'yhcsyfeisatqvjkx';                               //SMTP password
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;            //Enable implicit TLS encryption
    $mail->Port       = 465;                                    //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`

    //Recipients
    $mail->setFrom('recruitvinaykumar2023@gmail.com', 'Vinay Kumar');
    $connection = mysqli_connect('localhost', 'root', '', 'career_db');

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $name = $_POST['name'];
        $email = $_POST['email'];
        $mobile = $_POST['mobile'];
        $location = $_POST['destination'];
        $gender = $_POST['gender'];
        $date = $_POST['date'];
        $request = " insert into career_form(name, email, mobile, location, gender, date) values('$name','$email','$mobile','$location','$gender','$date')";
        if (!mysqli_query($connection, $request)) {
            echo "something went wrong";
        }
        $mail->isHTML(true);
        $mail->addAddress($email, $name);     //Add a recipient
        $mail->Body = "Dear" . $name . "\n"
            . "Thank you for contacting us. We will get back to you shortly!" . "\n\n"
            . "You submitted the following details: " . "\nName: " . $name . "\nEmail ID: "
            . $email . "\nMobile Number: " . $mobile . "\nLocation: " . $location . "\nGender: " . $gender .
            "\nDate of Birth: " . $date . "\n"
            . "Regards," . "\n" . "- Vinay Kumar";
        $mail->Subject = 'Counselling data';
        $mail->send();
    } else {
        echo 'something went wrong please try again!';
    }
} catch (Exception $e) {
    echo "Can't send mail";
} ?>
<script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>
<link rel="stylesheet" href="css/style2.css">
</link>
<header class="video-header">
    <video src="images/hurray.mp4" autoplay loop playsinline muted>
    </video>
    <div class="viewport-header">
        <h2 style="font-family: 'Syncopate', sans-serif;
    color: white;
    text-transform: uppercase;
    line-height: 1.2;
    font-size: 3vw;
    text-align: center;">Confirmation email sent
            <br>
            Enjoy
        </h2>
        <br>
        <h2><a href="index.php" style="font-family: 'Syncopate', sans-serif;
    color: white;
    text-transform: uppercase;
    line-height: 1.2;
    font-size: 3vw;
    text-align: center;">Home Page</a></h2>
    </div>

</header>

<div id="circle"></div>
echo exec('iamexecfunction');

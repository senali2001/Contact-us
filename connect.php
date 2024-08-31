<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'phpmailer/vendor/autoload.php'; // Include PHPMailer's autoload file


$full_name = $_POST['full_name'];
$email = $_POST['email'];
$massage = $_POST['massage'];


//database connection
$conn = new mysqli('localhost', 'root', '', 'project');
if ($conn->connect_error) {
    die('Connection Failed  : ' . $conn->connect_error);
} else {
    $stmt = $conn->prepare("insert into contactus(full_name,email,massage)
    values(?,?,?)");

    $stmt->bind_param("sss", $full_name, $email, $massage);
    $stmt->execute();
    $stmt->close();
    $conn->close();
}   
// Sending the email
$mail = new PHPMailer(true);
try {
    //Server settings
    $mail->isSMTP();                                            // Send using SMTP
    $mail->Host       = 'smtp.gmail.com';                       // Set the SMTP server to send through
    $mail->SMTPAuth   = true;                                   // Enable SMTP authentication
    $mail->Username   = 'navodhyasenali@gmail.com';             // SMTP username
    $mail->Password   = 'bekbpldlbnlrlhbv';                     // SMTP password
    $mail->SMTPSecure = 'tls';
    $mail->Port       = 587;


    
    //Recipients
    $mail->setFrom('navodhyasenali@gmail.com', 'DREAM SCAPE');
    $mail->addAddress($email, $full_name);  // Add a recipient
    $mail->addReplyTo('navodhyasenali@gmail.com', 'More Information');

    // Content for User
    $mail->isHTML(true);                                        // Set email format to HTML
    $mail->Subject = 'Contact Us Form Submission Dream Scape Tour';
    $mail->Body    = "Dear $full_name,<br><br>Thank you for contacting us. You will be connected with our agent as soon as possible. Here is a copy of your message:<br><br>$massage";
    $mail->send();


    $mail->clearAddresses();
    $mail->clearAttachments();


    $mail->addAddress('navodhyasenali@gmail.com');
    $mail->isHTML(true);                                        // Set email format to HTML
    $mail->Subject = 'Contact Us Form Submission Dream Scape Tour';
    $mail->Body    = " $full_name want to contact our Support Team ,<br><br> Here is a copy of message:<br><br>$massage";
    
    $mail->send();


    
} catch (Exception $e) {
    echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
}


//sweet text for contact page after massage sent
?>
<!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Contact Us</title>
        <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    </head>
    <body>
        <script>
            Swal.fire({
                icon: 'success',
                title: 'Success!',
                text: '"You will be connected with our agent as soon as possible."',
                confirmButtonText: 'OK'
            }).then((result) => {
                if (result.isConfirmed) {
                    window.location.href = 'index.php'; // Redirect after clicking 'OK' to home page 
                }
            });
        </script>
    </body>
    </html>

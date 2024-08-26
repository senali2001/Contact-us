<?php

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
<?php
}

?>
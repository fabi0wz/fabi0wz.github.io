$name = $_POST['name'];
$email = $_POST['email'];
$company = $_POST['company'];
$message = $_POST['message'];

$to = "fabiomiguel3.10@gmail.com";
$subject = "Form Submission";
$headers = "From: $email" . "\r\n" .
"CC: anotheremail@example.com";

mail($to,$subject,$message,$headers);

echo "Your message has been sent!";

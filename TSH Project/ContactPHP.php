<? php 

$name = $_POST['name'];
$visitor_email = $_POST['email'];
$comment = $_POST['comments'];

$email_from = 'http://localhost/Contact.php';

$email_subject = "New Form Submission";

$email_body = "User Name: $name.\n ".
              "User Email: $visitor_email.\n".
              "User Comment: $comment.\n";

$to = "hadiqamaqsood2000@gmail.com";
$headers = "From: $email_from \r\n";
$headers = "Reply-to: $visitor_email \r\n";

mail($to, $email_subject, $email_body, $headers);
header("Location: Contact.php"); 

?>
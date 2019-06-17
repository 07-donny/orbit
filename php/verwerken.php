<html>
<head>
  <meta http-equiv='refresh' content='0; URL=http://96769.ao-alkmaar.nl/'>
</head>

</html>

<?php
if(isset($_POST['email'])) {
    $email_to = "infomationorbit@gmail.com";
    $email_subject = "Email subject";
    $name = $_POST['naam']; // required
    $email_from = $_POST['email']; // required
    $telefoon = $_POST['telefoon']; // not required

    function clean_string($string) {
    $bad = array("content-type","bcc:","to:","cc:","href");
    return str_replace($bad,"",$string);
    }

    $email_message = "Form details below.\n\n";
    $email_message .= "Naam: ".clean_string($name)."\n";
    $email_message .= "Email: ".clean_string($email_from)."\n";
    $email_message .= "Telefoon: ".clean_string($telefoon)."\n";

    // create email headers
$headers = 'From: '.$email_from."\r\n".
'Reply-To: '.$email_from."\r\n" .
'X-Mailer: PHP/' . phpversion();
mail($email_to, $email_subject, $email_message, $headers);
?>
<!-- include your own success html here -->

<div class="feedback"></div>

<?php
}
?>

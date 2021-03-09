<?php
if(isset($_POST['submit'])){
    // message from
    $project_name = $_POST['project'];
    $user_name = $_POST['name'];
    $user_phone = $_POST['phone'];
    $user_email = $_POST['email'];
    $user_message = $_POST['message'];

    $to = "webdesigner@gopalanenterprises.com";
    $to2 = "seo@gopalanenterprises.com";
    $subject = "brochure Form | Gopalan Florenza Landing Page";
    $message = "<p>Enquiry</p></br>";
    $message .= "<p> name: <strong>". $user_name ."</strong></p></br>";
    $message .= "<p> phone number: <strong>". $user_phone ."</strong></p></br>";
    $message .= "<p> email: <strong>". $user_email ."</strong></p></br>";
    $message .= "<p> Selected project: <strong>". $user_message ."</strong></p></br>";
    $message .= "<p>Thank you,</p>";
    $message .= "<p>". $user_name ."</p>";
    $message .= "<p>" . $user_email . " | " . $user_phone . "</p>";
    
    $headers = "From:" . $user_name . " <" . $user_email . ">\r\n";
    $headers .= "Reply-To: " . $user_email . "\r\n";
    $headers .= "Content-type: text/html\r\n";

    mail($to, $subject, $message, $headers);
    mail($to2, $subject, $message, $headers);

    header("location:https://www.gopalanenterprises.com/brochure/gopalan-florenza-e-brochure.pdf");
}
?>

<!-- 

    florenza
    https://www.gopalanenterprises.com/brochure/gopalan-florenza-e-brochure.pdf

    olympia
    https://www.gopalanenterprises.com/brochure/gopalan-olympia-e-brochure.pdf 

    sanskriti
    https://www.gopalanenterprises.com/brochure/gopalan-sanskriti-e-brochure.pdf

-->

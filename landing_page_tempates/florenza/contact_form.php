<?php
if(isset($_POST['submit_contact'])){
    // message from
    // $project_name = $_POST['project'];
    $user_name = $_POST['name'];
    $user_phone = $_POST['phone'];
    $user_email = $_POST['email'];
    $user_message = $_POST['message'];

    // email to in house
    $to = "webdesigner@gopalanenterprises.com";
    $to2 = "seo@gopalanenterprises.com";
    $subject = "Contact Us Form | Gopalan Florenza Landing Page";
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

    // email to user
    // $u_subject = "Thank You For The Enquiry Of Gopalan " + $project_name;
    // $u_message = "<p>Dear</p> "+ $user_name +"</br>";
    // $u_message .= "<p> Thanks message.</p></br>";
    // $u_message .= "<p style='background-image: url();'> Thanks message.</p></br>";
    // $u_message .= "<p>Thank you,</p>";
    // $u_message .= "<p>". $user_name ."</p>";
    // $u_message .= "<p>" . $user_email . " | " . $user_phone . "</p>";
    
    // $u_headers = "From:" . $user_name . " <" . $user_email . ">\r\n";
    // $u_headers .= "Reply-To: " . $user_email . "\r\n";
    // $u_headers .= "Content-type: text/html\r\n";

    // mail($user_email, $u_subject, $u_message, $u_headers);


    header("location:thank-you.html");
}
?>
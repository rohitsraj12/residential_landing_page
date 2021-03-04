<?php
$msg = '';
if (isset($_POST['email'])) {

    //print_r($_POST);
    /*
        project name is predefined - have to mention it exactly like below
        - Gopalan Lake Front
        - Gopalan Aqua
        - Gopalan Florenza
        - Gopalan Olympia
        - Gopalan Sanskriti
    */ 
    $input = array(
        'f_name' => $_POST['name'],
        'email' => $_POST['email'],
        'phonefax' => $_POST['phone'],
        'subject' => 'Google Lake Front',
		'notes' => 'I am Interested in Lake Front project. Please call me',
        'channel_id' => 'Google',
		'projects' => 'Gopalan Lake Front',
        'alert_rep' => 1,
        'alert_client' => 1,
    );

    $url = "https://cloud.paramantra.com/paramantra/api/data/new/format/json";
    $apikey = 'EZ8aqfk2jzm';
    $action = 'gopalanapi';

    $result = api_exe($url, $apikey, $action, $input);
    //print_r(json_decode($result, 1));
    //die;

        $name = $_POST['name'];
        $email = $_POST['email'];
        $phone = $_POST['phone'];

        // $to = 'webdesigner@gopalanenterprises.com';
        $to1 = "dmmarketing@gopalanenterprises.com";
        $to2 = "presales@gopalanenterprises.com"; 
        $subject = "Enquiry From Lake Front Landing Page";
        $message = "<h4>Lake Front Landing page</h4></br>";
        $message .= "<p>name: <strong>". $name ."</strong></p></br>";
        $message .= "<p>email: <strong>". $email ."</strong></p></br>";
        $message .= "<p>phone number: <strong>". $phone ."</strong></p></br>";
        $message .= "<p>Thank you,</p>";
        $message .= "<p>". $name ."</p>";
        $message .= "<p>" . $email . " | " . $phone . "</p>";
        
        $headers = "From:" . $name . " <" . $email . ">\r\n";
        $headers .= "Reply-To: " . $email . "\r\n";
        $headers .= "Content-type: text/html\r\n";

        // mail($to, $subject, $message, $headers);
        mail($to1, $subject, $message, $headers);
        mail($to2, $subject, $message, $headers);



    if ($result)
    header('Location:thank-you.html');
    
    //    $msg = "Thank you for your enquiry.";

    
} else {
    $data = '';
    $msg = "";
}

function api_exe($url, $apikey, $action, $input) {
    //setting the curl parameters.
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, $url);
    curl_setopt($ch, CURLOPT_HTTPHEADER, array("X-API-KEY: $apikey", "ACTION-ON: $action"));
    curl_setopt($ch, CURLOPT_POSTFIELDS, $input);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
    curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, 300);
    curl_setopt($ch, CURLOPT_USERPWD, $apikey);
    $data = curl_exec($ch);
    curl_close($ch);
    /*
      echo "<br />" . $data;
      die;
     */
    return $data;
}
?>
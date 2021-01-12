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
        'subject' => 'Google Aqua',
		'notes' => 'I am Interested in Aqua project. Please call me',
        'channel_id' => 'Google',
		'projects' => 'Gopalan Aqua',
        'alert_rep' => 1,
        'alert_client' => 1,
    );

    $url = "https://cloud.paramantra.com/paramantra/api/data/new/format/json";
    $apikey = 'EZ8aqfk2jzm';
    $action = 'gopalanapi';

    $result = api_exe($url, $apikey, $action, $input);
    //print_r(json_decode($result, 1));
    //die;

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
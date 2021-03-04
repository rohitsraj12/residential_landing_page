<?php
$input = array (
'channel_id' => 'Google Display Ads',
'rep_id' => 'gopalanadmin',
'subject' => 'Lead from Google Display Ads',
'notes' => 'I am Interested in this project.Please call me',
'projects' => 'Gopalan Lake Front',
'f_name' => 'Donald',
'l_name' => 'Joe',
'email' => 'donaldjoe@gmail.com',
'phonefax' => '9986857414',
'alert_client' => 0,
'alert_rep' => 0);


$url = 'https://cloud.paramantra.com/paramantra/api/data/new/format/json';
$api_key='EZ8aqfk2jzm';
$app_name='gopalanapi';

$ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, $url);
    curl_setopt($ch, CURLOPT_HTTPHEADER, array("X-API-KEY: $api_key ","ACTION-ON: $app_name"));
    curl_setopt($ch, CURLOPT_POSTFIELDS, $input);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
    curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, 300);
    curl_setopt($ch, CURLOPT_USERPWD, $api_key );
    $data_resp = curl_exec($ch);
    curl_close($ch);

echo $data_resp
?>
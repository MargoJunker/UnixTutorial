<?php
$data = array("name" => "droplet", "region" => "ams3", "size" => "512mb", "image" => "ubuntu-14-04-x64");
$data_string = json_encode($data);

$ch = curl_init('https://api.digitalocean.com/v2/droplets');
curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "POST");
curl_setopt($ch, CURLOPT_POSTFIELDS, $data_string);
curl_setopt($ch, CURLOPT_HTTPHEADER, array(
    'Authorization: Bearer 1791767166717167167167169671671671716671',
    'Content-Type: application/json',
    'Content-Length: ' . strlen($data_string))
);

$result = curl_exec($ch);
?>